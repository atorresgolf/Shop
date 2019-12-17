@extends('plantilla')

@section('principal')
<div class="container" style="position: relative; left: 0px; top: 105px;">
    <div class=" card-header text-white bg-dark" style="width:24rem">
        DRIVERS
    </div>

    <div class="row">
        <div class="col-md-auto col-lg-4">
            @foreach($productos as $producto)
            @if($producto->id_categoria == 1 )

            <div class="card mt-5" style="width:18rem">
                <div class=" card-header text-white bg-dark" style="width:100%">
                    {{$producto->nombre}}
                </div>
                <img src="/storage/{{$producto->poster}}" class="card-img-top img-fluid" alt="...">
                <div class="card-body" style="height:14.5rem">
                    <h3 class="card-title">Consulte por varas</h3>
                    <p class="card-text"></p>
                    <a href="/detalle/{{$producto->id}}" class="card-link">Ver Detalles</a>
                    <form method="POST" action="EnCarrito" class="inline-block">
                        {{ csrf_field() }}
                        <input type="hidden" name="producto_id" value="{{$producto->id}}">
                        <input type="submit" value="Agregar al Carrito" class="btn btn-success">
                    </form>
                </div>
            </div>

            @endif

            @endforeach
        </div>

        @endsection