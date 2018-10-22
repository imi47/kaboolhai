@extends('user/user_master_layout1') 
@section('data') 

<style>
  .policy_text
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
    font-size: 22px;
    color: #000000;
    margin-bottom: 5px;
  }

  .minihead
  {
    font-size: 22px;
    color: #000000;
    margin-bottom: 5px;
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

  .fa-google-plus-square, .fa-linkedin-square {
    font-size:4rem;
  }

   @media (max-width:991px) {
    .sticky-nav .navbar-nav > li > .dropdown-menu, .shrink-nav .dropdown.simple-dropdown .dropdown-menu {
      top:55px !important;
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

@media (max-width:400px) {
    .policy_text .bigheading {
      font-size:11vw !important;
      line-height:12vw;
    }
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

   
 <div class="col-md-9"> 
  <!-- <div class="well" style="box-shadow:none;"> -->


    <div class="panel panel-default">
             <div class="panel-heading text-center">
               <h2>Privacy Policy</h2>
           </div>
  </div>

  <p>This Privacy Policy sets out the policies adopted by <a href="www.kaboolhai.com/kaboolhai" style="color: blue;">http://www.kaboolhai.com</a> regarding the collection and use of your Personal Information collected or provided by you.</p>    

<h2>1.PRIVACY</h2>
<p>We, at Kaboolhai.com understand that the visitors of the Website are often anxious when it comes to providing personal information online. This website considers the privacy and confidentiality of the information provided by its users a sacred trust and shall take all important measures to protect it.</p>

<h2>2.COLLECTION OF INFORMATION</h2>
<p>The Company is committed to protecting its user’s and client’s privacy. We comprehend the concerns of the users regarding their privacy and the required steps to be taken for the protection of the private information they provide.</p>

<div class="yyyy" style="padding-left:25px;">

<h4>2.1 Statistical Information</h4>
<p>Whenever some regular or non-member users visit ourwebsite, our servers are designed to mechanicallycollect and record information for statistical purposes about how the Website is being accessed such as:</p> 
<p>1.the browser being used to access the website;</p>
<p>2.the referring URL;</p>
<p>3.the IP address;</p>
<p>4.the number and kind of pages viewed;</p>
<p>5.the date and time of visits; and</p>
<p>6.the exit URL.</p>
<p>This information, collected by our servers can by no means be classified as Personal Information and shall be kept anonymous in all situations.This data shall not be linked with any other Personal Information you provide, unless you are logged in with a registered account as a member at the time of use. Thereupon, if you are using the website anonymously without a registered account or being logged on as a member, the data collected about your usage of the website shall not be linked to your Personal Information.</p>


<h4 >2.2 Requirements of Membership</h4>
<p>In order for you to reap the benefits of our membership, we shall collect some information when you register as a member. Non-identifying information as well as Personal Information is collected from you upon registration. To update your profile, we shall continue to ask for more information as time passes.</p>
<p>The following Personal Information shall be asked from the member by the website:</p> <p>1.your full name;</p>
<p>2.your email address;</p>
<p>3.your residential address;</p>
<p>4.phone number;</p>
<p>5.a photograph of you.</p>
<p>Other information, which may or may not be classified as Personal Information shall be collected including the following:</p>
<p>6.your age;</p>
<p>7.your occupation;</p>
<p>8.a description of your appearance</p>

<h4 >2.3 Purposeful Information</h4>
<p>No Personal Information other than what is deemed necessary for our purpose shall be collected.</p>
<h4 >2.4 Lawful Means</h4>
<p>Only lawful and fair means shall be used to access information and the website shall by no means act intrusively or in an unreasonable manner. No privacy law shall be broken while accessing your personal data.</p>

<h4 >2.5 Notification</h4>
<p>We shall take all practical measures to inform you via notification before or while collecting involuntary Personal Information so that you are aware of:</p>

<p>1.our identity and means to contact us;</p>
<p>2.the fact that we are able to gain access your Information;</p>
<p>3.the Purposes for which the Information is collected;</p>
<p>4.the details of the Recipient's to whom the Information shall be disclosed;</p>
<p>5.any of our laws that need particular Information to be collected; and</p>
<p>6.the consequences for the Individual if complete or incomplete data is not provided.</p>


<h4 >2.6 Collect from you only</h4>
<p>We shall endeavor to only collect Information about you from you and not a third party, unless the requirement arises.</p>

<h4 >2.7 Send a notice to you</h4>
<p>If we choose to collect information about you via or from a third party as stated in the clause 2.6, we shall ensure that you are provided awareness regarding the points listed in clause 2.5. The only exception shall be to choose to keep it a secret if its exposure shall result or pose as a danger to someone’s health or life.</p>

<h4 >2.8 Cookies</h4>
<p>"Cookies" shall be utilized to allow us to monitor the traffic patterns of the website and to serve you more efficiently according to your likes. A cookie doesn’t reveal you personally but it identifies your computer. You can alter your browser to disable cookies or to notify you when you get a cookie on your computer and provide you with an option to either accept or reject the access, as you choose to do so. If you choose to disable cookies or reject the proposal of the cookie, you shall not be allowed to access certain areas or features on our Website.</p>

</div>
<br>
<h2>USE OF PROVIDED INFORMATION AND ITS DISCLOSURE </h2><br>
<div class="yyyy" style="padding-left:25px;">

<h4 >3.1 Disclosure</h4>
<p>Personal Information shall only be disclosed according to the terms mentioned in this Policy. </p>
<h4 >3.2 Secondary Purpose</h4>
<p>We shall not utilize or reveal any Information provided by you for a second hand purpose unless:</p>
<p>1.Both or either of the following apply:</p>
<p>2.the Second hand Purpose is directly or indirectly related to the Primary Purpose which is an absolute requirement; and</p>
<p>3.you have given your consent for the usage or disclosure of the information provided; or</p>
<p>4.if the Information is not Classified and the use of the Information is for the purpose of direct marketing:</p>
<p>5.it may be inoperable for us to seek your consent for that particular use; and</p>
<p>6.we may choose not to charge you to precipitate your request of refuting notices of direct marketing communications; and</p>
<p>7.you have chosen not to make a request to us to deny receiving direct marketing communications; and</p>
<p>8.in each direct marketing communication with you we may have drawn your attention by prominently displaying a notice that you may not wish to receive in future and cut off any further notifications of marketing; and</p>
<p>9.each direct marketing communication sent by us to you elaborates on our address, contact number or email address at which we can be contacted directly or approached; or</p>
<p>10.grave or impending threat to an individual's life, health or safety; or</p>
<p>11.a severe threat to public wellness or public safety;</p>
<p>12.we may find reason to suspect some unlawful or illegal activity being taken place and the individual’s participation in such matter</p>
<p>13.We may choose to reveal the Personal data provided as a vital part of our investigation of the matter or in our action of reporting our concerns and suspicions to the concerned persons or authorities; or</p>
<p>14.the exertion or revelation of the Information is required or demanded by or under law;</p>
<p>15.we rationally choose to believe that the use or divulgence is reasonably compulsory and obligatory for or on behalf of the police or other legal authority to play our role in law enforcement:</p>
<p>16.the requirement of the information in prevention, discovery, investigation, pursuance or punishment of criminal offences, breaches of a law imposing a penalty or criminal charges; </p>
<p>17.protection of public proceeds and earnings;</p>
<p>18.to ensure the protection of some individual, party or group that may be threatened by your information</p>
<p>19.a severe threat to public wellness or public safety</p>
<p>20.the precluding, discovery, probing or remedy of seriously inappropriate conduct or violation of the laid down conduct.</p>

</div>
<h2>QUALITY OF DATA</h2>
<p>We will take responsibility of collecting, disclosing and using only correct, complete and updated information.</p>
<h2>SECURITY OF COLLECTED DATA</h2>
<div class="yyyy" style="padding-left:25px;"> 
<h4>Security</h4>
<p>We shall take the required rational steps while collecting your data to ensure that it is secured from abuse, dispossession, third-party access, alteration or unauthorized revelation. Misuse of the information provided shall not be accepted at any cost ad the website will take measures to amend it in any way it can.</p>
<h4>Steps we will Take</h4>
<p class="">In order to protect the Information provided on our website, we shall:</p>
<p>1.  Take up measure to protect our servers and premises against unauthorized entry and access to our data, put up security systems to detect unsanctioned access and secure hard copy based personal data of its clients;</p>
<p>2.  will take steps to protect our computer systems, servers and networks for the storage, proceeding and transferring Personal Information and from unsanctioned access, alteration and its revelation via third party;</p>
<p>3.  we shall protect communications conducted on our premises via data transmission including messages, emails and audio calls from interception and preventing unauthorised intrusion into our servers by applying data encryption;</p>
<p>4.  we shall adopt reasonably required  procedures for limiting unwanted access to Personal Information  and confining it only to the control of certified staff  and to decrease security invasions to our information technology systems and network servers; and such other security measures deemed necessary by the website for the privacy and protection of its user’s information.</p>
</div>
 
  </div>
</div>

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

@endpush