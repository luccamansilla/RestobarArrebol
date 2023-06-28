<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductosController;


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
    return view('home');
})->name('inicio');
Route::controller(UserController::class)->group(function () {
    Route::get('/iniciarSesion', 'index')->name('users.index');
    Route::get('/Registrarse', 'register')->name('users.registro');
});
Route::controller(ProductosController::class)->group(function () {
    Route::get('/VerMenu', 'index')->name('menu.index');
    Route::get('/Vercategoria/{rubro}', 'show')->name('menu.show');
});

Route::controller(ProductosController::class)->group(function () {
    Route::get('/VerMenu', 'index')->name('menu.index');
    Route::get('/Vercategoria/{rubro}', 'show')->name('menu.show');
});


Route::controller(ReservaController::class)->group(function () {
    //Route::get('reservas', 'index')->name('reservas.inicio');
    Route::middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified'
    ])->group(function () {
        Route::get('/reservas', 'show')->name('reservas.inicio');
    });
    Route::get('mesasZona', 'mesasZona')->name('reservas.mesas');
    Route::post('reservas/store', 'store')->name('reservas.store');
    Route::get('/realizarReserva', 'index')->name('reservas.realizar');
    Route::post('reservas/eliminar', 'destroy')->name('reservas.eliminar');
});
Route::get("/home", [HomeController::class, "index"])->name('home');

Route::get('/logout', function () {
    Auth::logout();
    return redirect('home'); // Cambia '/' por la ruta a la que deseas redireccionar después del logout
})->name('cerrarSesion');
