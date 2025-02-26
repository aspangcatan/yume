@extends('layouts.app')

@section('content')
    <div class="bg-white shadow-md rounded-lg">
                    <!-- Title -->
                    <h2 class="text-2xl font-semibold text-white bg-teal-600 p-3 rounded-t-lg">Pending Top Up</h2>

                    <!-- Filter Section -->
                    <div class="p-6 bg-gray-100 rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-800 text-center">Report Date Filter Options</h3>

                        <form class="flex flex-col items-center space-y-4 mt-4">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <!-- Start Date -->
                                <div class="flex flex-col">
                                    <label class="text-gray-700 font-semibold">Start Date:</label>
                                    <input type="date" name="start_date" value="2025-02-20"
                                        class="border rounded-md p-2 w-full focus:ring-2 focus:ring-blue-400">
                                </div>

                                <!-- End Date -->
                                <div class="flex flex-col">
                                    <label class="text-gray-700 font-semibold">End Date:</label>
                                    <input type="date" name="end_date" value="2025-02-23"
                                        class="border rounded-md p-2 w-full focus:ring-2 focus:ring-blue-400">
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <button type="button" class="bg-blue-500 text-white font-semibold px-4 py-2 rounded-md hover:bg-blue-600 transition">
                                Submit
                            </button>
                        </form>
                    </div>

                    <!-- Table Section -->
                    <div class="mt-6 overflow-x-auto">
                        <table class="min-w-full bg-white border rounded-md shadow-md">
                            <thead class="bg-gray-200">
                                <tr>
                                    <th class="px-4 py-2 border text-left">No.</th>
                                    <th class="px-4 py-2 border text-left">Date Time</th>
                                    <th class="px-4 py-2 border text-left">Top Up Details</th>
                                    <th class="px-4 py-2 border text-left">Converted Amount</th>
                                    <th class="px-4 py-2 border text-left">Blockchain/Admin Transaction Fee</th>
                                    <th class="px-4 py-2 border text-left">Total Amount</th>
                                    <th class="px-4 py-2 border text-left">Remarks</th>
                                    <th class="px-4 py-2 border text-left">Slip</th>
                                    <th class="px-4 py-2 border text-left">Tick</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-t">
                                    <td class="px-4 py-2 border">1</td>
                                    <td class="px-4 py-2 border">2025-02-21 12:30 PM</td>
                                    <td class="px-4 py-2 border">Test</td>
                                    <td class="px-4 py-2 border">One Hundred Dollars</td>
                                    <td class="px-4 py-2 border">$100.00</td>
                                    <td class="px-4 py-2 border">$10.00</td>
                                    <td class="px-4 py-2 border">$110.00</td>
                                    <td class="px-4 py-2 border">test</td>
                                    <td class="px-4 py-2 border">test</td>
                                </tr>
                                <tr class="border-t">
                                    <td class="px-4 py-2 border">2</td>
                                    <td class="px-4 py-2 border">2025-02-21 12:30 PM</td>
                                    <td class="px-4 py-2 border">Test</td>
                                    <td class="px-4 py-2 border">One Hundred Dollars</td>
                                    <td class="px-4 py-2 border">$100.00</td>
                                    <td class="px-4 py-2 border">$10.00</td>
                                    <td class="px-4 py-2 border">$110.00</td>
                                    <td class="px-4 py-2 border">test</td>
                                    <td class="px-4 py-2 border">test</td>
                                </tr>
                                <tr class="border-t">
                                    <td colspan="6" class="text-center text-gray-600 py-4">End of Records</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
    </div>
@endsection