<nav class="fh5co-nav" role="navigation">
    <div class="container-wrap">
        <div class="top-menu">

            @php
                $parentCategories = \App\Http\Controllers\HomeController::mainCategoryList();
            @endphp

            <div class="row">
                <div class="col-xs-2">
                    <div id="fh5co-logo"><a href="{{route('home')}}">Blog Page</a></div>
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

                        <li
                            @if(request() -> path() == 'faq')
                                class="active has-dropdown"
                            @elseif(request() -> path() == 'contact')
                                class="active has-dropdown"
                            @elseif(request() -> path() == 'about')
                                class="active has-dropdown"
                            @elseif(request() -> path() == 'references')
                                class="active has-dropdown"
                            @else
                                class="has-dropdown"
                            @endif>
                            <a>Blog Page</a>
                            <ul class="dropdown">
                                <li><a href={{route('faq')}}>FAQ</a></li>
                                <li><a href={{route('contact')}}>Contact</a></li>
                                <li><a href={{route('about')}}>About</a></li>
                                <li><a href={{route('references')}}>References</a></li>
                            </ul>
                        </li>

                        @auth
                            <li>
                                <a href="#">{{Auth::user() -> name}}</a>
                                <a href="{{route('logoutuser')}}">Logout</a>
                            </li>

                        @endauth
                        @guest
                            <li>
                                <a href="{{route('loginuser')}}">Login</a>
                            </li>

                            <li>
                                <a href="{{route('registeruser')}}">Register</a>
                            </li>
                        @endguest

                    </ul>
                </div>
            </div>

        </div>
    </div>
</nav>
