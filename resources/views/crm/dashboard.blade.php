@extends('layouts.app')

@section('content')
    <div class="bg-white shadow-md rounded-lg p-6">
        <div class="md:ml-2">
            <h2 class="text-2xl font-bold mb-4">CRM Dashboard</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- Example Widget 1 -->
                <div class="bg-blue-500 text-white rounded-lg p-4 flex items-center">
                    <i class="fas fa-users text-3xl"></i>
                    <div class="ml-4">
                        <p class="text-lg">Total Customers</p>
                        <p class="text-2xl font-bold">1,234</p>
                    </div>
                </div>

                <!-- Example Widget 2 -->
                <div class="bg-green-500 text-white rounded-lg p-4 flex items-center">
                    <i class="fas fa-dollar-sign text-3xl"></i>
                    <div class="ml-4">
                        <p class="text-lg">Total Sales</p>
                        <p class="text-2xl font-bold">$45,678</p>
                    </div>
                </div>

                <!-- Example Widget 3 -->
                <div class="bg-yellow-500 text-white rounded-lg p-4 flex items-center">
                    <i class="fas fa-chart-line text-3xl"></i>
                    <div class="ml-4">
                        <p class="text-lg">Monthly Growth</p>
                        <p class="text-2xl font-bold">12.5%</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white shadow-md rounded-lg p-6 mt-4">
        <!-- Recent Activities / Table Section -->
        <h3 class="text-xl font-bold mb-4">Recent Activities</h3>
        <div class="overflow-x-auto bg-white rounded-lg shadow">
            <table class="w-full table-auto border-collapse border border-gray-200">
                <thead class="bg-gray-100">
                <tr>
                    <th class="border border-gray-200 px-4 py-2 text-left">Activity</th>
                    <th class="border border-gray-200 px-4 py-2 text-left">Date</th>
                    <th class="border border-gray-200 px-4 py-2 text-left">Status</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="border border-gray-200 px-4 py-2">New Customer Added</td>
                    <td class="border border-gray-200 px-4 py-2">2025-02-26</td>
                    <td class="border border-gray-200 px-4 py-2">Completed</td>
                </tr>
                <tr>
                    <td class="border border-gray-200 px-4 py-2">Invoice Generated</td>
                    <td class="border border-gray-200 px-4 py-2">2025-02-25</td>
                    <td class="border border-gray-200 px-4 py-2">Pending</td>
                </tr>
                <tr>
                    <td class="border border-gray-200 px-4 py-2">Support Ticket Closed</td>
                    <td class="border border-gray-200 px-4 py-2">2025-02-24</td>
                    <td class="border border-gray-200 px-4 py-2">Resolved</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
