<nav class="fh5co-nav" role="navigation">
    <div class="container-wrap">
        <div class="top-menu">

            @php
                $parentCategories = \App\Http\Controllers\HomeController::mainCategoryList();
            @endphp

            <div class="row">
                <div class="col-xs-2">
                    <div id="fh5co-logo"><a href="index.html">Blog Page</a></div>
                </div>
                <div class="col-xs-10 text-right menu-1">
                    <ul>

                        <li @if(request() -> path() == '/')class="active"@endif><a href={{route('home')}}>Home</a></li>
                        <li> | </li>
                        @foreach($parentCategories as $category)
                            <li @if(request() -> path() == 'category'. '/'. $category -> id. '/'. $category -> title)class="active has-dropdown" @else class="has-dropdown" @endif>
                                <a href={{route('category', ['id' => $category -> id, 'slug' => $category -> title])}}>{{$category -> title}}</a>

                                @if(count($category -> children))
                                    <ul class="dropdown">

                                        @include('home.categoryTree', ['children' => $category -> children])

                                    </ul>

                                @endif

                            </li>
                        @endforeach
                        <li> | </li>
                        <li @if(request() -> path() == 'about')class="active"@endif><a href="about.html">About</a></li>
                        <li @if(request() -> path() == 'contact')class="active"@endif><a href={{route('contact')}}>Contact</a></li>

                    </ul>
                </div>
            </div>

        </div>
    </div>
</nav>
