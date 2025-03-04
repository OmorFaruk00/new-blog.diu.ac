<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DIU | Blog</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{asset('/images/url.png')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('asset/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{ asset('asset/lib/animate/animate.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('asset/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('asset/css/style.css')}}" rel="stylesheet">
</head>

<body>
    @include('layouts.menu')
   @yield('content')


    

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                        <a href="{{route('home')}}" class="navbar-brand">
                            <img src="/images/logo.png" alt="logo image" height="100px" width="200px">
                        </a>
                        <p class="mt-3 mb-4">
                            Dhaka International University, rated among the top private universities of Bangladesh,

                            is an institution that promotes eastern culture and values, and meaningfully blends eastern and western thoughts and innovation.
                        </p>
                        {{-- <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                                <button class="btn btn-dark">Sign Up</button>
                            </div>
                        </form> --}}
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Get In Touch</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">Satarkul, Badda, Dhaka-1212, Bangladesh.</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">admission@diu.net.bd</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">+8809677777348</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-primary btn-square me-2" href="https://x.com/diubd"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="https://www.facebook.com/diu.net.bd"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="https://www.linkedin.com/school/dhaka-international-university"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-primary btn-square" href="https://www.instagram.com/diu.net.bd/"><i class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Quick Links</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="{{route('home')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                                <a class="text-light mb-2" href="{{route('about')}}"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                                <a class="text-light mb-2" href="{{route('contact')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                                <a class="text-light mb-2" href="#category"><i class="bi bi-arrow-right text-primary me-2"></i>Caregory</a>
                                <a class="text-light mb-2" href="#recent"><i class="bi bi-arrow-right text-primary me-2"></i>Recent Post</a>
                                <a class="text-light mb-2" href="#tag"><i class="bi bi-arrow-right text-primary me-2"></i>Tag</a>
                              
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Usefull Links</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="https://diu.ac/"><i class="bi bi-arrow-right text-primary me-2"></i>diu.ac</a>
                                <a class="text-light mb-2" href="https://diu.ac.bd/"><i class="bi bi-arrow-right text-primary me-2"></i>diu.ac.bd</a>
                                <a class="text-light mb-2" href="https://admission.diu.ac/"><i class="bi bi-arrow-right text-primary me-2"></i>admission.diu.ac</a>
                                <a class="text-light mb-2" href="https://international.diu.ac"><i class="bi bi-arrow-right text-primary me-2"></i>international.diu.ac</a>
                                <a class="text-light mb-2" href="https://students.diu.ac/"><i class="bi bi-arrow-right text-primary me-2"></i>students.diu.ac</a>
                                <a class="text-light mb-2" href="https://alumni.diu.ac/"><i class="bi bi-arrow-right text-primary me-2"></i>alumni.diu.ac</a>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px; ">
                        <p class="mb-0">&copy; {{ date('Y')}}  DIU. All rights Reserved. | Developed & Powered by: IT-Team, DIU 
						
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('asset/lib/wow/wow.min.js')}}"></script>
    <script src="{{ asset('asset/lib/easing/easing.min.js')}}"></script>
    <script src="{{ asset('asset/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{ asset('asset/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{ asset('asset/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('asset/js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.min.js"></script>
    <!-- Include Axios from CDN -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    @yield('script')
</body>

</html>