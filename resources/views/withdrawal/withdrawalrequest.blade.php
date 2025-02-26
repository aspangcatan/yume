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
                <li>The minimum withdrawal amount is US$100.00 and thereafter incremental of US$10.00. Example: If you have US$162.50 e-Wallet credit, you can withdraw US$160.00 (incremental of US$10.00)</li>
                <li>US Dollars withdrawals are paid directly to your bank account. For cryptocurrency withdrawals, pay directly to your USDT (TRC20) or BUSD (BEP20) Wallet Address.</li>
                <li>You need to update your banking details and USDT (TRC20) or BUSD (BEP20) Wallet Address at "Payment Account" before making a withdrawal!</li>
                <li>A Processing and Administration Fee of 3% (with a minimum of US$1.00) and a USDT (TRC20) Blockchain Fee of 1.50 USDT or a BUSD (BEP20) Blockchain Fee of 1.50 BUSD apply for each withdrawal. Admin will use the current cryptocurrency "Sell" rate displayed at the back office to convert the withdrawal amount.</li>
                <li>e-Wallet must maintain a minimum balance of US$5.00</li>
            </ul>
        </div>
    </div>
    <div class="bg-white shadow-md rounded-lg">
        <!-- Title -->
        <h2 class="text-2xl font-semibold text-white bg-teal-600 p-3 rounded-t-lg">Withdrawal Request</h2>

            <!-- Form Section -->
            <div class="p-6">
                <!-- User Details -->
                <table class="w-full mb-4">
                    <tr>
                        <td class="font-semibold">Member ID</td>
                        <td class="text-right">12343742</td>
                    </tr>
                    <tr>
                        <td class="font-semibold">Full Name</td>
                        <td class="text-right">Jobeth Huzain Adjaluddin</td>
                    </tr>
                    <tr>
                        <td class="font-semibold">Username</td>
                        <td class="text-right">makapobre</td>
                    </tr>
                    <tr>
                        <td class="font-semibold">Payment Details</td>
                        <td class="text-right">
                            <select class="border p-2 w-full">
                                <option>Choose Your Preferable Payment Details</option>
                            </select>
                        </td>
                    </tr>
                </table>

                <hr class="my-3">

                <!-- Balance and Withdrawal Details -->
                <table class="w-full mb-4">
                    <tr>
                        <td class="font-semibold">Current e-Wallet Balance</td>
                        <td class="text-right">US$0.00</td>
                    </tr>
                    <tr>
                        <td class="font-semibold">Withdrawal Amount (US$)</td>
                        <td class="text-right">
                            <input type="number" class="border p-2 w-24 text-center" value="0">
                        </td>
                    </tr>
                    <tr>
                        <td class="font-semibold">Processing Fees (US$)</td>
                        <td class="text-right">US$0.00</td>
                    </tr>
                    <tr>
                        <td class="font-semibold">Nett Withdrawal Amount (US$)</td>
                        <td class="text-right">US$0.00</td>
                    </tr>
                </table>

                <hr class="my-3">

                <!-- Reflected Balance -->
                <table class="w-full mb-4">
                    <tr>
                        <td class="font-semibold">Reflected e-Wallet Balance</td>
                        <td class="text-right font-bold">US$0.00</td>
                    </tr>
                </table>

                <hr class="my-3">

                <!-- Security Password -->
                <div class="mb-3">
                    <label class="font-semibold">Security Password</label>
                    <input type="password" class="border p-2 w-full">
                </div>

                <!-- Submit Button -->
                <div class="flex justify-center mt-4">
                    <button class="bg-teal-500 text-white px-6 py-2 rounded hover:bg-teal-600">Submit</button>
                </div>
            </div>
    </div>
@endsection