
var calendarEl;
var calendar;

$(document).ready(function() {

    /**
     * Inicializa o Full Calendar
     */
    calendarEl = document.getElementById('calendar');
    calendar = new FullCalendar.Calendar(calendarEl, {
        plugins: [ 'dayGrid' ],
        height: 800,
    });
    calendar.render();

});