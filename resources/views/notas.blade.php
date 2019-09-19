@extends('plantilla')
@section("sección")
<div class="container mmy-4">
    <h1 class="display-4">Notas</h1>
    @if(session('mensaje'))
        <div class="alert alert-success">{{session('mensaje')}}</div>
        @endif
    <form action="{{route('notas.crear')}}" method="POST">
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
<input type =" text" name ="nombre" placeholder="Nombre" class="form-control mb-2" value="{{old('nombre')}}">
        <input type =" text" name ="descripción" placeholder="Descripción" class="form-control mb-2" value="{{old('descripción')}}">
   <button class="btn btn-primary btn-block " type = "submit">Agregar</button>
    </form>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripción</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($notas as $nota)
            <tr>
                <th scope="row">{{$nota->id}}</th>
                <td>
                    <a href="{{route('notas.detalle',$nota)}}">
                        {{$nota->nombre}}
                    </a>
                    </td>
                <td>{{$nota->descripción}}</td>
                <td>
                    <a href="{{route ('notas.editar',$nota)}}" class="btn btn-warning btn-sm">Editar</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
