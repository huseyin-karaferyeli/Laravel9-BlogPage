@extends('layouts.main_layout')

@section('title', 'User | '. $settings -> title)
@section('description', $settings -> decsription)
@section('keywords', $settings -> keywords)
@section('icon', Storage::url($settings -> icon))

@section('content')
    <div id="fh5co-contact">

        <div class="row animate-box fadeInUp animated-fast">
            <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                <h2>Profile</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-md-push-1 animate-box fadeInUp animated-fast">
                <ul class="contact-info">
                    <li><i class="icon-profile"></i><a href="{{route('userpanel.index')}}">Profile</a></li>
                    <li><i class="icon-book-open"></i><a href="#">My Blogs</a></li>
                    <li><i class="icon-speech-bubble"></i><a href="{{route('userpanel.comments')}}">My Comments</a></li>
                    <li><i class="icon-exit"></i><a href="{{route('logoutuser')}}">Logout</a></li>
                </ul>
            </div>

            <div class="col-md-7 col-md-push-1 animate-box fadeInUp animated-fast">
                @include('profile.show')
            </div>
        </div>

    </div>
@endsection
