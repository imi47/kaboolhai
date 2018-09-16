@extends('user/user_master_layout1') 
@section('data') 
<style type="text/css">
	.radio-reason{
		position: absolute; margin-left: -350px !important; 
	}
	.radio-lable{
		margin-left: 60px !important;

	}
</style>
<div style="padding-top: 90px;"></div>
  
  <div class="container-fluid"> 
    <div class="row">
      
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
      		@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
          <div class="about_text">
            <h3>Can you please state why you are closing your account:</h3><br>
        </div>
        <div class="row">
        	<div class="col-md-9">
        	<form method="post" action="{{ url('close') }}">
        		{{ csrf_field() }}
            <input type="radio" value="This is temporary. I'll be back." onclick ="return other1()"  name="close_reason" class="radio-reason" style=""><label class="radio-lable">This is temporary. I'll be back.</label> 
            <input type="radio" value="I found a Marriage Partner through Kaboolhai" onclick ="return other1()" name="close_reason" class="radio-reason"><label class="radio-lable">I found a Marriage Partner through Kaboolhai</label> 
            <input type="radio" value="I have found somebody and am no longer looking" onclick ="return other1()" name="close_reason" class="radio-reason"><label class="radio-lable">I have found somebody and am no longer looking</label> 
            <input type="radio" value="I am not happy with the service Kaboolhai are providing" onclick ="return others()" name="close_reason" class="radio-reason"><label class="radio-lable">I am not happy with the service Kaboolhai are providing</label> 
            <div class="reason" hidden="">
            <label>Please let us know what we can do better (optional)</label>
            <textarea name="bad_service" rows="4"></textarea>
            </div>
            <input type="radio" value="I cannot afford the subscription" onclick ="return other1()" name="close_reason" class="radio-reason"><label class="radio-lable">I cannot afford the subscription</label> 
            <input type="radio" value="Other reason" onclick ="return other()" name="close_reason" class="radio-reason"><label class="radio-lable">Other reason</label> 
            <div class="other-reason" hidden="">
            <label>Please state your reason for leaving here </label>
            <textarea name="other_reason" rows="4"></textarea>
            </div>
            <br><br>
            
            <div class="col-md-4">
            <button type="submit" class="btn btn-danger">Continue</button>
            </div>
            <div class="col-md-4">
            	<a href="{{ url('dashboard') }}" class="btn btn-success">Cancel</a>
            </div>
            </form>
        	</div>
        </div>
      </div>

      
    </div>
  </div>

<br><br>
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
<script type="text/javascript" src="{{ asset('public') }}/js/chosen.jq.js"></script>
<script type="text/javascript">
	
	function other() {
		
		$('.other-reason').show();
		$('.reason').hide();
    }
    function other1() {
		$('.other-reason').hide();
		$('.reason').hide();
    }
    function others()
    {
      $('.other-reason').hide();
      $('.reason').show();
    }
</script>
@endpush