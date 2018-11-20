@extends('user/user_master_layout1') 
@section('data') 

<style>
.dis
{
  padding-bottom: 10px;
}
   .faq_text
  {
     line-height: 200%;
     font-family: "Source Sans Pro", sans-serif;
     
  }
  .bigheading
  {
    font-size: 46px;
    color: darkorange;
    text-align: center;
    padding-bottom:20px;
     font-family: "Montserrat", sans-serif;
  }
    .ptext
    {
      font-size: 15px;
      color: #000000;
      text-align:justify;
       font-family: "Source Sans Pro", sans-serif;
    }

  .ptext1
  {
    font-size: 15px;
    color: #000000;
    text-align: justify;
     font-family: "Source Sans Pro", sans-serif;

  }

  .smallhead
  {
    font-size: 25px;
    color: #000000;
  }

  .minihead
  {
    font-size: 22px;
    color: #000000;
  }
   .menulists
  {
    font-size:16px;
     font-family: "Source Sans Pro", sans-serif;
  }
  .hdlist
  {
    line-height: 400%;
  }
  .l
  {
    padding-left: 5px;
  }
  .l:hover
  {
    background-color: #ed6c05 ;
    border-radius:5px;
  }
  .l:hover a.menulists
  {
    color: white;
  }
  .lmis
  {
    width:40px;
  }

   @media (max-width:991px) {
    .sticky-nav .navbar-nav > li > .dropdown-menu, .shrink-nav .dropdown.simple-dropdown .dropdown-menu {
      top:55px !important;
    }

    .nav-white.sticky-nav .navbar-nav li a, .nav-white.sticky-nav .navbar-nav li a{
         padding-right:14px !important;
         margin-top:3px;
       }

      .nav-white.sticky-nav .navbar-nav li a:hover, .nav-white.sticky-nav .navbar-nav li a:hover {
       padding-right: 14px !important;
    }

    #username-dropdown-toggle a {
        display: inline-block !important;
        padding-top: -0 !important;
        padding-bottom: 10px !important;
      }

      .nav-white.sticky-nav .navbar-nav > .open > a {
        padding-right: 14px;
        padding-bottom: -2px;
        margin-top: 2px;
        padding-top: 0;
    }

    .humburger {
      margin-top:8px !important;
    }
  }

  @media (max-width:768px) {
    .sticky-nav .navbar-nav > li > .dropdown-menu, .shrink-nav .dropdown.simple-dropdown .dropdown-menu {
      top:47px !important;
    }
  }

  @media (max-width: 685px) {
    .sticky-nav .navbar-nav > li > .dropdown-menu, .shrink-nav .dropdown.simple-dropdown .dropdown-menu {
    top: 55px !important;
  }

  #username-dropdown-toggle .dropdown-menu {
    top: 47px !important;

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
      <div class="well" style="box-shadow:none;">
        <div class="faq_text">
          <h1 class="bigheading">FAQ<span style="color:#f47e2a;text-transform:lowercase;">'s</span></h1>
          <div class="row">
            <div class="col-sm-12">
              <div class="blockq">
                <div class="qblock" id="question">
                  Can I register for my matrimonial account for free on Kabool Hai?
                </div>
                <div class="wow fadeIn ansbody" id="answer" >
                  Registering on <strong>Kabool</strong> hai is totally free. By creating your free profile, you will become a member and you will be able to see other profiles and select the ones that match with your interests
                </div>
              </div>
            </div>
          </div>

          <div class="dis"></div>

          <div class="row">
            <div class="col-sm-12">
              <div class="blockq">
                <div class="qblock" id="question1">
                  How can I register on Kabool Hai?
                </div>
                <div class="wow fadeIn ansbody" id="answer1" >
                  Registering in our matrimony site is a simple process, you can register by filling the online registration.
                </div>
              </div>
            </div>
          </div>

          <div class="dis"></div>
          
          <div class="row">
            <div class="col-sm-12">
              <div class="blockq">
                <div class="qblock" id="question2">
                  Although I have successfully registered, but my profile does not show up online?
                </div>
                <div class="wow fadeIn ansbody" id="answer2" >
                  Every new profile will be authenticated by our Kabool Hai Team and upon activation, your profile will be visible to all! Verification of profiles is done manually. Our team checks each and every profile carefully for the information that has been given and the candidates are contacted over the phone for confirmation of authority. You will get a notification once the profile is active!
                </div>
              </div>
            </div>
          </div>
          
          <div class="dis"></div>

          <div class="row">
            <div class="col-sm-12">
              <div class="blockq">
                <div class="qblock" id="question3">
                  Can my photograph be uploaded?
                </div>
                <div class="wow fadeIn ansbody" id="answer3" >
                  You have the option of uploading your photograph on My Profile Page. You can upload a maximum of three photographs, but they can only be visible to the other person if you allow.
                </div>
              </div>
            </div>
          </div>

          <div class="dis"></div>

          <div class="row">
            <div class="col-sm-12">
              <div class="blockq">
                <div class="qblock" id="question4">
                  How can I edit all my details?
                </div>
                <div class="wow fadeIn ansbody" id="answer4" >
                  At any time, you can update your profile by the edit profile button on your account.
                </div>
              </div>
            </div>
          </div>

          <div class="dis"></div>

          <div class="row">
            <div class="col-sm-12">
               <div class="blockq">
                <div class="qblock" id="question5">
                  What is the function of the tab My Matches?
                </div>
                <div class="wow fadeIn ansbody" id="answer5" >
                  My Matches has all the profiles matching your partner preferences that you have keyed in while registering your profile. It is regularly updated.
                </div>
              </div>
            </div>
          </div>

          <div class="dis"></div>

          <div class="row">
            <div class="col-sm-12">
              <div class="blockq">
                <div class="qblock" id="question6">
                  Can I shortlist/bookmark a Profile?
                </div>
                <div class="wow fadeIn ansbody" id="answer6" >
                  Yes, you can! It’s a useful feature to make a note of the interested profiles. You need to be logged in to use the shortlist feature.
                </div>
              </div>
            </div>
          </div>

          <div class="dis"></div>

          <div class="row">
            <div class="col-sm-12">
               <div class="blockq">
                <div class="qblock" id="question7">
                  How do I change my password?
                </div>
                <div class="wow fadeIn ansbody" id="answer7" >
                  After logging into your account, click on the change password link. The system will ask for your old password and then the new one then login with your new password.
                </div>
              </div>
            </div>
          </div>
            

          <div class="dis"></div>

          <div class="row">
            <div class="col-sm-12">
              <div class="blockq">
                <div class="qblock" id="question8">
                  What are the benefits of a FREE membership?
                </div>
                <div class="wow fadeIn ansbody" id="answer8" >
                  • Most trusted  Matrimonial service <br>
                  • 100% verified Matrimonial profiles.<br>
                  • Managed by Complete Professionals<br>
                  • Dedicated Customer Care Service.<br>
                  • Post your personal profile for free!<br>
                  • Add more information about yourself and your family.<br>
                  • Upload/add multiple photographs to your profile.<br>
                  • Express interest in other members for FREE.<br>
                  • Your contact details are not displayed to any member until and unless you approve to accept their contact request send to you privately. This means that your personal information is completely secure with us and you have a right to choose the proposal.
                </div>
              </div>
            </div>
          </div>

           <div class="dis"></div>

          <div class="row">
            <div class="col-sm-12">
               <div class="blockq">
                  <div class="qblock" id="question9">
                   Why should I choose your paid membership package?
                  </div>
                  <div class="wow fadeIn ansbody" id="answer9" >
                   A paid membership has various packages and options to help you access advanced features of Kaboolhai.com. Its benefits are as follows:<br>
                  • You can search suitable profile through our website.<br>
                  • We do not provide your contact details directly to even paid members. The members can send private message requests to the other candidate who has a right to accept or decline those requests. In case of decline, the person will not be allowed to access any of the personal details or information of the candidate. This ensures that your personal information remains secure with us.<br>
                  • The members who opt for paid membership get top services and benefits that are not available to members who choose a free membership.<br>
                  • Paid Kabool Hai members can express interest and send message requests to other members of Kaboolhai.com<br>

                  </div>
                </div>
            </div>
          </div>

           <div class="dis"></div>

          <div class="row">
            <div class="col-sm-12">
              <div class="blockq">
                <div class="qblock" id="question10">
                  Is my personal information safe?
                </div>
                <div class="wow fadeIn ansbody" id="answer10" >
                  Please read our privacy policy in the section of terms and conditions.

                </div>
              </div>
            </div>
          </div>

          <div class="dis"></div>

           <div class="row"> 
            <div class="col-sm-12">
               <div class="blockq">
                  <div class="qblock" id="question11">
                   How can I upgrade my Free membership to paid?
                  </div>
                  <div class="wow fadeIn ansbody" id="answer11" >
                   We provide various options for upgrading your membership. You can login to your Kabool Hai account page and click upgrade button. Choose the right package for you, which will lead you to the payment page. You will be provided with various options for payment.

                  </div>
                </div>
            </div>
          </div>



        </div>
      </div>
    </div>
     
  </div>
</div>
    
<script>
  $("#question").click(function(){
    $("#answer").toggle();
  });

  $("#question1").click(function(){
    $("#answer1").toggle();
  });

  $("#question2").click(function(){
    $("#answer2").toggle();
  });

  $("#question3").click(function(){
    $("#answer3").toggle();
  });

  $("#question4").click(function(){
    $("#answer4").toggle();
  });

   $("#question5").click(function(){
    $("#answer5").toggle();
  });

   $("#question6").click(function(){
    $("#answer6").toggle();
  });

   $("#question7").click(function(){
    $("#answer7").toggle();
  });

   $("#question8").click(function(){
    $("#answer8").toggle();
  });

   $("#question9").click(function(){
    $("#answer9").toggle();
  });

   $("#question10").click(function(){
    $("#answer10").toggle();
  });

   $("#question11").click(function(){
    $("#answer11").toggle();
  });
</script>

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
@endpush