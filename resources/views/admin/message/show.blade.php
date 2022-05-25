@extends('layouts.admin_layout_popup')
@section('content')

    <div class="card mb-4">
        <h5 class="card-header">Message Id {{$message -> id. ' : '. $message -> name}}</h5>
        <div class="card-body table-responsive text-wrap">
            <table class="table table-hover table-bordered">
                <tr>
                    <th><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>ID</strong></th>
                    <td>{{$message -> id}}</td>
                </tr>

                <tr>
                    <th><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Name & Surname</strong></th>
                    <td>{{$message -> name}}</td>
                </tr>

                <tr>
                    <th><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Email</strong></th>
                    <td>{{$message -> email}}</td>
                </tr>

                <tr>
                    <th><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Phone</strong></th>
                    <td>{{$message -> phone}}</td>
                </tr>

                <tr>
                    <th><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Subject</strong></th>
                    <td>{{$message -> subject}}</td>
                </tr>

                <tr>
                    <th><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Message</strong></th>
                    <td>{{$message -> message}}</td>
                </tr>

                <tr>
                    <th><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Ip</strong></th>
                    <td>{{$message -> ip}}</td>
                </tr>

                <tr>
                    <th><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Status</strong></th>
                    <td>{{$message -> status}}</td>
                </tr>

                <tr>
                    <th><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Created at</strong></th>
                    <td>{{$message -> created_at}}</td>
                </tr>

                <tr>
                    <th><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Updated at</strong></th>
                    <td>{{$message -> updated_at}}</td>
                </tr>
            </table>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <form action="{{route('admin.message.update', ['id' => $message -> id])}}" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Note</label>
                    <input type="text" class="form-control" id="basic-default-fullname" name="note" placeholder="Note" value="{{$message -> note}}">
                </div>
                <div class="card mt-4">
                    <button class="btn btn-primary btn-lg " type="submit">Add a Note</button>
                </div>
            </form>
        </div>
    </div>

@endsection
