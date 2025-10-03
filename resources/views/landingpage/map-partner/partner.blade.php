@extends('layouts.app')

@section('title', 'Partner | Wajib Pajak')

@section('content')

<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Partner</h1>
            <a href="{{ route('landing.index')}}" class="h5 text-white">Beranda</a>
            <span class="text-light">|</span>
            <a href="{{ route('landing.partner')}}" class="h5 text-white">Partner</a>
        </div>
    </div>
</div>


        <!-- Partner start  -->
        <div class="container-fluid py-2 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container ">
                <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 720px;">
                    <h1 class="fw-bold text-primary text-uppercase">Partner</h1>
                    <p class="mb-0">
                        RRTC dipimpin oleh partner berpengalaman bersertifikat Brevet A & B yang 
                        memenuhi standar kompetensi perpajakan. Dengan profesionalisme dan keahlian 
                        mendalam, para partner kami berkomitmen menghadirkan solusi pajak yang strategis, 
                        terpercaya, dan sesuai kebutuhan klien.
                    </p>
                </div>
                <div class="row g-5">
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                        <div class="team-item bg-light rounded overflow-hidden">
                            <div class="team-img position-relative overflow-hidden">
                                <img  class="img-fluid w-100" src="{{asset('template_rrtc/img/reza-ronny-hermawan.jpeg')}}" alt="" >
                                
                                <div class="team-social">
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href="">
                                        <i class="fab fa-twitter fw-normal"></i>
                                    </a>
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href="">
                                        <i class="fab fa-facebook-f fw-normal"></i>
                                    </a>
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href="">
                                        <i class="fab fa-instagram fw-normal"></i>
                                    </a>
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href="">
                                        <i class="fab fa-linkedin-in fw-normal"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="text-center py-4" >
                                <h4 class="text-primary">Reza Ronny Hermawan,<br> S.Pn., M.Ak., BKР</h4>
                                <p class="text-uppercase m-0 text-white">Managing Partner</p>
                                <a href="{{ route('landing.partner-opsi-1')}}" class="btn btn-primary text-primary m-0" >Lihat Profil</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                        <div class="team-item bg-light rounded overflow-hidden">
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="{{asset('template_rrtc/img/wahyu-rizky-nugroho.jpeg')}}" alt="" >
                                <div class="team-social">
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href="">
                                        <i class="fab fa-twitter fw-normal"></i>
                                    </a>
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href="">
                                        <i class="fab fa-facebook-f fw-normal"></i>
                                    </a>
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href="">
                                        <i class="fab fa-instagram fw-normal"></i>
                                    </a>
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href="">
                                        <i class="fab fa-linkedin-in fw-normal"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <h4 class="text-primary">Wahyu Rizky Nugroho,<br> S.Pn., S.H., ВКР</h4>
                                <p class="text-uppercase m-0 text-white">Managing Partner</p>
                                <a href="{{ route('landing.partner-opsi-2')}}" class="btn btn-primary text-primary m-0">Lihat Profil</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                        <div class="team-item bg-light rounded overflow-hidden">
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="{{asset('template_rrtc/img/kenza-radhya.jpeg')}}" alt="">
                                <div class="team-social">
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                            class="fab fa-twitter fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                            class="fab fa-facebook-f fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                            class="fab fa-instagram fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                            class="fab fa-linkedin-in fw-normal"></i></a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <h4 class="text-primary">Adv. M. Kenza Radhya<br> E.A, S.H., M.HLi.</h4>
                                <p class="text-uppercase m-0 text-white">Partner</p>
                                <a href="{{ route('landing.partner-opsi-3')}}" class="btn btn-primary text-primary m-0">Lihat Profil</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Partner End -->

@endsection
