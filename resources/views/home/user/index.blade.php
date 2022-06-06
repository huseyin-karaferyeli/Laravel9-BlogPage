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
            @include('home.user.sidebar')

            <div class="col-md-7 col-md-push-1 animate-box fadeInUp animated-fast">
                @include('profile.show')
            </div>
        </div>

    </div>
@endsection
