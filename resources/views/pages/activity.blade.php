@extends('pages.master')


@section('content')
<div class="container-fluid">
        <div class="row">
        <div class="col-md-3 col-sm-12 col-xs-12 mobile_none">
           @include('pages.leftsidebar')
           </div>


            <div class="col-md-5 col-sm-12 col-xs-12">
                <!-- <br /> -->
                <!--<div class="dashboard">
                    <h3 class="dash_h3"> My Activities </h3>

                    <div class="row">
                      <div class="col-md-12">
                          <ul>
                              <li class="width"><a href="#" class="activity_tab bag_pink"><i class="fa fa-outdent"></i></a></li>
                              <li class="width2"><a href="#" class="activity_tab bag_pink_all">All</a></li>
                              <li class="width2"><a href="#" class="activity_tab bag_white">Articles</a></li>
                              <li class="width2"><a href="#" class="activity_tab bag_white">posts</a></li>
                              <li class="width2"><a href="#" class="activity_tab bag_white">Documents</a></li>
                          </ul>
                      </div>
                    </div>
                </div>-->

                <div class="dashboard">
                    <h3 class="dash_h3"> My Activities </h3>
                    <div class="card">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><span>All   </span></a></li>
                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"> <span>Article</span></a></li>
                            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab"> <span>Posts</span></a></li>
                            <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab"><span>Documents</span></a></li>
                        </ul>
                    </div>
                  
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Nav tabs -->
                            <div class="card">

                                <!-- Tab panes -->
                                <div class="tab-content mt-20">
                                    <!--first tab-->
                                    <div role="tabpanel" class="tab-pane active" id="home">
                                    
                                        <div class="activity_border">
                                            <div role="tabpanel" class="active" id="home">
                                                <div class="card_3">
                                                    <div class="row">
                                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 width_70">
                                                            <div class="media" style="padding:5px;">
                                                                <div class="media-left">
                                                                    <img src="images/l-1.png" class="media-object" style="width:40px">
                                                                </div>
                                                                <div class="media-body">
                                                                    <h4 class="page_name_activity">Every Economic </h4>
                                                                    <p class="media_p_activity">1day </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="blog_content_activity">Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                    <img src="images/active_1.png" style="width:100%;" />
                                                    <p class="mb_12"><a href="#" class="comment">250 Like</a> &nbsp;&nbsp; <a href="#" class="comment">10 Comment</a> </p>

                                                    <ul class="btm_15">
                                                        <li class="float_left"><a href="#" class="pink_color"> <i class="fa fa-thumbs-up"></i> like &nbsp;&nbsp;</a></li>
                                                        <li class="float_left"><a href="#" class="black"><i class="fa fa-comment"></i> comment &nbsp;&nbsp;</a></li>
                                                        <li class="float_left"><a href="#" class="black"><i class="fa fa-share-square"></i> share &nbsp;&nbsp;</a></li>
                                                        <li class="float_left"><a href="#" class="black"><i class="fa fa-share"></i> send</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="activity_border">
                                            <div role="tabpanel" class="active" id="home">
                                                <div class="card_3">
                                                    <div class="row">
                                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 width_70">
                                                            <div class="media" style="padding:5px;">
                                                                <div class="media-left">
                                                                    <img src="images/l-1.png" class="media-object" style="width:40px">
                                                                </div>
                                                                <div class="media-body">
                                                                    <h4 class="page_name_activity">Every Economic </h4>
                                                                    <p class="media_p_activity">1day </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="blog_content_activity">Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                    <img src="images/active_2.png" style="width:100%;" />
                                                    <p class="mb_12"><a href="#" class="comment">250 Like</a> &nbsp;&nbsp; <a href="#" class="comment">10 Comment</a> </p>

                                                    <ul class="btm_15">
                                                        <li class="float_left"><a href="#" class="pink_color"> <i class="fa fa-thumbs-up"></i> like &nbsp;&nbsp;</a></li>
                                                        <li class="float_left"><a href="#" class="black"><i class="fa fa-comment"></i> comment &nbsp;&nbsp;</a></li>
                                                        <li class="float_left"><a href="#" class="black"><i class="fa fa-share-square"></i> share &nbsp;&nbsp;</a></li>
                                                        <li class="float_left"><a href="#" class="black"><i class="fa fa-share"></i> send</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="activity_border">
                                            <div role="tabpanel" class="active" id="home">
                                                <div class="card_3">
                                                    <div class="row">
                                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 width_70">
                                                            <div class="media" style="padding:5px;">
                                                                <div class="media-left">
                                                                    <img src="images/l-1.png" class="media-object" style="width:40px">
                                                                </div>
                                                                <div class="media-body">
                                                                    <h4 class="page_name_activity">Every Economic </h4>
                                                                    <p class="media_p_activity">1day </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="blog_content_activity">Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                    <img src="images/active_3.png" style="width:100%;" />
                                                    <p class="mb_12"><a href="#" class="comment">250 Like</a> &nbsp;&nbsp; <a href="#" class="comment">10 Comment</a> </p>

                                                    <ul class="btm_15">
                                                        <li class="float_left"><a href="#" class="pink_color"> <i class="fa fa-thumbs-up"></i> like &nbsp;&nbsp;</a></li>
                                                        <li class="float_left"><a href="#" class="black"><i class="fa fa-comment"></i> comment &nbsp;&nbsp;</a></li>
                                                        <li class="float_left"><a href="#" class="black"><i class="fa fa-share-square"></i> share &nbsp;&nbsp;</a></li>
                                                        <li class="float_left"><a href="#" class="black"><i class="fa fa-share"></i> send</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    
                                    </div>

                                    <!--first tab-->

                                    <!--first tab-->
                                    <div role="tabpanel" class="tab-pane" id="profile">
                                    
                                        <div class="activity_border">
                                            <div role="tabpanel" class="active" id="home">
                                                <div class="card_3">
                                                    <div class="row">
                                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 width_70">
                                                            <div class="media" style="padding:5px;">
                                                                <div class="media-left">
                                                                    <img src="images/l-1.png" class="media-object" style="width:40px">
                                                                </div>
                                                                <div class="media-body">
                                                                    <h4 class="page_name_activity">Every Economic </h4>
                                                                    <p class="media_p_activity">1day </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="blog_content_activity">Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                    <img src="images/active_2.png" style="width:100%;" />
                                                    <p class="mb_12"><a href="#" class="comment">250 Like</a> &nbsp;&nbsp; <a href="#" class="comment">10 Comment</a> </p>

                                                    <ul class="btm_15">
                                                        <li class="float_left"><a href="#" class="pink_color"> <i class="fa fa-thumbs-up"></i> like &nbsp;&nbsp;</a></li>
                                                        <li class="float_left"><a href="#" class="black"><i class="fa fa-comment"></i> comment &nbsp;&nbsp;</a></li>
                                                        <li class="float_left"><a href="#" class="black"><i class="fa fa-share-square"></i> share &nbsp;&nbsp;</a></li>
                                                        <li class="float_left"><a href="#" class="black"><i class="fa fa-share"></i> send</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="activity_border">
                                            <div role="tabpanel" class="active" id="home">
                                                <div class="card_3">
                                                    <div class="row">
                                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 width_70">
                                                            <div class="media" style="padding:5px;">
                                                                <div class="media-left">
                                                                    <img src="images/l-1.png" class="media-object" style="width:40px">
                                                                </div>
                                                                <div class="media-body">
                                                                    <h4 class="page_name_activity">Every Economic </h4>
                                                                    <p class="media_p_activity">1day </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="blog_content_activity">Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                    <img src="images/active_3.png" style="width:100%;" />
                                                    <p class="mb_12"><a href="#" class="comment">250 Like</a> &nbsp;&nbsp; <a href="#" class="comment">10 Comment</a> </p>

                                                    <ul class="btm_15">
                                                        <li class="float_left"><a href="#" class="pink_color"> <i class="fa fa-thumbs-up"></i> like &nbsp;&nbsp;</a></li>
                                                        <li class="float_left"><a href="#" class="black"><i class="fa fa-comment"></i> comment &nbsp;&nbsp;</a></li>
                                                        <li class="float_left"><a href="#" class="black"><i class="fa fa-share-square"></i> share &nbsp;&nbsp;</a></li>
                                                        <li class="float_left"><a href="#" class="black"><i class="fa fa-share"></i> send</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="activity_border">
                                            <div role="tabpanel" class="active" id="home">
                                                <div class="card_3">
                                                    <div class="row">
                                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 width_70">
                                                            <div class="media" style="padding:5px;">
                                                                <div class="media-left">
                                                                    <img src="images/l-1.png" class="media-object" style="width:40px">
                                                                </div>
                                                                <div class="media-body">
                                                                    <h4 class="page_name_activity">Every Economic </h4>
                                                                    <p class="media_p_activity">1day </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="blog_content_activity">Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                    <img src="images/active_1.png" style="width:100%;" />
                                                    <p class="mb_12"><a href="#" class="comment">250 Like</a> &nbsp;&nbsp; <a href="#" class="comment">10 Comment</a> </p>

                                                    <ul class="btm_15">
                                                        <li class="float_left"><a href="#" class="pink_color"> <i class="fa fa-thumbs-up"></i> like &nbsp;&nbsp;</a></li>
                                                        <li class="float_left"><a href="#" class="black"><i class="fa fa-comment"></i> comment &nbsp;&nbsp;</a></li>
                                                        <li class="float_left"><a href="#" class="black"><i class="fa fa-share-square"></i> share &nbsp;&nbsp;</a></li>
                                                        <li class="float_left"><a href="#" class="black"><i class="fa fa-share"></i> send</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!--first tab-->

                                    <!--first tab-->
                                    
                                    <div role="tabpanel" class="tab-pane" id="messages">
                                    
                                        <div class="activity_border">
                                            <div role="tabpanel" class="active" id="home">
                                                <div class="card_3">
                                                    <div class="row">
                                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 width_70">
                                                            <div class="media" style="padding:5px;">
                                                                <div class="media-left">
                                                                    <img src="images/l-1.png" class="media-object" style="width:40px">
                                                                </div>
                                                                <div class="media-body">
                                                                    <h4 class="page_name_activity">Every Economic </h4>
                                                                    <p class="media_p_activity">1day </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="blog_content_activity">Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                    <img src="images/active_1.png" style="width:100%;" />
                                                    <p class="mb_12"><a href="#" class="comment">250 Like</a> &nbsp;&nbsp; <a href="#" class="comment">10 Comment</a> </p>

                                                    <ul class="btm_15">
                                                        <li class="float_left"><a href="#" class="pink_color"> <i class="fa fa-thumbs-up"></i> like &nbsp;&nbsp;</a></li>
                                                        <li class="float_left"><a href="#" class="black"><i class="fa fa-comment"></i> comment &nbsp;&nbsp;</a></li>
                                                        <li class="float_left"><a href="#" class="black"><i class="fa fa-share-square"></i> share &nbsp;&nbsp;</a></li>
                                                        <li class="float_left"><a href="#" class="black"><i class="fa fa-share"></i> send</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="activity_border">
                                            <div role="tabpanel" class="active" id="home">
                                                <div class="card_3">
                                                    <div class="row">
                                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 width_70">
                                                            <div class="media" style="padding:5px;">
                                                                <div class="media-left">
                                                                    <img src="images/l-1.png" class="media-object" style="width:40px">
                                                                </div>
                                                                <div class="media-body">
                                                                    <h4 class="page_name_activity">Every Economic </h4>
                                                                    <p class="media_p_activity">1day </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="blog_content_activity">Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                    <img src="images/active_2.png" style="width:100%;" />
                                                    <p class="mb_12"><a href="#" class="comment">250 Like</a> &nbsp;&nbsp; <a href="#" class="comment">10 Comment</a> </p>

                                                    <ul class="btm_15">
                                                        <li class="float_left"><a href="#" class="pink_color"> <i class="fa fa-thumbs-up"></i> like &nbsp;&nbsp;</a></li>
                                                        <li class="float_left"><a href="#" class="black"><i class="fa fa-comment"></i> comment &nbsp;&nbsp;</a></li>
                                                        <li class="float_left"><a href="#" class="black"><i class="fa fa-share-square"></i> share &nbsp;&nbsp;</a></li>
                                                        <li class="float_left"><a href="#" class="black"><i class="fa fa-share"></i> send</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="activity_border">
                                            <div role="tabpanel" class="active" id="home">
                                                <div class="card_3">
                                                    <div class="row">
                                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 width_70">
                                                            <div class="media" style="padding:5px;">
                                                                <div class="media-left">
                                                                    <img src="images/l-1.png" class="media-object" style="width:40px">
                                                                </div>
                                                                <div class="media-body">
                                                                    <h4 class="page_name_activity">Every Economic </h4>
                                                                    <p class="media_p_activity">1day </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="blog_content_activity">Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                    <img src="images/active_3.png" style="width:100%;" />
                                                    <p class="mb_12"><a href="#" class="comment">250 Like</a> &nbsp;&nbsp; <a href="#" class="comment">10 Comment</a> </p>

                                                    <ul class="btm_15">
                                                        <li class="float_left"><a href="#" class="pink_color"> <i class="fa fa-thumbs-up"></i> like &nbsp;&nbsp;</a></li>
                                                        <li class="float_left"><a href="#" class="black"><i class="fa fa-comment"></i> comment &nbsp;&nbsp;</a></li>
                                                        <li class="float_left"><a href="#" class="black"><i class="fa fa-share-square"></i> share &nbsp;&nbsp;</a></li>
                                                        <li class="float_left"><a href="#" class="black"><i class="fa fa-share"></i> send</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!--first tab-->
                                    

                                    <!--first tab-->
                                    <div role="tabpanel" class="tab-pane" id="settings">
                                    
                                        <div class="activity_border">
                                            <div role="tabpanel" class="active" id="home">
                                                <div class="card_3">
                                                    <div class="row">
                                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 width_70">
                                                            <div class="media" style="padding:5px;">
                                                                <div class="media-left">
                                                                    <img src="images/l-1.png" class="media-object" style="width:40px">
                                                                </div>
                                                                <div class="media-body">
                                                                    <h4 class="page_name_activity">Every Economic </h4>
                                                                    <p class="media_p_activity">1day </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="blog_content_activity">Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                    <img src="images/active_3.png" style="width:100%;" />
                                                    <p class="mb_12"><a href="#" class="comment">250 Like</a> &nbsp;&nbsp; <a href="#" class="comment">10 Comment</a> </p>

                                                    <ul class="btm_15">
                                                        <li class="float_left"><a href="#" class="pink_color"> <i class="fa fa-thumbs-up"></i> like &nbsp;&nbsp;</a></li>
                                                        <li class="float_left"><a href="#" class="black"><i class="fa fa-comment"></i> comment &nbsp;&nbsp;</a></li>
                                                        <li class="float_left"><a href="#" class="black"><i class="fa fa-share-square"></i> share &nbsp;&nbsp;</a></li>
                                                        <li class="float_left"><a href="#" class="black"><i class="fa fa-share"></i> send</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="activity_border">
                                            <div role="tabpanel" class="active" id="home">
                                                <div class="card_3">
                                                    <div class="row">
                                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 width_70">
                                                            <div class="media" style="padding:5px;">
                                                                <div class="media-left">
                                                                    <img src="images/l-1.png" class="media-object" style="width:40px">
                                                                </div>
                                                                <div class="media-body">
                                                                    <h4 class="page_name_activity">Every Economic </h4>
                                                                    <p class="media_p_activity">1day </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="blog_content_activity">Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                    <img src="images/active_1.png" style="width:100%;" />
                                                    <p class="mb_12"><a href="#" class="comment">250 Like</a> &nbsp;&nbsp; <a href="#" class="comment">10 Comment</a> </p>

                                                    <ul class="btm_15">
                                                        <li class="float_left"><a href="#" class="pink_color"> <i class="fa fa-thumbs-up"></i> like &nbsp;&nbsp;</a></li>
                                                        <li class="float_left"><a href="#" class="black"><i class="fa fa-comment"></i> comment &nbsp;&nbsp;</a></li>
                                                        <li class="float_left"><a href="#" class="black"><i class="fa fa-share-square"></i> share &nbsp;&nbsp;</a></li>
                                                        <li class="float_left"><a href="#" class="black"><i class="fa fa-share"></i> send</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="activity_border">
                                            <div role="tabpanel" class="active" id="home">
                                                <div class="card_3">
                                                    <div class="row">
                                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 width_70">
                                                            <div class="media" style="padding:5px;">
                                                                <div class="media-left">
                                                                    <img src="images/l-1.png" class="media-object" style="width:40px">
                                                                </div>
                                                                <div class="media-body">
                                                                    <h4 class="page_name_activity">Every Economic </h4>
                                                                    <p class="media_p_activity">1day </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="blog_content_activity">Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                    <img src="images/active_2.png" style="width:100%;" />
                                                    <p class="mb_12"><a href="#" class="comment">250 Like</a> &nbsp;&nbsp; <a href="#" class="comment">10 Comment</a> </p>

                                                    <ul class="btm_15">
                                                        <li class="float_left"><a href="#" class="pink_color"> <i class="fa fa-thumbs-up"></i> like &nbsp;&nbsp;</a></li>
                                                        <li class="float_left"><a href="#" class="black"><i class="fa fa-comment"></i> comment &nbsp;&nbsp;</a></li>
                                                        <li class="float_left"><a href="#" class="black"><i class="fa fa-share-square"></i> share &nbsp;&nbsp;</a></li>
                                                        <li class="float_left"><a href="#" class="black"><i class="fa fa-share"></i> send</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    
                                    </div>
                                <!--first tab-->
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('pages.rightsidebar')
        </div>
        

@endsection