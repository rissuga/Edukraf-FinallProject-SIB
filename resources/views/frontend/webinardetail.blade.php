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
                        <img src="/storage/{{ $webinar->cover }}" class="img-fluid" alt="{{ $webinar->title }}">
                        <h3>{{ $webinar->title }}</h3>
                        <p>
                            {{ $webinar->desc }}
                        </p>
                        <div class="course-info d-flex justify-content-between align-items-center">
                            <h5><i class="bx bx-user"></i> Pemateri</h5>
                            <p>{{ $webinar->speaker }}</p>
                        </div>

                        <div class="course-info d-flex justify-content-between align-items-center">
                            <h5><i class="bx bx-calendar"></i> Tanggal, waktu</h5>
                            <p class="mb-2">
                                <i class="bx bx-calendar"></i>&nbsp;{{ tgl_indo($webinar->date) }}
                            </p>

                        </div>

                        @if (strtotime($webinar->date) >= strtotime(gmdate('Y-m-d', time() + 60 * 60 * 7)))
                            <div class="course-info d-flex justify-content-between align-items-center">
                                <h5><i class="bx bx-link"></i> Link pendaftaran</h5>
                                <a href="{{ $webinar->link_webinar }}"
                                    class="btn btn-success btn-sm"style="margin-left: 4px; color:#fff;">Daftar</a>
                            </div>
                        @endif

                        @if ($webinar->link_record != null)
                            <span><a class="btn btn-primary" href="{{ $webinar->link_record }}">Record</a></span>
                        @else
                        @endif


                    </div>
                    <div class="col-lg-4 justify-content-center">
                        <section id="courses" style="margin-top: 0; padding-top:0;" class="courses">
                            <div class="container">
                                <h5 style="font-size: 25px;">Webinar Lainnya</h5>
                                <div class="row">
                                    @foreach ($select as $key => $web)
                                        <div class="col-md-12 align-items-stretch mt-4">
                                            <div class="card card-button h-100"
                                                onclick="window.location='{{ route('webinardetail', $web->id) }}'">
                                                <div class="card-body">
                                                    <img src="/storage/{{ $web->cover }}" class="card-img-top"
                                                        alt="{{ $web->title }}"
                                                        style="height: 300px; object-fit: cover;">

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
                                </div>
                            </div>
                        </section>



                    </div>
                    {{-- <div class="col-lg-4 justify-content-center">
                        <section id="courses" style="margin-top: 0; padding-top:0;" class="courses">
                            <div class="container">
                                <h5 style="font-size: 25px;">Webinar Lainnya</h5>
                                <div class="row">
                                    @foreach ($select as $key => $web)
                                        <div class="col-lg-12 d-flex align-items-stretch mt-3">
                                            <a href="{{ route('webinardetail', $web->id) }}">
                                                <div class="course-item">
                                                    <img src="/storage/{{ $web->cover }}" class="img-fluid"
                                                        alt="{{ $web->title }}">
                                                    <div class="course-content">

                                                        <h3 style="margin-top: 0;">{{ $web->title }}</h3>
                                                        <p>{{ $web->desc }}</p>
                                                        <div
                                                            class="trainer d-flex justify-content-between align-items-center">
                                                            <div class="trainer-rank d-flex align-items-center">
                                                                <i class="bx bx-calendar"></i>&nbsp;{{ $web->date }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </section>
                    </div> --}}
                </div>

            </div>
        </section>

    </main>
    <!-- End Cource Details Section -->
@endsection
