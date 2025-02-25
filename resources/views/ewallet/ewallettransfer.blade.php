@extends('layouts.app')

@section('content')
    <!-- Alert Box for Terms & Conditions -->
    <div class="bg-yellow-500 text-black p-4 rounded-lg mb-4 flex items-start">
        <svg class="w-6 h-6 text-black mr-3 mt-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2z" />
        </svg>
        <div>
            <h3 class="font-semibold text-lg">Terms & Conditions</h3>
            <ul class="list-disc pl-5 text-sm">
                <li>Minimum e-Wallet transfer amount is US$10.00</li>
                <li>A Processing and Administration Fee of 3% (with a minimum of US$1.00) applies for each e-Wallet transfer.</li>
                <li>e-Wallet must maintain a minimum balance of US$5.00</li>
            </ul>
        </div>
    </div>
    <div class="bg-white shadow-md rounded-lg">
                    <!-- Title -->
                    <h2 class="text-2xl font-semibold text-white bg-teal-600 p-3 rounded-t-lg">e-Wallet Transfer</h2>

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
                                    <th class="px-4 py-2 border text-left">Date</th>
                                    <th class="px-4 py-2 border text-left">Time</th>
                                    <th class="px-4 py-2 border text-left">From Username</th>
                                    <th class="px-4 py-2 border text-left">Level</th>
                                    <th class="px-4 py-2 border text-left">Rewards (US$)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-t">
                                    <td class="px-4 py-2 border">1</td>
                                    <td class="px-4 py-2 border">2025-02-21</td>
                                    <td class="px-4 py-2 border">12:30 PM</td>
                                    <td class="px-4 py-2 border">User123</td>
                                    <td class="px-4 py-2 border">Level 1</td>
                                    <td class="px-4 py-2 border">$10.00</td>
                                </tr>
                                <tr class="border-t">
                                    <td class="px-4 py-2 border">2</td>
                                    <td class="px-4 py-2 border">2025-02-22</td>
                                    <td class="px-4 py-2 border">03:45 PM</td>
                                    <td class="px-4 py-2 border">User456</td>
                                    <td class="px-4 py-2 border">Level 2</td>
                                    <td class="px-4 py-2 border">$15.50</td>
                                </tr>
                                <tr class="border-t">
                                    <td colspan="6" class="text-center text-gray-600 py-4">End of Records</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
             <!-- Warning Message at the Bottom -->
            <div class="text-red-600 text-sm font-semibold mt-6 text-center">
                * Please be advised that this action is irreversible. Please confirm all the details before you proceed to complete the transfer.
            </div>
            <br>
    </div>
@endsection