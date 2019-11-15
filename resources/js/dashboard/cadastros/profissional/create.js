$(document).ready(function() {

    // =======================================================
    // SELECTs
    // =======================================================

    $('select#servicos').select2({
        placeholder: 'Selecione os serviços do profissional',
        width: '100%',
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

    $('#cpf').mask('000.000.000-00', {
        reverse: true,
        placeholder: "___.___.___-__",
    });
    $('#rg').mask('00.000.000-0', {
        reverse: true,
        placeholder: "__.___.___-_",
    });
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
    // COLOR PICKER
    // =======================================================

    $("#color-picker").spectrum({
        preferredFormat: "hex",
        showPaletteOnly: true,
        palette: [
            ["#d50000","#e67c73","#f4511e","#f6bf26","#33b679","#0b8043","#039be5","#3f51b5"],
            ["#7986cb","#8e24aa","#616161"],
        ]
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

                    const valCidade = $('#cidade').find("option:contains('"+dados.localidade+"')").val();
                    $('#cidade').val(valCidade).trigger('change.select2');
                    
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