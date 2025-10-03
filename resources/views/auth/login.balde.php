<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Login | Wajib Pajak</title>

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

        <!--Form Login Start-->
        <div class="bg-primary vh-100">
            <div class="container">
                <!-- Outer Row -->
                <div class="row justify-content-center ">
                    <div class="col-xl-6 col-lg-12 col-md-9">
                        <div class="card o-hidden border-0 shadow-lg my-5 rounded-3">
                            <div class="card-body p-0">
                                <!-- Nested Row within Card Body -->
                                <div class="row">
                                    <div class="col-lg-6 d-none d-lg-block bg-login-image ">
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="p-5">
                                            <img src="../frontend/img/RRTC2(PNG)1.png" class="rounded mx-auto d-block m-0" alt="Logo" style="width: 200px; height: auto;">
                                            <div class="text-center mt-3">
                                                <h1 class="h4 text-gray-900 mb-4"><b>Welcome Back!</b></h1>
                                            </div>
                                            <form action="{{ route('login') }}" method="POST">
                                                <div class="form-group mb-3">
                                                    <input type="email" class="form-control form-control-user rounded-3 " id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email" name="email">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <input type="password" class="form-control form-control-user rounded-3" id="exampleInputPassword" placeholder="Password" name="password">
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" value="" id="rememberMe">
                                                    <label class="form-check-label text-muted " for="rememberMe" style="line-height: 1.5rem; font-size: 14px;">
                                                      Remember Me
                                                    </label>
                                                </div>
                                                <button type="submit" class="btn btn-primary w-100 rounded-3 m-0">Login</button>
                                                <hr>

                                               
                                               
                                            </form>
                                            
                                            <!-- <div class="text-center">
                                                <a class="small" href="/forgot-password">Forgot Password?</a>
                                            </div> -->
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Form Login End-->

        
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
