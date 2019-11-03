@extends('backend.layouts.app')

@push('css')

    <!-- Waves Effect Css -->
    <link href="{{asset('back/plugins/node-waves/waves.css')}}" rel="stylesheet" />
     <!-- Dropzone Css -->
    <link href="{{asset('back/plugins/dropzone/dropzone.css')}}" rel="stylesheet">

    <!-- Multi Select Css -->
    <link href="{{asset('back/plugins/multi-select/css/multi-select.css')}}" rel="stylesheet">

    <!-- Bootstrap Spinner Css -->
    <link href="{{asset('back/plugins/jquery-spinner/css/bootstrap-spinner.css')}}" rel="stylesheet">

    <!-- Bootstrap Tagsinput Css -->
    <link href="{{asset('back/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')}}" rel="stylesheet">

    <!-- Bootstrap Select Css -->
    <link href="{{asset('back/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />

    <!-- noUISlider Css -->
    <link href="{{asset('back/plugins/nouislider/nouislider.min.css')}}" rel="stylesheet" />


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
                           
                           <form action="{{ route('admin.guardian.update',$guardian->id ) }}" method="post" enctype="multipart/form-data">

                                @csrf
                                @method('PUT')
                                    <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text"  name="name"class="form-control" value="{{ $guardian->name}}" />
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text"  name="phone"class="form-control" value="{{ $guardian->phone}}" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text"  name="email"class="form-control" value="{{ $guardian->email}}" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text"  name="contact_address"class="form-control" value="{{ $guardian->Contact_address}}" />
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

                            <select name="gender" class="form-control show-tick" data-live-search="true" value="{{ $guardian['gender']}}">

                           

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

<!-- Slimscroll Plugin Js -->
    <script src="{{asset('back/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

    <!-- Bootstrap Colorpicker Js -->
    <script src="{{asset('back/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js')}}"></script>


     <!-- Dropzone Plugin Js -->
    <script src="{{asset('back/plugins/dropzone/dropzone.js')}}"></script>

    <!-- Input Mask Plugin Js -->
    <script src="{{asset('back/plugins/jquery-inputmask/jquery.inputmask.bundle.js')}}"></script>

    <!-- Multi Select Plugin Js -->
    <script src="{{asset('back/plugins/multi-select/js/jquery.multi-select.js')}}"></script>

    <!-- Jquery Spinner Plugin Js -->
    <script src="{{asset('back/plugins/jquery-spinner/js/jquery.spinner.js')}}"></script>

    <!-- Bootstrap Tags Input Plugin Js -->
    <script src="{{asset('back/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js')}}"></script>

    <!-- noUISlider Plugin Js -->
    <script src="{{asset('back/plugins/nouislider/nouislider.js')}}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{asset('back/plugins/node-waves/waves.js')}}"></script>


@endpush
@endsection