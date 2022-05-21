@extends('layouts.main_layout')

@section('title', 'Blog Page')

@section('slider')
    @include('home.slider')
@endsection

@section('content')

    <div class="container-wrap">

        <div id="fh5co-work" class="fh5co-light-grey">
            <div class="row animate-box">
                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                    <h2>Top Categories</h2>
                </div>
            </div>

            <div class="row">
                @foreach($categories as $category)
                    <div class="col-md-4 text-center animate-box">
                        <a href="work-single.html" class="work"  style="background-image: url({{Storage::url($category -> image)}});">
                            <div class="desc">
                                <h3>{{$category -> title}}</h3>
                                <span>{{$category -> description}}</span>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

        <div id="fh5co-blog">
            <div class="row">
                @foreach($blogData as $blog)
                    <div class="col-md-4">
                        <div class="fh5co-blog animate-box">
                            <a href="#" class="blog-bg" style="background-image: url({{Storage::url($blog -> image)}});"></a>
                            <div class="blog-text">
                                <span class="posted_on">{{$blog -> created_at}}</span>
                                <h3><a href="#">{{$blog -> title}}</a></h3>
                                <p>{{$blog -> description}}</p>
                                <ul class="stuff">
                                    <li><i class="icon-heart3"></i>{{$blog -> likes}}</li>
                                    <li><i class="icon-eye2"></i>{{$blog -> seen}}</li>
                                    <li><a href="#">Read More<i class="icon-arrow-right22"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div id="fh5co-counter" class="fh5co-counters">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center animate-box">
                    <p>We have a fun facts far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
            </div>
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2">
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <span class="fh5co-counter js-counter" data-from="0" data-to="3452" data-speed="5000" data-refresh-interval="50"></span>
                            <span class="fh5co-counter-label">Cups of Coffee</span>
                        </div>
                        <div class="col-md-3 text-center">
                            <span class="fh5co-counter js-counter" data-from="0" data-to="234" data-speed="5000" data-refresh-interval="50"></span>
                            <span class="fh5co-counter-label">Client</span>
                        </div>
                        <div class="col-md-3 text-center">
                            <span class="fh5co-counter js-counter" data-from="0" data-to="6542" data-speed="5000" data-refresh-interval="50"></span>
                            <span class="fh5co-counter-label">Projects</span>
                        </div>
                        <div class="col-md-3 text-center">
                            <span class="fh5co-counter js-counter" data-from="0" data-to="8687" data-speed="5000" data-refresh-interval="50"></span>
                            <span class="fh5co-counter-label">Done Projects</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="fh5co-blog" class="blog-flex">
            <div class="featured-blog" style="background-image: url({{asset("assets")}}/images/blog-1.jpg);">
                <div class="desc-t">
                    <div class="desc-tc">
                        <span class="featured-head">Featured Posts</span>
                        <h3><a href="#">Top 20 Best WordPress Themes 2017 Multi Purpose and Creative Websites</a></h3>
                        <span><a href="#" class="read-button">Learn More</a></span>
                    </div>
                </div>
            </div>
            <div class="blog-entry fh5co-light-grey">
                <div class="row animate-box">
                    <div class="col-md-12">
                        <h2>Latest Posts</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 animate-box">
                        <a href="#" class="blog-post">
                            <span class="img" style="background-image: url({{asset("assets")}}/images/blog-2.jpg);"></span>
                            <div class="desc">
                                <h3>26 Best Education WordPress Themes 2017 You Need To See</h3>
                                <span class="cat">Collection</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-12 animate-box">
                        <a href="#" class="blog-post">
                            <span class="img" style="background-image: url({{asset("assets")}}/images/blog-1.jpg);"></span>
                            <div class="desc">
                                <h3>16 Outstanding Photography WordPress Themes You Must See</h3>
                                <span class="cat">Collection</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-12 animate-box">
                        <a href="#" class="blog-post">
                            <span class="img" style="background-image: url({{asset("assets")}}/images/blog-3.jpg);"></span>
                            <div class="desc">
                                <h3>16 Outstanding Photography WordPress Themes You Must See</h3>
                                <span class="cat">Collection</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
