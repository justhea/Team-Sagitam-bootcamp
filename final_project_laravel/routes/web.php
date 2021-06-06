<?php

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

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;

// (url_attern, [Controller_name, method_name])->name(alias)
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/attorney', [HomeController::class, 'attorney'])->name('home.attorney');
Route::get('/service', [HomeController::class, 'service'])->name('home.service');
Route::get('/signup', [HomeController::class, 'signup'])->name('home.signup');

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard.dashboard');
