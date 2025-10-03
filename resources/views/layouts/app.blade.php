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

    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

     <!-- Back to Top -->
     <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

    <script>
        function toggleAnswer(id) {
        var answer = document.getElementById(id);
        var toggleIcon = document.querySelector(`h3[onclick="toggleAnswer('${id}')"] .toggle-icon`);
        
        if (answer.style.display === 'block') {
            answer.style.display = 'none';
            toggleIcon.innerHTML = '&#9660;'; // Ubah ikon ke arah bawah
        } else {
            answer.style.display = 'block';
            toggleIcon.innerHTML = '&#9650;'; // Ubah ikon ke arah atas
        }
        }
    </script>
    
    <!-- Load jQuery dulu -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('template_rrtc/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('template_rrtc/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('template_rrtc/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('template_rrtc/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('template_rrtc/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('template_rrtc/js/main.js') }}"></script>
    
</body>
</html>
