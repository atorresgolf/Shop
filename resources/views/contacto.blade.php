                @extends('plantilla')

 

@section('principal')

<br>

<br>

<br>

<br>

<br>

<div class="container">

 

  <!--Section: Content-->

  <section class="dark-grey-text mb-5">

 

    <style>

      .map-container-section {

        overflow: hidden;

        padding-bottom: 56.25%;

        position: relative;

        height: 0;

      }

 

      .map-container-section iframe {

        left: 0;

        top: 0;

        height: 100%;

        width: 100%;

        position: absolute;

      }

    </style>

 

    <!-- Section heading -->

    <h3 class="font-weight-bold text-center mb-4">Contactanos</h3>

    <!-- Section description -->

    <p class="text-center w-responsive mx-auto pb-5">No dudes de enviarnos tus dudas y consultas.</p>

 

    <!-- Grid row -->

    <div class="row">

 

      <!-- Grid column -->

      <div class="col-lg-5 mb-lg-0 pb-lg-3 mb-4">

 

        <!-- Form with header -->

        <div class="card">

          <div class="card-body">

            <!-- Header -->

            <div class="form-header blue accent-1">

              <h3 class="mt-2"><i class="fas fa-envelope"></i> Escribinos:</h3>

            </div>

            <p class="dark-grey-text">Deja tus comentarios y te respondemos a la brevedad.</p>

            <!-- Body -->

            <div class="md-form">

              <i class="fas fa-user prefix grey-text"></i>

              <input type="text" id="form-name" class="form-control">

              <label for="form-name">Nombre y Apellido</label>

            </div>

            <div class="md-form">

              <i class="fas fa-envelope prefix grey-text"></i>

              <input type="text" id="form-email" class="form-control">

              <label for="form-email">Correo Electronico</label>

            </div>

            <div class="md-form">

              <i class="fas fa-tag prefix grey-text"></i>

              <input type="text" id="form-Subject" class="form-control">

              <label for="form-Subject">Asunto</label>

            </div>

            <div class="md-form">

              <i class="fas fa-pencil-alt prefix grey-text"></i>

              <textarea id="form-text" class="form-control md-textarea" rows="3"></textarea>

              <label for="form-text">Tu Mensaje</label>

            </div>

            <div class="text-center">

              <button class="btn btn-light-blue">ENVIAR</button>

            </div>

          </div>

        </div>

        <!-- Form with header -->

 

      </div>

      <!-- Grid column -->

 

      <!-- Grid column -->

      <div class="col-lg-7">

 

        <!--Google map-->

        <div id="map-container-section" class="z-depth-1-half map-container-section mb-4" style="height: 400px">

          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4196.386386555906!2d-65.28424748968655!3d-26.793753354723236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa9bbc9a37c4eaf00!2sCountry%20Jockey%20Club%20de%20Tucum%C3%A1n!5e0!3m2!1ses!2sar!4v1574790549103!5m2!1ses!2sar" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

        </div>

        <!-- Buttons-->

        <div class="row text-center">

          <div class="col-md-4">

            <a class="btn-floating blue accent-1">

              <i class="fas fa-map-marker-alt"></i>

            </a>

            <p>Cont. Bascary s/n, Av. Pres. Peron</p>

            <p class="mb-md-0">Yerba Buena</p>

          </div>

          <div class="col-md-4">

            <a class="btn-floating blue accent-1">

              <i class="fas fa-phone"></i>

            </a>

            <p>+ 01 234 567 89</p>

            <p class="mb-md-0">Lunes - Sabados, 8:00-16:00</p>

          </div>

          <div class="col-md-4">

            <a class="btn-floating blue accent-1">

              <i class="fas fa-envelope"></i>

            </a>

            <p>atorresgolf@gmail.com</p>

            <p class="mb-0">golf@gmail.com</p>

          </div>

        </div>

 

      </div>

      <!-- Grid column -->

 

    </div>

    <!-- Grid row -->

 

  </section>
</div>
@endsection