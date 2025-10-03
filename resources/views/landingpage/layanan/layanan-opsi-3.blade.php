@extends('layouts.app')

@section('title', 'Layanan | Wajib Pajak')

@section('content')
            <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
                <div class="row py-5">
                    <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-4 text-white animated zoomIn">Jasa Review Pajak dan Laporan Keuangan</h1>
                        <a href="{{ route('landing.index')}}" class="h5 text-white">Beranda</a>
                        <span class="text-light">|</span>
                        <a href="{{ route('landing.layanan')}}" class="h5 text-white">Layanan</a>
                        <span class="text-light">|</span>
                        <a href="{{ route('landing.layanan-opsi-3')}}" class="h5 text-white">Jasa Review Pajak dan Laporan Keuangan</a>
                    </div>
                </div>
            </div>


         <!-- detail layanan start -->
        <div class="container mt-5">
            <div class="row ">
                <!-- Image -->
                <div class="col-lg-5 mb-4 mb-lg-0 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="card shadow-sm border-0 rounded-3 overflow-hidden">
                    <img src="{{asset('template_rrtc/img/layanan-3.jpg')}}" class="img-fluid" alt="Jasa Review Pajak dan Laporan Keuangan">
                    </div>
                </div>
                <!-- Content -->
                <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.4s" ">
                    <h2 class="mb-3 text-primary fw-bold">Jasa Review Pajak dan Laporan Keuangan</h2>
                    <p class="text-dark mb-0 wow fadeInUp" data-wow-delay="1s">
                        Jasa ini ditujukan untuk memastikan bahwa laporan keuangan 
                        dan kewajiban pajak perusahaan disusun dengan benar sesuai 
                        regulasi. Proses review dilakukan untuk mengidentifikasi potensi kesalahan, 
                        kekurangan, atau risiko yang dapat menimbulkan masalah di kemudian hari.
                        Dengan audit internal ini, perusahaan dapat lebih percaya diri terhadap 
                        keakuratan laporan keuangan dan kepatuhan pajaknya.

                        <br><br>

                        Selain itu, review pajak membantu perusahaan menilai kembali strategi perencanaan p
                        ajak yang telah diterapkan. Dengan analisis yang mendalam, konsultan dapat
                        memberikan rekomendasi perbaikan untuk meningkatkan efisiensi perpajakan 
                        sekaligus mengurangi potensi sengketa pajak dengan otoritas terkait.
                        
                    </p>
                </div>
            </div>
        </div>
        <!-- detail layanan end -->

@endsection
