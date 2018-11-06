@extends('user/user_master_layout')
@section('data')

<!--[if IE]>
            <link rel="stylesheet" href="{{ $user_assets }}/css/style-ie.css" />
        <![endif]-->
<!--[if IE]>
            <script src="{{ $user_assets }}/js/html5shiv.js"></script>
        <![endif]-->

<!-- end logo -->
<!-- search and cart  -->

<!-- end search and cart  -->
<!-- toggle navigation -->
<!-- end navigation panel -->
<!-- slider -->
<!-- <div class="bigmenu">
    <div class="t-content">
        <div class="t-right"></div>
        <a href="javascript:;" class="cross"><i class="fa fa-times"></i></a>
    </div>
</div> -->

<style>

	/* @media (max-width:991px) {
		.nav.navbar-nav {
			display:block !important;
		}
	 } */
	html {
        overflow-x:hidden;
	 }

body::-webkit-scrollbar-track, body *::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.1);
	background-color: #F5F5F5;
	border-radius: 10px;
}

body::-webkit-scrollbar, body *::-webkit-scrollbar
{
	width: 0.35rem;
	height: 0.35rem;
	background-color: #F5F5F5;
}

body::-webkit-scrollbar-thumb, body *::-webkit-scrollbar-thumb
{
	border-radius: 10px;
	background-color: #FFF;
	background-image: -webkit-gradient(linear,
  40% 0%,
  75% 84%,
  from(#f47e2a),
  to(#8B5BD1),
  color-stop(.6,#B88FF3))
}
	 
	 .imgwithh2 {
		width: 16px;
    	top: -4px;
	}

	 .how-to-discover {
		 display:inline;
		 font-size:21px !important;
	 }

.shrink-nav .logo-light {
    display: block !important;
    opacity: 1;
}

.dropdown-menu {
    min-width: 144px;
    padding: 5px 15px 6px;
}

    @media (max-width:1200px) {

        #search-div .well {
            height:140px !important;
            text-align:center;
        }

        #more-search-options-div {
            position:absolute;
            right:-50px;
         }

         .axat_img1::before, .axat_img2::after,  .axat_img4::after{
             display:none !important;
         }

         .axat_img1, .axat_img3, .axat_img4, .axat_img2 {
             margin: 0 0 70px 0;
         }

         .text-line3 {
             margin:0;
         }

         .desktop-screen .row{
             /* margin-top:-180px; */
         }
    }

     @media (max-width:991px) {
        #search-div .well {
            height:290px !important;
            margin:auto;
        }

         #more-search-options-div {
             position:relative;
             right:0;
         }

         #search-div .well #select-age-div{
            display:inline-block !important;
        }
        #search-div .well #select-age-div table{
            margin:auto;
        }

         #more-search-options-div table {
             margin:auto;

         }

        #more-search-options-div table tr td{
            padding-top:0 !important;
        }

        .blog-container {
            margin-bottom:30px;
        }

        .blog-container:last-child {
            margin-bottom:0;
        }

        #our-partners-section {
           overflow:hidden;
		  }
		  
		  .container.responsive-screen {
			margin-top:40px;
			padding-top:40px;
			border-top:2px solid #EEE8F9;
	 	}
    }

    @media (max-width:660px) {
        #our-partners-section #Carousel {
            margin-left:19vw;
        }
    }

    .footer-middle {
        text-align:left;
    }

}
</style>

<section class=" parallax-fix full-screen no-padding " style="height:750px;"> <img class="parallax-background-img" src="{{ $user_assets }}/images/banner1.jpg"
	 alt="" />
	<div class="container full-screen position-relative">
		<div class="slider-typography">
			<div class="slider-text-middle-main">
				<div class=" text-left slider-text-middle1">
					<div class="col-lg-8 center-col">
						@if(empty(Session::get('user_id')))
						<div class="seeking-form">
							<h1 class=" lightblue-text big text-center no-letter-spacing" style="font-family:sans-serif;">Register
								Now<span style="color:#ed6c05; font-weight:bold"> Its Free </span></h1>
							<h4 class="lightblue-text text-center">Search your ideal life partner through: Location |
								Lifestyle | Profession | Choices.</h4>

							<form method="post" class="padding-three" action="{{ url('signup') }}">
								{{ csrf_field() }}
								<div class="col-lg-6 ">
									<div class="form-group">
										<!-- label -->
										<label class=" white-text" style="font-family:sans-serif;">First Name *</label>
										<!-- end label -->
										<!-- select -->
										<input id="textbox" name="fname" class="input-round big-input" type="text" placeholder="Enter First Name">

										<!-- end select -->
									</div>
								</div>
								<div class="col-lg-6 ">
									<div class="form-group">
										<!-- label -->
										<label class=" white-text" style="font-family:sans-serif;">Last Name *</label>
										<!-- end label -->
										<!-- select -->

										<input id="textbox" name="lname" class="input-round big-input" type="lname" placeholder="Enter Last Name">

										<!-- end select -->
									</div>
								</div>
								<div class="clearfix"></div>
								<div class="col-lg-6 ">
									<div class="form-group">
										<!-- label -->
										<label class=" white-text" style="font-family:sans-serif;">Email *</label>
										<!-- end label -->
										<!-- select -->

										<input id="textbox" name="email" class="input-round big-input" type="email" placeholder="Enter Email">

										<!-- end select -->
									</div>
								</div>
								<div class="col-lg-6 ">
									<div class="form-group">
										<!-- label -->
										<label for="textbox2" class=" white-text" style="font-family:sans-serif;">Gender</label>
										<!-- end label -->
										<!-- input -->
										<div class="select-style input-round big-input">
											<select selected="selected" name="gender">
												<option value="">Please Select</option>
												<option value="Male">Male</option>
												<option value="Female">Female</option>

											</select>
										</div>
										<!-- end input -->
									</div>
								</div>

								<div class="col-lg-12">
									</button>
									<p class="text-center lightblue-text">We guarantee that your contact details will
										remain invisible to other members and will not be shared!</p>
									<button type="submit" class="highlight-button btn btn-medium btn-round button white-text no-letter-spacing center-col display-table text-transform-none ">Register
										Now (It's Free)</button>
								</div>
							</form>
							@else
							<div class="seeking-form">
								<h1 class=" lightblue-text big text-center no-letter-spacing" style="font-family:sans-serif;">Search
									Now<span style="color:#ed6c05; font-weight:bold"> Its Free </span></h1>
								<h4 class="lightblue-text text-center" style='margin: auto 14px;'>Search your ideal life partner through: Location
									| Lifestyle | Profession | Choices.</h4>

								<form method="get" class="padding-three" action="{{ url('user-search') }}">
									{{ csrf_field() }}
									<div class="col-lg-6 ">
										<div class="form-group">
											<!-- label -->
											<label class=" white-text" style="font-family:sans-serif;">Age From </label>
											<!-- end label -->
											<!-- select -->
											<div class="select-style input-round big-input">
												<select name="age_from" id="">
													<option value="">Select</option>
													@for($i = date('y'); $i <= date('y')+82 ; $i++) <option value="{{ $i }}">{{
														$i }}</option>
														@endfor
												</select>
											</div>
											<!-- end select -->
										</div>
									</div>
									<div class="col-lg-6 ">
										<div class="form-group">
											<!-- label -->
											<label class=" white-text" style="font-family:sans-serif;">Age to </label>
											<!-- end label -->
											<!-- select -->
											<div class="select-style input-round big-input">
												<select name="age_to" id="">
													<option value="">Select</option>
													@for($i = date('y')+82; $i >= date('y'); $i--)
													<option value="{{ $i }}">{{ $i }}</option>
													@endfor
												</select>
											</div>
											<!-- end select -->
										</div>
									</div>
									<div class="clearfix"></div>
									<div class="col-lg-6 ">
										<div class="form-group">
											<!-- label -->
											<label class=" white-text" style="font-family:sans-serif;">Language </label>
											<!-- end label -->
											<!-- select -->
											<div class="select-style input-round big-input">
												<select name="language" id="">
													<option value="">Please Select...</option>
													<option value="">Select</option>
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
													<option value="Malayalam">Malayalam
													</option>
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

											<!-- end select -->
										</div>
									</div>
									<div class="col-lg-6 ">
										<div class="form-group">
											<!-- label -->
											<label for="textbox2" class=" white-text" style="font-family:sans-serif;">Gender</label>
											<!-- end label -->
											<!-- input -->
											<div class="select-style input-round big-input">
												<select selected="selected" name="gender">
													<option value="">Please Select</option>
													<option value="Male">Male</option>
													<option value="Female">Female</option>

												</select>
											</div>
											<!-- end input -->
										</div>
									</div>

									<div class="col-lg-12">
										</button>
										<p class="text-center lightblue-text">We guarantee that your contact details
											will remain invisible to other members and will not be shared!</p>
										<button type="submit" class="highlight-button btn btn-medium btn-round button white-text no-letter-spacing center-col display-table text-transform-none ">FIND
											YOUR PERFECT MATCH (It's Free)</button>
									</div>
								</form>
								@endif
								<div class="clearfix"></div>
								<p class=" text-center white-text" style="font-size:11px;"><a href="{{ url('term-condation') }}" class="lightblue-text">Terms
										&amp; Condition</a> | <a href="{{ url('policy-privacy') }}" class="lightblue-text">Privacy Policy</a></p>

							</div>
						</div>
					</div>
				</div>
				<!--  <div class="scroll-down"><a href="#about" class="inner-link"><i class="fa fa-arrow-down "></i> </a></div> -->
			</div>
		</div>
</section>

<!-- end slider -->

<script>
	$(document).ready(function(){
     $("#regbtn").click(function(){
        $("#reg").show();
        $("#srh").hide();
        $('#regbtn').css('color','#ED6C05');
        $('#srhbtn').css('color','#ffffff');    
    });

     $("#srhbtn").click(function(){
        $("#srh").show();
        $("#reg").hide();
        $('#srhbtn').css('color','#ED6C05');
        $('#regbtn').css('color','#ffffff');    
    });

   });
</script>

<!-- Serach Section -->
<section class="wow fadeIn padding-two-bottom searchsec" style="background-color:#F5F5F5;" id='search-container'>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2 style="text-align:center;font-stretch:semi-expanded;font-size:22px;padding-top:10px;font-family:sans-serif;text-transform: lowercase;">
					<span style="color:#ED6C05;text-transform: capitalize;">Muslim Profiles</span> that help you to
					find your special someone according to your preferences</h2>

			</div>
		</div>
		<div class="row" style="padding-top:30px;" id='search-div'>
			<div class="well" style="min-height:124px;background-color: #f47e2a;border-radius:10px;border:5px solid #bbbbbb; position:relative">
				<!-- <div class="col-md-2 col-sm-12"></div> -->
				<div class="col-md-3 col-sm-12">
					<form method="get" action="{{ url('user-search') }}">
						<label for="" style="font-weight:lighter;font-size:18px;color:#ffffff;">Looking For</label><br>
						<div style="display:inline-block;position:relative;">
							<label class="radio-inline"><input type="radio" value="Female" name="loking_for"><span style="color:#ffffff;">Bride</span></label>
							<label class="radio-inline"><input type="radio" value="Male" name="loking_for"><span style="color:#ffffff;">Groom</span></label>
						</div>
				</div>
				<div class="col-md-3 col-sm-12" id='select-age-div'>
					<table>
						<tr>
							<th style="font-weight:lighter;font-size:18px;color:#ffffff;">Age</th>
						</tr>
						<tr>
							<td>
								<select name="age_from" id="" style="border-radius:5px;margin-top:5px;background-color:#e3e3e3;">
									<option value="">Select</option>
									@for($i = date('y'); $i <= date('y')+82 ; $i++) <option value="{{ $i }}">{{ $i }}</option>
										@endfor
								</select>
							</td>
							<td style="padding-left:10px;font-size:18px;padding-right:10px;color:#ffffff;">To</td>
							<td>
								<select name="age_to" id="" style="border-radius:5px;margin-top:5px;background-color:#e3e3e3;">
									<option value="">Select</option>
									@for($i = date('y')+82; $i >= date('y'); $i--)
									<option value="{{ $i }}">{{ $i }}</option>
									@endfor
								</select>
							</td>
						</tr>

					</table>
				</div>
				<div class="col-md-3 col-sm-12">
					<button type="submit" class="btn searchbtn"><i class="fa fa-search" style="color:white;"></i>Search
						Now</button>
				</div>
				</form>
				<div class="col-md-3 col-sm-12" id='more-search-options-div'>
					<table>
						<tr>
							<td style="padding-top:40px"><a href="{{ url('advance-search') }}" style="font-size:14px;color:white;">More
									search options</a></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- // End Serach Section -->

<section id="about" class="wow fadeIn padding-two-bottom">
	<div class="container ">
		<div class="row">
			<div class="col-lg-7">
			<img class="imgwithh2" src="{{ $user_assets }}/images/puzzle.png" /> 
				<h1 style="font-family:sans-serif;font-size:26px;" class=" blue-text font-weight-500 text-transform-none margin-four-bottom how-to-discover">HOW TO DISCOVER THE PERFECT MATCH</h1>
				<p style="font-family:sans-serif;"><strong>"And of His signs is that He has created spouses for
						yourselves from your own selves so you might take comfort in them and He has created love and
						mercy among both of you. In this there is evidence (of the truth) for the people who
						(carefully) think." (Surah 30, Verse 21).</strong></p>

				<p style="font-family:sans-serif;"> Marriages are said to be have been made in heaven. But finding the
					perfect spouse who is compatible and meets the criteria for a perfect marriage is becoming quite
					difficult these days. People are not loyal and are fraudulent. As it is written in the holy Quran
					that the pious begets the pious, but at times the most pious ones get polluted by people who are
					nothing but scars of time. </p>
				<p style="font-family:sans-serif;"> In order to save you from this agony <strong>Kabool Hai</strong>
					has devised some methods that are all in all full proof and Alhamdulillah, by the grace of
					Al-Mighty Allah we make sure that our matrimonial portal is apt enough to find the right spouse for
					you, you daughter, son or anyone.</p>
				<p style="font-family:sans-serif;">The following steps will help you find the person you have been
					waiting for all your life</p>
			</div>
			<div class="col-lg-5 destop-show wow slideInRight" style="transition-timing-function:ease;transition-delay:0.25s;">
				<div class="axat_img1"><img src="{{ $user_assets }}/images/home04.png">
					<h2 class="text-line2 alt-font"><strong style="font-family:sans-serif;">Introduce Yourself</strong></h2>
					<p style="margin: 0 25px;font-family:sans-serif;">The first step is to create a profile of the
						potential candidate. Make sure that all the information you add is true and there is no
						discrepancy in the stated facts.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="container desktop-screen">
	<div class="row">
		<div class="col-lg-4 wow slideInLeft" data-wow-delay="0.2s">
			<div class="axat_img2"><img src="{{ $user_assets }}/images/home01.png">
				<h1 class="text-line2 " style="font-family:sans-serif;">Get In touch</h1>
				<p style="margin: 0 25px 20px;font-family:sans-serif;">After following the three steps, now comes the
					time to contact your heavenly match. The contact numbers or emails will be written along the
					profiles that will make it easy for you to access the one you seek.</p>
			</div>
		</div>
		<div class="col-lg-4 wow slideInUp" data-wow-delay="0.1s">
			<div class="axat_img3"> <img src="{{ $user_assets }}/images/home02.png">
				<h1 class="text-line2" style="font-family:sans-serif;">The Quest</h1>
				<p style="font-family:sans-serif;">Find the perfect match with the credentials of the profile you have
					made. By entering the keywords, you will be directed towards the potential candidates that match
					your profile and the demands that you require in your spouse.</p>
			</div>
		</div>
		<div class="col-lg-4 wow slideInUp" style="transition-delay:0.40s;">
			<div class="axat_img4"> <img src="{{ $user_assets }}/images/home03.png">
				<h1 class="text-line3" style="font-family:sans-serif;">Are You Ready?</h1>
				<p style="font-family:sans-serif;">After creating a profile please make sure that the candidate is
					ready to take the plunge in matrimony and will not be confused about what he or she wants.</p>
			</div>
		</div>
	</div>
</div>
<div class="container responsive-screen">
	<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 slideInRight">
			<div class="axat_img2">
				<img src="{{ $user_assets }}/images/home01.png">
				<h1 class="text-line2" style="font-family:sans-serif;">Introduce Yourself</h1>
				<p style="margin: 0 25px 20px;font-family:sans-serif;">The first step is to create a profile of the
					potential candidate. Make sure that all the information you add is true and there is no discrepancy
					in the stated facts.</p>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
			<div class="axat_img3">
				<img src="{{ $user_assets }}/images/home04.png">
				<h1 class="text-line2" style="font-family:sans-serif;">Make up one’s mind</h1>
				<p style="font-family:sans-serif;">Analizziamo il progetto e proponiamo un piano di web marketing su
					misura con obiettivi chiari e misurabili.</p>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 slideInDown">
			<div class="axat_img4">
				<img src="{{ $user_assets }}/images/home03.png">
				<h1 class="text-line3" style="font-family:sans-serif;">Are You Ready?</h1>
				<p style="font-family:sans-serif;">After creating a profile please make sure that the candidate is
					ready to take the plunge in matrimony and will not be confused about what he or she wants.</p>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 fadeInLeft">
			<div class="axat_img1">
				<img src="{{ $user_assets }}/images/home02.png">
				<h2 class="text-line2 alt-font"><strong style="font-family:sans-serif;">Get In touch</strong></h2>
				<p style="margin: 0 25px;font-family:sans-serif;">After following the three steps, now comes the time
					to contact your heavenly match. The contact numbers or emails will be written along the profiles
					that will make it easy for you to access the one you seek</p>
			</div>
		</div>
	</div>
</div>

<!-- end about section -->


<!-- Why choose -->
<section class="wow fadeIn padding-two-bottom choosesec" style="background-image:url('$user_assets/growbg.jpg');">
	<div class="container ">
		<div class="row">
			<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
			<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
				<h3 class="chosehed"><span style="text-transform:capitalize;">Say</span> <span style="text-transform:lowercase;">it
						with a pure heart</span> ‘KABOOL HAI’</h3>
				<p class="tdt"><strong style="text-align:center;">You shall encourage those of you who are single to
						get married. They may marry the righteous among your male and female servants, if they are
						poor. Allah will enrich them from His grace. Allah is Bounteous, Knower.[Quran 24:32] </strong><br><br>
					<strong>Kaboolhai</strong> is a free <strong> Muslim matrimonysite</strong> exclusively designed to
					engage all the Muslims in the pious bond of matrimony. The most blessed feat in the eyes of Allah
					is to be in <strong>Nikah</strong>. Getting registered in <strong>Kaboolhai</strong> is quite easy
					and convenient for everyone. All you have to do is to follow 3 simple steps. first of all,register,
					create a profile, search for the potential candidate, narrate your interests and ideologies and
					voila! You are ready to proceed!</p>
			</div>
			<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
		</div>

		<div class="row" style="padding-top:60px;padding-bottom:30px;">

			<div class="col-md-3 logsbdr">
				<div class="well" style="height:auto;border-bottom-color:#ED6C05;">
					<img src="{{ $user_assets }}/profile.png" class="logsimgs hvr-grow" />
					<div style="width:100%;height:100px;">
						<h3 class="imgdtext">Hassle Free And Tottaly Free Profile Registration</h3>

					</div>
					<p class="tdtd">Register for absolutely free matrimony profile. Spreading the teachings of Islam to
						find a suitable and compatible spouseis our main objective! <br><br></p>
				</div>
			</div>
			<div class="col-md-3 logsbdr">
				<div class="well" style="height:auto;border-bottom-color:#ED6C05;">
					<img src="{{ $user_assets }}/profile-screening.png" class="logsimgs hvr-grow" />
					<div style="width:100%;height:100px;">
						<h3 class="imgdtext">Carefully Scrutinized And Easily Reachable</h3>

					</div>
					<p class="tdtd">Our carefully scrutinized potential matrimonial candidate’s profiles have made it
						easy to find perfect match for all the people seeking perfect spouse.</p>
				</div>
			</div>
			<div class="col-md-3 logsbdr">
				<div class="well" style="height:auto;border-bottom-color:#ED6C05;">
					<img src="{{ $user_assets }}/globe.png" class="logsimgs hvr-grow" />
					<div style="width:100%;height:100px;">
						<h3 class="imgdtext">Go Global With Authentic Muslim Profiles</h3>

					</div>
					<p class="tdtd">Trust us! We give you the best technically advanced portal to find a perfect match
						for a happily ever life ahead. <br><br><br></p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="well" style="height:auto;border-bottom-color:#ED6C05;">

					<img src="{{ $user_assets }}/security.png" class="logsimgs hvr-grow" />
					<div style="width:100%;height:100px;">
						<h3 class="imgdtext">Privacy Mastered And 100% Secure</h3>

					</div>
					<p class="tdtd">We ensure that all the personal information is kept 100% secure and no one can
						invade into the privacy of candidates. <br><br><br></p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-8 col-xs-offset-4">
				<button class="pureregbtn"><a href="{{ url('register') }}" style="color:white">Register Now </a></button>
				{{-- <a href="" style="background-color:#ED6C05; width: 200px; ">Register Now </a> --}}
			</div>
		</div>
	</div>
</section>
<!-- // End why Choose -->
<!-- about section -->





<!-- video section -->

<section class="wow fadeIn padding-two-bottom videosec">
	<div class="container ">
		<div class="row">
			<div class="col-lg-5 col-md-5 col-xs-12 col-sm-5">
				<div class="videoContainer"> <img src="{{ $user_assets }}/images/marriage.jpg" class="img-responsive" />
					<span onclick="changeVideo('e80BbX05D7Y')"><i class="fa fa-play-circle" aria-hidden="true"></i></span>
				</div>
			</div>
			<div class="col-lg-1 col-md-1 col-xs-12 col-sm-1"></div>
			<div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
				<h2 class="alt-font white-text font-weight-500 text-transform-none sm-text-center" style="font-size:29px;position: relative;top: 9px;font-family:sans-serif;">What
					makes Kaboolhai Distinctive?</h2>
				<p style="margin-top:30px;color:#fff;font-size:17px;line-height:25px;font-family:sans-serif;text-align:justify;">
					Kaboolhai is specifically designed for the men and women who find it difficult to get a perfect
					match according to their demands and interests. Keeping in view the setup of some Muslim families,
					we have several ways as how the interaction of different people seeking a matrimonial knot can be
					made possible. When you are able to find your required match from the profiles that we have
					updated, all you have to do is to ask us to get you connected with that particular person. We can
					help you in arranging a meeting face to face or if the parents have updated their children’s
					profile they can meet the other candidate’s family or have a chat on the phone. We would serve as a
					facilitato on certain terms to direct you towards your perfect match. <a href="{{ url('distinctive') }}" style="color:#ED6C05;font-size:18px;padding-top:5px;font-weight:bold;">Read
						more...</a>
					<!-- or have a chat on the phone. We would serve as a facilitato on certain terms to direct you towards your perfect match.(hyperlink to be created)
We feel responsible in uniting the suitable candidates till the end. Kabool Hai is a matrimonial site that doesn’t only introduce people to each other but makes sure they are connected and things work out between them with assurance. So, don’t feel apprehensive. We are here to make you happy with a perfect <strong>married</strong> life! -->
				</p>
			</div>
		</div>
	</div>
</section>


<!-- our servises -->
<!-- <section class="wow fadeIn padding-two-bottom">
    <div class="container">
        <div class="row">
            <h1 class="chosehed">Our Services</h1><br><br>
        </div>
       <div class="row"> -->
<!-- <div class="col-lg-11 col-md-5 col-sm-8 col-xs-9 bhoechie-tab-container">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
              <div class="list-group">
                <a href="#" style="border-top:none;border-left:none;border-color:#ED6CDC;height:70px;" class="list-group-item active dub">
                  <div class="row" style="margin-top: 5px;">
                      <table style="margin-left:5px;margin-top:-12px;">
                           <tr>
                               <th style="padding-top:0px;vertical-align:middle;"><img width="60" height="60" src="{{ $user_assets }}/relationship-manager.png" class="logsimgs hvr-grow"/></th>
                               <th class="text-center" style="padding-top:0px;font-size:22px;font-weight:400;margin-left:50px;">&nbsp Makeup</th>
                           </tr>
                       </table>
                  </div>
                </a>
           -->
<!-- <a href="#" style="border-bottom:none;border-top:none;border-left:none;border-color: #ED6CDC;height:70px;" class="list-group-item dub">
                  <div class="row" style="margin-top: 5px;">
                      <table style="margin-left:5px;margin-top:-12px;">
                           <tr>
                               <th style="padding-top:0px;vertical-align:middle;"><img width="60" height="60" src="{{ $user_assets }}/relationship-manager.png" class="logsimgs hvr-grow"/></th>
                               <th class="text-center" style="padding-top:0px;font-size:22px;font-weight:400;margin-left:50px;">&nbsp Photography</th>
                           </tr>
                       </table>
                  </div>
                </a> -->
<!-- <a href="#" style="border-bottom:none;border-left:none;border-color: #ED6CDC;height:70px;vertical-align:initial;" class="list-group-item dub">
                 <div class="row">
                     <table style="margin-left:5px;margin-top:-12px;">
                           <tr>
                               <th style="padding-top:0px;vertical-align:middle;"><img width="60" height="60" src="{{ $user_assets }}/relationship-manager.png" class="logsimgs hvr-grow"/></th>
                               <th class="text-center" style="padding-top:0px;font-size:22px;font-weight:400;margin-left:50px;">&nbsp Photography</th>
                           </tr>
                       </table>
                  </div>
                </a> -->
<!-- <a href="#" style="border-bottom:none;border-left:none;border-color: #ED6CDC;height:70px;vertical-align:initial;" class="list-group-item dub">
                  <div class="row">
                      <table style="margin-left:5px;margin-top:-12px;">
                           <tr>
                               <th style="padding-top:0px;vertical-align:middle;"><img width="60" height="60" src="{{ $user_assets }}/relationship-manager.png" class="logsimgs hvr-grow"/></th>
                               <th class="text-center" style="padding-top:0px;font-size:22px;font-weight:400;margin-left:50px;">&nbsp Photography</th>
                           </tr>
                       </table>
                  </div>
                </a> -->
<!-- <a href="#" style="border-bottom:none;border-left:none;border-color: #ED6CDC;height:70px;vertical-align:initial;" class="list-group-item dub">
                  <div class="row">
                      <table style="margin-left:5px;margin-top:-12px;">
                           <tr>
                               <th style="padding-top:0px;vertical-align:middle;"><img width="60" height="60" src="{{ $user_assets }}/relationship-manager.png" class="logsimgs hvr-grow"/></th>
                               <th class="text-center" style="padding-top:0px;font-size:22px;font-weight:400;margin-left:50px;">&nbsp Photography</th>
                           </tr>
                       </table>
                  </div>
                </a>
                <a href="#" style="border-bottom:none;border-left:none;border-color: #ED6CDC;height:70px;vertical-align:initial;" class="list-group-item dub">
                  <div class="row">
                      <table style="margin-left:5px;margin-top:-12px;">
                           <tr>
                               <th style="padding-top:0px;vertical-align:middle;"><img width="60" height="60" src="{{ $user_assets }}/relationship-manager.png" class="logsimgs hvr-grow"/></th>
                               <th class="text-center" style="padding-top:0px;font-size:22px;font-weight:400;margin-left:50px;">&nbsp Photography</th>
                           </tr>
                       </table>
                  </div>
                </a>
              </div>
            </div> -->
<!-- <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
             -->
<!-- flight section -->
<!-- <div class="bhoechie-tab-content active">
                    <center> -->
<!-- <h2 style="margin-top: 0;color:#55518a;font-weight:bold;">Make Up</h2> -->
<!-- </center>
                    <img src="{{ $user_assets }}/makeup.jpg">
                    <p style="font-size:14px;padding-top:10px;text-align:justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    <div class="pull-right"><img width="100" height="100" src="{{ $user_assets }}/depilex.png"></div>
                </div> -->
<!-- train section -->
<!-- <div class="bhoechie-tab-content">
                     <center> -->
<!-- <h2 style="margin-top: 0;color:#55518a;font-weight:bold;">Make Up</h2> -->
<!-- </center>
                    <img src="{{ $user_assets }}/photography.jpg">
                    <p style="font-size:14px;padding-top:10px;text-align:justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    <div class="pull-right"><img width="100" height="100" src="{{ $user_assets }}/bhatiphoto.png"></div>
                </div> -->

<!-- hotel search -->
<!--                <div class="bhoechie-tab-content">
                     <center> -->
<!-- <h2 style="margin-top: 0;color:#55518a;font-weight:bold;">Make Up</h2> -->
<!-- </center>
                    <img src="{{ $user_assets }}/photography.jpg">
                    <p style="font-size:14px;padding-top:10px;text-align:justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    <div class="pull-right"><img width="100" height="100" src="{{ $user_assets }}/bhatiphoto.png"></div>
                </div> -->

<!--                 <div class="bhoechie-tab-content">
                     <center> -->
<!-- <h2 style="margin-top: 0;color:#55518a;font-weight:bold;">Make Up</h2> -->
<!-- </center>
                    <img src="{{ $user_assets }}/photography.jpg">
                    <p style="font-size:14px;padding-top:10px;text-align:justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    <div class="pull-right"><img width="100" height="100" src="{{ $user_assets }}/bhatiphoto.png"></div>
                </div>

                <div class="bhoechie-tab-content">
                     <center> -->
<!-- <h2 style="margin-top: 0;color:#55518a;font-weight:bold;">Make Up</h2> -->
<!-- </center>
                    <img src="{{ $user_assets }}/photography.jpg">
                    <p style="font-size:14px;padding-top:10px;text-align:justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    <div class="pull-right"><img width="100" height="100" src="{{ $user_assets }}/bhatiphoto.png"></div>
                </div>

                <div class="bhoechie-tab-content">
                     <center> -->
<!-- <h2 style="margin-top: 0;color:#55518a;font-weight:bold;">Make Up</h2> -->
<!-- </center>
                    <img src="{{ $user_assets }}/photography.jpg">
                    <p style="font-size:14px;padding-top:10px;text-align:justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    <div class="pull-right"><img width="100" height="100" src="{{ $user_assets }}/bhatiphoto.png"></div>
                </div>
            </div>
            </div>
            </div>  
    </div>
</section> -->
<!-- End of servises -->
<script>
	$(document).ready(function() {
    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });
});
</script>

<!-- grow num -->
<section class="wow fadeIn padding-two-bottom growsec" id="counter" style="margin-top:70px;">
	<div class="container">
		<div class="row">
			<!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 "  style="margin-bottom:50px;">
                <h3 class="growhed" style="color:#ED6C05;">The Numbers are Growing</h3>
            </div> -->
			<div class="row">
				<div class="col-sm-3">
					<div class="blockcontain">
						<div class="growlogodiv">
							<img src="{{ $user_assets }}/total-members.png" class="logsimgs hvr-grow" />
						</div>
						<div class="frownumdiv">
							<h5 class="textowndiv">Total Members</h5>
						</div>
					</div>
					<div class="textmaindiv">
						<div class="counter-value connct" data-count="5000">0</div>
					</div>
				</div>

				<div class="col-sm-3">
					<div class="blockcontain">
						<div class="growlogodiv">
							<img src="{{ $user_assets }}/countries.png" class="logsimgs hvr-grow" />
						</div>
						<div class="frownumdiv">
							<h5 class="contr">Countries</h5>
						</div>
					</div>
					<div class="textmaindiv">
						<div class="counter-value connct" data-count="5000">0</div>
					</div>
				</div>

				<div class="col-sm-3">
					<div class="blockcontain">
						<div class="growlogodiv">
							<img src="{{ $user_assets }}/verified-profile.png" class="logsimgs hvr-grow" />
						</div>
						<div class="frownumdiv">
							<h5 class="textowndiv">Varified Profile</h5>
						</div>
					</div>
					<div class="textmaindiv">
						<div class="counter-value connct" data-count="5000">0</div>
					</div>
				</div>

				<div class="col-sm-3">
					<div class="blockcontain">
						<div class="growlogodiv">
							<img src="{{ $user_assets }}/success-stories.png" class="logsimgs hvr-grow" />
						</div>
						<div class="frownumdiv">
							<h5 class="textowndiv" style="color: green">Success Stories</h5>
						</div>
					</div>
					<div class="textmaindiv">
						<div class="counter-value connct" data-count="5000">0</div>
					</div>
				</div>

			</div>
		</div>
</section>
<!-- // End why Choose -->


<!-- modal start -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="margin-top: 80px;">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<iframe id="iframeYoutube" width="100%" height="400" src="#" frameborder="0" allowfullscreen></iframe>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!-- modal end -->

<!-- video section end -->





<!-- end services section -->
<!-- key person section -->
<section id="key-person" class="wow fadeIn">
	<div class=" container-fluid">
		<div class="row">
			<!-- section title -->
			<div class="col-md-12 text-center">
				<h1 style="font-family:sans-serif;" class=" orange-text text-transform-none "><img class="imgwithh2_3" src="{{ $user_assets }}/images/blogicon.png" />
					Our Latest Blog</h1>
			</div>
			<!-- end section title -->

		</div>
		<div class="row margin-three">
			<!-- key person item -->


			<div class="col-md-3 col-xs-4 wow fadeInUp blog-container" data-wow-duration="300ms">
				<div class="blog-div-orange">
					<h1 style="font-family:sans-serif;text-align:left;font-size:24px;margin-left:3px;">Blog Two</h1>
					<div style="width:90%;margin-left:5%;height:140px;">
						<img style="height:140px;" src="{{ $user_assets }}/growbg.jpg" class="logsimgs hvr-grow" />
					</div>
					<p style="font-family:sans-serif;margin-left:3px;font-size:16px;">Donec vitae facilisis dolor.
						Quisque quis sollicitudin metus Donec vitae facilisis dolor. Quisque quis sollicitudin metus</p>
					<div class="date-div-orange white-text alt-font">8 August 2017</div>
					<div class="orange-hover-div"> <i class="fa fa-plus-square-o" aria-hidden="true"></i> READ MORE
					</div>
				</div>
			</div>
			<div class="col-md-3 col-xs-4 wow fadeInUp blog-container" data-wow-duration="300ms">
				<div class="blog-div-green">
					<h1 style="font-family:sans-serif;text-align:left;font-size:24px;margin-left:3px;">Blog One</h1>
					<div style="width:90%;margin-left:5%;height:140px;">
						<img style="height:140px;" src="{{ $user_assets }}/growbg.jpg" class="logsimgs hvr-grow" />
					</div>
					<p style="font-family:sans-serif;margin-left:3px;font-size:16px;">Donec vitae facilisis dolor.
						Quisque quis sollicitudin metus Donec vitae facilisis dolor. Quisque quis sollicitudin metus
					</p>
					<div class="date-div white-text alt-font">8 August 2017</div>
					<div class="green-hover-div"> <i class="fa fa-plus-square-o" aria-hidden="true"></i> READ MORE
					</div>
				</div>
			</div>

			<div class="col-md-3 col-xs-4 wow fadeInUp blog-container" data-wow-duration="300ms">
				<div class="blog-div-orange">
					<h1 style="font-family:sans-serif;text-align:left;font-size:24px;margin-left:3px;">Blog One</h1>
					<div style="width:90%;margin-left:5%;height:140px;">
						<img style="height:140px;" src="{{ $user_assets }}/growbg.jpg" class="logsimgs hvr-grow" />
					</div>
					<p style="font-family:sans-serif;margin-left:3px;font-size:16px;">Donec vitae facilisis dolor.
						Quisque quis sollicitudin metus Donec vitae facilisis dolor. Quisque quis sollicitudin metus</p>
					<div class="date-div-orange white-text alt-font">8 August 2017</div>
					<div class="orange-hover-div"> <i class="fa fa-plus-square-o" aria-hidden="true"></i> READ MORE
					</div>
				</div>
			</div>
			<div class="col-md-3 col-xs-4 wow fadeInUp blog-container" data-wow-duration="300ms">
				<div class="blog-div-green">
					<h1 style="font-family:sans-serif;text-align:left;font-size:24px;margin-left:3px;">Blog One</h1>
					<div style="width:90%;margin-left:5%;height:140px;">
						<img style="height:140px;" src="{{ $user_assets }}/growbg.jpg" class="logsimgs hvr-grow" />
					</div>
					<p style="font-family:sans-serif;font-size:16px;margin-left:3px">Donec vitae facilisis dolor.
						Quisque quis sollicitudin metus Donec vitae facilisis dolor. Quisque quis sollicitudin metus</p>
					<div class="date-div white-text alt-font">8 August 2017</div>
					<div class="green-hover-div"> <i class="fa fa-plus-square-o" aria-hidden="true"></i> READ MORE
					</div>
				</div>
			</div>
			<!-- end key person item -->

		</div>
	</div>
</section>

<section class="wow fadeIn" style="background-color:#fffff0;" id='our-partners-section'>
	<div class="container">
		<div class="row">
			<h1 class="chosehed">Our Partners</h1><br><br>
		</div>

		<div class="row">
			<div class="col-md-2 col-sm-2 col-xs-2"></div>
			<div class="col-md-9 col-sm-9 col-xs-9">
				<div id="Carousel" class="carousel slide" style="width:90%;">

					<!--  <ol class="carousel-indicators">
                            <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#Carousel" data-slide-to="1"></li>
                            <li data-target="#Carousel" data-slide-to="2"></li>
                        </ol> -->

					<!-- Carousel items -->
					<div class="carousel-inner" style="width:989px;">

						<div class="item active">
							<div class="row">
								<div class="col-md-2 col-xs-4"><a href="http://reg.thonburi-u.ac.th/registrar/home.asp"><img src="https://tmaxtech.co.th/images/Partner/1.jpg"
										 alt="Image" style="height:80px;"></a></div>
								<div class="col-md-2 col-xs-4"><a href="http://www.spu.ac.th/"><img src="https://tmaxtech.co.th/images/Partner/2.jpg"
										 alt="Image" style="height:80px;"></a></div>
								<div class="col-md-2 col-xs-4"><a href="http://www.spu.ac.th/"><img src="https://tmaxtech.co.th/images/Partner/3.png"
										 alt="Image" style="height:80px;"></a></div>
								<div class="col-md-2 col-xs-4"><a href="https://www.mahidol.ac.th/th/"><img src="https://tmaxtech.co.th/images/Partner/4.jpg"
										 alt="Image" style="height:80px;"></a></div>
								<div class="col-md-2 col-xs-4"><a href="https://www.mahidol.ac.th/th/"><img src="https://tmaxtech.co.th/images/Partner/4.jpg"
										 alt="Image" style="height:80px;"></a></div>
							</div>
							<!--.row-->
						</div>
						<!--.item-->


						<div class="item">
							<div class="row">
								<div class="col-md-2 col-xs-4"><a href="http://www.oaep.go.th/"><img src="https://tmaxtech.co.th/images/Partner/13.png"
										 alt="Image" style="max-height:80px;"></a></div>
								<div class="col-md-2 col-xs-4"><a href="http://www.ops.go.th/"><img src="https://tmaxtech.co.th/images/Partner/14.jpg"
										 alt="Image" style="max-height:80px;"></a></div>
								<div class="col-md-2 col-xs-4"><a href="/www.tisi.go.th"><img src="https://tmaxtech.co.th/images/Partner/15.png"
										 alt="Image" style="max-height:80px;"></a></div>
								<div class="col-md-2 col-xs-4"><a href="/www.oie.go.th/"><img src="https://tmaxtech.co.th/images/Partner/16.png"
										 alt="Image" style="max-height:80px;"></a></div>
								<div class="col-md-2 col-xs-4"><a href="/www.oie.go.th/"><img src="https://tmaxtech.co.th/images/Partner/16.png"
										 alt="Image" style="max-height:80px;"></a></div>


							</div>
						</div>



					</div>

					<a style="left:-99px;top:15px;" class="left carousel-control" href="#Carousel" data-slide="prev">
						<span class="fa fa-angle-left fa-3x" style="color:#f47e2a;"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a style="top:15px;right:-83px;" class="right carousel-control" href="#Carousel" data-slide="next">
						<span class="fa fa-angle-right fa-3x" style="color:#f47e2a;"></span>
						<span class="sr-only">Next</span>
					</a>

				</div>


			</div>
			<div class="col-md-1 col-sm-1 col-xs-1"></div>
		</div>
	</div>
</section>
<br><br>
<script>
	$(document).ready(function() {
    $('#Carousel').carousel({
        interval: 6000
    })
});
</script>


<div class="modal fade" id="advert" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content modal-md" style="margin-top: 115px;">
			<div class="modal-header">
				<h5 class="modal-title tb-modal-title" id="exampleModalLabel">
					@if(count($advert))
					{{ $advert->advert_title }} </h5>
			</div>
			<div class="modal-body">


				<img src="{{ $admin_assets }}/advert_image/{{ $advert->advert_image }}" style="width: 100%; height: 260px;">
				@endif
				<div class="pull-right">
					<button type="button" class="btn btn-secondary" data-dismiss="modal" style="padding: 10px;">Close</button>

				</div>
				<div class="clearfix"></div>

			</div>
		</div>
	</div>
</div>
<!-- end key person section -->
<!-- case study section -->

<!-- case study section -->
<!-- testimonial section -->

<!-- end testimonial section -->
<!-- blog section -->

<!-- end blog section -->
<!-- approach section -->

<!-- end approach section -->
<!-- new project section -->

<!-- end new project section -->
<!-- footer -->


@endsection
@push('css')
<link rel="stylesheet" href="{{ $user_assets }}/css/animate.css" />
<!-- bootstrap -->
<link rel="stylesheet" href="{{ $user_assets }}/css/bootstrap.css" />
<!-- et line icon -->
{{--
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --}}
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
<link rel="stylesheet" href="{{ $user_assets }}/css/custom.css" />
<!-- responsive -->
<link rel="stylesheet" href="{{ $user_assets }}/css/responsive.css" />

<link rel="stylesheet" href="{{ $user_assets }}/css/hover-min.css" />



@endpush
<!-- end footer -->
<!-- javascript libraries / javascript files set #1 -->
@push('js')


<!-- <script type="text/javascript">
    $(document).ready(function() {
        $('.bigmenu').hide();
        $('.humburger').click(function() {
            $('.seeking-form').hide("fast");
            $('.logo-light').hide("fast");
            $('.humburger').hide("fast");
            $(".bigmenu").slideDown("fast");
        });
        $('.cross').click(function() {
            $('.seeking-form').show("fast");
            $('.logo-light').show("fast");
            $(".bigmenu").slideUp("fast");
            $('.humburger').show("fast");
        });
    });
</script> -->

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
<script type="text/javascript" src="{{ $user_assets }}/js/custom.js"></script>
<script type="text/javascript">
	<?php 
    if($advert)
    {
    ?>
	$('#advert').modal('show');
	<?php
    }
    ?>
</script>



@endpush