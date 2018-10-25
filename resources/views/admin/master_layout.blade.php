<!DOCTYPE html>
<html class=" ">

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>{{ $title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="{{ $admin_assets }}/images/favicon.png" type="image/x-icon" />
    <!-- Favicon -->
    <link rel="apple-touch-icon-precomposed" href="{{ $admin_assets }}/images/apple-touch-icon-57-precomposed.png">
    <!-- For iPhone -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ $admin_assets }}/images/apple-touch-icon-114-precomposed.png">
    <!-- For iPhone 4 Retina display -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ $admin_assets }}/images/apple-touch-icon-72-precomposed.png">
    <!-- For iPad -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ $admin_assets }}/images/apple-touch-icon-144-precomposed.png">
    @stack('css')

    <style>
        .bg-orange.no-padding.wow {
            margin:auto 30px;
        }

        a {
            text-decoration:none !important;
        }

        .fa-user-friends, .fa-envelope, .fa-bell {
            font-size:16px;
        }
    </style>
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->


<body class=" ">
    <!-- START TOPBAR -->
    <div class='page-topbar'>
        <div class='logo-area' style="margin-left:30px ">

        </div>
        <div class='quick-area'>
            <div class='pull-left'>
                <ul class="info-menu left-links list-inline list-unstyled">
                    <li class="sidebar-toggle-wrap">
                        <a href="#" data-toggle="sidebar" class="sidebar_toggle">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                    
                </ul>
            </div>
            <div class='pull-right'>
                <ul class="info-menu right-links list-inline list-unstyled">
                    <li class="profile">
                        <a href="#" data-toggle="dropdown" class="toggle">
                            <img src="{{$admin_assets}}/data/profile/profile-crm.jpg" alt="user-image" class="img-circle img-inline">
                            <span>{{ Session::get('admin_username') }} <i class="fa fa-angle-down"></i></span>
                        </a>
                        <ul class="dropdown-menu profile animated fadeIn">
                            <li>
                                <a href="#profile">
                                    <i class="fa fa-user"></i> Profile
                                </a>
                            </li>
                            <li class="last">
                                <a href="{{url('admin/logout')}}">
                                    <i class="fa fa-lock"></i> Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
        </div>

    </div>
    <!-- END TOPBAR -->
    <!-- START CONTAINER -->
    <div class="page-container row-fluid container-fluid">

        <!-- SIDEBAR - START -->

        <div class="page-sidebar fixedscroll"  style="background-color: #5a378c;">

            <!-- MAIN MENU - START -->
            <div class="page-sidebar-wrapper" id="main-menu-wrapper">

                <!-- USER INFO - START -->
                <div class="profile-info row">

                    <div class="profile-image col-xs-4">
                        <a href="{{url('admin/dashboard') }}">
                            <img alt="" src="{{$admin_assets}}/data/profile/profile-crm.jpg" class="img-responsive img-circle">
                        </a>
                    </div>

                    <div class="profile-details col-xs-8">

                        <h3>
                    <a href="{{ url('admin/dashboard') }}">{{ Session::get('admin_username') }}</a>

                    <!-- Available statuses: online, idle, busy, away and offline -->
                    <span class="profile-status online"></span>
                </h3>

                        <p class="profile-title">Administrator</p>

                    </div>

                </div>
                <!-- USER INFO - END -->

                <ul class='wraplist'>

                    <li class="profile-title">
                        <a href="{{url('admin/dashboard') }}">
                            <i class="fa fa-dashboard"></i>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>
                    <li class="profile-title">
                        <a href="javascript:;">
                            <i class="fa fa-users"></i>
                            <span class="title">Users</span>
                            
                        </a>
                        <ul class="sub-menu">
                            {{-- <li>
                                <a class="profile-title" href="{{ url('admin/add-user') }}">Add User </a>
                            </li> --}}
                            <li>
                                <a class="" href="{{ url('admin/view-all') }}">View All</a>
                            </li>
                            
                        </ul>
                    </li>


                    <li class="profile-title">
                        <a href="javascript:;">
                            <i class="fa fa-plus"></i>
                            <span class="title">Archive Record</span>
                            
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a class="profile-title" href="{{ url('admin/get-user-archive') }}">Users archive</a>
                            </li>
                            
                            
                        </ul>
                    </li>
                    <li class="profile-title">
                        <a href="javascript:;">
                            <i class="fa fa-plus"></i>
                            <span class="title">Customer Query</span>
                            
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a class="profile-title" href="{{ url('admin/view-query') }}">view query</a>
                            </li>
                            
                            
                        </ul>
                    </li>

                    <li class="profile-title">
                        <a href="javascript:;">
                            <i class="fa fa-plus"></i>
                            <span class="title">Latest Update</span>
                            
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a class="profile-title" href="{{ url('admin/latest-update') }}">Add latest update</a>
                            </li>

                            <li>
                                <a class="profile-title" href="{{ url('admin/vew-latest-update') }}">Vew latest update</a>
                            </li>
                            
                            
                        </ul>
                    </li>

                    <li class="profile-title">
                        <a href="javascript:;">
                            <i class="fa fa-plus"></i>
                            <span class="title">Advert</span>
                            
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a class="profile-title" href="{{ url('admin/advert') }}">Add advert</a>
                            </li>

                            
                            
                        </ul>
                    </li>
                     <li class="profile-title">
                        <a href="javascript:;">
                            <i class="fa fa-plus"></i>
                            <span class="title">Assisted</span>
                            
                        </a>
                        <ul class="sub-menu">
                            
                            <li>
                                <a class="profile-title" href="{{ url('admin/view-assisted') }}">Vew assisted user</a>
                            </li>
                            
                            
                        </ul>
                    </li>

                    <li class="profile-title">
                        <a href="javascript:;">
                            <i class="fa fa-plus"></i>
                            <span class="title">Help Request</span>
                            
                        </a>
                        <ul class="sub-menu">
                            
                            <li>
                                <a class="profile-title" href="{{ url('admin/view-help-request') }}">Vew requests</a>
                            </li>
                            
                            
                        </ul>
                    </li>


                    <li class="profile-title">
                        <a href="javascript:;">
                            <i class="fa fa-plus"></i>
                            <span class="title">Close Account</span>
                            
                        </a>
                        <ul class="sub-menu">
                            
                            <li>
                                <a class="profile-title" href="{{ url('admin/view-close-account') }}">View Close Account</a>
                            </li>
                            
                            
                        </ul>
                    </li>

                    <li class="profile-title">
                        <a href="javascript:;">
                            <i class="fa fa-plus"></i>
                            <span class="title">Feedback</span>
                            
                        </a>
                        <ul class="sub-menu">
                            
                            <li>
                                <a class="profile-title" href="{{ url('admin/view-feedback') }}">View Feedback</a>
                            </li>
                            
                            
                        </ul>
                    </li>


                    
                    
                </ul>

            </div>
            <!-- MAIN MENU - END -->

        </div>
        <!--  SIDEBAR - END -->
        <!-- START CONTENT -->
        @yield('data')
        <!-- END CONTENT -->
        
        <div class="chatapi-windows ">

        </div>
    </div>
    <!-- END CONTAINER -->
    @stack('js')
</body>

<!-- Mirrored from jaybabani.com/complete-admin/v4.2/preview/fixedmenu/crm-contact-add.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Oct 2017 06:32:50 GMT -->

</html>