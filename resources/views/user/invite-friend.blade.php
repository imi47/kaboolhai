@extends('user/user_master_layout1') 
@section('data')

<style>
  @media (max-width:991px) {
    .profile_stat {
      margin-bottom:20px;
    }
  }
</style>

<div style="padding-top:90px;"></div>
<div class="container-fluid">
 <div class="col-md-3 hidden-sm hidden-xs">
        <div class="well" style="box-shadow: none;">
          @include('user/side_bar')
        </div>
      </div>

  <div class="col-md-9">
    
    <div class="row">
      <h2 class="dashboard-h2 text-center " style="margin-bottom:100px; ">Invite Friends</h2>
      
      <div class="col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-3 col-xs-6">
       <div class="profile_stat hvr-grow">
          <a href="javascript:popup_share('https://www.facebook.com/sharer.php?={{url('/')}}')" target="__blank">
            <img src="{{ $user_assets }}/fb.jpg" alt="" style="width:150px ;height: 150px; border-radius:5px;">
          </a>
        </div> 
      </div>
      
      <div class="col-md-3 col-sm-4 col-xs-6">
        <div class="profile_stat hvr-grow">
          <a href="javascript:popup_share('https://plus.google.com/share?url={{url('/')}}',700,320)" target="__blank">
            <img src="{{ $user_assets }}/g+.jpg" alt="" style="width:150px ;height: 150px; border-radius:5px;">
          </a>
        </div>
      </div>
      
      <div class="col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-3 col-xs-6">
        <div class="profile_stat hvr-grow">
          <a href="javascript:popup_share('https://twitter.com/home?status={{url('/')}}',700,320)" target="__blank">
            <img src="{{ $user_assets }}/twtr.jpg" alt="" style="width:150px ;height: 150px; border-radius:5px;">
          </a>
        </div>
      </div>
      
      <div class="col-md-3 col-sm-4 col-xs-6">
        <div class="profile_stat hvr-grow">
          <a href="javascript:popup_share('http://www.linkedin.com/shareArticle?mini=true&url={{url('/')}}',700,320)" target="__blank">
            <img src="{{ $user_assets }}/link.jpg" alt="" style="width:150px ;height: 150px; border-radius:5px;">
          </a>
        </div>
      </div>

    </div>
     
  </div>

  </div>
  
</div>

<br><br>   

@endsection

@push('css')
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
<link rel="stylesheet" href="{{ $user_assets }}/css/owl.theme.default.min.css" />
<link rel="stylesheet" href="{{ $user_assets }}/css/owl.carousels.css" />
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
  

{{-- <script type="text/javascript" src="{{ $user_assets }}/js/custom.js"></script> --}}
<link rel="stylesheet" href="{{ $user_assets }}/css/custom.css" />
<script src="{{ $user_assets }}/js/dropzone.js"></script>
 <link rel="stylesheet" href="{{ $user_assets }}/css/dropzone.css">
  {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   
  {{-- <link rel="stylesheet" href="{{ $user_assets }}/hover-min2.css"> --}}
  <link rel="stylesheet" href="{{ $user_assets }}/css/style3.css"/>

  <link rel="stylesheet" href="{{ $user_assets }}/css/owl.carousel2.css" />

<script type="text/javascript">
   function popup_share(url, width, height)
   {
      day = new Date();
      id = day.getTime();
      eval("page" + id + " = window.open(url, '" + id + "', 'toolbar=0,scrollbars=1,location=1,statusbar=0,menubar=0,resizable=0,width=" + width + ", height=" + height + ", left = 0, top = 0');");
   }
</script>
</script>
@endpush      
  
</body>
</html>