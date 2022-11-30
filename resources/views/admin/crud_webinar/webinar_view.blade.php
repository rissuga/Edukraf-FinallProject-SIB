
@extends('admin.body.index')

@section('content')
 
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Webinar</h6>
            <a href="{{route('webinar.add')}}" style="float: right;" class="btn btn-rounded btn-success mb-4">Add Data</a>
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
                            <th>Status</th>
                            <th>Action</th>
    
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th width="10px">No</th>
                            <th width="150px">Judul</th>
                            <th width="80px;">Tanggal</th>
                            <th width="100px;">Deskripsi</th>
                            <th>Pemateri</th>
                            <th>Cover</th>
                            <th>Status</th>
                            <th>Action</th>
    
                        </tr>
                    </tfoot>
                    <tbody>
    
                        @foreach ($webinar as  $key =>  $allwebinar)
                        <tr>
                            <td scope="key"> {{ $key + $webinar->firstItem() }}</td>
                            <td>{{$allwebinar->Judul_Webinar}}</td>
                            <td>{{$allwebinar->Tanggal}}</td>
                            <td>{{$allwebinar->Desc_Webinar}}</td>
                            <td>{{$allwebinar->Pemateri_Webinar}}</td>
                            <td>{{$allwebinar->Cover}}</td>
                            <td>{{$allwebinar->status}}</td>
            
                            <td>
                            <div class="row">
                            <a href="" class="btn btn-info"  style="display: inline-block; 
                           margin-right: 5px; ">edit</a> 
                            <a href="" class="btn btn-danger">delete</a>
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
