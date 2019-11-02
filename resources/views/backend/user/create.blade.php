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
                                ADD NEW USER
                              
                            </h2>
                          
                        </div>
                        <div class="body">
                           
                            <div class="row clearfix">
                           
                           <form action="{{ route('admin.user.store') }}" method="post" enctype="multipart/form-data">

                                @csrf
                                    <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text"  name="name"class="form-control" placeholder="Enter Full Name" />
                                        </div>
                                    </div>
                                    
                                   

                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text"  name="email"class="form-control" placeholder="Enter Email Address" />
                                        </div>
                                    </div>

                                  

                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text"  name="role"class="form-control" placeholder="Enter Role id" />
                                        </div>
                                    </div>

                                    


                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="file"  name="image" class="form-control" />
                                        </div>
                                    </div>

                                 

                                    <div class="form-group">

                                        <a href="#" class="btn btn-danger"> Back</a>
                                       
                                        <button type="submit" class="btn btn-info"> Submit</button>

                                    </div>
                                </div>
                           </form>


                            </div>

                          
          
        



@push('js')


@endpush
@endsection