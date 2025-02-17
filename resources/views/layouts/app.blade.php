<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi App')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-light">

    @include('components.navbar') <!-- Navbar superior -->

    <div class="container mt-5 pt-4">
        @yield('content') <!-- Contenido de la página -->
    </div>

    @include('components.footer') <!-- Navbar inferior -->

</body>
</html>
