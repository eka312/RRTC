    <!-- Vendor Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <img src="{{ asset('template_rrtc/img/vendor-1.jpg') }}" alt="Vendor 1">
                    <img src="{{ asset('template_rrtc/img/vendor-2.jpg') }}" alt="Vendor 2">
                    <img src="{{ asset('template_rrtc/img/vendor-3.jpg') }}" alt="Vendor 3">
                    <img src="{{ asset('template_rrtc/img/vendor-4.jpg') }}" alt="Vendor 4">
                    <img src="{{ asset('template_rrtc/img/vendor-5.jpg') }}" alt="Vendor 5">
                    <img src="{{ asset('template_rrtc/img/vendor-6.jpg') }}" alt="Vendor 6">
                    <img src="{{ asset('template_rrtc/img/vendor-7.jpg') }}" alt="Vendor 7">
                    <img src="{{ asset('template_rrtc/img/vendor-8.jpg') }}" alt="Vendor 8">
                    <img src="{{ asset('template_rrtc/img/vendor-9.jpg') }}" alt="Vendor 9">
                </div>

            </div>
        </div>
    </div>
    <!-- Vendor End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div
                        class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                        <a href="index.html" class="navbar-brand mb-5 position-relative pt-0">
                            <img src="{{ asset('template_rrtc/img/RRTC2PNG.png')}}" alt="logo pajak" class="m-0" width="420" height="280">
                        </a>
                        <form action="" class="mt-5">
                            <div class="input-group">
                                <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                                <button class="btn btn-dark">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Hubungi Kami</h3>
                            </div>
                            <h6 class="mb-1 text-white">HEAD OFFICE</h6>
                            <div class="d-flex mb-3">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">Jl. S. Supriadi No.136, Gedog, Kec. Sananwetan, Kota Blitar</p>
                            </div>
                            <h6 class="mb-1 text-white">BRANCH OFFICE</h6>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">Jl. Raya Kodau No.36 C,
                                    RT 001/023, Jatiwarna,
                                    Pondok Melati, Kota Bekasi
                                </p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">admin@rrtc.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">+0821 4242 2828</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-primary btn-square me-2" href="#">
                                    <i class="fab fa-twitter fw-normal"></i>
                                </a>
                                <a class="btn btn-primary btn-square me-2" href="#">
                                    <i class="fab fa-facebook-f fw-normal"></i>
                                </a>
                                <a class="btn btn-primary btn-square me-2" href="#">
                                    <i class="fab fa-linkedin-in fw-normal"></i>
                                </a>
                                <a class="btn btn-primary btn-square" href="#">
                                    <i class="fab fa-instagram fw-normal"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Tautan Cepat</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="{{route('landing.index')}}">
                                    <i class="bi bi-arrow-right text-primary me-2"></i>
                                    Beranda
                                </a>
                                <a class="text-light mb-2" href="{{route('landing.about')}}">
                                    <i class="bi bi-arrow-right text-primary me-2"></i>
                                    Tentang Kami
                                </a>
                                <a class="text-light mb-2" href="{{route('landing.mengapa')}}">
                                    <i class="bi bi-arrow-right text-primary me-2"></i>
                                    Mengapa Kami
                                </a>
                                <a class="text-light mb-2" href="{{route('landing.layanan')}}">
                                    <i class="bi bi-arrow-right text-primary me-2"></i>
                                    Layanan
                                </a>
                                <a class="text-light mb-2" href="{{route('landing.partner')}}">
                                    <i class="bi bi-arrow-right text-primary me-2"></i>
                                    Partner
                                </a>
                                <a class="text-light mb-2" href="{{route('landing.berita')}}">
                                    <i class="bi bi-arrow-right text-primary me-2"></i>
                                    Berita
                                </a>
                                <a class="text-light mb-2" href="{{route('landing.contact')}}">
                                    <i class="bi bi-arrow-right text-primary me-2"></i>
                                    Kontak
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Tentang RRTC</h3>
                            </div>
                            <p class="mt-3 mb-4">
                                RRTC adalah konsultan pajak profesional yang mengedepankan integritas, keahlian, dan teknologi. 
                                Kami hadir untuk membantu individu maupun perusahaan mengelola kewajiban perpajakan dengan solusi 
                                yang tepat, efisien, dan terpercaya.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">2024</a>. All
                            Rights Reserved.
                            Designed by <a class="text-white border-bottom" href="https://htmlcodex.com">Team Wajib
                                Pajak</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
   