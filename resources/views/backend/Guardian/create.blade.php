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
                                ADD NEW Gurdian
                              
                            </h2>
                          
                        </div>
                        <div class="body">
                           
                            <div class="row clearfix">
                           
                           <form action="{{ route('admin.guardian.store') }}" method="post" enctype="multipart/form-data">

                                @csrf
                                    <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text"  name="name"class="form-control" placeholder="Enter Full Name" />
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text"  name="phone"class="form-control" placeholder="Enter Phone Number" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text"  name="email"class="form-control" placeholder="Enter Email Address" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text"  name="contact_address"class="form-control" placeholder="Enter Contact Address" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="file"  name="image" class="form-control" />
                                        </div>
                                    </div>

                                 


                                       <div class="row-clearfix">
                                
                             <div class="col-sm-12">
                            <label for="product"> Select Gender: </label>
                            </div>
                         


                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">

                            <select name="gender" class="form-control show-tick" data-live-search="true">

                           

                            <option value="male">Male</option>
                            <option value="female">Female</option>

                            </select>
                            </div>
                            </div>
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