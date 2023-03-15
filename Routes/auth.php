<?php

use Illuminate\Support\Facades\Route;
use Modules\GolfBooking\Http\Controllers\Auth\LoginController;

Route::get('/login', [LoginController::class, 'show'])->name('login.show');
Route::post('/login', [LoginController::class, 'store'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
