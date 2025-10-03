<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        // ambil 3 artikel terbaru untuk ditampilkan di landing
        $latestArticles = Berita::orderBy('tanggal_terbit', 'desc')->take(3)->get();

        return view('landingpage.index', compact('latestArticles'));
    }

    public function about()
    {
        return view('landingpage.about');
    }

    public function mengapa()
    {
        return view('landingpage.mengapa');
    }

    public function layanan()
    {
        return view('landingpage.layanan');
    }

    public function layananOpsi1()
    {
        return view('landingpage.layanan-opsi-1');
    }

    public function layananOpsi2()
    {
        return view('landingpage.layanan-opsi-2');
    }

    public function layananOpsi3()
    {
        return view('landingpage.layanan-opsi-3');
    }

    public function layananOpsi4()
    {
        return view('landingpage.layanan-opsi-4');
    }

    public function layananOpsi5()
    {
        return view('landingpage.layanan-opsi-5');
    }

    public function layananOpsi6()
    {
        return view('landingpage.layanan-opsi-6');
    }

    public function layananOpsi7()
    {
        return view('landingpage.layanan-opsi-7');
    }

    public function layananOpsi8()
    {
        return view('landingpage.layanan-opsi-8');
    }

    public function layananOpsi9()
    {
        return view('landingpage.layanan-opsi-9');
    }

    public function layananOpsi10()
    {
        return view('landingpage.layanan-opsi-10');
    }

    public function partner()
    {
        return view('landingpage.partner');
    }

    public function partnerOpsi1()
    {
        return view('landingpage.partner-opsi-1');
    }

    public function partnerOpsi2()
    {
        return view('landingpage.partner-opsi-2');
    }

    public function partnerOpsi3()
    {
        return view('landingpage.partner-opsi-3');
    }

    // halaman berita (list semua artikel)
    public function berita()
    {
        // ambil semua artikel
        $articles = Berita::orderBy('tanggal_terbit', 'desc')->paginate(6);

        return view('landingpage.berita', compact('articles'));
    }

    public function contact()
    {
        return view('landingpage.contact');
    }
    


}
