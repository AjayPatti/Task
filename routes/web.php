<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login',[LoginController::class,'index']);
Route::get('/register',[RegisterController::class,'Register'])->name('register');
Route::post('/store',[RegisterController::class,'Store'])->name('register-store');

Route::get('/dashboard',[HomeController::class,'index'])->name('dashboard');