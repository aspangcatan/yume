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
                <li>Cash Wallet must maintain minimum balance of US$120.00 during Pre-launch Period.</li>
            </ul>
        </div>
    </div>
    <div class="bg-white shadow-md rounded-lg">
        <!-- Title -->
        <h2 class="text-2xl font-semibold text-white bg-teal-600 p-3 rounded-t-lg">Cash Wallet Transfer</h2>
        
        <!-- Form Section -->
        <div class="p-6">
            <table class="w-full mb-4">
                <tr>
                    <td class="font-semibold">Member ID</td>
                    <td>12343742</td>
                </tr>
                <tr>
                    <td class="font-semibold">Full Name</td>
                    <td>Jobeth Huzain Adjaluddin</td>
                </tr>
                <tr>
                    <td class="font-semibold">Username</td>
                    <td>makapobre</td>
                </tr>
                <tr>
                    <td class="font-semibold">Cash Wallet Balance</td>
                    <td>US$0.00</td>
                </tr>
            </table>
            
            <table class="w-full mb-4 border-t">
                <tr>
                    <td class="font-semibold">Transfer to Username</td>
                    <td><input type="text" class="border p-2 w-full"></td>
                </tr>
                <tr>
                    <td class="font-semibold">Transfer Amount (US$)</td>
                    <td><input type="number" class="border p-2 w-full" value="0.00"></td>
                </tr>
                <tr>
                    <td class="font-semibold">Transfer Charges</td>
                    <td>US$0.00</td>
                </tr>
            </table>
            
            <table class="w-full mb-4 border-t">
                <tr>
                    <td class="font-semibold">Cash Wallet Deduction</td>
                    <td>US$0.00</td>
                </tr>
                <tr>
                    <td class="font-semibold">Reflected Cash Wallet Balance</td>
                    <td>US$0.00</td>
                </tr>
            </table>
            
            <table class="w-full mb-4 border-t">
                <tr>
                    <td class="font-semibold">Security Password</td>
                    <td><input type="password" class="border p-2 w-full"></td>
                </tr>
            </table>
            
            <p class="text-red-600 text-sm text-center">* Please be advised that this action is irreversible. Please confirm all the details before you proceed to complete the transfer.</p>
            
            <div class="flex justify-center mt-4">
                <button class="bg-teal-500 text-white px-6 py-2 rounded hover:bg-teal-600">Submit</button>
            </div>
        </div>
    </div>
@endsection