@extends('layouts.app')

@section('title', 'Layanan | Wajib Pajak')

@section('content')

            <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
                <div class="row py-5">
                    <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-4 text-white animated zoomIn">Jasa Pelatihan Pajak dan Pembukuan</h1>
                        <a href="{{ route('landing.index')}}" class="h5 text-white">Beranda</a>
                        <span class="text-light">|</span>
                        <a href="{{ route('landing.layanan')}}" class="h5 text-white">Layanan</a>
                        <span class="text-light">|</span>
                        <a href="{{ route('landing.layanan-opsi-9')}}" class="h5 text-white">Jasa Pelatihan Pajak dan Pembukuan</a>
                    </div>
                </div>
            </div>


        <!-- detail layanan start -->
        <div class="container mt-5">
            <div class="row ">
                <!-- Image -->
                <div class="col-lg-5 mb-4 mb-lg-0 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="card shadow-sm border-0 rounded-3 overflow-hidden">
                    <img src="{{asset('template_rrtc/img/layanan-1.jpg')}}" class="img-fluid" alt="Jasa Pelatihan Pajak dan Pembukuan">
                    </div>
                </div>
                <!-- Content -->
                <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.4s">
                    <h2 class="mb-3 text-primary fw-bold">Jasa Pelatihan Pajak dan Pembukuan</h2>
                    <p class="text-dark mb-0 wow fadeInUp" data-wow-delay="1s">
                        Layanan ini dirancang untuk meningkatkan pemahaman dan keterampilan perusahaan maupun 
                        individu dalam hal perpajakan dan pembukuan. Pelatihan mencakup pemahaman regulasi 
                        perpajakan terbaru, teknik penyusunan laporan keuangan, hingga praktik penggunaan 
                        aplikasi pajak.

                        <br><br>

                        Selain memberikan pengetahuan, pelatihan juga bertujuan membentuk budaya kepatuhan 
                        dan kemandirian. Dengan SDM yang terampil di bidang pajak dan pembukuan, perusahaan 
                        dapat mengelola keuangannya lebih efektif sekaligus meminimalkan risiko kesalahan administrasi.
                        
                    </p>
                </div>
            </div>
        </div>


        <!-- detail layanan end -->
@endsection
