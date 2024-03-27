<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('showLogin');
Route::post('\login', [app\Http\Controllers\Auth\LoginController::class, 'login'])->name('doLogin');

Route::get('/', function(){
    return view('layouts/app');
});