@extends('layouts.app')

@section('title', 'Servicios - Mental Balance Health Clinic')

@section('content')
    <h1 class="mt-5" style="text-align: center; color: #204051;">Servicios de la Clínica de Salud Mental</h1>
    <div class="container" id="servicios" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 20px; justify-items: center; padding: 20px;">
        <div class="servicio" style="background: white; border: 1px solid #ccc; border-radius: 5px; padding: 20px; margin: 15px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); transition: transform 0.3s; width: 250px;">
            <h2 style="color: #204051;">Terapia con Escritura</h2>
            <p>Utilizamos la escritura como una herramienta terapéutica para ayudar a los pacientes a expresar sus emociones y reflexionar sobre sus experiencias.</p>
        </div>
        <div class="servicio" style="background: white; border: 1px solid #ccc; border-radius: 5px; padding: 20px; margin: 15px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); transition: transform 0.3s; width: 250px;">
            <h2 style="color: #204051;">Terapia Cognitivo-Conductual</h2>
            <p>Una forma de terapia que se centra en identificar y cambiar patrones de pensamiento negativos y comportamientos no deseados.</p>
        </div>
        <div class="servicio" style="background: white; border: 1px solid #ccc; border-radius: 5px; padding: 20px; margin: 15px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); transition: transform 0.3s; width: 250px;">
            <h2 style="color: #204051;">Terapia Familiar</h2>
            <p>Sesiones diseñadas para mejorar la comunicación y resolver conflictos dentro de la unidad familiar, fomentando un ambiente saludable.</p>
        </div>
        <div class="servicio" style="background: white; border: 1px solid #ccc; border-radius: 5px; padding: 20px; margin: 15px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); transition: transform 0.3s; width: 250px;">
            <h2 style="color: #204051;">Terapia de Grupo</h2>
            <p>Grupos de apoyo donde los participantes comparten sus experiencias y reciben orientación en un entorno colaborativo.</p>
        </div>
        <div class="servicio" style="background: white; border: 1px solid #ccc; border-radius: 5px; padding: 20px; margin: 15px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); transition: transform 0.3s; width: 250px;">
            <h2 style="color: #204051;">Mindfulness y Meditación</h2>
            <p>Técnicas para fomentar la atención plena y reducir el estrés, ayudando a los pacientes a vivir en el presente.</p>
        </div>
        <div class="servicio" style="background: white; border: 1px solid #ccc; border-radius: 5px; padding: 20px; margin: 15px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); transition: transform 0.3s; width: 250px;">
            <h2 style="color: #204051;">Terapia Artística</h2>
            <p>Utilización de diferentes formas de arte para facilitar la expresión personal y explorar emociones de manera creativa.</p>
        </div>
    </div>
@endsection

<style>
    .servicio:hover {
        transform: scale(1.05);
    }
</style>
