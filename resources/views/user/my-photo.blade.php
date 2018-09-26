@extends('user/user_master_layout1') 
@section('data')

<style>
  #menu-div .navbar-collapse.collapse {
    float:right;
  }

  .navbar-nav>li {
    float:left !important;
  }

  @media (max-width:991px) {
  
  .nav>li>a {
    font-size: smaller;
    padding: 0 7px;
    font-weight:700;
    margin-top:15px;
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
  <div class="col-md-3">
        <div class="well" style="box-shadow: none;">
          @include('user/side_bar')
        </div>
      </div>

  <div class="col-md-9">
    

      
      <h2 class="dashboard-h2">My Photos</h2>
      <p class="dashboard-para"><em>Note:</em> You can upload 20 photos to your profile. Each photos must be less than 10 MB and in jpg, gif, png, bmp or tiff format. All photos uploaded are screened as per Photo Guidelines and 98% of those get activated within 2 hours.</p>
      
     
      <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#album" aria-controls="album" role="tab" data-toggle="tab">Photo Album</a></li>
      {{-- <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li> --}}
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
      <div role="tabpanel" class="tab-pane fade in active" id="album">
        <div class="album-main">
          
          <div class="form-group dropzone" id="dropzone">
            <div class="dz-message">
              <form method="post" action="{{ url('add-photo') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="col-md-6">
              <input type="file" name="image_name" style="display: block; ">
              </div>
              <div class="col-md-4"></div>
              <div class="col-md-2">
              <button type="submit" class="btn btn-block">Save</button>
              </div>
              </form>
            </div>
          </div>
          
          <div class="gallery">
            {{-- @php $limit=1; @endphp --}}
            @if(!empty($photo))
            @foreach($photo as $row)
                
              <div class="col-md-3">
                <div class="g-photos" style="padding-bottom: 50px;">
                  <a onclick="return confirm('Are you sure you want to delete this image?');" href="{{ url('delete-photo',$row->photo_id) }}" class="gp-cross"><i class="fa fa-window-close pull-right" style="color: red; font-size: 20px;"></i></a>
                  <img style="height: 150px; width: 200px;" src="{{ $user_assets }}/my_photo/{{ $row->image }}" alt="" class="img-responsive" />
                  <div class="gp-text text-center">Album Photo {{ $user_data->user_name }}</div>
                  
                  <a href="{{ url('make-profile-image',$row->photo_id) }}" class="btn btn-primary btn-sm">Make Profile Image</a>
                </div>
              </div>

            
              @endforeach
              @endif
             {{--  <div class="col-md-3">
                <div class="g-photos">
                  <img src="{{ $user_assets }}/img/1.jpg" alt="" class="img-responsive" />
                  <div class="gp-text text-center">Album Photo 2</div>
                  <a href="javascript:;" class="gp-cross"><i class="fa fa-times"></i></a>
                </div>
              </div>
              <div class="col-md-3">
                <div class="g-photos">
                  <img src="{{ $user_assets }}/img/2.jpg" alt="" class="img-responsive" />
                  <div class="gp-text text-center">Album Photo 3</div>
                  <a href="javascript:;" class="gp-cross"><i class="fa fa-times"></i></a>
                </div>
              </div>
              <div class="col-md-3">
                <div class="g-photos">
                  <img src="{{ $user_assets }}/img/3.jpg" alt="" class="img-responsive" />
                  <div class="gp-text text-center">Album Photo 4</div>
                  <a href="javascript:;" class="gp-cross"><i class="fa fa-times"></i></a>
                </div>
              </div>
              <div class="col-md-3">
                <div class="g-photos">
                  <img src="{{ $user_assets }}/img/3.jpg" alt="" class="img-responsive" />
                  <div class="gp-text text-center">Album Photo 5</div>
                  <a href="javascript:;" class="gp-cross"><i class="fa fa-times"></i></a>
                </div>
              </div>
              <div class="col-md-3">
                <div class="g-photos">
                  <img src="{{ $user_assets }}/img/3.jpg" alt="" class="img-responsive" />
                  <div class="gp-text text-center">Album Photo 6</div>
                  <a href="javascript:;" class="gp-cross"><i class="fa fa-times"></i></a>
                </div>
              </div> --}}
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
      <div role="tabpanel" class="tab-pane fade" id="settings">
        <div class="main-settings">
          <div class="col-md-6">
            <h3>Choose Display Option</h3>
            <hr />
            <form>
              <input type="radio" name="setting" value="display" /> Visible to all Members <br/>
              <input type="radio" name="setting" value="display" /> Visible to Members I like and to all Premium Members<br/>
              <div>&nbsp;</div>
              <div>&nbsp;</div>
              <button  value="Save Changes" class="btn btn-success" />Save Changes</button>
            </form>
          </div>
          <div class="col-md-6">
            <h3>Allowed Members</h3>
            <hr />
            <form method="post" action="{{ url('photo-setting') }}">
            @if(!empty($permission))
            @foreach($permission as $row)
            <input type="checkbox" @if($row->status==1) checked="" @endif value="{{ $row->user_id }}" name="permission[]"  /> {{ $row->user->user_name }} <br/>
            @endforeach
            @endif
            {{ csrf_field() }}
            {{-- <input type="checkbox" value="user1" /> Usman Iqbal <br/>
            <input type="checkbox" value="user1" checked /> Farhan Ahmad <br/>
            <input type="checkbox" value="user1" checked /> Ghulam Haider <br/>
            <input type="checkbox" value="user1" checked /> Atif Yaqub <br/>
            <input type="checkbox" value="user1" checked /> Babar Malik <br/>
            <input type="checkbox" value="user1" /> Huzaifa Asif <br/>
            <input type="checkbox" value="user1" /> Yasir Amjad <br/>
            <input type="checkbox" value="user1" /> Salman Saeed <br/>
            <input type="checkbox" value="user1" /> Nabeel Haider <br/>
            <input type="checkbox" value="user1" /> Muhammad Adeel <br/>
            <input type="checkbox" value="user1" /> Shoaib Anwar <br/> --}}
            <div>&nbsp;</div>
            <div>&nbsp;</div>
            <button type="submit" value="Allow Permission" class="btn btn-success" />Allow Permission
          </button>
          </form>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
      </div>
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

 


  <div style="padding-bottom: 100px;"></div>  

<script>
   mq = window.matchMedia( "(max-width: 530px)" );
         
    mq.addListener(mediaQueryResponse) // attach listener function to listen in on state changes so a page refresh will not be required

    // search option will stay in the same line in tablet mode 
    function mediaQueryResponse(mq) {

      if(mq.matches) {
          // document.querySelector('.logo-light img')

          // alert('hi');
      }
    }
    mediaQueryResponse(mq);
</script>

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
  

{{-- <script type="text/javascript" src="{{ $user_assets }}/js/custom.js"></script> --}}
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