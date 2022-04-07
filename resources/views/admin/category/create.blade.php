@extends('layouts.admin_layout')

@section('title', 'Blogger Admin Panel')

@section('content')

    <div class="col-12 grid-margin stretch-card">


        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add Category</h4>
                <p class="card-description"> Basic Category Elements </p>
                <form class="forms-sample" action="/admin/category/store" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Title</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Title" name="title">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail3">Keywords</label>
                        <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Keywords" name="keywords">
                    </div>

                    <div class="form-group">
                        <label for="exampleTextarea1">Description</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="4" name="description" placeholder="Description"></textarea>
                    </div>

                    <div class="form-group">

                        <label>File upload</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                            <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                        </div>

                    </div>


                    <label for="exampleFormControlSelect3">Status</label>
                    <select class="form-control form-control-sm" id="exampleFormControlSelect3" name="status">
                        <option>True</option>
                        <option>False</option>
                    </select>


                    <button type="submit" class="btn btn-primary mr-2" href="/admin/category/store">Submit</button>
                </form>
            </div>
        </div>


    </div>

@endsection
