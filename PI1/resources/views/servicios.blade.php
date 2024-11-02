<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios - Clínica de Salud Mental</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        :root { 
            --primary-color: #204051;  /* Azul oscuro */
            --secondary-color: #3b6978; /* Azul medio */
            --accent-color: #84a9ac;    /* Azul claro */
            --background-color: #cae8d5; /* Verde suave */
            --highlight-color: #f4f9f4; /* Blanco neutro */
            --navbar-footer-background-color: #D3E4E6; /* Color de fondo de la navbar */
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding-top: 80px; /* Compensación por la barra de navegación */
            background-color: var(--background-color);
        }

        .navbar-custom {
            background-color: var(--navbar-footer-background-color);
        }

        /* Barra de navegación fija */
        .navbar-fixed-top {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1030; /* Hace que esté sobre los demás elementos */
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        .navbar-custom .nav-link, .navbar-custom .navbar-brand {
            color: #3b6978 !important; /* Color de texto de la navbar */
        }

        .navbar-custom .nav-link:hover {
            color: var(--accent-color) !important; /* Color al pasar el mouse */
        }

        h1 {
            text-align: center;
            color: var(--primary-color);
            margin-top: 20px;
        }

        .servicio {
            background: white;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            margin: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
            width: 250px; /* Ancho fijo para los cuadros */
        }

        .servicio:hover {
            transform: scale(1.05);
        }

        .container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            justify-items: center;
            padding: 20px;
        }

        .btn-action {
            background-color: var(--accent-color);
            color: var(--highlight-color);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-custom navbar-fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">Mental Balance</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/Servicios">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/tratamiento">Qué tratamos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/registroM">Regístrate como médico</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/registroP">Regístrate como paciente</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <h1 class="mt-5">Servicios de la Clínica de Salud Mental</h1>
    <div class="container" id="servicios">
        <div class="servicio">
            <h2>Terapia con Escritura</h2>
            <p>Utilizamos la escritura como una herramienta terapéutica para ayudar a los pacientes a expresar sus emociones y reflexionar sobre sus experiencias.</p>
        </div>
        <div class="servicio">
            <h2>Terapia Cognitivo-Conductual</h2>
            <p>Una forma de terapia que se centra en identificar y cambiar patrones de pensamiento negativos y comportamientos no deseados.</p>
        </div>
        <div class="servicio">
            <h2>Terapia Familiar</h2>
            <p>Sesiones diseñadas para mejorar la comunicación y resolver conflictos dentro de la unidad familiar, fomentando un ambiente saludable.</p>
        </div>
        <div class="servicio">
            <h2>Terapia de Grupo</h2>
            <p>Grupos de apoyo donde los participantes comparten sus experiencias y reciben orientación en un entorno colaborativo.</p>
        </div>
        <div class="servicio">
            <h2>Mindfulness y Meditación</h2>
            <p>Técnicas para fomentar la atención plena y reducir el estrés, ayudando a los pacientes a vivir en el presente.</p>
        </div>
        <div class="servicio">
            <h2>Terapia Artística</h2>
            <p>Utilización de diferentes formas de arte para facilitar la expresión personal y explorar emociones de manera creativa.</p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
