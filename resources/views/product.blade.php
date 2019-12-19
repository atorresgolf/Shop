@extends('plantilla')

@section('principal')
.
<div class="container" style="position: relative; left: 0px; top: 105px;">
    <div class=" card-header text-white bg-dark mx-auto text-center text-uppercase" style="width:24rem">
        {{$categoria->nombre}}
    </div>

    <div class="row">
        @foreach($categoria->productos as $producto)
        <div class="col-md-auto col-lg-4">
            <div class="card mt-5" style="width:18rem">
                <div class=" card-header text-white bg-dark" style="width:100%">
                    {{$producto->nombre}}
                </div>
                <img src="/../storage/{{$producto->poster}}" class="card-img-top img-fluid" alt="...">
                <div class="card-body" style="height:14.5rem">
                    <h3 class="card-title">Consulte por varas</h3>
                    <p class="card-text"></p>
                    <a href="/detalle/{{$producto->id}}" class="card-link">Ver Detalles</a>
                    <a href="/carrito" class="btn btn-success">Agregar al Carrito</a>
                </div>
            </div>
        </div>

        @endforeach
    </div>
</div>
@endsection