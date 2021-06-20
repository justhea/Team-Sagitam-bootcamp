@extends('dashboard.layouts.dashboard-layout')
@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.1/main.min.css">
    <style>
        #calendar-lab > div.fc-header-toolbar.fc-toolbar > div:nth-child(2) > div:nth-child(1) > button.fc--button.fc-button.fc-button-primary,
        #calendar-lab > div.fc-header-toolbar.fc-toolbar > div:nth-child(2) > div:nth-child(2) > button.fc--button.fc-button.fc-button-primary,
        #calendar-lab > div.fc-header-toolbar.fc-toolbar > div:nth-child(2) > button.fc--button.fc-button.fc-button-primary,
        #calendar-lab > div.fc-header-toolbar.fc-toolbar > div:nth-child(1) > div > button {
            display: none !important;
        } .fc-icon {
            line-height: .5 !important;
        }
        .fc-button {
            border-radius: .25em !important;
        }
    </style>
@endpush

@section('content')
<div class="container-fluid">
<div class="card-body" >
        <div class="profile-card">
    <div id="calendar-lab"></div>
</div>
</div>
</div>
@endsection

@push('script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.1/main.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarE1 = null;
            var calendarLab = null;
            var events = [];

            // Read events from DB

            $.ajax({
                url: "{{ route('event.getEvents') }}",
                type: "get",
                success: function (response) {
                    console.log(response.events);
                    events = JSON.parse(response.events);

                    calendarE1 = document.getElementById('calendar-lab');
                    calendarLab = new FullCalendar.Calendar(calendarE1, {
                        headerToolbar: {
                            start: 'title, addEventButton',
                            center: 'dayGridMonth, timeGridWeek, timeGridDay ',
                            end: 'today prev,next',
                        },
                        initialView: 'dayGridMonth',
                        events: events,
                        customButtons: {
                            addEventButton: {
                                text: 'add event...',
                                click: function() {
                                    var startdateStr = prompt('Enter start datetime in YYYY-MM-DD HH:MM:SS format');
                                    var enddateStr = prompt('Enter end datetime in YYYY-MM-DD HH:MM:SS format');
                                    var title = prompt('Enter event title');
                                    /* var sdate = new Date(startdateStr + 'T00:00:00'); // will be in local time
                                    var edate = new Date(enddateStr + 'T00:00:00'); // will be in local time */

                                    calendarLab.addEvent({
                                        title: title,
                                        start: startdateStr,
                                        end: enddateStr
                                    });

                                    events.push({
                                        title: title,
                                        start: startdateStr,
                                        end: enddateStr
                                    });

                                    // Save events from DB

                                    $.ajax({
                                        url: "{{ route('event.addEvent') }}",
                                        type: "post",
                                        data: {
                                            events: JSON.stringify(events)
                                        },
                                        success: function (response) {
                                            console.log(response);
                                        },
                                        error: function(jqXHR, textStatus, errorThrown) {
                                            console.log(textStatus, errorThrown);
                                        }
                                    });

                                    /* 
                                    if (!isNaN(sdate.valueOf()) || !isNaN(edate.valueOf())) { // valid?
                                        calendarLab.addEvent({
                                            title: title,
                                            start: startdateStr,
                                            end: enddateStr
                                        });
                                        alert('Great. Now, update your database...');
                                    } else {
                                        alert('Invalid date.');
                                    } */
                                }
                            }
                        }
                    });
                    calendarLab.render();
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }
            });

            
        });
    </script>
@endpush
