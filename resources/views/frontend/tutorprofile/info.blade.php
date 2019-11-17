@extends('frontend.master.app')

@section('content')

    <section id="tutorp_page">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <h5 class="black_title"> TUTOR PROFILE</h5>
                </div>
                <div class="col-lg-3"></div>
                <div class="col-lg-6 text-right p_direction green_title">
                    <a href="" class="green_title">Home</a>
                    <i class="fas fa-chevron-right"></i>
                    <a href="" class="green_title">Search Tutor</a>
                    <i class="fas fa-chevron-right"></i>
                    <a href="" class="green_title">Tutor Profile</a>
                </div>


            </div>
            <div class="row">
                <div class="c3 col-lg-12" style="background:#1A73E8; height:4px;"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                
                <div class="col-lg-8 tutor_profile">
                    <div class="row tutor_all_info">
                        <div class="col-lg-4 tutor_photoi">
                            <div class="tutor_photo">
                                <img src="images/71930749_9408_IMG_20190726_162744.jpg.jpg">
                                <span> <strong>Member Since:</strong>17-12-2017 </span>
                                <br>
                                <span> <strong>Last Login:</strong>17-12-2017 </span>
                                <p class="profile_status">PREMIUM TUTOR</p>
                            </div>
                            <div class="social_id">
                                <a href=""> <i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                                <a href=""> <i class="fa fa-twitter-square" aria-hidden="true"></i> </a>
                                <a href=""><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>

                            </div>

                        </div>
                       
                        <div class="col-lg-8">
                            <div class="tutor_id_info">
                                <name class="green_title">ABCD<img src="{{asset('front/images/ptutor.png')}}"></name>
                                <h5 class="black_title"> ID # 121717331 </h5>

                                <h5 class="black_title ex"> Experience: </h5>
                                <div class="experience">
                                    <p><strong> Qualification: </strong>LL.B(Honours) in Law </p>
                                    <p><strong> Area Covered: </strong>DHAKA ( ASHULIA , BADDA , GULSHAN , KHILKHET , MIRPUR , PALLABI , RAMPURA ) </p>
                                    <p><strong> Teaching: </strong>Bangla, English, General Math, ICT, Accounting, Finance </p>
                                    <p><strong> Phone: </strong>01780364601 </p>
                                    <p><strong> Email: </strong>bh569714@gmail.com </p>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tution_info">
                                <h5 class="black_title"> Tuition Info:</h5>
                                <div class="c3 col-lg-12" style="background:#1A73E8; height:4px;"></div>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tution_info_form">
                                <table class="table">

                                    <tbody>
                                        <tr>
                                            <th scope="row">Expected Minimum Salary:</th>
                                            <td>3000 tk/month :Negotiable </td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Current Status for Tuition:</th>
                                            <td>Available </td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Days per week:</th>
                                            <td>5 days/week </td>

                                        </tr>
                                        <tr>
                                            <th scope="row"> Preffered Tutoring Style:</th>
                                            <td><i class="fa fa-check-square-o" aria-hidden="true">Private Tuition</i> </td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Place of Learning:</th>
                                            <td><i class="fa fa-check-square-o" aria-hidden="true">My Place/Home </i></td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Extra Facilities:</th>
                                            <td><i class="fa fa-check-square-o" aria-hidden="true"> Provide Hands Note </i> </td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Preferred Medium Of Education: </th>
                                            <td><i class="fa fa-check-square-o" aria-hidden="true"> Bangla Medium </i> </td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Preferred Classes: </th>
                                            <td>
                                                <i class="fa fa-check-square-o" aria-hidden="true"> Class VIII </i>
                                                <i class="fa fa-check-square-o" aria-hidden="true"> Class VIII </i>
                                                <i class="fa fa-check-square-o" aria-hidden="true"> Class VIII </i>
                                                <i class="fa fa-check-square-o" aria-hidden="true"> Class VIII </i>
                                                <i class="fa fa-check-square-o" aria-hidden="true"> Class VIII </i>
                                                <i class="fa fa-check-square-o" aria-hidden="true"> Class VIII </i>
                                                <i class="fa fa-check-square-o" aria-hidden="true"> Class VIII </i>
                                                <i class="fa fa-check-square-o" aria-hidden="true"> Class VIII </i>

                                            </td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Preferred Subjects: </th>
                                            <td>
                                                <i class="fa fa-check-square-o" aria-hidden="true"> General Math </i>
                                                <i class="fa fa-check-square-o" aria-hidden="true"> ICT </i>
                                                <i class="fa fa-check-square-o" aria-hidden="true"> Bangla </i>
                                                <i class="fa fa-check-square-o" aria-hidden="true"> Bangla </i>
                                                <i class="fa fa-check-square-o" aria-hidden="true"> Bangla </i>
                                                <i class="fa fa-check-square-o" aria-hidden="true"> Bangla </i>
                                                <i class="fa fa-check-square-o" aria-hidden="true"> Bangla </i>
                                                <i class="fa fa-check-square-o" aria-hidden="true"> Bangla </i>


                                            </td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Preferred Areas to Teach: </th>
                                            <td>
                                                <strong>Dhaka</strong>
                                                <i class="fa fa-check-square-o" aria-hidden="true"> ASHULIA </i>
                                                <i class="fa fa-check-square-o" aria-hidden="true"> BADDA</i>
                                                <i class="fa fa-check-square-o" aria-hidden="true"> GULSHAN </i>


                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tution_info">
                                <h5 class="black_title"> Educational Qualification</h5>
                                <div class="c3 col-lg-12" style="background:#1A73E8; height:4px;"></div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-md-12 table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Exam </th>
                                        <th scope="col">Subject/Groupt</th>
                                        <th scope="col">Institute</th>
                                        <th scope="col">Result</th>
                                        <th scope="col">Year </th>
                                        <th scope="col">Awards </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">SSC</th>
                                        <td>Commerce </td>
                                        <td>badda alatunnessa high school </td>
                                        <td>Grade A</td>
                                        <td>2013</td>
                                        <td> </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">HSC</th>
                                        <td>Commerce </td>
                                        <td>badda alatunnessa high school </td>
                                        <td>Grade A</td>
                                        <td>2013</td>
                                        <td> </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">HONORS</th>
                                        <td>Commerce </td>
                                        <td>badda alatunnessa high school </td>
                                        <td>Grade A</td>
                                        <td>2013</td>
                                        <td> </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
               
                <div class="col-lg-4">
                    <div class="tf_sidebar tutor_profile">
                        <div class="p_box">
                            <div class='c2 style_border_flexi'>
                                <a href='#'>
                                    <table width='100%'>
                                        <tr>
                                            <td width='30%'><img src='images/ptutor.png'> <img src='images/71930749_9408_IMG_20190726_162744.jpg.jpg' class="t_img">
                                            </td>
                                            <td class="content" width='70%'>


                                                <h6> MD TUHIN REZA</h6>
                                                <p> <strong>3000</strong> tk/month</p>
                                                <p>01775436784</p>
                                                <p>PABNA</p>






                                            </td>
                                        </tr>
                                    </table>
                                </a>
                            </div>


                        </div>
                        <div class="mail_tutor">
                            <h5 class="black_title"> <i class="fa fa-envelope-o" aria-hidden="true"></i>Email this Tutor</h5>
                            <div class="c3 col-lg-12" style="background:#1A73E8; height:2px;"></div>

                        </div>
                        <div class="mail_form">
                            <form>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Name</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mobile Number</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Details Information</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>


                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </form>
                        </div>
                    </div>
                    <div class="featured_tutor">
                      
                            <h5 class="black_title"> <i class="fa fa-star-o" aria-hidden="true"></i> Featured Tutors</h5>
                            <div class="c3 col-lg-12" style="background:#1A73E8; height:2px;"></div>
                            <div class="p_box">
                        <div class='c2 style_border_flexi'>
                            <a href='#'>
                                <table width='100%'>
                                    <tr>
                                        <td width='30%'> <img src='images/71930749_9408_IMG_20190726_162744.jpg.jpg' class="t_img">
                                        </td>
                                        <td class="content" width='70%'>


                                            <h6> MD TUHIN REZA</h6>
                                            <p> <strong>3000</strong> tk/month</p>
                                            <p>01775436784</p>
                                            <p>PABNA</p>






                                        </td>
                                    </tr>
                                </table>
                            </a>
                        </div>


                    </div>
                        <div class="p_box">
                        <div class='c2 style_border_flexi'>
                            <a href='#'>
                                <table width='100%'>
                                    <tr>
                                        <td width='30%'> <img src='images/71930749_9408_IMG_20190726_162744.jpg.jpg' class="t_img">
                                        </td>
                                        <td class="content" width='70%'>


                                            <h6> MD TUHIN REZA</h6>
                                            <p> <strong>3000</strong> tk/month</p>
                                            <p>01775436784</p>
                                            <p>PABNA</p>






                                        </td>
                                    </tr>
                                </table>
                            </a>
                        </div>


                    </div>

                        </div>
                    </div>
                </div>
            </div>
        
    


    
    </section>



@endsection




