<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='{{ asset('assets/fullcalendar/packages/core/main.css') }}' rel='stylesheet' />
        <link href='{{ asset('assets/fullcalendar/packages/daygrid/main.css') }}' rel='stylesheet' />
        <link href='{{ asset('assets/fullcalendar/packages/timegrid/main.css') }}' rel='stylesheet' />
        <link href='{{ asset('assets/fullcalendar/packages/list/main.css') }}' rel='stylesheet' />
        <link href='{{ asset('assets/fullcalendar/css/style.css') }}' rel='stylesheet' />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

    @include('fullcalendar.modal-calendar')


  <div id='wrap'>

    <div id='external-events'>
      <h4>Draggable Events</h4>

      <div id='external-events-list'>
        <div class='fc-event'>My Event 1</div>
        <div class='fc-event'>My Event 2</div>
        <div class='fc-event'>My Event 3</div>
        <div class='fc-event'>My Event 4</div>
        <div class='fc-event'>My Event 5</div>
      </div>

      <p>
        <input type='checkbox' id='drop-remove' />
        <label for='drop-remove'>remove after drop</label>
      </p>
    </div>

<div id='calendar'
    data-route-load-events="{{ route('routeLoadEvents') }}"
    data-route-store-event="{{ route('routeStoreEvent') }}"
    data-route-update-event="{{ route('routeUpdateEvent') }}"
    data-route-delete-event="{{ route('routeDeleteEvent') }}">
</div>

    <div style='clear:both'></div>

  </div>

<script src='{{ asset('assets/fullcalendar/packages/core/main.js') }}'></script>
<script src='{{ asset('assets/fullcalendar/packages/interaction/main.js') }}'></script>
<script src='{{ asset('assets/fullcalendar/packages/daygrid/main.js') }}'></script>
<script src='{{ asset('assets/fullcalendar/packages/timegrid/main.js') }}'></script>
<script src='{{ asset('assets/fullcalendar/packages/list/main.js') }}'></script>
<script src='{{ asset('assets/fullcalendar/packages/core/locales-all.js') }}'></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src='{{ asset('assets/fullcalendar/js/script.js') }}'></script>
<script src='{{ asset('assets/fullcalendar/js/style.js') }}'></script>
</body>
</html>
