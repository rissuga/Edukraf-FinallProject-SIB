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
                <h6 class="m-0 font-weight-bold text-primary">DataTables Webinar</h6>
                <a href="{{ route('webinar.add') }}" style="float: right;" class="btn btn-rounded btn-success mb-4">Add
                    Data</a>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th width="10px">No</th>
                                <th width="150px">Judul</th>
                                <th width="80px;">Tanggal</th>
                                <th width="100px;">Deskripsi</th>
                                <th>Pemateri</th>
                                <th>Cover</th>
                                <th>Record</th>
                                <th>Action</th>

                            </tr>
                        </thead>

                        <tbody>

                            @foreach ($webinar as $key => $allwebinar)
                                <tr>
                                    <td scope="key"> {{ $key + $webinar->firstItem() }}</td>
                                    <td>{{ $allwebinar->title }}</td>
                                    <td>{{ $allwebinar->date }}</td>
                                    <td>{{ $allwebinar->desc }}</td>
                                    <td>{{ $allwebinar->speaker }}</td>
                                    <td><img src="/storage/{{ $allwebinar->cover }}" width="100px" alt=""></td>

                                    <td>{{ $allwebinar->link_record }}</td>

                                    <td>
                                        <div class="row">
                                            <a href="{{ route('webinar.edit', $allwebinar->id) }}" class="btn btn-info"
                                                style="display: inline-block; 
                           margin-right: 5px; ">edit</a>
                                            <a href="{{ route('webinar.delete', $allwebinar->id) }}"
                                                class="btn btn-danger">delete</a>
                                        </div>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                    {{ $webinar->links() }}

                </div>

            </div>
        </div>



    </div>
@endsection
