
<!-- LOGO BEGIN -->

<section id="logo" class="container">
    <div class="row">
        <div class="col-l-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <a href="{{url('/')}}">
                <div class="logo">
                    <h2>Logo</h2>
                </div>
            </a>
        </div>
    </div>
</section>
<!-- LOGO END -->

<!-- Fixed navbar begin -->
<div class="navbar navbar-custom navbar-inverse navbar-static-top" id="nav" name="nav">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav nav-justified">
                <li class="{{(request()->path() == '/') ? "active" : ''}}"><a href="{{route('index')}}">Home</a></li>
                <li class="{{(request()->path() == 'about') ? "active" : ''}}"><a href="{{route('about')}}"><strong>About Us</strong></a></li>
                <li class="{{(request()->path() == 'drivers') ? "active" : ''}}"><a href="{{route('drivers')}}">Drivers</a></li>
                <li class="{{(request()->path() == 'riders') ? "active" : ''}}"><a href="{{route('riders')}}">Riders  </a></li>
                <li class="{{(request()->path() == 'contact') ? "active" : ''}}"><a href="{{route('contact')}}">Contact</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container -->
</div><!--/.navbar -->
</div>

<!-- Fixed navbar end -->