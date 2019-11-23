<!doctype html>
<html lang="en">

<head>
<<<<<<< HEAD
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/ESTILOS.css">
    <title>.</title>
</head>

<header>
    <?php include "barra-buscar.html"; ?>
=======
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0cb2d9cf91.js"></script>
    <link rel="stylesheet" href="css/INDEX.css">
    <style type="text/css">
        
    </style>
    <title>INICIO</title>
</head>

<body>
<header>
    @extends('barraBuscar')
>>>>>>> Anto
        <div class="barra-nav">
            <nav class="navbar navbar-expand-lg navbar-dark bg-success">
                <a class="navbar-brand" href="#">
                    <img src="img/shopgolf.png" width="80" height="50" class="d-inline-block align-center" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="navbar-nav mx-auto">
                        <li class="nav-item active"></li>
                        <a class="nav-item nav-link mx-auto inicio" href="INDEX.PHP">INICIO</a>
                        <a class="nav-item nav-link mx-auto drivers" href="drivers.php">DRIVERS</a>
                        <a class="nav-item nav-link mx-auto hierros" href="HIERROS.PHP">HIERROS</a>
                        <a class="nav-item nav-link mx-auto putters" href="PUTTERS.php">PUTTERS</a>
                        <a class="nav-item nav-link mx-auto accesorios" href="ACCESORIOS.PHP">ACCESORIOS</a>
                        <a class="nav-item nav-link mx-auto academia" href="ACADEMIA.PHP">ACADEMIA</a>
                        <li class="nav-item"></li>
                    </div>
                </div>

                <div class="navbar-nav d-flex flex-row justify-contents-center mx-auto">
<<<<<<< HEAD
                    <button type="button" class="btn btn-light btn-sm mr-3"><a>Creá tu cuenta</a>
                <button type="button" class="btn btn-light btn-sm mr-3"><a>Ingresá</a>
=======
                    <button type="button" class="btn btn-light btn-sm mr-3" action='register'><a>Creá tu cuenta</a>
                <button type="button" class="btn btn-light btn-sm mr-3" action='login'><a>Ingresá</a>
>>>>>>> Anto
                    </button>
                    </button>
                </div>
            </nav>
        </div>
</header>

<<<<<<< HEAD
=======
<section>
         <div class="galeria1" style="position:relative; top:10rem;">
        <!--<h1>VISITA NUESTRAS CATEGORIAS</h1>-->
        <div class="contenedor-imagenes">
            <div class="imagen">
                <a href="DRIVERS.PHP" class="card-link">
                    <img src="img/drivers-mujer.jpg" alt="" ;>
                    <div class="inscripcion">
                        <h2></h2>
                        <p class="card-text">ENTRA A NUESTRA SECCION Y CONOCE LOS MEJORES DRIVERS DEL MERCADO</p>
                    </div>
                </a>
            </div>
            <div class="imagen">
                <a href="HIERROS.PHP" class="card-link">
                    <img src="img/drivers-fondo2.jpg" alt="" ;>
                    <div class=" inscripcion">
                        <h2></h2>
                        <p class="card-text">ELEJI EL HIERRO QUE SE ADAPTE A TU ESTILO DE JUEGO</p>
                    </div>
                </a>
            </div>
            <div class="imagen">
                <a href="PUTTERS.PHP" class="card-link">
                    <img src="img/puters-fondo1.jpg" alt="" ;>
                    <div class="inscripcion">
                        <h2></h2>
                        <p class="card-text">AQUI TENEMOS LOS MEJORES PUTTERS DEL MERCADO</p>
                    </div>
                </a>
            </div>
            <div class="imagen">
                <a href="ACCESORIOS.PHP" class="card-link">
                    <img src="img/accesorios-fondo.jpg" alt="" ;>
                    <div class="inscripcion">
                        <h2>ACCESORIOS</h2>
                        <p class="card-text">ENCONTRA LO MEJOR EN EQUIPAMIENTO</p>
                    </div>
                </a>
            </div>
            <div class="imagen">
                <a href="ACADEMIA.PHP" class="card-link">
                    <img src="img/academia_anto.png" alt="" ;>
                    <div class="inscripcion">
                        <h2></h2>
                        <p class="card-text">INSCRIBITE Y FORMA PARTE DE NUESTRA ACADEMIA</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
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
                <li><a href="index.php ">Home</a></li>
                <br>
                <li><a href="preguntas.php ">Preguntas Frecuentes</a></li>
                <li><a href="nuevo_formulario.php ">Formulario de Registro</a></li>
                <li><a href="usuarios.php ">Perfil de Usuario</a></li>
                <li><a href="contacto.php ">Contacto</a></li>
            </ul>
        </section>
        <div>
            <div class="autor ml-5 ">
                <p>© 2019 The Golf Shop|Diseño y Programación: T-I-S Designs</p>
            </div>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
>>>>>>> Anto
</html>