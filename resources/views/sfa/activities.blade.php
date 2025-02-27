@extends('layouts.app')

@section('content')
    <div class="bg-white shadow rounded-lg p-6">
        <h2 class="text-2xl font-bold mb-4">All Activities</h2>
        <ul class="space-y-3">
            @foreach($activities as $activity)
                <li class="p-4 bg-gray-100 rounded-lg">
                    <strong>{{ $activity['title'] }}</strong> - {{ $activity['type'] }} <br>
                    <span class="text-sm text-gray-600">{{ $activity['date'] }}</span>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
