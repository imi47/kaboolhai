@extends('user/user_master_layout1') 
@section('data') 

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

                  <label>First Name <span class="lable-color"> * </span></label>
                </div>
                <div class="col-md-6">
                :<input type="text" name="firstname" value="{{ $user_data->firstname }}">

                </div>
               
                <span style="color:red; font-size: 10px;">{{ $errors->first('firstname') }}</span>
              </div>
                
               <div class="row">
                <div class="col-md-3">
                  <label>Last Name <span class="lable-color"> * </span></label>
                </div>
                <div class="col-md-6">
                :<input type="text" name="lastname" value="{{ $user_data->lastname }}">
                </div>
                <span style="color:red; font-size: 10px;">{{ $errors->first('lastname') }}</span>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <label> User Name <span class="lable-color"> * </span></label>
                </div>
                <div class="col-md-6">
                :<input type="text" name="user_name" value="{{ $user_data->user_name }}">
                </div>
                <span style="color:red; font-size: 10px;">{{ $errors->first('user_name') }}</span>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <label>Email<span class="lable-color"> * </span></label>
                </div>
                <div class="col-md-6">
                :<input type="text" name="email" value="{{ $user_data->email }}">
                </div>
                <span style="color:red; font-size: 10px;">{{ $errors->first('email') }}</span>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <label>Gender<span class="lable-color"> * </span></label>
                </div>
                <div class="col-md-6">
                :<select name="gender" id="gender">
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
                </div>
                <span style="color:red; font-size: 10px;">{{ $errors->first('gender') }}</span>
              </div>
              <div class="row">
                <div class="col-md-3">
                 <label>Country<span class="lable-color"> * </span></label>
                </div>
                <div class="col-md-6">
                 : <select name="country_id" onchange="country_change(this)">
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
                 <label>Province<span class="lable-color"> * </span></label>
                </div>
                <div class="col-md-6">
                  :<select onchange="state_change(this)" id="state" name="state_id">
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
                 <label>City<span class="lable-color"> * </span></label>
                </div>
                <div class="col-md-6">
                  :<select id="city" name="city_id">
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
                 <label>Phone<span class="lable-color"> * </span></label>
               </div>
                
                  <div class="col-md-9">
                  :<img style="margin-left: 10px;" src="{{ $user_assets }}/flags/pk.png" width="20" id="falgimg">
             
                
                  <input style="width: 12%;"  type="text" readonly="" id="code" name="code2" value="{{ $user_data->code }}">
                <span style="color:red; font-size: 10px;">{{ $errors->first('code2') }}</span>
                
                  <input style="width: 18%" style="width: 18%;" type="number" value="{{ $user_data->phone_code }}" id="code1" name="phone_code">
                  <span style="color:red; font-size: 10px;">{{ $errors->first('phone_code') }}</span>
                 
                  <input style="width: 35%;" type="number" id="full" value="{{ $user_data->phone }}" name="phone">
                   <span style="color:red; font-size: 10px;">{{ $errors->first('phone') }}</span>
                
                </div>
             
                </div>
  <div class="row">
   <div class="col-md-3">
    <label>Date of birth<span class="lable-color"> * </span></label>
    </div>
      <div class="col-md-9">
        :<select id="day" style="width: 15%;"  name="day">
          <option value="">Day..</option>
            @for($i = 1 ; $i <= 31; $i++)
               <option value="{{ $i }}" >{{ $i }}</option>
            @endfor
       </select>
              <span style="color:red; font-size: 10px;">{{ $errors->first('day') }}</span>    
  <select style="width: 20%;" id="month"  name="month">
    <option value="">Month..</option>
      @foreach(months() as $key => $month)
         <option value="{{ $key+1 }}">{{ $month }}</option>
      @endforeach
  </select>
  <span style="color:red; font-size: 10px;">{{ $errors->first('month') }}</span>
  <select  name="year" id="year" style="width: 20%">
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
<link rel="stylesheet" href="{{ $user_assets}}/css/edit-profile.css" />
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





