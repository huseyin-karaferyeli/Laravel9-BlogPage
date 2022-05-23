<aside id="fh5co-hero">
    <div class="flexslider">
        <ul class="slides">

            @foreach($sliderdata as $slide)
                <li style="background-image:url({{Storage::url($slide -> image)}});"
                >
                    <div class="overlay-gradient"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 slider-text">
                                <div class="slider-text-inner">
                                    <h1>{{$slide -> title}}</h1>
                                    <h2>{{$slide -> description}}</h2>
                                    <p><a class="btn btn-primary btn-demo" href="{{route('detail', ['id' => $slide -> id])}}"></i> Read More</a> <a class="btn btn-primary btn-learn">Save</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach

        </ul>
    </div>
</aside>
