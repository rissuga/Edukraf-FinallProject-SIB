@extends('frontend.body.index2')
@section('content')
    <section id="kelas">
        <div class="row mt-5">
            <div class="col-md-12 pt-5 ">
                <h1 class="text-center">{{ $category->title_category ?? 'None' }}</h1>
                {{-- <h1 class="text-center">{{ $category->title_category ?? 'None' }}</h1> --}}
                {{-- <h5 class="text-center mt-3">{{ $category->desc_category ?? 'None' }} --}}
                </h5>
            </div>
        </div>
    </section>

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
        @endphp

        <!-- ======= Courses Section ======= -->
        {{-- <section id="courses" class="courses">
            <div class="container" data-aos="fade-up">

                <div class="row" data-aos="zoom-in" data-aos-delay="100">

                    @foreach ($class as $key => $clsrm)
                        <div class="col-md-4 align-items-stretch mt-4">
                            <div class="card card-button h-100"
                                onclick="window.location='{{ route('classdetail', $clsrm->id) }}'">
                                <div class="card-body">
                                    <img src="https://img.youtube.com/vi/{{ $clsrm->link_classroom }}/0.jpg"
                                        class="img-fluid" alt="" style="height: 300px; object-fit: cover;">
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

                </div>
                <div class="row mt-5">{{ $class->links('vendor.pagination.bootstrap-5') }}</div>

            </div>
        </section> --}}

        <section id="courses" class="courses pt-5">
            <div class="container" data-aos="fade-up">
                <div class="row row-cols-1 row-cols-md-3 g-4" data-aos="zoom-in" data-aos-delay="100">
                    @foreach ($class as $key => $clsrm)
                        <div class="col-md-4 align-items-stretch mt-4">
                            <div class="card card-button h-100"
                                onclick="window.location='{{ route('classdetail', $clsrm->id) }}'">
                                <div class="card-body">
                                    <img src="https://img.youtube.com/vi/{{ $clsrm->link_classroom }}/0.jpg"
                                        class="img-fluid" alt="" style="height: 300px; object-fit: cover;">

                                    <div class="mt-3">
                                        {{-- @if (strtotime($web->date) >= strtotime(gmdate('Y-m-d', time() + 60 * 60 * 7)))
                                            <span class="badge bg-warning text-dark mb-2">Akan Datang</span>
                                        @else
                                            <span class="badge bg-success text-light mb-2">Selesai</span>
                                        @endif --}}

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

                </div>
                <div class="row mt-5">{{ $class->links('vendor.pagination.bootstrap-5') }}</div>

            </div>

        </section>
    </main>
    <!-- End Courses Section -->
@endsection
