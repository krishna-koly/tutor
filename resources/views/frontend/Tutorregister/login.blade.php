@extends('frontend.master.app')

@section('content')

    <section id="login_page">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <h5 class="black_title"> TUTOR LOGIN</h5>
                </div>
                <div class="col-lg-6"></div>
                <div class="col-lg-3 text-right p_direction green_title">
                    <a href="" class="green_title">Home</a>
                    <i class="fas fa-chevron-right"></i>
                    <a href="" class="green_title">Tutor Login</a>
                </div>


            </div>
            <div class="row">
                <div class="c3 col-lg-12" style="background:#195318; height:4px;"></div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                       
                        <button type="button" class="btn btn-success">Login</button>
                        
                        
                    </form>
                    <div>
                        <a href=""  class="green_title">New Tutor?</a>
                        <a href=""  class="green_title">|Forgot Password?</a>
                    </div>
                </div>
                <div class="col-lg-5"></div>

            </div>
        </div>

    </section>







@endsection