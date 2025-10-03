@extends('layouts.app')

@section('title', 'Layanan | Wajib Pajak')

@section('content')
            <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
                <div class="row py-5">
                    <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-4 text-white animated zoomIn">Jasa Payroll Management</h1>
                        <a href="{{ route('landing.index')}}" class="h5 text-white">Beranda</a>
                        <span class="text-light">|</span>
                        <a href="{{ route('landing.layanan')}}" class="h5 text-white">Layanan</a>
                        <span class="text-light">|</span>
                        <a href="{{ route('landing.layanan-opsi-10')}}" class="h5 text-white">Jasa Payroll Management</a>
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
                <div class="col-lg-7 7 wow fadeInRight" data-wow-delay="0.4s">
                    <h2 class="mb-3 text-primary fw-bold">Jasa Payroll Management</h2>
                    <p class="text-dark mb-0 wow fadeInUp" data-wow-delay="1s">
                        Payroll Management membantu perusahaan dalam mengelola sistem penggajian secara menyeluruh.
                        Layanan ini mencakup perhitungan gaji, tunjangan, potongan pajak (PPh 21), serta 
                        kewajiban karyawan lainnya secara akurat dan tepat waktu.
                        <br><br>
                        Dengan sistem berbasis teknologi, pengelolaan payroll menjadi lebih transparan dan
                        efisien. Perusahaan dapat memastikan seluruh karyawan menerima haknya dengan benar, 
                        sementara kewajiban perpajakan tetap terjaga kepatuhannya, sehingga mendukung stabilitas
                        dan profesionalisme perusahaan.
                        
                    </p>
                </div>
            </div>
        </div>
        <!-- detail layanan end -->

@endsection
