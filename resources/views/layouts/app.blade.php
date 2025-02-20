<?php
// Archivo: layout.blade.php
// Este es el layout principal que integra la funcionalidad requerida
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : 'Corporativo Moderno'; // Título dinámico ?></title>
    <!-- Importación de fuentes y estilos modernos -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!-- Se utiliza Tailwind CSS para los estilos -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Estilos adicionales -->
    <style>
        body { font-family: 'Roboto', sans-serif; }
        header { background-color: #1E293B; }
        header nav a { color: #F1F5F9; }
        footer { background-color: #1E293B; color: #F1F5F9; }
    </style>
</head>
<body class="antialiased">
    <!-- Header corporativo -->
    <header class="py-4 shadow-md">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <div class="text-white text-2xl font-bold">Mi Startup IA</div>
            <nav>
                <a href="#" class="mx-2 hover:text-gray-300">Inicio</a>
                <a href="#" class="mx-2 hover:text-gray-300">Productos</a>
                <a href="#" class="mx-2 hover:text-gray-300">Contacto</a>
            </nav>
        </div>
    </header>

    <!-- Contenido principal -->
    <main class="container mx-auto px-4 my-8">
        <?php
        // Se incluye el contenido dinámico de cada vista
        if (isset($content)) {
            echo $content;
        } else {
            // Contenido por defecto si no se ha definido nada
            echo '<p>Bienvenido a Mi Startup IA.</p>';
        }
        ?>
    </main>

    <!-- Footer corporativo -->
    <footer class="py-4">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2023 Mi Startup IA. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>
