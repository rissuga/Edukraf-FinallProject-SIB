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
                <h6 class="m-0 font-weight-bold text-primary">Data Kategori Kelas Edukraf</h6>
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
                                <th width="140px">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($category as $key => $ctgr)
                                <tr>
                                    <td scope="key">{{ $key + $category->firstItem() }}</td>
                                    <td>{{ $ctgr->title_category }}</td>
                                    <td>{{ $ctgr->desc_category }}</td>
                                    {{-- <td>
                                        @foreach ($ctgr->classroom as $classrooms)
                                            -{{ $classrooms['title_classroom'] }} <br>
                                        @endforeach
                                    </td> --}}

                                    <td>
                                        <a href="{{ route('category.edit', $ctgr->id) }}" class="btn btn-info btn-sm"
                                            style="display:
                                            inline-block; margin-left:5px; ">edit</a>
                                        <a href="{{ route('category.delete', $ctgr->id) }}" id="deleted"
                                            class="btn btn-danger btn-sm"
                                            style="display: inline-block;
                                                margin-left: 5px;  ">delete</a>
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
