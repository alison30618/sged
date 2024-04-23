<?php

use App\Http\Controllers\EquipoController;
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