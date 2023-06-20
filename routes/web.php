<?php

use App\Http\Controllers\ReservaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReserveController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    //return redirect()->view('reservas.inicio');
    return view('dashboard');
});
Route::controller(UserController::class)->group(function () {
    Route::get('/iniciarSesion', 'index')->name('users.index');
    Route::get('/Registrarse', 'register')->name('users.registro');
});

// Route::controller(ReservaController::class)->group(function () {
//     Route::get('reservas', 'index')->name('reservas.inicio');
// });
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/reservas', function () {
        return view('reservas.indexReservas');
    })->name('reservas.inicio');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
