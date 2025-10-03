<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Website')</title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Wajib Pajak" name="keywords">
    <meta content="Wajib Pajak" name="description">
    <link rel="icon" type="image/png" href="{{ asset('template_rrtc/img/RRTC2PNG.png') }}">

    <!-- Favicon -->
    <link href="{{ asset('template_rrtc/img/favicon.ico') }}" rel="icon">


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css"/>

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('template_rrtc/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template_rrtc/lib/animate/animate.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('template_rrtc/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('template_rrtc/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('template_rrtc/css/add.css') }}" rel="stylesheet">

    
    
</head>

<body>

        <!-- Sidebar (desktop) -->
        <aside class="sidebar d-none d-lg-block" aria-label="Sidebar">
            <div class="brand  ">
                <img src="{{asset('template_rrtc/img/RRTC2PNG1.png')}}" alt="logo" class="w-50 m-0 h-auto text-center">
            </div>

            <nav class="nav flex-column px-2 mt-3">
                <!-- Dashboard -->
                <a class="nav-link mx-0 {{ request()->routeIs('dashboard') ? 'btn-primary text-white' : '' }}" 
                href="{{ route('dashboard') }}">
                    <i class="bi bi-speedometer2 me-1"></i> Dashboard
                </a>

                <!-- Artikel / Berita -->
                <a class="nav-link mx-0 {{ request()->routeIs('berita.index') ? 'btn-primary text-white' : '' }}" 
                href="{{ route('berita.index') }}">
                    <i class="bi bi-journal-text me-1"></i> Artikel / Berita
                </a>

                <hr>

                <!-- Logout Modal Trigger -->
                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">
                    <i class="bi bi-box-arrow-right me-1"></i> Logout
                </a>
            </nav>

        </aside>

        <!-- Offcanvas sidebar for small screens -->
        <div class="offcanvas offcanvas-start d-lg-none " tabindex="-1" id="offcanvasSidebar">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title">RRTC Admin</h5>
                <button type="button" class="btn-close btn-close-primary" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <nav class="nav flex-column">
                    <!-- Dashboard -->
                    <a class="nav-link {{ request()->routeIs('dashboard') ? 'btn-primary' : '' }}" 
                        href="{{ route('dashboard') }}">
                        <i class="bi bi-speedometer2 me-1"></i> Dashboard
                    </a>

                    <!-- Artikel / Berita -->
                    <a class="nav-link {{ request()->routeIs('berita.index') ? 'btn-primary' : '' }}" 
                        href="{{ route('berita.index') }}">
                        <i class="bi bi-journal-text me-1"></i> Artikel / Berita
                    </a>

                    <hr>

                    <!-- Logout Modal Trigger -->
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">
                        <i class="bi bi-box-arrow-right me-1"></i> Logout
                    </a>
                </nav>
            </div>
        </div>
        <!-- Offcanvas sidebar for small screens end-->

        <!-- Topbar -->
        <header class="topbar d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center gap-2">
                <button class="btn btn-dark d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
                    <i class="bi bi-list"></i>
                </button>
                <h5 class="mb-0" >@yield('sub-title')</h5>
                <span class="badge bg-primary ms-2 text-white p-2">Admin</span>
            </div>

            <div class="d-flex align-items-center gap-3">
                <div class="input-group d-none d-md-flex" style="max-width:320px;">
                    <span class="input-group-text bg-transparent border-0 text-muted"><i class="bi bi-search"></i></span>
                    <input class="form-control form-control-sm" placeholder="Search articles..." aria-label="search">
                </div>

                <div class="dropdown">
                    <a class="d-flex align-items-center text-decoration-none" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="text-end mx-2 ">
                            <div style="font-weight:700;color: var(--primary);" >Administrator</div>
                            <div class="text-muted" style="font-size:.85rem;">admin@rrtc.com</div>
                        </div>
                        <!-- <img src="#" class="rounded-circle" alt="admin"> -->
                        <i class="bi bi-person-circle fs-3 text-muted "></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <!-- <li><a class="dropdown-item" href="#">Profile</a></li> -->
                        <li>
                            <a class="nav-link text-danger" href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <!-- Topbar end-->


    <main class="main-content">
        @yield('content')
    </main>

<!-- Modal Logout -->
<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-sm rounded-3">

            <!-- Header -->
            <div class="modal-header border-0">
                <h5 class="modal-title fw-semibold d-flex align-items-center text-danger" id="logoutModalLabel">
                    <i class="bi bi-box-arrow-right me-2  fs-5"></i> Konfirmasi Logout
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Body -->
            <div class="modal-body text-center py-4">
                <i class="bi bi-person-circle display-4  mb-3"></i>
                <p class="mb-0 text-danger">
                    Apakah kamu yakin ingin <span class="fw-semibold">keluar</span> dari dashboard?
                </p>
            </div>

            <!-- Footer -->
            <div class="modal-footer justify-content-end border-0">
                <button type="button" class="btn btn-primary btn-sm rounded-3 px-3" data-bs-dismiss="modal">
                    <i class="bi bi-x-circle me-1"></i> Batal
                </button>
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm rounded-3 px-3">
                        <i class="bi bi-box-arrow-right me-1"></i> Logout
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- Modal Logout End -->




    <script>
    function previewImage(event) {
        const input = event.target;
        const preview = document.getElementById('coverPreview');

        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.classList.remove('d-none');
            }
            reader.readAsDataURL(input.files[0]);
        } else {
            preview.src = '';
            preview.classList.add('d-none');
        }
    }
    </script>

<script>
function previewEditImage(event, id) {
    const preview = document.getElementById('editPreview' + id);
    const label = document.getElementById('newLabel' + id);
    const current = document.getElementById('currentImage' + id);

    const input = event.target;

    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.src = e.target.result;
            preview.classList.remove('d-none');
            label.classList.remove('d-none');
            if(current) current.style.display = 'none';
        }
        reader.readAsDataURL(input.files[0]);
    } else {
        preview.src = '';
        preview.classList.add('d-none');
        label.classList.add('d-none');
        if(current) current.style.display = 'block';
    }
}
</script>


    <!-- Load jQuery dulu -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('template_rrtc/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('template_rrtc/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('template_rrtc/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('template_rrtc/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('template_rrtc/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('template_rrtc/js/main.js') }}"></script>
    
</body>
</html>
