@extends('layouts.main_layout')

@section('title', 'User | '. $settings -> title)
@section('description', $settings -> decsription)
@section('keywords', $settings -> keywords)
@section('icon', Storage::url($settings -> icon))

@section('content')
    <div id="fh5co-contact">

        <div class="row animate-box fadeInUp animated-fast">
            <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                <h2>Comments</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-md-push-1 animate-box fadeInUp animated-fast">
                <ul class="contact-info">
                    <li><i class="icon-profile"></i><a href="{{route('userpanel.index')}}">Profile</a></li>
                    <li><i class="icon-book-open"></i><a href="#">My Blogs</a></li>
                    <li><i class="icon-book-open"></i><a href="#">My Comments</a></li>
                    <li><i class="icon-exit"></i><a href="{{route('logoutuser')}}">Logout</a></li>
                </ul>
            </div>

            <div class="col-md-7 col-md-push-1 animate-box fadeInUp animated-fast">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Comment</th>
                        <th>Rate</th>
                        <th>Blog</th>
                        <th>Status</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0 ">

                    @foreach($comments as $rs)
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$rs -> id}}</strong></td>
                            <td>{{$rs -> comment}}</td>
                            <td>{{$rs -> rate}}</td>
                            <td><a href="{{route('detail', ['id' => $rs -> blog_id])}}">{{$rs -> blog -> title}}</a></td>
                            <td>
                                @if($rs -> status == 'True')
                                    <span class="badge bg-success">Active</span>
                                @else
                                    <span class="badge bg-warning">Inactive</span>
                                @endif
                            </td>

                            <td>
                                <div class="demo-inline-spacing">
                                    <a href="{{route('userpanel.destroy', ['id' => $rs -> id])}}" onclick="return confirm('Are You Sure? You are deleting a comment: {{$rs -> comment}}');">
                                        <button class="btn btn-danger" >Delete</button>
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
