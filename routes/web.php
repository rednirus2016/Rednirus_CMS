<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/login', [LoginController::class, 'login'])->name('showLogin');
Route::post('/login', [LoginController::class, 'doLogin'])->name('doLogin');           //Changed to POST method

Route::get('/register', [RegisterController::class, 'register'])->name('showRegister');
Route::post('/register', [RegisterController::class, 'store'])->name('doRegister');

Route::get('/login/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/', function () {
    return view('layouts.app');
});
