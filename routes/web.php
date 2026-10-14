<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReadyController;
use App\Http\Controllers\BrokenController;
use App\Http\Controllers\BorrowController;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/login', [LoginController::class, 'index'])
    ->name('login');

Route::post('/login', [LoginController::class, 'login'])
    ->name('login.submit');

Route::get('/dashboard', function () {
    return view('index');
})->name('dashboard');

Route::resource('ready', ReadyController::class);
Route::resource('broken', BrokenController::class);
Route::resource('borrow', BorrowController::class);
