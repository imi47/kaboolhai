@extends('admin/master_layout')

@section('data')
    <section id="main-content" class=" ">
            <section class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">Dashboard</h1>
                            <!-- PAGE HEADING TAG - END -->
                        </div>

                    </div>
                </div>
                

                
                                        <div  id="platform_type_dates"></div>
                                    

                
                                        <div id="user_type"></div>
                                    
                
                                    
                                        <div id="browser_type"></div>
                                    

                
                                   
                                        <div  id="scatter_chart"></div>
                                   

                
                                        <div  id="page_views_today"></div>
                                   

                
                    
                       
                                   
                                        <div  id="gauge_chart"></div>
                                   
                               
                

                <!-- <div class="clearfix"></div>
                <div class="col-lg-12">
                    <section class="box nobox marginBottom0">
                        <div class="content-body">
                            <div class="row">
                                <div class="col-lg-3 col-sm-6 col-xs-12">
                                    <div class="r4_counter db_box">
                                        <i class='pull-left fa fa-thumbs-up icon-md icon-rounded icon-primary'></i>
                                        <div class="stats">
                                            <h4><strong>45%</strong></h4>
                                            <span>New Orders</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-xs-12">
                                    <div class="r4_counter db_box">
                                        <i class='pull-left fa fa-shopping-cart icon-md icon-rounded icon-accent'></i>
                                        <div class="stats">
                                            <h4><strong>243</strong></h4>
                                            <span>New Property</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-xs-12">
                                    <div class="r4_counter db_box">
                                        <i class='pull-left fa fa-dollar icon-md icon-rounded icon-purple'></i>
                                        <div class="stats">
                                            <h4><strong>$3424</strong></h4>
                                            <span>Profit Today</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-xs-12">
                                    <div class="r4_counter db_box">
                                        <i class='pull-left fa fa-users icon-md icon-rounded icon-warning'></i>
                                        <div class="stats">
                                            <h4><strong>1433</strong></h4>
                                            <span>New Users</span>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- End .row -->
                        </div>
                    </section>
                </div>

               

                <!-- MAIN CONTENT AREA ENDS -->
            </section>
        </section>
        <!-- END CONTENT -->
@endsection

@push('css')
    <!-- CORE CSS FRAMEWORK - START -->
    <link href="{{ $admin_assets }}/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ $admin_assets }}/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ $admin_assets }}/plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
    <!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" /> -->
<!--      <link href="{{ $admin_assets }}/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" /> -->
     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="{{ $admin_assets }}/css/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ $admin_assets }}/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
    <!-- CORE CSS FRAMEWORK - END -->

    <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - START -->

    <link href="{{ $admin_assets }}/plugins/jvectormap/jquery-jvectormap-2.0.1.css" rel="stylesheet" type="text/css" media="screen" />

    <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - END -->

    <!-- CORE CSS TEMPLATE - START -->
    <link href="{{ $admin_assets }}/css/style.css" rel="stylesheet" type="text/css" />
    <link href="{{ $admin_assets }}/css/responsive.css" rel="stylesheet" type="text/css" />
    <!-- CORE CSS TEMPLATE - END -->
@endpush

@push('js')
     <!-- CORE JS FRAMEWORK - START -->
    <script src="{{ $admin_assets }}/js/jquery-1.11.2.min.js" type="text/javascript"></script>
    <script src="{{ $admin_assets }}/js/jquery.easing.min.js" type="text/javascript"></script>
    <script src="{{ $admin_assets }}/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="{{ $admin_assets }}/plugins/pace/pace.min.js" type="text/javascript"></script>
    <script src="{{ $admin_assets }}/plugins/perfect-scrollbar/perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src="{{ $admin_assets }}/plugins/viewport/viewportchecker.js" type="text/javascript"></script>
    <script>
        window.jQuery || document.write('<script src="{{ $admin_assets }}/js/jquery-1.11.2.min.js"><\/script>');
    </script>
    <!-- CORE JS FRAMEWORK - END -->

    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->

    <script src="{{ $admin_assets }}/plugins/jvectormap/jquery-jvectormap-2.0.1.min.js" type="text/javascript"></script>
    <script src="{{ $admin_assets }}/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <script src="{{ $admin_assets }}/js/dashboard.js" type="text/javascript"></script>
    <script src="{{ $admin_assets }}/plugins/echarts/echarts-custom-for-dashboard.js" type="text/javascript"></script>
    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->

    <!-- CORE TEMPLATE JS - START -->
    <script src="{{ $admin_assets }}/js/scripts.js" type="text/javascript"></script>
    <!-- END CORE TEMPLATE JS - END -->
@endpush