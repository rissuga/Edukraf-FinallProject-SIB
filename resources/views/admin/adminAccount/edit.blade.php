@extends('admin.body.index')

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Data Admin</h4>
                <p class="card-description">
                    Edit form di bawah untuk melakukan perubahan data admin.
                </p>

                <form class="forms-sample" method="post" action="{{ route('admin.update', $editData->id) }}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" name="textName" value="{{ $editData->name }}" class="form-control"
                            id="exampleInputName1" placeholder="Name">
                    </div>



                    <div class="form-group">
                        <label for="exampleInputEmail3">Email address</label>
                        <input type="email" name="email" value="{{ $editData->email }}" class="form-control"
                            id="exampleInputEmail3" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword4">Password Baru</label>
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


                    <a type="submit" class="btn btn-primary mr-2">Simpan Data</a>
                    <a class="btn btn-light" href="{{ route('admin.cancel') }}">Batal</a>
                </form>

            </div>
        </div>
    </div>
    <!-- Basic form elements end-->
@endsection
