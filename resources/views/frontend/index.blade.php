

@extends('layouts.frontend');
@section('content')
<!-- SLOGAN BEGIN -->
<section id="content"  style="background-image :url(./assets/images/4.jpg);background-repeat:no-repeat;">
  <div class="container">
  <div class="row">
     <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="row">
           <div class="contentSubscribe">
              <div class="login-signup">
                 <div class="row marginAuto">
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 nav-tab-holder">
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
                                <form class="signup" action="index.html" method="post">
                                   <div class="form-group">
                                      <input type="text" class="form-control" placeholder="First Name">
                                   </div>
                                   <div class="form-group">
                                      <input type="email" class="form-control" placeholder="Last Name">
                                   </div>
                                   <div class="form-group">
                                      <input type="email" class="form-control" placeholder="Email">
                                   </div>
                                   <div class="form-group">
                                      <input type="text" class="form-control" placeholder="Phone Number">
                                   </div>
                                   <div class="form-group">
                                      <select class="form-control">
                                         <option disabled selected hidden>City</option>
                                         <option>baku</option>
                                         <option>Sumgayit</option>
                                      </select>
                                   </div>
                                   <div class="form-group">
                                      <select class="form-control">
                                         <option disabled selected hidden>Zip Code</option>
                                         <option>az1000</option>
                                         <option>az1030</option>
                                      </select>
                                   </div>
                                   <div class="form-group">
                                      <input type="submit" class="btn btn-success btn-blockß btnAll"  value="SUBMIT">
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
                                <form class="signup" action="index.html" method="post">
                                   <div class="form-group">
                                      <input type="text" class="form-control" placeholder="First Name">
                                   </div>
                                   <div class="form-group">
                                      <input type="text" class="form-control" placeholder="Last Name">
                                   </div>
                                   <div class="form-group">
                                      <input type="text" class="form-control" placeholder="Phone Number">
                                   </div>
                                   <div class="form-group">
                                      <input type="email" class="form-control" placeholder="Email Address">
                                   </div>
                                   <div class="form-group">
                                      <select class="form-control">
                                         <option disabled selected hidden>City</option>
                                         <option>baku</option>
                                         <option>Sumgayit</option>
                                      </select>
                                   </div>
                                   <div class="form-group">
                                      <select class="form-control">
                                         <option disabled selected hidden>Zip Code</option>
                                         <option>az1000</option>
                                         <option>az1030</option>
                                      </select>
                                   </div>
                                   <div class="form-group">
                                      <input type="submit" class="btn btn-success btn-blockß btnAll"  value="SUBMIT">
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

<section id="passengerAbout" style="background:url(./assets/images/image5.jpg);">
  <div class="container">
    <div class="row">
 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
   <div class="row">
<div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12">
<div class="passengerAboutInfo">
  <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel atque veniam </h3>
</div>
</div>
<div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12">
  <div class="passengerAboutBtn">
    <a href="" class="btnAll">Learn More!</a>
  </div>
</div>
 </div>
</div>
    </div>
  </div>
</section>

<!-- ABOUT PASSENGER SECTION END -->


<!-- ABOUUS SECTION BEGIN -->
<section id="aboutUs">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 nopadding">
          <div class="aboutUsInfo">
            <h3>About Us</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea doloremque nesciunt sapiente pariatur porro reiciendis, corrupti et asperiores neque quia natus molestias expedita in a? Aut voluptate aspernatur maiores sequi.</p>
            <a href="" class="btnAll">Learn More</a>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 nopadding">
          <div class="aboutUsImage" style="background:url(./assets/images/image2.jpg);">

          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<!-- ABOUTUS SECTION END -->

<!-- DRIVERABOUT SECTION BEGIN -->
<section id="driverAbout" style="background:url(./assets/images/image5.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
        
          <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12">
          <div class="driverAboutInfo">
            <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel atque veniam </h3>
          </div>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12">
            <div class="driverAboutBtn">
              <a href="" class="btnAll btnAll-mod">Learn More!</a>
            </div>
        
           </div>
      </div>
    </div>
  </div>
</section>

<!-- DRIVERABOUT SECTION END -->


<section id="driversUs">
  <div class="col-md-12">
    <div class="row">
      <div class="col-md-6 nopadding">
<div class="driversUsImage" style="background-image:url(./assets/images/image2.jpg);">


</div>
      </div>
      <div class="col-md-6 nopadding">
<div class="driverUsInfo">
    <h3>Drivers</h3>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea doloremque nesciunt sapiente pariatur porro reiciendis, corrupti et asperiores neque quia natus molestias expedita in a? Aut voluptate aspernatur maiores sequi.</p>
    <a href="" class="btnAll">Learn More</a>

</div>
      </div>
      
    </div>
  </div>
  <div class="clearfix"></div>
</section>
@endsection