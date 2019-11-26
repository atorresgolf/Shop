@extends('plantilla')

@section('principal')

<br>
<br>
<br>
<br>
<br>
<!--Section: Content-->
<section>
    <div class="container">
        <h6 class="font-weight-normal text-uppercase font-small grey-text mb-4 text-center">FAQ</h6>
        <!-- Section heading -->
        <h3 class="font-weight-bold black-text mb-4 pb-2 text-center">Preguntas Frecuentes</h3>
        <hr class="w-header">
        <!-- Section description -->
        <p class="lead text-muted mx-auto mt-4 pt-2 mb-5 text-center">Tenes alguna pregunta? Tenemos la respuesta. Si Ud. tiene otra duda, visite nuestro centro de atencion.</p>

        <div class="row">
            <div class="col-md-12 col-lg-10 mx-auto mb-5">

                <!--Accordion wrapper-->
                <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

                    <!-- Accordion card -->
                    <div class="card border-top border-bottom-0 border-left border-right border-light">

                        <!-- Card header -->
                        <div class="card-header border-bottom border-light" role="tab" id="headingOne1">
                            <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                                <h5 class="black-text font-weight-normal mb-0">
                                    Es un sitio seguro para comprar? <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
                            <div class="card-body">
                                Totalmente! Trabajamos con los mejores metodos de pago lo que le garantizan seguridad.

                            </div>
                        </div>

                    </div>
                    <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card border-bottom-0 border-left border-right border-light">

                        <!-- Card header -->
                        <div class="card-header border-bottom border-light" role="tab" id="headingTwo2">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                <h5 class="black-text font-weight-normal mb-0">
                                    Tiene vencimiento mi suscripcion? <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordionEx">
                            <div class="card-body">
                                La suscripcion tanto a nuestras ofertas como a nuestro sitio web son gratuitos.
                            </div>
                        </div>

                    </div>
                    <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card border-bottom-0 border-left border-right border-light">

                        <!-- Card header -->
                        <div class="card-header border-bottom border-light" role="tab" id="headingThree3">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
                                <h5 class="black-text font-weight-normal mb-0">
                                    Puedo canceclar la suscripcion de ofertas? <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3" data-parent="#accordionEx">
                            <div class="card-body">
                                Puede cancelar la suscripcion a nuestras ofertas, y su cuenta seguira activa para poder comprar.
                            </div>
                        </div>

                    </div>
                    <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card border-left border-right border-light">

                        <!-- Card header -->
                        <div class="card-header border-bottom border-light" role="tab" id="headingThree4">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree4" aria-expanded="false" aria-controls="collapseThree4">
                                <h5 class="black-text font-weight-normal mb-0">
                                    Aceptan devoluciones? <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapseThree4" class="collapse" role="tabpanel" aria-labelledby="headingThree4" data-parent="#accordionEx">
                            <div class="card-body">
                                No se aceptan devoluciones.
                            </div>
                        </div>

                    </div>
                    <!-- Accordion card -->

                </div>
                <!-- Accordion wrapper -->

            </div>
        </div>

</section>


</div>
@endsection