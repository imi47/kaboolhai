@extends('user/master_layout') 
@section('data')

  <style>
  /* html, body {
    width:100vw;
    overflow-x:hidden;
  } */
  .clearfix:after {
   content: " "; /* Older browser do not support empty content */
   visibility: hidden;
   display: block;
   height: 0;
   clear: both;
  }

  .navbar-default {
    border:none;
  }

  .col-md-3 .well {
      border:none !important;
      margin-left: 25px;
  }

  @media (min-width:992px) {
    .box-reduce-margin-top {
      margin-top:-54px;
    }
  }

  @media (max-width:991px) {
    .box-reduce-margin-top {
      margin-top:-50px;
    }
  }

  @media (max-width:768px) {
    .box-reduce-margin-top {
      margin-top:-100px;
    }

    @media (max-width:500px) {
      .jumbotron.jumbotron-fluid {
      display:none;
    }

    .well {
      margin-top:90px;
    }
  }

    .hvr-grow {
      margin-bottom: 45px !important;
    }
  }

  .main-section {
    width:420px;
  }

  .main-section .arrow_button {
    margin-left:-21px;
  }

  .emojiPicker {
    left: 19px !important;
  }

  .emojiPickerIcon.black {
    height: 37px !important;
    width: 37px !important;
    top: 6px !important;
  }

  .form-control {
    width: 200px !important;
  }

  .paymg img {
    width:100%;
  }

  #navsidebare {
    opacity:0.9;
    background-color:#000;
  }

  
  @media (min-width:1350px) {
    .nav.navbar-nav.navbar-right {
      margin-right:0;
    }
  }

  @media (max-width:991px) {
    footer .search-container .form-control {
      width:100% !important;
    }

    .well {
      margin-left:0 !important;
    }
  }
.social_icon {
  text-align:center;
}
@media (max-width:991px) and (min-width:768px) {
    .profile_stat.hvr-grow a img {
      width:180px !important;
      height:180px !important;
    }
  }
@media (max-width:1199px) and (min-width:991px) {
    .profile_stat.hvr-grow a img {
      width:280px !important;
      height:280px !important;
      margin-top:70px;
    }
  }
  @media (max-width: 768px) {
    #myNavbar {
      position: absolute !important;
      right: 0;
      top: 5px;
    }
    .profile_stat.hvr-grow a img {
      width:43vw !important;
      height:43vw !important;
      /* margin-left:10.1vw; */
      margin-left:1.2vw;
    }

    .navbar-nav .open .dropdown-menu {
      top:47px !important;
    }

    #username-dropdown-toggle ul.dropdown-menu {
      top:52px !important;
    }
}

@media (max-width:767px) {
  #username-dropdown-toggle ul.dropdown-menu {
      top:45px !important;
    }
}
    .hvr-grow {
      margin-bottom:25px;
    }
  @media (min-width: 1350px) {
    #myNavbar {
        position: unset !important;
    }
}
@media (max-width:399px) {
  .social_icon {
    margin-left:20px !important;
  }
   .social_icon img {
    margin-right:20px !important;
  }
}
@media (max-width:332px) {
  .social_icon img {
    margin-right:15px !important;
  }
}
@media (min-width: 300px) {
.navbar-collapse.collapse {
    display: block!important;
    height: auto!important;
    padding-bottom: 0;
    overflow: visible!important;
  }
}
@media (min-width: 300px) {
  .navbar-collapse {
    width: auto !important;
    border-top: 0 !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
  }
   .nav.navbar-nav.navbar-right li.dropdown{
   float:left !important;
    margin:0 !important;
  }
  
}

body, html {
  overflow-x:hidden;
}

footer .searchcontainer {
  margin-right:8px;
}

 footer .form-control {
    width:100% !important;
  }
  </style>
  
  <div class="col-md-9">
    
    <div class="row">
      <div class="col-xl-3 col-lg-3 col-md-5 col-sm-3 col-xs-6 col-xl-offset-0 col-lg-offset-0 col-md-offset-1 col-sm-offset-0">
        <div class="profile_stat hvr-grow">
          <a href="{{url('statistics')}}" target="__blank">
            <img src="{{ $user_assets }}/db_images/statistics.png" alt="" style="width:200px ;height: 200px;">
          </a>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-5 col-sm-3 col-xs-6 col-xl-offset-0 col-lg-offset-0 col-md-offset-1 col-sm-offset-0">
        <div class="profile_stat hvr-grow">
            <a href="{{ url('trust-badges') }}">
              <img src="{{ $user_assets }}/db_images/Trust-Badge.png" alt="" style="width:200px ;height: 200px;">
            </a>
        </div>       
      </div>
      <div class="col-xl-3 col-lg-3 col-md-5 col-sm-3 col-xs-6 col-xl-offset-0 col-lg-offset-0 col-md-offset-1 col-sm-offset-0">
        <div class="profile_stat hvr-grow">
            <a href="{{ url('membership') }}">
              <img src="{{ $user_assets }}/db_images/Membership.png" alt="" style="width:200px ;height: 200px;">
            </a>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-5 col-sm-3 col-xs-6 col-xl-offset-0 col-lg-offset-0 col-md-offset-1 col-sm-offset-0">
        <div class="profile_stat hvr-grow">
            <a href="#">
              <img src="{{ $user_assets }}/db_images/payments.png" alt="" style="width:200px ;height: 200px;">
            </a>
        </div>
      </div>
    </div>

    <br><br><br><br>

    <div class="row box-reduce-margin-top">
      <div class="col-xl-3 col-lg-3 col-md-5 col-sm-3 col-xs-6 col-xl-offset-0 col-lg-offset-0 col-md-offset-1 col-sm-offset-0">
        <div class="profile_stat hvr-grow">
          <a href="#">
            <img src="{{ $user_assets }}/db_images/Packages.png" alt="" style="width:200px ;height: 200px;">
          </a>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-5 col-sm-3 col-xs-6 col-xl-offset-0 col-lg-offset-0 col-md-offset-1 col-sm-offset-0">
        <div class="profile_stat hvr-grow">
            <a href="{{ url('manage-profile') }}">
              <img src="{{ $user_assets }}/db_images/Manage-Profile.png" alt="" style="width:200px ;height: 200px;">
            </a>
        </div>       
      </div>
      <div class="col-xl-3 col-lg-3 col-md-5 col-sm-3 col-xs-6 col-xl-offset-0 col-lg-offset-0 col-md-offset-1 col-sm-offset-0">
        <div class="profile_stat hvr-grow">
            <a href="{{ url('public-profile',user_data()->id) }}">
              <img src="{{ $user_assets }}/db_images/View-My-Profile.png" alt="" style="width:200px ;height: 200px;">
            </a>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-5 col-sm-3 col-xs-6 col-xl-offset-0 col-lg-offset-0 col-md-offset-1 col-sm-offset-0">
        <div class="profile_stat hvr-grow">
            <a href="{{ url('deactive-user',user_data()->id) }}">
              <img src="{{ $user_assets }}/db_images/Deactivate-Profile.png" alt="" style="width:200px ;height: 200px;">
            </a>
        </div>
      </div>
    </div>

    <br><br><br><br>

    <div class="row box-reduce-margin-top">
      <div class="col-xl-3 col-lg-3 col-md-5 col-sm-3 col-xs-6 col-xl-offset-0 col-lg-offset-0 col-md-offset-1 col-sm-offset-0">
        <div class="profile_stat hvr-grow">
          <a href="{{ url('blocked-list') }}">
            <img src="{{ $user_assets }}/db_images/Block-User.png" alt="" style="width:200px ;height: 200px;">
          </a>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-5 col-sm-3 col-xs-6 col-xl-offset-0 col-lg-offset-0 col-md-offset-1 col-sm-offset-0">
        <div class="profile_stat hvr-grow">
            <a href="{{ url('my-photo') }}">
              <img src="{{ $user_assets }}/db_images/Photo-Upload.png" alt="" style="width:200px ;height: 200px;">
            </a>
        </div>       
      </div>
      <div class="col-xl-3 col-lg-3 col-md-5 col-sm-3 col-xs-6 col-xl-offset-0 col-lg-offset-0 col-md-offset-1 col-sm-offset-0">
        <div class="profile_stat hvr-grow">
            <a href="{{ url('latest-updates') }}">
              <img src="{{ $user_assets }}/db_images/Latest-Updates.png" alt="" style="width:200px ;height: 200px;">
            </a>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-5 col-sm-3 col-xs-6 col-xl-offset-0 col-lg-offset-0 col-md-offset-1 col-sm-offset-0">
        <div class="profile_stat hvr-grow">
            <a href="{{ url('email-prefrences') }}">
              <img src="{{ $user_assets }}/db_images/Email-Preferences.png" alt="" style="width:200px ;height: 200px;">
            </a>
        </div>
      </div>
    </div> 

    <br>

  

    <br>


     <div class="row social_icon">
      <div class="col-lg-3 col-sm-3">
      </div>
      <div class="col-lg-7 col-sm-8">
        <img src="{{ $user_assets }}/db_images/g+.png" alt="" width="27" height="27" class="distance  hvr-grow">

       <a href="https://www.facebook.com/Saykaboolhai/" target="__blank">
        <img src="{{ $user_assets }}/db_images/facebook.png" alt="" width="23" height="23" class="distance  hvr-grow">
      </a>

      <a href="https://twitter.com/kaboolhaitweet" target="__blank">
        <img src="{{ $user_assets }}/db_images/twitter.png" alt="" width="27" height="27" class="distance  hvr-grow">
        
      </a>
        <img src="{{ $user_assets }}/db_images/linkedin.png" alt="" width="27" height="27" class="distance  hvr-grow">
        <img src="{{ $user_assets }}/db_images/youtube.png" alt="" width="27" height="27" class="distance  hvr-grow">

<a href="https://www.instagram.com/kaboolhai/" target="__blank">
<img src="{{ $user_assets }}/db_images/instagram.png" alt="" width="27" height="27" class="distance  hvr-grow">
  
</a>
      </div>
      <div class="col-sm-1">
      </div>
    </div>

  </div>
  
</div>


</div>

 


<br><br>

@endsection

@push('css')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    {{-- <link rel="stylesheet" href="{{ $user_assets }}/jquery.min2.js"> --}}
    
  {{-- <link rel="stylesheet" href="{{ $user_assets }}/hover-min2.css"> --}}
  <link rel="stylesheet" href="{{ $user_assets }}/css/style3.css"/>
  {{-- <link rel="stylesheet" href="style.css"> --}}
  {{-- <link rel="stylesheet" href="{{ $user_assets }}/css/owl.carousel2.css" />  @endpush  --}}

@push('js')


@endpush      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
</body>

</html>
