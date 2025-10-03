<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    // Tampilkan daftar berita
    public function index()
    {
        $berita = Berita::orderBy('id_berita', 'desc')->get();
        return view('admin.admin', compact('berita'));
    }

    public function dashboard()
    {
        $totalArticles = Berita::count();
        $draftCount = Berita::where('status', 'draft')->count();
        $publishedCount = Berita::where('status', 'published')->count();
        $latestArticles = Berita::orderBy('tanggal_terbit', 'desc')->take(5)->get();
    
        return view('admin.dashboard', compact(
            'totalArticles',
            'draftCount',
            'publishedCount',
            'latestArticles'
        ));
    }
    

    // Tampilkan form tambah berita
    // public function create()
    // {
    //     return view('berita.create');
    // }

    // Simpan berita baru
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string',
            'penulis' => 'required|string',
            'tanggal_terbit' => 'required|date',
            'status' => 'required|in:draft,published',
            'isi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $slug = Str::slug($request->judul);

        $path = null;
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $path = $file->store('uploads', 'public');
        }

        Berita::create([
            'judul' => $request->judul,
            'slug' => $slug,
            'penulis' => $request->penulis,
            'tanggal_terbit' => $request->tanggal_terbit,
            'status' => $request->status,
            'isi' => $request->isi,
            'gambar' => $path,
        ]);

        return redirect()->back()->with('success', 'Berita berhasil ditambahkan!');
    
    }

    // Tampilkan detail berita
    // public function show($slug)
    // {
    //     $berita = Berita::where('slug', $slug)->findOrFail();
    //     return view('berita.show', compact('berita'));
    // }



    // public function edit($id)
    // {
    //     $berita = Berita::findOrFail($id); // ini langsung instance tunggal
    //     return view('berita.edit', compact('berita'));
    //     dd($id, Berita::findOrFail($id));
       
    // }
    
    // Update berita
    public function update(Request $request, $id)
    {
        $berita = Berita::findOrFail($id); // instance tunggal
    
        $request->validate([
            'judul' => 'required|string',
            'penulis' => 'required|string',
            'tanggal_terbit' => 'required|date',
            'status' => 'required|in:draft,published',
            'isi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
    
        $slug = Str::slug($request->judul);
    
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $path = $file->store('uploads/berita', 'public');
            $berita->gambar = $path;
        }
    
        $berita->update([
            'judul' => $request->judul,
            'slug' => $slug,
            'penulis' => $request->penulis,
            'tanggal_terbit' => $request->tanggal_terbit,
            'status' => $request->status,
            'isi' => $request->isi,
        ]);
    
        return redirect()->back()->with('success', 'Berita berhasil diperbarui!');
    }
    

    // Hapus berita
    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);

        if ($berita->gambar && Storage::disk('public')->exists($berita->gambar)) {
            Storage::disk('public')->delete($berita->gambar);
        }

        $berita->delete();

        return redirect()->back()->with('success', 'Berita berhasil dihapus!');
    }
}
