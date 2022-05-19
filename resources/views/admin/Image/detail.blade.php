
@extends('layouts.admin_layout_popup')
@section('content')

    <div class="row mb-5">

        <div class="col-md-12 col-lg-6 mb-6">
            <div class="card h-100">
                <img class="card-img-top" src="{{Storage::url($blog -> image)}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$blog -> title}}</h5>
                    <a href="{{route('admin.image.index', ['pid' => $blog -> id])}}" class="btn btn-outline-primary">Go Back</a>
                </div>
            </div>
        </div>


    </div>

@endsection
