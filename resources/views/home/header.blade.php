<div class="header-top">
    <div class="logo">
        <a href="index.html"><img src="{{asset("assets")}}/images/logo.png" alt=""/></a>
    </div>
    <div class="h_menu4"><!-- start h_menu4 -->
        <a class="toggleMenu" href="#">Menu</a>
        <ul class="nav">
            <li @if($where === 'main')class="active"@endif><a href="{{route('home')}}">Home</a></li>

            <li><a href="portfolio.html">Portfolio</a>
                <ul>
                    <li><a href="portfolio.html">Dropdown</a></li>
                    <li><a href="portfolio.html">Structure</a></li>
                    <li><a href="portfolio.html">People</a></li>
                </ul>
            </li>
            <li @if($where === 'contact')class="active"@endif>
                <a href="{{route('contact')}}">Contact</a>
            </li>
            <li>
                <a href="#">Login</a>
            </li>
        </ul>

        <script type="text/javascript" src="{{asset("assets")}}/js/nav.js"></script>
    </div><!-- end h_menu4 -->
    <div class="clear"></div>
</div><!-- end header_main4 -->
