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
                             
                            <!-- Input -->
                            <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                            <div class="header">
                            <h2>
                            ADD NEW TYPE

                            </h2>

                            </div>
                            <div class="body">

                            <div class="row clearfix">
                            <form action="{{route('admin.other.store')}}" method="post">

                            @csrf

                                     <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <span> <label for="area_name">Enter Title :</label></span><input type="text" name="name" id="subject_name" class="form-control">
                                        </div>
                                    </div>

                                    
                                    
                                </div>


                                 <div class="row-clearfix">
                                
                             <div class="col-sm-12">
                            <label for="product"> Select A Type: </label>
                        </div>
                         


                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">

                            <select name="difftype" class="form-control show-tick" data-live-search="true">

                            

                            <option value="university">University</option>
                            <option value="school">School</option>
                            <option value="college">College</option>
                            <option value="degree">Degree</option>
                            <option value="kg school">Kg School</option>







                            </select>
                            </div>
                            </div>

                            <div class="form-group">
                                   <a href="#" class="btn btn-danger">Back</a>
                                           <button class="btn btn-info">Submit</button>
                                       </div>


                            </div>
                            </div>
              
                            </form>
                      

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