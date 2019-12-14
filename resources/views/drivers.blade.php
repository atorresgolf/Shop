@extends('plantilla')

@section('principal')

<div class="container" style="position: relative; left: 0px; top: 105px;">
    <div class="row">
        <div class="col-md-auto col-lg-4">
            <div class="card mt-5" style="width:18rem">
                <div class=" card-header text-white bg-dark" style="width:100%">
                    DRIVERS CALLAWAY EPIC
                </div>
                <img src=" img/driverepic_resultado.jpg" class="card-img-top img-fluid" alt="...">
                <div class="card-body" style="height:10rem">
                    <h3 class="card-title">Modelo 2019</h3>
                    <p class="card-text"><br></p>
                    <a href="{{ ('detalle') }}" class="card-link">Ver Detalles</a>
                    @include("en_carrito.form", ["producto" => $producto])
                </div>
            </div>
        </div>
        <div class="col-md-auto col-lg-4">
            <div class="card mt-5" style=width:18rem>
                <div class=" card-header text-white bg-dark" style="width:100%">
                    DRIVERS CALLAWAY
                </div>
                <img src="img/drivers_resultado.jpg" class="card-img-top img-fluid" alt="...">
                <div class="card-body" style="height:10rem">
                    <h3 class="card-title">Contamos con la vara que necesita</h3>
                    <p class="card-text"></p>
                    <a href="{{ ('detalle') }}" class="card-link">Ver Detalles</a>
                    @include("en_carrito.form", ["producto" => $producto])
                </div>
            </div>
        </div>
        <div class="col-md-auto col-lg-4">
            <div class="card mt-5" style=width:18rem>
                <div class=" card-header text-white bg-dark" style=" width:100%">
                    DRIVERS CALLAWAY XR
                </div>
                <img src="img/driverxr_resultado.jpg" class="card-img-top" alt="...">
                <div class="card-body" style="height:10rem">
                    <h3 class="card-title">Hot List 2019</h3>
                    <p class="card-text"><br></p>
                    <a href="{{ ('detalle') }}" class="card-link">Ver Detalles</a>
                    @include("en_carrito.form", ["producto" => $producto])
                </div>
            </div>
        </div>
        <div class="col-md-auto col-lg-4">
            <div class="card mt-5" style=width:18rem>
                <div class=" card-header text-white bg-dark" style="width:100%">
                    DRIVERS PING
                </div>
                <img src="img/ping_hierros_resultado.jpg" class="card-img-top" alt="...">
                <div class="card-body" style="height:10rem">
                    <h3 class="card-title">G410 el nuevo driver de PING</h3>

                    <a href="{{ ('detalle') }}" class="card-link">Ver Detalles</a>
                    @include("en_carrito.form", ["producto" => $producto])
                </div>
            </div>
        </div>
        <div class="col-md-auto col-lg-4">
            <div class="card mt-5" style=width:18rem>
                <div class=" card-header text-white bg-dark" style="width:100%">
                    PING G400
                </div>
                <img src="img/driverpingg400_resultado.jpg" class="card-img-top" alt="...">
                <div class="card-body" style="height:10rem">
                    <h3 class="card-title">Facil</h3>
                    <p class="card-text"><br></p>
                    <a href="{{ ('detalle') }}" class="card-link">Ver Detalles</a>
                    @include("en_carrito.form", ["producto" => $producto])
                </div>
            </div>
        </div>
        <div class="col-md-auto col-lg-4">
            <div class="card mt-5" style=width:18rem>
                <div class=" card-header text-white bg-dark" style="width:100%">
                    DRIVERS TAYLOR MADE M3 y M4
                </div>
                <img src="img/driverm3m4_resultado.jpg" class="card-img-top" alt="...">
                <div class="card-body" style="height:10rem">
                    <h3 class="card-title">Distintos lofts y varas</h3>
                    <a href="{{ ('detalle') }}" class="card-link">Ver Detalles</a>
                    @include("en_carrito.form", ["producto" => $producto])
                </div>
            </div>
        </div>
    </div>
</div>

@endsection