<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0cb2d9cf91.js"></script>
    <link rel="stylesheet" href="css/INDEX.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    <title>INICIO</title>
</head>

<body>
  <div class="flex-center position-ref full-height">
          @if (Route::has('login'))
              <div class="top-right links">
                  @auth
                      <a href="{{ url('/home') }}">Home</a>
                  @else
                      <a href="{{ route('login') }}">Ingresá</a>

                      @if (Route::has('register'))
                          <a href="{{ route('register') }}">Registrate</a>
                      @endif
                  @endauth
              </div>
          @endif
  </div>

    <div class="galeria1" style="position:relative; top:10rem;">
        <!--<h1>VISITA NUESTRAS CATEGORIAS</h1>-->
        <div class="contenedor-imagenes">
            <div class="imagen">
                <a href="DRIVERS.PHP" class="card-link">
                    <img src="//img/drivers-mujer.jpg" alt="" ;>
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


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
