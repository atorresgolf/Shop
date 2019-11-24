@extends('plantilla')

@section('principal')
div class="container" style="position: relative; left: 0px; top: 105px;">
    <div class="row">
        <div class="col-md-auto col-lg-4">
            <div class="card mt-5" style="width:18rem">
                <div class=" card-header text-white bg-dark" style="width:100%">
                    HIERROS CALLAWAY
                </div>
                <img src="img/callaway_hierros_resultado.jpg" class="card-img-top img-fluid" alt="...">
                <div class="card-body" style="height:10rem">
                    <ul>
        @foreach ($productos as $producto)
        <li>
            <h3 class="card-title">{{$producto->nombre_marca}}</h3>
           <p class="card-text">{{$producto->descripcion}}</p>
            <p class="card-text"> $ {{$producto->precio}}</p>
           
        </li>
        @endforeach
    </ul>
                    
              
                    <a href="#" class="btn btn-success">Agregar al Carrito</a>
                </div>
            </div>
        </div>


@endsection