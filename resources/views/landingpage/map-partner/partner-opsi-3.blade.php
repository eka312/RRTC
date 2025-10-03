@extends('layouts.app')

@section('title', 'Partner | Wajib Pajak')

@section('content')
<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Adv. M. Kenza Radhya E.A, S.H., M.HLi.
            </h1>
            <a href="{{ route('landing.index')}}" class="h5 text-white">Beranda</a>
            <span class="text-light">|</span>
            <a href="{{ route('landing.partner')}}" class="h5 text-white">Partner</a>
            <span class="text-light">|</span>
            <a href="{{ route('landing.partner-opsi-3')}}" class="h5 text-white">Adv. M. Kenza Radhya E.A, S.H., M.HLi.
            </a>
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
                        <img src="{{asset('template_rrtc/img/kenza-radhya.jpeg')}}" alt="profil" class="profile-img">
                        </div>
                    </div>
                    <!-- Content -->
                    <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.4s">
                        <h2 class="fs-2 fw-bold text-primary mb-1">Adv. M. Kenza Radhya E.A, S.H., M.HLi.</h2>
                        <h5 class="text-muted fst-italic mb-5">Partner</h5>
                        <h6 class="fw-bold mt-4 text-primary">Latar Belakang Pendidikan</h6>
                        <p class="text-dark" style="line-height:1.8; text-align:justify;">
                            <b>Adv. M. Kenza Radhya E.A, S.H., M.HLi. adalah</b> seorang profesional
                            hukum dengan latar belakang akademik yang kuat serta pengalaman luas di
                            bidang litigasi dan penelitian hukum. la menyelesaikan pendidikan Sarjana
                            Hukum di UPN "Veteran" Jawa Timur dan melanjutkan Magister Hukum
                            Litigasi di Universitas Gadjah Mada. Sepanjang perjalanan akademiknya, ia
                            aktif menjadi pemakalah di berbagai konferensi nasional maupun
                            internasional serta menulis publikasi di jurnal bereputasi, termasuk jurnal
                            terindeks Scopus Q2 dan Sinta. 
                        </p>

                        <h6 class="fw-bold mt-4 text-primary">Karier & Pengalaman</h6>
                        <p class="text-dark" style="line-height:1.8; text-align:justify;">
                            Dalam perjalanan kariernya, Kenza telah berpengalaman menangani
                            beragam perkara litigasi dan non-litigasi, mulai dari sengketa perdata,
                            perceraian, hingga kasus pidana. la juga terlibat dalam advokasi, penyusunan
                            legal opinion, dan konseling hukum yang menyasar kebutuhan masyarakat
                            luas. 
                        </p>

                        <h6 class="fw-bold mt-4 text-primary">Kontribusi & Visi</h6>
                        <p class="text-dark" style="line-height:1.8; text-align:justify;">
                            Kiprahnya dalam bidang riset juga tercermin
                            melalui kajian-kajian hukum yang berfokus pada isu pidana, perdata, hak
                            perempuan, hingga kebijakan publik. Dengan dukungan berbagai sertifikasi di bidang contract drafting,
                            kepemimpinan, serta keanggotaan organisasi profesi hukum, Kenza hadir
                            sebagai sosok profesional hukum muda yang berdedikasi, berintegritas, dan
                            siap memberikan solusi hukum yang komprehensif bagi klien.
                            
                        </p>

                        <ul class="list-inline mt-3">
                            <li class="list-inline-item me-4">
                                <i class="bi bi-check-square-fill text-primary"></i> Magister Hukum Litigasi (UGM)
                            </li>
                            <li class="list-inline-item me-4">
                                <i class="bi bi-check-square-fill text-primary"></i> Peneliti & Penulis Jurnal Bereputasi
                            </li>
                            <li class="list-inline-item me-4">
                                <i class="bi bi-check-square-fill text-primary"></i> Praktisi Litigasi & Non-Litigasi
                            </li>
                            <li class="list-inline-item me-4">
                                <i class="bi bi-check-square-fill text-primary"></i> Sertifikasi Contract Drafting & Kepemimpinan
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- detail partner end -->

@endsection
