<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinoController;
use App\Http\Controllers\VisitadoController;

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

//Destinos
Route::get('/destinos', [DestinoController::class, 'index'])->name('destinos');
Route::post('/destinos', [DestinoController::class, 'cambiaSesion'])->name('cambia_sesion');
// Route::post('/destinos', [DestinoController::class, 'cambiaFiltro'])->name('cambiar_filtro');

//Visitados
Route::get('/visitados', function () {
    return view('visitados');
})->name('visitados');
