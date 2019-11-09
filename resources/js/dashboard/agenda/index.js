$(document).ready(function() {

    /**
     * Inicializa o Full Calendar
     */
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        plugins: [ 'dayGrid' ],
    });
    calendar.render();

});