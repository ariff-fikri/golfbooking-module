<?php

use Illuminate\Support\Facades\Route;
use Modules\GolfBooking\Http\Controllers\Booking\BookingController;

Route::group([
    'prefix' => '/booking',
    'as' => 'booking.'
], function () {
    Route::get('/', [BookingController::class, 'index'])->name('index');
    Route::get('/info/{booking}', [BookingController::class, 'info'])->name('info');
});
