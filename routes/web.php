<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/login', LoginController::class . '@index')->name('login');
Route::post('/login', LoginController::class . '@login')->name('authenticate');
Route::get('/logout', LoginController::class . '@logout')->name('logout');

Route::get('/register', RegisterController::class . '@index')->name('register');
Route::post('/register', RegisterController::class . '@register')->name('save');
