@extends('servicios.layout')
@section('servicio-content')
<section class="servicesDetails">
    <div class="container position-relative">

        <div class="agenda text-center animate-float animate-float">
            <h4 class="text-light">Agenda tu cita hoy</h4>
            <p class="text-light mt-3">Solicita tu cita para <br />Reumatología</p>
            <a class="btn light mt-2" href="https://wa.me/51972240403?text=Hola%20Qhalimed,%20quiero%20agendar%20una%20cita%20para%20reumatología" target="_blank" data-discover="true">Agendar <i class="ms-2 fa-solid fa-circle-right"></i></a>
        </div>
        <div class="row align-items-center text-center justify-content-end">
            <div class="col-12 py-6 pb-5">
                <h1>Reumatología</h1>
                <p>Cuidamos tus articulaciones y movilidad</p>
            </div>
            <div class="col-md-6">
                <div class="imagen">
                    <img src="../../img/servicios/reumatologia.webp" alt="Reumatología">
                </div>
            </div>
            <div class="col-md-6 definicion">
                <h2>¿En qué consiste este servicio?</h2>
                <p class="mt-4">La reumatología se especializa en el diagnóstico y tratamiento de enfermedades que afectan las articulaciones, músculos, huesos y el sistema inmunológico. En QHALIMED ofrecemos una atención integral para aliviar el dolor, reducir la inflamación y mejorar la calidad de vida de nuestros pacientes.</p>
            </div>
        </div>
    </div>
    <div class="consulta">
        <div class="container">
            <div class="row pb-10 justify-content-end">
                <div class="col-lg-6">
                    <h2>¿Cuándo acudir a consulta?</h2>
                    <p class="mt-4">Recomendamos acudir a una consulta de reumatología si presentas:</p>
                    <ul class="list-unstyled">
                        <li class="mb-2 custom-li">
                            <i class="fa-solid fa-circle-check me-2"></i>
                            Dolor, rigidez o inflamación persistente en articulaciones.
                        </li>
                        <li class="mb-2 custom-li">
                            <i class="fa-solid fa-circle-check me-2"></i>
                            Molestias musculares o articulares sin causa aparente.
                        </li>
                        <li class="mb-2 custom-li">
                            <i class="fa-solid fa-circle-check me-2"></i>
                            Sospecha de enfermedades autoinmunes como artritis, lupus o gota.
                        </li>
                        <li class="mb-2 custom-li">
                            <i class="fa-solid fa-circle-check me-2"></i>
                            Dificultad para realizar movimientos cotidianos.
                        </li>
                        <li class="mb-2 custom-li">
                            <i class="fa-solid fa-circle-check me-2"></i>
                            Fatiga crónica o fiebre recurrente sin explicación aparente.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection