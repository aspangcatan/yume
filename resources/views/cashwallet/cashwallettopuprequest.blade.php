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
                <li>Maximum Top Up value is US$1,000.00</li>
                <li>We only accept USDT(TRC20) and BUSD(BEP20) for Cash Wallet Top.</li>
                <li>We will credit your Cash Wallet upon receiving confirmation from the blockchain network. The confirmation process can take any time from 10 minutes to a few hours.</li>
                <li>Admin will use the current “Buy” rate to tabulate the conversion of your USDT(TRC20) and BUSD(BEP20)</li>
            </ul>
        </div>
    </div>

    <div class="bg-white shadow-md rounded-lg">
        <!-- Title -->
        <h2 class="text-2xl font-semibold text-white bg-teal-600 p-3 rounded-t-lg">Cash Wallet Top Up Request</h2>

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

            <!-- Payment Section -->
            <table class="w-full mb-4 border-t">
                <tr>
                    <td class="font-semibold">Payment Type</td>
                    <td>
                        <input type="radio" name="payment" checked> USDT (TRC20)
                        <input type="radio" name="payment"> BUSD (BEP20)
                        <input type="radio" name="payment"> Credit Card/Wallets
                    </td>
                </tr>
                <tr>
                    <td class="font-semibold">Top Up Amount (US$)</td>
                    <td>
                        <select class="border p-2 w-full">
                            <option>Select Top Up Value</option>
                            <!-- Options here -->
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="font-semibold">Our Exchange Rate</td>
                    <td>1 USDT : US$0.98</td>
                </tr>
                <tr>
                    <td class="font-semibold">USDT Equivalent Value</td>
                    <td>0.00000000 USDT</td>
                </tr>
                <tr>
                    <td class="font-semibold">Blockchain Network Fee</td>
                    <td>1.50000000 USDT</td>
                </tr>
                <tr class="font-bold">
                    <td>Total Amount</td>
                    <td class="text-red-600">0.00000000 USDT</td>
                </tr>
            </table>

            <!-- Wallet Address -->
            <table class="w-full mb-4 border-t">
                <tr>
                    <td class="font-semibold">USDT (TRC20) Address</td>
                    <td class="font-semibold text-sm text-gray-700">
                        TTTUxaGK7VcAqxdE57JJQNuvfaRMSrgLR
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center">
                        <img src="qrcode.png" alt="QR Code" class="mx-auto">
                    </td>
                </tr>
            </table>

            <!-- Important Notice -->
            <p class="text-red-600 text-sm">
                <strong>Important:</strong> After completing your USDT (TRC20) transfer, take a screenshot of the Transaction/Payment Details. 
                Submit it to avoid rejection or delays.
            </p>

            <!-- Upload Section -->
            <table class="w-full mb-4 border-t">
                <tr>
                    <td class="font-semibold">Upload Transaction Slip</td>
                    <td>
                        <input type="file" class="border p-2 w-full">
                        <p class="text-sm text-gray-500">*Only IMAGE FILE supported such as JPG, JPEG, and PNG</p>
                    </td>
                </tr>
                <tr>
                    <td class="font-semibold">Security Password</td>
                    <td><input type="password" class="border p-2 w-full"></td>
                </tr>
            </table>

            <!-- Warning -->
            <p class="text-red-600 text-sm">
                <strong>Important:</strong> After transferring USDT, upload the screenshot of the transaction slip as an attachment.
            </p>

            <!-- Submit Button -->
            <div class="flex justify-center mt-4">
                <button class="bg-teal-500 text-white px-6 py-2 rounded hover:bg-teal-600">Submit</button>
            </div>
        </div>
    </div>

@endsection