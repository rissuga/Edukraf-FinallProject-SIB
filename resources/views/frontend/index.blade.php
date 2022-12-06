<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>EDUKRAF - Home</title>
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
    <link href="{{ asset('frontend/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/aos/aos.css" rel="stylesheet') }}">
    <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Mentor - v4.9.1
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    @include('frontend.body.header')
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-content-center align-items-center">
        <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
            <h1>Belajar Ekraf yang Asik<br>Bersama Kami</h1>
            <h2>Website ini didedikasikan untuk pelaku ekraf untuk</h2>
            <h2>Website ini didedikasikan untuk pelaku ekraf untuk menambah wawasan dalam mengembangkan usahanya</h2>
            <a href="courses.html" class="btn-get-started">Read More</a>
        </div>
    </section><!-- End Hero -->

    <main id="main">


        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row text-center">
                    <h3>Apa itu Edukraf?</h3>
                </div>
                <div class="row text-center">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui ex deleniti blanditiis iste maxime
                        asperiores
                        eveniet eligendi! Ex, officiis cupiditate quae dolor explicabo atque necessitatibus modi, quod
                        tempore iste
                        vero.</p>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row text-center">
                    <h3>Keuntungan</h3>
                </div>
                <div class="row mt-4">
                    <div class="col-md-4 d-flex justify-content-center ">
                        <div class="card text-center py-3" style="width: 18rem;">
                            <img src="assets/img/undraw_connection_re_lcud.svg" style="max-height: 10rem;"
                                class="card-img-top py-4" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Relasi</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the
                                    card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex justify-content-center">
                        <div class="card text-center py-3" style="width: 18rem;">
                            <img src="assets/img/undraw_investment_data_re_sh9x.svg" style="max-height: 10rem;"
                                class="card-img-top py-4" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Peningkatan Profit</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the
                                    card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex justify-content-center">
                        <div class="card text-center py-3" style="width: 18rem;">
                            <img src="assets/img/undraw_shared_workspace_re_3gsu.svg" style="max-height: 10rem;"
                                class="card-img-top py-4 md-5" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Webinar Gratis</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the
                                    card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->



    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('frontend.body.footer')
    <!-- End Footer -->

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
