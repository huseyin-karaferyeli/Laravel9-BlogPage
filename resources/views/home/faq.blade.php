@extends('layouts.main_layout')

@section('title', 'FAQ | '. $settings -> title)
@section('description', $settings -> decsription)
@section('keywords', $settings -> keywords)
@section('icon', Storage::url($settings -> icon))

@section('content')

    <div class="container-wrap">

        <div id="fh5co-blog">

            <div class="row animate-box fadeInUp animated-fast">
                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                    <h2>Frequently Asked Questions</h2>
                </div>
            </div>

            <div class="panel-group animate-box fadeInUp animated-fast" id="accordion">

                @foreach($faqs as $faq)

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$faq -> id}}">{{$faq -> question}}</a>
                            </h4>
                        </div>

                        <div id="collapse{{$faq -> id}}" class="panel-collapse collapse @once in @endonce">
                            <div class="panel-body">{!! $faq -> answer !!}</div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </div>

@endsection
