<nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <button class="btn btn-outline-light" onclick="toggleSidebar()">☰</button>
        <span class="navbar-brand mx-auto">Mi App</span>
    </div>
</nav>

<div id="sidebar" class="bg-dark text-white position-fixed vh-100 p-3" style="width: 250px; left: -250px; top: 0; transition: left 0.3s;">
    <a href="javascript:void(0)" class="text-white" onclick="toggleSidebar()">✖ Cerrar</a>
    <a href="{{ route('home') }}" class="d-block text-white mt-2">Inicio</a>
    <a href="{{ route('profile') }}" class="d-block text-white">Perfil</a>
    <a href="{{ route('settings') }}" class="d-block text-white">Configuración</a>
</div>

<script>
    function toggleSidebar() {
        let sidebar = document.getElementById('sidebar');
        sidebar.style.left = sidebar.style.left === '0px' ? '-250px' : '0px';
    }
</script>
