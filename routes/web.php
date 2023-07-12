<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', [
        'title' => 'Home Page'
    ]);
})->middleware('auth');


Route::get('register', [RegisterController::class, 'create'])->name('create')->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->name('store');

Route::get('login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('login', [LoginController::class, 'auth'])->name('auth');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
