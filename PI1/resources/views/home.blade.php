@extends('layouts.app')
@section('title', 'Inicio')
@section('content')

    <!-- Imagen a lo ancho de la página -->
    <img src="{{ asset('images/image.png') }}" alt="Mental Balance Building" class="header-image">
    <!-- Sección de Bienvenida -->
    <div class="jumbotron text-center" style="background-color: var(--background-color);">
        <h1 class="display-4">Bienvenidos a Mental Balance</h1>
        <p class="lead">Al servicio de tu salud</p>
        <a href="#" class="btn btn-action btn-lg">Conoce nuestros servicios</a>
    </div>
    <!-- Sección de Servicios Destacados -->
    <div class="container my-5">
        <h2 class="text-center mb-4" style="color: var(--primary-color);">Nuestros Servicios</h2>
        <div class="row">
            <div class="col-md-4 text-center">
                <h4 style="color: var(--accent-color);">Psicoterapia</h4>
                <p>Ofrecemos terapias individuales, familiares y de pareja.</p>
            </div>
            <div class="col-md-4 text-center">
                <h4 style="color: var(--accent-color);">Psiquiatría</h4>
                <p>Evaluación y tratamiento médico especializado.</p>
            </div>
            <div class="col-md-4 text-center">
                <h4 style="color: var(--accent-color);">Asesoramiento</h4>
                <p>Apoyo para el manejo de estrés, ansiedad y otros trastornos.</p>
            </div>
        </div>
    </div>

    <!-- Hola jimena ya estoy en el repo  -->
    <!-- Sección de Llamada a la Acción -->
    <div class="text-center my-5">
        <p>¿Interesado en saber más?</p>
        <a href="#" class="btn btn-action btn-lg">Agenda una Cita</a>
    </div>
@endsection