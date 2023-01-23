<?php

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

Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('login', [App\Http\Controllers\AuthenticationController::class, 'loginView'])->name('login');
Route::post('login', [App\Http\Controllers\AuthenticationController::class, 'loginProcess'])->name('login.process');
Route::get('logout', [App\Http\Controllers\AuthenticationController::class, 'logout'])->name('logout');    