@extends('layouts.app')

@section('title', 'Tentang Kami | Wajib Pajak')

@section('content')

        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Tentang Kami</h1>
                    <a href="{{ route('landing.index')}}" class="h5 text-white">Beranda</a>
                    <span class="text-light">|</span>
                    <a href="{{ route('landing.about')}}" class="h5 text-white">Tentang Kami</a>
                </div>
            </div>
        </div>

    <!-- Tentang Kami Start -->
    <div class="content-container my-2">
        <div class="content">
            <!-- Kolom kiri -->
            <div class="left-column">
                <div class="title ">
                    Tentang Kami
                    <h1>Kenapa Ada <br>RRTC?</h1>
                </div>
                <button class="button">Pelajari Lebih Lanjut →</button>
            </div>
        
            <!-- Kolom kanan -->
            <div class="right-column">
                <div class="feature">
                    <div class="feature-title">Siapa Kami</div>
                    <div class="feature-description">
                        RRTC hadir sebagai konsultan pajak profesional yang mengedepankan 
                        integritas, keahlian, dan pemanfaatan teknologi dalam setiap layanan.
                    </div>
                </div>
        
                <div class="feature">
                    <div class="feature-title">Layanan Kami</div>
                    <div class="feature-description">
                        Menangani beragam kebutuhan mulai dari laporan keuangan, konsultasi hukum & pajak, 
                        review pajak, pendampingan administrasi, hingga upaya hukum.
                    </div>
                </div>
        
                <div class="feature">
                    <div class="feature-title">Tim Profesional</div>
                    <div class="feature-description">
                        Didukung oleh konsultan berpengalaman dengan latar pendidikan, sertifikasi, 
                        dan publikasi yang kuat di bidang perpajakan, akuntansi, dan hukum.
                    </div>
                </div>
        
                <div class="feature">
                    <div class="feature-title">Visi & Komitmen</div>
                    <div class="feature-description">
                        Sejalan dengan visi untuk menjadi rujukan utama layanan konsultan pajak terpercaya, 
                        RRTC berkomitmen mendukung transformasi digital & memberdayakan klien menghadapi era otomasi.
                    </div>
                </div>
        
                <div class="feature">
                    <div class="feature-title">Nilai Jangka Panjang</div>
                    <div class="feature-description">
                        Hubungan berbasis profesionalisme & kepercayaan adalah kunci. 
                        RRTC hadir sebagai mitra strategis yang mendukung pertumbuhan bisnis klien secara berkelanjutan.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tentang Kami End -->


    <!-- visi,misi,nilai  start-->
    <section class="py-5" id="visi-misi-nilai">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 720px;">
                <h1 class="fw-bold text-primary text-uppercase">Visi, Misi & Nilai RRTC</h1>
                <p class="mb-0">
                    Menjadi landasan utama dalam mencapai tujuan, visi, misi, dan nilai RRTC 
                    mencerminkan arah, strategi, serta prinsip yang menjadi pedoman dalam setiap 
                    langkah organisasi.
                </p>
                
            </div>
            <div class="row mb-5">
                <!-- Gambar -->
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <img src="{{asset('template_rrtc/img/gdung.jpg')}}" alt="Gedung RRTC" class="img-fluid rounded shadow m-0"  
                    style="height:628px; object-fit:cover; width:100%;">
                </div>
                <!-- Visi & Misi -->
                <div class="col-lg-6  wow fadeInRight" data-wow-delay="0.4s">
                    <h2 class="fw-bold text-primary mb-3">Visi RRTC</h2>
                    <p class="text-dark">
                        <b>Menjadi rujukan utama</b> pengembangan bisnis
                        terpadu dengan mengintegrasikan berbagai layanan yang meliputi hukum, pajak, 
                        akuntansi, sistem manajemen, dll. Hadirnya kami dapat membantu klien menyelesaikan 
                        permasalahan proses bisnis yang rumit menjadi sederhana dengan memanfaatkan 
                        digitalisasi berbasis tekonologi modern.
                    </p>
            
                    <h2 class="fw-bold text-primary mt-4 mb-3">Misi RRTC</h2>
                    <div class="accordion" id="accordionMisi">
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#misi1">
                                    Memberikan Solusi Pajak yang Tepat dan Efektif
                                </button>
                            </h2>
                            <div id="misi1" class="accordion-collapse collapse" data-bs-parent="#accordionMisi">
                                <div class="accordion-body">
                                    Tidak hanya memberikan saran umum, tetapi langsung menyusun strategi pajak 
                                    personalisasi dengan simulasi perhitungan, analisis risiko, dan rekomendasi 
                                    optimasi pajak berbasis data. Hasilnya adalah penghematan biaya pajak yang 
                                    sah secara hukum dan peningkatan kepatuhan klien.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#misi2">
                                    Menyediakan Layanan Legalitas Usaha yang Lengkap
                                </button>
                            </h2>
                            <div id="misi2" class="accordion-collapse collapse" data-bs-parent="#accordionMisi">
                                <div class="accordion-body">
                                    Menangani seluruh proses legalitas usaha dari awal hingga selesai 
                                    (pendirian PT/CV. OSS, perizinan usaha, hingga izin khusus sektor tertentu) 
                                    dengan layanan one-stop service, sehingga klien tidak perlu berhubungan 
                                    dengan banyak instansi sendiri. Hal ini membedakan RRTC dengan konsultan 
                                    lain yang hanya fokus pada satu aspek legalitas.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="1s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#misi3">
                                    Menghadirkan Layanan Akuntansi dan Keuangan yang Andal
                                </button>
                            </h2>
                            <div id="misi3" class="accordion-collapse collapse" data-bs-parent="#accordionMisi">
                                <div class="accordion-body">
                                    Menggunakan sistem akuntansi berbasis cloud yang real-time, akurat, 
                                    dan dapat diakses langsung oleh klien. Dengan pendekatan ini, laporan 
                                    keuangan tidak hanya formalitas, tetapi alat pengambilan keputusan 
                                    bisnis yang transparan dan dapat dipantau kapan saja.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="1.2s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#misi4">
                                    Menawarkan Pendampingan Hukum Profesional
                                </button>
                            </h2>
                            <div id="misi4" class="accordion-collapse collapse" data-bs-parent="#accordionMisi">
                                <div class="accordion-body">
                                    Didukung oleh tim advokat dan konsultan hukum berlisensi, layanan hukum 
                                    kami bukan sekadar opini tertulis, melainkan juga penanganan kasus nyata 
                                    (litigasi maupun non-litigasi), sehingga klien merasa lebih terlindungi 
                                    dibandingkan konsultan pajak/akuntansi biasa.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="1.4s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#misi5">
                                    Mengoptimalkan Teknologi dalam Setiap Layanan
                                </button>
                            </h2>
                            <div id="misi5" class="accordion-collapse collapse" data-bs-parent="#accordionMisi">
                                <div class="accordion-body">
                                    Seluruh layanan berbasis pada aplikasi dan sistem digital internal 
                                    (e-filing pajak, e-reporting akuntansi, e-legalitas), yang membuat pekerjaan 
                                    lebih cepat, minim kesalahan, serta terdokumentasi dengan baik. Keunggulan 
                                    ini memberi jaminan kecepatan dan akurasi yang konsisten.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="1.6s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#misi6">
                                    Menjaga Profesionalisme dan Kepercayaan
                                </button>
                            </h2>
                            <div id="misi6" class="accordion-collapse collapse" data-bs-parent="#accordionMisi">
                                <div class="accordion-body">
                                    Setiap klien didampingi oleh account manager khusus yang memastikan komunikasi 
                                    jelas, progres layanan terpantau, serta kerahasiaan terjaga. Pendekatan personal 
                                    ini membuat layanan lebih humanis dan berbeda dari konsultan lain yang cenderung 
                                    transaksional.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="1.8s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#misi7">
                                    Mendukung Pertumbuhan dan Keberlanjutan Bisnis Klien
                                </button>
                            </h2>
                            <div id="misi7" class="accordion-collapse collapse" data-bs-parent="#accordionMisi">
                                <div class="accordion-body">
                                    Tidak hanya menyelesaikan masalah teknis, tetapi juga memberikan business 
                                    insight berbasis data keuangan, Sistem Teknologi dan legal untuk membantu klien 
                                    berkembang jangka panjang. Dengan demikian, kami bukan hanya konsultan, tetapi 
                                    mitra strategis bisnis klien.
                                </div>
                            </div>
                        </div>
                        <!-- Tambah item lain -->
                    </div>
                </div>
            </div>
        
            <!-- Nilai RRTC -->
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="fw-bold text-primary mb-3 wow fadeInUp">Nilai RRTC</h2>
                    <div class="row g-4">
                        <div class="col-md-4 wow zoomIn" data-wow-delay="0.2s">
                            <div class="card h-100 shadow-sm border-0">
                                <div class="card-body">
                                    <h5 class="fw-bold text-dark">Integritas</h5>
                                    <p>Kami menjunjung tinggi etika dan kejujuran dalam setiap layanan yang kami berikan.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow zoomIn" data-wow-delay="0.4s">
                            <div class="card h-100 shadow-sm border-0">
                                <div class="card-body">
                                    <h5 class="fw-bold text-dark">Profesionalisme</h5>
                                    <p>Kami berkomitmen memberikan layanan terbaik dengan standar profesional yang tinggi.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow zoomIn" data-wow-delay="0.6s">
                            <div class="card h-100 shadow-sm border-0">
                                <div class="card-body">
                                    <h5 class="fw-bold text-dark">Inovasi</h5>
                                    <p>Kami selalu mencari cara baru dan kreatif untuk memberikan solusi efisien.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- visi,misi,nilai end -->


    <!-- Tim Start -->
    <div class="container-fluid py-5  wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row ">
                
                <!-- Gambar Tim -->
                <div class="col-lg-6 mb-4 mb-lg-0 wow fadeInLeft" data-wow-delay="0.2s">
                    <img src="{{asset('template_rrtc/img/team-12.jpg')}}" alt="Tim RRTC" 
                    class="img-fluid rounded shadow m-0"
                    style="object-fit:cover; width:100%; height:380px;">
                </div>
                
                <!-- Deskripsi Tim -->
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                    <h2 class="fw-bold text-primary mb-4">Tim Kami</h2>
                    <p class="text-dark mb-3">
                        <b>Tim RRTC terdiri dari</b> para profesional yang terstruktur dengan baik, mulai dari supervisor, senior, hingga junior 
                        staff dibidang akuntansi dan perpajakan yang terlatih. Setiap peran memiliki fungsi penting dalam memastikan setiap 
                        layanan yang diberikan berjalan efektif, akurat, dan sesuai dengan kebutuhan klien. Dengan kombinasi pengalaman, keahlian 
                        teknis, serta semangat belajar yang tinggi, tim kami mampu bekerja secara kolaboratif dalam menyelesaikan setiap tantangan 
                        perpajakan dan akuntansi.
                    </p>
                    <p class="text-dark mb-3">
                        <b>Struktur tim yang solid ini</b> memungkinkan kami memberikan solusi menyeluruh, mulai dari analisis strategis hingga oksekusi 
                        teknis di lapangan. Didukung dengan pemanfaatan teknologi serta komitmen terhadap profesionalisme, tim RR Tax Consulting 
                        siap menjadi mitra terpercaya yang mampu meng-handle setiap permasalahan klien dengan cermat, cepat, dan penuh integritas.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Tim End -->

@endsection
