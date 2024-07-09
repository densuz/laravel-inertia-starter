<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/', function () {
//     return Inertia::render('Home');
// });
// Route::get('/', function () {
//     return Inertia::render('Welcome');
//     });

Route::get('/', function () {
    return Inertia::render('Welcome');
    });
    // Route::get('/', [DashboardController::class, 'index'])->name('home');
    // Route::resource('/home', [DashboardController::class]);

Route::resource('/home', DashboardController::class);
// Route::get('/home', [DashboardController::class, 'index']);
Route::get('/login', [AuthController::class, 'index'])->name('login');



