@extends('layouts.admin_layout')

@section('title', 'Blogger Admin Panel')

@section('content')

    <div class="card mb-4">
        <div class="card-body">
            <!-- Basic Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{route('admin.index')}}">Dashboard</a>
                    </li>

                    <li class="breadcrumb-item">
                        <a href="{{route('admin.comments.index')}}">Comments</a>
                    </li>

                    <li class="breadcrumb-item active">{{$data -> comment}}</li>
                </ol>
            </nav>
            <!-- Basic Breadcrumb -->
        </div>

    </div>

    <div class="card mb-4">
        <h5 class="card-header">Comment: {{$data -> user -> name}}</h5>
        <div class="card-body table-responsive text-wrap">
            <table class="table table-hover table-bordered">
                <tr>
                    <th><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>ID</strong></th>
                    <td>{{$data -> id}}</td>
                </tr>

                <tr>
                    <th><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Name</strong></th>
                    <td>{{$data -> user -> name}}</td>
                </tr>

                <tr>
                    <th><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Comment</strong></th>
                    <td>{{$data -> comment}}</td>
                </tr>

                <tr>
                    <th><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Rate</strong></th>
                    <td>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: {{$data -> rate * 20}}%" aria-valuenow="{{$data -> rate}}" aria-valuemin="0" aria-valuemax="5">
                                {{$data -> rate}}
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <th><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Blog</strong></th>
                    <td>{{$data -> blog -> title}}</td>
                </tr>

                <tr>
                    <th><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Ip</strong></th>
                    <td>{{$data -> ip}}</td>
                </tr>

                <tr>
                    <th><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Status</strong></th>
                    <td>
                        @if($data -> status == 'True')
                            <span class="badge bg-success">Active</span>
                        @else
                            <span class="badge bg-warning">Inactive</span>
                        @endif
                    </td>
                </tr>

                <tr>
                    <th><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Created at</strong></th>
                    <td>{{$data -> created_at}}</td>
                </tr>

                <tr>
                    <th><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Updated at</strong></th>
                    <td>{{$data -> updated_at}}</td>
                </tr>
            </table>
        </div>
    </div>

    <div class="card">
        <div class="row">

            <div class="col-xl">
                <a href="{{route('admin.comments.update', ['id' => $data -> id])}}">
                    <div class="card m-4">
                        <button class="btn btn-success btn-lg">
                            @if($data -> status == 'False')
                                Make Comment Visible
                            @else
                                Make Comment Invisible
                            @endif
                        </button>
                    </div>
                </a>
            </div>

            <div class="col-xl">
                <a href="{{route('admin.comments.delete', ['id' => $data -> id])}}">
                    <div class="card m-4">
                        <button class="btn btn-danger btn-lg" onclick="return confirm('Are You Sure? You are deleting a comment: {{$data -> comment}}');" type="button">
                            Delete Comment
                        </button>
                    </div>
                </a>
            </div>

        </div>

    </div>

@endsection
