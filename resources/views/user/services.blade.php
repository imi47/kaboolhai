@extends('user/user_master_layout1') 
@section('data') 
<style>
   .about_text
  {
     line-height: 200%;
     font-family: sans-serif;   
  }
  .bigheading
  {
    font-size: 46px;
    color: darkorange;
    text-align: center;
    padding-bottom:20px;
    font-family: "Source Sans Pro", sans-serif;
  }
  .ptext
  {
    font-size: 16px;
    color: #000000;
    text-align:justify;
    font-family: "Source Sans Pro", sans-serif;
  }
  .smallhead
  {
    font-size: 25px;
    color: #000000;
  }
 .menulists
  {
    font-size:16px;
     font-family: "Source Sans Pro", sans-serif;
  }
  .hdlist
  {
    line-height: 400%;
  }
  .l
  {
    padding-left: 5px;
  }
  .l:hover
  {
    background-color: #ed6c05 ;
    border-radius:5px;
  }
  .l:hover a.menulists
  {
    color: white;
  }
  .lmis
  {
    width:40px;
  }
  
</style>
<br><br><br><br><br><br>
  
  <div class="container-fluid"> 
    <div class="row">
      
    <div class="col-md-3 hidden-sm hidden-xs">
         <div class="well" style="box-shadow: none;">
          <ul class="hdlist">
            <li class="l"><a href="{{ url('register') }}" class="menulists"><span><img src="{{ $user_assets }}/create_account_b.png" alt="" class="lmis"></span> Create Account</a></li>

            <li class="l active"><a href="{{ url('about-us') }}" class="menulists"><span><img src="{{ $user_assets }}/about_us_b.png" alt="" class="lmis"></span> About Us</a></li>
            
            <li class="l"><a href="{{ url('advance-search') }}" class="menulists"><span><img src="{{ $user_assets }}/find_match_b.png" alt="" class="lmis"></span> Find Match</a></li>
            
            <li class="l"><a href="{{ url('our-police') }}" class="menulists"><span><img src="{{ $user_assets }}/our_policy_b.png" alt="" class="lmis"></span> Our Policy</a></li>
            
            <li class="l"><a href="{{ url('policy-privacy') }}" class="menulists"><span><img src="{{ $user_assets }}/privacy_b.png" alt="" class="lmis"></span> Privacy</a></li>
            
            <li class="l"><a href="{{ url('blog') }}" class="menulists"><span><img src="{{ $user_assets }}/blogs_b.png" alt="" class="lmis"></span> Blogs</a></li>
            
            <li class="l"><a href="{{ url('faqs') }}" class="menulists"><span><img src="{{ $user_assets }}/faqs_b.png" alt="" class="lmis"></span> FAQ's</a></li>
            
            <li class="l"><a href="{{ url('our-partnar') }}" class="menulists"><span><img src="{{ $user_assets }}/our_partners_b.png" alt="" class="lmis"></span> Our Partners</a></li>
            
            <li class="l"><a href="{{ url('contact-us') }}" class="menulists"><span><img src="{{ $user_assets }}/contact_us_b.png" alt="" class="lmis"></span> Contact</a></li>
          
          </ul>
        </div>
      </div>


      <div class="col-md-9">
        <div class="well" style="box-shadow: none;">
          <div class="about_text">
            <h1 class="bigheading">Sample text</h1>
            <p class="ptext">Sample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample textSample text
          </div> 
        </div>
      </div>

      
    </div>
  </div>

<br><br>
<!-- Wraper end -->
@endsection

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
<link rel="stylesheet" href="{{ asset('public') }}/css/chosen.css" />

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
<script type="text/javascript" src="{{ asset('public') }}/js/chosen.jq.js"></script>
@endpush