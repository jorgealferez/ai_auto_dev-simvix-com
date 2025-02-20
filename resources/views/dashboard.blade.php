<?php
// Ejemplo: Datos de la IA y del gráfico. En un escenario real, estos datos provendrían de una base de datos o de otra fuente de datos.
$aiInsights = [
    'mensaje' => 'Análisis realizado con éxito.',
    'puntaje' => 85
];

$data = [
    'labels' => ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio'],
    'values' => [10, 20, 30, 25, 15, 45]
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Interactivo</title>
    <!-- Incluir Bootstrap para el layout corporativo -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Incluir Chart.js para gráficos interactivos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="container-fluid p-4">
        <h1 class="mb-4">Dashboard Interactivo con IA</h1>

        <!-- Sección del gráfico interactivo -->
        <div class="card mb-4">
            <div class="card-header">
                <h2>Gráfico de Rendimiento</h2>
            </div>
            <div class="card-body">
                <canvas id="performanceChart"></canvas>
            </div>
        </div>

        <!-- Widget de IA -->
        <div class="card">
            <div class="card-header">
                <h2>Widget de Inteligencia Artificial</h2>
            </div>
            <div class="card-body">
                <p><?php echo $aiInsights['mensaje']; ?></p>
                <p>Puntaje de análisis: <strong><?php echo $aiInsights['puntaje']; ?></strong></p>
            </div>
        </div>
    </div>

    <!-- Script para inicializar el gráfico -->
    <script>
        // Pasar los datos de PHP a JavaScript
        const labels = <?php echo json_encode($data['labels']); ?>;
        const values = <?php echo json_encode($data['values']); ?>;

        const ctx = document.getElementById('performanceChart').getContext('2d');
        const performanceChart = new Chart(ctx, {
            type: 'line', // Tipo de gráfico
            data: {
                labels: labels,
                datasets: [{
                    label: 'Métricas por mes',
                    data: values,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 2,
                    tension: 0.4,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Gráfico de Rendimiento Mensual'
                    }
                }
            }
        });
    </script>
</body>
</html>