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
                        <a href="{{route('admin.blog.index')}}">Blogs</a>
                    </li>

                    <li class="breadcrumb-item active">{{$data -> title}}</li>
                </ol>
            </nav>
            <!-- Basic Breadcrumb -->
        </div>

    </div>

    <div class="card mb-4">
        <h5 class="card-header">Blog: {{$data -> title}}</h5>
        <div class="card-body table-responsive text-wrap">
            <table class="table table-hover table-bordered">
                <tr>
                    <th><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>ID</strong></th>
                    <td>{{$data -> id}}</td>
                </tr>

                <tr>
                    <th><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Category</strong></th>
                    <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($data -> category, $data -> category -> title)}}</td>
                </tr>

                <tr>
                    <th><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Title</strong></th>
                    <td>{{$data -> title}}</td>
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
                    <th><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Detail</strong></th>
                    <td>{{$data -> detail}}</td>
                </tr>

                <tr>
                    <th><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>File</strong></th>
                    <td>{{$data -> file}}</td>
                </tr>

                <tr>
                    <th><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Likes</strong></th>
                    <td>{{$data -> likes}}</td>
                </tr>

                <tr>
                    <th><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Seen</strong></th>
                    <td>{{$data -> seen}}</td>
                </tr>

                <tr>
                    <th><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Read Time</strong></th>
                    <td>{{$data -> read_time}}</td>
                </tr>

                <tr>
                    <th><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>User</strong></th>
                    <td>{{$data -> user_id}}</td>
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

    <div class="card mb-4 demo-inline-spacing">
        <div class="col-lg-12 pagination justify-content-center">

            <div class="col-md-5 mb-4">

                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselExample" data-bs-slide-to="0" class=""></li>
                        <li data-bs-target="#carouselExample" data-bs-slide-to="1" class="active" aria-current="true"></li>
                        <li data-bs-target="#carouselExample" data-bs-slide-to="2" class=""></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active carousel-item-start">
                            <img class="d-block w-100" src="{{asset("assets/admin")}}/img/elements/13.jpg" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h3>First slide</h3>
                                <p>Eos mutat malis maluisset et, agam ancillae quo te, in vim congue pertinacia.</p>
                            </div>
                        </div>
                        <div class="carousel-item carousel-item-next carousel-item-start">
                            <img class="d-block w-100" src="{{asset("assets/admin")}}/img/elements/2.jpg" alt="Second slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h3>Second slide</h3>
                                <p>In numquam omittam sea.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset("assets/admin")}}/img/elements/18.jpg" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h3>Third slide</h3>
                                <p>Lorem ipsum dolor sit amet, virtute consequat ea qui, minim graeco mel no.</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>

            </div>

        </div>
    </div>

    <div class="card">
        <div class="row">

            <div class="col-xl">
                <a href="{{route('admin.blog.edit', ['id' => $data -> id])}}">
                    <div class="card m-4">
                        <button class="btn btn-success btn-lg" type="button">Edit Blog</button>
                    </div>
                </a>
            </div>

            <div class="col-xl">
                <a href="{{route('admin.blog.delete', ['id' => $data -> id])}}">
                    <div class="card m-4">
                        <button class="btn btn-danger btn-lg"
                                onclick="return confirm('Are You Sure? You are deleting a category: {{$data -> title}}');"
                                type="button">
                            Delete Blog
                        </button>
                    </div>
                </a>
            </div>

        </div>

    </div>

@endsection
