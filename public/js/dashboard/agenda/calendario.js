
var calendarEl;
var calendar;

$(document).ready(function() {

    /**
     * Inicializa o Full Calendar
     */
    calendarEl = document.getElementById('calendar');
    calendar = new FullCalendar.Calendar(calendarEl, {

        // Traduções
        locale: 'pt-br',
        buttonText: {
            today:    'hoje',
            month:    'mês',
            week:     'semana',
            day:      'dia',
            list:     'lista'
        },

        // Configuração da barra de ferramentas
        header: {
            left: 'prev,next',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek',
        },

        // Plugins
        plugins: [
            'interaction',
            'dayGrid',
            'timeGrid',
            'list',
        ],

        // Começa na visualização por semana
        defaultView: 'timeGridWeek',

        // Altura do calendário
        height: 800,

        // Eventos (vem do backend)
        eventSources: [
            {
                url: '/agendamentos',
                type: 'GET',
                error: function(error) {
                    console.log(error);
                },
            },
        ],

        // Horário de Funcionamento
        businessHours: [
            {
                daysOfWeek: [ 1, 2, 3, 4, 5 ],  // Segunda - Sábado
                startTime: '10:00',             // Horário de Início
                endTime: '18:00',               // Horário de Fim
            },
        ],

        nowIndicator: true,

        // Cor do texto
        eventTextColor: 'white',
        eventBorderColor: 'transparent',

        // Espaçamento entre slots de tempo
        slotDuration: '00:15:00', // 15 minutos

        // Limitação de Horários
        minTime: '10:00:00',
        maxTime: '18:00:00',

        slotLabelFormat: {
            hour: 'numeric',
            minute: '2-digit',
            omitZeroMinute: false,
            meridiem: 'short'
        },

        // Evento de Agendamento
        dateClick: function(info) {

            console.log(info);
            
            const dateStr = info.dateStr;
            const dateInfo = dateStr.split('T');
            const date = dateInfo[0];
            const time = dateInfo[1].split('-')[0];

            // Cria o modal
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/ajax/modalAgendamento',
                method: 'POST',
                data: {
                    data: date,
                    horario: time,
                },
                success: function(retorno) {

                    $('.modal-agendamento').show();
                    $('.modal-agendamento').html(retorno);

                    $('select#servico').select2({
                        placeholder: 'Selecione o serviço',
                    });

                },
                error: function(retorno) {
                    console.log('Error');
                    console.log(retorno);
                }
            });

            // alert('Clicked on: ' + info.dateStr);
            // alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
            // alert('Current view: ' + info.view.type);

            $('.modal-agendamento').css({
                left: info.jsEvent.pageX,
                top: info.jsEvent.pageY,
            });
        },
    });
    calendar.render();

    /**
     * Recuperar profissionais de um serviço
     */
    $(document).on('change', 'select#servico', function() {

        const id = $(this).val();
            
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
    
                // Cria as opções
                var options = [];
                for (let i = 0; i < profissionais.length; i++) {
                    const profissional = profissionais[i];
                    const id = profissional.id;
                    const nome = profissional.nome;
                    options.push(
                        '<option value="'+ id +'">' +
                            '<span>'+ nome +'</span>' +
                        '</option>'
                    );
                }
    
                // Cria o select de resposta
                if (options.length > 0) {
                    $('#selecionar-profissional').html(
                        '<div class="form-group mt-2">' +
                            '<label for="profissional">Selecionar o profissional</label>' +
                            '<select class="browser-default custom-select" id="profissional" name="profissional">' +
                                '<option></option>' +
                                options +
                            '</select>' +
                        '</div>'
                    );
                    $('select#profissional').select2({
                        placeholder: 'Selecione o profissional',
                    });
                }
                else {
                    $('#selecionar-profissional').html(
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
     * Ao selecionar um profissional, libera o botão de concluir agendamento
     */
    $(document).on('change', 'select#profissional', function() {

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
                    $(
                        '<div class="form-group mt-2">' +
                            '<label for="cliente">Selecionar o cliente</label>' +
                            '<select class="browser-default custom-select" id="cliente" name="cliente">' +
                                '<option></option>' +
                                options +
                            '</select>' +
                        '</div>'
                    ).insertAfter('#selecionar-profissional');
                    $('select#cliente').select2({
                        placeholder: 'Selecione o cliente',
                    });
                }
                else {
                    $(
                        '<div class="alert alert-info" role="alert">' +
                            'Não encontramos nenhum cliente com esse serviço.' +
                        '</div>'
                    ).insertAfter('#selecionar-profissional');
                }
            },
            error: function(retorno) {
                console.log('Error');
                console.log(retorno);
            }
        });

    });
    
    /**
     * Ao selecionar um cliente, libera o botão de concluir agendamento
     */
    $(document).on('change', 'select#cliente', function() {
        $('button.js-concluir-agendamento').prop('disabled', false);
    });

});

/**
 * Fechar modal de agendamento quando clicar fora
 */
$(document).on('click', '.modal-agendamento', function(e) {
    e.stopPropagation();
});
$(document).click(function() {
    $('.modal-agendamento').hide();
});