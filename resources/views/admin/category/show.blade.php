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
                        <a href="{{route('admin.category.index')}}">Categories</a>
                    </li>

                    <li class="breadcrumb-item active">{{$data -> title}}</li>
                </ol>
            </nav>
            <!-- Basic Breadcrumb -->
        </div>

    </div>

    <div class="card mb-4">
        <h5 class="card-header">Category: {{$data -> title}}</h5>
        <div class="card-body table-responsive text-wrap">
            <table class="table table-hover table-bordered">
                <tr>
                    <th><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>ID</strong></th>
                    <td>{{$data -> id}}</td>
                </tr>

                <tr>
                    <th><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Keywords</strong></th>
                    <td>{{$data -> keywords}}</td>
                </tr>

                <tr>
                    <th><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Description</strong></th>
                    <td>{{$data -> description}}</td>
                </tr>

                <tr>
                    <th><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Status</strong></th>
                    <td>{{$data -> status}}</td>
                </tr>

                <tr>
                    <th><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Created At</strong></th>
                    <td>{{$data -> created_at}}</td>
                </tr>

                <tr>
                    <th><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Updated At</strong></th>
                    <td>{{$data -> updated_at}}</td>
                </tr>
            </table>
        </div>
    </div>

    <div class="card">
        <div class="row">

            <div class="col-xl">
                <a href="{{route('admin.category.edit', ['id' => $data -> id])}}">
                    <div class="card m-4">
                        <button class="btn btn-success btn-lg" type="button">Edit Category</button>
                    </div>
                </a>
            </div>

            <div class="col-xl">
                <a href="{{route('admin.category.show', ['id' => $data -> id])}}">
                    <div class="card m-4">
                        <button class="btn btn-danger btn-lg"
                                onclick="return confirm('Are You Sure? You are deleting a category: {{$data -> title}}');"
                                type="button">
                            Delete Category
                        </button>
                    </div>
                </a>
            </div>

        </div>

    </div>

@endsection
