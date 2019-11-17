@extends('frontend.master.app')
@section('content')

<section id="reg_page">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h5 class="black_title"> REGISTER AS A TUTOR FOR FREE! </h5>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-5 text-right p_direction green_title">
                    <a href="index.html" class="green_title">Home</a>
                    <i class="fas fa-chevron-right"></i>
                    <a href="registration.html" class="green_title">Register as a Tutor for Free! </a>
                </div>


            </div>
            <div class="row">
                <div class="c3 col-lg-12" style="background:#195318; height:4px;"></div>
            </div>
        </div>

        <div class="container r_form">
            <div class="row">
                <div class="col-lg-7">
                    <form action="{{route('reg')}}" method="POST" enctype="multipart/form-data">

                                @csrf

                        <div class="form-group row">
                            <label for="inputFullName" class="col-sm-3 col-form-label">Full Name: </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="fullname" name="name" placeholder="Enter Your Full Name">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="image" class="col-sm-3 col-form-label">Upload an image: </label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control"  name="image">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-3 col-form-label">Phone Number: </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="Enter Your Phone Number">
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-3 col-form-label">Email: </label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control @error('phone') is-invalid @enderror" name="email" placeholder=" Enter Your Email Address">
                                 @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-3 col-form-label">Password: </label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control @error('phone') is-invalid @enderror" name="password" placeholder=" Enter a password ">
                                 @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                          <div class="form-group row">
                            <label for="inputPassword" class="col-sm-3 col-form-label"> Confirm Password: </label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control @error('phone') is-invalid @enderror" name="password_confirmation" placeholder=" Confirm your password ">
                                 
                            </div>
                        </div>

                     


                        <div class="form-group row">
                            <label for="About Yourself" class="col-sm-3 col-form-label">Tell Something About You: </label>
                            <div class="col-sm-9">
                                
                                 <input type="text" class="form-control @error('about') is-invalid @enderror" name="about" placeholder="Enter a Description about yourself">
                                 @error('about')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="inputContactAddress" class="col-sm-3 col-form-label">Contact Address: </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('contact_address') is-invalid @enderror" id="inputContctAddress" name="contact_address" placeholder=" Enter You Contact Address">
                                 @error('contact_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                          <div class="form-group row">
                            <label for="inputPassword" class="col-sm-3 col-form-label">Choose District: </label>
                            <div class="col-sm-9">
                                <select id="inputState" name="district_id" class="form-control">
                                    <option selected>Select</option>
                                    @foreach($districts as $dist)
                                    <option value="{{ $dist['id']}}">{{ $dist['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-3 col-form-label">Choose Gender: </label>
                            <div class="col-sm-9">
                                <select id="inputState" name="gender" class="form-control">
                                    <option selected>Select</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-sm-9">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1"> By clicking registration button, you accept our Terms & Conditions . </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Register Me</button>

                    </form>

                </div>
             <!--    <div class="col-lg-5"></div> -->

            </div>
        </div>

    </section>
@endsection