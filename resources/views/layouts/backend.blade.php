<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="google" content="nositelinkssearchbox" />
        <meta name="robots" content="noindex,nofollow">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- App Favicon -->
        <link rel="shortcut icon" href="{{asset('admin_assets/images/favicon.ico')}}">

        <!-- App title -->
        <title>PubCap</title>

        <!--calendar css-->
        <link href="{{asset('admin_assets/plugins/fullcalendar/css/fullcalendar.min.css')}}" rel="stylesheet" />

        <!-- Switchery css -->
        <link href="{{asset('admin_assets/plugins/switchery/switchery.min.css')}}" rel="stylesheet" />

        <!-- Bootstrap CSS -->
        <link href="{{asset('admin_assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- App CSS -->
        <link href="{{asset('admin_assets/css/style.css')}}" rel="stylesheet" type="text/css" />

         <link href="{{asset('assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{asset('assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/plugins/fileuploads/css/dropify.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Modernizr js --> 
        <script src="{{asset('admin_assets/js/modernizr.min.js')}}"></script>

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
                        <span>PubCap</span></a>
                </div>
                <nav class="navbar-custom">
                    <ul class="list-inline float-right mb-0">
                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                                 aria-haspopup="false" aria-expanded="false">
                                <img src="{{asset('admin_assets/images/users/avatar-1.jpg')}}" alt="user" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="text-overflow"><small>Welcome ! {{Auth::user()->name}}</small> </h5>
                                </div>
                                <!-- item-->
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-power"></i> <span>Logout</span>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
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
                            <li class="has_sub">
                                <a href="{{route('subscribe.index')}}" class="waves-effect"><i class="zmdi zmdi-format-underlined"></i> <span> Subscribes</span> </a>
                            </li>
                             <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-format-underlined"></i> <span> Content </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('contact.index')}}">Contact</a></li>
                                    <li><a href="{{route('social.index')}}">Social</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-format-underlined"></i> <span>About </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('about.index')}}">List</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="{{route('driver.index')}}" class="waves-effect"><i class="zmdi zmdi-widgets"></i> <span>Driver </span></a>
                            </li>
                            <li class="has_sub">
                                <a href="{{route('rider.index')}}" class="waves-effect"><i class="zmdi zmdi-album"></i> <span>Rider </span></a>
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
        <script src="{{asset('admin_assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('admin_assets/js/popper.min.js')}}"></script><!-- Tether for Bootstrap -->
        <script src="{{asset('admin_assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('admin_assets/js/detect.js')}}"></script>
        <script src="{{asset('admin_assets/js/fastclick.js')}}"></script>
        <script src="{{asset('admin_assets/js/jquery.blockUI.js')}}"></script>
        <script src="{{asset('admin_assets/js/waves.js')}}"></script>
        <script src="{{asset('admin_assets/js/jquery.nicescroll.js')}}"></script>
        <script src="{{asset('admin_assets/js/jquery.scrollTo.min.js')}}"></script>
        <script src="{{asset('admin_assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('admin_assets/plugins/switchery/switchery.min.js')}}"></script>

        <!-- Jquery-Ui -->
        <script src="{{asset('admin_assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

        <!-- BEGIN PAGE SCRIPTS -->
        <script src="{{asset('admin_assets/plugins/moment/moment.js')}}"></script>
        <script src="{{asset('admin_assets/plugins/fullcalendar/js/fullcalendar.min.js')}}"></script>
        <script src="{{asset('admin_assets/pages/jquery.fullcalendar.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('admin_assets/js/jquery.core.js')}}"></script>
        <script src="{{asset('admin_assets/js/jquery.app.js')}}"></script>
        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>
    </body>
</html>
   @yield('script');