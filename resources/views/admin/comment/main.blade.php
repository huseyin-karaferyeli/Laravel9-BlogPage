@extends('layouts.admin_layout')

@section('title', 'Blogger Admin Panel')

@section('content')

    <div class="card mb-4">
        <div class="card-body">
            <!-- Basic Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{route('admin.index')}}">Home</a>
                    </li>

                    <li class="breadcrumb-item active">Comments</li>
                </ol>
            </nav>
            <!-- Basic Breadcrumb -->
        </div>

    </div>

    <div class="card">
        <h5 class="card-header">Comments</h5>
        <div class="table-responsive text-wrap">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Blog</th>
                    <th>Name</th>
                    <th>Comment</th>
                    <th>Status</th>
                    <th>Detail</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">

                @foreach($data as $rs)
                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$rs -> id}}</strong></td>
                        <td><a href="{{route('admin.blog.show', ['id' => $rs -> blog -> id])}}">
                                {{$rs -> blog -> title}}
                            </a></td>
                        <td>{{$rs -> user -> name}}</td>
                        <td>{{$rs -> comment}}</td>
                        <td>
                            @if($rs -> status == 'True')
                                <span class="badge bg-success">Active</span>
                            @else
                                <span class="badge bg-warning">Inactive</span>
                            @endif
                        </td>

                        <td>

                            <div class="demo-inline-spacing">
                                <a href="{{route('admin.comments.show', ['id' => $rs -> id])}}">
                                    <button class="btn btn-outline-primary" >Detail</button>
                                </a>
                            </div>

                        </td>

                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="demo-inline-spacing">
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-sm-center">
                            <li class="page-item prev">
                                <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevrons-left"></i></a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="javascript:void(0);">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0);">2</a>
                            </li>
                            <li class="page-item next">
                                <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevrons-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
