$(document).ready(function() {

    /**
     * Recuperar modal com as informações do cliente
     */
    $('.btn-action.view').click(function() {

        const idCliente = $(this).attr('data-id-cliente');

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/ajax/modalInformacoesCliente',
            method: 'POST',
            data: {
                id: idCliente,
            },
            success: function(retorno) {
                // Atualiza a view
                $('#modal-cliente').html(retorno);
                $('#modal-cliente').modal("show");
            },
            error: function(retorno) {
                console.log('Error');
                console.log(retorno);
            }
        });

    });


});