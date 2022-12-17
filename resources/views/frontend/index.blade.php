@extends('frontend.body.index2')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-content-center align-items-center">
        <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
            <h1>Temukan</h1>
            <h1>Wawasan Kreatifmu</h1>
            <div class="col-md-6">
                <p>Ekonomi kreatif merupakan ekosistem yang memiliki hubungan saling ketergantungan antara
                    rantai nilai kreatif <i> (creative value chain)</i>, ligkungan pengembangan nurturance environment,
                    pasar
                    <i>(market)</i> dan pengarsipan <i>(archiving).</i>
                </p>
            </div>

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
                <div class="section-title" style="text-align: center">
                    {{-- <h2>Testimonials</h2> --}}
                    <p>Apa Itu Edukraf?</p>

                </div>
                <div class="row text-center">
                    <p>Edukraf adalah website edukasi dan informasi untuk pelaku ekonomi kreatif. Dikembangkan dengan
                        kerjasama antara Kelompok BWI-Jember 2 SIB SEAL dan Dinas Pariwisata Kabupaten Jember. Edukraf ini
                        berisi informasi seputar ekraf dalam berbagai fitur seperti kelas, webinar, dan komunitas untuk
                        pelaku ekraf.</p>
                </div>

            </div>
        </section>
        <!-- End Apa itu Edukraf Section -->

        <!-- ======= Fitur Webinar Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="fade-up">

                <div class="section-title" style="text-align: center">
                    {{-- <h2>Testimonials</h2> --}}
                    <p>Jelajahi Webinar</p>
                    <h6 style="color:#37423b; font-weight:500; ">Berbagai macam pilihan webinar untuk tingakatkan skill kamu
                    </h6>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        @foreach ($webinar as $key => $web)
                            <div class="swiper-slide">
                                <div class="testimonial-wrap">
                                    {{-- <a href="{{ route('webinar') }}"> --}}
                                    <div class="testimonial-item">
                                        <img src="/storage/{{ $web->cover }}" class="card-img-top"
                                            alt="{{ $web->title }}" style="height: 300px; object-fit: cover;">
                                        <div class="course-content">
                                            <h3>{{ $web->title }}</h3>
                                            <p class="mb-2">
                                                <i class="bx bx-calendar"></i>&nbsp;{{ tgl_indo($web->date) }}
                                            </p>
                                            @if (strtotime($web->date) >= strtotime(gmdate('Y-m-d', time() + 60 * 60 * 7)))
                                                <span class="badge bg-warning text-dark mb-3">akan datang</span>
                                            @else
                                                <span class="badge bg-success text-light mb-3">selesai</span>
                                            @endif
                                            <p>{{ substrwords($web->desc, 100) }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section>
        <!-- End Fitur Webinar Section -->

        <!-- ======= Keuntungan Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title" style="text-align: center">
                    {{-- <h2>Testimonials</h2> --}}
                    <p>Keuntungan</p>
                </div>
                <div class="row mt-4">
                    <div class="col-md-4 d-flex justify-content-center ">
                        <div class="card text-center py-3" style="width: 18rem;">
                            <img src="{{ url('/frontend/assets/img/undraw_connection_re_lcud.svg') }}"
                                style="max-height: 10rem;" class="card-img-top py-4" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Relasi</h5>
                                <p class="card-text">Gabung komunitas edukraf jember untuk berjejaring dengan sesama Ekraf
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex justify-content-center">
                        <div class="card text-center py-3" style="width: 18rem;">
                            <img src=" {{ url('/frontend/assets/img/undraw_investment_data_re_sh9x.svg') }}"
                                style="max-height: 10rem;" class="card-img-top py-4" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Akses Materi On Demand</h5>
                                <p class="card-text">Materi dapat diakses kapan dan dari mana saja
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex justify-content-center">
                        <div class="card text-center py-3" style="width: 18rem;">
                            <img src="{{ url('/frontend/assets/img/undraw_shared_workspace_re_3gsu.svg') }}"
                                style="max-height: 10rem;" class="card-img-top py-4 md-5" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Ilmu Gratis</h5>
                                <p class="card-text">Tingkatkan skilmu secara gratis di Edukraf Jember</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Keuntungan Section -->



    </main><!-- End #main -->
@endsection
