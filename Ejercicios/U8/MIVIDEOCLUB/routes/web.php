<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    /* return view('welcome'); */
    echo "Hola mundo";
});

Route::get('pagina1', function () {
    return 'Estas en pagina 1';
});

Route::get('pagina2/{id}', function ($id) {
    return 'Usuario '.$id;
})->where('id', '[0-9]+');

Route::get('pagina3/{name?}', function($name = null)
{
    return $name;
});