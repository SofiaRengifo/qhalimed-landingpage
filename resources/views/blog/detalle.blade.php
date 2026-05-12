@extends('landing')
@section('title') | Blog @endsection
@section('styles')
@vite('resources/css/Blog.css')
@endsection

@section('content')
<section class="noticia-bg">
    <div class="container py-6 pb-10  px-sm">
        <div class="row">

            {{-- CONTENIDO PRINCIPAL --}}
            <div class="col-xl-8">
                {{-- Categoría + fecha --}}
                <div class="d-flex align-items-center gap-3 mb-3 flex-wrap">
                    <span class="badge px-3 py-2 
                        {{ $blog->categoria === 'Noticias' ? 'bg-yellow' : 'bg-pink' }}">
                        {{ $blog->categoria }}
                    </span>

                    <small style="font-family: 'Golos', sans-serif;" class="text-muted">
                        <i class="fa-regular fa-calendar"></i>
                        {{ $blog->created_at->translatedFormat('M d, Y') }}
                    </small>
                </div>

                {{-- Título --}}
                <h1 class="fw-bold mb-3">
                    {{ $blog->titulo }}
                </h1>
                {{-- Autor --}}
                @if($blog->autor)
                <p class="text-muted">
                    Por <strong>{{ $blog->autor }}</strong>
                </p>
                @endif

                {{-- Imagen principal --}}
                <div class="my-4">
                    <img src="{{ asset('storage/'.$blog->imagen) }}" class="img-fluid rounded-4 w-100" alt="Imagen de noticia">
                </div>

                {{-- Contenido --}}
                <div class="noticia-content">
                    {!! $blog->contenido !!}
                </div>
                {{-- Botón volver --}}
                <div class="mt-5">
                    <a href="{{ route('blog') }}" class="btn">
                        ← Volver
                    </a>
                </div>
            </div>

            {{-- SIDEBAR --}}
            <div class="col-xl-4 d-none d-xl-block otros-servicios ps-5">
                <div class="mb-4">
                    <h6 data-aos="fade-right" class="fw-bold text-muted" style="letter-spacing: .5px;">
                        SOLICITA UN SERVICIO
                    </h6>
                    <div class="flex-grow-1" style="height: 1px; background: #1e394e61;"></div>
                </div>
                <div class="banner mb-4" data-aos="fade-up">
                    <div class="justify-content-end d-flex box h-100" style="background-image:url(../../img/Group12.webp);background-size: cover;background-position-x: center;">
                        <div class="content text-end">
                            <h2 class="px-2" style="color: #00989D;">Delivery de farmacia
                            </h2>
                            <a class="btn bg-green mt-2" href="" data-discover="true">Solicitar
                                envío</a>
                        </div>
                    </div>
                </div>
                <div class="banner mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="justify-content-start d-flex box h-100" style="background-image:url(../../img/Group13.webp);background-size: cover;background-position-x: center;">
                        <div class="content">
                            <h2 class="px-2" style="color: #DA5C52;">Médicos a domicilio
                            </h2>
                            <a class="btn bg-pink mt-2" href="" data-discover="true">Solicitar
                                visita</a>
                        </div>
                    </div>
                </div>
                <div class="banner" data-aos="fade-up" data-aos-delay="200">
                    <div class="justify-content-end d-flex box h-100 mh-box" style="background-image:url(../../img/Group11.webp);background-size: cover;background-position-x: center;">
                        <div class="content text-end">
                            <h2 class="px-2" style="color: #E5920D;">Servicio de ambulancia
                            </h2>
                            <a class="btn bg-yellow mt-2" href="" data-discover="true">Solicitar
                                servicio</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
