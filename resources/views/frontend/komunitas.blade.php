@extends('frontend.body.index2')
@section('content')
    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about mt-5">
            <div class="container" data-aos="fade-up">

                <div class="row mt-5">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                        <img src="{{ url('frontend/assets/img/hero-1.png') }}" class="img-fluid rounded" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                        <h3>Belajar tekait Ekraf yang asik sekaligus jalin koneksi? <br> Kenapa engga?</h3>
                        <p class="fst-italic">
                            Ayo, segera join komunitas Ekraf! Belajar sekaligus menamah koneksi dengan sesama pelaku
                            Ekraf yang ada di Kabupaten Jember.
                        </p>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="button" class="btn btn-primary">Gabung bersama kami
                                <a href="#" class="wa">
                                    <img src="assets/img/whatsapp.png" alt="">
                                </a>
                            </button>
                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <section></section>
        <section class="pb-2"></section>

    </main><!-- End #main -->
@endsection
