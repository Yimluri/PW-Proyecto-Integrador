@extends('layouts.adminpla')
@section('content')
<div class="container my-5">
    <h2 class="text-center mb-4">Bienvenido al Panel de Administración</h2>
</div>

<div class="container my-4">
    @if(session('admin_authenticated') && Auth::check() && Auth::user())
        <h4 class="text-center">Administrador: {{ Auth::user()->nombres }} {{ Auth::user()->apellidos }}</h4>
    @else
        <h4 class="text-center text-danger">No se pudo cargar la información del administrador.</h4>
    @endif
    <img src="{{ asset('img/admon.webp') }}" alt="Mental Balance Building" class="header-image">

</div>
@endsection
