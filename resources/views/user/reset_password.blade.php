@extends('user/user_master_layout1') 
@section('data') <br><br><br><br>
<div class="container-fluid">
 <div class="col-md-6 col-md-offset-3">
   @if(Session::has('error'))
                    <p class="alert alert-danger">{{ Session::get('error') }}</p>
                   
                @endif
                @if(Session::has('success'))
                    <p class="alert alert-success">{{ Session::get('success') }}</p>
                @endif
 </div>

  <div class="row" style="padding-top:40px;padding-bottom:100px;">
    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-4"></div>
    <div class="col-sm-4 col-md-4 col-lg-4">
      <div style="width:100%;height:400px;background-color:;border:1px dashed #5A378C;">
         <p style="padding-left:26%;padding-top:20px;color:#ED6C05;font-family:arial rounded;font-weight:lighter;font-size:22px;">Reset password</p>
       <form method="post" action="{{ url('update-password') }}">
            {{ csrf_field() }}
        <div class="mail" style="padding-left:19%;color:white;padding-top:16px;">
         <label for="email" style="color:#ED6C05;">new password *</label>
          <br>
            <span id="error1" style="display: none; color: red">Passwords do not match !</span>
          <input type="password" name="new_password" id="new" class="form-control mail_put" placeholder="enter new password" style="width: 78%;height: 30px;border-radius: 3px;">
        </div>
         <input type="hidden" name="email" value="{{ $email }}">
          <div class="mail" style="padding-left:19%;color:white;padding-top:16px;">

             <label for="email" style="color:#ED6C05;">Confirm password *</label>
             
              <input type="password" name="con_password" id="confirm" class="form-control mail_put" placeholder="confirm password" style="width: 78%;height: 30px;border-radius: 3px;">
        </div>

        <div style="padding-left:70px;color:white;padding-top:15px;">
         <button type="submit" style="width: 100px;height: 32px;border-radius: 11px;background-color: #ED6C05;border-color: #ED6C05;color:white;font-weight:bold;" onclick="return checkpassword()">update</button>
       
          <a href="{{url('login') }}" style="margin-left: 0px; padding: 1px 8px 1px 8px; border-radius: 5px; background-color: #ED6C05" class="btn btn-primary" type="submit">Already Register ?</a>
        </div>
      </div>
    </form>
    </div>
    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-4"></div>
  </div>
  
           
            </div>
          </div>  
        </div>
      

        <br>

        @endsection
<script type="text/javascript">
  function checkpassword()
   {
    
    var new_password=$('#new').val();
    var confirm=$('#confirm').val();
    if(new_password != confirm)
    {
      // $('#error').show();
      $('#error1').show();
      return false;
    }
    
  }
</script>

@push('css')
<link rel="shortcut icon" href="{{ $user_assets }}/images/favicon.png">
<link rel="stylesheet" href="{{ $user_assets }}/css/animate.css" />
<!-- bootstrap -->
<link rel="stylesheet" href="{{ $user_assets }}/css/bootstrap.css" />
<!-- et line icon -->
<link rel="stylesheet" href="{{ $user_assets }}/css/et-line-icons.css" />
<!-- font-awesome icon -->
<link rel="stylesheet" href="{{ $user_assets }}/css/font-awesome.min.css" />
<!-- revolution slider -->
<link rel="stylesheet" href="{{ $user_assets }}/css/extralayers.css" />
<link rel="stylesheet" href="{{ $user_assets }}/css/settings.css" />
<!-- magnific popup -->
<link rel="stylesheet" href="{{ $user_assets }}/css/magnific-popup.css" />
<!-- owl carousel -->
<link rel="stylesheet" href="{{ $user_assets }}/css/owl.carousel.css" />
<link rel="stylesheet" href="{{ $user_assets }}/css/owl.transitions.css" />
<link rel="stylesheet" href="{{ $user_assets }}/css/full-slider.css" />
<!-- text animation -->
<link rel="stylesheet" href="{{ $user_assets }}/css/text-effect.css" />
<!-- hamburger menu  -->
<link rel="stylesheet" href="{{ $user_assets }}/css/menu-hamburger.css" />
<!-- common -->
<link rel="stylesheet" href="{{ $user_assets }}/css/style.css" />

<!-- responsive -->
<link rel="stylesheet" href="{{ $user_assets }}/css/responsive.css" /> 
<script type="text/javascript" src="{{ $user_assets }}/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="{{ $user_assets }}/js/custom.js"></script>
<link rel="stylesheet" href="{{ $user_assets }}/css/custom.css" />
@endpush
@push('js')
<script type="text/javascript" src="{{ $user_assets }}/js/modernizr.js"></script>
<script type="text/javascript" src="{{ $user_assets }}/js/bootstrap.js"></script>
<script type="text/javascript" src="{{ $user_assets }}/js/bootstrap-hover-dropdown.js"></script>
<script type="text/javascript" src="{{ $user_assets }}/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="{{ $user_assets }}/js/skrollr.min.js"></script>
<script type="text/javascript" src="{{ $user_assets }}/js/smooth-scroll.js"></script>
<!-- jquery appear -->
<script type="text/javascript" src="{{ $user_assets }}/js/jquery.appear.js"></script>
<!-- animation -->
<script type="text/javascript" src="{{ $user_assets }}/js/wow.min.js"></script>
<!-- page scroll -->
<script type="text/javascript" src="{{ $user_assets }}/js/page-scroll.js"></script>
<!-- easy piechart-->
<script type="text/javascript" src="{{ $user_assets }}/js/jquery.easypiechart.js"></script>
<!-- parallax -->
<script type="text/javascript" src="{{ $user_assets }}/js/jquery.parallax-1.1.3.js"></script>
<!--portfolio with shorting tab -->
<script type="text/javascript" src="{{ $user_assets }}/js/jquery.isotope.min.js"></script>
<!-- owl slider  -->
<script type="text/javascript" src="{{ $user_assets }}/js/owl.carousel.min.js"></script>
<!-- magnific popup  -->
<script type="text/javascript" src="{{ $user_assets }}/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="{{ $user_assets }}/js/popup-gallery.js"></script>
<!-- text effect  -->
<script type="text/javascript" src="{{ $user_assets }}/js/text-effect.js"></script>
<!-- revolution slider  -->
<script type="text/javascript" src="{{ $user_assets }}/js/jquery.tools.min.js"></script>
<script type="text/javascript" src="{{ $user_assets }}/js/jquery.revolution.js"></script>
<!-- counter  -->
<script type="text/javascript" src="{{ $user_assets }}/js/counter.js"></script>
<!-- countTo -->
<script type="text/javascript" src="{{ $user_assets }}/js/jquery.countTo.js"></script>
<!-- fit videos  -->
<script type="text/javascript" src="{{ $user_assets }}/js/jquery.fitvids.js"></script>
<!-- imagesloaded  -->
<script type="text/javascript" src="{{ $user_assets }}/js/imagesloaded.pkgd.min.js"></script>
<!-- hamburger menu-->
<script type="text/javascript" src="{{ $user_assets }}/js/classie.js"></script>
<script type="text/javascript" src="{{ $user_assets }}/js/hamburger-menu.js"></script>
<!-- setting -->
<script type="text/javascript" src="{{ $user_assets }}/js/main.js"></script>
@endpush
