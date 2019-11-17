$(document).ready(function() {

    /**
     * Recuperar modal com as informações do pacote
     */
    $('.btn-action.view').click(function() {

        const idPacote = $(this).attr('data-id-pacote');

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/ajax/modalInformacoesPacote',
            method: 'POST',
            data: {
                id: idPacote,
            },
            success: function(retorno) {
                // Atualiza a view
                $('#modal-pacote').html(retorno);
                $('#modal-pacote').modal("show");
            },
            error: function(retorno) {
                console.log('Error');
                console.log(retorno);
            }
        });

    });


});