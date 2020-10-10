@extends('pages.master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 col-sm-12 col-xs-12 mobile_none">
            @include('pages.profile')
            @include('pages.leftsidebar')
        </div>
            <div class="col-md-5 col-sm-12 col-xs-12">
                <div class="panel panel-default">
                   <!-- status bar -->
                    <div class="input-heading">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6 width_70">
                                <div class="status-icon">
                                    <i class="fas fa-pencil-alt"></i> 
                                    <span class="status_top">Status</span>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 width_28 text-right">
                                <div class="row">
                                    <div class="col-md-8"></div>
                                    <div class="col-md-1 col-sm-2 col-xs-2">
                                        <img src="{{asset('custom/images/user.png')}}" class="user_image" />
                                    </div>
                                    <div class="col-md-1 col-sm-1 col-xs-3">
                                        <div class="dropdown">
                                            <button class="btn btn-default dropdown-toggle side_btn22" type="button" data-toggle="dropdown">
                                                <span class="caret"></span>
                                            </button>
                                            <!--<div class="dropdown-menu dropdown-menu-right dropdown-cyan" aria-labelledby="navbarDropdownMenuLink-4">
                                                <a class="dropdown-item" href="#">Facebook</a>
                                                <a class="dropdown-item" href="#">Instagram</a>
                                            </div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel-body">
                        <div class="triangle-up"></div>
                        <div class="input-group">
                            <span class="input-group-addon" style="background:none;">
                                <i class="far fa-edit "></i>
                            </span>
                            <input type="text" class="form-control bdr_n" style="border: none;" data-toggle="modal" data-target="#myModal" placeholder="write something on this page...">
                        </div>
                    </div>
                 <!-- status bar end-->

<!-- Article Pop up Menu open -->
<div class="container">
    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-lg mt-150">
            <div class="modal-content">
        
            <form method="POST" action="{{ route ('posts.store') }}">
                        @csrf
                <!-- Modal Header -->
                <div class="modal-header">
                    <img src="{{asset('custom/images/user.png')}}" class="mantain_user" />
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="tab-content mantain_tab  pt-3" id="myTabContent">                        
                        <div class="form-group">
                            <label for="comment">
                                <i class="far fa-edit edit_modal "></i> &nbsp;
                                <span style="color:#585858;">write something on this page...</span>
                            </label>
                            <textarea class="form-control bdr_none" rows="3" id="post" name="post" required>
                            </textarea>
                        </div>                        
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <p class="color_pink">Creat a Post</p>
                        </div>
                        <div class="col-md-3">
                            <p class="color_white">Photos</p>
                        </div>
                        <div class="col-md-3">
                            <p class="color_white">Creat an Article</p>
                        </div>
                        <div class="col-md-3">
                            <p class="color_white">Documents</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-7">
                        <input type="file" class="form-control" name="post_photo" id="post_photo">
                        </div>                       
                        <div class="col-md-3">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle dw-btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Open to all
                                </a>
                                <div class="dropdown-menu menu_size" aria-labelledby="dropdownMenuButton">
                                    <p class="post_view">Who can See your new post ?</p>
                                    <a class="dropdown-item pad_15" href="#">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" class="big" name="post_type" id="post_type" value="Open to All" checked> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span class="font-bold">Open to all </span>
                                                </label>
                                        </div>
                                    </a>
                                    <a class="dropdown-item pad_15" href="#">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" class="big" name="post_type" id="post_type" value="Friends" checked> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span class="font-bold">Friends </span>
                                                </label>
                                        </div>
                                    </a>
                                    <a class="dropdown-item pad_15" href="#">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" class="big" name="post_type" id="post_type" value="Specific  Person" checked> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span class="font-bold">Specific  Person </span>
                                                </label>
                                        </div>
                                    </a>
                                    <a class="dropdown-item pad_15" href="#">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" class="big" name="post_type" id="post_type" value="Community" checked> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <span class="font-bold">Community </span>
                                            </label>
                                        </div>
                                    </a>
                                    <a class="dropdown-item pad_15" href="#">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" class="big" name="post_type" id="post_type" value="Only Me" checked> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <span class="font-bold">Only me </span>
                                            </label>
                                        </div>
                                    </a> 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                           <!-- <a href="#" class="post">Post</a>-->
                           <button type="submit" class="postbutton">Post</button>
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>

            <!-- Article Pop up Menu Close -->




    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <!--Videos/Photo pop up MODAL-->
        <div class="container">
            <!-- The Modal -->
            <div class="modal fade" id="videos">
                <div class="modal-dialog modal-lg mt-150">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <img src="{{asset('custom/images/user.png')}}" class="mantain_user" />
                            <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="tab-content mantain_tab  pt-3" id="myTabContent">
                                <form action="/action_page.php">
                                    <div class="form-group">
                                        <label for="comment"><i class="far fa-edit edit_modal "></i> &nbsp;<span style="color:#585858;">write something on this page...</span></label>
                                        <textarea class="form-control bdr_none" rows="5" id="comment" name="text"></textarea>
                                    </div>
                                </form>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <p class="color_white">Creat a Post</p>
                                </div>
                                <div class="col-md-3">
                                    <p class="color_pink">Photos</p>
                                </div>
                                <div class="col-md-3">
                                    <p class="color_white">Creat an Article</p>
                                </div>
                                <div class="col-md-3">
                                    <p class="color_white">Documents</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-5">
                                    <a href="#" class="post">Post</a>
                                </div>
                                <div class="col-md-1"></div>
                                <div class="col-md-3">
                                    <div class="dropdown mt-20">
                                        <a href="#" class="dropdown-toggle dw-btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width:100%;">
                                            Open to all
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item pad_15" href="#">
                                                <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="groupOfDefaultRadios" checked>
                                                <label class="custom-control-label" for="defaultGroupExample1"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Option 1</label>
                                            </a>
                                            <a class="dropdown-item pad_15" href="#">
                                                <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="groupOfDefaultRadios" checked>
                                                <label class="custom-control-label" for="defaultGroupExample1"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Option 1</label>
                                            </a>

                                            <a class="dropdown-item pad_15" href="#">
                                                <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="groupOfDefaultRadios" checked>
                                                <label class="custom-control-label" for="defaultGroupExample1"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Option 1</label>
                                            </a>

                                            <a class="dropdown-item pad_15" href="#">
                                                <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="groupOfDefaultRadios" checked>
                                                <label class="custom-control-label" for="defaultGroupExample1"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Option 1</label>
                                            </a>

                                            <a class="dropdown-item pad_15" href="#">
                                                <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="groupOfDefaultRadios" checked>
                                                <label class="custom-control-label" for="defaultGroupExample1"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Option 1</label>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <!--Videos/Photo pop up MODAL-->
        <!--write article pop up MODAL-->
                   
                    <div class="container">
                        <!-- The Modal -->
                        <div class="modal fade" id="documents">
                            <div class="modal-dialog modal-lg mt-150">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <img src="{{asset('custom/images/user.png')}}" class="mantain_user" />
                                        <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <div class="tab-content mantain_tab  pt-3" id="myTabContent">
                                            <form action="/action_page.php">
                                                <div class="form-group">
                                                    <label for="comment"><i class="far fa-edit edit_modal "></i> &nbsp;<span style="color:#585858;">write something on this page...</span></label>
                                                    <textarea class="form-control bdr_none" rows="5" id="comment" name="text"></textarea>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <p class="color_white">Creat a Post</p>
                                            </div>
                                            <div class="col-md-3">
                                                <p class="color_white">Photos</p>
                                            </div>
                                            <div class="col-md-3">
                                                <p class="color_white">Creat an Article</p>
                                            </div>
                                            <div class="col-md-3">
                                                <p class="color_pink">Documents</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3"></div>
                                            <div class="col-md-5">
                                                <a href="#" class="post">Post</a>
                                            </div>
                                            <div class="col-md-1"></div>
                                            <div class="col-md-3">
                                                <div class="dropdown mt-20">
                                                    <a href="#" class="dropdown-toggle dw-btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width:100%;">
                                                        Open to all
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item pad_15" href="#">
                                                            <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="groupOfDefaultRadios" checked>
                                                            <label class="custom-control-label" for="defaultGroupExample1"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Option 1</label>
                                                        </a>
                                                        <a class="dropdown-item pad_15" href="#">
                                                            <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="groupOfDefaultRadios" checked>
                                                            <label class="custom-control-label" for="defaultGroupExample1"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Option 1</label>
                                                        </a>

                                                        <a class="dropdown-item pad_15" href="#">
                                                            <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="groupOfDefaultRadios" checked>
                                                            <label class="custom-control-label" for="defaultGroupExample1"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Option 1</label>
                                                        </a>

                                                        <a class="dropdown-item pad_15" href="#">
                                                            <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="groupOfDefaultRadios" checked>
                                                            <label class="custom-control-label" for="defaultGroupExample1"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Option 1</label>
                                                        </a>

                                                        <a class="dropdown-item pad_15" href="#">
                                                            <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="groupOfDefaultRadios" checked>
                                                            <label class="custom-control-label" for="defaultGroupExample1"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Option 1</label>
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <!--write article end pop up MODAL-->
                   
                    <!--Article MODAL-->
                    <div class="container">
                        <!-- The Modal -->
                        <div class="modal fade" id="article">
                            <div class="modal-dialog modal-lg mt-150">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <img src="{{asset('custom/images/user.png')}}" class="mantain_user" />
                                        <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <div class="tab-content mantain_tab  pt-3" id="myTabContent">
                                            <form action="/action_page.php">
                                                <div class="form-group">
                                                    <label for="comment"><i class="far fa-edit edit_modal "></i> &nbsp;<span style="color:#585858;">write something on this page...</span></label>
                                                    <textarea class="form-control bdr_none" rows="5" id="comment" name="text"></textarea>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <p class="color_white">Creat a Post</p>
                                            </div>
                                            <div class="col-md-3">
                                                <p class="color_white">Photos</p>
                                            </div>
                                            <div class="col-md-3">
                                                <p class="color_pink">Creat an Article</p>
                                            </div>
                                            <div class="col-md-3">
                                                <p class="color_white">Documents</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3"></div>
                                            <div class="col-md-5">
                                                <a href="#" class="post">Post</a>
                                            </div>
                                            <div class="col-md-1"></div>
                                            <div class="col-md-3">
                                                <div class="dropdown mt-20">
                                                    <a href="#" class="dropdown-toggle dw-btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width:100%;">
                                                        Open to all
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item pad_15" href="#">
                                                            <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="groupOfDefaultRadios" checked>
                                                            <label class="custom-control-label" for="defaultGroupExample1"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Option 1</label>
                                                        </a>
                                                        <a class="dropdown-item pad_15" href="#">
                                                            <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="groupOfDefaultRadios" checked>
                                                            <label class="custom-control-label" for="defaultGroupExample1"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Option 1</label>
                                                        </a>

                                                        <a class="dropdown-item pad_15" href="#">
                                                            <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="groupOfDefaultRadios" checked>
                                                            <label class="custom-control-label" for="defaultGroupExample1"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Option 1</label>
                                                        </a>

                                                        <a class="dropdown-item pad_15" href="#">
                                                            <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="groupOfDefaultRadios" checked>
                                                            <label class="custom-control-label" for="defaultGroupExample1"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Option 1</label>
                                                        </a>

                                                        <a class="dropdown-item pad_15" href="#">
                                                            <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="groupOfDefaultRadios" checked>
                                                            <label class="custom-control-label" for="defaultGroupExample1"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Option 1</label>
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <!--Article MODAL-->

                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-sm-2 col-xs-2 text-center wid_33">
                            <button type="button" class="btn btn-link btn-icon pd-13" data-toggle="modal" data-target="#videos"><i class="fa fa-camera-retro clr_pink"></i>&nbsp;Photo/Video</button>
                        </div>

                        <div class="col-md-4 col-lg-4 col-sm-2 col-sx-2 text-center wid_33">
                            <button type="button" class="btn btn-link btn-icon pd-13" data-toggle="modal" data-target="#article"><i class="far fa-edit clr_pink"></i>&nbsp;Write an article</button>
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-2 col-sx-2 text-center wid_33">
                            <button type="button" class="btn btn-link btn-icon pd-13" data-toggle="modal" data-target="#documents"><i class="fas fa-file-alt clr_pink"></i> &nbsp;Documents</button>
                        </div>

                    </div>
                </div>
<!-- Page name setup start -->
    @include('pages.statuspageshow')
<!-- Page name setup end -->



  </div>

            @include('pages.rightsidebar')
        </div>
        </div>
       
@endsection