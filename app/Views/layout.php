<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: column;
            height: 100vh;
            margin: 0;
        }

        .main-wrapper {
            display: flex;
            flex: 1;
        }

        .sidebar {
            width: 250px;
            background-color: #343a40;
            color: white;
            padding-top: 20px;
        }

        .sidebar .nav-link {
            color: white;
        }

        .sidebar .nav-link:hover {
            background-color: #495057;
        }

        .submenu {
            padding-left: 20px;
        }

        .main-content {
            flex-grow: 1;
            padding: 20px;
            overflow-y: auto;
        }

        footer {
            background-color: #343a40;
            color: white;
            text-align: right;
            padding: 10px 20px;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <div class="main-wrapper">
        <div class="sidebar">
            <h4 class="text-center">Menú</h4>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#"><i class="bi bi-house-door"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#seguridadSubmenu" data-bs-toggle="collapse" aria-expanded="false">
                        <i class="bi bi-shield-lock"></i> Seguridad
                    </a>
                    <ul class="collapse" id="seguridadSubmenu">
                        <li><a class="nav-link submenu" href="#">Usuarios</a></li>
                        <li><a class="nav-link submenu" href="#">Roles</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-person-lines-fill"></i> Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-question-circle"></i> Ayuda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-box-arrow-right"></i> Salir</a>
                </li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Bienvenido al Dashboard</h1>
            <p>Contenido principal de la página.</p>
        </div>
    </div>

    <footer>
        Hora actual: <span id="clock">--:--:--</span>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Actualizar hora cada segundo
        function updateClock() {
            const now = new Date();
            const hora = now.toLocaleTimeString();
            document.getElementById('clock').textContent = hora;
        }

        setInterval(updateClock, 1000);
        updateClock(); // ejecutar al cargar
    </script>
</body>
</html>