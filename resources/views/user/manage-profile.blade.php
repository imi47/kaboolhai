@extends('user/user_master_layout1') 
@section('data')

<style>

html, body {
	overflow-x:hidden;
}

.hdlist {
    font-size:16px;
  }

  .hdlist li {
	 padding:10px 5px;
  }

  .hdlist li {
     border-radius:5px;
   }

  .hdlist li:hover {
    background-color:#ed6c05;
  }

.main-section {
    width:420px;
  }

  .main-section .arrow_button {
    margin-left:-21px;
  }

  #bb img {
    margin-top: 13px;
  }

  .emojiPicker {
	 left: 21px !important;
	 top:-5px;
  }

  .emojiPickerIcon.black {
    height: 37px !important;
    width: 37px !important;
    top: 7px !important;
  }

  #bb img {
    margin-top: 14px;
}

	.humburger {
		font-size: 30px;
		color: #fff;
		font-weight: normal;
		margin-top: 10px;
}

.mp-btns {
   position: absolute;
	right:37px;
}

input[type='checkbox'] {
	display:block;
   width: 6%;
}

@media (max-width:1131px) {
	input[type='checkbox'] {
    margin-top: 10px;
    width: 21%;
}
}

@media (max-width:1169px) {
	input[type='checkbox'] {
		margin-top: 10px;
		width: 18%;
	}
}

.searchcontainer button {
	margin-top:-56px;
}

/* .btn1 {
	top: 63px;
}

.btn2 {
	top: 345px;
}

.btn3 {
	top: 575px;
}

.btn4 {
	top: 720px;
}

.btn5 {
	top: 940px;
}

.btn6 {
	top: 1150px;
}

.btn7 {
	top: 1340px;
}

.btn8 {
	top: 1620px;
}

.btn9 {
	top: 2100px;
}

.btn10 {
	top: 2270px;
}

.btn11 {
	top: 2400px;
}

.btn12 {
	top: 2550px;
} */


@media (min-width:991px) {
	.nav.navbar-nav {
	margin-right:0;
	}

	#logo-div {
		margin-right: -61px;
	}
}

@media (min-width:1361px) {
      .navbar-form {
        display:block !important;
      }

      #friends-dropdown, #messages-dropdown, #notifications-dropdown, #username-dropdown-toggle {
        visibility:visible !important;
      }
    }

    @media (max-width:1360px) {
      .navbar-form {
        display:none;

        position: absolute;
        border-radius: 3px;
        top: 13px;
        right: 104px;
        margin:0;
        padding:0px;
        border:none;
      }

      .navbar-form input {
        margin:0;
        border: 3px solid #936BCB !important;
        padding:14px;
      }

      .navbar-form button {
        top: 3px;
        border-radius: 0;
        right: -17px;
      }

      .search-dropdown-toggle {
        display:inline-block
      }
    }
}

@media (max-width:768px) {

	#username-dropdown-toggle .dropdown-menu {
		left:-64px !important;
	}

	.mp-bio-label {
    width: auto;
	}

	#username-dropdown-toggle {
		margin-top: 10px !important;
	}

	.mp-form-list li {
		display:block;
	}

	.mp-btns {
	margin-top: -60px;
}

	.mp-form-list li{
		display:flex;
		align-items: center;
	}
}

@media (max-width:475px) {
	ul.mp-form-list span{
		font-size:2.9vw;
	}

	.basic-info-form, .mp-content {
		width:70vw;
	}

	/* .btn10, .btn7 {
		margin-top:30px;
	} */
}

</style>

<div style="padding-top:90px;"></div>
 <div class="col-md-3 hidden-sm hidden-xs">
        <div class="well" style="box-shadow: none;">
          @include('user/side_bar')
        </div>
      </div>
<div class="col-md-9">

<div class="row">
<div id="wait" style="display: none;"></div>
@php
$limit = 1;
@endphp
<div class="col-md-12">
<div class="mp-main">
	<div class="panel panel-default">
    <div class="panel-heading text-center"><h3>Manage My Profile</h3>
    </div>
     </div>


<div class="mp-about">
<h3 class="mp-head">Basic Information</h3>
<hr/>

<div class="mp-content pull-left">
<div class="mp-religious-info mp-basic-info">
<ul class="mp-form-list">
<li>
<span class="mp-bio-label">Name:</span>
<span class="mp-bio-ans"> {{$user_data->firstname.' '.$user_data->lastname}}</span>
</li>
<li>
<span class="mp-bio-label">User Name:</span>
<span class="mp-bio-ans"> {{$user_data->user_name}}</span>
</li>
<li>
<span class="mp-bio-label">Age:</span>

<span class="mp-bio-ans">{{ date('Y')-$user_data->year }} Years</span>
</li>
<li>
<span class="mp-bio-label">Date of Birth:</span>
<span class="mp-bio-ans"> {{ $user_data->day.'-'.$user_data->month.'-'.$user_data->year }}</span>
</li>
<li>
<span class="mp-bio-label">Gender:</span>
<span class="mp-bio-ans"> {{ $user_data->gender }}</span>
</li>
<li>
<span class="mp-bio-label">Email:</span>
<span class="mp-bio-ans"> {{ $user_data->email }}</span>
</li>
<li>
<span class="mp-bio-label">Phone #:</span>
<span class="mp-bio-ans"> {{ $user_data->code.$user_data->phone_code.$user_data->phone }}</span>
</li>

<span class="mp-bio-label">Country:</span>
<span class="mp-bio-ans"> {{ $user_data->country_name }}</span>
</li>
<li>
<span class="mp-bio-label">State:</span>
<span class="mp-bio-ans"> {{ $user_data->state_name }}</span>
</li>
<li>
<span class="mp-bio-label">City:</span>
<span class="mp-bio-ans"> {{ $user_data->city_name }}</span>
</li>
</ul>
</div>
<form method="post" action="basic-info">
	{{ csrf_field() }}
<div class="basic-info-form" style="display: none;">
<div class="form-group row">
<label for="name" class="col-sm-5 col-form-label">First name:</label>
<div class="col-sm-7">
<input type="text" name="firstname" class="form-control" id="name" placeholder=" First  Name" value="{{ $user_data->firstname }}">
<span style="color:red; font-size: 10px;">{{ $errors->first('firstname') }}</span>
</div>
</div>
<div class="form-group row">
<label for="name" class="col-sm-5 col-form-label">Last name:</label>
<div class="col-sm-7">
<input type="text" name="lastname" class="form-control" id="name" placeholder="Last  Name" value="{{ $user_data->lastname }}">
<span style="color:red; font-size: 10px;">{{ $errors->first('lastname') }}</span>
</div>
</div>
<div class="form-group row">
<label for="name" class="col-sm-5 col-form-label">User Name:</label>
<div class="col-sm-7">
<input type="text" readonly="" name="user_name" class="form-control" id="name" placeholder="Last  Name" value="{{ $user_data->user_name }}">
<span style="color:red; font-size: 10px;">{{ $errors->first('user_name') }}</span>
</div>
</div>
<div class="form-group row">
<label for="dob" class="col-sm-3 col-form-label">Date of Birth:</label>

<div class="col-sm-3">
<select id="day" name="day" class="form-control  dob">
<option value="">Day</option>

@for($i = 1 ; $i <= 31; $i++)
<option value="{{ $i }}" >{{ $i }}</option>
@endfor
</select>
<span style="color:red; font-size: 10px;">{{ $errors->first('day') }}</span>
</div>
<div class="col-sm-3">

<select id="month" name="month" class="form-control  dob">


<option value="">Month..</option>
@foreach(months() as $key => $month)
<option value="{{ $key+1 }}">{{ $month }}</option>
@endforeach
</select>
<span style="color:red; font-size: 10px;">{{ $errors->first('month') }}</span>
</div>
<div class="col-sm-3">	
<select id="year" name="year" class="form-control  dob">

<option value="">Year..</option>                        @for($i = date('Y')-18 ; $i >= date('Y')-118; $i--)
<option value="{{ $i }}" >{{ $i }}</option>
@endfor
</select>
<span style="color:red; font-size: 10px;">{{ $errors->first('year') }}</span>
</div>
</div>
<div class="form-group row">
<label for="gender" class="col-sm-5 col-form-label">Gender:</label>
<div class="col-sm-7">
<select name="gender" class="form-control" id="gender">
<option value="Male">Male</option>
<option value="Female">Female</option>
</select>
<span style="color:red; font-size: 10px;">{{ $errors->first('gender') }}</span>
</div>
</div>
<div class="form-group row">
<label for="gender" class="col-sm-5 col-form-label">Email:</label>
<div class="col-sm-7">
<input type="email" readonly="" name="email" class="form-control" id="email" placeholder="Email" value="{{ $user_data->email }}">
<span style="color:red; font-size: 10px;">{{ $errors->first('email') }}</span>
</div>
</div>
<div class="form-group row">
<label for="gender" class="col-sm-5 col-form-label">Country:</label>
<div class="col-sm-7">
<select onchange="country_change(this)" class="form-control" id="country" name="country_id">
@foreach($country as $row)
<option @if($row->country_id==$user_data->country_id) selected="" @endif value="{{ $row->country_id }}">{{ $row->country_name }}</option>
@endforeach

</select>
<span style="color:red; font-size: 10px;">{{ $errors->first('country_id') }}</span>
</div>
</div>
<div class="form-group row">
<label for="gender" class="col-sm-5 col-form-label">State:</label>
<div class="col-sm-7">
<select onchange="state_change(this)" class="form-control" id="state" name="state_id">
@foreach($state as $row)
<option @if($row->state_id==$user_data->state_id) selected="" @endif value="{{ $row->state_id }}">{{ $row->state_name }}</option>
@endforeach

</select>
<span style="color:red; font-size: 10px;">{{ $errors->first('state_id') }}</span>
</div>
</div>
<div class="form-group row">
<label for="gender" class="col-sm-5 col-form-label">City:</label>
<div class="col-sm-7">
<select  class="form-control" id="city" name="city_id">
@foreach($cities as $row)
<option @if($row->city_id==$user_data->city_id) selected="" @endif value="{{ $row->city_id }}">{{ $row->city_name }}</option>
@endforeach
</select>
<span style="color:red; font-size: 10px;">{{ $errors->first('city_id') }}</span>
</div>
</div>
<div class="form-group row">
<label for="dob" class="col-sm-5 col-form-label">Mobile No #:</label>

<div class="col-sm-7">
<input type="text" readonly="" name="mobile" class="form-control" id="code" placeholder="Mobile" value="{{ $user_data->mobile }}">
<span style="color:red; font-size: 10px;">{{ $errors->first('mobile') }}</span>
</div>

</div>

<div class="clearfix"></div>
</div>

</div>
<div class="mp-btns pull-right btn1">
<a href="javascript:;" class="mp-edit-btn eb2">Edit</a>
<div class="mp-btn2-two dc2" style="display: none;">
<input type="submit" value="Done" class="mp-done-btn" />
<a href="javascript:;" class="mp-cancel-btn cb2">Cancel</a>
</form>
</div>
</div>
<div class="clearfix"></div>
</div>
<div class="mp-about">
<h3 class="mp-head">Religious Interest</h3>
<hr/>
<div class="mp-content pull-left">
<div class="mp-religious-info religues">
<ul class="mp-form-list">


<li>
<span class="mp-bio-label">Allegiance to Islamic Orgn:</span>
@if($user_data->sect_are)
<span class="mp-bio-ans"> {{ $user_data->sect_are }}</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#sect_are_model">Add Islami Orgn</a></span>
@endif
</li>
<li>
<span class="mp-bio-label">Perform Namaaz:</span>
@if($user_data->pray)
<span class="mp-bio-ans"> {{ $user_data->pray }}</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#pray_model">Add Perform Namaz</a></span>
@endif
</li>
<li>
<span class="mp-bio-label">Religiousness:</span>
@if($user_data->religiousness)
<span class="mp-bio-ans">{{ $user_data->religiousness }}</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#religiousness_model">Add religiousness</a></span>
@endif
</li>
<li>
<span class="mp-bio-label">Attend religious services:</span>
@if($user_data->attend_religious_service)
<span class="mp-bio-ans">{{ $user_data->attend_religious_service }}</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#attend_religious_modal">Add Attend religious</a></span>
@endif
</li>
<li>
<span class="mp-bio-label">Read Qur'an:</span>
@if($user_data->read_quran)
<span class="mp-bio-ans"> {{ $user_data->read_quran }}</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#read_quran_modal">Add Read Qur'an</a></span>
@endif
</li>
<li>
<span class="mp-bio-label">Ethnic Origin:</span>
@if($user_data->ethnic_type)
<span class="mp-bio-ans"> {{ $user_data->ethnic_type }}</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#ethnic_modal">Add Ethnic Origin</a></span>
@endif
</li>

</ul>
</div>
<form method="post" action="{{ url('religes-info') }}">
	{{ csrf_field() }}
<div class="religes-info-form" style="display: none;">
<div class="form-group row">
<label for="name" class="col-sm-5 col-form-label">Allegiance to Islamic Orgn:</label>
<div class="col-sm-7">
<select selected="selected" name="sect_are" id="" class="form-control sect_are">
<option  value="">Please select..</option>
<option value="Just A Muslim">Just a Muslim</option>
<option value="Sunni">Sunni</option>
<option value="Barilvi">Barilvi</option>
<option value="Ahle Hadees">Ahle Hadees</option>
<option value="Salafi">Salafi</option>
<option value="Deobandi">Deobandi</option>
<option value="Hanafi">Hanafi</option>
<option value="Shafi">Shafi'i</option>
<option value="Maliki">Maliki</option>
<option value="Hanbali">Hanbali</option>
<option value="Syed">Syed</option>
<option value="Shia">Shia</option>
<option value="Ismaili">Ismaili</option>
<option value="Sufism">Sufism</option>
<option value="Bohra">Bohra</option>
{{-- <option value="Pathan">Pathan</option> --}}
</select>
</div>
</div>
<div class="form-group row">
<label for="dob" class="col-sm-5 col-form-label">Perform Namaz:</label>
<div class="col-sm-7">
<select selected="selected" name="pray" id="" class="form-control pray">
<option value="Always Pray">Always Pray</option>
<option value="sometime pray">sometime pray</option>
<option value="Intend to start praying">Intend to start praying</option>
<option value="Sometimes miss Fajr and make Qadah Salah">Sometimes miss Fajr and make Qadah Salah</option>
<option value="Only pray before exams">Only pray before exams</option>
<option value="Don't pray">Don't pray</option>
<option value="Eid Salah only">Eid Salah only</option>
<option value="Rarely miss a prayer and make Qadah Sala">Rarely miss a prayer and make Qadah Sala</option>
</select>
</div>
</div>
<div class="form-group row">
<label for="gender" class="col-sm-5 col-form-label">Religiousness:</label>
<div class="col-sm-7">
<select name="religiousness" id="" class="form-control religiousness">
<option value="">Please select..</option>
<option value="Very religious">Very religious</option>
<option value="Religious">Religious</option>
<option value="Not religious">Not religious</option>
<option value="Prefer not to say">Prefer not to say</option>
</select>
</div>
</div>
<div class="form-group row">
<label for="gender" class="col-sm-5 col-form-label">Attend religious services:</label>
<div class="col-sm-7">
<select name="attend_religious_service" id="" class="form-control attend_religious_service">
<option value="" >Please select</option>
<option value="Daily" >Daily</option>
<option value="Only on Jummah / Fridays">Only on Jummah / Fridays</option>
<option value="Sometimes">Sometimes</option>
<option value="Only During Ramadan">Only During Ramadan</option>
<option value="Never">Never</option>
</select>
</div>
</div>
<div class="form-group row">
<label for="gender" class="col-sm-5 col-form-label">Read Qur'an:</label>
<div class="col-sm-7">
	<select name="read_quran" id="" class="form-control read_quran">
<option value="" >Please select</option>
<option value="Daily" >Daily</option>
<option value="Ocassionally" >Ocassionally</option>
<option value="Only During Ramadan" >Only During Ramadan</option>
<option value="Only on Jummah / Fridays" >Only on Jummah / Fridays</option>
<option value="Read translated version" >Read translated version</option>
<option value="Never Read" >Never Read</option>
<option value="Prefer not to say" >Prefer not to say</option>
</select>
</div>
</div>
<div class="form-group row">
<label for="gender" class="col-sm-5 col-form-label">Ethnic Origin:</label>
<div class="col-sm-7">
<select name="ethnic_type" id="" class="ethnic_type form-control">
<option value='' selected='selected'>Rather not say</option>
<option value='Algerian'>Algerian</option>
<option value='Arab'>Arab</option>
<option value='Carribean'>Carribean</option>
<option value='Turkish'>Turkish</option>
<optgroup label='Asian'>
<option value='Asian - Afghan'>Asian - Afghan</option>
<option value='Asian - Bangladeshi'>Asian - Bangladeshi</option>
<option value='Asian - Chinese'>Asian - Chinese</option>
<option value='Asian - Filipino'>Asian - Filipino</option>
<option value='Asian - Indian'>Asian - Indian</option>
<option value='Asian - Indonesian'>Asian - Indonesian</option>
<option value='Asian - Kurdish'>Asian - Kurdish</option>
<option value='Asian - Kyrgyz'>Asian - Kyrgyz</option>
<option value='Asian - Malay'>Asian - Malay</option>
<option value='Asian - Maldives'>Asian - Maldives</option>
<option value='Asian - Pakistani'>Asian - Pakistani</option>
<option value='Asian - Sri Lankan'>Asian - Sri Lankan</option>
<option value='Asian - Other Background'>Asian - Other Background</option>
<option value='Indian Carribean'>Indian Carribean</option>
</optgroup>
<optgroup label='White'>
<option value='White - American'>White - American</option>
<option value='White - Australian'>White - Australian</option>
<option value='White - British'>White - British</option>
<option value='White - Canadian'>White - Canadian</option>
<option value='White - Hispanic'>White - Hispanic</option>
<option value='White - Other Background'>White - Other Background</option>
</optgroup>
<optgroup label='Black'>
<option value='Black - African'>Black - African</option>
<option value='Black - American'>Black - American</option>
<option value='Black - British'>Black - British</option>
<option value='Black - Caribbean'>Black - Caribbean</option>
<option value='Black - Ethiopian'>Black - Ethiopian</option>
<option value='Black - Somali'>Black - Somali</option>
<option value='Black - Other Background'>Black - Other Background</option>
<option value='Mauritian'>Mauritian</option>
</optgroup>
<optgroup label='Other Ethnic Group'>
<option value='Albanian'>Albanian</option>
<option value='Bosnian'>Bosnian</option>
<option value='OTHER'>Other Ethnicity</option>
</optgroup>
</select>
</div>
</div>

<div class="clearfix"></div>
</div>

</div>

<div class="mp-btns pull-right btn2">
<a href="javascript:;" class="mp-edit-btn eb3">Edit</a>
<div class="mp-btn2-two dc3" style="display: none;">
<input type="submit" value="Done" class="mp-done-btn" />
<a href="javascript:;" class="mp-cancel-btn cb3">Cancel</a>
</form>
</div>
</div>
<div class="clearfix"></div>
</div>
<div class="mp-about">
<h3 class="mp-head">Appearance</h3>
<hr/>
<div class="mp-content pull-left">
<div class="mp-religious-info apperance">
<ul class="mp-form-list">


<li>
<span class="mp-bio-label">Complexion:</span>
@if($user_data->skin_color)
<span class="mp-bio-ans"> {{ $user_data->skin_color }}</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#skin_color_modal">Add Complexion</a></span>
@endif
</li>

<li>
<span class="mp-bio-label">Physical Status:</span>
@if($user_data->physical_status)
<span class="mp-bio-ans"> {{ $user_data->physical_status }}</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#physical_status_modal">Add Physical Status</a></span>
@endif
</li>
<li>
<span class="mp-bio-label"> Beard:</span>
@if($user_data->bread)
<span class="mp-bio-ans"> {{ $user_data->bread }}</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#beard_modal"> Add Beard</a></span>
@endif
</li>
<li>
<span class="mp-bio-label"> Height & Weight:</span>
@if($user_data->height)
<span class="mp-bio-ans"> {{ $user_data->height.'/'.$user_data->weight }}</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#height_wheight_modal"> Add Height & Weight</a></span>
@endif
</li>


</ul>
</div>
<form method="post" action="{{ url('apperance-info') }}">
	{{ csrf_field() }}
<div class="apperance-info-form" style="display: none;">
<div class="form-group row">
<label for="name" class="col-sm-5 col-form-label">Complexion:</label>
<div class="col-sm-7">
<select id="" name="skin_color" class="skin_color form-control">
<option value="">Select</option>
<option value="Very Fair">Very Fair</option>
<option value="Fair">Fair</option>
<option value="Wheatish">Wheatish</option>
<option value="Wheatish Brown">Wheatish Brown</option>
<option value="Dark">Dark</option>
</select>
</div>
</div>
<div class="form-group row">
<label for="dob" class="col-sm-5 col-form-label">Physical Status:</label>
<div class="col-sm-7">
<select id="" name="physical_status"  class="physical_status form-control">
<option selected="selected" value="Normal Person">Normal Person</option>
<option value="Deaf/Dumb">Deaf/Dumb</option>
<option value="Blind">Blind</option>
<option value="Physically Challenged">Physically Challenged</option>
<option value="Mentally Challenged">Mentally Challenged</option>
<option value="With other Disability">With other Disability</option>
</select>
</div>
</div>
<div class="form-group row">
<label for="gender" class="col-sm-5 col-form-label">Beard:</label>
<div class="col-sm-7">
<select name="bread" id="" class="bread form-control">
<option value="">Please Select..</option>
<option value="Yes">Yes</option>
<option value="No">No</option>
<option value="Prefered not to say">prefered not to say</option>
</select>
</div>
</div>
<div class="form-group row">
<label for="gender" class="col-sm-5 col-form-label">Height:</label>
<div class="col-sm-7">
<select id="" name="height" class="height form-control">
<option value="">Height..</option>
<option value="Below 4ft 6in - 137cm">Below 4ft 6in - 137cm</option>
<option value="4ft 6in - 137cm">4ft 6in - 137cm</option>
<option value="4ft 7in - 139cm">4ft 7in - 139cm</option>
<option value="4ft 8in - 142cm">4ft 8in - 142cm</option>
<option value="4ft 9in - 144cm">4ft 9in - 144cm</option>
<option value="4ft 10in - 147cm">4ft 10in - 147cm</option>
<option value="4ft 11in - 149cm">4ft 11in - 149cm</option>
<option value="5ft - 152cm">5ft - 152cm</option>
<option value="5ft 1in - 154cm">5ft 1in - 154cm</option>
<option value="5ft 2in - 157cm">5ft 2in - 157cm</option>
<option value="5ft 3in - 160cm">5ft 3in - 160cm</option>
<option value="5ft 4in - 162cm">5ft 4in - 162cm</option>
<option value="5ft 5in - 165cm">5ft 5in - 165cm</option>
<option value="5ft 6in - 167cm">5ft 6in - 167cm</option>
<option value="5ft 7in - 170cm">5ft 7in - 170cm</option>
<option value="5ft 8in - 172cm">5ft 8in - 172cm</option>
<option value="5ft 9in - 175cm">5ft 9in - 175cm</option>
<option value="5ft 10in - 177cm">5ft 10in - 177cm</option>
<option value="5ft 11in - 180cm">5ft 11in - 180cm</option>
<option value="6ft - 182cm">6ft - 182cm</option>
<option value="6ft 1in - 185cm">6ft 1in - 185cm</option>
<option value="6ft 2in - 187cm">6ft 2in - 187cm</option>
<option value="6ft 3in - 190cm">6ft 3in - 190cm</option>
<option value="6ft 4in - 193cm">6ft 4in - 193cm</option>
<option value="6ft 5in - 195cm">6ft 5in - 195cm</option>
<option value="6ft 6in - 198cm">6ft 6in - 198cm</option>
<option value="6ft 7in - 200cm">6ft 7in - 200cm</option>
<option value="6ft 8in - 203cm">6ft 8in - 203cm</option>
<option value="6ft 9in - 205cm">6ft 9in - 205cm</option>
<option value="6ft 10in - 208cm">6ft 10in - 208cm</option>
<option value="6ft 11in - 210cm">6ft 11in - 210cm</option>
<option value="7ft - 213cm">7ft - 213cm</option>
<option value="Above 7ft - 213c">Above 7ft - 213cm</option>
</select>
</div>
</div>



<div class="form-group row">
<label for="weight" class="col-sm-5 col-form-label">Wheight:</label>
<div class="col-sm-7">
<select id="" name="weight" class="weight form-control">
<option value="">Weight..</option>
<option value="40 kg">40 Kg</option>
<option value="41 kg">41 Kg</option>
<option value="42 kg">42 Kg</option>
<option value="43 kg">43 Kg</option>
<option value="44 kg">44 Kg</option>
<option value="45 kg">45 Kg</option>
<option value="46 kg">46 Kg</option>
<option value="47 kg">47 Kg</option>
<option value="48 kg">48 Kg</option>
<option value="49 kg">49 Kg</option>
<option value="50 kg">50 Kg</option>
<option value="51 kg">51 Kg</option>
<option value="52 kg
">52 Kg</option>
<option value="53 kg">53 Kg</option>
<option value="54 kg">54 Kg</option>
<option value="55 kg">55 Kg</option>
<option value="56 kg">56 Kg</option>
<option value="57 kg">57 Kg</option>
<option value="58 kg">58 Kg</option>
<option value="59 kg">59 Kg</option>
<option value="60 kg">60 Kg</option>
<option value="61 kg">61 Kg</option>
<option value="62 kg">62 Kg</option>
<option value="63 kg">63 Kg</option>
<option value="64 kg">64 Kg</option>
<option value="65 kg">65 Kg</option>
<option value="66 kg">66 Kg</option>
<option value="67 kg">67 Kg</option>
<option value="68 kg">68 Kg</option>
<option value="69 kg">69 Kg</option>
<option value="70 kg">70 Kg</option>
<option value="71 kg">71 Kg</option>
<option value="72 kg">72 Kg</option>
<option value="73 kg">73 Kg</option>
<option value="74 kg">74 Kg</option>
<option value="75 kg">75 Kg</option>
<option value="76 kg">76 Kg</option>
<option value="77 kg">77 Kg</option>
<option value="78 kg">78 Kg</option>
<option value="79 kg">79 Kg</option>
<option value="80 kg">80 Kg</option>
<option value="81 kg">81 Kg</option>
<option value="82 kg">82 Kg</option>
<option value="83 kg">83 Kg</option>
<option value="84 kg">84 Kg</option>
<option value="85 kg">85 Kg</option>
<option value="86 kg">86 Kg</option>
<option value="87 kg">87 Kg</option>
<option value="88 kg">88 Kg</option>
<option value="89 kg">89 Kg</option>
<option value="90 kg">90 Kg</option>
<option value="91 kg">91 Kg</option>
<option value="92 kg">92 Kg</option>
<option value="93 kg">93 Kg</option>
<option value="94 kg">94 Kg</option>
<option value="95 kg">95 Kg</option>
<option value="96 kg">96 Kg</option>
<option value="97 kg">97 Kg</option>
<option value="98 kg">98 Kg</option>
<option value="99 kg">99 Kg</option>
<option value="100 kg">100 Kg</option>
<option value="101 kg">101 Kg</option>
<option value="102 kg">102 Kg</option>
<option value="103 kg">103 Kg</option>
<option value="104 kg">104 Kg</option>
<option value="105 kg">105 Kg</option>
<option value="106 kg">106 Kg</option>
<option value="107 kg">107 Kg</option>
<option value="108 kg">108 Kg</option>
<option value="109 kg">109 Kg</option>
<option value="110 kg">110 Kg</option>
<option value="111 kg">111 Kg</option>
<option value="112 kg">112 Kg</option>
<option value="113 kg">113 Kg</option>
<option value="114 kg">114 Kg</option>
<option value="115 kg">115 Kg</option>
<option value="116 kg">116 Kg</option>
<option value="117 kg">117 Kg</option>
</select>
</div>
</div>

<div class="clearfix"></div>
</div>

</div>

<div class="mp-btns pull-right btn3">
<a href="javascript:;" class="mp-edit-btn eb4">Edit</a>
<div class="mp-btn2-two dc4" style="display: none;">
<input type="submit" value="Done" class="mp-done-btn" />
<a href="javascript:;" class="mp-cancel-btn cb4">Cancel</a>
</form>
</div>
</div>
<div class="clearfix"></div>
</div>
<div class="mp-about">
<h3 class="mp-head"> Education and Occupation</h3>
<hr/>
<div class="mp-content pull-left">
<div class="mp-religious-info education">
<ul class="mp-form-list">


<li>
<span class="mp-bio-label">Education:</span>
@if($user_data->qualification)
<span class="mp-bio-ans"> {{ $user_data->qualification }}</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#education_modal">Add Education</a></span>
@endif
</li>
<li>
<span class="mp-bio-label">Education Details:</span>
@if($user_data->edu_detail)
<span class="mp-bio-ans"> {{ $user_data->edu_detail }}</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#education_detail_modal">Add Education Details</a></span>
@endif
</li>
<li>
<span class="mp-bio-label">Occupation:</span>
@if($user_data->job)
<span class="mp-bio-ans">{{ $user_data->job }}</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#occupation_modal">Add Occupation</a></span>
@endif
</li>
<li>
<span class="mp-bio-label"> Occupation Detail:</span>
@if($user_data->occupation_detail)
<span class="mp-bio-ans">{{ $user_data->occupation_detail }}</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#occupation_detail_modal">Add  Occupation Detail</a></span>
@endif
</li>
<li>
<span class="mp-bio-label">Annual Income:</span>
@if($user_data->a_income)
<span class="mp-bio-ans"> {{ $user_data->a_income }}</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#annual_income_modal">Add Annual Income</a></span>
@endif
</li>

</ul>
</div>
<form method="post" action="{{ url('education-info') }}">
	{{ csrf_field() }}
<div class="edu-info-form" style="display: none;">
<div class="form-group row">
<label for="name" class="col-sm-5 col-form-label">Education:</label>
<div class="col-sm-7">
<select name="qualification" id="" class="qualification form-control">
<option selected="selected" value="">--- Select ---</option>
<optgroup label='Bachelors - Engineering/Computer'>
<option value='BCA'>BCA</option>
<option value='B Arch'>B Arch</option>
<option value='B Plan'>B Plan</option>
<option value='BE'>BE</option>
<option value='B Tech'>B Tech</option>
<option value='Aeronautical Engineering'>Aeronautical Engineering</option>
<option value='BSc Computer Science'>BSc Computer Science</option>
<option value='BSc IT'>BSc IT</option>
<option value='Bachelor of Engineering'>Bachelor of Engineering</option>
</optgroup>
<optgroup label='Masters - Engineering/Computer'>
<option value='MS (Engg.)'>MS (Engg.)</option>
<option value='M Arch'>M Arch</option>
<option value='MCA'>MCA</option>
<option value='PGDCA'>PGDCA</option>
<option value='ME'>ME</option>
<option value='M Tech'>M Tech</option>
<option value='MSc Computer Science'>MSc Computer Science</option>
<option value='MSc IT'>MSc IT</option>
<option value='Master of Engineering'>Master of Engineering</option>
</optgroup>
<optgroup label='Bachelors - Arts/Science/Commerce/Other'>
<option value='B Phil'>B Phil</option>
<option value='B Com'>B Com</option>
<option value='BSc'>BSc</option>
<option value='BA'>BA</option>
<option value='BFA'>BFA</option>
<option value='BLIS'>BLIS</option>
<option value='BSW'>BSW</option>
<option value='BMM (MASS MEDIA)'>BMM (MASS MEDIA)</option>
<option value='Bachelors Degree'>Bachelors Degree</option>
</optgroup>
<optgroup label='Masters - Arts/Science/Commerce/Other'>
<option value='M Phil'>M Phil</option>
<option value='M Com'>M Com</option>
<option value='M Sc'>M Sc</option>
<option value='MA'>MA</option>
<option value='MLIS'>MLIS</option>
<option value='MSW'>MSW</option>
<option value='Masters Degree'>Masters Degree</option>
</optgroup>
<optgroup label='Teachers Education - BEd/MEd'>
<option value='BEd'>BEd</option>
<option value='MEd'>MEd</option>
</optgroup>
<optgroup label='Management - MBA/BBA/Other'>
<option value='MHM'>MHM</option>
<option value='MBA'>MBA</option>
<option value='PGDM'>PGDM</option>
<option value='MFM (Financial Management)'>MFM (Financial Management)</option>
<option value='Master Degree in Management'>Master Degree in Management</option>
<option value='BHM'>BHM</option>
<option value='BBA'>BBA</option>
<option value='BFM (Financial Management)'>BFM (Financial Management)</option>
<option value='Bachelor Degree in Management'>Bachelor Degree in Management</option>
</optgroup>
<optgroup label='Medicine - MBBS/MD/MS'>
<option value='MBBS'>MBBS</option>
<option value='MD / MS (Medical)'>MD / MS (Medical)</option>
<option value='MCh - Master of Chirurgiae'>MCh - Master of Chirurgiae</option>
<option value='DM - Doctorate of Medicine'>DM - Doctorate of Medicine</option>
</optgroup>
<optgroup label='Medicine - Dental/Homeo/Ayu/Vet'>
<option value='BDS'>BDS</option>
<option value='MDS'>MDS</option>
<option value='BHMS'>BHMS</option>
<option value='MHMS'>MHMS</option>
<option value='BAMS'>BAMS</option>
<option value='MAMS'>MAMS</option>
<option value='Bachelor of Veterinary Science'>Bachelor of Veterinary Science</option>
<option value='Master of Veterinary Science'>Master of Veterinary Science</option>
<option value='Degree in Medicine'>Degree in Medicine</option>
<option value='Master in Medicine'>Master in Medicine</option>
</optgroup>

<optgroup label='Medicine - Pharmacy/Nursing/Lab/Health'>
<option value='BPT'>BPT</option>
<option value='MPT'>MPT</option>
<option value='B.Pharm'>B.Pharm</option>
<option value='M.Pharm'>M.Pharm</option>
<option value='BSc Nursing'>BSc Nursing</option>
<option value='MSc Nursing'>MSc Nursing</option>
<option value='Medical Course'>Medical Course</option>
<option value='Diploma in Nursing'>Diploma in Nursing</option>
<option value='Medical Laboratory Technology'>Medical Laboratory Technology</option>
</optgroup>

<optgroup label='Legal - BL/ML/LLB/LLM'>
<option value='BGL'>BGL</option>
<option value='Bachelor of Law'>Bachelor of Law</option>
<option value='LLB'>LLB</option>
<option value='Master of Law'>Master of Law</option>
<option value='LLM'>LLM</option>
<option value='Course in Legal'>Course in Legal</option>
</optgroup>

<optgroup label='Finance - CA/ICWAI/CS'>
<option value='CA Inter'>CA Inter</option>
<option value='CA Final'>CA Final</option>
<option value='ICWA'>ICWA</option>
<option value='Company Secretary (CS)'S>Company Secretary (CS)</option>
<option value='CFA (Chartered Financial Analyst)'>CFA (Chartered Financial Analyst)</option>
<option value='Course in Finance'>Course in Finance</option>
</optgroup>

<optgroup label='Doctorate'>
<option value='Ph D'>Ph D</option>
</optgroup>

<optgroup label='Civil Service'>
<option value='IAS'>IAS</option>
<option value='IPS'>IPS</option>
<option value='IRS'>IRS</option>
<option value='154'>IES</option>
<option value='155'>IFS</option>
<option value='156'>Civil Service</option>
</optgroup>


<optgroup label='Diploma'>
<option value='Diploma'>Diploma</option>
<option value='Polytechnic'>Polytechnic</option>
</optgroup>

<optgroup label='Higher Secondery/TTC/ITI'>
<option value='TTC'>TTC</option>
<option value='ITI'>ITI</option>
<option value='Higher Secondery'>Higher Secondery</option>
</optgroup>
<optgroup label='Other Education'>
<option value='High School'>High School</option>
<option value='Less than high school'>Less than high school</option>
<option value='Other Education'>Other Education</option>
</optgroup>
</select>
</div>
</div>
<div class="form-group row">
<label for="dob" class="col-sm-5 col-form-label">Education Details:</label>
<div class="col-sm-7">
<input type="text" name="edu_detail" class="form-control" value="{{ $user_data->edu_detail }}">
</div>
</div>
<div class="form-group row">
<label for="gender" class="col-sm-5 col-form-label">Occupation:</label>
<div class="col-sm-7">
<select name="job"  class="job form-control">
<option value="Softwarw Engineer">Softwarw Engineer</option>
<option value="Producer/Director">Producer/Director</option>
<option value="Media">Media</option>
<option value="Marketing Manager">Marketing Manager</option>
<option value="HR Manager">HR Manager</option>
<option value="Lawyer">Lawyer</option>
<option value="I.T Porfissional">I.T Porfissional</option>
<option value="Teacher">Teacher</option>
<option value="University Lacturer">University Lacturer</option>
<option value="Business Administration">Business Administration</option>
<option value="Admin Officer"> Admin Officer</option>
<option value="Cival Engineer">Cival Engineer </option>
<option value="Electrical Engineer">Electrical Engineer</option>
{{-- <option value="MBBS">MBBS</option> --}}
<option value="Doctor">Doctor</option>
<option value="BBA">BBA</option>
<option value="Chartered Accountant">Chartered Accountant</option>

<option value="CSS Officer">CSS Officer </option>
<option value="No Occupation">No Occupation </option>
<option value="Business">Business</option>
<option value="Pilot">Pilot</option>
<option value="Police Officer">Police Officer</option>
<option value="Army Officer">Army Officer</option>
<option value="Air Force">Air Force</option>
<option value="Designer">Designer</option>
<option value="Computer Hardware">Computer Hardware</option>
<option value="Auto Mobile">Auto Mobile</option>
<option value="Traffic Warden">Traffic Warden</option>
<option value="Farmer">Farmer</option>
<option value="Shop Keeper">Shop Keeper</option>

<option value="Real Estate">Real Estate</option>

</select>
</div>
</div>
<div class="form-group row">
<label for="gender" class="col-sm-5 col-form-label">Occupation Detail:</label>
<div class="col-sm-7">
<input type="text" name="occupation_detail" class="form-control" value="{{ $user_data->occupation_detail }}" >
</div>
</div>
<div class="form-group row">
<label for="gender" class="col-sm-5 col-form-label">Annual Income:</label>
<div class="col-sm-7">
<select name="a_income" id="" class="a_income form-control">
<option value="">Please select..</option>
<option value="Prefer not to say">Prefer not to say</option>
<option value="Less than 50000">Less than 50000</option>
<option value="100 Thousand">100 Thousand</option>
<option value="Less than 50000">Less than 50000</option>
<option value="150 Thousand">150 Thousand</option>
<option value="200 Thousand">200 Thousand</option>
<option value="250 Thousand">250 Thousand</option>
<option value="300 Thousand">300 Thousand</option>
<option value="350 Thousand">350 Thousand</option>
<option value="400 Thousand">400 Thousand</option>
<option value="450 Thousand">450 Thousand</option>
<option value="500 Thousand">500 Thousand</option>
<option value="550 Thousand">550 Thousand</option>
<option value="600 Thousand">600 Thousand</option>
<option value="650 Thousand">650 Thousand</option>
<option value="700 Thousand">700 Thousand</option>
<option value="750 Thousand">750 Thousand</option>
<option value="800 Thousand">800 Thousand</option>
<option value="850 Thousand">850 Thousand</option>
<option value="900 Thousand">900 Thousand</option>
<option value="950 Thousand">950 Thousand</option>
<option value="1. Million">1. Million</option>
<option value="1.5 Million">1.5 Million</option>
<option value="2. Million">2. Million</option>
<option value="2.5 Million">2.5 Million</option>
<option value="3. Million and above">3. Million and above</option>
</select>
</div>
</div>

<div class="clearfix"></div>
</div>

</div>

<div class="mp-btns pull-right btn4">
<a href="javascript:;" class="mp-edit-btn eb5">Edit</a>
<div class="mp-btn2-two dc5" style="display: none;">
<input type="submit" value="Done" class="mp-done-btn" />
<a href="javascript:;" class="mp-cancel-btn cb5">Cancel</a>
</form>
</div>
</div>
<div class="clearfix"></div>
</div>
<div class="mp-about">
<h3 class="mp-head"> Contact Details</h3>
<hr/>
<div class="mp-content pull-left">
<div class="mp-religious-info contact">
<ul class="mp-form-list">


<li>
<span class="mp-bio-label">Present Country:</span>
@if(!empty($present->country_name))
<span class="mp-bio-ans"> {{ $present->country_name }}</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#present_modal">Add Present Country</a></span>
@endif
</li>
<li>
<span class="mp-bio-label">Native Country:</span>
@if(!empty($native->country_name))
<span class="mp-bio-ans"> {{ $native->country_name }}</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#native_modal">Add Native Country</a></span>
@endif
</li>
<li>
<span class="mp-bio-label">Native State:</span>
@if(!empty($native->state_name))
<span class="mp-bio-ans">{{ $native->state_name }}</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#native_modal">Add Native State</a></span>
@endif
</li>
<li>
<span class="mp-bio-label">Native City:</span>
@if(!empty($native->city_name))
<span class="mp-bio-ans"> {{$native->city_name }}</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#native_modal">Add Native City</a></span>
@endif
</li>
<li>
<span class="mp-bio-label">Convenient time to call:</span>

@if($user_data->convenient_time)
<span class="mp-bio-ans"> {{ $user_data->convenient_time }}</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#time_modal">Add Convenient time to call:</a></span>
@endif
</li>

</ul>
</div>
<form method="post" action="{{ url('contact-info')}}">
<div class="contact-info-form" style="display: none;">
<div class="form-group row">
<label for="name" class="col-sm-5 col-form-label">Present Country:</label>
<div class="col-sm-7">
<select  class="form-control" name="present_country_id">
@foreach($country as $row)
<option @if($row->country_id==$user_data->present_country_id) selected="" @endif value="{{ $row->country_id }}">{{ $row->country_name }}</option>
@endforeach

</select>
</div>
</div>
<div class="form-group row">
<label for="dob" class="col-sm-5 col-form-label">Native Country:</label>
<div class="col-sm-7">
<select  class="form-control" onchange="native_country_change(this)"  name="native_country_id">
@foreach($country as $row)
<option @if($row->country_id==$user_data->native_country_id) selected="" @endif value="{{ $row->country_id }}">{{ $row->country_name }}</option>
@endforeach

</select>
</div>
</div>
<div class="form-group row">
<label for="gender" class="col-sm-5 col-form-label">Native State:</label>
<div class="col-sm-7">
<select onchange="native_state_change(this)" class="form-control native_state" name="native_state_id">
	@if(!empty($native_state))
@foreach($native_state as $row)
<option @if($row->state_id==$user_data->native_state_id) selected="" @endif value="{{ $row->state_id }}">{{ $row->state_name }}</option>
@endforeach
@endif
</select>
</div>
</div>
<div class="form-group row">
<label for="gender" class="col-sm-5 col-form-label">Native City:</label>
<div class="col-sm-7">
<select  class="form-control native_city" name="native_city_id">
	@if(!empty($native_cities))
@foreach($native_cities as $row)
<option @if($row->city_id==$user_data->native_city_id) selected="" @endif value="{{ $row->city_id }}">{{ $row->city_name }}</option>
@endforeach
@endif
</select>
</div>
</div>
<div class="form-group row">
<label for="gender" class="col-sm-5 col-form-label">Convenient time to call:</label>
<div class="col-sm-7">
<select name="convenient_time" class="form-control convenient_time">
<option value="">--select--</option>
<option value="7 AM">7 AM</option>
<option value="12 AM">12 AM</option>
<option value="Anytime">Anytime</option>
</select>
</div>
</div>
{{csrf_field()}}
<div class="clearfix"></div>
</div>

</div>

<div class="mp-btns pull-right btn5">
<a href="javascript:;" class="mp-edit-btn eb6">Edit</a>
<div class="mp-btn2-two dc6" style="display: none;">
<input type="submit" value="Done" class="mp-done-btn" />
<a href="javascript:;" class="mp-cancel-btn cb6">Cancel</a>
</div>
</div>
</form>
<div class="clearfix"></div>
</div>
<div class="mp-about">
<h3 class="mp-head"> General Attributes</h3>
<hr/>
<div class="mp-content pull-left">
<div class="mp-religious-info general">
<ul class="mp-form-list">


<li>
<span class="mp-bio-label">Blood Group:</span>
@if($user_data->blood_group)
<span class="mp-bio-ans"> {{ $user_data->blood_group }}</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#blood_modal">Add Blood Group</a></span>
@endif

</li>
<li>
<span class="mp-bio-label">Body type:</span>
@if($user_data->body_type)
<span class="mp-bio-ans"> {{ $user_data->body_type }}</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#body_modal">Add Body type</a></span>
@endif
</li>
<li>
<span class="mp-bio-label">Diet:</span>
@if($user_data->diet)
<span class="mp-bio-ans"> {{ $user_data->diet }}</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#diet_modal">Add Diet</a></span>
@endif
</li>
<li>
<span class="mp-bio-label">Smoking:</span>
@if($user_data->smoking)
<span class="mp-bio-ans">{{ $user_data->smoking }}</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#smoking_modal">Add Smoking</a></span>
@endif
</li>
<li>
<span class="mp-bio-label">Patient of thelisimia:</span>
@if($user_data->thelisimia)
<span class="mp-bio-ans"> {{ $user_data->thelisimia }}</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#thelisimia_modal">Add Patient of thelisimia</a></span>
@endif
</li>



</ul>
</div>
<form method="post" action="{{ url('general-info') }}">
	{{ csrf_field() }}
<div class="general-info-form" style="display: none;">
<div class="form-group row">
<label for="name" class="col-sm-5 col-form-label">Blood Group:</label>
<div class="col-sm-7">
	<select name="blood_group" id="blood_group" class="form-control">
<option value="0">Please Select..</option>
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="AB+">AB+</option>
<option value="AB-">AB-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
</select>
</div>
</div>
<div class="form-group row">
<label for="dob" class="col-sm-5 col-form-label">Body Type:</label>
<div class="col-sm-7">
<select name="body_type" id="body_type" class="form-control">
<option value="">Please Select..</option>
<option value="Slim">Slim</option>
<option value="Average">Average</option>
<option value="Athletic">Athletic</option>
<option value="Heavy">Heavy</option>
</select>
</div>
</div>
<div class="form-group row">
<label for="gender" class="col-sm-5 col-form-label">Diet:</label>
<div class="col-sm-7">
	<select name="diet" id="diet" class="form-control">
		<option value="">--select--</option>
<option value="Vagetarian">Vagetarian</option>
<option value="Non-Vagetarian">Non-Vagetarian</option>
</select>
</div>
</div>
<div class="form-group row">
<label for="gender" class="col-sm-5 col-form-label">Smoking:</label>
<div class="col-sm-7">
<select name="smoking" id="smoking" class="form-control">
	<option value="">--select--</option>
	<option value="Yes">Yes</option>
<option value="Chain smoker">Chain smoker</option>
<option value="Occasionally">Occasionally</option>
<option value="Intend to quit">Intend to quit</option>
<option value="sometimes">sometimes</option>
<option value="never">never</option>
</select>

</div>
</div>
<div class="form-group row">
<label for="gender" class="col-sm-5 col-form-label">Thelisimia:</label>
<div class="col-sm-7">
<select name="thelisimia" id="thelisimia" class="form-control">
	<option value="">--select--</option>
	<option value="Yes">Yes</option>
<option value="No">No</option>

</select>
</div>
</div>

<div class="clearfix"></div>
</div>

</div>

<div class="mp-btns pull-right btn6">
<a href="javascript:;" class="mp-edit-btn eb7">Edit</a>
<div class="mp-btn2-two dc7" style="display: none;">
<input type="submit" value="Done" class="mp-done-btn" />
<a href="javascript:;" class="mp-cancel-btn cb7">Cancel</a>
</form>
</div>
</div>
<div class="clearfix"></div>
</div>
<div class="mp-about">
<h3 class="mp-head">About Me</h3>
<hr/>
<div class="mp-content pull-left">
<div class="mp-religious-info about-me">
<ul class="mp-form-list">


<li>

<span class="mp-bio-label">Description:</span>
@if($user_data->description)
<span class="mp-bio-ans"> {{ str_limit($user_data->description,15) }}<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#read_description_modal">Read More</a></span></span>



	



@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#description_modal">Add Description</a></span>
@endif
</li>
<li>
<span class="mp-bio-label">Profile Created for:</span>
@if($user_data->profile_created)
<span class="mp-bio-ans"> {{ $user_data->profile_created }}</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#profile_modal">Add Profile Created for</a></span>
@endif
</li>
<li>
<span class="mp-bio-label">Guardian Name:</span>
@if($user_data->gardian_name)
<span class="mp-bio-ans"> {{ $user_data->gardian_name }}</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#guardian_name_modal">Add Guardian Name</a></span>
@endif
</li>
<li>
<span class="mp-bio-label">Guardian Number:</span>
@if($user_data->gardian_number)
<span class="mp-bio-ans"> {{ $user_data->gardian_number }}</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#guardian_number_modal">Add Guardian Number</a></span>
@endif
</li>
<li>
<span class="mp-bio-label">Mother Tongue:</span>
@if($user_data->language)
<span class="mp-bio-ans"> {{ $user_data->language }}</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#language_modal">Add Mother Tongue</a></span>
@endif
</li>
<li>
<span class="mp-bio-label">Other Language:</span>
@if(count($other_language))
									@php $data = '' @endphp
									<span class="mp-bio-ans">  
										@foreach($other_language as $k => $row )
											@if($k < $limit)

												{{ $row->loking_value }} <span style="color: red; font-size: 19px;"> | </span>
											@endif
										@endforeach
									</span>
												
												
@foreach($other_language as $row )
@php 
	$data .= '<div class="col-sm-4"><span class="fa fa-check check-color"></span>' . $row->loking_value . '</div>';
@endphp
@endforeach
											
	<div class="modal fadeInDown" id="myModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="false" >
												
    <div class="modal-dialog modal-md" style="margin-top: 100px;">
      <div class="modal-content" style="margin-top: 115px;">
      
        <div class="modal-header">
          <h3>Other Languages</h3>
        </div>
        <div class="modal-body">
         
            <div class="row">
               
                
					{!! $data !!}							
                        
            </div>

              
             
          </div>
       
        <div class="modal-footer">
          <div class="col-sm-12">
          	<button class="btn btn-danger" data-dismiss="modal">Close</button>
            {{-- <h5><a href="#" class="btn-danger" data-dismiss="modal">Close</a></h5> --}}
          </div>
        </div>
        
      </div>
    </div>
  </div>
  								
  									@if(count($other_language)>1)
										<a class="read-more" href="javascript:;" data-toggle="modal" data-target="#myModal">Read more</a>
										@endif
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#other_language_modal">Add Other Language</a></span>
@endif
</li>
<li>
<span class="mp-bio-label">Caste:</span>
@if($user_data->cast)
<span class="mp-bio-ans"> {{ $user_data->cast }}</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#cast_modal">Add Caste</a></span>
@endif
</li>

<li>
<span class="mp-bio-label">Clan:</span>
@if($user_data->clan)
<span class="mp-bio-ans"> {{ $user_data->clan }}</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#clan_modal">Add Clan</a></span>
@endif
</li>

<li>
<span class="mp-bio-label">Hobbies/Interest:</span>
@if(count($hobbies))
							 
									<span class="mp-bio-ans"> 
									@php $data=''; @endphp 
										@foreach($hobbies as $k => $row )
											@if($k < $limit)
												{{ $row->loking_value }} <span style="color: red; font-size: 19px;"> | </span>
											@endif
										@endforeach
									</span>
		@foreach($hobbies as $row )								
	@php 
	$data .= '<div class="col-sm-4"><span class="fa fa-check check-color"></span>'.$row->loking_value.'</div>';
    @endphp
@endforeach

											
										<div class="modal fadeInDown" id="myModal1" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="false" >
												
    <div class="modal-dialog modal-md" style="margin-top: 100px;">
      <div class="modal-content" style="margin-top: 115px;">
      
        <div class="modal-header">
          <h3>Hobbies</h3>
        </div>
        <div class="modal-body">
         
            <div class="row">
               
                
					{!! $data !!}							
                        
            </div>

              
             
          </div>
       
        <div class="modal-footer">
          <div class="col-sm-12">
           <button class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
  </div>							@if(count($hobbies)>1)
										<a href="javascript:;" data-toggle="modal" data-target="#myModal1" style="color:#4ccee8;">Read more</a>
										@endif
									</span>
						
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#hobbies_modal">Add Hobbies/Interest</a></span>
@endif
</li>
<li>
<span class="mp-bio-label">Marital Status:</span>
@if($user_data->martial_status)
<span class="mp-bio-ans">{{ $user_data->martial_status }}</span>
@else


<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#martial_status_modal">Add Marital Status</a></span>
@endif
</li>
</ul>
</div>
<form method="post" action="{{ url('about-me') }}">
	{{ csrf_field() }}
<div class="about-me-info-form" style="display: none;">
<div class="form-group row">
<label for="name" class="col-sm-5 col-form-label">Profile Created for:</label>
<div class="col-sm-7">
<select selected="selected" name="profile_created" id="" class="form-control profile_created">
<option value="">Select</option>
<option value="Self">Self</option>
<option value="Son">Son</option>
<option value="Daughter">Daughter</option>
<option value="Friends">Friends</option>
<option value="Brother">Brother</option>
<option value="Sister">Sister</option>
<option value="Relatives">Relatives</option>
</select>
</div>
</div>
<div class="form-group row">
<label for="dob" class="col-sm-5 col-form-label">Guardian Name:</label>
<div class="col-sm-7">
<input type="text" name="gardian_name" placeholder="Enter guardian name" class="form-control" value="{{ $user_data->gardian_name }}">
</div>
</div>
<div class="form-group row">
<label for="gender" class="col-sm-5 col-form-label">Guardian Number:</label>
<div class="col-sm-7">
<input type="text" name="gardian_number" placeholder="Enter guardian name" class="form-control" value="{{ $user_data->gardian_number }}">
</div>
</div>
<div class="form-group row">
<label for="gender" class="col-sm-5 col-form-label">Mother Tongue:</label>
<div class="col-sm-7">
<select name="language" selected="selected" id="" class="form-control language">

<option value="">Select</option> 
<option value="Urdu">Urdu</option> 
<option value="Punjabi">Punjabi</option>
<option value="Pashto">Pashto</option> 
<option value="Sindhi">Sindhi</option> 
<option value="Saraiki">Saraiki</option> 
<option value="Balochi">Balochi</option>  
<option value="Hindko">Hindko</option>
<option value="English">English</option>
<option disabled="">..............................................................</option> 
<option value="Malayalam">Malayalam</option>    
<option value="Aka">Aka</option>
<option value="Angika">Angika</option>
<option value="Arabic">Arabic</option> 
<option value="Arunachali">Arunachali</option>
<option value="Assamese">Assamese</option> 
<option value="Awadhi">Awadhi</option> 
<option value="Badaga">Badaga</option> 
<option value="Bengali">Bengali </option>
<option value="Bhojpuri">Bhojpuri</option> 
<option value="Bihari">Bihari</option> 
<option value="Brij">Brij</option> 
<option value="Chatisgarhi">Chatisgarhi</option>
<option value="Coorgi">Coorgi</option> 
<option value="Dogri">Dogri</option> 

<option value="French">French</option> 
<option value="Garhwali">Garhwali</option> 
<option value="Garo">Garo</option> 
<option value="Gujarati">Gujarati</option>
<option value="Haryanvi">Haryanvi</option>
<option value="Himachali/Pahari">Himachali/Pahari</option> 
<option value="Hindi">Hindi</option> 


<option value="Kannada">Kannada</option> 
<option value="Kashmiri">Kashmiri</option> 
<option value="Khandesi">Khandesi</option> 
<option value="Khasi">Khasi</option> 
<option value="Konkani">Konkani</option> 
<option value="Koshali">Koshali</option> 
<option value="Kumaoni">Kumaoni</option> 
<option value="Kutchi">Kutchi</option> 
<option value="Ladacki">Ladacki</option> 
<option value="Lepcha">Lepcha</option> 
<option value="Magahi">Magahi</option> 
<option value="Maithili">Maithili</option> 
<option value="Malay">Malay</option> 
<option value="Manipuri">Manipuri</option> 
<option value="Marathi">Marathi</option> 
<option value="Marwari">Marwari</option> 
<option value="Miji">Miji</option> 
<option value="Miza">Miza</option> 
<option value="Monpa">Monpa</option> 
<option value="Nepali">Nepali</option> 
<option value="Nicobarese">Nicobarese</option> 
<option value="Oriya">Oriya</option> 

<option value="Persian">Persian</option> 

<option value="Rajasthani">Rajasthani</option> 
<option value="Russian">Russian</option> 
<option value="Sanskrit">Sanskrit</option> 
<option value="Santhali">Santhali</option> 

<option value="Sinhala">Sinhala</option> 
<option value="Sourashtra">Sourashtra</option> 
<option value="Spanish">Spanish</option> 
<option value="Tamil">Tamil</option> 
<option value="Telugu">Telugu</option> 
<option value="Tripuri">Tripuri</option> 
<option value="Tulu">Tulu</option> 

</select>
</div>
</div>


<div class="form-group row">
<label for="hobbies" class="col-sm-5 col-form-label">Other Language:</label>
<div class="col-sm-7">

<input type="text" readonly="" value="Other language" name="other_language" class="form-control">
<div class="input-group-append">
<a href="javascript:;" id="other_language" style="position: absolute;
    right: 24px;
    top: 9px;">
<span class="fa fa-arrow-down arrows" id="do_other"></span>
<span class="fa fa-arrow-up" id="up_other" style="display:none;"></span>

</a>
</div>
</div>

<div id="other_languages" style="display:none;">
	<br><br>
<div class="row">
	<div class="col-sm-5"></div>
<div class="col-sm-4">
<a href="javascript:;" onclick="lan_check()" >Select All</a>
</div>
<div class="col-sm-3">
<a href="javascript:;" onclick="lan_uncheck()"  >Clear All</a>
</div>
</div>

<br>

<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if(preg_match("/Urdu/", "$other_language")) checked="" @endif  class="other_lan" value="Urdu"> Urdu </div>
<div class="col-sm-4">
 <input type="checkbox" name="add_other_language[]" @if (preg_match("/Punjabi/", "$other_language")) checked="" @endif class="other_lan" value="Punjabi"> Punjabi </div>
{{-- </div> --}}
{{-- </div>
</div> --}}
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Pashto/", "$other_language")) checked="" @endif class="other_lan" value="Pashto"> Pashto </div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Sindhi/", "$other_language")) checked="" @endif class="other_lan" value="Sindhi"> Sindhi 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Saraiki/", "$other_language")) checked="" @endif class="other_lan" value="Saraiki"> Saraiki </div>
<div class="col-sm-4"> 
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Balochi/", "$other_language")) checked="" @endif class="other_lan" value="Balochi"> Balochi </div>

<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Hindko/", "$other_language")) checked="" @endif class="other_lan" value="Hindko"> Hindko </div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/English/", "$other_language")) checked="" @endif class="other_lan" value="English"> English 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Malayalam/", "$other_language")) checked="" @endif class="other_lan" value="Malayalam"> Malayalam </div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Aka/", "$other_language")) checked="" @endif class="other_lan" value="Aka"> Aka
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Angika/", "$other_language")) checked="" @endif class="other_lan" value="Angika"> Angika 
</div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Arabic/", "$other_language")) checked="" @endif class="other_lan" value="Arabic"> Arabic 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Arunachali/", "$other_language")) checked="" @endif class="other_lan" value="Arunachali"> Arunachali </div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Assamese/", "$other_language")) checked="" @endif class="other_lan" value="Assamese"> Assamese 
</div>

<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Awadhi/", "$other_language")) checked="" @endif class="other_lan" value="Awadhi"> Awadhi 
</div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Badaga/", "$other_language")) checked="" @endif class="other_lan" value="Badaga"> Badaga 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Bengali/", "$other_language")) checked="" @endif class="other_lan" value="Bengali"> Bengali </div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Bhojpuri/", "$other_language")) checked="" @endif class="other_lan" value="Bhojpuri"> Bhojpuri 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Bihari/", "$other_language")) checked="" @endif class="other_lan" value="Bihari"> Bihari 
</div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Brij/", "$other_language")) checked="" @endif class="other_lan" value="Brij"> Brij <br>
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Chatisgarhi/", "$other_language")) checked="" @endif class="other_lan" value="Chatisgarhi"> Chatisgarhi </div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Coorgi/", "$other_language")) checked="" @endif class="other_lan" value="Coorgi"> Coorgi 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Dogri/", "$other_language")) checked="" @endif class="other_lan" value="Dogri"> Dogri <</div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/French/", "$other_language")) checked="" @endif class="other_lan" value="French"> French 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Garhwali/", "$other_language")) checked="" @endif class="other_lan" value="Garhwali"> Garhwali </div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Garo/", "$other_language")) checked="" @endif class="other_lan" value="Garo"> Garo <br>
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Gujarati/", "$other_language")) checked="" @endif class="other_lan" value="Gujarati"> Gujarati </div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Haryanvi/", "$other_language")) checked="" @endif class="other_lan" value="Haryanvi"> Haryanvi </div>

<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Himachali Pahari/", "$other_language")) checked="" @endif class="other_lan" value="Himachali Pahari"> Himachali/Pahari </div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Hindi/", "$other_language")) checked="" @endif class="other_lan" value="Hindi"> Hindi 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Kannada/", "$other_language")) checked="" @endif class="other_lan" value="Kannada"> Kannada </div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Kashmiri/", "$other_language")) checked="" @endif class="other_lan" value="Kashmiri"> Kashmiri 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Khandesi/", "$other_language")) checked="" @endif class="other_lan" value="Khandesi"> Khandesi </div>

<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Khasi/", "$other_language")) checked="" @endif class="other_lan" value="Khasi"> Khasi
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Konkani/", "$other_language")) checked="" @endif class="other_lan" value="Konkani"> Konkani </div>

<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Koshali/", "$other_language")) checked="" @endif class="other_lan" value="Koshali"> Koshali 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Kumaoni/", "$other_language")) checked="" @endif class="other_lan" value="Kumaoni"> Kumaoni </div>

<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Kutchi/", "$other_language")) checked="" @endif class="other_lan" value="Kutchi"> Kutchi 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Ladacki/", "$other_language")) checked="" @endif class="other_lan" value="Ladacki"> Ladacki 
</div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Lepcha/", "$other_language")) checked="" @endif class="other_lan" value="Lepcha"> Lepcha 
</div>

<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Magahi/", "$other_language")) checked="" @endif class="other_lan" value="Magahi"> Magahi </div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Maithili/", "$other_language")) checked="" @endif class="other_lan" value="Maithili"> Maithili 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Malay/", "$other_language")) checked="" @endif class="other_lan" value="Malay"> Malay </div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Manipuri/", "$other_language")) checked="" @endif class="other_lan" value="Manipuri"> Manipuri 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Marathi/", "$other_language")) checked="" @endif class="other_lan" value="Marathi"> Marathi </div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Marwari/", "$other_language")) checked="" @endif class="other_lan" value="Marwari"> Marwari 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Miji/", "$other_language")) checked="" @endif class="other_lan" value="Miji"> Miji 
</div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Miza/", "$other_language")) checked="" @endif class="other_lan" value="Miza"> Miza <br>
</div>

<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Monpa/", "$other_language")) checked="" @endif class="other_lan" value="Monpa"> Monpa 
</div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Nepali/", "$other_language")) checked="" @endif class="other_lan" value="Nepali"> Nepali 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Nicobarese/", "$other_language")) checked="" @endif class="other_lan" value="Nicobarese"> Nicobarese </div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Oriya/", "$other_language")) checked="" @endif class="other_lan" value="Oriya"> Oriya 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Persian/", "$other_language")) checked="" @endif class="other_lan" value="Persian"> Persian </div>
<div class="col-sm-4">

<input type="checkbox" name="add_other_language[]" @if (preg_match("/Rajasthani/", "$other_language")) checked="" @endif class="other_lan" value="Rajasthani"> Rajasthani 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Russian/", "$other_language")) checked="" @endif class="other_lan" value="Russian"> Russian </div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Sanskrit/", "$other_language")) checked="" @endif class="other_lan" value="Sanskrit"> Sanskrit 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Santhali/", "$other_language")) checked="" @endif class="other_lan" value="Santhali"> Santhali
</div>
 <div class="col-sm-4">

<input type="checkbox" name="add_other_language[]" @if (preg_match("/Sinhala/", "$other_language")) checked="" @endif class="other_lan" value="Sinhala"> Sinhala 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Sourashtra/", "$other_language")) checked="" @endif class="other_lan" value="Sourashtra"> Sourashtra </div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Spanish/", "$other_language")) checked="" @endif class="other_lan" value="Spanish"> Spanish 
</div>

<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Tamil/", "$other_language")) checked="" @endif class="other_lan" value="Tamil"> Tamil 
</div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Telugu/", "$other_language")) checked="" @endif class="other_lan" value="Telugu">Telugu 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Tripuri/", "$other_language")) checked="" @endif class="other_lan" value="Tripuri"> Tripuri </div>
<div class="col-sm-4">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Tulu/", "$other_language")) checked="" @endif class="other_lan" value="Tulu"> Tulu 
</div>
</div>
</div>
</div>
<div class="form-group row">
<label for="gender" class="col-sm-5 col-form-label">Caste:</label>
<div class="col-sm-7">
<select name="cast" id="" onchange="cast_change(this)" class="form-control cast">
<option value="">Please select..</option>
<option value="Abbasi">Abbasi</option>
<option value="Achakzai">Achakzai</option>
<option value="Afridi">Afridi</option>
<option value="Ansari">Ansari</option>
<option value="Arain">Arain</option>
<option value="Awan">Awan</option>
<option value="Bajwa">Bajwa</option>
<option value="Baig">Baig</option>
<option value="Bhatti">Bhatti</option>
<option value="Bhutta">Bhutta</option>
<option value="Bukhari">Bukhari</option>
<option value="Butt">Butt</option>
<option value="Chandio">Chandio</option>
<option value="Chaudhry">Chaudhry</option>
<option value="Chauhan">Chauhan</option>
<option value="Chishti">Chishti</option>
<option value="Chughtai">Chughtai</option>
<option value="Dar">Dar</option>
<option value="Dogar">Dogar</option>
<option value="Durrani">Durrani</option>
<option value="Farooqi">Farooqi</option>
<option value="Firdausi">Firdausi</option>
<option value="Gilani">Gilani</option>
<option value="Gujjar">Gujjar</option>
<option value="Gul">Gul</option>
<option value="Hashmi">Hashmi</option>
<option value="Isa Khel">Isa Khel</option>
<option value="Jafari">Jafari</option>
<option value="Jutt">Jutt</option>
<option value="Johiya">Johiya</option>
<option value="Kakakhel">Kakakhel</option>
<option value="Kakar">Kakar</option>
<option value="Kakazai">Kakazai</option>
<option value="Kamboh">Kamboh</option>
<option value="Kashmiri Shaikh">Kashmiri Shaikh</option>
<option value="Kayani">Kayani</option>
<option value="Khan">Khan</option>
<option value="Khattak">Khattak</option>
<option value="Khokhar">Khokhar</option>
<option value="Khosa">Khosa</option>
<option value="Lakhani">Lakhani</option>
<option value="Lodhi">Lodhi</option>
<option value="Mahar">Mahar</option>
<option value="Makhdoom">Makhdoom</option>
<option value="Malhotra">Malhotra</option>
<option value="Malik">Malik</option>
<option value="Memon">Memon</option>
<option value="Mengal">Mengal</option>
<option value="Meo">Meo</option>
<option value="Mian">Mian</option>
<option value="Mir">Mir</option>
<option value="Mirza">Mirza</option>
<option value="Mughal">Mughal</option>
<option value="Naqvi">Naqvi</option>
<option value="Niazi">Niazi</option>
<option value="Noorani">Noorani</option>
<option value="Pasha">Pasha</option>
<option value="Pirzada">Pirzada</option>
<option value="Qazi">Qazi</option>
<option value="Qureshi">Qureshi</option>
<option value="Rafiq">Rafiq</option>
<option value="Rajput">Rajput</option>
<option value="Rana">Rana</option>
<option value="Ranjha">Ranjha</option>
<option value="Rathore">Rathore</option>
<option value="Rizvi">Rizvi</option>
<option value="Saifi">Saifi</option>
<option value="Sheikh">Sheikh</option>
<option value="Siddiqui">Siddiqui</option>
<option value="Singh">Singh</option>
<option value="Syed">Syed</option>
<option value="Yousafzai">Yousafzai</option>
<option value="Zaidi">Zaidi</option>
<option value="Zubairi">Zubairi</option>
<option value="Yousafzai">Yousafzai</option>
<option value="other">Other</option>
<option value="Prefer not to say">Prefer not to say</option>
</select>&nbsp
</div>
</div>
<div class="form-group row">
<label for="gender" class="col-sm-5 col-form-label">Clan:</label>
<div class="col-sm-7">
<input type="text" name="clan" placeholder="Clan" class="form-control" value="{{ $user_data->clan }}">
</div>
</div>
<div class="form-group row">
<label for="hobbies" class="col-sm-5 col-form-label">Hobbies/Interest:</label>
<div class="col-sm-7">

<input type="text" readonly="" value="Hobbies" name="hobbies" class="form-control">
<div class="input-group-append">
<a href="javascript:;" id="hobi" style="position: absolute;
    right: 24px;
    top: 9px;">
<span class="fa fa-arrow-down arrows" id="do"></span>
<span class="fa fa-arrow-up" id="ups" style="display:none;"></span>

</a>
</div>
</div>

<div id="hobbies" style="display:none;">
	<br><br>
<div class="row">
	<div class="col-sm-5"></div>
<div class="col-sm-4">
<a href="javascript:;" onclick="check_hobi()" >Select All</a>
</div>
<div class="col-sm-3">
<a href="javascript:;" onclick="uncheck_hobi()"  >Clear All</a>
</div>
</div>

<br>
<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input class="check_hobies" type="checkbox"  @if (preg_match("/Book Reading/", "$hobbies")) checked="" @endif name="hobbies_type[]" value="Book Reading"> Book Reading</div>
<div class="col-sm-4">
<input class="check_hobies" type="checkbox" name="hobbies_type[]" @if (preg_match("/Playing Cricket/", "$hobbies")) checked="" @endif value="Playing Cricket"> Playing Cricket</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input class="check_hobies" type="checkbox" name="hobbies_type[]" @if (preg_match("/Football/", "$hobbies")) checked="" @endif value="Football">    Football
</div>
<div class="col-sm-4">
<input class="check_hobies" type="checkbox" name="hobbies_type[]" @if (preg_match("/Reading News/", "$hobbies")) checked="" @endif value="Reading News"> Reading News 
</div>
</div>
</div>
</div>
<div class="form-group row">
<label for="gender" class="col-sm-5 col-form-label">Martial Status:</label>
<div class="col-sm-7">
<select name="martial_status" id="" class="form-control martial_status">
<option value="" >Please Select</option>
<option value="Married">Married</option>
<option value="unmarried">unmarried</option>
<option value="Widow Widower">Widow Widower</option>
<option value="Divorcee">Divorcee</option>
<option value="separated">separated</option>
<option value="Annulled">Annulled</option>
</select>
</div>
</div>

<div class="clearfix"></div>
</div>

</div>

<div class="mp-btns pull-right btn7">
<a href="javascript:;" class="mp-edit-btn eb8">Edit</a>
<div class="mp-btn2-two dc8" style="display: none;">
<input type="submit" value="Done" class="mp-done-btn" />
<a href="javascript:;" class="mp-cancel-btn cb8">Cancel</a>
</form>
</div>
</div>
<div class="clearfix"></div>
</div>
<div class="mp-about">
<h3 class="mp-head">Family Details</h3>
<hr/>
<div class="mp-content pull-left">
<div class="mp-religious-info family">
<ul class="mp-form-list">


<li>
<span class="mp-bio-label">Family Type:</span>
@if($user_data->family_type)
<span class="mp-bio-ans"> {{ $user_data->family_type }}</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#family_type_modal">Add Family Type</a></span>
@endif
</li>
<li>
<span class="mp-bio-label">Finacial Status:</span>
@if($user_data->finacial_status)
<span class="mp-bio-ans"> {{ $user_data->finacial_status }}</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#finacial_status_modal">    Add Finacial Status</a></span>
@endif
</li>
<li>
<span class="mp-bio-label">Assets:</span>
@if($user_data->assets)
<span class="mp-bio-ans"> {{ $user_data->assets }}</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#assets_modal">Add Assets</a></span>
@endif
</li>
<li>
<span class="mp-bio-label">Father's Details:</span>
@if($user_data->father_detail)
<span class="mp-bio-ans">{{ $user_data->father_detail }}</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#father_detail_modal">Add Father's Details</a></span>
@endif
</li>
<li>
<span class="mp-bio-label">Father's occupation:</span>
@if($user_data->father_occupation)
<span class="mp-bio-ans"> {{ $user_data->father_occupation }}</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#father_occupation_modal">Add Father's occupation</a></span>
@endif
</li>
<li>
<span class="mp-bio-label">Mother's Details:</span>
@if($user_data->mother_detail)
<span class="mp-bio-ans"> {{ $user_data->mother_detail }}</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#mother_detail_modal">Add Mother's Details</a></span>
@endif
</li>
<li>
<span class="mp-bio-label">Mother's occupation:</span>
@if($user_data->mother_occupation)
<span class="mp-bio-ans">{{ $user_data->mother_occupation }}</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#mother_occupation_modal">Add Mother's occupation</a></span>
@endif
</li>

<span class="mp-bio-label">Elder Brother:</span>
@if($user_data->elder_brother)
<span class="mp-bio-ans">{{ $user_data->elder_brother }}</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#elder_brother_modal">Add Elder Brother</a></span>
@endif
</li>
<li>
<span class="mp-bio-label">Younger Brother:</span>
@if($user_data->younger_brother)
<span class="mp-bio-ans">{{ $user_data->younger_brother }}</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#younger_brother_modal">Add Younger Brother</a></span>
@endif
</li>

<li>
<span class="mp-bio-label">Brother Unmarried:</span>
@if($user_data->brother_unmarried)
<span class="mp-bio-ans">{{ $user_data->brother_unmarried }}</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#brother_unmarried_modal">Add Brother Unmarried</a></span>
@endif
</li>
<li>
<span class="mp-bio-label">Brother Married:</span>
@if($user_data->brother_married)
<span class="mp-bio-ans">{{ $user_data->brother_married }}</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#brother_married_modal">Add Brother Married</a></span>
@endif
</li>

<li>
<span class="mp-bio-label">Elder Sister:</span>
@if($user_data->elder_sister)
<span class="mp-bio-ans">{{ $user_data->elder_sister }}</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#elder_sister_modal">Add Elder Sister</a></span>
@endif
</li>

<li>
<span class="mp-bio-label">Younger Sister:</span>
@if($user_data->younger_sister)
<span class="mp-bio-ans">{{ $user_data->younger_sister }}</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#younger_sister_modal">Add Younger Sister</a></span>
@endif
</li>



<li>
<span class="mp-bio-label">Unmarried Sister:</span>
@if($user_data->sister_unmarried)
<span class="mp-bio-ans">{{ $user_data->sister_unmarried }}</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#sister_unmarried_modal">Add Unmarried Sister</a></span>
@endif
</li>

<li>
<span class="mp-bio-label">Married Sister:</span>
@if($user_data->sister_married)
<span class="mp-bio-ans">{{ $user_data->sister_married }}</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#sister_married_modal">Add married Sister</a></span>
@endif
</li>

</ul>
</div>
<form method="post" action="{{ url('family-info') }}">
	{{ csrf_field() }}
<div class="family-info-form" style="display: none;">
<div class="form-group row">
<label for="name" class="col-sm-5 col-form-label">Family Type:</label>
<div class="col-sm-7">
<select name="family_type" id="" class="family_type form-control">
<option value="">--select--</option>
<option value="Nuclear Family">Nuclear Family</option>
<option value="joint Family">joint Family</option>

</select>
</div>
</div>
<div class="form-group row">
<label for="dob" class="col-sm-5 col-form-label">Finacial Status:</label>
<div class="col-sm-7">
<select name="finacial_status" id="" class="finacial_status form-control">
	<option value="">--select--</option>
<option value="Rich">Rich</option>
<option value="Upper Middle Class">Upper Middle Class</option>
<option value="Middle Class">Middle Class</option>\
<option value="Lower Upper Middle Class">Lower Upper Middle Class</option>
<option value="Do not want to tell at this time">Do not want to tell at this time</option>
</select>
</div>
</div>
<div class="form-group row">
<label for="gender" class="col-sm-5 col-form-label">Assets:</label>
<div class="col-sm-7">
<select name="assets" id="" class="assets form-control">
<option value="">--select--</option>
<option value="Home">Home</option>
<option value="Plot">Plot</option>
<option value="Vehicle">Vehicle</option>
<option value="Nothing">Nothing</option>
<option value="other">Other</option>
</select>
</div>
</div>
<div class="form-group row">
<label for="gender" class="col-sm-5 col-form-label">Father's Details:</label>
<div class="col-sm-7">
<select name="father_detail" class="father_detail form-control">
	<option value="">--select--</option>
<option value="Alive">Alive</option>
<option value="Died">Died</option>
</select>
</div>
</div>

<div class="form-group row">
<label for="gender" class="col-sm-5 col-form-label">Father's Occupation:</label>
<div class="col-sm-7">
<input type="text" name="father_occupation" placeholder="Father Occupation" class="form-control" value="{{ $user_data->father_occupation }}">
</div>
</div>
<div class="form-group row">
<label for="gender" class="col-sm-5 col-form-label">Mother's Details:</label>
<div class="col-sm-7">
<select name="mother_detail" class="mother_detail form-control">
	<option value="">--select--</option>
<option value="Alive">Alive</option>
<option value="Died">Died</option>
</select>
</div>
</div>

<div class="form-group row">
<label for="gender" class="col-sm-5 col-form-label">Mother's Occupation:</label>
<div class="col-sm-7">
<input type="text" name="mother_occupation" placeholder="Mother Occupation " class="form-control" value="{{ $user_data->father_occupation }}">
</div>
</div>
<div class="form-group row">
<label for="gender" class="col-sm-5 col-form-label">Elder Brother:</label>
<div class="col-sm-7">
<select name="elder_brother" id="" class="elder_brother form-control">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="above">above</option>
</select>
</div>
</div>
<div class="form-group row">
<label for="gender" class="col-sm-5 col-form-label">Younger Brother:</label>
<div class="col-sm-7">
<select name="younger_brother" id="" class="younger_brother form-control">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="above">above</option>
</select>
</div>
</div>
<div class="form-group row">
<label for="gender" class="col-sm-5 col-form-label">Married Brother:</label>
<div class="col-sm-7">
<select name="brother_married" id="" class="brother_married form-control">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="above">above</option>
</select>
</div>
</div>
<div class="form-group row">
<label for="gender" class="col-sm-5 col-form-label">Unmarried Brother:</label>
<div class="col-sm-7">
<select name="brother_unmarried" id="" class="brother_unmarried form-control">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="above">above</option>
</select>
</div>
</div>

<div class="form-group row">
<label for="gender" class="col-sm-5 col-form-label">Elder Sister:</label>
<div class="col-sm-7">
<select name="elder_sister" id="" class="elder_sister form-control">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="above">above</option>
</select>
</div>
</div><div class="form-group row">
<label for="gender" class="col-sm-5 col-form-label">Younger Sister:</label>
<div class="col-sm-7">
<select name="younger_sister" id="" class="younger_sister form-control">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="above">above</option>
</select>
</div>
</div>





<div class="form-group row">
<label for="gender" class="col-sm-5 col-form-label">Married Sister:</label>
<div class="col-sm-7">
<select name="sister_married" id="" class="sister_married form-control">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="above">above</option>
</select>
</div>
</div><div class="form-group row">
<label for="gender" class="col-sm-5 col-form-label">Unmarried Sister:</label>
<div class="col-sm-7">
<select name="sister_unmarried" id="" class="sister_unmarried form-control">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="above">above</option>
</select>
</div>
</div>
<div class="clearfix"></div>
</div>

</div>

<div class="mp-btns pull-right btn8">
<a href="javascript:;" class="mp-edit-btn eb9">Edit</a>
<div class="mp-btn2-two dc9" style="display: none;">
<input type="submit" value="Done" class="mp-done-btn" />
<a href="javascript:;" class="mp-cancel-btn cb9">Cancel</a>
</form>
</div>
</div>
<div class="clearfix"></div>
</div>
<div class="panel panel-default">
    <div class="panel-heading text-center"><h3>Looking For</h3>
    </div>
     </div>

<div class="mp-about">
<h3 class="mp-head">BASIC PREFERENCES</h3>
<hr/>
<div class="mp-content pull-left">
<div class="mp-religious-info loking-age-pref">
<ul class="mp-form-list">


<li>
<span class="mp-bio-label">Looking Age from/to:</span>
@if($user_data->loking_age_from AND $user_data->loking_age_to)
<span class="mp-bio-ans"> {{ $user_data->loking_age_from}}<span style="color: red; font-size: 19px;"> | </span>{{$user_data->loking_age_to }}</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#loking_age_modal">Add Age Preference:</a></span>
@endif
</li>
<li>
<span class="mp-bio-label">Eating Habits:</span>
@if(count($loking_eating))

							
								<span class="mp-bio-ans">  
								
									@php $data=''; @endphp 
										@foreach($loking_eating as $k => $row )
											@if($k < $limit)
												{{ $row->loking_value }} <span style="color: red; font-size: 19px;"> | </span>
											
												@endif
										@endforeach
									</span>
	@foreach($loking_eating as $row )										
	@php 
	$data .= '<div class="col-sm-4"><span class="fa fa-check check-color"></span>' . $row->loking_value . '</div>';
@endphp
@endforeach
											
										<div class="modal fadeInDown" id="myModale" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="false" >
												
    <div class="modal-dialog modal-md" style="margin-top: 100px;">
      <div class="modal-content" style="margin-top: 115px;">
      
        <div class="modal-header">
          <h3>Eating</h3>
        </div>
        <div class="modal-body">
         
            <div class="row">
               
                
					{!! $data !!}							
                        
            </div>

              
             
          </div>
       
        <div class="modal-footer">
          <div class="col-sm-12">
            <button class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
  </div>							@if(count($loking_eating)>1)
										<a href="javascript:;" data-toggle="modal" data-target="#myModale" style="color:#4ccee8;">Read more</a>
										@endif
									
							
							
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#loking_eating_modal">Add Eating Habits</a></span>
@endif
</li>
<li>
<span class="mp-bio-label">Mother Tongue:</span>
@if($user_data->loking_language)

<span class="mp-bio-ans">{{ $user_data->loking_language }}</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#loking_langaugee_modal">Add Mother Tongue</a></span>
@endif
</li>
<li>
<span class="mp-bio-label">Other Languages:</span>
@if(count($loking_other_language))
									@php $data = '' @endphp
									<span class="mp-bio-ans">  
										@foreach($loking_other_language as $k => $row )
											@if($k < $limit)

												{{ $row->loking_value }} <span style="color: red; font-size: 19px;"> | </span>
											@endif
										@endforeach
									</span>
												
												
@foreach($loking_other_language as $row )
@php 
	$data .= '<div class="col-sm-4"><span class="fa fa-check check-color"></span>' . $row->loking_value . '</div>';
@endphp
@endforeach
											
	<div class="modal fadeInDown" id="myModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="false" >
												
    <div class="modal-dialog modal-md" style="margin-top: 100px;">
      <div class="modal-content" style="margin-top: 115px;">
      
        <div class="modal-header">
          <h3>Other Languages</h3>
        </div>
        <div class="modal-body">
         
            <div class="row">
               
                
					{!! $data !!}							
                        
            </div>

              
             
          </div>
       
        <div class="modal-footer">
          <div class="col-sm-12">
          	<button class="btn btn-danger" data-dismiss="modal">Close</button>
            {{-- <h5><a href="#" class="btn-danger" data-dismiss="modal">Close</a></h5> --}}
          </div>
        </div>
        
      </div>
    </div>
  </div>
  								
  									@if(count($loking_other_language)>1)
										<a class="read-more" href="javascript:;" data-toggle="modal" data-target="#myModal">Read more</a>
										@endif
								
									
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#loking_other_language_modal">Add other languages</a></span>
@endif
</li>
<li>

</ul>
</div>
<form method="post" action="{{ url('basic-info-loking') }}">
	{{ csrf_field() }}
<div class="loking-pref" style="display: none;">
<div class="form-group row">
<label for="name" class="col-sm-5 col-form-label">Age from:</label>
<div class="col-sm-7">
<select name="loking_age_from" class="form-control loking_age_from">
	<option value="">--select--</option>
@for($i =  date('y');  $i <= date('y')+82 ; $i++)
<option value="{{ $i }}" >{{ $i }}</option>
@endfor 
</select>
</div>
</div>
<div class="form-group row">
<label for="name" class="col-sm-5 col-form-label">Age to:</label>
<div class="col-sm-7">
<select name="loking_age_to" class="form-control loking_age_to">
	<option value="">--select--</option>
@for($i = date('y')+82; $i >= date('y'); $i--)
<option value="{{ $i }}" >{{ $i }}</option>
@endfor 
</select>
</div>
</div>
<div class="form-group row">
<label for="dob" class="col-sm-5 col-form-label">Eating Habits:</label>
<div class="col-sm-7">
<input type="hidden" name="eating_type"  value="eating type">
<input type="checkbox" name="loking_eating_habits[]" @if (preg_match("/Dose not/", "$loking_eating")) checked="" @endif value="Dose not"> Dose not matter &nbsp <input type="checkbox" name="loking_eating_habits[]" @if (preg_match("/Veg/", "$loking_eating")) checked="" @endif value="Veg"> Veg <br> <input type="checkbox" name="loking_eating_habits[]" @if (preg_match("/Occasionally Non-veg/", "$loking_eating")) checked="" @endif value="Occasionally Non-veg"> Occasionally Non-veg &nbsp <input type="checkbox" name="loking_eating_habits[]" @if (preg_match("/Eggetarian/", "$loking_eating")) checked="" @endif value="Eggetarian"> Eggetarian
</div>
</div>
<div class="form-group row">
<label for="gender" class="col-sm-5 col-form-label">Mother Tongue:</label>
<div class="col-sm-7">
<select name="loking_language" id="loking_language" class="form-control">
<option value="">Please Select...</option> 
<option value="">select</option>  
<option value="Malayalam">Malayalam</option>    
<option value="Aka">Aka</option>
<option value="Angika">Angika</option>
<option value="Arabic">Arabic</option> 
<option value="Arunachali">Arunachali</option>
<option value="Assamese">Assamese</option> 
<option value="Awadhi">Awadhi</option> 
<option value="Badaga">Badaga</option> 
<option value="Bengali">Bengali </option>
<option value="Bhojpuri">Bhojpuri</option> 
<option value="Bihari">Bihari</option> 
<option value="Brij">Brij</option> 
<option value="Chatisgarhi">Chatisgarhi</option>
<option value="Coorgi">Coorgi</option> 
<option value="Dogri">Dogri</option> 
<option value="English">English</option> 
<option value="French">French</option> 
<option value="Garhwali">Garhwali</option> 
<option value="Garo">Garo</option> 
<option value="Gujarati">Gujarati</option>
<option value="Haryanvi">Haryanvi</option>
<option value="Himachali/Pahari">Himachali/Pahari</option> 
<option value="Hindi">Hindi</option> 
<option value="Hindko">Hindko</option> 
<option value="Kanauji">Kanauji</option> 
<option value="Kannada">Kannada</option> 
<option value="Kashmiri">Kashmiri</option> 
<option value="Khandesi">Khandesi</option> 
<option value="Khasi">Khasi</option> 
<option value="Konkani">Konkani</option> 
<option value="Koshali">Koshali</option> 
<option value="Kumaoni">Kumaoni</option> 
<option value="Kutchi">Kutchi</option> 
<option value="Ladacki">Ladacki</option> 
<option value="Lepcha">Lepcha</option> 
<option value="Magahi">Magahi</option> 
<option value="Maithili">Maithili</option> 
<option value="Malay">Malay</option> 
<option value="Malayalam">Malayalam
</option> 
<option value="Manipuri">Manipuri</option> 
<option value="Marathi">Marathi</option> 
<option value="Marwari">Marwari</option> 
<option value="Miji">Miji</option> 
<option value="Miza">Miza</option> 
<option value="Monpa">Monpa</option> 
<option value="Nepali">Nepali</option> 
<option value="Nicobarese">Nicobarese</option> 
<option value="Oriya">Oriya</option> 
<option value="Pashto">Pashto</option> 
<option value="Persian">Persian</option> 
<option value="Punjabi">Punjabi</option> 
<option value="Rajasthani">Rajasthani</option> 
<option value="Russian">Russian</option> 
<option value="Sanskrit">Sanskrit</option> 
<option value="Santhali">Santhali</option> 
<option value="Sindhi">Sindhi</option> 
<option value="Sinhala">Sinhala</option> 
<option value="Sourashtra">Sourashtra</option> 
<option value="Spanish">Spanish</option> 
<option value="Tamil">Tamil</option> 
<option value="Telugu">Telugu</option> 
<option value="Tripuri">Tripuri</option> 
<option value="Tulu">Tulu</option> 
<option value="Urdu">Urdu</option>
</select>
</div>
</div>


<div class="form-group row">
<label for="hobbies" class="col-sm-5 col-form-label">Looking Other Language:</label>
<div class="col-sm-7">

<input type="text" readonly="" value="Partner other language" name="loking_other_lang" class="form-control">
<div class="input-group-append">
<a href="javascript:;" id="loking_other_language" style="position: absolute;
    right: 24px;
    top: 9px;">
<span class="fa fa-arrow-down arrows" id="loking_do_other"></span>
<span class="fa fa-arrow-up" id="loking_up_other" style="display:none;"></span>

</a>
</div>
</div>

<div id="loking_other_languages" style="display:none;">
	<br><br>
<div class="row">
	<div class="col-sm-5"></div>
<div class="col-sm-4">
<a href="javascript:;" onclick="lan_check()" >Select All</a>
</div>
<div class="col-sm-3">
<a href="javascript:;" onclick="lan_uncheck()"  >Clear All</a>
</div>
</div>

<br>

<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if(preg_match("/Urdu/", "$loking_other_language")) checked="" @endif  class="other_lan" value="Urdu"> Urdu </div>
<div class="col-sm-4">
 <input type="checkbox" name="loking_other_language[]" @if (preg_match("/Punjabi/", "$loking_other_language")) checked="" @endif class="other_lan" value="Punjabi"> Punjabi </div>
{{-- </div> --}}
{{-- </div>
</div> --}}
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Pashto/", "$loking_other_language")) checked="" @endif class="other_lan" value="Pashto"> Pashto </div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Sindhi/", "$loking_other_language")) checked="" @endif class="other_lan" value="Sindhi"> Sindhi 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Saraiki/", "$loking_other_language")) checked="" @endif class="other_lan" value="Saraiki"> Saraiki </div>
<div class="col-sm-4"> 
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Balochi/", "$loking_other_language")) checked="" @endif class="other_lan" value="Balochi"> Balochi </div>

<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Hindko/", "$loking_other_language")) checked="" @endif class="other_lan" value="Hindko"> Hindko </div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/English/", "$loking_other_language")) checked="" @endif class="other_lan" value="English"> English 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Malayalam/", "$loking_other_language")) checked="" @endif class="other_lan" value="Malayalam"> Malayalam </div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Aka/", "$loking_other_language")) checked="" @endif class="other_lan" value="Aka"> Aka
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Angika/", "$loking_other_language")) checked="" @endif class="other_lan" value="Angika"> Angika 
</div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Arabic/", "$loking_other_language")) checked="" @endif class="other_lan" value="Arabic"> Arabic 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Arunachali/", "$loking_other_language")) checked="" @endif class="other_lan" value="Arunachali"> Arunachali </div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Assamese/", "$loking_other_language")) checked="" @endif class="other_lan" value="Assamese"> Assamese 
</div>

<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Awadhi/", "$loking_other_language")) checked="" @endif class="other_lan" value="Awadhi"> Awadhi 
</div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Badaga/", "$loking_other_language")) checked="" @endif class="other_lan" value="Badaga"> Badaga 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Bengali/", "$loking_other_language")) checked="" @endif class="other_lan" value="Bengali"> Bengali </div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Bhojpuri/", "$loking_other_language")) checked="" @endif class="other_lan" value="Bhojpuri"> Bhojpuri 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Bihari/", "$loking_other_language")) checked="" @endif class="other_lan" value="Bihari"> Bihari 
</div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Brij/", "$loking_other_language")) checked="" @endif class="other_lan" value="Brij"> Brij <br>
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Chatisgarhi/", "$loking_other_language")) checked="" @endif class="other_lan" value="Chatisgarhi"> Chatisgarhi </div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Coorgi/", "$loking_other_language")) checked="" @endif class="other_lan" value="Coorgi"> Coorgi 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Dogri/", "$loking_other_language")) checked="" @endif class="other_lan" value="Dogri"> Dogri <</div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/French/", "$loking_other_language")) checked="" @endif class="other_lan" value="French"> French 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Garhwali/", "$loking_other_language")) checked="" @endif class="other_lan" value="Garhwali"> Garhwali </div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Garo/", "$loking_other_language")) checked="" @endif class="other_lan" value="Garo"> Garo <br>
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Gujarati/", "$loking_other_language")) checked="" @endif class="other_lan" value="Gujarati"> Gujarati </div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Haryanvi/", "$loking_other_language")) checked="" @endif class="other_lan" value="Haryanvi"> Haryanvi </div>

<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Himachali Pahari/", "$loking_other_language")) checked="" @endif class="other_lan" value="Himachali Pahari"> Himachali/Pahari </div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Hindi/", "$loking_other_language")) checked="" @endif class="other_lan" value="Hindi"> Hindi 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Kannada/", "$loking_other_language")) checked="" @endif class="other_lan" value="Kannada"> Kannada </div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Kashmiri/", "$loking_other_language")) checked="" @endif class="other_lan" value="Kashmiri"> Kashmiri 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Khandesi/", "$loking_other_language")) checked="" @endif class="other_lan" value="Khandesi"> Khandesi </div>

<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Khasi/", "$loking_other_language")) checked="" @endif class="other_lan" value="Khasi"> Khasi
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Konkani/", "$loking_other_language")) checked="" @endif class="other_lan" value="Konkani"> Konkani </div>

<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Koshali/", "$loking_other_language")) checked="" @endif class="other_lan" value="Koshali"> Koshali 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Kumaoni/", "$loking_other_language")) checked="" @endif class="other_lan" value="Kumaoni"> Kumaoni </div>

<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Kutchi/", "$loking_other_language")) checked="" @endif class="other_lan" value="Kutchi"> Kutchi 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Ladacki/", "$loking_other_language")) checked="" @endif class="other_lan" value="Ladacki"> Ladacki 
</div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Lepcha/", "$loking_other_language")) checked="" @endif class="other_lan" value="Lepcha"> Lepcha 
</div>

<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Magahi/", "$loking_other_language")) checked="" @endif class="other_lan" value="Magahi"> Magahi </div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Maithili/", "$loking_other_language")) checked="" @endif class="other_lan" value="Maithili"> Maithili 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Malay/", "$loking_other_language")) checked="" @endif class="other_lan" value="Malay"> Malay </div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Manipuri/", "$loking_other_language")) checked="" @endif class="other_lan" value="Manipuri"> Manipuri 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Marathi/", "$loking_other_language")) checked="" @endif class="other_lan" value="Marathi"> Marathi </div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Marwari/", "$loking_other_language")) checked="" @endif class="other_lan" value="Marwari"> Marwari 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Miji/", "$loking_other_language")) checked="" @endif class="other_lan" value="Miji"> Miji 
</div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Miza/", "$loking_other_language")) checked="" @endif class="other_lan" value="Miza"> Miza <br>
</div>

<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Monpa/", "$loking_other_language")) checked="" @endif class="other_lan" value="Monpa"> Monpa 
</div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Nepali/", "$loking_other_language")) checked="" @endif class="other_lan" value="Nepali"> Nepali 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Nicobarese/", "$loking_other_language")) checked="" @endif class="other_lan" value="Nicobarese"> Nicobarese </div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Oriya/", "$loking_other_language")) checked="" @endif class="other_lan" value="Oriya"> Oriya 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Persian/", "$loking_other_language")) checked="" @endif class="other_lan" value="Persian"> Persian </div>
<div class="col-sm-4">

<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Rajasthani/", "$loking_other_language")) checked="" @endif class="other_lan" value="Rajasthani"> Rajasthani 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Russian/", "$loking_other_language")) checked="" @endif class="other_lan" value="Russian"> Russian </div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Sanskrit/", "$loking_other_language")) checked="" @endif class="other_lan" value="Sanskrit"> Sanskrit 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Santhali/", "$loking_other_language")) checked="" @endif class="other_lan" value="Santhali"> Santhali
</div>
 <div class="col-sm-4">

<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Sinhala/", "$loking_other_language")) checked="" @endif class="other_lan" value="Sinhala"> Sinhala 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Sourashtra/", "$loking_other_language")) checked="" @endif class="other_lan" value="Sourashtra"> Sourashtra </div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Spanish/", "$loking_other_language")) checked="" @endif class="other_lan" value="Spanish"> Spanish 
</div>

<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Tamil/", "$loking_other_language")) checked="" @endif class="other_lan" value="Tamil"> Tamil 
</div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Telugu/", "$loking_other_language")) checked="" @endif class="other_lan" value="Telugu">Telugu 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Tripuri/", "$loking_other_language")) checked="" @endif class="other_lan" value="Tripuri"> Tripuri </div>
<div class="col-sm-4">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Tulu/", "$loking_other_language")) checked="" @endif class="other_lan" value="Tulu"> Tulu <br>
</div>
</div>
</div>
</div>
<div class="clearfix"></div>
</div>

</div>
<div class="mp-btns pull-right btn9">
<a href="javascript:;" class="mp-edit-btn eb10">Edit</a>
<div class="mp-btn2-two dc10" style="display: none;">
<input type="submit" value="Done" class="mp-done-btn" />
<a href="javascript:;" class="mp-cancel-btn cb10">Cancel</a>
</div>
</div>
</form>
<div class="clearfix"></div>
</div>
<div class="mp-about">
<h3 class="mp-head">APEARANCE</h3>
<hr/>
<div class="mp-content pull-left">
<div class="mp-religious-info looking-apperance">
<ul class="mp-form-list">


<li>
<span class="mp-bio-label">Height Preference:</span>
@if($user_data->loking_height_from AND $user_data->loking_height_from)
<span class="mp-bio-ans"> {{ $user_data->loking_height_from}}<span style="color: red; font-size: 19px;"> | </span>{{$user_data->loking_height_to }}</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#loking_height_modal">Add Height Preference</a></span>
@endif
</li>
	@if($user_data->gender=='Female')
<li>
<span class="mp-bio-label">Hijab</span>
@if(count($observes_hijab ))
							 
									<span class="mp-bio-ans"> 
									@php $data=''; @endphp 
										@foreach($observes_hijab  as $k => $row )
											@if($k < $limit)
												{{ $row->loking_value }} <span style="color: red; font-size: 19px;"> | </span>
											@endif
										@endforeach
									</span>
												
		@foreach($observes_hijab  as $row )										
	@php 
	$data .= '<div class="col-sm-4"><span class="fa fa-check check-color"></span> ' . $row->loking_value . '</div>';
@endphp
@endforeach
											
										<div class="modal fadeInDown" id="myModaloh" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="false" >
												
    <div class="modal-dialog modal-md" style="margin-top: 100px;">
      <div class="modal-content" style="margin-top: 115px;">
      
        <div class="modal-header">
          <h3>Hijab</h3>
        </div>
        <div class="modal-body">
         
            <div class="row">
               
                
					{!! $data !!}							
                        
            </div>

              
             
          </div>
       
        <div class="modal-footer">
          <div class="col-sm-12">
            <button class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  										@if(count($observes_hijab)>1)
										<a href="javascript:;" data-toggle="modal" data-target="#myModaloh" style="color:#0ed526;">Read more</a>
										@endif
									</span></li>
							</ul>
						
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#loking_hijab_modal">Add Hijab</a></span>
@endif
</li>
@endif
<li>
<span class="mp-bio-label">Physical Status:</span>
@if($user_data->loking_physcial_status)
<span class="mp-bio-ans">{{ $user_data->loking_physcial_status }}</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#loking_physical_status_modal">Add Physical Status</a></span>
@endif
</li>
<li>

</ul>
</div>
<form method="post" action="{{ url('loking-aperance-info') }}">
<div class="apperance-form" style="display: none;">
<div class="form-group row">
<label for="name" class="col-sm-5 col-form-label">Height from:</label>
<div class="col-sm-7">
<select name="loking_height_from" id="loking_height_from"  class="form-control">

<option value="">Height..</option>
<option value="Below 4ft 6in - 137cm">Below 4ft 6in - 137cm</option>
<option value="4ft 6in - 137cm">4ft 6in - 137cm</option>
<option value="4ft 7in - 139cm">4ft 7in - 139cm</option>
<option value="4ft 8in - 142cm">4ft 8in - 142cm</option>
<option value="4ft 9in - 144cm">4ft 9in - 144cm</option>
<option value="4ft 10in - 147cm">4ft 10in - 147cm</option>
<option value="4ft 11in - 149cm">4ft 11in - 149cm</option>
<option value="5ft - 152cm">5ft - 152cm</option>
<option value="5ft 1in - 154cm">5ft 1in - 154cm</option>
<option value="5ft 2in - 157cm">5ft 2in - 157cm</option>
<option value="5ft 3in - 160cm">5ft 3in - 160cm</option>
<option value="5ft 4in - 162cm">5ft 4in - 162cm</option>
<option value="5ft 5in - 165cm">5ft 5in - 165cm</option>
<option value="5ft 6in - 167cm">5ft 6in - 167cm</option>
<option value="5ft 7in - 170cm">5ft 7in - 170cm</option>
<option value="5ft 8in - 172cm">5ft 8in - 172cm</option>
<option value="5ft 9in - 175cm">5ft 9in - 175cm</option>
<option value="5ft 10in - 177cm">5ft 10in - 177cm</option>
<option value="5ft 11in - 180cm">5ft 11in - 180cm</option>
<option value="6ft - 182cm">6ft - 182cm</option>
<option value="6ft 1in - 185cm">6ft 1in - 185cm</option>
<option value="6ft 2in - 187cm">6ft 2in - 187cm</option>
<option value="6ft 3in - 190cm">6ft 3in - 190cm</option>
<option value="6ft 4in - 193cm">6ft 4in - 193cm</option>
<option value="6ft 5in - 195cm">6ft 5in - 195cm</option>
<option value="6ft 6in - 198cm">6ft 6in - 198cm</option>
<option value="6ft 7in - 200cm">6ft 7in - 200cm</option>
<option value="6ft 8in - 203cm">6ft 8in - 203cm</option>
<option value="6ft 9in - 205cm">6ft 9in - 205cm</option>
<option value="6ft 10in - 208cm">6ft 10in - 208cm</option>
<option value="6ft 11in - 210cm">6ft 11in - 210cm</option>
<option value="7ft - 213cm">7ft - 213cm</option>
<option value="Above 7ft - 213c">Above 7ft - 213cm</option>
</select>
</div>
</div>




<div class="form-group row">
<label for="name" class="col-sm-5 col-form-label">Height to:</label>
<div class="col-sm-7">


<select name="loking_height_to" id="loking_height_to" class="form-control">

<option value="">Height..</option>
<option value="Below 4ft 6in - 137cm">Below 4ft 6in - 137cm</option>
<option value="4ft 6in - 137cm">4ft 6in - 137cm</option>
<option value="4ft 7in - 139cm">4ft 7in - 139cm</option>
<option value="4ft 8in - 142cm">4ft 8in - 142cm</option>
<option value="4ft 9in - 144cm">4ft 9in - 144cm</option>
<option value="4ft 10in - 147cm">4ft 10in - 147cm</option>
<option value="4ft 11in - 149cm">4ft 11in - 149cm</option>
<option value="5ft - 152cm">5ft - 152cm</option>
<option value="5ft 1in - 154cm">5ft 1in - 154cm</option>
<option value="5ft 2in - 157cm">5ft 2in - 157cm</option>
<option value="5ft 3in - 160cm">5ft 3in - 160cm</option>
<option value="5ft 4in - 162cm">5ft 4in - 162cm</option>
<option value="5ft 5in - 165cm">5ft 5in - 165cm</option>
<option value="5ft 6in - 167cm">5ft 6in - 167cm</option>
<option value="5ft 7in - 170cm">5ft 7in - 170cm</option>
<option value="5ft 8in - 172cm">5ft 8in - 172cm</option>
<option value="5ft 9in - 175cm">5ft 9in - 175cm</option>
<option value="5ft 10in - 177cm">5ft 10in - 177cm</option>
<option value="5ft 11in - 180cm">5ft 11in - 180cm</option>
<option value="6ft - 182cm">6ft - 182cm</option>
<option value="6ft 1in - 185cm">6ft 1in - 185cm</option>
<option value="6ft 2in - 187cm">6ft 2in - 187cm</option>
<option value="6ft 3in - 190cm">6ft 3in - 190cm</option>
<option value="6ft 4in - 193cm">6ft 4in - 193cm</option>
<option value="6ft 5in - 195cm">6ft 5in - 195cm</option>
<option value="6ft 6in - 198cm">6ft 6in - 198cm</option>
<option value="6ft 7in - 200cm">6ft 7in - 200cm</option>
<option value="6ft 8in - 203cm">6ft 8in - 203cm</option>
<option value="6ft 9in - 205cm">6ft 9in - 205cm</option>
<option value="6ft 10in - 208cm">6ft 10in - 208cm</option>
<option value="6ft 11in - 210cm">6ft 11in - 210cm</option>
<option value="7ft - 213cm">7ft - 213cm</option>
<option value="Above 7ft - 213c">Above 7ft - 213cm</option>
</select>
</div>
</div>
@if($user_data->gender=='female')
<div class="form-group row">
<label for="dob" class="col-sm-5 col-form-label">Hijab:</label>
<div class="col-sm-7">
<input type="text" value="Observes Hija" name="observes_hijab" class="form-control">
<div class="input-group-append">
<a href="javascript:;" id="obshij" style="position: absolute;
    right: 24px;
    top: 9px;">
<span class="fa fa-arrow-down arrows" id="downobshij"></span>
<span class="fa fa-arrow-up" id="upobshij" style="display:none;"></span>

</a>
</div>
</div>

<div id="obshijpro" style="display:none;">
	<br><br>
<div class="row">
	<div class="col-sm-5"></div>
<div class="col-sm-4">
<a href="javascript:;" onclick="hijab_check()" >Select All</a>
</div>
<div class="col-sm-3">
<a href="javascript:;" onclick="hijab_uncheck()"  >Clear All</a>
</div>
</div>

<br>
<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input class="hijab_select" type="checkbox"  @if (preg_match("/Always/", "$observes_hijab")) checked="" @endif name="hijab_time[]" value="Always"> Always</div>
<div class="col-sm-4">
<input class="hijab_select" type="checkbox" name="hijab_time[]" @if (preg_match("/Always with Niqab /", "$observes_hijab")) checked="" @endif value="Always with Niqab"> Always with Niqab</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input class="hijab_select" type="checkbox" name="hijab_time[]" @if (preg_match("/Sometimes/", "$observes_hijab")) checked="" @endif value="Sometimes">    Sometimes
</div>
<div class="col-sm-4">
<input class="hijab_select" type="checkbox" name="hijab_time[]" @if (preg_match("/Never News/", "$observes_hijab")) checked="" @endif value="Never"> Never 

</div>
</div>
</div>
</div>
@endif
<div class="form-group row">
<label for="loking physcial status" class="col-sm-5 col-form-label">Physical Status:</label>
<div class="col-sm-7">
<select name="loking_physcial_status" id="loking_physcial_status" class="form-control">
<option value="">--select--</option>
<option value="Normal Person">Normal Person</option>
<option value="Deaf/Dumb">Deaf/Dumb</option>
<option value="Blind">Blind</option>
<option value="Physically Challenged">Physically Challenged</option>
<option value="Mentally Challenged">Mentally Challenged</option>

</select>
</div>
</div>

<div class="clearfix"></div>
</div>

</div>
{{ csrf_field() }}
<div class="mp-btns pull-right btn10">
<a href="javascript:;" class="mp-edit-btn eb11">Edit</a>
<div class="mp-btn2-two dc11" style="display: none;">
<input type="submit" value="Done" class="mp-done-btn" />
<a href="javascript:;" class="mp-cancel-btn cb11">Cancel</a>
</div>
</div>
</form>
<div class="clearfix"></div>
</div>
<div class="mp-about">
<h3 class="mp-head">PROFESSIONAL PREFERENCES</h3>
<hr/>
<div class="mp-content pull-left">
<div class="mp-religious-info profession">
<ul class="mp-form-list">


<li>
<span class="mp-bio-label">Education:</span>
@if($user_data->loking_education)
<span class="mp-bio-ans"> {{ $user_data->loking_education }}</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#loking_education_modal">Add Education</a></span>
@endif
</li>
<li>
<span class="mp-bio-label">Occupation:</span>
@if($user_data->loking_job)
<span class="mp-bio-ans"> {{ $user_data->loking_job }}</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#loking_occupation_modal">Add Occupation</a></span>
@endif
</li>
<li>
<span class="mp-bio-label">Employed in: </span>
@if($user_data->employed_in)
<span class="mp-bio-ans">{{ $user_data->employed_in }}</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#employed_in_modal">Add Employed in </a></span>
@endif
</li>
<li>
<span class="mp-bio-label">Annual Income:</span>
@if($user_data->loking_a_income)
<span class="mp-bio-ans">{{ $user_data->loking_a_income }}</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#loking_a_income_modal">Add Annual Income</a></span>
@endif
</li>

</ul>
</div>
<form method="post" action="{{ url('profession-form') }}">
	{{ csrf_field() }}
<div class="profession-form" style="display: none;">
<div class="form-group row">
<label for="name" class="col-sm-5 col-form-label">Education:</label>
<div class="col-sm-7">
<select name="loking_education" id="" class="form-control loking_education">
<option selected="selected" value="">--- Select ---</option>
<optgroup label='Bachelors - Engineering/Computer'>
<option value='BCA'>BCA</option>
<option value='B Arch'>B Arch</option>
<option value='B Plan'>B Plan</option>
<option value='BE'>BE</option>
<option value='B Tech'>B Tech</option>
<option value='Aeronautical Engineering'>Aeronautical Engineering</option>
<option value='BSc Computer Science'>BSc Computer Science</option>
<option value='BSc IT'>BSc IT</option>
<option value='Bachelor of Engineering'>Bachelor of Engineering</option>
</optgroup>
<optgroup label='Masters - Engineering/Computer'>
<option value='MS (Engg.)'>MS (Engg.)</option>
<option value='M Arch'>M Arch</option>
<option value='MCA'>MCA</option>
<option value='PGDCA'>PGDCA</option>
<option value='ME'>ME</option>
<option value='M Tech'>M Tech</option>
<option value='MSc Computer Science'>MSc Computer Science</option>
<option value='MSc IT'>MSc IT</option>
<option value='Master of Engineering'>Master of Engineering</option>
</optgroup>
<optgroup label='Bachelors - Arts/Science/Commerce/Other'>
<option value='B Phil'>B Phil</option>
<option value='B Com'>B Com</option>
<option value='BSc'>BSc</option>
<option value='BA'>BA</option>
<option value='BFA'>BFA</option>
<option value='BLIS'>BLIS</option>
<option value='BSW'>BSW</option>
<option value='BMM (MASS MEDIA)'>BMM (MASS MEDIA)</option>
<option value='Bachelors Degree'>Bachelors Degree</option>
</optgroup>
<optgroup label='Masters - Arts/Science/Commerce/Other'>
<option value='M Phil'>M Phil</option>
<option value='M Com'>M Com</option>
<option value='M Sc'>M Sc</option>
<option value='MA'>MA</option>
<option value='MLIS'>MLIS</option>
<option value='MSW'>MSW</option>
<option value='Masters Degree'>Masters Degree</option>
</optgroup>
<optgroup label='Teachers Education - BEd/MEd'>
<option value='BEd'>BEd</option>
<option value='MEd'>MEd</option>
</optgroup>
<optgroup label='Management - MBA/BBA/Other'>
<option value='MHM'>MHM</option>
<option value='MBA'>MBA</option>
<option value='PGDM'>PGDM</option>
<option value='MFM (Financial Management)'>MFM (Financial Management)</option>
<option value='Master Degree in Management'>Master Degree in Management</option>
<option value='BHM'>BHM</option>
<option value='BBA'>BBA</option>
<option value='BFM (Financial Management)'>BFM (Financial Management)</option>
<option value='Bachelor Degree in Management'>Bachelor Degree in Management</option>
</optgroup>
<optgroup label='Medicine - MBBS/MD/MS'>
<option value='MBBS'>MBBS</option>
<option value='MD / MS (Medical)'>MD / MS (Medical)</option>
<option value='MCh - Master of Chirurgiae'>MCh - Master of Chirurgiae</option>
<option value='DM - Doctorate of Medicine'>DM - Doctorate of Medicine</option>
</optgroup>
<optgroup label='Medicine - Dental/Homeo/Ayu/Vet'>
<option value='BDS'>BDS</option>
<option value='MDS'>MDS</option>
<option value='BHMS'>BHMS</option>
<option value='MHMS'>MHMS</option>
<option value='BAMS'>BAMS</option>
<option value='MAMS'>MAMS</option>
<option value='Bachelor of Veterinary Science'>Bachelor of Veterinary Science</option>
<option value='Master of Veterinary Science'>Master of Veterinary Science</option>
<option value='Degree in Medicine'>Degree in Medicine</option>
<option value='Master in Medicine'>Master in Medicine</option>
</optgroup>

<optgroup label='Medicine - Pharmacy/Nursing/Lab/Health'>
<option value='BPT'>BPT</option>
<option value='MPT'>MPT</option>
<option value='B.Pharm'>B.Pharm</option>
<option value='M.Pharm'>M.Pharm</option>
<option value='BSc Nursing'>BSc Nursing</option>
<option value='MSc Nursing'>MSc Nursing</option>
<option value='Medical Course'>Medical Course</option>
<option value='Diploma in Nursing'>Diploma in Nursing</option>
<option value='Medical Laboratory Technology'>Medical Laboratory Technology</option>
</optgroup>

<optgroup label='Legal - BL/ML/LLB/LLM'>
<option value='BGL'>BGL</option>
<option value='Bachelor of Law'>Bachelor of Law</option>
<option value='LLB'>LLB</option>
<option value='Master of Law'>Master of Law</option>
<option value='LLM'>LLM</option>
<option value='Course in Legal'>Course in Legal</option>
</optgroup>

<optgroup label='Finance - CA/ICWAI/CS'>
<option value='CA Inter'>CA Inter</option>
<option value='CA Final'>CA Final</option>
<option value='ICWA'>ICWA</option>
<option value='Company Secretary (CS)'S>Company Secretary (CS)</option>
<option value='CFA (Chartered Financial Analyst)'>CFA (Chartered Financial Analyst)</option>
<option value='Course in Finance'>Course in Finance</option>
</optgroup>

<optgroup label='Doctorate'>
<option value='Ph D'>Ph D</option>
</optgroup>

<optgroup label='Civil Service'>
<option value='IAS'>IAS</option>
<option value='IPS'>IPS</option>
<option value='IRS'>IRS</option>
<option value='154'>IES</option>
<option value='155'>IFS</option>
<option value='156'>Civil Service</option>
</optgroup>


<optgroup label='Diploma'>
<option value='Diploma'>Diploma</option>
<option value='Polytechnic'>Polytechnic</option>
</optgroup>

<optgroup label='Higher Secondery/TTC/ITI'>
<option value='TTC'>TTC</option>
<option value='ITI'>ITI</option>
<option value='Higher Secondery'>Higher Secondery</option>
</optgroup>
<optgroup label='Other Education'>
<option value='High School'>High School</option>
<option value='Less than high school'>Less than high school</option>
<option value='Other Education'>Other Education</option>
</optgroup>
</select>
</div>
</div>
<div class="form-group row">
<label for="dob" class="col-sm-5 col-form-label">Occupation:</label>
<div class="col-sm-7">
<select name="loking_job" class="form-control loking_job">
	<option value="">--select--</option>
<option value="Softwarw Engineer">Softwarw Engineer</option>
<option value="Producer/Director">Producer/Director</option>
<option value="Media">Media</option>
<option value="Marketing Manager">Marketing Manager</option>
<option value="HR Manager">HR Manager</option>
<option value="Lawyer">Lawyer</option>
<option value="I.T Porfissional">I.T Porfissional</option>
<option value="Teacher">Teacher</option>
<option value="University Lacturer">University Lacturer</option>
<option value="Business Administration">Business Administration</option>
<option value="Admin Officer"> Admin Officer</option>
<option value="Cival Engineer">Cival Engineer </option>
<option value="Electrical Engineer">Electrical Engineer</option>
{{-- <option value="MBBS">MBBS</option> --}}
<option value="Doctor">Doctor</option>
<option value="BBA">BBA</option>
<option value="Chartered Accountant">Chartered Accountant</option>

<option value="CSS Officer">CSS Officer </option>
<option value="No Occupation">No Occupation </option>
<option value="Business">Business</option>
<option value="Pilot">Pilot</option>
<option value="Police Officer">Police Officer</option>
<option value="Army Officer">Army Officer</option>
<option value="Air Force">Air Force</option>
<option value="Designer">Designer</option>
<option value="Computer Hardware">Computer Hardware</option>
<option value="Auto Mobile">Auto Mobile</option>
<option value="Traffic Warden">Traffic Warden</option>
<option value="Farmer">Farmer</option>
<option value="Shop Keeper">Shop Keeper</option>

<option value="Real Estate">Real Estate</option>

</select>
</div>
</div>
<div class="form-group row">
<label for="gender" class="col-sm-5 col-form-label">Employed in:</label>
<div class="col-sm-7">
<input type="text" name="employed_in" placeholder="employed in" class="form-control" value="{{ $user_data->employed_in }}">
</div>
</div>
<div class="form-group row">
<label for="gender" class="col-sm-5 col-form-label">Annual Income:</label>
<div class="col-sm-7">
<select name="loking_a_income" id="" class="form-control loking_a_income">
<option value="">Please select..</option>
<option value="Student">Student</option>
<option value="No Income">No Income</option>
<option value="Prefer not to say">Prefer not to say</option>
<option value="Less than 50000">Less than 50000</option>
<option value="50000 - 1 lakhs">50000 - 1 lakhs</option>
<option value="1 lakhs - 1.5 lakhs">1 lakh - 1.5 lakhs</option>
<option value="1.5 lakhs - 2 lakhs">1.5 lakhs - 2 lakhs</option>
<option value="2 lakhs - 3 lakhs">2 lakhs - 3 lakhs</option>
<option value="3 lakhs - 4 lakhs">3 lakhs - 4 lakhs</option>
<option value="4 lakhs - 5 lakhs">4 lakhs - 5 lakhs</option>
<option value="5 lakhs - 6 lakhs">5 lakhs - 6 lakhs</option>
<option value="6 lakhs - 7 lakhs">6 lakhs - 7 lakhs</option>
<option value="7 lakhs - 8 lakhs">7 lakhs - 8 lakhs</option>
<option value="8 lakhs - 9 lakhs">8 lakhs - 9 lakhs</option>
<option value="9 lakhs - 10 lakhs">9 lakhs - 10 lakhs</option>
<option value="10 lakhs - 12 lakhs">10 lakhs - 12 lakhs</option>
<option value="12 lakhs - 15 lakhs">12 lakhs - 15 lakhs</option>
<option value="15 lakhs - 20 lakhs">15 lakhs - 20 lakhs</option>
<option value="20 lakhs and Above">20 lakhs and Above</option>
</select>
</div>
</div>

<div class="clearfix"></div>
</div>

</div>

<div class="mp-btns pull-right btn11">
<a href="javascript:;" class="mp-edit-btn eb12">Edit</a>
<div class="mp-btn2-two dc12" style="display: none;">
<input type="submit" value="Done" class="mp-done-btn" />
<a href="javascript:;" class="mp-cancel-btn cb12">Cancel</a>
</div>
</div>
</form>
<div class="clearfix"></div>
</div>
<div class="mp-about">
<h3 class="mp-head">MY PREFERENCES</h3>
<hr/>
<div class="mp-content pull-left">
<div class="mp-religious-info my-preference">
<ul class="mp-form-list">


<li>
<span class="mp-bio-label">Religious History:</span>
@if(count($religious_history))
							
									<span class="mp-bio-ans"> 
									@php $data=''; @endphp 
										@foreach($religious_history as $k => $row )
											@if($k < $limit)
												{{ $row->loking_value }} <span style="color: red; font-size: 19px;"> | </span>
											@endif
										@endforeach
									</span>
												
		@foreach($religious_history as $row )										
	@php 
	$data .= '<div class="col-sm-4"><span class="fa fa-check check-color"></span> ' . $row->loking_value . '</div>';
@endphp
@endforeach
											
										<div class="modal fadeInDown" id="myModalrh" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="false" >
												
    <div class="modal-dialog modal-md" style="margin-top: 100px;">
      <div class="modal-content" style="margin-top: 115px;">
      
        <div class="modal-header">
          <h3>Religious history</h3>
        </div>
        <div class="modal-body">
         
            <div class="row">
               
                
					{!! $data !!}							
                        
            </div>

              
             
          </div>
       
        <div class="modal-footer">
          <div class="col-sm-12">
             <button class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
  </div>							
  									@if(count($religious_history)>1)
										<a href="javascript:;" data-toggle="modal" data-target="#myModalrh" style="color:#0ed526;">Read more</a>
										@endif
									</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#religious_history_modal">Add Religious History</a></span>
@endif
</li>
<li>
<span class="mp-bio-label">living with:</span>
@if(count($living_with))
							
									<span class="mp-bio-ans"> 
									@php $data=''; @endphp 
										@foreach($living_with as $k => $row )
											@if($k < $limit)
												{{ $row->loking_value }} <span style="color: red; font-size: 19px;"> | </span>
											@endif
										@endforeach
		@foreach($living_with as $row )										
	@php 
	$data .= '<div class="col-sm-4"><span class="fa fa-check check-color"></span> ' . $row->loking_value . '</div>';
@endphp
@endforeach
											
										<div class="modal fadeInDown" id="myModallw" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="false" >
												
    <div class="modal-dialog modal-md" style="margin-top: 100px;">
      <div class="modal-content" style="margin-top: 115px;">
      
        <div class="modal-header">
          <h3>living with</h3>
        </div>
        <div class="modal-body">
         
            <div class="row">
               
                
					{!! $data !!}							
                        
            </div>

              
             
          </div>
       
        <div class="modal-footer">
          <div class="col-sm-12">
            <button class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  									@if(count($living_with)>1)
										<a href="javascript:;" data-toggle="modal" data-target="#myModallw" style="color:#0ed526;">Read more</a>
										@endif
									</span>
							

@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#living_with_modal">Add living with</a></span>
@endif
</li>
<li>
<span class="mp-bio-label">Sect are you looking:</span>
@if(count($sects))
							 
									<span class="mp-bio-ans"> 
									@php $data=''; @endphp 
										@foreach($sects as $k => $row )
											@if($k < $limit)
												{{ $row->loking_value }} <span style="color: red; font-size: 19px;"> | </span>
											
												@endif
										@endforeach
		@foreach($sects as  $row )										
	@php 
	$data .= '<div class="col-sm-4"><span class="fa fa-check check-color"></span> ' . $row->loking_value . '</div>';
@endphp
		@endforeach									
										<div class="modal fadeInDown" id="myModalsr" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="false" >
												
    <div class="modal-dialog modal-md" style="margin-top: 100px;">
      <div class="modal-content" style="margin-top: 115px;">
      
        <div class="modal-header">
          <h3>Sect are you looking</h3>
        </div>
        <div class="modal-body">
         
            <div class="row">
               
                
					{!! $data !!}							
                        
            </div>

              
             
          </div>
       
        <div class="modal-footer">
          <div class="col-sm-12">
            <button class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  								@if(count($sects)>1)
										<a href="javascript:;" data-toggle="modal" data-target="#myModalsr" style="color:#0ed526;">Read more</a>
										@endif
									</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#loiking_sect_modal">Add Sect are you looking</a></span>
@endif
</li>
<li>
<span class="mp-bio-label">Pray:</span>
@if(count($pray))
							
									<span class="mp-bio-ans"> 
									@php $data=''; @endphp 
										@foreach($pray as $k => $row )
											@if($k < $limit)
											{{ str_limit($row->loking_value,15) }}
												 <span style="color: red; font-size: 19px;"> | </span>
											@endif
										@endforeach

	@foreach($pray as $row )											
												
	@php 
	$data .= '<div class="col-sm-6"><span class="fa fa-check check-color"></span> ' . $row->loking_value . '</div>';
@endphp
@endforeach
											
										<div class="modal fadeInDown" id="myModalpr" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="false" >
												
    <div class="modal-dialog modal-lg" style="margin-top: 100px;">
      <div class="modal-content" style="margin-top: 115px;">
      
        <div class="modal-header">
          <h3>pray</h3>
        </div>
        <div class="modal-body">
         
            <div class="row">
               
                
					{!! $data !!}							
                        
            </div>

              
             
          </div>
       
        <div class="modal-footer">
          <div class="col-sm-12">
           <button class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  									@if(count($pray)>1)
										<a href="javascript:;" data-toggle="modal" data-target="#myModalpr" style="color:#0ed526;">Read more</a>
										@endif
									</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#loiking_pray_modal">Add Pray</a></span>
@endif
</li>
<li>
<span class="mp-bio-label">Has Children:</span>
@if(count($has_children))
							
									<span class="mp-bio-ans"> 
									@php $data=''; @endphp 
										@foreach($has_children as $k => $row )
											@if($k < $limit)
												{{ $row->loking_value }} <span style="color: red; font-size: 19px;"> | </span>
											@endif
										@endforeach
												
		@foreach($has_children as $row )										
	@php 
	$data .= '<div class="col-sm-4"><span class="fa fa-check check-color"></span> ' . $row->loking_value . '</div>';
@endphp
											
										@endforeach
										<div class="modal fadeInDown" id="myModalhc" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="false" >
												
    <div class="modal-dialog modal-md" style="margin-top: 100px;">
      <div class="modal-content" style="margin-top: 115px;">
      
        <div class="modal-header">
          <h3>Has children</h3>
        </div>
        <div class="modal-body">
         
            <div class="row">
               
                
					{!! $data !!}							
                        
            </div>

              
             
          </div>
       
        <div class="modal-footer">
          <div class="col-sm-12">
            <button class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  									@if(count($has_children)>1)
										<a href="javascript:;" data-toggle="modal" data-target="#myModalhc" style="color:#0ed526;">Read more</a>
										@endif
									</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#has_chiled_modal">Add Has Children</a></span>
@endif
</li>
<li>
<span class="mp-bio-label">Looking for body type:</span>
@if(count($loking_body_type))
							
									<span class="mp-bio-ans"> 
									@php $data=''; @endphp 
										@foreach($loking_body_type as $k => $row )
											@if($k < $limit)
												{{ $row->loking_value }} <span style="color: red; font-size: 19px;"> | </span>
											@endif
										@endforeach
												
	@foreach($loking_body_type as $k => $row )											
	@php 
	$data .= '<div class="col-sm-4"><span class="fa fa-check check-color"></span> ' . $row->loking_value . '</div>';
@endphp
											
										@endforeach
										<div class="modal fadeInDown" id="myModalbt" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="false" >
												
    <div class="modal-dialog modal-md" style="margin-top: 100px;">
      <div class="modal-content" style="margin-top: 115px;">
      
        <div class="modal-header">
          <h3>Looking for body type</h3>
        </div>
        <div class="modal-body">
         
            <div class="row">
               
                
					{!! $data !!}							
                        
            </div>

              
             
          </div>
       
        <div class="modal-footer">
          <div class="col-sm-12">
           <button class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  									@if(count($loking_body_type)>1)
										<a href="javascript:;" data-toggle="modal" data-target="#myModalbt" style="color:#0ed526;">Read more</a>
										@endif
									</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#loking_body_modal">Add Looking for body type</a></span>
@endif
</li>
<li>
	<span class="mp-bio-label">Africa:</span>
@if(count($africa))
							
									<span class="mp-bio-ans"> 
									@php $data=''; @endphp 
										@foreach($africa as $k => $row )
											@if($k < $limit)
												{{ $row->loking_value }} <span style="color: red; font-size: 19px;"> | </span>
											@endif
										@endforeach
		@foreach($africa as $row )										
												
	@php 
	$data .= '<div class="col-sm-4"><span class="fa fa-check check-color"></span> ' . $row->loking_value . '</div>';
@endphp
										
										@endforeach
										<div class="modal fadeInDown" id="myModalaf" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="false" >
												
    <div class="modal-dialog modal-md" style="margin-top: 100px;">
      <div class="modal-content" style="margin-top: 115px;">
      
        <div class="modal-header">
          <h3>Africa</h3>
        </div>
        <div class="modal-body">
         
            <div class="row">
               
                
					{!! $data !!}							
                        
            </div>

              
             
          </div>
       
        <div class="modal-footer">
          <div class="col-sm-12">
            <button class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  									@if(count($africa)>2)
										<a href="javascript:;" data-toggle="modal" data-target="#myModalaf" style="color:#0ed526;">Read more</a>
										@endif
									</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#africa_modal">Add Africa</a></span>
@endif

</li>

<li>
<span class="mp-bio-label">Antarctica:</span>
@if(count($antarctica))
							
									<span class="mp-bio-ans"> 
									@php $data=''; @endphp 
										@foreach($antarctica as $k => $row )
											@if($k < $limit)
												{{ $row->loking_value }} <span style="color: red; font-size: 19px;"> | </span>
											
												@endif
										@endforeach
		@foreach($antarctica as $row )										
	@php 
	$data .= '<div class="col-sm-4"><span class="fa fa-check check-color"></span> ' . $row->loking_value . '</div>';
@endphp
											
										@endforeach
										<div class="modal fadeInDown" id="myModalan" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="false" >
												
    <div class="modal-dialog modal-md" style="margin-top: 100px;">
      <div class="modal-content" style="margin-top: 115px;">
      
        <div class="modal-header">
          <h3>Antarctica</h3>
        </div>
        <div class="modal-body">
         
            <div class="row">
               
                
					{!! $data !!}							
                        
            </div>

              
             
          </div>
       
        <div class="modal-footer">
          <div class="col-sm-12">
           <button class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  									@if(count($antarctica)>2)
										<a href="javascript:;" data-toggle="modal" data-target="#myModalan" style="color:#0ed526;">Read more</a>
										@endif
									</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#antarctica_modal">Add Antarctica</a></span>
@endif
</li>
<li>
<span class="mp-bio-label">Asia:</span>
@if(count($asia))
							
									<span class="mp-bio-ans"> 
									@php $data=''; @endphp 
										@foreach($asia as $k => $row )
											@if($k < $limit)
												{{ $row->loking_value }} <span style="color: red; font-size: 19px;"> | </span>
											@endif
										@endforeach
												
	@foreach($asia as  $row )											
	@php 
	$data .= '<div class="col-sm-4"><span class="fa fa-check check-color"></span> ' . $row->loking_value . '</div>';
@endphp
											
										@endforeach
										<div class="modal fadeInDown" id="myModalasia" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="false" >
												
    <div class="modal-dialog modal-md" style="margin-top: 100px;">
      <div class="modal-content" style="margin-top: 115px;">
      
        <div class="modal-header">
          <h3>Asia</h3>
        </div>
        <div class="modal-body">
         
            <div class="row">
               
                
					{!! $data !!}							
                        
            </div>

              
             
          </div>
       
        <div class="modal-footer">
          <div class="col-sm-12">
           <button class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  									@if(count($asia)>1)
										<a href="javascript:;" data-toggle="modal" data-target="#myModalasia" style="color:#0ed526;">Read more</a>
										@endif
									</span>

@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#asia_modal">Add Asia</a></span>
@endif
</li>
<li>
<span class="mp-bio-label">Europe</span>
@if(count($europe))
							
									<span class="mp-bio-ans"> 
									@php $data=''; @endphp 
										@foreach($europe as $k => $row )
											@if($k < $limit)
												{{ $row->loking_value }} <span style="color: red; font-size: 19px;"> | </span>
											@endif
										@endforeach
												
		@foreach($europe as $row )										
	@php 
	$data .= '<div class="col-sm-4"><span class="fa fa-check check-color"></span> ' . $row->loking_value . '</div>';
@endphp
										@endforeach	
										<div class="modal fadeInDown" id="myModaleurope" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="false" >
												
    <div class="modal-dialog modal-md" style="margin-top: 100px;">
      <div class="modal-content" style="margin-top: 115px;">
      
        <div class="modal-header">
          <h3>Europe:</h3>
        </div>
        <div class="modal-body">
         
            <div class="row">
               
                
					{!! $data !!}							
                        
            </div>

              
             
          </div>
       
        <div class="modal-footer">
          <div class="col-sm-12">
           <button class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  @if(count($europe)>1)
										<a href="javascript:;" data-toggle="modal" data-target="#myModaleurope" style="color:#0ed526;">Read more</a>
										@endif
									</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#europe_modal">Add Europe</a></span>
@endif
</li>
<li>
<span class="mp-bio-label">North America:</span>
@if(count($north_america))
							
									<span class="mp-bio-ans"> 
									@php $data=''; @endphp 
										@foreach($north_america as $k => $row )
											@if($k < $limit)
												{{ $row->loking_value }} <span style="color: red; font-size: 19px;"> | </span>
											
												@endif
										@endforeach
		@foreach($north_america as $row )										
	@php 
	$data .= '<div class="col-sm-4"><span class="fa fa-check check-color"></span> ' . $row->loking_value . '</div>';
@endphp
										@endforeach	
										<div class="modal fadeInDown" id="myModalnorth" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="false" >
												
    <div class="modal-dialog modal-md" style="margin-top: 100px;">
      <div class="modal-content" style="margin-top: 115px;">
      
        <div class="modal-header">
          <h3>North america</h3>
        </div>
        <div class="modal-body">
         
            <div class="row">
               
                
					{!! $data !!}							
                        
            </div>

              
             
          </div>
       
        <div class="modal-footer">
          <div class="col-sm-12">
           <button class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  									@if(count($north_america)>1)
										<a href="javascript:;" data-toggle="modal" data-target="#myModalnorth" style="color:#0ed526;">Read more</a>
										@endif
									</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#north_america_modal">Add North America</a></span>
@endif
</li>
<li>
<span class="mp-bio-label">South America:</span>
@if(count($south_america))
							
									<span class="mp-bio-ans"> 
									@php $data=''; @endphp 
										@foreach($south_america as $k => $row )
											@if($k < $limit)
												{{ $row->loking_value }} <span style="color: red; font-size: 19px;"> | </span>
												@endif
										@endforeach
											
		@foreach($south_america as $row )										
												
	@php 
	$data .= '<div class="col-sm-4"><span class="fa fa-check check-color"></span> ' . $row->loking_value . '</div>';
@endphp
											
										@endforeach
										<div class="modal fadeInDown" id="south_america" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="false" >
												
    <div class="modal-dialog modal-md" style="margin-top: 100px;">
      <div class="modal-content" style="margin-top: 115px;">
      
        <div class="modal-header">
          <h3>South america</h3>
        </div>
        <div class="modal-body">
         
            <div class="row">
               
                
					{!! $data !!}							
                        
            </div>

              
             
          </div>
       
        <div class="modal-footer">
          <div class="col-sm-12">
           <button class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
  </div>							@if(count($south_america)>2)
										<a href="javascript:;" data-toggle="modal" data-target="#south_america" style="color:#0ed526;">Read more</a>
										@endif
									</span>
@else
<span class="mp-bio-ans"> <a href="javascript:;" data-toggle="modal" data-target="#south_america_modal">Add South America</a></span>
@endif

</li>
</ul>
</div>
<form method="post" action="{{ url('preferences-info') }}">
<div class="my-preference-form" style="display: none;">
<div class="form-group row">
<label for="name" class="col-sm-5 col-form-label">Religious History:</label>
<div class="col-sm-7">
<input type="text" readonly="" value="Religious History" name="religious_history" class="form-control">
<div class="input-group-append">
<a href="javascript:;" id="releghist" style="position: absolute;
    right: 24px;
    top: 9px;">
<span class="fa fa-arrow-down arrows" id="downrehis"></span>
<span class="fa fa-arrow-up" id="upreghis" style="display:none"></span>
      </a>
</div>
</div>
<div id="releghistpro" style="display:none;">
<div class="row">
<div class="col-sm-5"></div>
<div class="col-sm-4">
<a href="javascript:;" onclick="history_check()">Select All</a>
</div>
<div class="col-sm-3">
<a href="javascript:;" onclick="history_uncheck()">Clear All</a>
</div>
</div>

<div class="col-sm-2"></div>
<div class="col-sm-5">

<input type="checkbox" name="rel_history[]" class="history_select" @if(preg_match("/Muslim Since Birth/", "$religious_history")) checked="" @endif value="Muslim Since Birth"> Muslim Since Birth
</div>
<div class="col-sm-5">
<input type="checkbox" name="rel_history[]" class="history_select" @if(preg_match("/Revert Muslim/", "$religious_history")) checked="" @endif value="Revert Muslim"> Revert Muslim       
</div>
</div>
</div>

<div class="form-group row">
<label for="dob" class="col-sm-5 col-form-label">living with:</label>
<div class="col-sm-7">
<input type="text" readonly="" value="Living with" name="living_with" class="form-control">
<div class="input-group-append">
<a href="javascript:;" id="livelaws" style="position: absolute;
    right: 24px;
    top: 9px;">
<span class="fa fa-arrow-down arrows" id="downlivlaws"></span>
<span class="fa fa-arrow-up" id="uplivlaws" style="display:none"></span>
      </a>
</div>
</div>
<div id="livelawspro" style="display:none;">
<div class="row">
<div class="col-sm-5"></div>
<div class="col-sm-4">
<a href="javascript:;" onclick="living_check()">Select All</a>
</div>
<div class="col-sm-3">
<a href="javascript:;" onclick="living_uncheck()">Clear All</a>
</div>
</div>

<div class="col-sm-2"></div>
<div class="col-sm-5">

<input type="checkbox" name="living_law[]" class="living_select"  @if(preg_match("/Definitely Consider/", "$living_with")) checked="" @endif value="Definitely Consider"> Definitely Consider
</div>
<div class="col-sm-5">
<input type="checkbox" name="living_law[]" class="living_select"  @if(preg_match("/May Consider/", "$living_with")) checked="" @endif value="May Consider"> May Consider     
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">

<input type="checkbox" name="living_law[]" class="living_select"  @if(preg_match("/Would not Consider/", "$living_with")) checked="" @endif value="Would not Consider"> Would not Consider
</div>

</div>
</div>

<div class="form-group row">
<label for="gender" class="col-sm-5 col-form-label">Sect are you looking:</label>
<div class="col-sm-7">
<input type="text" readonly="" value="Sects" name="loking_sects" class="form-control">
<div class="input-group-append">
<a href="javascript:;" id="sectlook" style="position: absolute;
    right: 24px;
    top: 9px;">
<span class="fa fa-arrow-down arrows" id="downsect"></span>
<span class="fa fa-arrow-up" id="upsect" style="display:none"></span>
      </a>
</div>
</div>
<div id="sectlookpro" style="display:none;">
<div class="row">
<div class="col-sm-5"></div>
<div class="col-sm-4">
<a href="javascript:;" onclick="sect_check()">Select All</a>
</div>
<div class="col-sm-3">
<a href="javascript:;" onclick="sect_uncheck()">Clear All</a>
</div>
</div>

<div class="col-sm-2"></div>
<div class="col-sm-5">

<input type="checkbox" name="sects_type[]" class="sect_select"  @if(preg_match("/just Muslim/", "$sects")) checked="" @endif value="just Muslim"> just Muslim
</div>
<div class="col-sm-5">
<input type="checkbox" name="sects_type[]" class="sect_select"  @if(preg_match("/Sunni Muslim/", "$sects")) checked="" @endif value="Sunni Muslim"> Sunni Muslim    
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">

<input type="checkbox" name="sects_type[]" class="sect_select"  @if(preg_match("/Shia Muslim/", "$sects")) checked="" @endif value="Shia Muslim"> Shia Muslim
</div>
<div class="col-sm-5">
<input type="checkbox" name="sects_type[]" class="sect_select"  @if(preg_match("/Salafi/", "$sects")) checked="" @endif value="Salafi"> Salafi
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">

<input type="checkbox" name="sects_type[]" class="sect_select"  @if(preg_match("/Jam'at Islami/", "$sects")) checked="" @endif value="Jam'at Islami"> Jam'at Islami
</div>
<div class="col-sm-5">
<input type="checkbox" name="sects_type[]" class="sect_select"  @if(preg_match("/Thableegh Jamaath/", "$sects")) checked="" @endif value="Thableegh Jamaath"> Thableegh Jamaath   
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">

<input type="checkbox" name="sects_type[]" class="sect_select"  @if(preg_match("/Shafi'i/", "$sects")) checked="" @endif value="Shafi'i"> Shafi'i
</div>
<div class="col-sm-5">
<input type="checkbox" name="sects_type[]" class="sect_select"  @if(preg_match("/Hanafi/", "$sects")) checked="" @endif value="Hanafi"> Hanafi
</div>

<div class="col-sm-2"></div>
<div class="col-sm-5">

<input type="checkbox" name="sects_type[]" class="sect_select"  @if(preg_match("/Hanabali/", "$sects")) checked="" @endif value="Hanabali"> Hanabali
</div>
<div class="col-sm-5">
<input type="checkbox" name="sects_type[]" class="sect_select"  @if(preg_match("/Maliki/", "$sects")) checked="" @endif value="Maliki"> Maliki  
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">

<input type="checkbox" name="sects_type[]" class="sect_select"  @if(preg_match("/Sayyid/", "$sects")) checked="" @endif value="Sayyid"> Sayyid
</div>
<div class="col-sm-5">
<input type="checkbox" name="sects_type[]" class="sect_select"  @if(preg_match("/Urdu Muslim/", "$sects")) checked="" @endif value="Urdu Muslim"> Urdu Muslim
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="sects_type[]" class="sect_select"  @if(preg_match("/Bohra'i/", "$sects")) checked="" @endif value="Bohra'i"> Bohra'i
</div>
<div class="col-sm-5">
<input type="checkbox" name="sects_type[]" class="sect_select"  @if(preg_match("/Pathan/", "$sects")) checked="" @endif value="Pathan"> Pathan  
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">

<input type="checkbox" name="sects_type[]" class="sect_select"  @if(preg_match("/Sufism/", "$sects")) checked="" @endif value="Sufism"> Sufism
</div>
</div>
</div>
<div class="form-group row">
<label for="gender" class="col-sm-5 col-form-label">Pray:</label>
<div class="col-sm-7">
<input type="text" readonly="" value="Pray" name="loking_pray" class="form-control">
<div class="input-group-append">
<a href="javascript:;" id="pray" style="position: absolute;
    right: 24px;
    top: 9px;">
<span class="fa fa-arrow-down arrows" id="downpray"></span>
<span class="fa fa-arrow-up" id="uppray" style="display:none"></span>
      </a>
</div>
</div>
<div id="praypro" style="display:none;">
<div class="row">
<div class="col-sm-5"></div>
<div class="col-sm-4">
<a href="javascript:;" onclick="pray_check()">Select All</a>
</div>
<div class="col-sm-3">
<a href="javascript:;" onclick="pray_uncheck()">Clear All</a>
</div>
</div>


<div class="col-sm-3">

<input type="checkbox" name="pray_type[]" class="pray_select"  @if(preg_match("/Always pray/", "$pray")) checked="" @endif value="Always pray"> Always pray
</div>
<div class="col-sm-9">
<input type="checkbox" name="pray_type[]" class="pray_select"  @if(preg_match("/Rarely miss a prayer and make Qadah Salah/", "$pray")) checked="" @endif value="Rarely miss a prayer and make Qadah Salah"> Rarely miss a prayer and make Qadah Salah   
</div>

<div class="col-sm-8">

<input type="checkbox" name="pray_type[]" class="pray_select"  @if(preg_match("/Sometimes miss Fajr and make Qadah Salah/", "$pray")) checked="" @endif value="Sometimes miss Fajr and make Qadah Salah"> Sometimes miss Fajr and make Qadah Salah
</div>
<div class="col-sm-4">
<input type="checkbox" name="pray_type[]" class="pray_select"  @if(preg_match("/Sometimes pray/", "$pray")) checked="" @endif value="Sometimes pray"> Sometimes pray
</div>

<div class="col-sm-5">

<input type="checkbox" name="pray_type[]" class="pray_select"  @if(preg_match("/Only pray before exams/", "$pray")) checked="" @endif value="Only pray before exams"> Only pray before exams
</div>
<div class="col-sm-5">
<input type="checkbox" name="pray_type[]" class="pray_select"  @if(preg_match("/Eid Salah only/", "$pray")) checked="" @endif value="Eid Salah only"> Eid Salah only   
</div>

<div class="col-sm-5">

<input type="checkbox" name="pray_type[]" class="pray_select"  @if(preg_match("/Intend to start praying/", "$pray")) checked="" @endif value="Intend to start praying"> Intend to start praying
</div>
<div class="col-sm-5">
<input type="checkbox" name="pray_type[]" class="pray_select"  @if(preg_match("/Don't pray/", "$pray")) checked="" @endif value="Don't pray"> Don't pray
</div>
</div>
</div>
<div class="form-group row">
<label for="gender" class="col-sm-5 col-form-label">Has Children:</label>
<div class="col-sm-7">
<input type="text" readonly="" value="Has Children" name="has_child" class="form-control">
<div class="input-group-append">
<a href="javascript:;" id="hasch" style="position: absolute;
    right: 24px;
    top: 9px;">
<span class="fa fa-arrow-down arrows" id="downhaschild"></span>
<span class="fa fa-arrow-up" id="uphaschild" style="display:none"></span>
      </a>
</div>
</div>
<div id="haschpro" style="display:none;">
<div class="row">
<div class="col-sm-5"></div>
<div class="col-sm-4">
<a href="javascript:;" onclick="has_check()">Select All</a>
</div>
<div class="col-sm-3">
<a href="javascript:;" onclick="has_uncheck()">Clear All</a>
</div>
</div>


<div class="col-sm-2"></div>
<div class="col-sm-5">

<input type="checkbox" name="child_count[]" class="has_select"  @if(preg_match("/None/", "$has_children")) checked="" @endif value="None"> None
</div>
<div class="col-sm-5">
<input type="checkbox" name="child_count[]" class="has_select"  @if(preg_match("/one/", "$has_children")) checked="" @endif value="one"> one   
</div>

<div class="col-sm-2"></div>
<div class="col-sm-5">

<input type="checkbox" name="child_count[]" class="has_select"  @if(preg_match("/two/", "$has_children")) checked="" @endif value="two"> two
</div>
<div class="col-sm-5">
<input type="checkbox" name="child_count[]" class="has_select"  @if(preg_match("/three or more/", "$has_children")) checked="" @endif value="three or more"> three or more   
</div>
</div>
</div>

<div class="form-group row">
<label for="gender" class="col-sm-5 col-form-label">Looking for body type:</label>
<div class="col-sm-7">
<input type="text" readonly="" value="Body Type" name="loking_body_type" class="form-control">
<div class="input-group-append">
<a href="javascript:;" id="bodut" style="position: absolute;
    right: 24px;
    top: 9px;">
<span class="fa fa-arrow-down arrows" id="downbdyty"></span>
<span class="fa fa-arrow-up" id="upbdytyp" style="display:none"></span>
      </a>
</div>
</div>
<div id="bodutpro" style="display:none;">
<div class="row">
<div class="col-sm-5"></div>
<div class="col-sm-4">
<a href="javascript:;" onclick="body_check()">Select All</a>
</div>
<div class="col-sm-3">
<a href="javascript:;" onclick="body_uncheck()">Clear All</a>
</div>
</div>


<div class="col-sm-2"></div>
<div class="col-sm-5">

<input type="checkbox" name="loking_body[]" class="body_select" @if(preg_match("/Slim Skinny/", "$loking_body_type")) checked="" @endif value="Slim/Skinny"> Slim/Skinny
</div>
<div class="col-sm-5">
<input type="checkbox" name="loking_body[]" class="body_select" @if(preg_match("/Average/", "$loking_body_type")) checked="" @endif value="Average"> Average  
</div>

<div class="col-sm-2"></div>
<div class="col-sm-5">

<input type="checkbox" name="loking_body[]" class="body_select" @if(preg_match("/Athletic/", "$loking_body_type")) checked="" @endif value="Athletic"> Athletic
</div>
<div class="col-sm-5">
<input type="checkbox" name="loking_body[]" class="body_select" @if(preg_match("/Muscular/", "$loking_body_type")) checked="" @endif value="Muscular"> Muscular   
</div>


<div class="col-sm-2"></div>
<div class="col-sm-5">

<input type="checkbox" name="loking_body[]" class="body_select" @if(preg_match("/A few extra pounds/", "$loking_body_type")) checked="" @endif value="A few extra pounds"> A few extra pounds
</div>
<div class="col-sm-5">
<input type="checkbox" name="loking_body[]" class="body_select" @if(preg_match("/Heavyset/", "$loking_body_type")) checked="" @endif value="Heavyset"> Heavyset 
</div>

</div>
</div>

<div class="form-group row">
<label for="gender" class="col-sm-5 col-form-label">Africa:</label>
<div class="col-sm-7">
<input type="text" readonly="" value="Africa" name="affrica" class="form-control">
<div class="input-group-append">
<a href="javascript:;" id="affrica" style="position: absolute;
    right: 24px;
    top: 9px;">
<span class="fa fa-arrow-down arrows" id="upafr"></span>
<span class="fa fa-arrow-up" id="upbdytyp" style="display:none"></span>
      </a>
</div>
</div>
<div id="allaffrica" style="display:none;">
<div class="row">
<div class="col-sm-5"></div>
<div class="col-sm-4">
<a href="javascript:;" onclick="africa_check()">Select All</a>
</div>
<div class="col-sm-3">
<a href="javascript:;" onclick="africka_uncheck()">Clear All</a>
</div>
</div>


<div class="col-sm-3"></div>
<div class="col-sm-3">
<input type="checkbox" @if (preg_match("/Algeria/", "$africa")) checked="" @endif value="Algeria" name="africa_country[]" class="africa_select"> Algeria 
</div>
<div class="col-sm-3">
<input type="checkbox" @if (preg_match("/Angola/", "$africa")) checked="" @endif value="Angola" name="africa_country[]" class="africa_select"> Angola 
</div>
{{-- <div class="col-sm-6"></div> --}}
<div class="col-sm-3">
<input type="checkbox" @if (preg_match("/Benin/", "$africa")) checked="" @endif value="Benin" name="africa_country[]" class="africa_select"> Benin 
</div>
<div class="col-sm-3"></div>
<div class="col-sm-3">
<input type="checkbox" @if (preg_match("/Botswana/", "$africa")) checked="" @endif value="Botswana" name="africa_country[]" class="africa_select"> Botswana
</div>
{{-- <div class="col-sm-6"></div> --}}
<div class="col-sm-3">
<input type="checkbox" @if (preg_match("/Burkina Faso/", "$africa")) checked="" @endif value="Burkina Faso" name="africa_country[]" class="africa_select"> Burkina Faso <br>
</div>
<div class="col-sm-3">
<input type="checkbox" @if (preg_match("/Burundi/", "$africa")) checked="" @endif value="Burundi" name="africa_country[]" class="africa_select"> Burundi
</div>
<div class="col-sm-3"></div>
<div class="col-sm-3">
<input type="checkbox" @if (preg_match("/Cameroon/", "$africa")) checked="" @endif value="Cameroon" name="africa_country[]" class="africa_select"> Cameroon
</div>
<div class="col-sm-3">
<input type="checkbox" @if (preg_match("/Cape Verde/", "$africa")) checked="" @endif value="Cape Verde" name="africa_country[]" class="africa_select"> Cape Verde 
</div>
{{-- <div class="col-sm-6"></div> --}}
<div class="col-sm-3">
<input type="checkbox" @if (preg_match("/Central African Rep/", "$africa")) checked="" @endif value="Central African Rep" name="africa_country[]" class="africa_select"> Central African Rep
</div>
<div class="col-sm-3"></div>
<div class="col-sm-3">
<input type="checkbox" @if (preg_match("/Chad/", "$africa")) checked="" @endif value="Chad" name="africa_country[]" class="africa_select"> Chad 
</div>
{{-- <div class="col-sm-6"></div> --}}
<div class="col-sm-3">
<input type="checkbox" @if (preg_match("/Comoros/", "$africa")) checked="" @endif value="Comoros" name="africa_country[]" class="africa_select"> Comoros
</div>
<div class="col-sm-3">
<input type="checkbox" @if (preg_match("/Congo, DR/", "$africa")) checked="" @endif value="Congo, DR" name="africa_country[]" class="africa_select"> Congo, DR
</div>
<div class="col-sm-3"></div>
<div class="col-sm-3">
<input type="checkbox" @if (preg_match("/Congo, Rep/", "$africa")) checked="" @endif value="Congo, Rep" name="africa_country[]" class="africa_select"> Congo, Rep.
</div>
<div class="col-sm-3">
<input type="checkbox" @if (preg_match("/Cote d'Ivoire/", "$africa")) checked="" @endif value="Cote d'Ivoire" name="africa_country[]" class="africa_select"> Cote d'Ivoire <br>
</div>
{{-- <div class="col-sm-6"></div> --}}
<div class="col-sm-3">
<input type="checkbox" @if (preg_match("/Djibouti/", "$africa")) checked="" @endif value="Djibouti" name="africa_country[]" class="africa_select"> Djibouti
</div>
<div class="col-sm-3"></div>
<div class="col-sm-3">
<input type="checkbox" @if (preg_match("/South Africa/", "$africa")) checked="" @endif value="South Africa" name="africa_country[]" class="africa_select"> South Africa
</div>
{{-- <div class="col-sm-6"></div> --}}
<div class="col-sm-3">
<input type="checkbox" @if (preg_match("/Sudan/", "$africa")) checked="" @endif value="Sudan" name="africa_country[]" class="africa_select"> Sudan
</div>
<div class="col-sm-3">
<input type="checkbox" @if (preg_match("/Swaziland/", "$africa")) checked="" @endif value="Swaziland" name="africa_country[]" class="africa_select"> Swaziland
</div>
<div class="col-sm-3"></div>
{{-- <div class="col-sm-6"></div> --}}
<div class="col-sm-3">
<input type="checkbox" @if (preg_match("/Zambia/", "$africa")) checked="" @endif value="Zambia" name="africa_country[]" class="africa_select"> Zambia
</div>
<div class="col-sm-3">
<input type="checkbox" @if (preg_match("/Egypt/", "$africa")) checked="" @endif value="Egypt" name="africa_country[]" class="africa_select"> Egypt
</div>
{{-- <div class="col-sm-6"></div> --}}
<div class="col-sm-3">
<input type="checkbox" name="africa_country[]" class="africa_select" value="Equatorial Guinea"> Equatorial Guinea 
</div>
<div class="col-sm-3"></div>
<div class="col-sm-3">
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Eritrea/", "$africa")) checked="" @endif value="Eritrea"> Eritrea 
</div>
{{-- <div class="col-sm-6"></div> --}}
<div class="col-sm-3">
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Ethiopia/", "$africa")) checked="" @endif value="Ethiopia"> Ethiopia 
</div>
<div class="col-sm-3">
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Gabon/", "$africa")) checked="" @endif value="Gabon"> Gabon 
</div>
<div class="col-sm-3"></div>
<div class="col-sm-3">
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Gambia/", "$africa")) checked="" @endif value="Gambia"> Gambia 
</div>
<div class="col-sm-3">
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Ghana/", "$africa")) checked="" @endif value="Ghana"> Ghana 
</div>
<div class="col-sm-3">
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Guinea/", "$africa")) checked="" @endif value="Guinea"> Guinea
</div>
<div class="col-sm-3"></div>
<div class="col-sm-3"> 
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Guinea-Bissau/", "$africa")) checked="" @endif value="Guinea-Bissau"> Guinea-Bissau 
</div>
<div class="col-sm-3"> 
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Kenya/", "$africa")) checked="" @endif value="Kenya"> Kenya 
</div>
<div class="col-sm-3"> 
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Lesotho/", "$africa")) checked="" @endif value="Lesotho"> Lesotho 
</div>
<div class="col-sm-3"> </div>
<div class="col-sm-3"> 
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Liberia/", "$africa")) checked="" @endif value="Liberia"> Liberia 
</div>
<div class="col-sm-3"> </div>
<div class="col-sm-3">

<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Libya/", "$africa")) checked="" @endif value="Libya"> Libya 
</div>
<div class="col-sm-3"> 
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Madagascar/", "$africa")) checked="" @endif value="Madagascar"> Madagascar 
</div>
{{-- <div class="col-sm-3"> </div> --}}
<div class="col-sm-3"> 
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Malawi/", "$africa")) checked="" @endif value="Malawi"> Malawi 
</div>
<div class="col-sm-3"> </div>
<div class="col-sm-3"> 
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Sierra Leone/", "$africa")) checked="" @endif value="Sierra Leone"> Sierra Leone 
</div>
<div class="col-sm-3"> 
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Somalia/", "$africa")) checked="" @endif value="Somalia"> Somalia 
</div>
{{-- <div class="col-sm-3"> </div> --}}
<div class="col-sm-3"> 
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Tunisia/", "$africa")) checked="" @endif value="Tunisia"> Tunisia 
</div>
<div class="col-sm-3"> </div>
<div class="col-sm-3"> 
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Uganda/", "$africa")) checked="" @endif value="Uganda"> Uganda 
</div>
<div class="col-sm-3"> 
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Western Sahara/", "$africa")) checked="" @endif value="Western Sahara"> Western Sahara 
</div>
{{-- <div class="col-sm-3"> </div> --}}
<div class="col-sm-3"> 
<input type="checkbox" name="africa_country[]" class="africa_select"  @if (preg_match("/Mali/", "$africa")) checked="" @endif value="Mali"> Mali 
</div>
<div class="col-sm-3"> </div>
<div class="col-sm-3"> 
<input type="checkbox" name="africa_country[]" class="africa_select"  @if (preg_match("/Mauritania/", "$africa")) checked="" @endif value="Mauritania"> Mauritania 
</div>
<div class="col-sm-3"> </div>
<div class="col-sm-3"> 
<input type="checkbox" name="africa_country[]" class="africa_select"  @if (preg_match("/Mauritius/", "$africa")) checked="" @endif value="Mauritius"> Mauritius 
</div>

<div class="col-sm-3"> 
<input type="checkbox" name="africa_country[]" class="africa_select"  @if (preg_match("/Mayotte/", "$africa")) checked="" @endif value="Mayotte"> Mayotte 
</div>
{{-- <div class="col-sm-3"> </div> --}}
<div class="col-sm-3"> 
<input type="checkbox" name="africa_country[]" class="africa_select"  @if (preg_match("/Morocco/", "$africa")) checked="" @endif value="Morocco"> Morocco 
</div>
<div class="col-sm-3"> </div>
<div class="col-sm-3"> 
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Mozambique/", "$africa")) checked="" @endif  value="Mozambique"> Mozambique 
</div>

<div class="col-sm-3"> 
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Namibia/", "$africa")) checked="" @endif value="Namibia"> Namibia </div>
{{-- <div class="col-sm-3"> </div> --}}
<div class="col-sm-3"> 

<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Niger/", "$africa")) checked="" @endif value="Niger"> Niger 
</div>
<div class="col-sm-3"> </div>
<div class="col-sm-3"> 
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Nigeria/", "$africa")) checked="" @endif value="Nigeria"> Nigeria 
</div>

<div class="col-sm-3"> 
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Reunion/", "$africa")) checked="" @endif value="Reunion"> Reunion 
</div>
{{-- <div class="col-sm-3"> </div> --}}
<div class="col-sm-3"> 
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Rwanda/", "$africa")) checked="" @endif value="Rwanda"> Rwanda 
</div>
<div class="col-sm-3"> </div>
<div class="col-sm-3"> 
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Saint Helena/", "$africa")) checked="" @endif value="Saint Helena"> Saint Helena 
</div>

<div class="col-sm-3"> 
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Sao Tome and Principe/", "$africa")) checked="" @endif value="Sao Tome and Principe"> Sao Tome and Principe 
</div>
{{-- <div class="col-sm-3"> </div> --}}
<div class="col-sm-3"> 
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Senegal/", "$africa")) checked="" @endif value="Senegal"> Senegal 
</div>
<div class="col-sm-3"> 
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Seychelles/", "$africa")) checked="" @endif value="Seychelles"> Seychelles 
</div>
<div class="col-sm-3"> </div>

<div class="col-sm-3"> 
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Sierra Leone/", "$africa")) checked="" @endif value="Sierra Leone"> Sierra Leone 
</div>
{{-- <div class="col-sm-3"> </div> --}}
<div class="col-sm-3"> 
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Somalia/", "$africa")) checked="" @endif value="Somalia"> Somalia 
</div>
<div class="col-sm-3"> </div>
<div class="col-sm-3"> 
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Tanzania/", "$africa")) checked="" @endif value="Tanzania"> Tanzania 
</div>
<div class="col-sm-3"> </div>
<div class="col-sm-3"> 
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Togo/", "$africa")) checked="" @endif value="Togo"> Togo 
</div>
{{-- <div class="col-sm-3"></div> --}}
<div class="col-sm-3"> 
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Zimbabwe/", "$africa")) checked="" @endif value="Zimbabwe"> Zimbabwe 
</div>
{{-- </div> --}}
</div>
</div>

<div class="form-group row">
<label for="gender" class="col-sm-5 col-form-label">Antarctica:</label>
<div class="col-sm-7">
<input type="text" readonly="" value="Antarctica" name="antarctica" class="form-control">
<div class="input-group-append">
<a href="javascript:;" id="antar" style="position: absolute;
    right: 24px;
    top: 9px;">
<span class="fa fa-arrow-down arrows" id="downantar"></span>
<span class="fa fa-arrow-up" id="upantar" style="display:none"></span>
      </a>
</div>
</div>
<div id="Antarcticacity" style="display:none;">
<div class="row">
<div class="col-sm-5"></div>
<div class="col-sm-4">
<a href="javascript:;" onclick="antarctica_check()">Select All</a>
</div>
<div class="col-sm-3">
<a href="javascript:;" onclick="antarctica_uncheck()">Clear All</a>
</div>
</div>


<div class="col-sm-2"> </div>
<div class="col-sm-5">
<input type="checkbox" name="antarctica_country[]" class="antarctica_select" @if (preg_match("/Bouvet Island/", "$antarctica")) checked="" @endif value="Bouvet Island"> Bouvet Island
</div>
<div class="col-sm-5">
<input type="checkbox" name="antarctica_country[]" class="antarctica_select" @if (preg_match("/French Southern Territ/", "$antarctica")) checked="" @endif value="French Southern Territ"> French Southern Territ. 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="antarctica_country[]" class="antarctica_select" @if (preg_match("/Heard Island/", "$antarctica")) checked="" @endif value="Heard Island"> Heard Island 
</div>
{{-- <div class="col-sm-3"> </div> --}}
<div class="col-sm-5">
<input type="checkbox" name="antarctica_country[]" class="antarctica_select" @if (preg_match("/South Georgia/", "$antarctica")) checked="" @endif value="South Georgia"> South Georgia 
{{-- </div> --}}

</div>
</div>
</div>

<div class="form-group row">
<label for="gender" class="col-sm-5 col-form-label">Europe:</label>
<div class="col-sm-7">
<input type="text" readonly="" value="Europe" name="europe" class="form-control">
<div class="input-group-append">
<a href="javascript:;" id="europ" style="position: absolute;
    right: 24px;
    top: 9px;">
<span class="fa fa-arrow-down arrows" id="downeurop"></span>
<span class="fa fa-arrow-up" id="upeurop" style="display:none"></span>
      </a>
</div>
</div>
<div id="europcity" style="display:none;">
<div class="row">
<div class="col-sm-5"></div>
<div class="col-sm-4">
<a href="javascript:;" onclick="europ_check()">Select All</a>
</div>
<div class="col-sm-3">
<a href="javascript:;" onclick="europ_uncheck()">Clear All</a>
</div>
</div>


<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="europe_country[]" class="europ_select" value="Aland Islands"> Aland Islands 
</div>
<div class="col-sm-5">
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Albania/", "$europe")) checked="" @endif value="Albania"> Albania 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Andorra/", "$europe")) checked="" @endif value="Andorra"> Andorra
</div> 
<div class="col-sm-5">
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Austria/", "$europe")) checked="" @endif value="Austria"> Austria 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="europe_country[]" class="europ_select" @if (preg_match("/Belarus/", "$europe")) checked="" @endif value="Belarus"> Belarus 
</div>

<div class="col-sm-5">
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Belgium/", "$europe")) checked="" @endif value="Belgium"> Belgium 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Bosnia and Herzegovina/", "$europe")) checked="" @endif value="Bosnia and Herzegovina"> Bosnia and Herzegovina 
</div>
<div class="col-sm-5">
<input type="checkbox" name="europe_country[]" class="europ_select" @if (preg_match("/Bulgaria/", "$europe")) checked="" @endif value="Bulgaria"> Bulgaria 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Croatia/", "$europe")) checked="" @endif value="Croatia"> Croatia 
</div>

<div class="col-sm-5">
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Czech Republic/", "$europe")) checked="" @endif value="Czech Republic"> Czech Republic 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Denmark/", "$europe")) checked="" @endif value="Denmark"> Denmark 
</div>
<div class="col-sm-5">
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Estonia/", "$europe")) checked="" @endif value="Estonia"> Estonia 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Faroe Islands/", "$europe")) checked="" @endif value="Faroe Islands"> Faroe Islands 
</div>
<div class="col-sm-5">
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Finland/", "$europe")) checked="" @endif value="Finland"> Finland 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Yemen/", "$europe")) checked="" @endif value="France"> France 
</div>

<div class="col-sm-5">
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Germany/", "$europe")) checked="" @endif value="Germany"> Germany 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Gibraltar/", "$europe")) checked="" @endif value="Gibraltar"> Gibraltar 
</div>

<div class="col-sm-5">
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Greece/", "$europe")) checked="" @endif value="Greece"> Greece 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Guernsey/", "$europe")) checked="" @endif value="Guernsey"> Guernsey 
</div>

<div class="col-sm-5">
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Hungary/", "$europe")) checked="" @endif value="Hungary"> Hungary 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Iceland/", "$europe")) checked="" @endif value="Iceland"> Iceland 
</div>
<div class="col-sm-5">
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Ireland/", "$europe")) checked="" @endif value="Ireland"> Ireland 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Isle of Man/", "$europe")) checked="" @endif value="Isle of Man"> Isle of Man 
</div>

<div class="col-sm-5">
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Italy/", "$europe")) checked="" @endif value="Italy"> Italy 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Jersey/", "$europe")) checked="" @endif value="Jersey"> Jersey 
</div>

<div class="col-sm-5">
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Kosovo/", "$europe")) checked="" @endif value="Kosovo"> Kosovo 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="europe_country[]" class="europ_select" value="Latvia"> Latvia 
</div>

<div class="col-sm-5">
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Liechtenstein/", "$europe")) checked="" @endif value="Liechtenstein"> Liechtenstein
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Lithuania/", "$europe")) checked="" @endif value="Lithuania"> Lithuania 
</div>

<div class="col-sm-5">
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Luxembourg/", "$europe")) checked="" @endif value="Luxembourg"> Luxembourg 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Macedonia/", "$europe")) checked="" @endif value="Macedonia"> Macedonia 
</div>

<div class="col-sm-5">
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Malta/", "$europe")) checked="" @endif value="Malta"> Malta 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Monaco/", "$europe")) checked="" @endif value="Monaco"> Monaco 
</div>
<div class="col-sm-5">
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Montenegro/", "$europe")) checked="" @endif value="Montenegro"> Montenegro 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Netherlands/", "$europe")) checked="" @endif value="Netherlands"> Netherlands 
</div>
<div class="col-sm-5">
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Norway/", "$europe")) checked="" @endif  value="Norway"> Norway 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Poland/", "$europe")) checked="" @endif  value="Poland"> Poland 
</div>
<div class="col-sm-5">
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Portugal/", "$europe")) checked="" @endif  value="Portugal"> Portugal 
</div>

<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Romania/", "$europe")) checked="" @endif  value="Romania"> Romania 
</div>
<div class="col-sm-5">
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Russian Federation/", "$europe")) checked="" @endif  value="Russian Federation">Russian Federation
</div>

<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/San Marino/", "$europe")) checked="" @endif value="San Marino"> San Marino 
</div>
<div class="col-sm-5">
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Serbia/", "$europe")) checked="" @endif value="Serbia"> Serbia
</div>

<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Slovakia/", "$europe")) checked="" @endif value="Slovakia"> Slovakia 
</div>
<div class="col-sm-5">
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Slovenia/", "$europe")) checked="" @endif value="Slovenia"> Slovenia 
</div>

<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Spain/", "$europe")) checked="" @endif value="Spain"> Spain 
</div>
<div class="col-sm-5">
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Svalbard and Jan Mayen/", "$europe")) checked="" @endif value="Svalbard and Jan Mayen"> Svalbard and Jan Mayen Is 
</div>

<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Sweden/", "$europe")) checked="" @endif value="Sweden"> Sweden 
</div>
<div class="col-sm-5">
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Ukraine/", "$europe")) checked="" @endif value="Ukraine"> Ukraine 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="europe_country[]" class="europ_select" @if (preg_match("/United Kingdom/", "$europe")) checked="" @endif value="United Kingdom"> United Kingdom
</div>
{{-- <div class="col-sm-2"></div> --}}
<div class="col-sm-5">
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Vatican City/", "$europe")) checked="" @endif value="Vatican City"> Vatican City 
</div>

{{-- </div> --}}
</div>
</div>

<div class="form-group row">
<label for="gender" class="col-sm-5 col-form-label">Australasia:</label>
<div class="col-sm-7">
<input type="text" readonly="" value="Australasia" name="australasia" class="form-control">
<div class="input-group-append">
<a href="javascript:;" id="austrailia" style="position: absolute;
    right: 24px;
    top: 9px;">
<span class="fa fa-arrow-down arrows" id="downaurt"></span>
<span class="fa fa-arrow-up" id="upaust" style="display:none"></span>
      </a>
</div>
</div>
<div id="austrailiacity" style="display:none;">
<div class="row">
<div class="col-sm-5"></div>
<div class="col-sm-4">
<a href="javascript:;" onclick="australasia_check()">Select All</a>
</div>
<div class="col-sm-3">
<a href="javascript:;" onclick="australasia_uncheck()">Clear All</a>
</div>
</div>


<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/American Samoa/", "$australasia")) checked="" @endif value="American Samoa"> American Samoa 
</div>
<div class="col-sm-5">
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/Australia/", "$australasia")) checked="" @endif value="Australia"> Australia 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/Cook Islands/", "$australasia")) checked="" @endif value="Cook Islands"> Cook Islands 
</div>

<div class="col-sm-5">
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/Fiji/", "$australasia")) checked="" @endif value="Fiji"> Fiji 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/French Polynesia/", "$australasia")) checked="" @endif value="French Polynesia"> French Polynesia 
</div>

<div class="col-sm-5">
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/Guam/", "$australasia")) checked="" @endif value="Guam"> Guam 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/Kiribati/", "$australasia")) checked="" @endif value="Kiribati"> Kiribati 
</div>

<div class="col-sm-5">
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/Marshall Islands/", "$australasia")) checked="" @endif value="Marshall Islands"> Marshall Islands 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/Micronesia/", "$australasia")) checked="" @endif value="Micronesia"> Micronesia 
</div>
<div class="col-sm-5">
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/Nauru/", "$australasia")) checked="" @endif value="Nauru"> Nauru 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/New Caledonia/", "$australasia")) checked="" @endif value="New Caledonia"> New Caledonia 
</div>

<div class="col-sm-5">
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/New Zealand/", "$australasia")) checked="" @endif value="New Zealand"> New Zealand 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/Niue/", "$australasia")) checked="" @endif value="Niue"> Niue 
</div>
<div class="col-sm-5">
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/Norfolk Island/", "$australasia")) checked="" @endif value="Norfolk Island"> Norfolk Island 
          
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/Northern Mariana/", "$australasia")) checked="" @endif value="Northern Mariana"> Northern Mariana Is 
</div>

<div class="col-sm-5">
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/Palau/", "$australasia")) checked="" @endif value="Palau"> Palau 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/Papua New Guinea/", "$australasia")) checked="" @endif value="Papua New Guinea"> Papua New Guinea 
</div>
<div class="col-sm-5">
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/Pitcairn Islands/", "$australasia")) checked="" @endif value="Pitcairn Islands"> Pitcairn Islands 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/Samoa/", "$australasia")) checked="" @endif value="Samoa"> Samoa 
</div>
<div class="col-sm-5">
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/Solomon Islands/", "$australasia")) checked="" @endif value="Solomon Islands"> Solomon Islands 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/Tokelau/", "$australasia")) checked="" @endif value="Tokelau"> Tokelau 
</div>

<div class="col-sm-5">
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/Tonga/", "$australasia")) checked="" @endif value="Tonga"> Tonga 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/Tuvalu/", "$australasia")) checked="" @endif value="Tuvalu"> Tuvalu 
</div>

<div class="col-sm-5">
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/US Minor Outlying I/", "$australasia")) checked="" @endif value="US Minor Outlying I">US Minor Outlying
</div> 
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/Vanuatu/", "$australasia")) checked="" @endif value="Vanuatu"> Vanuatu 
</div>

<div class="col-sm-5">
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/Wallis and Futuna/", "$australasia")) checked="" @endif value="Wallis and Futuna"> Wallis and Futuna
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">       
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/Turks and Caicos Is/", "$australasia")) checked="" @endif value="Turks and Caicos Is"> Turks and Caicos Is 
</div>
<div class="col-sm-5">
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/US Virgin Islands/", "$australasia")) checked="" @endif value="US Virgin Islands"> US Virgin Islands 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/Portugal/", "$australasia")) checked="" @endif value="Portugal"> Portugal 
</div>
<div class="col-sm-5">
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/Romania/", "$australasia")) checked="" @endif value="Romania"> Romania 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/USA/", "$australasia")) checked="" @endif value="USA"> USA

</div>
</div>
</div>
<div class="form-group row">
<label for="gender" class="col-sm-5 col-form-label">Asia:</label>
<div class="col-sm-7">
<input type="text" readonly="" value="Asia" name="asia" class="form-control">
<div class="input-group-append">
<a href="javascript:;" id="aisa" style="position: absolute;
    right: 24px;
    top: 9px;">
<span class="fa fa-arrow-down arrows" id="downasia"></span>
<span class="fa fa-arrow-up" id="upasia" style="display:none"></span>
      </a>
</div>
</div>
<div id="aisacity" style="display:none;">
<div class="row">
<div class="col-sm-5"></div>
<div class="col-sm-4">
<a href="javascript:;" onclick="asia_check()">Select All</a>
</div>
<div class="col-sm-3">
<a href="javascript:;" onclick="asia_uncheck()">Clear All</a>
</div>
</div>


<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="asia_country[]" class="asia_select" @if (preg_match("/Afghanistan/", "$asia")) checked="" @endif value="Afghanistan"> Afghanistan
</div>

<div class="col-sm-5">
<input type="checkbox" name="asia_country[]" class="asia_select" @if (preg_match("/Armenia/", "$asia")) checked="" @endif value="Armenia"> Armenia
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="asia_country[]" class="asia_select" @if (preg_match("/Azerbaijan/", "$asia")) checked="" @endif value="Azerbaijan"> Azerbaijan
</div>

<div class="col-sm-5">
<input type="checkbox" name="asia_country[]" class="asia_select" @if (preg_match("/Bahrain/", "$asia")) checked="" @endif value="Bahrain"> Bahrain
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="asia_country[]" class="asia_select" @if (preg_match("/Bangladesh/", "$asia")) checked="" @endif value="Bangladesh"> Bangladesh
</div>
<div class="col-sm-5">
<input type="checkbox" name="asia_country[]" class="asia_select" @if (preg_match("/Bhutan/", "$asia")) checked="" @endif value="Bhutan"> Bhutan
</div>

<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="asia_country[]" class="asia_select" @if (preg_match("/British Ind/", "$asia")) checked="" @endif value="British Ind"> British Ind.
</div>
<div class="col-sm-5"> 
<input type="checkbox" name="asia_country[]" class="asia_select" @if (preg_match("/Brunei Darussalam/", "$asia")) checked="" @endif value="Brunei Darussalam"> Brunei Darussalam
</div>

<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="asia_country[]" class="asia_select" @if (preg_match("/Cambodia/", "$asia")) checked="" @endif value="Cambodia"> Cambodia
</div>

<div class="col-sm-5">
<input type="checkbox" name="asia_country[]" class="asia_select" @if (preg_match("/China/", "$asia")) checked="" @endif value="China"> China
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="asia_country[]" class="asia_select" @if (preg_match("/Christmas Island/", "$asia")) checked="" @endif value="Christmas Island"> Christmas Island
</div>

<div class="col-sm-5">
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Cocos/", "$asia")) checked="" @endif value="Cocos"> Cocos
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Cyprus/", "$asia")) checked="" @endif value="Cyprus"> Cyprus
</div>

<div class="col-sm-5">
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Georgia/", "$asia")) checked="" @endif value="Georgia"> Georgia
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Hong Kong/", "$asia")) checked="" @endif value="Hong Kong"> Hong Kong
</div>

<div class="col-sm-5">
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/India/", "$asia")) checked="" @endif value="India"> India
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Indonesia/", "$asia")) checked="" @endif value="Indonesia"> Indonesia
</div>

<div class="col-sm-5">
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Iran/", "$asia")) checked="" @endif value="Iran"> Iran
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Iraq/", "$asia")) checked="" @endif value="Iraq"> Iraq
</div>

<div class="col-sm-5">
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Israel/", "$asia")) checked="" @endif value="Israel"> Israel
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Japan/", "$asia")) checked="" @endif value="Japan"> Japan
</div>
<div class="col-sm-5">
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Kazakhstan/", "$asia")) checked="" @endif value="Kazakhstan"> Kazakhstan
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Korea, DPR/", "$asia")) checked="" @endif value="Korea, DPR"> Korea, DPR
</div>

<div class="col-sm-5">
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Korea, Rep. of/", "$asia")) checked="" @endif value="Korea, Rep. of"> Korea, Rep. of
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Kuwait/", "$asia")) checked="" @endif value="Kuwait"> Kuwait
</div>

<div class="col-sm-5">
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Kyrgyz Republic/", "$asia")) checked="" @endif value="Kyrgyz Republic"> Kyrgyz Republic
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Laos/", "$asia")) checked="" @endif value="Laos"> Laos
</div>

<div class="col-sm-5">
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Lebanon/", "$asia")) checked="" @endif value="Lebanon"> Lebanon
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Macao/", "$asia")) checked="" @endif value="Macao"> Macao
</div>

<div class="col-sm-5">
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Malaysia/", "$asia")) checked="" @endif value="Malaysia"> Malaysia
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Maldives/", "$asia")) checked="" @endif value="Maldives"> Maldives
</div>

<div class="col-sm-5">
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Myanmar/", "$asia")) checked="" @endif value="Myanmar"> Myanmar
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Nepal/", "$asia")) checked="" @endif value="Nepal"> Nepal
</div>

<div class="col-sm-5">
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Oman/", "$asia")) checked="" @endif value="Oman"> Oman
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Pakistan/", "$asia")) checked="" @endif value="Pakistan"> Pakistan
</div>

<div class="col-sm-5">
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Palestine/", "$asia")) checked="" @endif value="Palestine"> Palestine
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Philippines/", "$asia")) checked="" @endif value="Philippines"> Philippines
</div>

<div class="col-sm-5">
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Qatar/", "$antarctica")) checked="" @endif value="Qatar"> Qatar
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Saudi Arabia/", "$asia")) checked="" @endif value="Saudi Arabia"> Saudi Arabia
</div>

<div class="col-sm-5">
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Singapore/", "$asia")) checked="" @endif value="Singapore"> Singapore
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Sri Lanka/", "$asia")) checked="" @endif value="Sri Lanka"> Sri Lanka
</div>

<div class="col-sm-5">
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Syria/", "$asia")) checked="" @endif value="Syria"> Syria
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Taiwan/", "$asia")) checked="" @endif value="Taiwan"> Taiwan
</div>

<div class="col-sm-5">
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Tajikistan/", "$asia")) checked="" @endif value="Tajikistan"> Tajikistan
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Thailand/", "$asia")) checked="" @endif value="Thailand"> Thailand
</div>

<div class="col-sm-5">
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Timor-Leste/", "$asia")) checked="" @endif value="Timor-Leste"> Timor-Leste
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Turkey/", "$asia")) checked="" @endif value="Turkey"> Turkey
</div>

<div class="col-sm-5">
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Turkmenistan/", "$asia")) checked="" @endif value="Turkmenistan"> Turkmenistan
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/United Arab/", "$asia")) checked="" @endif value="United Arab Emirates"> United Arab Emirates
</div>

<div class="col-sm-5">
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Uzbekistan/", "$asia")) checked="" @endif value="Uzbekistan"> Uzbekistan
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Vietnam/", "$asia")) checked="" @endif value="Vietnam"> Vietna
</div>

<div class="col-sm-5">
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Yemen/", "$asia")) checked="" @endif value="Yemen"> Yemen


</div>
</div>
</div>
<div class="form-group row">
<label for="gender" class="col-sm-5 col-form-label">North America:</label>
<div class="col-sm-7">
<input type="text" readonly="" value="North America" name="north_america" class="form-control">
<div class="input-group-append">
<a href="javascript:;" id="namrica" style="position: absolute;
    right: 24px;
    top: 9px;">
<span class="fa fa-arrow-down arrows" id="downnotamr"></span>
<span class="fa fa-arrow-up" id="upnotamr" style="display:none"></span>
      </a>
</div>
</div>
<div id="namricacity" style="display:none;">
<div class="row">
<div class="col-sm-5"></div>
<div class="col-sm-4">
<a href="javascript:;" onclick="north_america_check()">Select All</a>
</div>
<div class="col-sm-3">
<a href="javascript:;" onclick="north_america_uncheck()">Clear All</a>
</div>
</div>

<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="north_america_country[]" class="north_select" @if(preg_match("/Anguilla/", "$north_america")) checked="" @endif value="Anguilla"> Anguilla 
</div>

<div class="col-sm-5">
<input type="checkbox" name="north_america_country[]" class="north_select" @if(preg_match("/Antigua and Barbuda/", "$north_america")) checked="" @endif value="Antigua and Barbuda"> Antigua and Barbuda 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="north_america_country[]" class="north_select" @if(preg_match("/Aruba/", "$north_america")) checked="" @endif value="Aruba"> Aruba 
</div>

<div class="col-sm-5">
<input type="checkbox" name="north_america_country[]" class="north_select" @if(preg_match("/Bahamas/", "$north_america")) checked="" @endif value="Bahamas"> Bahamas 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="north_america_country[]" class="north_select" @if(preg_match("/Barbados/", "$north_america")) checked="" @endif value="Barbados"> Barbados 
</div>

<div class="col-sm-5">
<input type="checkbox" name="north_america_country[]" class="north_select" @if(preg_match("/Belize/", "$north_america")) checked="" @endif value="Belize"> Belize 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="north_america_country[]" class="north_select" @if(preg_match("/Bermuda/", "$north_america")) checked="" @endif value="Bermuda"> Bermuda 
</div>

<div class="col-sm-5">
<input type="checkbox" name="north_america_country[]" class="north_select" @if(preg_match("/British Virgin Islands/", "$north_america")) checked="" @endif value="British Virgin Islands"> British Virgin Islands 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="north_america_country[]" class="north_select" @if(preg_match("/Canada/", "$north_america")) checked="" @endif value="Canada"> Canada 
</div>

<div class="col-sm-5">
<input type="checkbox" name="north_america_country[]" class="north_select" @if(preg_match("/Cayman Islands/", "$north_america")) checked="" @endif value="Cayman Islands"> Cayman Islands 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="north_america_country[]" class="north_select" @if(preg_match("/Costa Rica/", "$north_america")) checked="" @endif value="Costa Rica"> Costa Rica
</div>

<div class="col-sm-5"> 
<input type="checkbox" name="north_america_country[]" class="north_select"  @if(preg_match("/Cuba/", "$north_america")) checked="" @endif value="Cuba"> Cuba 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="north_america_country[]" class="north_select"  @if(preg_match("/Dominica/", "$north_america")) checked="" @endif value="Dominica"> Dominica 
</div>

<div class="col-sm-5">
<input type="checkbox" name="north_america_country[]" class="north_select"  @if(preg_match("/El Salvador/", "$north_america")) checked="" @endif value="El Salvador"> El Salvador
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="north_america_country[]" class="north_select"  @if(preg_match("/Greenland/", "$north_america")) checked="" @endif value="Greenland"> Greenland 
</div>

<div class="col-sm-5">
<input type="checkbox" name="north_america_country[]" class="north_select"  @if(preg_match("/Grenada/", "$north_america")) checked="" @endif value="Grenada"> Grenada 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="north_america_country[]" class="north_select"  @if(preg_match("/Guadeloupe/", "$north_america")) checked="" @endif value="Guadeloupe"> Guadeloupe 
</div>

<div class="col-sm-5">
<input type="checkbox" name="north_america_country[]" class="north_select"  @if(preg_match("/Guatemala/", "$north_america")) checked="" @endif value="Guatemala"> Guatemala 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="north_america_country[]" class="north_select"  @if(preg_match("/Haiti/", "$north_america")) checked="" @endif value="Haiti"> Haiti 
</div>

<div class="col-sm-5">
<input type="checkbox" name="north_america_country[]" class="north_select"  @if(preg_match("/Honduras/", "$north_america")) checked="" @endif value="Honduras"> Honduras 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">

<input type="checkbox" name="north_america_country[]" class="north_select"   @if(preg_match("/Jamaica/", "$north_america")) checked="" @endif value="Jamaica"> Jamaica
</div>

<div class="col-sm-5"> 
<input type="checkbox" name="north_america_country[]" class="north_select"   @if(preg_match("/Martinique/", "$north_america")) checked="" @endif value="Martinique"> Martinique
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="north_america_country[]" class="north_select"   @if(preg_match("/Mexico/", "$north_america")) checked="" @endif value="Mexico"> Mexico
</div>

<div class="col-sm-5"> 
<input type="checkbox" name="north_america_country[]" class="north_select"   @if(preg_match("/Montserrat/", "$north_america")) checked="" @endif value="Montserrat"> Montserrat
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="north_america_country[]" class="north_select"   @if(preg_match("/Netherlands/", "$north_america")) checked="" @endif value="Netherlands"> Netherlands Antilles
</div>

<div class="col-sm-5"> 
<input type="checkbox" name="north_america_country[]" class="north_select"   @if(preg_match("/Nicaragua/", "$north_america")) checked="" @endif value="Nicaragua"> Nicaragua
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="north_america_country[]" class="north_select"   @if(preg_match("/Panama/", "$north_america")) checked="" @endif value="Panama"> Panama
</div>

<div class="col-sm-5"> 
<input type="checkbox" name="north_america_country[]" class="north_select"   @if(preg_match("/Puerto Rico/", "$north_america")) checked="" @endif value="Puerto Rico"> Puerto Rico
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="north_america_country[]" class="north_select"  @if(preg_match("/Saint/", "$north_america")) checked="" @endif  value="Saint"> Saint Barthelemy 
</div>

<div class="col-sm-5">
<input type="checkbox" name="north_america_country[]" class="north_select"   @if(preg_match("/Saint Kitts and Nevis/", "$north_america")) checked="" @endif value="Saint Kitts and Nevis"> Saint Kitts and Nevis
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="north_america_country[]" class="north_select"   @if(preg_match("/Saint Lucia/", "$north_america")) checked="" @endif value="Saint Lucia"> Saint Lucia 
</div>

<div class="col-sm-5">
<input type="checkbox" name="north_america_country[]" class="north_select"   @if(preg_match("/Saint Martin/", "$north_america")) checked="" @endif value="Saint Martin"> Saint Martin 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="north_america_country[]" class="north_select"   @if(preg_match("/Saint Pierre and Miquelon/", "$north_america")) checked="" @endif value="Saint Pierre and Miquelon"> Saint Pierre and Miquelon 
</div>

<div class="col-sm-5">
<input type="checkbox" name="north_america_country[]" class="north_select"   @if(preg_match("/St Vincent and Grenadines/", "$north_america")) checked="" @endif value="St Vincent and Grenadines"> St Vincent and Grenadines 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="north_america_country[]" class="north_select"  @if(preg_match("/Trinidad and Tobago/", "$north_america")) checked="" @endif  value="Trinidad and Tobago"> Trinidad and Tobago 
</div>
<div class="col-sm-5">
<input type="checkbox" name="north_america_country[]" class="north_select" @if(preg_match("/Turks and Caicos Is/", "$north_america")) checked="" @endif value="Turks and Caicos Is"> Turks and Caicos Is
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="north_america_country[]" class="north_select" @if(preg_match("/US Virgin Islands/", "$north_america")) checked="" @endif value="US Virgin Islands"> US Virgin Islands
</div>

<div class="col-sm-5"> 
<input type="checkbox" name="north_america_country[]" class="north_select" @if(preg_match("/Portugal/", "$north_america")) checked="" @endif value="Portugal"> Portugal
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="north_america_country[]" class="north_select" @if(preg_match("/Romania/", "$north_america")) checked="" @endif value="Romania"> Romania
</div>

<div class="col-sm-5"> 
<input type="checkbox" name="north_america_country[]" class="north_select" @if(preg_match("/USA/", "$north_america")) checked="" @endif value="USA"> USA
</div>
</div>
</div>


<div class="form-group row">
<label for="gender" class="col-sm-5 col-form-label">South America:</label>
<div class="col-sm-7">
<input type="text" readonly="" value="South America" name="south_america" class="form-control">
<div class="input-group-append">
<a href="javascript:;" id="southafric" style="position: absolute;
    right: 24px;
    top: 9px;">
<span class="fa fa-arrow-down arrows" id="downsouamr"></span>
<span class="fa fa-arrow-up" id="upsouthamar" style="display:none"></span>
      </a>
</div>
</div>
<div id="southafriccity" style="display:none;">
<div class="row">
<div class="col-sm-5"></div>
<div class="col-sm-4">
<a href="javascript:;" onclick="south_america()">Select All</a>
</div>
<div class="col-sm-3">
<a href="javascript:;" onclick="south_unamerica()">Clear All</a>
</div>
</div>


<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="south_america_country[]" class="south_select" @if(preg_match("/Argentina/", "$south_america")) checked="" @endif value="Argentina"> Argentina 
</div>

<div class="col-sm-5"> 
<input type="checkbox" name="south_america_country[]" class="south_select" @if(preg_match("/Bolivia/", "$south_america")) checked="" @endif value="Bolivia"> Bolivia
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">  
<input type="checkbox" name="south_america_country[]" class="south_select" @if(preg_match("/Brazil/", "$south_america")) checked="" @endif value="Brazil"> Brazil
</div>

<div class="col-sm-5">  
<input type="checkbox" name="south_america_country[]" class="south_select" @if(preg_match("/Chile/", "$south_america")) checked="" @endif value="Chile"> Chile
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">  
<input type="checkbox" name="south_america_country[]" class="south_select" @if(preg_match("/Colombia/", "$south_america")) checked="" @endif value="Colombia"> Colombia
</div>

<div class="col-sm-5">  
<input type="checkbox" name="south_america_country[]" class="south_select" @if(preg_match("/Ecuador/", "$south_america")) checked="" @endif value="Ecuador"> Ecuador 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">                                 

<input type="checkbox" name="south_america_country[]" class="south_select" @if(preg_match("/Falkland Islands/", "$south_america")) checked="" @endif value="Falkland Islands">Falkland Islands 
</div>

<div class="col-sm-5"> 
<input type="checkbox" name="south_america_country[]" class="south_select" @if(preg_match("/French Guiana/", "$south_america")) checked="" @endif value="French Guiana"> French Guiana
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">  
<input type="checkbox" name="south_america_country[]" class="south_select" @if(preg_match("/Guyana/", "$south_america")) checked="" @endif value="Guyana"> Guyana
</div>

<div class="col-sm-5">  
<input type="checkbox" name="south_america_country[]" class="south_select" @if(preg_match("/Paraguay/", "$south_america")) checked="" @endif value="Paraguay"> Paraguay
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">  
<input type="checkbox" name="south_america_country[]" class="south_select" @if(preg_match("/Peru/", "$south_america")) checked="" @endif value="Peru"> Peru
</div>

<div class="col-sm-5">  
<input type="checkbox" name="south_america_country[]" class="south_select" @if(preg_match("/Suriname/", "$south_america")) checked="" @endif value="Suriname"> Suriname 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">                                 

<input type="checkbox" name="south_america_country[]" class="south_select" @if(preg_match("/Uruguay/", "$south_america")) checked="" @endif  value="Uruguay"> Uruguay 
</div>
<div class="col-sm-5"> 
<input type="checkbox" name="south_america_country[]" class="south_select" @if(preg_match("/Venezuela/", "$south_america")) checked="" @endif  value="Venezuela"> Venezuela

</div>
</div>
</div>
<div class="clearfix"></div>
</div>
{{ csrf_field() }}
</div>
<div class="mp-btns pull-right btn12">
<a href="javascript:;" class="mp-edit-btn eb13">Edit</a>
<div class="mp-btn2-two dc13" style="display: none;">
<input type="submit" value="Done" class="mp-done-btn" />
<a href="javascript:;" class="mp-cancel-btn cb13">Cancel</a>
</div>
</div>
</form>
<div class="clearfix"></div>
</div>
</div>
</div>
<div class="clearfix"></div>
</div>
</div>
</div>	
</div>
</div>



<!-- Add Looking Body type  Modal -->

<div class="modal fade" id="loking_body_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Looking Body type</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-multi-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	




<label class="col-form-label">Looking Body type</label>

<div class="form-group row">

<div class="col-sm-12">

<input type="text" readonly="" value="Body Type" name="field" class="form-control">

<div class="input-group-append">
<a href="javascript:;" id="bodutm" style="position: absolute;
    right: 24px;
    top: 9px;">
<span class="fa fa-arrow-down arrows" id="downbdyty"></span>
<span class="fa fa-arrow-up" id="upbdytyp" style="display:none;"></span>

</a>
</div>
</div>

<div id="bodutprom" style="display:none;">
	<br><br>
<div class="row">
	<div class="col-sm-5"></div>
<div class="col-sm-4">
<a href="javascript:;" onclick="body_check()">Select All</a>
</div>
<div class="col-sm-3">
<a href="javascript:;" onclick="body_uncheck()">Clear All</a>
</div>
</div>

<br>

<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" class="body_select" @if(preg_match("/Slim Skinny/", "$loking_body_type")) checked="" @endif value="Slim/Skinny"> Slim/Skinny
</div>
<div class="col-sm-4">
 <input type="checkbox" name="value[]" class="body_select" @if(preg_match("/Average/", "$loking_body_type")) checked="" @endif value="Average"> Average </div>
 <div class="col-sm-4"></div>
 <div class="col-sm-4">
 <input type="checkbox" name="value[]" class="body_select" @if(preg_match("/Athletic/", "$loking_body_type")) checked="" @endif value="Athletic"> Athletic</div>
 <div class="col-sm-4">
 <input type="checkbox" name="value[]" class="body_select" @if(preg_match("/Muscular/", "$loking_body_type")) checked="" @endif value="Muscular"> Muscular</div>

 <div class="col-sm-4"></div>
 <div class="col-sm-4">
 <input type="checkbox" name="value[]" class="body_select" @if(preg_match("/A few extra pounds/", "$loking_body_type")) checked="" @endif value="A few extra pounds"> A few extra pounds</div>
 <div class="col-sm-4">
 <input type="checkbox" name="value[]" class="body_select" @if(preg_match("/Heavyset/", "$loking_body_type")) checked="" @endif value="Heavyset"> Heavyset

</div>
</div>
</div>
</div>
</div>
<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>


<!-- Add Has Chailed  Modal -->

<div class="modal fade" id="has_chiled_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About  Has Children</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-multi-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	




<label class="col-form-label"> Has Children</label>

<div class="form-group row">

<div class="col-sm-12">

<input type="text" readonly="" value="Has Children" name="field" class="form-control">

<div class="input-group-append">
<a href="javascript:;" id="haschm" style="position: absolute;
    right: 24px;
    top: 9px;">
<span class="fa fa-arrow-down arrows" id="downhaschildm"></span>
<span class="fa fa-arrow-up" id="uphaschildm" style="display:none;"></span>

</a>
</div>
</div>

<div id="haschprom" style="display:none;">
	<br><br>
<div class="row">
	<div class="col-sm-5"></div>
<div class="col-sm-4">
<a href="javascript:;" onclick="has_check()">Select All</a>
</div>
<div class="col-sm-3">
<a href="javascript:;" onclick="has_uncheck()">Clear All</a>
</div>
</div>

<br>

<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" class="has_select"  @if(preg_match("/None/", "$has_children")) checked="" @endif value="None"> None</div>
<div class="col-sm-4">
 <input type="checkbox" name="value[]" class="has_select"  @if(preg_match("/one/", "$has_children")) checked="" @endif value="one"> one</div>
 	<div class="col-sm-4"></div>
 <div class="col-sm-4">
 <input type="checkbox" name="value[]" class="has_select"  @if(preg_match("/two/", "$has_children")) checked="" @endif value="two"> two

</div>
<div class="col-sm-4">
 <input type="checkbox" name="value[]" class="has_select"  @if(preg_match("/three or more/", "$has_children")) checked="" @endif value="three or more"> three or more

</div>
</div>
</div>
</div>
</div>
<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>




<!-- Add Looking pray  Modal -->

<div class="modal fade" id="loiking_pray_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Pray</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-multi-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	




<label class="col-form-label">Pray</label>

<div class="form-group row">

<div class="col-sm-12">

<input type="text" readonly="" value="Pray" name="field" class="form-control">

<div class="input-group-append">
<a href="javascript:;" id="praym" style="position: absolute;
    right: 24px;
    top: 9px;">
<span class="fa fa-arrow-down arrows" id="downpraym"></span>
<span class="fa fa-arrow-up" id="uppraym" style="display:none;"></span>

</a>
</div>
</div>

<div id="prayprom" style="display:none;">
	<br><br>
<div class="row">
	<div class="col-sm-5"></div>
<div class="col-sm-4">
<a href="javascript:;" onclick="pray_check()">Select All</a>
</div>
<div class="col-sm-3">
<a href="javascript:;" onclick="pray_uncheck()">Clear All</a>
</div>
</div>

<br>

<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-3">
<input type="checkbox" name="value[]" class="pray_select"  @if(preg_match("/Always pray/", "$pray")) checked="" @endif value="Always pray"> Always pray </div>
<div class="col-sm-7">
 <input type="checkbox" name="value[]" class="pray_select"  @if(preg_match("/Rarely miss a prayer and make Qadah Salah/", "$pray")) checked="" @endif value="Rarely miss a prayer and make Qadah Salah"> Rarely miss a prayer and make Qadah Salah</div>
 <div class="col-sm-2"></div>
 <div class="col-sm-7">
 <input type="checkbox" name="value[]" class="pray_select"  @if(preg_match("/Sometimes miss Fajr and make Qadah Salah/", "$pray")) checked="" @endif value="Sometimes miss Fajr and make Qadah Salah"> Sometimes miss Fajr and make Qadah Salah</div>
 <div class="col-sm-3">
<input type="checkbox" name="value[]" class="pray_select"  @if(preg_match("/Sometimes pray/", "$pray")) checked="" @endif value="Sometimes pray"> Sometimes pray</div>
<div class="col-sm-2"></div>
 <div class="col-sm-4">
 <input type="checkbox" name="value[]" class="pray_select"  @if(preg_match("/Only pray before exams/", "$pray")) checked="" @endif value="Only pray before exams"> Only pray before exams</div>
 <div class="col-sm-4">
<input type="checkbox" name="value[]" class="pray_select"  @if(preg_match("/Eid Salah only/", "$pray")) checked="" @endif value="Eid Salah only"> Eid Salah only</div>


<div class="col-sm-2"></div>

 <div class="col-sm-4 col-sm-offset-2">
 <input type="checkbox" name="value[]" class="pray_select"  @if(preg_match("/Intend to start praying/", "$pray")) checked="" @endif value="Intend to start praying"> Intend to start praying</div>
 <div class="col-sm-4">
<input type="checkbox" name="value[]" class="pray_select"  @if(preg_match("/Don't pray/", "$pray")) checked="" @endif value="Don't pray"> Don't pray</div>
</div>
</div>
</div>
</div>
<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>


<!-- Add Looking sect  Modal -->

<div class="modal fade" id="loiking_sect_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Sect are you looking</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-multi-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	




<label class="col-form-label">Sect are you looking</label>

<div class="form-group row">

<div class="col-sm-12">

<input type="text" readonly="" value="Sects" name="field" class="form-control">

<div class="input-group-append">
<a href="javascript:;" id="sectlookm" style="position: absolute;
    right: 24px;
    top: 9px;">
<span class="fa fa-arrow-down arrows" id="downsectm"></span>
<span class="fa fa-arrow-up" id="upsectm" style="display:none;"></span>

</a>
</div>
</div>

<div id="sectlookprom" style="display:none;">
	<br><br>
<div class="row">
	<div class="col-sm-5"></div>
<div class="col-sm-4">
<a href="javascript:;" onclick="sect_check()">Select All</a>
</div>
<div class="col-sm-3">
<a href="javascript:;" onclick="sect_uncheck()">Clear All</a>
</div>
</div>

<br>

<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-5">

<input type="checkbox" name="value[]" class="sect_select"  @if(preg_match("/just Muslim/", "$sects")) checked="" @endif value="just Muslim"> just Muslim
</div>
<div class="col-sm-5">
<input type="checkbox" name="value[]" class="sect_select"  @if(preg_match("/Sunni Muslim/", "$sects")) checked="" @endif value="Sunni Muslim"> Sunni Muslim    
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">

<input type="checkbox" name="value[]" class="sect_select"  @if(preg_match("/Shia Muslim/", "$sects")) checked="" @endif value="Shia Muslim"> Shia Muslim
</div>
<div class="col-sm-5">
<input type="checkbox" name="value[]" class="sect_select"  @if(preg_match("/Salafi/", "$sects")) checked="" @endif value="Salafi"> Salafi
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">

<input type="checkbox" name="value[]" class="sect_select"  @if(preg_match("/Jam'at Islami/", "$sects")) checked="" @endif value="Jam'at Islami"> Jam'at Islami
</div>
<div class="col-sm-5">
<input type="checkbox" name="value[]" class="sect_select"  @if(preg_match("/Thableegh Jamaath/", "$sects")) checked="" @endif value="Thableegh Jamaath"> Thableegh Jamaath   
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">

<input type="checkbox" name="value[]" class="sect_select"  @if(preg_match("/Shafi'i/", "$sects")) checked="" @endif value="Shafi'i"> Shafi'i
</div>
<div class="col-sm-5">
<input type="checkbox" name="value[]" class="sect_select"  @if(preg_match("/Hanafi/", "$sects")) checked="" @endif value="Hanafi"> Hanafi
</div>

<div class="col-sm-2"></div>
<div class="col-sm-5">

<input type="checkbox" name="value[]" class="sect_select"  @if(preg_match("/Hanabali/", "$sects")) checked="" @endif value="Hanabali"> Hanabali
</div>
<div class="col-sm-5">
<input type="checkbox" name="value[]" class="sect_select"  @if(preg_match("/Maliki/", "$sects")) checked="" @endif value="Maliki"> Maliki  
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">

<input type="checkbox" name="value[]" class="sect_select"  @if(preg_match("/Sayyid/", "$sects")) checked="" @endif value="Sayyid"> Sayyid
</div>
<div class="col-sm-5">
<input type="checkbox" name="value[]" class="sect_select"  @if(preg_match("/Urdu Muslim/", "$sects")) checked="" @endif value="Urdu Muslim"> Urdu Muslim
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="value[]" class="sect_select"  @if(preg_match("/Bohra'i/", "$sects")) checked="" @endif value="Bohra'i"> Bohra'i
</div>
<div class="col-sm-5">
<input type="checkbox" name="value[]" class="sect_select"  @if(preg_match("/Pathan/", "$sects")) checked="" @endif value="Pathan"> Pathan  
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">

<input type="checkbox" name="value[]" class="sect_select"  @if(preg_match("/Sufism/", "$sects")) checked="" @endif value="Sufism"> Sufism

</div>
</div>
</div>
</div>
</div>
<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>






<!-- Add Add  South America  Modal -->

<div class="modal fade" id="south_america_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About South America</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-multi-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	

 


<label class="col-form-label">South America</label>

<div class="form-group row">

<div class="col-sm-12">

<input type="text" readonly="" value="South America" name="field" class="form-control">

<div class="input-group-append">
<a href="javascript:;" id="southafricm" style="position: absolute;
    right: 24px;
    top: 9px;">
<span class="fa fa-arrow-down arrows" id="downsouamrm"></span>
<span class="fa fa-arrow-up" id="upsouthamarm" style="display:none;"></span>

</a>
</div>
</div>

<div id="southafriccitym" style="display:none;">
	<br><br>
<div class="row">
	<div class="col-sm-5"></div>
<div class="col-sm-4">
<a href="javascript:;" onclick="south_america()">Select All</a>
</div>
<div class="col-sm-3">
<a href="javascript:;" onclick="south_unamerica()">Clear All</a>
</div>
</div>

<br>

<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="value[]" class="south_select" @if(preg_match("/Argentina/", "$south_america")) checked="" @endif value="Argentina"> Argentina
</div>

<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="south_select" @if(preg_match("/Bolivia/", "$south_america")) checked="" @endif value="Bolivia"> Bolivia
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="south_select" @if(preg_match("/Brazil/", "$south_america")) checked="" @endif value="Brazil"> Brazil
</div>

<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="south_select" @if(preg_match("/Chile/", "$south_america")) checked="" @endif value="Chile"> Chile
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="south_select" @if(preg_match("/Colombia/", "$south_america")) checked="" @endif value="Colombia"> Colombia
</div>

<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="south_select" @if(preg_match("/Ecuador/", "$south_america")) checked="" @endif value="Ecuador"> Ecuador 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">                                

<input type="checkbox" name="value[]" class="south_select" @if(preg_match("/Falkland Islands/", "$south_america")) checked="" @endif value="Falkland Islands">Falkland Islands
</div>

<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="south_select" @if(preg_match("/French Guiana/", "$south_america")) checked="" @endif value="French Guiana"> French Guiana
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="south_select" @if(preg_match("/Guyana/", "$south_america")) checked="" @endif value="Guyana"> Guyana 
</div>

<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="south_select" @if(preg_match("/Paraguay/", "$south_america")) checked="" @endif value="Paraguay"> Paraguay
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">  
<input type="checkbox" name="value[]" class="south_select" @if(preg_match("/Peru/", "$south_america")) checked="" @endif value="Peru"> Peru
</div> 
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="south_select" @if(preg_match("/Suriname/", "$south_america")) checked="" @endif value="Suriname"> Suriname 
  </div>

<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="south_select" @if(preg_match("/Uruguay/", "$south_america")) checked="" @endif  value="Uruguay"> Uruguay
</div>

<div class="col-sm-5">  
<input type="checkbox" name="value[]" class="south_select" @if(preg_match("/Venezuela/", "$south_america")) checked="" @endif  value="Venezuela"> Venezuela

</div>
</div>
</div>
</div>
</div>
<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>




<!-- Add Add  North America  Modal -->

<div class="modal fade" id="north_america_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About North America</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-multi-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	

 


<label class="col-form-label">North America</label>

<div class="form-group row">

<div class="col-sm-12">

<input type="text" readonly="" value="North America" name="field" class="form-control">

<div class="input-group-append">
<a href="javascript:;" id="namricam" style="position: absolute;
    right: 24px;
    top: 9px;">
<span class="fa fa-arrow-down arrows" id="downnotamrm"></span>
<span class="fa fa-arrow-up" id="upnotamrm" style="display:none;"></span>

</a>
</div>
</div>

<div id="namricacitym" style="display:none;">
	<br><br>
<div class="row">
	<div class="col-sm-5"></div>
<div class="col-sm-4">
<a href="javascript:;" onclick="north_america_check()">Select All</a>
</div>
<div class="col-sm-3">
<a href="javascript:;" onclick="north_america_uncheck()">Clear All</a>
</div>
</div>

<br>

<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="value[]" class="north_select" @if(preg_match("/Anguilla/", "$north_america")) checked="" @endif value="Anguilla"> Anguilla 
</div>

<div class="col-sm-5">
<input type="checkbox" name="value[]" class="north_select" @if(preg_match("/Antigua and Barbuda/", "$north_america")) checked="" @endif value="Antigua and Barbuda"> Antigua and Barbuda
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="north_select" @if(preg_match("/Aruba/", "$north_america")) checked="" @endif value="Aruba"> Aruba
</div>

<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="north_select" @if(preg_match("/Bahamas/", "$north_america")) checked="" @endif value="Bahamas"> Bahamas
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="north_select" @if(preg_match("/Barbados/", "$north_america")) checked="" @endif value="Barbados"> Barbados
</div>

<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="north_select" @if(preg_match("/Belize/", "$north_america")) checked="" @endif value="Belize"> Belize
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="north_select" @if(preg_match("/Bermuda/", "$north_america")) checked="" @endif value="Bermuda"> Bermuda
</div>

<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="north_select" @if(preg_match("/British Virgin Islands/", "$north_america")) checked="" @endif value="British Virgin Islands"> British Virgin Islands
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="north_select" @if(preg_match("/Canada/", "$north_america")) checked="" @endif value="Canada"> Canada
</div>

<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="north_select" @if(preg_match("/Cayman Islands/", "$north_america")) checked="" @endif value="Cayman Islands"> Cayman Islands
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="north_select" @if(preg_match("/Costa Rica/", "$north_america")) checked="" @endif value="Costa Rica"> Costa Rica
</div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="north_select"  @if(preg_match("/Cuba/", "$north_america")) checked="" @endif value="Cuba"> Cuba
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="north_select"  @if(preg_match("/Dominica/", "$north_america")) checked="" @endif value="Dominica"> Dominica
</div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="north_select"  @if(preg_match("/El Salvador/", "$north_america")) checked="" @endif value="El Salvador"> El Salvador
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="north_select"  @if(preg_match("/Greenland/", "$north_america")) checked="" @endif value="Greenland"> Greenland
</div>

<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="north_select"  @if(preg_match("/Grenada/", "$north_america")) checked="" @endif value="Grenada"> Grenada
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="north_select"  @if(preg_match("/Guadeloupe/", "$north_america")) checked="" @endif value="Guadeloupe"> Guadeloupe
</div>

<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="north_select"  @if(preg_match("/Guatemala/", "$north_america")) checked="" @endif value="Guatemala"> Guatemala
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="north_select"  @if(preg_match("/Haiti/", "$north_america")) checked="" @endif value="Haiti"> Haiti 
</div>
<div class="col-sm-5">
<input type="checkbox" name="value[]" class="north_select"  @if(preg_match("/Honduras/", "$north_america")) checked="" @endif value="Honduras"> Honduras 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="value[]" class="north_select"   @if(preg_match("/Jamaica/", "$north_america")) checked="" @endif value="Jamaica"> Jamaica
</div>

<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="north_select"   @if(preg_match("/Martinique/", "$north_america")) checked="" @endif value="Martinique"> Martinique 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<input type="checkbox" name="value[]" class="north_select"   @if(preg_match("/Mexico/", "$north_america")) checked="" @endif value="Mexico"> Mexico
</div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="north_select"   @if(preg_match("/Montserrat/", "$north_america")) checked="" @endif value="Montserrat"> Montserrat
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="north_select"   @if(preg_match("/Netherlands/", "$north_america")) checked="" @endif value="Netherlands"> Netherlands Antilles
</div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="north_select"   @if(preg_match("/Nicaragua/", "$north_america")) checked="" @endif value="Nicaragua"> Nicaragua
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="north_select"   @if(preg_match("/Panama/", "$north_america")) checked="" @endif value="Panama"> Panama
</div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="north_select"   @if(preg_match("/Puerto Rico/", "$north_america")) checked="" @endif value="Puerto Rico"> Puerto Rico
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="north_select"  @if(preg_match("/Saint/", "$north_america")) checked="" @endif  value="Saint"> Saint Barthelemy
</div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="north_select"   @if(preg_match("/Saint Kitts and Nevis/", "$north_america")) checked="" @endif value="Saint Kitts and Nevis"> Saint Kitts and Nevis
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="north_select"   @if(preg_match("/Saint Lucia/", "$north_america")) checked="" @endif value="Saint Lucia"> Saint Lucia
</div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="north_select"   @if(preg_match("/Saint Martin/", "$north_america")) checked="" @endif value="Saint Martin"> Saint Martin
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="north_select"   @if(preg_match("/Saint Pierre and Miquelon/", "$north_america")) checked="" @endif value="Saint Pierre and Miquelon"> Saint Pierre and Miquelon
</div>

<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="north_select"   @if(preg_match("/St Vincent and Grenadines/", "$north_america")) checked="" @endif value="St Vincent and Grenadines"> St Vincent and Grenadines
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="north_select"  @if(preg_match("/Trinidad and Tobago/", "$north_america")) checked="" @endif  value="Trinidad and Tobago"> Trinidad and Tobago 
</div>

<div class="col-sm-5">


<input type="checkbox" name="value[]" class="north_select" @if(preg_match("/Turks and Caicos Is/", "$north_america")) checked="" @endif value="Turks and Caicos Is"> Turks and Caicos Is
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="north_select" @if(preg_match("/US Virgin Islands/", "$north_america")) checked="" @endif value="US Virgin Islands"> US Virgin Islands 
</div>
<div class="col-sm-5">
<input type="checkbox" name="value[]" class="north_select" @if(preg_match("/Portugal/", "$north_america")) checked="" @endif value="Portugal"> Portugal
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="north_select" @if(preg_match("/Romania/", "$north_america")) checked="" @endif value="Romania"> Romania
</div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="north_select" @if(preg_match("/USA/", "$north_america")) checked="" @endif value="USA"> USA
</div>
</div>
</div>
</div>
</div>
<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>






<!-- Add Add Europe  Modal -->

<div class="modal fade" id="europe_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Europe</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-multi-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	

 


<label class="col-form-label">Europe</label>

<div class="form-group row">

<div class="col-sm-12">

<input type="text" readonly="" value="Europe" name="field" class="form-control">

<div class="input-group-append">
<a href="javascript:;" id="europm" style="position: absolute;
    right: 24px;
    top: 9px;">
<span class="fa fa-arrow-down arrows" id="downeuropm"></span>
<span class="fa fa-arrow-up" id="upeuropm" style="display:none;"></span>

</a>
</div>
</div>

<div id="europcitym" style="display:none;">
	<br><br>
<div class="row">
	<div class="col-sm-5"></div>
<div class="col-sm-4">
<a href="javascript:;" onclick="europ_check()">Select All</a>
</div>
<div class="col-sm-3">
<a href="javascript:;" onclick="europ_uncheck()">Clear All</a>
</div>
</div>

<br>

<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="europ_select" value="Aland Islands"> Aland Islands 
</div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="europ_select" @if(preg_match("/Albania/", "$europe")) checked="" @endif value="Albania"> Albania
</div> 
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="europ_select" @if(preg_match("/Andorra/", "$europe")) checked="" @endif value="Andorra"> Andorra
</div>
<div class="col-sm-5">  
<input type="checkbox" name="value[]" class="europ_select" @if(preg_match("/Austria/", "$europe")) checked="" @endif value="Austria"> Austria
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">  
<input type="checkbox" name="value[]" class="europ_select" @if (preg_match("/Belarus/", "$europe")) checked="" @endif value="Belarus"> Belarus
</div>
<div class="col-sm-5">  
<input type="checkbox" name="value[]" class="europ_select" @if(preg_match("/Belgium/", "$europe")) checked="" @endif value="Belgium"> Belgium 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="europ_select" @if(preg_match("/Bosnia and Herzegovina/", "$europe")) checked="" @endif value="Bosnia and Herzegovina"> Bosnia and Herzegovina </div>

<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="europ_select" @if (preg_match("/Bulgaria/", "$europe")) checked="" @endif value="Bulgaria"> Bulgaria
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">  
<input type="checkbox" name="value[]" class="europ_select" @if(preg_match("/Croatia/", "$europe")) checked="" @endif value="Croatia"> Croatia 
</div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="europ_select" @if(preg_match("/Czech Republic/", "$europe")) checked="" @endif value="Czech Republic"> Czech Republic 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="europ_select" @if(preg_match("/Denmark/", "$europe")) checked="" @endif value="Denmark"> Denmark 
</div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="europ_select" @if(preg_match("/Estonia/", "$europe")) checked="" @endif value="Estonia"> Estonia 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="europ_select" @if(preg_match("/Faroe Islands/", "$europe")) checked="" @endif value="Faroe Islands"> Faroe Islands 
</div>

<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="europ_select" @if(preg_match("/Finland/", "$europe")) checked="" @endif value="Finland"> Finland 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="europ_select" @if(preg_match("/Yemen/", "$europe")) checked="" @endif value="France"> France 
</div>

<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="europ_select" @if(preg_match("/Germany/", "$europe")) checked="" @endif value="Germany"> Germany 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="europ_select" @if(preg_match("/Gibraltar/", "$europe")) checked="" @endif value="Gibraltar"> Gibraltar 
</div>

<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="europ_select" @if(preg_match("/Greece/", "$europe")) checked="" @endif value="Greece"> Greece 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="europ_select" @if(preg_match("/Guernsey/", "$europe")) checked="" @endif value="Guernsey"> Guernsey 
</div>

<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="europ_select" @if(preg_match("/Hungary/", "$europe")) checked="" @endif value="Hungary"> Hungary 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="europ_select" @if(preg_match("/Iceland/", "$europe")) checked="" @endif value="Iceland"> Iceland 
</div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="europ_select" @if(preg_match("/Ireland/", "$europe")) checked="" @endif value="Ireland"> Ireland 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="europ_select" @if(preg_match("/Isle of Man/", "$europe")) checked="" @endif value="Isle of Man"> Isle of Man 
</div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="europ_select" @if(preg_match("/Italy/", "$europe")) checked="" @endif value="Italy"> Italy 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="europ_select" @if(preg_match("/Jersey/", "$europe")) checked="" @endif value="Jersey"> Jersey 
</div>

<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="europ_select" @if(preg_match("/Kosovo/", "$europe")) checked="" @endif value="Kosovo"> Kosovo 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="europ_select" value="Latvia"> Latvia 
</div>

<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="europ_select" @if(preg_match("/Liechtenstein/", "$europe")) checked="" @endif value="Liechtenstein"> Liechtenstein
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">  
<input type="checkbox" name="value[]" class="europ_select" @if(preg_match("/Lithuania/", "$europe")) checked="" @endif value="Lithuania"> Lithuania 
</div>

<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="europ_select" @if(preg_match("/Luxembourg/", "$europe")) checked="" @endif value="Luxembourg"> Luxembourg 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="europ_select" @if(preg_match("/Macedonia/", "$europe")) checked="" @endif value="Macedonia"> Macedonia
</div>
<div class="col-sm-5">  
<input type="checkbox" name="value[]" class="europ_select" @if(preg_match("/Malta/", "$europe")) checked="" @endif value="Malta"> Malta 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="europ_select" @if(preg_match("/Monaco/", "$europe")) checked="" @endif value="Monaco"> Monaco 
</div>

<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="europ_select" @if(preg_match("/Montenegro/", "$europe")) checked="" @endif value="Montenegro"> Montenegro
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">  
<input type="checkbox" name="value[]" class="europ_select" @if(preg_match("/Netherlands/", "$europe")) checked="" @endif value="Netherlands"> Netherlands 
</div>

<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="europ_select" @if(preg_match("/Norway/", "$europe")) checked="" @endif  value="Norway"> Norway 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="europ_select" @if(preg_match("/Poland/", "$europe")) checked="" @endif  value="Poland"> Poland 
</div>

<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="europ_select" @if(preg_match("/Portugal/", "$europe")) checked="" @endif  value="Portugal"> Portugal 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="europ_select" @if(preg_match("/Romania/", "$europe")) checked="" @endif  value="Romania"> Romania 
</div>

<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="europ_select" @if(preg_match("/Russian Federation/", "$europe")) checked="" @endif  value="Russian Federation">Russian Federation
</div>

<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="europ_select" @if(preg_match("/San Marino/", "$europe")) checked="" @endif value="San Marino"> San Marino 
</div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="europ_select" @if(preg_match("/Serbia/", "$europe")) checked="" @endif value="Serbia"> Serbia 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="europ_select" @if(preg_match("/Slovakia/", "$europe")) checked="" @endif value="Slovakia"> Slovakia 
</div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="europ_select" @if(preg_match("/Slovenia/", "$europe")) checked="" @endif value="Slovenia"> Slovenia 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="europ_select" @if(preg_match("/Spain/", "$europe")) checked="" @endif value="Spain"> Spain 
</div>

<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="europ_select" @if(preg_match("/Svalbard and Jan Mayen/", "$europe")) checked="" @endif value="Svalbard and Jan Mayen"> Svalbard and Jan Mayen Is 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="europ_select" @if(preg_match("/Sweden/", "$europe")) checked="" @endif value="Sweden"> Sweden </div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="europ_select" @if(preg_match("/Ukraine/", "$europe")) checked="" @endif value="Ukraine"> Ukraine 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="europ_select" @if (preg_match("/United Kingdom/", "$europe")) checked="" @endif value="United Kingdom"> United Kingdom
</div>

<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="europ_select" @if(preg_match("/Vatican City/", "$europe")) checked="" @endif value="Vatican City"> Vatican City 

</div>
</div>
</div>
</div>
</div>
<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>



<!-- Add Add Asia  Modal -->

<div class="modal fade" id="asia_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Aisa</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-multi-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	




<label class="col-form-label">Aisa</label>

<div class="form-group row">

<div class="col-sm-12">

<input type="text" readonly="" value="Asia" name="field" class="form-control">

<div class="input-group-append">
<a href="javascript:;" id="aisam" style="position: absolute;
    right: 24px;
    top: 9px;">
<span class="fa fa-arrow-down arrows" id="downasiam"></span>
<span class="fa fa-arrow-up" id="upasiam" style="display:none;"></span>

</a>
</div>
</div>

<div id="aisacitym" style="display:none;">
	<br><br>
<div class="row">
	<div class="col-sm-5"></div>
<div class="col-sm-4">
<a href="javascript:;" onclick="asia_check()">Select All</a>
</div>
<div class="col-sm-3">
<a href="javascript:;" onclick="asia_uncheck()">Clear All</a>
</div>
</div>

<br>

<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="asia_select" @if (preg_match("/Afghanistan/", "$asia")) checked="" @endif value="Afghanistan"> Afghanistan
</div>

<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="asia_select" @if (preg_match("/Armenia/", "$asia")) checked="" @endif value="Armenia"> Armenia
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="asia_select" @if (preg_match("/Azerbaijan/", "$asia")) checked="" @endif value="Azerbaijan"> Azerbaijan
</div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="asia_select" @if (preg_match("/Bahrain/", "$asia")) checked="" @endif value="Bahrain"> Bahrain
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="asia_select" @if (preg_match("/Bangladesh/", "$asia")) checked="" @endif value="Bangladesh"> Bangladesh
</div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="asia_select" @if (preg_match("/Bhutan/", "$asia")) checked="" @endif value="Bhutan"> Bhutan
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="asia_select" @if (preg_match("/British Ind/", "$asia")) checked="" @endif value="British Ind"> British Ind. 
</div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="asia_select" @if (preg_match("/Brunei Darussalam/", "$asia")) checked="" @endif value="Brunei Darussalam"> Brunei Darussalam
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="asia_select" @if (preg_match("/Cambodia/", "$asia")) checked="" @endif value="Cambodia"> Cambodia
</div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="asia_select" @if (preg_match("/China/", "$asia")) checked="" @endif value="China"> China
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="asia_select" @if (preg_match("/Christmas Island/", "$asia")) checked="" @endif value="Christmas Island"> Christmas Island
</div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="asia_select"  @if (preg_match("/Cocos/", "$asia")) checked="" @endif value="Cocos"> Cocos
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="asia_select"  @if (preg_match("/Cyprus/", "$asia")) checked="" @endif value="Cyprus"> Cyprus
</div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="asia_select"  @if (preg_match("/Georgia/", "$asia")) checked="" @endif value="Georgia"> Georgia
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="asia_select"  @if (preg_match("/Hong Kong/", "$asia")) checked="" @endif value="Hong Kong"> Hong Kong
</div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="asia_select"  @if (preg_match("/India/", "$asia")) checked="" @endif value="India"> India
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="asia_select"  @if (preg_match("/Indonesia/", "$asia")) checked="" @endif value="Indonesia"> Indonesia
</div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="asia_select"  @if (preg_match("/Iran/", "$asia")) checked="" @endif value="Iran"> Iran
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="asia_select"  @if (preg_match("/Iraq/", "$asia")) checked="" @endif value="Iraq"> Iraq
</div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="asia_select"  @if (preg_match("/Israel/", "$asia")) checked="" @endif value="Israel"> Israel
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="asia_select"  @if (preg_match("/Japan/", "$asia")) checked="" @endif value="Japan"> Japan
</div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="asia_select"  @if (preg_match("/Kazakhstan/", "$asia")) checked="" @endif value="Kazakhstan"> Kazakhstan
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="asia_select"  @if (preg_match("/Korea, DPR/", "$asia")) checked="" @endif value="Korea, DPR"> Korea, DPR
</div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="asia_select"  @if (preg_match("/Korea, Rep. of/", "$asia")) checked="" @endif value="Korea, Rep. of"> Korea, Rep. of
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="asia_select"  @if (preg_match("/Kuwait/", "$asia")) checked="" @endif value="Kuwait"> Kuwait
</div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="asia_select"  @if (preg_match("/Kyrgyz Republic/", "$asia")) checked="" @endif value="Kyrgyz Republic"> Kyrgyz Republic
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="asia_select"  @if (preg_match("/Laos/", "$asia")) checked="" @endif value="Laos"> Laos
</div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="asia_select"  @if (preg_match("/Lebanon/", "$asia")) checked="" @endif value="Lebanon"> Lebanon
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="asia_select"  @if (preg_match("/Macao/", "$asia")) checked="" @endif value="Macao"> Macao
</div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="asia_select"  @if (preg_match("/Malaysia/", "$asia")) checked="" @endif value="Malaysia"> Malaysia
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="asia_select"  @if (preg_match("/Maldives/", "$asia")) checked="" @endif value="Maldives"> Maldives
</div>
<div class="col-sm-5"> 

<input type="checkbox" name="value[]" class="asia_select"  @if (preg_match("/Myanmar/", "$asia")) checked="" @endif value="Myanmar"> Myanmar
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="asia_select"  @if (preg_match("/Nepal/", "$asia")) checked="" @endif value="Nepal"> Nepal
</div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="asia_select"  @if (preg_match("/Oman/", "$asia")) checked="" @endif value="Oman"> Oman
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="asia_select"  @if (preg_match("/Pakistan/", "$asia")) checked="" @endif value="Pakistan"> Pakistan
</div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="asia_select"  @if (preg_match("/Palestine/", "$asia")) checked="" @endif value="Palestine"> Palestine
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="asia_select"  @if (preg_match("/Philippines/", "$asia")) checked="" @endif value="Philippines"> Philippines
</div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="asia_select"  @if (preg_match("/Qatar/", "$antarctica")) checked="" @endif value="Qatar"> Qatar
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="asia_select"  @if (preg_match("/Saudi Arabia/", "$asia")) checked="" @endif value="Saudi Arabia"> Saudi Arabia
</div>
<div class="col-sm-5"> 

<input type="checkbox" name="value[]" class="asia_select"  @if (preg_match("/Singapore/", "$asia")) checked="" @endif value="Singapore"> Singapore
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="asia_select"  @if (preg_match("/Sri Lanka/", "$asia")) checked="" @endif value="Sri Lanka"> Sri Lanka
</div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="asia_select"  @if (preg_match("/Syria/", "$asia")) checked="" @endif value="Syria"> Syria
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="asia_select"  @if (preg_match("/Taiwan/", "$asia")) checked="" @endif value="Taiwan"> Taiwan
</div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="asia_select"  @if (preg_match("/Tajikistan/", "$asia")) checked="" @endif value="Tajikistan"> Tajikistan
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="asia_select"  @if (preg_match("/Thailand/", "$asia")) checked="" @endif value="Thailand"> Thailand
</div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="asia_select"  @if (preg_match("/Timor-Leste/", "$asia")) checked="" @endif value="Timor-Leste"> Timor-Leste
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="asia_select"  @if (preg_match("/Turkey/", "$asia")) checked="" @endif value="Turkey"> Turkey
</div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="asia_select"  @if (preg_match("/Turkmenistan/", "$asia")) checked="" @endif value="Turkmenistan"> Turkmenistan
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="asia_select"  @if (preg_match("/United Arab/", "$asia")) checked="" @endif value="United Arab Emirates"> United Arab Emirates
</div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="asia_select"  @if (preg_match("/Uzbekistan/", "$asia")) checked="" @endif value="Uzbekistan"> Uzbekistan
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="asia_select"  @if (preg_match("/Vietnam/", "$asia")) checked="" @endif value="Vietnam"> Vietna
</div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="asia_select"  @if (preg_match("/Yemen/", "$asia")) checked="" @endif value="Yemen"> Yemen

</div>
</div>
</div>
</div>
</div>
<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>


<!-- Add Add Antarctica  Modal -->

<div class="modal fade" id="antarctica_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Antarctica</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-multi-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	




<label class="col-form-label">Antarctica</label>

<div class="form-group row">

<div class="col-sm-12">

<input type="text" readonly="" value="Antarctica" name="field" class="form-control">

<div class="input-group-append">
<a href="javascript:;" id="antarm" style="position: absolute;
    right: 24px;
    top: 9px;">
<span class="fa fa-arrow-down arrows" id="downantarm"></span>
<span class="fa fa-arrow-up" id="upantarm" style="display:none;"></span>

</a>
</div>
</div>

<div id="Antarcticacitym" style="display:none;">
	<br><br>
<div class="row">
	<div class="col-sm-5"></div>
<div class="col-sm-4">
<a href="javascript:;" onclick="antarctica_check()">Select All</a>
</div>
<div class="col-sm-3">
<a href="javascript:;" onclick="antarctica_uncheck()">Clear All</a>
</div>
</div>

<br>

<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="antarctica_select" @if (preg_match("/Bouvet Island/", "$antarctica")) checked="" @endif value="Bouvet Island"> Bouvet Island
</div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="antarctica_select" @if (preg_match("/French Southern Territ/", "$antarctica")) checked="" @endif value="French Southern Territ"> French Southern Territ.
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">  
<input type="checkbox" name="value[]" class="antarctica_select" @if (preg_match("/Heard Island/", "$antarctica")) checked="" @endif value="Heard Island"> Heard Island
</div>
<div class="col-sm-5">  
<input type="checkbox" name="value[]" class="antarctica_select" @if (preg_match("/South Georgia/", "$antarctica")) checked="" @endif value="South Georgia"> South Georgia 

</div>
</div>
</div>
</div>
</div>
<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>



<!-- Add Affrica  Modal -->

<div class="modal fade" id="africa_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Affrica</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-multi-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	




<label class="col-form-label">Affrica</label>

<div class="form-group row">

<div class="col-sm-12">

<input type="text" readonly="" value="Africa" name="field" class="form-control">

<div class="input-group-append">
<a href="javascript:;" id="affricam" style="position: absolute;
    right: 24px;
    top: 9px;">
<span class="fa fa-arrow-down arrows" id="downafrm"></span>
<span class="fa fa-arrow-up" id="upafrm" style="display:none;"></span>

</a>
</div>
</div>

<div id="allaffricam" style="display:none;">
	<br><br>
<div class="row">
	<div class="col-sm-5"></div>
<div class="col-sm-4">
<a href="javascript:;" onclick="africa_check()">Select All</a>
</div>
<div class="col-sm-3">
<a href="javascript:;" onclick="africka_uncheck()">Clear All</a>
</div>
</div>

<br>

<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" @if (preg_match("/Algeria/", "$africa")) checked="" @endif value="Algeria" name="value[]" class="africa_select"> Algeria 
</div>
<div class="col-sm-5"> 
<input type="checkbox" @if (preg_match("/Angola/", "$africa")) checked="" @endif value="Angola" name="value[]" class="africa_select"> Angola 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" @if (preg_match("/Benin/", "$africa")) checked="" @endif value="Benin" name="value[]" class="africa_select"> Benin 
</div>
<div class="col-sm-5"> 
<input type="checkbox" @if (preg_match("/Botswana/", "$africa")) checked="" @endif value="Botswana" name="value[]" class="africa_select"> Botswana
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 

<input type="checkbox" @if (preg_match("/Burkina Faso/", "$africa")) checked="" @endif value="Burkina Faso" name="value[]" class="africa_select"> Burkina Faso <br>
</div>
<div class="col-sm-5"> 
<input type="checkbox" @if (preg_match("/Burundi/", "$africa")) checked="" @endif value="Burundi" name="value[]" class="africa_select"> Burundi
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" @if (preg_match("/Cameroon/", "$africa")) checked="" @endif value="Cameroon" name="value[]" class="africa_select"> Cameroon
</div>
<div class="col-sm-5"> 
<input type="checkbox" @if (preg_match("/Cape Verde/", "$africa")) checked="" @endif value="Cape Verde" name="value[]" class="africa_select"> Cape Verde 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" @if (preg_match("/Central African Rep/", "$africa")) checked="" @endif value="Central African Rep" name="value[]" class="africa_select"> Central African Rep
</div>

<div class="col-sm-5"> 
<input type="checkbox" @if (preg_match("/Chad/", "$africa")) checked="" @endif value="Chad" name="value[]" class="africa_select"> Chad
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">  
<input type="checkbox" @if (preg_match("/Comoros/", "$africa")) checked="" @endif value="Comoros" name="value[]" class="africa_select"> Comoros
</div>
<div class="col-sm-5"> 
<input type="checkbox" @if (preg_match("/Congo, DR/", "$africa")) checked="" @endif value="Congo, DR" name="value[]" class="africa_select"> Congo, DR
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" @if (preg_match("/Congo, Rep/", "$africa")) checked="" @endif value="Congo, Rep" name="value[]" class="africa_select"> Congo, Rep.
</div>
<div class="col-sm-5"> 
<input type="checkbox" @if (preg_match("/Cote d'Ivoire/", "$africa")) checked="" @endif value="Cote d'Ivoire" name="value[]" class="africa_select"> Cote d'Ivoire <br>
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" @if (preg_match("/Djibouti/", "$africa")) checked="" @endif value="Djibouti" name="value[]" class="africa_select"> Djibouti 
</div>
<div class="col-sm-5"> 
<input type="checkbox" @if (preg_match("/South Africa/", "$africa")) checked="" @endif value="South Africa" name="value[]" class="africa_select"> South Africa
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" @if (preg_match("/Sudan/", "$africa")) checked="" @endif value="Sudan" name="value[]" class="africa_select"> Sudan
</div>
<div class="col-sm-5"> 
<input type="checkbox" @if (preg_match("/Swaziland/", "$africa")) checked="" @endif value="Swaziland" name="value[]" class="africa_select"> Swaziland
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" @if (preg_match("/Zambia/", "$africa")) checked="" @endif value="Zambia" name="value[]" class="africa_select"> Zambia
</div>
<div class="col-sm-5"> 
<input type="checkbox" @if (preg_match("/Egypt/", "$africa")) checked="" @endif value="Egypt" name="value[]" class="africa_select"> Egypt
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="africa_select" value="Equatorial Guinea"> Equatorial Guinea
</div>
<div class="col-sm-5">  
<input type="checkbox" name="value[]" class="africa_select" @if (preg_match("/Eritrea/", "$africa")) checked="" @endif value="Eritrea"> Eritrea
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">  
<input type="checkbox" name="value[]" class="africa_select" @if (preg_match("/Ethiopia/", "$africa")) checked="" @endif value="Ethiopia"> Ethiopia
</div>
<div class="col-sm-5">  
<input type="checkbox" name="value[]" class="africa_select" @if (preg_match("/Gabon/", "$africa")) checked="" @endif value="Gabon"> Gabon
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">  
<input type="checkbox" name="value[]" class="africa_select" @if (preg_match("/Gambia/", "$africa")) checked="" @endif value="Gambia"> Gambia 
</div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="africa_select" @if (preg_match("/Ghana/", "$africa")) checked="" @endif value="Ghana"> Ghana
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">  
<input type="checkbox" name="value[]" class="africa_select" @if (preg_match("/Guinea/", "$africa")) checked="" @endif value="Guinea"> Guinea
</div>

<div class="col-sm-5">  
<input type="checkbox" name="value[]" class="africa_select" @if (preg_match("/Guinea-Bissau/", "$africa")) checked="" @endif value="Guinea-Bissau"> Guinea-Bissau
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">  
<input type="checkbox" name="value[]" class="africa_select" @if (preg_match("/Kenya/", "$africa")) checked="" @endif value="Kenya"> Kenya
</div>
<div class="col-sm-5">  
<input type="checkbox" name="value[]" class="africa_select" @if (preg_match("/Lesotho/", "$africa")) checked="" @endif value="Lesotho"> Lesotho 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="africa_select" @if (preg_match("/Liberia/", "$africa")) checked="" @endif value="Liberia"> Liberia
</div>

<div class="col-sm-5">  
<input type="checkbox" name="value[]" class="africa_select" @if (preg_match("/Libya/", "$africa")) checked="" @endif value="Libya"> Libya 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="africa_select" @if (preg_match("/Madagascar/", "$africa")) checked="" @endif value="Madagascar"> Madagascar
</div>

<div class="col-sm-5">  
<input type="checkbox" name="value[]" class="africa_select" @if (preg_match("/Malawi/", "$africa")) checked="" @endif value="Malawi"> Malawi 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="africa_select" @if (preg_match("/Sierra Leone/", "$africa")) checked="" @endif value="Sierra Leone"> Sierra Leone
</div>

<div class="col-sm-5">  
<input type="checkbox" name="value[]" class="africa_select" @if (preg_match("/Somalia/", "$africa")) checked="" @endif value="Somalia"> Somalia
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">  
<input type="checkbox" name="value[]" class="africa_select" @if (preg_match("/Tunisia/", "$africa")) checked="" @endif value="Tunisia"> Tunisia
</div>

<div class="col-sm-5">  
<input type="checkbox" name="value[]" class="africa_select" @if (preg_match("/Uganda/", "$africa")) checked="" @endif value="Uganda"> Uganda 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="africa_select" @if (preg_match("/Western Sahara/", "$africa")) checked="" @endif value="Western Sahara"> Western Sahara
</div>

<div class="col-sm-5">  
<input type="checkbox" name="value[]" class="africa_select"  @if (preg_match("/Mali/", "$africa")) checked="" @endif value="Mali"> Mali 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="africa_select"  @if (preg_match("/Mauritania/", "$africa")) checked="" @endif value="Mauritania"> Mauritania 
</div>

<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="africa_select"  @if (preg_match("/Mauritius/", "$africa")) checked="" @endif value="Mauritius"> Mauritius 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="africa_select"  @if (preg_match("/Mayotte/", "$africa")) checked="" @endif value="Mayotte"> Mayotte 
</div>

<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="africa_select"  @if (preg_match("/Morocco/", "$africa")) checked="" @endif value="Morocco"> Morocco 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="africa_select" @if (preg_match("/Mozambique/", "$africa")) checked="" @endif  value="Mozambique"> Mozambique 
</div>

<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="africa_select" @if (preg_match("/Namibia/", "$africa")) checked="" @endif value="Namibia"> Namibia
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">  
<input type="checkbox" name="value[]" class="africa_select" @if (preg_match("/Niger/", "$africa")) checked="" @endif value="Niger"> Niger
</div>

<div class="col-sm-5">  
<input type="checkbox" name="value[]" class="africa_select" @if (preg_match("/Nigeria/", "$africa")) checked="" @endif value="Nigeria"> Nigeria
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">  
<input type="checkbox" name="value[]" class="africa_select" @if (preg_match("/Reunion/", "$africa")) checked="" @endif value="Reunion"> Reunion
</div>

<div class="col-sm-5">  
<input type="checkbox" name="value[]" class="africa_select" @if (preg_match("/Rwanda/", "$africa")) checked="" @endif value="Rwanda"> Rwanda 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="africa_select" @if (preg_match("/Saint Helena/", "$africa")) checked="" @endif value="Saint Helena"> Saint Helena
</div>

<div class="col-sm-5">  
<input type="checkbox" name="value[]" class="africa_select" @if (preg_match("/Sao Tome and Principe/", "$africa")) checked="" @endif value="Sao Tome and Principe"> Sao Tome and Principe 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="africa_select" @if (preg_match("/Senegal/", "$africa")) checked="" @endif value="Senegal"> Senegal
</div>

<div class="col-sm-5">  
<input type="checkbox" name="value[]" class="africa_select" @if (preg_match("/Seychelles/", "$africa")) checked="" @endif value="Seychelles"> Seychelles
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5">  
<input type="checkbox" name="value[]" class="africa_select" @if (preg_match("/Sierra Leone/", "$africa")) checked="" @endif value="Sierra Leone"> Sierra Leone
</div>

<div class="col-sm-5">  
<input type="checkbox" name="value[]" class="africa_select" @if (preg_match("/Somalia/", "$africa")) checked="" @endif value="Somalia"> Somalia 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="africa_select" @if (preg_match("/Tanzania/", "$africa")) checked="" @endif value="Tanzania"> Tanzania
</div>

<div class="col-sm-5">  
<input type="checkbox" name="value[]" class="africa_select" @if (preg_match("/Togo/", "$africa")) checked="" @endif value="Togo"> Togo 
</div>
<div class="col-sm-2"></div>
<div class="col-sm-5"> 
<input type="checkbox" name="value[]" class="africa_select" @if (preg_match("/Zimbabwe/", "$africa")) checked="" @endif value="Zimbabwe"> Zimbabwe 

</div>
</div>
</div>
</div>
</div>
<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>

	<!-- Add Living with  Modal -->

<div class="modal fade" id="living_with_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Living With</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-multi-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	




<label class="col-form-label">Living With</label>

<div class="form-group row">

<div class="col-sm-12">

<input type="text" readonly="" value="Living with" name="field" class="form-control">

<div class="input-group-append">
<a href="javascript:;" id="livelawsm" style="position: absolute;
    right: 24px;
    top: 9px;">
<span class="fa fa-arrow-down arrows" id="downlivlawsm"></span>
<span class="fa fa-arrow-up" id="uplivlawsm" style="display:none;"></span>

</a>
</div>
</div>

<div id="livelawsprom" style="display:none;">
	<br><br>
<div class="row">
	<div class="col-sm-5"></div>
<div class="col-sm-4">
<a href="javascript:;" onclick="living_check()">Select All</a>
</div>
<div class="col-sm-3">
<a href="javascript:;" onclick="living_uncheck()">Clear All</a>
</div>
</div>

<br>

<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" class="living_select"  @if(preg_match("/Definitely Consider/", "$living_with")) checked="" @endif value="Definitely Consider"> Definitely Consider </div>
<div class="col-sm-4">
 <input type="checkbox" name="value[]" class="living_select"  @if(preg_match("/May Consider/", "$living_with")) checked="" @endif value="May Consider"> May Consider </div>
 <div class="col-sm-4"></div>
 <div class="col-sm-4">
 <input type="checkbox" name="value[]" class="living_select"  @if(preg_match("/Would not Consider/", "$living_with")) checked="" @endif value="Would not Consider"> Would not Consider
</div>
</div>
</div>
</div>
</div>

<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>




<!-- Add Religious History  Modal -->
<div class="modal fade" id="religious_history_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Religious History</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-multi-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	




<label class="col-form-label">Religious History</label>

<div class="form-group row">

<div class="col-sm-12">

<input type="text" readonly="" value="Religious History" name="field" class="form-control">
<div class="input-group-append">
<a href="javascript:;" id="releghistm" style="position: absolute;
    right: 24px;
    top: 9px;">
<span class="fa fa-arrow-down arrows" id="downrehism"></span>
<span class="fa fa-arrow-up" id="upreghism" style="display:none;"></span>

</a>
</div>
</div>

<div id="releghistprom" style="display:none;">
	<br><br>
<div class="row">
	<div class="col-sm-5"></div>
<div class="col-sm-4">
<a href="javascript:;" onclick="history_check()">Select All</a>
</div>
<div class="col-sm-3">
<a href="javascript:;" onclick="history_uncheck()">Clear All</a>
</div>
</div>

<br>

<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" class="history_select" @if(preg_match("/Muslim Since Birth/", "$religious_history")) checked="" @endif value="Muslim Since Birth"> Muslim Since Birth </div>
<div class="col-sm-4">
 <input type="checkbox" name="value[]" class="history_select" @if(preg_match("/Revert Muslim/", "$religious_history")) checked="" @endif value="Revert Muslim"> Revert Muslim 
</div>

</div>
</div>
</div>
</div>

<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>




<!-- Add Other Language  Modal -->
<div class="modal fade" id="other_language_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Other Language</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-multi-filed') }}">
<div class="form-group">
	{{ csrf_field() }}





<label class="col-form-label">Other Language</label>

<div class="form-group row">

<div class="col-sm-12">

<input type="text" readonly="" value="Other language" name="field" class="form-control">
<div class="input-group-append">
<a href="javascript:;" id="other_languagem" style="position: absolute;
    right: 24px;
    top: 9px;">
<span class="fa fa-arrow-down arrows" id="do_otherm"></span>
<span class="fa fa-arrow-up" id="up_otherm" style="display:none;"></span>

</a>
</div>
</div>

<div id="other_languagesm" style="display:none;">
	<br><br>
<div class="row">
	<div class="col-sm-5"></div>
<div class="col-sm-4">
<a href="javascript:;" onclick="lan_check()" >Select All</a>
</div>
<div class="col-sm-3">
<a href="javascript:;" onclick="lan_uncheck()"  >Clear All</a>
</div>
</div>

<br>

<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if(preg_match("/Urdu/", "$other_language")) checked="" @endif  class="other_lan" value="Urdu"> Urdu </div>
<div class="col-sm-4">
 <input type="checkbox" name="value[]" @if (preg_match("/Punjabi/", "$other_language")) checked="" @endif class="other_lan" value="Punjabi"> Punjabi </div>
{{-- </div> --}}
{{-- </div>
</div> --}}
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Pashto/", "$other_language")) checked="" @endif class="other_lan" value="Pashto"> Pashto </div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Sindhi/", "$other_language")) checked="" @endif class="other_lan" value="Sindhi"> Sindhi 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Saraiki/", "$other_language")) checked="" @endif class="other_lan" value="Saraiki"> Saraiki </div>
<div class="col-sm-4"> 
<input type="checkbox" name="value[]" @if (preg_match("/Balochi/", "$other_language")) checked="" @endif class="other_lan" value="Balochi"> Balochi </div>

<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Hindko/", "$other_language")) checked="" @endif class="other_lan" value="Hindko"> Hindko </div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/English/", "$other_language")) checked="" @endif class="other_lan" value="English"> English 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Malayalam/", "$other_language")) checked="" @endif class="other_lan" value="Malayalam"> Malayalam </div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Aka/", "$other_language")) checked="" @endif class="other_lan" value="Aka"> Aka
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Angika/", "$other_language")) checked="" @endif class="other_lan" value="Angika"> Angika 
</div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Arabic/", "$other_language")) checked="" @endif class="other_lan" value="Arabic"> Arabic 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Arunachali/", "$other_language")) checked="" @endif class="other_lan" value="Arunachali"> Arunachali </div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Assamese/", "$other_language")) checked="" @endif class="other_lan" value="Assamese"> Assamese 
</div>

<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Awadhi/", "$other_language")) checked="" @endif class="other_lan" value="Awadhi"> Awadhi 
</div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Badaga/", "$other_language")) checked="" @endif class="other_lan" value="Badaga"> Badaga 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Bengali/", "$other_language")) checked="" @endif class="other_lan" value="Bengali"> Bengali </div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Bhojpuri/", "$other_language")) checked="" @endif class="other_lan" value="Bhojpuri"> Bhojpuri 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Bihari/", "$other_language")) checked="" @endif class="other_lan" value="Bihari"> Bihari 
</div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Brij/", "$other_language")) checked="" @endif class="other_lan" value="Brij"> Brij <br>
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Chatisgarhi/", "$other_language")) checked="" @endif class="other_lan" value="Chatisgarhi"> Chatisgarhi </div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Coorgi/", "$other_language")) checked="" @endif class="other_lan" value="Coorgi"> Coorgi 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Dogri/", "$other_language")) checked="" @endif class="other_lan" value="Dogri"> Dogri <</div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/French/", "$other_language")) checked="" @endif class="other_lan" value="French"> French 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Garhwali/", "$other_language")) checked="" @endif class="other_lan" value="Garhwali"> Garhwali </div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Garo/", "$other_language")) checked="" @endif class="other_lan" value="Garo"> Garo <br>
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Gujarati/", "$other_language")) checked="" @endif class="other_lan" value="Gujarati"> Gujarati </div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Haryanvi/", "$other_language")) checked="" @endif class="other_lan" value="Haryanvi"> Haryanvi </div>

<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Himachali Pahari/", "$other_language")) checked="" @endif class="other_lan" value="Himachali Pahari"> Himachali/Pahari </div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Hindi/", "$other_language")) checked="" @endif class="other_lan" value="Hindi"> Hindi 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Kannada/", "$other_language")) checked="" @endif class="other_lan" value="Kannada"> Kannada </div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Kashmiri/", "$other_language")) checked="" @endif class="other_lan" value="Kashmiri"> Kashmiri 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Khandesi/", "$other_language")) checked="" @endif class="other_lan" value="Khandesi"> Khandesi </div>

<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Khasi/", "$other_language")) checked="" @endif class="other_lan" value="Khasi"> Khasi
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Konkani/", "$other_language")) checked="" @endif class="other_lan" value="Konkani"> Konkani </div>

<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Koshali/", "$other_language")) checked="" @endif class="other_lan" value="Koshali"> Koshali 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Kumaoni/", "$other_language")) checked="" @endif class="other_lan" value="Kumaoni"> Kumaoni </div>

<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Kutchi/", "$other_language")) checked="" @endif class="other_lan" value="Kutchi"> Kutchi 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Ladacki/", "$other_language")) checked="" @endif class="other_lan" value="Ladacki"> Ladacki 
</div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Lepcha/", "$other_language")) checked="" @endif class="other_lan" value="Lepcha"> Lepcha 
</div>

<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Magahi/", "$other_language")) checked="" @endif class="other_lan" value="Magahi"> Magahi </div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Maithili/", "$other_language")) checked="" @endif class="other_lan" value="Maithili"> Maithili 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Malay/", "$other_language")) checked="" @endif class="other_lan" value="Malay"> Malay </div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Manipuri/", "$other_language")) checked="" @endif class="other_lan" value="Manipuri"> Manipuri 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Marathi/", "$other_language")) checked="" @endif class="other_lan" value="Marathi"> Marathi </div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Marwari/", "$other_language")) checked="" @endif class="other_lan" value="Marwari"> Marwari 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Miji/", "$other_language")) checked="" @endif class="other_lan" value="Miji"> Miji 
</div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Miza/", "$other_language")) checked="" @endif class="other_lan" value="Miza"> Miza <br>
</div>

<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Monpa/", "$other_language")) checked="" @endif class="other_lan" value="Monpa"> Monpa 
</div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Nepali/", "$other_language")) checked="" @endif class="other_lan" value="Nepali"> Nepali 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Nicobarese/", "$other_language")) checked="" @endif class="other_lan" value="Nicobarese"> Nicobarese </div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Oriya/", "$other_language")) checked="" @endif class="other_lan" value="Oriya"> Oriya 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Persian/", "$other_language")) checked="" @endif class="other_lan" value="Persian"> Persian </div>
<div class="col-sm-4">

<input type="checkbox" name="value[]" @if (preg_match("/Rajasthani/", "$other_language")) checked="" @endif class="other_lan" value="Rajasthani"> Rajasthani 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Russian/", "$other_language")) checked="" @endif class="other_lan" value="Russian"> Russian </div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Sanskrit/", "$other_language")) checked="" @endif class="other_lan" value="Sanskrit"> Sanskrit 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Santhali/", "$other_language")) checked="" @endif class="other_lan" value="Santhali"> Santhali
</div>
 <div class="col-sm-4">

<input type="checkbox" name="value[]" @if (preg_match("/Sinhala/", "$other_language")) checked="" @endif class="other_lan" value="Sinhala"> Sinhala 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Sourashtra/", "$other_language")) checked="" @endif class="other_lan" value="Sourashtra"> Sourashtra </div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Spanish/", "$other_language")) checked="" @endif class="other_lan" value="Spanish"> Spanish 
</div>

<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Tamil/", "$other_language")) checked="" @endif class="other_lan" value="Tamil"> Tamil 
</div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Telugu/", "$other_language")) checked="" @endif class="other_lan" value="Telugu">Telugu 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Tripuri/", "$other_language")) checked="" @endif class="other_lan" value="Tripuri"> Tripuri </div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Tulu/", "$other_language")) checked="" @endif class="other_lan" value="Tulu"> Tulu 
</div>
</div>
</div>
</div>
</div>
<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>





<!-- Add Other Language  Modal -->
<div class="modal fade" id="loking_other_language_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Looking Other Language</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-multi-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	




<label class="col-form-label">Looking Other Language</label>

<div class="form-group row">

<div class="col-sm-12">

<input type="text" readonly="" value="Partner other language" name="field" class="form-control">
<div class="input-group-append">
<a href="javascript:;" id="loking_other_languagem" style="position: absolute;
    right: 24px;
    top: 9px;">
<span class="fa fa-arrow-down arrows" id="loking_do_otherm"></span>
<span class="fa fa-arrow-up" id="loking_up_otherm" style="display:none;"></span>

</a>
</div>
</div>

<div id="loking_other_languagesm" style="display:none;">
	<br><br>
<div class="row">
	<div class="col-sm-5"></div>
<div class="col-sm-4">
<a href="javascript:;" onclick="lan_check()" >Select All</a>
</div>
<div class="col-sm-3">
<a href="javascript:;" onclick="lan_uncheck()"  >Clear All</a>
</div>
</div>

<br>

<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if(preg_match("/Urdu/", "$other_language")) checked="" @endif  class="other_lan" value="Urdu"> Urdu </div>
<div class="col-sm-4">
 <input type="checkbox" name="value[]" @if (preg_match("/Punjabi/", "$other_language")) checked="" @endif class="other_lan" value="Punjabi"> Punjabi </div>
{{-- </div> --}}
{{-- </div>
</div> --}}
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Pashto/", "$other_language")) checked="" @endif class="other_lan" value="Pashto"> Pashto </div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Sindhi/", "$other_language")) checked="" @endif class="other_lan" value="Sindhi"> Sindhi 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Saraiki/", "$other_language")) checked="" @endif class="other_lan" value="Saraiki"> Saraiki </div>
<div class="col-sm-4"> 
<input type="checkbox" name="value[]" @if (preg_match("/Balochi/", "$other_language")) checked="" @endif class="other_lan" value="Balochi"> Balochi </div>

<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Hindko/", "$other_language")) checked="" @endif class="other_lan" value="Hindko"> Hindko </div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/English/", "$other_language")) checked="" @endif class="other_lan" value="English"> English 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Malayalam/", "$other_language")) checked="" @endif class="other_lan" value="Malayalam"> Malayalam </div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Aka/", "$other_language")) checked="" @endif class="other_lan" value="Aka"> Aka
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Angika/", "$other_language")) checked="" @endif class="other_lan" value="Angika"> Angika 
</div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Arabic/", "$other_language")) checked="" @endif class="other_lan" value="Arabic"> Arabic 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Arunachali/", "$other_language")) checked="" @endif class="other_lan" value="Arunachali"> Arunachali </div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Assamese/", "$other_language")) checked="" @endif class="other_lan" value="Assamese"> Assamese 
</div>

<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Awadhi/", "$other_language")) checked="" @endif class="other_lan" value="Awadhi"> Awadhi 
</div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Badaga/", "$other_language")) checked="" @endif class="other_lan" value="Badaga"> Badaga 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Bengali/", "$other_language")) checked="" @endif class="other_lan" value="Bengali"> Bengali </div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Bhojpuri/", "$other_language")) checked="" @endif class="other_lan" value="Bhojpuri"> Bhojpuri 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Bihari/", "$other_language")) checked="" @endif class="other_lan" value="Bihari"> Bihari 
</div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Brij/", "$other_language")) checked="" @endif class="other_lan" value="Brij"> Brij <br>
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Chatisgarhi/", "$other_language")) checked="" @endif class="other_lan" value="Chatisgarhi"> Chatisgarhi </div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Coorgi/", "$other_language")) checked="" @endif class="other_lan" value="Coorgi"> Coorgi 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Dogri/", "$other_language")) checked="" @endif class="other_lan" value="Dogri"> Dogri <</div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/French/", "$other_language")) checked="" @endif class="other_lan" value="French"> French 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Garhwali/", "$other_language")) checked="" @endif class="other_lan" value="Garhwali"> Garhwali </div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Garo/", "$other_language")) checked="" @endif class="other_lan" value="Garo"> Garo <br>
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Gujarati/", "$other_language")) checked="" @endif class="other_lan" value="Gujarati"> Gujarati </div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Haryanvi/", "$other_language")) checked="" @endif class="other_lan" value="Haryanvi"> Haryanvi </div>

<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Himachali Pahari/", "$other_language")) checked="" @endif class="other_lan" value="Himachali Pahari"> Himachali/Pahari </div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Hindi/", "$other_language")) checked="" @endif class="other_lan" value="Hindi"> Hindi 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Kannada/", "$other_language")) checked="" @endif class="other_lan" value="Kannada"> Kannada </div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Kashmiri/", "$other_language")) checked="" @endif class="other_lan" value="Kashmiri"> Kashmiri 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Khandesi/", "$other_language")) checked="" @endif class="other_lan" value="Khandesi"> Khandesi </div>

<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Khasi/", "$other_language")) checked="" @endif class="other_lan" value="Khasi"> Khasi
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Konkani/", "$other_language")) checked="" @endif class="other_lan" value="Konkani"> Konkani </div>

<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Koshali/", "$other_language")) checked="" @endif class="other_lan" value="Koshali"> Koshali 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Kumaoni/", "$other_language")) checked="" @endif class="other_lan" value="Kumaoni"> Kumaoni </div>

<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Kutchi/", "$other_language")) checked="" @endif class="other_lan" value="Kutchi"> Kutchi 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Ladacki/", "$other_language")) checked="" @endif class="other_lan" value="Ladacki"> Ladacki 
</div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Lepcha/", "$other_language")) checked="" @endif class="other_lan" value="Lepcha"> Lepcha 
</div>

<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Magahi/", "$other_language")) checked="" @endif class="other_lan" value="Magahi"> Magahi </div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Maithili/", "$other_language")) checked="" @endif class="other_lan" value="Maithili"> Maithili 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Malay/", "$other_language")) checked="" @endif class="other_lan" value="Malay"> Malay </div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Manipuri/", "$other_language")) checked="" @endif class="other_lan" value="Manipuri"> Manipuri 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Marathi/", "$other_language")) checked="" @endif class="other_lan" value="Marathi"> Marathi </div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Marwari/", "$other_language")) checked="" @endif class="other_lan" value="Marwari"> Marwari 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Miji/", "$other_language")) checked="" @endif class="other_lan" value="Miji"> Miji 
</div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Miza/", "$other_language")) checked="" @endif class="other_lan" value="Miza"> Miza <br>
</div>

<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Monpa/", "$other_language")) checked="" @endif class="other_lan" value="Monpa"> Monpa 
</div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Nepali/", "$other_language")) checked="" @endif class="other_lan" value="Nepali"> Nepali 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Nicobarese/", "$other_language")) checked="" @endif class="other_lan" value="Nicobarese"> Nicobarese </div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Oriya/", "$other_language")) checked="" @endif class="other_lan" value="Oriya"> Oriya 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Persian/", "$other_language")) checked="" @endif class="other_lan" value="Persian"> Persian </div>
<div class="col-sm-4">

<input type="checkbox" name="value[]" @if (preg_match("/Rajasthani/", "$other_language")) checked="" @endif class="other_lan" value="Rajasthani"> Rajasthani 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Russian/", "$other_language")) checked="" @endif class="other_lan" value="Russian"> Russian </div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Sanskrit/", "$other_language")) checked="" @endif class="other_lan" value="Sanskrit"> Sanskrit 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Santhali/", "$other_language")) checked="" @endif class="other_lan" value="Santhali"> Santhali
</div>
 <div class="col-sm-4">

<input type="checkbox" name="value[]" @if (preg_match("/Sinhala/", "$other_language")) checked="" @endif class="other_lan" value="Sinhala"> Sinhala 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Sourashtra/", "$other_language")) checked="" @endif class="other_lan" value="Sourashtra"> Sourashtra </div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Spanish/", "$other_language")) checked="" @endif class="other_lan" value="Spanish"> Spanish 
</div>

<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Tamil/", "$other_language")) checked="" @endif class="other_lan" value="Tamil"> Tamil 
</div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Telugu/", "$other_language")) checked="" @endif class="other_lan" value="Telugu">Telugu 
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Tripuri/", "$other_language")) checked="" @endif class="other_lan" value="Tripuri"> Tripuri </div>
<div class="col-sm-4">
<input type="checkbox" name="value[]" @if (preg_match("/Tulu/", "$other_language")) checked="" @endif class="other_lan" value="Tulu"> Tulu 
</div>
</div>
</div>
</div>
</div>
<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>





<!-- Add Hobbies intrest modal  Modal -->
<div class="modal fade" id="hobbies_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Hobbies/Interest</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-multi-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	




<label class="col-form-label">Hobbies/Interest</label>
<div class="form-group row">
{{-- <label for="hobbies" class="col-sm-5 col-form-label">Hobbies/Interest:</label> --}}
<div class="col-sm-12">

<input type="text" readonly="" value="Hobbies" name="field" class="form-control">
<div class="input-group-append">
<a href="javascript:;" id="hobim" style="position: absolute;
    right: 24px;
    top: 9px;">
<span class="fa fa-arrow-down arrows" id="dom"></span>
<span class="fa fa-arrow-up" id="upsm" style="display:none;"></span>

</a>
</div>
</div>

<div id="hobbiesm" style="display:none;">
	<br><br>
<div class="row">
	<div class="col-sm-5"></div>
<div class="col-sm-4">
<a href="javascript:;" onclick="check_hobi()" >Select All</a>
</div>
<div class="col-sm-3">
<a href="javascript:;" onclick="uncheck_hobi()"  >Clear All</a>
</div>
</div>

<br>
<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input class="check_hobies" type="checkbox"  @if (preg_match("/Book Reading/", "$hobbies")) checked="" @endif name="value[]" value="Book Reading"> Book Reading</div>
<div class="col-sm-4">
<input class="check_hobies" type="checkbox" name="value[]" @if (preg_match("/Playing Cricket/", "$hobbies")) checked="" @endif value="Playing Cricket"> Playing Cricket</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
<input class="check_hobies" type="checkbox" name="value[]" @if (preg_match("/Football/", "$hobbies")) checked="" @endif value="Football">    Football
</div>
<div class="col-sm-4">
<input class="check_hobies" type="checkbox" name="value[]" @if (preg_match("/Reading News/", "$hobbies")) checked="" @endif value="Reading News"> Reading News 
</div>
</div>
</div>
</div>
</div>
<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>


<!-- Add looking annual income modal  Modal -->
<div class="modal fade" id="loking_a_income_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Annual Income</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	<input type="hidden" name="field" value="loking_a_income">




<label class="col-form-label">Annual Income</label>
<select name="value" id="" class=" form-control">
<option value="">Please select..</option>
<option value="Prefer not to say">Prefer not to say</option>
<option value="Less than 50000">Less than 50000</option>
<option value="100 Thousand">100 Thousand</option>
<option value="Less than 50000">Less than 50000</option>
<option value="150 Thousand">150 Thousand</option>
<option value="200 Thousand">200 Thousand</option>
<option value="250 Thousand">250 Thousand</option>
<option value="300 Thousand">300 Thousand</option>
<option value="350 Thousand">350 Thousand</option>
<option value="400 Thousand">400 Thousand</option>
<option value="450 Thousand">450 Thousand</option>
<option value="500 Thousand">500 Thousand</option>
<option value="550 Thousand">550 Thousand</option>
<option value="600 Thousand">600 Thousand</option>
<option value="650 Thousand">650 Thousand</option>
<option value="700 Thousand">700 Thousand</option>
<option value="750 Thousand">750 Thousand</option>
<option value="800 Thousand">800 Thousand</option>
<option value="850 Thousand">850 Thousand</option>
<option value="900 Thousand">900 Thousand</option>
<option value="950 Thousand">950 Thousand</option>
<option value="1. Million">1. Million</option>
<option value="1.5 Million">1.5 Million</option>
<option value="2. Million">2. Million</option>
<option value="2.5 Million">2.5 Million</option>
<option value="3. Million and above">3. Million and above</option>
</select>
</div>
<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>



<!-- Add Employed in Model -->
<div class="modal fade" id="employed_in_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Employed in</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	<input type="hidden" name="field" value="employed_in">




<label class="col-form-label">Employed in</label>
<input type="text" name="value" placeholder="employed in" class="form-control">
</div>
<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>




<!-- Add Loking Eating Model -->
<div class="modal fade" id="loking_hijab_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Hijab</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-multi-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	<input type="hidden" value="Observes Hija" name="field" class="form-control">




<input class="hijab_select" type="checkbox"  @if (preg_match("/Always/", "$observes_hijab")) checked="" @endif name="value[]" value="Always"> Always

<input class="hijab_select" type="checkbox" name="value[]" @if (preg_match("/Always with Niqab/", "$observes_hijab")) checked="" @endif value="Always with Niqab"> Always with Niqab


<input class="hijab_select" type="checkbox" name="value[]" @if (preg_match("/Sometimes/", "$observes_hijab")) checked="" @endif value="Sometimes">    Sometimes


<input class="hijab_select" type="checkbox" name="value[]" @if (preg_match("/Never News/", "$observes_hijab")) checked="" @endif value="Never"> Never
</div>
<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>



<!-- Add Loking physical status Model -->
<div class="modal fade" id="loking_physical_status_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Looking physical status </h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	<input type="hidden" name="field" value="loking_physcial_status">
<label for="name" class="col-form-label"> Physical status : </label>

<select name="value" id="loking_physcial_status" class="form-control">
<option value="">--select--</option>
<option value="Normal Person">Normal Person</option>
<option value="Deaf/Dumb">Deaf/Dumb</option>
<option value="Blind">Blind</option>
<option value="Physically Challenged">Physically Challenged</option>
<option value="Mentally Challenged">Mentally Challenged</option>

</select>

</div>
<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>


<!-- Add Loking Height Model -->
<div class="modal fade" id="loking_height_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Looking Height </h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	<input type="hidden" name="field" value="loking_height_from">




<div class="form-group row">
<label for="name" class="col-sm-2 col-form-label"> from : </label>
<div class="col-sm-4">
<select name="value" id="loking_height_from"  class="form-control">

<option value="">Height..</option>
<option value="Below 4ft 6in - 137cm">Below 4ft 6in - 137cm</option>
<option value="4ft 6in - 137cm">4ft 6in - 137cm</option>
<option value="4ft 7in - 139cm">4ft 7in - 139cm</option>
<option value="4ft 8in - 142cm">4ft 8in - 142cm</option>
<option value="4ft 9in - 144cm">4ft 9in - 144cm</option>
<option value="4ft 10in - 147cm">4ft 10in - 147cm</option>
<option value="4ft 11in - 149cm">4ft 11in - 149cm</option>
<option value="5ft - 152cm">5ft - 152cm</option>
<option value="5ft 1in - 154cm">5ft 1in - 154cm</option>
<option value="5ft 2in - 157cm">5ft 2in - 157cm</option>
<option value="5ft 3in - 160cm">5ft 3in - 160cm</option>
<option value="5ft 4in - 162cm">5ft 4in - 162cm</option>
<option value="5ft 5in - 165cm">5ft 5in - 165cm</option>
<option value="5ft 6in - 167cm">5ft 6in - 167cm</option>
<option value="5ft 7in - 170cm">5ft 7in - 170cm</option>
<option value="5ft 8in - 172cm">5ft 8in - 172cm</option>
<option value="5ft 9in - 175cm">5ft 9in - 175cm</option>
<option value="5ft 10in - 177cm">5ft 10in - 177cm</option>
<option value="5ft 11in - 180cm">5ft 11in - 180cm</option>
<option value="6ft - 182cm">6ft - 182cm</option>
<option value="6ft 1in - 185cm">6ft 1in - 185cm</option>
<option value="6ft 2in - 187cm">6ft 2in - 187cm</option>
<option value="6ft 3in - 190cm">6ft 3in - 190cm</option>
<option value="6ft 4in - 193cm">6ft 4in - 193cm</option>
<option value="6ft 5in - 195cm">6ft 5in - 195cm</option>
<option value="6ft 6in - 198cm">6ft 6in - 198cm</option>
<option value="6ft 7in - 200cm">6ft 7in - 200cm</option>
<option value="6ft 8in - 203cm">6ft 8in - 203cm</option>
<option value="6ft 9in - 205cm">6ft 9in - 205cm</option>
<option value="6ft 10in - 208cm">6ft 10in - 208cm</option>
<option value="6ft 11in - 210cm">6ft 11in - 210cm</option>
<option value="7ft - 213cm">7ft - 213cm</option>
<option value="Above 7ft - 213c">Above 7ft - 213cm</option>
</select>
</div>
<label for="name" class="col-sm-2 col-form-label"> to : </label>
<div class="col-sm-4">
<select name="loking_height_to" id="loking_height_to" class="form-control">

<option value="">Height..</option>
<option value="Below 4ft 6in - 137cm">Below 4ft 6in - 137cm</option>
<option value="4ft 6in - 137cm">4ft 6in - 137cm</option>
<option value="4ft 7in - 139cm">4ft 7in - 139cm</option>
<option value="4ft 8in - 142cm">4ft 8in - 142cm</option>
<option value="4ft 9in - 144cm">4ft 9in - 144cm</option>
<option value="4ft 10in - 147cm">4ft 10in - 147cm</option>
<option value="4ft 11in - 149cm">4ft 11in - 149cm</option>
<option value="5ft - 152cm">5ft - 152cm</option>
<option value="5ft 1in - 154cm">5ft 1in - 154cm</option>
<option value="5ft 2in - 157cm">5ft 2in - 157cm</option>
<option value="5ft 3in - 160cm">5ft 3in - 160cm</option>
<option value="5ft 4in - 162cm">5ft 4in - 162cm</option>
<option value="5ft 5in - 165cm">5ft 5in - 165cm</option>
<option value="5ft 6in - 167cm">5ft 6in - 167cm</option>
<option value="5ft 7in - 170cm">5ft 7in - 170cm</option>
<option value="5ft 8in - 172cm">5ft 8in - 172cm</option>
<option value="5ft 9in - 175cm">5ft 9in - 175cm</option>
<option value="5ft 10in - 177cm">5ft 10in - 177cm</option>
<option value="5ft 11in - 180cm">5ft 11in - 180cm</option>
<option value="6ft - 182cm">6ft - 182cm</option>
<option value="6ft 1in - 185cm">6ft 1in - 185cm</option>
<option value="6ft 2in - 187cm">6ft 2in - 187cm</option>
<option value="6ft 3in - 190cm">6ft 3in - 190cm</option>
<option value="6ft 4in - 193cm">6ft 4in - 193cm</option>
<option value="6ft 5in - 195cm">6ft 5in - 195cm</option>
<option value="6ft 6in - 198cm">6ft 6in - 198cm</option>
<option value="6ft 7in - 200cm">6ft 7in - 200cm</option>
<option value="6ft 8in - 203cm">6ft 8in - 203cm</option>
<option value="6ft 9in - 205cm">6ft 9in - 205cm</option>
<option value="6ft 10in - 208cm">6ft 10in - 208cm</option>
<option value="6ft 11in - 210cm">6ft 11in - 210cm</option>
<option value="7ft - 213cm">7ft - 213cm</option>
<option value="Above 7ft - 213c">Above 7ft - 213cm</option>
</select>
</div>
</div>



</div>
<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>


<!-- Add Loking age Model -->
<div class="modal fade" id="loking_age_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Looking Age </h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	<input type="hidden" name="field" value="loking_age_from">




<div class="form-group row">
<label for="name" class="col-sm-2 col-form-label">Age from : </label>
<div class="col-sm-4">
<select name="value" class="form-control loking_age_from">
	<option value="">--select--</option>
@for($i =  date('y');  $i <= date('y')+82 ; $i++)
<option value="{{ $i }}" >{{ $i }}</option>
@endfor 
</select>
</div>
<label for="name" class="col-sm-2 col-form-label">Age to : </label>
<div class="col-sm-4">
<select name="loking_age_to" class="form-control loking_age_to">
	<option value="">--select--</option>
@for($i = date('y')+82; $i >= date('y'); $i--)
<option value="{{ $i }}" >{{ $i }}</option>
@endfor 
</select>
</div>
</div>



</div>
<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>


<!-- Add Loking Eating Model -->
<div class="modal fade" id="loking_eating_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Eating Habits</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-multi-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	<input type="hidden" value="eating type" name="field" class="form-control">





<label class="col-form-label">Eating Habits</label><br>
<input type="checkbox" name="value[]" @if (preg_match("/Dose not/", "$loking_eating")) checked="" @endif value="Dose not"> Dose not matter &nbsp 
<input type="checkbox" name="value[]" @if (preg_match("/Veg/", "$loking_eating")) checked="" @endif value="Veg"> Veg &nbsp
 <input type="checkbox" name="value[]" @if (preg_match("/Occasionally Non-veg/", "$loking_eating")) checked="" @endif value="Occasionally Non-veg"> Occasionally Non-veg &nbsp <input type="checkbox" name="value[]" @if (preg_match("/Eggetarian/", "$loking_eating")) checked="" @endif value="Eggetarian"> Eggetarian
</div>
<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>


<!-- Add Employed in modal  Modal -->
<div class="modal fade" id="loking_langaugee_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Mother Language</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	<input type="hidden" name="field" value="loking_language">




<label class="col-form-label">Mother Language</label>
<select name="value" selected="selected" id="" class="form-control language">

<option value="">Select</option> 
<option value="Urdu">Urdu</option> 
<option value="Punjabi">Punjabi</option>
<option value="Pashto">Pashto</option> 
<option value="Sindhi">Sindhi</option> 
<option value="Saraiki">Saraiki</option> 
<option value="Balochi">Balochi</option>  
<option value="Hindko">Hindko</option>
<option value="English">English</option>
<option disabled="">..............................................................</option> 
<option value="Malayalam">Malayalam</option>    
<option value="Aka">Aka</option>
<option value="Angika">Angika</option>
<option value="Arabic">Arabic</option> 
<option value="Arunachali">Arunachali</option>
<option value="Assamese">Assamese</option> 
<option value="Awadhi">Awadhi</option> 
<option value="Badaga">Badaga</option> 
<option value="Bengali">Bengali </option>
<option value="Bhojpuri">Bhojpuri</option> 
<option value="Bihari">Bihari</option> 
<option value="Brij">Brij</option> 
<option value="Chatisgarhi">Chatisgarhi</option>
<option value="Coorgi">Coorgi</option> 
<option value="Dogri">Dogri</option> 

<option value="French">French</option> 
<option value="Garhwali">Garhwali</option> 
<option value="Garo">Garo</option> 
<option value="Gujarati">Gujarati</option>
<option value="Haryanvi">Haryanvi</option>
<option value="Himachali/Pahari">Himachali/Pahari</option> 
<option value="Hindi">Hindi</option> 


<option value="Kannada">Kannada</option> 
<option value="Kashmiri">Kashmiri</option> 
<option value="Khandesi">Khandesi</option> 
<option value="Khasi">Khasi</option> 
<option value="Konkani">Konkani</option> 
<option value="Koshali">Koshali</option> 
<option value="Kumaoni">Kumaoni</option> 
<option value="Kutchi">Kutchi</option> 
<option value="Ladacki">Ladacki</option> 
<option value="Lepcha">Lepcha</option> 
<option value="Magahi">Magahi</option> 
<option value="Maithili">Maithili</option> 
<option value="Malay">Malay</option> 
<option value="Manipuri">Manipuri</option> 
<option value="Marathi">Marathi</option> 
<option value="Marwari">Marwari</option> 
<option value="Miji">Miji</option> 
<option value="Miza">Miza</option> 
<option value="Monpa">Monpa</option> 
<option value="Nepali">Nepali</option> 
<option value="Nicobarese">Nicobarese</option> 
<option value="Oriya">Oriya</option> 

<option value="Persian">Persian</option> 

<option value="Rajasthani">Rajasthani</option> 
<option value="Russian">Russian</option> 
<option value="Sanskrit">Sanskrit</option> 
<option value="Santhali">Santhali</option> 

<option value="Sinhala">Sinhala</option> 
<option value="Sourashtra">Sourashtra</option> 
<option value="Spanish">Spanish</option> 
<option value="Tamil">Tamil</option> 
<option value="Telugu">Telugu</option> 
<option value="Tripuri">Tripuri</option> 
<option value="Tulu">Tulu</option> 

</select>

</div>
<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>


<!-- Add Looking Occupation modal  Modal -->
<div class="modal fade" id="loking_occupation_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Looking Occupation</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	<input type="hidden" name="field" value="loking_job">




<label class="col-form-label">Looking Occupation</label>
<select name="value" class="form-control loking_job">
	<option value="">--select--</option>
<option value="Softwarw Engineer">Softwarw Engineer</option>
<option value="Producer/Director">Producer/Director</option>
<option value="Media">Media</option>
<option value="Marketing Manager">Marketing Manager</option>
<option value="HR Manager">HR Manager</option>
<option value="Lawyer">Lawyer</option>
<option value="I.T Porfissional">I.T Porfissional</option>
<option value="Teacher">Teacher</option>
<option value="University Lacturer">University Lacturer</option>
<option value="Business Administration">Business Administration</option>
<option value="Admin Officer"> Admin Officer</option>
<option value="Cival Engineer">Cival Engineer </option>
<option value="Electrical Engineer">Electrical Engineer</option>
{{-- <option value="MBBS">MBBS</option> --}}
<option value="Doctor">Doctor</option>
<option value="BBA">BBA</option>
<option value="Chartered Accountant">Chartered Accountant</option>

<option value="CSS Officer">CSS Officer </option>
<option value="No Occupation">No Occupation </option>
<option value="Business">Business</option>
<option value="Pilot">Pilot</option>
<option value="Police Officer">Police Officer</option>
<option value="Army Officer">Army Officer</option>
<option value="Air Force">Air Force</option>
<option value="Designer">Designer</option>
<option value="Computer Hardware">Computer Hardware</option>
<option value="Auto Mobile">Auto Mobile</option>
<option value="Traffic Warden">Traffic Warden</option>
<option value="Farmer">Farmer</option>
<option value="Shop Keeper">Shop Keeper</option>

<option value="Real Estate">Real Estate</option>

</select>
</div>
<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>



<!-- Add Looking education modal  Modal -->
<div class="modal fade" id="loking_education_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Looking Education</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	<input type="hidden" name="field" value="loking_education">




<label class="col-form-label">Looking Education</label>
<select name="value" id="" class="form-control loking_education">
<option selected="selected" value="">--- Select ---</option>
<optgroup label='Bachelors - Engineering/Computer'>
<option value='BCA'>BCA</option>
<option value='B Arch'>B Arch</option>
<option value='B Plan'>B Plan</option>
<option value='BE'>BE</option>
<option value='B Tech'>B Tech</option>
<option value='Aeronautical Engineering'>Aeronautical Engineering</option>
<option value='BSc Computer Science'>BSc Computer Science</option>
<option value='BSc IT'>BSc IT</option>
<option value='Bachelor of Engineering'>Bachelor of Engineering</option>
</optgroup>
<optgroup label='Masters - Engineering/Computer'>
<option value='MS (Engg.)'>MS (Engg.)</option>
<option value='M Arch'>M Arch</option>
<option value='MCA'>MCA</option>
<option value='PGDCA'>PGDCA</option>
<option value='ME'>ME</option>
<option value='M Tech'>M Tech</option>
<option value='MSc Computer Science'>MSc Computer Science</option>
<option value='MSc IT'>MSc IT</option>
<option value='Master of Engineering'>Master of Engineering</option>
</optgroup>
<optgroup label='Bachelors - Arts/Science/Commerce/Other'>
<option value='B Phil'>B Phil</option>
<option value='B Com'>B Com</option>
<option value='BSc'>BSc</option>
<option value='BA'>BA</option>
<option value='BFA'>BFA</option>
<option value='BLIS'>BLIS</option>
<option value='BSW'>BSW</option>
<option value='BMM (MASS MEDIA)'>BMM (MASS MEDIA)</option>
<option value='Bachelors Degree'>Bachelors Degree</option>
</optgroup>
<optgroup label='Masters - Arts/Science/Commerce/Other'>
<option value='M Phil'>M Phil</option>
<option value='M Com'>M Com</option>
<option value='M Sc'>M Sc</option>
<option value='MA'>MA</option>
<option value='MLIS'>MLIS</option>
<option value='MSW'>MSW</option>
<option value='Masters Degree'>Masters Degree</option>
</optgroup>
<optgroup label='Teachers Education - BEd/MEd'>
<option value='BEd'>BEd</option>
<option value='MEd'>MEd</option>
</optgroup>
<optgroup label='Management - MBA/BBA/Other'>
<option value='MHM'>MHM</option>
<option value='MBA'>MBA</option>
<option value='PGDM'>PGDM</option>
<option value='MFM (Financial Management)'>MFM (Financial Management)</option>
<option value='Master Degree in Management'>Master Degree in Management</option>
<option value='BHM'>BHM</option>
<option value='BBA'>BBA</option>
<option value='BFM (Financial Management)'>BFM (Financial Management)</option>
<option value='Bachelor Degree in Management'>Bachelor Degree in Management</option>
</optgroup>
<optgroup label='Medicine - MBBS/MD/MS'>
<option value='MBBS'>MBBS</option>
<option value='MD / MS (Medical)'>MD / MS (Medical)</option>
<option value='MCh - Master of Chirurgiae'>MCh - Master of Chirurgiae</option>
<option value='DM - Doctorate of Medicine'>DM - Doctorate of Medicine</option>
</optgroup>
<optgroup label='Medicine - Dental/Homeo/Ayu/Vet'>
<option value='BDS'>BDS</option>
<option value='MDS'>MDS</option>
<option value='BHMS'>BHMS</option>
<option value='MHMS'>MHMS</option>
<option value='BAMS'>BAMS</option>
<option value='MAMS'>MAMS</option>
<option value='Bachelor of Veterinary Science'>Bachelor of Veterinary Science</option>
<option value='Master of Veterinary Science'>Master of Veterinary Science</option>
<option value='Degree in Medicine'>Degree in Medicine</option>
<option value='Master in Medicine'>Master in Medicine</option>
</optgroup>

<optgroup label='Medicine - Pharmacy/Nursing/Lab/Health'>
<option value='BPT'>BPT</option>
<option value='MPT'>MPT</option>
<option value='B.Pharm'>B.Pharm</option>
<option value='M.Pharm'>M.Pharm</option>
<option value='BSc Nursing'>BSc Nursing</option>
<option value='MSc Nursing'>MSc Nursing</option>
<option value='Medical Course'>Medical Course</option>
<option value='Diploma in Nursing'>Diploma in Nursing</option>
<option value='Medical Laboratory Technology'>Medical Laboratory Technology</option>
</optgroup>

<optgroup label='Legal - BL/ML/LLB/LLM'>
<option value='BGL'>BGL</option>
<option value='Bachelor of Law'>Bachelor of Law</option>
<option value='LLB'>LLB</option>
<option value='Master of Law'>Master of Law</option>
<option value='LLM'>LLM</option>
<option value='Course in Legal'>Course in Legal</option>
</optgroup>

<optgroup label='Finance - CA/ICWAI/CS'>
<option value='CA Inter'>CA Inter</option>
<option value='CA Final'>CA Final</option>
<option value='ICWA'>ICWA</option>
<option value='Company Secretary (CS)'S>Company Secretary (CS)</option>
<option value='CFA (Chartered Financial Analyst)'>CFA (Chartered Financial Analyst)</option>
<option value='Course in Finance'>Course in Finance</option>
</optgroup>

<optgroup label='Doctorate'>
<option value='Ph D'>Ph D</option>
</optgroup>

<optgroup label='Civil Service'>
<option value='IAS'>IAS</option>
<option value='IPS'>IPS</option>
<option value='IRS'>IRS</option>
<option value='154'>IES</option>
<option value='155'>IFS</option>
<option value='156'>Civil Service</option>
</optgroup>


<optgroup label='Diploma'>
<option value='Diploma'>Diploma</option>
<option value='Polytechnic'>Polytechnic</option>
</optgroup>

<optgroup label='Higher Secondery/TTC/ITI'>
<option value='TTC'>TTC</option>
<option value='ITI'>ITI</option>
<option value='Higher Secondery'>Higher Secondery</option>
</optgroup>
<optgroup label='Other Education'>
<option value='High School'>High School</option>
<option value='Less than high school'>Less than high school</option>
<option value='Other Education'>Other Education</option>
</optgroup>
</select>
</div>
<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>




<!-- Add Unmarried Brother modal  Modal -->
<div class="modal fade" id="brother_unmarried_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Unmarried Brother</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	<input type="hidden" name="field" value="brother_unmarried">




<label class="col-form-label">Unmarried Brother</label>
<select name="value" class=" form-control">
<option value="">--select--</option>
<option value="0">0</option>
<option value="2">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="above">above</option>
</select>
</div>

<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>



<!-- Add Younger Sister modal  Modal -->
<div class="modal fade" id="younger_sister_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Younger Sister</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	<input type="hidden" name="field" value="younger_sister">




<label class="col-form-label">Younger Sister</label>
<select name="value" class=" form-control">
<option value="">--select--</option>
<option value="0">0</option>
<option value="2">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="above">above</option>
</select>
</div>

<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>


<!-- Add Unmarried Sister modal  Modal -->
<div class="modal fade" id="sister_unmarried_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Unmarried Sister</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	<input type="hidden" name="field" value="sister_unmarried">




<label class="col-form-label">Unmarried Sister</label>
<select name="value" class=" form-control">
<option value="">--select--</option>
<option value="0">0</option>
<option value="2">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="above">above</option>
</select>
</div>

<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>


<!-- Add married sister modal  Modal -->
<div class="modal fade" id="sister_married_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Married Sister</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	<input type="hidden" name="field" value="sister_married">




<label class="col-form-label">Married Sister</label>
<select name="value" class=" form-control">
<option value="">--select--</option>
<option value="0">0</option>
<option value="2">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="above">above</option>
</select>
</div>

<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>



<!-- Add Elder Siater modal  Modal -->
<div class="modal fade" id="elder_sister_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Elder Sister</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	<input type="hidden" name="field" value="elder_sister">




<label class="col-form-label">Elder Sister</label>
<select name="value" class=" form-control">
<option value="">--select--</option>
<option value="0">0</option>
<option value="2">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="above">above</option>
</select>
</div>

<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>



<!-- Add Married Brother modal  Modal -->
<div class="modal fade" id="brother_married_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Married Brother</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	<input type="hidden" name="field" value="brother_married">




<label class="col-form-label">Married Brother</label>
<select name="value" class=" form-control">
<option value="">--select--</option>
<option value="0">0</option>
<option value="2">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="above">above</option>
</select>
</div>

<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>




<!-- Add Younger Brother modal  Modal -->
<div class="modal fade" id="younger_brother_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Younger Brother</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	<input type="hidden" name="field" value="younger_brother">




<label class="col-form-label">Younger Brother</label>
<select name="value" class=" form-control">
<option value="">--select--</option>
<option value="0">0</option>
<option value="2">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="above">above</option>
</select>
</div>

<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>



<!-- Add Elder Brother modal  Modal -->
<div class="modal fade" id="elder_brother_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Elder Brother</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	<input type="hidden" name="field" value="elder_brother">




<label class="col-form-label">Elder Brother</label>
<select name="value" class=" form-control">
	<option value="">--select--</option>
<option value="0">0</option>
<option value="2">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="above">above</option>
</select>
</div>

<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>


<!-- Add Father detail modal  Modal -->
<div class="modal fade" id="father_detail_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Father Details</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	<input type="hidden" name="field" value="father_detail">




<label class="col-form-label">Father Details</label>
<select name="value" class="father_detail form-control">
	<option value="">--select--</option>
<option value="Alive">Alive</option>
<option value="Died">Died</option>
</select>
</div>

<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>



<!-- Add Father detail modal  Modal -->
<div class="modal fade" id="mother_detail_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Mother Details</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	<input type="hidden" name="field" value="mother_detail">




<label class="col-form-label">Mother Details</label>
<select name="value" class=" form-control">
	<option value="">--select--</option>
<option value="Alive">Alive</option>
<option value="Died">Died</option>
</select>
</div>

<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>

<!-- Add Mother Occupation modal  Modal -->
<div class="modal fade" id="mother_occupation_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Mother Occupation</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	<input type="hidden" name="field" value="mother_occupation">




<label class="col-form-label">Father Occupation</label>
<input type="text" name="value" placeholder="mother Occupation" class="form-control" >
</div>

<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>
	
<!-- Add Father Occupation modal  Modal -->
<div class="modal fade" id="father_occupation_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Father Occupation</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	<input type="hidden" name="field" value="father_occupation">




<label class="col-form-label">Father Occupation</label>
<input type="text" name="value" placeholder="Father Occupation" class="form-control" >
</div>

<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>



<!-- Add Assets modal  Modal -->
<div class="modal fade" id="assets_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Assets</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	<input type="hidden" name="field" value="assets">




<label class="col-form-label">Assets</label>
<select name="value" class="form-control">
<option value="">--select--</option>
<option value="Home">Home</option>
<option value="Plot">Plot</option>
<option value="Vehicle">Vehicle</option>
<option value="Nothing">Nothing</option>
<option value="other">Other</option>
</select>
</div>

<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>


<!-- Add finacial status modal  Modal -->
<div class="modal fade" id="finacial_status_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Finacial Status</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	<input type="hidden" name="field" value="finacial_status">




<label class="col-form-label">Finacial Status</label>
<select name="value" class="form-control">
<option value="">--select--</option>
<option value="Rich">Rich</option>
<option value="Upper Middle Class">Upper Middle Class</option>
<option value="Middle Class">Middle Class</option>
<option value="Lower Upper Middle Class">Lower Upper Middle Class</option>
<option value="Do not want to tell at this time">Do not want to tell at this time</option>
</select>
</div>

<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>

<!-- Add family type modal  Modal -->
<div class="modal fade" id="family_type_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Family type</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	<input type="hidden" name="field" value="family_type">




<label class="col-form-label">Family type</label>
<select name="value" class="form-control">
<option value="">--select--</option>
<option value="Nuclear Family">Nuclear Family</option>
<option value="joint Family">joint Family</option>
</select>
</div>

<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>


	<!-- Add Native country  Modal -->
<div class="modal fade" id="time_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Convenient time to call</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	<input type="hidden" name="field" value="convenient_time">




<label class="col-form-label">Convenient time to call</label>
<select name="value" class="form-control convenient_time">
<option value="">--select--</option>
<option value="7 AM">7 AM</option>
<option value="12 AM">12 AM</option>
<option value="Anytime">Anytime</option>
</select>
</div>

<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>

<!-- Add Native country  Modal -->
<div class="modal fade" id="native_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Native country state and city</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	<input type="hidden" name="field" value="native_country_id">



<div class="col-md-4">
<label class="col-form-label">Native Country</label>
<select onchange="native_country_change(this)"  class="form-control" name="value">
@foreach($country as $row)
<option  value="{{ $row->country_id }}">{{ $row->country_name }}</option>
@endforeach

</select>
</div>
<div class="col-md-4">
<label class="col-form-label">Native State</label>
<select onchange="native_state_change(this)" class="form-control native_state"  name="native_state_id">

</select>
<span style="color:red; font-size: 10px;">{{ $errors->first('state_id') }}</span>
</div>
<div class="col-md-4">
<label class="col-form-label">Native City</label>

<select  class="form-control native_city"  name="native_city_id">

</select>
</div>
<br><br><br>
</div>
<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>




<!-- Add present country  Modal -->
<div class="modal fade" id="present_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Present country</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	<input type="hidden" name="field" value="present_country_id">
<label class="col-form-label">Present Country</label>


<select  class="form-control" name="value">
@foreach($country as $row)
<option  value="{{ $row->country_id }}">{{ $row->country_name }}</option>
@endforeach

</select>
</div>
<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>


<!-- Add Martial status  Modal -->
<div class="modal fade" id="martial_status_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Martial Status</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	<input type="hidden" name="field" value="martial_status">
<label class="col-form-label">Add Martial Status</label>

<select name="value" id="" class="form-control">
<option value="" >Please Select</option>
<option value="Married">Married</option>
<option value="unmarried">unmarried</option>
<option value="Widow Widower">Widow Widower</option>
<option value="Divorcee">Divorcee</option>
<option value="separated">separated</option>
<option value="Annulled">Annulled</option>
</select>

</div>
<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>


<!-- Add Clan  Modal -->
<div class="modal fade" id="clan_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Clan</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	<input type="hidden" name="field" value="clan">
<label class="col-form-label">Add Clan</label>

<input type="text" name="value" class="form-control">

</div>
<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>



<!-- Add Caste  Modal -->
<div class="modal fade" id="cast_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Caste</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	<input type="hidden" name="field" value="cast">
<label class="col-form-label">Add Caste</label>

<select name="value" selected="selected" id="" class="form-control">

<option value="">Select</option> 

<option value="Abbasi">Abbasi</option>
<option value="Achakzai">Achakzai</option>
<option value="Afridi">Afridi</option>
<option value="Ansari">Ansari</option>
<option value="Arain">Arain</option>
<option value="Awan">Awan</option>
<option value="Bajwa">Bajwa</option>
<option value="Baig">Baig</option>
<option value="Bhatti">Bhatti</option>
<option value="Bhutta">Bhutta</option>
<option value="Bukhari">Bukhari</option>
<option value="Butt">Butt</option>
<option value="Chandio">Chandio</option>
<option value="Chaudhry">Chaudhry</option>
<option value="Chauhan">Chauhan</option>
<option value="Chishti">Chishti</option>
<option value="Chughtai">Chughtai</option>
<option value="Dar">Dar</option>
<option value="Dogar">Dogar</option>
<option value="Durrani">Durrani</option>
<option value="Farooqi">Farooqi</option>
<option value="Firdausi">Firdausi</option>
<option value="Gilani">Gilani</option>
<option value="Gujjar">Gujjar</option>
<option value="Gul">Gul</option>
<option value="Hashmi">Hashmi</option>
<option value="Isa Khel">Isa Khel</option>
<option value="Jafari">Jafari</option>
<option value="Jutt">Jutt</option>
<option value="Johiya">Johiya</option>
<option value="Kakakhel">Kakakhel</option>
<option value="Kakar">Kakar</option>
<option value="Kakazai">Kakazai</option>
<option value="Kamboh">Kamboh</option>
<option value="Kashmiri Shaikh">Kashmiri Shaikh</option>
<option value="Kayani">Kayani</option>
<option value="Khan">Khan</option>
<option value="Khattak">Khattak</option>
<option value="Khokhar">Khokhar</option>
<option value="Khosa">Khosa</option>
<option value="Lakhani">Lakhani</option>
<option value="Lodhi">Lodhi</option>
<option value="Mahar">Mahar</option>
<option value="Makhdoom">Makhdoom</option>
<option value="Malhotra">Malhotra</option>
<option value="Malik">Malik</option>
<option value="Memon">Memon</option>
<option value="Mengal">Mengal</option>
<option value="Meo">Meo</option>
<option value="Mian">Mian</option>
<option value="Mir">Mir</option>
<option value="Mirza">Mirza</option>
<option value="Mughal">Mughal</option>
<option value="Naqvi">Naqvi</option>
<option value="Niazi">Niazi</option>
<option value="Noorani">Noorani</option>
<option value="Pasha">Pasha</option>
<option value="Pirzada">Pirzada</option>
<option value="Qazi">Qazi</option>
<option value="Qureshi">Qureshi</option>
<option value="Rafiq">Rafiq</option>
<option value="Rajput">Rajput</option>
<option value="Rana">Rana</option>
<option value="Ranjha">Ranjha</option>
<option value="Rathore">Rathore</option>
<option value="Rizvi">Rizvi</option>
<option value="Saifi">Saifi</option>
<option value="Sheikh">Sheikh</option>
<option value="Siddiqui">Siddiqui</option>
<option value="Singh">Singh</option>
<option value="Syed">Syed</option>
<option value="Yousafzai">Yousafzai</option>
<option value="Zaidi">Zaidi</option>
<option value="Zubairi">Zubairi</option>
<option value="Yousafzai">Yousafzai</option>
<option value="other">Other</option>
<option value="Prefer not to say">Prefer not to say</option>

</select>

</div>
<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>



<!-- Add Language  Modal -->
<div class="modal fade" id="language_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Language</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	<input type="hidden" name="field" value="language">
<label class="col-form-label">Add Language</label>

<select name="value" selected="selected" id="" class="form-control language">

<option value="">Select</option> 
<option value="Urdu">Urdu</option> 
<option value="Punjabi">Punjabi</option>
<option value="Pashto">Pashto</option> 
<option value="Sindhi">Sindhi</option> 
<option value="Saraiki">Saraiki</option> 
<option value="Balochi">Balochi</option>  
<option value="Hindko">Hindko</option>
<option value="English">English</option>
<option disabled="">..............................................................</option> 
<option value="Malayalam">Malayalam</option>    
<option value="Aka">Aka</option>
<option value="Angika">Angika</option>
<option value="Arabic">Arabic</option> 
<option value="Arunachali">Arunachali</option>
<option value="Assamese">Assamese</option> 
<option value="Awadhi">Awadhi</option> 
<option value="Badaga">Badaga</option> 
<option value="Bengali">Bengali </option>
<option value="Bhojpuri">Bhojpuri</option> 
<option value="Bihari">Bihari</option> 
<option value="Brij">Brij</option> 
<option value="Chatisgarhi">Chatisgarhi</option>
<option value="Coorgi">Coorgi</option> 
<option value="Dogri">Dogri</option> 

<option value="French">French</option> 
<option value="Garhwali">Garhwali</option> 
<option value="Garo">Garo</option> 
<option value="Gujarati">Gujarati</option>
<option value="Haryanvi">Haryanvi</option>
<option value="Himachali/Pahari">Himachali/Pahari</option> 
<option value="Hindi">Hindi</option> 


<option value="Kannada">Kannada</option> 
<option value="Kashmiri">Kashmiri</option> 
<option value="Khandesi">Khandesi</option> 
<option value="Khasi">Khasi</option> 
<option value="Konkani">Konkani</option> 
<option value="Koshali">Koshali</option> 
<option value="Kumaoni">Kumaoni</option> 
<option value="Kutchi">Kutchi</option> 
<option value="Ladacki">Ladacki</option> 
<option value="Lepcha">Lepcha</option> 
<option value="Magahi">Magahi</option> 
<option value="Maithili">Maithili</option> 
<option value="Malay">Malay</option> 
<option value="Manipuri">Manipuri</option> 
<option value="Marathi">Marathi</option> 
<option value="Marwari">Marwari</option> 
<option value="Miji">Miji</option> 
<option value="Miza">Miza</option> 
<option value="Monpa">Monpa</option> 
<option value="Nepali">Nepali</option> 
<option value="Nicobarese">Nicobarese</option> 
<option value="Oriya">Oriya</option> 

<option value="Persian">Persian</option> 

<option value="Rajasthani">Rajasthani</option> 
<option value="Russian">Russian</option> 
<option value="Sanskrit">Sanskrit</option> 
<option value="Santhali">Santhali</option> 

<option value="Sinhala">Sinhala</option> 
<option value="Sourashtra">Sourashtra</option> 
<option value="Spanish">Spanish</option> 
<option value="Tamil">Tamil</option> 
<option value="Telugu">Telugu</option> 
<option value="Tripuri">Tripuri</option> 
<option value="Tulu">Tulu</option> 

</select>

</div>
<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>




<!-- Add Guardian number  Modal -->
<div class="modal fade" id="guardian_number_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Guardian Number</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	<input type="hidden" name="field" value="gardian_number">
<label class="col-form-label">Add Guardian Number</label>

<input type="text" name="value" placeholder="Enter guardian name" class="form-control" >

</div>
<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>

<!-- Add Guardian name  Modal -->
<div class="modal fade" id="guardian_name_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Guardian name</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	<input type="hidden" name="field" value="gardian_name">
<label class="col-form-label">Add Guardian name</label>

<input type="text" name="value" placeholder="Enter guardian name" class="form-control" >

</div>
<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>

<!-- Add profile create  Modal -->
<div class="modal fade" id="profile_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Profile Created for</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	<input type="hidden" name="field" value="profile_created">
<label class="col-form-label">Add Profile Created for</label>
<select selected="selected" name="value" id="" class="form-control ">
<option value="">Select</option>
<option value="Self">Self</option>
<option value="Son">Son</option>
<option value="Daughter">Daughter</option>
<option value="Friends">Friends</option>
<option value="Brother">Brother</option>
<option value="Sister">Sister</option>
<option value="Relatives">Relatives</option>
</select>

</div>
<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>



<!-- Add Thelisimia  Modal -->
<div class="modal fade" id="thelisimia_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Thelisimia</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	<input type="hidden" name="field" value="thelisimia">
<label class="col-form-label">Add Thelisimia</label>
<select name="value" class="form-control">
	<option value="">--select--</option>
	<option value="Yes">Yes</option>
	<option value="No">No</option>

</select>

</div>
<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>

<!-- Add Smoking  Modal -->
<div class="modal fade" id="smoking_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About smoking</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	<input type="hidden" name="field" value="smoking">
<label class="col-form-label">Add smoking</label>
<select name="value" class="form-control">
	<option value="">--select--</option>
	<option value="Yes">Yes</option>
<option value="Chain smoker">Chain smoker</option>
<option value="Occasionally">Occasionally</option>
<option value="Intend to quit">Intend to quit</option>
<option value="sometimes">sometimes</option>
<option value="never">never</option>
</select>

</div>
<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>

<!-- Add Diet  Modal -->
<div class="modal fade" id="diet_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Body Diet</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	<input type="hidden" name="field" value="diet">
<label class="col-form-label">Add Diet</label>
<select name="value" class="form-control">
		<option value="">--select--</option>
<option value="Vagetarian">Vagetarian</option>
<option value="Non-Vagetarian">Non-Vagetarian</option>
</select>

</div>
<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>


<!-- Add Body Type  Modal -->
<div class="modal fade" id="body_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Body Type</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	<input type="hidden" name="field" value="body_type">
<label class="col-form-label">Add Body Type</label>
<select name="value" class="form-control">

<option value="">Please Select..</option>
<option value="Slim">Slim</option>
<option value="Average">Average</option>
<option value="Athletic">Athletic</option>
<option value="Heavy">Heavy</option>


</select>
</div>
<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>

<!-- Add Blood Group  Modal -->
<div class="modal fade" id="blood_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Blood Group</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	<input type="hidden" name="field" value="blood_group">
<label class="col-form-label">Add Blood Group</label>
<select name="value" class="form-control">
<option value="0">Please select..</option>
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="AB+">AB+</option>
<option value="AB-">AB-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="O+">O+</option>
<option value="O-">O-</option>

</select>
</div>
<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>





<!-- Add Annual Income  Modal -->
<div class="modal fade" id="annual_income_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Annual Income</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-filed') }}">
	{{ csrf_field() }}
	<input type="hidden" name="field" value="a_income">
<div class="form-group">
<label class="col-form-label">Annual Income</label>
<select name="value" id="" class="a_income form-control">
<option value="">Please select..</option>
<option value="Prefer not to say">Prefer not to say</option>
<option value="Less than 50000">Less than 50000</option>
<option value="100 Thousand">100 Thousand</option>
<option value="Less than 50000">Less than 50000</option>
<option value="150 Thousand">150 Thousand</option>
<option value="200 Thousand">200 Thousand</option>
<option value="250 Thousand">250 Thousand</option>
<option value="300 Thousand">300 Thousand</option>
<option value="350 Thousand">350 Thousand</option>
<option value="400 Thousand">400 Thousand</option>
<option value="450 Thousand">450 Thousand</option>
<option value="500 Thousand">500 Thousand</option>
<option value="550 Thousand">550 Thousand</option>
<option value="600 Thousand">600 Thousand</option>
<option value="650 Thousand">650 Thousand</option>
<option value="700 Thousand">700 Thousand</option>
<option value="750 Thousand">750 Thousand</option>
<option value="800 Thousand">800 Thousand</option>
<option value="850 Thousand">850 Thousand</option>
<option value="900 Thousand">900 Thousand</option>
<option value="950 Thousand">950 Thousand</option>
<option value="1. Million">1. Million</option>
<option value="1.5 Million">1.5 Million</option>
<option value="2. Million">2. Million</option>
<option value="2.5 Million">2.5 Million</option>
<option value="3. Million and above">3. Million and above</option>
</select>
</div>
<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>
	
	<!-- Add occupation Detail  Modal -->
<div class="modal fade" id="occupation_detail_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About occupation Detail</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	<input type="hidden" value="occupation_detail" name="field">
<label class="col-form-label">occupation Detail</label>
<input type="text" name="value" class="form-control" >
</div>
<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>


	<!-- Add Occupation  Modal -->
<div class="modal fade" id="occupation_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Occupation</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	<input type="hidden" name="field" value="job">
<label class="col-form-label">Occupation</label>
<select name="value"  class="form-control">
	<option value="">--Select--</option>
<option value="Softwarw Engineer">Softwarw Engineer</option>
<option value="Producer/Director">Producer/Director</option>
<option value="Media">Media</option>
<option value="Marketing Manager">Marketing Manager</option>
<option value="HR Manager">HR Manager</option>
<option value="Lawyer">Lawyer</option>
<option value="I.T Porfissional">I.T Porfissional</option>
<option value="Teacher">Teacher</option>
<option value="University Lacturer">University Lacturer</option>
<option value="Business Administration">Business Administration</option>
<option value="Admin Officer"> Admin Officer</option>
<option value="Cival Engineer">Cival Engineer </option>
<option value="Electrical Engineer">Electrical Engineer</option>
{{-- <option value="MBBS">MBBS</option> --}}
<option value="Doctor">Doctor</option>
<option value="BBA">BBA</option>
<option value="Chartered Accountant">Chartered Accountant</option>

<option value="CSS Officer">CSS Officer </option>
<option value="No Occupation">No Occupation </option>
<option value="Business">Business</option>
<option value="Pilot">Pilot</option>
<option value="Police Officer">Police Officer</option>
<option value="Army Officer">Army Officer</option>
<option value="Air Force">Air Force</option>
<option value="Designer">Designer</option>
<option value="Computer Hardware">Computer Hardware</option>
<option value="Auto Mobile">Auto Mobile</option>
<option value="Traffic Warden">Traffic Warden</option>
<option value="Farmer">Farmer</option>
<option value="Shop Keeper">Shop Keeper</option>

<option value="Real Estate">Real Estate</option>

</select>
</div>
<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>

	<!-- Add Education Detail  Modal -->
<div class="modal fade" id="education_detail_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Education Detail</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	<input type="hidden" name="field" value="edu_detail">
<label class="col-form-label">Education Detail</label>
<input type="text"  name="value" class="form-control">
</div>
<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>





<!-- Add Description   Modal -->
<div class="modal fade" id="read_description_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Description</h5>
</div>
<div class="modal-body">

<div class="form-group">
	
	<span class="mp-bio-ans">{{ $user_data->description }}

</div>
<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

</div>
<div class="clearfix"></div>

</div>
</div>
</div>
</div>

	<!-- Add Description   Modal -->
<div class="modal fade" id="description_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Description</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	<input type="hidden" name="field" value="description">
<label class="col-form-label">Description</label>
<textarea class="form-control" name="value"></textarea>

</div>
<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>




	<!-- Add Education  Modal -->
<div class="modal fade" id="education_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Education</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-filed') }}">
	{{ csrf_field() }}
	<input type="hidden" name="field" value="qualification">
<div class="form-group">
<label class="col-form-label">Education</label>
<select name="value" id="" class="form-control">
<option selected="selected" value="">--- Select ---</option>
<optgroup label='Bachelors - Engineering/Computer'>
<option value='BCA'>BCA</option>
<option value='B Arch'>B Arch</option>
<option value='B Plan'>B Plan</option>
<option value='BE'>BE</option>
<option value='B Tech'>B Tech</option>
<option value='Aeronautical Engineering'>Aeronautical Engineering</option>
<option value='BSc Computer Science'>BSc Computer Science</option>
<option value='BSc IT'>BSc IT</option>
<option value='Bachelor of Engineering'>Bachelor of Engineering</option>
</optgroup>
<optgroup label='Masters - Engineering/Computer'>
<option value='MS (Engg.)'>MS (Engg.)</option>
<option value='M Arch'>M Arch</option>
<option value='MCA'>MCA</option>
<option value='PGDCA'>PGDCA</option>
<option value='ME'>ME</option>
<option value='M Tech'>M Tech</option>
<option value='MSc Computer Science'>MSc Computer Science</option>
<option value='MSc IT'>MSc IT</option>
<option value='Master of Engineering'>Master of Engineering</option>
</optgroup>
<optgroup label='Bachelors - Arts/Science/Commerce/Other'>
<option value='B Phil'>B Phil</option>
<option value='B Com'>B Com</option>
<option value='BSc'>BSc</option>
<option value='BA'>BA</option>
<option value='BFA'>BFA</option>
<option value='BLIS'>BLIS</option>
<option value='BSW'>BSW</option>
<option value='BMM (MASS MEDIA)'>BMM (MASS MEDIA)</option>
<option value='Bachelors Degree'>Bachelors Degree</option>
</optgroup>
<optgroup label='Masters - Arts/Science/Commerce/Other'>
<option value='M Phil'>M Phil</option>
<option value='M Com'>M Com</option>
<option value='M Sc'>M Sc</option>
<option value='MA'>MA</option>
<option value='MLIS'>MLIS</option>
<option value='MSW'>MSW</option>
<option value='Masters Degree'>Masters Degree</option>
</optgroup>
<optgroup label='Teachers Education - BEd/MEd'>
<option value='BEd'>BEd</option>
<option value='MEd'>MEd</option>
</optgroup>
<optgroup label='Management - MBA/BBA/Other'>
<option value='MHM'>MHM</option>
<option value='MBA'>MBA</option>
<option value='PGDM'>PGDM</option>
<option value='MFM (Financial Management)'>MFM (Financial Management)</option>
<option value='Master Degree in Management'>Master Degree in Management</option>
<option value='BHM'>BHM</option>
<option value='BBA'>BBA</option>
<option value='BFM (Financial Management)'>BFM (Financial Management)</option>
<option value='Bachelor Degree in Management'>Bachelor Degree in Management</option>
</optgroup>
<optgroup label='Medicine - MBBS/MD/MS'>
<option value='MBBS'>MBBS</option>
<option value='MD / MS (Medical)'>MD / MS (Medical)</option>
<option value='MCh - Master of Chirurgiae'>MCh - Master of Chirurgiae</option>
<option value='DM - Doctorate of Medicine'>DM - Doctorate of Medicine</option>
</optgroup>
<optgroup label='Medicine - Dental/Homeo/Ayu/Vet'>
<option value='BDS'>BDS</option>
<option value='MDS'>MDS</option>
<option value='BHMS'>BHMS</option>
<option value='MHMS'>MHMS</option>
<option value='BAMS'>BAMS</option>
<option value='MAMS'>MAMS</option>
<option value='Bachelor of Veterinary Science'>Bachelor of Veterinary Science</option>
<option value='Master of Veterinary Science'>Master of Veterinary Science</option>
<option value='Degree in Medicine'>Degree in Medicine</option>
<option value='Master in Medicine'>Master in Medicine</option>
</optgroup>

<optgroup label='Medicine - Pharmacy/Nursing/Lab/Health'>
<option value='BPT'>BPT</option>
<option value='MPT'>MPT</option>
<option value='B.Pharm'>B.Pharm</option>
<option value='M.Pharm'>M.Pharm</option>
<option value='BSc Nursing'>BSc Nursing</option>
<option value='MSc Nursing'>MSc Nursing</option>
<option value='Medical Course'>Medical Course</option>
<option value='Diploma in Nursing'>Diploma in Nursing</option>
<option value='Medical Laboratory Technology'>Medical Laboratory Technology</option>
</optgroup>

<optgroup label='Legal - BL/ML/LLB/LLM'>
<option value='BGL'>BGL</option>
<option value='Bachelor of Law'>Bachelor of Law</option>
<option value='LLB'>LLB</option>
<option value='Master of Law'>Master of Law</option>
<option value='LLM'>LLM</option>
<option value='Course in Legal'>Course in Legal</option>
</optgroup>

<optgroup label='Finance - CA/ICWAI/CS'>
<option value='CA Inter'>CA Inter</option>
<option value='CA Final'>CA Final</option>
<option value='ICWA'>ICWA</option>
<option value='Company Secretary (CS)'S>Company Secretary (CS)</option>
<option value='CFA (Chartered Financial Analyst)'>CFA (Chartered Financial Analyst)</option>
<option value='Course in Finance'>Course in Finance</option>
</optgroup>

<optgroup label='Doctorate'>
<option value='Ph D'>Ph D</option>
</optgroup>

<optgroup label='Civil Service'>
<option value='IAS'>IAS</option>
<option value='IPS'>IPS</option>
<option value='IRS'>IRS</option>
<option value='154'>IES</option>
<option value='155'>IFS</option>
<option value='156'>Civil Service</option>
</optgroup>


<optgroup label='Diploma'>
<option value='Diploma'>Diploma</option>
<option value='Polytechnic'>Polytechnic</option>
</optgroup>

<optgroup label='Higher Secondery/TTC/ITI'>
<option value='TTC'>TTC</option>
<option value='ITI'>ITI</option>
<option value='Higher Secondery'>Higher Secondery</option>
</optgroup>
<optgroup label='Other Education'>
<option value='High School'>High School</option>
<option value='Less than high school'>Less than high school</option>
<option value='Other Education'>Other Education</option>
</optgroup>
</select>
</div>
<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>


<!-- Add beard  Modal -->
<div class="modal fade" id="height_wheight_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Height & wheight</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	<input type="hidden" name="field" value="height">
	
<label class="col-form-label">Height & wheight</label></div>
<div class="col-md-6">
<select  id="" name="value" class="form-control">
<option value="">Height..</option>
<option value="Below 4ft 6in - 137cm">Below 4ft 6in - 137cm</option>
<option value="4ft 6in - 137cm">4ft 6in - 137cm</option>
<option value="4ft 7in - 139cm">4ft 7in - 139cm</option>
<option value="4ft 8in - 142cm">4ft 8in - 142cm</option>
<option value="4ft 9in - 144cm">4ft 9in - 144cm</option>
<option value="4ft 10in - 147cm">4ft 10in - 147cm</option>
<option value="4ft 11in - 149cm">4ft 11in - 149cm</option>
<option value="5ft - 152cm">5ft - 152cm</option>
<option value="5ft 1in - 154cm">5ft 1in - 154cm</option>
<option value="5ft 2in - 157cm">5ft 2in - 157cm</option>
<option value="5ft 3in - 160cm">5ft 3in - 160cm</option>
<option value="5ft 4in - 162cm">5ft 4in - 162cm</option>
<option value="5ft 5in - 165cm">5ft 5in - 165cm</option>
<option value="5ft 6in - 167cm">5ft 6in - 167cm</option>
<option value="5ft 7in - 170cm">5ft 7in - 170cm</option>
<option value="5ft 8in - 172cm">5ft 8in - 172cm</option>
<option value="5ft 9in - 175cm">5ft 9in - 175cm</option>
<option value="5ft 10in - 177cm">5ft 10in - 177cm</option>
<option value="5ft 11in - 180cm">5ft 11in - 180cm</option>
<option value="6ft - 182cm">6ft - 182cm</option>
<option value="6ft 1in - 185cm">6ft 1in - 185cm</option>
<option value="6ft 2in - 187cm">6ft 2in - 187cm</option>
<option value="6ft 3in - 190cm">6ft 3in - 190cm</option>
<option value="6ft 4in - 193cm">6ft 4in - 193cm</option>
<option value="6ft 5in - 195cm">6ft 5in - 195cm</option>
<option value="6ft 6in - 198cm">6ft 6in - 198cm</option>
<option value="6ft 7in - 200cm">6ft 7in - 200cm</option>
<option value="6ft 8in - 203cm">6ft 8in - 203cm</option>
<option value="6ft 9in - 205cm">6ft 9in - 205cm</option>
<option value="6ft 10in - 208cm">6ft 10in - 208cm</option>
<option value="6ft 11in - 210cm">6ft 11in - 210cm</option>
<option value="7ft - 213cm">7ft - 213cm</option>
<option value="Above 7ft - 213c">Above 7ft - 213cm</option>
</select>
</div>
<div class="col-md-6">
	<select  id="" name="weight" class="form-control">
<option value="">Weight..</option>
<option value="40 kg">40 Kg</option>
<option value="41 kg">41 Kg</option>
<option value="42 kg">42 Kg</option>
<option value="43 kg">43 Kg</option>
<option value="44 kg">44 Kg</option>
<option value="45 kg">45 Kg</option>
<option value="46 kg">46 Kg</option>
<option value="47 kg">47 Kg</option>
<option value="48 kg">48 Kg</option>
<option value="49 kg">49 Kg</option>
<option value="50 kg">50 Kg</option>
<option value="51 kg">51 Kg</option>
<option value="52 kg
">52 Kg</option>
<option value="53 kg">53 Kg</option>
<option value="54 kg">54 Kg</option>
<option value="55 kg">55 Kg</option>
<option value="56 kg">56 Kg</option>
<option value="57 kg">57 Kg</option>
<option value="58 kg">58 Kg</option>
<option value="59 kg">59 Kg</option>
<option value="60 kg">60 Kg</option>
<option value="61 kg">61 Kg</option>
<option value="62 kg">62 Kg</option>
<option value="63 kg">63 Kg</option>
<option value="64 kg">64 Kg</option>
<option value="65 kg">65 Kg</option>
<option value="66 kg">66 Kg</option>
<option value="67 kg">67 Kg</option>
<option value="68 kg">68 Kg</option>
<option value="69 kg">69 Kg</option>
<option value="70 kg">70 Kg</option>
<option value="71 kg">71 Kg</option>
<option value="72 kg">72 Kg</option>
<option value="73 kg">73 Kg</option>
<option value="74 kg">74 Kg</option>
<option value="75 kg">75 Kg</option>
<option value="76 kg">76 Kg</option>
<option value="77 kg">77 Kg</option>
<option value="78 kg">78 Kg</option>
<option value="79 kg">79 Kg</option>
<option value="80 kg">80 Kg</option>
<option value="81 kg">81 Kg</option>
<option value="82 kg">82 Kg</option>
<option value="83 kg">83 Kg</option>
<option value="84 kg">84 Kg</option>
<option value="85 kg">85 Kg</option>
<option value="86 kg">86 Kg</option>
<option value="87 kg">87 Kg</option>
<option value="88 kg">88 Kg</option>
<option value="89 kg">89 Kg</option>
<option value="90 kg">90 Kg</option>
<option value="91 kg">91 Kg</option>
<option value="92 kg">92 Kg</option>
<option value="93 kg">93 Kg</option>
<option value="94 kg">94 Kg</option>
<option value="95 kg">95 Kg</option>
<option value="96 kg">96 Kg</option>
<option value="97 kg">97 Kg</option>
<option value="98 kg">98 Kg</option>
<option value="99 kg">99 Kg</option>
<option value="100 kg">100 Kg</option>
<option value="101 kg">101 Kg</option>
<option value="102 kg">102 Kg</option>
<option value="103 kg">103 Kg</option>
<option value="104 kg">104 Kg</option>
<option value="105 kg">105 Kg</option>
<option value="106 kg">106 Kg</option>
<option value="107 kg">107 Kg</option>
<option value="108 kg">108 Kg</option>
<option value="109 kg">109 Kg</option>
<option value="110 kg">110 Kg</option>
<option value="111 kg">111 Kg</option>
<option value="112 kg">112 Kg</option>
<option value="113 kg">113 Kg</option>
<option value="114 kg">114 Kg</option>
<option value="115 kg">115 Kg</option>
<option value="116 kg">116 Kg</option>
<option value="117 kg">117 Kg</option>
</select>
</div>
<br><br><br>
<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>



<!-- Add beard  Modal -->
<div class="modal fade" id="beard_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Beard</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	<input type="hidden" name="field" value="bread">
<label class="col-form-label">Beard</label>
<select name="value"  class="form-control">
<option value="">Please Select..</option>
<option value="Yes">Yes</option>
<option value="No">No</option>
<option value="Prefered not to say">prefered not to say</option>
</select>
</div>
<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>

<!-- Add physical status  Modal -->
<div class="modal fade" id="physical_status_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Physical Status</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-filed') }}">
	{{ csrf_field() }}
	<input type="hidden" value="physical_status" name="field">
<div class="form-group">
<label class="col-form-label">Physical Status</label>

<select name="value"  class="form-control">
<option selected="selected" value="Normal Person">Normal Person</option>
<option value="Deaf/Dumb">Deaf/Dumb</option>
<option value="Blind">Blind</option>
<option value="Physically Challenged">Physically Challenged</option>
<option value="Mentally Challenged">Mentally Challenged</option>
<option value="With other Disability">With other Disability</option>
</select>
</div>
<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>


<!-- Add  Ethnaic origan  Modal -->
<div class="modal fade" id="ethnic_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Ethnic Origin</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-filed') }}">
	{{ csrf_field() }}
	<input type="hidden" name="field" value="ethnic_type">
<div class="form-group">
<label class="col-form-label">Select Ethnic Origin</label>
<select name="value" id="" class="form-control">
<option value='' selected='selected'>Rather not say</option>
<option value='Algerian'>Algerian</option>
<option value='Arab'>Arab</option>
<option value='Carribean'>Carribean</option>
<option value='Turkish'>Turkish</option>
<optgroup label='Asian'>
<option value='Asian - Afghan'>Asian - Afghan</option>
<option value='Asian - Bangladeshi'>Asian - Bangladeshi</option>
<option value='Asian - Chinese'>Asian - Chinese</option>
<option value='Asian - Filipino'>Asian - Filipino</option>
<option value='Asian - Indian'>Asian - Indian</option>
<option value='Asian - Indonesian'>Asian - Indonesian</option>
<option value='Asian - Kurdish'>Asian - Kurdish</option>
<option value='Asian - Kyrgyz'>Asian - Kyrgyz</option>
<option value='Asian - Malay'>Asian - Malay</option>
<option value='Asian - Maldives'>Asian - Maldives</option>
<option value='Asian - Pakistani'>Asian - Pakistani</option>
<option value='Asian - Sri Lankan'>Asian - Sri Lankan</option>
<option value='Asian - Other Background'>Asian - Other Background</option>
<option value='Indian Carribean'>Indian Carribean</option>
</optgroup>
<optgroup label='White'>
<option value='White - American'>White - American</option>
<option value='White - Australian'>White - Australian</option>
<option value='White - British'>White - British</option>
<option value='White - Canadian'>White - Canadian</option>
<option value='White - Hispanic'>White - Hispanic</option>
<option value='White - Other Background'>White - Other Background</option>
</optgroup>
<optgroup label='Black'>
<option value='Black - African'>Black - African</option>
<option value='Black - American'>Black - American</option>
<option value='Black - British'>Black - British</option>
<option value='Black - Caribbean'>Black - Caribbean</option>
<option value='Black - Ethiopian'>Black - Ethiopian</option>
<option value='Black - Somali'>Black - Somali</option>
<option value='Black - Other Background'>Black - Other Background</option>
<option value='Mauritian'>Mauritian</option>
</optgroup>
<optgroup label='Other Ethnic Group'>
<option value='Albanian'>Albanian</option>
<option value='Bosnian'>Bosnian</option>
<option value='OTHER'>Other Ethnicity</option>
</optgroup>
</select>
</div>
<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>



<!-- Add Read skin_color_modal  Modal -->
<div class="modal fade" id="skin_color_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Complexion (Skin Color)</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-filed') }}">
	{{ csrf_field() }}
<div class="form-group">
<label class="col-form-label">Complexion (Skin Color)</label>
<input type="hidden" value="skin_color" name="field">
<select  id="skin_color" name="value" class="form-control">
<option value="">Select</option>
<option value="Very Fair">Very Fair</option>
<option value="Fair">Fair</option>
<option value="Wheatish">Wheatish</option>
<option value="Wheatish Brown">Wheatish Brown</option>
<option value="Dark">Dark</option>
</select>
</div>
<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>

<!-- Add Read Quran modal  Modal -->
<div class="modal fade" id="read_quran_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Read Quran</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ 'edit-filed' }}">
<div class="form-group">
	{{ csrf_field() }}
	<input type="hidden" value="read_quran" name="field">
<label class="col-form-label">Read Quran</label>
<select name="value" id="" class="form-control">
<option value="" >Please Select</option>
<option value="Daily" >Daily</option>
<option value="Ocassionally" >Ocassionally</option>
<option value="Only During Ramadan" >Only During Ramadan</option>
<option value="Only on Jummah / Fridays" >Only on Jummah / Fridays</option>
<option value="Read translated version" >Read translated version</option>
<option value="Never Read" >Never Read</option>
<option value="Prefer not to say" >Prefer not to say</option>
</select>
</div>
<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>



<!-- Add attend religious modal  Modal -->
<div class="modal fade" id="attend_religious_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Attend religious services</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-filed') }}">
	{{ csrf_field() }}
<div class="form-group">
	<input type="hidden" value="attend_religious_service" name="field">
<label class="col-form-label">Attend religious services</label>
<select name="value" id="" class="form-control">
<option value="" >Please Select</option>
<option value="Daily" >Daily</option>
<option value="Only on Jummah / Fridays">Only on Jummah / Fridays</option>
<option value="Sometimes">Sometimes</option>
<option value="Only During Ramadan">Only During Ramadan</option>
<option value="Never">Never</option>
</select>
</div>
<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>



<!-- Add Sect  Modal -->
<div class="modal fade" id="sect_are_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Allegiance to Islamic Orgn</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-filed') }}">
<div class="form-group">
	{{ csrf_field() }}
	<input type="hidden" name="field" value="sect_are">
<label class="col-form-label">Islamic Orgn</label>
<select selected="selected" name="value" id="sect_are" class="form-control">
<option value="Just A Muslim">Just a Muslim</option>
<option value="Sunni">Sunni</option>
<option value="Barilvi">Barilvi</option>
<option value="Ahle Hadees">Ahle Hadees</option>
<option value="Salafi">Salafi</option>
<option value="Deobandi">Deobandi</option>
<option value="Hanafi">Hanafi</option>
<option value="Shafi">Shafi'i</option>
<option value="Maliki">Maliki</option>
<option value="Hanbali">Hanbali</option>
<option value="Syed">Syed</option>
<option value="Shia">Shia</option>
<option value="Ismaili">Ismaili</option>
<option value="Sufism">Sufism</option>
<option value="Bohra">Bohra</option>
</select>
</div>
<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>

<!-- Add religiousness  Modal -->
<div class="modal fade" id="religiousness_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Religiousness</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-filed') }}">
	{{ csrf_field() }}
<div class="form-group">
	<input type="hidden" value="religiousness" name="field">
<label class="col-form-label">Religiousness</label>
<select name="value" id="" class="religiousness form-control">
<option value="">Please Select..</option>
<option value="Very religious">Very religious</option>
<option value="Religious">Religious</option>
<option value="Not religious">Not religious</option>
<option value="Prefer not to say">Prefer not to say</option>
</select>
</div>
<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>


<!-- Add Pray  Modal -->
<div class="modal fade" id="pray_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="margin-top: 115px;">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Tell About Namaaz</h5>
</div>
<div class="modal-body">
<form method="post" action="{{ url('edit-filed') }}">
<div class="form-group">
	
	{{ csrf_field() }}
	<input type="hidden" value="pray" name="field">
<label class="col-form-label">Perform Namaaz</label>
<select selected="selected" name="value" id="" class=" form-control">
<option value="Always Pray">Always Pray</option>
<option value="sometime pray">sometime pray</option>
<option value="Intend to start praying">Intend to start praying</option>
<option value="Sometimes miss Fajr and make Qadah Salah">Sometimes miss Fajr and make Qadah Salah</option>
<option value="Only pray before exams">Only pray before exams</option>
<option value="Don't pray">Don't pray</option>
<option value="Eid Salah only">Eid Salah only</option>
<option value="Rarely miss a prayer and make Qadah Sala">Rarely miss a prayer and make Qadah Sala</option>
</select>
</div>
<div class="pull-right">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save Record</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>

@endsection

@push('css')
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
<link rel="shortcut icon" href="{{ $user_assets }}/images/favicon.png">
<link rel="stylesheet" href="{{ $user_assets }}/css/font-awesome.min.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ $user_assets }}/css/animate.css" />
<!-- bootstrap -->
<link rel="stylesheet" href="{{ $user_assets }}/css/chat.css" />
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

<link rel="stylesheet" href="{{ $user_assets }}/hover-min2.css">
<link rel="stylesheet" href="{{ $user_assets }}/css/style3.css"/>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="{{ $user_assets }}/css/owl.carousel2.css" />

  @endpush 

@push('js')
<script src="{{ $user_assets }}/js/custom2.js"></script>
<script src="{{ $user_assets }}/js/manage-profile.js"></script>
<script type="text/javascript">
$('#gender').val('{{ $user_data->gender }}');
$('#day').val('{{ $user_data->day }}');
$('#month').val('{{ $user_data->month }}');
$('#year').val('{{ $user_data->year }}');
$('.sect_are').val('{{ $user_data->sect_are }}');
$('.pray').val('{{ $user_data->pray }}');
$('.religiousness').val('{{ $user_data->religiousness }}');
$('.attend_religious_service').val('{{ $user_data->attend_religious_service }}');
$('.read_quran').val('{{ $user_data->read_quran }}');
$('.ethnic_type').val('{{ $user_data->ethnic_type }}');
$('.skin_color').val('{{ $user_data->skin_color }}');
$('.physical_status').val('{{ $user_data->physical_status }}');
$('.bread').val('{{ $user_data->bread }}');
$('.height').val('{{ $user_data->height }}');
$('.weight').val('{{ $user_data->weight }}');



$('.qualification').val('{{ $user_data->qualification }}');
$('.job').val('{{ $user_data->job }}');
$('.a_income').val('{{ $user_data->a_income }}');
$('.convenient_time').val('{{ $user_data->convenient_time}}');

$('.profile_created').val('{{ $user_data->profile_created}}');
$('.language').val('{{ $user_data->language}}');
$('.cast').val('{{ $user_data->cast}}');
$('.martial_status').val('{{ $user_data->martial_status}}');

$(".elder_brother").val('{{$user_data->elder_brother}}');
$(".younger_brother").val('{{$user_data->younger_brother}}');
$(".brother_married").val('{{$user_data->brother_married}}');
$(".brother_unmarried").val('{{$user_data->brother_unmarried}}');
$(".elder_sister").val('{{$user_data->elder_sister}}');
$(".younger_sister").val('{{$user_data->younger_sister}}');
$(".sister_married").val('{{$user_data->sister_married}}');
$(".sister_unmarried").val('{{$user_data->sister_unmarried}}');

$(".family_type").val('{{$user_data->family_type}}');
$(".finacial_status").val('{{$user_data->finacial_status}}');
$(".assets").val('{{$user_data->assets}}');

$(".elder_brother").val('{{$user_data->elder_brother}}');

$(".younger_brother").val('{{$user_data->younger_brother}}');
$(".brother_married").val('{{$user_data->brother_married}}');

$(".brother_unmarried").val('{{$user_data->brother_unmarried}}');

$(".elder_sister").val('{{$user_data->elder_sister}}');

$(".sister_married").val('{{$user_data->sister_married}}');

$(".sister_unmarried").val('{{$user_data->sister_unmarried}}');
$("#blood_group").val('{{$user_data->blood_group}}');
$("#body_type").val('{{$user_data->body_type}}');
$("#diet").val('{{$user_data->diet}}');
$("#smoking").val('{{$user_data->smoking}}');
$("#thelisimia").val('{{$user_data->thelisimia}}');

$(".father_detail").val('{{$user_data->father_detail}}');
$(".mother_detail").val('{{$user_data->mother_detail}}');
$(".loking_education").val('{{$user_data->loking_education}}');
$(".loking_job").val('{{$user_data->loking_job}}');
$(".loking_a_income").val('{{$user_data->loking_a_income}}');
$("#loking_language").val('{{$user_data->loking_language}}');
$(".loking_age_from").val('{{$user_data->loking_age_from}}');
$(".loking_age_to").val('{{$user_data->loking_age_to}}');
$("#loking_height_from").val('{{$user_data->loking_height_from}}');
$("#loking_height_to").val('{{$user_data->loking_height_to}}');
$("#loking_physcial_status").val('{{$user_data->loking_physcial_status}}');


</script>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
        	<script type="text/javascript">
        		$(".basic-info-form").show('slow');
        		$(".mp-basic-info").hide('slow');
        		$(".eb2").hide('slow');
        		$(".dc2").show('slow');
        	</script>
           
        </ul>
    </div>
@endif



<script type="text/javascript">


function native_country_change(sel)
{


var country_id= sel.value;


document.getElementById("wait").style.display = "block";

$.post('{{ url('/get_state') }}' , {_token: '{{ csrf_token() }}' , country_id: country_id} , function(data)
{
 
document.getElementById("wait").style.display = "none"
response = $.parseJSON(data);

$('.native_state').html(response.states);
});
}



function native_state_change(sel)
{

var state_id=sel.value;

document.getElementById("wait").style.display = "block";
$.post('{{ url('/get_city') }}' , {_token: '{{ csrf_token() }}' , state_id: state_id} , function(data)
{

document.getElementById("wait").style.display = "none";
$('.native_city').html(data);
});

}






	function country_change(sel)
{

$('#country_id').hide();
var country_id= sel.value;


document.getElementById("wait").style.display = "block";

$.post('{{ url('/get_state') }}' , {_token: '{{ csrf_token() }}' , country_id: country_id} , function(data)
{
 
document.getElementById("wait").style.display = "none"
response = $.parseJSON(data);

$('#state').html(response.states);
});
}



function state_change(sel)
{
$('#state_id').hide();
var state_id=sel.value;

document.getElementById("wait").style.display = "block";
$.post('{{ url('/get_city') }}' , {_token: '{{ csrf_token() }}' , state_id: state_id} , function(data)
{

document.getElementById("wait").style.display = "none";
$('#city').html(data);
});

}
function hijab_uncheck()
{
$('.hijab_select').prop('checked', false);
}
function hijab_check()
{
$('.hijab_select').prop('checked', true);

}

function check_hobi()
{

$('.check_hobies').prop('checked', true);
}
function uncheck_hobi()
{

$('.check_hobies').prop('checked', false);

}
function lan_uncheck()
{
$('.other_lan').prop('checked', false);
}
function lan_check()
{
$('.other_lan').prop('checked', true);

}
function history_uncheck()
{
$('.history_select').prop('checked', false);
}
function history_check()
{
$('.history_select').prop('checked', true);

}
function living_uncheck()
{
$('.living_select').prop('checked', false);
}
function living_check()
{
$('.living_select').prop('checked', true);

}
function sect_uncheck()
{
$('.sect_select').prop('checked', false);
}
function sect_check()
{
$('.sect_select').prop('checked', true);

}
function pray_uncheck()
{
$('.pray_select').prop('checked', false);
}
function pray_check()
{
$('.pray_select').prop('checked', true);

}
function has_uncheck()
{
$('.has_select').prop('checked', false);
}
function has_check()
{
$('.has_select').prop('checked', true);

}
function body_uncheck()
{
$('.body_select').prop('checked', false);
}
function body_check()
{
$('.body_select').prop('checked', true);

}
function africka_uncheck()
{
$('.africa_select').prop('checked', false);
}
function africa_check()
{
$('.africa_select').prop('checked', true);

}

function antarctica_uncheck()
{
$('.antarctica_select').prop('checked', false);
}
function antarctica_check()
{
$('.antarctica_select').prop('checked', true);

}


function asia_uncheck()
{
$('.asia_select').prop('checked', false);
}
function asia_check()
{
$('.asia_select').prop('checked', true);

}


function europ_uncheck()
{
$('.europ_select').prop('checked', false);
}
function europ_check()
{
$('.europ_select').prop('checked', true);

}
function north_america_uncheck()
{
$('.north_select').prop('checked', false);
}
function north_america_check()
{
$('.north_select').prop('checked', true);

}
function australasia_uncheck()
{
$('.austra_select').prop('checked', false);
}
function australasia_check()
{
$('.austra_select').prop('checked', true);

}
function south_unamerica()
{
$('.south_select').prop('checked', false);
}
function south_america()
{
$('.south_select').prop('checked', true);

}
</script>
@endpush      
