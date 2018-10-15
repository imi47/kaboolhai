@extends('user/user_master_layout1') 
@section('data')

<style>
@media (min-width:991px) {
   .searchcontainer button {
      margin-top:-56px !important;
      padding-top:12px;
    }
}

@media (max-width:991px) {

    .searchcontainer button {
      margin-top:-56px !important;
      padding-top:12px;
		}
		
		.sticky-nav .navbar-nav > li > .dropdown-menu {
      top:60px !important;
  }
}

@media (max-width: 768px) {
    .sticky-nav .navbar-nav > li > .dropdown-menu {
      top:52px !important;
  }
}

@media (max-width: 685px) {
  .sticky-nav .navbar-nav > li > .dropdown-menu, .shrink-nav .dropdown.simple-dropdown .dropdown-menu {
    top: 60px !important;
  }

  #username-dropdown-toggle .dropdown-menu {
    top: 53px !important;

  }
}

@media (max-width:320px) {
  .searchcontainer button {
    margin-top:-44px !important;
  }
}

.dashboard-h6 {
	padding:0 6px;
	text-align:center;
}

.fa-google-plus-square, .fa-linkedin-square {
  font-size:3.3em;
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
      @if(Session::has('success'))
                    <p class="alert alert-success">{{ Session::get('success') }}</p>
                @endif
      <h2 class="dashboard-h2 text-center">Email Preferance</h2>
      <h3 class="dashboard-h3 text-center">Choose which email you want to receive from us</h3>
      
      <div class="col-md-12">
      	<div class="sec_1">
          <form method="post" action="{{ url('email-setting') }}">
      		<div class="dashboard-h3 text-center inner_heading">
      		Access my account
      		</div>
			
			<div class="sec_1_inner">
				
				<div class="row">
	      			<div class="col-md-4">
	      				<input type="checkbox" @if($email_setting->account_access_status==1) checked="" @endif name="message_status" class="pull-right"> 
	      			</div>

	      			<div class="col-md-8">
	      				<h6 class="dashboard-h6">Send me a notification when my account is accessed from a new device </h6>
	      			</div>
	      		</div>

	      	{{-- 	<div class="row">
	      			<div class="col-md-4">
	      				<input type="checkbox" @if($email_setting->read_message_status==1) checked="" @endif name="read_message_status" class="pull-right"> 
	      			</div>

	      			<div class="col-md-8">
	      				<h6 class="dashboard-h6">Be told when your messages have been read</h6>
	      			</div>
	      		</div> --}}

			</div>
      		
      	</div>


      	<div class="sec_2">
      		<div class="dashboard-h3 text-center inner_heading">
      			Photos
      		
      		</div>

      		<div class="sec_1_inner">
	      		<div class="row">
	      			<div class="col-md-4">
	      				<input type="checkbox" @if($email_setting->photo_request_status) checked="" @endif name="photo_request_status" class="pull-right"> 
	      			</div>
	      			<div class="col-md-8">
	      				<h6 class="dashboard-h6">Requests for your photo</h6>
	      			</div>
	      		</div>

	      		<div class="row">
	      			<div class="col-md-4">
	      				<input type="checkbox" name="responce_photo_request_status" @if($email_setting->responce_photo_request_status==1) checked="" @endif class="pull-right"> 
	      			</div>
	      			<div class="col-md-8">
	      				<h6 class="dashboard-h6">Responses to your requests to others</h6>
	      			</div>
	      		</div>
      			
      		</div>

      	</div>


      	<div class="sec_3">
      		<div class="dashboard-h3 text-center inner_heading">
      			New Matches
      			
      		</div>

		<div class="sec_1_inner">
      		{{-- <div class="row">
      			<div class="col-md-4">
      				<input type="checkbox" name="" class="pull-right"> 
      			</div>
      			<div class="col-md-8">
      				<h6 class="dashboard-h6">Email my new matches to my inbox</h6>
      			</div>
      		</div> --}}

      		<div class="row">
      			<div class="col-md-4">
      				<input type="checkbox" @if($email_setting->pure_matches_status==1) checked="" @endif name="pure_matches_status" class="pull-right"> 
      			</div>
      			<div class="col-md-8">
      				<h6 class="dashboard-h6">Pure matches</h6>
      			</div>
      		</div>

      		<div class="row">
      			<div class="col-md-4">
      				<input type="checkbox" @if($email_setting->who_i_am_status==1) checked="" @endif name="who_i_am_status" class="pull-right"> 
      			</div>
      			<div class="col-md-8">
      				<h6 class="dashboard-h6">Who I'm looking for</h6>
      			</div>
      		</div>

      		<div class="row">
      			<div class="col-md-4">
      				<input type="checkbox" @if($email_setting->who_looking_status==1) checked="" @endif name="who_looking_status" class="pull-right"> 
      			</div>
      			<div class="col-md-8">
      				<h6 class="dashboard-h6">Who's looking for me</h6>
      			</div>
      		</div>
</div>
      	</div>

      	<div class="sec_4">
      		<div class="dashboard-h3 text-center inner_heading">
      			Account
      		</div>
<div class="sec_1_inner">
      		{{-- <div class="row">
      			<div class="col-md-4">
      				<input type="checkbox" class="pull-right"> 
      			</div>
      			<div class="col-md-8">
      				<h6 class="dashboard-h6">Send me a notification when my account is accessed from a new device</h6>
      			</div>
      		</div> --}}

      		<div class="row">
      			<div class="col-md-4">
      				<input type="checkbox" name="kaboolhai_notifaction_status" @if($email_setting->kaboolhai_notifaction_status==1) checked="" @endif  class="pull-right"> 
      			</div>
      			<div class="col-md-8">
      				<h6 class="dashboard-h6">Notifications from Pure Matrimony</h6>
      			</div>
      		</div>
      	</div>
      	</div>
        {{ csrf_field() }}
		<div class="row">
			<div class="col-md-12 text-center">
				<button class="save_btn">SAVE</button>
			</div>
		</div>
</form>

      </div>
      
      
      
      
      
    </div>
    
    
    <!-- Offline ID Modal -->
	<div class="modal fade" id="id-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Upload Offline ID</h5>
		  </div>
		  <div class="modal-body">
			<form>
			  <div class="form-group">
				<label class="col-form-label">Select Offline ID Type:</label>
				<select class="form-control" required>
					<option value="">Select ID</option>
					<option value="CNIC">CNIC</option>
					<option value="Passport">Passport</option>
					<option value="SSN">Social Security Number</option>
					<option value="Driving License">Driving License</option>
				</select>
			  </div>
			  <div class="form-group">
				<label class="col-form-label">Upload Scan Copy of ID:</label>
				<input type="file" class="form-control" required />
			  </div>
			  <div class="pull-right">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Submit Offline ID</button>
			  </div>
			  <div class="clearfix"></div>
			</form>
		  </div>
		</div>
	  </div>
	</div>
	
	
	<!-- Mobile Modal -->
	<div class="modal fade" id="mobile-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Mobile Number Verification</h5>
		  </div>
		  <div class="modal-body">
			<form>
			  <div class="form-group">
				<label class="col-form-label">Mobile No:</label>
				<input type="text" class="form-control" required />
			  </div>
			  <div class="pull-right">
				<button type="button" class="btn btn-primary">Send Code</button>
			  </div>
			  <div class="clearfix"></div>
			</form>
			<hr />
			<form>
			  <div class="form-group">
				<label class="col-form-label">Enter Code Here You Received on Your Mobile No:</label>
				<input type="text" class="form-control" required />
			  </div>
			  <div class="pull-right">
			  	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-success">Verify Mobile</button>
			  </div>
			  <div class="clearfix"></div>
			</form>
		  </div>
		</div>
	  </div>
	</div>
	


    <!--<div class="row social_icon">
      <div class="col-sm-3">
      </div>
      <div class="col-sm-8">
        <img src="{{ $user_assets }}/db_images/g+.png" alt="" width="27" height="27" class="distance  hvr-grow">

       <a href="https://www.facebook.com/Saykaboolhai/" target="__blank">
        <img src="{{ $user_assets }}/db_images/facebook.png" alt="" width="23" height="23" class="distance  hvr-grow">
      </a>

      <a href="https://twitter.com/kaboolhaitweet" target="__blank">
        <img src="{{ $user_assets }}/db_images/twitter.png" alt="" width="27" height="27" class="distance  hvr-grow">
        
      </a>
        <img src="{{ $user_assets }}/db_images/linkedin.png" alt="" width="27" height="27" class="distance  hvr-grow">
        <img src="{{ $user_assets }}/db_images/youtube.png" alt="" width="27" height="27" class="distance  hvr-grow">

<a href="https://www.instagram.com/kaboolhai/">
<img src="{{ $user_assets }}/db_images/instagram.png" alt="" width="27" height="27" class="distance  hvr-grow">
  
</a>
      </div>
      <div class="col-sm-1">
      </div>
    </div>-->

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