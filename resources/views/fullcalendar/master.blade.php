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
    @include('fullcalendar.modal-fastEvent')



  <div id='wrap'>

    <div id='external-events'>
      <h4>Eventos Rápidos</h4>

      <div id='external-events-list'>
        @if($fastEvents)
            @foreach ( $fastEvents as $fastEvent )
                <div style="background-color: {{ $fastEvent->color }}; border: none"
                class='fc-event' data-event='{ "id" : "{{ $fastEvent->id }}", "title" : "{{ $fastEvent->title }}", "color" : "{{ $fastEvent->color }}", "start" : "{{ $fastEvent->start }}", "end" : "{{ $fastEvent->end }}" }'>
                    {{ $fastEvent->title }}
                </div>
            @endforeach
        @endif
      </div>

      <p>
        <input type='checkbox' id='drop-remove' />
        <label for='drop-remove'>remover após soltar</label>
        <button class="btn btn-block btn-success" id="newFastEvent">Criar Evento</button>
      </p>
    </div>

<div id='calendar'
    data-route-load-events="{{ route('routeLoadEvents') }}"
    data-route-store-event="{{ route('routeStoreEvent') }}"
    data-route-update-event="{{ route('routeUpdateEvent') }}"
    data-route-delete-event="{{ route('routeDeleteEvent') }}"
    data-route-fast-delete-event="{{ route('routeFastDeleteEvent') }}"
    data-route-fast-update-event="{{ route('routeFastUpdateEvent') }}"
    data-route-fast-store-event="{{ route('routeFastStoreEvent') }}">
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
