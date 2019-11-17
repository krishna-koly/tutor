
    <section id="p_tutor">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <h5 class="black_title"> <i class="far fa-star"></i>Featured Tutors</h5>
                </div>
                <div class="col-lg-5"></div>
                <div class="col-lg-4 text-right"> <a href="">
                        <h5 class="green_title"> <img src="images/award.png">Why Featured & Premium Tutor ?</h5>
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="c3 col-lg-12" style="background:#195318; height:5px;"></div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                @foreach($featureds as $featured)
                <div class="col-lg-3">
                    <div class="p_box">
                        <div class='c2 style_border_flexi'>
                            <a href='#'>
                                <table width='100%'>
                                    <tr>
                                        <td width='30%'><img src='{{asset("front/images/ptutor.png")}}'><a href="{{ route('tutorinfo',$featured['id'])}}"><img src='{{ asset("back/images/front/tutor/tutor-$featured->id.$featured->image") }}' class="t_img"></a>
                                        </td>
                                        <td class="content" width='70%'>


                                           <a href="{{ route('tutorinfo',$featured['id'])}}"><h6>{{$featured->name}}</h6></a> 
                                            <p> <strong>3000</strong> tk/month</p>
                                            <p>{{$featured->phone}}</p>
                                            <p>{{$featured->district_id}}</p>
                                            <p class="t_date">{{$featured->created_at}}</p>
                                           <!--  <a href="{{ route('tutorinfo',$featured['id'])}}" class="btn btn-info"> Click Here</a> -->

                                        </td>
                                    </tr>
                                </table>
                            </a>
                        </div>


                    </div>
                </div>
                @endforeach
            </div>

        </div>

    </section>
