<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/login', LoginController::class . '@index')->name('login');
Route::post('/login', LoginController::class . '@login')->name('authenticate');
Route::get('/logout', LoginController::class . '@logout')->name('logout');

Route::resource('/users', UserController::class);
