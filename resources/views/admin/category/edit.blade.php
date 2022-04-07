@extends('layouts.admin_layout')

@section('title', 'Blogger Admin Panel')

@section('content')

    <div class="col-12 grid-margin stretch-card">


        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Category: {{$data -> title}}</h4><br>
                <form class="forms-sample" action="/admin/category/update/{{$data -> id}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Title</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="title" value="{{$data -> title}}">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail3">Keywords</label>
                        <input type="text" class="form-control" id="exampleInputEmail3" value="{{$data -> keywords}}" name="keywords">
                    </div>

                    <div class="form-group">
                        <label for="exampleTextarea1">Description</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="4" name="description" content="">{{$data -> description}}</textarea>
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
                        <option selected>{{$data -> status}}</option>
                        @if($data -> status == 'True')<option>False</option> @else <option>True</option> @endif
                    </select>


                    <button type="submit" class="btn btn-primary mr-2" href="/admin/category/store">Submit</button>
                </form>
            </div>
        </div>


    </div>

@endsection
