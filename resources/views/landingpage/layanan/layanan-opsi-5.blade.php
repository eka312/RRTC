@extends('layouts.app')

@section('title', 'Layanan | Wajib Pajak')

@section('content')
            <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">        
                <div class="row py-5">
                    <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-4 text-white animated zoomIn">Jasa Pendampingan Pemeriksaan Pajak</h1>
                        <a href="{{ route('landing.index')}}" class="h5 text-white">Beranda</a>
                        <span class="text-light">|</span>
                        <a href="{{ route('landing.layanan')}}" class="h5 text-white">Layanan</a>
                        <span class="text-light">|</span>
                        <a href="{{ route('landing.layanan-opsi-5')}}" class="h5 text-white">Jasa Pendampingan Pemeriksaan Pajak</a>
                    </div>
                </div>
            </div>


        <!-- detail layanan start -->
        <div class="container mt-5">
            <div class="row ">
                <!-- Image -->
                <div class="col-lg-5 mb-4 mb-lg-0 mb-lg-0 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="card shadow-sm border-0 rounded-3 overflow-hidden">
                    <img src="{{asset('template_rrtc/img/layanan-1.jpg')}}" class="img-fluid" alt="Jasa Pendampingan Pemeriksaan Pajak">
                    </div>
                </div>
                <!-- Content -->
                <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.4s">
                    <h2 class="mb-3 text-primary fw-bold">Jasa Pendampingan Pemeriksaan Pajak</h2>
                    <p class="text-dark mb-0 wow fadeInUp" data-wow-delay="1s">
                        Pendampingan ini dirancang untuk memberikan perlindungan 
                        serta dukungan strategis kepada klien selama proses 
                        berlangsung. Fokus utama layanan ini adalah memastikan 
                        setiap data, dokumen, dan penjelasan yang diberikan 
                        selaras dengan ketentuan serta mencerminkan kondisi 
                        usaha yang sebenarnya.

                        <br><br>

                        Melalui pendekatan yang profesional, konsultan bertindak 
                        sebagai mitra yang memberikan solusi objektif dan strategis. 
                        Hal ini membantu klien menjalani proses dengan lebih lancar 
                        sekaligus menjaga kredibilitasperusahaan di mata otoritas 
                        pajak.
                        
                    </p>
                </div>
            </div>
        </div>


        <!-- detail layanan end -->

@endsection
