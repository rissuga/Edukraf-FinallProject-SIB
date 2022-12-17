@extends('frontend.body.index2')
@section('content')
    <main id="main">
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

        <!-- ======= Cource Details Section ======= -->
        <section id="course-details" class="course-details mt-5">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-8">
                        <!-- <img src="assets/img/course-details.jpg" class="img-fluid" alt=""> -->
                        <div class="row" style="height: 450px;">

                            <iframe class="col-md-12" src="https://www.youtube.com/embed/{{ $class->link_classroom }}"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                        <h3>{{ $class->title_classroom }}</h3>
                        <p>
                            {{ $class->desc_classroom }}
                        </p>
                    </div>
                    <div class="col-lg-4 justify-content-center">
                        <section id="courses" style="margin-top: 0; padding-top:0;" class="courses">
                            <div class="container">
                                <h5 style="font-size: 25px;">Kelas Lainnya</h5>
                                <div class="row" data-aos="zoom-in" data-aos-delay="100">

                                    @foreach ($select as $key => $clsrm)
                                        <div class="col-lg-12 d-flex align-items-stretch mt-3">
                                            <div class="card h-100">
                                                <a href="{{ route('classdetail', $clsrm->id) }}">
                                                    <div class="course-item">
                                                        <img src="https://img.youtube.com/vi/{{ $clsrm->link_classroom }}/0.jpg"
                                                            class="img-fluid" alt="">
                                                        <div class="course-content">

                                                            <h3>{{ $clsrm->title_classroom }}</h3>
                                                            <p> sumber : {{ $clsrm->source }}</p>
                                                            <p>{{ substrwords($clsrm->desc_classroom, 100) }}</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                        </div> <!-- End Course Item-->
                                    @endforeach


                                </div>
                            </div>
                        </section>



                    </div>
                </div>

            </div>
        </section><!-- End Cource Details Section -->



    </main><!-- End #main -->
@endsection
