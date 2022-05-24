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

                    <li class="breadcrumb-item active">Settings</li>
                </ol>
            </nav>
            <!-- Basic Breadcrumb -->
        </div>

    </div>

    <div class="row">
        <div class="col-xl-12">

            <form role="form" action="{{route('admin.setting.update')}}" method="post" enctype="multipart/form-data">
                @csrf
                <h6 class="text-muted">Basic</h6>
                <div class="nav-align-top mb-4">
                    <ul class="nav nav-pills mb-3" role="tablist">

                        <li class="nav-item">
                            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-general" aria-controls="navs-pills-top-general" aria-selected="true">
                                General
                            </button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-smtp" aria-controls="navs-pills-top-smtp" aria-selected="false">
                                Smtp Email
                            </button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-social" aria-controls="navs-pills-top-social" aria-selected="false">
                                Social Media
                            </button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-about" aria-controls="navs-pills-top-about" aria-selected="false">
                                About Us
                            </button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-contact" aria-controls="navs-pills-top-contact" aria-selected="false">
                                Contact Page
                            </button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-references" aria-controls="navs-pills-top-references" aria-selected="false">
                                References
                            </button>
                        </li>

                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="navs-pills-top-general" role="tabpanel">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Title</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="title" placeholder="Title" value="{{$data -> title}}">
                            </div>
                            <div class="demo-vertical-spacing demo-only-element mb-3">
                                <label class="form-label" for="basic-default-icon">Icon</label>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="inputGroupFile02" name="icon">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Keywords</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="keywords" placeholder="Keywords" value="{{$data -> keywords}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Description</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="description" placeholder="Description" value="{{$data -> description}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Company</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="company" placeholder="Company" value="{{$data -> company}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Address</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="address" placeholder="Address" value="{{$data -> address}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Phone</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="phone" placeholder="Phone" value="{{$data -> phone}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Fax</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="fax" placeholder="Fax" value="{{$data -> fax}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Email</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="email" placeholder="Email" value="{{$data -> email}}">
                            </div>
                        </div>
                        <div class="tab-pane fade" id="navs-pills-top-smtp" role="tabpanel">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Smtp Server</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="smtp_server" placeholder="Smtp Server" value="{{$data -> smtp_server}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Smtp Email</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="smtp_email" placeholder="Smtp Email" value="{{$data -> smtp_email}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Smtp Password</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="smtp_password" placeholder="Smtp Password" value="{{$data -> smtp_password}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Smtp Port</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="smtp_port" placeholder="Smtp Port" value="{{$data -> smtp_port}}">
                            </div>
                        </div>
                        <div class="tab-pane fade" id="navs-pills-top-social" role="tabpanel">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Facebook</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="facebook" placeholder="Facebook" value="{{$data -> facebook}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Instagram</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="instagram" placeholder="Instagram" value="{{$data -> instagram}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Twitter</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="twitter" placeholder="Twitter" value="{{$data -> twitter}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Youtube</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="youtube" placeholder="Youtube" value="{{$data -> youtube}}">
                            </div>
                        </div>
                        <div class="tab-pane fade" id="navs-pills-top-about" role="tabpanel">
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">About Us</label>
                                <textarea class="form-control" id="about_us" rows="3" name="about_us" placeholder="About Us">{{$data -> about_us}}</textarea>
                            </div>

                            <script>
                                ClassicEditor
                                    .create( document.querySelector( '#about_us' ) )
                                    .then( editor => {
                                        console.log( editor );
                                    } )
                                    .catch( error => {
                                        console.error( error );
                                    } );
                            </script>
                        </div>
                        <div class="tab-pane fade" id="navs-pills-top-contact" role="tabpanel">
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Contact Page</label>
                                <textarea class="form-control" id="contact" rows="3" name="contact" placeholder="Contact Page">{{$data -> contact}}</textarea>
                            </div>

                            <script>
                                ClassicEditor
                                    .create( document.querySelector( '#contact' ) )
                                    .then( editor => {
                                        console.log( editor );
                                    } )
                                    .catch( error => {
                                        console.error( error );
                                    } );
                            </script>
                        </div>
                        <div class="tab-pane fade" id="navs-pills-top-references" role="tabpanel">
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">References</label>
                                <textarea class="form-control" id="references" rows="3" name="references" placeholder="References">{{$data -> references}}</textarea>
                            </div>

                            <script>
                                ClassicEditor
                                    .create( document.querySelector( '#references' ) )
                                    .then( editor => {
                                        console.log( editor );
                                    } )
                                    .catch( error => {
                                        console.error( error );
                                    } );
                            </script>
                        </div>
                    </div>
                </div>

                <div class="card mt-4">
                    <button class="btn btn-primary btn-lg " type="submit">Save Settings</button>
                </div>
            </form>

        </div>
    </div>
@endsection
