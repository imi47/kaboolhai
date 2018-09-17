@extends('user/user_master_layout1') 
@section('data') 
 <br><br><br><br><br>
<div class="container">

   
  
 <div class="stepsForm">
            <form method="post">
                <div class="sf-steps">
                    <div class="sf-steps-content">
                      <div>
                          <span>1</span> Profile
                        </div>
                        <div>
                          <span>2</span> Account
                        </div>
                        <div>
                          <span>3</span> Extras
                        </div>
                    </div>
                </div>                
                <div class="sf-steps-form sf-radius"> 
                    
                    <ul class="sf-content"> <!-- form step one --> 
                         <li>
                            <div class="sf_columns column_3">
                                <input type="text" name="name" placeholder="Name" data-required="true">
                            </div>
                            <div class="sf_columns column_3">
                                <input type="text" name="surname" placeholder="Surname" data-required="true">
                            </div>
                         </li>
                         <li>
                            <div class="sf_columns column_3">
                                <label class="sf-select">
                                  <select name="country" data-required="true">
                                      <option value="" selected="selected" >Select country...</option>
                                        <option value="de">Germany</option>
                                        <option value="en">England</option>
                                        <option value="us">United States</option>
                                        <option value="tr">Turkey</option>
                                        <option value="jp">Japan</option>
                                    </select>
                                    <span></span>
                                </label>
                            </div>
                            <div class="sf_columns column_3">
                                <div class="sf-radio">
                                  Gender :  
                                    <label><input type="radio" value="M" name="gender" data-required="true"><span></span> Male</label>
                                    <label><input type="radio" value="F" name="gender" data-required="true"><span></span> Female</label>
                                </div>
                            </div>
                         </li>
                         <li>
                            <div class="sf_columns column_6">
                                <textarea placeholder="Address" name="address"></textarea>
                            </div>
                         </li>
                         <li>
                            <div class="sf_columns column_6">
                                <div class="sf-check">
                                    <label><input type="checkbox" value="test" name="test" data-required="true"><span></span> Lorem Ipsum is simply dummy text of the printing and typesetting industry</label>
                                </div>
                            </div>
                         </li>
                    </ul>
                       
                    <ul class="sf-content"> <!-- form step two --> 
                         <li>
                            <div class="sf_columns column_3">
                                <input type="text" placeholder="Username" data-required="true">
                            </div>
                            <div class="sf_columns column_3">
                                <input type="text" placeholder="Email" data-required="true" data-email="true">
                            </div>
                         </li>
                         <li>
                            <div class="sf_columns column_3">
                                <input type="password" placeholder="Password" data-required="true" data-confirm="true">
                            </div>
                            <div class="sf_columns column_3">
                                <input type="password" placeholder="Confirm Password" data-required="true" data-confirm="true">
                            </div>
                         </li>
                    </ul>
    
                    <ul class="sf-content"> <!-- form step tree --> 
                         <li>
                            <div class="sf_columns column_3">
                                <input type="text" placeholder="Phone" data-number="true">
                            </div>
                            <div class="sf_columns column_3">
                                <input type="text" placeholder="Extra">
                            </div>
                         </li>
                         <li>
                            <div class="sf_columns column_6">
                                <div class="sf-check">
                                    <label><input checked type="checkbox" value="true" name="accept"><span></span> Lorem Ipsum is simply dummy text of the printing and typesetting industry</label>
                                </div>
                            </div>
                         </li>
                    </ul>
                </div>
                
                <div class="sf-steps-navigation sf-align-right">
                  <span id="sf-msg" class="sf-msg-error"></span>
                  <button id="sf-prev" type="button" class="sf-button">Previous</button>
                    <button id="sf-next" type="button" class="sf-button">Next</button>
                </div>
            </form>
        </div>
        <!--STEPS FORM END -------------- -->
       
    </div>
<br><br><br><br><br>
<script>
  $(document).ready(function(e) {     
    $(".stepsForm").stepsForm({
      width     :'100%',
      active      :0,
      errormsg    :'Check Required Fields.',
    });
    });
</script>



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
<link rel="stylesheet" href="{{ $user_assets }}/css/stepsForm.css" />
<link rel="stylesheet" href="{{ $user_assets }}/css/demo.css" />

  

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