@extends('layouts.app')

@section('title', 'Partner | Wajib Pajak')

@section('content')
<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Reza Ronny Hermawan, S.Pn., M.Ak., BKР</h1>
            <a href="{{ route('landing.index')}}" class="h5 text-white">Beranda</a>
            <span class="text-light">|</span>
            <a href="{{ route('landing.partner')}}" class="h5 text-white">Partner</a>
            <span class="text-light">|</span>
            <a href="{{ route('landing.partner-opsi-1')}}" class="h5 text-white">Reza Ronny Hermawan, S.Pn., M.Ak., BKР</a>
        </div>
        
    </div>
</div>


        <!-- detail partner start -->
        <div class="profile-section py-5">
            <div class="container">
                <div class="row ">
                    <!-- Image -->
                    <div class="col-lg-5 mb-4 mb-lg-0">
                        <div class="card shadow-sm border-0 rounded-3 overflow-hidden wow fadeInUp" data-wow-delay="0.1s">
                            <img src="{{asset('template_rrtc/img/reza-ronny-hermawan.jpeg')}}" alt="profil" class="profile-img">
                        </div>
                    </div>
                    <!-- Content -->
                    <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.4s">
                        <h2 class="fs-2 fw-bold text-primary mb-1">Reza Ronny Hermawan, S.Pn., M.Ak., BKР</h2>
                        <h5 class="text-muted fst-italic mb-5">Managing Partner</h5>
                        <h6 class="fw-bold mt-4 text-primary">Latar Belakang Pendidikan</h6>
                        <p class="text-dark" style="line-height:1.8; text-align:justify;">
                            <b>Reza Ronny Hermawan, S.Pn, M.Ak, BKP adalah</b> seorang profesional
                            muda yang memiliki energi tinggi dan rasa ingin tahu besar dalam
                            mengembangkan inovasi serta membangun koneksi yang bermanfaat. la
                            menempuh pendidikan di bidang Perpajakan, Akuntansi, serta Hukum
                            hingga tingkat Magister, dan saat ini melanjutkan program Doktoral di
                            bidang Akuntansi. Dengan latar belakang akademik yang kuat, Reza
                            membekali dirinya dengan kemampuan problem solving, komunikasi
                            efektif, analisis strategis, serta kepemimpinan yang terbukti melalui berbagai
                            pengalaman memimpin organisasi dan proyek.

                        </p>

                        <h6 class="fw-bold mt-4 text-primary">Karier & Pengalaman</h6>
                        <p class="text-dark" style="line-height:1.8; text-align:justify;">
                            Dalam perjalanan kariernya, Reza telah mengemban peran penting
                            sebagai Direktur di beberapa perusahaan serta sebagai Konsultan Pajak
                            Bersertifikat. la berpengalaman dalam mengelola bisnis, menyusun strategi
                            perusahaan, serta memberikan solusi hukum dan perpajakan bagi klien.
                            
                        </p>

                        <h6 class="fw-bold mt-4 text-primary">Kontribusi & Visi</h6>
                        <p class="text-dark" style="line-height:1.8; text-align:justify;">
                            Selain itu, ia aktif mengembangkan proyek dibidang teknologi dan jaringan internet, termasuk 
                            pembangunan server internasional dan regional, serta aplikasi untuk menyederhanakan proses bisnis. Dengan 
                            visi inovatif, Reza hadir sebagai sosok yang berdedikasi untuk mendorong pertumbuhan bisnis, menghadirkan 
                            solusi strategis, dan berkontribusi pada perkembangan masyarakat.
                        </p>
                        <ul class="list-inline mt-3">
                            <li class="list-inline-item me-4">
                            <i class="bi bi-check-square-fill text-primary"></i> Direktur Perusahaan
                            </li>
                            <li class="list-inline-item me-4">
                            <i class="bi bi-check-square-fill text-primary"></i> Konsultan Pajak Bersertifikat
                            </li>
                            <li class="list-inline-item me-4">
                            <i class="bi bi-check-square-fill text-primary"></i> Inovator Teknologi
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- detail partner end -->

@endsection
