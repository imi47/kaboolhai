@extends('user/user_master_layout1') 
@section('data') 
<style>
   .about_text
  {
     line-height: 200%;
     font-family: sans-serif;   
  }

  .panel-default {
    margin-bottom: 20px;
    background-color: #fff;
    border:none;
    box-shadow:none;
  }

  .panel h3:first-child {
    color:#ED6C05;
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

  @media (max-width:991px) {
      .nav-white.sticky-nav .navbar-nav li a:hover, .nav-white.sticky-nav .navbar-nav > .open > a {
        display:block;
      }

       .nav-white.sticky-nav .navbar-nav > .open > a {
        padding-right:14px;
      }

      .nav-white.sticky-nav .navbar-nav li a:hover, .nav-white.sticky-nav .navbar-nav li a:hover {
        padding-right:0;
      }

      #username-dropdown-toggle ul.dropdown-menu {
        text-align:left !important;
      }
  }

@media (max-width:400px) {
    .about_text .bigheading {
      font-size:12vw !important;
    }
  }
  
</style>
<div style="padding-top:90px;"></div>
  
  <div class="container-fluid"> 
    <div class="row">
      
    <div class="col-md-3 hidden-sm hidden-xs">
        <div class="well" style="box-shadow: none;">
          @include('user/side_bar')
        </div>
      </div>


      <div class="col-md-9">
        <!-- <div class="well" style="box-shadow: none;"> -->
          <!-- <div class="about_text">
            <h1 class="bigheading">About Us</h1>
            <p class="ptext">Kaboolhai is a match making website. You might find many matrimonial websites out there but most of them are unable to provide you with the right match within the Muslim community.  Another commonly used way of finding a life partner by families is through female match makers or the marriage bureaus who are sitting out there looting innocent people. Their sole purpose is to take money from helpless clients and at the end nothing fruitful comes up for the victims. These people charge high fees for introducing people with only one or two families and most of the time the families have nothing in common among them.</p>
            <p class="ptext">Kaboolhai.com is a matrimonial site of its kind. Our clients have access to unlimited profiles that are uploaded on the site. You can connect will people who match your interests and then carry on with further proceedings. We have no hidden dilemmas. Everything is crystal clear and easy to handle. Our services are available 24/7. Although our clients have easy access to different profiles, yet our team makes sure and investigates properly each and everything about the other party before opening the profile of the potential member. The detailed information about the potential member is only visible after our team is satisfied. The pictures of the members are hidden and can only be seen by the other members once they have approved by the owner. Your phone number or email address can also be seen by the other party only if you allow it. In case anyone uses vulgar or derogatory remarks in the messages, they are at once blocked by our team. So, our website is totally private and secure for all the members and it is our utmost priority that all your personal details are in perfect lock and key.</p> 
            <h3 class="smallhead">Our Aim and CEO’S message</h3><br>
            <p class="ptext">Our basic aim is to provide suitable proposals for you, your daughter/son or any family member in the vicinity of your homes. We make sure that we can save you from the marriage match maker aunties and provide proper and true information about the matches we have in store on our site. It is a special instruction to our female candidates to not give out their information to anyone or chat with the other members without the presence of their guardians. This act will not only keep you safe but your parents or guardians will also be a part of this and their blessings are there too. It is a request that all the members please keep in mind the sanctity of this precious bond that is marriage. We pray whole heartedly that everyone finds a perfect match from our matrimonial site and enjoy the most loving bond of marriage! Ameen!</p> 
          </div>  -->

           <div class="panel panel-default">
             <div>
               <h3>About Us</h3>
           </div>
     </div>
     <p>Kaboolhai is a match making website. You might find many matrimonial websites out there but most of them are unable to provide you with the right match within the Muslim community.  Another commonly used way of finding a life partner by families is through female match makers or the marriage bureaus who are sitting out there looting innocent people. Their sole purpose is to take money from helpless clients and at the end nothing fruitful comes up for the victims. These people charge high fees for introducing people with only one or two families and most of the time the families have nothing in common among them.</p>
     <p>Kaboolhai.com is a matrimonial site of its kind. Our clients have access to unlimited profiles that are uploaded on the site. You can connect will people who match your interests and then carry on with further proceedings. We have no hidden dilemmas. Everything is crystal clear and easy to handle. Our services are available 24/7. Although our clients have easy access to different profiles, yet our team makes sure and investigates properly each and everything about the other party before opening the profile of the potential member. The detailed information about the potential member is only visible after our team is satisfied. The pictures of the members are hidden and can only be seen by the other members once they have approved by the owner. Your phone number or email address can also be seen by the other party only if you allow it. In case anyone uses vulgar or derogatory remarks in the messages, they are at once blocked by our team. So, our website is totally private and secure for all the members and it is our utmost priority that all your personal details are in perfect lock and key.</p> 
            <h3>Our Aim and CEO’S message</h3><br>
            <p>Our basic aim is to provide suitable proposals for you, your daughter/son or any family member in the vicinity of your homes. We make sure that we can save you from the marriage match maker aunties and provide proper and true information about the matches we have in store on our site. It is a special instruction to our female candidates to not give out their information to anyone or chat with the other members without the presence of their guardians. This act will not only keep you safe but your parents or guardians will also be a part of this and their blessings are there too. It is a request that all the members please keep in mind the sanctity of this precious bond that is marriage. We pray whole heartedly that everyone finds a perfect match from our matrimonial site and enjoy the most loving bond of marriage! Ameen!</p> 

        <!-- </div> -->
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