@extends('layouts.main_layout')

@section('title', $settings -> title)
@section('description', $settings -> decsription)
@section('keywords', $settings -> keywords)
@section('icon', Storage::url($settings -> icon))

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
                        <a href="{{route('category', ['id' => $category -> id, 'slug' => $category -> title])}}" class="work"  style="background-image: url({{Storage::url($category -> image)}});">
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
                            <a href="{{Route('detail', ['id' => $blog -> id])}}" class="blog-bg" style="background-image: url({{Storage::url($blog -> image)}});"></a>
                            <div class="blog-text">
                                <span class="posted_on">{{$blog -> created_at}}</span>
                                <h3><a href="#">{{$blog -> title}}</a></h3>
                                <p>{{$blog -> description}}</p>
                                <p>{{$blog -> comments -> count('id')}} Comments | Average
                                    @if($blog -> comments -> average('rate') != null)
                                        {{$blog -> comments -> average('rate')}} Rate
                                    @else
                                        No Rate
                                    @endif</p>
                                <ul class="stuff">
                                    <li><i class="icon-heart3"></i>{{$blog -> likes}}</li>
                                    <li><i class="icon-eye2"></i>{{$blog -> seen}}</li>
                                    <li><a href="{{Route('detail', ['id' => $blog -> id])}}">Read More<i class="icon-arrow-right22"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
