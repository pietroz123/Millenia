
var calendarEl;
var calendar;

$(document).ready(function() {

    /**
     * Inicializa o Full Calendar
     */
    calendarEl = document.getElementById('calendar');
    calendar = new FullCalendar.Calendar(calendarEl, {
        locale: 'pt-br',
        header: {
            left: 'prev,next',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek',
        },
        buttonText: {
            today:    'hoje',
            month:    'mês',
            week:     'semana',
            day:      'dia',
            list:     'lista'
        },
        plugins: [
            'dayGrid',
            'timeGrid',
            'list',
        ],
        defaultView: 'timeGridWeek',
        height: 800,
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
        eventTextColor: 'white',
    });
    calendar.render();

});