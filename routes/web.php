<?php

/**
 * Archivo: routes/web.php
 * Descripción: Código integrado en el proyecto Laravel. Se añade la ruta principal que muestra la página de inicio.
 */

use Illuminate\Support\Facades\Route;

// Ruta principal que muestra la página de inicio
Route::get('/', function () {
    return view('home');
});
