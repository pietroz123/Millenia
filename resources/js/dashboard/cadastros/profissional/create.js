$(document).ready(function() {

    // =======================================================
    // SELECTs
    // =======================================================

    $('select#services').select2({
        placeholder: 'Selecione os serviços do profissional',
        tags: true, 
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

});