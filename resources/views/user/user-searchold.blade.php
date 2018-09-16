@extends('user/user_master_layout1') 
@section('data') 
<div style="padding-top:86px;"></div>

  <link rel="stylesheet" href="{{ $user_assets }}/jquery.min2.js">
  <link rel="stylesheet" href="{{ $user_assets }}/css/owl.carousel2.css" />
   <link rel="stylesheet" href="{{ $user_assets }}/css/advance-profile.css" />

   <style type="text/css">
   .li-image img{

     border-radius: 50%; width: 80px; height: 80px;
   }
   .maindiv
   {
    border:1px ridge;
   }
   .age
   {
        background-color: #f47e2a;
    /* margin-top: -20px; */
    position: absolute;
    /* z-index: 999; */
    bottom: 1px;
    left: 12px;
    height: 24px;
    width: 74px;
    border-radius: 7px;
   }
   </style>
<div class="container-fluid" style="margin-top: 50px;">
  
  <div class="row">
    <div class="scroll">
  <div class="wrapper cf">
   
     {{--  </div>
    </div>
  </div> --}}

    <div class="col-md-9">
    <div class="well" style="background-color: #ffffff;border-radius:10px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
     

     
{{-- <div id="profile"> --}}
   <div class="row"> 
   
        <div class="col-xs-6 maindiv text-center">
          <div class="row">
            <div class="col-md-3 li-image">
              
         <img  style="" src="{{ $user_assets }}/sunrise.jpg" class="img-thumbnail">
         <h5 class="age">Age:29</h5> 
            </div>
            <div class="col-md-6">
              <span class="user">
                Haider
              </span>
               <span class="country">
                Pakistan
              </span>
               <span class="city">
                Lahore
              </span>
                
            </div>
         </div>
        </div>
        <div class="col-xs-6" >
         <img src="{{ $user_assets }}/sunrise.jpg" class="img-thumbnail"> 
        </div>
      </div>
              <div class="row"> 
   
        <div class="col-xs-6" >
         <img src="{{ $user_assets }}/sunrise.jpg" class="img-thumbnail"> 
        </div>
        <div class="col-xs-6" >
         <img src="{{ $user_assets }}/sunrise.jpg" class="img-thumbnail"> 
        </div>
      </div>      
      <div class="row"> 
   
        <div class="col-xs-6" >
         <img src="{{ $user_assets }}/sunrise.jpg" class="img-thumbnail"> 
        </div>
        <div class="col-xs-6" >
         <img src="{{ $user_assets }}/sunrise.jpg" class="img-thumbnail"> 
        </div>
      </div>
              <div class="row"> 
   
        <div class="col-xs-6" >
         <img src="{{ $user_assets }}/sunrise.jpg" class="img-thumbnail"> 
        </div>
        <div class="col-xs-6" >
         <img src="{{ $user_assets }}/sunrise.jpg" class="img-thumbnail"> 
        </div>
      </div>      
    
                 <div class="row"> 
   
        <div class="col-xs-6" >
         <img src="{{ $user_assets }}/sunrise.jpg" class="img-thumbnail"> 
        </div>
        <div class="col-xs-6" >
         <img src="{{ $user_assets }}/sunrise.jpg" class="img-thumbnail"> 
        </div>
      </div>      
    

     </div>
 </div>
{{-- </div>
</div> --}}
 <div class="col-md-3 content">

    <div class="well w" style="background-color:#ffffff;border-radius:10px;">
      <div class="row">
        <h2 class="qsh">Quick Search</h2>
        <div class="col-sm-12">
          <select name="" id="" class="form-control qs">
            <option value="">sad</option>
            <option value="">sad</option>
            <option value="">sad</option>
          </select>
        </div>
        <div class="col-sm-6">
          <select name="" id="" class="form-control qs">
            <option value="">age</option>
          </select>
        </div>
        <div class="col-sm-6">
          <select name="" id="" class="form-control qs">
            <option value="">age</option>
          </select>
        </div>
        <div class="col-sm-12">
          <button class="bn">Search Now</button>
        </div>
      </div>
    </div>
          <div class="well w" style="background-color:#ffffff;border-radius:10px;">
      <div class="row">
        <div class="col-sm-12">
         <a href="{{ url('register') }}" class="menulists"><span><img src="{{ $user_assets }}/create_account_b.png" alt="" class="lmis"></span> Create Account</a> 
        </div>
        <div class="col-sm-12">
          <a href="{{ url('about-us') }}" class="menulists"><span><img src="{{ $user_assets }}/about_us_b.png" alt="" class="lmis"></span> About Us</a>
        </div>
        <div class="col-sm-12">

           <a href="{{ url('advance-search') }}" class="menulists"><span><img src="{{ $user_assets }}/find_match_b.png" alt="" class="lmis"></span> Find Match</a>
      
        </div>

         <div class="col-sm-12">
           <a href="" class="menulists"><span><img src="{{ $user_assets }}/our_policy_b.png" alt="" class="lmis"></span> Our Policy</a>
        
        </div>
        <div class="col-sm-12">
           <a href="{{ url('policy-privacy') }}" class="menulists"><span><img src="{{ $user_assets }}/privacy_b.png" alt="" class="lmis"></span> Privacy</a>
         
        </div>
        <div class="col-sm-12">
         <a href="" class="menulists"><span><img src="{{ $user_assets }}/blogs_b.png" alt="" class="lmis"></span> Blogs</a>
        </div>


         <div class="col-sm-12">
           <a href="{{ url('faqs') }}" class="menulists"><span><img src="{{ $user_assets }}/faqs_b.png" alt="" class="lmis"></span> FAQ's</a>
        
        </div>
        <div class="col-sm-12">
          <a href="" class="menulists"><span><img src="{{ $user_assets }}/our_partners_b.png" alt="" class="lmis"></span> Our Partners</a>
         
        </div>
        <div class="col-sm-12">
         <a href="{{ url('contact-us') }}" class="menulists"><span><img src="{{ $user_assets }}/contact_us_b.png" alt="" class="lmis"></span> Contact</a>
        </div>
      </div>
    </div>

   

    <div class="well w sidebar" id="" style="background-color:#f47e2a; border-radius:10px;">
      <div style="padding-bottom:0px;">
        <div class="row">
        <h4 class="qsh">Recently Joined</h4>
        </div>
        <div class="row">
          <img src="{{ $user_assets }}/sunrise.jpg" class="img-thumbnail">  
        </div>  
        <div class="row">
          
            <h4 class="qsun">Haider Ali</h4>
            <p class="tqsunn">It is pleasure for me that i am the member of Kaboolhai .... <a href="" style="color:blue;font-weight:bold;">View Profile</a></p>
          
        </div>
      </div>
    </div>
  
</div>
</div>
</div>
</div>
</div>


@endsection

@push('css')
 <script type="text/javascript" src="{{ $user_assets }}/js/owl.carousel3.js"></script>
    <script>
  $(document).ready(function($) {
    $("#owl-example").owlCarousel();
  });</script>
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

