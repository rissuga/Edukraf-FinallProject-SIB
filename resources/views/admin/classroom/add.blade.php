@extends('admin.body.index')
@section('content')
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">


            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Kelas</h4>
                    <form class="form-sample" enctype="multipart/form-data" method="post"
                        action="{{ route('classroom.store') }}">
                        @csrf
                        <p class="card-description">
                            Lengkapi form di bawah untuk menambah data kelas
                        </p>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Judul Kelas</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="title_classroom" class="form-control" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Link kelas</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="link_classroom"
                                            placeholder="Link Kelas" required />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Kategori</label>
                                    <div class="col-sm-9">
                                        <select class="form-control " name="category_id" required>
                                            <option value="">Select One</option>
                                            @foreach ($category as $item)
                                                <option value="{{ $item->id }}">{{ $item->title_category }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Sumber</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="source" class="form-control"
                                            placeholder="youtube channel/pemateri" required />
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="form-group">
                            <label for="exampleTextarea1">Deskripsi</label>
                            <textarea class="form-control" id="exampleTextarea1" name="desc" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Simpan Data</button>
                        <a class="btn btn-light" href="{{ route('classroom.cancel') }}">Batal</a>

                </div>
                </form>
            </div>
        </div>
    @endsection
