@extends('user/user_master_layout1') 
@section('data')

<style>
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

  .searchcontainer button {
    margin-top: -56px;
  }

  @media (min-width:991px) {
    .nav.navbar-nav {
      margin-right:15px;
      }

      #logo-div {
        margin-right: -61px;
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
  
      <h2 class="text-center">Membership</h2>
      
      <div class="col-md-4" style="margin-top: 10px;">
        <div class="main_bdy0 hvr-grow">
          <ul class="bdylist">
            <li class="header">Basic</li>
            <li class="prce" style="background-color:#18172A">$ <i>5</i>.99 / year</li>
            <li>sample text</li>
            <li>sample text</li>
            <li>sample text</li>
            <li>sample text</li>
            <li class="grey" style="border-bottom:none;"><a href="#" class="button">Choose</a></li>
          </ul>
        </div>
      </div>
      
      <div class="col-md-4">
        <div class="main_bdy0 hvr-grow">
          <ul class="bdylist">
            <li class="header" style="background-color:#DAA520">Golden</li>
            <li class="prce" style="background-color:#18172A">$ <i>5</i>.99 / year</li>
            <li>sample text</li>
            <li>sample text</li>
            <li>sample text</li>
            <li>sample text</li>
            <li class="grey" style="border-bottom:none;"><a href="#" class="button">Choose</a></li>
          </ul>
        </div>
      </div>

      <div class="col-md-4"  style="margin-top: 10px;">
        <div class="main_bdy0 hvr-grow">
          <ul class="bdylist">
            <li class="header" style="background-color:#C0C0C0">Silver</li>
            <li class="prce" style="background-color:#18172A">$ <i>5</i>.99 / year</li>
            <li>sample text</li>
            <li>sample text</li>
            <li>sample text</li>
            <li>sample text</li>
            <li class="grey" style="border-bottom:none;"><a href="#" class="button">Choose</a></li>
          </ul>
        </div>
      </div>

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