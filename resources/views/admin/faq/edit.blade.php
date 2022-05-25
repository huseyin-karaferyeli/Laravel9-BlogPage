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
                        <a href="{{route('admin.faq.index')}}">FAQs</a>
                    </li>

                    <li class="breadcrumb-item active">Update FAQ</li>
                </ol>
            </nav>
            <!-- Basic Breadcrumb -->
        </div>

    </div>

    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">New FAQ</h5>
                <small class="text-muted float-end">Frequently asked questions</small>
            </div>

            <div class="card-body">

                <form action="{{route('admin.faq.update', ['id' => $faq -> id])}}" method="post">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Question</label>
                        <input type="text" class="form-control" id="basic-default-company" name="question" placeholder="Question" value="{{$faq -> question}}">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Answer</label>
                        <textarea class="form-control" id="answer" rows="3" name="answer" placeholder="Answer">{{$faq -> answer}}</textarea>
                    </div>

                    <script>
                        ClassicEditor
                            .create( document.querySelector( '#answer' ) )
                            .then( editor => {
                                console.log( editor );
                            } )
                            .catch( error => {
                                console.error( error );
                            } );
                    </script>

                    <div class="mb-3">

                        <label class="form-label">Status</label>
                        <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example" name="status">

                            @if($faq -> status == "True")
                                <option value="True" selected>True</option>
                                <option value="False">False</option>
                            @else
                                <option value="True">True</option>
                                <option value="False" selected>False</option>
                            @endif

                        </select>

                    </div>

                    <div class="card mt-4">
                        <button class="btn btn-primary btn-lg " type="submit">Update the FAQ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
