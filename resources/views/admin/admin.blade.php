@extends('layouts.app-admin')

@section('title', 'Admin | Tambah Berita')
@section('sub-title', 'Artikel / Berita')

@section('content')


<div class="container-fluid">

    <div class="card card-custom  shadow-sm">
        <div class="mb-4 d-flex justify-content-between align-items-center">
            <div>
                <h6 class="mb-0" style="font-weight:700;">Daftar Artikel</h6>
                <small class="muted">Kelola, edit, atau hapus artikel</small>
            </div>
            <div>
                <!-- <button class="btn btn-primary btn-sm rounded-3" onclick="refreshList()"><i class="bi bi-arrow-clockwise"></i> Refresh</button> -->
                <button class="btn btn-primary btn-sm rounded-3" data-bs-toggle="modal" data-bs-target="#addArticleModal">
                    <i class="bi bi-plus me-1"></i> Tambah
                </button>
            </div>
        </div>
        <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-dark-custom table-hover mb-0">
                <thead class="small">
                        <tr>
                            <th style="width:6%">No</th>
                            <th>Judul</th>
                            <th class="text-center" style="width:14%">Tanggal</th>
                            <th class="text-center" style="width:12%">Status</th>
                            <th class="text-center" style="width:12%">Aksi</th>
                        </tr>
                </thead>
                <tbody id="articlesTableBody">
                        @foreach ($berita as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->judul }}</td>
                            <td class="text-center">{{ \Carbon\Carbon::parse($item->tanggal_terbit)->format('d M Y') }}</td>
                            <td class="text-center">{{ ucfirst($item->status) }}</td>
                            <td class="text-center" >
                                <button class="btn btn-sm btn-secondary m-1" data-bs-toggle="modal" data-bs-target="#editModal{{ $item->id_berita }}">
                                    <i class="fa fa-edit"></i>
                                </button>
                                
                                <button  class="btn btn-sm btn-danger m-1 " data-bs-toggle="modal" data-bs-target="#deleteModal{{ $item->id_berita }}">
                                    <i class="fa fa-trash"></i>
                                </button>

                                <button  class="btn btn-sm btn-info m-1 " data-bs-toggle="modal" data-bs-target="#showModal{{ $item->id_berita }}">
                                    <i class="fa fa-eye" style="color: white;"></i>
                                </button>
                            </td>

                        </tr>

                        <!-- Modal Edit per berita -->
                        <div class="modal fade" id="editModal{{ $item->id_berita }}" tabindex="-1">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <form action="{{ route('berita.update', $item->id_berita) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <div class="modal-header">
                                            <h5 class="modal-title">Edit Berita</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>

                                        <div class="modal-body">
                                            <!-- Judul -->
                                            <div class="mb-3">
                                                <label class="form-label">Judul</label>
                                                <input type="text" name="judul" class="form-control" value="{{ $item->judul }}" required>
                                            </div>

                                            <!-- Penulis & Tanggal Terbit -->
                                            <div class="row g-2 mb-3">
                                                <div class="col-md-6">
                                                    <label class="form-label">Penulis</label>
                                                    <input type="text" name="penulis" class="form-control" value="{{ $item->penulis }}">
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Tanggal Terbit</label>
                                                    <input type="date" name="tanggal_terbit" class="form-control" value="{{ $item->tanggal_terbit }}">
                                                </div>
                                            </div>

                                            <!-- Status -->
                                            <div class="mb-3">
                                                <label class="form-label">Status</label>
                                                <select name="status" class="form-select">
                                                    <option value="draft" {{ $item->status == 'draft' ? 'selected' : '' }}>Draft</option>
                                                    <option value="published" {{ $item->status == 'published' ? 'selected' : '' }}>Published</option>
                                                </select>
                                            </div>

                                            <!-- Gambar saat ini & input gambar baru -->
                                            <div class="mb-3">
                                                <label class="form-label">Gambar Saat Ini</label>
                                                @if($item->gambar && \Storage::disk('public')->exists($item->gambar))
                                                    <img id="currentImage{{ $item->id_berita }}" 
                                                        src="{{ asset('storage/' . $item->gambar) }}" 
                                                        class="img-fluid mb-2" 
                                                        style="max-height:200px; display:block;">
                                                @else
                                                    <p class="text-muted">Belum ada gambar</p>
                                                @endif

                                                <label class="form-label mt-2">Ganti Gambar (kosongkan jika tidak ingin mengubah)</label>
                                                <input type="file" name="gambar" id="edit_cover{{ $item->id_berita }}" 
                                                    class="form-control" 
                                                    onchange="previewEditImage(event, '{{ $item->id_berita }}')">

                                                <p class="small text-muted mt-1 d-none" id="newLabel{{ $item->id_berita }}">Preview gambar baru:</p>
                                                <img id="editPreview{{ $item->id_berita }}" src="" class="img-fluid mt-2 d-none" style="max-height:200px;">
                                            </div>

                                            <!-- Isi Artikel -->
                                            <div class="mb-3">
                                                <label class="form-label">Isi</label>
                                                <textarea name="isi" class="form-control" rows="8" required>{{ $item->isi }}</textarea>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary rounded-3" data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary rounded-3">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Edit per berita End -->
                                                            
                        <!-- Modal Hapus -->
                        <div class="modal fade" id="deleteModal{{ $item->id_berita }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content border-0 shadow-sm rounded-3">
                                    
                                    <!-- Header -->
                                    <div class="modal-header border-0">
                                        <h5 class="modal-title fw-semibold text-danger d-flex align-items-center" id="deleteModalLabel">
                                            <i class="bi bi-exclamation-circle me-2 fs-4"></i> Konfirmasi Hapus
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <!-- Body -->
                                    <div class="modal-body text-center text-danger">
                                        <i class="fa fa-trash display-3 mb-3"></i>
                                        <p class="mb-0 ">
                                            Yakin ingin menghapus artikel ini? <br>
                                            <span class="fw-semibold">Aksi tidak dapat dibatalkan.</span>
                                        </p>
                                    </div>

                                    <!-- Footer -->
                                    <div class="modal-footer justify-content-end border-0">
                                        <button type="button" class="btn btn-primary btn-sm rounded-3 px-3" data-bs-dismiss="modal">
                                            <i class="bi bi-x-circle me-1"></i> Batal
                                        </button>
                                        <a href="{{ route('berita.destroy', $item->id_berita) }}" class="btn btn-danger btn-sm rounded-3 px-3">
                                            <i class="bi bi-trash me-1"></i> Hapus
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Hapus End -->


                        <!-- Modal Show per berita -->
                        <div class="modal fade" id="showModal{{ $item->id_berita }}" tabindex="-1">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content  border-0 shadow-sm rounded-3">
                                    
                                    <!-- Header -->
                                    <div class="modal-header  d-flex align-items-bewteen border-0">
                                        <h5 class="modal-title me-4">Detail Artikel</h5>
                                        <!-- Status -->
                                        <span class="badge bg-{{ $item->status == 'published' ? 'success' : 'secondary' }}">
                                            {{ ucfirst($item->status) }}
                                        </span>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>

                                    <!-- Body -->
                                    <div class="modal-body  ">
                                        <!-- Gambar -->
                                        @if($item->gambar)
                                            <img src="{{ asset('storage/' . $item->gambar) }}" 
                                                class="img-fluid  rounded mb-3" 
                                                style="max-height:300px; object-fit:cover;">
                                        @endif
                                        <p class="text-muted mb-3" style="color: #b99c58 !important;">
                                            <i class="far fa-user"></i> {{ $item->penulis }} | 
                                            <i class="far fa-calendar-alt"></i> {{ \Carbon\Carbon::parse($item->tanggal_terbit)->format('d M Y') }}
                                        </p>
                                        <h3 class="fw-bold ">{{ $item->judul }}</h3>
                                        <p style="white-space: pre-line;">{{ $item->isi }}</p>
                                    </div>
                                    <!-- Footer -->
                                    <div class="modal-footer border-0">
                                        <button type="button" class="btn btn-secondary rounded-3" data-bs-dismiss="modal">Tutup</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- End Modal Show -->


                        @endforeach
        
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

 <!-- modal tambah data -->
<div class="modal fade" id="addArticleModal" tabindex="-1" aria-labelledby="addArticleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addArticleModalLabel">Tambah Artikel / Berita</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="articleForm" action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                    <label class="form-label" for="title">Judul</label>
                    <input id="title" name="judul" class="form-control form-control-sm rounded-3" placeholder="Masukkan judul" required>
                    </div>
                    
                    <div class="row g-2">
                    <div class="col-md-6 mb-3">
                        <label class="form-label" for="author">Penulis</label>
                        <input id="author" name="penulis" class="form-control form-control-sm rounded-3" placeholder="Nama penulis">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label" for="date">Tanggal Terbit</label>
                        <input id="date" name="tanggal_terbit" type="date" class="form-control form-control-sm rounded-3">
                    </div>
                    </div>
                    
                    <div class="mb-3">
                    <label class="form-label" for="status">Status</label>
                    <select id="status" name="status" class="form-select form-select-sm rounded-3">
                        <option value="draft">Draft</option>
                        <option value="published">Published</option>
                    </select>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Gambar</label>
                        <input type="file" id="cover" name="gambar" class="form-control" onchange="previewImage(event)">
                        <div class="mt-3">
                            <img id="coverPreview" src="" class="img-fluid d-none" style="max-height:200px;">
                        </div>
                    </div>
                    <div class="mb-3">
                    <label class="form-label" for="content">Isi</label>
                    <textarea id="content" name="isi" class="form-control form-control-sm rounded-3" rows="12" placeholder="Tulis isi artikel di sini"></textarea>
                    </div>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm rounded-3" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary btn-sm rounded-3">
                    <i class="bi bi-save me-1"></i> Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- modal tambah data end -->

@endsection
