@extends('admin.body.index')
@section('content')
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Kelas Edukraf</h4>
                    <form class="form-sample" enctype="multipart/form-data" method="post"
                        action="{{ route('classroom.update', $classroom->id) }}">
                        @csrf
                        @method('PUT')
                        <p class="card-description">
                            Edit data kelas
                        </p>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Judul Kelas</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="title_classroom"
                                            value="{{ $classroom->title_classroom }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Link kelas</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="url" name="link_classroom"
                                            value="{{ $classroom->link_classroom }}" placeholder="Link Kelas" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Kategori</label>
                                    <div class="col-sm-9">
                                        <select class="form-control " name="category_id">
                                            <option value="{{ $classroom->category->id }}">
                                                {{ $classroom->category->title_category }}</option>
                                            @foreach ($category as $item)
                                                <option value="{{ $item->id }}">{{ $item->title_category }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleTextarea1">Textarea</label>
                            <textarea class="form-control" id="exampleTextarea1" name="desc" rows="4">{{ $classroom->desc_classroom }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>

                </div>
                </form>
            </div>
        </div>
    @endsection
