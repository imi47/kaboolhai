@extends('user/user_master_layout1') 
@section('data')

<style>
    /* .assistedservice h1 {
        color:#000;
    } */

    .main-section {
        z-index:9999;
    }

    footer {
        background:#5a378c;
    }

    .navbar-form button .glyphicon {
    top: 1px;
  }

  .navbar-form button {
    right: -4px;
    padding: 6px 11px !important;
}

    #navsidebare a, #sidebar-2 a {
        text-transform:none;
    }

    .text-center {
        padding:0;
    }

    .modal-dialog {
        max-width:600px;
    }

    .copyright p {
        font-size:11px;
    }

    .slider_area, .slider_area div {
        height:600px;
    }

    .table-cell {
        display:block;
    }

    tr.dosrch th a {
        font-size:14px;
    }

    @media (max-width:991px) {
        #register {
            position:relative;
            width:80%;
           margin:60px auto -200px auto !important;
           float:none;
        }

        .navbar-nav .dropdown .dropdown-toggle {
            padding-top: 15px !important;
            padding-bottom: 15px !important;
         }

        html, body {
            overflow-x:hidden;
        }

        .searchcontainer button {
            margin-top:-51px !important;
            padding-top:15px;
        }
    }

    @media (min-width:991px) {
   .searchcontainer button {
      margin-top:-51px !important;
      padding-top:15px;
    }

   .nav.navbar-nav {
      margin-right:15px;
	}

	#logo-div {
		margin-right: -61px;
	}
}

@media (max-width:1360px) {
    .navbar-form button {
        right: -17px;
    }
  }

    @media (max-width:768px) {

        .horizontal-margin {
            margin:0 15px;
        }

        #box1, #box2 {
            margin-bottom:50px;
        }
        
        #box5 {
            margin-top:650px;
        }

        .arrow-boxdiv#loading, .topboxstrip, .stripdisplay, .arrow-box {
            display:none;
        }

        .modal-dialog {
            width:auto;
            margin-left:10px;
            margin-right:10px;
        }
    }

    @media (max-width:548px) {
       #box5 {
            margin-top:605px;
        }

        .copyright p {
            font-size:9px;
        }
    }

     @media (max-width:547px) {
       #box5 {
            margin-top:625px;
        }
    }

     @media (max-width:520px) {
        #register {
            width:100%;
        }
     }

     @media (max-width:420px) {
        .logo {
            width:50px;
        }
     }

     @media (min-width:320px) {
         #box5 {
             margin-top:720px;
         }
     }

      @media (min-width:325px) {
         #box5 {
             margin-top:690px;
         }
     }

      @media (min-width:381px) {
         #box5 {
             margin-top:650px !important;
         }
     }

      @media (min-width:394px) {
         #box5 {
             margin-top:640px !important;
         }
     }

     @media (min-width:527px) {
         #box5 {
             margin-top:630px !important;
         }
     }

     @media (min-width:339px) {
         #box5 {
             margin-top:675px;
         }
     }

   @media (max-width: 685px) {

      tr.dosrch th a {
         font-size:12px;
      }
}

@media (max-width:320px) {
  .searchcontainer button {
      margin-top:-44px !important;
      padding-top:15px;
    }
}

  .top-searches-by div > a {
      text-transform:capitalize;
  }

  @media (min-width:641px) {
    .text-bar .emojiPickerIconWrap input {
        padding:10px;
    }
  }

</style>
 
      <div id="home"></div>
     
      <div class="divcontacts"></div>
     
      <section class="slider_area">
         <div id="image_carousel_1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators slider_indicators">
            </ol>
            <div class="carousel-inner" role="listbox">
               <div class="active">
                  <div class="single_slide">
                     <div class="slider_bg slide-3"></div>
                     <div class="container">
                        <div class="row">
                           <div class="col-md-4 col-sm-6 divclassslider">
                              <div class="slide_text">
                                 <div class="table">
                                    <div class="table-cell">
                                       <h1>ASSISTED SERVICE</h1>
                                       <div class="bg-yellow"></div>
                                       <span class="fontslider">Personalized assistance from experienced Relationship Manager who works solely for you!</span><br />
                                       <p class="sluderm">Our Relationship Managers have helped thousands of members find their perfect life partners.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
           
         </div>
      </section>
      <!-- slider-section-end -->
      <section class="registerdiv sectionpadding" id="register">
      	@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
      	@if(Session::has('error'))
                    <p class="alert alert-danger">{{ Session::get('error') }}</p>
                    
                @endif
                @if(Session::has('success'))
                    <p class="alert alert-success">{{ Session::get('success') }}</p>
                @endif
         <form class="login-form" method="post" action="{{ url('add-assisted') }}">
         	{{ csrf_field() }}
            <div class="row marginlogin">
               <div class="input-fieldlarge col s12 center">
                  <h3 class="registerhead"> Intrested In Assisted Service?</h3>
                  <p class="para">(Leave your contact details below, for <b>Free</b> consultation.)</p>
               </div>
            </div>
            <div class="row marginlogin">
               <div class=" col s12">
                  <label for="username" class="center-align">Full Name</label>
                  <input name="fullname" placeholder="Enter full name" type="text"  value="">
                  
               </div>
               <div class=" col s12 ">
                  <label for="email" class="center-align">Email</label>
                  <input name="email" type="email" value="" placeholder="Example@email.com" >
               </div>
               <div class=" col s12 ">
                  <label for="contactnum" class="center-align">Phone No</label>
                  <input name="phonenumber" type="number" value="" placeholder="Phone number" >
               </div>
            </div>
            <div class="row marginlogin">
               <div class=" col s12">
                  <label for="password">Present Location</label>
                  <input name="presentlocation" placeholder="Present location" value="" type="text" >
               </div>
            </div>
            <div class="row marginlogin">
               <div class="input-fieldlarge col s12">
                  <button  type="submit" class="validate submitbtn" value=""><i class="fa fa-sign-in" aria-hidden="true"></i> &nbsp;SUBMIT</button>
               </div>
            </div>
            <div class="msgdiv"></div>
            <div style="clear: both"></div>
         </form>
      </section>
      <!-- About-section-start -->
      <section class="about section_padding padingtop45" id="examination">
         <div class="container">
            <div class="row text-centernewsty">
               <div class="about_title col-text-center  assistedservice section-title wow flipInX" data-wow-delay="0.3s">
                  <h1>Through our Assisted Service we are bringing forth to you the easiest and result oriented way to meet your right match!</h1>
                  <div class="col-md-4 col-md-offset-0">
                     <div class="row assisted">
                        <img src="{{ $user_assets }}/kabool_hai_icons/relation.jpg" >
                        <h5 >A Devoted Relationship Manager</h5>
                        <p class="assisstedp">Completely for you! A guide, a friend, who will assist you throughout the journey till you find that perfect match and become Happily Married.</p>
                     </div>
                  </div>
                  <div class="col-md-4 col-md-offset-0">
                     <div class="row assisted newsasisst">
                        <img src="{{ $user_assets }}/kabool_hai_icons/handpicking.jpg" >
                        <h5>Hand Picked Profiles</h5>
                        <p class="assisstedp">You don’t have to go through the ordeal of selecting from thousands of profiles.  Your relationship manager does that job for you and handpicks the best suiting profiles.</p>
                     </div>
                  </div>
                  <div class="col-md-4 col-md-offset-0">
                     <div class="row assisted">
                        <img src="{{ $user_assets }}/kabool_hai_icons/hndshake.png">
                        <h5>Valuable guidance</h5>
                        <p class="assisstedp">Your relationship manager will help you and provide valuable guidance to you with any confusion or doubts that you may experience while making a decision for choosing your life partner.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- service-section-start -->
      <section class="service section_padding" id="about" >
         <div class="container">
         <div class="row">
            <div class="service_title section-title col-text-center service-advg wow flipInX">
               <h1>How our Assisted Service Works</h1>
            </div>
            <div class="row text-center paddingnoting">
               <div class="row rowpadding">
                  <div class="col-sm-4 col-sm-offset-4 howtoouterwrapper">
                     <div class="dirbox box1 horizontal-margin" id='box1'>
                        <span class="box-number">1</span>
                        <div class="col-md-3 paddingdiv"> <img src="{{ $user_assets }}/kabool_hai_icons/needs.png"></div>
                        <div class="col-md-9">
                           <div class="dedicatedhd">Knowing what you want</div>
                           <p>Our first and the crucial step is to understand what you need and  your requirements of a profile and what is actually you are looking for in a profile</p>
                        </div>
                        <div style="clear:both;"></div>
                     </div>
                     <img src="{{ $user_assets }}/kabool_hai_icons/stripbar.png" class="topboxstrip"/>
                  </div>
                  <div class="col-sm-4 col-sm-offset-4 howtoouterwrapper">
                     <div class="dirbox dedicated box1 horizontal-margin" id='box2'>
                        <span class="box-number">2</span>
                        <div class="col-md-3 paddingdiv"> <img src="{{ $user_assets }}/kabool_hai_icons/search.png"></div>
                        <div class="col-md-9">
                           <div class="dedicatedhd">Helping you to find what you want</div>
                           <p>With advanced tools and a dedicated relationship manager, we help you to find the best matches for you that suit your idea</p>
                        </div>
                        <div style="clear:both;"></div>
                     </div>
                     <img src="{{ $user_assets }}/kabool_hai_icons/stripbar.png" class="stripdisplay"/>        
                  </div>
                  <div class="col-sm-12 arrow-box-wrapper">
                     <div class="col-sm-4 col-sm-offset-1 margin-right howtoouterwrapper">
                        <div class="dirbox box1" id='box3'>
                           <span class="box-number">3</span>
                           <div class="col-md-3 paddingdiv"><img src="{{ $user_assets }}/kabool_hai_icons/shortlist.png"></div>
                           <div class="col-md-9">
                              <div class="dedicatedhd">Providing best matching options</div>
                              <p>We believe in perfection. Your relationship manager manually selects the best matching profiles for you according to your preferences</p>
                           </div>
                           <div style="clear:both;"></div>
                        </div>
                        <img src="{{ $user_assets }}/kabool_hai_icons/stripbar.png" class="stripdisplay"/>
                     </div>
                  </div>
                  <div class="col-sm-12 arrow-box-wrapper">
                     <div class="arrow-box" ></div>
                     <div class="arrow-boxdiv" id="loading"></div>
                     <div class="col-sm-4 col-sm-offset-1 divclasspadding howtoouterwrapper">
                        <div class="dirbox box1" id='box4'>
                           <span class="box-number">4</span>
                           <div class="col-md-3 paddingdiv"><img src="{{ $user_assets }}/kabool_hai_icons/contact.png"></div>
                           <div class="col-md-9">
                              <div class="dedicatedhd">Connecting with the selected profiles </div>
                              <p>Now to take things forward your relationship manager connects with the family of the chosen profiles and creates a bridge of communication.</p>
                           </div>
                           <div style="clear:both;"></div>
                        </div>
                        <img src="{{ $user_assets }}/kabool_hai_icons/stripbar.png" class="stripdisplay"/>
                     </div>
                  </div>
                  <div class="col-sm-4 col-sm-offset-4 howtoouterwrapper divfloat">
                     <div class="dirbox box1 horizontal-margin" id='box5'>
                        <span class="box-number">5</span>
                        <div class="col-md-3 paddingdiv"><img src="{{ $user_assets }}/kabool_hai_icons/meeting.png"> </div>
                        <div class="col-md-9">
                           <div class="dedicatedhd">Now it’s time to meet!</div>
                           <p>Finally after the initial conversation with the family of your preferred match, your relationship manager arranges a meeting for you to have a direct conversation, as per the convenience of both the parties. </p>
                        </div>
                        <div style="clear:both;"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
     
      <section class="what_do section_padding text-center" id="scholarship">
         <div class="container">
            <div class="row">
               <div class="what_do_title col-text-center section-title wow flipInX" data-wow-delay="0.3s">
                  <h1>Plans & Pricing</h1>
                 
                  <div class="row plan">
                     <div class="planinner">
                        <div class="mnth borders">
                           <span>3 Months</span>
                           <h3>Rs 10,000 </h3>
                        </div>
                        <div class="ord"><img src="{{ $user_assets }}/kabool_hai_icons/or.png"></div>
                        <div class="mnth margin-left">
                           <span>6 Months</span>
                           <h3>Rs 15,000 </h3>
                        </div>
                     </div>
                  </div>
                  <div class="row getstartredbtn"><button class="getbtn">Get Started   <i class="fa fa-chevron-right" aria-hidden="true"></i>
                     </button>
                  </div>
                  <div class="row">
                     <h5 class="getstart">Already a Kaboolhai.com member? Click here to <a href="{{ url('login') }}">Upgrade</a></h5>
                  </div>
               </div>
            </div>
         </div>
      </section>
     
      <!-- contact-bottom-section-end -->
      <!-- footer-section-start -->
      
      @endsection
      <!-- footer-section-end -->
      <!-- jquery-1.11.3 -->
    
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
<link rel="stylesheet" href="{{ $user_assets }}/css/assistes.css" />


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
      <script type="text/javascript">
     
         
       
      </script>
  