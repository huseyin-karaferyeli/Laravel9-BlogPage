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

                    <li class="breadcrumb-item active">FAQs</li>
                </ol>
            </nav>
            <!-- Basic Breadcrumb -->
        </div>

    </div>

    <div class="card">
        <h5 class="card-header">Frequently Asked Questions</h5>
        <div class="table-responsive text-wrap">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Question</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Show</th>
                    <th>Delete</th>

                </tr>
                </thead>
                <tbody class="table-border-bottom-0">

                @foreach($faqs as $rs)
                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$rs -> id}}</strong></td>
                        <td>{{$rs -> question}}</td>
                        <td>
                            @if($rs -> status == 'True')
                                <span class="badge bg-success">Active</span>
                            @else
                                <span class="badge bg-warning">Inactive</span>
                            @endif
                        </td>
                        <td>
                            <div class="demo-inline-spacing">
                                <a href="{{route('admin.faq.edit', ['id' => $rs -> id])}}">
                                    <button class="btn btn-outline-success" >Edit</button>
                                </a>
                            </div>
                        </td>
                        <td>
                            <div class="demo-inline-spacing">
                                <a href="{{route('admin.faq.show', ['id' => $rs -> id])}}">
                                    <button class="btn btn-outline-primary" >Show</button>
                                </a>
                            </div>
                        </td>
                        <td>
                            <div class="demo-inline-spacing">
                                <a href="{{route('admin.faq.delete', ['id' => $rs -> id])}}" onclick="return confirm('Are You Sure? You are deleting a Faq: {{$rs -> question}}');">
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

    <div class="card-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="demo-inline-spacing">
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-sm-center">
                            <li class="page-item prev">
                                <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevrons-left"></i></a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="javascript:void(0);">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0);">2</a>
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

    <a href="{{route('admin.faq.create')}}">
        <div class="card">
            <button class="btn btn-primary btn-lg" type="button">Add New FAQ</button>
        </div>
    </a>


@endsection
