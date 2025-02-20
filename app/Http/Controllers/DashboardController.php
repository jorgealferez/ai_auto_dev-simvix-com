<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Muestra el dashboard con gráficos interactivos y widgets basados en IA.
     */
    public function index()
    {
        // Datos de ejemplo para el gráfico interactivo (por ejemplo, rendimiento mensual).
        $data = [
            'labels' => ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio'],
            'values' => [120, 150, 180, 90, 200, 170]
        ];

        // Datos simulados para el widget de inteligencia artificial
        $aiInsights = [
            'mensaje' => 'Análisis avanzado: Se detectaron tendencias positivas en las métricas clave.',
            'puntaje'  => 85
        ];

        // Retorna la vista 'dashboard' con los datos necesarios
        return view('dashboard', compact('data', 'aiInsights'));
    }
}
