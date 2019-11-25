@extends('plantillabasica')

@section('principal')

{{-- 

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white bg-dark">{{ __('REGISTRACION DE PRODUCTOS') }}</div>

                <div class=" card-body">
                    <form method="POST" action='{{asset('/agregarproductos')}}'>
                        @csrf

                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="descripcion" class="col-md-4 col-form-label text-md-right">{{ __('Descripcion') }}</label>

                            <div class="col-md-6">
                                <input id="descripcion" type="text" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" value="{{ old('descripcion') }}" required autocomplete="descripcion" autofocus>

                                @error('descripcion')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="precio" class="col-md-4 col-form-label text-md-right">{{ __('Precio') }}</label>

                            <div class="col-md-6">
                                <input id="precio" type="text" class="form-control @error('precio') is-invalid @enderror" name="precio" value="{{ old('precio') }}" required autocomplete="precio">

                                @error('precio')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="stock" class="col-md-4 col-form-label text-md-right">{{ __('Stock') }}</label>

                            <div class="col-md-6">
                                <input id="stock" type="text" class="form-control @error('stock') is-invalid @enderror" name="stock" value="{{ old('stock') }}" required autocomplete="stock">

                                @error('stock')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="marca" class="col-md-4 col-form-label text-md-right">{{ __('Marca') }}</label>

                            <div class="col-md-6">
                                <input id="marca" type="text" class="form-control @error('marca') is-invalid @enderror" name="nombre_marca" value="{{ old('nombre_marca') }}" required autocomplete="nombre_marca">

                                @error('marca')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="categoria" class="col-md-4 col-form-label text-md-right">{{ __('Categoria') }}</label>

                            <div class="col-md-6">
                                <input id="categoria" type="text" class="form-control @error('categoria') is-invalid @enderror" name="nombre_categoria" value="{{ old('nombre_categoria') }}" required autocomplete="nombre_categoria">

                                @error('categoria')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                        <label for="file">Foto producto:</label>
                        <input type="file" name="poster" id="file" class="form-control @error('file') is-invalid @enderror">
                         @error('file')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




<ul style='color:red' class="errores">
    @foreach ($errors->all() as $error)
    <li>
        {{$error}}
    </li>
    @endforeach
</ul>--}}

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

</div class='form-group row'>
<label for="">Foto:</label>
<input type="file" name="poster" id="">
<div>


<div class="form-group row">
    <input type="submit" name="" value="Agregar producto">
    </div>
</form>

</div>
</div>
</div>
@endsection