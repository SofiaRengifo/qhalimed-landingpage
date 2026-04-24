@extends('servicios.layout')
@section('servicio-content')
<section class="servicesDetails">
    <div class="container position-relative">

        <div class="agenda text-center animate-float">
            <h4 class="text-light">Agenda tu cita hoy</h4>
            <p class="text-light mt-3">Solicita tu cita para <br />Ecografías</p>
            <a class="btn light mt-2" href="https://wa.me/51972240403?text=Hola%20Qhalimed,%20quiero%20agendar%20una%20cita%20para%20ecografías" target="_blank" data-discover="true">Agendar <i class="ms-2 fa-solid fa-circle-right"></i></a>
        </div>
        <div class="row align-items-center text-center justify-content-end">
            <div class="col-12 py-6 pb-5">
                <h1>Ecografías</h1>
                <p>Imágenes precisas para un diagnóstico confiable</p>
            </div>
            <div class="col-md-6">
                <div class="imagen">
                    <img src="../../img/servicios/ecografia.webp" alt="Ecografías">
                </div>
            </div>
            <div class="col-md-6 definicion">
                <h2>¿En qué consiste este servicio?</h2>
                <p class="mt-4">La ecografía es un estudio de diagnóstico por imágenes que utiliza ultrasonido para observar en tiempo real órganos, tejidos y estructuras internas del cuerpo. En QHALIMED realizamos ecografías abdominales, pélvicas, obstétricas, mamarias, de partes blandas y especializadas. Es un procedimiento seguro, indoloro y no invasivo que ayuda a detectar y monitorear diversas condiciones médicas.</p>
            </div>
        </div>
    </div>
    <div class="consulta">
        <div class="container">
            <div class="row pb-10 justify-content-end">
                <div class="col-lg-6">
                    <h2>Tipos de ecografías</h2>
                    <p class="mt-4">Recomendaciones según el tipo de ecografía que solicites:</p>
                    <ul class="list-unstyled">
                        <li class="mb-2 custom-li">
                            <i class="fa-solid fa-circle-check me-2"></i>
                            Ecografía abdominal: acudir en ayunas.
                        </li>
                        <li class="mb-2 custom-li">
                            <i class="fa-solid fa-circle-check me-2"></i>
                            Ecografía pélvica: tomar agua y no orinar previamente.
                        </li>
                        <li class="mb-2 custom-li">
                            <i class="fa-solid fa-circle-check me-2"></i>
                            Ecografía obstétrica (embarazo).
                        </li>
                        <li class="mb-2 custom-li">
                            <i class="fa-solid fa-circle-check me-2"></i>
                            Ecografía mamaria.
                        </li>
                        <li class="mb-2 custom-li">
                            <i class="fa-solid fa-circle-check me-2"></i>
                            Ecografía transvaginal
                        </li>
                        <li class="mb-2 custom-li">
                            <i class="fa-solid fa-circle-check me-2"></i>
                            Ecografía de partes blandas
                        </li>
                        <li class="mb-2 custom-li">
                            <i class="fa-solid fa-circle-check me-2"></i>
                            Otras especializadas
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
