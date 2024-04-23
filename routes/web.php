<?php

use App\Http\Controllers\EquipoController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\ParticipacionController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/equipos', [EquipoController:: class, 'index'])->name('equipos.index');
Route::post('/equipos', [EquipoController::class, 'store'])->name('equipos.store');
Route::get('/equipos/create', [EquipoController::class, 'create'])->name('equipos.create');
Route::delete('/equipos/{equipo}', [EquipoController::class, 'destroy'])->name('equipos.destroy');
Route::put('/equipos/{equipo}', [EquipoController::class, 'update'])->name('equipos.update');
Route::get('/equipos/{equipo}/edit', [EquipoController::class , 'edit'])->name('equipos.edit');


Route::get('/eventos', [EventoController:: class, 'index'])->name('eventos.index');
Route::post('/eventos', [EventoController::class, 'store'])->name('eventos.store');
Route::get('/eventos/create', [EventoController::class, 'create'])->name('eventos.create');
Route::delete('/eventos/{evento}', [EventoController::class, 'destroy'])->name('eventos.destroy');
Route::put('/eventos/{evento}', [EventoController::class, 'update'])->name('eventos.update');
Route::get('/eventos/{evento}/edit', [EventoController::class , 'edit'])->name('eventos.edit');

Route::get('/participaciones', [ParticipacionController:: class, 'index'])->name('participaciones.index');
Route::post('/participaciones', [ParticipacionController::class, 'store'])->name('participaciones.store');
Route::get('/participaciones/create', [ParticipacionController::class, 'create'])->name('participaciones.create');
Route::delete('/participaciones/{participacion}', [ParticipacionController::class, 'destroy'])->name('participaciones.destroy');
Route::put('/participaciones/{participacion}', [ParticipacionController::class, 'update'])->name('participaciones.update');
Route::get('/participaciones/{participacion}/edit', [ParticipacionController::class , 'edit'])->name('participaciones.edit');