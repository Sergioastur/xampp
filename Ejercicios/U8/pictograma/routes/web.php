<?php

use App\Http\Controllers\AgendaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('listado', [AgendaController::class, 'agenda.listado']);
