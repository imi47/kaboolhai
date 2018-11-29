@extends('user/user_master_layout1') 
@section('data')

<style>
  .searchcontainer button {
    margin-top:-56px !important;
    padding-top:12px;
  }
  
  .hdlist {
    line-height:400%;
  }

  .hdlist li {
     border-radius:5px;
     padding-left:5px;
   }

  .hdlist li:hover {
    background-color:#ed6c05;
  }

.menulists {
  font-size: 16px;
}

   .top-searches-by div > a {
      text-transform:capitalize;
  }

  @media (min-width:991px) {
    .nav.navbar-nav {
      margin-right:15px;
      }
       #logo-div {
        margin-right: -61px;
      }
  }

  @media (max-width:320px) {
    .searchcontainer button {
      margin-top:-44px !important;
      padding-top:12px;
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
      <h2 class="dashboard-h2 text-center">Trust Builds Relationships</h2>
      <h3 class="dashboard-h3 text-center">Add these Trust Badges to your profile</h3>
      
      <hr class="tb-hr" />
      
      <div class="col-md-4">
      	<center><img src="{{ $user_assets }}/pointer.png" alt="" /></center>
      	<div class="badge-main text-center">
          @if(user_data()->mobile_status==1)
      		<img src="{{ $user_assets }}/public_profile_icon/mobile verified.png" alt="" class="tb-img" />
          @else
          <img src="{{ $user_assets }}/public_profile_icon/mobile unverified gray.png" alt="" class="tb-img" />
          @endif
      		<h4 class="tb-label">Mobile No</h4>
      		<p class="tb-details">Add badge by verifying your Mobile No.<br/>100% privacy options available.</p>
      		<div class="tb-section">
            @if(user_data()->mobile_status==1)
      			<ul class="tb-list">
             
      				<li>Mobile No. Verified</li>
      			</ul>
            @else

      			<a href="javascript:;" class="tb-btn" data-toggle="modal" data-target="#mobile-modal" /> Verify Mobile No.</a>
            @endif
      		</div>
      	</div>
      </div>
      <div class="col-md-4">
      	<center><img src="{{ $user_assets }}/pointer.png" alt="not" /></center>
      	<div class="badge-main text-center">
           @if(user_data()->email_status==1)
      		<img src="{{ $user_assets }}/public_profile_icon/email verified.png" alt="" class="tb-img" />
          @else
          <img src="{{ $user_assets }}/public_profile_icon/email unverified gray.png" alt="" class="tb-img" />
          @endif
      		<h4 class="tb-label">Email ID</h4>
      		<p class="tb-details">Add badge by verifying your Email ID.<br/>We'll not send spam emails.</p>
      		<div class="tb-section">
              @if(user_data()->email_status==1)
            <ul class="tb-list">
      				<li>Email Verified</li>

      			</ul>
          
            @else
            <a class="tb-btn" href="{{ url('email-verify') }}">Send Verification Link</a>
      			
            @endif
      		</div>
      	</div>
      </div>
      <div class="col-md-4">
      	<center><img src="{{ $user_assets }}/pointer.png" alt="" /></center>
      	<div class="badge-main text-center">
           @if(user_data()->verify_file<>0))
      		<img src="{{ $user_assets }}/public_profile_icon/ssn verified.png" alt="" class="tb-img" />
          @else
            <img src="{{ $user_assets }}/public_profile_icon/ssn_unverified.png" alt="" class="tb-img" />
          @endif
      		<h4 class="tb-label">Offline IDs</h4>
      		<p class="tb-details">Add badge by verifying your any ID.<br/>Your ID will be not shared.</p>
      		<div class="tb-section">
            @if(user_data()->verify_file<>0))
      			<ul class="tb-list">
      				<li>Offline ID. Verified</li>
      			</ul>
            @else

				<a href="javascript:;" class="tb-btn" data-toggle="modal" data-target="#id-modal" /> Upload ID</a>
        @endif
      		</div>
      	</div>
      </div>
      
    </div>
    
    
    <!-- Offline ID Modal -->
	<div class="modal fade" id="id-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
		<div class="modal-content" style="margin-top: 100px;">
		  <div class="modal-header">
			<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Upload Offline ID</h5>
		  </div>
		  <div class="modal-body">
			<form method="post" action="{{ url('passport-verify') }}" enctype="multipart/form-data">
			  <div class="form-group">
          {{ csrf_field() }}
				<label class="col-form-label">Select Offline ID Type:</label>
				<select name="pasport_no" class="form-control" required>
					<option value="">Select ID</option>
					<option value="CNIC">CNIC</option>
					<option value="Passport">Passport</option>
					<option value="SSN">Social Security Number</option>
					<option value="Driving License">Driving License</option>
				</select>
			  </div>
			  <div class="form-group">
				<label class="col-form-label">Upload Scan Copy of ID:</label>
				<input type="file" name="image" class="form-control" required / style="display: block;">
			  </div>
			  <div class="pull-right">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Submit Offline ID</button>
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
		<div class="modal-content" style="margin-top: 100px;">
		  <div class="modal-header">
			<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Mobile Number Verification</h5>
		  </div>
		  <div class="modal-body">
			<form method="post" id="num-verified">
        {{ csrf_field() }}
			  <div class="form-group">
				<label class="col-form-label">Mobile No:</label>
				<input type="text" name="mobile" class="form-control" required />
        <span id="match"></span>
        <span id="error"></span>
			  </div>
			  <div class="pull-right">
				<button type="submit" class="btn btn-primary">Send Code</button>
			  </div>
			  <div class="clearfix"></div>
			</form>
			<hr />
			<form method="post" id="verify-code">
			  <div class="form-group">
           {{ csrf_field() }}
				<label class="col-form-label">Enter Code Here You Received on Your Mobile No:</label>
				<input type="text" name="verification_code" class="form-control" required />
			  </div>
			  <div class="pull-right">
			  	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-success">Verify Mobile</button>
        </div>
        <span id="code_error" style="color:red;"></span>
			  <div class="clearfix"></div>
			</form>
		  </div>
		</div>
	  </div>
	</div>
	

  <script type="text/javascript">
    $('#num-verified').submit(function(e){

e.preventDefault();
formData=$(this).serialize();
var data=formData;

  $.post('{{ url('/num-verified') }}' , data , function(data){
        if(data=='true')
        {
          $('#match').html('Your Kaboolhai verification 4 digit code send on your mobile number');
        }
        else
        {
          $('#error').html('invalid Mobile Number');
        }
  });
});

    $('#verify-code').submit(function(e){

e.preventDefault();
formData=$(this).serialize();
var verification_code=formData;

  $.post('{{ url('/verify-code') }}' , verification_code , function(data){
        if(data=='false')
        {
          $('#code_error').html('Verifaction code don,t match please try again');
        }
        else
        {
          $('#mobile-modal').modal('hide');
           location.reload();
        }
  });
});
  </script>


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