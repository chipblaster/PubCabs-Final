<!DOCTYPE html>
<html>
    
<!-- Mirrored from coderthemes.com/uplon/vertical/calendar.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Oct 2017 08:02:51 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App Favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

        <!-- App title -->
        <title>Uplon - Responsive Admin Dashboard Template</title>

        <!--calendar css-->
        <link href="{{asset('assets/plugins/fullcalendar/css/fullcalendar.min.css')}}" rel="stylesheet" />

        <!-- Switchery css -->
        <link href="{{asset('assets/plugins/switchery/switchery.min.css')}}" rel="stylesheet" />

        <!-- Bootstrap CSS -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- App CSS -->
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" />

        <!-- Modernizr js -->
        <script src="{{asset('assets/js/modernizr.min.js')}}"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-79190402-1', 'auto');
  ga('send', 'pageview');

</script>


    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.html" class="logo">
                        <i class="zmdi zmdi-group-work icon-c-logo"></i>
                        <span>Uplon</span></a>
                </div>
                <nav class="navbar-custom">
                    <ul class="list-inline float-right mb-0">
                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <img src="{{asset('assets/images/users/avatar-1.jpg')}}" alt="user" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="text-overflow"><small>Welcome ! Admin</small> </h5>
                                </div>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-power"></i> <span>Logout</span>
                                </a>

                            </div>
                        </li>

                    </ul>
                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-light waves-effect">
                                <i class="zmdi zmdi-menu"></i>
                            </button>
                        </li>
                       
                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>
                            <li class="text-muted menu-title">Navigation</li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-format-underlined"></i> <span> Subscribes</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="ui-cards.html">List</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-album"></i> <span> Contact </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="components-grid.html">Add Contact Detail</a></li>
                                    <li><a href="components-range-sliders.html">Edit Details</a></li>
                                    <li><a href="components-sweet-alert.html">List</a></li>
                                </ul>
                            </li>
                             <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-album"></i> <span> About </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="components-grid.html">Add About Detail</a></li>
                                    <li><a href="components-range-sliders.html">Edit Details</a></li>
                                    <li><a href="components-sweet-alert.html">List</a></li>
                                </ul>
                            </li>
                              <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-widgets"></i> <span> Social </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="components-grid.html">Add Social Detail</a></li>
                                    <li><a href="components-range-sliders.html">Edit Details</a></li>
                                    <li><a href="components-sweet-alert.html">List</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>

            </div>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
           
                @yield('content');

            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


           

            <footer class="footer text-right">
                2016 - 2017 © Uplon.
            </footer>


        </div>
        <!-- END wrapper -->


        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/popper.min.js')}}"></script><!-- Tether for Bootstrap -->
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/detect.js')}}"></script>
        <script src="{{asset('assets/js/fastclick.js')}}"></script>
        <script src="{{asset('assets/js/jquery.blockUI.js')}}"></script>
        <script src="{{asset('assets/js/waves.js')}}"></script>
        <script src="{{asset('assets/js/jquery.nicescroll.js')}}"></script>
        <script src="{{asset('assets/js/jquery.scrollTo.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('assets/plugins/switchery/switchery.min.js')}}"></script>

        <!-- Jquery-Ui -->
        <script src="{{asset('assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

        <!-- BEGIN PAGE SCRIPTS -->
        <script src="{{asset('assets/plugins/moment/moment.js')}}"></script>
        <script src="{{asset('assets/plugins/fullcalendar/js/fullcalendar.min.js')}}"></script>
        <script src="{{asset('assets/pages/jquery.fullcalendar.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('assets/js/jquery.core.js')}}"></script>
        <script src="{{asset('assets/js/jquery.app.js')}}"></script>

    </body>

<!-- Mirrored from coderthemes.com/uplon/vertical/calendar.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Oct 2017 08:02:58 GMT -->
</html>