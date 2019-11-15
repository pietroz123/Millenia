$(document).ready(function() {

    /**
     * Recuperar modal com as informações do servico
     */
    $('.btn-action.view').click(function() {

        const idServico = $(this).attr('data-id-servico');

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/ajax/modalInformacoesServico',
            method: 'POST',
            data: {
                id: idServico,
            },
            success: function(retorno) {
                // Atualiza a view
                $('#modal-servico').html(retorno);
                $('#modal-servico').modal("show");
            },
            error: function(retorno) {
                console.log('Error');
                console.log(retorno);
            }
        });

    });


});