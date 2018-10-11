@extends('user/user_master_layout1') 
@section('data')
<style type="text/css">
  .validate{
    color: red;
  }
  .admininfo{
    line-height: 50px;
  }

  @media (max-width:991px) and (min-width:768px) {
    .humburger {
      margin-top:12px !important;
    }
  }

  @media (max-width:991px) {
    #side-info {
      margin-top:50px;
    }

    #friends-dropdown, #messages-dropdown, #notifications-dropdown {
      margin-top:20px !important;
      margin-bottom:-20px !important;
    }

    .navbar-default .navbar-nav > li > a { 
      line-height:54px;
    }
    
    .searchcontainer button {
      margin-top:-56px !important;
      padding-top:15px;
    }

    .sticky-nav .navbar-nav > li > .dropdown-menu, .shrink-nav .dropdown.simple-dropdown .dropdown-menu {
      top:35px !important;
    }

    #username-dropdown-toggle ul.dropdown-menu {
      top:55px !important;
    }

  }

  @media (min-width:991px) {
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

    .navbar-default .navbar-nav > li > a { 
      line-height:44px;
    }

    #username-dropdown-toggle ul.dropdown-menu {
      top:47px !important;
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

</style>
<div style="padding-top:90px;"></div>
<div class="container-fluid">
 <div class="col-md-3 hidden-sm hidden-xs">
        <div class="well" style="box-shadow: none;">
          @include('user/side_bar')
        </div>
      </div>
  <div class="col-md-9">
    @if(Session::has('error'))
                    <p class="alert alert-danger">{{ Session::get('error') }}</p>
                @endif
                @if(Session::has('success'))
                    <p class="alert alert-success">{{ Session::get('success') }}</p>
                @endif
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
      <div class="panel panel-default">
    <div class="panel-heading text-center"><h3>Submit a request</h3>
    </div>
     </div>
     
      
      <div class="col-md-12">
        <div class="tip_box">
          <p class="contentoftips">
            <form method="post" action="{{ url('save-request') }}">
              {{ csrf_field() }}
              
              <div class="row">
                <div class="col-md-8">
                  <label>Your email address <span class="validate">*</span></label>
                  <input type="email" name="email" class="form-control" placeholder="Enter your email">
            
              
                  <label>Mobile No <span class="validate">*</span></label>
                  <input type="Number" name="phone" class="form-control" placeholder="Enter your mobile no">
                
            
             
               
                  <label>Your Kaboolhai Account details <span class="validate">*</span></label>
                  <input type="text" name="account_detail" class="form-control" placeholder="Enter your account detail">
               
              
                  <label>Select appropriate request section<span class="validate">*</span></label>
                  <select name="request_type" class="form-control">
                    <option> --select--
                      
                    </option>
                    <option value="Registration">Registration
                      
                    </option>
                    <option value="Payment Queries">Payment Queries
                      
                    </option>
                    <option value="Account/Profile">Account/Profile
                      
                    </option>
                    <option value="Communication">Communication
                      
                    </option>
                     <option value="General Question">General Question
                      
                    </option>

                  </select>
                  <label>Description <span class="validate">*</span></label>
                  <textarea class="form-control" name="description"  rows="4"></textarea>
                  <button type="Submit" class="btn btn-success pull-right">Send</button>
                </div>
                <br>
                <div class="col-md-4 well" id='side-info'>
                  <strong class="admininfo">Usman Khan,Kaboolhai Admin</strong>
                  <p class="admininfo">Mobile No: 0300-8000085</p>
                  <p class="admininfo">Email: admin@kaboolhai.com</p>
                  <p class="admininfo">Website: www.kaboolhai.com</p>
                </div>
              </div>
            </form>
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