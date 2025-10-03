@extends('layouts.app-admin')

@section('title', 'Admin | Dashboard')
@section('sub-title', 'Dashboard')

@section('content')
<div class="container-fluid">
    <!-- Row Statistik -->
    <div class="row g-4 mb-4">
        <div class="col-md-4">
            <div class="card shadow-sm text-center p-3">
                <h6 class="text-muted">Jumlah Artikel</h6>
                <h3 class="fw-bold">{{ $totalArticles }}</h3>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm text-center p-3">
                <h6 class="text-muted">Draft</h6>
                <h3 class="fw-bold">{{ $draftCount }}</h3>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm text-center p-3">
                <h6 class="text-muted">Published</h6>
                <h3 class="fw-bold">{{ $publishedCount }}</h3>
            </div>
        </div>
    </div>

    <!-- Artikel Terbaru -->
    <div class="row g-4">
        <div class="col">
            <div class="card shadow-sm p-3">
                <h6 class="fw-bold mb-3">Artikel Terbaru</h6>
                <ul class="list-group list-group-flush">
                    @forelse($latestArticles as $artikel)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span>{{ $artikel->judul }}</span>
                            <span class="text-muted small">{{ \Carbon\Carbon::parse($artikel->tanggal_terbit)->format('d M') }}</span>
                        </li>
                    @empty
                        <li class="list-group-item text-muted">Belum ada artikel</li>
                    @endforelse
                </ul>
                <div class="mt-2 text-end">
                    <a href="{{ route('berita.index') }}" class="btn btn-sm btn-primary rounded-3">Lihat Semua</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
