<?php

use App\Http\Controllers\CrmController;
use App\Http\Controllers\SfaController;
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
})->name('index');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/authentication', function () {
    return view('authentication');
})->name('authentication');

Route::get('/profile', function () {
    $user =
        (object)[
            "full_name" => "Asnaui O. Pangcatan",
            "referrals_count" => 5,
            "rank" => "Pre-Enrolle",
            "member_id" => 12122388,
            "username" => "apangcatan",
            "email" => "naui.pangcatan@gmail.com",
            "contact" => "+639995249718",
            "gender" => "Male",
            "address" => "San Isidro",
            "city" => "San Isidro",
            "state" => "San Isidro",
            "country" => "San Isidro",
        ];
    return view('profile', compact('user'));
})->name('profile');

Route::get('/powerline', function () {
    return view('powerline');
})->name('powerline');

Route::get('/stream', function () {
    // ✅ Popular Artists with Actual Working Online Images
    $popularArtists = collect([
        (object)[
            "name" => "Eminem",
            "image" => "https://lastfm.freetls.fastly.net/i/u/300x300/b17d1e6aa4e8437490547db2ea0e94ca.png"
        ],
        (object)[
            "name" => "Taylor Swift",
            "image" => "https://lastfm.freetls.fastly.net/i/u/300x300/09d53640c27b4a309f7c98253c91b2c7.png"
        ]
    ]);

    // ✅ Most Listened Songs with Working Online Covers
    $mostListenedSongs = collect([
        (object)[
            "id" => 1,
            "thumbnail" => "https://is1-ssl.mzstatic.com/image/thumb/Music124/v4/32/c6/1d/32c61dd5-d586-3d63-1e56-42ccff0fc404/00602547211419.rgb.jpg/600x600bb.jpg",
            "title" => "Lose Yourself",
            "artist" => "Eminem"
        ],
        (object)[
            "id" => 2,
            "thumbnail" => "https://is1-ssl.mzstatic.com/image/thumb/Music114/v4/a6/b1/d1/a6b1d18d-7ff4-1b85-1756-4bc95b473bdb/00602567723847.rgb.jpg/600x600bb.jpg",
            "title" => "Shake It Off",
            "artist" => "Taylor Swift"
        ]
    ]);

    // ✅ Recommended Songs with Working Online Images
    $recommendedSongs = collect([
        (object)[
            "id" => 6,
            "thumbnail" => "https://is1-ssl.mzstatic.com/image/thumb/Music124/v4/92/0b/f1/920bf1a2-d949-42c1-f4fd-37c3dbce3647/00602547535462.rgb.jpg/600x600bb.jpg",
            "title" => "Without Me",
            "artist" => "Eminem"
        ],
        (object)[
            "id" => 7,
            "thumbnail" => "https://is1-ssl.mzstatic.com/image/thumb/Music124/v4/56/72/d8/5672d873-618c-b62a-22a4-169368d6fdde/00602567723847.rgb.jpg/600x600bb.jpg",
            "title" => "Blank Space",
            "artist" => "Taylor Swift"
        ],
        (object)[
            "id" => 8,
            "thumbnail" => "https://is1-ssl.mzstatic.com/image/thumb/Music124/v4/13/85/63/138563e4-11a5-5d2b-024f-167d49b9a447/00602567379847.rgb.jpg/600x600bb.jpg",
            "title" => "In My Feelings",
            "artist" => "Drake"
        ]
    ]);

    return view('stream', compact('popularArtists', 'mostListenedSongs', 'recommendedSongs'));
})->name('stream');

Route::get('/watch', function () {

    return view('watch');
})->name('watch');


Route::get('/get-song/{id}', function ($id) {
    $song = (object)[
        "title" => "Eminem - Lose Yourself",
        "artist" => "Eminem",
        'youtube_id' => "45xpqOPbFdQ"
    ];

    return response()->json($song)
        ->header('Access-Control-Allow-Origin', '*')
        ->header('Access-Control-Allow-Methods', 'GET, POST, OPTIONS')
        ->header('Access-Control-Allow-Headers', 'Content-Type, Authorization');
})->name('getSong');

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

Route::get('/cashwallet/cashwalletreport', function () {
    return view('cashwallet.cashwalletreport');
})->name('cashwalletreport');

Route::get('/cashwallet/cashwallettransfer', function () {
    return view('cashwallet.cashwallettransfer');
})->name('cashwallettransfer');

Route::get('/cashwallet/canceledtopup', function () {
    return view('cashwallet.canceledtopup');
})->name('canceledtopup');

Route::get('/cashwallet/approvetopup', function () {
    return view('cashwallet.approvetopup');
})->name('approvetopup');

Route::get('/cashwallet/cashwallettopuprequest', function () {
    return view('cashwallet.cashwallettopuprequest');
})->name('cashwallettopuprequest');

Route::get('/cashwallet/pendingtopup', function () {
    return view('cashwallet.pendingtopup');
})->name('pendingtopup');

Route::get('/streamingpoint/streamingpointreport', function () {
    return view('streamingpoint.streamingpointreport');
})->name('streamingpointreport');

Route::get('/rewardpoints/rewardpointsreport', function () {
    return view('rewardpoints.rewardpointsreport');
})->name('rewardpointsreport');

Route::get('/ecodemanagement/activatedecode', function () {
    return view('ecodemanagement.activatedecode');
})->name('activatedecode');

Route::get('/ecodemanagement/activeecode', function () {
    return view('ecodemanagement.activeecode');
})->name('activeecode');

Route::get('/ecodemanagement/deactivatedecode', function () {
    return view('ecodemanagement.deactivatedecode');
})->name('deactivatedecode');

Route::get('/ecodemanagement/ecodecreation', function () {
    return view('ecodemanagement.ecodecreation');
})->name('ecodecreation');

Route::get('/ecodemanagement/ecodecreation', function () {
    return view('ecodemanagement.ecodecreation');
})->name('ecodecreation');

Route::get('/withdrawal/approvedwithdrawal', function () {
    return view('withdrawal.approvedwithdrawal');
})->name('approvedwithdrawal');

Route::get('/withdrawal/pendingwithdrawal', function () {
    return view('withdrawal.pendingwithdrawal');
})->name('pendingwithdrawal');

Route::get('/withdrawal/rejectedwithdrawal', function () {
    return view('withdrawal.rejectedwithdrawal');
})->name('rejectedwithdrawal');

Route::get('/withdrawal/withdrawalrequest', function () {
    return view('withdrawal.withdrawalrequest');
})->name('withdrawalrequest');

Route::prefix('crm')->group(function () {
    Route::get('/dashboard', [CrmController::class, 'dashboard'])->name('crm.dashboard');
    Route::get('/customers', [CrmController::class, 'customers'])->name('crm.customers');
    Route::get('/leads', [CrmController::class, 'leads'])->name('crm.leads');
    Route::get('/deals', [CrmController::class, 'deals'])->name('crm.deals');
});

Route::prefix('sfa')->group(function () {
    Route::get('/dashboard', [SfaController::class, 'dashboard'])->name('sfa.dashboard');
    Route::get('/activities', [SfaController::class, 'activities'])->name('sfa.activities');
    Route::get('/tasks', [SfaController::class, 'tasks'])->name('sfa.tasks');
    Route::get('/calendar', [SfaController::class, 'calendar'])->name('sfa.calendar');
});
