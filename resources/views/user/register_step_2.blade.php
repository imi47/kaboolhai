@extends('user/master_layout2') 
@section('data') 

<link rel="stylesheet" href="{{ $user_assets }}/css/style.css" />

<style>
	input {
		padding:15px !important;
	}

	textarea {
		width:100%;
	}

	input[type='checkbox'], input[type='radio'] {
		width:auto !important;
	}

	.midlinput {
    height: 27px;
    width: 20.8%;
}

input, textarea {
    border: 1px solid #dfdfdf;
}

select {
	border: 1px solid #ccc;
}

select {
	padding:6px !important;
	height:unset !important;
}

input[type='number'], input[type='text']:not(.midlinput) , .allselects {
	width:69%;
}

.half-width {
	width:35%;
}

.half-width + span input, .half-width + select {
	width:32.5%;
}

.form_area .row {
	margin-bottom:10px;
}

input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
-webkit-appearance: none; 
	margin: 0; 
}

@media (max-width:991px) {
	input[type='number'], input[type='text']:not(.midlinput) , .allselects {
		width:100%;
	}

	.half-width {
		width:48%;
	}

	.half-width + span input, .half-width + select {
		width:48%;
	}

	.midlinput {
		width:29%;
	}

	#city {
		width:48%;
	}
}

@media (max-width:768px) {
	.midlinput {
		width:31%;
	}

	#basicinfo {
		padding:10px;
	}

	.sechead {
		padding:5px;
	}
}

@media (max-width:508px) {
	.col-md-7.col-xs-12 .on-focus:first-child .midlinput, .col-md-7.col-xs-12 .on-focus:nth-child(3) .midlinput, .col-md-7.col-xs-12 .on-focus:nth-child(5) .midlinput{
		width:100%;
		box-sizing:border-box;
	}
}

@media (max-width:400px) {
	.form_area .row:not(.listtopmarg) *{
		font-size:4vw;
	}

	.sechead {
		padding:7px;
	}
}

@media (max-width:345px) {
	select, input[type='text'] {
		width:100% !important;
		margin-bottom:5px;
	}
	.searchcontainer button {
		padding: 13px 16px;
    	margin-top: -57px;
	}
}

.error {
	position:absolute;
	left:15px;
	top:-19px;
	margin:0 !important;
}

label {
	margin-bottom:15px;
}

.sidebar h3.text-center {
    font-size: 1.54rem;
    padding: 10px;
}

.searchcontainer input[type='text'] {
	width:86%;
}

.bg-orange.no-padding.wow {
	margin-top:50px;
	padding:10px;
}

@media (max-width:767px) {
	.searchcontainer input[type='text'] {
		width:94%;
	}
}


</style>

<script>
	document.querySelector("#nav-wrapper nav").classList.remove('sticky-nav')
</script>

<div class="container">
<div id="wait" style="display: none;"></div>
<br>
<div class="row">

<div class="col-md-9 col-sm-12">
<div class="well" style="background-color: #f5f5f5">
<br>
<div class="menuwizard">
{{-- <img id="one" class="wizrdpic" src="{{ $user_assets }}/img/registration-step 1.png" alt=""> --}}
<img id="three" class="wizrdpic" src="{{ $user_assets }}/img/registration-step 3.png" alt="" style="display: none;">
<img id="two" class="wizrdpic" src="{{ $user_assets }}/img/registration-step 2.png" alt="">
</div>
 {{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}
<form method="post" action="{{ url('register-user-step-2') }}">

{{ csrf_field() }}
<input type="hidden" name="email" value="{{ $email }}">
<div style="width: 550px; margin: 0px auto;">
</div>

<div class="form_area">
<ul id="basicinfo">
<li class="row listtopmarg">
<div class="col-0">
<img src="{{ $user_assets }}/icons/message.png" class="welmsgimg">
</div>
<div class="col-xs-10">


<p style="font-size: 12px;"><b>Dear <strong> {{ $fname.' '.$lname }} </strong> we sincerely want to help you in your search for best match according to your preference therefore we need additional information. Kindly provide us with your personal information and preferences.</b></p>
</div>
</li>

<li class="row" class="listtopmarg">
<div class="col-0">
<img src="{{ $user_assets }}/icons/basic-info.png">
</div>
<div class="col-xs-10 main">
<p class="sechead" >Basic Information</p>
</div>
</li>
<hr class="lineinhead">



<li class="row" class="listtopmarg">
<div class="col-md-5 col-xs-12">
<label>Which 3 words best describe you:<span style="color: red" >*</span> </label>
</div>

<div class="col-md-7 col-xs-12">
<!-- <span class="colons">:</span> -->

<span class="on-focus">
<input type="text"  data-toggle="tooltip" data-placement="top" title="Fill the fields with three best words that describe your personality e.g kind, loving, honest" value="{{ old('word_1') }}" name="word_1" placeholder="1" class="midlinput">
<span class='error error-1' style="color:red; font-size: 10px;">{{ $errors->first('word_1') }}</span>
{{-- <div class="tool-tip  slideIn words">Fill the fields with three best words that describe your personality e.g kind, loving, honest </div> --}}
</span>

<span class="colons"></span>
<span class="on-focus">
<input placeholder="2" type="text" data-toggle="tooltip" data-placement="top" title="Fill the fields with three best words that describe your personality e.g kind, loving, honest" value="{{ old('word_2') }}" name="word_2" class="midlinput">
<!-- <span class='error error-2' style="color:red; font-size: 10px;">{{ $errors->first('word_2') }}</span> -->
<span class='error error-2' style="color:red; font-size: 10px;">{{ $errors->first('word_1') }}</span>
{{-- <div class="tool-tip  slideIn words">Fill the fields with three best words that describe your personality e.g kind, loving, honest </div> --}}
</span>

<span class="colons"></span>
<span class="on-focus">
<input placeholder="3" value="{{ old('word_3') }}" type="text" data-toggle="tooltip" data-placement="top" title="Fill the fields with three best words that describe your personality e.g kind, loving, honest" name="word_3" class="midlinput">

</span>
<!-- <span class='error error-3' style="color:red; font-size: 10px;">{{ $errors->first('word_3') }}</span> -->
<span class='error error-2' style="color:red; font-size: 10px;">{{ $errors->first('word_1') }}</span>

</div>
</li>
<div class="btpad"></div>



<li class="row" class="listtopmarg">
<div class="col-md-5 col-xs-12">
<label for=""> Profile Created for: <span style="color: red" >*</span></label>
</div>
<div class="col-md-7 col-xs-12">
<!-- <span class="colons">:</span> -->
<span class="on-focus">
<select selected="selected"  name="profile_created" id="profile_created" class="allselects">

@if(old('profile_created'))
<option value="{{ old('profile_created') }}">{{ old('profile_created') }}</option>
@else
<option value="">Select</option>
@endif
<option value="Self">Self</option>
<option value="Son">Son</option>
<option value="Daughter">Daughter</option>
<option value="Friends">Friends</option>
<option value="Brother">Brother</option>
<option value="Sister">Sister</option>
<option value="Relatives">Relatives</option>
</select>
</span>
<span class='error' style="color:red; font-size: 10px;">{{ $errors->first('profile_created') }}</span>
</div>
</li>
<div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-md-5 col-xs-12">
<label for=""> Guardian Name: <span style="color: red" >*</span></label>
</div>
<div class="col-md-7 col-xs-12">
<!-- <span class="colons">:</span> -->
<span class="on-focus">
<input type="text"  data-toggle="tooltip" data-placement="top" title="Kindly fill in your guardian name" value="{{ old('gardian_name') }}" name="gardian_name" placeholder="Enter guardian name" class="allselects">

</span>
<span class='error' style="color:red; font-size: 10px;">{{ $errors->first('gardian_name') }}</span>
</div>
</li>
<div class="btpad"></div>

<li class="row" class="listtopmarg" id="gardian_number">
<div class="col-md-5 col-xs-12">
<label for=""> Guardian Number: <span style="color: red" >*</span></label>
</div>
<div class="col-md-7 col-xs-12">
<!-- <span class="colons">:</span> -->
<span class="on-focus">
<input type="number" data-toggle="tooltip" data-placement="top" title="Kindly enter the working phone number of your guardian so that we may contact him/her when required" value="{{ old('gardian_number') }}" name="gardian_number" placeholder="Enter guardian number" class="allselects">

</span>
<span class='error' style="color:red; font-size: 10px;">{{ $errors->first('gardian_number') }}</span>
</div>
</li>
<div class="btpad"></div>
<li class="row" class="listtopmarg">
<div class="col-md-5 col-xs-12">
<label for=""> Postal/Zip Code:</label>
</div>
<div class="col-md-7 col-xs-12">
<!-- <span class="colons">:</span> -->
<span class="on-focus">
<input type="number" data-toggle="tooltip" data-placement="top" title="Enter your postal/zip code in the field" value="{{ old('postal_code') }}" name="postal_code" placeholder="Please enter postal/zip code" class="allselects">


</div>
</li>
<div class="btpad"></div>
<li class="row" class="listtopmarg">
<div class="col-md-5 col-xs-12">
<label for="">Mother Tongue: <span class="imporatant">*</span></label>
</div>
<div class="col-md-7 col-xs-12">
<!-- <span class="colons">:</span> -->
<select name="language" selected="selected" id="" class="allselects">

@if(old('language'))

<option value="{{ old('language') }}">{{ old('language') }}</option> 
@else
<option value="">Select</option> 
@endif
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
<span class='error' style="color:red; font-size: 10px;">{{ $errors->first('language') }}</span>
</div>
<div class="btpad"></div>
<li class="row" class="listtopmarg">
<div class="col-md-5 col-xs-12">
<label for=""> Other Language: <span class="imporatant"></span></label>
</div>
<div class="col-md-7 col-xs-12">
{{-- chang --}}
<div class="input-group">
<input type="text" readonly="" value="Other language" name="other_language" class="allselects">
<div class="input-group-append">
<a href="javascript:;" id="other_language">
<span class="fa fa-angle-down arrows" style="color: #8E8E8F; color: #8E8E8F;" id="do_other"></span>
<span class="fa fa-angle-up" id="up_other" style="display:none;padding-top:6px;margin-left:-20px;z-index: 1;
position: absolute;color: #8E8E8F;"></span>

</a>
</div>
</div>
<div id="other_languages" style="display:none;">
<div class="row" style="padding-top:5px;padding-bottom:10px;">
<div class="col-6">
<a href="javascript:;" onclick="lan_check()">Select All</a>
</div>
<div class="col-6">
<a href="javascript:;" onclick="lan_uncheck()">Clear All</a>
</div>
</div>

<div class="row">
<div class="col-5">
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Urdu"> Urdu <br> <input type="checkbox" name="add_other_language[]" class="other_lan" value="Punjabi"> Punjabi <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Pashto"> Pashto <br>
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Sindhi"> Sindhi <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Saraiki"> Saraiki <br> <input type="checkbox" name="add_other_language[]" class="other_lan" value="Balochi"> Balochi <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Hindko"> Hindko <br><input type="checkbox" name="add_other_language[]" class="other_lan" value="English"> English <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Malayalam"> Malayalam <br>
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Aka"> Aka <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Angika"> Angika <br>
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Arabic"> Arabic <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Arunachali"> Arunachali <br>
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Assamese"> Assamese <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Awadhi"> Awadhi <br>
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Badaga"> Badaga <br>
</div>


<div class="col-5">
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Bengali"> Bengali <br>
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Bhojpuri"> Bhojpuri <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Bihari"> Bihari <br>
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Brij"> Brij <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Chatisgarhi"> Chatisgarhi <br>
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Coorgi"> Coorgi <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Dogri"> Dogri <br>

<input type="checkbox" name="add_other_language[]" class="other_lan" value="French"> French <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Garhwali"> Garhwali <br>
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Garo"> Garo <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Gujarati"> Gujarati <br>
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Haryanvi"> Haryanvi <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Himachali/Pahari"> Himachali/Pahari <br>
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Hindi"> Hindi <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Kannada"> Kannada <br>
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Kashmiri"> Kashmiri <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Khandesi"> Khandesi <br>
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Khasi"> Khasi <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Konkani"> Konkani <br>
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Koshali"> Koshali <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Kumaoni"> Kumaoni <br>
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Kutchi"> Kutchi <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Ladacki"> Ladacki <br>
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Lepcha"> Lepcha <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Magahi"> Magahi <br>
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Maithili"> Maithili <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Malay"> Malay <br>
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Manipuri"> Manipuri <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Marathi"> Marathi <br>
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Marwari"> Marwari <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Miji"> Miji <br>
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Miza"> Miza <br>
</div>





<div class="col-5">
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Monpa"> Monpa <br>
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Nepali"> Nepali <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Nicobarese"> Nicobarese <br>
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Oriya"> Oriya <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Persian"> Persian <br>

<input type="checkbox" name="add_other_language[]" class="other_lan" value="Rajasthani"> Rajasthani <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Russian"> Russian <br>
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Sanskrit"> Sanskrit <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Santhali"> Santhali <br>

<input type="checkbox" name="add_other_language[]" class="other_lan" value="Sinhala"> Sinhala <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Sourashtra"> Sourashtra <br>
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Spanish"> Spanish <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Tamil"> Tamil <br>
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Telugu">Telugu <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Tripuri"> Tripuri <br>
<input type="checkbox" name="add_other_language[]" class="other_lan" value="Tulu"> Tulu <br>
</div>

</div>
</div>
</li>
<div class="btpad"></div>
<li class="row" class="listtopmarg">
<div class="col-md-5 col-xs-12">
<label for="">Caste/Clan:</label>
</div>
<div class="col-md-7 col-xs-12">
<!-- <span class="colons">:</span> -->
<select name="cast" id="" onchange="cast_change(this)" class="allselects half-width">
	@if(old('cast'))
	
	<option value="{{ old('language') }}">{{ old('language') }}</option>
	@else
<option value="">Please select</option>
	@endif
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
<span class="on-focus">
<input type="text" data-toggle="tooltip" data-placement="top" title="Sample text Sample text Sample text Sample text Sample text Sample text" placeholder="clan" value="{{ old('clan') }}" name="clan" class="midlinput">

</span>

</div>
</li>
<div class="btpad"></div>


<li class="row" class="listtopmarg" id="other_caste" style="display: none;">
<div class="col-md-5 col-xs-12">
<label for="">Other Caste: <span class="imporatant">*</span></label>
</div>
<div class="col-md-7 col-xs-12">
<!-- <span class="colons">:</span> -->
<span class="on-focus">

<input type="text" value="{{ old('other_caste') }}" placeholder="Please specify other caste" name="other_caste" class="allselects">
<div class="tool-tip  slideIn">Sample text Sample text Sample text Sample text Sample text Sample text </div>
</span>
</div>

</li>
<div class="btpad"></div>







<li class="row" class="listtopmarg">
<div class="col-md-5 col-xs-12">
<label for="">Marital Status: <span class="imporatant">*</span></label>
</div>
<div class="col-md-7 col-xs-12">
<!-- <span class="colons">:</span> -->
<select name="martial_status" onchange="martil_sts(this)" id="" class="allselects">
		@if(old('martial_status'))
	
	<option value="{{ old('martial_status') }}">{{ old('martial_status') }}</option>
	@else
<option value="">Please select</option>
	@endif

<option value="Married">Married</option>
<option value="unmarried">Unmarried</option>
<option value="Widow Widower">Widow Widower</option>
@if($gender=='Male')
<option value="Divorcee">Divorced</option>
@else
<option value="Divorcee">Divorcee</option>
@endif
<option value="separated">Separated</option>
<option value="Annulled">Annulled</option>
</select>
<span class='error' style="color:red; font-size: 10px;">{{ $errors->first('martial_status') }}</span>
</div>
</li>
<div class="btpad"></div>
<li class="row" class="listtopmarg" id="poly"  style="display: none;">
<div class="col-md-5 col-xs-12">
<label for="">Polygamy </label>
</div>
<div class="col-md-7 col-xs-12">
<!-- <span class="colons">:</span> -->
<select name="marige_type" id="" onchange="test_marit(this)" class="allselects">
	@if(old('marige_type'))
	
	<option value="{{ old('marige_type') }}">{{ old('marige_type') }}</option>
	@else
<option value="">Please select</option>
	@endif
{{-- <option value="">Please select</option> --}}
<option value="Second marriage">Second marriage</option>
<option value="Third marriage">Third marriage</option>
<option value="Fourth marriage">Fourth marriage</option>
{{-- <option value="Prefer not to say">Prefer not to say</option> --}}
</select>
</div>

</li>
<div class="btpad"></div>
<li class="row" class="listtopmarg" id="have_chiled" style="display: none;">
<div class="col-md-5 col-xs-12">
<label for="">Do you have kids ?<span class="imporatant"></span></label>
</div>
<div class="col-md-7 col-xs-12">
<!-- <span class="colons">:</span> -->
<div class="radiyn">

<input type="radio" @if(old('have_chiled')=='Yes') checked="" @endif name="have_chiled" class="have_chiled" value="Yes"> Yes &nbsp <input type="radio" class="have_chiled" @if(old('have_chiled')=='No') checked="" @endif name="have_chiled" value="No"> No
</div>
</div>

<li class="row" class="listtopmarg" id="how_many" style="display: none">
<div class="col-md-5 col-xs-12">
<label for="">Number of kids <span class="imporatant"></span></label>
</div>
<div class="col-md-7 col-xs-12">
<!-- <span class="colons">:</span> -->
<select name="how_many" id="" class="allselects">
		@if(old('how_many'))
	
	<option value="{{ old('how_many') }}">{{ old('how_many') }}</option>
	@else
<option value="">Please select</option>
	@endif
{{-- <option value="">Please select</option> --}}
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="More 4">More 4</option>
{{-- <option value="Prefer not to say">Prefer not to say</option> --}}
</select>
</div>
</li>
<div class="btpad"></div>

{{-- </li>
<div class="btpad"></div> --}}
{{-- <li class="row" class="listtopmarg" id="marige_type" style="display: none;">
<div class="col-md-5 col-xs-12">
<label for="">Marital Status <span class="imporatant">*</span></label>
</div>
<div class="col-md-7 col-xs-12">

<div class="input-group">
:<input type="text" value="Marital Status" name="mart_status" class="allselects">
<div class="input-group-append">
<a href="javascript:;" id="hobi1">
<span class="fa fa-angle-down arrows" style="color: #8E8E8F; color: #8E8E8F;" id="do1"></span>
<span class="fa fa-angle-up" id="ups1" style="display:none;padding-top:6px;margin-left:-20px;z-index: 1;
position: absolute;color: #8E8E8F;"></span>

</a>
</div>
</div>
<div id="hobbies1" style="display:none;">
<div class="row" style="padding-top:5px;padding-bottom:10px;">
<div class="col-6">
<a href="javascript:;" onclick="martial_check()">Select All </a>
</div>
<div class="col-6">

<a href="javascript:;" onclick="martial_uncheck()">Clear All</a>
</div>
</div>

<div class="row">
<div class="col-5">
<input type="checkbox" name="mar_type[]" class="martial_select" value="Unmaried">Unmaried<br>
<input type="checkbox" name="mar_type[]" class="martial_select" value="Widow/Widower">Widow/Widower<br>

</div>
<div class="col-5">
<input type="checkbox" name="mar_type[]" class="martial_select" value="Divorcee">Divorcee <br>
<input type="checkbox" name="mar_type[]" class="martial_select" value="Seprated News">Seprated <br>
<input type="checkbox" name="mar_type[]" class="martial_select" value="Annulled">Annulled <br> {{-- <input type="checkbox" onchange="other_hobi(this)" value="Other">Other<br> --}}
{{-- 
</div>

</div>
</div>
</div>
</li>
<div class="btpad"></div> --}} 




<li class="row" class="listtopmarg">
<div class="col-md-5 col-xs-12">
<label for=""> Hobbies/Interest: <span class="imporatant"></span></label>
</div>
<div class="col-md-7 col-xs-12">
{{-- chang --}}
<div class="input-group">
<input type="text" readonly="" value="Hobbies" name="hobbies" class="allselects">
<div class="input-group-append">
<a href="javascript:;" id="hobi">
<span class="fa fa-angle-down arrows" style="color: #8E8E8F;"style="color: #8E8E8F;" id="do"></span>
<span class="fa fa-angle-up" id="ups" style="display:none;padding-top:6px;margin-left:-20px;z-index: 1;
position: absolute;color: #8E8E8F;"></span>

</a>
</div>
</div>
<div id="hobbies" style="display:none;">
<div class="row" style="padding-top:5px;padding-bottom:10px;">
<div class="col-6">
<a href="javascript:;" onclick="check_hobi()" >Select All</a>
</div>
<div class="col-6">
<a href="javascript:;" onclick="uncheck_hobi()"  >Clear All</a>
</div>
</div>

<div class="row">
<div class="col-5">
<input type="checkbox" name="hobbies_type[]" class="check_hobies" value="Book Reading">Book Reading<br>
<input type="checkbox" name="hobbies_type[]" class="check_hobies" value="Playing Cricket">Playing Cricket<br>

</div>
<div class="col-5">
<input type="checkbox" name="hobbies_type[]" class="check_hobies" value="Football">Football <br>
<input type="checkbox" name="hobbies_type[]" class="check_hobies" value="Reading News">Reading News <br>
<input type="checkbox" onchange="other_hobi(this)" value="Other">Other<br>
<span class='error' style="color:red; font-size: 10px;">{{ $errors->first('hobbies_type') }}</span>
</div>

</div>
</div>
</div>
</li>
<div class="btpad"></div>

<li class="row" class="listtopmarg" id="other_hobies" style="display: none;">
<div class="col-md-5 col-xs-12">
<label for="">Other hobbies/interest</label>
</div>
<div class="col-md-7 col-xs-12">
<!-- <span class="colons">:</span> -->
<input type="text" name="other_hobbies_type" class="check_hobies" placeholder="please specify other Hobbies" class="allselects">
</div>
</li>
<div class="btpad"></div>
{{-- </li>
<div class="btpad"></div> --}}

<li class="row" class="listtopmarg">
<div class="col-0">
<img src="{{ $user_assets }}/icons/religion.png">
</div>
<div class="col-xs-10 main">
<p class="sechead">Appearance</p>
</div>
</li>
<hr class="lineinhead">
<li class="row" class="listtopmarg">
<div class="col-md-5 col-xs-12">
<label for="">Complexion (Skin Color):</label>
</div>
<div class="col-md-7 col-xs-12">
<!-- <span class="colons">:</span> -->
<select id="" name="skin_color" class="allselects">
		@if(old('skin_color'))
	
	<option value="{{ old('skin_color') }}">{{ old('skin_color') }}</option>
	@else
<option value="">Please select</option>
	@endif
{{-- <option value="">Select</option> --}}
<option value="Very Fair">Very Fair</option>
<option value="Fair">Fair</option>
<option value="Wheatish">Wheatish</option>
<option value="Wheatish Brown">Wheatish Brown</option>
<option value="Dark">Dark</option>
</select>
</div>
</li>
<div class="btpad"></div>
<li class="row" class="listtopmarg">
<div class="col-md-5 col-xs-12">
<label for="">Disabilty:</label>
</div>
<div class="col-md-7 col-xs-12">
<!-- <span class="colons">:</span> -->
<div class="radiyn">
<input type="radio" name="disabilty" class="disabilty_type" value="Yes"> Yes &nbsp <input type="radio" class="disabilty_type" name="disabilty" value="No"> No
</div>
</div>
</li>
<div class="btpad"></div>
<li class="row" class="listtopmarg" id="disabilty_type" style="display: none">
<div class="col-md-5 col-xs-12">
<label for=""> Disabilty Type</label>
</div>
<div class="col-md-7 col-xs-12">
<!-- <span class="colons">:</span> -->
<span class="on-focus">
<input type="text" name="disabilty_type" placeholder="Enter Disabilty Type" class="allselects">
<div class="tool-tip  slideIn">If yes, tell us which disability you have</div>
</div>
</li>
<div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-md-5 col-xs-12">
<label for="">Physical Status:</label>
</div>
<div class="col-md-7 col-xs-12">
<!-- <span class="colons">:</span> -->
<select id="" name="physical_status" onchange="other_status1(this)" class="allselects">
	@if(old('physical_status'))
	
	<option value="{{ old('physical_status') }}">{{ old('physical_status') }}</option>
	@else
<option value="">Please select</option>
	@endif
<option  value="Normal Person">Normal Person</option>
<option value="Deaf/Dumb">Deaf/Dumb</option>
<option value="Blind">Blind</option>
<option value="Physically Challenged">Physically Challenged</option>
<option value="Mentally Challenged">Mentally Challenged</option>
<option value="With other Disability">With other Disability</option>
</select>
<input type="text" name="other_physcial_status" placeholder="Specify other physical status" class="allselects" id="user_status1" style="display: none">
</div>

</li>
<div class="btpad"></div>


<script type="text/javascript">
function other_status1(sel)
{
var val=sel.value;
if(val=='With other Disability')
{

$('#user_status1').show('slow');
}
else
{
$('#user_status1').hide('slow'); 
}
}
</script>
</li>
<div class="btpad"></div>
@if($gender=='Male')
<li class="row" class="listtopmarg">
<div class="col-md-5 col-xs-12">
<label for="">Beard</label>
</div>
<div class="col-md-7 col-xs-12">
<!-- <span class="colons">:</span> -->
<select name="bread" id="" class="allselects">
@if(old('bread'))
	
	<option value="{{ old('bread') }}">{{ old('bread') }}</option>
	@else
<option value="">Please select</option>
	@endif
<option value="Yes">Yes</option>
<option value="No">No</option>
<option value="Prefered not to say">Prefered not to say</option>
</select>
</div>
</li>
<div class="btpad"></div>


@endif
<li class="row" class="listtopmarg">
<div class="col-md-5 col-xs-12">
<label for="">Body type: <span class="imporatant">*</span></label>
</div>
<div class="col-md-7 col-xs-12">
<!-- <span class="colons">:</span> -->
<div class="radiyn">
<input type="radio" name="body_type" @if(old('body_type')=='Slim') checked="" @endif value="Slim"> Slim &nbsp <input @if(old('body_type')=='Average') checked="" @endif type="radio" name="body_type" value="Average"> Average &nbsp <input @if(old('body_type')=='Athletic') checked="" @endif type="radio" name="body_type" value="Athletic"> Athletic &nbsp <input type="radio"
name="body_type" @if(old('body_type')=='Heavy') checked="" @endif value="Heavy"> Heavy
<span class='error' style="color:red; font-size: 10px;">{{ $errors->first('body_type') }}</span>
</div>
</div>
</li>
<div class="btpad"></div>
<li class="row" class="listtopmarg">
<div class="col-md-5 col-xs-12">
<label for="">Height & Weight:<span class="imporatant">*</span></label>
</div>
<div class="col-md-7 col-xs-12">
<!-- <span class="colons">:</span> -->
<select id="" name="height" class="allselects half-width">
@if(old('height'))
	
	<option value="{{ old('height') }}">{{ old('height') }}</option>
	@else
<option value="">Please select</option>
	@endif
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
<span class='error' style="color:red; font-size: 10px;">{{ $errors->first('height') }}</span>
<select id="" name="weight">
@if(old('weight'))
	
	<option value="{{ old('weight') }}">{{ old('weight') }}</option>
	@else
<option value="">Please select</option>
	@endif
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
<!-- <span class='error' style="color:red; font-size: 10px;">{{ $errors->first('weight') }}</span> -->
<span class='error' style="color:red; font-size: 10px;">{{ $errors->first('height') }}</span>
</div>

</li>
<div class="btpad"></div>


<!--***********************************************  -->

<li class="row" class="listtopmarg">
<div class="col-0">
<img src="{{ $user_assets }}/icons/religion.png">
</div>
<div class="col-xs-10 main">
<p class="sechead">Religious Interest</p>
</div>
</li>
<hr class="lineinhead">

<li class="row" class="listtopmarg">
<div class="col-5">
<label for=""> Are you or your parents reverted to Islam?</label>
</div>
<div class="col-7">
<!-- <span class="colons">:</span> -->
<div class="radiyn">
<input type="radio" name="religious_type" @if(old('religious_type')=='Yes') checked="" @endif value="Yes"> Yes &nbsp <input type="radio" name="religious_type" @if(old('religious_type')=='No') checked="" @endif  value="No"> No

</div>
</div>
</li>
<div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-md-5 col-xs-12">
<label for=""> Allegiance to Islamic Origin:<span class="imporatant">*</span></label>
</div>
<div class="col-md-7 col-xs-12">
<!-- <span class="colons">:</span> -->
<select selected="selected" name="sect_are" id="" class="allselects">
@if(old('sect_are'))
	
	<option value="{{ old('weight') }}">{{ old('sect_are') }}</option>
	@else
<option value="">Please select</option>
	@endif
<option value="A Muslim">Just a Muslim</option>
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
<span class='error' style="color:red; font-size: 10px;">{{ $errors->first('sect_are') }}</span>
</div>
</li>
<div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-md-5 col-xs-12">
<label for=""> Religiousness: </label>
</div>
<div class="col-md-7 col-xs-12">
<!-- <span class="colons">:</span> -->
<select name="religiousness" id="" class="allselects">
@if(old('religiousness'))
	
	<option value="{{ old('sect_are') }}">{{ old('religiousness') }}</option>
	@else
<option value="">Please select</option>
	@endif
<option value="Very religious">Very religious</option>
<option value="Religious">Religious</option>
<option value="Not religious">Not religious</option>
<option value="Prefer not to say">Prefer not to say</option>
</select>
</div>
</li>
<div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-md-5 col-xs-12">
<label for=""> Perform Namaz: <span class="imporatant">*</span></label>
</div>
<div class="col-md-7 col-xs-12">
<!-- <span class="colons">:</span> -->
<select selected="selected" name="pray" id="" class="allselects">
	@if(old('pray'))
	
	<option value="{{ old('pray') }}">{{ old('pray') }}</option>
	@else
<option value="">Please select</option>
	@endif
<option value="Always Pray">Always Pray</option>
<option value="sometime pray">Sometime pray</option>
<option value="Intend to start praying">Intend to start praying</option>
<option value="Sometimes miss Fajr and make Qadah Salah">Sometimes miss Fajr and make Qadah Salah</option>
<option value="Only pray before exams">Only pray before exams</option>
<option value="Don't pray">Don't pray</option>
<option value="Eid Salah only">Eid Salah only</option>
<option value="Rarely miss a prayer and make Qadah Sala">Rarely miss a prayer and make Qadah Sala</option>
</select>
<span class='error' style="color:red; font-size: 10px;">{{ $errors->first('pray') }}</span>
</div>
</li>
<div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-md-5 col-xs-12">
<label for=""> Read Quran: </label>
</div>
<div class="col-md-7 col-xs-12">
<!-- <span class="colons">:</span> -->
<select name="read_quran" id="" class="allselects">
@if(old('read_quran'))
	
	<option value="{{ old('read_quran') }}">{{ old('read_quran') }}</option>
	@else
<option value="">Please select</option>
	@endif
<option value="Daily" >Daily</option>
<option value="Ocassionally" >Ocassionally</option>
<option value="Only During Ramadan" >Only During Ramadan</option>
<option value="Only on Jummah / Fridays" >Only on Jummah / Fridays</option>
<option value="Read translated version" >Read translated version</option>
<option value="Never Read" >Never Read</option>
<option value="Prefer not to say" >Prefer not to say</option>
</select>
</div>
</li>
<div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-md-5 col-xs-12">
<label for=""> Attend religious services: </label>
</div>
<div class="col-md-7 col-xs-12">
<!-- <span class="colons">:</span> -->
<select name="attend_religious_service" id="" class="allselects">
@if(old('attend_religious_service'))
	
	<option value="{{ old('attend_religious_service') }}">{{ old('attend_religious_service') }}</option>
	@else
<option value="">Please select</option>
	@endif
<option value="Daily" >Daily</option>
<option value="Only on Jummah / Fridays">Only on Jummah / Fridays</option>
<option value="Sometimes">Sometimes</option>
<option value="Only During Ramadan">Only During Ramadan</option>
<option value="Never">Never</option>
</select>
</div>
</li>
<div class="btpad"></div>

{{--
<li class="row" class="listtopmarg">
<div class="col-md-5 col-xs-12">
<label for="">Polygamy <span class="imporatant">*</span></label>
</div>
<div class="col-md-7 col-xs-12">
<!-- <span class="colons">:</span> -->
<select name="polygamy" id="" class="allselects">
<<option value="" >Please Select</option>
<option value="Accept polygamy" >Accept polygamy</option>
<option value="Maybe accept polygamy">Maybe accept polygamy</option>
<option value="Don't accept polygamy">Don't accept polygamy</option>
</select>
</div>
</li>
<div class="btpad"></div> --}}

<li class="row" class="listtopmarg">
<div class="col-md-5 col-xs-12">
<label for="">What is your Ethnic Origin? <span class="imporatant">*</span></label>
</div>
<div class="col-md-7 col-xs-12">
<!-- <span class="colons">:</span> -->
<select name="ethnic_type" id="" class="allselects">
	@if(old('ethnic_type'))
	
	<option value="{{ old('ethnic_type') }}">{{ old('ethnic_type') }}</option>
	@else
<option value="">Please select</option>
	@endif
<option value='Rather not say'>Rather not say</option>
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
<span class='error' style="color:red; font-size: 10px;">{{ $errors->first('ethnic_type') }}</span>

</div>
</li>
<div class="btpad"></div>

<!-- ******************************************************** -->

<li class="row" class="listtopmarg">
<div class="col-0">
<img src="{{ $user_assets }}/icons/education.png">
</div>
<div class="col-xs-10 main">
<p class="sechead">Education and Occupation</p>
</div>
</li>

<hr class="lineinhead">

<li class="row" class="listtopmarg">
<div class="col-md-5 col-xs-12">
<label for="">Education: <span class="imporatant">*</span></label>
</div>
<div class="col-md-7 col-xs-12">
<!-- <span class="colons">:</span> -->
<select name="qualification" id="" class="allselects">
	@if(old('qualification'))
	
	<option value="{{ old('qualification') }}">{{ old('qualification') }}</option>
	@else
<option value="">Please select</option>
	@endif
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
<span class='error' style="color:red; font-size: 10px;">{{ $errors->first('qualification') }}</span>
</div>
</li>
<div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-md-5 col-xs-12">
<label for="">Education Details: <span class="imporatant">*</span></label>
</div>
<div class="col-md-7 col-xs-12">
<!-- <span class="colons">:</span> -->
<span class="on-focus">
<input type="text" data-toggle="tooltip" data-placement="top" title="Kindly provide us with more information about your education" value="{{ old('edu_detail') }}" name="edu_detail" class="allinputs">
<span class='error' style="color:red; font-size: 10px;">{{ $errors->first('edu_detail') }}</span>

</div>
</li>
<div class="btpad"></div>

<li class="row" class="listtopmarg" id="users_job">
<div class="col-md-5 col-xs-12">
<label for=""> Occupation: <span class="imporatant">*</span></label>
</div>
<div class="col-md-7 col-xs-12">
<!-- <span class="colons">:</span> -->
<select name="job" onchange="user_job(this)" class="allselects">
	@if(old('job'))
	
	<option value="{{ old('job') }}">{{ old('job') }}</option>
	@else
<option value="">Please select</option>
	@endif
<option value="Software Engineer">Software Engineer</option>
<option value="Producer/Director">Producer/Director</option>
<option value="Media">Media</option>
<option value="Marketing Manager">Marketing Manager</option>
<option value="Politician">Politician</option>
<option value="HR Manager">HR Manager</option>
<option value="Lawyer">Lawyer</option>
<option value="I T Porfissional">I T Porfissional</option>
<option value="Teacher">Teacher</option>
<option value="University Lacturer">University Lacturer</option>
<option value="Business Administration">Business Administration</option>
<option value="Admin Officer"> Admin Officer</option>
<option value="Civil Engineering">Civil Engineering </option>
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


<option value="Other">Other</option>

</select>
<span class='error' style="color:red; font-size: 10px;">{{ $errors->first('job') }}</span>
<input type="text" value="{{ old('user_other_job') }}" name="user_other_job" placeholder="Specify other occupation" class="allselects" id="user_other_job" style="display: none">
</div>
</li>
<div class="btpad"></div>
{{--
<li class="row" class="listtopmarg" id="user_other_job" style="display: none">
<div class="col-md-5 col-xs-12">
<label for=""> Occupation:</label>
</div>
<div class="col-md-7 col-xs-12">
<!-- <span class="colons">:</span> -->
<input type="text" name="user_other_job" placeholder="please specify other Occupation" class="allselects">

</div>
</li>
<div class="btpad"></div> --}}
<li class="row" class="listtopmarg">
<div class="col-md-5 col-xs-12">
<label for="">Occupation Detail: <span class="imporatant">*</span></label>
</div>
<div class="col-md-7 col-xs-12">
<!-- <span class="colons">:</span> -->
<span class="on-focus">
<input type="text" data-toggle="tooltip" data-placement="top" title="Occupation detail" value="{{ old('occupation_detail') }}" name="occupation_detail" placeholder="Please enter occupation detail" class="allselects">

<span class='error' style="color:red; font-size: 10px;">{{ $errors->first('occupation_detail') }}</span>
</div>
</li>
<div class="btpad"></div>
<li class="row" class="listtopmarg">
<div class="col-md-5 col-xs-12">
<label for=""> Annual Income: <span class="imporatant">*</span></label>
</div>
<div class="col-md-7 col-xs-12">
<!-- <span class="colons">:</span> -->
<select name="a_income" id="" class="allselects half-width">


@if(old('a_income'))
	
	<option value="{{ old('a_income') }}">{{ old('a_income') }}</option>
	@else
<option value="">Please select</option>
	@endif
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
<option value="1 Million">1 Million</option>
<option value="1.5 Million">1.5 Million</option>
<option value="2 Million">2 Million</option>
<option value="2.5 Million">2.5 Million</option>
<option value="3 Million and above">3 Million and above</option>
</select>
<select name="courncy" id="" class="midlinput">


@if(old('courncy'))
	
	<option value="{{ old('courncy') }}">{{ old('courncy') }}</option>
	@else
<option value="">Please select</option>
	@endif
<option value="166">Pakistan - PKR</option> 
<option value="12">India - INR</option>
<option value="25">Australia - AUD</option>
<option value="29">Bahrain - BHD</option>
<option value="49">Canada - CAD</option>
<option value="83">France - EUR</option>
<option value="89">Germany - EUR</option>
<option value="120">Kuwait - KWD</option>
<option value="165">Oman - OMR</option>
<option value="191">Singapore - SGD</option>
<option value="244">United Arab Emirates - AED</option>
<option value="245">United Kingdom - GBP</option>
<option value="246">United States of America - USD</option>
<optgroup label='-----------------------'>
</optgroup>
<option value="13">Afghanistan - AFA
</option>                                      
<option value="14">Albania - ALL</option>                                      
<option value="15">Algeria - DZD</option>                                      
<option value="16">American Samoa - USD</option>                                     
<option value="17">Andorra - EUR</option>                                      
<option value="18">Angola - AON</option>                                      
<option value="19">Anguilla - XCD</option>                                      
<option value="20">Antarctica - XCD</option>                                      
<option value="21">Antigua and Barbuda - XCD
</option>                                      
<option value="22">Argentina - ARS</option>                                      
<option value="23">Armenia - AMD</option>                                      
<option value="24">Aruba - AWG</option>                                      
<option value="25">Australia - AUD</option>                                     
<option value="26">Austria - EUR</option>                                      
<option value="27">Azerbaijan - AZM</option>                                      
<option value="28">Bahamas - BSD</option>                                      
<option value="29">Bahrain - BHD</option>                                      
<option value="30">Bangladesh - BDT</option>                                      
<option value="31">Barbados - BBD</option>                                      
<option value="32">Belarus - BYB</option>                                      
<option value="33">Belgium - EUR</option>                                      
<option value="34">Belize - BZD</option>                                      
<option value="35">Benin - XOF</option>                                     
<option value="36">Bermuda - BMD</option>                                      
<option value="37">Bhutan - BTN</option>                                      
<option value="38">Bolivia - BOB</option>                                      
<option value="39">Bosnia and Herzegovina - BAM</option>                                      
<option value="40">Botswana - BWP</option>                                      
<option value="41">Brazil - BRL</option>                                      
<option value="42">British Virgin Islands - USD</option>                                      
<option value="43">Brunei - BND</option>                                      
<option value="44">Bulgaria - BGL</option>                                      
<option value="45">Burkina Faso - XOF</option>                                      
<option value="46">Burundi - BIF</option>                                      
<option value="47">Cambodia - KHR</option>                                      
<option value="48">Cameroon - XAF</option>                                      
<option value="49">Canada - CAD</option>                                      
<option value="50">Cape Verde - CVE</option>                                      
<option value="51">Cayman Islands - KYD</option>                                      
<option value="52">Central African Republic - XAF</option>                                      
<option value="53">Chad - XAF</option>                                      
<option value="54">Chile - CLP</option>                                      
<option value="55">China - CNY</option>                                      
<option value="56">Christmas Island - AUD</option>                                      
<option value="57">Cocos Islands - AUD</option>                                      
<option value="58">Colombia - COP</option>                                      
<option value="59">Comoros - KMF</option>                                      
<option value="60">Congo - XAF</option>                                      
<option value="61">Cook Islands - NZD</option>                                      
<option value="62">Costa Rica - CRC</option>                                      
<option value="63">Croatia - HRK</option>                                     
<option value="64">Cuba - CUP</option>                                      
<option value="65">Cyprus - CYP</option>                                     
<option value="66">Czech Republic - CZK</option>                                      
<option value="67">Denmark - DKK</option>                                      
<option value="68">Djibouti - DJF</option>                                      
<option value="69">Dominica - XCD</option>                                      
<option value="70">Dominican Republic - DOP</option>                                      
<option value="71">East Timor - TPE</option>                                      
<option value="72">Ecuador - ECS</option>                                      
<option value="73">Egypt - EGP</option>                                      
<option value="74">El Salvador - SVC</option>                                      
<option value="75">Equatorial Guinea - XAF</option>                                      
<option value="76">Eritrea - ERN</option>                                      
<option value="77">Estonia - EEK</option>                                     
<option value="78">Ethiopia - ETB</option>                                      
<option value="79">Falkland Islands - FKP</option>                                      
<option value="80">Faroe Islands - DKK</option>                                      
<option value="81">Fiji - FJD</option>                                      
<option value="82">Finland - EUR</option>                                     
<option value="83">France - EUR</option>                                      
<option value="84">French Guiana - EUR</option>                                      
<option value="85">French Polynesia - XPF</option>                                      
<option value="86">Gabon - XAF</option>                                      
<option value="87">Gambia - GMD</option>                                      
<option value="88">Georgia - GEL</option>                                      
<option value="89">Germany - EUR</option>                                      
<option value="90">Ghana - GHC</option>                                      
<option value="91">Gibraltar - GIP</option>                                     
<option value="92">Greece - EUR</option>                                      
<option value="93">Greenland - DKK</option>                                      
<option value="94">Grenada - XCD</option>                                      
<option value="95">Guadeloupe - EUR</option>                                      
<option value="96">Guam - USD</option>                                      
<option value="97">Guatemala - QTQ</option>                                      
<option value="98">Guinea - GNF</option>                                      
<option value="99">Guinea-Bissau - GWP</option>                                      
<option value="100">Guyana - GYD</option>                                      
<option value="101">Haiti - HTG</option>                                      
<option value="102">Honduras - HNL</option>                                      
<option value="103">Hong Kong - HKD</option>                                      
<option value="104">Hungary - HUF</option>                                      
<option value="105">Iceland - ISK</option>                                      
<option value="12">India - INR</option>                                      
<option value="106">Indonesia - IDR</option>                                     
<option value="107">Iran - IRR</option>                                      
<option value="108">Iraq - IQD</option>                                     
<option value="109">Ireland - EUR</option>                                      
<option value="110">Israel - ILS</option>                                      
<option value="111">Italy - EUR</option>                                      
<option value="112">Jamaica - JMD</option>                                      
<option value="113">Japan - JPY</option>                                      
<option value="114">Jordan - JOD</option>                                      
<option value="115">Kazakhstan - KZT</option>                                      
<option value="116">Kenya - KES</option>                                      
<option value="117">Kiribati - AUD</option>                                      
<option value="118">Korea, North - KPW</option>                                      
<option value="119">Korea, South - KRW</option>                                      
<option value="120">Kuwait - KWD</option>                                      
<option value="121">Kyrgyzstan - KGS</option>                                      
<option value="122">Laos - LAK</option>                                      
<option value="123">Latvia - LVL</option>                                      
<option value="124">Lebanon - LBP</option>                                      
<option value="125">Lesotho - LSL</option>                                      
<option value="126">Liberia - LRD</option>                                     
<option value="127">Libya - LYD</option>                                      
<option value="128">Liechtenstein - CHF</option>                                      
<option value="129">Lithuania - LTL</option>                                      
<option value="130">Luxembourg - EUR</option>                                     
<option value="131">Macau - MOP</option>                                      
<option value="132">Madagascar - MGF</option>                                      
<option value="133">Malawi - MWK</option>                                      
<option value="134">Malaysia - MYR</option>                                      
<option value="135">Maldives - MVR</option>                                     
<option value="136">Mali - XOF</option>                                      
<option value="137">Malta - MTL</option>                                      
<option value="138">Marshall Islands - USD</option>                                      
<option value="139">Martinique - EUR</option>                                      
<option value="140">Mauritania - MRO</option>                                      
<option value="141">Mauritius - MUR</option>                                      
<option value="142">Mayotte - EUR</option>                                      
<option value="143">Mexico - MXN</option>                                      
<option value="144">Micronesia - USD</option>                                      
<option value="145">Moldova - MDL</option>                                      
<option value="146">Monaco - EUR</option>                                      
<option value="147">Mongolia - MNT</option>                                      
<option value="148">Montserrat - XCD</option>                                      
<option value="149">Morocco - MAD</option>                                      
<option value="150">Mozambique - MZM</option>                                      
<option value="151">Myanmar - MMK</option>                                      
<option value="152">Namibia - NAD</option>                                      
<option value="153">Nauru - AUD</option>                                      
<option value="154">Nepal - NPR</option>                                      
<option value="155">Netherlands - EUR</option>                                      
<option value="156">Netherlands Antilles - ANG</option>                                      
<option value="157">New Caledonia - XPF</option>                                      
<option value="158">New Zealand - NZD</option>                                      
<option value="159">Nicaragua - NIC</option>                                      
<option value="160">Niger - XOF</option>                                      
<option value="161">Nigeria - NGN</option>                                      
<option value="162">Niue - NZD</option>                                      
<option value="163">Northern Mariana Islands - USD</option>                                     
<option value="164">Norway - NOK</option>                                      
<option value="165">Oman - OMR</option>                                      

<option value="167">Palau - USD</option>                                      
<option value="168">Panama - PAB</option>                                      
<option value="169">Papua New Guinea - PGK</option>                                      
<option value="170">Paraguay - PYG</option>                                      
<option value="171">Peru - PEN</option>                                      
<option value="172">Philippines - PHP</option>                                      
<option value="173">Poland - PLZ</option>                                      
<option value="174">Portugal - EUR</option>                                      
<option value="175">Puerto Rico - USD</option>                                      
<option value="176">Qatar - QAR</option>                                      
<option value="177">Reunion - EUR</option>                                      
<option value="178">Romania - ROL</option>                                      
<option value="179">Russia - RUR</option>                                      
<option value="180">Rwanda - RWF</option>                                      
<option value="210">Saint Kitts & Nevis - XCD</option>                                      
<option value="211">Saint Lucia - XCD</option>                                      
<option value="183">Saint Vincent and The Grenadin - XCD</option>                                      
<option value="212">Samoa - WST</option>                                      
<option value="213">San Marino - ITL</option>                                      
<option value="186">Sao Tome and Principe - STD</option>                                      
<option value="214">Sao Tome and Principe - STD</option>                                      
<option value="187">Saudi Arabia - SAR</option>                                      
<option value="188">Senegal - XOF</option>                                      
<option value="189">Seychelles - SCR</option>                                      
<option value="218">Sierra Leone - SLL</option>                                      
<option value="191">Singapore - SGD</option>                                     
<option value="220">Slovakia - SKK</option>                                      
<option value="221">Slovenia - SIT</option>                                      
<option value="194">Somalia - SOD</option>                                      
<option value="195">South Africa - ZAR</option>                                      
<option value="224">Spain - EUR</option>                                      
<option value="225">Sri Lanka - LKR</option>                                      
<option value="226">Sudan - SDD</option>                                      
<option value="199">Suriname - SRG</option>                                      
<option value="200">Swaziland - SZL</option>                                      
<option value="201">Sweden - SEK</option>                                      
<option value="202">Switzerland - CHF</option>                                      
<option value="203">Syria - SYP</option>                                      
<option value="204">Tajikistan - TJR</option>                                      
<option value="233">Tanzania - TZS</option>                                      
<option value="206">Thailand - THB</option>                                      
<option value="207">Togo - XOF</option>                                      
<option value="236">Tokelau - NZD</option>                                      
<option value="237">Tonga - TOP</option>                                      
<option value="238">Tunisia - TND</option>                                      
<option value="239">Turkey - TRL</option>                                      
<option value="240">Turkmenistan - TMM</option>                                      
<option value="241">Tuvalu - AUD</option>                                      
<option value="242">Uganda - UGS</option>                                      
<option value="243">Ukraine - UAG</option>                                      
<option value="244">United Arab Emirates - AED</option>                                      
<option value="245">United Kingdom - GBP</option>                                      
<option value="246">United States of America - USD</option>                                      
<option value="247">Uruguay - UYP</option>                                      
<option value="248">Uzbekistan - UZS</option>                                      
<option value="249">Vanuatu - VUV</option>                                      
<option value="250">Vatican City - EUR</option>                                      
<option value="251">Venezuela - VUB</option>                                      
<option value="252">Vietnam - VND</option>                                      
<option value="253">Yemen - YER</option>                                      
<option value="254">Yugoslavia (Former) - YUN</option>                                      
<option value="255">Zambia - ZMK</option>                                      
<option value="256">Zimbabwe - ZWD</option>
</select>
<span class='error' style="color:red; font-size: 10px;">{{ $errors->first('a_income') }}</span>
</div>
</li>
<div class="btpad"></div>
<!-- *********************************************** -->

<li class="row" class="listtopmarg">
<div class="col-0">
<img src="{{ $user_assets }}/icons/contact-details.png">
</div>
<div class="col-xs-10 main">
<p class="sechead">Contact Details</p>
</div>
</li>

<hr class="lineinhead">



<li class="row" class="listtopmarg">
<div class="col-md-5 col-xs-12">
<label for=""> Present Country: <span class="imporatant">*</span></label>
</div>
<div class="col-md-7 col-xs-12">
<!-- <span class="colons">:</span> -->

<select name="present_country_id" class="allselects half-width">

	
<option value="">Please select</option>

@foreach ($country as $row)
<option value="{{ $row->country_id }}">
{{ $row->country_name }}
</option>
@endforeach
</select>
</select>
<span class='error' style="color:red; font-size: 10px;">{{ $errors->first('present_country_id') }}</span>
<span class="on-focus">


<input type="text" data-toggle="tooltip" data-placement="top" title="Kindly provide the name of your city" value="{{ old('present_city') }}" name="present_city" placeholder="City" id='city'>

</div>
</li>
<div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-md-5 col-xs-12">
<label for="">Native Country: <span class="imporatant">*</span></label>
</div>
<div class="col-md-7 col-xs-12">
<!-- <span class="colons">:</span> -->
<select id="country" onchange="country_change1(this)" name="native_country_id" class="allselects">

<option value="">Please select</option>
	
@foreach ($country as $row)
<option value="{{ $row->country_id }}">
{{ $row->country_name }}
</option>
@endforeach
</select>
<span class='error' style="color:red; font-size: 10px;">{{ $errors->first('native_country_id') }}</span>
</div>
</li>
<div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-md-5 col-xs-12">
<label for="">Native State: <span class="imporatant">*</span></label>
</div>
<div class="col-md-7 col-xs-12">
<!-- <span class="colons">:</span> -->
<select selected="selected" id="native_state" onchange="state_change1(this)" name="native_state_id" class="allselects">

	
	
<option value="">Please select</option>

</select>
<span class='error' style="color:red; font-size: 10px;">{{ $errors->first('native_state_id') }}</span>
</div>
</li>
<div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-md-5 col-xs-12">
<label for=""> Native City (eg: Lahore): <span class="imporatant">*</span></label>
</div>
<div class="col-md-7 col-xs-12">
<!-- <span class="colons">:</span> -->
<select name="native_city_id" id="native_city" selected="selected" class="allselects">

	
	
<option value="">Please select</option>
</select>
<span class='error' style="color:red; font-size: 10px;">{{ $errors->first('native_city_id') }}</span>
</div>
</li>
<div class="btpad"></div>

{{--
<li class="row" class="listtopmarg">
<div class="col-md-5 col-xs-12">
<label for="">Mobile Number <span class="imporatant">*</span></label>
</div>
<div class="col-md-7 col-xs-12">
<!-- <span class="colons">:</span> -->
<select name="" id="" class="allselects">
<option value="">Pakistan</option>
<option value="">India</option>
</select><input type="text" class="midlinput" placeholder="Mobile No.">
</div>
</li>
<div class="btpad"></div>
--}}
<li class="row" class="listtopmarg">
<div class="col-md-5 col-xs-12">
<label for="">Convenient time to call:</label>
</div>
<div class="col-md-7 col-xs-12">
<!-- <span class="colons">:</span> -->

<input type="text" data-toggle="tooltip" data-placement="top" title="Enter convenient time to call" name="convenient_time" class="allselects">

{{-- <select name="convenient_time" class="allselects">
	@if(old('convenient_time'))
	
	<option value="{{ old('convenient_time') }}">{{ old('convenient_time') }}</option>
	@else
<option value="">Please select</option>
	@endif
<option value="7 AM">7 AM</option>
<option value="12 AM">12 AM</option>
<option value="Anytime">Anytime</option>
</select> --}}

</div>
</li>
<div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-md-5 col-xs-12">
<label for="">Contact Person & Relationship: </label>
</div>
<div class="col-md-7 col-xs-12">
<!-- <span class="colons">:</span> -->
<span class="on-focus">

<input type="text" data-toggle="tooltip" data-placement="top" title="If you are the person to contact then write your contact number or if not then provide us with your relationship contact" value="{{ old('contact_person') }}" name="contact_person" class="allinputs">

</div>
</li>
<div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-md-5 col-xs-12">
<label for=""> Full Address: <span class="imporatant"></label>
</div>
<div class="col-md-7 col-xs-12">
<!-- <span class="colons">:</span> -->
<span class="on-focus">



{{-- <textarea name="full_address" placeholder="We guarantee that your address details will remain invisible to other members and will not be shared!" id="" cols="15" class="prfdesctxt"></textarea>                                    --}}
<textarea name="full_address" data-toggle="tooltip" data-placement="top" title="Kindly provide us with your complete address. Your address will remain confidential only with us." placeholder="" id="" cols="30">{{ old('full_address') }}</textarea>
<span class='error' style="color:red; font-size: 10px;">{{ $errors->first('full_address') }}</span>

</div>
</li>
<div class="btpad"></div>
<!-- *********************************************** -->

<li class="row" class="listtopmarg">
<div class="col-0">
<img src="{{ $user_assets }}/icons/general-attributes.png">
</div>
<div class="col-xs-10 main">
<p class="sechead">General Attributes</p>
</div>
</li>

<hr class="lineinhead">

<li class="row" class="listtopmarg">
<div class="col-md-5 col-xs-12">
<label for="">Blood Group: </label>
</div>
<div class="col-md-7 col-xs-12">
<!-- <span class="colons">:</span> -->

<select name="blood_group" class="allselects">
	@if(old('blood_group'))
	
	<option value="{{ old('blood_group') }}">{{ old('blood_group') }}</option>
	@else
<option value="">Please select</option>
	@endif
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
</li>
<div class="btpad"></div>



<li class="row" class="listtopmarg">
<div class="col-md-5 col-xs-12">
<label for="">Diet:</label>
</div>
<div class="col-md-7 col-xs-12">
<!-- <span class="colons">:</span> -->

<select name="diet" class="allselects">
	@if(old('diet'))
	
	<option value="{{ old('diet') }}">{{ old('diet') }}</option>
	@else
<option value="">Please select</option>
	@endif
<option value="vegetarian">vegetarian</option>
<option value="Non-vegetarian">Non-vegetarian</option>

</select>
</div>
</li>
<div class="btpad"></div>
@if($gender=='Male')
<li class="row" class="listtopmarg">
<div class="col-md-5 col-xs-12">
<label for="">Do you Smoke ?</label>
</div>
<div class="col-md-7 col-xs-12">
<!-- <span class="colons">:</span> -->
<div class="radiyn">
<select name="smoking" class="allselects">
	@if(old('smoking'))
	
	<option value="{{ old('smoking') }}">{{ old('smoking') }}</option>
	@else
<option value="">Please select</option>
	@endif
<option value="Chain smoker">Chain Smoker</option>
<option value="Occasionally">Occasionally</option>
<option value="Intend to quit">Intend to Quit</option>
<option value="sometimes">Sometimes</option>
<option value="never">Never</option>
</select>
</div>
</div>
</li>
<div class="btpad"></div>
@endif
<li class="row" class="listtopmarg">
<div class="col-md-5 col-xs-12">
<label for="">Are you the patient of thalassemia?</label>
</div>
<div class="col-md-7 col-xs-12">
<!-- <span class="colons">:</span> -->
<div class="radiyn">
<input type="radio" @if(old('thelisimia')=='Yes') checked="" @endif name="thelisimia" value="Yes"> Yes <input type="radio" name="thelisimia" @if(old('thelisimia')=='No') checked="" @endif value="No"> No
</div>
</div>
</li>
<div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-md-5 col-xs-12">
<label for="">Are you suffering any Disease? </label>
</div>
<div class="col-md-7 col-xs-12">
<!-- <span class="colons">:</span> -->
<input type="radio" @if(old('diseace')=='Yes') checked="" @endif name="diseace" id="diseace" onchange="suffering(this)" value="Yes"> Yes <input type="radio" @if(old('diseace')=='No') checked="" @endif name="diseace" onchange="suffering(this)" value="No"> No
</div>
</li>
<div class="btpad"></div>

<li class="row" class="listtopmarg" id="diseace_type" style="display: none;">
<div class="col-md-5 col-xs-12">
<label for="">Please specify other disease<span class="imporatant"></span></label>
</div>
<div class="col-md-7 col-xs-12">
<!-- <span class="colons">:</span> -->
<span class="on-focus">




<input type="text" value="{{ old('diseace_type') }}" name="diseace_type" placeholder="please specify other disease">
<div class="tool-tip  slideIn">Kindly specify the disease you are suffering from</div>
</div>
</li>
<div class="btpad"></div>
{{-- </li>
<div class="btpad"></div> --}} {{--
<li class="row" class="listtopmarg">
<div class="col-md-5 col-xs-12">
<label for="">Disability</label>
</div>
<div class="col-md-7 col-xs-12">
<!-- <span class="colons">:</span> -->
<select name="disabilty" id="" class="allselects">
<option value="Normal Person">Normal Person</option>
<option value="Deaf/Dumb">Deaf/Dumb</option>
<option value="Blind">Blind</option>
<option value="Physically Challenged">Physically Challenged</option>
<option value="Mentally Challenged">Mentally Challenged</option>
<option value="With other Disability">With other Disability</option>
</select>
</div>
</li>
<div class="btpad"></div> --}}

<li class="row" class="listtopmarg">
<div class="col-md-5 col-xs-12">
<label for="">How did you find about us?</label>
</div>
<div class="col-md-7 col-xs-12">
<!-- <span class="colons">:</span> -->
<select name="how_did" id="" class="allselects">
	@if(old('how_did'))
	
	<option value="{{ old('how_did') }}">{{ old('how_did') }}</option>
	@else
<option value="">Please select</option>
	@endif
<option value="Google">Google</option>
<option value="Facebook">Facebook</option>
<option value="Twiter">Twiter</option>
<option value="Kaboolhai Marketing">Kaboolhai Marketing</option>
<option value="Friends">Friends</option>
<option value="Whatsapp">Whatsapp</option>
</select> {{-- --}}
</div>
</li>
<div class="btpad"></div>
<li class="row" class="listtopmarg">
<div class="col-md-5 col-xs-12">

</div>
<div class="col-md-7 col-xs-12">
<div class="agreestat">
<input type="checkbox" @if(old('agreed')) checked="" @endif name="agreed">&nbsp I have read and agreed to the <a href="{{ url('term-condation') }}">T&C</a> and <a href="{{ url('policy-privacy') }}">Privacy Policy</a>
<span class='error' style="color:red; font-size: 10px;">{{ $errors->first('agreed') }}</span>
</div>
</div>
</li>
<div class="btpad"></div>


</ul>
<!-- ***************************************************************************************** -->









<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</ul>

<div id="first_step">

{{-- <a href="#" class="btn prevtofirstbtn" id="previous">previous</a> --}}
<button type="submit" class="btn nexttothirdbtn">Next</button>
{{-- <a href="#" class="btn nexttothirdbtn" id="second">Next</a> --}}
</div>



{{-- <div id="third_step">

<a href="#" class="btn prevsecbtn">Previous</a>
<button type="submit" class="btn submitbtn" type="submit">Submit</button>
</div>
--}}
</div>
</div>
<br>
</div>
</form>




<script type="text/javascript">



function lan_uncheck()
{
$('.other_lan').prop('checked', false);
}
function lan_check()
{
$('.other_lan').prop('checked', true);

}


function check_hobi()
{

$('.check_hobies').prop('checked', true);
}
function uncheck_hobi()
{

$('.check_hobies').prop('checked', false);

}

function martil_sts(select)
{

var val=select.value;
if(val=='Married')
{
$('#poly').show('slow') 
// alert(val);
}
else
{
$('#poly').hide('slow') 
$('#have_chiled').hide('slow');
}
}
// function martial_check()
//        {
//                           $('.martial_select').prop('checked', true);


//        }




function suffering(sel)
{

var diseace_type= sel.value;

if(diseace_type=='Yes')
{
$('#diseace_type').show(500);
// $('#test_assets').hide();
}
else
{
// $('#test_assets').show();
$('#diseace_type').hide(500);
}
}
function other_hobi(sel)
{

var other_hobi= sel.checked;

if(other_hobi)
{
$('#other_hobies').show(500);
// $('#test_assets').hide();
}
else
{
// $('#test_assets').show();
$('#other_hobies').hide(500);
}
}

function assets_change(sel)
{
var assets= sel.value;
if(assets=='other')
{
$('#other_assets').show(500);
// $('#test_assets').hide();
}
else
{
// $('#test_assets').show();
$('#other_assets').hide(500);
}
}

// function disabilty_test(sel)
// {
function test_marit(value)
{
var value= value.value;
// alert(value);

if(value == 'Prefer not to say')
{

$('#marige_type').hide(500);
$('#have_chiled').hide(500);
}
else
{
$('#marige_type').show(500);
$('#have_chiled').show(500);

}

}

$('.have_chiled').change(function(){
var value = $( this ).val();
if(value=='Yes')
{

$('#how_many').show(500);
}
else
{
$('#how_many').hide(500);

}
});
$('.disabilty_type').change(function(){
var value = $( this ).val();
if(value=='Yes')
{

$('#disabilty_type').show(500);
}
else
{
$('#disabilty_type').hide(500);

}

});

//  $('.relocate').change(function(){
// var value = $( this ).val();
// if(value=='Never')
// {

//    $('#relocate_type').show(500);
// }
// else
// {
//    $('#relocate_type').hide(500);

// }

//   });
//  var disabilty_type= sel.checked;
//  if(profile_test)
//  {
//   // $('#gardian_number').show(500);
//  }
//  else
//  {
//      // $('#gardian_number').show(500);
//  }
// }

function user_job(sel)
{
var other_job= sel.value;
if(other_job=='Other')
{
// $('#users_job').hide();
$('#user_other_job').show(500);
}
else
{
// $('#users_job').show();
$('#user_other_job').hide(500);
}
}
function job_test(sel)
{
var other_job= sel.value;
if(other_job=='Other')
{
// $('#loking_job').hide();
$('#other_job').show(500);
}
else
{
// $('#loking_job').show();
$('#other_job').hide(500);
}
}


function country_change(sel)
{
// alert();
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

function country_change1(sel)
{
// alert();
var country_id= sel.value;

// alert(country_id);
document.getElementById("wait").style.display = "block";

$.post('{{ url('/get_state') }}' , {_token: '{{ csrf_token() }}' , country_id: country_id} , function(data)
{
// alert(data);
document.getElementById("wait").style.display = "none"
response = $.parseJSON(data);
// alert(response.states);
$('#native_state').html(response.states);
$('#code').attr('value' , response.code);
$('#falgimg').attr('src' , "{{ $user_assets.'/flags/' }}"+response.flag);
// alert(response.code_flage);
});
}

function country_change2(sel)
{
// alert();
var country_id= sel.value;

// alert(country_id);
document.getElementById("wait").style.display = "block";

$.post('{{ url('/get_state') }}' , {_token: '{{ csrf_token() }}' , country_id: country_id} , function(data)
{
// alert(data);
document.getElementById("wait").style.display = "none"
response = $.parseJSON(data);
// alert(response.states);
$('#living_state').html(response.states);
$('#code').attr('value' , response.code);
$('#falgimg').attr('src' , "{{ $user_assets.'/flags/' }}"+response.flag);
// alert(response.code_flage);
});
}

function state_change2(sel)
{
var state_id=sel.value;

document.getElementById("wait").style.display = "block";
$.post('{{ url('/get_city') }}' , {_token: '{{ csrf_token() }}' , state_id: state_id} , function(data)
{
// alert(data);
document.getElementById("wait").style.display = "none";
$('#living_city').html(data);
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

function state_change1(sel)
{
var state_id=sel.value;

document.getElementById("wait").style.display = "block";
$.post('{{ url('/get_city') }}' , {_token: '{{ csrf_token() }}' , state_id: state_id} , function(data)
{
// alert(data);
document.getElementById("wait").style.display = "none";
$('#native_city').html(data);
});

}
function cast_change(sel)
{
var val=sel.value;
if(val=='other')

{

$('#other_caste').show('slow');
}
else
{
$('#other_caste').hide('slow');
}



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
.tooltip > .tooltip-inner {background-color: #ccc; color: black; text-align: justify;}
</style>
@endsection
@push('css')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<link rel="stylesheet" href="{{ $user_assets }}/css/style2.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
{{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> --}}
<script src="{{ $user_assets }}/js/custom2.js"></script>
<script src="{{ $user_assets }}/js/register.js"></script>
<link rel="stylesheet" href="{{ $user_assets }}/css/register.css" />
 <script type="text/javascript">
 	
 $('#profile_created').val('{{ old('profile_created') }}');
 </script>
 <script type="text/javascript">
 	$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
 </script>
@endpush