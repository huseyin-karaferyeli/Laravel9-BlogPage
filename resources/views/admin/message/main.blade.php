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

                    <li class="breadcrumb-item active">Messages</li>
                </ol>
            </nav>
            <!-- Basic Breadcrumb -->
        </div>

    </div>

    <div class="card">
        <h5 class="card-header">Messages</h5>
        <div class="table-responsive text-wrap">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name & Surname</th>
                    <th>Subject</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0 ">

                @foreach($data as $rs)
                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$rs -> id}}</strong></td>
                        <td>{{$rs -> name}}</td>
                        <td>{{$rs -> subject}}</td>
                        <td>{{$rs -> status}}</td>

                        <td>

                            <div class="demo-inline-spacing">
                                <a href="{{route('admin.message.update', ['id' => $rs -> id])}}">
                                    <button class="btn btn-outline-success" >Edit</button>
                                </a>

                                <a href="{{route('admin.message.show', ['id' => $rs -> id])}}" onclick="return !window.open(this.href, '', 'top=50 left=100 width=1100, height=700')">
                                    <button class="btn btn-outline-primary" >Show</button>
                                </a>

                                <a href="{{route('admin.message.destroy', ['id' => $rs -> id])}}" onclick="return confirm('Are You Sure? You are deleting a message: {{$rs -> name}}');">
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
