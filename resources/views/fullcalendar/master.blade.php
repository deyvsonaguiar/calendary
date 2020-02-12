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

</head>
<body>
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

<div id='calendar' data-route-load-events="{{ route('routeLoadEvents') }}"></div>

    <div style='clear:both'></div>

  </div>

<script src='{{ asset('assets/fullcalendar/packages/core/main.js') }}'></script>
<script src='{{ asset('assets/fullcalendar/packages/interaction/main.js') }}'></script>
<script src='{{ asset('assets/fullcalendar/packages/daygrid/main.js') }}'></script>
<script src='{{ asset('assets/fullcalendar/packages/timegrid/main.js') }}'></script>
<script src='{{ asset('assets/fullcalendar/packages/list/main.js') }}'></script>
<script src='{{ asset('assets/fullcalendar/packages/core/locales-all.js') }}'></script>
<script src='{{ asset('assets/fullcalendar/js/script.js') }}'></script>
<script src='{{ asset('assets/fullcalendar/js/style.js') }}'></script>
</body>
</html>
