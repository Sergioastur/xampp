<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
    /* echo "Pantalla principal"; */
});

Route::get('login', function () {
    return view('auth/login');
   /*  return 'Login usuario'; */
});

Route::get('logout', function () {
    return 'Logout usuario';
});

Route::get('catalog', function () {
    return view('catalog/catalog');
});

Route::get('catalog/show/{id}', function ($id) {
    return view('catalog/show');
});

Route::get('catalog/create', function () {
    return view('catalog/create');
});

Route::get('catalog/edit/{id}', function ($id) {
    return view('catalog/edit');
});
