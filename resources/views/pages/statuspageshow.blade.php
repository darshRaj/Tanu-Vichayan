<!-- Page name setup -->
<?php
use App\Http\Controllers\PostController;
$post = PostController::postshow();

$likes = App::make("App\Http\Controllers\LikeController")->index($post);
//print_r($post);
?>

<!-- Page name setup -->
<!-- Page name setup -->
@foreach($post as $p)
<div class="card_2">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 width_70">
                            <div class="media" style="padding:5px;">
                                <div class="media-left">
                                    <img src="{{asset('custom/images/l-1.png')}}" class="media-object" style="width:50px">
                                </div>
                                
                                
                                <div class="media-body">
                                    <h4 class="page_name">{{ $p->firstname }} {{ $p->lastname }}</h4>
                                    <p class="media_p">{{ $p->created_at }} &nbsp;<i class="fa fa-globe" style="color:#c12179;"></i>{{ $p-> post_type }}</p>
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
                                            <a class="dropdown-item bdr_btm" href="#"><i class="fa fa-pen clr_pink"></i> &nbsp;Edit</a>
                                            <a class="dropdown-item bdr_btm" href="#"><i class="fa fa-save clr_pink"></i> &nbsp;Save</a>
                                            <a class="dropdown-item bdr_btm" href="#"><i class="fa fa-edit clr_pink"></i> &nbsp;Edit Privacy</a>
                                            <a class="dropdown-item bdr_btm" href="#"><i class="fa fa-trash clr_pink"></i> &nbsp;Delete</a>
                                            <a class="dropdown-item bdr_btm" href="#"><i class="fa fa-bell clr_pink"></i> &nbsp;Turn off notification of this post</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="blog_content">{{ $p->post }}</p>
                    <img src="{{asset('custom/images/blog_1.png')}}" style="width:100%;" />
                    <hr style="margin-bottom:10px;" />
                    <div class="row">
                        <div class="col-md-2 wid_25">
                            <p class="like"><i class="fa fa-thumbs-up like_color"></i>&nbsp;
            <a href="#" >{{ Auth::user()->likes()->where('post_id', $p->id)->first() ? Auth::user()->likes()->where('post_id', $p->id)->first()->like == 1 ? 'You like this post' : 'Like' : 'Like'  }}</a> 
           <!-- <a href="#" >{{ Auth::user()->likes()->where('post_id', $p->id)->first() ? Auth::user()->likes()->where('post_id', $p->id)->first()->like == 0 ? 'You dont like this post' : 'Dislike' : 'Dislike'  }}</a>-->
            
                           <!-- <i class="fa fa-thumbs-up like_color"></i> &nbsp;Like <span>5</span> -->
                            </p>
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
                                            <a class="dropdown-item bdr_btm" href="#"><i class="fas fa-user-tie clr_pink"></i> &nbsp;As a User</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-user-friends clr_pink"></i> &nbsp;As a Community</a>
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
                                <input type="text" placeholder="write a comment..." class="down_input" style="width:100%" />
                            </li>
                        </ul>
                        
                    </div>

                   
                    <div class="row">
                    
                      
                        <div class="col-md-10 col-lg-10 col-sm-10 col-xs-10 width_70">
                            <div class="media" style="padding:5px;">
                                <div class="media-left">
                                   <input type="image" id="image" alt="Login" src="{{asset('custom/images/l-1.png')}}" class="width_35">
                                </div>
                                
                                <div class="media-body">
                                  <ul style="list-style:none;">
                           
                                    <li class="li_90" style="float:left;padding-left:15px;">
                                        {{-- <input type="text" placeholder="write a comment..." class="down_input" style="width:100%" /> --}}
                                        <h6 class="comment_name">Siddharth Brahma</h6>
                                        <p class="comment_p">This is a nice compliment This is a nice compliment.<span class="bg_wit"> <a href="#" class="like_font_pink"><i class="fa fa-thumbs-up like_circle"></i><span>5</span> </span> </a> &nbsp; &nbsp;  </p>

                                        <p class="comment_p"><a href="#" class="like_font">Like </a> &nbsp; <a href="#" class="like_font">Reply</a> &nbsp; <a href="#" class="like_font">3 days</a></p>
                                    </li>
                                </ul>
                             </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 width_28 text-right">
                            <div class="row">
                                <div class="col-md-9"></div>
                                <div class="col-md-1 col-sm-12 col-xs-3">
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle side_btn" type="button" data-toggle="dropdown" style="color:#585858 !important;">
                                            <span class="caret caret_color"></span>
                                        </button>
                                          <div class="dropdown-menu dropdown-menu-right dropdown-cyan" aria-labelledby="navbarDropdownMenuLink-4">
                                            <a class="dropdown-item bdr_btm" href="#"><i class="fa fa-edit clr_pink"></i> &nbsp;Edit</a>
                                            <a class="dropdown-item bdr_btm" href="#"><i class="fa fa-trash clr_pink"></i> &nbsp;Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                         <div class="col-md-12">
                             <a href="#" data-toggle="collapse" data-target="#demo" class="collapse_text">See all Comments</a>
                            <div id="demo" class="collapse">

                        {{-- Comment1 --}}
                                 <div class="media" style="padding:5px;">
                                <div class="media-left">
                                   <input type="image" id="image" alt="Login" src="{{asset('custom/images/l-1.png')}}" class="width_35">
                                </div>
                                
                                <div class="media-body">
                                  <ul style="list-style:none;">
                           
                                    <li class="li_90" style="float:left;padding-left:15px;">
                                        {{-- <input type="text" placeholder="write a comment..." class="down_input" style="width:100%" /> --}}
                                        <h6 class="comment_name">Chinmay</h6>
                                        <p class="comment_p">This is a nice compliment This is a nice compliment.<span class="bg_wit"> <a href="#" class="like_font_pink"><i class="fa fa-thumbs-up like_circle"></i><span>5</span> </span> </a> &nbsp; &nbsp;  </p>

                                        <p class="comment_p"><a href="#" class="like_font">Like </a> &nbsp; <a href="#" class="like_font">Reply</a> &nbsp; <a href="#" class="like_font">3 days</a></p>
                                    </li>
                                </ul>
                             </div>
                            </div>

                        {{-- Comment1 --}}


                        {{-- Comment1 --}}
                                 <div class="media" style="padding:5px;">
                                <div class="media-left">
                                   <input type="image" id="image" alt="Login" src="{{asset('custom/images/l-1.png')}}" class="width_35">
                                </div>
                                
                                <div class="media-body">
                                  <ul style="list-style:none;">
                           
                                    <li class="li_90" style="float:left;padding-left:15px;">
                                        {{-- <input type="text" placeholder="write a comment..." class="down_input" style="width:100%" /> --}}
                                        <h6 class="comment_name">Manash</h6>
                                        <p class="comment_p">This is a nice compliment This is a nice compliment.<span class="bg_wit"> <a href="#" class="like_font_pink"><i class="fa fa-thumbs-up like_circle"></i><span>5</span> </span> </a> &nbsp; &nbsp;  </p>

                                        <p class="comment_p"><a href="#" class="like_font">Like </a> &nbsp; <a href="#" class="like_font">Reply</a> &nbsp; <a href="#" class="like_font">3 days</a></p>
                                    </li>
                                </ul>
                             </div>
                            </div>

                        {{-- Comment1 --}}



                            </div> 
                        </div> 
                    </div>

                   


{{-- 
                    <div class="bg-lit">
                        <ul style="list-style:none;">
                            <li class="li_10">
                                <input type="image" id="image" alt="Login" src="{{asset('custom/images/l-1.png')}}" class="width_35">
                            </li>
                            <li class="li_90 bg_f7">
                            
                                <h6 class="comment_name">Siddharth Brahma</h6>
                                <p class="comment_p">This is a nice compliment This is a nice compliment.<span class="bg_wit"> <a href="#" class="like_font_pink"><i class="fa fa-thumbs-up like_circle"></i><span>5</span> </span> </a> &nbsp; &nbsp;  </p>

                                <p class="comment_p"><a href="#" class="like_font">Like </a> &nbsp; <a href="#" class="like_font">Reply</a> &nbsp; <a href="#" class="like_font">3 days</a></p>
                            </li>
                        </ul>
                        
                    </div> --}}
                </div>
<!-- Page name setup end -->

    <script src="{{ asset('custom/js/like.js') }}"></script>
    <script>
      var token = '{{ Session::token() }}';
      var urlLike = '{{ route('like') }}';
    </script>

 @endforeach             
                
<!-- Page name setup end -->
