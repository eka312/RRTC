@extends('layouts.app')

@section('title', 'Berita | Wajib Pajak')

@section('content')

    @forelse($articles as $artikel)
    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">Berita</h1>
                <a href="{{ route('landing.index')}}" class="h5 text-white">Beranda</a>
                <span class="text-light">|</span>
                <a href="{{ route('landing.berita')}}" class="h5 text-white">Berita</a>
                <span class="text-light">|</span>
                <a href="{{ route('landing.berita-detail', $artikel->slug) }}" class="h5 text-white">{{ $artikel->slug }}</a>
            </div>
        </div>
    </div>

    
        <div class="container mt-5">
            <div class="row ">
                <!-- Image -->
                <div class="col-lg-5 mb-4 mb-lg-0 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="card shadow-sm border-0 rounded-3 overflow-hidden">
                        <img src="{{ asset('storage/' . $artikel->gambar) }}" class="img-fluid" alt="{{ $artikel->judul }}">
                    </div>
                </div>
                <!-- Content -->
                <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.4s">
                    <h2 class="mb-3 text-primary fw-bold">{{ $artikel->judul }}</h2>
                    <div class="d-flex mb-3">
                        <small class="me-3"><i class="far fa-user text-primary me-2"></i>{{ $artikel->penulis ?? 'Admin' }}</small>
                        <small><i class="far fa-calendar-alt text-primary me-2"></i>{{ \Carbon\Carbon::parse($artikel->tanggal_terbit)->format('d M, Y') }}</small>
                    </div>
                    <p class="text-dark mb-0 wow fadeInUp" data-wow-delay="1s">
                        {!! nl2br(e($artikel->isi)) !!}
                    </p>
                </div>
            </div>
        </div>
    @endforelse

@endsection