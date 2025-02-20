

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página Principal</title>
    <!-- Vincula tu hoja de estilos -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
    // Integración de la funcionalidad: Barra de navegación principal
    ?>
    <nav>
        <ul class="navigation">
            <li><a href="<?php echo url('/'); ?>">Inicio</a></li>
            <li><a href="#">Acerca de</a></li>
            <li><a href="#">Servicios</a></li>
            <li><a href="#">Contacto</a></li>
        </ul>
    </nav>

    <!-- Aquí se puede agregar el contenido principal de la página -->
    <div class="container">
        <h1>Bienvenido a la Página Principal</h1>
        <p>Contenido de la página...</p>
    </div>
</body>
</html>