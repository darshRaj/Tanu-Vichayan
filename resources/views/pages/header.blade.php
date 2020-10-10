<!--Navbar -->
<nav class="mb-4 navbar navbar-expand-lg navbar-dark red darken-2">
        <a class="navbar-brand font-bold mob_75" href="{{url('pages.vichayan-dashboard')}}">
        <img src="{{asset('custom/images/logo.png')}}" class="navbar_logo" /></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText1" aria-controls="navbarText1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText1">

            <div class="col-md-7">
                <form class="form-inline full_width">
                    <a class="nav-link dropdown-toggle width_80" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">  </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-cyan" aria-labelledby="navbarDropdownMenuLink-4">
                        <a class="dropdown-item" href="#">Facebook</a>
                        <a class="dropdown-item" href="#">Instagram</a>
                        
                    </div>
                    <a href="{{url('pages.search')}}" class="menu_search"> 
                        <i class="fa fa-search"></i>
                    </a>
                </form>
            </div>

            <div class="col-md-3">
                <div class="social-media-number">
                     <a href="#" class="fa fa-envelope social_media"></a>
                    <a href="#" class="fa fa-bell social_media"><h6>6</h6></a>
                    <a href="#" class="fas fa-users social_media"><h6>2</h6></a>
                    <a href="#" class="fa fa-home social_media"><h6>8</h6></a>
                </div>
            </div>

            <div class="col-md-2">
                <div class="nav_back_pink">
                    <div class="row">
                        <div class="col-md-2 col-sm-2 col-xs-2">
                            <img src="{{asset('custom/images/user.png')}}" class="user_image user_image_top" />
                        </div>
                        <div class="col-md-9 col-sm-12 col-xs-3">
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle side_btn1" type="button" data-toggle="dropdown">
                                {{ Auth::user()->firstname }}
                                    <span class="caret"></span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right dropdown-cyan" aria-labelledby="navbarDropdownMenuLink-4">
                                    
                                    <a class="dropdown-item bdr_btm" href="{{ route('logout') }}"  
                                       onclick="event.preventDefault(); 
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-in-alt clr_pink"></i> &nbsp;
                                        {{ __('Logout') }}
                                    </a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-cog clr_pink"></i> &nbsp;Setting</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </nav>
    <!--/.Navbar -->
    