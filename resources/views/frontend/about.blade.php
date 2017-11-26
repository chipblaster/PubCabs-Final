@extends('layouts.frontend')
@section('title','About')
@section('content')
    <!-- ABOUT SECTION BEGIN -->
    <section id="About" style="background:url('{{asset('assets/images/image28.jpg')}}')">

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="AboutContent">
                    <h1>About Us</h1>

                    <a href="{{route('index')}}">
                        Home
                    </a>
                    <i class="fa fa-angle-right" aria-hidden="true"></i>

                    <span>AboutUs</span>
                </div>
            </div>
        </div>

    </section>
    <!-- ABOUT SECTION END -->

    <!-- ABOUTINFO SECTION BEGIN -->
    <section id="About__info">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">



                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="About__ourmission">
                            <h4>Our Mission</h4>
                            <p>{{$about->description}}</p>
                        </div>
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                           @foreach($about->sub_about as $item)
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#{{$item->id}}" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                                                <i class="fa fa-angle-right" aria-hidden="true"></i>  {{$item->title}}
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="{{$item->id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
                                            {{$item->description}}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="About__wework">
                            <h4>How We Work</h4>

                            <div class="About__weworkImage" style="background:url({{asset('assets/images/'.$about->photo)}});background-repeat: no-repeat;background-size: cover;">

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ABOUTINFO SECTION END -->
@endsection