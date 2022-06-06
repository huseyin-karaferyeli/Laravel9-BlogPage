@extends('layouts.main_layout')

@section('title', 'Blog Page')

@section('content')

    <div class="container-wrap">

        <div class="animated col-md-pull-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{route('home')}}">Home</a>
                    </li>

                    <li class="breadcrumb-item ">
                        <a href="{{route('category', ['id' => $data -> category -> id, 'slug' => $data -> title])}}">{{$data -> category -> title}}</a>
                    </li>

                    <li class="breadcrumb-item active">{{$data -> title}}</li>
                </ol>
            </nav>
        </div>

        <aside id="fh5co-hero">
            <div class="flexslider">
                <ul class="slides">
                    <li style="background-image: url({{Storage::url($data -> image)}}); width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;" class="flex-active-slide">
                        <div class="overlay-gradient"></div>
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 slider-text slider-text-bg animated fadeInUp">
                                <div class="slider-text-inner text-center">
                                    <h1>{{$data -> title}}</h1>
                                    <h2>{{$data -> description}}</h2>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <ol class="flex-control-nav flex-control-paging"></ol><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev flex-disabled" href="#" tabindex="-1">Previous</a></li><li class="flex-nav-next"><a class="flex-next flex-disabled" href="#" tabindex="-1">Next</a></li></ul></div>
        </aside>


        <div id="fh5co-work" class="animated">

            <br><br>

            <div class="row">

                <div class="col-md-12">
                    <h2>{{$data -> title}}</h2>
                    <h4>{{$data -> description}}</h4>
                    <p>Read time {{\App\Http\Controllers\HomeController::ReadTime(0, 0, $data -> read_time)}}</p>

                    <br><br>

                    <p>{!! $data -> detail !!}</p>


                </div>

            </div>

            <div class="row">
                <h1>Photos</h1>

                <aside id="fh5co-hero">
                    <div class="flexslider">
                        <ul class="slides">

                            @foreach($gallery as $slide)
                                <li style="background-image:url({{Storage::url($slide -> image)}});"
                                >
                                    <div class="overlay-gradient"></div>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 slider-text">
                                                <div class="slider-text-inner">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </aside>
            </div>

            <br><br>

            <div class="row">
                <p class="col-md-6">
                    <i class="icon-heart"></i>
                    Likes: {{$data -> likes}}<br>
                    <i class="icon-eye"></i>
                    Seen: {{$data -> seen}}
                </p>

                <p class="animated-fast">
                    <a class="btn btn-primary btn-danger" href="{{route('like', ['id' => $data -> id])}}"><i class="icon-heart"></i> Like</a>
                    <a class="btn btn-primary btn-demo" href="#"><i class="icon-box-add"></i> Save</a>
                </p>
            </div>

            <div class="row">
                <p><br><i class="icon-tag"></i> ~ {{$data -> keywords}}</p>
            </div>

            <div class="row">
                <p><br>Author ~ {{$data -> user -> name}}</p>
            </div>

            <br><br>

            <div class="row animate-box fadeInUp animated-fast">
                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                    <h1>{{$comments -> count('id')}} Comments</h1>
                </div>
                <div class="text-left">
                    <p>Average {{$comments -> average('rate')}} Rate</p>
                </div>
            </div>

            <div class="col-md-10 col-md-push-1 animate-box fadeInUp animated-fast">
                <div class="row">
                    @foreach($comments as $comment)
                        <li>
                            <h4>{{$comment -> user -> name}} |
                                @if($comment -> rate == 0 || $comment -> rate == 1)
                                    {{$comment -> rate}} Star
                                @else
                                    {{$comment -> rate}} Stars
                                @endif</h4>
                            <p>
                                {{$comment -> comment}}
                            </p>
                        </li><br><br>
                    @endforeach
                </div>
            </div>

            <div class="row">

                <form method="post" action="{{route('storecomment')}}">
                    @csrf
                    <div class="col-md-10 col-md-push-1 animate-box fadeInUp animated-fast">
                        <div class="row">
                            <div class="col-md-12">
                                @include('home.reply')
                            </div>

                            <input type="hidden" name="blog_id" value="{{$data -> id}}">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="rate_val">How Useful Was It </label>
                                    <input type="range" id="rate_val" name="rate" min="0" max="5" value="0">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="comment" class="form-control" id="" cols="30" rows="3" placeholder="Comment"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    @auth
                                        <input type="submit" value="Send Message" class="btn btn-primary btn-modify">
                                    @else
                                        <a href="/login" class="btn btn-primary btn-modify">Please Login</a>
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>

@endsection
