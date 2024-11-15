@extends('layouts.app')

@section('title', 'Registro de Paciente - Mental Balance Health Clinic')

@section('content')
    <div class="form-container" style="background: white; padding: 20px; border-radius: 10px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); max-width: 600px; margin: 30px auto;">
        <h2 style="text-align: center; color: #204051; margin: 20px 0;">Registro de Paciente</h2>
        <form>
            <div class="form-group">
                <label for="nombre" style="color: #204051;">Nombre completo:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>

            <div class="form-group">
                <label for="correo" style="color: #204051;">Correo electrónico:</label>
                <input type="email" class="form-control" id="correo" name="correo" required>
            </div>

            <div class="form-group">
                <label for="telefono" style="color: #204051;">Número de teléfono:</label>
                <input type="tel" class="form-control" id="telefono" name="telefono" required>
            </div>

            <div class="form-group">
                <label for="edad" style="color: #204051;">Edad:</label>
                <input type="number" class="form-control" id="edad" name="edad" required min="0">
            </div>

            <div class="form-group">
                <label for="genero" style="color: #204051;">Género:</label>
                <select class="form-control" id="genero" name="genero" required>
                    <option value="">Seleccionar</option>
                    <option value="femenino">Femenino</option>
                    <option value="masculino">Masculino</option>
                    <option value="otro">Otro</option>
                    <option value="nose">Prefiero no decirlo</option>
                </select>
            </div>

            <div class="form-group">
                <label for="password" style="color: #204051;">Contraseña:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class="form-group">
                <label for="confirmar_password" style="color: #204051;">Confirmar Contraseña:</label>
                <input type="password" class="form-control" id="confirmar_password" name="confirmar_password" required>
            </div>

            <button type="submit" class="btn btn-submit" style="background-color: #84a9ac; color: #f4f9f4;">Registrarse</button>
        </form>
    </div>
@endsection
