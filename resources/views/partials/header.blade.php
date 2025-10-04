<!-- Spinner Start -->
<div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner"></div>
</div>
<!-- Spinner End -->


<!-- Topbar Start -->
<div class="container-fluid bg-dark px-5 d-none d-lg-block">
    <div class="row gx-0">
        <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Jl. S. Supriadi No.136, Gedog, Kec. Sananwetan, Kota Blitar</small>
                <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+0821 4242 2828</small>
                <small class="text-light"><i class="fa fa-envelope-open me-2"></i>admin@rrtc.com</small>
            </div>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="">
                    <i class="fab fa-twitter fw-normal"></i>
                </a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="">
                    <i class="fab fa-facebook-f fw-normal"></i>
                </a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="">
                    <i class="fab fa-linkedin-in fw-normal"></i>
                </a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="">
                    <i class="fab fa-instagram fw-normal"></i>
                </a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href="">
                    <i class="fab fa-youtube fw-normal"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar Start -->
<div class="container-fluid position-relative p-0 ">

<nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0" style="background-color: white;">
    <a href="{{route('landing.index')}}" class="navbar-brand p-0">
        <img src="{{ asset('template_rrtc/img/RRTC2PNG1.png')}}" alt="logo pajak" class="m-0" width="140" height="60">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
                <a href="{{ route('landing.index') }}" 
                    class="nav-item nav-link text-primary {{ request()->routeIs('landing.index') ? 'active' : '' }}">
                    Beranda
                </a>
                <a href="{{ route('landing.about') }}" 
                    class="nav-item nav-link text-primary {{ request()->routeIs('landing.about') ? 'active' : '' }}">
                    Tentang Kami
                </a>

                <a href="{{ route('landing.mengapa') }}" 
                    class="nav-item nav-link text-primary {{ request()->routeIs('landing.mengapa') ? 'active' : '' }}">
                    Mengapa Kami
                </a>

                <a href="{{ route('landing.layanan') }}" 
                    class="nav-item nav-link text-primary {{ request()->routeIs('landing.layanan') ? 'active' : '' }}">
                    Layanan
                </a>

                <a href="{{ route('landing.partner') }}" 
                    class="nav-item nav-link text-primary {{ request()->routeIs('landing.partner') ? 'active' : '' }}">
                    Partner
                </a>

                <a href="{{ route('landing.berita') }}" 
                    class="nav-item nav-link text-primary {{ request()->routeIs('landing.berita') ? 'active' : '' }}">
                    Berita
                </a>

                <a href="{{ route('landing.contact') }}" 
                    class="nav-item nav-link text-primary {{ request()->routeIs('landing.contact') ? 'active' : '' }}">
                    Kontak
                </a>
            
            <!-- Dropdown Bahasa -->
            <!-- <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle text-primary d-flex align-items-center" data-bs-toggle="dropdown">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" 
                        aria-hidden="true" role="presentation" focusable="false" 
                        style="height: 18px; width: 18px; fill: currentColor; margin-right: 6px;">
                        <path d="M8 .25a7.77 7.77 0 0 1 7.75 7.78 7.75 7.75 0 0 1-7.52 7.72h-.25A7.75 7.75 0 0 1 .25 8.24v-.25A7.75 7.75 0 0 1 8 .25zm1.95 8.5h-3.9c.15 2.9 1.17 5.34 1.88 5.5H8c.68 0 1.72-2.37 1.93-5.23zm4.26 0h-2.76c-.09 1.96-.53 3.78-1.18 5.08A6.26 6.26 0 0 0 14.17 9zm-9.67 0H1.8a6.26 6.26 0 0 0 3.94 5.08 12.59 12.59 0 0 1-1.16-4.7l-.03-.38zm1.2-6.58-.12.05a6.26 6.26 0 0 0-3.83 5.03h2.75c.09-1.83.48-3.54 1.06-4.81zm2.25-.42c-.7 0-1.78 2.51-1.94 5.5h3.9c-.15-2.9-1.18-5.34-1.89-5.5h-.07zm2.28.43.03.05a12.95 12.95 0 0 1 1.15 5.02h2.75a6.28 6.28 0 0 0-3.93-5.07z"></path>
                    </svg>
                    Bahasa
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="langDropdown">
                    <li>
                        <button class="dropdown-item" >
                            <span class="flag-icon flag-icon-id"></span> Indonesia
                        </button>
                    </li>
                    <li>
                        <button class="dropdown-item" >
                            <span class="flag-icon flag-icon-gb"></span> English
                        </button>
                    </li>
                </ul>
            </div> -->

            
            <!-- Login button -->
            <a href="{{route('login')}}" class="btn btn-primary" role="button">Login</a>
            
        </div>
    </div>
</nav>
</div>
<!-- Navbar End -->



<!-- Full Screen Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
            <div class="modal-header border-0">
                <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <div class="input-group" style="max-width: 600px;">
                    <input type="text" class="form-control bg-transparent border-primary p-3"
                        placeholder="Type search keyword">
                    <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Full Screen Search End -->