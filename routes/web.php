<?php

// Archivo de rutas que integra la funcionalidad principal en el proyecto

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Ruta principal que carga la interfaz de usuario
Route::get('/', [HomeController::class, 'index'])->name('home');
