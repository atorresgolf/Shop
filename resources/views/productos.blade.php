@extends('plantilla')

@section('principal')

<ul>
        @foreach ($productos as $producto)
        <li>
           <p> {{$producto->descripcion}} </p>
        </li>
        @endforeach
    </ul>

@endsection