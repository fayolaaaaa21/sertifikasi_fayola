<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SkemaController;
use App\Http\Controllers\PesertaController;

// Redirect halaman utama ke login
Route::get('/', function () {
    return redirect()->route('login');
});

// Route Auth
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route dengan Middleware Auth
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('skema', SkemaController::class);
    Route::resource('peserta', PesertaController::class);
});