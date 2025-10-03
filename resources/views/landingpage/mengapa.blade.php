@extends('layouts.app')

@section('title', 'Mengapa Kami | Wajib Pajak')

@section('content')

    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">Mengapa Kami</h1>
                <a href="{{ route('landing.index')}}" class="h5 text-white">Beranda</a>
                <span class="text-light">|</span>
                <a href="{{ route('landing.mengapa')}}" class="h5 text-white">Mengapa Kami</a>
            </div>
        </div>
    </div>


    <!--Alasan-->
    <div class="content-container mt-2">
        <div class="content">
            <div class="left-column">
                <div class="title">
                    Mitra Konsultan Pajak Anda
                    <h1>Mengapa memilih <br>RRTC?</h1>
                </div>
                <button class="button">Pelajari Lebih Lanjut →</button>
            </div>
            <div class="right-column">
                <div class="feature">
                    <div class="feature-title">Integritas & Keahlian</div>
                    <div class="feature-description">Tim konsultan kami berpengalaman, bersertifikasi, dan berfokus pada kepatuhan serta efisiensi pajak bagi bisnis dan individu.</div>
                </div>
                <div class="feature">
                    <div class="feature-title">Layanan Pajak Komprehensif</div>
                    <div class="feature-description">Mulai dari laporan keuangan, konsultasi hukum & pajak, hingga pendampingan administrasi, semua disediakan untuk kebutuhan klien.</div>
                </div>
                <div class="feature">
                    <div class="feature-title">Solusi Berbasis Teknologi</div>
                    <div class="feature-description">Kami memanfaatkan teknologi dan AI untuk menyesuaikan layanan sesuai industri dan kebutuhan unik setiap klien.</div>
                </div>
                <div class="feature">
                    <div class="feature-title">Tim Profesional</div>
                    <div class="feature-description">Tim profesional kami menjamin layanan konsultan pajak yang akurat
                        dan dapat diandalkan, sesuai dengan harapan Anda.</div>
                </div>
            </div>
        </div>
    </div>
    <!--Alasan End-->

    <!-- Mengapa Kami Start -->
    <div class="container-fluid py-5 wow fadeInUp mt-3" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 720px;">
                <h1 class="fw-bold text-primary text-uppercase">Mengapa Kami</h1>
                <p class="mb-0">
                    RRTC adalah konsultan pajak profesional yang mengutamakan integritas, keahlian, dan teknologi. Dengan 
                    tim bersertifikat di bidang perpajakan, akuntansi, dan hukum, kami menghadirkan solusi pajak terpercaya, 
                    cerdas, dan sesuai kebutuhan klien. RRTC siap menjadi mitra andal untuk menghadapi tantangan perpajakan sekaligus
                    mendukung pertumbuhan usaha Anda."
                </p>
            </div>

            <!-- Desktop Version -->
            <div class="row g-5 d-none d-md-flex">
                <!-- Alasan 2 -->
                <div class="col-md-10 mx-auto wow slideInUp" data-wow-delay="0.6s">
                    <div class="card-custom bg-primary">
                        <div class="image-img position-relative overflow-hidden">
                            <img class="img-fluid" src="{{asset('template_rrtc/img/why-2.jpg')}}" alt=""
                                style="object-fit: cover; width: 100%; height: 100%;">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-3 py-2 px-3"
                                href="#">RRTC
                            </a>
                        </div>
                        <div class="p-4 flex-grow-1 d-flex flex-column">
                            <h4 class="mb-3 text-primary">Institusi pajak lokal yang memiliki pengetahuan global</h4>
                            <p class="text-white flex-grow-1">Para profesional kami terdiri dari berbagai disiplin ilmu
                                yang dibutuhkan dalam menganalisis permasalahan perpajakan serta berasal dari berbagai
                                lulusan universitas ternama dalam dan luar negeri. Dengan demikian, kami memahami
                                karakteristik kebijakan pajak, baik dari dalam maupun luar negeri.
                            </p>
                            
                        </div>
                    </div>
                </div>
            </div>


            <!-- Mobile Version -->
            <div id="carouselExampleControls" class="carousel slide d-md-none" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- Carousel item 1 -->
                    <div class="carousel-item active">
                        <div class="blog-item bg-light rounded overflow-hidden d-flex flex-column">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="{{asset('template_rrtc/img/why-2.jpg')}}" alt="">
                                <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-3 py-2 px-3"
                                    href="#">RRTC</a>
                            </div>
                            <div class="p-3 flex-grow-1 d-flex flex-column">
                                <h4 class="mb-2 text-primary">Institusi pajak lokal yang memiliki pengetahuan global
                                </h4>
                                <p class="text-white flex-grow-1">Para profesional kami terdiri dari berbagai disiplin
                                    ilmu yang dibutuhkan dalam menganalisis permasalahan perpajakan serta berasal dari
                                    berbagai lulusan universitas ternama dalam dan luar negeri. Dengan demikian, kami
                                    memahami karakteristik kebijakan pajak, baik dari dalam maupun luar negeri.</p>
                                
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- Mengapa Kami End -->

@endsection
