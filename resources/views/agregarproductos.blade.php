@extends('plantilla')

@section('principal')
.
<div class="titulo text-center" style='margin-top:5rem'>
    <h1>ALTA DE PRODUCTOS</h1>
</div>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-ms-10 col-md-10 col-lg-10">
            <div class="card mx-auto" style="margin-top:1rem">
                <div class="card-body text-center">
                    <form class= "" action="/agregarproductos" method="post" enctype="multipart/form-data">
                                {{csrf_field() }}
                        <div class='form-group row'>
                            <label for="nombre"class="col-md-4 col-form-label text-md-right">Nombre:</label>
                            <div class="col-md-6">
                            <input type="text" name="nombre" value="{{old('nombre')}}">
                        </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label text-md-right">Descripcion:</label>
                            <div class="col-md-6">
                            <input type="text" name="descripcion" value="{{old('descripcion')}}">
                        </div>
                        </div>

                        <div class="form-group row">
                            <label for="precio" class="col-md-4 col-form-label text-md-right">Precio:</label>
                            <div class="col-md-6">
                            <input type="text" name="precio" value="{{old('precio')}}">
                        </div>
                        </div>

                        <div class="form-group row">
                            <label for="precio" class="col-md-4 col-form-label text-md-right">Stock:</label>
                            <div class="col-md-6">
                            <input type="text" name="stock" value="{{old('stock')}}">
                        </div>
                        </div>
                        <div class="form-group row">
                            <label for="nombre_marca"class="col-md-4 col-form-label text-md-right">Marca:</label>
                            <div class="col-md-6">
                            <input type="text" name="nombre_marca" value="{{old('nombre_marca')}}">
                        </div>
                        </div>

                        <div class="form-group row">
                            <label for="nombre_categoria" class="col-md-4 col-form-label text-md-right">Categoria:</label>
                            <div class="col-md-6">
                            <input type="text" name="nombre_categoria" value="{{old('nombre_categoria')}}">
                        </div>
                        </div>

                        <div class="form-group row">
                            <label for="id_categoria" class="col-md-4 col-form-label text-md-right">ID Cat:</label>
                            <div class="col-md-6">
                            <input type="text" name="id_categoria" value="{{old('id_categoria')}}">
                        </div>
                        </div>

                        <div class='form-group row ml-3 col-md-3 offset-md-3'>
                            <label for="">Foto 1:</label>
                            <input type="file" name="poster" id="" >
                        </div>

                        <div class='form-group row ml-3 col-md-6 offset-md-4'>
                            <label for="">Foto 2:</label>
                            <input type="file" name="poster1" id="">
                        </div>

                        <div class='form-group row ml-3 col-md-6 offset-md-4'>
                            <label for="">Foto 3:</label>
                            <input type="file" name="poster2" id="">
                        </div>

                        <div class="form-group row col-md-6 offset-md-4">
                            <input type="submit" name="" class="btn btn-success" value="Agregar producto">
                        </div>

                    </form>
                </div>    
            </div>
        </div>
    </div>
</div>
@endsection