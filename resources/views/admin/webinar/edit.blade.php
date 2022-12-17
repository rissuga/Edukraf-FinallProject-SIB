@extends('admin.body.index')
@section('content')
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">


            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Webinar Edukraf</h4>
                    <form class="form-sample" enctype="multipart/form-data" method="post"
                        action="{{ route('webinar.update') }}">
                        @csrf
                        @method('GET')
                        <p class="card-description">
                            Edit form di bawah untuk melakukan perubahan data webinar.
                        </p>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Judul Webinar</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="judul" value="{{ $judul }}"
                                            class="form-control" />
                                        <input type="hidden" name="id" value="{{ $id }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Tanggal Webinar</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="date" name="date"
                                            value="{{ $date }}" placeholder="dd/mm/yyyy" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Pemateri</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="pemateri" value="{{ $pemateri }}"
                                            class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Link Webinar</label>
                                    <div class="col-sm-9">
                                        <input type="url" name="linkWebinar" value="{{ $linkWebinar }}"
                                            class="form-control" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Jam mulai</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="timeStart" value="{{ $timeStart }}"
                                            class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Jam Selesai</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="timeEnd" value="{{ $timeEnd }}"
                                            class="form-control" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="exampleInputName1" class="col-sm-3 col-form-label">Cover</label>
                                    <div class="col-sm-9">
                                        <br>
                                        @if ($foto)
                                            <img src="{{ asset('storage/' . $foto) }}" alt="foto" class="img-thumbnail"
                                                style="width: 80px; height:80px;">
                                        @else
                                            <span class="badge badge-danger"> Belum ada foto </span>
                                        @endif
                                        <br>
                                        <input class="form-control" type="file" name="foto" accept="image/*"
                                            placeholder="Upload cover">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Record</label>
                                    <div class="col-sm-9">
                                        <input type="url" name="record" value="{{ $record }}"
                                            class="form-control" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleTextarea1">Textarea</label>
                            <textarea class="form-control" id="exampleTextarea1" name="desc" rows="4">{{ $desc }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a class="btn btn-light" href="{{ route('webinar.cancel') }}">Cancel</a>

                </div>
                </form>
            </div>
        </div>
    @endsection
