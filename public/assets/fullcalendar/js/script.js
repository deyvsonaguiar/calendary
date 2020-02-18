$(function() {

    $('.date-time').mask('00/00/0000 00:00:00');
    $('.time').mask('00:00:00');


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});

$("#newFastEvent").click(function () {

    clearMessages(".message");
    formReset("#formFastEvent");

    $("#modalFastEvent").modal('show');
    $("#modalFastEvent #titleModal").text('Criar Evento Rápido');
    $("#modalFastEvent button.deleteFastEvent").css('display', 'none');

});

$(".deleteEvent").click(function () {

    let id = $("#modalCalendar input[name='id']").val();

    let event = {
        id: id,
        _method: 'DELETE'
    };

    let route = routeEvents('routeDeleteEvent');

    sendEvent(route, event);


});

$(".saveEvent").click(function () {

    let id = $("#modalCalendar input[name='id']").val();

    let title = $("#modalCalendar input[name='title']").val();;

    let start = moment($("#modalCalendar input[name='start']").val(), "DD/MM/YYYY HH:mm:ss").format("YYYY-MM-DD HH:mm:ss");

    let end = moment($("#modalCalendar input[name='end']").val(), "DD/MM/YYYY HH:mm:ss").format("YYYY-MM-DD HH:mm:ss");

    let color = $("#modalCalendar input[name='color']").val();

    let description = $("#modalCalendar textarea[name='description']").val();

    let event = {
        title: title,
        start: start,
        end: end,
        color: color,
        description: description,
    };

    let route;

    if(id == '') {
        route = routeEvents('routeStoreEvent');
    } else {
        route = routeEvents('routeUpdateEvent');
        event.id = id;
        event._method = 'PUT';
    }

    sendEvent(route,event);

});

});

function sendEvent(route, data_) {

        $.ajax({
            url: route,
            data: data_,
            method: 'POST',
            dataType: 'json',
            success: function (json) {
                if(json) {
                    location.reload();
                }
            },
            error: function (json) {

                let responseJSON = json.responseJSON.errors;

                $(".message").html(loadErrors(responseJSON));
            }
        });


}

function routeEvents(route) {
    return document.getElementById('calendar').dataset[route];
}

function formReset(form) {
    $(form)[0].reset();
}

function loadErrors(response) {
    let boxAlert = `<div class="alert alert-danger">`;

    for(let fields in response) {
        boxAlert += `<span>${response[fields]}</span></br>`;
    }

    boxAlert += `</div>`;

    return boxAlert.replace(/\,/g,"<br/>");
}

function clearMessages(element) {
    $(element).text('');
}

$(".saveFastEvent").click(function () {

    let id = $("#modalFastEvent input[name='id']").val();

    let title = $("#modalFastEvent input[name='title']").val();;

    let start = $("#modalFastEvent input[name='start']").val();

    let end = $("#modalFastEvent input[name='end']").val();

    let color = $("#modalFastEvent input[name='color']").val();

    let event = {
        title: title,
        start: start,
        end: end,
        color: color,
    };

    let route;

    if(id == '') {
        route = routeEvents('routeFastStoreEvent');
    } else {
        route = routeEvents('routeFastUpdateEvent');
        event.id = id;
        event._method = 'PUT';
    }

    sendEvent(route,event);

});

$(".fc-event").click(function () {

    clearMessages(".message");
    formReset("#formFastEvent");

    let Event = JSON.parse($(this).attr('data-event'));

    $("#modalFastEvent").modal('show');
    $("#modalFastEvent #titleModal").text('Alterar Evento Rápido');
    $("#modalFastEvent button.deleteFastEvent").css('display', 'flex');


    $("#modalFastEvent input[name='id']").val(Event.id);

    $("#modalFastEvent input[name='title']").val(Event.title);

    $("#modalFastEvent input[name='start']").val(Event.start);

    $("#modalFastEvent input[name='end']").val(Event.end);

    $("#modalFastEvent input[name='color']").val(Event.color);

});

$(".deleteFastEvent").click(function () {

    let id = $("#modalFastEvent input[name='id']").val();

    let event = {
        id: id,
        _method: 'DELETE'
    };

    let route = routeEvents('routeFastDeleteEvent');

    sendEvent(route, event);


});
