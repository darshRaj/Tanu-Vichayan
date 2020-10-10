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



<!-- Page name setup -->
                <div class="card_2">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 width_70">
                            <div class="media" style="padding:5px;">
                                <div class="media-left">
                                    <img src="{{asset('custom/images/l-1.png')}}" class="media-object" style="width:50px">
                                </div>
                                <div class="media-body">
                                    <h4 class="page_name">Page Name </h4>
                                    <p class="media_p">April 13 at 4.13 am &nbsp;&nbsp;<i class="fa fa-globe" style="color:#c12179;"></i></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 width_28 text-right">
                            <div class="row">
                                <div class="col-md-9"></div>
                                <div class="col-md-1 col-sm-12 col-xs-3">
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle side_btn" type="button" data-toggle="dropdown" style="color:#585858 !important;">
                                            <span class="caret caret_color"></span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-cyan" aria-labelledby="navbarDropdownMenuLink-4">
                                            <a class="dropdown-item" href="#">Facebook</a>
                                            <a class="dropdown-item" href="#">Instagram</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="blog_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <img src="{{asset('custom/images/blog_1.png')}}" style="width:100%;" />
                    <hr style="margin-bottom:10px;" />
                    <div class="row">
                        <div class="col-md-2 wid_25">
                            <p class="like"><i class="fa fa-thumbs-up like_color"></i> &nbsp;Like <span>5</span> </p>
                        </div>
                        <div class="col-md-3 wid_25">
                            <p class="like"><i class="fa fa-comment"></i> &nbsp;Comment</p>
                        </div>
                        <div class="col-md-3 wid_25">
                            <p class="like"><i class="fas fa-share"></i> &nbsp;Share</p>
                        </div>

                        <div class="col-md-4 text-right wid_25">
                            <div class="row">
                                <div class="col-md-7"></div>
                                <div class="col-md-1 col-sm-2 col-xs-2">
                                    <img src="{{asset('custom/images/user.png')}}" class="user_image2" />
                                </div>
                                <div class="col-md-1 col-sm-12 col-xs-3">
                                    <div class="dropdown ml-15">
                                        <button class="btn btn-default dropdown-toggle side_btn2" type="button" data-toggle="dropdown">

                                            <span class="caret"></span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-cyan" aria-labelledby="navbarDropdownMenuLink-4">
                                            <a class="dropdown-item" href="#">Facebook</a>
                                            <a class="dropdown-item" href="#">Instagram</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-lit">
                        <ul style="list-style:none;">
                            <li class="li_10">
                                <input type="image" id="image" alt="Login" src="{{asset('custom/images/l-1.png')}}" class="width_35">
                            </li>
                            <li class="li_90">
                                <input type="text" placeholder="write a comment..." class="down_input" style="" />
                            </li>
                        </ul>
                    </div>
                </div>
<!-- Page name setup end -->