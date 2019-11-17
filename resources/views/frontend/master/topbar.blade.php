  <header>
    <section id="header_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 logo">
                    <a href="#">
                        <img src="{{asset('front/images/7928_bdtutors_logo.png')}}">
                    </a>
                </div>
                <div class="col-lg-4"></div>
                <div class="col-lg-4 text-right">
                    <div class="h_con">
                        <a href="{{route('tutorlogin')}}">Log In </a> <span>or</span>
                        <a href="{{route('newtutor')}}">Register as Tutor </a>
                    </div>
                    <button type="button" class="btn btn-info but">JOIN FREE</button>
                </div>

            </div>




        </div>



    </section>
    <section id="navigation">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light menu">
                <!--                <a class="navbar-brand" href="#">Navbar w/ text</a>-->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mr-auto h_menu">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Guardian </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tutor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Study</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>

                    </ul>

                </div>
            </nav>
        </div>
    </section>
</header>