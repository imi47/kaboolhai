<style>
.hdlist {
    line-height:400%;
  }

.menulists {
  font-size: 16px;
}

.searchcontainer button {
    padding: 12px 14px !important;
    margin-top: -53px !important;
    margin-right: 0px !important;
}

.searchcontainer input[type='text'] {
  height: 41px !important;
}


@media (max-width: 320px) {
  .searchcontainer button {
    margin-top: -41px !important;
    }
}
</style>

@extends('user/user_master_layout1') 
@section('data') 
<style>
  .navbar-form button {
    padding: 6px 11px !important;
  }

  .navbar-form button .glyphicon {
      top: 2px;
  }

  @media (max-width: 991px) {
    .navbar-nav .dropdown .dropdown-toggle {
      padding-top: 15px !important;
      padding-bottom: 15px !important;
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
      	 <div class="panel panel-default">
    <div class="panel-heading text-center"><h3>What Are The Payment Options available ? </h3></div>
     </div>
<div class="col-md-6"><p>Kaboolhai gives you several options for making payment. You can pay online using your Credit/Debit Card or by PayPal. For your comfort and peace of mind there are some alternative payment methods such as Bank Transfer, Cheque or Postal Order. Certain countries have localized payment methods available*.</p><h2>Paying by Credit Card / PayPal</h2>
<p>
From the payment screen you can select 'Buy now' to pay by credit card via PayPal.

You can also use PayPal without a credit card if you already have a PayPal account.
</p>
<h2>Paying by Cheque</h2>
<p>
Please see the Account Upgrade screen to select a desired package and see the cost, and then make a cheque payable to "TSQ Media" for the specified amount. Please remember to quote your user name, email address and any voucher code you have used on the back, and then send it to:</p></div>
<div class="col-md-6"><p><img src="{{ $user_assets }}/kabool_hai_icons/pm-payment-logos-compressor2.png" alt="Kaboolhai Payment Logos" style="height:auto; max-width:100%; margin:0; padding:0;" /></p><p>*Please note that localized payment methods are only available in certain countries.</p></div></div></div></div>
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
<script type="text/javascript" src="{{ asset('public') }}/js/chosen.jq.js"></script>
@endpush