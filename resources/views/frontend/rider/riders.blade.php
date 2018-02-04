@extends("layouts.frontend")
@section('title','Riders')
@section("content")
@include("frontend.partials.menu")
@foreach ($riders->sortByDesc('id') as $key => $rider)
<section {{$key%2==0 ? 'class=aboutUs' : 'class=driversUs'}}>
   <div class="container-fluid">
      <div class="row">
         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding">
            @if($key%2==0)
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 nopadding">
               <div class="aboutUsInfo">
                  <h3>{{$rider->title}}</h3>
                  <p>{{substr($rider->description,0,200)}}...</p>
                  <a href="{{route('rider_single',['id' => $rider->id])}}" class="btn-def btn-def-yel">Learn More</a>
               </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 nopadding">
                <div class="aboutUsImage" style="background:url({{asset('assets/upload/'.$rider->banner_img)}}); background-size: cover">
               </div>
            </div>
            @else
            <div class="col-md-6 nopadding">
               <div class="driverUsInfo" style="background:url({{asset('assets/upload/'.$rider->banner_img)}});background-size: cover">
               </div>
            </div>
            <div class="col-md-6 nopadding">
               <div class="driverUsInfo">
                  <h3>{{$rider->title}}</h3>
                  <p>{{substr($rider->description,0,200)}}...</p>
                  <a href="{{route('rider_single',['id' => $rider->id])}}" class="btn-def btn-def-yel">Learn More</a>
               </div>
            </div>
            @endif
         </div>
      </div>
   </div>
</section>
@endforeach 
@endsection