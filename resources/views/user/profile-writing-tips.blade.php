@extends('user/user_master_layout1') 
@section('data')

<style>
   @media (max-width:991px) {
    #friends-dropdown, #messages-dropdown, #notifications-dropdown {
            margin-top:21px !important;
            margin-bottom:-21px !important;
        }

        #username-dropdown-toggle {
          margin-top:2px !important;
        }
        .humburger {
            margin-top:14px !important;
      }

      .searchcontainer button {
      margin-top:-56px !important;
      padding-top:15px;
      }
   }

   @media (max-width:768px) {
     #friends-dropdown, #messages-dropdown, #notifications-dropdown {
            margin-top:12px !important;
            margin-bottom:-12px !important;
        }

      #username-dropdown-toggle {
        margin-top:-0px !important;
      }
      .humburger {
          margin-top:8px !important;
    }
  }

  @media (min-width:991px) {
   .searchcontainer button {
      margin-top:-56px !important;
      padding-top:15px;
    }
}

@media (max-width: 685px) {
  .sticky-nav .navbar-nav > li > .dropdown-menu, .shrink-nav .dropdown.simple-dropdown .dropdown-menu {
    top: 56px !important;
  }

  #username-dropdown-toggle .dropdown-menu {
    top: 47px !important;

  }
}

@media (max-width:320px) {
  .searchcontainer button {
    margin-top:-44px !important;
  }
}

.fa-google-plus-square, .fa-linkedin-square {
  font-size:2.45em;
}
</style>

<div style="padding-top:90px;"></div>
<div class="container-fluid">
 <div class="col-md-3 hidden-sm hidden-xs">
        <div class="well" style="box-shadow: none;">
          @include('user/side_bar')
        </div>
      </div>
  <div class="col-md-9">
    
  
      <div class="panel panel-default">
    <div class="panel-heading text-center"><h3>Profile Writing Tips</h3>
    </div>
     </div>
     
      
      <div class="col-md-12">
        <div class="tip_box">
          <p class="contentoftips">
Looking for your marriage partner is probably one of the most important things you will ever do in your life, so it is important that you begin this process by mentioning Allah’s name and seeking refuge from Shaytaan.  Remember Allah at all times and constantly make dua to Him for his help and guidance through this process. <br><br>

We would suggest the best way to write a profile is to imagine yourself in a meeting with a potential marriage partner in a casual, no pressure setting such as your home, or at a relative’s house. Think about the kind of things you would tell him or her about yourself while walis are present. Your matrimonial profile is the same idea extended onto the Internet. <br><br>

A good profile has between 1000 to 2000 words in the ‘About me’ section and between 1000 to 2000 words in the ‘Looking for’ section.  Generally, anybody with less than 400 characters in the ‘About Me’ section will not get noticed and will not come high in the search results.  After all, you are looking for a marriage partner on a website on which images are kept private at all times, so if you do not write much on your profile then others have no way of knowing whether you may be compatible with them. <br><br>

<ul class="listtip">
  <li class="lis">As this is a website for those people who take their deen seriously, we strongly suggest that you write about your religious commitment and how being a Practising Muslim influences you in your life?  What activities do you engage in, to better yourself as a Muslim?</li>
  <br>

  <li class="lis">
    We would strongly suggest that you also focus on your professional and educational background. Try to write few words about your family members, how many brothers and sisters and their professions.
Talk about your likes and dislikes and what you like to do in your free time.    
  </li>
  <br>

<li class="lis">
  Talk about how you entertain yourself. This is where you can be funny and witty, so exercise your imagination. Mention about your social circle. Are you a social person? Do you have many friends? Do you go out with them a lot? What activities do you do with them? If you have a good relationship with your siblings, your parents, and your family, mention it. Mention if they live close to you, and how often you see them. 
</li>
<br>

<li class="lis">
  If you have children then this is an important part of your life, and will pique the interests of people who may be interested in your profile. Mention their ages, and whether or not they live with you. Don’t describe them too much but give their ages. 
</li>
<br>

<li class="lis">
  If you have moved around a bit in your life, mention the places where you have lived.
Talk about schools you have attended, jobs you have held, and your future aspirations. These are generally looked at as positive. 
</li>
<br>

</ul>

</p>
      
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
<link rel="stylesheet" href="{{ $user_assets }}/css/owl.theme.default.min.css" />
<link rel="stylesheet" href="{{ $user_assets }}/css/owl.carousels.css" />
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
  

{{-- <script type="text/javascript" src="{{ $user_assets }}/js/custom.js"></script> --}}
<link rel="stylesheet" href="{{ $user_assets }}/css/custom.css" />
<script src="{{ $user_assets }}/js/dropzone.js"></script>
 <link rel="stylesheet" href="{{ $user_assets }}/css/dropzone.css">

 
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



@endpush      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
</body>
</html>