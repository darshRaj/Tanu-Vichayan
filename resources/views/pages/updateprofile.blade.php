
<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
</head>
<body class="hm-gradient">
<div class="edit-page-profile">
    <div class="container">
        <div class="edit-page-profile-top">
            <div class="row">
                <div class="col-md-2">
                    <div class="edit-page-profile-top-image">
                        <img src="{{asset('custom/images/prof-img.jpg')}}">
                    </div>
                </div>
                <div class="col-md-8">
                     <div class="edit-page-profile-top-left">
                        <h4>Naina Mohanty</h4>
                        <p>Btw, SpaceX is no longer planning to upgrade Falcon 9 second stage for reusability. Accelerating BFR instead. <a href="#"><i class="far fa-edit"></i></a><br>
New design is very exciting! Delightfully counter-intuitive.</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="edit-page-profile-top-right">
                        <ul>
                            
                            <li><a href="#" class="middle-message"><i class="far fa-comment-alt"></i></a></li>
                            <li><a href="#"><i class="fas fa-ellipsis-v"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="edit-page-profile-buttom">
                    <div class="tab_container">
            <input id="tab1" type="radio" name="tabs" checked>
            <label for="tab1"><span>Intro</span></label>

            <input id="tab2" type="radio" name="tabs">
            <label for="tab2"><span>About</span></label>

            <input id="tab3" type="radio" name="tabs">
            <label for="tab3"><span>Featured</span></label>

            <input id="tab4" type="radio" name="tabs">
            <label for="tab4"><span>Background</span></label>

            <input id="tab5" type="radio" name="tabs">
            <label for="tab5"><span>Skills</span></label>

            <input id="tab6" type="radio" name="tabs">
            <label for="tab6"><span>Accomplishments</span></label>

            <input id="tab7" type="radio" name="tabs">
            <label for="tab7"><span>Additional Information</span></label>

            <input id="tab8" type="radio" name="tabs">
            <label for="tab8"><span>Supported Languages</span></label>

            <section id="content1" class="tab-content1">
                <h3>Research Work Preferences</h3>
                <div class="profile-intro">
                    <h4>Tell us what kind of research you're open to </h4>
                    <h6>Research titles</h6>
                    <a href="#">Add titles <i class="fas fa-plus"></i></a>
                    <ul>
                        <li> <h6>Job Locations</h6></li>
                        <li><a href="#">Add Locations <i class="fas fa-plus"></i></a></li>
                    </ul>
                   <a href="#" class="map-edit">Odisha, India <i class="fas fa-plus"></i></a>
                     
                    <h6>Start date</h6>
                   
                        <label class="container-1" style="margin-bottom: 0">Immediately, I'm actively applying
                          <input type="radio" checked="checked" name="radio">
                          <span class="checkmark"></span>
                        </label>
                        <label class="container-1">Flexible, I'm casually browsing
                          <input type="radio" name="radio">
                          <span class="checkmark"></span>
                        </label>
                        

                        <br><h6>Research Types</h6>
                        <div class="research-type">
                            <ul>
                                <li><a href="#" class="map-edit">Full-time <i class="fas fa-check"></i></a></li>
                                <li><a href="#" class="tik-edit">Contract  <i class="fas fa-plus"></i></a></li>
                                <li><a href="#" class="tik-edit">Part-time <i class="fas fa-plus"></i></a></li>
                                <li><a href="#" class="tik-edit">Temporary <i class="fas fa-plus"></i></a></li>
                                <li><a href="#" class="tik-edit">Remote <i class="fas fa-plus"></i></a></li>
                            </ul>
                        </div>
                        <h6 class="research-h6">Choose who sees you're open</h6>
                        <p>You decide if you want only recruiters all Vichyan members to see this</p>
                        <div class="submit-add">
                            <a href="#">Add To Profile</a>
                        </div><div class="clear"></div>
                </div>
            </section>
</div>
</div>
    </div>
</div>
</body>
<script>
    // Show the first tab by default
$('.tabs-stage div').hide();
$('.tabs-stage div:first').show();
$('.tabs-nav li:first').addClass('tab-active');

// Change tab class and display content
$('.tabs-nav a').on('click', function(event){

  // alert($(this).attr('href'));
  event.preventDefault();

  $('.tabs-stage div').hide();
  $('.tabs-nav li').removeClass('tab-active');
  
   $('.tabs-stage div:first').show();
  $(this).parent().addClass('tab-active');
  // $(this).child().css('display','block');
  
  $($(this).attr('href')).show();
});
</script>
</html>
