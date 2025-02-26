@extends('layouts.app')

@section('content')
<div class="bg-white shadow-md rounded-lg">
    <!-- Title -->
    <h2 class="text-2xl font-semibold text-white bg-teal-600 p-3 rounded-t-lg text-center">e-Code Creation</h2>

    <!-- Form Section -->
    <div class="p-6">
        <!-- Wallet Balances -->
        <table class="w-full mb-4">
            <tr>
                <td class="font-semibold">e-Wallet Balance</td>
                <td class="text-right">US$0.0000</td>
            </tr>
            <tr>
                <td class="font-semibold">Cash Wallet Balance</td>
                <td class="text-right">US$0.0000</td>
            </tr>
        </table>

        <hr class="my-3">

        <!-- Quantity Input Section -->
        <h6 class="font-semibold mb-2">Please input the Quantity of e-Code to be created:</h6>
        <table class="w-full mb-4">
            <tr>
                <td>Unrank</td>
                <td>
                    Quantity: 
                    <input type="number" class="border p-2 w-20 text-center" value="0">
                </td>
                <td class="text-right">US$120.0000</td>
            </tr>
            <tr>
                <td>Creation Fee</td>
                <td></td>
                <td class="text-right">US$0.00</td>
            </tr>
        </table>

        <hr class="my-3">

        <!-- Deductions -->
        <table class="w-full mb-4">
            <tr>
                <td class="font-semibold">e-Wallet Deduction</td>
                <td class="text-right">US$0.00</td>
            </tr>
            <tr>
                <td class="font-semibold">Cash Wallet Deduction</td>
                <td class="text-right">US$0.00</td>
            </tr>
        </table>

        <hr class="my-3">

        <!-- Reflected Balances -->
        <table class="w-full mb-4">
            <tr>
                <td class="font-semibold">Reflected e-Wallet Balance</td>
                <td class="text-right font-bold">US$0.0000</td>
            </tr>
            <tr>
                <td class="font-semibold">Reflected Cash Wallet Balance</td>
                <td class="text-right font-bold">US$0.0000</td>
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