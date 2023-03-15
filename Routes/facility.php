<?php

use Illuminate\Support\Facades\Route;
use Modules\GolfBooking\Http\Controllers\Facility\FacilityController;

Route::group([
    'prefix' => '/facility-booking',
    'as' => 'facility-booking.'
], function () {
    Route::get('/', [FacilityController::class, 'index'])->name('index');
    Route::get('/show/list', [FacilityController::class, 'list'])->name('list');

});