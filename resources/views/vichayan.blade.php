<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.vichead')
</head>
<body>

    <nav class="navbar navbar-light navbar-expand-lg fixed-top">
        <a class="navbar-brand" href="index.html">
            <img src="{{asset('cssvichayan/images/logo.png')}}" class="logo" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <div class="container">
                <div class="col-md-12 mob_bg">
                    <ul class="navbar-nav ml-auto float-lg-right">
                        <li clas="navbar-item ">
                            <a href="{{url('auth.register')}}" class="nav-link button">Join Now</a>
                        </li>
                        <li clas="navbar-item ">
                            <a href="{{url('auth.login')}}" class="nav-link button">Signin</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
   <style>

   </style>
    <div class="moving">
        <ul class="fixed">
           
            <li class="circle"><a href="#11"><i class="fa fa-home"></i></a></li>
            <li class="circle"><a href="#12"><i class="fa fa-cog fa-spin"></i></a></li>
            <li class="circle"><a href="#13"><i class="fa fa-crosshairs"></i></a></li>
            <li class="circle"><a href="#14"><i class="fa fa-pause-circle fa-spin"></i></a></li>
        </ul>
    </div>

    <div class="fixed_bottom">
        <div class="bottom_bg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <a href="{{url('terms')}}" class="footer_item">Terms</a>
                         <span> | </span> 
                         <a href="{{url('privacy')}}" class="footer_item">Privacy</a> 
                         <span> | </span> 
                        <a href="#" class="footer_item">Support</a> 
                        <span> | </span> 
                        <a href="{{url('disclaimer')}}" class="footer_item">Disclaimer</a>
                    </div>
                    <div class="col-md-6">
                        <a href="#" class="footer_item float-lg-right">What is Vichayan ?</a> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sections">

        <!--First Section-->
        <!--<section id="1">
        <h1>First</h1>
        </section>-->
        <!--First Section-->
        <!--Second Section-->
        <section id="11">
            <div class="first_banner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="{{asset('cssvichayan/images/logo.png')}}" class="logo_med" />
                            <div class="center">
                                <p class="center_p">Come as a seeker, Here's a lot to explore. </p>
                                <a href="{{url('auth.register')}}" class="start_button"> Get Started</a><br />

                            </div>
                            <div class="center logo_cen">
                                <a href="{{url('auth.login')}}" class="login_button"> Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Second Section-->
        <!--Third Section-->
        <section id="12">
            <div class="second_banner">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="{{asset('cssvichayan/images/cog.png')}}" class="cog" />
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <h1 class="welcome">Welcome to your &nbsp;<span class="welcome_span">Research Community</span> </h1>
                            <p class="welcome_p">
                                Here we bring every possibility together on one table that productively supports your growth as a
                                seeker and a researcher. We provide a sustainable and conducive hub by bringing the researchers,
                                the guide, the mentors, the institutions, employment opportunities and most significantly the world
                                of books at your fingertips. Knowledge that defines you is waiting for your involvement.
                                Yes, WISDOM is just a click away. ….. Come fall in romance with research.
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <img src="{{asset('cssvichayan/images/second_bg.png')}}" class="second_image" />
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <img src="{{asset('cssvichayan/images/cog.png')}}" class="cog_2" />
                        </div>
                        <!--<div class="col-md-6">
                            <img src="images/side.png" />
                        </div>-->
                    </div>
                </div>
            </div>
        </section>
        <!--Third Section-->
        <!--Forth Section-->
        <section id="13">
            <div class="Third_banner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <img src="{{asset('cssvichayan/images/similar_2.png')}}" class="similar_2" />
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <h1 class="welcome2"><span class="welcome_span">Vichayan</span>  is so easy to use that it's hard to explain.  </h1>
                            <p class="welcome_p2">
                                We made it really really simple for seekers to post their thoughts in both a comprehensive and objective way using a blog or just post as per wish. Stories, photos…..
                            </p>
                            <!--<img src="images/similar.png" class="similar_1" />-->
                        </div>
                       
                    </div>
                </div>
            </div>
        </section>
        <!--Forth Section-->
        <!--Fifth Section-->
        <section id="14">
            <div class="Forth_banner">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <!--<img src="images/Gear.png" class="gear" />-->
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 ml_12 ml_12">
                            <center>
                                <ul class="list">
                                    <li>
                                        <a href="#" class="clr_white"><i class="fa fa-font"></i> </a><br /> <span class="size">Text</span>
                                    </li>
                                    <li>
                                        <a href="#" class="clr_white"><i class="fa fa-camera-retro"></i> </a><br /> <span class="size">Photo</span>
                                    </li>
                                    <li>
                                        <a href="#" class="clr_white"><i class="fa fa-clipboard"></i> </a><br /> <span class="size">Quote</span>
                                    </li>
                                    <li>
                                        <a href="#" class="clr_white"><i class="fa fa-link"></i> </a><br /> <span class="size">Link</span>
                                    </li>
                                </ul>
                            </center>

                            <br />

                            <ul class="list list_2">
                                <li>
                                    <a href="#" class="clr_white"><i class="fa fa-comments"></i> </a><br /> <span class="size">Chat </span>
                                </li>
                                <li>
                                    <a href="#" class="clr_white"><i class="fas fa-headphones"></i> </a><br /> <span class="size">Audio</span>
                                </li>
                                <li>
                                    <a href="#" class="clr_white"><i class="fa fa-play-circle"></i> </a><br /> <span class="size">Video</span>
                                </li>

                            </ul>
                            <br />


                        </div>

                        <div class="col-lg-6 col-md-12 ">
                            <img src="{{asset('cssvichayan/images/last_1.png')}}" class="img-responsive wid_100" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="seriously">
                                <p class="btm_p">Seriously, put any info you want to share. </p>
                                <p class="btm_p">Seven post types to get you started. Your brain can do the rest. Vichyan is yours, use it the way you feel good.</p>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </section>
        <!--Fifth Section-->


    </div>

    


    <script>
        var sections = $('section')
  , nav = $('nav')
  , nav_height = nav.outerHeight();

        $(window).on('scroll', function () {
            var cur_pos = $(this).scrollTop();

            sections.each(function () {
                var top = $(this).offset().top - nav_height,
                    bottom = top + $(this).outerHeight();

                if (cur_pos >= top && cur_pos <= bottom) {
                    nav.find('a').removeClass('active');
                    sections.removeClass('active');

                    $(this).addClass('active');
                    nav.find('a[href="#' + $(this).attr('id') + '"]').addClass('active');
                }
            });
        });

        nav.find('a').on('click', function () {
            var $el = $(this)
              , id = $el.attr('href');

            $('html, body').animate({
                scrollTop: $(id).offset().top - nav_height
            }, 500);

            return false;
        });
    </script>
</body>
</html>
