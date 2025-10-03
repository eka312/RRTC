@extends('layouts.app')

@section('title', 'Kontak | Wajib Pajak')

@section('content')
        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Kontak Kami</h1>
                    <a href="{{ route('landing.index')}}" class="h5 text-white">Beranda</a>
                    <span class="text-light">|</span>
                    <a href="{{ route('landing.contact')}}" class="h5 text-white">Kontak</a>
                </div>
            </div>
        </div>



    <!-- Contact Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Kontak Kami</h5>
                <h1 class="mb-0">Jika Anda Memiliki Pertanyaan, Jangan Ragu untuk Menghubungi Kami</h1>
            </div>
            <div class="row g-5 mb-5">
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Hubungi untuk bertanya</h5>
                            <h4 class="text-primary mb-0">+0821 4242 2828</h4>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Email untuk mendapatkan penawaran gratis</h5>
                            <h4 class="text-primary mb-0">admin@rrtc.com</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Kunjungi kantor kami</h5>
                            <h4 class="text-primary mb-0">Jl. S. Supriadi No.136, Gedog, Kec. Sananwetan, Kota Blitar</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control border-0 bg-light px-4" placeholder="Nama Anda" style="height: 55px;">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control border-0 bg-light px-4" placeholder="Email Anda" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control border-0 bg-light px-4" placeholder="Subjek" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control border-0 bg-light px-4 py-3" rows="4" placeholder="Pesan"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-contact w-100 py-3" type="submit">Kirim Pesan</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                    <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d246.8833102226798!2d112.18960731014707!3d-8.087920141676536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78ec5fee8894fd%3A0x120569433d5e6e1f!2sJl.%20S.%20Supriadi%20No.138%2C%20Gedog%2C%20Kec.%20Sananwetan%2C%20Kota%20Blitar%2C%20Jawa%20Timur%2066137!5e0!3m2!1sid!2sid!4v1758591466984!5m2!1sid!2sid" 
                        frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Contact End -->

@endsection
