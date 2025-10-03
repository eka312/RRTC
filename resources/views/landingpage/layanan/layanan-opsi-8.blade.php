@extends('layouts.app')

@section('title', 'Layanan | Wajib Pajak')

@section('content')
            <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
                <div class="row py-5">
                    <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-4 text-white animated zoomIn">Jasa Pendampingan Upaya Hukum dibidang Perpajakan</h1>
                        <a href="{{ route('landing.index')}}" class="h5 text-white">Beranda</a>
                        <span class="text-light">|</span>
                        <a href="{{ route('landing.layanan')}}" class="h5 text-white">Layanan</a>
                        <span class="text-light">|</span>
                        <a href="{{ route('landing.layanan-opsi-8')}}" class="h5 text-white">Jasa Pendampingan Upaya Hukum dibidang Perpajakan</a>
                    </div>
                </div>
            </div>



        <!-- detail layanan start -->
        <div class="container mt-5">
            <div class="row ">
                <!-- Image -->
                <div class="col-lg-5 mb-4 mb-lg-0 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="card shadow-sm border-0 rounded-3 overflow-hidden">
                    <img src="{{asset('template_rrtc/img/layanan-1.jpg')}}" class="img-fluid" alt="Jasa Pendampingan Upaya Hukum dibidang Perpajakan">
                    </div>
                </div>
                <!-- Content -->
                <div class="col-lg-7  wow fadeInRight" data-wow-delay="0.4s">
                    <h2 class="mb-3 text-primary fw-bold">Jasa Pendampingan Upaya Hukum dibidang Perpajakan</h2>
                    <p class="text-dark mb-0" >
                        Layanan ini mendukung klien dalam menghadapi sengketa atau perbedaan pandangan dengan 
                        otoritas pajak melalui strategi hukum yang tepat. Setiap langkah disusun secara 
                        profesional dengan memperhatikan aspek regulasi dan kepentingan terbaik klien.
                        Dengan pendampingan yang berpengalaman, klien mendapatkan representasi yang andal dan
                        solusi hukum yang efektif. Hal ini tidak hanya membantu menyelesaikan permasalahan
                        yang ada, tetapi juga memperkuat posisi hukum klien untuk menghadapi tantangan di 
                        masa mendatang.
                        
                    </p>
                </div>
            </div>
        </div>


        <!-- detail layanan end -->

@endsection
