@extends('servicios.layout')
@section('servicio-content')
<section class="servicesDetails">
    <div class="container position-relative px-sm">
        <div class="agenda text-center animate-float">
            <h4 class="text-light">Agenda tu cita hoy</h4>
            <p class="text-light mt-3">Solicita tu cita para <br />Endocrinología</p>
            <a class="btn light mt-2" href="https://wa.me/51972240403?text=Hola%20Qhalimed,%20quiero%20agendar%20una%20cita%20para%20endocrinología" target="_blank" data-discover="true">Agendar <i class="ms-2 fa-solid fa-circle-right"></i></a>
        </div>
        <div class="row align-items-center text-center justify-content-end">
            <div class="col-12 py-6 pb-5">
                <h1>Endocrinología</h1>
                <p>Equilibrio hormonal para una vida saludable</p>
            </div>
            <div class="col-md-6">
                <div class="imagen">
                    <img src="../../img/servicios/endocrinologia.webp" alt="Endocrinología">
                </div>
            </div>
            <div class="col-md-6 definicion">
                <h2>¿En qué consiste este servicio?</h2>
                <p class="mt-4">La Endocrinología estudia y trata los trastornos hormonales y metabólicos que afectan glándulas como la tiroides, páncreas, glándulas suprarrenales y hipófisis. En QHALIMED diagnosticamos y manejamos enfermedades como diabetes, hipotiroidismo, hipertiroidismo, osteoporosis, problemas de crecimiento y desórdenes hormonales complejos. Nuestro objetivo es mejorar la calidad de vida de los pacientes mediante un control preciso y seguimiento continuo.</p>
            </div>
        </div>
    </div>
    <div class="consulta">
        <div class="container px-sm">
            <div class="row pb-10 justify-content-end">
                <div class="col-lg-6">
                    <h2>¿Cuándo acudir a consulta?</h2>
                    <p class="mt-4">Recomendamos acudir a una consulta de endocrinología si presentas:</p>
                    <ul class="list-unstyled">
                        <li class="mb-2 custom-li">
                            <i class="fa-solid fa-circle-check me-2"></i>
                            Diagnóstico o seguimiento de diabetes.
                        </li>
                        <li class="mb-2 custom-li">
                            <i class="fa-solid fa-circle-check me-2"></i>
                            Síntomas como cansancio extremo, cambios de peso sin causa aparente o alteraciones en la piel y el cabello.
                        </li>
                        <li class="mb-2 custom-li">
                            <i class="fa-solid fa-circle-check me-2"></i>
                            Problemas de crecimiento o desarrollo.
                        </li>
                        <li class="mb-2 custom-li">
                            <i class="fa-solid fa-circle-check me-2"></i>
                            Evaluación y tratamiento de enfermedades tiroideas.
                        </li>
                        <li class="mb-2 custom-li">
                            <i class="fa-solid fa-circle-check me-2"></i>
                            Alteraciones hormonales en la menopausia o adolescencia.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection