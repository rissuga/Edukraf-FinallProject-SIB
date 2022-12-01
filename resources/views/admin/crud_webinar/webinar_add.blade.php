@extends('admin.body.index')
@section('content')
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">


            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Webinar Edukraf</h4>
                    <form class="form-sample" enctype="multipart/form-data" method="post"
                        action="{{ route('webinar.store') }}">
                        @csrf
                        <p class="card-description">
                            Data Webinar
                        </p>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Judul Webinar</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="judul" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Tanggal Webinar</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="date" name="date"
                                            placeholder="dd/mm/yyyy" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Pemateri</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="pemateri" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Record</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="record" class="form-control" />
                                    </div>
                                </div>
                            </div>

                        </div>

                </div>

                {{-- <div class="form-group">
                <label>Cover upload</label>
                <input type="file" name="img[]" class="file-upload-default">
                <div class="input-group col-xs-12">
                  <input type="file" name="cover" class="form-control file-upload-info" disabled placeholder="Upload Image">
                  <span class="input-group-append">
                    <button class="file-upload-browse btn btn-primary" name="cover" type="submit">Upload</button>
                  </span>
                </div>
              </div> --}}

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputName1">Cover</label>
                            <input class="form-control" type="file" name="foto" accept="image/*"
                                placeholder="Upload cover">
                        </div>

                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleTextarea1">Textarea</label>
                    <textarea class="form-control" id="exampleTextarea1" name="desc" rows="4"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>

            </div>
            </form>
        </div>
    </div>
@endsection
