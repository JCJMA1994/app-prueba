@extends('plantilla')

@section('sección')
    <h1>Nosotros</h1>
    @foreach($equipo as $item)
        <a href="{{route('nosotros',$item)}}" class="h4 text-danger" >{{$item}}</a><br>
    @endforeach

    @if(!empty($nombre))

        @switch($nombre)
            @case($nombre == 'Jose')
            <h2 class="mt-5">{{$nombre}}</h2>
            <p>Lorem ipsum dolor sit amet,
                consectetur adipisicing elit. Aliquid, tenetur,
                veniam? A aliquam corporis doloribus eius error et harum
                inventore iure libero minima nihil quae, quam sit temporibus
                unde veritatis.</p>
            @break
        @endswitch
    @endif
@endsection
