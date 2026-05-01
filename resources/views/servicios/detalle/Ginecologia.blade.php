@extends('servicios.layout')
@section('servicio-content')
<section class="servicesDetails">
    <div class="container position-relative px-sm">
        <div class="agenda text-center animate-float">
            <h4 class="text-light">Agenda tu cita hoy</h4>
            <p class="text-light mt-3">Solicita tu cita para <br />Ginecología</p>
            <a class="btn light mt-2" href="https://wa.me/51972240403?text=Hola%20Qhalimed,%20quiero%20agendar%20una%20cita%20para%20ginecología" target="_blank" data-discover="true">Agendar <i class="ms-2 fa-solid fa-circle-right"></i></a>
        </div>
        <div class="row align-items-center text-center justify-content-end">
            <div class="col-12 py-6 pb-5">
                <h1>Ginecología</h1>
                <p>Salud femenina en todas las etapas de tu vida</p>
            </div>
            <div class="col-md-6">
                <div class="imagen">
                    <img src="../../img/servicios/ginecologia.webp" alt="Ginecología">
                </div>
            </div>
            <div class="col-md-6 definicion">
                <h2>¿En qué consiste este servicio?</h2>
                <p class="mt-4">La Ginecología se encarga del diagnóstico, tratamiento y prevención de enfermedades del sistema reproductor femenino. En QHALIMED ofrecemos controles ginecológicos, planificación familiar, chequeos preventivos, atención en salud sexual y reproductiva, así como manejo de trastornos hormonales y problemas ginecológicos. Nuestro equipo brinda atención discreta, respetuosa y basada en evidencia médica.</p>
            </div>
        </div>
    </div>
    <div class="consulta">
        <div class="container px-sm">
            <div class="row pb-10 justify-content-end">
                <div class="col-lg-6">
                    <h2>¿Cuándo acudir a consulta?</h2>
                    <p class="mt-4">Recomendamos acudir a una consulta de ginecología para:</p>
                    <ul class="list-unstyled">
                        <li class="mb-2 custom-li">
                            <i class="fa-solid fa-circle-check me-2"></i>
                            Controles ginecológicos preventivos anuales.
                        </li>
                        <li class="mb-2 custom-li">
                            <i class="fa-solid fa-circle-check me-2"></i>
                            Alteraciones menstruales o dolor pélvico.
                        </li>
                        <li class="mb-2 custom-li">
                            <i class="fa-solid fa-circle-check me-2"></i>
                            Planificación familiar y anticoncepción.
                        </li>
                        <li class="mb-2 custom-li">
                            <i class="fa-solid fa-circle-check me-2"></i>
                            Evaluación de infecciones o síntomas ginecológicos.
                        </li>
                        <li class="mb-2 custom-li">
                            <i class="fa-solid fa-circle-check me-2"></i>
                            Seguimiento durante el embarazo en conjunto con obstetricia.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection