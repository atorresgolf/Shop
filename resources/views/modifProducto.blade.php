@extends('plantilla')

@section('principal')



<ul style='color:red' class="errores">
    @foreach ($errors->all() as $error)
    <li>
        {{$error}}
    </li>
    @endforeach
</ul>

<div class="container-fluid" style="position: relative; left: 0px; top: 105px;">
    {{--    @foreach($productos as $producto) --}}
    <div class=" row justify-content-center">
     <div class="col-ms-12 col-md-12 col-lg-12">
          <div class="card mx-auto" style="margin-top:7rem">
           
     <div class=" card-body">    
    <form class= "" action="/modifProducto/{{$producto->id}}" method="post" enctype="multipart/form-data">
{{csrf_field() }}
{{method_field('PUT')}}
    <div class='form-group row'>     
    <label for="nombre" class="col-md-4 col-form-label text-md-right">Nombre:</label>
    <div class="col-md-6">
    <input type="text" name="nombre" value="{{$producto->nombre}}">
    </div>    
</div>
<div class="form-group row">
    <label for="descripcion" class="col-md-4 col-form-label text-md-right">Descripcion:</label>
    <div class="col-md-6">
    <input type="text" name="descripcion" value="{{$producto->descripcion}}">
    </div>
</div>
<div class="form-group row">
    <label for="precio" class="col-md-4 col-form-label text-md-right">Precio:</label>
    <div class="col-md-6">
    <input type="text" name="precio" value="{{$producto->precio}}">
</div>
</div>
<div class="form-group row">
    <label for="stock" class="col-md-4 col-form-label text-md-right">Stock:</label>
    <div class="col-md-6">
    <input type="text" name="stock" value="{{$producto->stock}}">
</div>
</div>
<div class="form-group row">
    <label for="nombre_marca" class="col-md-4 col-form-label text-md-right">Marca:</label>
   <div class="col-md-6">
    <input type="text" name="nombre_marca" value="{{$producto->nombre_marca}}">
</div>
</div>
<div class="form-group row">
    <label for="nombre_categoria" class="col-md-4 col-form-label text-md-right">Categoria:</label>
    <div class="col-md-6">
    <input type="text" name="nombre_categoria" value="{{$producto->nombre_categoria}}">
</div>
</div>

<div class='form-group row'>
<label for="poster" class="col-md-4 col-form-label text-md-right">Foto 1: </label>
<div class="col-md-6">
<input type="file" name="poster" id="">
</div>
</div>


<div class='form-group row'>
<label for="poster1" class="col-md-4 col-form-label text-md-right">Foto 2:</label>
<div class="col-md-6">
<input type="file" name="poster1" id="">
</div>
</div>

    <div class='form-group row'>
<label for="poster2" class="col-md-4 col-form-label text-md-right">Foto 3:</label>
<div class="col-md-6">
<input type="file" name="poster2" id="">
</div>
</div>

<div class="form-group row mb-0">
                            <!--<div class="col-md-6 offset-md-4"> -->
    <div class="col-ms-12 col-md-12 col-lg-12 mx-auto">
        <button type="submit" class="btn btn-primary">
                       {{ __('Guardar Cambios') }}
        </button>


    </div>
</div>
                

     
</form>
</div>
</div>
</div>
</div>

</div>


@endsection