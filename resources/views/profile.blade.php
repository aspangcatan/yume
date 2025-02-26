@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-3 gap-6">
        <div class="bg-white p-4 rounded-lg shadow-md flex flex-col items-center">
            <!-- Profile Picture -->
            <div class="w-24 h-24 rounded-full border-4 border-gray-300 overflow-hidden">
                <img src="{{ asset('img/yume-artist-1.png') }}" alt="Profile Picture"
                     class="w-full h-full object-cover">
            </div>
            <h2 class="mt-3 text-lg font-semibold text-gray-800">{{ $user->full_name }}</h2>

            <!-- Active Referrals -->
            <div class="w-full mt-4 bg-white shadow-md rounded-lg p-3 text-center">
                <p class="text-sm text-gray-500">Total Active Direct Referrals</p>
                <p class="text-3xl font-bold text-gray-800">{{ $user->referrals_count }}</p>
            </div>

            <!-- Rank -->
            <div class="w-full mt-4 bg-white shadow-md rounded-lg p-3 text-center">
                <p class="text-sm text-gray-500">Rank</p>
                <p class="text-lg font-semibold text-gray-800">{{ $user->rank }}</p>
            </div>
        </div>
        <div class="col-span-2 bg-white shadow-md rounded-lg p-6">
            <h2 class="text-xl font-bold text-gray-800 mb-4">Profile Details</h2>

            <div class="space-y-4">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="text-gray-500 text-sm">Member ID</label>
                        <p class="font-medium text-gray-800">{{ $user->member_id }}</p>
                    </div>
                    <div>
                        <label class="text-gray-500 text-sm">Username</label>
                        <p class="font-medium text-gray-800">{{ $user->username }}</p>
                    </div>
                </div>

                <div>
                    <label class="text-gray-500 text-sm">Email Address</label>
                    <p class="font-medium text-gray-800">{{ $user->email }}</p>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="text-gray-500 text-sm">Contact No.</label>
                        <p class="font-medium text-gray-800">{{ $user->contact }}</p>
                    </div>
                    <div>
                        <label class="text-gray-500 text-sm">Gender</label>
                        <p class="font-medium text-gray-800">{{ $user->gender }}</p>
                    </div>
                </div>

                <div>
                    <label class="text-gray-500 text-sm">Address</label>
                    <p class="font-medium text-gray-800">{{ $user->address }}, {{ $user->city }}, {{ $user->state }}
                        , {{ $user->country }}</p>
                </div>

                <div>
                    <label class="text-gray-500 text-sm">Security Password</label>
                    <p class="font-medium text-gray-800">********</p>
                </div>
            </div>

            <div class="mt-6 text-center">
                <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded-lg">Edit Profile</a>
            </div>
        </div>
    </div>

@endsection
