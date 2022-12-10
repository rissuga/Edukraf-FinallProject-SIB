@extends('frontend.body.index2')
@section('content')
    <section id="kelas">
        <div class="row mt-5">
            <div class="col-md-12 pt-5 ">
                <h1 class="text-center">Edukraf Webinar</h1>
                <h5 class="text-center mt-3">Gali pengetahuan yang selama ini belum kamu pahami dengan menyimak
                    <br> video penjelasan yang telah kami bagikan.
                </h5>

            </div>
        </div>
    </section>


    <main id="main">

        <!-- ======= Courses Section ======= -->
        <section id="courses" class="courses pt-0">
            <div class="container" data-aos="fade-up">
                <div class="row justify-content-center btn-wrap mb-3" style="margin-top: 15px;">
                    <div class="col-md-2 d-grid"><a class="btn-sort" href="#" role="button">Semua</a></div>
                    <div class="col-md-2 d-grid"><a class="btn-sort" href="#" role="button">Akan Datang</a></div>
                    <div class="col-md-2 d-grid"><a class="btn-sort" href="#" role="button">Selesai</a></div>
                </div>

                <div class="row row-cols-1 row-cols-md-3 g-4" data-aos="zoom-in" data-aos-delay="100">
                    @foreach ($webinar as $key => $web)
                        <div class="col align-items-stretch mt-4">
                            <div class="card h-100">
                                <a href="{{ route('webinardetail', $web->id) }}">
                                    <div class="course-item">
                                        <img src="/storage/{{ $web->cover }}" class="card-img-top"
                                            alt="{{ $web->title }}">
                                        <div class="course-content">

                                            <h3>{{ $web->title }}</h3>
                                            <p>{{ $web->desc }}</p>
                                            <div class=" trainer d-flex justify-content-between align-items-center">
                                                <div class="trainer-rank d-flex align-items-center">
                                                    <i class="bx bx-calendar"></i>&nbsp;{{ $web->date }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        {{-- <div class="col">
                        <div class="card h-100">
                            <img src="/storage/{{ $web->cover }}" class="card-img-top" alt="{{ $web->title }}">
                            <div class="card-body ">
                                <h3 class="card-title mt-auto">{{ $web->title }}</h3>
                                <p class="card-text">{{ $web->desc }}</p>
                            </div>

                        </div>
                    </div> --}}
                    @endforeach

                </div>

            </div>
        </section><!-- End Courses Section -->
    </main>
@endsection
