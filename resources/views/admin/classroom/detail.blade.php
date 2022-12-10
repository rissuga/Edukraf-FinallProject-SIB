@extends('admin.body.index')
@section('content')
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Detail Page '{{ $classroom->title_classroom }}'</h4>

                    {{-- <div class="col-lg-9" style="padding-bottom: 20px; padding-top=20px;">
                        <p style="text-align: center"> {{ $classroom->title_classroom }}</p>
                    </div> --}}

                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <label class="col-sm-4" style="font-weight: bold">Judul Kelas</label>
                                <div class="col-sm-8">
                                    <p> : {{ $classroom->title_classroom }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <label class="col-sm-4" style="font-weight: bold">Kategori</label>
                                <div class="col-sm-8">
                                    <p> : {{ $classroom->category['title_category'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <label class="col-sm-2" style="font-weight: bold">Link Kelas </label>
                                <div class="col-sm-7">
                                    <p> : {{ $classroom->link_classroom }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <label class="col-sm-2" style="font-weight: bold">Deskripsi </label>
                                <div class="col-sm-7">
                                    <p> : {{ $classroom->desc_classroom }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
