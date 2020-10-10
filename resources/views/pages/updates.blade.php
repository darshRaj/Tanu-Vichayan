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

                                <div class="white_bg">
                                    <img src="{{asset('custom/images/icons/bookmark.png')}}" class="work_image" />
                                    <p class="work_p">Bookmark</p>
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
                                <div class="pink_bg">
                                    <img src="{{asset('custom/images/icons/last_white.png')}}" class="work_image" />
                                    <p class="work_p_white">Updates</p>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div id="Updates" class="tabcontent tab_width">
                                    <ul>
                                        <li class="update_li">
                                            <i class="fa fa-check update_check"></i>
                                            <span class="update_span">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            </span>
                                        </li>
                                    </ul>
                                    <br />
                                    <ul>
                                        <li class="update_li">
                                            <i class="fa fa-check update_check"></i>
                                            <span class="update_span">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            </span>
                                        </li>
                                    </ul>
                                    <br />
                                    <ul>
                                        <li class="update_li">
                                            <i class="fa fa-check update_check"></i>
                                            <span class="update_span">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            </span>
                                        </li>
                                    </ul>
                                    <br />
                                    <ul>
                                        <li class="update_li">
                                            <i class="fa fa-check update_check"></i>
                                            <span class="update_span">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            </span>
                                        </li>
                                    </ul>
                                    <br />
                                    <ul>
                                        <li class="update_li">
                                            <i class="fa fa-check update_check"></i>
                                            <span class="update_span">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection