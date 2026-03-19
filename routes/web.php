<?php

use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;

Route::inertia('/', 'Home');
Route::resource('booking', BookingController::class);
// Route::get('bookings/create', [BookingController::class, 'create']);
// Route::post('bookings', [BookingController::class, 'store']);
require __DIR__.'/settings.php';
