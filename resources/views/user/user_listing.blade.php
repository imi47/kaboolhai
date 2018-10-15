@extends('user/user_master_layout1') 
@section('data') 
<style type="text/css">
  .greenpartnercolor{
    color: green;
  }

  .fa-google-plus-square, .fa-linkedin-square {
  font-size:3.2em;
}

 .top-searches-by div > a, tr.tpsrch th a, tr.dosrch th a {
      font-size:12px;
 }

  .headin-color{
    background-color: #ccc;
    padding: 5px;
  }

  @media (max-width: 991px) {
    .sticky-nav .navbar-nav > li > .dropdown-menu {
      top:55px !important;
  }
}

@media (max-width: 768px) {
    .sticky-nav .navbar-nav > li > .dropdown-menu {
      top:48px !important;
  }

}

@media (max-width: 685px) {
  .sticky-nav .navbar-nav > li > .dropdown-menu, .shrink-nav .dropdown.simple-dropdown .dropdown-menu {
    top: 55px !important;
  }

  #username-dropdown-toggle .dropdown-menu {
    top: 47px !important;
  }

  tr.dosrch th a {
    font-size:12px;
  }
}
</style>
<div style="padding-top: 90px;"></div>
  
  <div class="container-fluid"> 
    <div class="row">
       @if(Session::has('error'))
                    <p class="alert alert-danger">{{ Session::get('error') }}</p>
                @endif
                @if(Session::has('success'))
                    <p class="alert alert-success">{{ Session::get('success') }}</p>
                @endif
    <div class="col-md-3 hidden-sm hidden-xs">
         <div class="well" style="box-shadow: none;">
          @include('user/side_bar')
        </div>
      </div>
     

      <div class="col-md-9">
        <div class="panel panel-default">
    <div class="panel-heading text-center"><h3>{{ $title }}</h3></div>
    <br>
    <div class="panel-body">
      @if(count($user_data))
     @foreach($user_data as $row)
      <div class="row">
          <a title="view profile" href="{{ url('public-profile',$row->id) }}">
        <div class="col-md-2">
                @if(!empty($row->image_name))
                <img style="width: 100px; height: 100px;" class="img-thumbnail  pull-right" src="{{ $user_assets }}/profile_image/{{ $row->image_name }}">
                @else
                <img src="{{ $user_assets }}/sunrise.jpg"  style="width: 100px; height: 100px;" class="img-thumbnail  pull-right">
              @endif
        </div>
        <div class="col-md-8">
          <h3>{{ $row->user_name }}</h3>
        </a>
          <span>{{ $row->country_name }}</span>
           <span>{{ $row->city_name }}</span><br>
           </span>{{ $row->job }}<span><br>
          <span>{{ $row->description }}</span>
        </div>
        @if($title=='Recent join')
        <div class="col-md-2">
          <a href="{{ url('public-profile',$row->id) }}"  class="btn btn-block">View Profile</a>
        </div>
        @else
        <div class="col-md-2">
          <a href="{{ url('remove-user',[$row->id,$title]) }}" onclick="return confirm('Are you sure you want to remove this user?');" class="btn btn-block">Remove</a>
        </div> 
        @endif
      </div>
      <hr>
      @endforeach
        @else
        <p class="alert alert-danger text-center">Empty</p>
      @endif
       {{ $user_data->links() }}
      
          </div>
      </div>
  </div>
           
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
<script type="">
  function edit_note()
  {

  }
</script>
@endpush