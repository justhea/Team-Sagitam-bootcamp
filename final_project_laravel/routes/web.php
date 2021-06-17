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
use App\Http\Controllers\{
    DashboardController,
    HomeController,
    LoginController,
    RegisterController,
    FileuploadController
};

Route::middleware(['guest'])->group(function() {
    // (url_attern, [Controller_name, method_name])->name(alias)
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::get('/attorney', [HomeController::class, 'attorney'])->name('home.attorney');
    Route::get('/service', [HomeController::class, 'service'])->name('home.service');


    Route::get('/login', [LoginController::class, 'login'])->name('login.login');
    Route::post('/login', [LoginController::class, 'auth'])->name('login.auth');
    Route::get('/register', [RegisterController::class, 'signin'])->name('register.signin');
    Route::post('/register', [RegisterController::class, 'register'])->name('register.register');
});

Route::middleware(['auth'])->group(function() {
    Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard.dashboard');
    Route::get('/profile', [DashboardController::class, 'profile'])->name('dashboard.profile');
    Route::get('/journal', [DashboardController::class, 'journal'])->name('dashboard.journal');
    Route::get('/files', [DashboardController::class, 'files'])->name('dashboard.files');
    Route::post('/files', [FileuploadController::class, 'files'])->name('dashboard.files');
    Route::get('/directory', [DashboardController::class, 'directory'])->name('dashboard.directory');
});
