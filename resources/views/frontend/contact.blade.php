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
                    <form action="{{route('mail')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock">
                        </div>

                        <div class="form-group">
                            <label>Email </label>
                            <input type="email" class="form-control" id="exampleInputEmail1">
                        </div>

                        <div class="form-group">
                            <label>Subject</label>
                            <input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock">
                        </div>

                        <div class="form-group">
                            <label>Text</label>
                            <textarea class="form-control" rows="10"></textarea>
                        </div>
                        <button type="submit" class="btn-def btn-def-gre2">Send<i class="fa fa-envelope" aria-hidden="true"></i></button>
                    </form>

                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">

                    <div class="contactUsTouch">
                        <h4>Get In Touch</h4>
                        
                        <p>{{$contact->description}}</p>
                    </div>

                    <div class="contactUsDetails">
                        <h4>Contact Details</h4>
                        
                        <ul>
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i><span>{{$contact->address}}</span></li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i><span>{{$contact->phone}}</span></li>
                            <li><i class="fa fa-envelope" aria-hidden="true"></i><span>{{$contact->email}}</span></li>
                        </ul>
                    </div>
                    <div class="contactUsSocial">
                        <h4>Social Media</h4>
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