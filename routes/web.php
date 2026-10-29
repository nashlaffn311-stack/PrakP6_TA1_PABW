<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporBanjirController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;

// AKSES PUBLIK
Route::get('/', function () {
    return redirect()->route('lapor.create');
});
Route::get('/lapor/create', [LaporBanjirController::class, 'create'])->name('lapor.create');
Route::post('/lapor', [LaporBanjirController::class, 'store'])->name('lapor.store');

// AUTHENTICATION ROUTES (Guest Only)
Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
    
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});

// PROTEKSI HALAMAN (Petugas Only)
Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    
    // Kelola Laporan
    Route::get('/lapor', [LaporBanjirController::class, 'index'])->name('lapor.index');
    Route::get('/lapor/{id}', [LaporBanjirController::class, 'show'])->name('lapor.show');
    Route::get('/lapor/{id}/edit', [LaporBanjirController::class, 'edit'])->name('lapor.edit');
    Route::put('/lapor/{id}', [LaporBanjirController::class, 'update'])->name('lapor.update');
    Route::delete('/lapor/{id}', [LaporBanjirController::class, 'destroy'])->name('lapor.destroy');
    
    // Profil Petugas
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
});