<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\SubscriptionController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');

Route::get('/welcome', function () {
    return view('welcome');
});

Route::resource('reservations', ReservationController::class)
    ->middleware('auth');

Route::resource('categories', CategoryController::class)
    ->middleware('auth');

Route::resource('subscriptions', SubscriptionController::class)
    ->middleware('auth');

Route::resource('customers', CustomerController::class)
    ->middleware('auth');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
