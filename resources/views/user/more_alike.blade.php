@extends('user/user_master_layout1') 
@section('data') 
<style type="text/css">
	.you, .him {
		font-weight:700;
	}

	.greenpartnercolor{
		color: green;
        font-size: 30px;
	}
	.headin-color{
		background-color: #ccc;
		padding: 5px;
	}

	@media (max-width:768px) {
		.img-thumbnail.img-circle {
			display:block;
			float:none !important;
			clear:both;
			margin:auto;
		}

		.you, .him {
			display:block;
			text-align:center;
		}

		.country, .city {
			text-align:center;
		}
	}

	.hdlist {
		line-height:400%;
		font-size:16px;
	}

	.hdlist li {
		border-radius: 5px;
		padding-left:5px;
	}

	.hdlist li:hover {
		background-color: #ed6c05;
	}


	.col-md-3.hidden-sm.hidden-xs .well a {
   	 font-size: 16px;
	}
</style>
<div style="padding-top: 90px;"></div>
  
  <div class="container-fluid"> 
    <div class="row">
      <?php $counter=0; ?>
    <div class="col-md-3 hidden-sm hidden-xs">
         <div class="well" style="box-shadow: none;">
          @include('user/side_bar')
        </div>
      </div>
      @if(Session::has('error'))
                    <p class="alert alert-danger">{{ Session::get('error') }}</p>
                @endif
                @if(Session::has('success'))
                    <p class="alert alert-success">{{ Session::get('success') }}</p>
                @endif

      <div class="col-md-9">
      	<div class="panel panel-default">
    <div class="panel-heading text-center"><h3>More Alike</h3></div>
    <div class="panel-body">
    	<div class="row">
    		<div class="col-sm-2 col-xs-12">
                <span class='you'>You</span>
    			<a title="view profile" href="{{ url('public-profile',$user_data->id) }}">
           			@if($userphoto)
    				 <img src="{{ $user_assets }}/my_photo/{{ $userphoto->image }}" class="img-thumbnail img-circle pull-right" style="width: 100px; height: 100px;">
    				 @elseif($user_data->image_name)
    				 <img  src="{{ $user_assets }}/profile_image/{{ $user_data->image_name }}" class="img-thumbnail img-circle pull-right" style="width: 100px; height: 100px;">
    				 @else

           			<img src="{{ $user_assets }}/sunrise.jpg"  style="width: 100px; height: 100px;" class="img-thumbnail img-circle pull-right">
           			@endif
           			</a>
    		</div>
    		<div class="col-sm-8 col-xs-12">
    			
    		<p class="text-center" style="padding-top: 5%; font-size: 15px;">Your profile matches with <strong id="counter"></strong> of <strong>{{ $more_alike->user_name }}</strong> preferences!</p>
    		</div>
    		<div class="col-sm-2 col-xs-12">
                @if($more_alike->gender=='Female')
                <span>Her</span>
                @else
                <span class='him'>Him</span>
                @endif
    			<a title="view profile" href="{{ url('public-profile',$more_alike->id) }}">
    				@if($photo)
    				 <img src="{{ $user_assets }}/my_photo/{{ $photo->image }}" class="img-thumbnail img-circle pull-right" style="width: 100px; height: 100px;">
    				 @elseif($more_alike->image_name)
    				 <img  src="{{ $user_assets }}/profile_image/{{ $more_alike->image_name }}" class="img-thumbnail img-circle pull-right" style="width: 100px; height: 100px;">
    				 @else

           			<img src="{{ $user_assets }}/sunrise.jpg"  style="width: 100px; height: 100px;" class="img-thumbnail img-circle pull-right">
           			@endif
           		</a>
           		</div>
    	</div>
    	<hr>
    	<h3 class="headin-color"><img class="" src="{{ $user_assets }}/icons/basic-info.png"> Basic Preferences</h3>
    	<br>
            @if($more_alike->loking_age_from==$user_data->loking_age_from AND $more_alike->loking_age_to==$user_data->loking_age_to)
    	<div class="row">
    		<div class="col-md-5">
    			<h4>Age Preference:</h4>
    		</div>
    		@php 
    		
    		@endphp
    		<div class="col-md-5">
    			{{ $user_data->loking_age_from.' to '.$user_data->loking_age_to }}
    		</div>
    		<div class="col-md-2">
    		
                <?php $counter++; ?>
    			<i class="fa fa-check-circle greenpartnercolor"></i>
    			{{-- @else
    			<i class="fa fa-check-circle"></i> --}}
            </div>
        </div>
        <hr>
    			@endif
                @if($more_alike->martial_status==$user_data->martial_status)
    	<div class="row">
    		<div class="col-md-5">
    			<h4>Marital Status:</h4>
    		</div>
    		<div class="col-md-5">
    			{{ $user_data->martial_status }}
    		</div>
    		<div class="col-md-2">
    			
                <?php $counter++; ?>
    			<i class="fa fa-check-circle greenpartnercolor"></i>
    			{{-- @else
    			<i class="fa fa-check-circle"></i> --}}
            </div>

        </div>
        <hr>
    			@endif
                @if($more_alike->loking_height_from==$user_data->loking_height_from AND $more_alike->loking_height_to==$user_data->loking_height_to)
    	<div class="row">
    		<div class="col-md-5">
    			<h4>Height Preference:</h4>
    		</div>
    		<div class="col-md-5">
    			{{ $user_data->loking_height_from.' to '. $user_data->loking_height_to}}
    		</div>
    		<div class="col-md-2">
    			
                <?php $counter++; ?>
    			<i class="fa fa-check-circle greenpartnercolor"></i>
    			{{-- @else
    			<i class="fa fa-check-circle"></i> --}}
            </div>

        </div>
        <hr>
    			@endif
                @if($more_alike->skin_color==$user_data->skin_color)
    	<div class="row">
    		<div class="col-md-5">
    			<h4>Complexion Preference:</h4>
    		</div>
    		<div class="col-md-5">
    			{{ $user_data->skin_color }}
    		</div>
    		<div class="col-md-2">
    		
    			<i class="fa fa-check-circle greenpartnercolor"></i>
                <?php $counter++; ?>
    			{{-- @else
    			<i class="fa fa-check-circle"></i> --}}
            </div>

        </div>
        <hr>
    			@endif
                @if($more_alike->sect_are==$user_data->sect_are)
    	<div class="row">
    		<div class="col-md-5">
    			<h4>Religion:</h4>
    		</div>
    		<div class="col-md-5">
    			{{ $user_data->sect_are }}
    		</div>
    		<div class="col-md-2 parntersetdiv">
    			
    			<i class="fa fa-check-circle greenpartnercolor"></i>
                <?php $counter++; ?>
    			{{-- @else
    			<i class="fa fa-check-circle"></i> --}}
            </div>

        </div>
        <hr>
    			@endif
                @if($more_alike->cast==$user_data->cast)
    	<div class="row">
    		<div class="col-md-5">
    			<h4>Caste:</h4>
    		</div>
    		<div class="col-md-5">
    			{{ $user_data->cast }}
    		</div>
    		<div class="col-md-2">
    			
    			<i class="fa fa-check-circle greenpartnercolor"></i>
                <?php $counter++; ?>
    			{{-- @else
    			<i class="fa fa-check-circle"></i> --}}
            </div>

        </div>
        <hr>
    			@endif
    	<h3 class="headin-color"><img src="{{ $user_assets }}/icons/education.png"> Education and Occupation</h3>
    	<hr>
        @if($more_alike->qualification==$user_data->qualification)
    	<div class="row">
    		<div class="col-md-5">
    			<h4>Education:</h4>
    		</div>
    		<div class="col-md-5">
    			{{ $user_data->qualification }}
    		</div>
    		<div class="col-md-2">
    			
    			<i class="fa fa-check-circle greenpartnercolor"></i>
                <?php $counter++; ?>
    			{{-- @else
    			<i class="fa fa-check-circle"></i> --}}
            </div>

        </div>
        <hr>
    			@endif
        @if($more_alike->job==$user_data->job)
    	<div class="row">
    		<div class="col-md-5">
    			<h4>Occupation:</h4>
    		</div>
    		<div class="col-md-5">
    			{{ $user_data->job }}
    		</div>
    		<div class="col-md-2">
    			
    			<i class="fa fa-check-circle greenpartnercolor"></i>
                <?php $counter++; ?>
    			{{-- @else
    			<i class="fa fa-check-circle"></i> --}}
            </div>

        </div>
        <hr>
    			@endif
    	<h3 class="headin-color"><img src="{{ $user_assets }}/icons/1st-location.png"> Location Preferences</h3>
    	<hr>
@if($more_alike->country_id==$user_data->country_id)
    	<div class="row country">
    		<div class="col-md-5">
    			<h4>Country:</h4>
    		</div>
    		<div class="col-md-5">
    			{{ $user_data->country_name }}
    		</div>
    		<div class="col-md-2">
    			
                <?php $counter++; ?>
    			<i class="fa fa-check-circle greenpartnercolor"></i>
    			{{-- @else
    			<i class="fa fa-check-circle"></i> --}}
            </div>

        </div>
        <hr>
    			@endif
    @if($more_alike->city_id==$user_data->city_id)
    	<div class="row city">
    		<div class="col-md-5">
    			<h4>City:</h4>
    		</div>
    		<div class="col-md-5">
    			{{ $user_data->city_name }}
    		</div>
    		<div class="col-md-2">
    			
    			<i class="fa fa-check-circle greenpartnercolor"></i>
                <?php $counter++; ?>
    			{{-- @else
    			<i class="fa fa-check-circle"></i> --}}
            </div>

        </div>
    			@endif
    </div>
  </div>
        
             
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
  $(document ).ready(function() {
   
    $('#counter').html({{ $counter }}+'/10');
});
</script>
@endpush