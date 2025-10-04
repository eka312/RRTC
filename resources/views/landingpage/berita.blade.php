@extends('layouts.app')

@section('title', 'Berita | Wajib Pajak')

@section('content')
            <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
                <div class="row py-5">
                    <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-4 text-white animated zoomIn">Berita</h1>
                        <a href="{{ route('landing.index')}}" class="h5 text-white">Beranda</a>
                        <span class="text-light">|</span>
                        <a href="{{ route('landing.berita')}}" class="h5 text-white">Berita</a>
                    </div>
                </div>
            </div>


        <!-- Blog Start -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" >
            <div class="container py-5">
                <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                    <h1 class="fw-bold text-primary text-uppercase">Berita Terkini</h1>
                    <p class="mb-0">Baca selengkapnya Berita berikut yang kami sajikan sebagai sarana pelajari wawasan / informasi RRTC dan perpajakan secara mendalam.</p>
                </div>
                <!-- Desktop Version -->
                <div class="row g-5 d-none d-md-flex" >
                    @forelse($articles as $artikel)
                        <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                            <div class="blog-item bg-light rounded overflow-hidden d-flex flex-column">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="{{ asset('storage/' . $artikel->gambar) }}" alt="">
                                    <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-3 py-2 px-3" href="#">
                                        {{ $artikel->kategori ?? 'RRTC' }}
                                    </a>
                                </div>
                                <div class="p-4 flex-grow-1 d-flex flex-column">
                                    <div class="d-flex mb-3">
                                        <small class="me-3"><i class="far fa-user text-primary me-2"></i>{{ $artikel->penulis ?? 'Admin' }}</small>
                                        <small><i class="far fa-calendar-alt text-primary me-2"></i>{{ \Carbon\Carbon::parse($artikel->tanggal_terbit)->format('d M, Y') }}</small>
                                    </div>
                                    <h4 class="mb-3 text-primary">{{ $artikel->judul }}</h4>
                                    <p class="text-white flex-grow-1">{{ Str::limit($artikel->isi, 240) }}</p>
                                    <a class="text-uppercase mt-auto" href="{{ route('landing.berita-detail', $artikel->slug) }}">
                                        Selengkapnya <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p class="text-muted">Belum ada artikel</p>
                    @endforelse
                </div>
                <!-- Mobile Version -->
                <div id="carouselExampleControls" class="carousel slide d-md-none" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach($articles as $index => $artikel)
                            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                <div class="blog-item bg-light rounded overflow-hidden d-flex flex-column">
                                    <div class="blog-img position-relative overflow-hidden">
                                        <img class="img-fluid" src="{{ asset('storage/' . $artikel->gambar) }}" alt="{{ $artikel->judul }}">
                                        <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-3 py-2 px-3" href="#">
                                            {{ $artikel->kategori ?? 'RRTC' }}
                                        </a>
                                    </div>
                                    <div class="p-3 flex-grow-1 d-flex flex-column">
                                        <div class="d-flex mb-2">
                                            <small class="me-2"><i class="far fa-user text-primary me-1"></i>{{ $artikel->penulis ?? 'Admin' }}</small>
                                            <small><i class="far fa-calendar-alt text-primary me-1"></i>{{ \Carbon\Carbon::parse($artikel->tanggal_terbit)->format('d M, Y') }}</small>
                                        </div>
                                        <h4 class="mb-2 text-primary">{{ $artikel->judul }}</h4>
                                        <p class="flex-grow-1">{{ Str::limit($artikel->isi, 150) }}</p>
                                        <a class="text-uppercase mt-auto" href="{{ route('landing.berita-detail', $artikel->slug) }}">
                                            Selengkapnya <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <!-- Blog End -->

@endsection
