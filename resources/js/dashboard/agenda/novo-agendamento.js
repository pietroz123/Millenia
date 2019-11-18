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

                    $('html, body').animate({
                        scrollTop: $('#selecionar-profissional').offset().top - 50,
                    });
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

                $('html, body').animate({
                    scrollTop: $('#selecionar-horario').offset().top - 50,
                });
                // console.log('Success');
                // console.log(retorno);
            },
            error: function(retorno) {
                console.log('Error');
                console.log(retorno);
            }
        });
    });

    $(document).on('click', '.btn-opcao-horario', function() {
        $('#tabela-horarios-disponiveis').find('.btn-opcao-horario').removeClass('selecionado');
        $(this).addClass('selecionado');
        
        if ( $('#selecionar-cliente').is(":hidden") ) {

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/api/clientes',
                method: 'GET',
                success: function(retorno) {
    
                    const clientes = retorno.data;
                    
                    // Cria as opções
                    var options = [];
                    for (let i = 0; i < clientes.length; i++) {
                        const cliente = clientes[i];
                        const id = cliente.id;
                        const nome = cliente.nome;
                        options.push(
                            '<option value="'+ id +'">' +
                                '<span>'+ nome +'</span>' +
                            '</option>'
                        );
                    }
        
                    // Cria o select de resposta
                    if (options.length > 0) {
                        $('.clientes-disponiveis').html(
                            '<div class="form-group mt-2">' +
                                '<label for="cliente">Selecionar o cliente</label>' +
                                '<select class="browser-default custom-select" id="cliente" name="cliente">' +
                                    '<option></option>' +
                                    options +
                                '</select>' +
                            '</div>'
                        );
                        $('select#cliente').select2({
                            placeholder: 'Selecione o cliente',
                        });
                        $('#selecionar-cliente').show();

                        $('html, body').animate({
                            scrollTop: $('#selecionar-cliente').offset().top - 50,
                        });
                    }
                    else {
                        $('.clientes-disponiveis').html(
                            '<div class="alert alert-info" role="alert">' +
                                'Não encontramos nenhum cliente.' +
                            '</div>'
                        );
                    }
                },
                error: function(retorno) {
                    console.log('Error');
                    console.log(retorno);
                }
            });

        }

    });
    
    
});