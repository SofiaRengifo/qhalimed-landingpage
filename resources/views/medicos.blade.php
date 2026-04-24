@extends('landing')
@section('title')| Médicos @endsection
@section('styles')
    @vite('resources/css/Medicos.css')
@endsection

@section('content')
<div class="bg-head" style="background-image: url(../../img/portadas/medicos.webp)">
    <div class="container">
        <div class="d-flex py-4" style="align-items: stretch;gap: 1rem;overflow-x: hidden;">
            <span class="barra"></span>
            <h1 data-aos="fade-right">Médicos</h1>
        </div>
    </div>
</div>
<div class="container py-6 pb-10 pb-lg-5 mb-lg-5 px-sm">
    <div class="row">
        @foreach($medicos as $medico)
        <div class="col-sm-6 col-md-4 col-lg-3 col-12 mb-4">
            <div class="custom-block custom-block-overlay">
                <button type="button" class="custom-block-image-wrap" data-bs-toggle="modal"  data-bs-target="#modal{{ $medico->id }}">
                    <img src="{{ asset('storage/' . $medico->foto) }}" class="custom-block-image img-fluid" alt="medico" />
                    <div class="portafolio">
                        <p>Ver más <i class="fa-solid fa-circle-plus"></i></p>
                    </div>
                </button>

                <div class="custom-block-info custom-block-overlay-info">
                    <h5 class="mb-1">
                        {{ $medico->especialidad }}
                    </h5>
                    <p class="mb-0">{{ $medico->nombre }}</p>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modal{{ $medico->id }}" tabindex="-1">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 w-100 text-center">{{ $medico->nombre }}
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4 img-modal" style="background-image: url('{{ asset('storage/' . $medico->foto) }}');background-size: cover;background-position-x: center;">
                                </div>
                                <div class="col-md-8 pe-md-0 ms-auto">
                                    <h5 class="p-3 mb-1" style="background-color: #80D8B5;font-size: 1rem;color: #22564d;"> <i><svg style="width: fit-content;margin-right: 0.50rem;" height="20px" viewBox="0 0 145 145" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M123.207 21.7425C125.129 21.7425 126.973 22.5061 128.332 23.8652C129.691 25.2244 130.455 27.0678 130.455 28.9899V54.646C130.457 72.3116 125.216 89.5805 115.395 104.264C105.574 118.948 91.615 130.387 75.2868 137.129C74.3947 137.506 73.436 137.7 72.4676 137.7C71.4991 137.7 70.5405 137.506 69.6483 137.129C53.3223 130.385 39.3658 118.946 29.5472 104.262C19.7286 89.5783 14.49 72.3101 14.4951 54.646V28.9899C14.4951 27.0678 15.2587 25.2244 16.6179 23.8652C17.977 22.5061 19.8204 21.7425 21.7426 21.7425C39.7112 22.0079 57.3587 16.9658 72.4748 7.24756C87.591 16.9658 105.238 22.0079 123.207 21.7425Z" fill="#FFC261" />
                                                <path d="M72.4748 86.9697V57.9798M86.9697 72.4747H57.9799M72.4748 7.24756C57.3587 16.9658 39.7112 22.0079 21.7426 21.7425C19.8204 21.7425 17.977 22.5061 16.6179 23.8652C15.2587 25.2244 14.4951 27.0678 14.4951 28.9899V54.646C14.4922 72.3116 19.7333 89.5805 29.5545 104.264C39.3756 118.948 53.3347 130.387 69.6628 137.129C70.555 137.506 71.5136 137.7 72.4821 137.7C73.4505 137.7 74.4092 137.506 75.3013 137.129C91.6273 130.385 105.584 118.946 115.402 104.262C125.221 89.5783 130.46 72.3101 130.455 54.646V28.9899C130.455 27.0678 129.691 25.2244 128.332 23.8652C126.973 22.5061 125.129 21.7425 123.207 21.7425C105.238 22.0079 87.591 16.9658 72.4748 7.24756Z" stroke="#1E394E" stroke-width="14.4949" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </i>Especialidad:
                                        {{ $medico->especialidad }}</h5>
                                    <p class="p-3 mb-1" style="background-color: #EDF2F1;"><svg style="width: fit-content;margin-right: 0.50rem;" height="20px" viewBox="0 0 162 162" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M112.556 41.5556V35.2444C112.556 26.4081 112.556 21.9898 110.836 18.6148C109.323 15.646 106.909 13.2323 103.941 11.7197C100.566 10 96.1475 10 87.3111 10H74.6889C65.8525 10 61.4343 10 58.0593 11.7197C55.0904 13.2323 52.6768 15.646 51.1641 18.6148C49.4444 21.9898 49.4444 26.4081 49.4444 35.2444V41.5556M41.5556 41.5556V152M120.444 41.5556V152M65.2222 96.7778H96.7778M81 81V112.556M47.8667 152H114.133C127.388 152 134.015 152 139.078 149.42C143.531 147.151 147.151 143.531 149.42 139.078C152 134.015 152 127.388 152 114.133V79.4222C152 66.1673 152 59.5403 149.42 54.4778C147.151 50.0246 143.531 46.4041 139.078 44.1351C134.015 41.5556 127.388 41.5556 114.133 41.5556H47.8667C34.6121 41.5556 27.9848 41.5556 22.9222 44.1351C18.469 46.4041 14.8485 50.0246 12.5795 54.4778C10 59.5403 10 66.1673 10 79.4222V114.133C10 127.388 10 134.015 12.5795 139.078C14.8485 143.531 18.469 147.151 22.9222 149.42C27.9848 152 34.6121 152 47.8667 152Z" stroke="#80D8B5" stroke-width="15.7778" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <b>Experiencia:</b> {{ $medico->experiencia }} años
                                    </p>
                                    <p class="p-3 mb-1" style="background-color: #edf2f18a;">
                                        <svg style="width: fit-content;margin-right: 0.50rem;" height="20px" viewBox="0 0 162 162" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M81 17L8 59.7434L81 102.487L154 59.7434L81 17Z" stroke="#80D8B5" stroke-width="15" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M35 79.4868V117.521C35 129.826 55.4444 145.487 81 145.487C106.556 145.487 127 129.826 127 117.521V79.4868" stroke="#80D8B5" stroke-width="15" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M154 62.4868V135.487" stroke="#80D8B5" stroke-width="15" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <b>Educación:</b> {{ $medico->educacion }}
                                    </p>
                                    <p class="p-3 mb-0" style="background-color: #EDF2F1;">
                                        <svg style="width: fit-content;margin-right: 0.50rem;" height="20px" viewBox="0 0 162 162" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M97.3933 72.4781H89.2853V64.3701C89.2853 62.2197 88.431 60.1574 86.9105 58.6369C85.3899 57.1164 83.3276 56.2621 81.1773 56.2621C79.0269 56.2621 76.9646 57.1164 75.444 58.6369C73.9235 60.1574 73.0693 62.2197 73.0693 64.3701V72.4781H64.9613C62.8109 72.4781 60.7486 73.3324 59.228 74.8529C57.7075 76.3734 56.8533 78.4357 56.8533 80.5861C56.8533 82.7365 57.7075 84.7988 59.228 86.3193C60.7486 87.8399 62.8109 88.6941 64.9613 88.6941H73.0693V96.8021C73.0693 98.9525 73.9235 101.015 75.444 102.535C76.9646 104.056 79.0269 104.91 81.1773 104.91C83.3276 104.91 85.3899 104.056 86.9105 102.535C88.431 101.015 89.2853 98.9525 89.2853 96.8021V88.6941H97.3933C99.5436 88.6941 101.606 87.8399 103.126 86.3193C104.647 84.7988 105.501 82.7365 105.501 80.5861C105.501 78.4357 104.647 76.3734 103.126 74.8529C101.606 73.3324 99.5436 72.4781 97.3933 72.4781ZM147.339 23.8301C138.693 15.2738 127.274 10.0892 115.142 9.21205C103.01 8.33486 90.9638 11.8228 81.1773 19.0464C70.8611 11.3733 58.0207 7.89393 45.242 9.30899C32.4632 10.724 20.6951 16.9284 12.3077 26.6727C3.92023 36.4169 -0.463643 48.9772 0.0388811 61.8243C0.541405 74.6714 5.89299 86.8509 15.016 95.9102L63.664 144.964C68.2247 149.519 74.4071 152.077 80.8529 152.077C87.2988 152.077 93.4811 149.519 98.0419 144.964L146.69 95.9102C151.481 91.2291 155.3 85.6472 157.927 79.4853C160.554 73.3235 161.938 66.7032 161.998 60.005C162.058 53.3068 160.794 46.6627 158.278 40.4546C155.763 34.2465 152.045 28.5968 147.339 23.8301ZM135.906 84.3158L87.2583 132.964C86.5045 133.724 85.6078 134.327 84.6197 134.739C83.6317 135.15 82.5719 135.362 81.5016 135.362C80.4312 135.362 79.3715 135.15 78.3834 134.739C77.3954 134.327 76.4986 133.724 75.7449 132.964L27.0969 84.3158C20.7383 77.816 17.1776 69.0846 17.1776 59.9918C17.1776 50.899 20.7383 42.1676 27.0969 35.6678C33.5764 29.2705 42.3154 25.6833 51.4209 25.6833C60.5264 25.6833 69.2653 29.2705 75.7449 35.6678C76.4986 36.4277 77.3954 37.0309 78.3834 37.4426C79.3715 37.8542 80.4312 38.0661 81.5016 38.0661C82.5719 38.0661 83.6317 37.8542 84.6197 37.4426C85.6078 37.0309 86.5045 36.4277 87.2583 35.6678C93.7378 29.2705 102.477 25.6833 111.582 25.6833C120.688 25.6833 129.427 29.2705 135.906 35.6678C142.314 42.1748 145.905 50.9407 145.905 60.0729C145.905 69.2051 142.314 77.9709 135.906 84.478V84.3158Z" fill="#80D8B5" />
                                        </svg>

                                        <b>Número de colegio médico (CMP):</b> {{ $medico->cmp }}
                                    </p>
                                </div>
                                <div class="col-12 px-md-0">
                                    <div class="collapse pt-3" id="collapseExample{{ $medico->id }}">
                                        <div class="card card-body" style="background-color: #e7f7f1;border-color: #80d8b5;font-size: 14px;">
                                            {{ $medico->descripcion }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button class="btn btn-yellow" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample{{ $medico->id }}" aria-expanded="false" aria-controls="collapseExample{{ $medico->id }}">
                            Conoce más
                        </button>
                        <button type="button" class="btn pulse-effect btn-whatsapp" data-especialidad="{{ $medico->especialidad }}" data-nombre="{{ $medico->nombre }}">Agendar cita</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
@section('javascript')
<script>
    document.querySelectorAll('.btn-whatsapp').forEach(btn => {
        btn.addEventListener('click', function() {
            const especialidad = this.getAttribute('data-especialidad');
            const nombre = this.getAttribute('data-nombre');
            const mensaje = `Hola quiero agendar una cita para ${especialidad} con ${nombre}`;
            const url = `https://wa.me/51972240403?text=${encodeURIComponent(mensaje)}`;

            window.open(url, '_blank');
        });
    });

</script>
@endsection
