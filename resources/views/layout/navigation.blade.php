<header id="header" class="header">
        <div class="topbar d-flex align-items-center">
            <div class="topbar-wave">
                <svg viewBox="0 0 1440 120" preserveAspectRatio="none">
                    <path d="M0,60 
                        C180,120 360,0 540,60 
                        C720,120 900,0 1080,60 
                        C1260,120 1440,0 1440,0 
                        L1440,120 
                        L0,120 Z">
                    </path>
                </svg>
            </div>
            <div class="container d-flex justify-content-center justify-content-md-between">
                <div class="contact-info d-flex align-items-center">
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-envelope"></i>
                        <a>ayuda@qhalimed.com</a>
                    </div>
                    <div class="d-flex align-items-center ms-4">
                        <i class="fa-solid fa-phone"></i>
                        <a>+51 972 240 403</a>
                    </div>
                </div>
                <div class="social-links d-none d-md-flex align-items-center">
                    <a href="https://youtube.com/@qhalimedcorporacionmedica?si=bQQnvMZIMb8x1EZR" target="_blank" class="youtube"><i class="fa-brands fa-youtube"></i></a>
                    <a href="https://www.facebook.com/profile.php?id=61584106434164" target="_blank" class="facebook" ><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.instagram.com/corporacionmedicaqhalimed/" target="_blank" class="instagram"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="branding d-flex align-items-center">
            <div class="container position-relative d-flex align-items-center justify-content-between">
                <a href="{{ route('inicio')}}" class="logo d-flex align-items-center me-auto">

                    <img src="../../img/LOGO QHALIMED.png" alt="Qhalimed Logo">
                </a>
                <i class="mobile-nav-toggle d-xl-none fa-solid fa-bars"
                    onclick="const nav = document.getElementById('navmenu'); nav.classList.toggle('open');"></i>
                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li>
                            <a href="{{ route('inicio') }}" class="{{ request()->routeIs('inicio') ? 'active' : '' }}">Inicio</a>
                        </li>
                        <li>
                            <a href="{{ route('nosotros') }}" class="{{ request()->routeIs('nosotros') ? 'active' : '' }}">Nosotros</a>
                        </li>
                        <li>
                            <a href="{{ route('servicios') }}" class="{{ request()->routeIs('servicios*') ? 'active' : '' }}">Servicios</a>
                        </li>
                        <li>
                            <a href="{{ route('medicos') }}" class="{{ request()->routeIs('medicos') ? 'active' : '' }}">Médicos</a>
                        </li>
                        <li><a href="{{ route('blog') }}" class="{{ request()->routeIs('blog*') ? 'active' : '' }}">Blog</a></li>
                        <li><a href="{{ route('contacto') }}" class="{{ request()->routeIs('contacto') ? 'active' : '' }}">Contacto</a></li>
                        <a class="cta-btn pulse-effect" href="https://wa.me/51972240403?text=Hola%20Qhalimed%20quiero%20agendar%20una%20cita" target="_blank">Agendar una cita</a>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
