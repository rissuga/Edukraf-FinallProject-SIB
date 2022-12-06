<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>EDUKRAF - Kelas</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('frontend/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('frontend/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">


    <!-- Vendor CSS Files -->
    <link href="{{ asset('frontend/assets/vendor/animate.css/animate.min.css') }}    " rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/aos/aos.css') }}" rel="stylesheet   ">
    <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/boxicons/css/boxicons.min.css') }}      " rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/remixicon/remixicon.css') }}            " rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.css       ') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">

    <!-- Font Awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- =======================================================
  * Template Name: Mentor - v4.9.1
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.html">EDUKRAF</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="courses.html">Ensiklopedia</a></li>
                    <li><a class="active" href="kelas.html">Kelas</a></li>
                    <!-- <li><a href="events.html">Events</a></li>
                    <li><a href="pricing.html">Pricing</a></li> -->

                    <li class="dropdown"><a href="#"><span>Webinar</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Akan Datang</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Sudah Lewat</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <!-- <a href="courses.html" class="get-started-btn">Get Started</a> -->

        </div>
    </header><!-- End Header -->

    <section id="kelas">
        <div class="row mt-5">
            <div class="col-md-12 pt-5 ">
                <h1 class="text-center">Edukraf Kelas</h1>
                <h5 class="text-center mt-3">Gali pengetahuan yang selama ini belum kamu pahami dengan menyimak
                    <br> video penjelasan yang telah kami bagikan.
                </h5>
                <div class="row justify-content-center mt-4">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <form>
                            <div class="search">
                                <i class="fa fa-search"></i>
                                <input type="text" class="form-control" placeholder="Cari">
                                <button class="btn btn-primary">Search</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-3"></div>


                </div>

            </div>
        </div>
    </section>

    <main id="main">

        <!-- ======= Features Section ======= -->
        <section id="features" class="features my-5">
            <div class="container" data-aos="fade-up">

                <div class="row" data-aos="zoom-in" data-aos-delay="100">

                    @foreach ($category as $key => $cat)
                        <div class="col-lg-3 mt-4">
                            <a href="{{ route('category.tampil', $cat->id) }}">
                                <div class="icon-box">
                                    <h3>{{ $cat->title_category }}</h3>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    {{-- <div class="col-lg-3 mt-4">
                        <a href="">
                            <div class="icon-box">
                                <h3>Haki</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 mt-4">
                        <a href="">
                            <div class="icon-box">
                                <h3>Marketing</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 mt-4">
                        <a href="">
                            <div class="icon-box">
                                <h3>Marketing</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 mt-4">
                        <a href="">
                            <div class="icon-box">
                                <h3>Marketing</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 mt-4">
                        <a href="">
                            <div class="icon-box">
                                <h3>Marketing</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 mt-4">
                        <a href="">
                            <div class="icon-box">
                                <h3>Marketing</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 mt-4">
                        <a href="">
                            <div class="icon-box">
                                <h3>Marketing</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 mt-4">
                        <a href="">
                            <div class="icon-box">
                                <h3>Marketing</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 mt-4">
                        <a href="">
                            <div class="icon-box">
                                <h3>Marketing</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 mt-4">
                        <a href="">
                            <div class="icon-box">
                                <h3>Marketing</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 mt-4">
                        <a href="">
                            <div class="icon-box">
                                <h3>Marketing</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 mt-4">
                        <a href="">
                            <div class="icon-box">
                                <h3>Marketing</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 mt-4">
                        <a href="">
                            <div class="icon-box">
                                <h3>Marketing</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 mt-4">
                        <a href="">
                            <div class="icon-box">
                                <h3>Marketing</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 mt-4">
                        <a href="">
                            <div class="icon-box">
                                <h3>Marketing</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 mt-4">
                        <a href="">
                            <div class="icon-box">
                                <h3>Marketing</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 mt-4">
                        <a href="">
                            <div class="icon-box">
                                <h3>Marketing</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 mt-4">
                        <a href="">
                            <div class="icon-box">
                                <h3>Marketing</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 mt-4">
                        <a href="">
                            <div class="icon-box">
                                <h3>Marketing</h3>
                            </div>
                        </a>
                    </div> --}}

                </div>

            </div>
        </section><!-- End Features Section -->



        <!-- ======= Footer ======= -->
        <footer id="footer">

            <div class="container d-md-flex py-4">

                <div class="me-md-auto text-center text-md-start">
                    <div class="copyright">
                        &copy; Copyright <strong><span>Mentor</span></strong>. All Rights Reserved
                    </div>
                    <div class="credits">
                        <!-- All the links in the footer should remain intact. -->
                        <!-- You can delete the links only if you purchased the pro version. -->
                        <!-- Licensing information: https://bootstrapmade.com/license/ -->
                        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
                        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
                </div>
                <div class="social-links text-center text-md-right pt-3 pt-md-0">
                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
            </div>
        </footer><!-- End Footer -->

        <div id="preloader"></div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="{{ asset('frontend/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendor/aos/aos.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendor/php-email-form/validate.js') }}"></script>

        <!-- Template Main JS File -->
        <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

</body>

</html>
