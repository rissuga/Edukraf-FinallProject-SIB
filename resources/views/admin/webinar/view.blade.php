<style>
    .dtHorizontalExampleWrapper {
        max-width: 600px;
        margin: 0 auto;
    }

    #dtHorizontalExample th,
    td {
        white-space: nowrap;
    }
</style>

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
                    <table id="dtHorizontalExample" class="table table-bordered table-hover table-fixed" cellspacing="0"
                        width="100%">
                        <thead>
                            <tr>
                                <th th-sm>No</th>
                                <th th-sm>Judul</th>
                                <th th-sm>Tanggal</th>
                                <th th-sm>status</th>
                                <th th-sm>Pemateri</th>
                                <th th-sm>Cover</th>
                                <th th-sm width="170px">Action</th>

                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($webinar as $key => $allwebinar)
                                <tr>
                                    <td scope="key"> {{ $key + $webinar->firstItem() }}</td>
                                    <td>{{ $allwebinar->title }}</td>
                                    <td>{{ $allwebinar->date }}</td>
                                    <td>
                                        @if (strtotime($allwebinar->date) >= strtotime(gmdate('Y-m-d', time() + 60 * 60 * 7)))
                                            <span>AKAN BERLANGSUNG</span>
                                        @else
                                            <span>SUDAH SELESAI</span>
                                        @endif
                                    </td>

                                    <td>{{ $allwebinar->speaker }}</td>
                                    <td><img src="/storage/{{ $allwebinar->cover }}" width="100px" alt=""></td>
                                    <td>
                                        <div class="row">
                                            <a href="{{ route('webinar.detail', $allwebinar->id) }}"
                                                class="btn btn-info btn-sm"style="margin-left: 4px;">detail</a>
                                            <a href="{{ route('webinar.edit', $allwebinar->id) }}"
                                                class="btn btn-primary btn-sm"style="margin-left: 4px; ">edit</a>
                                            <a href="{{ route('webinar.delete', $allwebinar->id) }}"
                                                class="btn btn-danger btn-sm"style="margin-left: 4px;">delete</a>
                                            <a href="">
                                                <i class="bi bi-eye-fill"></i>
                                            </a>

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
    <script>
        $(document).ready(function() {
            $('#dtHorizontalExample').DataTable({
                "scrollX": true
            });
            $('.dataTables_length').addClass('bs-select');
        });
    </script>
@endsection
