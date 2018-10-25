@extends('user/user_master_layout1') 
@section('data')
<style>
   .term_text
  {
     line-height: 200%;
     font-family: sans-serif;   
  }

  .panel-default {
    margin-bottom: 20px;
    background-color: #fff;
    border:none;
    box-shadow:none;
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
  .smallhead
  {
    font-size: 26px;
    color: #000000;
     font-family: "Source Sans Pro", sans-serif;
  }
  }
  .ptext1
  {
    font-size: 15px;
    color:black;
    text-align: justify;
     font-family: "Source Sans Pro", sans-serif;
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

  @media (max-width:400px) {
    .term_text .bigheading {
      font-size:10vw !important;
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

            <div class="panel panel-default">
              <div>
                <h3>TERMS AND CONDITIONS</h3>
              </div>
            </div>

            <p>It is imperative to read all the terms and condition regarding the membership before you get registered with Kaboolhai. By being a member of this site, you have agreed to accept the rules and regulations of the site. Any violation of rules later on will not be overlooked and your profile will be banned immediately from the site.</p><br>
            <h3>Membership: When and How!</h3><br>
            <div style="padding-left:15px;">
            <p>•  The candidate should be over 18 years old and all his/her credentials should be true.</p>
            <p>• Any candidate under 18 will be banned immediately and their IP address will be blocked too.</p>
            <p>• The candidate has taken an oath by Allah that he/she is a Muslim who is upon the Quran and Sunnah and is looking to marry a Muslim spouse.</p>
            <p>• The parent or wali of a sister, can create an account on behalf of their child.</p>
            <p>• It is not at all allowed to make multiple accounts.</p> 
            <p>• The sole reason for joining Kaboolhai is that you are looking for a spouse and in any case, you will not misuse this account or transfer it to some other candidate.</p>
            <p>• Every detail minor or detailed about another candidate is purely confidential. Spreading information about other candidates is ethically immoral and being Muslims, we should avoid it at any cost.</p>
            <p>• Requesting money or loan of any kind from the other candidates is strictly prohibited. Strict legal actions will be taken against any such member.</p>
            <p>• You will not grant money to any other member in any case too. Strict action will be taken in such cases as well.</p>
            <p>• You will keep this website free of any virus or software which may harm the site or any of its users.</p>
            <p>• Any conversation that can be graded unethical, vulgar or un-islamic is strictly prohibited.</p>
            <p>• You will not post in any ideas related to criminal thoughts or intentions in your profile.</p>
            <p>• You will not start promoting your business with the other members through Kaboolhai.</p>
            <p>• Gathering of personal information such as email addresses, telephone numbers, financial information or any other kind of information of the members is not appreciated at all.</p>
            <p>• All the information that you have included about yourself in your profile should be exact and a true depiction of your self – and we remind you that you have taken an oath by Allah that you are speaking the truth and any attempt at lying can and will be held against you and legal proceedings can be taken against you.</p>
            <p>• All photographs you upload to Kaboolhai should be your own, and should be your recent photograph.</p><br>
            </div>

            <h3>Private and Confidential</h3><br>
            <p>Your privacy and the confidentiality of your credentials is our prime concern. We make sure that it is maintained in all possible ways. The way we guard it is as follows:</p>

            <div style="padding-left:15px;">
            <p>• The admin team of Kaboolhai will monitor and check messages for the safety of other members. You should agree that all the conversations will be monitored and no one will be spared.</p>
            <p>• The contact details can only be shared once the compatibility has been established between the members. Otherwise your account will be banned.</p>
            <p>• It should be quite clear that once you have established an understanding with the potential candidate, Kaboolhai is no longer responsible with the further proceedings. It is wholly and solely your responsibility to do find out all the details about your spouse yourself and later in case of any problem our website shouldn’t be held responsible for any mishap.</p>
            <p>• In case of suspicion regarding a fake profile or identity the account will be immediately removed.</p>
            <p>• Inappropriate messages to the admin can result in a permanent ban from Kaboolhai.</p>
            <p>• Any kind of abuse with the admins of the website will not be tolerated at all.</p>
            <p>• Kaboolhai just a key in finding the potential spouse and there is no guarantee on our website that you will definitely find a spouse.</p>
            <p>• Kaboolhai is not at all responsible for the character and credential of the members. When you meet people outside the website you should takeit as if you were meeting any other proposal in daily life.</p><br>
            
            </div>

            <h3>Be Warned of Frauds and Scam</h3><br>
            <p>We do make sure that all the profiles that are uploaded on Kaboolhai are real and there is no member that has created a fake pofile. But to keep a track of everyone is quite impossible. In order to keep yourself free from any kind of fraud or scam please do not in any case give or lend money to any person who asks you to do so. We later on won’t be responsible of any such money scam. We are just a matrimonial site whose main objective is to unite people of similar interests so that they can enjoy the bliss of marriage. Other than that, we aren’t responsible in any other way.</p>
            <p>Kaboolhai has the right to suspend or ban any account due to any of the misuses that has been mentioned above. We are  afair dealing matrimonial site and will not tolerate misuse of our site in any way.</p>
            <br>
            <h3>Kabool Hai and Pristine Clear Content Policy</h3><br>
            

            <div style="padding-left: 15px;">
            <p>• Members shouldn’t add their phone numbers, emails or contact information in their profile. Later when they establish a sense of compatibility with the other members they can exchange their numbers in the direct messages option but from then onwards Kaboolhai won’t be responsible for any action the members are taking.</p>
            <p>• The content that you add in your profile should be hundred percent accurate. The age, education, status and personal information should be true. The picture that you have uploaded should be recent and your own. In case Kaboolhai finds any discrepancy in this regard, the account of the fake informer will be banned without any prior notice.</p>
            <p>• Any content that Kaboolhai finds offensive or demoralizing for any client will be immediately deleted.</p>
            <p>• Kaboolhai has the right to edit any information in the members account if they aren’t appropriate according to the demands of the site. It can include pictures, personal details etc.</p>
    
      </div>
            <br>
            <h3>The Monitoring Policy at Kabool Hai</h3><br>

            <div style="padding-left:15px;">
            <p>• Kaboolhai wants to make this site a safe place for the members. It is our sole duty to make sure that the site is a safe and pleasant experience for our members. In this regard, we check and approves profiles, as well as messages between members. This is to protect the dignity of our members.</p>
            <p>• Any member violating any ground, before mutual compatibility has been established between the other member will be banned.</p>
            <p>• It is the responsibility of the members to talk with members in a polite, respectful manner. Rude, offensive, filthy, disgusting or vulgar messages or any other inappropriate messages will result in a permanent ban.</p>
            
          </div>

            <br>
            <h3>Kabool Hai: Agreement on Receiving Mails</h3><br>
            <p>Kaboolhai can send electronic mail to you and to other members. The purpose of this communication includes:</p>

            <div style="padding-left: 15px;">
            <p>• Inform if there is any change regarding the statusof your membership.</p>
            <p>• Update you about contacts or interests in your profile from another member.</p>
            <p>• Show you your proper match according to your requirements.</p>
            <p>• Update you about a new policy or terms of condition.</p>
            </div>
            <p>Make sure that you donot mark our emails as spam or junk. You can unsubscribe us at any time using the unsubscribe links at the bottom of the emails you get.</p>
            <p>Emails sent from our system regarding important changes cannot be unsubscribed because it is obligatory to inform members of important changes.</p><br>
            <h3>Copyright Claim: All Rights Reserved</h3><br>
            <p>Kaboolhai claims full copyright protection in all content published on the website by our partners, our members, and other users. It should be agreed upon thatthe original content on the website will not be copied, modified, or shared at all.</p>

          <!-- </div>  -->
        <!-- </div> -->
      </div>

      
    </div>
  </div>

<br><br><br>
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

@endpush