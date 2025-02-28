<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;

Route::get('/register', [RegistrationController::class, 'showForm'])->name('register.form');
Route::post('/register', [RegistrationController::class, 'register'])->name('register.submit');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard', function () {
    return view('dashboard'); // Dummy dashboard for now
})->middleware('auth')->name('dashboard');
