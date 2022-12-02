@extends('admin.body.index')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
        <p class="mb-4">Kelola Data admin dengan mudah. Anda bisa melakukan tambah, edit, dan delete, data admin jika
            memiliki akses ke dalam sistem<a target="_blank" href="https://datatables.net">official DataTables
                documentation</a>.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Admin</h6>
                <a href="{{ route('admin.add') }}" style="float: right;" class="btn btn-rounded btn-success mb-4">Add
                    Data</a>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>

                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th width="160px">Action</th>


                            </tr>
                        </thead>

                        <tbody>

                            @foreach ($MyUser as $key => $User)
                                <tr>
                                    <td scope="key"> {{ $key + $MyUser->firstItem() }}</td>
                                    <td>{{ $User->name }}</td>
                                    <td>{{ $User->email }}</td>

                                    <td>
                                        <a href="{{ route('admin.edit', $User->id) }}" class="btn btn-info"
                                            style="display: inline-block; 
                                            margin-left: 0px;">edit</a>
                                        <a href="{{ route('admin.delete', $User->id) }}" id="deleted"
                                            class="btn btn-danger"
                                            style="display: inline-block; 
                                            margin-left: 4px;">delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>

                    {{ $MyUser->links() }}

                </div>

            </div>
        </div>



    </div>
@endsection
