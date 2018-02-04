@extends("layouts.frontend")
@section('title','Drivers')
@section("content")
@include("frontend.partials.menu")
@foreach ($drivers->sortByDesc('id') as $key => $driver)
<section {{$key%2==0 ? 'class=aboutUs' : 'class=driversUs'}}>
   <div class="container-fluid">
      <div class="row">
         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding">
            @if($key%2==0)
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 nopadding">
               <div class="aboutUsInfo">
                  <h3>{{$driver->title}}</h3>
                  <p>{{substr($driver->description,0,200)}}...</p>
                  <a href="{{route('driver_single',['id' => $driver->id])}}" class="btn-def btn-def-yel">Learn More</a>
               </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 nopadding">
                <div class="aboutUsImage" style="background:url({{asset('assets/upload/'.$driver->banner_img)}}); background-size: cover">
               </div>
            </div>
            @else
            <div class="col-md-6 nopadding">
               <div class="driversUsImage" style="background:url({{asset('assets/upload/'.$driver->banner_img)}});background-size: cover">
               </div>
            </div>
            <div class="col-md-6 nopadding">
               <div class="driverUsInfo">
                  <h3>{{$driver->title}}</h3>
                  <p>{{substr($driver->description,0,200)}}...</p>
                  <a href="{{route('driver_single',['id' => $driver->id])}}" class="btn-def btn-def-yel">Learn More</a>
               </div>
            </div>
            @endif
         </div>
      </div>
   </div>
</section>
@endforeach 
@endsection