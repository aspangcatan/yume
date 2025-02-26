@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <!-- Left Profile Card -->
        <div class="bg-white p-6 rounded-2xl shadow-lg flex flex-col items-center border border-gray-200">
            <!-- Profile Picture -->
            <div class="w-28 h-28 rounded-full border-4 border-blue-500 overflow-hidden">
                <img src="{{ asset('img/yume-artist-1.png') }}" alt="Profile Picture"
                     class="w-full h-full object-cover">
            </div>

            <h2 class="mt-4 text-2xl font-bold text-gray-900 text-center">{{ $user->full_name }}</h2>

            <!-- Additional Info -->
            <div class="mt-5 w-full text-center space-y-2">
                <p class="text-gray-500 text-sm">Member since: <span class="font-semibold text-gray-800">January 2024</span></p>
                <p class="text-gray-500 text-sm">Rank: <span class="font-semibold text-blue-600 text-lg">{{ $user->rank }}</span></p>
                <p class="text-gray-500 text-sm">Total Referrals: <span class="font-bold text-gray-800 text-lg">{{ $user->referrals_count }}</span></p>
            </div>
        </div>

        <!-- Right Profile Details -->
        <div class="md:col-span-2 bg-white shadow-lg rounded-2xl p-6 md:p-8 border border-gray-200">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Profile Details</h2>

            <div class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="text-gray-500 text-sm">Member ID</label>
                        <p class="font-semibold text-lg text-gray-800">{{ $user->member_id }}</p>
                    </div>
                    <div>
                        <label class="text-gray-500 text-sm">Username</label>
                        <p class="font-semibold text-lg text-gray-800">{{ $user->username }}</p>
                    </div>
                </div>

                <div>
                    <label class="text-gray-500 text-sm">Email Address</label>
                    <p class="font-semibold text-lg text-gray-800">{{ $user->email }}</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="text-gray-500 text-sm">Contact No.</label>
                        <p class="font-semibold text-lg text-gray-800">{{ $user->contact }}</p>
                    </div>
                    <div>
                        <label class="text-gray-500 text-sm">Gender</label>
                        <p class="font-semibold text-lg text-gray-800">{{ $user->gender }}</p>
                    </div>
                </div>

                <div>
                    <label class="text-gray-500 text-sm">Address</label>
                    <p class="font-semibold text-lg text-gray-800">{{ $user->address }}, {{ $user->city }}, {{ $user->state }}, {{ $user->country }}</p>
                </div>

                <div>
                    <label class="text-gray-500 text-sm">Security Password</label>
                    <p class="font-semibold text-lg text-gray-800">********</p>
                </div>
            </div>

            <!-- Edit Profile Button -->
            <div class="mt-8 text-center">
                <a href="#" class="bg-gradient-to-r from-blue-500 to-blue-700 text-white px-6 py-3 rounded-lg text-lg font-medium transition hover:opacity-90">
                    Edit Profile
                </a>
            </div>
        </div>
    </div>
@endsection
