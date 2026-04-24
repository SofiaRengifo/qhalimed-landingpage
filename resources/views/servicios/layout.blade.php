@extends('landing')
@section('title')| Servicios @endsection
@section('styles')
  @vite('resources/css/Servicios.css')
@endsection
@section('content')
<div class="bg-head" style="background-image: url(../../img/portadas/servicios.webp);">
            <div class="container">
                <div class="d-flex py-4" style="align-items: stretch;gap: 1rem;overflow-x: hidden;">
                    <span class="barra"></span>
                    <h1 data-aos="fade-right">Servicios</h1>
                </div>
            </div>
        </div>
      <nav class="services-submenu">
        <div class="container d-flex gap-3 py-3 flex-wrap nav-services">
          <a href="{{ route('servicios.pediatria') }}"class="{{ request()->routeIs('servicios.pediatria') ? 'active' : '' }}">Pediatría</a>
          <a href="{{ route('servicios.ginecologia') }}"class="{{ request()->routeIs('servicios.ginecologia') ? 'active' : '' }}">Ginecología</a>
          <a href="{{ route('servicios.endocrinologia') }}"class="{{ request()->routeIs('servicios.endocrinologia') ? 'active' : '' }}">Endocrinología</a>
          <a href="{{ route('servicios.medicinaInterna') }}"class="{{ request()->routeIs('servicios.medicinaInterna') ? 'active' : '' }}">Medicina interna</a>
          <a href="{{ route('servicios.neurologia') }}"class="{{ request()->routeIs('servicios.neurologia') ? 'active' : '' }}">Neurologia</a>
          <a href="{{ route('servicios.traumatologia') }}"class="{{ request()->routeIs('servicios.traumatologia') ? 'active' : '' }}">Traumatologia</a>
          <a href="{{ route('servicios.reumatologia') }}"class="{{ request()->routeIs('servicios.reumatologia') ? 'active' : '' }}">Reumatología</a>
          <a href="{{ route('servicios.ecografias') }}"class="{{ request()->routeIs('servicios.ecografias') ? 'active' : '' }}">Ecografías</a>
        </div>
      </nav>
      @yield('servicio-content')
@endsection