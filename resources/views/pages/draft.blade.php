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
                                <div class="pink_bg">
                                    <img src="{{asset('custom/images/icons/draft_white.png')}}" class="work_image" />
                                    <p class="work_p_white">Draft</p>
                                </div>
                                <div class="white_bg">
                                    <img src="{{asset('custom/images/icons/last.png')}}" class="work_image" />
                                    <p class="work_p">Updates</p>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div id="Draft" class="tabcontent tab_width">
                                    <form>
                                        <div class="select-option">
                                            <select name="cars" id="cars">
                                                <option value="volvo">OPTIONS</option>
                                                <option value="saab">Saab</option>
                                                <option value="opel">Opel</option>
                                                <option value="audi">Audi</option>
                                            </select>
                                        </div>
                                       
                                        <div class="image-draft">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                                    <img src="{{asset('custom/images/blog.jpg')}}" class="blog" />
                                                    <div class="tabcontent-img" style="background: none;">
                                                        <div class="row">
                                                            <div class="col-md-6"><a href="#">EDIT</a></div>
                                                            <div class="col-md-6"><a href="#">PUBLISH</a></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                                    <img src="{{asset('custom/images/blog.jpg')}}" class="blog" />
                                                    <div class="tabcontent-img" style="background: none;">
                                                        <div class="row">
                                                            <div class="col-md-6"><a href="#">EDIT</a></div>
                                                            <div class="col-md-6"><a href="#">PUBLISH</a></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                                    <img src="{{asset('custom/images/blog.jpg')}}" class="blog" />
                                                    <div class="tabcontent-img" style="background: none;">
                                                        <div class="row">
                                                            <div class="col-md-6"><a href="#">EDIT</a></div>
                                                            <div class="col-md-6"><a href="#">PUBLISH</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                                    <img src="{{asset('custom/images/blog.jpg')}}" class="blog" />
                                                    <div class="tabcontent-img" style="background: none;">
                                                        <div class="row">
                                                            <div class="col-md-6"><a href="#">EDIT</a></div>
                                                            <div class="col-md-6"><a href="#">PUBLISH</a></div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <br><br>
                                        <input type="submit" value="Publish">
                                    </form>
                                </div><div class="clear"></div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection