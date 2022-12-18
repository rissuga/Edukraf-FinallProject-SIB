@extends('admin.body.index')
@section('content')
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">


            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Webinar</h4>
                    <form class="form-sample" enctype="multipart/form-data" method="post"
                        action="{{ route('webinar.store') }}">
                        @csrf
                        <p class="card-description">
                            Lengkapi form di bawah untuk menambah data webinar.
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
                                    <label class="col-sm-3 col-form-label">Link Webinar</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="linkWebinar" class="form-control" required />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Jam mulai</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="timeStart" class="form-control"
                                            placeholder="Contoh: 18.00" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Jam Selesai</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="timeEnd" class="form-control"
                                            placeholder="Contoh: 20.00" required />
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="exampleInputName1" class="col-sm-3 col-form-label">Cover</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="file" name="foto" accept="image/*"
                                            placeholder="Pilih Gambar" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Link Record Video</label>
                                    <div class="col-sm-9">
                                        <input type="url" name="record" class="form-control" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleTextarea1">Deskripsi</label>
                            <textarea class="form-control" id="exampleTextarea1" name="desc" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Simpan Data</button>
                        <a class="btn btn-light" href="{{ route('webinar.cancel') }}">Batal</a>

                </div>
                </form>
            </div>
        </div>
    @endsection
