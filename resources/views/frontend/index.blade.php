    <!-- Vendor CSS Files -->
    <link href="{{ asset('frontend/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/aos/aos.css" rel="stylesheet') }}">
    <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    @extends('frontend.body.index2')
    @section('content')
        <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex justify-content-center align-items-center">
            <div class="container position-relative text-center" data-aos="zoom-in" data-aos-delay="100">
                <h1>Temukan</h1>
                <h1>Wawasan Kreatifmu</h1>
                <p>Ikuti berbagai macam kelas dan webinar untuk meningkatkan Keahlianmu!</p>
            </div>
        </section><!-- End Hero -->

        @php
            function substrwords($text, $maxchar, $end = '...')
            {
                if (strlen($text) > $maxchar || $text == '') {
                    $words = preg_split('/\s/', $text);
                    $output = '';
                    $i = 0;
                    while (1) {
                        $length = strlen($output) + strlen($words[$i]);
                        if ($length > $maxchar) {
                            break;
                        } else {
                            $output .= ' ' . $words[$i];
                            ++$i;
                        }
                    }
                    $output .= $end;
                } else {
                    $output = $text;
                }
                return $output;
            }
            
            function tgl_indo($tanggal)
            {
                $bulan = [
                    1 => 'Januari',
                    'Februari',
                    'Maret',
                    'April',
                    'Mei',
                    'Juni',
                    'Juli',
                    'Agustus',
                    'September',
                    'Oktober',
                    'November',
                    'Desember',
                ];
                $pecahkan = explode('-', $tanggal);
            
                // variabel pecahkan 0 = tahun
                // variabel pecahkan 1 = bulan
                // variabel pecahkan 2 = tanggal
            
                return $pecahkan[2] . ' ' . $bulan[(int) $pecahkan[1]] . ' ' . $pecahkan[0];
            }
        @endphp

        <main id="main">


            <!-- ======= Apa itu Edukraf Section ======= -->
            <section id="about" class="about">
                <div class="container" data-aos="fade-up">

                    <div class="row">
                        <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                            <img src="{{ asset('frontend/assets/img/subsektor.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content mt-5">
                            <div>
                                <h3>Apa Itu Edukraf?</h3>
                                <p class="">
                                    Edukraf adalah website edukasi dan informasi untuk pelaku ekonomi kreatif.
                                    Edukraf ini berisi informasi seputar ekraf dalam berbagai fitur seperti kelas, webinar,
                                    dan
                                    komunitas
                                    untuk pelaku ekraf. Di Edukraf kamu bisa menemukan
                                </p>
                                <ul>
                                    <li><i class="bi bi-check-circle"></i> Berbagai macam webinar ekonomi kreatif</li>
                                    <li><i class="bi bi-check-circle"></i> Beragam kelas yang terdiri dari subsektor ekonomi
                                        kreatif</li>
                                    <li><i class="bi bi-check-circle"></i> Komunitas para pelaku ekonomi kreatif Jember
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>

                </div>
            </section>
            <!-- End Apa itu Edukraf Section -->

            <!-- ======= Why Us Section ======= -->
            <section id="why-us" class="why-us bg-light">
                <div class="container" data-aos="fade-up">

                    <div class="row">
                        <div class="col-lg-4 d-flex align-items-center">
                            <div class="content" style="border-radius: 20px">
                                <h3>Kenapa memilih Edukraf?</h3>
                                <p class="mb-0">
                                    Lebih mudah menemukan informasi dan pengetahuan apapun terkait ekonomi kreatif, melalui
                                    fitur yang kami sediakan di Edukraf
                                </p>

                            </div>
                        </div>
                        <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon-boxes d-flex flex-column justify-content-center">
                                <div class="row">
                                    <div class="col-xl-4 d-flex align-items-stretch">
                                        <div class="icon-box mt-4 mt-xl-0">
                                            <i class='bx bxs-happy'></i>
                                            {{-- <img src="{{ asset('frontend/assets/img/relation.svg') }}" alt=""> --}}
                                            <h4>Relasi</h4>
                                            <p>Gabung komunitas edukraf jember untuk berjejaring dengan sesama Ekraf</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 d-flex align-items-stretch">
                                        <div class="icon-box mt-4 mt-xl-0">
                                            <i class='bx bx-universal-access'></i>
                                            {{-- <i class="bx bx-cube-alt"></i> --}}
                                            {{-- <img src="{{ asset('frontend/assets/img/ondemand.svg') }}" alt=""> --}}
                                            <h4>Akses Materi On Demand</h4>
                                            <p>Materi dapat diakses kapan dan dari mana saja

                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 d-flex align-items-stretch">
                                        <div class="icon-box mt-4 mt-xl-0">
                                            <i class='bx bxs-happy-heart-eyes'></i>
                                            {{-- <img src="{{ url('/frontend/assets/img/undraw_shared_workspace_re_3gsu.svg') }}"> --}}

                                            <h4>Ilmu Gratis</h4>
                                            <p>
                                                Tingkatkan skilmu secara gratis di Edukraf Jember
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End .content-->
                        </div>
                    </div>

                </div>
            </section>
            <!-- End Why Us Section -->


            <!-- ======= Fitur Webinar Section ======= -->
            <section id="testimonials" class="testimonials my-5">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <h2>Webinar</h2>
                        <p>Webinar Pilihan</p>

                    </div>
                    <div>
                        <div class="row">
                            @foreach ($webinar as $key => $web)
                                <div class="col-md-4 align-items-stretch mt-4">
                                    <div class="card card-button h-100"
                                        onclick="window.location='{{ route('webinardetail', $web->id) }}'">
                                        <div class="card-body">
                                            <img src="/storage/{{ $web->cover }}" class="card-img-top"
                                                alt="{{ $web->title }}" style="height: 300px; object-fit: cover;">

                                            <div class="mt-3">
                                                @if (strtotime($web->date) >= strtotime(gmdate('Y-m-d', time() + 60 * 60 * 7)))
                                                    <span class="badge bg-warning text-dark mb-2">Akan Datang</span>
                                                @else
                                                    <span class="badge bg-success text-light mb-2">Selesai</span>
                                                @endif

                                                <h5><b>{{ $web->title }}</b></h5>
                                                <small class="mb-2">
                                                    <i class="bx bx-calendar"></i>&nbsp;{{ tgl_indo($web->date) }}
                                                </small>

                                                <p class="mt-3 text-grey">{{ substrwords($web->desc, 100) }}</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <div class="col-md-4 align-items-stretch mt-4">
                                <div class="card h-100">
                                    <div class="card-body d-flex align-items-center">
                                        <div class="mt-3">
                                            <h5 class="mb-3">Dan masih banyak lagi</h5>
                                            <a href="{{ route('webinar') }}" class="btn btn-outline-secondary btn-lg">Lihat
                                                semuanya →</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- End Fitur Webinar Section -->

            <!-- ======= Kategori Kelas Section ======= -->
            <section id="features" class="features my-5 bg-light">
                <div class="container py-5 mt-3" data-aos="fade-up">
                    <div class="section-title" style="padding-top: 10px">
                        <h2>Kategori Kelas</h2>
                        <p>Daftar Kategori Kelas</p>
                    </div>
                    <div class="row" data-aos="zoom-in" data-aos-delay="100">
                        @foreach ($category as $key => $cat)
                            <div class="col-lg-3 mt-4">
                                <a href="{{ route('class', $cat->id) }}">
                                    <div class="card card-button h-100">
                                        <div class="card-body p-4">
                                            <i class='bx bxs-book mb-3 text-secondary' style="font-size: 30px"></i>
                                            <h5><b>{{ $cat->title_category }}</b></h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <!-- End Kategori Kelas Section -->

            <!-- ======= Daftar Kelas Section ======= -->
            <section id="testimonials" class="testimonials my-5">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <h2>Kelas Edukraf</h2>
                        <p>Jelajahi Kelas</p>

                    </div>
                    <div>
                        <div class="row">
                            @foreach ($class as $key => $clsrm)
                                <div class="col-md-4 align-items-stretch mt-4">
                                    <div class="card card-button h-100"
                                        onclick="window.location='{{ route('classdetail', $clsrm->id) }}'">
                                        <div class="card-body">
                                            <img src="https://img.youtube.com/vi/{{ $clsrm->link_classroom }}/0.jpg"
                                                class="img-fluid" alt=""
                                                style="height: 300px; object-fit: cover;">
                                            <div class="mt-3">
                                                <h5><b>{{ $clsrm->title_classroom }}</b></h5>
                                                <small class="mb-2">
                                                    <i class='bx bxs-book mb-3 text-secondary'></i>&nbsp;
                                                    {{ $clsrm->category['title_category'] }}
                                                </small> <br>
                                                <small class="mb-2">
                                                    <i class="bx bxl-youtube"></i>&nbsp; sumber : {{ $clsrm->source }}
                                                </small>

                                                <p class="mt-3 text-grey">{{ substrwords($clsrm->desc_classroom, 100) }}
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <div class="col-md-4 align-items-stretch mt-4">
                                <div class="card h-100">
                                    <div class="card-body d-flex align-items-center">
                                        <div class="mt-3">
                                            <h5 class="mb-3">Dan masih banyak lagi</h5>
                                            <a href="{{ route('webinar') }}"
                                                class="btn btn-outline-secondary btn-lg">Lihat
                                                semuanya →</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- End Daftar Kelas Section -->
        </main><!-- End #main -->
    @endsection
