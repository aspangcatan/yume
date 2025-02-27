@extends('layouts.app')

@section('content')
    <div class="bg-white shadow rounded-lg p-6">
        <h2 class="text-2xl font-bold mb-4">Sales Force Automation Dashboard</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="p-4 bg-green-100 border-l-4 border-green-500 rounded-lg">
                <h3 class="font-semibold text-green-800">Total Activities</h3>
                <p class="text-3xl font-bold">{{ $activitiesCount }}</p>
            </div>
            <div class="p-4 bg-yellow-100 border-l-4 border-yellow-500 rounded-lg">
                <h3 class="font-semibold text-yellow-800">Pending Tasks</h3>
                <p class="text-3xl font-bold">{{ $tasksCount }}</p>
            </div>
            <div class="p-4 bg-blue-100 border-l-4 border-blue-500 rounded-lg">
                <h3 class="font-semibold text-blue-800">Upcoming Meetings</h3>
                <p class="text-3xl font-bold">{{ $meetingsCount }}</p>
            </div>
        </div>

        <div class="mt-6">
            <h3 class="text-xl font-semibold">Recent Activities</h3>
            <ul class="mt-2 space-y-2">
                @foreach($recentActivities as $activity)
                    <li class="p-3 bg-gray-100 rounded-lg shadow">
                        <strong>{{ $activity['title'] }}</strong><br>
                        <span class="text-sm text-gray-600">{{ $activity['date'] }} - {{ $activity['type'] }}</span>
                    </li>
                @endforeach
                @if(empty($recentActivities))
                    <li class="text-gray-500">No recent activities found.</li>
                @endif
            </ul>
        </div>
    </div>

@endsection
