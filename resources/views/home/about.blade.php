@extends('layouts.main_layout')

@section('title', 'Contact | '. $settings -> title)
@section('description', $settings -> decsription)
@section('keywords', $settings -> keywords)
@section('icon', Storage::url($settings -> icon))

@section('content')
    <div id="fh5co-about">

        <div class="row animate-box fadeInUp animated-fast">
            <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                <h2>About us</h2>
            </div>
        </div>
        <div class="row animate-box fadeInUp animated-fast">
            <div class="col-md-12 text-center heading-section">
                {!! $settings -> about_us !!}
            </div>
            </div>
        </div>

    </div>
@endsection
