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

                    <li class="breadcrumb-item">
                        <a href="{{route('admin.faq.index')}}">FAQs</a>
                    </li>

                    <li class="breadcrumb-item active">{{$faq -> question}}</li>
                </ol>
            </nav>
            <!-- Basic Breadcrumb -->
        </div>

    </div>

    <div class="card">
        <h5 class="card-header">Frequently Asked Questions</h5>
        <div class="table-responsive text-wrap">
            <table class="table table-hover">
                <tr>
                    <th>Id</th>
                    <td>{{$faq -> id}}</td>
                </tr>

                <tr>
                    <th>Question</th>
                    <td>{{$faq -> question}}</td>
                </tr>

                <tr>
                    <th>Answer</th>
                    <td>{!!$faq -> answer!!}</td>
                </tr>

                <tr>
                    <th>Status</th>
                    <td>{{$faq -> status}}</td>
                </tr>

                <tr>
                    <th>Created at</th>
                    <td>{{$faq -> created_at}}</td>
                </tr>

                <tr>
                    <th>Updated at</th>
                    <td>{{$faq -> updated_at}}</td>
                </tr>
            </table>
        </div>
    </div>

    <hr class="my-5">

    <div class="card">
        <div class="row">
            <div class="col-xl">
                <a href="{{route('admin.faq.edit', ['id' => $faq -> id])}}">
                    <div class="card m-4">
                        <button class="btn btn-success btn-lg" type="button">Edit</button>
                    </div>
                </a>
            </div>
            <div class="col-xl">
                <a href="{{route('admin.faq.delete', ['id' => $faq -> id])}}" onclick="return confirm('Are You Sure? You are deleting a Faq: {{$faq -> question}}');">
                    <div class="card m-4">
                        <button class="btn btn-danger btn-lg" type="button">delete</button>
                    </div>
                </a>
            </div>
        </div>
    </div>


@endsection
