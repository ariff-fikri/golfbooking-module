<?php

use Illuminate\Support\Facades\Route;
use Modules\GolfBooking\Http\Controllers\Booking\FoodOrderingController;

Route::group([
    'prefix' => '/food-ordering',
    'as' => 'food-ordering.'
], function () {
    Route::get('/', [FoodOrderingController::class, 'index'])->name('index');

 });
