<?php

use App\Http\Controllers\AgendaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AgendaController::class, 'listado']);

Route::get('agenda', [AgendaController::class, 'listado']);

Route::get('agenda/insertar', [AgendaController::class, 'insertar']);
Route::post('agenda/insertar', [AgendaController::class, 'store'])->name('agenda.store');

Route::get('agenda/mostrar', [AgendaController::class, 'mostrar']);
Route::post('agenda/mostrar', [AgendaController::class, 'show'])->name('agenda.show');