<nav class="fh5co-nav" role="navigation">
    <div class="container-wrap">
        <div class="top-menu">
            <div class="row">
                <div class="col-xs-2">
                    <div id="fh5co-logo"><a href="index.html">Blogger</a></div>
                </div>
                <div class="col-xs-10 text-right menu-1">
                    <ul>
                        <li @if($where === 'main')class="active"@endif><a href={{route('home')}}>Home</a></li>
                        <li @if($where === 'work')class="active"@endif><a href="work.html">Work</a></li>
                        <li @if($where === 'blog')class="active has-dropdown" @else class="has-dropdown" @endif>
                            <a href={{route('blog')}}>Blog</a>
                            <ul class="dropdown">
                                <li><a href="#">Web Design</a></li>
                                <li><a href="#">eCommerce</a></li>
                                <li><a href="#">Branding</a></li>
                                <li><a href="#">API</a></li>
                            </ul>
                        </li>
                        <li @if($where === 'about')class="active"@endif><a href="about.html">About</a></li>
                        <li @if($where === 'contact')class="active"@endif><a href={{route('contact')}}>Contact</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</nav>
