@extends('user/user_master_layout1') 
@section('data') 
 
<div class="container-fluid">

   
  
  <div id="wait" style="display: none;"></div>

 
  <div class="row">
  
      <div class="steps">
        <div class="stepwizard " style="margin-top:100px; ">

          <div class="stepwizard-row setup-panel">

            <div class="stepwizard-step">
              
              <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
              <p style="font-size: 13px;">Account Details</p>
            </div>
            <div class="stepwizard-step">
              <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
              <p style="font-size: 13px;">About You</p>
            </div>
            <div class="stepwizard-step">
              <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
              <p style="font-size: 13px;">Register</p>
            </div>
          </div>
        </div>
      </div>
</div> 


  <!-- <form id="formFor" action="{{ url('register-user') }}" method="post"> -->
    <form id="formFor" action="" method="post">

    <div class="row setup-content" id="step-1">
    <h3 style="padding-left: 15px;">Account Details</h3>
    <br>
        <!-- <div class="col-md-12"> -->
         {{ csrf_field() }}
      <div class="col-sm-6">
            <div class="form-group">
            <label class="control-label">First Name * <span class="field-error" style="color: red"></span></label>
          
            <input  maxlength="100" type="text" name="fname" value="{{ $fname }}" id="fname" required="required" class="form-control" placeholder="Enter First Name">
             
          </div>
          </div>
          <div class="col-sm-6">
          <div class="form-group">
            <label class="control-label">Last Name *<span class="field-error" style="color: red"></span></label>
            <input  maxlength="100" type="text" name="lname" id="lname" value="{{ $lname }}" required="required" class="form-control" placeholder="Enter Last Name">
             
          </div>
          </div>

          <div class="col-sm-6">
          <div class="form-group">
            <label class="control-label">Email *<span class="field-error email-error" style="color: red"></span>
            </label>
            <input type="text" name="email" id="email"  value="{{ $email }}" required="required" class="form-control" placeholder="Email@example.com">
            
          </div>
          </div>
          
          <div class="col-sm-6">
          <div class="form-group">
            <label class="control-label">Password *<span class="field-error password-error" style="color: red"></span></label>
            <input  type="password" name="password" id="password" required="" class="form-control" placeholder="password">
          
          </div>
          </div>
          <div class="col-sm-6">
          <div class="form-group">
            <label class="control-label">Confirm Password *<span class="field-error password-error" style="color: red"></span></label>
            <input  type="password" name="con_password" id="con_password" required="" class="form-control" placeholder="confirm password">
           
          </div>
          </div>
          <div class="col-sm-6">
          <div class="form-group">
            <label class="control-label">I am *<span class="field-error" style="color: red"></span></label>
            <select  selected="selected" class="form-control" required="" name="gender" id="gender">
             
          
              <option value="{{ $gender }}">{{ $gender }}
              </option>
              <option value="male">A man seeking a wife
              </option>
              <option value="female">A woman seeking a husband
              </option>
            </select>
          </div>
          <!-- <a href="#" >click</a> -->
          </div>
          <button class="btn btn-primary nextBtn btn-lg pull-right next" id="error" type="button" onclick ="make_error()">Next</button>
        </div>
      <div class="col-sm-12">
@if(Session::get('error'))
          
                    <p class="alert alert-danger">{{ Session::get('error') }}</p>
                @endif
                @if(Session::get('success'))
                    <p class="alert alert-success">{{ Session::get('success') }}</p>
                @endif
                </div>
    
    <div class="row setup-content" id="step-2">
          <h3 style="margin-left: 15px;">About You</h3>
          <br>
         <!--  <div class="col-sm-6">
          <div class="form-group">
          <label class="control-label">Date of Birth *<span class="field-error" style="color: red"></span></label>
        
            <input placeholder="ddd/mmm/yyy"  type="date" required="required" id="dob" name="dob">
         

           
          </div>
          </div> -->
    
          <div class="col-sm-6">
          <div class="form-group">
            <label class="control-label">Country *<span class="field-error" style="color: red"></span></label>
            <select id="country" onchange="country_change(this)" name="country" class="form-control" required="">
              <option selected="" value="">Select country 
              </option>
              @foreach ($country as $row)
                <option value="{{ $row->country_id }}">
                  {{ $row->country_name }}
                </option>
               @endforeach
            </select>
          </div>
          </div>
          <div class="col-sm-6">
          <div class="form-group">
            <label class="control-label">Province *<span class="field-error" style="color: red"></span></label>
            <select selected="selected" id="state" onchange="state_change(this)"  name="state" class="form-control" required="">

            </select>
          </div>
          </div><div class="col-sm-6">
          <div class="form-group">
            <label class="control-label">City * <span class="field-error" style="color: red"></span></label>
            <select  name="city" id="city" selected="selected" class="form-control" required="">
              <!-- <option value="" selected="">Select city
                
              </option> -->
            </select>         
             </div>
          </div><div class="col-sm-6">
          <div class="form-group">
          <label class="control-label">Phone *<span class="field-error" style="color: red"></span></label>
            <div class="row">
              <div class="col-md-2" style="margin-left:15px; margin-top: 5px; padding-top:9px; border-style: ridge;" >
                <img style="margin-top: -8px;" src="{{ $user_assets }}/flags/pk.png" width="20" id="falgimg">
              </div>
              <div class="col-md-3" style="margin-left:-55px; padding-top:6px; ">
                <input type="text" readonly="" name="code" id="code" value="+92" class="form-control">    
              </div>
              <div class="col-md-7" style="margin-left:-30px; padding-top:6px; ">
                <input maxlength="200" type="text" name="phone" id="phone" required="required" class="form-control" placeholder="3347272969">
              </div>
            </div>
            
          </div>
          <input type="hidden" id="valid" value="1">
          </div><div class="col-sm-6">
          <div class="form-group">
            <label class="control-label">Residency Status *<span class="field-error" style="color: red"></span></label>
            <select selected="selected" name="residency" id="residency" class="form-control" required="" style="margin-bottom:0px; ">
            	<option value="">Select Residency
            		
            	</option>
              <option value="Citizen">Citizen</option>
       <option value="Parmanent resident">Parmanent resident</option>
       <option value="Student Visa">Student Visa</option>
       <option value="Work Permit">Work Permit</option>

        <option value="Temporary Visa">Temporary Visa</option>
       <option value="Others">Others</option>
             <!--  <option value="visa">visa
                
              </option> -->
            </select>      
              
          </div>
          </div>
          <div class="col-sm-6">
          <div class="form-group">
            <label class="control-label">How did you find out about us?<span class="field-error" style="color: red"></span></label>
            <input maxlength="200" type="text" name="how_did" id="how_did" required="required" class="form-control" >
          </div>
          </div>
            <div class="col-sm-6">
        
          <div class="form-group">
            <label class="control-label">Zip code</label>
            <input maxlength="200" type="text" name="zip_code" id="zipcode" class="form-control" placeholder="Enter Your zip code">
          </div>
          </div>
          <div class="col-sm-6">
         <div>
    <label for="bday">Enter your birthday:</label>
    <input type="date" id="dob" name="dob" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" class="foem-control" style="height:40px;  important">
    <span class="validity"></span>
  </div>
          </div>

          <button class="btn btn-primary prevBtn btn-lg pull-left next" type="button">Previous</button>


          <a href="#" class="btn btn-primary nextBtn btn-lg pull-right next">Next</a>

        </div>
      </div>
    </div>
    <div class="row setup-content" id="step-3">
      <div class="col-sm-6 col-md-offset-3">
        <div class="col-md-12">
          <h3 style="margin-left: 15px;">Regiater</h3>
          <br>
          <button class="btn btn-primary prevBtn btn-lg pull-left next" type="button">Previous</button>
          <button class="btn btn-success btn-lg pull-right next" type="submit">Submit</button>
        </div>
      </div>
    </div>
   
    
  </form>


</div>
</div>

<div  class="modal fade bs-example-modal-sm add-brand-modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="false" style="margin-top: 100px;">
<div class="modal-dialog modal-sm">
  <div class="modal-content">
    <div class="modal-header">
     <!--  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                                </button> -->
      <h4 class="modal-title" id="myModalLabel2">Send verification code in your email</h4>
    </div>
    <div class="modal-body">
      <form method="post" id="ver">
        {{ csrf_field() }}
          <div class="form-group">
            <label class="control-label col-md-12 col-sm-12 col-xs-12" for="brand-name">Enter Your code<span class="required">*</span>
                      </label>
            <div class="col-md-12">
              <input type="text"  name="code" id="code" class="form-control col-md-12 col-xs-12">
               <button  class="btn btn-primary step pull-right" type="submit">Submit</button>
            </div>
          </div>
          <div>&nbsp;</div>
         

            
                <!-- <input  value="Add Brand"> -->
               
             
          

      </form>


    </div>
  </div>
</div>
 </div>


<script type="text/javascript">

 
 $(document).ready(function ()
  {
 $('#ver').submit(function(e)
 {
// alert();
                            e.preventDefault();
                            formData=$(this).serialize();
                            var code=formData;

                           $.post('{{ url('/verify-code') }}' , code , function(data)
                           {
                            if(data == 'false')

                            {
                              alert('code did,nt match');
                              $('.add-brand-modal').modal('show');
                            }
                            else
                            {
                              // alert('jkdjf');
                              window.location.href = '{{ url('profile') }}';
                            }
                                              // document.getElementById("wait").style.display = "none"
                                               // alert(data);
                                              
                                          });

                            
                            });



  var navListItems = $('div.setup-panel div a'),
          allWells = $('.setup-content'),
          allNextBtn = $('.nextBtn'),
        allPrevBtn = $('.prevBtn');

  allWells.hide();

  navListItems.click(function (e) {
      e.preventDefault();
      var $target = $($(this).attr('href')),
              $item = $(this);

      if (!$item.hasClass('disabled')) {
          navListItems.removeClass('btn-primary').addClass('btn-default');
          $item.addClass('btn-primary');
          allWells.hide();
          $target.show();
          $target.find('input:eq(0)').focus();
      }
  });
  
  allPrevBtn.click(function(){
      var curStep = $(this).closest(".setup-content"),
          curStepBtn = curStep.attr("id"),
          prevStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a");

          prevStepWizard.removeAttr('disabled').trigger('click');
  });




  allNextBtn.click(function()
  {

      var curStep = $(this).closest(".setup-content"),
      curStepBtn = curStep.attr("id"),
      nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
      curInputs = curStep.find("input,select"),
      isValid = true;

      $(".form-group").removeClass("has-error");
      $(".field-error").html('');
      testId = $(this).attr('id');
      if(testId == 'error')
      {
        $('#valid').attr('value' , '1');
      }else{
        $('#valid').attr('value' , '0');
      }
      for(var i=0; i<curInputs.length; i++){
          if (!curInputs[i].validity.valid){
              isValid = false;
              $(curInputs[i]).closest(".form-group").addClass("has-error");
              $(curInputs[i]).closest(".form-group").find('span').html('(This field is Required)');
              $('#valid').attr('value' , '1');
          }
      }

      if (isValid)
      {
          var password = $('#password').val();
          var con_password = $('#con_password').val();
          if(password != con_password)
          {
             $(".form-group").addClass("has-error");
            // $(".field-error").html('');
             $(".password-error").html('Password donot match please try again');
          }
          else
          {
            var email = $('#email').val();
            $.post('{{ url('/get-email') }}' , {_token: '{{ csrf_token() }}' , email: email} , function(data)
                {
                    if(data=="true")
                    {
                      $(".form-group").addClass("has-error");
            // $(".field-error").html('');
             $(".email-error").html('This Email already exist!');
                    } 
                    else
                    {
                      nextStepWizard.removeAttr('disabled').trigger('click');
                      if($('#valid').val() == 0)
                      {
                         var fname = $('#fname').val();
                         var lname = $('#lname').val();
                         var email = $('#email').val();
                         var password = $('#password').val();
                         var con_password = $('#con_password').val();
                         if(password==con_password)
                         {
                           var gender = $('#gender').val();
                           var country = $('#country').val();
                           var state = $('#state').val();
                           var city = $('#city').val();
                           var zipcode = $('#zipcode').val();
                           var phonenum = $('#phone').val();
                           var code = $('#code').val();
                           var  phone=code+phonenum;
                           
                           var residency = $('#residency').val();
                           var how_did = $('#how_did').val();
                           var dob = $('#dob').val();

                           document.getElementById("wait").style.display = "block";

                           $.post('{{ url('/register-user') }}' , {_token: '{{ csrf_token() }}' , fname: fname, lname: lname, email: email,password: password,con_password: con_password,gender: gender,zipcode: zipcode,country: country,state: state,city: city,phone: phone,residency: residency,how_did: how_did,dob: dob} , function(data){
                                              document.getElementById("wait").style.display = "none"
                                             
                                              if(data=='success')
                                              {
                                                $('.add-brand-modal').modal('show');
                                              }
                                              else 
                                              {
                                                $('#error').show()
                                              }
                                          });
                          }
                        }
                    }
            });
          }
      }
          
      });

      $('div.setup-panel div a.btn-primary').trigger('click');
});
  

  
function country_change(sel)
{
        var country_id= sel.value;
              // alert(country_id);
                            document.getElementById("wait").style.display = "block";

                            $.post('{{ url('/get_state') }}' , {_token: '{{ csrf_token() }}' , country_id: country_id} , function(data)
                            {
                              // alert(data);
                              document.getElementById("wait").style.display = "none"
                            response = $.parseJSON(data);
                            // alert(response.states);
                            $('#state').html(response.states);
                            $('#code').attr('value' , response.code);
                            $('#falgimg').attr('src' , "{{ $user_assets.'/flags/' }}"+response.flag);
                          // alert(response.code_flage);
        });
      }
      function state_change(sel)
      {
        var state_id=sel.value;
               // alert(state_id);
                            document.getElementById("wait").style.display = "block";
                            $.post('{{ url('/get_city') }}' , {_token: '{{ csrf_token() }}' , state_id: state_id} , function(data)
                            {
                              // alert(data);
                              document.getElementById("wait").style.display = "none";
                          $('#city').html(data);
        });
                 
      }
     
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
  
  {{-- <script type="text/javascript" src="{{ $user_assets }}/js/jquery-2.1.1.min.js"></script> --}}

   <script type="text/javascript" src="{{ $user_assets }}/js/jquery-2.1.1.min.js"></script>

   <script type="text/javascript" src="{{ $user_assets }}/jquery-2.1.1.min.js"></script>
<!-- <script type="text/javascript" src="{{ $user_assets }}/js/custom.js"></script> -->
<link rel="stylesheet" href="{{ $user_assets }}/css/custom.css" />

   

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