@extends('admin.body.index')

@section('content')
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between">
                <h1 class="h3 text-gray-800"><b>Data Admin</b></h1>
                <a href="{{ route('admin.add') }}" style="float: right;" class="btn btn-rounded btn-success mb-4">Tambah
                    Data</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-condensed table-hover">
                        <thead>
                            <tr>

                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th width="160px">Aksi</th>


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
                                            margin-left: 0px;">Edit</a>
                                        <a href="{{ route('admin.delete', $User->id) }}" id="deleted"
                                            class="btn btn-danger"
                                            style="display: inline-block; 
                                            margin-left: 4px;">Hapus</a>
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
