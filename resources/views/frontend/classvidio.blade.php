@extends('frontend.body.index2')
@section('content')
    <section id="kelas">
        <div class="row mt-5">
            <div class="col-md-12 pt-5 ">
                <h1 class="text-center">{{ $category->title_category ?? 'None' }}</h1>
                {{-- <h1 class="text-center">{{ $category->title_category ?? 'None' }}</h1> --}}
                <h5 class="text-center mt-3">{{ $category->desc_category ?? 'None' }}
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
        <section id="courses" class="courses">
            <div class="container" data-aos="fade-up">

                <div class="row" data-aos="zoom-in" data-aos-delay="100">

                    @foreach ($class as $key => $clsrm)
                        <div class="col-lg-4 d-flex align-items-stretch mt-4">
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
                <div class="row mt-5">{{ $class->links('vendor.pagination.bootstrap-5') }}</div>

            </div>
        </section>
    </main>
    <!-- End Courses Section -->
@endsection
