@extends('layouts.admin_layout_popup')
@section('content')

    <div class="card mb-4">
        <h5 class="card-header">Username {{$user -> name}}</h5>
        <div class="card-body table-responsive text-wrap">
            <table class="table table-hover table-bordered">
                <tr>
                    <th><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>ID</strong></th>
                    <td>{{$user -> id}}</td>
                </tr>

                <tr>
                    <th><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Name & Surname</strong></th>
                    <td>{{$user -> name}}</td>
                </tr>

                <tr>
                    <th><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Email</strong></th>
                    <td>{{$user -> email}}</td>
                </tr>

                <tr>
                    <th><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Roles</strong></th>
                    <td>
                        @foreach($user -> roles as $role)
                            {{$role -> name}} <a href="{{route('admin.user.deleterole', ['uid' => $user -> id, 'rid' => $role -> id])}}" onclick="return confirm('Are You Sure? You are deleting a role: {{$role -> name}}');">
                            <button class="btn btn-outline-danger" >X</button>
                            </a>
                        @endforeach
                    </td>
                </tr>

                <tr>
                    <th><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Status</strong></th>
                    <td> </td>
                </tr>


            </table>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <form action="{{route('admin.user.addrole', ['id' => $user -> id])}}" method="post">
                @csrf
                <div class="card mb-3">
                    <select name="role">
                        @foreach($roles as $role)
                            <option value="{{$role -> id}}">{{$role -> name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="card mt-4">
                    <button class="btn btn-primary btn-lg " type="submit">Add a Role</button>
                </div>
            </form>
        </div>
    </div>

@endsection
