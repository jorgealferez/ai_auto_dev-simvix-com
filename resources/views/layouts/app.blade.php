<?php
// index.php: Archivo principal que integra la funcionalidad en el código original

// Iniciamos la sesión si es necesario
session_start();

// Puede agregarse lógica adicional de PHP aquí, como conexión a bases de datos, manejo de formularios, etc.

?><!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Startup Innovación y IA</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilos personalizados -->
    <style>
        /* Estilos generales para reflejar la identidad corporativa */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f8fa;
            color: #333;
        }
        .navbar {
            background-color: #004085;
        }
        .navbar-brand, .nav-link {
            color: #fff !important;
        }
        .hero {
            background: url('https://via.placeholder.com/1920x600') no-repeat center center;
            background-size: cover;
            padding: 100px 0;
            color: #fff;
            text-align: center;
        }
        .footer {
            background-color: #004085;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Cabecera y navegación -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">TechStartup</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido principal -->
    <main class="container my-5">
        <?php
        // Se integra el contenido específico de cada página
        // En un framework se usaría un método como @yield('content'), pero aquí se muestra contenido estático.
        echo '<h1>Bienvenido a TechStartup</h1>';
        echo '<p>Explora nuestras innovadoras soluciones en tecnología e inteligencia artificial.</p>';
        ?>
    </main>

    <!-- Pie de página -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2023 TechStartup. Todos los derechos reservados.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
