@extends('admin.body.index')

@section('content')

<div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tambah Data Admin</h4>
            <p class="card-description">
              Tambahkan data admin baru untuk membantu tugasmu.
            </p>

            <form class="forms-sample"  method="post" action="{{route('admin.update', $editData->id)}}">
                @csrf
              <div class="form-group">
                <label for="exampleInputName1">Name</label>
                <input type="text" name="textName" value="{{$editData->name}}" class="form-control" id="exampleInputName1" placeholder="Name">
              </div>

              <div class="form-group">
                <label for="exampleSelectGender">Tipe Pengguna</label>
                  <select class="form-control" name="select" id="exampleSelectGender">
                    <option value="Super Admin" {{($editData->UserType=="Super Admin"? "selected":"")}}>Super Admin</option>
                    <option value="Admin" {{($editData->UserType=="Admin"? "selected":"")}} >Admin</option>
                  </select>
                </div>

              <div class="form-group">
                <label for="exampleInputEmail3">Email address</label>
                <input type="email" name="email" value="{{$editData->email}}" class="form-control" id="exampleInputEmail3" placeholder="Email">
              </div>

              {{-- <div class="form-group">
                <label for="exampleInputPassword4">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
              </div> --}}
             
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <button class="btn btn-light">Cancel</button>
            </form>

          </div>
        </div>
      </div> 
      <!-- Basic form elements end-->
    
@endsection