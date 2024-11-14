<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Integral de Administración</title>
    <link rel="stylesheet" href="{{ asset('css/siadmon.css') }}">
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid login-page">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-md-6 col-lg-4 text-center login-container">
                <div class="header-section">
                    <img src="{{ asset('img/logo.png') }}" alt="Mental Balance" class="logo">
                    <h1 class="system-title">Sistema Integral de Administración</h1>
                </div>
                <div class="login-form">
                    <form>
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Usuario:</label>
                            <input type="text" class="form-control" id="usuario" name="usuario">
                        </div>
                        <div class="mb-3">
                            <label for="contrasena" class="form-label">Contraseña:</label>
                            <input type="password" class="form-control" id="contrasena" name="contrasena">
                        </div>
                        <div class="button-section">
                            <button type="submit" class="btn btn-primary btn-login">Entrar</button>
                            <button type="button" class="btn btn-secondary btn-reset">Cambiar Contraseña</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
