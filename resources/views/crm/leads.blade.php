@extends('layouts.app')

@section('content')
    <div class="bg-yellow-100 shadow-md rounded-lg border-l-4 border-yellow-500 p-6">
        <div class="text-yellow-900">
            <strong>Leads</strong> are typically potential customers or people who have shown interest but haven’t fully signed up yet.
            In your Yume app, these could be people who inquired or registered but not yet fully active (pending
            verification or confirmation).
        </div>
    </div>
    <div class="bg-white shadow rounded-lg p-6 mt-2">
        <h2 class="text-2xl font-bold mb-4">Leads</h2>
        <!-- Search and Add Button -->
        <div class="flex justify-between items-center mb-4">
            <input type="text" placeholder="Search leads..." class="border border-gray-300 rounded-lg p-2 w-1/3">
            <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg">Add Lead</a>
        </div>

        <!-- Leads Table -->
        <div class="overflow-x-auto bg-white rounded-lg shadow">
            <table class="w-full table-auto border-collapse border border-gray-200">
                <thead class="bg-gray-100">
                <tr>
                    <th class="border border-gray-200 px-4 py-2 text-left">ID</th>
                    <th class="border border-gray-200 px-4 py-2 text-left">Name</th>
                    <th class="border border-gray-200 px-4 py-2 text-left">Email</th>
                    <th class="border border-gray-200 px-4 py-2 text-left">Phone</th>
                    <th class="border border-gray-200 px-4 py-2 text-left">Source</th>
                    <th class="border border-gray-200 px-4 py-2 text-left">Status</th>
                </tr>
                </thead>
                <tbody>
                @foreach($leads as $lead)
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-200 px-4 py-2">{{ $lead->id }}</td>
                        <td class="border border-gray-200 px-4 py-2">{{ $lead->name }}</td>
                        <td class="border border-gray-200 px-4 py-2">{{ $lead->email }}</td>
                        <td class="border border-gray-200 px-4 py-2">{{ $lead->phone }}</td>
                        <td class="border border-gray-200 px-4 py-2">{{ $lead->source }}</td>
                        <td class="border border-gray-200 px-4 py-2">
                                    <span class="inline-block px-3 py-1 rounded-full text-sm font-medium
                                        @if($lead->status === 'New') bg-blue-100 text-blue-700
                                        @elseif($lead->status === 'Contacted') bg-green-100 text-green-700
                                        @elseif($lead->status === 'Interested') bg-yellow-100 text-yellow-700
                                        @elseif($lead->status === 'Follow-up') bg-purple-100 text-purple-700
                                        @else bg-gray-100 text-gray-700
                                        @endif">
                                        {{ $lead->status }}
                                    </span>
                        </td>
                    </tr>
                @endforeach

                @if($leads->isEmpty())
                    <tr>
                        <td colspan="6" class="text-center py-4 text-gray-500">No leads found.</td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
