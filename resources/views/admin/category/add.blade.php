@extends('admin.body.index')
@section('content')
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">


            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Kategori</h4>

                    @if (session('msg'))
                        {{ session('msg') }}
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form class="form-sample" method="post" action="{{ route('category.store') }}">
                        @csrf
                        <p class="card-description">
                            Data Kategori
                        </p>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Judul Kategori</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="title" class="form-control" />
                                    </div>
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






            </div>
            </form>
        </div>
    </div>
@endsection
