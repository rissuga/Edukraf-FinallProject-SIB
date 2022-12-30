<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="{{ route('home') }}"><img
                    src="{{ asset('frontend/assets/img/logo-edukraf.png') }}" alt=""
                    tyle="box-shadow: 0px 2px 19px rgba(0, 0, 0, 0.11);">
            </a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar  active order-last order-lg-0">
            <ul>
                <li><a href="{{ route('home') }}">Beranda</a></li>
                <li><a href="{{ route('ensiklopedia') }}">Ensiklopedia</a></li>
                <li><a href="{{ route('category') }}">Kelas</a></li>
                <li><a href="{{ route('webinar') }}">Webinar</a></li>
                <li><a href="{{ route('komunitas') }}">Komunitas</a></li>
                <li><a href="{{ route('tentangKami') }}">Tentang Kami</a></li>

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <!-- <a href="courses.html" class="get-started-btn">Get Started</a> -->

    </div>
</header>





{{-- <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="index.html">EDUKRAF</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="active" href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="courses.html">Ensiklopedia</a></li>
                <li><a href="kelas.html">Kelas</a></li>
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
</header> --}}
