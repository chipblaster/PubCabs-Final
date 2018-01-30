@extends('layouts.frontend') @section('title','Contact Us')
@section('content')
    @include('frontend.partials.menu')
<!-- CONTACTUS SECTION BEGIN -->
<section id="" class="contactUs" style="background:url({{asset('assets/images/image28.jpg')}})">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="contactContent">
                <h1>Conatct Us</h1>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- CONTACTUS SECTION END -->

<section id="" class="contactUsForm">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                   @if(Session::has('status'))
                    <div class="alert alert-info">
                        <a class="close" data-dismiss="alert">×</a>
                        <strong>{{ session('status') }}</strong>
                    </div>
                     @endif
                    <form action="{{route('mail')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" data-validation="required" name="name" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock">
                        </div>

                        <div class="form-group">
                            <label>Email </label>
                            <input type="email" data-validation="required" name="email" class="form-control" id="exampleInputEmail1">
                        </div>

                        <div class="form-group">
                            <label>Subject</label>
                            <input type="text" data-validation="required" name="subject" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock">
                        </div>

                        <div class="form-group">
                            <label>Text</label>
                            <textarea class="form-control" data-validation="required" name="text" rows="10"></textarea>
                        </div>
                        <button type="submit" class="btn-def btn-def-gre2">Send<i class="fa fa-envelope envelope__ico" aria-hidden="true"></i></button>
                    </form>

                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">

                    {{--  <div class="contactUsTouch">
                        <h4>Get In Touch</h4>
                        
                        <p>{{$contact->description}}</p>
                    </div>  --}}

                    <div class="contactUsDetails">
                        <h4>Contact Details</h4>
                        <ul>
                            {{--  <li><i class="fa fa-map-marker" aria-hidden="true"></i><span>{{$contact->address}}</span></li>  --}}
                            <a href="tel:+16505752151" class="phone phone__modOne"><li><i class="fa fa-phone" aria-hidden="true"></i><span class="fs">{{$contact->phone}}</span></li></a>
                            <li><i class="fa fa-envelope" aria-hidden="true"></i><span class="fs">{{$contact->email}}</span></li>
                        </ul>
                    </div>
                    <div class="contactUsSocial">
                        <h4>Social Media</h4>
                        <ul>
                            <a href=""><li><i class="fa fa-3x fa-facebook-square social__button social__button--fb" aria-hidden="true"></i></li></a>
                            <a href=""><li><i class="fa fa-3x fa-twitter-square social__button social__button--tw" aria-hidden="true"></i></li></a>
                            <a href=""><li><i class="fa fa-3x fa-google-plus-square social__button social__button--gp" aria-hidden="true"></i></li></a>                            
                        </ul>
                        <ul>
                            @foreach ($socials as $social)
                            <li><a href=""><i class="{{$social->icon}}" aria-hidden="true"></i></a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection