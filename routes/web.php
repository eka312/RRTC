<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


// Halaman landing start
Route::controller(LandingController::class)->group(function () {
    Route::get('/', 'index')->name('landing.index');
    Route::get('/about', 'about')->name('landing.about');


    Route::get('/layanan', 'layanan')->name('landing.layanan');

    Route::get('/jasa-penyusunan-laporan-keuangan', 'layananOpsi1')
    ->name('landing.layanan-opsi-1');

    Route::get('/jasa-konsultasi-hukum-&-perpajakan', 'layananOpsi2')
    ->name('landing.layanan-opsi-2');
    
    Route::get('/jasa-review-pajak-&-laporan-keuangan-minim', 'layananOpsi3')
    ->name('landing.layanan-opsi-3');

    Route::get('/jasa-pendampingan-sp2dk', 'layananOpsi4')
    ->name('landing.layanan-opsi-4');

    Route::get('/jasa-pendampingan-pemeriksaan-pajak', 'layananOpsi5')
    ->name('landing.layanan-opsi-5');

    Route::get('/jasa-pengurusan-restitusi-pajak', 'layananOpsi6')
    ->name('landing.layanan-opsi-6');

    Route::get('/jasa-penyusunan-dan-pelaporan-spt-tahunan', 'layananOpsi7')
    ->name('landing.layanan-opsi-7');

    Route::get('/jasa-pendampingan-upaya-hukum-dibidang-perpajakan', 'layananOpsi8')
    ->name('landing.layanan-opsi-8');

    Route::get('/jasa-pelatihan-pajak-dan-pembukuan', 'layananOpsi9')
    ->name('landing.layanan-opsi-9');

    Route::get('/jasa-payroll-management', 'layananOpsi10')
    ->name('landing.layanan-opsi-10');


    Route::get('/partner', 'partner')->name('landing.partner');
    Route::get('/reza-ronny-hermawan', 'partnerOpsi1')->name('landing.partner-opsi-1');
    Route::get('/wahyu-rizky-nugroho', 'partnerOpsi2')->name('landing.partner-opsi-2');
    Route::get('/adv-m-kenza-radhya', 'partnerOpsi3')->name('landing.partner-opsi-3');


    Route::get('/mengapa', 'mengapa')->name('landing.mengapa');
    Route::get('/berita', 'berita')->name('landing.berita');
    Route::get('/berita-detail/{slug}', 'beritaDetail')->name('landing.berita-detail');
    Route::get('/contact', 'contact')->name('landing.contact');
});
// halaman landing end



// Route::middleware(['auth'])->group(function () {
   
// });


Route::controller(BeritaController::class)->group(function () {
    Route::get('/admin', 'index')->name('berita.index');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/tambah', 'store')->name('berita.store');

    Route::get('/edit/{id}', 'edit')->name('berita.edit');
    Route::put('/edit/{id}', 'update')->name('berita.update');

    Route::get('/hapus/{id}', 'destroy')->name('berita.destroy');
});


// Route halaman logout
Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout');




Route::controller(AuthController::class)->group(function () {
    // Route halaman login
    Route::get('/login', 'index')->name('login');
    Route::post('/login', 'authenticate')->name('login.submit');
});







