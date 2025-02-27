@extends('layouts.app')

@section('content')
    <div class="bg-white shadow-md rounded-lg p-6">
        <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-900 p-6 rounded-lg shadow-md">
            <div class="text-right mb-4">
                <h5 class="text-lg font-semibold">🎉 Congratulations <span class="font-bold">Asnaui Optina Pangcatan</span>!</h5>
                <p class="text-sm text-gray-800 mt-2"><strong>5 Streamer</strong> and <strong>0 PAID Members</strong>
                    have <strong>ALREADY</strong> joined after <strong>YOU</strong> in the POWERLINE, and it is <strong>STILL
                        GROWING</strong>! 🚀</p>
            </div>

            <p class="text-gray-700 text-base leading-relaxed">
                Our POWERLINE showcases individuals who, like you, are seeking a simple yet potent way to make money
                from home without spending excessive amounts of time or money. At our company, we strive to provide a
                robust Compensation Plan that empowers people from all backgrounds to achieve success, many for the
                first time ever!
            </p>

            <p class="text-gray-700 text-base leading-relaxed mt-4">
                However, the number of PAID Members (joining after YOU) displayed in the Powerline does not necessarily
                mean they are positioned in your Binary, nor does it guarantee your ability to earn Binary commissions.
                Members are placed in the Binary based on their respective enroller.
            </p>

            <p class="text-gray-700 text-base leading-relaxed mt-4">
                <span class="text-red-600 font-semibold">PLEASE NOTE:</span> To start earning Binary commissions, you
                must first fill up your Binary through direct recruitment or spillover. Spillover occurs when your
                enroller and those above you in the Binary enroll members at a faster rate than you. In such cases, some
                of those members may fall under you in the Binary, as new members can only go underneath those who are
                already in the Binary.
            </p>

            <p class="text-gray-700 text-base leading-relaxed mt-4">
                Your Binary Commission is dependent on the number of Members you have in your Left Team and Right Team.
                Every 1 Member in the Left Team and the Right Team constitutes a Pair. The number of Pairs you are
                entitled to in a day will depend on your Ranking.
            </p>
        </div>
    </div>
    <div class="bg-white shadow-md rounded-lg p-6 mt-2">
        <div class="bg-white rounded-lg">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">My Powerline</h2>
            <div class="overflow-x-auto">
                <table class="w-full table-auto border-collapse border border-gray-200">
                    <thead class="bg-gray-100">
                    <tr class="bg-gray-100 text-gray-700">
                        <th class="border border-gray-200 px-4 py-2 text-left w-1/12">No.</th>
                        <th class="border border-gray-200 px-4 py-2 text-left w-3/12">Full Name</th>
                        <th class="border border-gray-200 px-4 py-2 text-left w-2/12">Type</th>
                        <th class="border border-gray-200 px-4 py-2 text-left w-2/12">Country</th>
                        <th class="border border-gray-200 px-4 py-2 text-left w-4/12">Join Date Time</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="border border-gray-300 text-gray-700 hover:bg-gray-50">
                        <td class="border border-gray-200 px-4 py-2 text-left">1</td>
                        <td class="border border-gray-200 px-4 py-2 text-left">Asnaui Optina Pangcatan</td>
                        <td class="border border-gray-200 px-4 py-2 text-left">Pre-enrollee</td>
                        <td class="border border-gray-200 px-4 py-2 text-left">
                            <img src="images/countryflags/ph.gif" class="inline-block w-5" alt="Philippines">
                        </td>
                        <td class="border border-gray-200 px-4 py-2 text-left">Wed, 19 Feb 2025<br>05:51:35 am</td>
                    </tr>
                    <tr class="border border-gray-300 text-gray-700 hover:bg-gray-50">
                        <td class="border border-gray-200 px-4 py-2 text-left">2</td>
                        <td class="border border-gray-200 px-4 py-2 text-left">Samuel Nwaliegu</td>
                        <td class="border border-gray-200 px-4 py-2 text-left">Pre-enrollee</td>
                        <td class="border border-gray-200 px-4 py-2 text-left">
                            <img src="images/countryflags/ng.gif" class="inline-block w-5" alt="Nigeria">
                        </td>
                        <td class="border border-gray-200 px-4 py-2 text-left">Wed, 19 Feb 2025<br>05:03:11 pm</td>
                    </tr>
                    <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
