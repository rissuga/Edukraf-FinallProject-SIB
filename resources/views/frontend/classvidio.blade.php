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
    @include('frontend.body.header')
    <!-- End Header -->

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

        <!-- ======= Courses Section ======= -->
        <section id="courses" class="courses">
            <div class="container" data-aos="fade-up">

                <div class="row" data-aos="zoom-in" data-aos-delay="100">

                    @foreach ($tampil as $key => $clsrm)
                        <div class="col-lg-4 d-flex align-items-stretch mt-4">
                            <div class="course-item">
                                <img src="https://img.youtube.com/vi/{{ $clsrm->link_classroom }}/0.jpg"
                                    class="img-fluid" alt="">
                                <div class="course-content">

                                    <h3><a href="course-details.html">{{ $clsrm->title_classroom }}</a></h3>
                                    <p>{{ $clsrm->desc_classroom }}</p>
                                </div>
                            </div>
                        </div> <!-- End Course Item-->
                    @endforeach
                    {{-- <div class="col-lg-4 d-flex align-items-stretch mt-4">
                        <div class="course-item">
                            <div class="row " style="height: 13rem;">
                                <iframe width="560" height="200" src="https://www.youtube.com/embed/RuO4VjJe2cA"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                            <div class="course-content">

                                <h3><a href="course-details.html">Copywriting</a></h3>
                                <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae
                                    dolores dolorem tempore.</p>
                            </div>
                        </div>
                    </div> <!-- End Course Item-->
                    <div class="col-lg-4 d-flex align-items-stretch mt-4">
                        <div class="course-item">
                            <div class="row " style="height: 13rem;">
                                <iframe width="560" height="200" src="https://www.youtube.com/embed/RuO4VjJe2cA"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                            <div class="course-content">

                                <h3><a href="course-details.html">Copywriting</a></h3>
                                <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae
                                    dolores dolorem tempore.</p>
                            </div>
                        </div>
                    </div> <!-- End Course Item-->
                    <div class="col-lg-4 d-flex align-items-stretch mt-4">
                        <div class="course-item">
                            <div class="row " style="height: 13rem;">
                                <iframe width="560" height="200" src="https://www.youtube.com/embed/RuO4VjJe2cA"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                            <div class="course-content">

                                <h3><a href="course-details.html">Copywriting</a></h3>
                                <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae
                                    dolores dolorem tempore.</p>
                            </div>
                        </div>
                    </div> <!-- End Course Item--> --}}

                </div>

            </div>
        </section><!-- End Courses Section -->



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
