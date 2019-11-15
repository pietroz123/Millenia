$(document).ready(function() {

    /**
     * Recuperar modal com as informações do profissional
     */
    $('.btn-action.view').click(function() {

        const idProfissional = $(this).attr('data-id-profissional');

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/ajax/modalInformacoesProfissional',
            method: 'POST',
            data: {
                id: idProfissional,
            },
            success: function(retorno) {
                // Atualiza a view
                $('#modal-profissional').html(retorno);
                $('#modal-profissional').modal("show");
            },
            error: function(retorno) {
                console.log('Error');
                console.log(retorno);
            }
        });

    });


});