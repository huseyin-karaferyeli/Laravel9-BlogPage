<li class="has-dropdown">
    <a href="{{route('userpanel.index')}}">{{Auth::user() -> name}}</a>
    <ul class="dropdown">
        <li><a href={{route('userpanel.index')}}>Profile</a></li>
        <li><a href="{{route('userpanel.blogs')}}">My Blogs</a></li>
        <li><a href={{route('logoutuser')}}>Logout</a></li>
    </ul>
</li>
