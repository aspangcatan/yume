@extends('layouts.app')

@section('content')
    <div class="bg-white shadow rounded-lg p-6">
        <h2 class="text-2xl font-bold mb-4">Sales Tasks</h2>

        <!-- Task Summary Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
            <div class="p-4 bg-green-100 border-l-4 border-green-500 rounded-lg">
                <h3 class="font-semibold text-green-800">Total Tasks</h3>
                <p class="text-3xl font-bold">{{ $tasks->count() }}</p>
            </div>
            <div class="p-4 bg-yellow-100 border-l-4 border-yellow-500 rounded-lg">
                <h3 class="font-semibold text-yellow-800">Pending Tasks</h3>
                <p class="text-3xl font-bold">{{ $tasks->where('status', 'Pending')->count() }}</p>
            </div>
            <div class="p-4 bg-blue-100 border-l-4 border-blue-500 rounded-lg">
                <h3 class="font-semibold text-blue-800">Completed Tasks</h3>
                <p class="text-3xl font-bold">{{ $tasks->where('status', 'Completed')->count() }}</p>
            </div>
        </div>

        <!-- Add New Task Button -->
        <div class="mb-4 flex justify-end">
            <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg">Add Task</a>
        </div>

        <!-- Tasks Table -->
        <div class="overflow-x-auto bg-white rounded-lg shadow">
            <table class="w-full table-auto border-collapse border border-gray-200">
                <thead class="bg-gray-100">
                <tr>
                    <th class="border border-gray-200 px-4 py-2 text-left">#</th>
                    <th class="border border-gray-200 px-4 py-2 text-left">Title</th>
                    <th class="border border-gray-200 px-4 py-2 text-left">Assigned To</th>
                    <th class="border border-gray-200 px-4 py-2 text-left">Due Date</th>
                    <th class="border border-gray-200 px-4 py-2 text-left">Status</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($tasks as $task)
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-200 px-4 py-2">{{ $loop->iteration }}</td>
                        <td class="border border-gray-200 px-4 py-2">{{ $task['title'] }}</td>
                        <td class="border border-gray-200 px-4 py-2">{{ $task['assigned_to'] }}</td>
                        <td class="border border-gray-200 px-4 py-2">{{ $task['due_date'] }}</td>
                        <td class="border border-gray-200 px-4 py-2">
                                <span class="px-2 py-1 rounded text-white
                                    {{ $task['status'] === 'Completed' ? 'bg-green-500' : 'bg-yellow-500' }}">
                                    {{ $task['status'] }}
                                </span>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center py-4 text-gray-500">No tasks found.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
