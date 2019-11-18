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

    $(document).on('click', '.btn-opcao', function() {
        $(this).parent().children('.btn-opcao').removeClass('selecionado');
        $(this).addClass('selecionado');
    });

    /**
     * Recuperar profissionais de um serviço
     */
    $('.js-btn-servico').click(function() {

        const id = $(this).attr('data-id-servico');
        
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

                const profissionais = retorno;

                var buttons = [];
                for (let i = 0; i < profissionais.length; i++) {
                    const profissional = profissionais[i];
                    const id = profissional.id;
                    const nome = profissional.nome;
                    buttons.push(
                        '<button type="button" class="btn btn-light btn-opcao js-btn-profissional" data-id-profissional="'+ id +'">' +
                            '<span>'+ nome +'</span>' +
                        '</button>'
                    );
                }

                $('#selecionar-profissional').show();
                if (buttons.length > 0) {
                    $('#selecionar-profissional .opcoes-agendamento').html(buttons);
                }
                else {
                    $('#selecionar-profissional .opcoes-agendamento').html(
                        '<div class="alert alert-info" role="alert">' +
                            'Não encontramos nenhum profissional com esse serviço.' +
                        '</div>'
                    );
                }
            },
            error: function(retorno) {
                console.log('Error');
                console.log(retorno);
            }
        });
    });

    /**
     * Recuperar horários disponíveis de um profissional
     */
    $(document).on('click', '.js-btn-profissional', function() {

        const id = $(this).attr('data-id-profissional');
        console.log(id);
        
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/ajax/horariosDisponiveisDeUmProfissional',
            method: 'POST',
            data: {
                id: id
            },
            success: function(retorno) {
                $('.horarios-disponiveis').html(retorno);
                $('#selecionar-horario').show();
                // console.log('Success');
                // console.log(retorno);
            },
            error: function(retorno) {
                console.log('Error');
                console.log(retorno);
            }
        });
    });
    
    
});