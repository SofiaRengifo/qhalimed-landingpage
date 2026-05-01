@extends('servicios.layout')
@section('servicio-content')
<section class="servicesDetails">
    <div class="container position-relative px-sm">
        <div class="agenda text-center animate-float">
            <h4 class="text-light">Agenda tu cita hoy</h4>
            <p class="text-light mt-3">Solicita tu cita para <br />Pediatría</p>
            <a class="btn light mt-2" href="https://wa.me/51972240403?text=Hola%20Qhalimed,%20quiero%20agendar%20una%20cita%20para%20pediatría" target="_blank" data-discover="true">Agendar <i class="ms-2 fa-solid fa-circle-right"></i></a>
        </div>
        <div class="row align-items-center text-center justify-content-end">
            <div class="col-12 py-6 pb-5">
                <h1>Pediatría</h1>
                <p>Cuidamos la salud de los más pequeños con calidez y dedicación</p>
            </div>
            <div class="col-md-6">
                <div class="imagen">
                    <img src="../../img/servicios/pediatria.webp" alt="Pediatría">
                </div>
            </div>
            <div class="col-md-6 definicion">
                <h2>¿En qué consiste este servicio?</h2>
                <p class="mt-4">La Pediatría se especializa en el cuidado integral de la salud de niños y
                    adolescentes, desde el nacimiento hasta los 17 años. En QHALIMED, nuestros pediatras brindan
                    controles de crecimiento y desarrollo, vacunación, diagnóstico y tratamiento de enfermedades
                    comunes e infecciones, así como orientación a padres sobre nutrición y prevención. Nuestro
                    enfoque es acompañar cada etapa del crecimiento con atención personalizada y cercana.</p>
            </div>
        </div>
    </div>
    <div class="consulta">
        <div class="container px-sm">
            <div class="row pb-10 justify-content-end">
                <div class="col-lg-6">
                    <h2>¿Cuándo acudir a consulta?</h2>
                    <p class="mt-4">Recomendamos acudir a una consulta de pediatría si presentas:</p>
                    <ul class="list-unstyled">
                        <li class="mb-2 custom-li">
                            <i class="fa-solid fa-circle-check me-2"></i>
                            Controles periódicos de crecimiento y desarrollo.
                        </li>
                        <li class="mb-2 custom-li">
                            <i class="fa-solid fa-circle-check me-2"></i>
                            Fiebre persistente, tos, dificultad para respirar o malestar general.
                        </li>
                        <li class="mb-2 custom-li">
                            <i class="fa-solid fa-circle-check me-2"></i>
                            Infecciones recurrentes o problemas digestivos.
                        </li>
                        <li class="mb-2 custom-li">
                            <i class="fa-solid fa-circle-check me-2"></i>
                            Asesoría en lactancia y alimentación saludable.
                        </li>
                        <li class="mb-2 custom-li">
                            <i class="fa-solid fa-circle-check me-2"></i>
                            Vacunación y revisión de calendario de inmunizaciones.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
