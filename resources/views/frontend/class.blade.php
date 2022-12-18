@extends('frontend.body.index2')
@section('content')
    <section id="kelas">
        <div class="row mt-5">
            <div class="col-md-12 pt-5 ">
                <h1 class="text-center">Edukraf Kelas</h1>
                <h5 class="text-center mt-3">Gali pengetahuan yang selama ini belum kamu pahami dengan menyimak
                    <br> video penjelasan yang telah kami bagikan.
                </h5>

            </div>
        </div>
    </section>

    <main id="main">

        <!-- ======= Features Section ======= -->
        <section id="features" class="features my-5">
            <div class="container" data-aos="fade-up">

                <h5>Pilihan Kelas</h5>

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
        </section><!-- End Features Section -->
    </main>
@endsection
