<?php

use Illuminate\Support\Facades\Route;
use Modules\Golfbooking\Http\Controllers\Dashboard\DashboardController;

Route::group([
    'prefix' => '/dashboard',
    'as' => 'dashboard.'
], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');
    Route::get('/view/{booking}', [DashboardController::class, 'view'])->name('view');
});