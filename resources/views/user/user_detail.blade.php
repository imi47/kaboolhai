@extends('user/user_master_layout1') 
@section('data') 


  <!-- <div class="row"> -->
    <!-- content -->
    <div class="col-sm-6">
       <div class="middle">
      <div class="row">
        <div class="col-sm-6">
        <img src="{{ $user_assets }}/images/banner1.jpg" class="img-responsive"  alt="Cinque Terre">
        </div>
        <div class="col-sm-6">
          <!-- <h5>User name</h5> -->
          <span>{{ $user->firstname }}</span>
          <h5>Age</h5>
          <span>{{ get_profile()->age }} Years</span>
          <h5>Location</h5>
          <span>{{ $city->city_name }},{{ $state->state_name }},{{ $user_country->country_name }}</span>
          <h5 style="font-family:sans-serif;font-size:10px;">Last Login : 12:30 PM</h5>
          
          
        </div>
      </div>
      <div>&nbsp;</div>
       <div class="row">
            <div class="col-md-12">
              <div class="alert alert-success" style="background-color: #5a378c; color: white">
  <strong>Profile:</strong>
</div>

      <h3 class="user_profile">Description</h3>
      <span> {{ get_profile()->description }} </span>
      <h3 class="user_profile" style="margin-top:5px;">Basic of profile</h3>
      <span><strong> Profile created by: </strong>{{ get_profile()->profile_created_by }},<strong> Ethnic Origin: </strong>{{ $ethnic_origin->ethnic_type }} </span><br>
      <span><strong> Residency Status: </strong>{{ get_profile()->residency_status }},<strong> My Religious History: </strong>{{ get_profile()->religious_type }} </span>
      <h3 class="user_profile" style="margin-top:5px;">Education</h3>
      <span><strong> Profession: </strong>{{ $profession->profession_type }},<strong> Highest Qualification: </strong>{{ $qualification->qualifications }} </span>
       <h3 class="user_profile" style="margin-top:5px;">Lifestyle And Current Status</h3>
       <span><strong> Pray: </strong>{{ get_profile()->pray }},<strong> Languages: </strong>{{ $language->language_type }} </span><br>
       <span><strong> Marital Status: </strong>{{ get_profile()->marige_type }},<strong> Sect: </strong>{{ get_profile()->sect_are }} </span><br>
       <span><strong> Children: </strong>{{ get_profile()->child_count }},<strong> Like Chiled: </strong>{{ get_profile()->like_chiled }} </span>
       <h3 class="user_profile" style="margin-top:5px;">Occurrence</h3>
       <span><strong> Hair Color: </strong>{{ get_profile()->hair_colour }},<strong> Height: </strong>{{ get_profile()->height }} </span><br>
       <span><strong> Beard: </strong>{{ get_profile()->beard }},<strong> Body Type:: </strong>{{ get_profile()->body_type }} 
        <h3 class="user_profile" style="margin-top:5px;">Assets</h3>
        @if($assets)
        @foreach ($assets as $row)
         {{ $row->assets_type }}, 
        @endforeach
        @endif
       </span><br>
            </div>
            
          </div>




<br>
           <div class="row">
            <div class="col-md-12">
              <div class="alert alert-success" style="background-color: #5a378c; color: white">
  <strong>Looking for:</strong>
</div>

      <h3 class="user_profile">Description</h3>
      <span> {{ $loking_for->description }} </span>
     <!--  -->
      <div class="row">
            <div class="col-md-6">
              <div style="background-color: #fafafa;padding: 15px; border-style: ridge;" >
              Profile 
              <hr style="margin-top: 5px;margin-bottom: 5px;">
              <div class="row">
                <div class="col-md-12">
             

              </div>
                 </div>
                  <div class="row">
                <div class="col-md-12">
                 
                  </div>
                 </div>
                   <div class="row">
                <div class="col-md-12">
           
             </div>
                 </div>
              
              </div>
            </div>
            <div class="col-md-6">
              <div style="background-color: #fafafa;padding: 15px; border-style: ridge;" >
              <a href="">Inbox</a> 
              <hr style="margin-top: 5px;margin-bottom: 5px;">
              <div class="row">
                <div class="col-md-12">

            
                 </div>
              </div>
              <div class="row">
                <div class="col-md-12">

           
                 </div>
              </div>
              <div class="row">
                <div class="col-md-12">

           
                 </div>
              </div>
             
              
              </div>
            </div>
            
          </div>
          <br>
          <div class="row">
            <div class="col-md-6">
              <div style="background-color: #fafafa;padding: 15px; border-style: ridge;" >
              Gallery 
              <hr style="margin-top: 5px;margin-bottom: 5px;">
              <div class="row">
                <div class="col-md-12">

           
                 </div>
              </div>
               <div class="row">
                <div class="col-md-12">

          
                 </div>
              </div> 
              <div class="row">
                <div class="col-md-12">

         
                 </div>
              </div>
             
             
              </div>
            </div>
            <div class="col-md-6">
              <div style="background-color: #fafafa;padding: 15px; border-style: ridge;" >
              My Account
              <hr style="margin-top: 5px;margin-bottom: 5px;">
              <div class="row">
                <div class="col-md-12">

        
                 </div>
              </div>
              <div class="row">
                <div class="col-md-12">

        
                 </div>
              </div>
              <div class="row">
                <div class="col-md-12">

        
                 </div>
              </div>
             
             
              </div>
            </div>
            
          </div>
        
            </div>
            
          </div>
    </div>  
</div>
@endsection
@push('css')
<link rel="shortcut icon" href="{{ $user_assets }}/images/favicon.png">
    <link rel="stylesheet" href="{{ $user_assets }}/css/animate.css" />
<!-- bootstrap -->
<link rel="stylesheet" href="{{ $user_assets }}/css/bootstrap.css" />
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
  
  <script type="text/javascript" src="{{ $user_assets }}/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="{{ $user_assets }}/js/custom.js"></script>
<link rel="stylesheet" href="{{ $user_assets }}/css/custom.css" />
<!-- <link rel="stylesheet" href="{{ asset('public') }}/css/chosen.css" /> -->

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
<!-- <script type="text/javascript" src="{{ asset('public') }}/js/chosen.jq.js"></script> -->
<!-- <script type="text/javascript">
    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chosen-select-width'     : {width:"95%"}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
  </script> -->
@endpush