<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Profesionales - Clínica de Salud Mental</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        :root {
            --primary-color: #204051;  /* Azul oscuro */
            --secondary-color: #3b6978; /* Azul medio */
            --accent-color: #84a9ac;    /* Azul claro */
            --background-color: #cae8d5; /* Verde suave */
            --highlight-color: #f4f9f4; /* Blanco neutro */
            --navbar-footer-background-color: #D3E4E6; /* Color de fondo de la navbar */
            --navbar-text-color: #1b3a5b; /* Color de texto más oscuro */
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

        .navbar-fixed-top {
            position: fixed;
            top: 0; /* Fijada en la parte superior */
            width: 100%;
            z-index: 1030; /* Hace que esté sobre los demás elementos */
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1); /* Sombra para prominencia */
        }

        .navbar-custom .nav-link, .navbar-custom .navbar-brand {
            color: var(--navbar-text-color) !important; /* Color de texto más oscuro */
        }

        .navbar-custom .nav-link:hover {
            color: var(--accent-color) !important; /* Color al pasar el mouse */
        }

        h2 {
            text-align: center;
            color: var(--primary-color);
            margin: 20px 0;
        }

        .form-container {
            max-width: 600px;
            margin: 30px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .form-group label {
            color: var(--primary-color);
        }

        .btn-submit {
            background-color: var(--accent-color);
            color: var(--highlight-color);
        }

        .btn-submit:hover {
            background-color: var(--secondary-color);
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
                        <a class="nav-link" href="/servicios">Servicios</a>
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
                    <li class="nav-item">
                        <a class="btn btn-action" href="#">PIDE CITA</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="form-container">
        <h2>Registro de Profesionales</h2>
        <form>
            <div class="form-group">
                <label for="nombre">Nombre completo:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>

            <div class="form-group">
                <label for="correo">Correo electrónico:</label>
                <input type="email" class="form-control" id="correo" name="correo" required>
            </div>

            <div class="form-group">
                <label for="telefono">Número de teléfono:</label>
                <input type="tel" class="form-control" id="telefono" name="telefono" required>
            </div>

            <div class="form-group">
                <label for="especialidad">Especialidad:</label>
                <input type="text" class="form-control" id="especialidad" name="especialidad" required>
            </div>

            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class="form-group">
                <label for="confirm_contra">Confirmar Contraseña:</label>
                <input type="password" class="form-control" id="confirm_contra" name="confirm_contra" required>
            </div>

            <button type="submit" class="btn btn-submit">Registrarse</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
