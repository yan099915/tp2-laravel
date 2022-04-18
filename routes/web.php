<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', [UserController::class, 'LoginView']);
Route::post('/login', [UserController::class, 'Login']);
Route::get('/register', [UserController::class, 'RegisterView']);
Route::post('/register', [UserController::class, 'Register']);



