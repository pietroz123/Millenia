
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
        events: [
            {
                title: '[Corte Masculino] João',
                start: '2019-11-12T14:30:00',
                end: '2019-11-12T15:00:00',
                extendedProps: {
                    status: 'done'
                }
            },
            {
                title: 'Birthday Party',
                start: '2019-11-13T07:00:00',
                backgroundColor: 'green',
                borderColor: 'green',
            }
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
                    console.log('Success');
                    console.log(retorno);

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
        $('button.js-concluir-agendamento').prop('disabled', false);
    });

});