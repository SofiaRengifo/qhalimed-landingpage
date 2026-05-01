@extends('servicios.layout')
@section('servicio-content')
<section class="servicesDetails">
    <div class="container position-relative px-sm">
        <div class="agenda text-center animate-float">
            <h4 class="text-light">Agenda tu cita hoy</h4>
            <p class="text-light mt-3">Solicita tu cita para <br />Medicina Interna</p>
            <a class="btn light mt-2" href="https://wa.me/51972240403?text=Hola%20Qhalimed,%20quiero%20agendar%20una%20cita%20para%20medicina%20interna" target="_blank" data-discover="true">Agendar <i class="ms-2 fa-solid fa-circle-right"></i></a>
        </div>
        <div class="row align-items-center text-center justify-content-end">
            <div class="col-12 py-6 pb-5">
                <h1>Medicina Interna</h1>
                <p>Cuidado integral para adultos con un enfoque clínico especializado</p>
            </div>
            <div class="col-md-6">
                <div class="imagen">
                    <img src="../../img/servicios/MedicinaInterna.webp" alt="Medicina Interna">
                </div>
            </div>
            <div class="col-md-6 definicion">
                <h2>¿En qué consiste este servicio?</h2>
                <p class="mt-4">La Medicina Interna es una especialidad médica que se enfoca en la prevención, diagnóstico y tratamiento de enfermedades en pacientes adultos. En QHALIMED, nuestros médicos internistas evalúan de forma integral al paciente, considerando múltiples sistemas del cuerpo, especialmente en casos complejos o con enfermedades crónicas como diabetes, hipertensión, enfermedades cardiovasculares, respiratorias, digestivas, entre otras. Es la puerta de entrada para una atención clínica completa y coordinada.</p>
            </div>
        </div>
    </div>
    <div class="consulta">
        <div class="container px-sm">
            <div class="row pb-10 justify-content-end">
                <div class="col-lg-6">
                    <h2>¿Cuándo acudir a consulta?</h2>
                    <p class="mt-4">Recomendamos acudir a una consulta de Medicina Interna si presentas:</p>
                    <ul class="list-unstyled">
                        <li class="mb-2 custom-li">
                            <i class="fa-solid fa-circle-check me-2"></i>
                            Síntomas generales como fatiga, fiebre prolongada, dolor torácico o abdominal.
                        </li>
                        <li class="mb-2 custom-li">
                            <i class="fa-solid fa-circle-check me-2"></i>
                            Enfermedades crónicas como hipertensión, diabetes, colesterol alto.
                        </li>
                        <li class="mb-2 custom-li">
                            <i class="fa-solid fa-circle-check me-2"></i>
                            Problemas multisistémicos o varios síntomas sin causa clara.
                        </li>
                        <li class="mb-2 custom-li">
                            <i class="fa-solid fa-circle-check me-2"></i>
                            Seguimiento de tratamientos prolongados o evaluación médica general.
                        </li>
                        <li class="mb-2 custom-li">
                            <i class="fa-solid fa-circle-check me-2"></i>
                            Si no sabes a qué especialista acudir, el médico internista puede orientarte y derivarte si es necesario.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection