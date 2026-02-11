<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SimpleAuthController;

Route::get('/', function () {
    return redirect('/login');
});

// LOGIN
Route::get('/login', [SimpleAuthController::class, 'index'])->name('login');
Route::post('/login', [SimpleAuthController::class, 'login'])->name('login.post');

// REGISTER (BARU)
Route::get('/register', [SimpleAuthController::class, 'register'])->name('register');
Route::post('/register', [SimpleAuthController::class, 'storeRegister'])->name('register.post');

// HOME (Update: Mengarah ke view loading)
Route::get('/home', [SimpleAuthController::class, 'home'])->name('home');

// Ganti route logout yang lama dengan ini:
Route::get('/logout', [SimpleAuthController::class, 'logout'])->name('logout');