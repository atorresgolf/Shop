@extends('plantilla')

@section('titulo')
Index
@endsection

@section('principal')

<div class="galeria1" style="position:relative; top:10rem;">
    <!--<h1>VISITA NUESTRAS CATEGORIAS</h1>-->
    <div class="contenedor-imagenes">
        <div class="imagen">
            <a href="/categoria/1" class="card-link">
                <img src="{{asset('img/drivers-mujer.jpg')}}" alt="" ;>
                <div class="inscripcion">
                    <h2></h2>
                    <p class="card-text">ENTRA A NUESTRA SECCION Y CONOCE LOS MEJORES DRIVERS DEL MERCADO</p>
                </div>
            </a>
        </div>
       
        <div class="imagen">
            <a href="/categoria/2" class="card-link">
                <img src="/img/drivers-fondo2.jpg" alt="" ;>
                <div class=" inscripcion">
                    <h2></h2>
                    <p class="card-text">ELEGI EL HIERRO QUE SE ADAPTE A TU ESTILO DE JUEGO</p>
                </div>
            </a>
        </div>


        <div class="imagen">
            <a href="/categoria/3" class="card-link">
                <img src="/img/puters-fondo1.jpg" alt="" ;>
                <div class="inscripcion">
                    <h2></h2>
                    <p class="card-text">AQUI TENEMOS LOS MEJORES PUTTERS DEL MERCADO</p>
                </div>
            </a>
        </div>
        <div class="imagen">
            <a href="/categoria/4" class="card-link">
                <img src="/img/accesorios-fondo.jpg" alt="" ;>
                <div class="inscripcion">
                    <h2>ACCESORIOS</h2>
                    <p class="card-text">ENCONTRA LO MEJOR EN EQUIPAMIENTO</p>
                </div>
            </a>
        </div>
        <div class="imagen">
            <a href="{{ ('academia') }}" class="card-link">
                <img src="/img/academia_anto.png" alt="" ;>
                <div class="inscripcion">
                    <h2></h2>
                    <p class="card-text">INSCRIBITE Y FORMA PARTE DE NUESTRA ACADEMIA</p>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection