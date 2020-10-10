@extends('pages.master')
@section('content')
<div class="container">
        <div class="row">

            <div class="col-md-12 ">
                <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#Friends" role="tab" aria-controls="nav-home" aria-selected="true">Friends</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#Researcher" role="tab" aria-controls="nav-profile" aria-selected="false">Researcher</a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#Publications" role="tab" aria-controls="nav-contact" aria-selected="false">Publications</a>
                        <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#Schools" role="tab" aria-controls="nav-about" aria-selected="false">Schools</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#Colleges" role="tab" aria-controls="nav-profile" aria-selected="false">Colleges</a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#Communities" role="tab" aria-controls="nav-contact" aria-selected="false">Communities</a>
                        <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#Companies" role="tab" aria-controls="nav-about" aria-selected="false">Companies</a>
                    </div>
                </nav>
                <div class="tab-content py-3 px-3 px-sm-0 " id="nav-tabContent">

                    <div class="tab-pane fade show active pad_20" id="Friends" role="tabpanel" aria-labelledby="nav-home-tab">
                        <h2 class="publication2">My Connections</h2>
                        <div class="container">
                            <div class="row pad_20">
                                <div class="col-md-2">
                                    <div class="pink_border">
                                        <img src="{{asset('custom/images/user.png')}}" class="mega_user" />
                                        <h6 class="mega_name">Pablo Stanley</h6>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="pink_border">
                                        <img src="{{asset('custom/images/user.png')}}" class="mega_user" />
                                        <h6 class="mega_name">Pablo Stanley</h6>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="pink_border">
                                        <img src="{{asset('custom/images/user.png')}}" class="mega_user" />
                                        <h6 class="mega_name">Pablo Stanley</h6>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <h2 class="publication2">Suggestion</h2>
                        <div class="container">
                            <div class="row pad_20">
                                <div class="col-md-2">
                                    <div class="pink_border">
                                        <img src="{{asset('custom/images/user.png')}}" class="mega_user" />
                                        <h6 class="mega_name">Pablo Stanley</h6>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="pink_border">
                                        <img src="{{asset('custom/images/user.png')}}" class="mega_user" />
                                        <h6 class="mega_name">Pablo Stanley</h6>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>


                    <div class="tab-pane fade pad_20" id="Researcher" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <h2 class="publication2">My Connections (Researcher)</h2>
                        <div class="container">
                            <div class="row pad_20">
                                <div class="col-md-2">
                                    <div class="pink_border">
                                        <img src="{{asset('custom/images/user.png')}}" class="mega_user" />
                                        <h6 class="mega_name">Pablo Stanley</h6>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="pink_border">
                                        <img src="{{asset('custom/images/user.png')}}" class="mega_user" />
                                        <h6 class="mega_name">Pablo Stanley</h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <h2 class="publication2">Researcher related to your subjects</h2>
                        <div class="container">
                            <div class="row pad_20">
                            <div class="col-md-2">
                                    <div class="pink_border">
                                        <img src="{{asset('custom/images/user.png')}}" class="mega_user" />
                                        <h6 class="mega_name">Pablo Stanley</h6>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="pink_border">
                                        <img src="{{asset('custom/images/user.png')}}" class="mega_user" />
                                        <h6 class="mega_name">Pablo Stanley</h6>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <h2 class="publication2">Top rating Researcher </h2>
                        <div class="container">
                            <div class="row pad_20">
                            <div class="col-md-2">
                                    <div class="pink_border">
                                        <img src="{{asset('custom/images/user.png')}}" class="mega_user" />
                                        <h6 class="mega_name">Pablo Stanley</h6>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="pink_border">
                                        <img src="{{asset('custom/images/user.png')}}" class="mega_user" />
                                        <h6 class="mega_name">Pablo Stanley</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="tab-pane fade pad_20" id="Publications" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <h2 class="publication2">My Connections</h2>
                        <div class="container">
                            <div class="row pad_20">
                            <div class="col-md-2">
                                    <div class="pink_border">
                                        <img src="{{asset('custom/images/user.png')}}" class="mega_user" />
                                        <h6 class="mega_name">Pablo Stanley</h6>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="pink_border">
                                        <img src="{{asset('custom/images/user.png')}}" class="mega_user" />
                                        <h6 class="mega_name">Pablo Stanley</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2 class="publication2">Suggestion</h2>
                        <div class="container">
                            <div class="row pad_20">
                            <div class="col-md-2">
                                    <div class="pink_border">
                                        <img src="{{asset('custom/images/user.png')}}" class="mega_user" />
                                        <h6 class="mega_name">Pablo Stanley</h6>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="pink_border">
                                        <img src="{{asset('custom/images/user.png')}}" class="mega_user" />
                                        <h6 class="mega_name">Pablo Stanley</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="tab-pane fade pad_20" id="Schools" role="tabpanel" aria-labelledby="nav-about-tab">

                        <h2 class="publication2">Showing 100 results</h2>
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-8">
                                <div class="pink_border_schools">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="{{asset('custom/images/m_logo.png')}}" class="m-logo" />
                                        </div>
                                        <div class="col-md-5">
                                            <a href="#" class="mega_h5">University of Michigan</a>
                                        </div>
                                        <div class="col-md-5">
                                            <a href="#" class="mega_connect">Connect</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-8">
                                <div class="pink_border_schools">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="{{asset('custom/images/m_logo.png')}}" class="m-logo" />
                                        </div>
                                        <div class="col-md-5">
                                            <a href="#" class="mega_h5">University of Michigan</a>
                                        </div>
                                        <div class="col-md-5">
                                            <a href="#"><span class="mega_connect_now">Connect </span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="tab-pane fade pad_20" id="Colleges" role="tabpanel" aria-labelledby="nav-about-tab">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-8">
                                <div class="pink_border_schools">
                                    <div class="row">
                                    <div class="col-md-2">
                                            <img src="{{asset('custom/images/m_logo.png')}}" class="m-logo" />
                                        </div>
                                        <div class="col-md-5">
                                            <a href="#" class="mega_h5">University of Michigan</a>
                                        </div>
                                        <div class="col-md-5">
                                            <a href="#" class="mega_connect">Connect</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>


                    <div class="tab-pane fade pad_20" id="Communities" role="tabpanel" aria-labelledby="nav-about-tab">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-8">
                                <div class="pink_border_schools">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="media" style="padding:5px;margin-bottom:10px;">
                                                <div class="media-left">
                                                    <img src="{{asset('custom/images/l-1.png')}}" class="media-object" style="width:40px">
                                                </div>
                                                <div class="media-body">
                                                    <a href="#" class="media-heading ux_ui">UI-UX NETWORKS</a>
                                                    <p class="media_p2">Group&nbsp;&nbsp;&nbsp;&nbsp; <b class="group">12345 Members</b></p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="#"><span class="mega_connect_now2 mt-15">Disconnect </span></a>
                                        </div>
                                        <p class="mega_p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                    </div>


                                </div>
                            </div>
                        </div>


                        

                        

                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-8">
                                <div class="pink_border_schools">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="media" style="padding:5px;">
                                            <div class="media-left">
                                                    <img src="{{asset('custom/images/l-3.png')}}" class="media-object" style="width:40px">
                                                </div>
                                                <div class="media-body">
                                                    <a href="#" class="media-heading ux_ui">UI-UX NETWORKS</a>
                                                    <p class="media_p2">Group&nbsp;&nbsp;&nbsp;&nbsp; <b class="group">12345 Members</b></p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="#"><span class="mega_connect_now2 mt-15">Disconnect </span></a>
                                        </div>
                                        <p class="mega_p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                    </div>


                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-8">
                                <div class="pink_border_schools">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="media" style="padding:5px;">
                                            <div class="media-left">
                                                    <img src="{{asset('custom/images/l-2.png')}}" class="media-object" style="width:40px">
                                                </div>
                                                <div class="media-body">
                                                    <a href="#" class="media-heading ux_ui">UI-UX NETWORKS</a>
                                                    <p class="media_p2">Group&nbsp;&nbsp;&nbsp;&nbsp; <b class="group">12345 Members</b></p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="#"><span class="mega_connect_now2 mt-15">Disconnect </span></a>
                                        </div>
                                        <p class="mega_p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                    </div>


                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="tab-pane fade pad_20" id="Companies" role="tabpanel" aria-labelledby="nav-about-tab">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-8">
                                <div class="pink_border_schools">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="media" style="padding:5px;">
                                            <div class="media-left">
                                                    <img src="{{asset('custom/images/l-1.png')}}" class="media-object" style="width:40px">
                                                </div>
                                                <div class="media-body">
                                                    <a href="#" class="media-heading ux_ui">UI-UX NETWORKS</a>
                                                    <p class="media_p2">Group&nbsp;&nbsp;&nbsp;&nbsp; <b class="group">12345 Members</b></p>
                                                    <p class="connection"><i class="fa fa-user"></i> &nbsp; 8 connections Work Here. </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="#"><span class="mega_connect_now2">Disconnect </span></a>
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-8">
                                <div class="pink_border_schools">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="media" style="padding:5px;">
                                            <div class="media-left">
                                                    <img src="{{asset('custom/images/l-2.png')}}" class="media-object" style="width:40px">
                                                </div>
                                                <div class="media-body">
                                                    <a href="#" class="media-heading ux_ui">UI-UX NETWORKS</a>
                                                    <p class="media_p2">Group&nbsp;&nbsp;&nbsp;&nbsp; <b class="group">12345 Members</b></p>
                                                    <p class="connection"><i class="fa fa-user"></i> &nbsp; 8 connections Work Here. </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="#"><span class="mega_connect_now2">Disconnect </span></a>
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-8">
                                <div class="pink_border_schools">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="media" style="padding:5px;">
                                            <div class="media-left">
                                                    <img src="{{asset('custom/images/l-3.png')}}" class="media-object" style="width:40px">
                                                </div>
                                                <div class="media-body">
                                                    <a href="#" class="media-heading ux_ui">UI-UX NETWORKS</a>
                                                    <p class="media_p2">Group&nbsp;&nbsp;&nbsp;&nbsp; <b class="group">12345 Members</b></p>
                                                    <p class="connection"><i class="fa fa-user"></i> &nbsp; 8 connections Work Here. </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="#"><span class="mega_connect_now2">Disconnect </span></a>
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-8">
                                <div class="pink_border_schools">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="media" style="padding:5px;">
                                            <div class="media-left">
                                                    <img src="{{asset('custom/images/l-1.png')}}" class="media-object" style="width:40px">
                                                </div>
                                                <div class="media-body">
                                                    <a href="#" class="media-heading ux_ui">UI-UX NETWORKS</a>
                                                    <p class="media_p2">Group&nbsp;&nbsp;&nbsp;&nbsp; <b class="group">12345 Members</b></p>
                                                    <p class="connection"><i class="fa fa-user"></i> &nbsp; 8 connections Work Here. </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="#"><span class="mega_connect_now2">Disconnect </span></a>
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>


        </div>
    </div>
    <script>
        /* When the user clicks on the button,
        toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function (event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>

    <script>
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
    </script>

    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>
@endsection