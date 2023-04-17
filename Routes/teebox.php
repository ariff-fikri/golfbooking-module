<?php

use Illuminate\Support\Facades\Route;
use Modules\GolfBooking\Http\Controllers\ManageBookingController;


Route::group([
    'prefix' => '/manage-booking',
    'as' => 'manage-booking.'
], function () {

    // Route::resource('/', ManageBookingController::class);
    Route::get('/', [ManageBookingController::class, 'index'])->name('index');
    Route::post('/store', [ManageBookingController::class, 'store'])->name('store');
    Route::get('/edit/{teebox}', [ManageBookingController::class, 'edit'])->name('edit');
    Route::put('/update/{teebox}', [ManageBookingController::class, 'update'])->name('update');
    Route::delete('/destroy/{teebox}', [ManageBookingController::class, 'destroy'])->name('destroy');


});