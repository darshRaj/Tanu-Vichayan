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
@endsection