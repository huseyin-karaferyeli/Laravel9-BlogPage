@extends('layouts.admin_layout')

@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

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

                    <li class="breadcrumb-item active">New Blog</li>
                </ol>
            </nav>
            <!-- Basic Breadcrumb -->
        </div>

    </div>

    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">New Blog</h5>
                <small class="text-muted float-end">Blogs</small>
            </div>

            <div class="card-body">

                <form action="{{route('admin.blog.store')}}" method="post">
                    @csrf

                    <div class="mb-3">

                        <label class="form-label">Category</label>
                        <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example" name="category_id">
                            @foreach($data as $rs)

                                <option value="{{$rs -> id}}">{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs -> title)}}</option>

                            @endforeach
                        </select>

                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Title</label>
                        <input type="text" class="form-control" id="basic-default-fullname" name="title" placeholder="Title">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="basic-default-company">Keywords</label>
                        <input type="text" class="form-control" id="basic-default-company" name="keywords" placeholder="Keywords">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" placeholder="Description"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Detail</label>
                        <textarea class="form-control" id="detail" rows="3" name="detail" placeholder="Detail"></textarea>
                    </div>

                    <script>
                        ClassicEditor
                            .create( document.querySelector( '#detail' ) )
                            .then( editor => {
                                console.log( editor );
                            } )
                            .catch( error => {
                                console.error( error );
                            } );
                    </script>

                    <div class="mb-3">
                        <label class="form-label" for="basic-default-company">File</label>
                        <input type="text" class="form-control" id="basic-default-company" name="file" placeholder="File">
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
                            <option value="True" selected>True</option>
                            <option value="False">False</option>
                        </select>

                    </div>

                    <div class="card mt-4">
                        <button class="btn btn-primary btn-lg " type="submit">Add New Blog</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
