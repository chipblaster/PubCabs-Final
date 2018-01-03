@extends('layouts.frontend')
@section('title','Index')
@section('content')
    @include('frontend.partials.menu')
<!-- SLOGAN BEGIN -->
<section id="" class="content" style="background-image :url(./assets/images/4.jpg);background-repeat:no-repeat;">
  <div class="container">
  <div class="row">
     <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="row">
           <div class="contentSubscribe">
              <div class="login-signup">
                 <div class="row marginAuto">
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 nav-tab-holder">
                       @if(Session::has('status'))
                      <div class="alert alert-success">
                          <a class="close" data-dismiss="alert">×</a>
                          <strong>{{ session('status') }}</strong>
                      </div>
                     @endif
                       <ul class="nav nav-tabs row" role="tablist">
                          <li role="presentation" class="active col-sm-6"><a href="#home" aria-controls="home" role="tab" data-toggle="tab" class="" >Subscribe as driver</a></li>
                          <li role="presentation" class="col-sm-6"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Subscribe as rider</a></li>
                       </ul>
                    </div>
                 </div>
                 <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">
                       <div class="row marginAuto">
                          <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 mobile-pull">
                             <article role="login">
                                <form class="signup" action="{{route('subscribe')}}" method="post">
                                  {{csrf_field()}}
                                   <div class="form-group">
                                    <input type="text" class="form-control" name="first_name" placeholder="First Name">
                                   </div>
                                   <div class="form-group">
                                    <input type="text" class="form-control" name="last_name" placeholder="Last Name">
                                   </div>
                                   <div class="form-group">
                                      <input type="email" class="form-control" name="email" placeholder="Email">
                                   </div>
                                   <div class="form-group">
                                      <input type="phone" class="form-control" name="phone" placeholder="Phone Number">
                                   </div>
                                   <div class="form-group" name="country_id">
                                      <select class="form-control" name="country_id">
                                      @foreach($countries as $country)
                                       <option value="{{$country->id}}">{{$country->name}}</option>
                                       @endforeach
                                      </select>
                                   </div>
                                    <div class="form-group">
                                      <input type="hidden" class="form-control" name="type" value="1">
                                    </div>
                                    <div class="form-group">
                                      <input type="hidden" class="form-control" name="is_block" value="1">
                                    </div>
                                   <div class="form-group">
                                      <input type="text" class="form-control" name="zip_code" placeholder="Zip Code">
                                   </div>
                                   <div class="form-group">
                                      <input type="submit" class="btn-def btn-def-yel"  value="SUBMIT">
                                   </div>
                                </form>
                             </article>
                          </div>
                       </div>
                       <!-- end of row -->
                    </div>
                    <!-- end of home -->
                    <div role="tabpanel" class="tab-pane" id="profile">
                       <div class="row marginAuto">
                          <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 mobile-pull">
                             <article role="login">
                                <form class="signup" action="{{route('subscribe')}}" method="post">
                                  {{csrf_field()}}
                                   <div class="form-group">
                                    <input type="text" class="form-control" name="first_name" placeholder="First Name">
                                   </div>
                                   <div class="form-group">
                                    <input type="text" class="form-control" name="last_name" placeholder="Last Name">
                                   </div>
                                   <div class="form-group">
                                      <input type="email" class="form-control" name="email" placeholder="Email">
                                   </div>
                                   <div class="form-group">
                                      <input type="text" class="form-control" name="phone" placeholder="Phone Number">
                                   </div>
                                   <div class="form-group" name="country_id">
                                      <select class="form-control" name="country_id">
                                      @foreach($countries as $country)
                                       <option value="{{$country->id}}">{{$country->name}}</option>
                                       @endforeach
                                      </select>
                                   </div>
                                    <div class="form-group">
                                      <input type="hidden" class="form-control" name="type" value="0">
                                   </div>
                                   <div class="form-group">
                                      <input type="text" class="form-control" name="zip_code" placeholder="Zip Code">
                                   </div>
                                   <div class="form-group">
                                      <input type="submit" class="btn-def btn-def-yel"  value="SUBMIT">
                                   </div>
                                </form>
                             </article>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
  </div>
</section>
<!-- SLOGAN END -->

<!-- ABOUT PASSENGER SECTION BEGIN -->


<!-- ABOUT PASSENGER SECTION END -->
<section>

<div id="" class="passengerAbout" style="background:url(./assets/images/image5.jpg) no-repeat;">
  <div class="container">
    <div class="row">
 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
   <div class="row">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="passengerAboutInfo">
  <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel atque veniam </h3>
</div>
</div>

 </div>
</div>
    </div>
  </div>
</div>
<div id="" class="aboutUs">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 nopadding">
          <div class="aboutUsInfo">
            <h3>About Us</h3>
              <p>{{substr($about->description,0,221)}}</p>
            <a href="{{route('about')}}" class="btn-def btn-def-yel">Learn More</a>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 nopadding">
          <div class="aboutUsImage" style="background:url({{asset('assets/images/'.$about->banner_img)}});">

          </div>
        </div>

      </div>
    </div>
  </div>
</div>
</section>

<!-- ABOUUS SECTION BEGIN -->

<!-- ABOUTUS SECTION END -->

<!-- DRIVERABOUT SECTION BEGIN -->
<section>
<div id="" class="driverAbout" style="background:url(./assets/images/image5.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
        
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="driverAboutInfo">
            <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel atque veniam </h3>
          </div>
          </div>
       
      </div>
    </div>
  </div>
</div>
@if($driver)
<div id="" class="driversUs">
  <div class="col-md-12">
    <div class="row">
      <div class="col-md-6 nopadding">
        <div class="driversUsImage" style="background:url('{{asset('assets/upload/'.$driver->banner_img)}}');"></div>
      </div>
      <div class="col-md-6 nopadding">
        <div class="driverUsInfo">
            <h3>{{$driver->title}}</h3>
            <p>{{substr($driver->description,0,200)}}...</p>
            <a href="{{route('drivers')}}" class="btn-def btn-def-yel">Learn More</a>
        </div>
      </div>
      
    </div>
  </div>
  <div class="clearfix"></div>
</div>
@endif


</section>


<!-- DRIVERABOUT SECTION END -->



{{--@include('frontend.partials.footer')--}}
@endsection
