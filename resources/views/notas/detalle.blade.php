@extends ('plantilla')
@section('sección')
    <h1>Detalle de notas</h1>
    <h4>Id: {{$nota->id}}</h4>
    <h4>Nombre: {{$nota->nombre}}</h4>
    <h4>Detalle: {{$nota->descripción}}</h4>

@endsection
