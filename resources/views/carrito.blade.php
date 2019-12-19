@extends('plantilla')

@section('principal')
.
<div class="container z-depth-1 p-5" style="margin-top:8rem">

    <!-- Section: Block Content -->
    <section>

        <div class="container-fluid">
            <h1 class=" mx-auto text-center" style="margin-bottom:2rem">MI CARRITO</h1>
        </div>

        <!-- Shopping Cart table -->
        <div class="table-responsive">
            <table class="table product-table table-cart-v-1">
                <!-- Table head -->
                <thead>
                    <tr>
                        <th></th>
                        <th class="font-weight-bold text-center">
                            <strong>Producto</strong>
                        </th>
                        <th class="font-weight-bold text-center">
                            <strong>Descripcion</strong>
                        </th>
                        <th></th>
                        <th class="font-weight-bold text-center">
                            <strong>Precio</strong>
                        </th>
                        <th class="font-weight-bold text-center">
                            <strong>Cantidad</strong>
                        </th>
                        <th class="font-weight-bold text-center">
                            <strong>Importe</strong>
                        </th>
                        <th></th>
                    </tr>
                </thead>
                <!-- Table head -->
                <!-- Table body -->
                <tbody>
                    <!-- First row -->
                    @foreach($productos as $producto)
                    <tr>
                        <th scope="row">
                            <img src="" alt="" class="img-fluid z-depth-0">
                            <!--IMAGEN PRODUCTO-->
                        </th>
                        <td>
                            <h5 class="mt-3">
                                <strong>{{ $producto->nombre }}</strong>
                                <!--NOMBRE DEL PRODUCTO-->
                            </h5>
                            <p class="text-muted">{{ $producto->nombre_marca }}</p>
                            <!--MARCA PRODUCTO-->
                        </td>
                        <td>{{ $producto->descripcion }}</td>
                        <!--DESCRIPCION PRODUCTO-->
                        <td></td>
                        <td>$ {{ $producto->precio }}</td>
                        <!--PRECIO PRODUCTO-->
                        <td class="text-center text-xs-left">
                            <span class="qty">1</span>
                            <!--CANTIDAD DE PRODUCTOS-->
                            <div class="btn-group radio-group ml-2" data-toggle="buttons">
                                <label class="btn btn-sm btn-success btn-rounded">
                                    <input type="radio" name="options" id="option1">&mdash;
                                </label>
                                <label class="btn btn-sm btn-success btn-rounded">
                                    <input type="radio" name="options" id="option2">+
                                </label>
                            </div>
                        </td>
                        <td class="font-weight-bold text-center text-xs-left">
                            <strong>$&nbsp;{{ $producto->precio }}</strong>
                            <!--TOTAL DEL PRODUCTO-->
                        </td>
                        <td>
                            <form method="POST" action="{{ url('/EnCarrito/'.$producto->id) }}">
                           {{ csrf_field() }}
                           {{ method_field('DELETE') }}  
                                <button type="submit" onclick="return confirm('¿Desea eliminar el articulo?')" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Remove item">X
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    <!-- First row -->
                    <tr>
                        <td colspan="3"></td>
                        <td>
                            <h4 class="mt-2">
                                <strong>Total</strong>
                            </h4>
                        </td>

                       {{-- <td class="text-left">
                            <h3 class="mt-1">
                                <strong>$&nbsp;{{ $total }}</strong>
                            </h3>
                        </td> --}}
                        <td colspan="3" class="text-right">
                            <button type="button" class="btn btn-success btn-rounded">Completa tu Compra
                                <i class="fas fa-angle-right right"></i>
                            </button>
                        </td>
                    </tr>
                    <!-- Fourth row -->
                </tbody>
                <!-- Table body -->
            </table>
        </div>
        <!-- Shopping Cart table -->



    </section>
    <!-- Section: Block Content -->

</div>

@endsection