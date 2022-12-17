@extends('admin.body.index')
@section('content')
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Webinar Edukraf</h4>

                    <div class="col-lg-10" style="padding-bottom: 20px; padding-top=20px;">
                        <p style="text-align: center"> <img src="/storage/{{ $webinar->cover }}" alt="cover" width="300px"
                                style=""></p>

                    </div>
                    <div class="col-lg-10" style="padding-bottom: 20px; padding-top=20px;">
                        <p style="text-align: center; font-weight: bold;"> {{ $webinar->title }}</p>

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <label class="col-sm-4" style="font-weight: bold">Pemateri</label>
                                <div class="col-sm-8">
                                    <p> : {{ $webinar->speaker }}</p>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-6">
                            <div class="row">
                                <label class="col-sm-4" style="font-weight: bold">waktu</label>
                                <div class="col-sm-8">
                                    <p> : {{ $webinar->time_start }} - {{ $webinar->time_end }} </p>
                                </div>
                            </div>

                        </div>

                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <label class="col-sm-4" style="font-weight: bold">Tanggal</label>
                                <div class="col-sm-8">
                                    <p> : {{ $webinar->date }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <label class="col-sm-4" style="font-weight: bold">Status </label>
                                <div class="col-sm-8">
                                    @if (strtotime($webinar->date) >= strtotime(gmdate('Y-m-d', time() + 60 * 60 * 7)))
                                        <span> : AKAN BERLANGSUNG</span>
                                    @else
                                        <span> : SUDAH SELESAI</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <label class="col-sm-4" style="font-weight: bold">Link Webinar</label>
                                <div class="col-sm-8">
                                    <p>: <a href="{{ $webinar->link_webinar }}">{{ $webinar->link_webinar }}</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <label class="col-sm-4" style="font-weight: bold">Record </label>
                                <div class="col-sm-8">
                                    @if ($webinar->link_record != null)
                                        <span> : <a
                                                href="{{ $webinar->link_record }}">{{ $webinar->link_record }}</a></span>
                                    @else
                                        <span>: -</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <label class="col-sm-2" style="font-weight: bold">Deskripsi </label>
                                <div class="col-sm-10">
                                    <p> : {{ $webinar->desc }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
