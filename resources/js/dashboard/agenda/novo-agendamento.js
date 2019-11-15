$(document).ready(function() {

    // =======================================================
    // SELECTs
    // =======================================================

    $('select#servico').select2({
        placeholder: 'Selecione o serviço',
    });
    $('select#profissional').select2({
        placeholder: 'Selecione o profissional',
    });

    /**
     * Recuperar profissionais de um serviço
     */
    $('#servico').change(function() {
        const id = $(this).val();
        console.log('id: ', id);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/ajax/profissionaisDeUmServico',
            method: 'POST',
            data: {
                id: id
            },
            success: function(retorno) {
                console.log('Success');
                console.log(retorno);
            },
            error: function(retorno) {
                console.log('Error');
                console.log(retorno);
            }
        });
    });
    
});