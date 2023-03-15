<?php

use Illuminate\Support\Facades\Route;
use Modules\GolfBooking\Http\Controllers\LandingController;

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
include('auth.php');

Route::group([
    'middleware' => ['guest'],
], function () {
    Route::view('/welcome', 'layouts/app')->name('layouts.app');
    Route::get('/', function () {
        return redirect()->route('login.show');
    });
});

Route::group([
    'middleware' => ['auth', 'web']
], function () {
    include('golfcourse.php');

    include('dashboard.php');

    include('facility.php');

    include('booking.php');

    Route::get('/', [LandingController::class, 'index'])->name('landing.index');
});
