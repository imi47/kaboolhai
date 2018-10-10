@extends('user/user_master_layout1') 
@section('data') 

<style>

html, body {
  overflow-x:hidden;
}

@media (max-width:450px) {
  #day, #month, #year, #code1, #full {
  width:100% !important;
  }
  #code {
  width:40% !important;
  }
}


  .container-fluid {
    width:100%;
  }

  #sidebar-2 {
    top:0;
  }

  #form {
    display:none;
  }

  #friends-dropdown, #messages-dropdown, #notifications-dropdown {
        margin-top:14px !important;
        margin-bottom:-14px !important;
    }

  .navbar-form.navbar-right:last-child {
    margin-top: -20px !important;
    margin-bottom: 0px !important;
}

  #btntoshowmenu + form .form-group {
    margin-bottom:-10px;
  }

  .navbar-form.navbar-right:last-child {
    margin-top:-25px;
  }

  .open .go_more {
    display:block;
  }

  /* For Firefox */
  input[type='number'] {
    -moz-appearance:textfield;
}
/* Webkit browsers like Safari and Chrome */
  input[type=number]::-webkit-inner-spin-button,
  input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

  @media (min-width:991px) {
    #username-dropdown-toggle {
      position:relative;
    }
    #username-dropdown-toggle .dropdown-menu {
      top:52px;
      left:25px !important;
    }

    .nav.navbar-nav li.dropdown {
      position:relative;
    }

    .icon-dropdown {
    min-width: 160px !important;
    padding: 5px !important;
    margin: 2px 0 0 !important;
    font-size: 14px !important;
    text-align: center !important;
    list-style: none !important;
    background-color: #fff !important;
    -webkit-background-clip: padding-box !important;
    background-clip: padding-box !important;
    border: 1px solid #ccc !important;
    border: 1px solid rgba(0,0,0,.15) !important;
    border-radius: 4px !important;
    -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175) !important;
    box-shadow: 0 6px 12px rgba(0,0,0,.175) !important;
    top:53 !important;
    left:98px;
    }

    .searchcontainer button {
      margin-top:-56px !important;
      padding-top:15px;
    }
  }

  @media (max-width:991px) {
    #menu-div .navbar-collapse.collapse {
      display:block !important;
    }

    .searchcontainer button {
      margin-top:-56px !important;
      padding-top:15px;
    }

    .icon-dropdown, .navbar-header, .username-dropdown-toggle .dropdown-menu {
      display:none;
    }

    #username-dropdown-toggle {
      position:relative;
    }

    #username-dropdown-toggle .dropdown-menu {
      top:37px !important;
      left:-75px !important;
    }

    #friends-dropdown, #messages-dropdown, #notifications-dropdown {
        margin-top:19px !important;
        margin-bottom:-19px !important;
    }
  }

   @media (max-width:768px) {
    #friends-dropdown, #messages-dropdown, #notifications-dropdown {
        margin-top:19px !important;
        margin-bottom:-19px !important;
    }
     #username-dropdown-toggle {
    margin-top:6px !important;
    }

    .humburger {
        padding:7px !important;
    }
  }

  #username-dropdown-toggle .dropdown-menu, .go_more {
    min-width: 160px !important;
    padding: 7px 20px !important;
    /* margin: 2px 0 0 !important; */
    font-size: 14px !important;
    list-style: none !important;
    background-color: #fff !important;
    -webkit-background-clip: padding-box !important;
    background-clip: padding-box !important;
    border: 1px solid #ccc !important;
    border: 1px solid rgba(0,0,0,.15) !important;
    border-radius: 4px !important;
    -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175) !important;
    box-shadow: 0 6px 12px rgba(0,0,0,.175) !important;
}
</style>

<script>
  $('.nav.navbar-nav li.dropdown').click(function() {
    $('.nav.navbar-nav .dropdown').not(this).children('.icon-dropdown').hide();
    $(this).children('.icon-dropdown').toggle();
  });

  $('#username-dropdown-toggle').click(function() {
    $(this).children('.dropdown-menu').toggle();
  });

  $(document).click(function() {
    $('#username-dropdown-toggle .dropdown-menu, .icon-dropdown').hide();
  });

   $(document).click(function() {
    $('#username-dropdown-toggle .dropdown-menu, .icon-dropdown').hide();
  });
</script>

<br><br><br><br>
  
  <div class="container-fluid"> 
    <div class="row">
      
   

<div id="wait" style="display: none;"></div>
@if(Session::has('error'))
                    <p class="alert alert-danger">{{ Session::get('error') }}</p>
                @endif
                @if(Session::has('success'))
                    <p class="alert alert-success">{{ Session::get('success') }}</p>
                @endif
      <div class="col-md-9">
        <div class="well" style="box-shadow: none;">
          <div class="menuwizard">
            <img id="one" class="wizrdpic" src="{{ $user_assets }}/img/registration-step 1.png" alt="" >
           {{--  <img id="two" class="wizrdpic" src="{{ $user_assets }}/img/registration-step 2.png" alt="" style="display:none;">
            <img id="three" class="wizrdpic" src="{{ $user_assets }}/img/registration-step 3.png" alt="" style="display: none;"> --}}
          </div>
          <div class="about_text">
            
            <p class="ptext">
              <form method="post" action="{{ url('update-profile') }}">
                {{ csrf_field() }}
                <div class="row">
                <div class="col-md-3">

                  <label>First Name: <span class="lable-color"> * </span></label>
                </div>
                <div class="col-md-6"><input type="text" name="firstname" value="{{ $user_data->firstname }}">

                </div>
               
                <span style="color:red; font-size: 10px;">{{ $errors->first('firstname') }}</span>
              </div>
                
               <div class="row">
                <div class="col-md-3">
                  <label>Last Name: <span class="lable-color"> * </span></label>
                </div>
                <div class="col-md-6"><input type="text" name="lastname" value="{{ $user_data->lastname }}">
                </div>
                <span style="color:red; font-size: 10px;">{{ $errors->first('lastname') }}</span>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <label> User Name: <span class="lable-color"> * </span></label>
                </div>
                <div class="col-md-6"><input type="text" name="user_name" value="{{ $user_data->user_name }}">
                </div>
                <span style="color:red; font-size: 10px;">{{ $errors->first('user_name') }}</span>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <label>Email:<span class="lable-color"> * </span></label>
                </div>
                <div class="col-md-6"><input type="text" name="email" value="{{ $user_data->email }}">
                </div>
                <span style="color:red; font-size: 10px;">{{ $errors->first('email') }}</span>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <label>Gender:<span class="lable-color"> * </span></label>
                </div>
                <div class="col-md-6"><select name="gender" id="gender">
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
                </div>
                <span style="color:red; font-size: 10px;">{{ $errors->first('gender') }}</span>
              </div>
              <div class="row">
                <div class="col-md-3">
                 <label>Country:<span class="lable-color"> * </span></label>
                </div>
                <div class="col-md-6"><select name="country_id" onchange="country_change(this)">
                  @foreach ($country as $row)
                              <option @if($user_data->country_id==$row->country_id) selected @endif value="{{ $row->country_id }}">
                                {{ $row->country_name }}
                              </option>
                             @endforeach
                  </select>
                </div>
                 <span style="color:red; font-size: 10px;">{{ $errors->first('country_id') }}</span>
              </div>
              <div class="row">
                <div class="col-md-3">
                 <label>Province:<span class="lable-color"> * </span></label>
                </div>
                <div class="col-md-6"><select onchange="state_change(this)" id="state" name="state_id">
                 @foreach ($state as $row)
                              <option @if($user_data->state_id==$row->state_id) selected @endif value="{{ $row->state_id }}">
                                {{ $row->state_name }}
                              </option>
                             @endforeach
                  </select>
                  
                </div>
                <span style="color:red; font-size: 10px;">{{ $errors->first('state_id') }}</span>
                </div>
              
              <div class="row">
                <div class="col-md-3">
                 <label>City:<span class="lable-color"> * </span></label>
                </div>
                <div class="col-md-6"><select id="city" name="city_id">
                   @foreach ($cities as $row)
                              <option @if($user_data->city_id==$row->city_id) selected @endif value="{{ $row->city_id }}">
                                {{ $row->city_name }}
                              </option>
                             @endforeach
                  </select>
                 
                </div>
                <span style="color:red; font-size: 10px;">{{ $errors->first('state_id') }}</span>
              </div>
              <div class="row">
                
                <div class="col-md-3">
                 <label>Phone:<span class="lable-color"> * </span></label>
               </div>
                
                  <div class="col-md-9"><img style="margin-left: 10px;" src="{{ $user_assets }}/flags/pk.png" width="20" id="falgimg">
             
                
                  <input style="width: 10%;"  type="text" readonly="" id="code" name="code2" value="{{ $user_data->code }}">
                <span style="color:red; font-size: 10px;">{{ $errors->first('code2') }}</span>
                
                  <input style="width: 15%" style="width: 18%;" type="number" value="{{ $user_data->phone_code }}" id="code1" name="phone_code">
                  <span style="color:red; font-size: 10px;">{{ $errors->first('phone_code') }}</span>
                 
                  <input style="width: 34.4%;" type="number" id="full" value="{{ $user_data->phone }}" name="phone">
                   <span style="color:red; font-size: 10px;">{{ $errors->first('phone') }}</span>
                
                </div>
             
                </div>
  <div class="row">
   <div class="col-md-3">
    <label>Date of birth:<span class="lable-color"> * </span></label>
    </div>
      <div class="col-md-9">
        <select id="day" style="width: 21.36%;"  name="day">
          <option value="">Day..</option>
            @for($i = 1 ; $i <= 31; $i++)
               <option value="{{ $i }}" >{{ $i }}</option>
            @endfor
       </select>
              <span style="color:red; font-size: 10px;">{{ $errors->first('day') }}</span>    
  <select style="width: 21.36%;" id="month"  name="month">
    <option value="">Month..</option>
      @foreach(months() as $key => $month)
         <option value="{{ $key+1 }}">{{ $month }}</option>
      @endforeach
  </select>
  <span style="color:red; font-size: 10px;">{{ $errors->first('month') }}</span>
  <select  name="year" id="year" style="width: 21.36%">
    <option value="">Year..</option>                        @for($i = date('Y')-18 ; $i >= date('Y')-118; $i--)
  <option value="{{ $i }}" >{{ $i }}</option>
   @endfor
 </select>
 <span style="color:red; font-size: 10px;">{{ $errors->first('year') }}</span>
             <input type="hidden" value="{{ $user_data->id }}" name="user_id">     
                </div>
             
              </div>
              <div class="row">
                <div class="col-md-9"></div>
                <div class="col-md-2">
                <button class="btn btn-success">Save</button>

              </div>
              </div>
              </form>
            </p> 
          </div> 
        </div>
      </div>

      
    </div>
  </div>
<script type="text/javascript">
 function country_change(sel)
{
 
     
        var country_id= sel.value;
             
                            document.getElementById("wait").style.display = "block";
                            $.post('{{ url('/get_state') }}' , {_token: '{{ csrf_token() }}' , country_id: country_id} , function(data)
                            {
                                
                              document.getElementById("wait").style.display = "none"
                            response = $.parseJSON(data);
                            
                            $('#state').html(response.states);
                            $('#code').attr('value' , response.code);
                            $('#falgimg').attr('src' , "{{ $user_assets.'/flags/' }}"+response.flag);
                         
        });
      }
      function state_change(sel)
      {
       
        var state_id=sel.value;
               
                            document.getElementById("wait").style.display = "block";
                            $.post('{{ url('/get_city') }}' , {_token: '{{ csrf_token() }}' , state_id: state_id} , function(data)
                            {
                              // alert(data);
                              document.getElementById("wait").style.display = "none";
                          $('#city').html(data);
        });
                 
      }
  $('#gender').val('{{ $user_data->gender }}');
  $('#day').val('{{ $user_data->day }}');
  $('#month').val('{{ $user_data->month }}');
  $('#year').val('{{ $user_data->year }}');
</script>
<style type="text/css">
#wait {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: url('{{ $user_assets }}/loading.gif') 50% 50% no-repeat rgba(249,249,249,0.7);
        background-size: 150px 150px;
      }
      </style>
<br><br>
<!-- Wraper end -->
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
<link rel="stylesheet" href="{{ asset('public') }}/css/chosen.css" />
<!-- <link rel="stylesheet" href="{{ $user_assets}}/css/edit-profile.css" /> -->
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

<style>
  .go_more {
    top:53 !important;
    left:95 !important;
  }

  @media (max-width:991px) {

}


</style>