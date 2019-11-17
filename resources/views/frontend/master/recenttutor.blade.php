

    <section id="recnt_tutor">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <h5 class="black_title"> <img src="images/recent.png">Recently Joined Tutors</h5>
                </div>
                <div class="col-lg-5"></div>
                <div class="col-lg-4 text-right"> </div>
            </div>
            <div class="row">
                <div class="c3 col-lg-12" style="background:#195318; height:5px;"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div id="owl-example" class="owl-carousel">
                    @foreach($recents as $recent)
                    <div class="col-lg-12 p_box">
                        <div class="">
                            <div class='c2 style_border_flexi'>
                                <a href='#'>
                                    <table width='100%'>
                                        <tr>
                                            <td width='30%'><img src='{{asset("front/images/ptutor.png")}}'><img src='{{ asset("back/images/front/tutor/tutor-$recent->id.$recent->image") }}' class="t_img">
                                            </td>
                                            <td class="content" width='70%'>
                                                <h6>{{$recent->name}}</h6>
                                                <p> <strong>3000</strong> tk/month</p>
                                                <p>{{$recent->phone}}</p>
                                                <p>{{$recent->district_id}}</p>
                                                <p class="t_date">{{$recent->created_at}}</p>
                                              <!--  // <a href="{{ route('tutorinfo',$recent['id'])}}" class="btn btn-info"> Click Here</a> -->
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
        </div>
    </section>