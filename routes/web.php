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

