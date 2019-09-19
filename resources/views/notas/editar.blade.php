@extends('plantilla')

@section('sección')
    <h1>Editando Nota {{$nota->id}}</h1>
    @if(session('mensaje'))
        <div class="alert alert-success">{{session('mensaje')}}</div>
    @endif
    <form action="{{route('notas.actualizar',$nota->id)}}" method="POST">
        @method('PUT')
        @csrf
        @error('nombre')
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            El nombre es requerido
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @enderror
        @if ($errors->has('descripción'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                La descripción es requerida
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <input type =" text" name ="nombre" placeholder="Nombre" class="form-control mb-2" value="{{$nota->nombre}}">

        <input type =" text" name ="descripción" placeholder="Descripción" class="form-control mb-2" value="{{$nota->descripción}}">

        <button class="btn btn-warning btn-block " type = "submit">Actualizar</button>
    </form>
    @endsection
