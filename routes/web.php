<?php

use App\Http\Controllers\ReservaController;
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
    return view('dashboard');
})->name('inicio');


Route::controller(UserController::class)->group(function () {
    Route::get('/iniciarSesion', 'index')->name('users.index');
    Route::get('/Registrarse', 'register')->name('users.registro');
});
Route::controller(ProductosController::class)->group(function () {
    Route::get('/VerMenu', 'index')->name('menu.index');
    Route::get('/Vercategoria/{rubro}','show')->name('menu.show');
});


Route::controller(ReservaController::class)->group(function () {
    //Route::get('reservas', 'index')->name('reservas.inicio');
    Route::middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified'
    ])->group(function () {
        Route::get('/reservas', 'index')->name('reservas.inicio');
    });
    // function () {
    //     return view('reservas.indexReservas');
    // }
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

Route::middleware(['auth','admin'])->name('admin.')->prefix('admin')->group(function(){
    
});
