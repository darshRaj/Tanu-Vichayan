@extends('pages.master')
@section('content')
<div class="research-paper-tabs">
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
            <div class="work_bg">
                    <div class="row">
                        <div class="col-md-2 ">
                            <div class="white_bg">
                                <img src="{{asset('custom/images/icons/work_white.png')}}" class="work_image" />
                                <p class="work_p">Work</p>
                            </div>

                            <div class="white_bg">
                                <img src="{{asset('custom/images/icons/bookmark.png')}}" class="work_image" />
                                <p class="work_p">Bookmark</p>
                            </div>
                            <div class="pink_bg">
                                <img src="{{asset('custom/images/icons/3_a_white.png')}}" class="work_image" />
                                <p class="work_p_white">Appreciations</p>
                            </div>
                            <div class="white_bg">
                                <img src="{{asset('custom/images/icons/insites.png')}}" class="work_image" />
                                <p class="work_p">Insights</p>
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
                            <div id="Appreciations" class="tabcontent tab_width">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6 sol-xs-6">
                                        <a href="#"> 
                                            <img src="{{asset('custom/images/blog.jpg')}}" class="blog" />
                                        </a>
                                        <div class="tabcontent-img">
                                            <div class="row">
                                                <div class="col-md-8"><h4>TITLE TOPIC</h4><p>By parsons name</p></div>
                                                <div class="col-md-4"><i class="fa fa-thumbs-up"> 5</i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 sol-xs-6">
                                        <a href="#">
                                        <img src="{{asset('custom/images/blog.jpg')}}" class="blog" />
                                        </a>
                                        <div class="tabcontent-img">
                                            <div class="row">
                                                <div class="col-md-8"><h4>TITLE TOPIC</h4><p>By parsons name</p></div>
                                                <div class="col-md-4"><i class="fa fa-thumbs-up"> 5</i></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 sol-xs-6">
                                        <a href="#">  
                                        <img src="{{asset('custom/images/blog.jpg')}}" class="blog" />
                                        </a>
                                        <div class="tabcontent-img">
                                            <div class="row">
                                                <div class="col-md-8"><h4>TITLE TOPIC</h4><p>By parsons name</p></div>
                                                <div class="col-md-4"><i class="fa fa-thumbs-up"> 5</i></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 sol-xs-6">
                                        <a href="#"> 
                                        <img src="{{asset('custom/images/blog.jpg')}}" class="blog" />
                                        </a>
                                        <div class="tabcontent-img">
                                            <div class="row">
                                                <div class="col-md-8"><h4>TITLE TOPIC</h4><p>By parsons name</p></div>
                                                <div class="col-md-4"><i class="fa fa-thumbs-up"> 5</i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 col-sm-6 sol-xs-6">
                                        <a href="#">
                                        <img src="{{asset('custom/images/blog.jpg')}}" class="blog" />
                                        </a>
                                        <div class="tabcontent-img">
                                            <div class="row">
                                                <div class="col-md-8"><h4>TITLE TOPIC</h4><p>By parsons name</p></div>
                                                <div class="col-md-4"><i class="fa fa-thumbs-up"> 5</i></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 sol-xs-6">
                                    <a href="#">
                                    <img src="{{asset('custom/images/blog.jpg')}}" class="blog" />
                                    </a>
                                        <div class="tabcontent-img">
                                            <div class="row">
                                                <div class="col-md-8"><h4>TITLE TOPIC</h4><p>By parsons name</p></div>
                                                <div class="col-md-4"><i class="fa fa-thumbs-up"> 5</i></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 sol-xs-6">
                                        <a href="#">  
                                        <img src="{{asset('custom/images/blog.jpg')}}" class="blog" />
                                        </a>
                                        <div class="tabcontent-img">
                                            <div class="row">
                                                <div class="col-md-8"><h4>TITLE TOPIC</h4><p>By parsons name</p></div>
                                                <div class="col-md-4"><i class="fa fa-thumbs-up"> 5</i></div>
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
@endsection