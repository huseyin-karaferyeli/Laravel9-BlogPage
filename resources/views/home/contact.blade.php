@extends('layouts.main_layout')

@section('title', 'Contact | '. $settings -> title)

@section('content')
    <div id="fh5co-contact">

        <div class="row animate-box fadeInUp animated-fast">
            <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                <h2>Contact us</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-md-push-1 animate-box fadeInUp animated-fast">
                <h3>Our Address</h3>
                <ul class="contact-info">
                    <li><i class="icon-location4"></i>198 West 21th Street, Suite 721 New York NY 10016</li>
                    <li><i class="icon-phone3"></i>+ 1235 2355 98</li>
                    <li><i class="icon-location3"></i><a href="#">info@blogpage.com</a></li>
                    <li><i class="icon-globe2"></i><a href="#">www.blogpage.com</a></li>
                </ul>
            </div>

            <div class="col-md-7 col-md-push-1 animate-box fadeInUp animated-fast">

                <form method="post" action="{{route('storemessage')}}" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name & Surname" name="name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email" name="email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="tel" class="form-control" placeholder="Phone" name="phone">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Subject" name="subject">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea class="form-control" id="" cols="30" rows="7" placeholder="Message" name="message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" value="Send Message" class="btn btn-primary btn-modify">
                            </div>
                        </div>

                        @include('home.reply')

                    </div>

                </form>
            </div>
        </div>

    </div>
@endsection
