@extends('landing')
@section('title')| Clínica @endsection
@section('styles')
@vite('resources/css/Inicio.css')
<style>
    [data-aos="slide-up"] {
        transform: translateY(200px);
    }

</style>
@endsection

@section('content')
<div id="splide" class="splide">
    <div class="splide__track">
        <ul class="splide__list">
            <li class="splide__slide">
                <div class="slide-inner" style="position: relative; height: 100%; overflow: hidden">
                    <video class="slide-media" style="width: 100%;position:absolute;z-index: 1;top: 0;left: 0;" playsinline="" autoplay="" muted="" loop="">
                        <source type="video/mp4" src="../../img/inicio-slider/portada1.mp4">
                    </video>
                    <div class="global-overlay"></div>
                    <img class="global-svg" src="../../img/inicio-slider/decoration.svg" alt="" aria-hidden="true" />
                    <div class="slide-content container d-flex align-items-center justify-content-start" style=" height: 100%; position: relative; z-index: 2;">
                        <div class="text-content fade-in fade-right" style=" width: 45%; text-align: start;color: #fff; ">
                            <h1 class="mb-3 slider-title"><span style="color: #FE6F63">Nuestros
                                    especialistas</span> tu mejor respaldo</h1>
                            <p>Contamos con un equipo de médicos altamente capacitados en diversas
                                especialidades, siempre enfocados en el bienestar de cada paciente.</p>
                            <a class="btn mt-3" href="{{ route('medicos') }}">Ver más</a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="splide__slide">
                <div style="position: relative; height: 100%; overflow: hidden">
                    <div class="slide-inner bg-slide slider2" style="background-image:url(../../img/inicio-slider/portada2.webp);background-position: center top;height: 100%;">
                        <div class="global-overlay"></div>
                        <img class="global-svg" src="../../img/inicio-slider/decoration.svg" alt="" aria-hidden="true" />
                        <div class="slide-content container d-flex align-items-center justify-content-start" style=" height: 100%; position: relative; z-index: 2;">
                            <div class="text-content fade-in fade-right" style=" width: 40%; text-align: start;color: #fff; ">
                                <h1 class="mb-3 slider-title"><span style="color: #FE6F63">Cuidamos</span> a los
                                    que más amas</h1>
                                <p>En QHALIMED, estamos comprometidos para que tú y tus seres queridos estén
                                    siempre en las mejores manos.</p>

                                <a class="btn mt-3" href="{{ route('servicios.pediatria') }}">Ver más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="splide__slide">
                <div style="position: relative; height: 100%; overflow: hidden">
                    <div class="slide-inner bg-slide slider3" style="background-image:url(../../img/inicio-slider/portada3.jpg);background-position: center top;height: 100%;">
                        <div class="global-overlay"></div>
                        <img class="global-svg" src="../../img/inicio-slider/decoration.svg" alt="" aria-hidden="true" />
                        <div class="slide-content container d-flex align-items-center justify-content-start" style=" height: 100%; position: relative; z-index: 2;">
                            <div class="text-content fade-in fade-right" style=" width: 50%; text-align: start;color: #fff; ">
                                <h1 class="mb-3 slider-title"><span style="color: #FE6F63">Infórmate</span> con
                                    nuestras publicaciones médicas</h1>
                                <p>Accede a consejos de salud, noticias y novedades de la clínica.</p>

                                <a class="btn mt-3" href="{{ route('blog') }}">Ver más</a>
                            </div>
                        </div>
                    </div>
                </div>5
            </li>
        </ul>
    </div>

</div>
<div class="presentacion container py-7 px-sm">
    <div class="row">
        <div class="col-12 col-md-6 order-md-2">
            <h2 data-aos="fade-up">Comprometidos con tu bienestar, guiados por vocación</h2>
            <p class="mt-4" style="text-align: justify;">Más que una clínica, somos un espacio donde la salud se
                cuida con vocación, respeto y responsabilidad. En QHALIMED, trabajamos día a día por mejorar la
                calidad de vida de nuestros pacientes y fortalecer el vínculo entre médico y familia.</p>
            <div class="d-flex gap-4">
                <div class="caracteristicas"><i class="fa-solid fa-laptop-medical"></i></div><span>Actualización
                    constante</span>
                <div class="caracteristicas"> <i class="fa-solid fa-user-doctor"></i></div><span>Profesionales
                    capacitados</span>
            </div>
            <a data-aos="zoom-in" class="btn mt-4" href="{{ route('nosotros') }}" data-discover="true">Sobre
                Nosotros</a>
        </div>
        <div class="col-12 col-md-6 order-md-1 imagen">
            <div class="h-100" style="background-image:url(../../img/fondoEmergency.webp);width: 88%;">
                <div class="count" data-aos-delay="300" data-aos="slide-up">
                    <h5>Bienvenido a Qhalimed</h5>
                </div>
            </div>
            <div class="video">
                <a href="#" data-bs-toggle="modal" data-bs-target="#videoModal">
                    <i class="fa-solid fa-play"></i>
                </a>
            </div>
        </div>
        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-body p-0">
        <!-- Botón de cerrar -->
        <button type="button" class="btn-close m-2" data-bs-dismiss="modal" aria-label="Close"></button>
        <!-- Video -->
        <div class="ratio ratio-16x9">
          <iframe id="videoFrame" src="" title="YouTube video" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</div>
    </div>
</div>
<div class="service">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 pt-4">
                <h2 data-aos="fade-up">Nuestros <span style=" color: #FE6F63 ">servicios</span></h2>
                <p class="pe-lg-3 mt-3">Te ofrecemos una atención médica completa, con especialidades y
                    procedimientos pensados para cuidar tu salud en cada etapa de la vida.</p>
                <a data-aos="zoom-in" class="btn mt-3" href="{{ route('servicios.pediatria') }}" data-discover="true">Ver servicios</a>
            </div>
            <div class="col-lg-9" style="padding-top: 4rem;">
                <h5 data-aos="zoom-in-up" class="eslogan d-none d-lg-block ms-3">Conoce todo lo que tenemos para
                    cuidar de ti</h5>
                <div id="serviceSlide" class="splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div class="service-box text-center">
                                    <i class="fa-solid fa-baby mb-2"></i>
                                    <p>Pediatría</p>
                                    <span>Cuidado médico para niños y adolescentes en cada etapa de su
                                        desarrollo.</span>
                                    <a href="{{ route('servicios.pediatria') }}"><i class="ms-2 fa-solid fa-circle-right"></i></a>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="service-box text-center">
                                    <i class="fa-solid fa-venus mb-2"></i>
                                    <p>Ginecología</p>
                                    <span>Salud femenina integral: desde prevención hasta tratamientos
                                        especializados.</span>
                                    <a href="{{ route('servicios.ginecologia') }}"><i class="ms-2 fa-solid fa-circle-right"></i></a>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="service-box text-center">
                                    <img src="../../img/iconos/endocrinologia.png" alt="Endocrinología">
                                    <p>Endocrinología</p>
                                    <span>Especialistas en el tratamiento de diabetes, tiroides y trastornos
                                        hormonales.</span>
                                    <a href="{{ route('servicios.endocrinologia') }}"><i class="ms-2 fa-solid fa-circle-right"></i></a>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="service-box text-center">
                                    <img src="../../img/iconos/neurologia.avif" alt="neurologia">
                                    <p>Neurologia</p>
                                    <span>Atención de trastornos del cerebro, médula espinal y nervios, como
                                        migrañas, epilepsia,etc.</span>
                                    <a href="{{ route('servicios.neurologia') }}"><i class="ms-2 fa-solid fa-circle-right"></i></a>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="service-box text-center">
                                    <img src="../../img/iconos/hueso.png" alt="hueso">
                                    <p>Traumatologia</p>
                                    <span>Atención integral para prevenir y tratar lesiones óseas, articulares y
                                        musculares.</span>
                                    <a href="{{ route('servicios.traumatologia') }}"><i class="ms-2 fa-solid fa-circle-right"></i></a>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="service-box text-center">
                                    <img src="../../img/iconos/ecografias.avif" alt="ecografía">
                                    <p>Ecografías</p>
                                    <span>Estudios ecográficos precisos y confiables, apoyando el diagnóstico
                                        médico.</span>
                                    <a href="{{ route('servicios.ecografias') }}"><i class="ms-2 fa-solid fa-circle-right"></i></a>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="service-box text-center">
                                    <i class="fa-solid fa-stethoscope mb-2"></i>
                                    <p>Medicina interna</p>
                                    <span>Manejo global de la salud del adulto, desde la prevención hasta el
                                        tratamiento.</span>
                                    <a href="{{ route('servicios.medicinaInterna') }}"><i class="ms-2 fa-solid fa-circle-right"></i></a>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="service-box text-center">
                                    <img src="../../img/iconos/reumatologia.png" alt="Reumatología">
                                    <p>Reumatología</p>
                                    <span>Atención a enfermedades articulares, musculares y autoinmunes como
                                        artritis y lupus.</span>
                                    <a href="{{ route('servicios.reumatologia') }}"><i class="ms-2 fa-solid fa-circle-right"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>


</div>
<div class="emergency">
    <div class="container py-6">
        <div class="text-center py-5">
            <h2 data-aos="fade-up">Tu salud, estés donde estés</h2>
            <p data-aos="fade-up" data-aos-delay="100">Con nuestra plataforma de <b style="color: #FFC261">telemedicina</b>, puedes acceder a consultas médicas seguras y
                personalizadas desde tu hogar, con la misma calidad y calidez que en una visita presencial.</p>
            <a data-aos="zoom-in" data-aos-delay="200" class="btn mt-3" href="https://wa.me/51972240403?text=Hola%20Qhalimed,%20quiero%20solicitar%20una%20consulta%20virtual%20por%20telemedicina" target="_blank" data-discover="true">Agendar consulta en línea</a>
        </div>
    </div>
</div>
<div class="otros-servicios">
    <div class="container py-7">
        <div class="row text-center align-items-stretch" style="overflow-y: hidden;">
            <div class="col-lg-6">
                <div class="justify-content-end d-flex box h-100" style="background-image:url(../../img/Group12.webp);background-size: cover;background-position-x: center;border-color: #80D8B5;">
                    <div class="content">
                        <h2 data-aos="fade-up" class="px-2" style="color: #00989D;">Delivery de farmacia
                        </h2>
                        <p class="d-none d-sm-block my-3">Envia tus medicamentos a tu hogar de forma rápida y segura.</p>
                        <a data-aos="zoom-in" class="btn bg-green mt-2" href="https://wa.me/51972240403?text=Hola%20Qhalimed,%20quisiera%20pedir%20medicamentos%20por%20delivery" target="_blank" data-discover="true">Solicitar
                            envío</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0">
                <div class="justify-content-start d-flex box h-100" style="background-image:url(../../img/Group13.webp);background-size: cover;background-position-x: center;border-color: #FE6F63;">
                    <div class="content">
                        <h2 data-aos="fade-up" class="px-2" style="color: #DA5C52;">Médicos a domicilio
                        </h2>
                        <p class="d-none d-sm-block my-3">Si no puedes o prefieres no salir, podemos atenderte en tu hogar.</p>
                        <a data-aos="zoom-in" class="btn bg-pink mt-2" href="https://wa.me/51972240403?text=Hola%20Qhalimed,%20quiero%20solicitar%20un%20médico%20a%20domicilio" target="_blank" data-discover="true">Solicitar
                            visita</a>
                    </div>
                </div>
            </div>

            <div class="col-12 mt-4">
                <div class="justify-content-end d-flex box h-100 mh-box" style="background-image:url(../../img/Group11.webp);background-size: cover;background-position-x: center;border-color: #FFC261;">
                    <div class="content">
                        <h2 data-aos="fade-up" class="px-2" style="color: #E5920D;">Servicio de ambulancia
                        </h2>
                        <p class="d-none d-sm-block my-3">Si necesitas atención médica urgente, puedes solicitar el servicio de
                            ambulancia.</p>
                        <a data-aos="zoom-in" class="btn bg-yellow mt-2" href="https://wa.me/51972240403?text=Hola%20Qhalimed,%20quiero%20solicitar%20el%20servicio%20de%20ambulancia" target="_blank" data-discover="true">Solicitar
                            servicio</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="staff">
    <div class="container py-7">
        <div class="row text-center" style="overflow-y: hidden;">
            <div class="col-lg-6 p-lg-5 order-lg-2">
                <h2 data-aos="fade-up" class="w-70" style="justify-self: center;">Un <span style=" color: #fe6f63 ">equipo médico </span>a tu servicio</h2>
                <a data-aos="zoom-in" class="btn mt-2" href="{{ route('medicos') }}" data-discover="true">Conoce a
                    nuestro
                    staff</a>
                <p class="mt-3 mb-0">Nuestro equipo médico combina experiencia, vocación y actualización
                    constante
                    para ofrecerte diagnósticos precisos y tratamientos efectivos.</p>
            </div>
            <div class="col-6 col-lg-3 pe-0 order-lg-1" style="border-radius: 60px 0px 0px 60px;background: #41d3bba6;">
                <div class="circle" style="background: linear-gradient(180deg, #00CFC1 0%, #83e2d3  100%);">
                    <h1>+10</h1>
                </div>
                <span data-aos="slide-left" data-aos-easing="linear" class="p-2" style=" border-radius: 20px 0px 0px 20px;">Médicos expertos</span>
            </div>

            <div class="col-6 col-lg-3 ps-0 order-lg-3" style="border-radius: 0px 60px 60px 0px;background: #80d8b5a6;">
                <div class="circle" style="background: linear-gradient(180deg, #5ad3b2 0%, #ace6cf 100%);">
                    <i class="fa-solid fa-user-doctor"></i>
                </div>
                <span data-aos="slide-right" data-aos-easing="linear" class="p-2" style="border-radius: 0px 20px 20px 0px;background: #ffcb79;">Atención Personalizada</span>
            </div>
        </div>
    </div>

</div>
<div class="blog">
    <div class="container py-7 pb-10">
        <div class="title-blog">
            <h2 data-aos="fade-up" class="w-70">Consejos de <span style=" color: #fe6f63 ">salud y
                    novedades</span></h2>
            <div class="d-lg-flex justify-content-between">
                <p data-aos="fade-up" data-aos-delay="100" class="w-70 mt-3">Infórmate con artículos escritos
                    por nuestros especialistas. Encuentra recomendaciones, noticias médicas y tips para cuidar
                    tu salud y la de tu familia.</p>
                <a data-aos="zoom-in" class="btn" style="height: fit-content" href="{{ route('blog') }}" data-discover="true">Descubre más aquí</a>
            </div>
        </div>

        <div id="blogSlide" class="splide blog-slider mt-4">
            <div class="splide__track">
                <ul class="splide__list">
                    @foreach($blogs as $blog)
                    <li class="splide__slide">
                        <div class="blog-card">
                            <div class="card-content">
                                <img src="{{ asset('storage/'.$blog->imagen) }}" alt="portada">
                                @if($blog->categoria === 'Noticias')
                                <div class="categoria bg-yellow"><i class="fa-solid fa-newspaper"></i></div>
                                @elseif($blog->categoria === 'Consejos de salud')
                                <div class="categoria bg-pink"><i class="fa-solid fa-heart"></i></div>
                                @endif
                                <div class="blog-text">
                                    <h5>{{ $blog->titulo }}
                                    </h5>
                                    <p>{{ $blog->resumen }}</p>
                                    <a href="{{ route('blog.detalle', ['id' => $blog->id]) }}">Ver más <i class="fa-solid fa-angles-right"></i></a>
                                    <div class="fecha">{{ $blog->created_at->translatedFormat('M d, Y') }}</div>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="dots-container" id="blogSlideDots"></div>
        </div>

    </div>
</div>
@endsection

@section('javascript')
@vite('resources/js/inicio.js')
<script>
  const videoModal = document.getElementById('videoModal');
  const videoFrame = document.getElementById('videoFrame');
  const videoURL = "https://www.youtube.com/embed/yfFWiPyQMfw?si=3tQVjJjoZVKyY5Z0";

  videoModal.addEventListener('show.bs.modal', () => {
      videoFrame.src = videoURL + "?autoplay=1";
  });

  videoModal.addEventListener('hidden.bs.modal', () => {
      videoFrame.src = "";
  });
</script>
@endsection
