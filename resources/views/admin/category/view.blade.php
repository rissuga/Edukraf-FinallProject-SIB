@extends('admin.body.index')

@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between">
                <h1 class="h3 text-gray-800"><b>Data Kategori Kelas</b></h1>
                <a href="{{ route('category.add') }}" style="float: right;" class="btn btn-rounded btn-success mb-4">Tambah
                    Data</a>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-condensed table-hover ">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th width="140px">Aksi</th>
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
                                            style=" margin-left:5px; ">Edit</a>
                                        <a href="{{ route('category.delete', $ctgr->id) }}" id="deleted"
                                            class="btn btn-danger btn-sm"
                                            style="display: inline-block;
                                                margin-left: 5px;  ">Hapus</a>
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
