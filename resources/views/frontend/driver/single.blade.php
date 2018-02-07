@extends('layouts.frontend')
@section('title','About')
@section('content')
@include("frontend.partials.menu")
    <!-- ABOUT SECTION BEGIN -->
    <section id="" class="About">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="AboutContent">
                    <h1>Driver</h1>
                    <a href="{{route('index')}}">
                        Home
                    </a>
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                    <span>Driver</span>
                </div>
            </div>
        </div>
    </section>
    <!-- ABOUT SECTION END -->

    <!-- ABOUTINFO SECTION BEGIN -->
    <section id="" class="About__info">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="About__ourmission">
                            <h4>Our Mission</h4>
                            <p>{{$driver->description}}</p>
                        </div>

                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="About__wework">
                            <h4>How We Work</h4>

                            <div class="About__weworkImage" style="background:url({{asset('assets/upload/'.$driver->content_img)}});background-repeat: no-repeat;background-size: cover;">

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ABOUTINFO SECTION END -->
@endsection