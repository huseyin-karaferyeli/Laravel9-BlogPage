@extends('layouts.main_layout')

@section('title', 'User | '. $settings -> title)
@section('description', $settings -> decsription)
@section('keywords', $settings -> keywords)
@section('icon', Storage::url($settings -> icon))

@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')
    <div id="fh5co-contact">

        <div class="row animate-box fadeInUp animated-fast">
            <div class="col-md-12 text-center fh5co-heading">
                <form action="{{route('userpanel.storeblog')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="user_id" value="{{Auth::id()}}">
                    <input type="hidden" name="status" value="False">

                    <div class="mb-3">

                        <label class="form-label">Category</label>
                        <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example" name="category_id" >
                            @foreach($categories as $rs)

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
                            <input type="file" class="form-control" id="inputGroupFile02" name="image">
                        </div>
                    </div>

                    <div class="card mt-4">
                        <button class="btn btn-primary btn-lg " type="submit">Add New Blog</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
