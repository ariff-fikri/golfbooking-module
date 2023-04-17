<?php

use Illuminate\Support\Facades\Route;
use Modules\GolfBooking\Http\Controllers\LandingController;
use Modules\GolfBooking\Http\Controllers\ManageBookingController;
use Modules\GolfBooking\Http\Controllers\FoodOrderingController;

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

Route::group([
    'prefix' => '/facility-booking',
    'as' => 'facility-booking.'
], function () {

    Route::group([
        'middleware' => ['auth', 'web']
    ], function () {
        include('golfcourse.php');

        include('dashboard.php');

        include('facility.php');

        include('booking.php');
        
        include('teebox.php');
        include('foodordering.php');

        Route::get('/', [LandingController::class, 'index'])->name('landing.index');
        Route::get('/manage-booking-golf', [ManageBookingController::class, 'index'])->name('manage-booking-golf.index');
        Route::get('/food-ordering', [FoodOrderingController::class, 'index'])->name('food-ordering.index');
     });
});
