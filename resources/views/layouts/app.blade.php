<?php
// Este es el archivo principal del layout, por ejemplo: layout.blade.php
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Inicio')</title>
    <!-- Comentario: Agrega aquí tus archivos CSS o frameworks para lograr un diseño moderno -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <h1>Nombre de la Startup</h1>
            <nav>
                <ul>
                    <li><a href="{{ url('/') }}">Inicio</a></li>
                    <li><a href="{{ url('/productos') }}">Productos</a></li>
                    <li><a href="{{ url('/servicios') }}">Servicios</a></li>
                    <!-- Puedes agregar más elementos de menú según sea necesario -->
                </ul>
            </nav>
        </div>
    </header>

    <!-- Área de contenido principal -->
    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> Nombre de la Startup. Todos los derechos reservados.</p>
        </div>
    </footer>

    <!-- Comentario: Agrega aquí tus archivos JS para funcionalidades modernas -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>