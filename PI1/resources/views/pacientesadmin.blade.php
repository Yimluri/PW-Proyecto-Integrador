@extends('layouts.adminpla')
@section('content')
<div class="container my-5">
    <h2 class="text-center mb-4">Administración de Pacientes</h2>
    <form action="{{ route('pacientes.buscar') }}" method="GET">
        @csrf
        <div class="row mb-3 justify-content-center">
            <div class="col-md-2">
                <input type="text" class="form-control mb-2" placeholder="Nombre" name="nombre" id="nombre" onfocus="disableOthers('nombre')">
            </div>
            <div class="col-md-2">
                <input type="text" class="form-control mb-2" placeholder="NSS" name="nss" id="nss" onfocus="disableOthers('nss')">
            </div>
            <div class="col-md-2">
                <input type="text" class="form-control mb-2" placeholder="IDEE" name="idee" id="idee" onfocus="disableOthers('idee')">
            </div>
        </div>
        <div class="row mb-4 justify-content-center">
            <div class="col-md-8 text-center">
                <button type="button" class="btn btn-primary mx-2 mb-2">Nuevo Expediente</button>
                <button type="submit" class="btn btn-secondary mx-2 mb-2">Buscar</button>
                <button type="button" class="btn btn-danger mx-2 mb-2" onclick="resetFields()">Limpiar</button>
            </div>
        </div>
    </form>
    
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th scope="col">NSS</th>
                    <th scope="col">Nombre</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($pacientes) && count($pacientes) > 0)
                    @foreach($pacientes as $paciente)
                        <tr>
                            <td><a href="{{ route('pacientes.detalle', ['id' => $paciente->nss]) }}">{{ $paciente->nss }}</a></td>
                            <td>{{ $paciente->nombre }}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="2" class="text-center">No se encontraron pacientes</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>

<script>
    function disableOthers(activeField) {
        const fields = ['nombre', 'nss', 'idee'];
        fields.forEach(field => {
            if (field !== activeField) {
                document.getElementById(field).disabled = true;
            }
        });
    }

    function resetFields() {
        const fields = ['nombre', 'nss', 'idee'];
        fields.forEach(field => {
            const element = document.getElementById(field);
            element.disabled = false;
            element.value = '';
        });
    }
</script>
@endsection
