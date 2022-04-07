@extends('layouts.admin_layout')

@section('title', 'Blogger Admin Panel')

@section('content')

    <div class="col-sm-12 grid-margin stretch-card">

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Categories</h4><br>

                <div class="table-responsive">

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Keywords</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            <th>Show</th>
                        </tr>
                        </thead>

                        <tbody>

                        @foreach($data as $rs)
                            <tr>

                                <td>{{$rs -> id}}</td>
                                <td>{{$rs -> title}}</td>
                                <td>{{$rs -> keywords}}</td>
                                <td>{{$rs -> description}}</td>
                                <td>-</td>
                                <td>{{$rs -> status}}</td>

                                <td><a href="/admin/category/edit{{$rs -> id}}" class="btn btn-outline-success btn-fw">Edit</a></td>
                                <td><a href="/admin/category/delete{{$rs -> id}}" class="btn btn-outline-danger btn-fw">Delete</a></td>
                                <td><a href="/admin/category/show{{$rs -> id}}" class="btn btn-outline-info btn-fw">Show</a></td>

                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                </div>

            </div>
        </div>

    </div>

@endsection
