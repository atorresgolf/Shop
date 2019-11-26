<<<<<<< HEAD
@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Start your project here-->
    <!-- Table with panel -->
    <div class="card card-cascade narrower">

        <!--Card image-->
        <div class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">

            <div>
                <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
                    <i class="fas fa-th-large mt-0"></i>
                </button>
                <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
                    <i class="fas fa-columns mt-0"></i>
                </button>
            </div>

            <a href="" class="white-text mx-3">LISTADO DE PRODUCTOS</a>

            <div>
                <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
                    <i class="fas fa-pencil-alt mt-0"></i>
                </button>
                <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
                    <i class="far fa-trash-alt mt-0"></i>
                </button>
                <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
                    <i class="fas fa-info-circle mt-0"></i>
                </button>
=======
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
>>>>>>> master
            </div>

        </div>
        <!--/Card image-->

        <div class="px-4">

            <div class="table-wrapper">
                <!--Table-->
                <table class="table table-hover mb-0">

                    <!--Table head-->
                    <thead>
                        <tr>
                            <th>
                                <input class="form-check-input" type="checkbox" id="checkbox">
                                <label class="form-check-label" for="checkbox" class="mr-2 label-table"></label>
                            </th>
                            <th class="th-lg">
                                <a>Marca Producto
                                    <i class="fas fa-sort ml-1"></i>
                                </a>
                            </th>
                            <th class="th-lg">
                                <a href="">Descripcion Producto
                                    <i class="fas fa-sort ml-1"></i>
                                </a>
                            </th>
                            <th class="th-lg">
                                <a href="">Precio
                                    <i class="fas fa-sort ml-1"></i>
                                </a>
                            </th>
                            <th class="th-lg">
                                <a href="">Categoria
                                    <i class="fas fa-sort ml-1"></i>
                                </a>
                            </th>
                            <th class="th-lg">
                                <a href="">Stock
                                    <i class="fas fa-sort ml-1"></i>
                                </a>
                            </th>
                            <th class="th-lg">
                                <a href="">
                                    <i class="fas fa-sort ml-1"></i>
                                </a>
                            </th>
                        </tr>
                    </thead>
                    <!--Table head-->

                    <!--Table body-->
                    <tbody>
                        <tr>
                            @foreach ($productos as $producto)
                            <th scope="row">
                                <input class="form-check-input" type="checkbox" id="checkbox1">
                                <label class="form-check-label" for="checkbox1" class="label-table"></label>
                            </th>
                            <td>{{$producto->nombre}}</td>
                            <td>{{$producto->descripcion}}</td>
                            <td>{{$producto->precio}}</td>
                            <td>{{$producto->nombre_categoria}}</td>
                            <td></td>
                            <td></td>
                        </tr>
                        @endforeach

                    </tbody>
                    <!--Table body-->
                </table>
                <!--Table-->
            </div>

        </div>
    </div>
</div>
        @endforeach
                    
              
                    <a href="#" class="btn btn-success">Agregar al Carrito</a>
                

    </div>
    <!-- Table with panel -->

    <!-- /Start your project here-->
    <div class="container my-5 py-3 z-depth-1 rounded">


        <!--Section: Content-->
        <section class="dark-grey-text">

            <!-- Shopping Cart table -->
            <div class="table-responsive">

                <table class="table product-table mb-0">

                    <!-- Table head -->
                    <thead class="mdb-color lighten-5">
                        <tr>
                            <th></th>
                            <th class="font-weight-bold">
                                <strong>Product</strong>
                            </th>
                            <th class="font-weight-bold">
                                <strong>Color</strong>
                            </th>
                            <th></th>
                            <th class="font-weight-bold">
                                <strong>Price</strong>
                            </th>
                            <th class="font-weight-bold">
                                <strong>QTY</strong>
                            </th>
                            <th class="font-weight-bold">
                                <strong>Amount</strong>
                            </th>
                            <th></th>
                        </tr>
                    </thead>
                    <!-- /.Table head -->

                    <!-- Table body -->
                    <tbody>

                        <!-- First row -->
                        <tr>
                            <th scope="row">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg" alt="" class="img-fluid z-depth-0">
                            </th>
                            <td>
                                <h5 class="mt-3">
                                    <strong>iPhone</strong>
                                </h5>
                                <p class="text-muted">Apple</p>
                            </td>
                            <td>White</td>
                            <td></td>
                            <td>$800</td>
                            <td>
                                <input type="number" value="2" aria-label="Search" class="form-control" style="width: 100px">
                            </td>
                            <td class="font-weight-bold">
                                <strong>$800</strong>
                            </td>
                            <td>
                                <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Remove item">X
                                </button>
                            </td>
                        </tr>
                        <!-- /.First row -->

                        <!-- Second row -->
                        <tr>
                            <th scope="row">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/6.jpg" alt="" class="img-fluid z-depth-0">
                            </th>
                            <td>
                                <h5 class="mt-3">
                                    <strong>Headphones</strong>
                                </h5>
                                <p class="text-muted">Sony</p>
                            </td>
                            <td>Red</td>
                            <td></td>
                            <td>$200</td>
                            <td>
                                <input type="number" value="2" aria-label="Search" class="form-control" style="width: 100px">
                            </td>
                            <td class="font-weight-bold">
                                <strong>$600</strong>
                            </td>
                            <td>
                                <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Remove item">X
                                </button>
                            </td>
                        </tr>
                        <!-- /.Second row -->

                        <!-- Third row -->
                        <tr>
                            <th scope="row">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/1.jpg" alt="" class="img-fluid z-depth-0">
                            </th>
                            <td>
                                <h5 class="mt-3">
                                    <strong>iPad Pro</strong>
                                </h5>
                                <p class="text-muted">Apple</p>
                            </td>
                            <td>Gold</td>
                            <td></td>
                            <td>$600</td>
                            <td>
                                <input type="number" value="2" aria-label="Search" class="form-control" style="width: 100px">
                            </td>
                            <td class="font-weight-bold">
                                <strong>$1200</strong>
                            </td>
                            <td>
                                <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Remove item">X
                                </button>
                            </td>
                        </tr>
                        <!-- /.Third row -->

                        <!-- Fourth row -->
                        <tr>
                            <td colspan="3"></td>
                            <td>
                                <h4 class="mt-2">
                                    <strong>Total</strong>
                                </h4>
                            </td>
                            <td class="text-right">
                                <h4 class="mt-2">
                                    <strong>$2600</strong>
                                </h4>
                            </td>
                            <td colspan="3" class="text-right">
                                <button type="button" class="btn btn-primary btn-rounded">Complete purchase
                                    <i class="fas fa-angle-right right"></i>
                                </button>
                            </td>
                        </tr>
                        <!-- Fourth row -->

                    </tbody>
                    <!-- /.Table body -->

                </table>

            </div>
            <!-- /.Shopping Cart table -->

        </section>
        <!--Section: Content-->


    </div>

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>


@endsection