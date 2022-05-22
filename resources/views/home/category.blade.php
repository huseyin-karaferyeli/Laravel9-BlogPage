@extends('layouts.main_layout')

@section('title', 'Blog Page')

@section('content')

    <div class="container-wrap">

        <div id="fh5co-blog">
            <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-md-4">
                        <div class="fh5co-blog animate-box">
                            <a href="{{Route('detail', ['id' => $blog -> id])}}" class="blog-bg" style="background-image: url({{Storage::url($blog -> image)}});"></a>
                            <div class="blog-text">
                                <span class="posted_on">{{$blog -> created_at}}</span>
                                <h3><a href="#">{{$blog -> title}}</a></h3>
                                <p>{{$blog -> description}}</p>
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
