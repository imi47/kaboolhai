@extends('user/user_master_layout1')
@section('data')

<style>
  .hdlist {
    line-height: 400%;
  }

  .main-section {
    z-index: 2;
  }

  .searchcontainer button {
    padding: 13px 16px;
    margin-top: -56px;
    margin-right: 0px;
  }

  .navbar-form button {
    padding: 6px 11px !important;
  }

  .navbar-form button .glyphicon {
    top: 1px;
  }

  .hdlist li {
    border-radius: 5px;
    padding-left: 5px;
  }

  .hdlist li:hover {
    background-color: #ed6c05;
  }

  .menulists {
    font-size: 16px;
    color: #333;
  }

  /* user pic menu toggle code start */

  .menu-container {
    position: absolute;
    margin: auto;
    display: inline-block;
    z-index: 1;
    /* left:200px; */
  }

  .menu-container .menu {
    position: absolute;
    background-color: #eee;
    width: 0;
    height: 0;
    top: 3px;
    left: 3px;
    /* right:0; */
    transition: 500ms;
    z-index: -1;
    border-radius: 5px;
    overflow: hidden;
    padding: 10px;
    border: 1px solid #ccc;
    box-shadow: 2px 2px 7px #999;
  }

  .menu-container .menu li:hover {
    color: #ed6c05;
  }

  .menu-container.open .menu {
    width: 200px;
    height: 105px;
  }

  .menu-container .toggle {
    transition: 500ms;
    fill: red;
    width: 30px;
    cursor: pointer;
  }

  .menu-container.open .toggle {
    transform: rotate(225deg);
  }

  .menu-container .menu ul li {
    padding: 5px;
    cursor: pointer;
    margin: 5px 0;
    color: #333;
    font-weight: 600;
  }

  /* user pic menu toggle code end */

  @media (max-width:991px) {

    .nav-white.sticky-nav .navbar-nav li>a,
    .nav-white.sticky-nav .navbar-nav li>a {
      padding-top: 11px !important;
      padding-bottom: 11px !important;
    }

    .nav li.dropdown {
      float: left;
    }

    .sticky-nav .navbar-nav>li>.dropdown-menu {
      top: 47px !important;
    }

    #username-dropdown-toggle .dropdown-menu {
      top: 42px !important;
    }

    .sidebar {
      display: none;
    }
  }


  @media (max-width: 685px) {

    .top-searches-by div>a,
    tr.tpsrch th a,
    tr.dosrch th a {
      font-size: 12px;
    }

    .copyright p {
      font-size: 8px;
    }
  }

  @media (max-width:520px) {
    .navbar-form button {
      padding: 6px 3px !important;
    }
  }
</style>

<div class="col-md-12">
  {{--  <h4 class="text-color" style="text-align: center;">Settings</h4> --}}

  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
</div>
<div style="padding-top:90px;"></div>
{{-- <div class="row"> --}}
<div class="col-md-3 sidebar">
  <div class="well" style="box-shadow: none;">
    @include('user/side_bar')
  </div>
</div>

<div class="col-md-9 my-photos">
  <h2>Edit My Photos</h2>
  <div>
    <div>
      <h3>Primary Photo</h3>
      <span>Your main picture</span>
    </div>
    <div>
      <div class="profile-pic-container has-pic">
        <img src="https://source.unsplash.com/user/erondu/1600x900" alt="">
        <div>
          <span data-toggle="modal" data-target="#primary-pic-modal">
            <i class="fas fa-edit"></i>
            <span>Edit picture</span>
          </span>
          <span class="remove">
            <i class="fas fa-trash"></i>
            <span>Remove picture</span>
          </span>
          <span data-toggle="modal" data-target="#primary-pic-modal">
            <i class="fas fa-plus"></i>
            <span>Upload picture</span>
          </span>
        </div>
      </div>
      <div class="access-control">
        <div>
          <i class="fas fa-lock"></i>
          <h3>Photo Access Control Panel</h3>
        </div>
        <ul>
          <li>
            <div>
              <span>User Access</span>
              <i class="fas fa-angle-right"></i>
            </div>
            <ul>
              <li><a href="#">item 1</a></li>
              <li><a href="#">item 2</a></li>
              <li><a href="#">item 3</a></li>
              <li><a href="#">item 4</a></li>
            </ul>
          </li>
          <li>
            <div>
              <span>User Requests</span>
              <i class="fas fa-angle-right"></i>
            </div>
            <ul>
              <li><a href="#">item 1</a></li>
              <li><a href="#">item 2</a></li>
              <li><a href="#">item 3</a></li>
            </ul>
          </li>
          <li>
            <div>
              <span>My Access</span>
              <i class="fas fa-angle-right"></i>
            </div>
            <ul>
              <li><a href="#">item 1</a></li>
              <li><a href="#">item 2</a></li>
              <li><a href="#">item 3</a></li>
              <li><a href="#">item 4</a></li>
            </ul>
          </li>
          <li>
            <div>
              <span>My Requests</span>
              <i class="fas fa-angle-right"></i>
            </div>
            <ul>
              <li><a href="#">item 1</a></li>
              <li><a href="#">item 2</a></li>
              <li><a href="#">item 3</a></li>
              <li><a href="#">item 4</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div>
    <div>
      <h3>Public Gallery</h3>
      <span>Everybody can view these pictures</span>
    </div>
    <div>
      <div class="img-container"><img src="https://source.unsplash.com/user/erondu/1600x900" alt="">
        <span><i class="fas fa-portrait"></i> Make profile picture</span>
      </div>
      <div class="img-container"><img src="https://source.unsplash.com/user/erondu/1600x900" alt="">
        <span><i class="fas fa-portrait"></i> Make profile picture</span>
      </div>
      <div class="img-container"><img src="https://source.unsplash.com/user/erondu/1600x900" alt="">
        <span><i class="fas fa-portrait"></i> Make profile picture</span>
      </div>
      <div class="img-container"><img src="https://source.unsplash.com/user/erondu/1600x900" alt="">
        <span><i class="fas fa-portrait"></i> Make profile picture</span>
      </div>
      <div class="upload"></div>
    </div>
  </div>

  <div>
    <div>
      <h3>Private Gallery</h3>
      <span>Control who can view these pictures</span>
    </div>
    <div>
      <img src="https://source.unsplash.com/user/erondu/1600x900" alt="">
      <img src="https://source.unsplash.com/user/erondu/1600x900" alt="">
      <img src="https://source.unsplash.com/user/erondu/1600x900" alt="">
      <img src="https://source.unsplash.com/user/erondu/1600x900" alt="">
      <img src="https://source.unsplash.com/user/erondu/1600x900" alt="">
      <div class="upload"></div>
    </div>
  </div>
</div>
</div>


</div>


<!-- Offline ID Modal -->
<div class="modal fade" id="id-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
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
<div class="modal fade" id="mobile-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
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

<div id="primary-pic-modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add or edit profile picture</h4>
        <i class="fas fa-times-circle" class="close" data-dismiss="modal"></i>
      </div>
      <div class="modal-body">
        <div>
          <div class="upload"></div>
          <div>
            <img src="{{ $user_assets }}/images/user.svg" alt="">
            <div>
              <h3>Guidelines</h3>
              <span>
                <i class="fas fa-check"></i>
                <span>Passport style</span>
              </span>
              <span>
                <i class="fas fa-check"></i>
                <span>Clear face image</span>
              </span>
              <span>
                <i class="fas fa-times"></i>
                <span>No sunglasses</span>
              </span>
              <span>
                <i class="fas fa-times"></i>
                <span>No snapchat filters</span>
              </span>
            </div>
          </div>
        </div>
        <div>
          <h2>Not allowed</h2>
          <div>
            <div>
              <span>Blurry</span>
            </div>
            <div>
              <span>Bodyshot</span>
            </div>
            <div>
              <span>Cartoon</span>
            </div>
            <div>
              <span>Group</span>
            </div>
            <div>
              <span>Offensive</span>
            </div>
            <div>
              <span>Scenic</span>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<script>
  $('.menu-container .toggle').click(function (e) {
    e.stopPropagation();
    $(this).parent().toggleClass('open');
  });

  document.onclick = function () {
    $('.menu-container').removeClass('open');
  }

  $('.my-photos .access-control > ul li div').click(function () {
    $('.my-photos .access-control > ul li div').not(this).siblings().hide(350);
    $('.my-photos .access-control > ul li div').not(this).removeClass('open');
    $(this).siblings().toggle(350);
    $(this).toggleClass('open');
  });

  $('.my-photos .profile-pic-container .remove').click(function () {
    $(this).closest('.profile-pic-container').removeClass('has-pic');
    $(this).parent().prev().attr('src', '{{ $user_assets }}/images/user.svg');
  });
</script>

<div style="padding-bottom: 100px;"></div>

@endsection


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

<link rel="stylesheet" href="{{ $user_assets }}/css/owl.carousels.css" />
<link rel="stylesheet" href="{{ $user_assets }}/css/owl.carousel.css" />

<!-- hamburger menu  -->
<link rel="stylesheet" href="{{ $user_assets }}/css/menu-hamburger.css" />
<!-- common -->
<link rel="stylesheet" href="{{ $user_assets }}/css/style.css" />


{{-- <script type="text/javascript" src="{{ $user_assets }}/js/custom.js">
</script> --}}
<link rel="stylesheet" href="{{ $user_assets }}/css/custom.css" />
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
<script src="{{ $user_assets }}/js/dropzone.js"></script>

@endpush
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

</body>

</html>