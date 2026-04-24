@extends('servicios.layout')
@section('servicio-content')
<section class="servicesDetails">
    <div class="container position-relative">

        <div class="agenda text-center animate-float">
            <h4 class="text-light">Agenda tu cita hoy</h4>
            <p class="text-light mt-3">Solicita tu cita para <br />Traumatología</p>
            <a class="btn light mt-2" href="https://wa.me/51972240403?text=Hola%20Qhalimed,%20quiero%20agendar%20una%20cita%20para%20traumatología" target="_blank" data-discover="true">Agendar <i class="ms-2 fa-solid fa-circle-right"></i></a>
        </div>
        <div class="row align-items-center text-center justify-content-end">
            <div class="col-12 py-6 pb-5">
                <h1>Traumatología</h1>
                <p>Recupera tu movilidad y calidad de vida</p>
            </div>
            <div class="col-md-6">
                <div class="imagen">
                    <img src="../../img/servicios/traumatologia2.webp" alt="Traumatología">
                </div>
            </div>
            <div class="col-md-6 definicion">
                <h2>¿En qué consiste este servicio?</h2>
                <p class="mt-4">La Traumatología se especializa en el diagnóstico y tratamiento de lesiones del sistema musculoesquelético: huesos, articulaciones, músculos, tendones y ligamentos. En QHALIMED tratamos desde lesiones deportivas y fracturas hasta enfermedades crónicas como la artrosis. Nuestro objetivo es recuperar la movilidad y funcionalidad del paciente, combinando tratamiento médico, rehabilitación y prevención.</p>
            </div>
        </div>
    </div>
    <div class="consulta">
        <div class="container">
            <div class="row pb-10 justify-content-end">
                <div class="col-lg-6">
                    <h2>¿Cuándo acudir a consulta?</h2>
                    <p class="mt-4">Recomendamos acudir a una consulta de traumatología si presentas:</p>
                    <ul class="list-unstyled">
                        <li class="mb-2 custom-li">
                            <i class="fa-solid fa-circle-check me-2"></i>
                            Dolor persistente en articulaciones o músculos.
                        </li>
                        <li class="mb-2 custom-li">
                            <i class="fa-solid fa-circle-check me-2"></i>
                            Lesiones deportivas o laborales.
                        </li>
                        <li class="mb-2 custom-li">
                            <i class="fa-solid fa-circle-check me-2"></i>
                            Fracturas, esguinces o luxaciones.
                        </li>
                        <li class="mb-2 custom-li">
                            <i class="fa-solid fa-circle-check me-2"></i>
                            Dificultad para moverse o pérdida de fuerza.
                        </li>
                        <li class="mb-2 custom-li">
                            <i class="fa-solid fa-circle-check me-2"></i>
                            Inflamación o deformidad en articulaciones.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection