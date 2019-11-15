
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
        daysOfWeek: [ 1, 2, 3, 4, 5 ], // Segunda - Thursday
        startTime: '10:00', // a start time (10am in this example)
        endTime: '18:00', // an end time (6pm in this example)

        // Cor do texto
        eventTextColor: 'white',

        // Evento de Agendamento
        dateClick: function(info) {
            alert('Clicked on: ' + info.dateStr);
            alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
            alert('Current view: ' + info.view.type);
        },
    });
    calendar.render();

});