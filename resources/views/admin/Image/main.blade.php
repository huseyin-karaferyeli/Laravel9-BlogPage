@extends('layouts.admin_layout_popup')
@section('content')

    <div class="col-xl">

        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">{{$blog -> title}}</h5>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">New Image</h5>
                <small class="text-muted float-end">Images</small>
            </div>

            <div class="card-body">

                <form action="{{route('admin.image.store', ['pid' => $blog -> id])}}" method="post" enctype="multipart/form-data">
                    @csrf


                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Title</label>
                        <input type="text" class="form-control" id="basic-default-fullname" name="title" placeholder="Title">
                    </div>

                    <div class="demo-vertical-spacing demo-only-element mb-3">
                        <label class="form-label" for="basic-default-company">Image</label>
                        <div class="input-group">
                            <input type="file" class="form-control" id="inputGroupFile02" name="image">
                        </div>
                    </div>

                    <div class="card mt-4">
                        <button class="btn btn-primary btn-lg " type="submit">Add New Image</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="card">
        <h5 class="card-header">Images</h5>
        <div class="table-responsive text-wrap">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Operations</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0 ">

                @foreach($images as $rs)
                    <tr>

                        <td>
                            <div class="avatar avatar-lg pull-up">

                                @if($rs -> image)

                                    <img src="{{Storage::url($rs -> image)}}" >

                                @endif
                            </div>
                        </td>

                        <td>{{$rs -> title}}</td>

                        <td>

                            <div class="demo-inline-spacing">

                                <a href="{{route('admin.image.detail', ['pid' => $blog -> id, 'id' => $rs -> id])}}">
                                    <button class="btn btn-outline-primary" >Detail</button>
                                </a>

                                <a href="{{route('admin.image.delete', ['pid' => $blog -> id, 'id' => $rs -> id])}}" onclick="return confirm('Are You Sure? You are deleting an image');">
                                    <button class="btn btn-outline-danger" >Delete</button>
                                </a>
                            </div>

                        </td>

                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
