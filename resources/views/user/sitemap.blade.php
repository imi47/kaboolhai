@extends('user/user_master_layout1') 
@section('data') 

<style>

@media (max-width:380px) {
  .col-md-3.col-xs-6 {
    width:100%;
    margin:auto;
    font-size:1.3rem;
    line-height:1.9rem;
  }
}

</style>
   
<div style="padding-top: 90px;"></div>
  
  <div class="container"> 
       
  <h1>Kaboolhai Sitemap</h1>
  <div style="padding-top: 40px;"></div>

        <div class="row">
           <div class="col-md-3 col-xs-6 ">
            <ul>
              <h2>User Listing</h2>
              <li><a href="{{ url('user-search') }}">User listing</a></li>
              <li><a href="{{ url('single') }}">Single listing</a></li>
              <li><a href="{{ url('widow') }}">Widow listing</a></li>
              <li><a href="{{ url('divorcee') }}">Divorcee listing</a></li>
              <li><a href="{{ url('annulled') }}">Annulled lissting</a></li>
              <li><a href="{{ url('polygamy') }}">Polygamy listing</a></li>
              <li><a href="{{ url('separated') }}">Seprated listing</a></li>
              <li><a href="{{ url('blocked-list') }}">Block listing</a></li>
              
              <li><a href="{{ url('friend-list') }}">Friend listing</a></li>
              <li><a href="{{ url('find-exact-match') }}">Find exact match</a></li>
              <li><a href="{{ url('who-looking-for-me') }}">Who looking for me</a></li>
              <li><a href="{{ url('who-am-i-looking') }}">Who am i looking</a></li>
              <li><a href="{{ url('favourite-list') }}">Favourite listing</a></li>
              <li><a href="{{ url('photo-permission-list') }}">Photo permission listing</a></li>
              <li><a href="{{ url('hide-profile-list') }}">Hide listing</a></li>
               <li><a href="{{ url('invite-view-profile-list') }}">Invite view profile listing</a></li>

            </ul>
          </div>
          <div class="col-md-3 col-xs-6">
            <ul>
        <h2>Dashboard</h2>
              <li><a href="{{ url('dashboard') }}">Dashboard</a></li>
              <li><a href="{{ url('statistics') }}">Profile statistics</a></li>
              <li><a href="{{ url('trust-badges') }}">Trust badge</a></li>
              <li><a href="{{ url('membership') }}">Membership</a></li>
              <li><a href="#">Packages</a></li>
              <li><a href="{{ url('manage-profile') }}">Manage profile</a></li>
              @if(!empty(Session::get('user_id')))
              <li><a href="{{ url('public-profile',Session::get('user_id')) }}">View my profile</a></li>
              @else
              <li><a onclick="return false;" href="{{ url('public-profile',Session::get('user_id')) }}">View my profile</a></li>
              @endif

              @if(!empty(Session::get('user_id')))
              <li><a href="{{ url('deactive-user',Session::get('user_id')) }}">Deactive profile</a></li>
              @else
              <li><a onclick="return false;" href="{{ url('deactive-user',Session::get('user_id')) }}">Deactive profile</a></li>
              @endif
         
              <li><a href="{{ url('blocked-list') }}">Block user</a></li>
              <li><a href="#">Latest update</a></li>
              <li><a href="{{ url('email-prefrences') }}">Email prefrences</a></li>
              <li><a href="{{ url('profile-writing-tips') }}">Profile writing tips</a></li>
              <li><a href="{{ url('question') }}">My question</a></li>
            
              <li><a href="{{ url('invite-friend') }}">Invite friend</a></li>
              
              <li><a href="{{ url('close-account') }}">close account</a></li>
              <li><a href="{{ url('my-photo') }}">My photo</a></li>
              </ul>
          </div>
          
          <div class="col-md-3 col-xs-6">
            <ul>
             <h2>Search</h2>
             <li><a href="#">Search page</a></li>
              <li><a href="javascript:;" data-toggle="modal" data-target="#basic_search">Basic Search</a></li>
              <li> <a href="javascript:;" data-toggle="modal" data-target="#advance_search">Advance Search</a></li>
              <li><a href="javascript:;" data-toggle="modal" data-target="#keyword_search">Keyword Search</a></li>
              <li><a href="javascript:;" data-toggle="modal" data-target="#job_search">occupational Search</a></li>
              <li> <a href="javascript:;" data-toggle="modal" data-target="#edu_search">Educational</a></li>
              <li> <a href="javascript:;" data-toggle="modal" data-target="#id_search">ID Search</a></li>
               <li><a href="{{ url('pakistani') }}">Pakistan Muslim</a></li>
                <li><a href="{{ url('india') }}">India Muslim</a></li>
                 <li><a href="{{ url('bangladesh') }}">Bangladesh Muslim</a></li>
                  <li><a href="{{ url('sunni-muslim') }}">Sunni Muslim </a></li>
                   <li><a href="{{ url('salafi-muslam') }}">Salafi Muslim</a></li>
            </ul>
          </div>
          <div class="col-md-3 col-xs-6">
            <ul>
        <h2>Genrel</h2>
              <li><a href="{{ url('/') }}">Home</a></li>
              <li><a href="{{ url('about-us') }}">About US</a></li>
              <li><a href="{{ url('contact-us') }}">Contact Us</a></li>
              <li><a href="{{ url('faqs') }}">Faq,s</a></li>
              <li><a href="{{ url('advance-search') }}">Find Match</a></li>
              <li><a href="http://kaboolhai.com/blog/" target="_blank"">Blogs</a></li>
              <li><a href="#">Our Partner</a></li>
              <li><a href="{{ url('policy-privacy') }}">Privacy</a></li>
              <li><a href="{{ url('our-partnar') }}">Our Policy</a></li>
              <li><a href="{{ url('term-condation') }}">Term & Conditation</a></li>
            </ul>
          </div>
          </div>
          <hr>
          <div class="col-md-3 col-xs-6 ">
            <ul>
              <h2>Settings</h2>
              <li><a href="{{ url('settings') }}">Change password</a></li>
              <li><a href="{{ url('settings') }}">Genral information</a></li>
              <li><a href="{{ url('settings') }}">Change Photo</a></li>
              <li><a href="{{ url('settings') }}">Favourite list setting</a></li>
             <li><a href="{{ url('settings') }}">Block list setting</a></li>
              <li><a href="{{ url('settings') }}">Ask photo list setting</a></li>
                <li><a href="{{ url('settings') }}">Friend list setting</a></li>             
            </ul>
          </div>
          <div class="col-md-3 col-xs-6 ">
            <ul>
              <h2>User</h2>
              <li><a href="{{ url('login') }}">Login</a></li>
              <li><a href="{{ url('register') }}">Signup</a></li>
              <li><a href="{{ url('forgot') }}">forgot password</a></li>
              <li><a href="{{ url('logout') }}">Logout</a></li>
             
            </ul>
          </div>

          <div class="col-md-3 col-xs-6 ">
            <ul>
              <h2>Chat</h2>
              <li><a href="{{ url('inbox') }}">Inbox</a></li>
              <li><a href="{{ url('sent-items') }}">Sent item</a></li>
              <li><a href="{{ url('notification') }}">Notification</a></li>
              {{-- <li><a href="#">Logout</a></li> --}}
             
            </ul>
          </div>
        </div>
     
     </div>
 <div style="padding-bottom: 20px;"></div>
<!-- /container -->
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

@endpush