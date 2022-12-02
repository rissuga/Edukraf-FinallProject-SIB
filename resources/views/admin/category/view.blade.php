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
                <a href="{{ route('category.add') }}" style="float: right;" class="btn btn-rounded btn-success mb-4">Add
                    Data</a>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($category as $key => $ctgr)
                                <tr>
                                    <td scope="key">{{ $key + $category->firstItem() }}</td>
                                    <td>{{ $ctgr->title_category }}</td>
                                    <td>{{ $ctgr->desc_category }}</td>

                                    <td>
                                        <a href="{{ route('category.edit', $ctgr->id) }}" class="btn btn-info">edit</a>
                                        <a href="{{ route('category.delete', $ctgr->id) }}" id="deleted"
                                            class="btn btn-danger">delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>

                    {{ $category->links() }}

                </div>

            </div>
        </div>



    </div>
@endsection
