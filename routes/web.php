<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\RegistrationController; // Import the RegistrationController
use App\Http\Controllers\LoginController; // Import the LoginController

Route::get('/', [LandingController::class, 'index']);
Route::get('/daftar', [DaftarController::class, 'showDaftarForm'])->name('daftar'); // Use class-based route
Route::post('/daftar', [DaftarController::class, 'daftar']); // Use class-based route
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login'); // Use class-based route
Route::post('/login', [LoginController::class, 'login']); // Use class-based route
Route::get('/home', function () {
    return view('home');
});

