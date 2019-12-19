@extends('plantillabasica1')

@section('principal')



<ul style='color:red' class="errores">
    @foreach ($errors->all() as $error)
    <li>
        {{$error}}
    </li>
    @endforeach
</ul>

<div class="container">
     <div class="card">
    <div class=" card-body">
    <form class= "" action="/agregarproductos" method="post" enctype="multipart/form-data">
{{csrf_field() }}

    <div class='form-group row'>     
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" value="{{old('nombre')}}">
    </div>
<div class="form-group row">
    <label for="">Descripcion:</label>
    <input type="text" name="descripcion" value="{{old('descripcion')}}">
</div>
<div class="form-group row">
    <label for="precio">Precio:</label>
    <input type="text" name="precio" value="{{old('precio')}}">
</div>
<div class="form-group row">
    <label for="precio">Stock:</label>
    <input type="text" name="stock" value="{{old('stock')}}">
</div>
<div class="form-group row">
    <label for="nombre_marca">Marca:</label>
    <input type="text" name="nombre_marca" value="{{old('nombre_marca')}}">
</div>
<div class="form-group row">
    <label for="nombre_categoria">Categoria:</label>
    <input type="text" name="nombre_categoria" value="{{old('nombre_categoria')}}">
</div>
<div class="form-group row">
    <label for="id_categoria">ID Categoria:</label>
    <input type="text" name="id_categoria" value="{{old('id_categoria')}}">
</div>


</div class='form-group row'>
<label for="">Foto 1:</label>
<input type="file" name="poster" id="">
<div>

</div class='form-group row'>
<label for="">Foto 2:</label>
<input type="file" name="poster1" id="">
<div>

    </div class='form-group row'>
<label for="">Foto 3:</label>
<input type="file" name="poster2" id="">
<div>

<div class="form-group row">
    <input type="submit" name="" value="Agregar producto">
    </div>
</form>

</div>
</div>
</div>
@endsection