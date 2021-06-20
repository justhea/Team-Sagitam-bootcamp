<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    EventController,
};

Route::middleware(['api'])->group(function() {
    Route::get('/events', [EventController::class, 'getEvents'])->name('event.getEvents');
    Route::post('/events', [EventController::class, 'addEvent'])->name('event.addEvent');
});
