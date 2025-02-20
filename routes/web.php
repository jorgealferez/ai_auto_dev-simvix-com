<?php

use Illuminate\Support\Facades\Route;

// Ruta principal que carga la vista de inicio
Route::get('/', function () {
    return view('home');
});
