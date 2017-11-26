@extends('layouts.frontend')
@section('title','Contact Us')
@section('content')
    <!-- CONTACTUS SECTION BEGIN -->
    <section id="contactUs" style="background:url({{asset('assets/images/image28.jpg')}})">

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="contactContent">
                    <h1>Conatct Us</h1>
                    <div class="contact-title">

                    </div>
                    <a href="{{route('index')}}">
                        Home
                    </a>
                    <i class="fa fa-angle-right" aria-hidden="true"></i>

                    <span>ConatctUs</span>
                </div>
            </div>
        </div>

    </section>
    <!-- CONTACTUS SECTION END -->

    <section id="contactUsForm">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <form>
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
                            <button type="submit" class="btn btn-default">Send <i class="fa fa-envelope" aria-hidden="true"></i></button>
                        </form>

                    </div>


                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">


                        <div class="contactUsTouch">
                            <h4>Get In Touch</h4>
                            <div class="contact-title"></div>
                            <p>{{$contact->description}}</p>
                        </div>


                        <div class="contactUsDetails">
                            <h4>Contact Details</h4>
                            <div class="contact-title"></div>
                            <ul>
                                <li><i class="fa fa-map-marker" aria-hidden="true"></i><span>{{$contact->address}}</span></li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i><span>{{$contact->phone}}</span></li>
                                <li><i class="fa fa-envelope" aria-hidden="true"></i><span>{{$contact->email}}</span></li>
                            </ul>



                        </div>

                        <div class="contactUsSocial">
                            <h4>Social Media</h4>
                            <div class="contact-title"></div>


                            <ul>
                                <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href=""><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href=""><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>

                    </div>



                </div>


            </div>
        </div>
    </section>
@endsection