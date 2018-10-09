<!doctype html>
<html>

<head>
	<title>{{ $title }}</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta charset="utf-8">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
	<!-- favicon -->


	@stack('css')
</head>
<style type="text/css">
	.logindiv {
		width: 300px;
		height: auto;
		background-color: #ffffff;
		position: absolute;
		z-index: 999999;
		right: 0;
		padding-right: 30px;
		/* top: 0; */
		margin-top: 77px;
		margin-right: 118px;
		display: none;
		border: 2px solid #f47e2a;
	}

	#stay-tuned-container p{
		font-size:small;
	}

	.navsidebar {
		width: 260px;
		height: 650px;
		/* background-color: rgba(244,126,44,1); */
		background-color: rgba(0, 0, 0, 0.5);
		position: absolute;
		top: 0;
		right: 0;
		z-index: 999999;
	}

	li a.M {
		display: block;
		width: 200px;
		margin-top: 10px;
		/* background-color: red; */
		color: #ffffff;
		font-size: 16px;
	}

	.top-menu-main {
		margin: 0;
	}

	@media (max-width: 1193px) {
		.top-menu-main {
			display: none;
		}
	}

	@media (max-width: 768px) {
		.pull-right {
			margin-top:20px;
			float:none !important;
		}
	}

	@media (max-width:520px) {
			.tpsrch {
				display:none;
			}
			.top-searches-by {
				display:block;
			}
		}

		@media (min-width:521px) {
			.tpsrch {
				display:block;
			}
			.top-searches-by {
				display:none;
			}
		}

	.humburger {
		font-size: 30px;
		color: #fff;
	}

	.navbar-header {
		position: absolute;
		top: 3px;
		right: 5px;
	}

	/* .navbar-header .navbar-toggle {
		background-color:#5a378c !important;
		border-radius:5px;
		position:relative;
		float:right:
		padding:9px 10px;
		margin-top: 8px 0;
		margin-right:15px;


	} */

	.navbar-default .navbar-toggle {
		border-color: #ddd;
	}

	.top-searches-by div {
			border-bottom:1px solid #fff;
			padding:10px;
		}
    .top-searches-by div > a {
    color: #fff !important;
    }

	/* mobile navbar toggle code begin */

	@media (min-width:1194px) {
		.navbar-header {
			display: none;
		}
	}

	.navbar-toggle {
		background-color: #5a378c !important;
		border-radius: 5px;
	}

	.navbar-toggle {
		position: relative;
		float: right;
		padding: 9px 10px;
		margin-top: 8px;
		margin-right: 15px;
		/* margin-bottom: 8px; */
		background-color: transparent;
		background-image: none;
		border: 1px solid transparent;
		border-radius: 4px;
	}

	.sr-only {
		position: absolute;
		width: 1px;
		height: 1px;
		padding: 0;
		margin: -1px;
		overflow: hidden;
		clip: rect(0, 0, 0, 0);
		border: 0;
	}

	/* @media (max-width: 991px) { */
	.navbar-default .navbar-toggle .icon-bar {
		background-color: #fff;
	}

	/* } */

	.navbar-toggle .icon-bar {
		display: block;
		width: 22px;
		height: 2px;
		border-radius: 1px;
	}

	.navbar-default .navbar-toggle {
		border-color: #ddd;
	}

	.navbar-toggle {
		background-color: #5a378c !important;
		border-radius: 5px;
	}

	@media (max-width: 991px) {
		.navbar-toggle {
			border-radius: 5px;
		}

	}

	.navbar-toggle .icon-bar+.icon-bar {
		margin-top: 4px;
	}

	.navbar-toggle .icon-bar {
		display: block;
		width: 22px;
		height: 2px;
		border-radius: 1px;
	}

	.navbar-toggle .icon-bar {
		display: block;
		width: 22px;
		height: 2px;
		border-radius: 1px;
	}

	#login-div-x {
		position: absolute;
		font-size: large;
		font-weight: bold;
		top: 0;
		right: 0;
		cursor: pointer;
	}

	/* mobile navbar toggle code begin */
</style>

<body>
	<link rel="stylesheet" href="{{ $user_assets }}/css/muzamil.css" />

	<!--  -->
	<!-- navigation panel -->
	<div class="wrapper" id='nav-wrapper'>
		<nav class="navbar navbar-default navbar-fixed-top  sticky-nav nav-white nav-border-bottom" role="navigation" style="height: 60px;background-color: #5a378c">
			<div class="container-fluid">
				<div class="row">
					<!-- logo -->
					<div class="col-md-2 pull-left"> <a class="logo-light" href="{{ url('/') }}"><img alt="" src="{{ $user_assets }}/images/kaboolhai.png"
							 class="logo" /></a></div>

					<div class="navbar-header col-lg-9 col-md-9 col-sm-6 col-xs-2">
						<!-- removeed data-target=".navbar-collapse" from button -->
						<button type="button" class="navbar-toggle" data-toggle="collapse"> <span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
					</div>

					<div class="col-md-10">

					</div>


				</div>

				<div class="top-menu-main">
					<ul>
						<li class="{{ Request::is('/') ? 'active1' : '' }}">
							<!-- <a href="{{url('/')}}">Home</a> </li> -->
						<li class="{{ Request::is('about-us') ? 'active1' : '' }}"> <a href="{{url('about-us')}}">About
								Us</a> </li>
						<li class="{{ Request::is('faqs') ? 'active1' : '' }}"> <a href="{{url('faqs')}}">FAQs</a>
						</li>
						<li class="{{ Request::is('advance-search') ? 'active1' : '' }}"> <a href="{{url('advance-search')}}">Find
								Match</a> </li>
						<li class="{{ Request::is('term-condation') ? 'active1' : '' }}"> <a href="{{url('term-condation')}}">Terms
								& Conditions</a> </li>
						<li class="{{ Request::is('blog') ? 'active1' : '' }}"> <a href="http://kaboolhai.com/blog/">Blogs</a>
						</li>
						<li class="{{ Request::is('contact-us') ? 'active1' : '' }}"> <a href="{{url('contact-us')}}">Contact</a>
						</li>
						<li class="{{ Request::is('policy-privacy') ? 'active1' : '' }}"> <a href="{{url('policy-privacy')}}">policy
								& privacy</a> </li>


						@if(Session::get('user_id'))
						<li style="padding-right:0px;text-transform:capitalize;"> <a href="{{ url('dashboard') }}"> {{
								Session::get('user_name') }} </a> </li>
						<li style="padding-right:0px;text-transform:capitalize;"> <a href="{{ url('logout') }}"> Logout
							</a> </li>
						@else


						<li id="signin" style="padding-right:0px;text-transform:capitalize;"> <a href="#"> Sign In </a>
						</li>
						@endif
						<a href="javascript:;" id="btntoshowmenu"><i class="fa fa-bars humburger pull-right"></i></a>
					</ul>
				</div>

			</div>



			<div class="navsidebar wow slideInRight" id="navsidebare" style="display:none;">
				<div class="row">

					<a href="javascript:;" id="cross" style="margin-left:230px;">
						<!-- <i class="fa fa-arrow-right fa-3x" style="color:white;margin-top:10px;"></i> -->
						<img width="20" height="20" style="margin-top:15px;" src="{{ $user_assets }}/cross.png" alt="" />
					</a>
					<ul style="margin-left:25px;list-style-type:none;width:100px;line-height:50px;margin-top:15px;">
						@if(empty(Session::get('user_id')))
						<li class="wow fadeInDown login-li" data-wow-delay="0.8s"><a href="#" class="M"><span><img width="40" height="40"
									 src="{{ $user_assets }}/login.svg" alt="" /></span><span style="padding-left:15px;">Sign
									in</span></a></li>
						<li class="wow fadeInDown" data-wow-delay="0.2s"><a href="{{ url('register') }}" class="M"><span><img width="40"
									 height="40" src="{{ $user_assets }}/create_account.png" alt="" /></span><span style="padding-left:15px;">Create
									Account</span></a></li>
						@endif
						<li class="wow fadeInDown" data-wow-delay="0.3"><a href="{{url('about-us')}}" class="M"><span><img width="40"
									 height="40" src="{{ $user_assets }}/about_us.png" alt="" /></span>
								<span style="padding-left:10px;">About Us</span></a></li>
						<li class="wow fadeInDown" data-wow-delay="0.4s"><a href="{{ url('advance-search') }}" class="M"><span><img width="40"
									 height="40" src="{{ $user_assets }}/find_match.png" alt="" /></span><span style="padding-left:15px;">Find
									Match</span></a></li>
						{{-- <li class="wow fadeInDown" data-wow-delay="0.5s"><a href="{{ url('our-police') }}" class="M"><span><img
									 width="40" height="40" src="{{ $user_assets }}/our_policy.png" alt="" /></span><span style="padding-left:15px;">Our
									Policy</span></a></li> --}}
						<li class="wow fadeInDown" data-wow-delay="0.6s"><a href="{{ url('policy-privacy') }}" class="M"><span><img width="40"
									 height="40" src="{{ $user_assets }}/privacy.png" alt="" /></span>
								<span style="padding-left:10px;">Privacy</span></a></li>
						<li class="wow fadeInDown" data-wow-delay="0.7s"><a href="http://kaboolhai.com/blog/" target="_blank" class="M"><span><img
									 width="40" height="40" src="{{ $user_assets }}/blog.svg" alt="" /></span><span style="padding-left:15px;">Blogs</span></a></li>
						<li class="wow fadeInDown" data-wow-delay="0.9s"><a href="{{ url('faqs') }}" class="M"><span><img width="40"
									 height="40" src="{{ $user_assets }}/faqs.png" alt="" /></span> <span style="padding-left:10px;">FAQs</span></a></li>
						<li class="wow fadeInDown" data-wow-delay="0.8s"><a href="our-partnar" class="M"><span><img width="40" height="40" src="{{ $user_assets }}/our_partners.png"
									 alt="" /></span><span style="padding-left:15px;">Our Partners</span></a></li>
						<li class="wow fadeInDown" data-wow-delay="0.99s"><a href="{{ url('contact-us') }}" class="M"><span><img width="40"
									 height="40" src="{{ $user_assets }}/contact_us.png" alt="" /></span><span style="padding-left:15px;">Contact</span></a></li>
					</ul>
				</div>
			</div>
		</nav>
	</div>

	<script>
		$("#btntoshowmenu").click(function(){
             $("#navsidebare").show('slow');
            //  $("#signin").hide();
             $("#logindivv").hide();
             $("#btntoshowmenu").css('visibility', 'hidden');
         });
         
         $("#cross").click(function() {       
            $("#navsidebare").hide("slow");
            $("#signin").show();
            //  $("#btntoshowmenu").show();
             $("#btntoshowmenu").css('visibility', 'visible');				 
				 $('.navbar-toggle').show();

				 mq = window.matchMedia( "(min-width: 1194px)" );
				 if(mq.matches) {
				 $('.navbar-toggle').hide();					 
				 }
         });

			$('.navbar-toggle').click(function(){
				$("#navsidebare").show('slow');
				$(this).hide();
			});

			$('.login-li').click(function(){
          $("#logindivv").show('fast');
         })

			mq = window.matchMedia( "(max-width: 1194px)" );
         
			mq.addListener(mediaQueryResponse) // attach listener function to listen in on state changes so a page refresh will not be required
 
			// search option will stay in the same line in tablet mode 
			function mediaQueryResponse(mq) {
 
			  if(mq.matches) {
				$('.navbar-toggle').show();
			  }
			  else {
				$('.navbar-toggle').hide();
			  }
			}
			mediaQueryResponse(mq);

      </script>
	<div class="logindiv wow fadeIn" id="logindivv">
		<div class="row" style="padding:15px;">
			<div class="col-sm-12">
				<form method="post" action="{{ url('dologin') }}" id="forgot-password">
					<div style="padding-left:15px;">
						<span id='login-div-x'>X</span>
						<label for="" style="font-size:20px;padding-bottom:5px;">Email </label>
						<input type="text" name="email" placeholder="Email/User name/Mobile" style="height:35px;padding:5px;" class="form-control">
						<label for="" style="font-size:20px;padding-bottom:5px;">Password</label>
						<input type="password" name="password" placeholder="Enter Password" style="height:35px;padding:5px;">
						{{-- <div style="display:inline;">
							<input type="checkbox"> Remember Me
						</div> --}}
						<br>
						{{ csrf_field() }}
						<button type="submit" style="width:100%;margin-top:10px;background-color:#25b206;border:1px solid #25b206;height:35px;color:#ffffff;">Sign
							In</button>
						<div style="text-align:center;color:blue;margin-top:10px;">
							<a href="{{ url('forgot') }}">Forgot Password?</a>
						</div>
				</form>
			</div>
		</div>
	</div>
	</div>
	</div>
	<script>
		$("#signin").click(function(){
            $("#logindivv").toggle('fast');
         });

			$("#login-div-x").click(function(){
          $('#logindivv').hide('fast');
        });

		  // hide login div when clicked anywhere else
        $(document).mouseup(function(e) 
        {
            var login_div = $("#logindivv");
            var navSideBar = $('#navsidebare');

            // if the target of the click isn't the login_div nor a descendant of the login_div
            if (!login_div.is(e.target) && login_div.has(e.target).length === 0) 
            {
                login_div.hide();
            }
        });

      </script>

	@yield('data')



	@if(!empty($recent))
	<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
		<div class="sidebar" id="">
			<h3 class="text-center">Recently Joined</h3>
			@if(count($recent))
			@foreach($recent as $key =>$recnt_slid)

			<div @if($key==0) class="item active well" @else class="item well " @endif style="padding-bottom: 20px;">
				<a href="{{ url('public-profile',$recnt_slid->id) }}" title="{{ $recnt_slid->user_name }} view public profile">
					@if($recnt_slid->image)

					<img src="{{ $user_assets }}/my_photo/{{ $recnt_slid->image }}" class="img-thumbnail" style="width: 100%; height: 100px;">

					@elseif($recnt_slid->image_name)
					<img src="{{ $user_assets }}/profile_image/{{ $recnt_slid->image_name }}" class="img-thumbnail" style="width: 100%; height: 100px;">
					@else

					<img src="{{ $user_assets }}/default_slider.jpg" class="img-thumbnail" style="width: 100%; height: 100px;">
					@endif


					<h4 style="color: white;">{{ $recnt_slid->user_name.' '.$recnt_slid->gender }}</h4>


					<p style="color: white;"> {{ $recnt_slid->country_name.' '.$recnt_slid->city_name.'
						'.$recnt_slid->martial_status}} </p><span style="color: blue;"><b>View Profile</b></span>
				</a>
			</div>


			@endforeach
			@else

			<div class="well">


				<img src="{{ $user_assets }}/default_slider.jpg" class="img-thumbnail" style="width: 100%; height: 200px;">

				{{-- <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/158072/hearthand.jpg" alt="Third slide">
				--}}
				<div>
					<h2>Recent User</h2>
					<h3>Not Available</h3>

				</div>

				@endif

			</div>

		</div>
	</div>
	</div>
	@endif
	<footer>
		<section class="bg-orange no-padding wow" style="background-color:#ed6c05;">
			<div class="container">
				<div class="row padding-two sm-text-center">
					<div class="col-md-9 no-padding" id='stay-tuned-container'>
						<h5 class="white-text font-weight-600" style="color: white;font-family:sans-serif; margin-top: 20px;">Stay
							tuned for the launch of Best &amp; Secure Matrimonial App!</h5>
						<p class="white-text" style="font-family:sans-serif; color: white;">It has been our utmost
							desire to introduce an outstanding and easy to use matrimonial application for IOS and
							Android users. We have been working hard in this stance and are planning to come up with a
							user-friendly and secure Matrimonial App so that our users stay updated while on the go!<br /><br />The
							app will be soon available for both Android and Apple iPhone users in the respective play
							stores. Stay tuned for the launch of our ‘Kabool Hai Matrimonial app’ as the early birds
							will be given early access and will get free subscription.</p>
					</div>
					<div class="col-md-3 padding-one no-padding-bottom" style="margin-top: 50px;">
						<a class="" href="#"><img src="{{ $user_assets }}/images/google-play.png" width="193" height="58"></a>
						<br />
						<br />
						<a class="" href="#"><img src="{{ $user_assets }}/images/apple-store.png" width="193" height="58"></a>
					</div>
				</div>
			</div>
		</section>
		<section class="bg-orange no-padding wow" style="background-color: #5a378c">
			<div class="container-fluid">
				<div class="row padding-two sm-text-center">
					{{-- <div class="container-fluid"> --}}
						{{-- <div class="row"> --}}
							<div class="col-md-2" style="margin-top: 30px" ;>
								<table>
									<tr>
										<th class="fhead" style="color: white">Kaboolhai</th>
									</tr>
									</tr>
									<tr>
										<td class="flinks"><a href="{{url('about-us')}}" style="color: white; font-size: 14px; line-height: 30px;">About</a></td>
									</tr>
									<tr>
										<td class="flinks"><a href="http://kaboolhai.com/blog/" style="color: white; font-size: 14px; line-height: 30px;">Blog</a></td>
									</tr>
									<tr>
										<td class="flinks"><a href="#" style="color: white; font-size: 14px; line-height: 30px;">Download
												app</a></td>
									</tr>
									<tr>
										<td class="flinks"><a href="{{ url('term-condation') }}" style="color: white; font-size: 14px; line-height: 30px;">Terms
												and Conditions</a></td>
									</tr>
									<tr>
										<td class="flinks"><a href="#" style="color: white; font-size: 14px; line-height: 30px;">Testimonials</a></td>
									</tr>
									<tr>
										<td class="flinks"><a href="{{ url('policy-privacy') }}" style="color: white; font-size: 14px; line-height: 30px;">Privacy
												Policy</a></td>
									</tr>
									<tr>
										<td class="flinks"><a href="{{ url('payment') }}" style="color: white; font-size: 14px; line-height: 30px;">Payment</a></td>
									</tr>
								</table>
							</div>

							<div class="col-md-2" style="margin-top: 30px;">
								<table>
									<tr>
										<th class="fhead" style="color: white; font-size: 14px; line-height: 30px;">Help
											&amp; Support</th>
									</tr>
									<tr>
										<td class="flinks"><a href="{{ url('help-center') }}" style="color: white; font-size: 14px; line-height: 30px;">24x7
												Live help</a></td>
									</tr>
									<tr>
										<td class="flinks"><a href="{{ url('contact-us') }}" style="color: white; font-size: 14px; line-height: 30px;">Contact
												Us</a></td>
									</tr>
									<tr>
										<td class="flinks"><a href="{{ url('feedback') }}" style="color: white; font-size: 14px; line-height: 30px;">Feedback</a></td>
									</tr>
									<tr>
										<td class="flinks"><a href="{{ url('faqs') }}" style="color: white; font-size: 14px; line-height: 30px;">FAQ'S</a></td>
									</tr>
									<tr>
										<td class="flinks"><a href="{{ url('payment') }}" style="color: white; font-size: 14px; line-height: 30px;">Upgrade
												Account</a></td>
									</tr>
									<tr>
										<td class="flinks"><a href="{{ url('assisted-service') }}" style="color: white; font-size: 14px; line-height: 30px;">Assisted
												Service</a></td>
									</tr>
									<tr>
										<td class="flinks"><a href="{{ url('services') }}" style="color: white; font-size: 14px; line-height: 30px;">Our
												Services</a></td>
									</tr>
								</table>
							</div>

							<div class="col-md-2" style="margin-top: 30px;">
								<table>
									<tr>
										<th class="fhead" style="color: white; font-size: 14px; line-height: 30px;">Search
											Profile</th>
									</tr>
									<tr>
										<td class="flinks"><a data-toggle="modal" data-target="#basic_search" href="javascript:;" style="color: white; font-size: 14px; line-height: 30px;">Basic
												Search</a>

											{{-- <a href="javascript:;" data-toggle="modal" data-target="#basic_search">Basic
												Search</a> --}}</td>
									</tr>
									<tr>
										<td class="flinks"><a data-toggle="modal" data-target="#advance_search" href="#" style="color: white; font-size: 14px; line-height: 30px;">Advance
												Search</a></td>
									</tr>
									<tr>
										<td class="flinks"><a href="#" data-toggle="modal" data-target="#keyword_search" style="color: white; font-size: 14px; line-height: 30px;">Keyword
												Search</a></td>
									</tr>
									<tr>
										<td class="flinks"><a data-toggle="modal" data-target="#job_search" href="#" style="color: white; font-size: 14px; line-height: 30px;">Occupational
												Search</a></td>
									</tr>
									<tr>
										<td class="flinks"><a href="#" data-toggle="modal" data-target="#edu_search" style="color: white; font-size: 14px; line-height: 30px;">Educational
												Search</a></td>
									</tr>
									<tr>
										<td class="flinks"><a href="#" data-toggle="modal" data-target="#id_search" style="color: white; font-size: 14px; line-height: 30px;">ID
												Search</a></td>
									</tr>
								</table>
							</div>

							<div class="col-md-3" style="margin-top: 30px;">
								<table>
									<tr>
										<th class="fhead" style="color: white; font-size: 14px; line-height: 30px;">Contact
											Us</th>
									</tr>
									<tr>
										<td class="flinks"><a href="#" style="color: white; font-size: 14px; line-height: 30px;">contact@kaboolhai.com</a></td>
									</tr>




									<!-- <tr>
                        <td class="flinks"><a href="#"> (PK): +92 423 570 0007</a></td>
                    </tr>
                    <tr>
                        <td class="flinks"><a href="#">Phase 6 DHA Lahore Pakistan
                        </a></td>
                    </tr> -->
									<tr>
										<td><br></td>
									</tr>
									<tr>
										<td class="flinks">
											<a href="https://www.facebook.com/Saykaboolhai/" target="__blank"><i class="fa fa-facebook-square fa-3x"
												 style="color:white;"></i></a> <a href="#"><i class="fa fa-youtube-square fa-3x" style="color:white;"></i></a>
											<a href="https://twitter.com/kaboolhaitweet" target="__blank"><i class="fa fa-twitter-square fa-3x" style="color:white;"></i></a>
											<i class="fa fa-google-plus-square fa-3x" style="color:white;"></i> <i class="fa fa-linkedin-square fa-3x"
											 style="color:white;"></i></a></td>
									</tr>

								</table>
							</div>

							<div class="col-md-3" style="margin-top: 30px;">
								<p class="fhead" style="color: white">Subscribe to Our Newsletters</p>
								<p class="subt" style="color: white; font-size: 14px; line-height: 30px;">Never miss
									our special offers</p>
								<div class="searchcontainer">
									<form action="">
										<label>
											<input type="search" class="searchfieldz register-footer-newsletter" placeholder="Enter Your Email " value=""
											 name="s" title="Search for:" autocomplete="off">
										</label>
										<button type="submit" class="searchButton rfn-btn">
											<i class="fa fa-search"></i>
										</button>
									</form>
								</div>
								<br>
								<div class="paymg">
									<img style="width: 100%;" alt="" src="{{ $user_assets }}/payment-methods.png" />
								</div>
							</div>
						</div>


						<div class="row" style="margin-top: 100px;">
							<div class="col-md-12">
								<table>
									<tr>
										<p style="color:#ffffff">Top Searches by:</p>
									</tr>
									<tr class="tpsrch">
										<th><a href="{{ url('pakistani') }}" style="color: white; font-weight: normal; padding: 0px 5px;
    font-size: 14px;">Pakistani
												Muslim Matrimony | </a></th>
										<th><a href="{{ url('UAE') }}" style="color: white; font-weight: normal; padding: 0px 5px;
    font-size: 14px;">UAE
												Muslim Matrimony | </a></th>
										<th><a href="{{ url('United-Kingdom') }}" style="color: white; font-weight: normal; padding: 0px 5px;
    font-size: 14px;">United
												Kingdom Muslim Matrimony | </a></th>
										<th><a href="{{ url('USA') }}" style="color: white; font-weight: normal; padding: 0px 5px;
    font-size: 14px;">USA
												Muslim Matrimony | </a></th>
										<th><a href="{{ url('canada') }}" style="border:none; color: white; font-weight: normal; padding: 0px 5px;
    font-size: 14px;">CANADA
												Muslim Matrimony</a></th>
									</tr>
								</table>
							</div>
						</div>


						<div class="top-searches-by">
							<div><a href="{{ url( 'pakistani') }}">Pakistani Muslim Matrimony</a></div>
							<div><a href="{{ url( 'UAE') }}">UAE Muslim Matrimony</a></div>
							<div><a href="{{ url( 'United-Kingdom') }}">United Kingdom Muslim Matrimony</a></div>
							<div><a href="{{ url( 'USA') }}">USA Muslim Matrimony Muslim Matrimony</a></div>
							<div><a href="{{ url( 'canada') }}">CANADA Muslim Matrimony</a></div>
					    </div>

						<!-- scroll to top -->
						<a href="javascript:;" class="scrollToTop"></a>
					</div>
					<!-- scroll to top End... -->


	</footer>
	</section>
	<div style="width:100%;background-color:#222;">
		<div class="container">
			<div class="row" style="padding-top:15px;padding-bottom: 15px;">
				<div class="col-md-6">
					<table>
						<tr class="dosrch">
							<th><a href="#" style="color: white; font-weight: normal; padding: 0px 5px;
    font-size: 14px;">Terms
									|</a></th>
							<th><a href="#" style="color: white; font-weight: normal; padding: 0px 5px;
    font-size: 14px;">Privacy
									Policy |</a></th>
							<th><a href="{{ url('sitemap') }}" style="border:none; color: white; font-weight: normal; padding: 0px 5px;
    font-size: 14px;">Site
									Map </a></th>
						</tr>
					</table>
				</div>

				<div class="col-md-6">
					<p class="pull-right" style="color:#ffffff;">&copy;2018 Kaboolhai. All rights reserved. Powered By
						<a style="color:white;" href="https://www.ranglerz.com/" target="_blank">Ranglerz</a></p>
				</div>
			</div>
		</div>
	</div>
	{{-- Basic Search --}}
	<div class="modal fade" data-backdrop="static" data-keyboard="false" id="basic_search" tabindex="-1" role="dialog"
	 aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document" style="margin-top: 100px;">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title tb-modal-title">
						<center>Basic Search </center>
					</h5>
				</div>
				<div class="modal-body">
					<form method="get" action="{{ url('user-search') }}">
						{{ csrf_field() }}
						<div class="row">
							<div class="col-md-3">
								<label>Looking for</label>

							</div>
							<div class="col-md-3">
								<div class="form-group">

									{{-- <label><input type="radio" name="optradio">Option 1</label> --}}
									<input type="radio" value="Female" name="loking_for"> Bride
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<input type="radio" value="Male" name="loking_for"> Groom

								</div>
							</div>
						</div>
						<br>

						<label>Age</label>

						<div class="row">
							<div class="col-md-5">
								<select name="age_from" class="form-control" style="width: 200PX">
									<option value="">Select</option>
									@for($i = date('y'); $i <= date('y')+82 ; $i++) <option value="{{ $i }}">{{ $i }}</option>
										@endfor
								</select>
							</div>
							<div class="col-md-1">
								To
							</div>
							<div class="col-md-5">
								<select name="age_to" class="form-control" style="width: 200px;">
									<option value="">Select</option>
									@for($i = date('y')+82; $i >= date('y'); $i--)
									<option value="{{ $i }}">{{ $i }}</option>
									@endfor
								</select>
							</div>
						</div>

						<div class="form-group">
							<label>Height</label>
						</div>
						<div class="row">
							<div class="col-md-5">
								<select name="height_from" class="form-control">
									<option value="">Height..</option>
									<option value="Below 4ft 6in - 137cm">Below 4ft 6in - 137cm</option>
									<option value="4ft 6in - 137cm">4ft 6in - 137cm</option>
									<option value="4ft 7in - 139cm">4ft 7in - 139cm</option>
									<option value="4ft 8in - 142cm">4ft 8in - 142cm</option>
									<option value="4ft 9in - 144cm">4ft 9in - 144cm</option>
									<option value="4ft 10in - 147cm">4ft 10in - 147cm</option>
									<option value="4ft 11in - 149cm">4ft 11in - 149cm</option>
									<option value="5ft - 152cm">5ft - 152cm</option>
									<option value="5ft 1in - 154cm">5ft 1in - 154cm</option>
									<option value="5ft 2in - 157cm">5ft 2in - 157cm</option>
									<option value="5ft 3in - 160cm">5ft 3in - 160cm</option>
									<option value="5ft 4in - 162cm">5ft 4in - 162cm</option>
									<option value="5ft 5in - 165cm">5ft 5in - 165cm</option>
									<option value="5ft 6in - 167cm">5ft 6in - 167cm</option>
									<option value="5ft 7in - 170cm">5ft 7in - 170cm</option>
									<option value="5ft 8in - 172cm">5ft 8in - 172cm</option>
									<option value="5ft 9in - 175cm">5ft 9in - 175cm</option>
									<option value="5ft 10in - 177cm">5ft 10in - 177cm</option>
									<option value="5ft 11in - 180cm">5ft 11in - 180cm</option>
									<option value="6ft - 182cm">6ft - 182cm</option>
									<option value="6ft 1in - 185cm">6ft 1in - 185cm</option>
									<option value="6ft 2in - 187cm">6ft 2in - 187cm</option>
									<option value="6ft 3in - 190cm">6ft 3in - 190cm</option>
									<option value="6ft 4in - 193cm">6ft 4in - 193cm</option>
									<option value="6ft 5in - 195cm">6ft 5in - 195cm</option>
									<option value="6ft 6in - 198cm">6ft 6in - 198cm</option>
									<option value="6ft 7in - 200cm">6ft 7in - 200cm</option>
									<option value="6ft 8in - 203cm">6ft 8in - 203cm</option>
									<option value="6ft 9in - 205cm">6ft 9in - 205cm</option>
									<option value="6ft 10in - 208cm">6ft 10in - 208cm</option>
									<option value="6ft 11in - 210cm">6ft 11in - 210cm</option>
									<option value="7ft - 213cm">7ft - 213cm</option>
									<option value="Above 7ft - 213c">Above 7ft - 213cm</option>
								</select>
							</div>
							<div class="col-md-1">
								To
							</div>
							<div class="col-md-5">
								<select name="height_to" class="form-control">
									<option value="">Height..</option>
									<option value="Below 4ft 6in - 137cm">Below 4ft 6in - 137cm</option>
									<option value="4ft 6in - 137cm">4ft 6in - 137cm</option>
									<option value="4ft 7in - 139cm">4ft 7in - 139cm</option>
									<option value="4ft 8in - 142cm">4ft 8in - 142cm</option>
									<option value="4ft 9in - 144cm">4ft 9in - 144cm</option>
									<option value="4ft 10in - 147cm">4ft 10in - 147cm</option>
									<option value="4ft 11in - 149cm">4ft 11in - 149cm</option>
									<option value="5ft - 152cm">5ft - 152cm</option>
									<option value="5ft 1in - 154cm">5ft 1in - 154cm</option>
									<option value="5ft 2in - 157cm">5ft 2in - 157cm</option>
									<option value="5ft 3in - 160cm">5ft 3in - 160cm</option>
									<option value="5ft 4in - 162cm">5ft 4in - 162cm</option>
									<option value="5ft 5in - 165cm">5ft 5in - 165cm</option>
									<option value="5ft 6in - 167cm">5ft 6in - 167cm</option>
									<option value="5ft 7in - 170cm">5ft 7in - 170cm</option>
									<option value="5ft 8in - 172cm">5ft 8in - 172cm</option>
									<option value="5ft 9in - 175cm">5ft 9in - 175cm</option>
									<option value="5ft 10in - 177cm">5ft 10in - 177cm</option>
									<option value="5ft 11in - 180cm">5ft 11in - 180cm</option>
									<option value="6ft - 182cm">6ft - 182cm</option>
									<option value="6ft 1in - 185cm">6ft 1in - 185cm</option>
									<option value="6ft 2in - 187cm">6ft 2in - 187cm</option>
									<option value="6ft 3in - 190cm">6ft 3in - 190cm</option>
									<option value="6ft 4in - 193cm">6ft 4in - 193cm</option>
									<option value="6ft 5in - 195cm">6ft 5in - 195cm</option>
									<option value="6ft 6in - 198cm">6ft 6in - 198cm</option>
									<option value="6ft 7in - 200cm">6ft 7in - 200cm</option>
									<option value="6ft 8in - 203cm">6ft 8in - 203cm</option>
									<option value="6ft 9in - 205cm">6ft 9in - 205cm</option>
									<option value="6ft 10in - 208cm">6ft 10in - 208cm</option>
									<option value="6ft 11in - 210cm">6ft 11in - 210cm</option>
									<option value="7ft - 213cm">7ft - 213cm</option>
									<option value="Above 7ft - 213c">Above 7ft - 213cm</option>
								</select>
							</div>
						</div>
						<br>
						<div class="pull-right">
							<button type="button" class="btn btn-secondary" data-dismiss="modal" style="padding: 5px; background-color: red;">Close</button>
							<button type="submit" class="btn btn-success" style="padding:5px; background-color: green; ">Search</button>
						</div>
						<div class="clearfix"></div>
					</form>
				</div>
			</div>
		</div>
	</div>
	{{-- advance search --}}
	<div class="modal fade" data-backdrop="static" data-keyboard="false" id="advance_search" tabindex="-1" role="dialog"
	 aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document" style="margin-top: 100px;">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title tb-modal-title">
						<center>Search by Advance info</center>
					</h5>
				</div>
				<div class="modal-body">
					<form method="get" action="{{ url('user-search') }}">
						{{ csrf_field() }}
						<div class="row">
							<div class="col-md-3">
								<label>Looking for</label>

							</div>
							<div class="col-md-3">
								<div class="form-group">

									{{-- <label><input type="radio" name="optradio">Option 1</label> --}}
									<input type="radio" value="Female" name="loking_for"> Bride
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<input type="radio" value="Male" name="loking_for"> Groom

								</div>
							</div>
						</div>
						<br>
						<div class="form-group">
							<label>Age</label>
						</div>
						<div class="row">
							<div class="col-md-5">
								<select name="age_from" class="form-control" style="width: 200px;">
									<option value="">Select</option>
									@for($i = date('y'); $i <= date('y')+82 ; $i++) <option value="{{ $i }}">{{ $i }}</option>
										@endfor
								</select>
							</div>
							<div class="col-md-1">
								To
							</div>
							<div class="col-md-5">
								<select name="age_to" class="form-control" style="width: 200px;">
									<option value="">Select</option>
									@for($i = date('y')+82; $i >= date('y'); $i--)
									<option value="{{ $i }}">{{ $i }}</option>
									@endfor
								</select>
							</div>
						</div>
						<br>
						<div class="row">

							<div class="col-md-4">
								<label>Martial Status</label>

							</div>
							<div class="col-md-4">
								<div class="form-group">
									<input type="radio" value="Unmaried" name="martial_status"> Unmaried
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<input type="radio" value="Widow Widower" name="martial_status"> Widow/Widower
								</div>
							</div>
							<div class="col-md-4"></div>
							<div class="col-md-4">
								<div class="form-group">
									<input type="radio" value="Divorcee" name="martial_status"> Divorcee
								</div>
							</div>



							<div class="col-md-4">
								<div class="form-group">
									<input type="radio" value="Seprated" name="martial_status"> Seprated
								</div>
							</div>
							<div class="col-md-4"></div>
							<div class="col-md-4">
								<div class="form-group">
									<input type="radio" value="Annulled" name="martial_status"> Annulled
								</div>
							</div>

						</div>

						<br>
						<div class="form-group">
							<label>Height</label>
						</div>
						<div class="row">
							<div class="col-md-5">
								<select name="height_from" class="form-control">
									<option value="">Height..</option>
									<option value="Below 4ft 6in - 137cm">Below 4ft 6in - 137cm</option>
									<option value="4ft 6in - 137cm">4ft 6in - 137cm</option>
									<option value="4ft 7in - 139cm">4ft 7in - 139cm</option>
									<option value="4ft 8in - 142cm">4ft 8in - 142cm</option>
									<option value="4ft 9in - 144cm">4ft 9in - 144cm</option>
									<option value="4ft 10in - 147cm">4ft 10in - 147cm</option>
									<option value="4ft 11in - 149cm">4ft 11in - 149cm</option>
									<option value="5ft - 152cm">5ft - 152cm</option>
									<option value="5ft 1in - 154cm">5ft 1in - 154cm</option>
									<option value="5ft 2in - 157cm">5ft 2in - 157cm</option>
									<option value="5ft 3in - 160cm">5ft 3in - 160cm</option>
									<option value="5ft 4in - 162cm">5ft 4in - 162cm</option>
									<option value="5ft 5in - 165cm">5ft 5in - 165cm</option>
									<option value="5ft 6in - 167cm">5ft 6in - 167cm</option>
									<option value="5ft 7in - 170cm">5ft 7in - 170cm</option>
									<option value="5ft 8in - 172cm">5ft 8in - 172cm</option>
									<option value="5ft 9in - 175cm">5ft 9in - 175cm</option>
									<option value="5ft 10in - 177cm">5ft 10in - 177cm</option>
									<option value="5ft 11in - 180cm">5ft 11in - 180cm</option>
									<option value="6ft - 182cm">6ft - 182cm</option>
									<option value="6ft 1in - 185cm">6ft 1in - 185cm</option>
									<option value="6ft 2in - 187cm">6ft 2in - 187cm</option>
									<option value="6ft 3in - 190cm">6ft 3in - 190cm</option>
									<option value="6ft 4in - 193cm">6ft 4in - 193cm</option>
									<option value="6ft 5in - 195cm">6ft 5in - 195cm</option>
									<option value="6ft 6in - 198cm">6ft 6in - 198cm</option>
									<option value="6ft 7in - 200cm">6ft 7in - 200cm</option>
									<option value="6ft 8in - 203cm">6ft 8in - 203cm</option>
									<option value="6ft 9in - 205cm">6ft 9in - 205cm</option>
									<option value="6ft 10in - 208cm">6ft 10in - 208cm</option>
									<option value="6ft 11in - 210cm">6ft 11in - 210cm</option>
									<option value="7ft - 213cm">7ft - 213cm</option>
									<option value="Above 7ft - 213c">Above 7ft - 213cm</option>
								</select>
							</div>
							<div class="col-md-1">
								To
							</div>
							<div class="col-md-5">
								<select name="height_to" class="form-control">
									<option value="">Height..</option>
									<option value="Below 4ft 6in - 137cm">Below 4ft 6in - 137cm</option>
									<option value="4ft 6in - 137cm">4ft 6in - 137cm</option>
									<option value="4ft 7in - 139cm">4ft 7in - 139cm</option>
									<option value="4ft 8in - 142cm">4ft 8in - 142cm</option>
									<option value="4ft 9in - 144cm">4ft 9in - 144cm</option>
									<option value="4ft 10in - 147cm">4ft 10in - 147cm</option>
									<option value="4ft 11in - 149cm">4ft 11in - 149cm</option>
									<option value="5ft - 152cm">5ft - 152cm</option>
									<option value="5ft 1in - 154cm">5ft 1in - 154cm</option>
									<option value="5ft 2in - 157cm">5ft 2in - 157cm</option>
									<option value="5ft 3in - 160cm">5ft 3in - 160cm</option>
									<option value="5ft 4in - 162cm">5ft 4in - 162cm</option>
									<option value="5ft 5in - 165cm">5ft 5in - 165cm</option>
									<option value="5ft 6in - 167cm">5ft 6in - 167cm</option>
									<option value="5ft 7in - 170cm">5ft 7in - 170cm</option>
									<option value="5ft 8in - 172cm">5ft 8in - 172cm</option>
									<option value="5ft 9in - 175cm">5ft 9in - 175cm</option>
									<option value="5ft 10in - 177cm">5ft 10in - 177cm</option>
									<option value="5ft 11in - 180cm">5ft 11in - 180cm</option>
									<option value="6ft - 182cm">6ft - 182cm</option>
									<option value="6ft 1in - 185cm">6ft 1in - 185cm</option>
									<option value="6ft 2in - 187cm">6ft 2in - 187cm</option>
									<option value="6ft 3in - 190cm">6ft 3in - 190cm</option>
									<option value="6ft 4in - 193cm">6ft 4in - 193cm</option>
									<option value="6ft 5in - 195cm">6ft 5in - 195cm</option>
									<option value="6ft 6in - 198cm">6ft 6in - 198cm</option>
									<option value="6ft 7in - 200cm">6ft 7in - 200cm</option>
									<option value="6ft 8in - 203cm">6ft 8in - 203cm</option>
									<option value="6ft 9in - 205cm">6ft 9in - 205cm</option>
									<option value="6ft 10in - 208cm">6ft 10in - 208cm</option>
									<option value="6ft 11in - 210cm">6ft 11in - 210cm</option>
									<option value="7ft - 213cm">7ft - 213cm</option>
									<option value="Above 7ft - 213c">Above 7ft - 213cm</option>
								</select>
							</div>
						</div>
						<br>
						<div class="form-group">
							<label>caste</label>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input type="text" name="cast" class="form-control" placeholder="Caste" style="width: 400px;">
							</div>
						</div>

						<div class="form-group">
							<label>Mother Language</label>
						</div>
						<div class="row">
							<div class="col-md-12">
								<select name="language" class="form-control" style="width: 400px;">
									<option value="">..Select..</option>
									<option value="Urdu">Urdu</option>
									<option value="Punjabi">Punjabi</option>
									<option value="Pashto">Pashto</option>
									<option value="Sindhi">Sindhi</option>
									<option value="Saraiki">Saraiki</option>
									<option value="Balochi">Balochi</option>
									<option value="Hindko">Hindko</option>
									<option value="English">English</option>
									<option disabled="">..............................................................</option>
									<option value="Malayalam">Malayalam</option>
									<option value="Aka">Aka</option>
									<option value="Angika">Angika</option>
									<option value="Arabic">Arabic</option>
									<option value="Arunachali">Arunachali</option>
									<option value="Assamese">Assamese</option>
									<option value="Awadhi">Awadhi</option>
									<option value="Badaga">Badaga</option>
									<option value="Bengali">Bengali </option>
									<option value="Bhojpuri">Bhojpuri</option>
									<option value="Bihari">Bihari</option>
									<option value="Brij">Brij</option>
									<option value="Chatisgarhi">Chatisgarhi</option>
									<option value="Coorgi">Coorgi</option>
									<option value="Dogri">Dogri</option>
									<option value="French">French</option>
									<option value="Garhwali">Garhwali</option>
									<option value="Garo">Garo</option>
									<option value="Gujarati">Gujarati</option>
									<option value="Haryanvi">Haryanvi</option>
									<option value="Himachali/Pahari">Himachali/Pahari</option>
									<option value="Hindi">Hindi</option>
									<option value="Hindko">Hindko</option>
									<option value="Kanauji">Kanauji</option>
									<option value="Kannada">Kannada</option>
									<option value="Kashmiri">Kashmiri</option>
									<option value="Khandesi">Khandesi</option>
									<option value="Khasi">Khasi</option>
									<option value="Konkani">Konkani</option>
									<option value="Koshali">Koshali</option>
									<option value="Kumaoni">Kumaoni</option>
									<option value="Kutchi">Kutchi</option>
									<option value="Ladacki">Ladacki</option>
									<option value="Lepcha">Lepcha</option>
									<option value="Magahi">Magahi</option>
									<option value="Maithili">Maithili</option>
									<option value="Malay">Malay</option>
									<option value="Malayalam">Malayalam</option>
									<option value="Manipuri">Manipuri</option>
									<option value="Marathi">Marathi</option>
									<option value="Marwari">Marwari</option>
									<option value="Miji">Miji</option>
									<option value="Miza">Miza</option>
									<option value="Monpa">Monpa</option>
									<option value="Nepali">Nepali</option>
									<option value="Nicobarese">Nicobarese</option>
									<option value="Oriya">Oriya</option>
									<option value="Persian">Persian</option>
									<option value="Rajasthani">Rajasthani</option>
									<option value="Russian">Russian</option>
									<option value="Sanskrit">Sanskrit</option>
									<option value="Santhali">Santhali</option>
									<option value="Sinhala">Sinhala</option>
									<option value="Sourashtra">Sourashtra</option>
									<option value="Spanish">Spanish</option>
									<option value="Tamil">Tamil</option>
									<option value="Telugu">Telugu</option>
									<option value="Tripuri">Tripuri</option>
									<option value="Tulu">Tulu</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label>Religion</label>
						</div>
						<div class="row">
							<div class="col-md-12">
								<select name="religiousness" class="form-control" style="width: 400px;">
									<option value="">..Select..</option>
									<option value="">Please select..</option>
									<option value="Very religious">Very religious</option>
									<option value="Religious">Religious</option>
									<option value="Not religious">Not religious</option>
									<option value="Prefer not to say">Prefer not to say</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label>Financial Status</label>
						</div>
						<div class="row">
							<div class="col-md-12">
								<select name="financial_status" class="form-control" style="width: 400px;">
									<option value="">Please select..</option>
									<option value="Rich">Rich</option>
									<option value="Upper Middle Class">Upper Middle Class</option>
									<option value="Middle Class">Middle Class</option>
									<option value="Lower Upper Middle Class">Lower Upper Middle Class</option>
									<option value="Do not want to tell at this time">Do not want to tell at this time</option>
								</select>
							</div>
						</div>
						<br>
						<div class="pull-right">
							<button type="button" class="btn btn-secondary" data-dismiss="modal" style="padding:5px; background-color: red;">Close</button>
							<button type="submit" class="btn btn-success" style="padding:5px; background-color: green; ">Search</button>
						</div>
						<div class="clearfix"></div>
					</form>
				</div>
			</div>
		</div>
	</div>
	{{-- Keyword search --}}
	<div class="modal fade" data-backdrop="static" data-keyboard="false" id="keyword_search" tabindex="-1" role="dialog"
	 aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document" style="margin-top: 100px;">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title tb-modal-title">
						<center>Search by Keyword</center>
					</h5>
				</div>
				<div class="modal-body">
					<form method="get" action="{{ url('user-search') }}">
						{{ csrf_field() }}
						<div class="form-group">
							<label>User Name</label>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input type="text" name="user_name" class="form-control" placeholder="user name">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-3">
								<label>Looking for</label>

							</div>
							<div class="col-md-3">
								<div class="form-group">

									{{-- <label><input type="radio" name="optradio">Option 1</label> --}}
									<input type="radio" value="Female" name="loking_for"> Bride
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<input type="radio" value="Male" name="loking_for"> Groom

								</div>
							</div>
						</div>
						<br>
						<div class="form-group">
							<label>Age</label>
						</div>
						<div class="row">
							<div class="col-md-5">
								<select name="age_from" class="form-control" style="width: 200px">
									<option value="">Select</option>
									@for($i = date('y'); $i <= date('y')+82 ; $i++) <option value="{{ $i }}">{{ $i }}</option>
										@endfor
								</select>
							</div>
							<div class="col-md-1">
								To
							</div>
							<div class="col-md-5">
								<select name="age_to" class="form-control" style="width: 200px;">
									<option value="">Select</option>
									@for($i = date('y')+82; $i >= date('y'); $i--)
									<option value="{{ $i }}">{{ $i }}</option>
									@endfor
								</select>
							</div>
						</div>
						<br>
						<div class="row">

							<div class="col-md-4">
								<label>Martial Status</label>

							</div>
							<div class="col-md-4">
								<div class="form-group">
									<input type="radio" value="Unmaried" name="martial_status"> Unmaried
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<input type="radio" value="Widow Widower" name="martial_status"> Widow/Widower
								</div>
							</div>
							<div class="col-md-4"></div>
							<div class="col-md-4">
								<div class="form-group">
									<input type="radio" value="Divorcee" name="martial_status"> Divorcee
								</div>
							</div>



							<div class="col-md-4">
								<div class="form-group">
									<input type="radio" value="Seprated" name="martial_status"> Seprated
								</div>
							</div>
							<div class="col-md-4"></div>
							<div class="col-md-4">
								<div class="form-group">
									<input type="radio" value="Annulled" name="martial_status"> Annulled
								</div>
							</div>

						</div>

						<br>
						<div class="form-group">
							<label>Height</label>
						</div>
						<div class="row">
							<div class="col-md-5">
								<select name="height_from" class="form-control">
									<option value="">Height..</option>
									<option value="Below 4ft 6in - 137cm">Below 4ft 6in - 137cm</option>
									<option value="4ft 6in - 137cm">4ft 6in - 137cm</option>
									<option value="4ft 7in - 139cm">4ft 7in - 139cm</option>
									<option value="4ft 8in - 142cm">4ft 8in - 142cm</option>
									<option value="4ft 9in - 144cm">4ft 9in - 144cm</option>
									<option value="4ft 10in - 147cm">4ft 10in - 147cm</option>
									<option value="4ft 11in - 149cm">4ft 11in - 149cm</option>
									<option value="5ft - 152cm">5ft - 152cm</option>
									<option value="5ft 1in - 154cm">5ft 1in - 154cm</option>
									<option value="5ft 2in - 157cm">5ft 2in - 157cm</option>
									<option value="5ft 3in - 160cm">5ft 3in - 160cm</option>
									<option value="5ft 4in - 162cm">5ft 4in - 162cm</option>
									<option value="5ft 5in - 165cm">5ft 5in - 165cm</option>
									<option value="5ft 6in - 167cm">5ft 6in - 167cm</option>
									<option value="5ft 7in - 170cm">5ft 7in - 170cm</option>
									<option value="5ft 8in - 172cm">5ft 8in - 172cm</option>
									<option value="5ft 9in - 175cm">5ft 9in - 175cm</option>
									<option value="5ft 10in - 177cm">5ft 10in - 177cm</option>
									<option value="5ft 11in - 180cm">5ft 11in - 180cm</option>
									<option value="6ft - 182cm">6ft - 182cm</option>
									<option value="6ft 1in - 185cm">6ft 1in - 185cm</option>
									<option value="6ft 2in - 187cm">6ft 2in - 187cm</option>
									<option value="6ft 3in - 190cm">6ft 3in - 190cm</option>
									<option value="6ft 4in - 193cm">6ft 4in - 193cm</option>
									<option value="6ft 5in - 195cm">6ft 5in - 195cm</option>
									<option value="6ft 6in - 198cm">6ft 6in - 198cm</option>
									<option value="6ft 7in - 200cm">6ft 7in - 200cm</option>
									<option value="6ft 8in - 203cm">6ft 8in - 203cm</option>
									<option value="6ft 9in - 205cm">6ft 9in - 205cm</option>
									<option value="6ft 10in - 208cm">6ft 10in - 208cm</option>
									<option value="6ft 11in - 210cm">6ft 11in - 210cm</option>
									<option value="7ft - 213cm">7ft - 213cm</option>
									<option value="Above 7ft - 213c">Above 7ft - 213cm</option>
								</select>
							</div>
							<div class="col-xs-1 text-center">
								To
							</div>
							<div class="col-md-5">
								<select name="height_to" class="form-control">
									<option value="">Height..</option>
									<option value="Below 4ft 6in - 137cm">Below 4ft 6in - 137cm</option>
									<option value="4ft 6in - 137cm">4ft 6in - 137cm</option>
									<option value="4ft 7in - 139cm">4ft 7in - 139cm</option>
									<option value="4ft 8in - 142cm">4ft 8in - 142cm</option>
									<option value="4ft 9in - 144cm">4ft 9in - 144cm</option>
									<option value="4ft 10in - 147cm">4ft 10in - 147cm</option>
									<option value="4ft 11in - 149cm">4ft 11in - 149cm</option>
									<option value="5ft - 152cm">5ft - 152cm</option>
									<option value="5ft 1in - 154cm">5ft 1in - 154cm</option>
									<option value="5ft 2in - 157cm">5ft 2in - 157cm</option>
									<option value="5ft 3in - 160cm">5ft 3in - 160cm</option>
									<option value="5ft 4in - 162cm">5ft 4in - 162cm</option>
									<option value="5ft 5in - 165cm">5ft 5in - 165cm</option>
									<option value="5ft 6in - 167cm">5ft 6in - 167cm</option>
									<option value="5ft 7in - 170cm">5ft 7in - 170cm</option>
									<option value="5ft 8in - 172cm">5ft 8in - 172cm</option>
									<option value="5ft 9in - 175cm">5ft 9in - 175cm</option>
									<option value="5ft 10in - 177cm">5ft 10in - 177cm</option>
									<option value="5ft 11in - 180cm">5ft 11in - 180cm</option>
									<option value="6ft - 182cm">6ft - 182cm</option>
									<option value="6ft 1in - 185cm">6ft 1in - 185cm</option>
									<option value="6ft 2in - 187cm">6ft 2in - 187cm</option>
									<option value="6ft 3in - 190cm">6ft 3in - 190cm</option>
									<option value="6ft 4in - 193cm">6ft 4in - 193cm</option>
									<option value="6ft 5in - 195cm">6ft 5in - 195cm</option>
									<option value="6ft 6in - 198cm">6ft 6in - 198cm</option>
									<option value="6ft 7in - 200cm">6ft 7in - 200cm</option>
									<option value="6ft 8in - 203cm">6ft 8in - 203cm</option>
									<option value="6ft 9in - 205cm">6ft 9in - 205cm</option>
									<option value="6ft 10in - 208cm">6ft 10in - 208cm</option>
									<option value="6ft 11in - 210cm">6ft 11in - 210cm</option>
									<option value="7ft - 213cm">7ft - 213cm</option>
									<option value="Above 7ft - 213c">Above 7ft - 213cm</option>
								</select>
							</div>
						</div>
						<br>
						<div class="pull-right">
							<button type="button" class="btn btn-secondary" data-dismiss="modal" style="padding: 5px; background-color: red">Close</button>
							<button type="submit" class="btn btn-success" style="padding: 5px; background-color: green;">Search</button>
						</div>
						<div class="clearfix"></div>
					</form>
				</div>
			</div>
		</div>
	</div>
	{{-- Job search --}}
	<div class="modal fade" data-backdrop="static" data-keyboard="false" id="job_search" tabindex="-1" role="dialog"
	 aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Search by Occupation</h5>
				</div>
				<div class="modal-body">
					<form method="get" action="{{ url('user-search') }}">
						{{ csrf_field() }}
						<div class="form-group">
							<label class="col-form-label">Search Occupation</label>
							<select name="job" class="job form-control">
								<option value="Softwarw Engineer">Softwarw Engineer</option>
								<option value="Producer/Director">Producer/Director</option>
								<option value="Media">Media</option>
								<option value="Marketing Manager">Marketing Manager</option>
								<option value="HR Manager">HR Manager</option>
								<option value="Lawyer">Lawyer</option>
								<option value="I.T Porfissional">I.T Porfissional</option>
								<option value="Teacher">Teacher</option>
								<option value="University Lacturer">University Lacturer</option>
								<option value="Business Administration">Business Administration</option>
								<option value="Admin Officer"> Admin Officer</option>
								<option value="Cival Engineer">Cival Engineer </option>
								<option value="Electrical Engineer">Electrical Engineer</option>
								{{--
								<option value="MBBS">MBBS</option>
								--}}
								<option value="Doctor">Doctor</option>
								<option value="BBA">BBA</option>
								<option value="Chartered Accountant">Chartered Accountant</option>
								<option value="CSS Officer">CSS Officer </option>
								<option value="No Occupation">No Occupation </option>
								<option value="Business">Business</option>
								<option value="Pilot">Pilot</option>
								<option value="Police Officer">Police Officer</option>
								<option value="Army Officer">Army Officer</option>
								<option value="Air Force">Air Force</option>
								<option value="Designer">Designer</option>
								<option value="Computer Hardware">Computer Hardware</option>
								<option value="Auto Mobile">Auto Mobile</option>
								<option value="Traffic Warden">Traffic Warden</option>
								<option value="Farmer">Farmer</option>
								<option value="Shop Keeper">Shop Keeper</option>
								<option value="Real Estate">Real Estate</option>
							</select>
						</div>
						<div class="pull-right">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-success">Search</button>
						</div>
						<div class="clearfix"></div>
					</form>
				</div>
			</div>
		</div>
	</div>
	{{-- education search modal --}}
	<div class="modal fade" data-backdrop="static" data-keyboard="false" id="edu_search" tabindex="-1" role="dialog"
	 aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document" style="margin-top: 100px;">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Search by education</h5>
				</div>
				<div class="modal-body">
					<form method="get" action="{{ url('user-search') }}">
						{{ csrf_field() }}
						<div class="form-group">
							<label class="col-form-label">Search education</label>
							<select name="qualification" id="" class="qualification form-control">
								<option selected="selected" value="">--- Select ---</option>
								<optgroup label='Bachelors - Engineering/Computer'>
									<option value='BCA'>BCA</option>
									<option value='B Arch'>B Arch</option>
									<option value='B Plan'>B Plan</option>
									<option value='BE'>BE</option>
									<option value='B Tech'>B Tech</option>
									<option value='Aeronautical Engineering'>Aeronautical Engineering</option>
									<option value='BSc Computer Science'>BSc Computer Science</option>
									<option value='BSc IT'>BSc IT</option>
									<option value='Bachelor of Engineering'>Bachelor of Engineering</option>
								</optgroup>
								<optgroup label='Masters - Engineering/Computer'>
									<option value='MS (Engg.)'>MS (Engg.)</option>
									<option value='M Arch'>M Arch</option>
									<option value='MCA'>MCA</option>
									<option value='PGDCA'>PGDCA</option>
									<option value='ME'>ME</option>
									<option value='M Tech'>M Tech</option>
									<option value='MSc Computer Science'>MSc Computer Science</option>
									<option value='MSc IT'>MSc IT</option>
									<option value='Master of Engineering'>Master of Engineering</option>
								</optgroup>
								<optgroup label='Bachelors - Arts/Science/Commerce/Other'>
									<option value='B Phil'>B Phil</option>
									<option value='B Com'>B Com</option>
									<option value='BSc'>BSc</option>
									<option value='BA'>BA</option>
									<option value='BFA'>BFA</option>
									<option value='BLIS'>BLIS</option>
									<option value='BSW'>BSW</option>
									<option value='BMM (MASS MEDIA)'>BMM (MASS MEDIA)</option>
									<option value='Bachelors Degree'>Bachelors Degree</option>
								</optgroup>
								<optgroup label='Masters - Arts/Science/Commerce/Other'>
									<option value='M Phil'>M Phil</option>
									<option value='M Com'>M Com</option>
									<option value='M Sc'>M Sc</option>
									<option value='MA'>MA</option>
									<option value='MLIS'>MLIS</option>
									<option value='MSW'>MSW</option>
									<option value='Masters Degree'>Masters Degree</option>
								</optgroup>
								<optgroup label='Teachers Education - BEd/MEd'>
									<option value='BEd'>BEd</option>
									<option value='MEd'>MEd</option>
								</optgroup>
								<optgroup label='Management - MBA/BBA/Other'>
									<option value='MHM'>MHM</option>
									<option value='MBA'>MBA</option>
									<option value='PGDM'>PGDM</option>
									<option value='MFM (Financial Management)'>MFM (Financial Management)</option>
									<option value='Master Degree in Management'>Master Degree in Management</option>
									<option value='BHM'>BHM</option>
									<option value='BBA'>BBA</option>
									<option value='BFM (Financial Management)'>BFM (Financial Management)</option>
									<option value='Bachelor Degree in Management'>Bachelor Degree in Management</option>
								</optgroup>
								<optgroup label='Medicine - MBBS/MD/MS'>
									<option value='MBBS'>MBBS</option>
									<option value='MD / MS (Medical)'>MD / MS (Medical)</option>
									<option value='MCh - Master of Chirurgiae'>MCh - Master of Chirurgiae</option>
									<option value='DM - Doctorate of Medicine'>DM - Doctorate of Medicine</option>
								</optgroup>
								<optgroup label='Medicine - Dental/Homeo/Ayu/Vet'>
									<option value='BDS'>BDS</option>
									<option value='MDS'>MDS</option>
									<option value='BHMS'>BHMS</option>
									<option value='MHMS'>MHMS</option>
									<option value='BAMS'>BAMS</option>
									<option value='MAMS'>MAMS</option>
									<option value='Bachelor of Veterinary Science'>Bachelor of Veterinary Science</option>
									<option value='Master of Veterinary Science'>Master of Veterinary Science</option>
									<option value='Degree in Medicine'>Degree in Medicine</option>
									<option value='Master in Medicine'>Master in Medicine</option>
								</optgroup>
								<optgroup label='Medicine - Pharmacy/Nursing/Lab/Health'>
									<option value='BPT'>BPT</option>
									<option value='MPT'>MPT</option>
									<option value='B.Pharm'>B.Pharm</option>
									<option value='M.Pharm'>M.Pharm</option>
									<option value='BSc Nursing'>BSc Nursing</option>
									<option value='MSc Nursing'>MSc Nursing</option>
									<option value='Medical Course'>Medical Course</option>
									<option value='Diploma in Nursing'>Diploma in Nursing</option>
									<option value='Medical Laboratory Technology'>Medical Laboratory Technology</option>
								</optgroup>
								<optgroup label='Legal - BL/ML/LLB/LLM'>
									<option value='BGL'>BGL</option>
									<option value='Bachelor of Law'>Bachelor of Law</option>
									<option value='LLB'>LLB</option>
									<option value='Master of Law'>Master of Law</option>
									<option value='LLM'>LLM</option>
									<option value='Course in Legal'>Course in Legal</option>
								</optgroup>
								<optgroup label='Finance - CA/ICWAI/CS'>
									<option value='CA Inter'>CA Inter</option>
									<option value='CA Final'>CA Final</option>
									<option value='ICWA'>ICWA</option>
									<option value='Company Secretary (CS)' S>Company Secretary (CS)</option>
									<option value='CFA (Chartered Financial Analyst)'>CFA (Chartered Financial Analyst)</option>
									<option value='Course in Finance'>Course in Finance</option>
								</optgroup>
								<optgroup label='Doctorate'>
									<option value='Ph D'>Ph D</option>
								</optgroup>
								<optgroup label='Civil Service'>
									<option value='IAS'>IAS</option>
									<option value='IPS'>IPS</option>
									<option value='IRS'>IRS</option>
									<option value='154'>IES</option>
									<option value='155'>IFS</option>
									<option value='156'>Civil Service</option>
								</optgroup>
								<optgroup label='Diploma'>
									<option value='Diploma'>Diploma</option>
									<option value='Polytechnic'>Polytechnic</option>
								</optgroup>
								<optgroup label='Higher Secondery/TTC/ITI'>
									<option value='TTC'>TTC</option>
									<option value='ITI'>ITI</option>
									<option value='Higher Secondery'>Higher Secondery</option>
								</optgroup>
								<optgroup label='Other Education'>
									<option value='High School'>High School</option>
									<option value='Less than high school'>Less than high school</option>
									<option value='Other Education'>Other Education</option>
								</optgroup>
							</select>
						</div>
						<div class="pull-right">
							<button type="button" class="btn btn-secondary" data-dismiss="modal" style="padding: 5px; background-color: red;">Close</button>
							<button type="submit" class="btn btn-success" style="padding:5px; background-color: green; ">Search</button>
						</div>
						<div class="clearfix"></div>
					</form>
				</div>
			</div>
		</div>
	</div>
	{{-- id search modal --}}
	<div class="modal fade" data-backdrop="static" data-keyboard="false" id="id_search" tabindex="-1" role="dialog"
	 aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document" style="margin-top: 100px;">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Search by user name</h5>
				</div>
				<div class="modal-body">
					<form method="get" action="{{ url('user-search') }}">
						{{ csrf_field() }}
						<div class="form-group">
							<label class="col-form-label">User name search</label>
							<input type="text" placeholder="search by name or user name" class="form-control" name="user_name">
						</div>
						<div class="pull-right">
							<button type="button" class="btn btn-secondary" data-dismiss="modal" style="padding: 5px; background-color: red;">Close</button>
							<button type="submit" class="btn btn-success" style="padding: 5px; background-color: green;">Search</button>
						</div>
						<div class="clearfix"></div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- <script src="{{ $user_assets }}/js/bootstrap.min.js"></script> -->
	@stack('js')
</body>

</html>