@extends('layouts.app')

@section('title', 'Layanan | Wajib Pajak')

@section('content')
            <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
                <div class="row py-5">
                    <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-4 text-white animated zoomIn">Jasa Pengurusan Restitusi Pajak</h1>
                        <a href="{{ route('landing.index')}}" class="h5 text-white">Beranda</a>
                        <span class="text-light">|</span>
                        <a href="{{ route('landing.layanan')}}" class="h5 text-white">Layanan</a>
                        <span class="text-light">|</span>
                        <a href="{{ route('landing.layanan-opsi-6')}}" class="h5 text-white">Jasa Pengurusan Restitusi Pajak</a>
                    </div>
                </div>
            </div>


         <!-- detail layanan start -->
        <div class="container mt-5">
            <div class="row ">
                <!-- Image -->
                <div class="col-lg-5 mb-4 mb-lg-0 mb-lg-0 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="card shadow-sm border-0 rounded-3 overflow-hidden">
                    <img src="{{asset('template_rrtc/img/layanan-1.jpg')}}" class="img-fluid" alt="Jasa Penyusunan Laporan Keuangan">
                    </div>
                </div>
                <!-- Content -->
                <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.4s7">
                    <h2 class="mb-3 text-primary fw-bold">Jasa Pengurusan Restitusi Pajak</h2>
                    <p class="text-dark mb-0 mb-0 wow fadeInUp" data-wow-delay="1s">
                        Layanan ini memberikan asistensi penuh kepada klien dalam 
                        proses pengajuan hingga penyelesaian pengembalian pajak. 
                        Dengan penanganan yang cermat dan profesional, setiap detail 
                        dipastikan sesuai prosedur sehingga memperkuat posisi klien 
                        dalam memperoleh haknya.
                        <br><br>

                        Pendekatan yang sistematis serta komunikasi efektif dengan 
                        otoritas pajak membantu mempercepat penyelesaian proses.
                        Dengan demikian, klien dapat lebih fokus pada pengembangan 
                        bisnisnya tanpa terbebani oleh urusan administrasi yang 
                        kompleks.
                        
                    </p>
                </div>
            </div>
        </div>


        <!-- detail layanan end -->
@endsection
