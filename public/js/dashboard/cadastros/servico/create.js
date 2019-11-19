$(document).ready(function() {

    // =======================================================
    // MASCARAS
    // =======================================================

    $('#preco').mask('000000000000000.00', {reverse: true});
    $('#comissao').mask('00.0', {reverse: true});

    // =======================================================
    // SELECTs
    // =======================================================

    $('select#tempo-execucao').select2({
        placeholder: "Tempo para execução do serviço",
    })

});