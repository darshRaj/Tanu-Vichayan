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
                                <div class="pink_bg">
                                    <img src="{{asset('custom/images/icons/work_white.png')}}" class="work_image" />
                                    <p class="work_p_white">Work</p>
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
                                <div class="white_bg">
                                    <img src="{{asset('custom/images/icons/last.png')}}" class="work_image" />
                                    <p class="work_p">Updates</p>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div id="Work" class="tab_width">
                                    <h5 class="create"> Create  A Recearch Paper 1</h5>
                                    <h5 class="create"> <a href="{{url('pages.publications')}}" class="save-inline">Publications</a></h5>
                                    <p><i class="fa fa-pencil-square-o" style="display:block;"></i></p>
                                    <p class="feedback1">Get feedback,views, and appreciations.<br />Public projects can be featured by our curators.</p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection