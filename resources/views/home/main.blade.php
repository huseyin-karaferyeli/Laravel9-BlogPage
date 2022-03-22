@extends('layouts.main_layout')

@section('title', 'Blog Page')

@section('slider')
    @include('home.slider')
@endsection

@section('content')

    <div class="main">
        <div class="wrap">
            <h2 class="m_1">dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</h2>
            <div class="content-top">
                <div class="col_1_of_4 span_1_of_4">
                    <i class="settings"> </i>
                    <img src="{{asset("assets")}}/images/pic.jpg" alt=""/>
                    <div class="desc">
                        <h3>Easy Customizable</h3>
                        <p>Lorem ipsum dolor sit amet,consect<br> adipiscing elit, sed diam nonummy nibh<br>euismod tincidunt ut laoreet dolore delenit.</p>
                    </div>
                </div>
                <div class="col_1_of_4 span_1_of_4">
                    <i class="clock"> </i>
                    <img src="{{asset("assets")}}/images/pic1.jpg" alt=""/>
                    <div class="desc">
                        <h3>Project Planning</h3>
                        <p>augue duis dolore te feugait nulla<br> adipiscing elit, sed diam nonummy nibh<br>euismod tincidunt ut laoreet dolore delenit.</p>
                    </div>
                </div>
                <div class="col_1_of_4 span_1_of_4">
                    <i class="aeroplane"> </i>
                    <img src="{{asset("assets")}}/images/pic2.jpg" alt=""/>
                    <div class="desc">
                        <h3>Fastest Workers</h3>
                        <p>soluta nobis eleifend option congue<br> adipiscing elit, sed diam nonummy nibh<br>euismod tincidunt ut laoreet dolore delenit.</p>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="m_3"><span class="left_line"></span> Top Features<span class="right_line"> </span></div>
            <div class="content-middle">
                <div class="col_1_of_middle span_1_of_middle">
                    <img src="{{asset("assets")}}/images/mac_img1.png" alt=""/>
                </div>
                <div class="col_1_of_middle span_1_of_middle">
                    <h3>diam nonummy nibh euismod tincidunt ut laoreet dolore</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam</p>
                    <div class="btn"><a href="#">Learn More</a></div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="content-middle-bottom">
                <div class="col_1_of_middle span_1_of_middle">
                    <h3>diam nonummy nibh euismod tincidunt ut laoreet dolore</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duisautem vel eum iriure dolor in hendrerit in vulputate velit esse molestie</p>
                    <div class="btn"><a href="#">Learn More</a></div>
                </div>
                <div class="col_1_of_middle span_1_of_middle">
                    <ul class="progress vertical">
                        <li class="bar bar-success" style="width:100%;height:70%;"> </li>
                    </ul>
                    <ul class="progress vertical">
                        <li class="bar bar-success" style="width:100%;height:60%;"> </li>
                    </ul>
                    <ul class="progress vertical">
                        <li class="bar bar-success" style="width:100%;height:20%;"> </li>
                    </ul>
                    <ul class="progress vertical">
                        <li class="bar bar-success" style="width:100%;height:40%;"> </li>
                    </ul>
                    <ul class="progress vertical">
                        <li class="bar bar-success" style="width:100%;height:10%;"> </li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
            <div class="m_3"><span class="left_line"></span> Our Projects<span class="right_line"> </span></div>
            <div class="content-top">
                <div class="col_1_of_projects span_1_of_projects"><a href="#">
                        <div class="view view-first">
                            <img src="{{asset("assets")}}/images/pic3.jpg" alt=""/>
                            <div class="mask">
                                <h2>Hover Style #1</h2>
                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                                <a class="popup-with-zoom-anim" href="#small-dialog3"> <div class="info">Read More</div></a>
                                <div id="small-dialog3" class="mfp-hide">
                                    <div class="pop_up2">
                                        <img src="{{asset("assets")}}/images/pic3.jpg"/ alt=""/>
                                        <h3 class="m_4"><a href="#">augue duis dolore te feugait</a></h3>
                                        <p class="m_5">Photography</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3 class="m_4"><a href="#">augue duis dolore te feugait</a></h3>
                        <p class="m_5">Photography</p>
                    </a> </div>
                <div class="col_1_of_projects span_1_of_projects"><a href="#">
                        <div class="view view-first">
                            <img src="{{asset("assets")}}/images/pic6.jpg" alt=""/>
                            <div class="mask">
                                <h2>Hover Style #1</h2>
                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                                <a class="popup-with-zoom-anim" href="#small-dialog4"> <div class="info">Read More</div></a>
                                <div id="small-dialog4" class="mfp-hide">
                                    <div class="pop_up2">
                                        <img src="{{asset("assets")}}/images/pic6.jpg"/ alt=""/>
                                        <h3 class="m_4"><a href="#">augue duis dolore te feugait</a></h3>
                                        <p class="m_5">Branding</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3 class="m_4"><a href="#">augue duis dolore te feugait</a></h3>
                        <p class="m_5">Branding</p>
                    </a> </div>
                <div class="col_1_of_projects span_1_of_projects"><a href="#">
                        <div class="view view-first">
                            <img src="{{asset("assets")}}/images/pic5.jpg" alt=""/>
                            <div class="mask">
                                <h2>Hover Style #1</h2>
                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                                <a class="popup-with-zoom-anim" href="#small-dialog5"> <div class="info">Read More</div></a>
                                <div id="small-dialog5" class="mfp-hide">
                                    <div class="pop_up2">
                                        <img src="{{asset("assets")}}/images/pic5.jpg"/ alt=""/>
                                        <h3 class="m_4"><a href="#">augue duis dolore te feugait</a></h3>
                                        <p class="m_5">Web Design</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3 class="m_4"><a href="#">augue duis dolore te feugait</a></h3>
                        <p class="m_5">Web Design</p>
                    </a> </div>
                <div class="col_1_of_projects span_1_of_projects"><a href="#">
                        <div class="view view-first">
                            <img src="{{asset("assets")}}/images/pic4.jpg" alt=""/>
                            <div class="mask">
                                <h2>Hover Style #1</h2>
                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                                <a class="popup-with-zoom-anim" href="#small-dialog6"> <div class="info">Read More</div></a>
                                <div id="small-dialog6" class="mfp-hide">
                                    <div class="pop_up2">
                                        <img src="{{asset("assets")}}/images/pic4.jpg"/ alt=""/>
                                        <h3 class="m_4"><a href="#">augue duis dolore te feugait</a></h3>
                                        <p class="m_5">Marketing</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3 class="m_4"><a href="#">augue duis dolore te feugait</a></h3>
                        <p class="m_5">Marketing</p>
                    </a> </div>
                <div class="clear"></div>
            </div>
            <div class="m_3"><span class="left_line"></span>Testimonials<span class="right_line"> </span></div>
            <div class="wmuSlider example">
                <div class="wmuSliderWrapper">
                    <article style="position: absolute; width: 100%; opacity: 0;">
                        <div class="banner-text">
                            <p>diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud <br>exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor<br> in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>
                        </div>
                        <h3 class="m_6">Ut wisienim, <span class="bg1">Company name</span></h3>
                    </article>
                    <article style="position: relative; width: 100%; opacity: 1;">
                        <div class="banner-text">
                            <p>claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me  <br>exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor<br> in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>
                        </div>
                        <h3 class="m_6">Ut wisienim, <span class="bg1">Company name</span></h3>
                    </article>
                    <article style="position: absolute; width: 100%; opacity: 0;">
                        <div class="banner-text">
                            <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta <br> in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>
                        </div>
                        <h3 class="m_6">Ut wisienim, <span class="bg1">Company name</span></h3>
                    </article>
                    <article style="position: absolute; width: 100%; opacity: 0;">
                        <div class="banner-text">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam<br>exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor<br> in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>
                        </div>
                        <h3 class="m_6">Ut wisienim, <span class="bg1">Company name</span></h3>
                    </article>
                </div>
                <ul class="wmuSliderPagination">
                    <li><a href="#" class="">0</a></li>
                    <li><a href="#" class="wmuActive">1</a></li>
                    <li><a href="#" >2</a></li>
                    <li><a href="#">3</a></li>
                </ul>
            </div>
            <script src="{{asset("assets")}}/js/jquery.wmuSlider.js"></script>
            <script>
                $('.example').wmuSlider();
            </script>
        </div>
    </div>

@endsection
