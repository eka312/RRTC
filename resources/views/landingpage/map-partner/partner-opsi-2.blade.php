@extends('layouts.app')

@section('title', 'Partner | Wajib Pajak')

@section('content')
<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Wahyu Rizky Nugroho, S. Pn., S. H., BKP</h1>
            <a href="{{ route('landing.index')}}" class="h5 text-white">Beranda</a>
            <span class="text-light">|</span>
            <a href="{{ route('landing.partner')}}" class="h5 text-white">Partner</a>
            <span class="text-light">|</span>
            <a href="{{ route('landing.partner-opsi-2')}}" class="h5 text-white">Wahyu Rizky Nugroho, S. Pn., S. H., BKP</a>
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
                        <img src="{{asset('template_rrtc/img/wahyu-rizky-nugroho.jpeg')}}" alt="profil" class="profile-img">
                        </div>
                    </div>
                    <!-- Content -->
                    <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.4s">
                        <h2 class="fs-2 fw-bold text-primary mb-1">Wahyu Rizky Nugroho, S.Pn., S.H., ВКР</h2>
                        <h5 class="text-muted fst-italic mb-5">Managing Partner</h5>
                        
                        <h6 class="fw-bold mt-4 text-primary">Latar Belakang Pendidikan</h6>
                        <p class="text-dark" style="line-height:1.8; text-align:justify;">
                            <b>Wahyu Rizky Nugroho, S. Pn., S. H., BKP adalah</b> seorang profesional
                            di bidang perpajakan dan akuntansi dengan latar belakang akademik yang
                            kuat serta pengalaman yang luas. Kompetensinya semakin diperkuat dengan pendidikan lanjutan di bidang
                            hukum dan akuntansi, menjadikannya sosok yang adaptif dalam
                            menghadapi perkembangan regulasi dan kebutuhan dunia usaha.
                        </p>
                    
                        <h6 class="fw-bold mt-4 text-primary">Karier & Pengalaman</h6>
                        <p class="text-dark" style="line-height:1.8; text-align:justify;">
                            Dengan berbagai sertifikasi profesional seperti Konsultan Pajak Tingkat
                            A, Brevet A & B, serta keahlian kepabeanan, Wahyu memiliki kualifikasi yang
                            mumpuni untuk memberikan solusi strategis bagi klien dan organisasi.la
                            juga terampil mengoperasikan berbagai aplikasi perpajakan dan akuntansi
                            modern, serta didukung kemampuan komunikasi, kepemimpinan, dan
                            manajemen tim. Perpaduan antara keahlian teknis, integritas, dan dedikasi
                            menjadikannya profesional yang dapat diandalkan dalam menghadirkan
                            layanan yang berkualitas dan bernilai tambah di bidang perpajakan dan
                            akuntansi.
                        </p>
                    
                        <h6 class="fw-bold mt-4 text-primary">Kontribusi & Visi</h6>
                        <p class="text-dark" style="line-height:1.8; text-align:justify;">
                            la memiliki keahlian teknis maupun
                            analitis dalam pengelolaan pajak dan akuntansi, serta telah aktif
                            berkontribusi melalui penelitian dan publikasi yang berfokus pada inovasi
                            kelembagaan, perencanaan bisnis, hingga isu-isu perpajakan.
                        </p>
                    
                        <ul class="list-inline mt-3">
                            <li class="list-inline-item me-4">
                                <i class="bi bi-check-square-fill text-primary"></i> Konsultan Pajak Tingkat A
                            </li>
                            <li class="list-inline-item me-4">
                                <i class="bi bi-check-square-fill text-primary"></i> Brevet A & B
                            </li>
                            <li class="list-inline-item me-4">
                                <i class="bi bi-check-square-fill text-primary"></i> Ahli Kepabeanan
                            </li>
                            <li class="list-inline-item me-4">
                                <i class="bi bi-check-square-fill text-primary"></i> Peneliti & Publikasi di Bidang Pajak & Akuntansi
                            </li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- detail partner end -->

@endsection
