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
                                        <input type="text" name="judul" class="form-control" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Tanggal Webinar</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="date" name="date" placeholder="dd/mm/yyyy"
                                            required />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Pemateri</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="pemateri" class="form-control" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Record</label>
                                    <div class="col-sm-9">
                                        <input type="url" name="record" class="form-control" />
                                    </div>
                                </div>
                            </div>

                        </div>



                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputName1">Cover</label>
                                    <input class="form-control" type="file" name="foto" accept="image/*"
                                        placeholder="Upload cover" required>
                                </div>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleTextarea1">Textarea</label>
                            <textarea class="form-control" id="exampleTextarea1" name="desc" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a class="btn btn-light" href="{{ route('webinar.cancel') }}">Cancel</a>

                </div>
                </form>
            </div>
        </div>
    @endsection
