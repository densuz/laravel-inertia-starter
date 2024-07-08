<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return inertia('Home');
});
// Route::inertia('/', 'Welcome');

// Route::middleware(['auth', 'guest'])->group(function () {
//     Route::get('/login', [AuthController::class, 'LoginForm'])->middleware('guest')->name('login');
//     Route::post('/login', [AuthController::class, 'login']);
//     Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
// });
Route::get('/', function () {
    return redirect('/login');
});
Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');;
Route::post('/login', [AuthController::class, 'authentication']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

