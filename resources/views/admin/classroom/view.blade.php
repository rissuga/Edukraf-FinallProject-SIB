@extends('admin.body.index')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official
                DataTables documentation</a>.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Kelas Edukraf</h6>
                <a href="{{ route('classroom.add') }}" style="float: right;" class="btn btn-rounded btn-success mb-4">Add
                    Data</a>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kategori</th>
                                <th>Judul</th>
                                <th>Link</th>
                                <th>Deskripsi</th>
                                <th width="170px">Action</th>

                            </tr>
                        </thead>

                        <tbody>

                            @foreach ($classroom as $key => $clsrm)
                                <tr>
                                    <td scope="key"> {{ $key + $classroom->firstItem() }}</td>
                                    <td>{{ $clsrm->category['title_category'] }}</td>
                                    <td>{{ $clsrm->title_classroom }}</td>
                                    <td>{{ $clsrm->link_classroom }}</td>
                                    <td>{{ $clsrm->desc_classroom }}</td>
                                    <td>
                                        <div class="row">
                                            <a href="{{ route('classroom.detail', $clsrm->id) }}"
                                                class="btn btn-info  btn-sm" style="margin-left: 4px;  ">detail</a>
                                            <a href="{{ route('classroom.edit', $clsrm->id) }}"
                                                class="btn btn-primary btn-sm" style="margin-left: 4px;">edit</a>
                                            <a href="{{ route('classroom.delete', $clsrm->id) }}"
                                                class="btn btn-danger btn-sm" style="margin-left: 4px;  ">delete</a>

                                        </div>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                    {{ $classroom->links() }}

                </div>

            </div>
        </div>



    </div>
@endsection
