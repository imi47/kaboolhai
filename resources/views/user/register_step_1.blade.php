@extends('user/master_layout2')
@section('data')

<style>
  #form-container {
    width:100% !important;
    margin:0 !important;
  }

  #register_step_1 #code{
    width:65px !important;
  }

  #register_step_1 #code1{
    width:90px !important;
  }

  #regform input[type=text],input[type=email], input[type=text],input[type=password], select {
    width:200px !important;
  }

  #full {
    width:200px;
  }

  #regform input[type] {
    padding:15px;
    border:1px solid #ccc;
    border-radius: 3px;
    margin-bottom:-15px !important;
  }

  #register_step_1 .progress {
    margin-top:5px !important;
    margin-left:-15px !important;
  }

 

  @media (max-width:1200px) {
    #full {
      /* width:40% !important; */
      display:inline;
      margin-top:10px !important;
    }

    .form_error {
      margin-left:230px !important;
    }
  }

   @media (max-width:991px) {
    .form_error {
      margin-left:170px !important;
    }
  }

  @media (max-width:768px) {
    #regform input[type=text],input[type=email], input[type=text],input[type=password] {
      width:90%;
    }

    .form_error {
      margin-left:173px !important;
    }

    #full {
      width:90%;
    }

    /* #gender, #country_id, #state_id, #city_id {
      margin-top:0;
    } */

    select {
      width:90% !important;
    }
  }

      /* For Firefox */
  input[type='number'] {
    -moz-appearance:textfield;
  }
  /* Webkit browsers like Safari and Chrome */
  input[type=number]::-webkit-inner-spin-button,
  input[type=number]::-webkit-outer-spin-button {
      -webkit-appearance: none !important;
      margin: 0;
  }

   #yer, #month-select, #year-select {
   width:auto !important;
  }
}
</style>

<div class="modal wow fadeInDown" id="myModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
  aria-hidden="false">
  <div class="modal-dialog modal-lg" style="height: 700px; box-shadow: 0 4px 8px 0 rgba(0,0,0, 0.5), 0 6px 20px 0 rgba(0,0, 0, 0.5;);">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header" style="color:#ffffff; height:75px; background-color:#e6e6e6; border-bottom-color:#000000; ">
        <div class="container">
          <div class="row">
            <div class="col-sm-4">
              <img width="100%" src="{{ $user_assets }}/KH-logo-blog-logo.png" style="width: 177px; height: 57px;">
            </div>
          </div>
        </div>
      </div>

      <!-- Modal body -->
      <div class="modal-body" style="text-align:center;background-color:#e6e6e6; ">
        <div class="container">

          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
              <h3 class="mfh">Thank you for registering with us. Your Kaboolhai username is <span id="verfi_user"></span></h3>
              <hr>
              <h1 class="mvt">Verify your mobile number</h1>
              <h5 class="pinn">Enter the pin that was sent via sms to <span id="num_code"></span> <span id="p_code"></span>
                <span id="num"></span> (<a href="#" onclick="return edit_num()"> Edit</a>)</h5>
            </div>
          </div>
          <script type="text/javascript">
            function edit_num() {
              $('#edit_num').show('slow')
              // $('#verify-code').hide('slow')
            }
          </script>

          <div class="row" style="margin-top: 18px;">
            <div class="col-sm-3 col-md-3 col-lg-3 col-xs-3">
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3 col-xs-3">
              <span id="verifiy_error" style="color: red"></span>

              <form method="post" id="verify-code">



                {{ csrf_field() }}

                <input type="text" id="" name="verification_code" class="form-control" style="height:30px;width:190px;">
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3 col-xs-3">
              <button type="submit" style="height: 30px;width: 112px;background-color: darkorange;box-shadow: none;color: white;border: 1px;">Verify</button>
            </div>
            <div class="col-md-12 col-md-offset-3">
              <span id="res1" style="display: none; color: #5a378c"><b>Your mobile number has been changed</span></b>
            </div>
            </form>

          </div>


          <div class="col-sm-3 col-md-3 col-lg-3 col-xs-3">
          </div>
        </div>
        <div class="row" style="margin-top:10px;">
          <div class="col-sm-12">
            <h5 style="text-align:center;">Didn't receive code yet? <a href="#" onclick="return resend()">Resend code</a></h5>
            <span id="res" style="display: none; color: #5a378c"><b>Resend verification code on your mobile number</span></b>
          </div>
        </div>
        <h5 style="float:right;"><a href="#" onclick="return skip()">Skip >></a></h5>
        <div class="row" id="edit_num" style="display: none;">
          <form id="update-num" method="POST" style="width: 100%">

            {{ csrf_field() }}

            <input type="hidden" id="user_id1" name="user_id1" class="smallselect">
            <input type="text" id="num_code1" name="code1" class="smallselect">




            <input type="text" id="p_code1" name="phone_code1" class="" style="
">



            <input type="text" id="num1" name="phone1" class="" style="
">




            <button type="submit" style="
width: 85px;
background-color: darkorange;
color: white;
border: 1px;
">Submit</button>


          </form>
        </div>
      </div>
      {{--
    </div> --}}

    <!-- Modal footer -->
    <div class="modal-footer" style="border-top-color:#000000;text-align:center;">
      <div class="col-sm-12">
        <h5 style="font-size:12px">Copyright &copy; 2018.All rights reserved.</h5>
      </div>
    </div>

  </div>
</div>
</div>





<!-- The Modal -->
<!-- The Modal -->

<div class="container">
  <div id="wait" style="display: none;"></div>
  <br>
  <div class="row">

    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
      <div class="well" style="background-color: #f5f5f5">
        <br>
        <div class="menuwizard">
          <img id="one" class="wizrdpic" src="{{ $user_assets }}/img/registration-step 1.png" alt="">
          {{-- <img id="two" class="wizrdpic" src="{{ $user_assets }}/img/registration-step 2.png" alt="" style="display:none;">
          <img id="three" class="wizrdpic" src="{{ $user_assets }}/img/registration-step 3.png" alt="" style="display: none;">
          --}}
        </div>

        <script type="text/javascript">
          function first() {
            $('#firt').show();
          }

          function fir() {
            $('#firt').hide();
            var val = $('#fi').val()
            if (val == '') {

              $('#firstname').html('You must enter your first name')
            }

          }

          function ft() {
            $('#firstname').html('');
          }

          function last() {
            $('#last').show();
          }

          function lst() {
            // $('#last').hide();
            $('#last').html('');
            var val = $('#li').val();
            if (val == '') {

              $('#lastname').html('You must enter your last name')
            }

          }

          function lt() {
            $('#lastname').html('');
          }

          function us() {
            $('#user_name').html('');
          }


          function usr() {
            $('#user').show();
          }

          function un() {
            $('#user').html('');
            var val = $('#ui').val()
            if (val == '') {

              $('#user_name').html('You must enter your user name')
            }

          }




          function emails() {

            $('#email').html('');
          }


          function ema() {
            $('#em').show();
          }

          function emi() {

            $('#em').html('');
            var email = $('#emai').val()
            if (email == '') {

              $('#email').html('You must enter your Email')
            }
            $.post('{{ url(' / get - email ') }}', {
              _token: '{{ csrf_token() }}',
              email: email
            }, function (data) {


              if (data == 'true') {
                $('#email').html('Your email is already register')
              }
              // else
              // {

              // }
            });


          }





          function passwordss() {
            // alert();

            $('#password').html('');
          }


          function pass() {
            $('#pass').show();
          }

          function pas() {

            $('#pass').html('');
            var val = $('#pa').val()
            // alert(val);
            if (val == '') {

              $('#password').html('You must enter your password')
            }

          }


          function c_password() {


            $('#password_confirmation').html('');
          }


          function c_pas() {
            $('#c_pass').show();
          }

          function c_pass() {

            $('#c_pass').html('');
            var con_password = $('#c_pa').val()
            var password = $('#pa').val()

            if (con_password == '') {

              $('#password_confirmation').html('You must enter your confirm password')
            }
            // alert(con_password);
            if (password != con_password) {
              $('#password_confirmation').show();
              $('#password').show();
              $('#password_confirmation').html('Passwords don,t match. Please try again!')
              $('#password').html('Passwords don,t match. Please try again!')
            }

          }



          function genders(sel) {

            // alert();
            $('#gender').html('');
          }


          function gendr() {

            $('#ged').show();
          }

          function gen() {

            $('#ged').html('');
            var val = $('#gend').val()



            if (val == '') {

              $('#gender').html('You must state if you are male or female')
            }

          }


          function conry() {

            $('#county').show();
          }

          function count() {

            $('#county').html('');
            var val = $('#cont').val()

            if (val == '') {

              $('#country_id').html('You must enter your country name')
            }

          }

          function statuss() {

            $('#stats').show();
          }

          function stat() {

            $('#stats').html('');
            var val = $('#state').val()

            if (val == '') {

              $('#state_id').html('You must enter your province name')
            }

          }


          function city_change(sel) {

            // alert();
            $('#city_id').html('');
          }


          function city_focus() {

            $('#cities').show();
          }

          function city_blour() {

            $('#cities').html('');
            var val = $('#city').val()

            if (val == '') {

              $('#city_id').html('You must enter your city name')
            }

          }

          function year_focus() {
            $('#years').show('slow');
          }

          function year_change(sel) {
            $('#year').html('');
          }

          function year_blor() {
            $('#years').html('');
            var val = $('#yer').val()

            if (val == '') {

              $('#year').html('You must enter your DOB')
            }


          }



          function phone_focus() {
            $('#phoness').show('slow');
          }

          function phone_press() {
            var val = $('#full').val()

            if (val) {

              $('#phone').html('');

            }
          }

          function phone_blur() {
            $('#phoness').html('');
            var val = $('#full').val()

            if (val == '') {

              $('#phone').html('You must enter your mobile number')
            }


          }
        </script>
        <style type="text/css">
          .firs {

            width: 47%;
            background-size: 100% 100%;
            display: inline-block;
            font-size: 13px;
            padding: 10px 10px 25px;
            position: absolute;
            top: -72px;
            left: 252px;
            /* text-align: center; */
            position: all;
            background-repeat: no-repeat;

            background-image: url('./public/user_assets/public_profile/tooltip.png');
            /*background-image:url(../dashbord/banner_background.jpg);*/
            /*background-image:url('../back.jpg');*/
            /*border-bottom-right-radius: 10px;
border-bottom-left-radius: 10px;*/
          }


          .firs1 {

            width: 47%;
            background-size: 100% 100%;
            display: inline-block;
            font-size: 13px;
            padding: 10px 10px 25px;
            position: absolute;
            top: -90px;
            left: 27px;
            /* text-align: center; */
            position: all;
            background-repeat: no-repeat;

            background-image: url('./public/user_assets/public_profile/tooltip.png');
            /*background-image:url(../dashbord/banner_background.jpg);*/
            /*background-image:url('../back.jpg');*/
            /*border-bottom-right-radius: 10px;
border-bottom-left-radius: 10px;*/
          }

          .tool-tip {
            text-align: center;
            padding: 10px;
          }

          .progress-bar.progress-bar-danger {
            background-color: red;
          }

          .progress-bar.progress-bar-warning {
            background-color: #edda12;
          }
        </style>

        <form method="post" id="register_step_1">
          <div class="form_area">
            <ul id="regform">

              <li class="row listtopmarg">
                <div class="col-4">
                  <label for="">First Name: <span class="imporatant">*</span></label>
                </div>
                <div class="col-8">

                  <!-- <span class="colons">:</span> -->
                  <span class="on-focus">
                    <input type="text" data-toggle="tooltip" data-placement="top" title="Kindly enter your first name in the field"
                      onblur="fir()" onkeypress="ft()" title="First name" onfocus="first();" id="fi" name="firstname"
                      value="{{ $fname }}" class="allinputs" placeholder="Enter First Name">

                  </span>
                </div>
                <span id="firstname" class="form_error" style="color:red; font-size:13px; margin-left: 277px;"></span>
              </li>
              <div class="btpad"></div>
              <li class="row listtopmarg">
                <div class="col-4">
                  <label for="">Last Name: <span class="imporatant">*</span></label>
                </div>
                <div class="col-8">
                  <!-- <span class="colons">:</span> -->
                  <span class="on-focus">
                    <input type="text" data-toggle="tooltip" data-placement="top" title="Kindly enter your last name in the field"
                      id="li" onblur="lst()" onkeypress="lt()" onfocus="last();" name="lastname" title="Last name"
                      value="{{ $lname }}" class="allinputs" placeholder="Enter Last Name">

                  </span>

                </div>
                <span id="lastname" class="form_error" style="color:red; font-size: 13px; margin-left: 277px;"></span>
              </li>
              <div class="btpad"></div>
              <li class="row listtopmarg">
                <div class="col-4">
                  <label for="">Username: <span class="imporatant">*</span></label>
                </div>
                {{ csrf_field() }}
                <div class="col-8">
                  <!-- <span class="colons">:</span> -->
                  <span class="on-focus">
                    <input maxlength="8" type="text" data-toggle="tooltip" data-placement="top" title="Create your user name. It must not exceed 8 letters."
                      id="ui" onblur="un()" onkeypress="us()" onfocus="usr()" name="user_name" title="User name" class="allinputs"
                      placeholder="Enter User Name">

                  </span>
                </div>
                <span id="user_name" class="form_error" style="color:red; font-size: 13px; margin-left: 277px;"></span>
              </li>
              <div class="btpad"></div>

              <li class="row listtopmarg">
                <div class="col-4">
                  <label for="">Email: <span class="imporatant">*</span></label>
                </div>
                <div class="col-8">

                  <!-- <span class="colons">:</span> -->
                  <span class="on-focus">
                    <input type="email" data-toggle="tooltip" data-placement="top" title="Enter your email address in the field"
                      id="emai" onblur="emi()" onfocus="ema()" onkeypress="emails()" name="email" title="Email" value="{{ $email }}"
                      class="allinputs" placeholder="Enter Email" style="height:27px;">
                  </span>

                </div>
                <span id="email" class="form_error" style="color:red; font-size: 13px; margin-left: 277px;"></span>
              </li>
              <div class="btpad"></div>

              <li class="row listtopmarg">
                <div class="col-4">
                  <label for="">Password: <span class="imporatant">*</span></label>
                </div>
                <div class="col-8">

                  <!-- <span class="colons">:</span> -->
                  <span class="on-focus">
                    <input type="password" data-toggle="tooltip" data-placement="top" title="Password should be between 8-25 characters "
                      {{-- id="password" --}} id="pa" name="password" onkeypress="passwordss()" onblur="pas()" onfocus="pass()"
                      class="allinputs" placeholder="Enter Password">

                    <div class="col-6">

                      <div class="pwstrength_viewport_progress" style="display: none;"></div>
                    </div>

                  </span>
                </div>
                <span id="password" title="Password" class="form_error" style="color:red; font-size: 13px; margin-left: 277px;"></span>
              </li>
              <div class="btpad"></div>

              <li class="row listtopmarg">
                <div class="col-4">
                  <label for="">Confirm Password: <span class="imporatant">*</span></label>
                </div>
                <div class="col-8">

                  <!-- <span class="colons">:</span> -->
                  <span class="on-focus">
                    <input type="password" data-toggle="tooltip" data-placement="top" title="Re-enter your password to confirm"
                      id="c_pa" title="Confirm Password" name="password_confirmation" onblur="c_pass()" onfocus="c_pas()"
                      onkeypress="c_password()" class="allinputs" placeholder="Confirm Password">

                  </span>

                </div>
                <span id="password_confirmation" class="form_error" style="color:red; margin-left: 277px; font-size: 13px;"></span>
              </li>
              <div class="btpad"></div>

              <li class="row listtopmarg">
                <div class="col-4">
                  <label for="">Gender: <span class="imporatant">*</span></label>
                </div>
                <div class="col-8">
                  <!-- <span class="colons">:</span> -->
                  {{-- <span class="on-focus"> --}}
                    <select name="gender" id="gend" onblur="gen()" onchange="genders(this)" onfocus="gendr()" class="allselects"
                      title="Gender">
                      <option value="">Select</option>
                      <option @if($gender=='Male' ) selected @endif value="Male">Male</option>
                      <option value="Female" @if($gender=='Female' ) selected @endif>Female</option>
                    </select>
                    {{-- <div class="tool-tip  slideIn">Sample text Sample text Sample text Sample text Sample text
                      Sample text </div>
                  </span> --}}
                  {{-- <span id="ged" class="firs" style="display: none;"> sample text sample text sample text sample
                    text sample text sample text sample text </span> --}}
                </div>
                <span id="gender" class="form_error" style="color:red; font-size: 13px; margin-left: 277px;"></span>
              </li>
              <div class="btpad"></div>

              <li class="row listtopmarg">
                <div class="col-4">
                  <label for="">Country: <span class="imporatant">*</span></label>
                </div>
                <div class="col-8">
                  <!-- <span class="colons">:</span> -->
                  {{-- <select name="" id=""> --}}
                    <select title="Country" id="cont" onblur="count()" onfocus="conry()" onchange="country_change(this)"
                      name="country_id" class="allselects">
                      <option selected="" value="">Select country
                      </option>
                      @foreach ($country as $row)
                      <option value="{{ $row->country_id }}">
                        {{ $row->country_name }}
                      </option>
                      @endforeach
                    </select>

                </div>
                <span id="country_id" class="form_error" style="color:red; margin-left: 277px; font-size: 13px;"></span>
              </li>
              <div class="btpad"></div>

              <li class="row listtopmarg">
                <div class="col-4">
                  <label for="">Province: <span class="imporatant">*</span></label>

                </div>
                <div class="col-8">
                  <!-- <span class="colons">:</span> -->
                  {{-- <select name="" id=""> --}}
                    <select title="State" onblur="stat()" onfocus="statuss()" selected="selected" id="state" onchange="state_change(this)"
                      name="state_id" class="allselects">
                      <option value="">Select</option>
                    </select>
                </div>
                <span id="state_id" class="form_error" style="color:red; margin-left: 277px; font-size: 13px;"></span>
              </li>
              <div class="btpad"></div>

              <li class="row listtopmarg">
                <div class="col-4">
                  <label for="">City: <span class="imporatant">*</span></label>

                </div>
                <div class="col-8">
                  <!-- <span class="colons">:</span> -->

                  <select title="City" onblur="city_blour()" onchange="city_change(this)" onfocus="city_focus()" name="city_id"
                    id="city" selected="selected" class="allselects">
                    <option value="">Select</option>
                  </select>

                </div>
                <span id="city_id" class="form_error" style="color:red; font-size:13px; margin-left: 277px;"></span>
              </li>
              <div class="btpad"></div>

              <li class="row listtopmarg">
                <div class="col-4">
                  <label for="">Phone: <span class="imporatant">*</span></label>
                </div>
                <div class="col-8">
                  <!-- <span class="colons">:</span> -->
                  <img style="margin-top: 4px; margin-bottom: 6px;" src="{{ $user_assets }}/flags/pk.png" width="20" id="falgimg">

                  <input type="text" readonly="" id="code" name="code2" value="+92" placeholder="Code" class="smallselect">
                  <input type="number" data-toggle="tooltip" data-placement="top" title="Kindly enter your correct phone number"
                    onfocus="myFunction(this)" placeholder="Code" id="code1" name="phone_code" class="smallselect"
                    style="width:100px;">
                  <span class="on-focus">
                    <input type="number" data-toggle="tooltip" data-placement="top" title="Kindly enter your correct phone number"
                      id="full" onblur="phone_blur()" onfocus="phone_focus()" onkeypress="phone_press()" placeholder=" Number"
                      name="phone" class="midlinput">

                  </span>
                </div>
              </li>
              <div class="btpad"></div>

              <span id="phone" class="form_error" style="color:red; font-size: 13px;"></span>

              <span id="ppp" class="form_error" style="color:#9b9b9b; display: none; margin-left: 213px; margin-top: -18px; font-size: 13px;">Your
                contact will not be visble to other members and will remain private.</span>
              </li>
              <div class="btpad"></div>
              <li class="row" class="listtopmarg">
                <div class="col-4">
                  <label for=""> Date of Birth: <span class="imporatant">*</span></label>
                </div>
                <div class="col-8" style="margin-left:-65px; ">
                  <!-- <span class="colons">:</span> -->
                  <select id="yer" onblur="year_blor()" onchange="year_change(this)" onfocus="year_focus()" name="day"
                    class="midlselect">
                    <option value="">Day..</option>
                    @for($i = 1 ; $i <= 31; $i++) <option value="{{ $i }}">{{ $i }}</option>
                      @endfor
                  </select>
                  {{-- <span id="years" class="firs1" style="display: none;"> sample text sample text sample text
                    sample text sample text sample text sample text </span> --}}
                  <select name="month" class="midlselect">
                    <option value="">Month..</option>
                    @foreach(months() as $key => $month)
                    <option value="{{ $key+1 }}">{{ $month }}</option>
                    @endforeach
                  </select>
                  <select name="year" class="midlselect">
                    <option value="">Year..</option>



                    @for($i = date('Y')-18 ; $i >= date('Y')-118; $i--)
                    <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                  </select>

                </div>
              </li>
              <div class="btpad"></div>



              <li class="row listtopmarg">
                <div class="col-3">
                </div>
                <div class="col-9">
                  <span id="year" class="form_error" style="color:red; font-size: 13px; margin-left: 21px;"></span>
                </div>
              </li>
              <div class="btpad"></div>
            </ul>
            <!-- *************************************************************************************** -->





            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

            </ul>


            <button class="btn btn-success edit_next_btn" type="submit">Next</button>




          </div>
      </div>
      <br>
    </div>
    </form>

    <script type="text/javascript">
      function myFunction() {
        $('#ppp').show('slow');
      }

      $('#register_step_1').submit(function (e) {
        $('.form_error').html('');
        // Empty('.form_error');
        e.preventDefault();
        formData = $(this).serialize();
        var code = formData;

        document.getElementById("wait").style.display = "block";


        $.post('{{ url(' / user - register - step - 1 ') }}', code, function (data) {
          document.getElementById("wait").style.display = "none"
          var json = $.parseJSON(data);
          console.log(json);
          if (json.feedback == 'false') {
            $.each(json.errors, function (key, value) {
              $('#' + key).html(value);
            });
          } else {
            $('#verfi_user').html(json.user_name);
            $('#num_code').html(json.code);
            $('#p_code').html(json.phone_code);
            $('#num').html(json.phone);

            $('#num_code1').val(json.code);
            $('#p_code1').val(json.phone_code);
            $('#num1').val(json.phone);
            $('#user_id1').val(json.id);

            if (json.country_id == '166') {
              $('#myModal').modal('show');
            } else {


              window.location.href = '{{ url('
              oth ') }}';

            }
          }


        });


      });




      $('#verify-code').submit(function (e) {

        e.preventDefault();
        formData = $(this).serialize();
        var code = formData;

        $.post('{{ url(' / verify - code ') }}', code, function (data) {
          if (data == 'false')

          {
            // alert('code did,nt match');
            $('#verifiy_error').html('code did,nt match please try again');
            $('#myModal').modal('show');
          } else {

            window.location.href = '{{ url('
            oth ') }}';
          }


        });


      });


      function skip() {
        $('#myModal').modal('hide');
        window.location.href = '{{ url('
        oth ') }}';
      }
      $('#code1').on('keyup', function () {
        val = $(this).val();
        var regExp = /^0[0-9].*$/;
        if (regExp.test(val)) {
          limt = 4;
        } else {
          limt = 3;
        }
        if (val.length >= limt) {
          $('#full').focus();
        }
      });
      // }
    </script>

    <script type="text/javascript">
      $('#update-num').submit(function (e) {

        e.preventDefault();
        formData = $(this).serialize();
        var data = formData;



        document.getElementById("wait").style.display = "block";






        $.post('{{ url(' / update - num ') }}', data, function (data) {
          // alert(data);
          document.getElementById("wait").style.display = "none"
          var json = $.parseJSON(data);


          $('#num_code').html(json.code);
          $('#p_code').html(json.phone_code);
          $('#num').html(json.phone);
          $('#res1').show('slow');
          $('#edit_num').hide('slow');

        });
      });

      function country_change(sel) {

        $('#country_id').hide();
        var country_id = sel.value;

        // alert(country_id);
        document.getElementById("wait").style.display = "block";

        $.post('{{ url(' / get_state ') }}', {
          _token: '{{ csrf_token() }}',
          country_id: country_id
        }, function (data) {
          // alert(data);
          document.getElementById("wait").style.display = "none"
          response = $.parseJSON(data);
          // alert(response.states);
          $('#state').html(response.states);
          $('#code').attr('value', response.code);
          $('#falgimg').attr('src', "{{ $user_assets.'/flags/' }}" + response.flag);
          // alert(response.code_flage);
        });
      }



      function state_change(sel) {
        $('#state_id').hide();
        var state_id = sel.value;

        document.getElementById("wait").style.display = "block";
        $.post('{{ url(' / get_city ') }}', {
          _token: '{{ csrf_token() }}',
          state_id: state_id
        }, function (data) {
          // alert(data);
          document.getElementById("wait").style.display = "none";
          $('#city').html(data);
        });

      }






      function resend() {
        document.getElementById("wait").style.display = "block";




        $.get('{{ url(' / resend ') }}', {
          _token: '{{ csrf_token() }}'
        }, function (data) {

          document.getElementById("wait").style.display = "none"
          if (data == 'true') {
            $('#res').show('slow');
          }
        });
      }





      $('#register_step_1').parsley();
    </script>

    <style type="text/css">
      #wait {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: url('{{ $user_assets }}/loading.gif') 50% 50% no-repeat rgba(249, 249, 249, 0.7);
        background-size: 150px 150px;
      }

      .tooltip>.tooltip-inner {
        background-color: #ccc;
        color: black;
        text-align: justify;
      }
    </style>

    @endsection
    @push('css')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    {{--
    <link rel="stylesheet" href="{{ $user_assets }}/css/style.css"> --}}
    <link rel="stylesheet" href="{{ $user_assets }}/css/style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <script src="{{ $user_assets }}/js/custom2.js"></script>
    <script src="{{ $user_assets }}/js/register.js"></script>
    <link rel="stylesheet" href="{{ $user_assets }}/css/register.css" />
    </script>
    <script type="text/javascript">
      $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
      });
    </script>
    @endpush