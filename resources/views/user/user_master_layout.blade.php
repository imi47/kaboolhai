<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from usman.kaboolhai.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Oct 2017 06:36:01 GMT -->

<head>
	<title>Kaboolhai</title>


	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta charset="utf-8">
	<meta name="author" content="">
	<meta name="robots" content="noindex, nofollow">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
	<!--  <link rel="stylesheet" href="{{ $user_assets }}/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="{{ $user_assets }}/css/style3.css" />

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">

	<style>
		.top-searches-by div > a {
			color:#fff !important;
		}

		html, body {
			overflow-x:hidden;
		}

		/* .logo {
			width:40px !important;
		} */

		section .row .blockcontain .frownumdiv .textowndiv {
			color:#fff !important;
		}

		@media (max-width:430px) {
			#logindivv {
				width:100vw;
			}
		}
		
		.top-searches-by div{
			border-bottom:1px solid #fff;
			padding:10px;
		}
		@media (max-width:1250px) {
			/* .main-nav {
                display:none;
            } */
			.navbar-header {
				position: absolute;
				top: -8px;
				right: 20px;
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

    @media (max-width:1066px) {
      .main-nav {
        display:none;
      }

       .navbar-toggle {
        display:block !important;
        background: #000 !important;
      }

      .navbar-toggle .icon-bar {
        background-color:#fff !important;
      }

		#username {
			color:#fff;
			position:absolute;
			top:25px;
			right:60px;
			font-weight:600;
			letter-spacing:1px;
			font-size:1.2em;
		}
    }
        
        #login-div-x {
         position: absolute;
        font-size:large;
        font-weight: bold;
        top: 0;
        right: 0;
        cursor: pointer;
    }

    #navsidebare {
		overflow:scroll;
		height:100vh;
		overflow-x:hidden;
		opacity:0.9;
		background-color:#000;
    }

    .navbar-container {
      /* margin:0 !important; */
      width:100% !important;
    }
    
    .navbar-container .main-nav .navbar-collapse{
      float:right !important;
    }

    /* .main-nav .navbar-collapse #accordion {
      float:right;
    } */

	#logindivv {
		position:fixed;
		top:0;
		/* left:0; */
		right:0;
		/* bottom:0; */
		margin-right:0;
	}

	.remove-top-margin {
		margin-top:-70px;
	}

	.remove-top-margin:last-child {
		margin-top:-43px;
	}

	li.signin1 {
		margin-top:80px;
	}

	#accordion {
		/* float:l !important; */
	}

	.growsec {
    background-image: url(../back.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    width: 100%;
}

	section.wow.fadeIn.padding-two-bottom.growsec.animated .container .row .row div.col-sm-3
   {
   margin-bottom:50px;
}

	@media (max-width:768px) {
		.copyright p {
			float:none !important;
			margin-top:15px;
			margin-left:8px;
		}

		footer .pull-right {
			float:left !important;
		}

		.blog-div-orange:hover .orange-hover-div, .blog-div-green:hover .green-hover-div {
			opacity:0.7 !important;
			padding:41% 0;
			box-sizing:border-box;
		}

		.blog-div-orange:hover .orange-hover-div i, .blog-div-green:hover .green-hover-div i{
			opacity:1 !important;
		}

		section {
			margin-top:0 !important;
		}

		footer section .container .row {
			padding:0 15px;
		}

		footer .container-fluid.footer-middle {
			margin-left:0 !important;
			width:100% !important;
		}
	}

	@media (max-width:767px) {
		section .row .blockcontain {
			margin-left:13vw;
			height:5vw;
		}

		section .row .textmaindiv {
			margin-left:19vw;
			margin-bottom:70px;
		}

		section .row .blockcontain {
			margin-bottom:5vw;
		}

		section .row .blockcontain .frownumdiv .textowndiv {
			font-size:5vw;
		}

		section .row .textmaindiv .counter-value.connct {
			font-size:7vw;
		}

		.growlogodiv img {
			width:11vw;
		}
	}

	@media (max-width:320px) {
		.searchcontainer button {
			margin-top:-44px !important;
		}
	}

	</style>
	<!-- favicon -->
	<link rel="shortcut icon" href="{{ $user_assets }}/kabool-hai-favicon.png">
	<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
	 crossorigin="anonymous"></script>
	<script src="js/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>

	@stack('css')
</head>

<body onload='changeLogo()'>



	<div id="wait" style="display: none;"></div>
	<!-- navigation panel -->


	<nav class="navbar navbar-default navbar-fixed-top nav-transparent overlay-nav sticky-nav nav-white nav-border-bottom"
	 role="navigation">
		<div class="container-fluid navbar-container">
			<div class="row">
				<!-- logo -->
				<div class="col-md-2" id='test'>
					<a class="logo-light" href="{{ url('/') }}">
						<img alt="" src="{{ $user_assets }}/images/kaboolhai.png" class="logo" />
					</a>
					<a class="logo-dark" href="{{ url('/') }}">
						<img alt="" src="{{ $user_assets }}/images/kaboolhai.png" class="logo" />
					</a>
				</div>
				<!-- end logo -->
				<!-- search and cart  -->

				<!-- end search and cart  -->
				<!-- toggle navigation -->
				<div class="navbar-header">

					<!-- old code -->
					<!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> -->

					<button type="button" class="navbar-toggle" data-toggle="collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				<!-- @if(Session::get('user_id'))
				<span id='username'> {{ Session::get('user_name') }}</span>
				@endif -->
				</div>
				<!-- toggle navigation end -->
				<!-- main menu -->
				<div class="col-md-10 main-nav">
					<div class="navbar-collapse collapse">
						<ul id="accordion" class="nav navbar-nav panel-group">
							<!-- <li> <a href="register.html">Register</a> </li> -->
							<!-- <li class="{{ Request::is('/') ? 'active1' : '' }}">
		 <a href="{{url('/')}}">Home</a> </li> -->
							<li class="{{ Request::is('about-us') ? 'active1' : '' }}">
								<a href="{{url('about-us')}}">About Us</a>
							</li>
							<li class="{{ Request::is('contact-us') ? 'active1' : '' }}">
								<a href="{{url('contact-us')}}">Contact</a>
							</li>
							<li class="{{ Request::is('faqs') ? 'active1' : '' }}">
								<a href="{{url('faqs')}}">FAQs</a>
							</li>
							<li class="{{ Request::is('advance-search') ? 'active1' : '' }}">
								<a href="{{ url('advance-search') }}">Advanced Search</a>
							</li>
							<li class="{{ Request::is('blog') ? 'active1' : '' }}">
								<a href="http://kaboolhai.com/blog/" target="_blank">Blogs</a>
							</li>
							@if(empty(Session::get('user_id'))) {{--
							<li style="padding-right:0px;text-transform:capitalize;">
								<a href="{{ url('dashboard') }}"> {{ Session::get('user_name') }} </a>
							</li>
							<li style="padding-right:0px;text-transform:capitalize;">
								<a href="{{ url('logout') }}"> Logout </a>
							</li>
							@else --}}
							<li class="{{ Request::is('register') ? 'active1' : '' }}">
								<a href="{{url('register')}}">Create Account</a>
							</li>

							<li class="signin" style="padding-right:0px;text-transform:capitalize;">
								<a href="#"> Sign In </a>
							</li>
							@else
							<li class="{{ Request::is('advance-search') ? 'active1' : '' }}">
								<a href="{{url('advance-search')}}">Find Match</a>
							</li>
						</ul>
						<ul class="nav navbar-nav">



							<li class="dropdown">
								<a class="dropdown-toggle menudesign" data-toggle="dropdown" href="#">
									{{ user_data()->user_name }}
									<span class="caret"></span>
								</a>
								<ul class="dropdown-menu" style="    background-color: #ffffff;">
									<li>
										<a style="background-color: #ffffff; color: black !important; font-size: 13px;" href="{{ url('dashboard') }}">Dashboard</a>
									</li>

									<li>
										<a style="background-color: #ffffff; color:black !important; font-size: 13px;" href="{{ url('logout') }}">Logout</a>
									</li>
								</ul>
								@endif
							</li>
							<a href="javascript:;" id="btntoshowmenu">
								<i class="fa fa-bars humburger"></i>
							</a>
					</div>

					</ul>
				</div>
				<!-- end main menu -->
			</div>
		</div>

		<div class="navsidebar wow slideInRight" id="navsidebare" style="display:none;">
			<div class="row">
				<a href="javascript:;" id="cross" style="margin-left:230px;">
					<!-- <i class="fa fa-arrow-right fa-3x" style="color:white;margin-top:10px;"></i> -->
					<img width="20" height="20" style="margin-top:15px;" src="{{ $user_assets }}/cross.png" alt="" />
				</a>

				<ul style="margin-left:25px;list-style-type:none;width:100px;line-height:50px;margin-top:15px;">
				<li class="wow fadeInDown remove-top-margin" data-wow-delay="0.1s">
				@if(Session::get('user_id'))) 
						<a href="{{ url('dashboard') }}" class="M">
							<span>
								<!-- <img width="40" height="40" src="{{ $user_assets }}/login.svg" alt="" /> -->
								<img width="40" height="40" src="{{ $user_assets }}/dashboard.svg" alt="" />
							</span>
							<span style="padding-left:15px;">Dashboard</span>
						</a>
					</li>
					@endif

					@if(empty(Session::get('user_id')))
					<li class="wow fadeInDown signin1" data-wow-delay="0.1s">
						<a href="#" class="M">
							<span>
								<img width="40" height="auto" src="{{ $user_assets }}/login.svg" alt="" />
							</span>
							<span style="padding-left:15px;">Sign In</span>
						</a>
					</li>
					<li class="wow fadeInDown" data-wow-delay="0.2s">
						<a href="{{ url('register') }}" class="M">
							<span>
								<img width="40" height="40" src="{{ $user_assets }}/create_account.png" alt="" />
							</span>
							<span style="padding-left:15px;">Create Account</span>
						</a>
					</li>
					@endif
					<li class="wow fadeInDown" data-wow-delay="0.3">
						<a href="{{url('about-us')}}" class="M">
							<span>
								<img width="40" height="40" src="{{ $user_assets }}/about_us.png" alt="" />
							</span>
							<span style="padding-left:10px;">About Us</span>
						</a>
					</li>

					<li class="wow fadeInDown" data-wow-delay="0.4s">
						<a href="{{ url('advance-search') }}" class="M">
							<span>
								<img width="40" height="40" src="{{ $user_assets }}/find_match.png" alt="" />
							</span>
							<span style="padding-left:15px;">Find Match</span>
						</a>
					</li>

					{{--
					<li class="wow fadeInDown" data-wow-delay="0.5s">
						<a href="{{ url('our-police') }}" class="M">
							<span>
								<img width="40" height="40" src="{{ $user_assets }}/our_policy.png" alt="" />
							</span>
							<span style="padding-left:15px;">Our Policy</span>
						</a>
					</li> --}}

					<li class="wow fadeInDown" data-wow-delay="0.6s">
						<a href="{{ url('policy-privacy') }}" class="M">
							<span>
								<img width="40" height="40" src="{{ $user_assets }}/privacy.png" alt="" />
							</span>
							<span style="padding-left:10px;">Privacy</span>
						</a>
					</li>

					<li class="wow fadeInDown" data-wow-delay="0.7s">
						<a href="{{ url('blog') }}" class="M">
							<span>
								<img width="40" height="40" src="{{ $user_assets }}/blog.svg" alt="" />
							</span>
							<span style="padding-left:15px;">Blogs</span>
						</a>
					</li>

					<li class="wow fadeInDown" data-wow-delay="0.9s">
						<a href="{{ url('faqs') }}" class="M">
							<span>
								<img width="40" height="40" src="{{ $user_assets }}/faqs.png" alt="" />
							</span>
							<span style="padding-left:10px;">FAQs</span>
						</a>
					</li>

					<li class="wow fadeInDown" data-wow-delay="0.8s">
						<a href="{{ url('our-partnar') }}" class="M">
							<span>
								<img width="40" height="40" src="{{ $user_assets }}/our_partners.png" alt="" />
							</span>
							<span style="padding-left:15px;">Our Partners</span>
						</a>
					</li>

					<li class="wow fadeInDown" data-wow-delay="0.99s">
						<a href="{{ url('contact-us') }}" class="M">
							<span>
								<img width="40" height="40" src="{{ $user_assets }}/contact_us.png" alt="" />
							</span>
							<span style="padding-left:15px;">Contact</span>
						</a>
					</li>
					<li class="wow fadeInDown" data-wow-delay="0.99s">
						<a href="{{ url('help-center') }}" class="M">
							<span>
								<i class="fa fa-question" style="color:red; font-size: 45px;"></i>
							</span>
							<span style="padding-left:15px;">Help Center</span>
						</a>
					</li>
					<li class="wow fadeInDown" data-wow-delay="1s">
						<a href="{{ url('advance-search') }}" class="M">
							<span>
								<img width="40" height="40" src="{{ $user_assets }}/advanced search.png" alt="" />
							</span>
							<span style="padding-left:15px;">Advanced Search</span>
						</a>
					</li>
					@if(Session::get('user_id'))) 
					<li class="wow fadeInDown remove-top-margin" data-wow-delay="1s">
						<a href="{{ url('logout') }}" class="M">
							<span>
							<img width="40" height="40" src="{{ $user_assets }}/logout.svg" alt="log out" />
							</span>
							<span style="padding-left:15px;">Log out</span>
						</a>
					</li>
					@endif 
				</ul>
			</div>
		</div>
	</nav>

	<!-- <style>
		@media (max-width:991px) {
			.menudesign + .dropdown-menu {
				/* display:none !important; */
				z-index:1;
			}
		}
	</style> -->

	<script>
		// i named signin1 instead of signin because other code interferes
    $('.signin1').click(function(){
      $('#logindivv').toggle();
      $('#navsidebare').hide('slow');
	  $('.navbar-header').show();
	  $("#btntoshowmenu").css('visibility', 'visible');
    });

	 	mq = window.matchMedia( "(max-width: 420px)" );
         
			mq.addListener(mediaQueryResponse) // attach listener function to listen in on state changes so a page refresh will not be required
	  
			// search option will stay in the same line in tablet mode 
			function mediaQueryResponse(mq) {
	  
			  if(mq.matches) {
					document.querySelector('.logo-light img').src='{{ $user_assets }}/db_images/KH-logo2.png';
					document.querySelector('.logo').style.width = '40px';
			  }
			  else {
			 	 document.querySelector('.logo-light img').src='{{ $user_assets }}/images/kaboolhai.png';
					document.querySelector('.logo').style.width = 'auto';
			  } 
			}
			mediaQueryResponse(mq);

			function changeLogo() {
				if(mq.matches) {
					document.querySelector('.logo-light img').src='{{ $user_assets }}/db_images/KH-logo2.png';
					document.querySelector('.logo').style.width = '40px';
			  }
			  else {
			 	 document.querySelector('.logo-light img').src='{{ $user_assets }}/images/kaboolhai.png';
					document.querySelector('.logo').style.width = 'auto';
			  } 
			}
  </script>


	<script>
		$("#btntoshowmenu").click(function() {
			$("#navsidebare").show();
			// $(".signin").hide();
			$("#logindivv").hide();
			$("#btntoshowmenu").css('visibility', 'hidden');
		});

		$("#cross").click(function() {

			$("#navsidebare").hide("slow");
			$(".signin").show();
			$("#btntoshowmenu").css('visibility', 'visible');
			$('.navbar-header').show();
		});

    $('.navbar-toggle').click(function(){
			$("#navsidebare").show();
			$(this).hide();
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


		//   var username_dropdown = $('.nav li.dropdown').clone();
		//    mq = window.matchMedia( "(max-width: 1166px)" );
         
			// mq.addListener(mediaQueryResponse) // attach listener function to listen in on state changes so a page refresh will not be required
 
			// search option will stay in the same line in tablet mode 
			// function mediaQueryResponse(mq) {
 
			//   if(mq.matches) {
			// 		$(username_dropdown).show();
			// 		username_dropdown.appendTo('#test');
			// 		$(username_dropdown).css({
			// 		'position' : 'absolute',
			// 		'right' : '100px',
			// 		'top' : '20px'
			// 	});

				// $('.menudesign').removeAttr('data-toggle');

				// if ( $('.menudesign + .dropdown-menu').css('visibility', 'hidden') ) {
				// 	$('.menudesign').click(function(){
				// 		$('.menudesign + .dropdown-menu').css('visibility','visisle');
				// 	});
				// }

				// if ( $('.menudesign + .dropdown-menu').css('visibility', 'visible') ) {
				// 	$('.menudesign').click(function(){
				// 		$('.menudesign + .dropdown-menu').css('visibility','hidden');
				// 	});
				// }

					// alert('hi');
			//   }

			//   else {
			// 	  $(username_dropdown).hide();
			//   }
			// }
			// mediaQueryResponse(mq);

	</script>

	<style>
		.dropdown-open .dropdown-menu {
			/* display:none !important; */
		}
	</style>

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
						<div style="display:inline;">
							<input type="checkbox"> Remember Me
						</div>
						<br> {{ csrf_field() }}
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

	<script>
		$(".signin").click(function () {
			$("#logindivv").toggle();
		});

		$("#login-div-x").click(function () {
			$('#logindivv').hide();
		});
		//   $('#forgot-password').submit(function(e){

		//    e.preventDefault();
		//  formData=$(this).serialize();
		//  var data=formData;
		//  // alert(data);


		//   document.getElementById("wait").style.display = "block";






		// $.post('{{ url('/dologin') }}' , data , function(data){
		//     document.getElementById("wait").style.display = "none"
		//  alert(data);
		//      // var json = $.parseJSON(data);


		//  });
		//  });

	</script>
	@yield('data')

	<footer>
		<section class="bg-orange no-padding wow ">
			<div class="container">
				<div class="row padding-two sm-text-center">
					<div class="col-md-9 no-padding">
						<h4 class="white-text font-weight-600" style="font-family:sans-serif;">Stay tuned for the
							launch of Best &
							Secure Matrimonial App!</h4>
						<p class="white-text" style="font-family:sans-serif;text-align:justify;">It has been our utmost
							desire to
							introduce an outstanding and easy to use matrimonial application for IOS and Android
							users. We have been working hard in this stance and are planning to come up with a
							user-friendly and
							secure Matrimonial
							App so that our users stay updated while on the go!</p>
						<p class="white-text" style="font-family:sans-serif;text-align:justify;">The app will be soon
							available for
							both Android and Apple iPhone users in the respective play stores. Stay tuned for
							the launch of our ‘Kabool Hai Matrimonial app’ as the early birds will be given early
							access and will get
							free subscription.</p>
					</div>
					<div class="col-md-3 padding-one no-padding-bottom">
						<a class="" href="#">
							<img src="{{ $user_assets }}/images/google-play.png" width="193" height="58">
						</a>
						<br>
						<br>
						<a class="" href="#">
							<img src="{{ $user_assets }}/images/apple-store.png" width="193" height="58">
						</a>
					</div>
				</div>
			</div>
		</section>

		<div class="container-fluid footer-middle">
			<div class="row">
				<div class="col-md-2">
					<table>
						<tr>
							<th class="fhead">Kaboolhai</th>
						</tr>
						</tr>
						<tr>
							<td class="flinks">
								<a href="{{url('about-us')}}">About</a>
							</td>
						</tr>
						<tr>
							<td class="flinks">
								<a href="http://kaboolhai.com/blog/">Blog</a>
							</td>
						</tr>
						<tr>
							<td class="flinks">
								<a href="#">Download app</a>
							</td>
						</tr>
						<tr>
							<td class="flinks">
								<a href="{{ url('term-condation') }}">Terms and Conditions</a>
							</td>
						</tr>
						<tr>
							<td class="flinks">
								<a href="{{ url('testimonials') }}">Testimonials</a>
							</td>
						</tr>
						<tr>
							<td class="flinks">
								<a href="{{ url('policy-privacy') }}">Privacy Policy</a>
							</td>
						</tr>
						<tr>
							<td class="flinks">
								<a href="{{ url('payment') }}">Payment</a>
							</td>
						</tr>
					</table>
				</div>

				<div class="col-md-2">
					<table>
						<tr>
							<th class="fhead">Help & Support</th>
						</tr>
						<tr>
							<td class="flinks">
								<a href="{{ url('help-center') }}">24x7 Live help</a>
							</td>
						</tr>
						<tr>
							<td class="flinks">
								<a href="{{ url('contact-us') }}">Contact Us</a>
							</td>
						</tr>
						<tr>
							<td class="flinks">
								<a href="{{ url('feedback') }}">Feedback</a>
							</td>
						</tr>
						<tr>
							<td class="flinks">
								<a href="{{ url('faqs') }}">FAQ'S</a>
							</td>
						</tr>
						<tr>
							<td class="flinks">
								<a href="{{ url('payment') }}">Upgrade Account</a>
							</td>
						</tr>
						<tr>
							<td class="flinks">
								<a href="{{ url('assisted-service') }}">Assisted Service</a>
							</td>
						</tr>
						<tr>
							<td class="flinks">
								<a href="{{ url('services') }}">Our Services </a>
							</td>
						</tr>
					</table>
				</div>

				<div class="col-md-2">
					<table>
						<tr>
							<th class="fhead">Search Profile</th>
						</tr>
						<tr>


							<td class="flinks">
								<a href="javascript:;" data-toggle="modal" data-target="#basic_search">Basic Search</a>

						</tr>
						<tr>
							<td class="flinks">
								<a href="javascript:;" data-toggle="modal" data-target="#advance_search">Advance Search</a>
							</td>

						</tr>
						<tr>


							<td class="flinks">
								<a href="javascript:;" data-toggle="modal" data-target="#keyword_search">Keyword Search</a>
							</td>


						</tr>
						<tr>

							<td class="flinks">
								<a href="javascript:;" data-toggle="modal" data-target="#job_search">occupational
									Search</a>
							</td>

						</tr>
						<tr>
							<td class="flinks">
								<a href="javascript:;" data-toggle="modal" data-target="#edu_search">Educational</a>
							</td>



						</tr>
						<tr>
							<td class="flinks">
								<a href="javascript:;" data-toggle="modal" data-target="#id_search">ID Search</a>
							</td>
						</tr>
					</table>
				</div>

				<div class="col-md-3">
					<table>
						<tr>
							<th class="fhead">Contact Us</th>
						</tr>
						<tr>
							<td class="flinks">
								<a href="#">contact@kaboolhai.com</a>
							</td>
						</tr>
						<!-- <tr>
                        <td class="flinks"><a href=""> (PK): +92 423 570 0007</a></td>
                    </tr>
                    <tr>
                        <td class="flinks"><a href="">Phase 6 DHA Lahore Pakistan
                        </a></td>
                    </tr> -->
						<tr>
							<td>
								<br>
							</td>
						</tr>
						<tr>
							<td class="flinks">
								<a href="https://www.facebook.com/Saykaboolhai/" target="__blank" "><i class=" fa fa-facebook-square fa-3x
								 "></i></a><a href=" # "><i class=" fa fa-youtube-square fa-3x "></i></a> <a href=" https://twitter.com/kaboolhaitweet
								 " target=" __blank "><i class=" fa fa-twitter-square fa-3x "></i></a><i class=" fa fa-google-plus-square fa-3x
								 "></i><i class=" fa fa-linkedin-square fa-3x " style=" color:white;
								 "></i></a></td>
                     </tr>
                                                           
                </table>
            </div>

            <div class="
								 col-md-3 ">
               <p class=" fhead ">Subscribe to Our Newsletters</p>
               <p class=" subt
								 ">Never miss our special offers</p>
               <div class=" searchcontainer
								 ">
                   <form action=" ">
                       <input type=" text " class=" form-control
								 " style=" height:44px;border-radius-left: 5%;" placeholder=" Enter Your Email " name=" search
								 ">
                       <button type=" submit "><i class=" fa fa-search
								 "></i></button>
                   </form>
               </div>
              
               <div class="
								 paymg ">
                   <img alt=" " src=" {{ $user_assets }}/payment-methods.png
								 " />
               </div>
            </div>

        </div>

        <div class=" row
								 ">
            <div class=" col-md-12 " style=" padding-top:50px;
								 ">
                <table>
                    <tr>
                         <p style=" color:#ffffff
								 ">Top Searches by:</p>
                    </tr>
                     <tr class=" tpsrch">
                       <th><a href=" {{ url( 'pakistani') }}">Pakistani Muslim Matrimony</a></th>
                        <th><a href=" {{ url( 'UAE') }}">UAE Muslim Matrimony</a></th>
                        <th><a href=" {{ url( 'United-Kingdom') }}">United Kingdom Muslim Matrimony</a></th>
                        <th><a href=" {{ url( 'USA') }}">USA Muslim Matrimony Muslim Matrimony</a></th>
                        <th><a href=" {{ url( 'canada') }}" style=" border:none;">CANADA Muslim Matrimony</a></th>
                    </tr>
                </table>

					 <div class="top-searches-by">
						<div><a href="{{ url( 'pakistani') }}">Pakistani Muslim Matrimony</a></div>
						<div><a href="{{ url( 'UAE') }}">UAE Muslim Matrimony</a></div>
						<div><a href="{{ url( 'United-Kingdom') }}">United Kingdom Muslim Matrimony</a></div>
						<div><a href="{{ url( 'USA') }}">USA Muslim Matrimony Muslim Matrimony</a></div>
						<div><a href="{{ url( 'canada') }}">CANADA Muslim Matrimony</a></div>
					 </div>
            </div>
        </div>

        <!-- scroll to top -->
        <a href="
								 javascript:; " class=" scrollToTop
								 "></a>
    </div>
    <!-- scroll to top End... -->

    
</footer>
<div style="
								 width:100%;background-color:#222; ">
        <div class=" container ">
            <div class=" row " style="
								 padding-top:15px;padding-bottom: 15px; ">
            <div class="col-sm-6">
                  <table>
                     <tr class="dosrch">
                        <th><a href="{{ url('term-condation') }}">Terms</a></th>
                        <th><a href="{{ url('policy-privacy') }}">Privacy Policy</a></th>
                        <th><a href="{{ url('sitemap') }}" style="border:none;">Site Map</a></th>
                     </tr>
                  </table>
               </div>
               <div class="col-sm-6 copyright">
                  <p class="pull-right" style="color:#ffffff;">&copy;2018 Kaboolhai.All rights reserved.Powered By <a style="color:white;" href="http://www.ranglerz.com/" target="__blanck">Ranglerz</a>.</p>
               </div>
        </div>
        </div>
    </div>

     {{-- Basic Search --}}



<div class="
								 modal fade " data-backdrop=" static " data-keyboard=" false " id=" basic_search " tabindex=" -1 " role="
								 dialog " aria-labelledby=" exampleModalLabel " aria-hidden=" true ">
  <div class=" modal-dialog " role="
								 document " style=" margin-top: 100px; ">
    <div class=" modal-content ">
      <div class=" modal-header
								 ">
        <h5 class=" modal-title tb-modal-title
								 "><center>Basic Search </center>
        </h5>
      </div>

<div class=" modal-body ">
<form method=" get
								 " action=" {{ url( 'user-search') }} ">
  {{ csrf_field() }}
  
<div class=" form-group
								 ">
<label>Looking for</label>
          
        </div>
        <div class=" row ">
        <div class="
								 col-md-6 ">
           <input type=" radio " value=" Female " name=" loking_for
								 "> Bride
         </div>
             <div class=" col-md-6 ">
          
             <input type=" radio
								 " value=" Male " name=" loking_for
								 "> Groom
             
          </div>   
          </div>
         
      
  
<br>
     <div class="
								 form-group ">
      
          <label>Age</label>
        </div>
        <div class=" row
								 ">
        <div class=" col-md-5 ">
           <select name=" age_from " class=" form-control
								 ">
              <option value="
								 ">Select</option>
            
                                    @for($i =  date('y');  $i <= date('y')+82 ; $i++)
  <option value="
								 {{ $i }}
								 " >{{ $i }}</option>
@endfor 
            </select>
             
          </div>    
          <div class="
								 col-xs-1 text-center ">
            To
          </div>
          <div class=" col-md-5
								 ">
            <select name=" age_to " class=" form-control ">
              <option value="
								 ">Select</option>
                                    @for($i = date('y')+82; $i >= date('y'); $i--)
  <option value="
								 {{ $i }}
								 " >{{ $i }}</option>
@endfor 
            </select>
         
          </div>
     </div>
       <br>
        <div class="
								 form-group ">
          <label>Height</label>
        </div>
         <div class=" row ">
        <div class="
								 col-md-5 ">
            <select name=" height_from " class=" form-control
								 ">
            
                     <option value="
								 ">Height..</option>
                        <option value=" Below 4ft 6in - 137cm
								 ">Below 4ft 6in - 137cm</option>
                      <option value=" 4ft 6in - 137cm
								 ">4ft 6in - 137cm</option>
                      <option value=" 4ft 7in - 139cm
								 ">4ft 7in - 139cm</option>
                      <option value=" 4ft 8in - 142cm
								 ">4ft 8in - 142cm</option>
                      <option value=" 4ft 9in - 144cm
								 ">4ft 9in - 144cm</option>
                      <option value=" 4ft 10in - 147cm
								 ">4ft 10in - 147cm</option>
                      <option value=" 4ft 11in - 149cm
								 ">4ft 11in - 149cm</option>
                      <option value=" 5ft - 152cm
								 ">5ft - 152cm</option>
                      <option value=" 5ft 1in - 154cm
								 ">5ft 1in - 154cm</option>
                      <option value=" 5ft 2in - 157cm
								 ">5ft 2in - 157cm</option>
                      <option value=" 5ft 3in - 160cm
								 ">5ft 3in - 160cm</option>
                      <option value=" 5ft 4in - 162cm
								 ">5ft 4in - 162cm</option>
                      <option value=" 5ft 5in - 165cm
								 ">5ft 5in - 165cm</option>
                      <option value=" 5ft 6in - 167cm
								 ">5ft 6in - 167cm</option>
                      <option value=" 5ft 7in - 170cm
								 ">5ft 7in - 170cm</option>
                      <option value=" 5ft 8in - 172cm
								 ">5ft 8in - 172cm</option>
                      <option value=" 5ft 9in - 175cm
								 ">5ft 9in - 175cm</option>
                      <option value=" 5ft 10in - 177cm
								 ">5ft 10in - 177cm</option>
                      <option value=" 5ft 11in - 180cm
								 ">5ft 11in - 180cm</option>
                      <option value=" 6ft - 182cm
								 ">6ft - 182cm</option>
                      <option value=" 6ft 1in - 185cm
								 ">6ft 1in - 185cm</option>
                      <option value=" 6ft 2in - 187cm
								 ">6ft 2in - 187cm</option>
                      <option value=" 6ft 3in - 190cm
								 ">6ft 3in - 190cm</option>
                      <option value=" 6ft 4in - 193cm
								 ">6ft 4in - 193cm</option>
                      <option value=" 6ft 5in - 195cm
								 ">6ft 5in - 195cm</option>
                      <option value=" 6ft 6in - 198cm
								 ">6ft 6in - 198cm</option>
                      <option value=" 6ft 7in - 200cm
								 ">6ft 7in - 200cm</option>
                      <option value=" 6ft 8in - 203cm
								 ">6ft 8in - 203cm</option>
                      <option value=" 6ft 9in - 205cm
								 ">6ft 9in - 205cm</option>
                      <option value=" 6ft 10in - 208cm
								 ">6ft 10in - 208cm</option>
                      <option value=" 6ft 11in - 210cm
								 ">6ft 11in - 210cm</option>
                      <option value=" 7ft - 213cm
								 ">7ft - 213cm</option>
                      <option value=" Above 7ft - 213c
								 ">Above 7ft - 213cm</option>
            </select>
             
          </div>    
          <div class="
								 col-xs-1 text-center ">
            To
          </div>
          <div class=" col-md-5
								 ">
            <select name=" height_to " class=" form-control
								 ">
              
             
                     <option value="
								 ">Height..</option>
                        <option value=" Below 4ft 6in - 137cm
								 ">Below 4ft 6in - 137cm</option>
                      <option value=" 4ft 6in - 137cm
								 ">4ft 6in - 137cm</option>
                      <option value=" 4ft 7in - 139cm
								 ">4ft 7in - 139cm</option>
                      <option value=" 4ft 8in - 142cm
								 ">4ft 8in - 142cm</option>
                      <option value=" 4ft 9in - 144cm
								 ">4ft 9in - 144cm</option>
                      <option value=" 4ft 10in - 147cm
								 ">4ft 10in - 147cm</option>
                      <option value=" 4ft 11in - 149cm
								 ">4ft 11in - 149cm</option>
                      <option value=" 5ft - 152cm
								 ">5ft - 152cm</option>
                      <option value=" 5ft 1in - 154cm
								 ">5ft 1in - 154cm</option>
                      <option value=" 5ft 2in - 157cm
								 ">5ft 2in - 157cm</option>
                      <option value=" 5ft 3in - 160cm
								 ">5ft 3in - 160cm</option>
                      <option value=" 5ft 4in - 162cm
								 ">5ft 4in - 162cm</option>
                      <option value=" 5ft 5in - 165cm
								 ">5ft 5in - 165cm</option>
                      <option value=" 5ft 6in - 167cm
								 ">5ft 6in - 167cm</option>
                      <option value=" 5ft 7in - 170cm
								 ">5ft 7in - 170cm</option>
                      <option value=" 5ft 8in - 172cm
								 ">5ft 8in - 172cm</option>
                      <option value=" 5ft 9in - 175cm
								 ">5ft 9in - 175cm</option>
                      <option value=" 5ft 10in - 177cm
								 ">5ft 10in - 177cm</option>
                      <option value=" 5ft 11in - 180cm
								 ">5ft 11in - 180cm</option>
                      <option value=" 6ft - 182cm
								 ">6ft - 182cm</option>
                      <option value=" 6ft 1in - 185cm
								 ">6ft 1in - 185cm</option>
                      <option value=" 6ft 2in - 187cm
								 ">6ft 2in - 187cm</option>
                      <option value=" 6ft 3in - 190cm
								 ">6ft 3in - 190cm</option>
                      <option value=" 6ft 4in - 193cm
								 ">6ft 4in - 193cm</option>
                      <option value=" 6ft 5in - 195cm
								 ">6ft 5in - 195cm</option>
                      <option value=" 6ft 6in - 198cm
								 ">6ft 6in - 198cm</option>
                      <option value=" 6ft 7in - 200cm
								 ">6ft 7in - 200cm</option>
                      <option value=" 6ft 8in - 203cm
								 ">6ft 8in - 203cm</option>
                      <option value=" 6ft 9in - 205cm
								 ">6ft 9in - 205cm</option>
                      <option value=" 6ft 10in - 208cm
								 ">6ft 10in - 208cm</option>
                      <option value=" 6ft 11in - 210cm
								 ">6ft 11in - 210cm</option>
                      <option value=" 7ft - 213cm
								 ">7ft - 213cm</option>
                      <option value=" Above 7ft - 213c
								 ">Above 7ft - 213cm</option>
            </select>
</div>
</div>
<br>
<div class=" pull-right
								 ">
<button type=" button " class=" btn btn-secondary " data-dismiss=" modal " style=" padding: 5px;
								 background-color: red; ">Close</button>
<button type=" submit " class=" btn btn-success " style=" padding:5px;
								 background-color: green; ">Search</button>
</div>
<div class=" clearfix
								 "></div>
</form>
</div>
</div>
</div>
</div>


{{-- advance search --}}


<div class=" modal fade
								 " data-backdrop=" static " data-keyboard=" false " id=" advance_search " tabindex=" -1 " role=" dialog
								 " aria-labelledby=" exampleModalLabel " aria-hidden=" true ">
  <div class=" modal-dialog " role=" document
								 " style=" margin-top: 100px; ">
    <div class=" modal-content ">
      <div class=" modal-header
								 ">
        <h5 class=" modal-title tb-modal-title
								 "><center>Search by Advance info</center>
        </h5>
      </div>

<div class=" modal-body
								 ">
<form method=" get " action=" {{ url( 'user-search') }} ">
  {{ csrf_field() }}
  
<div class=" form-group
								 ">
<label>Looking for</label>
          
        </div>
        <div class=" row ">
        <div class="
								 col-md-6 ">
           <input type=" radio " value=" Female " name=" loking_for
								 "> Bride
         </div>
             <div class=" col-md-6 ">
          
             <input type=" radio
								 " value=" Male " name=" loking_for
								 "> Groom
             
          </div>   
          </div>
         
      
  
<br>
     <div class="
								 form-group ">
      
          <label>Age</label>
        </div>
        <div class=" row
								 ">
        <div class=" col-md-5 ">
           <select name=" age_from " class=" form-control
								 ">
              <option value="
								 ">Select</option>
            
                                    @for($i =  date('y');  $i <= date('y')+82 ; $i++)
  <option value="
								 {{ $i }}
								 " >{{ $i }}</option>
@endfor 
            </select>
             
          </div>    
          <div class="
								 col-xs-1 text-center ">
            To
          </div>
          <div class=" col-md-5
								 ">
            <select name=" age_to " class=" form-control ">
              <option value="
								 ">Select</option>
                                    @for($i = date('y')+82; $i >= date('y'); $i--)
  <option value="
								 {{ $i }}
								 " >{{ $i }}</option>
@endfor 
            </select>
         
          </div>
     </div>
        <br>
      <div class="
								 form-group ">
          <label>Martial Status</label>
        </div>
        <div class=" row
								 ">
        <div class=" col-md-6 ">
           <input type=" radio " value=" Unmaried " name=" martial_status
								 "> Unmaried
         </div>
         <div class=" col-md-6 ">
            <input type=" radio " value=" Widow
								 Widower " name=" martial_status "> Widow/Widower
          </div>
          <div class=" col-md-6
								 ">
             <input type=" radio " value=" Divorcee " name=" martial_status
								 "> Divorcee
           </div>
           <div class=" col-md-6 ">
             <input type=" radio " value="
								 Seprated " name=" martial_status "> Seprated
           </div>
           <div class=" col-md-6
								 ">
              <input type=" radio " value=" Annulled " name=" martial_status
								 "> Annulled
          </div>
         </div>
         <br>
        <div class=" form-group
								 ">
          <label>Height</label>
        </div>
         <div class=" row ">
        <div class=" col-md-5
								 ">
            <select name=" height_from " class=" form-control
								 ">
            
                     <option value="
								 ">Height..</option>
                        <option value=" Below 4ft 6in - 137cm
								 ">Below 4ft 6in - 137cm</option>
                      <option value=" 4ft 6in - 137cm
								 ">4ft 6in - 137cm</option>
                      <option value=" 4ft 7in - 139cm
								 ">4ft 7in - 139cm</option>
                      <option value=" 4ft 8in - 142cm
								 ">4ft 8in - 142cm</option>
                      <option value=" 4ft 9in - 144cm
								 ">4ft 9in - 144cm</option>
                      <option value=" 4ft 10in - 147cm
								 ">4ft 10in - 147cm</option>
                      <option value=" 4ft 11in - 149cm
								 ">4ft 11in - 149cm</option>
                      <option value=" 5ft - 152cm
								 ">5ft - 152cm</option>
                      <option value=" 5ft 1in - 154cm
								 ">5ft 1in - 154cm</option>
                      <option value=" 5ft 2in - 157cm
								 ">5ft 2in - 157cm</option>
                      <option value=" 5ft 3in - 160cm
								 ">5ft 3in - 160cm</option>
                      <option value=" 5ft 4in - 162cm
								 ">5ft 4in - 162cm</option>
                      <option value=" 5ft 5in - 165cm
								 ">5ft 5in - 165cm</option>
                      <option value=" 5ft 6in - 167cm
								 ">5ft 6in - 167cm</option>
                      <option value=" 5ft 7in - 170cm
								 ">5ft 7in - 170cm</option>
                      <option value=" 5ft 8in - 172cm
								 ">5ft 8in - 172cm</option>
                      <option value=" 5ft 9in - 175cm
								 ">5ft 9in - 175cm</option>
                      <option value=" 5ft 10in - 177cm
								 ">5ft 10in - 177cm</option>
                      <option value=" 5ft 11in - 180cm
								 ">5ft 11in - 180cm</option>
                      <option value=" 6ft - 182cm
								 ">6ft - 182cm</option>
                      <option value=" 6ft 1in - 185cm
								 ">6ft 1in - 185cm</option>
                      <option value=" 6ft 2in - 187cm
								 ">6ft 2in - 187cm</option>
                      <option value=" 6ft 3in - 190cm
								 ">6ft 3in - 190cm</option>
                      <option value=" 6ft 4in - 193cm
								 ">6ft 4in - 193cm</option>
                      <option value=" 6ft 5in - 195cm
								 ">6ft 5in - 195cm</option>
                      <option value=" 6ft 6in - 198cm
								 ">6ft 6in - 198cm</option>
                      <option value=" 6ft 7in - 200cm
								 ">6ft 7in - 200cm</option>
                      <option value=" 6ft 8in - 203cm
								 ">6ft 8in - 203cm</option>
                      <option value=" 6ft 9in - 205cm
								 ">6ft 9in - 205cm</option>
                      <option value=" 6ft 10in - 208cm
								 ">6ft 10in - 208cm</option>
                      <option value=" 6ft 11in - 210cm
								 ">6ft 11in - 210cm</option>
                      <option value=" 7ft - 213cm
								 ">7ft - 213cm</option>
                      <option value=" Above 7ft - 213c
								 ">Above 7ft - 213cm</option>
            </select>
             
          </div>    
          <div class="
								 col-xs-1 text-center ">
            To
          </div>
          <div class=" col-md-5
								 ">
            <select name=" height_to " class=" form-control
								 ">
              
             
                     <option value="
								 ">Height..</option>
                        <option value=" Below 4ft 6in - 137cm
								 ">Below 4ft 6in - 137cm</option>
                      <option value=" 4ft 6in - 137cm
								 ">4ft 6in - 137cm</option>
                      <option value=" 4ft 7in - 139cm
								 ">4ft 7in - 139cm</option>
                      <option value=" 4ft 8in - 142cm
								 ">4ft 8in - 142cm</option>
                      <option value=" 4ft 9in - 144cm
								 ">4ft 9in - 144cm</option>
                      <option value=" 4ft 10in - 147cm
								 ">4ft 10in - 147cm</option>
                      <option value=" 4ft 11in - 149cm
								 ">4ft 11in - 149cm</option>
                      <option value=" 5ft - 152cm
								 ">5ft - 152cm</option>
                      <option value=" 5ft 1in - 154cm
								 ">5ft 1in - 154cm</option>
                      <option value=" 5ft 2in - 157cm
								 ">5ft 2in - 157cm</option>
                      <option value=" 5ft 3in - 160cm
								 ">5ft 3in - 160cm</option>
                      <option value=" 5ft 4in - 162cm
								 ">5ft 4in - 162cm</option>
                      <option value=" 5ft 5in - 165cm
								 ">5ft 5in - 165cm</option>
                      <option value=" 5ft 6in - 167cm
								 ">5ft 6in - 167cm</option>
                      <option value=" 5ft 7in - 170cm
								 ">5ft 7in - 170cm</option>
                      <option value=" 5ft 8in - 172cm
								 ">5ft 8in - 172cm</option>
                      <option value=" 5ft 9in - 175cm
								 ">5ft 9in - 175cm</option>
                      <option value=" 5ft 10in - 177cm
								 ">5ft 10in - 177cm</option>
                      <option value=" 5ft 11in - 180cm
								 ">5ft 11in - 180cm</option>
                      <option value=" 6ft - 182cm
								 ">6ft - 182cm</option>
                      <option value=" 6ft 1in - 185cm
								 ">6ft 1in - 185cm</option>
                      <option value=" 6ft 2in - 187cm
								 ">6ft 2in - 187cm</option>
                      <option value=" 6ft 3in - 190cm
								 ">6ft 3in - 190cm</option>
                      <option value=" 6ft 4in - 193cm
								 ">6ft 4in - 193cm</option>
                      <option value=" 6ft 5in - 195cm
								 ">6ft 5in - 195cm</option>
                      <option value=" 6ft 6in - 198cm
								 ">6ft 6in - 198cm</option>
                      <option value=" 6ft 7in - 200cm
								 ">6ft 7in - 200cm</option>
                      <option value=" 6ft 8in - 203cm
								 ">6ft 8in - 203cm</option>
                      <option value=" 6ft 9in - 205cm
								 ">6ft 9in - 205cm</option>
                      <option value=" 6ft 10in - 208cm
								 ">6ft 10in - 208cm</option>
                      <option value=" 6ft 11in - 210cm
								 ">6ft 11in - 210cm</option>
                      <option value=" 7ft - 213cm
								 ">7ft - 213cm</option>
                      <option value=" Above 7ft - 213c
								 ">Above 7ft - 213cm</option>
            </select>
</div>
</div>
<br>
<div class=" form-group
								 ">
<label>caste</label>
          
        </div>
        <div class=" row ">
        <div class=" col-md-12
								 ">
           <input type=" text "  name=" cast " class=" form-control " placeholder=" Caste
								 ">
         
          </div>
         </div>
      
<br>
      <div class=" form-group
								 ">
          <label>Mother Language</label>
        </div>
         <div class=" row ">
        <div class="
								 col-md-12 ">
            <select name=" language " class=" form-control
								 ">
            
                     <option value="
								 ">..Select..</option>
                        <option value=" Urdu ">Urdu</option> 
<option value=" Punjabi
								 ">Punjabi</option>
<option value=" Pashto ">Pashto</option> 
<option value=" Sindhi
								 ">Sindhi</option> 
<option value=" Saraiki ">Saraiki</option> 
<option value=" Balochi
								 ">Balochi</option>  
<option value=" Hindko ">Hindko</option>
<option value=" English
								 ">English</option>
<option disabled="
								 ">..............................................................</option> 
<option value=" Malayalam
								 ">Malayalam</option>    
<option value=" Aka ">Aka</option>
<option value=" Angika
								 ">Angika</option>
<option value=" Arabic ">Arabic</option> 
<option value=" Arunachali
								 ">Arunachali</option>
<option value=" Assamese ">Assamese</option> 
<option value=" Awadhi
								 ">Awadhi</option> 
<option value=" Badaga ">Badaga</option> 
<option value=" Bengali
								 ">Bengali </option>
<option value=" Bhojpuri ">Bhojpuri</option> 
<option value=" Bihari
								 ">Bihari</option> 
<option value=" Brij ">Brij</option> 
<option value=" Chatisgarhi
								 ">Chatisgarhi</option>
<option value=" Coorgi ">Coorgi</option> 
<option value=" Dogri
								 ">Dogri</option> 
 
<option value=" French ">French</option> 
<option value=" Garhwali
								 ">Garhwali</option> 
<option value=" Garo ">Garo</option> 
<option value=" Gujarati
								 ">Gujarati</option>
<option value=" Haryanvi ">Haryanvi</option>
<option value=" Himachali/Pahari
								 ">Himachali/Pahari</option> 
<option value=" Hindi ">Hindi</option> 
<option value=" Hindko
								 ">Hindko</option> 
<option value=" Kanauji ">Kanauji</option> 
<option value=" Kannada
								 ">Kannada</option> 
<option value=" Kashmiri ">Kashmiri</option> 
<option value=" Khandesi
								 ">Khandesi</option> 
<option value=" Khasi ">Khasi</option> 
<option value=" Konkani
								 ">Konkani</option> 
<option value=" Koshali ">Koshali</option> 
<option value=" Kumaoni
								 ">Kumaoni</option> 
<option value=" Kutchi ">Kutchi</option> 
<option value=" Ladacki
								 ">Ladacki</option> 
<option value=" Lepcha ">Lepcha</option> 
<option value=" Magahi
								 ">Magahi</option> 
<option value=" Maithili ">Maithili</option> 
<option value=" Malay
								 ">Malay</option> 
<option value=" Malayalam ">Malayalam
</option> 
<option value=" Manipuri
								 ">Manipuri</option> 
<option value=" Marathi ">Marathi</option> 
<option value=" Marwari
								 ">Marwari</option> 
<option value=" Miji ">Miji</option> 
<option value=" Miza
								 ">Miza</option> 
<option value=" Monpa ">Monpa</option> 
<option value=" Nepali
								 ">Nepali</option> 
<option value=" Nicobarese ">Nicobarese</option> 
<option value=" Oriya
								 ">Oriya</option> 

<option value=" Persian ">Persian</option> 

<option value=" Rajasthani
								 ">Rajasthani</option> 
<option value=" Russian ">Russian</option> 
<option value=" Sanskrit
								 ">Sanskrit</option> 
<option value=" Santhali ">Santhali</option> 

<option value=" Sinhala
								 ">Sinhala</option> 
<option value=" Sourashtra ">Sourashtra</option> 
<option value=" Spanish
								 ">Spanish</option> 
<option value=" Tamil ">Tamil</option> 
<option value=" Telugu
								 ">Telugu</option> 
<option value=" Tripuri ">Tripuri</option> 
<option value=" Tulu
								 ">Tulu</option> 
              
            </select>
</div>
</div>
<br>



<br>
      <div class=" form-group
								 ">
          <label>Religion</label>
        </div>
         <div class=" row ">
        <div class="
								 col-md-12 ">
            <select name=" religiousness " class=" form-control
								 ">
            
                     <option value="
								 ">..Select..</option>
                       <option value="
								 ">Please select..</option>
                      <option value=" Very religious
								 ">Very religious</option>
                      <option value=" Religious
								 ">Religious</option>
                       <option value=" Not religious
								 ">Not religious</option>
                      <option value=" Prefer not to say
								 ">Prefer not to say</option>
            </select>
</div>
</div>
<br>


<br>
      <div class=" form-group
								 ">
          <label>Financial Status</label>
        </div>
         <div class=" row ">
        <div class="
								 col-md-12 ">
            <select name=" financial_status " class=" form-control
								 ">
            
                    
                       <option value="
								 ">Please select..</option>
                      <option value=" Rich
								 ">Rich</option>
                      <option value=" Upper Middle Class
								 ">Upper Middle Class</option>
                       <option value=" Middle Class
								 ">Middle Class</option>
                      <option value=" Lower Upper Middle Class
								 ">Lower Upper Middle Class</option>
                      <option value=" Do not want to tell at this time
								 ">Do not want to tell at this time</option>
            </select>
</div>
</div>
<br>

<div class=" pull-right
								 ">
<button type=" button " class=" btn btn-secondary " data-dismiss=" modal " style=" padding:5px;
								 background-color: red; ">Close</button>
<button type=" submit " class=" btn btn-success " style=" padding:5px;
								 background-color: green; ">Search</button>
</div>
<div class=" clearfix
								 "></div>
</form>
</div>
</div>
</div>
</div>

    {{-- Keyword search --}}


<div class=" modal fade
								 " data-backdrop=" static " data-keyboard=" false " id=" keyword_search " tabindex=" -1 " role=" dialog
								 " aria-labelledby=" exampleModalLabel " aria-hidden=" true ">
  <div class=" modal-dialog " role=" document
								 " style=" margin-top: 100px; ">
    <div class=" modal-content ">
      <div class=" modal-header
								 ">
        <h5 class=" modal-title tb-modal-title
								 "><center>Search by Keyword</center>
        </h5>
      </div>

<div class=" modal-body ">
<form method=" get
								 " action=" {{ url( 'user-search') }} ">
  {{ csrf_field() }}
  <div class=" form-group
								 ">
<label>User Name</label>
          
        </div>
        <div class=" row ">
        <div class="
								 col-md-12 ">
           <input type=" text "  name=" user_name " class=" form-control " placeholder=" user
								 name ">
         
          </div>
         </div>
      
  
<br>
<div class=" form-group
								 ">
<label>Looking for</label>
          
        </div>
        <div class=" row ">
        <div class="
								 col-md-6 ">
           <input type=" radio " value=" Female " name=" loking_for
								 "> Bride
         </div>
             <div class=" col-md-6 ">
          
             <input type=" radio
								 " value=" Male " name=" loking_for
								 "> Groom
             
          </div>   
          </div>
         
      
  
<br>
     <div class="
								 form-group ">
      
          <label>Age</label>
        </div>
        <div class=" row
								 ">
        <div class=" col-md-5 ">
           <select name=" age_from " class=" form-control
								 ">
              <option value="
								 ">Select</option>
            
                                    @for($i =  date('y');  $i <= date('y')+82 ; $i++)
  <option value="
								 {{ $i }}
								 " >{{ $i }}</option>
@endfor 
            </select>
             
          </div>    
          <div class="
								 col-xs-1 text-center ">
            To
          </div>
          <div class=" col-md-5
								 ">
            <select name=" age_to " class=" form-control ">
              <option value="
								 ">Select</option>
                                    @for($i = date('y')+82; $i >= date('y'); $i--)
  <option value="
								 {{ $i }}
								 " >{{ $i }}</option>
@endfor 
            </select>
         
          </div>
     </div>
        <br>
      <div class="
								 form-group ">
          <label>Martial Status</label>
        </div>
        <div class=" row
								 ">
        <div class=" col-md-6 ">
           <input type=" radio " value=" Unmaried " name=" martial_status
								 "> Unmaried
         </div>
         <div class=" col-md-6 ">
            <input type=" radio " value=" Widow
								 Widower " name=" martial_status "> Widow/Widower
          </div>
          <div class=" col-md-6
								 ">
             <input type=" radio " value=" Divorcee " name=" martial_status
								 "> Divorcee
           </div>
           <div class=" col-md-6 ">
             <input type=" radio " value="
								 Seprated " name=" martial_status "> Seprated
           </div>
           <div class=" col-md-6
								 ">
              <input type=" radio " value=" Annulled " name=" martial_status
								 "> Annulled
          </div>
         </div>
         <br>
        <div class=" form-group
								 ">
          <label>Height</label>
        </div>
         <div class=" row ">
        <div class=" col-md-5
								 ">
            <select name=" height_from " class=" form-control
								 ">
            
                     <option value="
								 ">Height..</option>
                        <option value=" Below 4ft 6in - 137cm
								 ">Below 4ft 6in - 137cm</option>
                      <option value=" 4ft 6in - 137cm
								 ">4ft 6in - 137cm</option>
                      <option value=" 4ft 7in - 139cm
								 ">4ft 7in - 139cm</option>
                      <option value=" 4ft 8in - 142cm
								 ">4ft 8in - 142cm</option>
                      <option value=" 4ft 9in - 144cm
								 ">4ft 9in - 144cm</option>
                      <option value=" 4ft 10in - 147cm
								 ">4ft 10in - 147cm</option>
                      <option value=" 4ft 11in - 149cm
								 ">4ft 11in - 149cm</option>
                      <option value=" 5ft - 152cm
								 ">5ft - 152cm</option>
                      <option value=" 5ft 1in - 154cm
								 ">5ft 1in - 154cm</option>
                      <option value=" 5ft 2in - 157cm
								 ">5ft 2in - 157cm</option>
                      <option value=" 5ft 3in - 160cm
								 ">5ft 3in - 160cm</option>
                      <option value=" 5ft 4in - 162cm
								 ">5ft 4in - 162cm</option>
                      <option value=" 5ft 5in - 165cm
								 ">5ft 5in - 165cm</option>
                      <option value=" 5ft 6in - 167cm
								 ">5ft 6in - 167cm</option>
                      <option value=" 5ft 7in - 170cm
								 ">5ft 7in - 170cm</option>
                      <option value=" 5ft 8in - 172cm
								 ">5ft 8in - 172cm</option>
                      <option value=" 5ft 9in - 175cm
								 ">5ft 9in - 175cm</option>
                      <option value=" 5ft 10in - 177cm
								 ">5ft 10in - 177cm</option>
                      <option value=" 5ft 11in - 180cm
								 ">5ft 11in - 180cm</option>
                      <option value=" 6ft - 182cm
								 ">6ft - 182cm</option>
                      <option value=" 6ft 1in - 185cm
								 ">6ft 1in - 185cm</option>
                      <option value=" 6ft 2in - 187cm
								 ">6ft 2in - 187cm</option>
                      <option value=" 6ft 3in - 190cm
								 ">6ft 3in - 190cm</option>
                      <option value=" 6ft 4in - 193cm
								 ">6ft 4in - 193cm</option>
                      <option value=" 6ft 5in - 195cm
								 ">6ft 5in - 195cm</option>
                      <option value=" 6ft 6in - 198cm
								 ">6ft 6in - 198cm</option>
                      <option value=" 6ft 7in - 200cm
								 ">6ft 7in - 200cm</option>
                      <option value=" 6ft 8in - 203cm
								 ">6ft 8in - 203cm</option>
                      <option value=" 6ft 9in - 205cm
								 ">6ft 9in - 205cm</option>
                      <option value=" 6ft 10in - 208cm
								 ">6ft 10in - 208cm</option>
                      <option value=" 6ft 11in - 210cm
								 ">6ft 11in - 210cm</option>
                      <option value=" 7ft - 213cm
								 ">7ft - 213cm</option>
                      <option value=" Above 7ft - 213c
								 ">Above 7ft - 213cm</option>
            </select>
             
          </div>    
          <div class="
								 col-xs-1 text-center ">
            To
          </div>
          <div class=" col-md-5
								 ">
            <select name=" height_to " class=" form-control
								 ">
              
             
                     <option value="
								 ">Height..</option>
                        <option value=" Below 4ft 6in - 137cm
								 ">Below 4ft 6in - 137cm</option>
                      <option value=" 4ft 6in - 137cm
								 ">4ft 6in - 137cm</option>
                      <option value=" 4ft 7in - 139cm
								 ">4ft 7in - 139cm</option>
                      <option value=" 4ft 8in - 142cm
								 ">4ft 8in - 142cm</option>
                      <option value=" 4ft 9in - 144cm
								 ">4ft 9in - 144cm</option>
                      <option value=" 4ft 10in - 147cm
								 ">4ft 10in - 147cm</option>
                      <option value=" 4ft 11in - 149cm
								 ">4ft 11in - 149cm</option>
                      <option value=" 5ft - 152cm
								 ">5ft - 152cm</option>
                      <option value=" 5ft 1in - 154cm
								 ">5ft 1in - 154cm</option>
                      <option value=" 5ft 2in - 157cm
								 ">5ft 2in - 157cm</option>
                      <option value=" 5ft 3in - 160cm
								 ">5ft 3in - 160cm</option>
                      <option value=" 5ft 4in - 162cm
								 ">5ft 4in - 162cm</option>
                      <option value=" 5ft 5in - 165cm
								 ">5ft 5in - 165cm</option>
                      <option value=" 5ft 6in - 167cm
								 ">5ft 6in - 167cm</option>
                      <option value=" 5ft 7in - 170cm
								 ">5ft 7in - 170cm</option>
                      <option value=" 5ft 8in - 172cm
								 ">5ft 8in - 172cm</option>
                      <option value=" 5ft 9in - 175cm
								 ">5ft 9in - 175cm</option>
                      <option value=" 5ft 10in - 177cm
								 ">5ft 10in - 177cm</option>
                      <option value=" 5ft 11in - 180cm
								 ">5ft 11in - 180cm</option>
                      <option value=" 6ft - 182cm
								 ">6ft - 182cm</option>
                      <option value=" 6ft 1in - 185cm
								 ">6ft 1in - 185cm</option>
                      <option value=" 6ft 2in - 187cm
								 ">6ft 2in - 187cm</option>
                      <option value=" 6ft 3in - 190cm
								 ">6ft 3in - 190cm</option>
                      <option value=" 6ft 4in - 193cm
								 ">6ft 4in - 193cm</option>
                      <option value=" 6ft 5in - 195cm
								 ">6ft 5in - 195cm</option>
                      <option value=" 6ft 6in - 198cm
								 ">6ft 6in - 198cm</option>
                      <option value=" 6ft 7in - 200cm
								 ">6ft 7in - 200cm</option>
                      <option value=" 6ft 8in - 203cm
								 ">6ft 8in - 203cm</option>
                      <option value=" 6ft 9in - 205cm
								 ">6ft 9in - 205cm</option>
                      <option value=" 6ft 10in - 208cm
								 ">6ft 10in - 208cm</option>
                      <option value=" 6ft 11in - 210cm
								 ">6ft 11in - 210cm</option>
                      <option value=" 7ft - 213cm
								 ">7ft - 213cm</option>
                      <option value=" Above 7ft - 213c
								 ">Above 7ft - 213cm</option>
            </select>
</div>
</div>
<br>
<div class=" pull-right
								 ">
<button type=" button " class=" btn btn-secondary " data-dismiss=" modal " style=" padding: 5px;
								 background-color: red ">Close</button>
<button type=" submit " class=" btn btn-success " style=" padding: 5px;
								 background-color: green; ">Search</button>
</div>
<div class=" clearfix
								 "></div>
</form>
</div>
</div>
</div>
</div>

{{-- Job search --}}



    <div class=" modal fade
								 " data-backdrop=" static " data-keyboard=" false " id=" job_search " tabindex=" -1 " role=" dialog
								 " aria-labelledby=" exampleModalLabel " aria-hidden=" true ">
<div class=" modal-dialog " role=" document
								 ">
<div class=" modal-content ">
<div class=" modal-header ">
<h5 class=" modal-title tb-modal-title " id="
								 exampleModalLabel ">Search by Occupation</h5>
</div>
<div class=" modal-body ">
<form method=" get " action="
								 {{ url( 'user-search') }} ">
  {{ csrf_field() }}
<div class=" form-group ">
<label class=" col-form-label
								 ">Search Occupation</label>
 <select name=" job "  class=" job form-control ">
<option value=" Softwarw
								 Engineer ">Softwarw Engineer</option>
<option value=" Producer/Director
								 ">Producer/Director</option>
<option value=" Media ">Media</option>
<option value=" Marketing Manager
								 ">Marketing Manager</option>
<option value=" HR Manager ">HR Manager</option>
<option value=" Lawyer
								 ">Lawyer</option>
<option value=" I.T Porfissional ">I.T Porfissional</option>
<option value=" Teacher
								 ">Teacher</option>
<option value=" University Lacturer ">University Lacturer</option>
<option value=" Business
								 Administration ">Business Administration</option>
<option value=" Admin Officer
								 "> Admin Officer</option>
<option value=" Cival Engineer ">Cival Engineer </option>
<option value=" Electrical
								 Engineer ">Electrical Engineer</option>
{{-- <option value="MBBS ">MBBS</option> --}}
<option value=" Doctor
								 ">Doctor</option>
<option value=" BBA ">BBA</option>
<option value=" Chartered Accountant
								 ">Chartered Accountant</option>

<option value=" CSS Officer ">CSS Officer </option>
<option value=" No
								 Occupation ">No Occupation </option>
<option value=" Business ">Business</option>
<option value=" Pilot
								 ">Pilot</option>
<option value=" Police Officer ">Police Officer</option>
<option value=" Army Officer
								 ">Army Officer</option>
<option value=" Air Force ">Air Force</option>
<option value=" Designer
								 ">Designer</option>
<option value=" Computer Hardware ">Computer Hardware</option>
<option value=" Auto Mobile
								 ">Auto Mobile</option>
<option value=" Traffic Warden ">Traffic Warden</option>
<option value=" Farmer
								 ">Farmer</option>
<option value=" Shop Keeper ">Shop Keeper</option>

<option value=" Real Estate
								 ">Real Estate</option>

</select>

</div>
<div class=" pull-right ">
<button type=" button " class=" btn
								 btn-secondary " data-dismiss=" modal ">Close</button>
<button type=" submit " class=" btn btn-success
								 ">Search</button>
</div>
<div class=" clearfix
								 "></div>
</form>
</div>
</div>
</div>
</div>


{{-- education search modal --}}
    <div class=" modal fade
								 " data-backdrop=" static " data-keyboard=" false " id=" edu_search " tabindex=" -1 " role=" dialog
								 " aria-labelledby=" exampleModalLabel " aria-hidden=" true ">
<div class=" modal-dialog " role=" document
								 " style=" margin-top: 100px; ">
<div class=" modal-content ">
<div class=" modal-header ">
<h5 class="
								 modal-title tb-modal-title " id=" exampleModalLabel ">Search by education</h5>
</div>
<div class=" modal-body
								 ">
<form method=" get " action=" {{ url( 'user-search') }} ">
  {{ csrf_field() }}
<div class=" form-group
								 ">
<label class=" col-form-label ">Search education</label>
 <select name=" qualification " id=" " class="
								 qualification form-control ">
<option selected=" selected " value="
								 ">--- Select ---</option>
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
<option value='Company Secretary (CS)'S>Company Secretary (CS)</option>
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
<div class="
								 pull-right ">
<button type=" button " class=" btn btn-secondary " data-dismiss=" modal " style=" padding: 5px;
								 background-color: red; ">Close</button>
<button type=" submit " class=" btn btn-success " style=" padding:5px;
								 background-color: green; ">Search</button>
</div>
<div class=" clearfix
								 "></div>
</form>
</div>
</div>
</div>
</div>



    {{-- id search modal --}}

    <div class=" modal fade
								 " data-backdrop=" static " data-keyboard=" false " id=" id_search " tabindex=" -1 " role=" dialog
								 " aria-labelledby=" exampleModalLabel " aria-hidden=" true ">
<div class=" modal-dialog " role=" document
								 " style=" margin-top: 100px; ">
<div class=" modal-content ">
<div class=" modal-header ">
<h5 class="
								 modal-title tb-modal-title " id=" exampleModalLabel ">Search by user name</h5>
</div>
<div class=" modal-body
								 ">
<form method=" get " action=" {{ url( 'user-search') }} ">
  {{ csrf_field() }}
<div class=" form-group
								 ">
<label class=" col-form-label ">User name search</label>
  <input type=" text " placeholder=" search by
								 name or user name " class=" form-control " name=" user_name ">

</div>
<div class=" pull-right
								 ">
<button type=" button " class=" btn btn-secondary " data-dismiss=" modal " style=" padding: 5px;
								 background-color: red; ">Close</button>
<button type=" submit " class=" btn btn-success " style=" padding:
								 5px; background-color: green; ">Search</button>
</div>
<div class=" clearfix
								 "></div>
</form>
</div>
</div>
</div>
</div>
    <!-- <script src=" {{ $user_assets }}/js/bootstrap.min.js
								 "></script> -->
    @stack('js')

    <style type=" text/css
								 ">
#wait {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: url('{{ $user_assets }}/loading.gif') 50% 50% no-repeat rgba(249,249,249,0.7);
        background-size: 150px 150px;
      }

      </style>
      @if(count(user_data()))
      <script type="
								 text/javascript
								 ">
       

  var idleTime = 0;
    var idleInterval = setInterval(timerIncrement, 60000); // 1 minute

    //Zero the idle timer on mouse movement.
    $(this).mousemove(function (e) {
        idleTime = 0;
    });
    $(this).keypress(function (e) {
        idleTime = 0;
    });



function timerIncrement() {
    idleTime = idleTime + 1;
    if (idleTime > 30) { // 20 minutes
   $.ajax({
    url:'{{url('/check-login-status')}}',
            type: 'POST',
            data: {
              "
								 _token ": " {{ csrf_token() }} ",
              " user_id
								 " : {{user_data()->id}}
            },
          success:function(response) {
            
          }

        });
    }
}

</script>

@endif

</body>

</html>