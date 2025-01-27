<?php


use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login', [\App\Http\Controllers\AuthController::class,'login']);

Route::get('/signup', [\App\Http\Controllers\AuthController::class,'registration']);
Route::post('/signup-user', [\App\Http\Controllers\AuthController::class,'registerUser'])->name('register-user');