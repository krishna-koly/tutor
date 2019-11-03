@extends('backend.layouts.app')

{{\Illuminate\Support\Str::limit(100)}}

@push('css')

   

 <link href="{{asset('back/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css ')}}" rel="stylesheet">
@endpush

@section('content')

    <div class="container-fluid">
            <div class="block-header">
                <h2>
           <a href="{{route('admin.tutor.create')}}" class="btn btn-info" >Add new Tutor </a>
                </h2>
            </div>

         <!-- Basic Examples -->
           
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                EXPORTABLE TABLE
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
</div>
<div class="body">
<div class="table-responsive">
<table class="table table-bordered table-striped table-hover dataTable js-exportable">
<thead>
<tr>
<th>ID</th>
<th>Name</th>
<th>Phone</th>
<th>Email</th>
<th>Contact Address</th>
<th>About</th>
<th>Gender</th>
<th>image</th>
<th>university_id</th>
<th>degree_id</th>
<th>subject_id</th>
<th>Status</th>
<th>Created_at</th>
<th>Action</th>

</tr>
</thead>
<tfoot>
<tr>
<th>ID</th>
<th>Name</th>
<th>Phone</th>
<th>Email</th>
<th>Contact Address</th>
<th>About</th>
<th>Gender</th>
<th>image</th>
<th>university_id</th>
<th>degree_id</th>
<th>subject_id</th>
<th>Status</th>
<th>Created_at</th>
<th>Action</th>
</tr>
</tfoot>
<tbody>

@foreach($tutors as $key=>$tutor)
<tr>

<td>{{$key+1}} </td>
<td>{{$tutor->name}} </td>
<td>{{$tutor->phone}} </td>
<td>{{$tutor->email}} </td>
<td>{{$tutor->Contact_address}} </td>
<td>/</td>
<td>{{$tutor->gender}} </td>
<td> <img src="{{ asset("/back/images/tutor/tutor-$tutor->id.$tutor->image") }}" width="100" /></td>
<td>{{$tutor->university_id}} </td>
<td>{{$tutor->degree_id}} </td>
<td>{{$tutor->subject_id}} </td>
<td>{{$tutor->status}} </td>
<td>{{$tutor->created_at}} </td>

<td>
<a href="{{route('admin.tutor.edit', $tutor->id )}}" class="btn btn-info btn-xs"><i class="material-icons">edit</a>

 <!-- <a href="#" class="btn btn-info btn-xs"><i class="material-icons">delete</a> -->

                                        <span>
                                            <form action="{{ route('admin.tutor.destroy', $tutor->id )}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-info btn-xs">
                                                <i class="material-icons">delete</i>
                                                </button>
                                            </span>
                                            </form>
    



</td>
</tr>


@endforeach

</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<!-- #END# Exportable Table -->
</div>






@push('js')


   <script src="{{asset('back/plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
    <script src="{{asset('back/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('back/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('back/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')}}"></script>
    <script src="{{asset('back/plugins/jquery-datatable/extensions/export/jszip.min.js')}}"></script>
    <script src="{{asset('back/plugins/jquery-datatable/extensions/export/pdfmake.min.js')}}"></script>
    <script src="{{asset('back/plugins/jquery-datatable/extensions/export/vfs_fonts.js')}}"></script>
    <script src="{{asset('back/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')}}"></script>
    <script src="{{asset('back/plugins/jquery-datatable/extensions/export/buttons.print.min.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{asset('back/js/pages/tables/jquery-datatable.js')}}"></script>
@endpush
@endsection