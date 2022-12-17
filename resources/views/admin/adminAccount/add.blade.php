@extends('admin.body.index')

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Data Admin</h4>
                <p class="card-description">
                    Lengkapi form di bawah untuk menambah data admin.
                </p>

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

                <form class="forms-sample" method="post" action="{{ route('admin.store') }}">
                    @csrf
                    <div class="form-group">


                        <label for="exampleInputName1">Name</label>
                        <input type="text" name="textName" class="form-control" id="exampleInputName1"
                            placeholder="Name">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail3">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail3"
                            placeholder="Email">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword4">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password" id="myInput">
                        <input type="checkbox" onclick="myFunction()">Show Password
                    </div>

                    <script>
                        function myFunction() {
                            var x = document.getElementById("myInput");
                            if (x.type === "password") {
                                x.type = "text";
                            } else {
                                x.type = "password";
                            }
                        }
                    </script>

                    <a type="submit" class="btn btn-primary mr-2">Submit</a>
                    <a class="btn btn-light" href="{{ route('admin.cancel') }}">Cancel</a>
                </form>

            </div>
        </div>
    </div>
    <!-- Basic form elements end-->
@endsection
