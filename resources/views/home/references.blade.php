@extends('layouts.main_layout')

@section('title', 'References | '. $settings -> title)
@section('description', $settings -> decsription)
@section('keywords', $settings -> keywords)
@section('icon', Storage::url($settings -> icon))

@section('content')
    <div id="fh5co-about">

        <div class="row animate-box fadeInUp animated-fast">
            <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                <h2>References</h2>
            </div>
        </div>
        <div class="row animate-box fadeInUp animated-fast">
            <div class="row col-md-12 text-center heading-section">
                <div class="col-md-3">
                    {!! $settings -> references !!}
                </div>
            </div>
            </div>
        </div>

    </div>
@endsection
