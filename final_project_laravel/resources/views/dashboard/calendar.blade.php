@extends('dashboard.layouts.dashboard-layout')
@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.1/main.min.css">
    <style>
    .fc--button {​​​
        display: none !important;
    }​​​
    .fc-icon {​​​
        line-height: .5 !important;
    }​​​
    .fc-button {​​​
        border-radius: .25em !important;
    }​​​
</style>

@endpush


@section('content')

    <div id="calendar-lab"></div>

@endsection

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.1/main.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarE1 = document.getElementById('calendar-lab');
            var calendarLab = new FullCalendar.Calendar(calendarE1, {
                headerToolbar: {
                    start: 'title, addEventButton',
                    center: 'dayGridMonth, timeGridWeek, timeGridDay ',
                    end: 'today prev,next',
                },
                initialView: 'dayGridMonth',
                events: [
                    {
                        id: '1',
                        title: 'Animajor',
                        start: '2021-06-01 08:00:00',
                        end: '2021-06-01 10:00:00',
                    },
                    {
                        id: '2',
                        title: 'SEA TI10 Qualifier',
                        start: '2021-06-15',
                        end: '2021-06-20'
                    },
                    {
                        id: '3',
                        title: 'Exam',
                        start: '2021-06-01 11:00:00',
                        end: '2021-06-01 12:00:00',
                    },
                    /* ... */
                ],
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

                            // call api to save in database
                            // via ajax

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
        });
    </script>
@endpush
