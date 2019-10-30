@extends('backend.layouts.app')

@push('css')

   


@endpush

@section('content')



   <div class="container-fluid">
            <div class="block-header">
                {{-- <h2>BASIC FORM ELEMENTS</h2> --}}
            </div>
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Edit Existing Student Class 
                              
                            </h2>
                          
                        </div>
                        <div class="body">
                           
                            <div class="row clearfix">
                           
                           <form action="{{ route('admin.studentclass.update',$studentclass->id)}}" method="post">

                                @csrf
                                @method('PUT')
                                    <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text"  name="name"class="form-control"  value="{{ $studentclass->name}}" />
                                        </div>
                                    </div>
                                    <div class="form-group">

                                        <a href="{{route('admin.studentclass.index')}}" class="btn btn-danger"> Back</a>
                                       
                                        <button type="submit" class="btn btn-info"> Submit</button>

                                    </div>
                                </div>
                           </form>


                            </div>

                          
          
        



@push('js')


@endpush
@endsection