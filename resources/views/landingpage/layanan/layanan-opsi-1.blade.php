@extends('layouts.app')

@section('title', 'Layanan | Wajib Pajak')

@section('content')
            <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
                <div class="row py-5">
                    <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-4 text-white animated zoomIn">Jasa Penyusunan Laporan Keuangan</h1>
                        <a href="{{ route('landing.index')}}" class="h5 text-white">Beranda</a>
                        <span class="text-light">|</span>
                        <a href="{{ route('landing.layanan')}}" class="h5 text-white">Layanan</a>
                        <span class="text-light">|</span>
                        <a href="{{ route('landing.layanan-opsi-1')}}" class="h5 text-white">Jasa Penyusunan Laporan Keuangan</a>
                    </div>
                </div>
            </div>

        <!-- detail layanan start -->
        <div class="container mt-5">
            <div class="row ">
                <!-- Image -->
                <div class="col-lg-5 mb-4 mb-lg-0 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="card shadow-sm border-0 rounded-3 overflow-hidden">
                    <img src="{{asset('template_rrtc/img/layanan-1.jpg')}}" class="img-fluid" alt="Jasa Penyusunan Laporan Keuangan">
                    </div>
                </div>
                <!-- Content -->
                <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.4s">
                    <h2 class="mb-3 text-primary fw-bold">Jasa Penyusunan Laporan Keuangan</h2>
                    <p class="text-dark mb-0 wow fadeInUp" data-wow-delay="1s">
                        Jasa ini membantu perusahaan dalam menyusun laporan keuangan yang sesuai dengan standar akuntansi keuangan yang berlaku. 
                        Laporan keuangan yang rapi, transparan, dan akurat menjadi dasar penting bagi manajemen dalam mengambil keputusan bisnis 
                        yang strategis. Penyusunan dilakukan dengan mempertimbangkan aspek akuntansi dan perpajakan, sehingga tidak hanya bermanfaat 
                        secara internal tetapi juga sesuai dengan regulasi pemerintah.
                        <br>
                        <br>
                        Selain itu, laporan keuangan yang disusun secara profesional dapat meningkatkan kredibilitas perusahaan di hadapan investor, 
                        itra bisnis, maupun lembaga keuangan. Dengan layanan ini, perusahaan dapat memastikan bahwa seluruh transaksi bisnis tercatat 
                        dengan baik, sehingga terhindar dari risiko kesalahan yang dapat berdampak pada kepatuhan dan keberlanjutan usaha.

                    </p>
                </div>
            </div>
        </div>
        <!-- detail layanan end -->

@endsection
