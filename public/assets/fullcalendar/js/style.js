document.addEventListener('DOMContentLoaded', function() {
        var Calendar = FullCalendar.Calendar;
        var Draggable = FullCalendarInteraction.Draggable

        /* initialize the external events
        -----------------------------------------------------------------*/

        var containerEl = document.getElementById('external-events-list');
        new Draggable(containerEl, {
        itemSelector: '.fc-event',
        eventData: function(eventEl) {
            return {
            title: eventEl.innerText.trim()
            }
        }
        });

        /* initialize the calendar
        -----------------------------------------------------------------*/

        var calendarEl = document.getElementById('calendar');
        var calendar = new Calendar(calendarEl, {
        plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
        },
        locale: 'pt-br',
        navLinks: true,
        eventLimit: true,
        selectable: true,
        editable: true,
        droppable: true, // this allows things to be dropped onto the calendar
        drop: function(element) {

            let Event = JSON.parse(element.draggedEl.dataset.event);

            // is the "remove after drop" checkbox checked?
            if (document.getElementById('drop-remove').checked) {
            // if so, remove the element from the "Draggable Events" list
            element.draggedEl.parentNode.removeChild(element.draggedEl);

            Event._method = "DELETE";

            sendEvent(routeEvents('routeFastDeleteEvent'),Event);

            }

            let start = moment(`${element.dateStr} ${Event.start}`).format("YYYY-MM-DD HH:mm:ss");
            let end = moment(`${element.dateStr} ${Event.end}`).format("YYYY-MM-DD HH:mm:ss");

            Event.start = start;
            Event.end = end;

            delete Event.id;

            delete Event._method;

            sendEvent(routeEvents('routeStoreEvent'),Event);

        },

        eventDrop: function(element) {

            let start = moment(element.event.start).format("YYYY-MM-DD HH:mm:ss");
            let end = moment(element.event.end).format("YYYY-MM-DD HH:mm:ss");

            let newEvent = {
                _method: 'PUT',
                id: element.event.id,
                title: element.event.title,
                start: start,
                end: end
            };

            sendEvent(routeEvents('routeUpdateEvent'),newEvent);
        },

        eventClick: function(element) {

            clearMessages("#message");
            formReset("#formEvent");

            $("#modalCalendar").modal('show');
            $("#modalCalendar #titleModal").text('Alterar Evento');
            $("#modalCalendar button.deleteEvent").css('display', 'flex');

            let id = element.event.id;
            $("#modalCalendar input[name='id']").val(id);

            let title = element.event.title;
            $("#modalCalendar input[name='title']").val(title);

            let start = moment(element.event.start).format("DD/MM/YYYY HH:mm:ss");
            $("#modalCalendar input[name='start']").val(start);

            let end = moment(element.event.end).format("DD/MM/YYYY HH:mm:ss");
            $("#modalCalendar input[name='end']").val(end);

            let color = element.event.backgroundColor;
            $("#modalCalendar input[name='color']").val(color);

            let description = element.event.extendedProps.description;
            $("#modalCalendar textarea[name='description']").val(description);
        },

        eventResize: function(element) {
            let start = moment(element.event.start).format("YYYY-MM-DD HH:mm:ss");
            let end = moment(element.event.end).format("YYYY-MM-DD HH:mm:ss");

            let newEvent = {
                _method: 'PUT',
                id: element.event.id,
                title: element.event.title,
                start: start,
                end: end
            };

            sendEvent(routeEvents('routeUpdateEvent'),newEvent);
        },

        select: function(element) {

            clearMessages("#message");
            formReset("#formEvent");

            $("#modalCalendar").modal('show');
            $("#modalCalendar #titleModal").text('Criar Evento');
            $("#modalCalendar button.deleteEvent").css('display', 'none');

            let start = moment(element.start).format("DD/MM/YYYY HH:mm:ss");
            $("#modalCalendar input[name='start']").val(start);

            let end = moment(element.end).format("DD/MM/YYYY HH:mm:ss");
            $("#modalCalendar input[name='end']").val(end);

            let color = element.backgroundColor;
            $("#modalCalendar input[name='color']").val('#3788D8');

            calendar.unselect();
        },
        events: routeEvents('routeLoadEvents'),

    });

    calendar.render();

});

