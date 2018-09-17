

<!DOCTYPE html>
<html class=" ">
    
<head>
       
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <title>Kaboolhai:Login Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="shortcut icon" href="{{ $admin_assets }}/images/favicon.png" type="image/x-icon" />


           <!-- Favicon -->
        <link rel="apple-touch-icon-precomposed" href="{{ $admin_assets }}/images/apple-touch-icon-57-precomposed.png">	<!-- For iPhone -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ $admin_assets }}/images/apple-touch-icon-114-precomposed.png">    <!-- For iPhone 4 Retina display -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ $admin_assets }}/images/apple-touch-icon-72-precomposed.png">    <!-- For iPad -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ $admin_assets }}/images/apple-touch-icon-144-precomposed.png">    <!-- For iPad Retina display -->




        <!-- CORE CSS FRAMEWORK - START -->
        <link href="{{ $admin_assets }}/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="{{ $admin_assets }}/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ $admin_assets }}/plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ $admin_assets }}/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="{{ $admin_assets }}/css/animate.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ $admin_assets }}/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css"/>
        <script src="{{ $admin_assets }}/js/jquery-1.11.2.min.js" type="text/javascript"></script> 
        <!-- CORE CSS FRAMEWORK - END -->

        <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        
        
<link href="{{ $admin_assets }}/plugins/icheck/skins/all.css" rel="stylesheet" type="text/css" media="screen"/>

        <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE CSS TEMPLATE - START -->
        <link href="{{ $admin_assets }}/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="{{ $admin_assets }}/css/responsive.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS TEMPLATE - END -->

    </head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
    <body class=" login_page">


    <div class="login-wrapper row">
        <div class="login loginpage col-lg-offset-4 col-md-offset-3 col-sm-offset-3 col-xs-offset-0 col-xs-12 col-sm-6 col-lg-4">
            <h1><a href="#" title="Login Page" tabindex="-1">Complete Admin</a></h1>
            <div class="container-fluid">

            <form name="loginform"  action="{{url('admin/login')}}" id="login" @if(Session::has('error1'))
            style="display: none" @endif
             method="post">
                <p>
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                

                     <label for="user_login">Username<br />
                        <input type="email" name="email" id="user_login" class="input" placeholder=" Your @email" size="20" /></label>
                </p>
                <p>
                    <label for="user_pass">Password<br />
                        <input type="password" name="password" id="user_pass" class="input" placeholder="password" size="20" /></label>
                </p>
                @if(Session::has('error'))
                    <p class="alert alert-danger">{{ Session::get('error') }}</p>
                @endif

               <!--  <a href="login">login</a> -->
               <p id="nav">
                <a class="pull-left" href="#" onclick=forgot(); title="Password Lost and Found">Forgot password?</a>
               <!--  <a class="pull-right" href="ui-register.html" title="Sign Up">Sign Up</a> -->
            </p>

                <p class="submit">
                    <input type="submit" name="wp-submit" id="wp-submit" class="btn btn-accent btn-block" value="Sign In" />
                </p>
                
            </form>

            
            <form name="loginform"  action="{{url('admin/forgot')}}" id="forgo" method="post" @if(!Session::has('error1'))
            style="display: none" @endif>
                <p>
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                

                     <label for="user_login">Email<br />
                        <input type="email" name="email" id="user_login" class="input" placeholder=" Your @email" size="20" /></label>
                </p>
                 @if(Session::has('error1'))
                    <p class="alert alert-danger">{{ Session::get('error1') }}</p>
                @endif
                <a class="pull-left" href="#" onclick=login(); title="Password Lost and Found">Already Register?</a>

                <p class="submit">
                    <input type="submit" name="wp-submit" id="wp-submit" class="btn btn-accent btn-block" value="Submit" />
                </p>
</form>
        </div>
    </div>
</div>




<!-- MAIN CONTENT AREA ENDS -->
<!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->


<!-- CORE JS FRAMEWORK - START --> 
<script type="text/javascript">
    function forgot()
    {
        
        $('#login').hide();
        $('#forgo').show();
    }
    function login()
    {
       $('#login').show();
        $('#forgo').hide(); 
    }
</script>

<script src="{{ $admin_assets }}/js/jquery.easing.min.js" type="text/javascript"></script> 
<script src="{{ $admin_assets }}/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
<script src="{{ $admin_assets }}/plugins/pace/pace.min.js" type="text/javascript"></script>  
<script src="{{ $admin_assets }}/plugins/perfect-scrollbar/perfect-scrollbar.min.js" type="text/javascript"></script> 
<script src="{{ $admin_assets }}/plugins/viewport/viewportchecker.js" type="text/javascript"></script>  
<script>window.jQuery||document.write('<script src="{{ $admin_assets }}/js/jquery-1.11.2.min.js"><\/script>');</script>
<!-- CORE JS FRAMEWORK - END --> 


<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 

<script src="{{ $admin_assets }}/plugins/icheck/icheck.min.js" type="text/javascript"></script>
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


<!-- CORE TEMPLATE JS - START --> 
<script src="{{ $admin_assets }}/js/scripts.js" type="text/javascript"></script> 
<!-- END CORE TEMPLATE JS - END --> 


<!-- General section box modal start -->
<!-- <div class="modal" id="section-settings" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog animated bounceInDown">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Section Settings</h4>
            </div>
            <div class="modal-body">

                Body goes here...

            </div>
            <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                <button class="btn btn-success" type="button">Save changes</button>
            </div>
        </div>
    </div>
</div> -->
<!-- modal end -->
</body>

</html>



