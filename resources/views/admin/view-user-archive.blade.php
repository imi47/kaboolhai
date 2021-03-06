
@extends('admin/master_layout')
 @section('data')
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
<section id="main-content" class=" ">
    <section class="wrapper main-wrapper row" style=''>

    <div class='col-xs-12'>
        <div class="page-title">

            <div class="pull-left">
                <!-- PAGE HEADING TAG - START --><h1 class="title">View All Archive Users</h1><!-- PAGE HEADING TAG - END -->                            </div>

                            <div class="pull-right hidden-xs">
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{url('admin/dashboard') }}"><i class="fa fa-home"></i>Home</a>
                        </li>
                        <li>
                            <a href="{{ url('admin/view-all') }}">View All</a>
                        </li>
                        
                    </ol>
                </div>
                                
        </div>
    </div>
    <div class="clearfix"></div>
    <!-- MAIN CONTENT AREA STARTS -->
    
<div class="col-lg-12">
    <section class="box ">
            <header class="panel_header">
                <h2 class="title pull-left">View All Archive Users</h2>
                
            </header>
            <div class="content-body">    <div class="row">
        <div class="col-xs-12">
            <!-- ********************************************** -->
            @if(Session::has('error'))
                    <p class="alert alert-danger">{{ Session::get('error') }}</p>
                @endif
                @if(Session::has('success'))
                    <p class="alert alert-success">{{ Session::get('success') }}</p>
                @endif
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>User-id</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Country</th>
                        <th>City</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($user_data as $row)
                    <tr>
                     
                        <td style="text-align: center;">{{ $row->id }}</td>
                        <td style="text-align: center;">{{ $row->user_name }}</td>
                            <td style="text-align: center;">{{ $row->email }}</td>
                        <td style="text-align: center;">{{ $row->country_name }}</td>
                        <td style="text-align: center;"> {{ $row->city_name }}</td>

                        <td style="text-align: center;">
                        <a href="{{ url('admin/view_user',$row->id) }}"><i class="fa fa-eye" title="View"></i></a>|
                        <a href="{{ url('admin/user-unarchive',$row->id) }}" onclick="return confirm('Are you sure you want to un Unarchive this user?');" ><i class="fa fa-archive" title="Archive"></i></a>
                        </td>
                        
                    </tr>
@endforeach
                </tbody>
            </table>

            <!--  *********************************************** -->

        </div>
    </div>
    </div>
        </section></div>



<!-- MAIN CONTENT AREA ENDS -->
    </section>
    </section>
    <!-- END CONTENT -->
        <!-- END CONTAINER -->
<!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->


<!-- CORE JS FRAMEWORK - START -->
@endsection
@push('css')
<link rel="shortcut icon" href="{{ $admin_assets }}/images/favicon.png" type="image/x-icon" />    <!-- Favicon -->
        <link rel="apple-touch-icon-precomposed" href="{{ $admin_assets }}/images/apple-touch-icon-57-precomposed.png">   <!-- For iPhone -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ $admin_assets }}/images/apple-touch-icon-114-precomposed.png">    <!-- For iPhone 4 Retina display -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ $admin_assets }}/images/apple-touch-icon-72-precomposed.png">    <!-- For iPad -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ $admin_assets }}/images/apple-touch-icon-144-precomposed.png">    <!-- For iPad Retina display -->




        <!-- CORE CSS FRAMEWORK - START -->
        <link href="{{ $admin_assets }}/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="{{ $admin_assets }}/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ $admin_assets }}/plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <!-- <link href="{{ $admin_assets }}/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/> -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="{{ $admin_assets }}/css/animate.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ $admin_assets }}/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS FRAMEWORK - END -->

        <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        
        
<link href="{{ $admin_assets }}/plugins/datatables/css/jquery.dataTables.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="{{ $admin_assets }}/plugins/datatables/extensions/TableTools/css/dataTables.tableTools.min.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="{{ $admin_assets }}/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="{{ $admin_assets }}/plugins/datatables/extensions/Responsive/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet" type="text/css" media="screen"/>

        <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE CSS TEMPLATE - START -->
        <link href="{{ $admin_assets }}/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="{{ $admin_assets }}/css/responsive.css" rel="stylesheet" type="text/css"/>
@endpush
@push('js')
<script src="{{ $admin_assets }}/js/jquery-1.11.2.min.js" type="text/javascript"></script> 
<script src="{{ $admin_assets }}/js/jquery.easing.min.js" type="text/javascript"></script> 
<script src="{{ $admin_assets }}/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
<script src="{{ $admin_assets }}/plugins/pace/pace.min.js" type="text/javascript"></script>  
<script src="{{ $admin_assets }}/plugins/perfect-scrollbar/perfect-scrollbar.min.js" type="text/javascript"></script> 
<script src="{{ $admin_assets }}/plugins/viewport/viewportchecker.js" type="text/javascript"></script>  
<script>window.jQuery||document.write('<script src="{{ $admin_assets }}/js/jquery-1.11.2.min.js"><\/script>');</script>
<!-- CORE JS FRAMEWORK - END --> 


<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 

<script src="{{ $admin_assets }}/plugins/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="{{ $admin_assets }}/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js" type="text/javascript"></script>
<script src="{{ $admin_assets }}/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js" type="text/javascript"></script>
<script src="{{ $admin_assets }}/plugins/datatables/extensions/Responsive/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


<!-- CORE TEMPLATE JS - START --> 
<script src="{{ $admin_assets }}/js/scripts.js" type="text/javascript"></script> 
<!-- END CORE TEMPLATE JS - END --> 
@endpush

<!-- General section box modal start -->




