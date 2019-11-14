$(document).ready(function() {

    // =======================================================
    // SELECTs
    // =======================================================

    $('#profession').select2({
        placeholder: "Selecione uma profissão",
    });
    $('#city').select2({
        placeholder: "Selecione a cidade",
    });
    $('#state').select2({
        placeholder: "Selecione o estado",
    });

    // =======================================================
    // MÁSCARAS
    // =======================================================

    $('#cpf').mask('000.000.000-00', {
        reverse: true,
        placeholder: "___.___.___-__",
    });
    $('#rg').mask('00.000.000-0', {
        reverse: true,
        placeholder: "__.___.___-_",
    });
    $('#smartphone').mask('(00) 00000-0000', {
        placeholder: "(__) _____-____"
    });
    $('#phone').mask('(00) 0000-0000', {
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
        $('#city').val('');
        $('#state').val('');
        $('#street').val('');
        $('#neighborhood').val('');
        $('#complement').val('');
    }

    $(document).on('keyup', '#cep', delay(function() {

        // Nova variável "cep" somente com dígitos.
        var cep = $(this).val().replace(/\D/g, '');

        // Verifica se o CEP não é vazio
        if (cep != "") {

            // Loading enquanto procura o CEP
            $('#city').val('...');
            $('#state').val('...');
            $('#street').val('...');
            $('#neighborhood').val('...');
            $('#complement').val('...');

            //Consulta o webservice viacep.com.br/
            $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                if (!("erro" in dados)) {
                    //Atualiza os campos com os valores da consulta.
                    $("#street").val(dados.logradouro);
                    $("#city").val(dados.localidade);
                    $("#state").val(dados.uf);
                    $("#neighborhood").val(dados.bairro);
                    $("#complement").val(dados.complemento);
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