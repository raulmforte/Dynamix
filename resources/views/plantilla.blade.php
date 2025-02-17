<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi App Móvil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
    <script>
        function toggleSidebar() {
            document.getElementById('sidebar').classList.toggle('show');
        }
    </script>
    <style>
        /* Estilos para el sidebar */
        #sidebar {
            position: fixed;
            top: 0;
            left: -250px;
            width: 250px;
            height: 100%;
            background: #343a40;
            transition: left 0.3s ease-in-out;
            padding-top: 60px;
        }
        #sidebar.show {
            left: 0;
        }
        #sidebar a {
            color: white;
            display: block;
            padding: 10px 20px;
            text-decoration: none;
        }
        #sidebar a:hover {
            background: #495057;
        }

        /* Navbar inferior */
        .bottom-nav {
            position: fixed;
            bottom: 0;
            width: 100%;
            background: #fff;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="bg-light">

    <!-- Navbar superior -->
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <button class="btn btn-outline-light" onclick="toggleSidebar()">☰</button>
            <span class="navbar-brand mx-auto">Mi App</span>
        </div>
    </nav>

    <!-- Sidebar -->
    <div id="sidebar">
        <a href="javascript:void(0)" onclick="toggleSidebar()">✖ Cerrar</a>
        <a href="#">Inicio</a>
        <a href="#">Perfil</a>
        <a href="#">Configuración</a>
        <a href="#">Cerrar sesión</a>
    </div>

    <!-- Contenido principal -->
    <div class="container mt-5 pt-5 pb-5">
        <h2>Bienvenido a la App</h2>
        <p>Contenido principal aquí...</p>
    </div>

    <!-- Navbar inferior -->
    <nav class="navbar bottom-nav navbar-light bg-light">
        <div class="container-fluid d-flex justify-content-around">
            <a href="#" class="text-dark">🏠</a>
            <a href="#" class="text-dark">🔍</a>
            <a href="#" class="text-dark">➕</a>
            <a href="#" class="text-dark">📩</a>
            <a href="#" class="text-dark">👤</a>
        </div>
    </nav>

</body>
</html>
