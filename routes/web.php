<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\OrderCallController;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;

Route::inertia('/', 'Home');
Route::inertia('/admin-login', 'AdminLogin');
Route::inertia('/admin-panel', 'AdminPanel')->middleware('auth');
// Route::inertia('/admin-panel', 'AdminPanel');
Route::inertia('/site-rules', 'SiteRules');

Route::post('adminLogin', [AdminLoginController::class, 'login']);

Route::resource('booking', BookingController::class);

Route::resource('orderCalls', OrderCallController::class);

// Route::get('bookings/create', [BookingController::class, 'create']);
// Route::post('bookings', [BookingController::class, 'store']);
require __DIR__.'/settings.php';
