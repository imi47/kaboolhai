<style>
.hdlist {
    line-height:400%;
  }

.menulists {
  font-size: 16px;
}

 	#logo-div {
		margin-right: -61px !important;
  }
  
  .nav.navbar-nav {
	    margin-right:0 !important;
	  }
 	  #logo-div {
		  margin-right: -61px !important;
	}

.ca-main {
    padding: 50px 20px !important;
}

.searchcontainer button {
    padding: 12px 14px !important;
    margin-top: -53px !important;
    margin-right: 0px !important;
}

.searchcontainer input[type='text'] {
  height: 41px !important;
}

@media (max-width:1360px) {
  .nav.navbar-nav {
	    margin-right:40px !important;
	  }
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
    top: 1px;
}

@media (max-width: 991px) {
  .navbar-nav .dropdown .dropdown-toggle {
    padding-top: 11px !important;
    padding-bottom: 11px !important;
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
      @if(Session::has('error'))
                    <p class="alert alert-danger">{{ Session::get('error') }}</p>
                @endif
                @if(Session::has('success'))
                    <p class="alert alert-success">{{ Session::get('success') }}</p>
                @endif
      
        <div class="ca-main">
          
          <h4 class="ca-head">Feedback</h4>
          <hr/>
          <div class="ca-info">
            <div class="ca-pic pull-left">
             @if(!empty(get_photo()))
              <img src="{{ $user_assets }}/my_photo/{{ get_photo() }}" width="175" height="175" class="user_img" style="margin-left: ">
            @elseif(user_data()->image_name)
              <img src="{{ $user_assets }}/profile_image/{{ user_data()->image_name }}" width="175" height="175" class="user_img">
              
              @else

              <img src="{{ $user_assets }}/sunrise.jpg" width="175" height="175" class="user_img">
              
              @endif
            </div>
            <p class="ca-name pull-left">{{user_data()->user_name}}</p>
            <div class="clearfix"></div>
            <p class="ca-para">Please Enter your feedback.</p>
            <form method="post" action="{{ url('add-feedback') }}">
            
              <div class="form-group row">

                {{ csrf_field() }}
              
            {{-- <label for="password" class="col-sm-2 col-form-label ca-label">Password:</label>
            <div class="col-sm-5">
              <input type="password" name="password" id="password" class="form-control" required />
            </div>
            </div> --}}
            <div class="form-group row">
            <label for="reason" class="col-sm-2 col-form-label ca-label">Feedback:</label>
            <div class="col-sm-10">
              <textarea name="user_feedback" class="form-control ca-reason-box" required></textarea>
            </div>
            </div>
            <hr/>
            <input type="submit" class="btn btn-success pull-right" value="submit" />
            <div class="clearfix"></div>
            </form>
          </div>
        </div>
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