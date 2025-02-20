<?php
// Archivo: layout.blade.php
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corporativo - @yield('title')</title>
    <!-- Agregar CSS global, puede utilizar un framework o su propio CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('partials.header')
    @include('partials.navigation')
    <main>
        @yield('content')
    </main>
    @include('partials.footer')
    <!-- Agregar JS global -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>