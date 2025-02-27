@extends('layouts.app')

@section('content')

    <div class="bg-white shadow rounded-lg p-6">
        <h2 class="text-2xl font-bold mb-4">Calendar</h2>

        <div class="bg-blue-100 shadow-md rounded-lg border-l-4 border-blue-500 p-4 mb-4">
            <div class="text-blue-900">
                <strong>Calendar Module</strong> - Track upcoming tasks, meetings, and follow-ups.
            </div>
        </div>

        <!-- Add Event Button (Optional - for future extension) -->
        <div class="mb-4">
            <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg">Add Event</a>
        </div>

        <!-- FullCalendar Container -->
        <div id="calendar"></div>
    </div>
    <!-- FullCalendar v3 CSS (jQuery compatible) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" rel="stylesheet">

    <!-- FullCalendar and Moment.js Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#calendar').fullCalendar({
                height: 650, // Set fixed height - Adjust this based on your layout
                contentHeight: 'auto', // You can also try 'auto' if you want it flexible
                aspectRatio: 1.5, // This helps make the calendar less stretched
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                events: @json($events),
                editable: true, // Optional: allows drag & drop
                eventClick: function (event) {
                    alert('Event: ' + event.title);  // Example action when clicking an event
                },
                dayClick: function (date) {
                    alert('Clicked date: ' + date.format()); // Example action when clicking a day
                }
            });
        });
    </script>
@endsection
