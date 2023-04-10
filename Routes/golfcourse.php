<?php

use Illuminate\Support\Facades\Route;
use Modules\Golfbooking\Http\Controllers\GolfCourse\GolfCourseController;

Route::group([
    'prefix' => '/golf-course',
    'as' => 'golf-course.'
], function () {
    Route::get('/', [GolfCourseController::class, 'index'])->name('index');
    Route::get('/time/type', [GolfCourseController::class, 'getTimeType'])->name('time_type');
    Route::get('/holes/available', [GolfCourseController::class, 'getHolesAvailable'])->name('holes_available');
    Route::post('/store', [GolfCourseController::class, 'store'])->name('store');
    Route::get('/payment/completed/{booking}', [GolfCourseController::class, 'paymentCompleted'])->name('payment-completed');
});