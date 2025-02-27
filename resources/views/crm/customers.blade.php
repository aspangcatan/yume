@extends('layouts.app')

@section('content')

    <div class="bg-white shadow rounded-lg p-6">
        <h2 class="text-2xl font-bold mb-4">Customers (Listeners & Publishers)</h2>

        <div class="flex justify-between items-center mb-4">
            <input type="text" placeholder="Search customers..." class="border border-gray-300 rounded-lg p-2 w-1/3">
        </div>

        <div class="overflow-x-auto bg-white rounded-lg shadow">
            <table class="w-full table-auto border-collapse border border-gray-200">
                <thead class="bg-gray-100">
                <tr>
                    <th class="border border-gray-200 px-4 py-2 text-left">ID</th>
                    <th class="border border-gray-200 px-4 py-2 text-left">Name</th>
                    <th class="border border-gray-200 px-4 py-2 text-left">Email</th>
                    <th class="border border-gray-200 px-4 py-2 text-left">Phone</th>
                    <th class="border border-gray-200 px-4 py-2 text-left">Type</th>
                </tr>
                </thead>
                <tbody>
                @forelse($customers as $customer)
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-200 px-4 py-2">{{ $customer->id }}</td>
                        <td class="border border-gray-200 px-4 py-2">{{ $customer->name }}</td>
                        <td class="border border-gray-200 px-4 py-2">{{ $customer->email }}</td>
                        <td class="border border-gray-200 px-4 py-2">{{ $customer->phone }}</td>
                        <td class="border border-gray-200 px-4 py-2 w-10">
                            <span class="inline-block px-3 py-1 rounded-full text-sm font-medium
                                        @if($customer->type === 'Publisher') bg-blue-100 text-blue-700
                                        @else bg-yellow-100 text-yellow-700
                                        @endif">
                                        {{ $customer->type }}
                                    </span>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center py-4 text-gray-500">No customers found.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
