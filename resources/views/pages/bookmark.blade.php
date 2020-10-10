@extends('pages.master')
@section('content')
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

                                <div class="pink_bg">
                                    <img src="{{asset('custom/images/icons/bookmark_white.png')}}" class="work_image" />
                                    <p class="work_p_white">Bookmark</p>
                                </div>
                                <div class="white_bg">
                                    <img src="{{asset('custom/images/icons/3_a.png')}}" class="work_image" />
                                    <p class="work_p">Appreciations</p>
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
                                <div id="Bookmark" class="tabcontent tab_width">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <a href="#"><img src="{{asset('custom/images/blog.jpg')}}" class="blog" /></a>
                                        </div>

                                        <div class="col-md-3">
                                            <a href="#"><img src="{{asset('custom/images/blog.jpg')}}" class="blog" /></a>
                                        </div>

                                        <div class="col-md-3">
                                            <a href="#"> <img src="{{asset('custom/images/blog.jpg')}}" class="blog" /></a>
                                        </div>

                                        <div class="col-md-3">
                                            <a href="#"> <img src="{{asset('custom/images/blog.jpg')}}" class="blog" /></a>
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