@extends('frontend.body.index2')
@section('content')
    <main id="main">

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
                            <p>Walter White</p>
                        </div>

                        <div class="course-info d-flex justify-content-between align-items-center">
                            <h5><i class="bx bx-calendar"></i> Tanggal, waktu</h5>
                            <p>{{ $webinar->date }}</p>
                        </div>

                        <div class="course-info d-flex justify-content-between align-items-center">
                            <h5><i class="bx bx-link"></i> Link pendaftaran</h5>
                            <p>$165</p>
                        </div>

                        <div class="course-info d-flex justify-content-between align-items-center">
                            <h5><i class="bx bx-video"></i> Link record</h5>
                            <p><a href="{{ $webinar->link_record }}">{{ $webinar->link_record }}</a></p>
                        </div>
                    </div>
                    <div class="col-lg-4 justify-content-center">
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



                    </div>
                </div>

            </div>
        </section>
    </main>
    <!-- End Cource Details Section -->
@endsection
