@if($message = Session::get('info'))
    <div class="col-md-12 breadcrumb">
        {{$message}}
    </div>
@endif

@if($errors -> any())
    <div class="col-md-12 breadcrumb">
        Something Went Wrong :/{{$errors}}
    </div>
@endif
