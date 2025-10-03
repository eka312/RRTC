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
                        <a href="{{ route('landing.layanan-opsi-2')}}" class="h5 text-white">Jasa Penyusunan Laporan Keuangan</a>
                    </div>
                </div>
            </div>

        <!-- detail layanan start -->
        <div class="container mt-5">
            <div class="row ">
                <!-- Image -->
                <div class="col-lg-5 mb-4 mb-lg-0 wow fadeInLeft" data-wow-delay="0.2s" >
                    <div class="card shadow-sm border-0 rounded-3 overflow-hidden">
                    <img src="{{asset('template_rrtc/img/layanan-2.jpg')}}" class="img-fluid" alt="Jasa Konsultasi Hukum dan Perpajakan">
                    </div>
                </div>
                <!-- Content -->
                <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.4s">
                    <h2 class="mb-3 text-primary fw-bold">Jasa Konsultasi Hukum dan Perpajakan</h2>
                    <p class="text-dark mb-0 wow fadeInUp" data-wow-delay="1s">
                        Layanan ini memberikan solusi menyeluruh terkait permasalahan 
                        hukum bisnis dan perpajakan. Konsultasi dilakukan untuk 
                        membantu klien. memahami kewajiban pajak sekaligus aspek 
                        legal yang terkait dengan operasional perusahaan. Dengan 
                        pendekatan berbasis regulasi terkini, klien dapat mengambil 
                        langkah yang tepat untuk menjaga kepatuhan sekaligus 
                        meminimalkan potensi risiko hukum.

                        <br>
                        <br>

                        Lebih dari sekadar konsultasi, layanan ini juga berperan 
                        sebagai mitra strategis dalam merencanakan kebijakan 
                        perpajakan dan struktur bisnis. Dengan pemahaman mendalam 
                        terhadap hukum dan pajak, klien dapat menjalankan usaha secara lebih aman, 
                        efisien, serta memiliki landasan hukum yang kuat untuk pertumbuhan jangka panjang.
                        
                    </p>
                </div>
            </div>
        </div>


        <!-- detail layanan end -->

@endsection
