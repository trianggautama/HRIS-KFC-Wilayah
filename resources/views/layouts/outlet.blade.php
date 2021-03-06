<!DOCTYPE html>
<html lang="en">

<head>
    <title>HRIS KFC</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{asset('images/kfc_logo.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('images/kfc_logo.png')}}" type="image/x-icon">

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <!-- iconfont -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/icon/icofont/css/icofont.css')}}">

    <!-- simple line icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/icon/simple-line-icons/css/simple-line-icons.css')}}">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}">
    <!-- Responsive.css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
    <!--color css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/color/color-1.min.css')}}" id="color">
    <!-- datatable-->
    <link href="{{ asset('datatable\datatable.min.css') }}" rel="stylesheet">
</head>

<body class="sidebar-mini fixed">
    <div class="loader-bg">
        <div class="loader-bar">
        </div>
    </div>
    <div class="wrapper">
        <!--   <div class="loader-bg">
    <div class="loader-bar">
    </div>
</div> -->
        <!-- Navbar-->
        <header class="main-header-top hidden-print">
            <a href="{{Route('admin_outlet_index')}}" class="logo"><b>Outlet KFC</b></a>
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button--><a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>
                <!-- Navbar Right Menu-->
                <div class="navbar-custom-menu f-right">
                    <ul class="top-nav">
                        <li class="pc-rheader-submenu">
                            <a href="#!" class="drop icon-circle" onclick="javascript:toggleFullScreen()">
                                <i class="icon-size-fullscreen"></i>
                            </a>
                        </li>
                        <!-- User Menu-->
                        <li class="dropdown">
                            <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
                                <span><img class="img-circle " src="{{asset('assets/images/avatar-1.png')}}" style="width:40px;" alt="User Image"></span>
                                <span>{{ Auth::user()->name }}<i class=" icofont icofont-simple-down"></i></span>

                            </a>
                            <ul class="dropdown-menu settings-menu">
                                <li><a href="#!"><i class="icon-settings"></i> Settings</a></li>
                                <li><a href="profile.html"><i class="icon-user"></i> Profile</a></li>
                                <li><a href="message.html"><i class="icon-envelope-open"></i> My Messages</a></li>
                                <li class="p-0">
                                    <div class="dropdown-divider m-0"></div>
                                </li>
                                <li><a href="lock-screen.html"><i class="icon-lock"></i> Lock Screen</a></li>
                                <li><a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{-- {{ __('Logout') }} --}}
                                    <i class="icon-logout"></i> Logout</a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Side-Nav-->
        <aside class="main-sidebar hidden-print ">
            <section class="sidebar" id="sidebar-scroll">

                <div class="user-panel">
                    <div class="f-left image"><img src="{{asset('assets/images/avatar-1.png')}}" alt="User Image" class="img-circle">
                    </div>
                    <div class="f-left info">
                        <p>{{ Auth::user()->name }}</p>
                        <p class="designation">Admin Outlet <i class="icofont icofont-caret-down m-l-5"></i></p>
                    </div>
                </div>
                <!-- sidebar profile Menu-->
                <ul class="nav sidebar-menu extra-profile-list">
                    <li>
                        <a class="waves-effect waves-dark" href="/edit_profil">
                            <i class="icon-user"></i>
                            <span class="menu-text">View Profile</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li>
                            <a class="waves-effect waves-dark" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            <i class="icon-logout"></i>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <span class="menu-text">Logout</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                </ul>
                <!-- Sidebar Menu-->
                <ul class="sidebar-menu">
                    <li class="nav-level">Navigation</li>
                    <li class="active treeview">
                        <a class="waves-effect waves-dark" href="/admin_outlet">
                            <i class="icon-speedometer"></i><span> Dashboard</span>
                        </a>
                    </li>
                    @if(auth::user()->status == 1)
                    <li class="nav-level"> Data</li>
                    <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i
                                class="icon-briefcase"></i><span> Master Data</span><i class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">
                            <li><a class="waves-effect waves-dark" href="{{route('karyawan_outlet_data')}}"><i
                                        class="icon-arrow-right"></i> Data Karyawan</a></li>
                        </ul>
                    </li>
                    <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i
                                class="icon-book-open"></i><span> Data Penilaian</span><i
                                class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">
                            <li><a class="waves-effect waves-dark" href="{{Route('outlet_penilaian_outlet_index')}}"><i class="icon-arrow-right"></i> Data
                                    Penilaian Outlet</a></li>
                            <li><a class="waves-effect waves-dark" href="{{Route('outlet_penilaian_karyawan_index')}}"><i class="icon-arrow-right"></i> Data
                                    Penilaian Karyawan</a></li>
                        </ul>
                    </li>
                    @else
                    <li class=" treeview">
                        <a class="waves-effect waves-dark" href="#">
                            <i class="icon-speedometer"></i><span> data outlet belum ada</span>
                        </a>
                    </li>
                    @endif
                </ul>
            </section>
        </aside>

    </div>
    </div>
    <!-- Sidebar chat end-->
    <div class="content-wrapper">

        @yield('content')

    </div>
    </div>

    </div>
    </div>
    </div>

    <!-- 2-1 block end -->
    </div>
    <!-- Main content ends -->
    <!-- Container-fluid ends -->

    </div>
    </div>
    <!-- Required Jqurey -->
    <script src="{{asset('assets/plugins/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="{{asset('assets/plugins/tether/dist/js/tether.min.js')}}"></script>
    <!-- Required Fremwork -->
    <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- waves effects.js -->
    <script src="{{asset('assets/plugins/Waves/waves.min.js')}}"></script>
    <!-- Scrollbar JS-->
    <script src="{{asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js')}}"></script>
    <!--classic JS-->
    <script src="{{asset('assets/plugins/classie/classie.js')}}"></script>
    <!-- notification -->
    <script src="{{asset('assets/plugins/notification/js/bootstrap-growl.min.js')}}"></script>

    <!-- custom js -->
    <script src="{{ asset('assets/js/main.min.js') }}"></script>
    <script src="{{ asset('assets/pages/elements.js') }}"></script>
    <script src="{{ asset('assets/js/menu.min.js') }}"></script>
    <script src="{{ asset('datatable/jquerrydatatable.min.js') }}"></script>
    <script src="{{ asset('datatable/datatable.js') }}"></script>

    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });

    </script>
    <script>
        var $window = $(window);
        var nav = $('.fixed-button');
        $window.scroll(function () {
            if ($window.scrollTop() >= 200) {
                nav.addClass('active');
            } else {
                nav.removeClass('active');
            }
        });

    </script>
</body>

</html>
