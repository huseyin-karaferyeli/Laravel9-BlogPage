@extends('layouts.main_layout')

@section('title', 'User | '. $settings -> title)
@section('description', $settings -> decsription)
@section('keywords', $settings -> keywords)
@section('icon', Storage::url($settings -> icon))

@section('content')
    <div id="fh5co-contact">

        <div class="row animate-box fadeInUp animated-fast">
            <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                <h2>Blogs</h2>
            </div>
        </div>
        <div class="row">
            @include('home.user.sidebar')

            <div class="col-md-7 col-md-push-1 animate-box fadeInUp animated-fast">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Status</th>
                        <th>Gallery</th>
                        <th>Operations</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">

                    @foreach($blogs as $rs)
                        <tr>
                            <td><a href="{{route('detail', ['id' => $rs -> id])}}">{{$rs -> title}}</a></td>
                            <td>
                                @if($rs -> status == 'True')
                                    <span class="btn-success">Active</span>
                                @else
                                    <span class="btn-danger">Inactive</span>
                                @endif
                            </td>

                            <td>
                                <a href="{{route('userpanel.image.index', ['pid' => $rs -> id])}}"
                                   class="menu-link"
                                   onclick="return !window.open(this.href, '', 'top=50 left=100 width=1100, height=700')">
                                    <i class="menu-icon tf-icons bx bx-images"></i>
                                    <div data-i18n="Analytics">Images</div>
                                </a>
                            </td>

                            <td>

                                <div class="demo-inline-spacing">
                                    <a href="{{route('userpanel.editblog', ['id' => $rs -> id])}}">
                                        <button class="btn-success" >Edit</button>
                                    </a>

                                    <a href="{{route('detail', ['id' => $rs -> id])}}">
                                        <button class="btn-info" >Show</button>
                                    </a>

                                    <a href="{{route('userpanel.deleteblog', ['id' => $rs -> id])}}" onclick="return confirm('Are You Sure? You are deleting a blog: {{$rs -> title}}');">
                                        <button class="btn-danger" >Delete</button>
                                    </a>
                                </div>

                            </td>

                        </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
