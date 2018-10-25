@extends('user/user_master_layout1') 
@section('data')

<style>
   .bigheading
  {
    font-size: 46px;
    color: darkorange;
    text-align: center;
    padding-bottom:20px;
    font-family: "Source Sans Pro", sans-serif;
  }
   .smallhead
  {
    font-size: 25px;
    color: #000000;
     font-family: "Source Sans Pro", sans-serif;
  }
  .ptext
  {
    font-size: 16px;
    color: #000000;
    text-align:justify;
    font-family: "Source Sans Pro", sans-serif;
  }

   @media (min-width:768px) {
    .contact-info-container .smallhead {
      text-align:left;
      margin-left:45px;
    }
   }

   @media (max-width:991px) {
    .sticky-nav .navbar-nav > li > .dropdown-menu, .shrink-nav .dropdown.simple-dropdown .dropdown-menu {
      top:55px !important;
    }
  }

  @media (max-width:768px) {
    .contact-info-container {
      margin-top:40px;
    }

    .contact-info-container .smallhead {
      text-align:left;
    }

    .contact-info-container .smallhead + .row div {
      margin-left:-45px !important;
    }

    .sticky-nav .navbar-nav > li > .dropdown-menu, .shrink-nav .dropdown.simple-dropdown .dropdown-menu {
      top:47px !important;
    }
  }

  @media (max-width: 685px) {
    .sticky-nav .navbar-nav > li > .dropdown-menu, .shrink-nav .dropdown.simple-dropdown .dropdown-menu {
    top: 55px !important;
  }

  #username-dropdown-toggle .dropdown-menu {
    top: 47px !important;

  }
}

@media (max-width:500px) {
  .bigheading {
    font-size:8vw;
  }
}
</style> 

<div style="padding-top: 90px;"></div>
    <div class="container-fluid">
      <div class="well">
        <div class="row">
          <div class="col-md-12">
            <h1 class="bigheading">Contact</h1>
          </div>
        </div>
<br>
        <div class="row">
           @if(Session::has('error'))
                    <p class="alert alert-danger">{{ Session::get('error') }}</p>
                @endif
                @if(Session::has('success'))
                    <p class="alert alert-success">{{ Session::get('success') }}</p>
                @endif
          <div class="col-sm-2"></div>
          <form method="post" action="{{ url('customer-query') }}">
          <div class="col-sm-4">
            <label for="">First Name</label>
            <input type="text" name="fname" required="" class="form-control" placeholder="Enter First Name">

            <label for="">Last Name</label>
            <input type="text" name="lname" required="" class="form-control" placeholder="Enter Last Name">
            {{ csrf_field() }}

            <label for="">Email</label>
            <input type="email" name="email" required="" class="form-control" placeholder="Enter Email">
             <label for="">Phone</label>
            <input type="text" name="phone" required="" class="form-control" placeholder="Enter Phone Number">

            <label for="">Text Message</label>
            <textarea name="message" id="" cols="30" rows="10" required=""></textarea>

            <button type="submit" class="btn btn-lg btn-success ">Submit</button>  
          </div>
</form>
          <div class="col-sm-6 contact-info-container">
            <h3 class="smallhead text-center"><u>Contact Us</u></h3>
            <div class="row">
              <div style="padding-left: 65px;margin-top: 45px;">
                <label for="" style="font-size:22px;"><strong><u>Address:</u></strong></label>
                <p class="ptext">123 ABC Street Lahore, Punjab 12345 Pakistan</p>
              </div>

              <div style="padding-left: 65px; margin-top: 35px;">
                <label for="" style="font-size:22px;"><strong><u>Phone:</u></strong></label>
                <p class="ptext">+901245678963</p>
                <p class="ptext">+901245678963</p>
              </div>

              <div style="padding-left: 65px; margin-top: 35px;">
                <label for="" style="font-size:22px;"><strong><u>Email:</u></strong></label>
                <p class="ptext">Admin@gmail.com</p>
                <p class="ptext">contact@gmail.com</p>
              </div>
            </div>
          </div>
        </div>        
      </div>
    </div>

   
 </div>

<!-- Wraper end -->
@endsection

@push('css')
<link rel="shortcut icon" href="{{ $user_assets }}/images/favicon.png">
    <link rel="stylesheet" href="{{ $user_assets }}/css/animate.css" />
<!-- bootstrap -->
<link rel="stylesheet" href="{{ $user_assets }}/css/chat.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
  
  {{-- <script type="text/javascript" src="{{ $user_assets }}/js/jquery-2.1.1.min.js"></script> --}}
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