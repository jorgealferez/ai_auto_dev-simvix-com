<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

// Código original
// (Aquí se pueden agregar otras rutas o lógica del proyecto)

// Integración de la funcionalidad: Ruta para el dashboard interactivo
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
