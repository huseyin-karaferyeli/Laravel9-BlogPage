@extends('layouts.admin_layout')

@section('title', 'Blogger Admin Panel')

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="card mb-4">
            <div class="card-body">
                <!-- Basic Breadcrumb -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/admin">Home</a>
                        </li>

                        <li class="breadcrumb-item active">Categories</li>
                    </ol>
                </nav>
                <!-- Basic Breadcrumb -->
            </div>

        </div>

        <div class="card">
            <h5 class="card-header">Categories</h5>
            <div class="table-responsive text-wrap">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Keywords</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">

                    @foreach($data as $rs)
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$rs -> id}}</strong></td>
                            <td>{{$rs -> title}}</td>
                            <td>{{$rs -> keywords}}</td>
                            <td>{{$rs -> description}}</td>
                            <td>-</td>
                            <td>@if($rs -> status == 'True')
                                    <span class="badge bg-success">True</span>
                            @else
                                <span class="badge bg-warning">False</span>
                                @endif</td>

                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu" style="">
                                        <a class="dropdown-item" href="/admin/category/edit/{{$rs -> id}}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-show me-1"></i> View</a>
                                    </div>
                                </div>
                            </td>

                        </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="demo-inline-spacing">
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-sm-center">
                                <li class="page-item prev">
                                    <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevrons-left"></i></a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="javascript:void(0);">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="javascript:void(0);">2</a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="javascript:void(0);">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="javascript:void(0);">4</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="javascript:void(0);">5</a>
                                </li>
                                <li class="page-item next">
                                    <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevrons-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <hr class="my-5">

        <a href="/admin/category/create">
            <div class="card">
                <button class="btn btn-primary btn-lg" type="button">Add New Category</button>
            </div>
        </a>

    </div>

@endsection
