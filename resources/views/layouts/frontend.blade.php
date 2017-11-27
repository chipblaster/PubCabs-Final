<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/stylesheet.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}" type="text/css" media="all"/>
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/Emain.js')}}"></script>
</head>
<body>

<!-- LOGO BEGIN -->

<section id="logo" class="container">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <a href="logo__link">
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
                <li class="active"><a href="{{route('about')}}"><strong>About Us</strong></a></li>
                <li><a href="">Drivers</a></li>
                <li><a href="#section3">Riders </a></li>
                <li><a href="#section4">News</a></li>
                <li><a href="{{route('contact')}}">Contact</a></li>
                <li><a href="#section5">Partners</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container -->
</div><!--/.navbar -->
</div>

<!-- Fixed navbar end -->

@yield('content')
<section class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="footer__wrapper">
                    <div class="footer__title">
                        <h3 class="footer__titleText">about us</h3>
                    </div>
                    <div class="footer__body">
                        <p class="footer__bodyText">
                            Contrary to popular belief, Lorem Ipsum is not simply random text.
                            It has roots in a piece of classical Latin literature from 45 BC,
                            making it over 2000 years old. Richard McClintock, a Latin professor a
                            t Hampden-Sydney College in Virginia, looked up one of the more obscure
                        </p>
                    </div>
                    <div class="footer__body">
                        <p class="footer__bodyText">
                            Contrary to popular belief, Lorem Ipsum is not simply random text.
                            It has roots in a piece of classical Latin literature from 45 BC,
                            making it over 2000 years old. Richard McClintock, a Latin professor a
                            t Hampden-Sydney College in Virginia, looked up one of the more obscure
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer__wrapper">
                    <div class="footer__title">
                        <h3 class="footer__titleText">Newsletter</h3>
                    </div>
                    <div class="footer__body">
                        <p class="footer__bodyText">
                            Subscribe to our newsletter for news, updates, exclusive discounts and offers.
                        </p>
                        <form class="signup" action="index.html" method="post">
                            <div class="form-group">
                                <input type="submit" class="btn btnAll" value="Subscribe">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="footer__title">
                    <h3 class="footer__titleText">Contact Details</h3>
                </div>
                <div class="footer__listBody">
                    <div class="col-md-12">
                        <ul class="footer__listSection location-icon">
                            <li class="footer__listRow">00 5th Avenue, New York City, United States</li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <ul class="footer__listSection phone-icon">
                            <li class="footer__listRow">13232123</li>
                            <li class="footer__listRow">Mon - Fri, 9.00am until 6.30pm</li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <ul class="footer__listSection mail-icon">
                            <li class="footer__listRow">booking@example.com</li>
                            <li class="footer__listRow">We reply within 24 hrs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
=======
@include('frontend.partials.header')
<body>


 @yield('content')

>>>>>>> b4283264c9d194dddf634b6a862fc1e61255b76c
</body>
</html>
<script>
//    (function ($) {
//        $(document).ready(function () {
//            var navDiv = '#nav';
//            // $('#nav-wrapper').css('min-height', $(navDiv).height());
//            // $('#nav-wrapper').height($('#nav').height() );
//            $(navDiv).affix({
//                offset: $(navDiv).position()
//            });
//        });
//   var wrap = $("#nav");
//   wrap.on("scroll", function(e) {

//   if (this.scrollTop > 147) {
//     wrap.addClass("navDiv");
//   } else {
//     wrap.removeClass("navDiv");
//   }

// });


    })(jQuery);
</script>
<!-- FOOTER -->
