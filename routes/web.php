<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinoController;
use App\Http\Controllers\VisitadoController;
use App\Http\Controllers\UsuarioController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

//Index
Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/login', function () {
    return view('login');
})->name('login');

//DESTINOS
Route::get('/destinos', [DestinoController::class, 'index'])->name('destinos');
Route::post('/destinos', [DestinoController::class, 'cambiaSesion'])->name('cambia_sesion');
// Route::post('/destinos', [DestinoController::class, 'cambiaFiltro'])->name('cambiar_filtro');

Route::post('/destinos/visitado', [DestinoController::class, 'marcarComoVisitado'])->name('visitado');

//VISITADOS
Route::get('/visitados', [VisitadoController::class, 'index'])->name('visitados');
