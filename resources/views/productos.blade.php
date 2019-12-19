@extends('plantilla')

@section('principal')
.
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-ms-12 col-md-12 col-lg-12">
            <div class="mx-auto" style="margin-top:5rem">
                <div class="px-4">
                    <div class="table-wrapper">
                        <h1 class="text-center">ABM DE PRODUCTOS</h1>
                        <!--BOTON AGREGAR PRODUCTO--------------------->
                    
                        <form method="POST" action="">
                            <button class="btn btn-success mb-5" type="submit" id="agregar" style="margin-left:75rem">AGREGAR</button>
                        </form>
                    </div>
                        <!--Table-->
                        <table class="table table-hover">

                            <!--Table head-->
                            <thead>
                                <tr>
                                    <!--<th>
                                        <input class="form-check-input" type="checkbox" id="checkbox">
                                        <label class="form-check-label" for="checkbox" class="mr-2 label-table"></label>
                                    </th>-->
                                    <th class="th-lg text-center">
                                        <a>Marca Producto
                                            <!--<i class="fas fa-sort ml-1"></i>-->
                                        </a>
                                    </th>
                                    <th class="th-lg text-center">
                                        <a>Descripcion Producto
                                            <!--<i class="fas fa-sort ml-1"></i>-->
                                        </a>
                                    </th>
                                    <th class="th-lg text-center">
                                        <a>Precio
                                            <!--<i class="fas fa-sort ml-1"></i>-->
                                        </a>
                                    </th>
                                    <th class="th-lg text-center">
                                        <a>Categoria
                                            <!--<i class="fas fa-sort ml-1"></i>-->
                                        </a>
                                    </th>
                                    <th class="th-lg text-center">
                                        <a>BORRAR
                                            <!--<i class="fas fa-sort ml-1"></i>-->
                                        </a>
                                    </th>
                                    <th class="th-lg text-center">
                                        <a>MODIFICAR
                                            <!--<i class="fas fa-sort ml-1"></i>-->
                                        </a>
                                    </th>
                                </tr>
                            </thead>
                            <!--Table head-->

                            <!--Table body-->
                            <tbody>
                                <tr>
                                    @foreach ($productos as $producto)
                                    <!--<th scope="row">
                                        <input class="form-check-input" type="checkbox" id="checkbox1">
                                        <label class="form-check-label" for="checkbox1" class="label-table"></label>
                                    </th>-->
                                    <td>{{$producto->nombre}}</td>
                                    <td>{{$producto->descripcion}}</td>
                                    <td>${{$producto->precio}}</td>
                                    <td class="text-center">{{$producto->nombre_categoria}}</td>
                                    <td>
                                        <form method="POST" action="{{ url('/borrarProducto/'.$producto->id) }}">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button class="btn btn-danger" type="submit" id="borrar">Borrar</button>
                                        </form>
                                    </td>
                                    <!--BOTON MODIFICAR NO FUNCIONA LA VISTA MODIFPRODUCTO, SI TOMA EL ID DEL PREODUCTO-------->
                                    <td>
                                        <form method="POST" action="{{ url('/modifProducto/'.$producto->id) }}">
                                            <button class="btn btn-primary" type="submit" id="borrar">Modificar</button>
                                        </form>
                                    </td>
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
        </section>
        <!--Section: Content-->

    </div>
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