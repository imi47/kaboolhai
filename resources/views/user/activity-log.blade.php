@extends('user/user_master_layout1') 
@section('data')

<style>

  .nav.navbar-nav {
	margin-right:0;
	}
 	#logo-div {
		margin-right: -61px;
  }

  .hdlist {
    line-height: 400%;
  }

  .col-md-3.hidden-sm.hidden-xs .well a {
    font-size:16px;
  }

  .l {
    padding-left:5px;
  }
  
  .hdlist li {
    border-radius: 5px;
  }

  .hdlist li:hover {
    background-color: #ed6c05;
  }

   .pagination a, .pagination span {
    margin: 0 10px;
    border-radius: 99px !important;
    font-weight:600;
    color:#5a378c !important;
    background:#eee !important;
  }
    .pagination a:hover, .pagination span:hover {
     background:#FFD4B1 !important;
     border:1px solid #FFD4B1 !important;
   }
 .pagination li:not(.active) span {
  color:#ed6c05;
}
   .pagination .active span{
    background-color:#ed6c05 !important;
    border-color: #ed6c05;
    color:#fff !important;
  }
   .pagination .active:hover span {
    background-color:#ed6c05;
    border-color: #ed6c05;
  }

  
  @media (max-width:768px) {
    .al-main ul.al-log li {
    }

    .al-main ul.al-log li em {
      display:block;
      float:none !important;
    }
  }

  @media (max-width:500px) {
    .al-main ul.al-log li,  .al-main ul.al-log li em {
      font-size:3.3vw;
    }
  }

  .searchcontainer button {
    margin-top:-56px;
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
  
  {{-- <div class="jumbotron jumbotron-fluid" style="background-image: url({{ $user_assets }}/banner1.jpg);background-size: 100% 100%; padding:89px; background-repeat: no-repeat;">
    
  </div> --}}
{{-- 
<div class="row">
  <div class="col-md-3">
    <div class="well" style="background-color: #40395b;border-color:#ea670f;">
        <div class="row">
          <div class="col-sm-2"></div>
          <a href="#">
          <div class="col-sm-7">
              <img src="{{ $user_assets }}/sunrise.jpg" width="175" height="175" class="user_img">           
              <p class="text-center user_name_db" style="margin-top:5px;"> kashif</p>  
          </div> 
          </a>
          <div class="col-sm-3"></div>
      </div>
      <hr>

      <div class="row">
          <ul class="side_nav">
            <li class="side_menu" style="padding:6px;"><a href="" class="r hvr-grow">Home</a></li>
            <li class="side_menu" style="padding:6px;"><a href="" class="r hvr-grow">About Us</a></li>
            <li class="side_menu" style="padding:6px;"><a href="" class="r hvr-grow">Find Match</a></li>
            <li class="side_menu" style="padding:6px;"><a href="" class="r hvr-grow">Our Policy</a></li>
            <li class="side_menu" style="padding:6px;"><a href="" class="r hvr-grow">Privacy</a></li>
            <li class="side_menu" style="padding:6px;"><a href="" class="r hvr-grow">FAQ's</a></li>
            <li class="side_menu" style="padding:6px;"><a href="" class="r hvr-grow">Our Partners</a></li>
            <li class="side_menu" style="padding:6px;"><a href="" class="r hvr-grow">Contact</a></li>      
          </ul> 
      </div>
    </div>
  </div> --}}
  <div class="col-md-9">
    
    <div class="row">
      
     
        <div class="col-md-12">
            <div class="al-main">
                <h3>Activity Log</h3>
                {{-- <h2 class="al-month text-center">May 2018</h2>
                <h4 class="al-date">29 May</h4> --}}
                <ul class="al-log">
                  @if(!empty($activity_log))
                  @foreach($activity_log as $row)
                    <li>You {{ $row->activity}} <a href="{{ url('public-profile',$row->activity_user_id) }}">{{$row->otheruser->user_name}}</a>  .<em class="pull-right">{{ $row->created_at }}</em></li>
                  @endforeach
                  @endif

                  @if(!empty($activity))
                  @foreach($activity as $row)
                    <li><a href="{{ url('public-profile',$row->user_id) }}">{{$row->activeuser->user_name}} </a>{{ $row->activity}}   .<em class="pull-right">{{ $row->created_at }}</em></li>
                  @endforeach
                  @endif
                  {{ $activity->links() }}
                  </ul>
                  {{-- <ul>
                    <li><a href="">Kashif Latif</a> has approved your friend request.<em class="pull-right">10:30 AM</em></li>
                    <li><a href="">Kashif Latif</a> has approved your friend request.<em class="pull-right">10:30 AM</em></li>
                    <li><a href="">Kashif Latif</a> has approved your friend request.<em class="pull-right">10:30 AM</em></li>
                    <li><a href="">Kashif Latif</a> has approved your friend request.<em class="pull-right">10:30 AM</em></li>
                    <li><a href="">Kashif Latif</a> has approved your friend request.<em class="pull-right">10:30 AM</em></li>
                    <li><a href="">Kashif Latif</a> has approved your friend request.<em class="pull-right">10:30 AM</em></li>
                    <li><a href="">Kashif Latif</a> has approved your friend request.<em class="pull-right">10:30 AM</em></li>
                    <li><a href="">Kashif Latif</a> has approved your friend request.<em class="pull-right">10:30 AM</em></li>
                    <li><a href="">Kashif Latif</a> has approved your friend request.<em class="pull-right">10:30 AM</em></li>
                </ul>
                <h4 class="al-date">28 May</h4>
                <ul class="al-log">
                    <li><a href="">Kashif Latif</a> has approved your friend request.<em class="pull-right">10:30 AM</em></li>
                    <li><a href="">Kashif Latif</a> has approved your friend request.<em class="pull-right">10:30 AM</em></li>
                    <li><a href="">Kashif Latif</a> has approved your friend request.<em class="pull-right">10:30 AM</em></li>
                    <li><a href="">Kashif Latif</a> has approved your friend request.<em class="pull-right">10:30 AM</em></li>
                    <li><a href="">Kashif Latif</a> has approved your friend request.<em class="pull-right">10:30 AM</em></li>
                    <li><a href="">Kashif Latif</a> has approved your friend request.<em class="pull-right">10:30 AM</em></li>
                    <li><a href="">Kashif Latif</a> has approved your friend request.<em class="pull-right">10:30 AM</em></li>
                    <li><a href="">Kashif Latif</a> has approved your friend request.<em class="pull-right">10:30 AM</em></li>
                    <li><a href="">Kashif Latif</a> has approved your friend request.<em class="pull-right">10:30 AM</em></li>
                    <li><a href="">Kashif Latif</a> has approved your friend request.<em class="pull-right">10:30 AM</em></li>
                </ul>
                <div>&nbsp;</div>
                <h2 class="al-month text-center">April 2018</h2>
                <h4 class="al-date">15 April</h4>
                <ul class="al-log">
                    <li><a href="">Kashif Latif</a> has approved your friend request.<em class="pull-right">10:30 AM</em></li>
                    <li><a href="">Kashif Latif</a> has approved your friend request.<em class="pull-right">10:30 AM</em></li>
                    <li><a href="">Kashif Latif</a> has approved your friend request.<em class="pull-right">10:30 AM</em></li>
                    <li><a href="">Kashif Latif</a> has approved your friend request.<em class="pull-right">10:30 AM</em></li>
                    <li><a href="">Kashif Latif</a> has approved your friend request.<em class="pull-right">10:30 AM</em></li>
                    <li><a href="">Kashif Latif</a> has approved your friend request.<em class="pull-right">10:30 AM</em></li>
                    <li><a href="">Kashif Latif</a> has approved your friend request.<em class="pull-right">10:30 AM</em></li>
                    <li><a href="">Kashif Latif</a> has approved your friend request.<em class="pull-right">10:30 AM</em></li>
                    <li><a href="">Kashif Latif</a> has approved your friend request.<em class="pull-right">10:30 AM</em></li>
                    <li><a href="">Kashif Latif</a> has approved your friend request.<em class="pull-right">10:30 AM</em></li>
                </ul>
                <h4 class="al-date">12 April</h4>
                <ul class="al-log">
                    <li><a href="">Kashif Latif</a> has approved your friend request.<em class="pull-right">10:30 AM</em></li>
                    <li><a href="">Kashif Latif</a> has approved your friend request.<em class="pull-right">10:30 AM</em></li>
                    <li><a href="">Kashif Latif</a> has approved your friend request.<em class="pull-right">10:30 AM</em></li>
                    <li><a href="">Kashif Latif</a> has approved your friend request.<em class="pull-right">10:30 AM</em></li>
                    <li><a href="">Kashif Latif</a> has approved your friend request.<em class="pull-right">10:30 AM</em></li>
                    <li><a href="">Kashif Latif</a> has approved your friend request.<em class="pull-right">10:30 AM</em></li>
                    <li><a href="">Kashif Latif</a> has approved your friend request.<em class="pull-right">10:30 AM</em></li>
                    <li><a href="">Kashif Latif</a> has approved your friend request.<em class="pull-right">10:30 AM</em></li>
                    <li><a href="">Kashif Latif</a> has approved your friend request.<em class="pull-right">10:30 AM</em></li>
                    <li><a href="">Kashif Latif</a> has approved your friend request.<em class="pull-right">10:30 AM</em></li>
                </ul> --}}
            </div>
        </div>  
      
    </div>
  </div>
  
</div>
</div>

<br><br> 


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
<link rel="stylesheet" href="{{ $user_assets }}/css/style3.css" />
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