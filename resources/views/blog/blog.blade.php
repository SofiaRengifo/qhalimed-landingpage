@extends('landing')
@section('title') | Blog @endsection
@section('styles')
@vite('resources/css/Blog.css')
@endsection

@section('content')
<div class="bg-head" style="background-image: url(../../img/portadas/blog.webp)">
    <div class="container">
        <div class="d-flex py-4" style="align-items: stretch;gap: 1rem;overflow-x: hidden;">
            <span class="barra"></span>
            <h1 data-aos="fade-right">Blog Qhalimed</h1>
        </div>
    </div>
</div>
<div class="container py-6 pb-10 px-sm">
    <div class="row">
        <div class="col-lg-3 mb-5">
            <h5>Filtros</h5>
            <form method="GET" action="{{ route('blog') }}">
                <ul class="list-group mt-4">
                    <li class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" name="categoria[]" value="Consejos de salud" {{ in_array('Consejos de salud', request('categoria', [])) ? 'checked' : '' }}>
                        <label>Consejos de Salud</label>
                    </li>

                    <li class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" name="categoria[]" value="Noticias" {{ in_array('Noticias', request('categoria', [])) ? 'checked' : '' }}>
                        <label>Noticias</label>
                    </li>
                </ul>

                <button class="btn mt-4">Filtrar</button>
            </form>

        </div>
        <div class="col-lg-9">
            <div class="row">
                @foreach($blogs as $blog)
                <div class="col-sm-6 col-lg-4 blog-card">
                    <div class="card-content">
                        <a class="imagen" href="{{ route('blog.detalle', ['id' => $blog->id]) }}">
                            <img src="{{ asset('storage/'.$blog->imagen) }}" alt="portada">
                        </a>
                        @if($blog->categoria === 'Noticias')
                        <div class="categoria bg-yellow">
                            <i class="fa-solid fa-newspaper"></i>
                        </div>
                        @elseif($blog->categoria === 'Consejos de salud')
                        <div class="categoria bg-pink">
                            <i class="fa-solid fa-heart"></i>
                        </div>
                        @endif
                        <div class="blog-text">
                            <h5>{{ $blog->titulo }}</h5>
                            <p>{{ $blog->resumen }}</p>
                            <a href="{{ route('blog.detalle', ['id' => $blog->id]) }}">Ver más <i class="fa-solid fa-angles-right"></i></a>
                            <div class="fecha">{{ $blog->created_at->translatedFormat('M d, Y') }}</div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="mt-4">
                {{ $blogs->links() }}
            </div>
        </div>

    </div>
</div>
@endsection
