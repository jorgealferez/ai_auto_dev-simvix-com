<?php
// Archivo: layout.blade.php
// Descripción: Plantilla principal de la aplicación, que integra la funcionalidad de la interfaz moderna responsiva con Bootstrap y la identidad corporativa.
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Startup Tecnológica – Innovación con IA</title>
    <!-- Importar CSS de Bootstrap para un diseño moderno y responsivo -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilos personalizados para reflejar la identidad corporativa */
        body {
            background-color: #f8f9fa;
            color: #343a40;
        }
        .navbar-custom {
            background-color: #0069d9;
        }
        .navbar-custom .navbar-brand,
        .navbar-custom .nav-link {
            color: #fff;
        }
    </style>
</head>
<body>
    <!-- Navegación principal -->
    <nav class="navbar navbar-expand-lg navbar-custom">
      <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Startup IA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">≡</span>
        </button>
        <div class="collapse navbar-collapse" id="navbarContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="#">Producto</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Servicios</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Contacto</a></li>
          </ul>
        </div>
      </div>
    </nav>
    
    <!-- Contenedor para contenido dinámico -->
    <div class="container my-5">
        @yield('content')
    </div>
    
    <!-- Footer corporativo -->
    <footer class="bg-light text-center py-3">
        <div class="container">
            <p>&copy; {{ date('Y') }} Startup Tecnológica. Todos los derechos reservados.</p>
        </div>
    </footer>
    
    <!-- Scripts Javascript para interacciones dinámicas -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        // Ejemplo simple de interacción dinámica: mensaje en la consola
        console.log('Interfaz cargada. Bienvenido a la experiencia IA.');
      });
    </script>
</body>
</html>
