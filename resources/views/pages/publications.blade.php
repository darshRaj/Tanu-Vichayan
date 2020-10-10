@extends('pages.master')
@section('content')
<div class="publicaation-page">
  <div class="container">
    <h2 class="publication">Publications</h2>
    <div class="Publication-cont">
      <div class="row">
        <div class="col-md-9">
          <div class="Publication-cont-left">
            <h4>Start Building Your Articles...</h4>
            <ul>
              <li><a href="#"><i class="fa fa-image"></i></a><br><a href="#">Text</a></li>
              <li><a href="#"><i class="fa fa-image"></i></a><br><a href="#">Photo</a></li>
              <li><a href="#"><i class="fa fa-image"></i></a><br><a href="#">Image Grid</a></li>
              <li><a href="#"><i class="fa fa-image"></i></a><br><a href="#">Video/Audio</a></li>
              <li><a href="#"><i class="fa fa-image"></i></a><br><a href="#">Embed</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="Publication-cont-right">
           <h4>Add Content</h4>
           <table style="width: 100%">
              <tr>
                
                <td><a href="#"><i class="fa fa-image"></i></a><br><a href="#">Text</a></td>
                <td><a href="#"><i class="fa fa-image"></i></a><br><a href="#">Text</a></td>
              </tr>
              <tr>
                
                <td><a href="#"><i class="fa fa-image"></i></a><br><a href="#">Text</a></td>
                <td><a href="#"><i class="fa fa-image"></i></a><br><a href="#">Text</a></td>
              </tr>
              <tr>
                
                <td><a href="#"><i class="fa fa-image"></i></a><br><a href="#">Text</a></td>
                <td><a href="#"><i class="fa fa-image"></i></a><br><a href="#">Text</a></td>
              </tr>

            </table>
            <h5>Edit Project</h5>
            <table style="width: 100%">
              <tr>
                
                <td><a href="#"><i class="fa fa-image"></i></a><br><a href="#">Style</a></td>
                <td><a href="#"><i class="fa fa-image"></i></a><br><a href="#">Setting</a></td>
              </tr>
            </table>
            <div class="continue-publication">
              <a href="#" class="continue-inline">Continue</a><br><br>
              <a href="#" class="save-inline">Save As Draft</a><br><br>
              <a href="#" class="view-inline">View a Preview</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>


<div class="research-paper-tabs">
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="work_bg">
                        <h2 class="publication">Publications</h2>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="white_bg">
                                    <img src="{{asset('custom/images/icons/work.png')}}" class="work_image" />
                                    <p class="work_p">Work</p>
                                </div>

                                <div class="white_bg">
                                    <img src="{{asset('custom/images/icons/bookmark.png')}}" class="work_image" />
                                    <p class="work_p">Bookmark</p>
                                </div>
                                <div class="white_bg">
                                    <img src="{{asset('custom/images/icons/3_a.png')}}" class="work_image" />
                                    <p class="work_p">Appreciations</p>
                                </div>
                                <div class="pink_bg">
                                    <img src="{{asset('custom/images/icons/insites_white.png')}}" class="work_image" />
                                    <p class="work_p_white">Insights</p>
                                </div>
                                <div class="white_bg">
                                    <img src="{{asset('custom/images/icons/draft.png')}}" class="work_image" />
                                    <p class="work_p">Draft</p>
                                </div>
                                <div class="white_bg">
                                    <img src="{{asset('custom/images/icons/last.png')}}" class="work_image" />
                                    <p class="work_p">Updates</p>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div id="Insights" class="tabcontent tab_width" style="border: none;">

                                    <div class="no-of-view">
                                        <p>No of view</p>
                                        <div class="no-of-view-cont">
                                            <h3>100</h3>
                                        </div>
                                        <div class="no-of-view-cont-2">
                                            <p>Who viewed your profile</p>
                                        </div>
                                    </div>
                                    <div class="no-of-view-2">
                                        <p>Who Have Given <span>(All time)</span></p>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="no-of-view-cont-box">
                                                    <h3>100</h3>
                                                </div>
                                                <div class="no-of-view-cont-2">
                                                    <p>Article Views</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="no-of-view-cont-box">
                                                    <h3>500</h3>
                                                </div>
                                                <div class="no-of-view-cont-2">
                                                    <p>Article Appreciations</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="no-of-view-cont-box">
                                                    <h3>90</h3>
                                                </div>
                                                <div class="no-of-view-cont-2">
                                                    <p>Article comments</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="no-of-view-2">
                                        <p>You Have Received <span>(All time)</span></p>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="no-of-view-cont-box">
                                                    <h3>100</h3>
                                                </div>
                                                <div class="no-of-view-cont-2">
                                                    <p>Who viewed your profile</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="no-of-view-cont-box">
                                                    <h3>500</h3>
                                                </div>
                                                <div class="no-of-view-cont-2">
                                                    <p>Who viewed your profile</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="no-of-view-cont-box">
                                                    <h3>90</h3>
                                                </div>
                                                <div class="no-of-view-cont-2">
                                                    <p>Who viewed your profile</p>
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