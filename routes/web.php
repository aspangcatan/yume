<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/powerline', function () {
    return view('powerline');
})->name('powerline');

Route::get('/stream', function () {
    $recommendedSongs = collect([
        (object)[
            "id" => 1,
            "thumbnail" => "eminem.jpg",
            "title" => "Eminem - Lose Yourself",
            "artist" => "Eminem"
        ], (object)[
            "id" => 1,
            "thumbnail" => "eminem.jpg",
            "title" => "Eminem - I'm not Afraid",
            "artist" => "Eminem"
        ], (object)[
            "id" => 1,
            "thumbnail" => "eminem.jpg",
            "title" => "Eminem - Mockingbird",
            "artist" => "Eminem"
        ]
    ]);

    return view('stream', compact('recommendedSongs'));
})->name('stream');

Route::get('/get-song/{id}', function ($id) {
    $song = (object)[
        "title" => "Eminem - Lose Yourself",
        "artist" => "Eminem",
        'youtube_id' => "45xpqOPbFdQ"
    ];

    return response()->json($song);
});

Route::get('/rewardsReport/directrefferal', function () {
    return view('rewardsReport.directrefferal'); // Include folder in the view path
})->name('directrefferal');

Route::get('/rewardsReport/binarycommision', function () {
    return view('rewardsReport.binarycommision');
})->name('binarycommision');

Route::get('/rewardsReport/megamatchingcommision', function () {
    return view('rewardsReport.megamatchingcommision');
})->name('megamatchingcommision');

Route::get('/ewallet/ewalletreport', function () {
    return view('ewallet.ewalletreport');
})->name('ewalletreport');

Route::get('/ewallet/ewallettransfer', function () {
    return view('ewallet.ewallettransfer');
})->name('ewallettransfer');
