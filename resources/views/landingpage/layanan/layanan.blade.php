@extends('layouts.app')

@section('title', 'Layanan | Wajib Pajak')

@section('content')

            <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
                <div class="row py-5">
                    <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-4 text-white animated zoomIn">Layanan Kami</h1>
                        <a href="{{ route('landing.index')}}" class="h5 text-white">Beranda</a>
                        <span class="text-light">|</span>
                        <a href="{{ route('landing.layanan')}}" class="h5 text-white">Layanan</a>
                    </div>
                </div>
            </div>


        <!-- service start -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 750px;">
                    <h1 class="fw-bold text-primary text-uppercase">Layanan Kami</h1>
                    <p class="mb-0">
                    Kami menyediakan berbagai layanan konsultan pajak & bisnis dengan pendekatan profesional
                    untuk membantu perusahaan menjaga kepatuhan, efisiensi, serta keberlanjutan usaha.
                    </p>
                </div>
            
                <div class="row g-5">
                    <!-- Item 1 -->
                    <div class="col-lg-6 col-md-6 col-sm-12 wow zoomIn" data-wow-delay="0.3s">
                        <div class="service-item bg-light rounded p-4 h-100 d-flex flex-column align-items-center text-center">
                            <div class="service-icon ">
                                <i class="fa fa-file-invoice-dollar text-white"></i>
                            </div>
                            <h4 class="mb-3 text-primary">Jasa Penyusunan Laporan Keuangan</h4>
                            <p class="text-white flex-grow-1">
                                Laporan keuangan akurat & sesuai standar untuk mendukung keputusan bisnis dan meningkatkan kredibilitas.
                            </p>
                            <a href="{{ route('landing.layanan-opsi-1')}}" class="more-link mt-2">
                                Selengkapnya <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
            
                    <!-- Item 2 -->
                    <div class="col-lg-6 col-md-6 col-sm-12 wow zoomIn" data-wow-delay="0.6s">
                        <div class="service-item bg-light rounded p-4 h-100 d-flex flex-column align-items-center text-center">
                            <div class="service-icon ">
                            <i class="fa fa-balance-scale text-white"></i>
                            </div>
                            <h4 class="mb-3 text-primary">Jasa Konsultasi Hukum & Perpajakan</h4>
                            <p class="text-white flex-grow-1">
                            Solusi hukum & pajak sesuai regulasi terbaru untuk kepatuhan, minim risiko, dan strategi bisnis optimal.
                            </p>
                            <a href="{{ route('landing.layanan-opsi-2')}}" class="more-link mt-2">
                            Selengkapnya <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
            
                    <!-- Item 3 -->
                    <div class="col-lg-6 col-md-6 col-sm-12 wow zoomIn" data-wow-delay="0.9s">
                        <div class="service-item bg-light rounded p-4 h-100 d-flex flex-column align-items-center text-center">
                            <div class="service-icon ">
                            <i class="fa fa-search-dollar text-white"></i>
                            </div>
                            <h4 class="mb-3 text-primary">Jasa Review Pajak & Laporan Keuangan</h4>
                            <p class="text-white flex-grow-1">
                            Review laporan keuangan & pajak sesuai regulasi, identifikasi risiko, dan rekomendasi perbaikan.
                            </p>
                            <a href="{{ route('landing.layanan-opsi-3')}}" class="more-link mt-2">
                            Selengkapnya <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
            
                    <!-- Item 4 -->
                    <div class="col-lg-6 col-md-6 col-sm-12 wow zoomIn" data-wow-delay="1.2s">
                        <div class="service-item bg-light rounded p-4 h-100 d-flex flex-column align-items-center text-center">
                            <div class="service-icon ">
                            <i class="fa fa-file-alt text-white"></i>
                            </div>
                            <h4 class="mb-3 text-primary">Jasa Pendampingan SP2DK</h4>
                            <p class="text-white flex-grow-1">
                            Pendampingan dalam merespons klarifikasi pajak dengan strategi tepat, dokumen rapi, dan analisis menyeluruh.
                            </p>
                            <a href="{{ route('landing.layanan-opsi-4')}}" class="more-link mt-2">
                            Selengkapnya <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Item 5 -->
                    <div class="col-lg-6 col-md-6 col-sm-12 wow zoomIn" data-wow-delay="0.3s">
                        <div class="service-item bg-light rounded p-4 h-100 d-flex flex-column align-items-center text-center">
                            <div class="service-icon ">
                                <i class="fa fa-user-shield text-white"></i>
                            </div>
                            <h4 class="mb-3 text-primary">Jasa Pendampingan Pemeriksaan Pajak</h4>
                            <p class="text-white flex-grow-1">
                                Pendampingan profesional untuk memastikan dokumen sesuai aturan, memberi solusi
                                strategis, dan menjaga kredibilitas perusahaan di hadapan otoritas pajak.
                            </p>
                            <a href="{{ route('landing.layanan-opsi-5')}}" class="more-link mt-2">
                                Selengkapnya <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
            
                    <!-- Item 6 -->
                    <div class="col-lg-6 col-md-6 col-sm-12 wow zoomIn" data-wow-delay="0.6s">
                        <div class="service-item bg-light rounded p-4 h-100 d-flex flex-column align-items-center text-center">
                            <div class="service-icon ">
                            <i class="fa fa-receipt text-white"></i>
                            </div>
                            <h4 class="mb-3 text-primary">Jasa Pengurusan Restitusi Pajak</h4>
                            <p class="text-white flex-grow-1">
                                Asistensi penuh dalam pengajuan hingga penyelesaian restitusi pajak dengan prosedur tepat dan komunikasi efektif,
                                sehingga hak klien lebih cepat diperoleh tanpa beban administrasi.
                            </p>
                            <a href="{{ route('landing.layanan-opsi-6')}}" class="more-link mt-2">
                            Selengkapnya <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
            
                    <!-- Item 7 -->
                    <div class="col-lg-6 col-md-6 col-sm-12 wow zoomIn" data-wow-delay="0.9s">
                        <div class="service-item bg-light rounded p-4 h-100 d-flex flex-column align-items-center text-center">
                            <div class="service-icon ">
                            <i class="fa fa-calendar-check text-white"></i>
                            </div>
                            <h4 class="mb-3 text-primary">Jasa Penyusunan dan Pelaporan SPT Tahunan</h4>
                            <p class="text-white flex-grow-1">
                                Bantuan penyusunan dan pelaporan SPT Tahunan sesuai regulasi untuk hindari sanksi serta dukung strategi pajak yang lebih baik.
                            </p>
                            <a href="{{ route('landing.layanan-opsi-7')}}" class="more-link mt-2">
                            Selengkapnya <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
            
                    <!-- Item 8 -->
                    <div class="col-lg-6 col-md-6 col-sm-12 wow zoomIn" data-wow-delay="1.2s">
                        <div class="service-item bg-light rounded p-4 h-100 d-flex flex-column align-items-center text-center">
                            <div class="service-icon ">
                            <i class="fa fa-gavel text-white"></i>
                            </div>
                            <h4 class="mb-3 text-primary">Jasa Pendampingan Upaya Hukum dibidang Perpajakan</h4>
                            <p class="text-white flex-grow-1">
                                Pendampingan profesional dalam sengketa pajak dengan strategi hukum tepat untuk melindungi dan memperkuat posisi klien.
                            </p>
                            <a href="{{ route('landing.layanan-opsi-8')}}" class="more-link mt-2">
                            Selengkapnya <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Item 9 -->
                    <div class="col-lg-6 col-md-6 col-sm-12 wow zoomIn" data-wow-delay="0.9s">
                        <div class="service-item bg-light rounded p-4 h-100 d-flex flex-column align-items-center text-center">
                            <div class="service-icon ">
                            <i class="fa fa-chalkboard-teacher text-white"></i>
                            </div>
                            <h4 class="mb-3 text-primary">Jasa Pelatihan Pajak dan Pembukuan</h4>
                            <p class="text-white flex-grow-1">
                                Pelatihan untuk meningkatkan pemahaman perpajakan & pembukuan, membentuk budaya kepatuhan, serta mengurangi risiko kesalahan administrasi.
                            </p>
                            <a href="{{ route('landing.layanan-opsi-9')}}" class="more-link mt-2">
                            Selengkapnya <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
            
                    <!-- Item 10 -->
                    <div class="col-lg-6 col-md-6 col-sm-12 wow zoomIn" data-wow-delay="1.2s">
                        <div class="service-item bg-light rounded p-4 h-100 d-flex flex-column align-items-center text-center">
                            <div class="service-icon ">
                            <i class="fa fa-money-check-alt text-white"></i>
                            </div>
                            <h4 class="mb-3 text-primary">Jasa Payroll Management</h4>
                            <p class="text-white flex-grow-1">
                                Pengelolaan sistem penggajian akurat & transparan dengan teknologi, memastikan hak karyawan terpenuhi dan kepatuhan pajak terjaga.
                            </p>
                            <a href="{{ route('landing.layanan-opsi-1')}}" class="more-link mt-2">
                            Selengkapnya <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          
        
        <!-- Service End -->

@endsection
