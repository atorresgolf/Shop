<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0cb2d9cf91.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <!-- <link rel="stylesheet" href="css/INDEX.css"> -->
    <link rel="stylesheet" href="{{ asset("css/INDEX.css") }}">
    <link rel="stylesheet" href="{{ asset("css/FOOTER.css") }}">
    <link rel="stylesheet" href="{{ asset("css/ESTILOS.css") }}">
    <link href="{{ asset("css/app.css") }}" rel="stylesheet">

    <title>INICIO</title>
</head>

<body>
    <header>
        <!--<section class="webdesigntuts-workshop">
            <form action="" method="">
                <input type="Buscar...." placeholder="buscar....">
                <button>Buscar</button>
            </form>
        </section>-->

        <div class="barra-nav">
            <nav class="navbar navbar-expand-lg navbar-dark bg-success">
                <a class="navbar-brand" href="{{ ('index') }}">
                    <img src="img/shopgolf.png" width="80" height="50" class="d-inline-block align-center" alt="">
                </a>
                <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">-->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!--<div class="collapse navbar-collapse" id="navbarNav">-->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="navbar-nav mx-auto">
                        <!--<li class="nav-item active"></li>-->
                        <!--<a class="nav-item nav-link mx-auto inicio" href="{{ ('index') }}">INICIO</a>-->
                        <a class="nav-item nav-link mx-auto drivers" href="{{ ('drivers') }}">DRIVERS</a>
                        <a class="nav-item nav-link mx-auto hierros" href="{{ ('hierros') }}">HIERROS</a>
                        <a class="nav-item nav-link mx-auto putters" href=" {{ ('putters') }}">PUTTERS</a>
                        <a class=" nav-item nav-link mx-auto accesorios" href="{{ ('accesorios') }}">ACCESORIOS</a>
                        <a class="nav-item nav-link mx-auto academia" href="{{ ('academia') }}">ACADEMIA</a>
                        <!--<a class="car" href="{{ ('carrito') }}">
                            <li class="nav-item"></li>
                            <div class=carro">
                                <ion-icon name="cart"></ion-icon>{{ $carrito->cantidadProducto() }}
                            </div>-->

                    </div>
                </div>
                <div class="carrito" style="margin-left:15rem">
                    <ul class="navbar-nav ml-auto nav-flex-icons">
                        <li class="nav-item"><a href="{{ ('carrito') }}" class="nav-link waves-effect"><span class="badge blue z-depth-1"> {{ $carrito->cantidadProducto() }} </span><i id="navbar-static-cart" alt="Cart" class="fas fa-shopping-cart fa-1.5x fa-lg"></i><span class="sr-only"></span></a></li>
                        <!--<li class="nav-item">
                                        <a class="nav-link font-weight-normal" href="{{ ('carrito') }}"><i id="navbar-static-cart" alt="Cart" class="fas fa-search"></i></a>
                                        </li>-->
                    </ul>
                </div>
                <!--<div class="navbar-nav d-flex flex-row justify-contents-center mx-auto">-->
                <div class="mx-auto">
                    <a class="btn btn-dark btn-sm" href='{{ ('register') }}' role="button">Creá tu cuenta</a>
                    <a class="btn btn-dark btn-sm" href='{{ ('login') }}' role="button">Ingresá</a>
                </div>
        </div>
        </nav>
        </div>
    </header>

    <section>
        @yield('principal')
    </section>


    <footer>
        <div class="margen mt-5" style="top:5rem;">

            <section class="ofertas">
                <form>
                    <div class="form-row align-items-center mt-3">
                        <p>¡¡Recibi Nuestras Novedades!!</p>
                        <div class="col-auto">
                            <label class="sr-only" for="inlineFormInput"></label>
                            <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="e-mail">
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-success mb-2 btn-sm">Suscribirme</button>
                        </div>
                    </div>
                </form>
            </section>

            <section class="redes-sociales">
                <div class="contenedor">
                    <a class="twitter" href="http://www.twitter.com"><i class="fab fa-twitter"></i></a>
                    <a class="facebook" href="http://www.facebook.com"><i class="fab fa-facebook"></i></a>
                    <a class="youtube" href="http://www.youtube.com"><i class="fab fa-youtube"></i></a>
                    <a class="instagram" href="http://www.instagram.com"><i class="fab fa-instagram"></i></a>
                </div>
            </section>
            <section class="link">
                <ul>
                    <li><a href="{{ ('index') }}">Home</a></li>
                    <br>
                    <li><a href="{{ ('preguntasfrecuentes') }}">Preguntas Frecuentes</a></li>
                    <li><a href="{{ ('register') }}">Formulario de Registro</a></li>
                    <li><a href="usuarios.php ">Perfil de Usuario</a></li>
                    <li><a href="{{ ('contacto') }}">Contacto</a></li>
                </ul>
            </section>
            <div>
                <div class="autor ml-5 ">
                    <p>© 2019 The Golf Shop|Diseño y Programación: T-I-S Designs</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

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