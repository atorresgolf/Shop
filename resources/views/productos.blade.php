@extends('plantilla')

@section('principal')
<div class="container" style="position: relative; left: 0px; top: 105px;">
    <div class="row">
        <div class="col-md-auto col-lg-4">
            <div class="card mt-5" style="width:18rem">
                @foreach ($productos as $producto)
                <div class=" card-header text-white bg-dark" style="width:100%">
                    <p class="card-text">{{$producto->descripcion}}</p>
                </div>
                <img src="/storage/{{$producto->poster}}" class="card-img-top img-fluid" alt="...">
                <div class="card-body" style="height:10rem">
                    <h3 class="card-title">{{$producto->nombre}}</h3>
                     <h3 class="card-title">Precio: $ {{$producto->precio}}</h3>

                    <p class="card-text"><br></p>
                    <a href="#" class="btn btn-success">Agregar al Carrito</a>
                </div>
            </div>
        </div>
    </div>
</div>
        @endforeach
                    
              
                    <a href="#" class="btn btn-success">Agregar al Carrito</a>
                


@endsection