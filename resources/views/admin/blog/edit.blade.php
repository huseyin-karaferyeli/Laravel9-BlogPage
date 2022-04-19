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

                    <li class="breadcrumb-item">
                        <a href="{{route('admin.blog.index')}}">Blogs</a>
                    </li>

                    <li class="breadcrumb-item active">Edit Blog</li>
                </ol>
            </nav>
            <!-- Basic Breadcrumb -->
        </div>

    </div>

    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">{{$data -> title}}</h5>
                <small class="text-muted float-end">Blogs</small>
            </div>

            <div class="card-body">

                <form action="{{route('admin.blog.update', ['id' => $data -> id])}}" method="post">
                    @csrf

                    <div class="mb-3">

                        <label class="form-label">Category</label>
                        <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example" name="category_id">
                            @foreach($datalist as $rs)

                                <option value="{{$rs -> id}}" @if($rs -> id == $data -> category_id) selected="" @endif>
                                    {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs -> title)}}
                                </option>

                            @endforeach
                        </select>

                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Title</label>
                        <input type="text" class="form-control" id="basic-default-fullname" name="title" value="{{$data -> title}}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="basic-default-company">Keywords</label>
                        <input type="text" class="form-control" id="basic-default-company" name="keywords" value="{{$data -> keywords}}">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" >{{$data -> description}}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Detail</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="detail" >{{$data -> detail}}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="basic-default-company">File</label>
                        <input type="text" class="form-control" id="basic-default-company" name="file" value="{{$data -> file}}">
                    </div>

                    <div class="demo-vertical-spacing demo-only-element mb-3">
                        <label class="form-label" for="basic-default-company">Image</label>
                        <div class="input-group">
                            <input type="file" class="form-control" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        </div>
                    </div>

                    <div class="mb-3">

                        <label class="form-label">Status</label>
                        <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example" name="status">

                            @if($data -> status == "True")
                                <option value="True" selected>True</option>
                                <option value="False">False</option>
                            @else
                                <option value="True">True</option>
                                <option value="False" selected>False</option>
                            @endif

                        </select>

                    </div>

                    <div class="card mt-4">
                        <button class="btn btn-primary btn-lg " type="submit">Update Blog</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
