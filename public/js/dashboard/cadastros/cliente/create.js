$(document).ready(function() {

    // =======================================================
    // SELECTs
    // =======================================================

    $('#profissao').select2({
        placeholder: "Selecione uma profissão",
    });
    $('#cidade').select2({
        placeholder: "Selecione a cidade",
    });
    $('#estado').select2({
        placeholder: "Selecione o estado",
    });

    // =======================================================
    // MÁSCARAS
    // =======================================================

    $('#tel-celular').mask('(00) 00000-0000', {
        placeholder: "(__) _____-____"
    });
    $('#tel-residencial').mask('(00) 0000-0000', {
        placeholder: "(__) ____-____"
    });
    $('#cep').mask('00000-000', {
        placeholder: "_____-___"
    });

    // =======================================================
    // Preenchimento automatico do endereco via CEP
    // =======================================================

    // Via JSON:
    // {
    //     "cep": "01001-000",
    //     "logradouro": "Praça da Sé",
    //     "complemento": "lado ímpar",
    //     "bairro": "Sé",
    //     "localidade": "São Paulo",
    //     "uf": "SP",
    //     "unidade": "",
    //     "ibge": "3550308",
    //     "gia": "1004"
    // }

    // Implementação do delay para o keyup
    function delay(callback, ms) {
        var timer = 0;
        return function() {
            var context = this, args = arguments;
            clearTimeout(timer);
            timer = setTimeout(function () {
            callback.apply(context, args);
            }, ms || 0);
        };
    }

    function limpa_formulario_cep() {
        // Limpa valores do formulário de cep.
        $('#cidade').val('');
        $('#estado').val('');
        $('#rua').val('');
        $('#bairro').val('');
        $('#complemento').val('');
    }

    $(document).on('keyup', '#cep', delay(function() {

        // Nova variável "cep" somente com dígitos.
        var cep = $(this).val().replace(/\D/g, '');

        // Verifica se o CEP não é vazio
        if (cep != "") {

            // Loading enquanto procura o CEP
            $('#cidade').val('...');
            $('#estado').val('...');
            $('#rua').val('...');
            $('#bairro').val('...');
            $('#complemento').val('...');

            //Consulta o webservice viacep.com.br/
            $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                if (!("erro" in dados)) {
                    //Atualiza os campos com os valores da consulta.
                    $("#rua").val(dados.logradouro);
                    $("#cidade").val(dados.localidade);
                    $("#estado").val(dados.uf);
                    $("#bairro").val(dados.bairro);
                    $("#complemento").val(dados.complemento);
                }
                else {
                    //CEP pesquisado não foi encontrado.
                    limpa_formulario_cep();
                    alert("CEP não encontrado.");
                }

            });

        }

    }, 1500));

});