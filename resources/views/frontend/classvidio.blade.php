@extends('frontend.body.index2')
@section('content')
    <section id="kelas">
        <div class="row mt-5">
            <div class="col-md-12 pt-5 ">
                <h1 class="text-center">Edukraf Kelas</h1>
                <h5 class="text-center mt-3">Gali pengetahuan yang selama ini belum kamu pahami dengan menyimak
                    <br> video penjelasan yang telah kami bagikan.
                </h5>
                <div class="row justify-content-center mt-4">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <form>
                            <div class="search">
                                <i class="fa fa-search"></i>
                                <input type="text" class="form-control" placeholder="Cari">
                                <button class="btn btn-primary">Search</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-3"></div>


                </div>

            </div>
        </div>
    </section>

    <main id="main">

        <!-- ======= Courses Section ======= -->
        <section id="courses" class="courses">
            <div class="container" data-aos="fade-up">

                <div class="row" data-aos="zoom-in" data-aos-delay="100">

                    @foreach ($class as $key => $clsrm)
                        <div class="col-lg-4 d-flex align-items-stretch mt-4">
                            <a href="{{ route('classdetail', $clsrm->id) }}">
                                <div class="course-item">
                                    <img src="https://img.youtube.com/vi/{{ $clsrm->link_classroom }}/0.jpg"
                                        class="img-fluid" alt="">
                                    <div class="course-content">

                                        <h3><a href="course-details.html">{{ $clsrm->title_classroom }}</a></h3>
                                        <p>{{ $clsrm->desc_classroom }}</p>
                                    </div>
                                </div>
                        </div> <!-- End Course Item-->
                    @endforeach
                    {{-- <div class="col-lg-4 d-flex align-items-stretch mt-4">
                    <div class="course-item">
                        <div class="row " style="height: 13rem;">
                            <iframe width="560" height="200" src="https://www.youtube.com/embed/RuO4VjJe2cA"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                        <div class="course-content">

                            <h3><a href="course-details.html">Copywriting</a></h3>
                            <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae
                                dolores dolorem tempore.</p>
                        </div>
                    </div>
                </div> <!-- End Course Item-->
                <div class="col-lg-4 d-flex align-items-stretch mt-4">
                    <div class="course-item">
                        <div class="row " style="height: 13rem;">
                            <iframe width="560" height="200" src="https://www.youtube.com/embed/RuO4VjJe2cA"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                        <div class="course-content">

                            <h3><a href="course-details.html">Copywriting</a></h3>
                            <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae
                                dolores dolorem tempore.</p>
                        </div>
                    </div>
                </div> <!-- End Course Item-->
                <div class="col-lg-4 d-flex align-items-stretch mt-4">
                    <div class="course-item">
                        <div class="row " style="height: 13rem;">
                            <iframe width="560" height="200" src="https://www.youtube.com/embed/RuO4VjJe2cA"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                        <div class="course-content">

                            <h3><a href="course-details.html">Copywriting</a></h3>
                            <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae
                                dolores dolorem tempore.</p>
                        </div>
                    </div>
                </div> <!-- End Course Item--> --}}

                </div>

            </div>
        </section>
    </main>
    <!-- End Courses Section -->
@endsection
