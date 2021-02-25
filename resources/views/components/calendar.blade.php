<link href='{{ url('assets/fullcalendar/lib/main.css') }}' rel='stylesheet' />
<script src='{{ url('assets/fullcalendar/lib/main.js') }}'></script>
<script src='{{ url('assets/fullcalendar/lib/locales/es.js') }}'></script>
{{-- red --}}
<style>
    .fc-daygrid-day-number {
        color: red !important;
    }

    .fc-daygrid-day-number:hover {
        text-decoration: none;
        cursor: default;
    }

    .fc-col-header-cell-cushion {
        color: red !important;

    }

    .fc-col-header-cell-cushion:hover {
        text-decoration: none;
        cursor: default;
    }

    .fc-daygrid-event-dot {
        visibility: hidden !important;
    }

    .fc-daygrid-event.fc-daygrid-dot-event.fc-event.fc-event-start.fc-event-end.fc-event-today {
        background-color: red !important;
        color: white !important;
    }

    .fc-daygrid-event.fc-daygrid-dot-event.fc-event.fc-event-start.fc-event-end.fc-event-today:hover {
        text-decoration: none;
        cursor: pointer;
    }

    .fc-daygrid-event.fc-daygrid-dot-event.fc-event.fc-event-start.fc-event-end.fc-event-future {
        background-color: red !important;
        color: white !important;
    }

    .fc-daygrid-event.fc-daygrid-dot-event.fc-event.fc-event-start.fc-event-end.fc-event-future:hover {
        text-decoration: none;
        cursor: pointer;
    }

    .fc-daygrid-event.fc-daygrid-dot-event.fc-event.fc-event-start.fc-event-end.fc-event-past {
        background-color: red !important;
        color: white !important;
    }

    .fc-daygrid-event.fc-daygrid-dot-event.fc-event.fc-event-start.fc-event-end.fc-event-past:hover {
        text-decoration: none;
        cursor: pointer;
    }

    .fc-daygrid-day.fc-day.fc-day-thu.fc-day-today {
        background-color: #ffffff2a !important;
    }

    .fc-list-day-cushion.fc-cell-shaded {
        background-color: black !important;
    }

    .fc-list-day-text {
        color: red !important;
    }

    .fc-list-day-text:hover {
        text-decoration: none;
        cursor: default;
    }

    .fc-list-day-side-text {
        color: red !important;
    }

    .fc-list-day-side-text:hover {
        text-decoration: none;
        cursor: default;
    }

    .fc-list-event.fc-event.fc-event-start.fc-event-end.fc-event-past {
        background-color: red !important;
    }

    .fc-list-event.fc-event.fc-event-start.fc-event-end.fc-event-today.fc-event-future {
        background-color: red !important;
    }

    .fc-list-event.fc-event.fc-event-start.fc-event-end.fc-event-future {
        background-color: red !important;
    }

    .fc-list-event-title {
        font-weight: bold !important;
    }

    .fc-list-event-dot {
        visibility: hidden;
    }

</style>

<div id="calendar"></div>
<div id="calendarModal" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="titulo"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p id="inicioEvento" style="color: black;"></p>
                <p id="finalEvento" style="color: black; margin-top: -17px;"></p>
                <img id="imagen">
                <p id="descripcion" style="color: black;"></p>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            locale: 'es',
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,listYear'
            },
            displayEventTime: false,
            events: [{
                    'id': '1',
                    'title': 'Patata',
                    'start': '2021-02-25 11:22:00',
                    'end': '2021-02-25 11:22:00',
                    'extendedProps': {
                        description: 'hola 1',
                        image: 'imagen',
                        fInici: '2021-02-21 11:22:00',
                        fFinal: '2021-02-21 11:22:00'
                    },
                },
                {
                    'id': '2',
                    'title': 'Patata2 sdfgsdfg',
                    'start': '2021-02-26 11:22:00',
                    'end': '2021-02-26 11:22:00',
                    'extendedProps': {
                        description: 'hola 2',
                        image: 'imagen',
                        fInici: '2021-02-21 11:22:00',
                        fFinal: '2021-02-21 11:22:00'
                    },
                },
                {
                    'id': '4',
                    'title': 'Patata2 sdfgsdfg',
                    'start': '2021-02-21 11:22:00',
                    'end': '2021-02-21 11:22:00',
                    'extendedProps': {
                        description: 'hola 3',
                        image: 'imagen',
                        fInici: '2021-02-21 11:22:00',
                        fFinal: '2021-02-21 11:22:00'
                    },
                }
            ],
            eventClick: function(arg) {
                let event = arg.event;
                console.log(event);
                $('#titulo').text(event.title);
                $('#inicioEvento').text('Inicio evento: ' + event.extendedProps.fInici);
                $('#finalEvento').text('Final evento: ' + event.extendedProps.fFinal);
                $('#descripcion').html(event.extendedProps.description);
                $("#imagen").attr("src",event.extendedProps.image)
                $('#calendarModal').modal();
            },
        });

        calendar.render();
    });

</script>
<style>
    #calendar {
        margin: 0 auto;
    }

</style>
