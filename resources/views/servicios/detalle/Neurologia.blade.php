@extends('servicios.layout')
@section('servicio-content')
<section class="servicesDetails">
    <div class="container position-relative">

        <div class="agenda text-center animate-float">
            <h4 class="text-light">Agenda tu cita hoy</h4>
            <p class="text-light mt-3">Solicita tu cita para <br />Neurología</p>
            <a class="btn light mt-2" href="https://wa.me/51972240403?text=Hola%20Qhalimed,%20quiero%20agendar%20una%20cita%20para%20neurología" target="_blank" data-discover="true">Agendar <i class="ms-2 fa-solid fa-circle-right"></i></a>
        </div>
        <div class="row align-items-center text-center justify-content-end">
            <div class="col-12 py-6 pb-5">
                <h1>Neurología</h1>
                <p>Cuidamos la salud de tu sistema nervioso</p>
            </div>
            <div class="col-md-6">
                <div class="imagen">
                    <img src="../../img/servicios/neurologia.webp" alt="Neurología">
                </div>
            </div>
            <div class="col-md-6 definicion">
                <h2>¿En qué consiste este servicio?</h2>
                <p class="mt-4">La Neurología se encarga del diagnóstico y tratamiento de enfermedades del cerebro, médula espinal, nervios y músculos. En QHALIMED ofrecemos atención para casos como migrañas, epilepsia, accidentes cerebrovasculares, enfermedades neurodegenerativas y trastornos del movimiento. Nuestros especialistas brindan un enfoque integral que incluye evaluación clínica, estudios diagnósticos y tratamiento personalizado.</p>
            </div>
        </div>
    </div>
    <div class="consulta">
        <div class="container">
            <div class="row pb-10 justify-content-end">
                <div class="col-lg-6">
                    <h2>¿Cuándo acudir a consulta?</h2>
                    <p class="mt-4">Recomendamos acudir a una consulta de neurología si presentas:</p>
                    <ul class="list-unstyled">
                        <li class="mb-2 custom-li">
                            <i class="fa-solid fa-circle-check me-2"></i>
                            Dolores de cabeza intensos o recurrentes.
                        </li>
                        <li class="mb-2 custom-li">
                            <i class="fa-solid fa-circle-check me-2"></i>
                            Mareos, pérdida de equilibrio o coordinación.
                        </li>
                        <li class="mb-2 custom-li">
                            <i class="fa-solid fa-circle-check me-2"></i>
                            Convulsiones o pérdida de conciencia.
                        </li>
                        <li class="mb-2 custom-li">
                            <i class="fa-solid fa-circle-check me-2"></i>
                            Alteraciones de memoria o del lenguaje.
                        </li>
                        <li class="mb-2 custom-li">
                            <i class="fa-solid fa-circle-check me-2"></i>
                            Adormecimiento o debilidad en alguna parte del cuerpo.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection