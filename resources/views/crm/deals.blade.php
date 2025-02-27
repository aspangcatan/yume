@extends('layouts.app')

@section('content')
    <div class="bg-blue-100 shadow-md rounded-lg border-l-4 border-blue-500 p-6">
        <div class="text-blue-900">
            <strong>Deals</strong> represent opportunities where a potential customer (lead) has progressed further into
            your sales process. In your Yume app, these could be advertisers, partners, or listeners who are negotiating
            packages, subscriptions, or special campaigns.
        </div>
    </div>

    <div class="bg-white shadow rounded-lg p-6 mt-2">
        <h2 class="text-2xl font-bold mb-4">Deals</h2>

        <!-- Search and Add Button -->
        <div class="flex justify-between items-center mb-4">
            <input type="text" placeholder="Search deals..." class="border border-gray-300 rounded-lg p-2 w-1/3">
            <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg">Add Deal</a>
        </div>

        <!-- Deals Table -->
        <div class="overflow-x-auto bg-white rounded-lg shadow">
            <table class="w-full table-auto border-collapse border border-gray-200">
                <thead class="bg-gray-100">
                <tr>
                    <th class="border border-gray-200 px-4 py-2 text-left">ID</th>
                    <th class="border border-gray-200 px-4 py-2 text-left">Deal Name</th>
                    <th class="border border-gray-200 px-4 py-2 text-left">Customer</th>
                    <th class="border border-gray-200 px-4 py-2 text-left">Amount</th>
                    <th class="border border-gray-200 px-4 py-2 text-left">Stage</th>
                    <th class="border border-gray-200 px-4 py-2 text-left">Expected Close Date</th>
                </tr>
                </thead>
                <tbody>
                @foreach($deals as $deal)
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-200 px-4 py-2">{{ $deal->id }}</td>
                        <td class="border border-gray-200 px-4 py-2">{{ $deal->name }}</td>
                        <td class="border border-gray-200 px-4 py-2">{{ $deal->customer }}</td>
                        <td class="border border-gray-200 px-4 py-2">₱{{ number_format($deal->amount, 2) }}</td>
                        <td class="border border-gray-200 px-4 py-2">
                                    <span class="inline-block px-3 py-1 rounded-full text-sm font-medium
                                        @if($deal->stage === 'Prospecting') bg-blue-100 text-blue-700
                                        @elseif($deal->stage === 'Negotiation') bg-yellow-100 text-yellow-700
                                        @elseif($deal->stage === 'Closed Won') bg-green-100 text-green-700
                                        @elseif($deal->stage === 'Closed Lost') bg-red-100 text-red-700
                                        @else bg-gray-100 text-gray-700
                                        @endif">
                                        {{ $deal->stage }}
                                    </span>
                        </td>
                        <td class="border border-gray-200 px-4 py-2">{{ $deal->expected_close_date }}</td>
                    </tr>
                @endforeach

                @if($deals->isEmpty())
                    <tr>
                        <td colspan="6" class="text-center py-4 text-gray-500">No deals found.</td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
