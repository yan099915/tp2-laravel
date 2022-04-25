<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/login', [UserController::class, 'LoginView']);
Route::post('/auth', [UserController::class, 'authenticate']);
Route::get('/register', [UserController::class, 'RegisterView']);
Route::post('/create', [UserController::class, 'create']);
Route::get('/dashboard', [UserController::class, 'dashboard']);



