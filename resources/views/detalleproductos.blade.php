@extends('plantilla')

@section('principal')
.
<div class="container my-5 py-5 z-depth-1">


    <!--Section: Content-->
    <section class="text-center">

        <!-- Section heading -->
        <h3 class="font-weight-bold mb-5">Detalle Producto</h3>

        <div class="row">

            <div class="col-lg-6">

                <!--Carousel Wrapper-->
                <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">

                    <!--Slides-->
                    <div class="carousel-inner text-center text-md-left" role="listbox">
                        <div class="carousel-item active">
                            <img src="/storage/{{$producto->poster}}" alt="First slide" class="img-fluid">
                        </div>
                        <div class="carousel-item">
                            <img src="/storage/{{$producto->poster1}}" alt="Second slide" class="img-fluid">
                        </div>
                        <div class="carousel-item">
                            <img src="/storage/{{$producto->poster2}}" alt="Third slide" class="img-fluid">
                        </div>
                    </div>
                    <!--/.Slides-->

                    <!--Thumbnails-->
                    <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Siguiente</span>
                    </a>
                    <!--/.Thumbnails-->

                </div>
                <!--/.Carousel Wrapper-->

            </div>

            <div class="col-lg-5 text-center text-md-left">

                <h2 class="h2-responsive text-center text-md-left product-name font-weight-bold dark-grey-text mb-1 ml-xl-0 ml-4">
                    <strong>{{$producto->nombre_categoria}}</strong>
                </h2>
                <span class="badge badge-danger product mb-4 ml-xl-0 ml-4">lo mas buscado</span>
                <h3 class="h3-responsive text-center text-md-left mb-5 ml-xl-0 ml-4">
                    <span class="red-text font-weight-bold">
                        <strong>$ {{$producto->precio}}</strong>
                    </span>
                    <span class="grey-text">
                        <small>
                            <s>$ {{$producto->precio +2000}}</s>
                        </small>
                    </span>
                </h3>

                <!--Accordion wrapper-->
                <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

                    <!-- Accordion card -->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="headingOne1">
                            <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                                <h5 class="mb-0">
                                    Descripcion
                                    <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
                            <div class="card-body">
                                {{$producto->nombre}}
                                
                            </div>
                        </div>
                    </div>
                    <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="headingTwo2">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                <h5 class="mb-0">
                                    Detalle
                                    <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordionEx">
                            <div class="card-body">
                                {{$producto->descripcion}}
                                                           </div>
                        </div>
                    </div>
                    <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="headingThree3">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
                                <h5 class="mb-0">
                                    Envio
                                    <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3" data-parent="#accordionEx">
                            <div class="card-body">
                                Envios a todo el pais
                            </div>
                        </div>
                    </div>
                    <!-- Accordion card -->

                </div>
                <!--/.Accordion wrapper-->

                <!-- Add to Cart -->
                <section class="color">
                    
                    @if($producto->nombre_categoria == 'Guantes')
                    <div class="mt-5">
                        <p class="grey-text">Elija Tamaño</p>
                        <div class="row text-center text-md-left">        
                    
                            <div class="col-md-4 col-12">
                                <!--Radio group-->
                                <div class="form-group">
                                    <input class="form-check-input" name="group100" type="radio" id="radio100" checked="checked">
                                    <label for="radio100" class="form-check-label dark-grey-text">Small</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <!--Radio group-->
                                <div class="form-group">
                                    <input class="form-check-input" name="group100" type="radio" id="radio101">
                                    <label for="radio101" class="form-check-label dark-grey-text">Medium</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <!--Radio group-->
                                <div class="form-group">
                                    <input class="form-check-input" name="group100" type="radio" id="radio102">
                                    <label for="radio102" class="form-check-label dark-grey-text">Large</label>
                                </div>
                            </div>
                        </div>
                        @elseif($producto->nombre_categoria =='Driver'|| $producto->nombre_categoria =='Hierros')
                        <div class="mt-5">
                        <p class="grey-text">Elija flexion Vara</p>
                        <div class="row text-center text-md-left">    
                        <div class="col-md-4 col-12">
                                <!--Radio group-->
                                <div class="form-group">
                                    <input class="form-check-input" name="group100" type="radio" id="radio100" checked="checked">
                                    <label for="radio100" class="form-check-label dark-grey-text">Regular</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <!--Radio group-->
                                <div class="form-group">
                                    <input class="form-check-input" name="group100" type="radio" id="radio101">
                                    <label for="radio101" class="form-check-label dark-grey-text">Stiff</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <!--Radio group-->
                                <div class="form-group">
                                    <input class="form-check-input" name="group100" type="radio" id="radio102">
                                    <label for="radio102" class="form-check-label dark-grey-text">Lady</label>
                                </div>
                            </div>
                        </div>
                        @else 
                              
                        @endif
                        <div class="row mt-3">
                            <div class="col-md-12 text-center text-md-left text-md-right">
                                <button class="btn btn-info btn-rounded">
                                    <i class="fas fa-cart-plus mr-2" aria-hidden="true"></i> Agregar carrito</button>
                                    @if(Auth::user())
                                         @if(Auth::user()->email == 'atorresgolf@gmail.com' )
                                            <button class="btn btn-primary btn-rounded">
                                            <a class="fas fa-cart-plus mr-2"  href="/modifProducto/{{$producto->id}}"></a> Modificar</button>
                                            <a class="btn btn-light btn-sm mr-3" href='modifProducto/{{$producto->id}}' role="button">Modificar Producto</a>

                                            @endif
                                    @endif
                           
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.Add to Cart -->

            </div>

        </div>

    </section>
    <!--Section: Content-->


</div>

@endsection