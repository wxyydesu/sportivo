<?php


use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::post('/login-user', [\App\Http\Controllers\AuthController::class,'loginUser'])->name('login-user');

Route::get('/signup', [\App\Http\Controllers\AuthController::class,'registration']);
Route::post('/signup-user', [\App\Http\Controllers\AuthController::class,'registerUser'])->name('register-user');
Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
