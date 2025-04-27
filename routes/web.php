<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('index');
});

Route::get('/test', function () {
    return view('layouts.app');
});

//route untuk login
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::post('/login', [LoginController::class, 'login']);

//route untuk register
Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::post('/register', [RegisterController::class, 'store']);

//route untuk dashboard user
Route::get('/dashboard/users', [UserController::class, 'index'])->name('dashboard.users');
