@extends('user/user_master_layout1') 
<style>

@media (min-width:320px)
{
  .mail_put
  {
    width:180px;
  }
}
</style>
@section('data') 

<style>
.navbar-form button {
    padding: 6px 11px !important;
}

.navbar-form button .glyphicon {
    top: 1px;
}

.searchcontainer button {
    padding: 13px 16px;
    margin-top: -56px;
    margin-right: 0px;
}
</style>

<div class="container">
  <div id="wait" style="display: none;"></div>
  <div class="row"  id="already" style="padding-top: 120px;padding-bottom: 0px;">
      <div class="col-sm-4 col-md-4 col-lg-4 col-xs-4"></div>
      <div class="col-sm-4 col-md-4 col-lg-4">
        <div style="height: 526px;background-image: url({{$user_assets}}/lg_bg.png);background-repeat:no-repeat;background-size:contain;background-position:center fixed;position: relative;">
           <h2 style="padding-left: 132px;padding-top: 40px;color:white;font-family:arial rounded mt;">Login</h2>

           <div>
            <div class="col-md-12">
   @if(Session::has('error'))
                    <p style="width: 72%;
    margin-left: 14%;" class="alert alert-danger">{{ Session::get('error') }}</p>
                    
                @endif
                @if(Session::has('success'))
                    <p style="width: 72%;
    margin-left: 14%;" class="alert alert-success">{{ Session::get('success') }}</p>
                @endif
 </div>

             <form method="post" action="{{ url('dologin') }}">
            {{ csrf_field() }}
              <div class="mail" style="padding-left:19%;color:white;padding-top:30px;">
               <label for="email">Email *</label>
                <input type="email" name="email" class="form-control mail_put" style="width: 78%;height: 30px;border-radius: 3px;">
              </div>
              <div style="padding-left:19%;color:white;padding-top:15px;">
               <label for="email">Password</label>
                <input type="Password" name="password" class="form-control" style="width:78%;height: 30px;border-radius: 3px;">
              </div>
              <div style="padding-left:70px;color:white;padding-top:15px;">
               <button style="width: 65px;height: 35px;border-radius: 3px;border-radius: 0px;background-color: #ED6C05;border-color: #ED6C05;color:white;font-weight:bold;">Login</button>
              </div>
              <div style="float:right;padding-right:70px;color:white;padding-top:15px;">
              <a href="#" style="color:white;" onclick="return forgot()">Forgot Password?</a>
              </div>

             </form>
           </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-4 col-lg-4 col-xs-4"></div>
  </div>
   <div class="row forgot" style="padding-top:170px;padding-bottom:100px; display: none">
     <p id="mesg" style="padding-left:36%;padding-top:20px;color:#ED6C05;font-family:arial rounded;font-weight:lighter;font-size:22px; display: none;">A link sent to your email</p>
    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-4"></div>
    <div class="col-sm-4 col-md-4 col-lg-4">
      <form id="forgot_password"> 
            {{ csrf_field() }}  

      <div style="width:100%;height:240px;background-color:;border:1px dashed #5A378C;">

        <p style="padding-left:26%;padding-top:20px;color:#ED6C05;font-family:arial rounded;font-weight:lighter;font-size:22px;">Enter your email</p>
        <div class="mail" style="padding-left:19%;color:white;padding-top:16px;">
         <label for="email" style="color:#ED6C05;">Email *</label>
          <input type="email" name="email" id="email" class="form-control mail_put" placeholder="Enter Email" style="width: 78%;height: 30px;border-radius: 3px;">
        </div>
        <div style="padding-left:70px;color:white;padding-top:15px;">
         <button style="width: 100px;height: 32px;border-radius: 11px;background-color: #ED6C05;border-color: #ED6C05;color:white;font-weight:bold;">Send</button>
       </form>
        </div>
      </div>
    </div>
    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-4"></div>
  </div>
</div>

<!-- <div class="container">
  <div class="jumbotron" style="padding-top: 120px;">
    <div class="row">
      <div class="col-sm-3 col-md-3 col-lg-3 col-xs-3"></div>
      <div class="col-sm-6 col-md-6 col-lg-6">
    <div style="width: 100%;height: 526px;background-color:red; background-image: url({{$user_assets}}/lg_bg.png);background-repeat: ></div>
    </div> 
       </div> 
      <div class="col-sm-3 col-md-3 col-lg-3 col-xs-3"></div>
      </div>
    </div>
  </div>
</div> -->   
<script type="text/javascript">
  function forgot()
   {
    $('.forgot').show();
    $('#already').hide();
  }
  $('#forgot_password').submit(function(e)
 {
    document.getElementById("wait").style.display = "block";
                            e.preventDefault();
                            formData=$(this).serialize();
 // alert(formData);
                            var data=formData;

                           $.post('{{ url('/forgot-password') }}' , data , function(data)
                           {
                             document.getElementById("wait").style.display = "none"
                            if(data == 'false')

                            {
                              alert('invalid email try again!');
                            }
                            else
                            {

                              $('#mesg').show();
                              // window.location.href = '{{ url('profile') }}';
                            }
                                              // document.getElementById("wait").style.display = "none"
                                               // alert(data);
                                              
                                          });

                            
                            });
</script>
 @endsection
<style type="text/css">
#wait {
position: fixed;
left: 0px;
top: 0px;
width: 100%;
height: 100%;
z-index: 9999;
background: url('{{ $user_assets }}/loading.gif') 50% 50% no-repeat rgba(249,249,249,0.7);
background-size: 150px 150px;
}
</style>


@push('css')
<link rel="shortcut icon" href="{{ $user_assets }}/images/favicon.png">
    <link rel="stylesheet" href="{{ $user_assets }}/css/animate.css" />
<!-- bootstrap -->
<link rel="stylesheet" href="{{ $user_assets }}/css/chat.css" />
<!-- et line icon -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
  
  {{-- <script type="text/javascript" src="{{ $user_assets }}/js/jquery-2.1.1.min.js"></script> --}}
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
<!-- setting -->

@endpush
