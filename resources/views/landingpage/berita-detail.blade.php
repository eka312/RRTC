@extends('layouts.app')

@section('title', 'Berita | Wajib Pajak')

@section('content')

    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">{{ $article->judul }}</h1>
                <a href="{{ route('landing.index')}}" class="h5 text-white">Beranda</a>
                <span class="text-light">|</span>
                <a href="{{ route('landing.berita')}}" class="h5 text-white">Berita</a>
                <span class="text-light">|</span>
                <a href="{{ route('landing.berita-detail', $article->slug) }}" class="h5 text-white">{{ $article->judul }}</a>
            </div>
        </div>
    </div>

    
        <div class="container mt-5">
            <div class="">
                <!-- Image -->
                <div class="mb-4 mb-lg-0 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="card d-flex ilign-item-center  shadow-sm border-0 rounded-3 overflow-hidden "  style=" max-width:800px ; max-height: 500px;">
                        <img src="{{ asset('storage/' . $article->gambar) }}" class="img-fluid "    alt="{{ $article->judul }}">
                    </div>
                </div>
                <!-- Content -->
                <div class=" mt-3 wow fadeInRight" data-wow-delay="0.4s">
                    <h2 class="mb-3 text-primary fw-bold">{{ $article->judul }}</h2>
                    <div class="d-flex mb-3">
                        <small class="me-3"><i class="far fa-user text-primary me-2"></i>{{ $article->penulis ?? 'Admin' }}</small>
                        <small><i class="far fa-calendar-alt text-primary me-2"></i>{{ \Carbon\Carbon::parse($article->tanggal_terbit)->format('d M, Y') }}</small>
                    </div>
                    <p class="text-dark mb-0 wow fadeInUp" data-wow-delay="1s">
                        {!! nl2br(e($article->isi)) !!}
                    </p>
                </div>
            </div>
        </div>

@endsection