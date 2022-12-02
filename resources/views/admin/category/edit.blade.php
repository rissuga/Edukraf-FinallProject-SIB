@extends('admin.body.index')
@section('content')
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">


            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Kategori</h4>

                    <form class="form-sample" enctype="multipart/form-data" method="post"
                        action="{{ route('category.update') }}">
                        @csrf
                        @method('GET')
                        <p class="card-description">
                            Data Kategori
                        </p>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Judul Webinar</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="title" value="{{ $title }}"
                                            class="form-control" />
                                        <input type="hidden" name="id" value="{{ $id }}">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="exampleTextarea1">Textarea</label>
                            <textarea class="form-control" id="exampleTextarea1" name="desc" rows="4">{{ $desc }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>

                </div>






            </div>
            </form>
        </div>
    </div>
@endsection