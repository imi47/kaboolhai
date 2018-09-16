
@extends('admin/master_layout')
 @section('data')
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
<section id="main-content" class=" ">
    <section class="wrapper main-wrapper row" style=''>

    <div class='col-xs-12'>
        <div class="page-title">

            <div class="pull-left">
                <!-- PAGE HEADING TAG - START --><h1 class="title">View All Help Request</h1><!-- PAGE HEADING TAG - END -->                            </div>

                            <div class="pull-right hidden-xs">
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{url('admin/dashboard') }}"><i class="fa fa-home"></i>Home</a>
                        </li>
                        <li>
                            <a href="{{ url('admin/view-help-request') }}">View All Help Request</a>
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
                <h2 class="title pull-left">View All Help Request</h2>
                
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
            <table class="table table-striped" >
                <thead>
                    <tr>
                        <th>Request-id</th>
                        <th>Email</th>
                        <th>Phone No</th>
                        <th>Account detail</th>
                        <th>Request type</th>
                         <th>Description</th>
                        
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($helprequest as $row)
                    <tr>
                     	<td >{{ $row->request_id }}</td>
                        <td >{{ $row->email }}</td>
                        <td>{{ $row->phone }}</td>
                            <td>{{ $row->account_detail }}</td>
                        <td>{{ $row->request_type }}</td>
                        <td> {{str_limit($row->description,25)}} <a href="javascript:;" data-toggle="modal" data-target="#{{ $row->request_id }}"> Read more</a></td>
                        <td>
                        <td>
                        <a href="{{ url('admin/delete-help-request',$row->request_id) }}" onclick="return confirm('Are you sure you want to delete this request ?');" ><i class="fa fa-archive" title="delete"></i></a>
                        </td>
                        
                    </tr>

  <!-- Modal -->
  <div class="modal fade" id="{{ $row->request_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content modal-md" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Latest update detail </h5>
</div>
<div class="modal-body">
{{ $row->description }}

<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

</div>
<div class="clearfix"></div>

</div>
</div>
</div>
</div>
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




