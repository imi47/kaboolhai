@extends('user/master_layout2') 
@section('data')

<link rel="stylesheet" href="{{ $user_assets }}/css/style.css" />

<style type="text/css">

input, textarea {
    border: 1px solid #dfdfdf;
}

input[type='checkbox'], input[type='radio'] {
	width:auto !important;
}

select {
	border: 1px solid #ccc;
}

.living_scroll{
	overflow-y: scroll;
	height: 300px;
}

.allselects {
   width: 83%;
}

input[type='text'] {
	padding:15px;
}

label {
	margin-bottom:20px;
}

.allselects, .smallselect, .midlinput {
	height:auto;
	padding:6px;
}

.income-select {
	margin-right:20px;
}

.smallselect {
	width:auto;
}

.midlinput {
    width: 38.65%;
}

.error  {
	display:block;
}

.move-left {
	margin-left:-12px;
}

@media (max-width:1200px) {
	.father-occupation {
		display:block;
	}
}

@media (max-width:991px) {
	.allselects {
   	width: 88%;
	}

	.smallselect {
		width:auto;
	}

	.income-select + select {
		width:88%;
		margin-top:15px;
	}

	.last-textarea {
		width: 88% !important;
	}
}

@media (max-width:575px) {
	#advanceinfo {
		padding:0 0 0 5px;
	}

	.col-xl-3.col-lg-3.col-sm-3.col-xs-6 img, .col-xl-3.col-lg-3.col-sm-3.col-xs-6 img + br{
		display:none;
	}

	.help-me-write-this {
		margin-bottom: 15px;
    	display: inline-block;
	}

	#first_step {
		float:none;
		text-align:center;
		margin-right:0;
		margin-top:15px;
	}

	label {
		margin-bottom:0;
	}
}

@media (max-width:345px) {
	#advanceinfo,  #advanceinfo select, .radiyn{
		font-size:4vw;
	}

	.sechead {
		padding:5px;
	}

	.allselects, .smallselect, .midlinput {
		padding:0.5vw !important;
	}
}

@media (min-width:991px) {
	.famdet, .last-textarea {
		width: 83% !important;
	}
}

.sidebar h3.text-center {
    font-size: 1.54rem;
    padding: 10px;
}

.bg-orange.no-padding.wow {
	margin-top:50px;
	padding:10px;
}

.sidebar .well {
	min-height: 20px;
	padding: 19px;
	/* background-color: #f5f5f5; */
	border: 1px solid #e3e3e3;
	/* border-radius: 4px; */
	-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
	box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
}


</style>

<script>
	document.querySelector("#nav-wrapper nav").classList.remove('sticky-nav');
</script>

<div class="container">
<div id="wait" style="display: none;"></div>
<br>
<div class="row form-and-sidebar-container">
{{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}
<div class=" col-md-9 col-sm-12">
<div class="well" style="background-color: #f5f5f5">
<br>
<div class="menuwizard">
{{-- <img id="one" class="wizrdpic" src="{{ $user_assets }}/img/registration-step 1.png" alt=""> --}}
<img id="three" class="wizrdpic" src="{{ $user_assets }}/img/registration-step 3.png" alt="">
{{-- <img id="two" class="wizrdpic" src="{{ $user_assets }}/img/registration-step 2.png" alt=""> --}}
</div>
<div data-backdrop="static" data-keyboard="false" class="modal fade" id="help" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title tb-modal-title" id="exampleModalLabel">Please click on below Paragraph for profile description</h5>
</div>
<div class="modal-body">

<div class="form-group">
	@if($gender=='Male')
	<a id="1stp" href="javascript:;" data-dismiss="modal" onclick="myFunction('1stp')">I belong to an upper middle class family. I am a graduate from a reputed institution and do an executive level job at an organization. I am capable enough to support my family. I have strong moral, ethical values and beliefs. I am yet a modern thinker but uphold Islamic values and traditions of ancestors. I am an extrovert and like to spend time with people and enjoy outdoor activities. </a>
<br><br>
	<a id="2ndp" href="javascript:;" data-dismiss="modal" onclick="myFunction('2ndp')">I belong to a middle class family and whatever I am today is due to my hard work and dedication. I am not a very outgoing person and enjoy spending time with my family and friends. I have a good academic background which earned me a respected job. I can afford to have my own family and give a respectable living. I believe in following Islamic principles and a practicing Muslim.</a>

	<br><br>
	<a id="3rd" href="javascript:;" data-dismiss="modal" onclick="myFunction('3rd')">I belong to a religious family background where everything is done according to Islamic principles and practices. I also ardently follow Islamic way of life. I am well-educated and sensible person. I like spending time with my family and friends. I enjoy life and the blessings of Allah. I believe in giving due space and rights to the partner.</a>

	<br><br>
	<a id="4rthp" href="javascript:;" data-dismiss="modal" onclick="myFunction('4rthp')">I am an open-mined, smart and cultured person. I completed my graduation from. I am very outgoing and have a modern mind set but Islamic values are kept in consideration. I enjoy humor, like travelling, reading, music etc. I am a homely and warm person full of life.</a>
	<br><br>
	<a id="fithp" href="javascript:;" data-dismiss="modal" onclick="myFunction('fithp')">I am a simple and God fearing person belonging to a middle class family. I am trustworthy and kind hearted who believe in the motto, ‘Live and Let Live’. I am doing a job in corporate industry and have a handsome salary which means I can easily afford a good living. I am an optimistic and fun loving so expect to have plenty of fun and enjoyment with me.</a>
	<br><br>
	<a id="sixp" href="javascript:;" data-dismiss="modal" onclick="myFunction('sixp')">I am self-motivated, ambitious and hard-working person who believe in achieving the goals in life through own hard-work and dedication. I know how to balance my personal and professional life. I am confident about starting a family and completion of my deen as a Muslim. I like arranging family get together, attending parties, reading and watching movies.</a>
	<br><br>
	<a id="7p" href="javascript:;" data-dismiss="modal" onclick="myFunction('7p')">I am warm and caring person who have a very close bond with the family and friends around. I am very good at keeping secrets that is why everyone trust me and confide with me for their secrets. I like to solve problems of people around me which gives me satisfaction and happiness. I have a good job with a decent salary to support my family. I like singing, reading, travelling and cooking.</a>

	<br><br>
	<a id="8p" href="javascript:;" data-dismiss="modal" onclick="myFunction('8p')">I am a clever, intelligent and sharp witted person who is good at judging people. I belong to a religious yet modern Muslim family who are completely aware about girl’s right to marriage. I have completed my studies from a well-known educational institute and want to pursue my professional career. I am currently doing a job at an organization and I look forward to continue it after my marriage. I like to cook, read and do gardening in my spare time. I also enjoy spending time with my friends and family.</a>

	<br><br>
	<a id="9p" href="javascript:;" data-dismiss="modal" onclick="myFunction('9p')">I am an accomplished and well-educated girl who knows how to keep the balance between home and professional life. I am loving, caring and outgoing person. My family has given me strong ethical and moral values which have made me strong and religiously firm in my beliefs. I believe that I am going to be a compassionate and inspiring life partner. My hobbies are enjoying with friends, watching movies, reading books etc.</a>
	@else
	<a id="f1p" href="javascript:;" data-dismiss="modal" onclick="myFunction('f1p')">I am a girl who is honest, caring and loving. I have completed my studies but preferred to stay at home to learn household skills and provide comfort to my family. My family is a source of courage and inspiration to me. It has given me strong family and religious values and ethics. I firmly believe in following the righteous path Allah has shown us. I am looking forward to start my family with some family oriented and religious person. I love cooking, gardening, sewing and other household stuff.</a>
	<br><br>
	<a id="f2p" href="javascript:;" data-dismiss="modal" onclick="myFunction('f2p')">I am an easy going and caring person who do not lose hope with the downs in one’s life. I belong to an upper-middle class Muslim family. It is a source of strength and confidence for me. I have pursued my higher education and look forward to do a respectable job after completion of my studies. I am a spiritual person and have an inclination towards learning more about Quran and Sunnah. I like participating in intellectual and religious discussions.</a>
	<br><br>
	<a id="f3p" href="javascript:;" data-dismiss="modal" onclick="myFunction('f3p')">I have a modern outlook on life but I believe in traditional values such as respect for parents and helping others in need. I am willing to change my opinions if you can convince me and you should be open-minded about your opinions as well. I travel occasionally and I am hoping to find someone who will be available to spend time with me. I prefer a teeto taler. Smoking is also a strict no-no. </a>
	<br><br>
	<a id="f4p" href="javascript:;" data-dismiss="modal" onclick="myFunction('f4p')">My job has made me a patient man and improved my negotiation skills! My job also keeps me on my toes, as I am always trying to learn new skills to keep pace with the changing technology landscape. I especially value humour, ability to laugh at yourself, being able to communicate, respect for culture, staying healthy, and the freedom to think out of the box.</a>
	@endif
</div>

<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>



<form method="post" action="{{ url('register-user') }}">


<input type="hidden" name="email" value="{{ $email }}">

<div class="modal wow fadeInDown" id="myModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="false">
<div class="modal-dialog modal-lg" style="height: 700px; box-shadow: 0 4px 8px 0 rgba(0,0,0, 0.5), 0 6px 20px 0 rgba(0,0, 0, 0.5;);">
<div class="modal-content">

<!-- Modal Header -->
<div class="modal-header" style="color:#ffffff; height:75px; background-color:#e6e6e6; border-bottom-color:#000000; ">
<div class="container">
<div class="row">
<div class="col-sm-4">
{{-- <img width="100%" src="{{ $user_assets }}/KH-logo-blog-logo.png" style="width: 177px; height: 57px;"> --}}
</div>
</div>
</div>
</div>

<!-- Modal body -->
<div class="modal-body" style="background-color:#e6e6e6; ">
<div class="container">

<div class="row">
@if($gender=='Male') @foreach($mimage as $row)
<div class="col-md-2">
<label for="card_{{$row->image_id}}" class="method card">
<div class="card-logos">
<img style="width: 100%" src="{{ $user_assets }}/profile_image/{{ $row->image_name }}">

</div>

<div class="radio-input">
<input id="card_{{$row->image_id}}" value="{{$row->image_id}}" type="radio" name="profile_image">
Select
</div>
</label>
</div>
@endforeach @else @foreach($fimage as $row)
<div class="col-md-3">
<label for="card_{{$row->image_id}}" class="method card">
<div class="card-logos">
<img style="width: 100%" src="{{ $user_assets }}/profile_image/{{ $row->image_name }}">

</div>

<div class="radio-input">
<input id="card_{{$row->image_id}}" value="{{$row->image_id}}" type="radio" name="profile_image">
Select
</div>
</label>
</div>
@endforeach @endif

</div>





</div>

<div class="modal-footer" style="border-top-color:#ED6C05;">
<button type="button" class="btn btn-success" data-dismiss="modal" style="background-color:#662e90;border-color:#662e90;">Submit</button>
</div>

</div>
{{-- </div> --}}

<!-- Modal footer -->
<div class="modal-footer" style="border-top-color:#000000;text-align:center;">
<div class="col-sm-12">
<h5 style="font-size:12px">Copyright &copy; 2018.All rights reserved.</h5>
</div>
</div>

</div>
</div>
</div>


<div class="form_area">


<!-- ***************************************************************************************** -->



<ul id="advanceinfo">

<li class="row" class="listtopmarg">
<div class="col-0">
<img src="{{ $user_assets }}/icons/basic-info.png">
</div>
<div class="col-xs-10 main">
<p class="sechead">Profile Description</p>
</div>
</li>

<hr class="lineinhead">

<li class="row" class="listtopmarg">
<div class="col-12">
Explain more about your personality, family and educational background, profession and hobbies
</div>
</li>
<br>
<li class="row" class="listtopmarg">
<div class="col-xl-9 col-lg-9 col-sm-9 col-xs-6">
<textarea name="description" data-toggle="tooltip" data-placement="top" title="Kindly provide more details about your personality, family, education, hobbies, profession and anything else which gives better overview of your life." placeholder="Kindly provide more details about your personality, family, education, hobbies, profession and anything else which gives better overview of your life." id="myTextarea" cols="20" class="prfdesctxt">{{ old('description') }}</textarea>
</div>
<div class="col-xl-3 col-lg-3 col-sm-3 col-xs-6">
	{{-- <button type="button" >Try it</button> --}}
	
<img src="{{ $user_assets }}/icons/arrow.png" alt=""><br><span class='help-me-write-this'><a href="javascript:;" data-toggle="modal" data-target="#help">Help me Write this</a></span>
<script type="text/javascript">
	function myFunction(id)
	{
		var x = $('#'+id).html();

        // document.getElementById("demo").innerHTML = x;
        $('#myTextarea').html(x);
	}
</script>
</div>
</li>

<!-- **************************************************** -->

<li class="row" class="listtopmarg">
<div class="col-0">
<img src="{{ $user_assets }}/icons/religion.png">
</div>
<div class="col-xs-10 main">
<p class="sechead">Family Details</p>
</div>
</li>

<hr class="lineinhead">

<li class="row" class="listtopmarg">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for=""> Family Value: <span class="imporatant">*</span></label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">
<!-- <span class="colons">:</span> -->
<select name="family_value" id="" class="allselects">
@if(old('family_value'))
	
	<option value="{{ old('family_value') }}">{{ old('family_value') }}</option>
	@else
<option value="">Please select..</option>
	@endif
<option value="Orthodox">Orthodox</option>
<option value="Liberal">Liberal</option>
<option value="Moderate">Moderate</option>
<option value="Traditional">Traditional</option>
<option value="Secular">Secular</option>
<option value="Religious">Religious</option>

</select>
<span  class='error' style="color:red; font-size: 10px;">{{ $errors->first('family_value') }}</span>
</div>
</li>
<div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for=""> Family Type: <span class="imporatant">*</span></label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">
<!-- <span class="colons">:</span> -->
<select name="family_type" id="" class="allselects">
@if(old('family_type'))
	
	<option value="{{ old('family_type') }}">{{ old('family_type') }}</option>
	@else
<option value="">Please select..</option>
	@endif
<option value="Nuclear Family">Nuclear Family</option>
<option value="joint Family">Joint Family</option>

</select>
<span  class='error' style="color:red; font-size: 10px;">{{ $errors->first('family_type') }}</span>
</div>
</li>
<div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for="">Relocate?<span class="imporatant">*</span></label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">
<!-- <span class="colons">:</span> {{-- -->
<div class="radiyn">
<input type="radio" name="relocate" value="Yes"> Yes &nbsp <input type="radio" name="relocate" value="No"> Maybe &nbsp <input type="radio" name="relocate" value="No"> Never
</div> --}}


<select name="loking_relocate" id="" class="allselects">\
@if(old('loking_relocate'))
	
	<option value="{{ old('loking_relocate') }}">{{ old('loking_relocate') }}</option>
	@else
<option value="">Please select..</option>
	@endif
<option value="Any">Any</option>
<option value="Willing to relocate to another country">Willing to relocate to another country</option>\
<option value="Willing to relocate within my country">Willing to relocate within my country</option>
<option value="Not sure about relocating">Not sure about relocating</option>
<option value="Not Willing to relocate">Not Willing to relocate</option>
</select>
<span  class='error' style="color:red; font-size: 10px;">{{ $errors->first('loking_relocate') }}</span>
</div>
</li>
<div class="btpad"></div>
<li class="row" class="listtopmarg">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for=""> Financial Status <span class="imporatant">*</span></label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">
<!-- <span class="colons">:</span> -->
<select name="finacial_status" id="" class="allselects">
@if(old('finacial_status'))
	
	<option value="{{ old('finacial_status') }}">{{ old('finacial_status') }}</option>
	@else
<option value="">Please select..</option>
	@endif
<option value="Rich">Rich</option>
<option value="Upper Middle Class">Upper Middle Class</option>
<option value="Middle Class">Middle Class</option>\
<option value="Lower Upper Middle Class">Lower Upper Middle Class</option>
<option value="Do not want to tell at this time">Do not want to tell at this time</option>
</select>
<span  class='error' style="color:red; font-size: 10px;">{{ $errors->first('finacial_status') }}</span>
</div>
</li>
<div class="btpad"></div>

<li class="row" class="listtopmarg" id="test_assets">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for="">Asset: <span class="imporatant">*</span></label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">
<!-- <span class="colons">:</span> -->
<select name="assets" id="" onchange="assets_change(this)" class="allselects">
@if(old('assets'))
	
	<option value="{{ old('assets') }}">{{ old('assets') }}</option>
	@else
<option value="">Please select..</option>
	@endif
<option value="Home">Home</option>
<option value="Plot">Plot</option>
<option value="Vehicle">Vehicle</option>
<option value="Nothing">Nothing</option>
<option value="other">Other</option>
</select>
<span  class='error' style="color:red; font-size: 10px;">{{ $errors->first('assets') }}</span>
</div>
</li>
<div class="btpad"></div>

<li class="row" class="listtopmarg" id="other_assets" style="display: none">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for="">Other Asset</label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">
<!-- <span class="colons">:</span> -->
<input type="text" value="{{ old('other_assets') }}" name="other_assets" placeholder="please specify other Asset" class="allselects">

</div>
</li>
<div class="btpad"></div>


<li class="row" class="listtopmarg">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for="">Father's Details:</label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">
<!-- <span class="colons">:</span> {{-- -->
<div class="parntdet"> --}}
<input type="radio" @if(old('father_detail')=='Alive') checked="" @endif name="father_detail" value="Alive"> Alive &nbsp <input type="radio" @if(old('father_detail')=='Died') checked="" @endif name="father_detail" value="Died"> Died &nbsp Occupation <input type="text" data-toggle="tooltip" data-placement="top" title="Enter father details" name="father_occupation" value="{{ old('father_occupation') }}" class="allinputs"> {{--
</div> --}}
</div>
</li>
<div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for="">Mother's Details</label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">
<!-- <span class="colons">:</span> -->
<div class="parntdet">
<input type="radio" @if(old('mother_detail')=='Alive') checked="" @endif name="mother_detail" value="Alive"> Alive &nbsp <input type="radio" name="mother_detail" @if(old('mother_detail')=='Alive') checked="" @endif value="Died"> Died &nbsp Occupation <input value="{{ old('mother_occupation') }}" type="text" data-toggle="tooltip" data-placement="top" title="Enter monther details" name="mother_occupation" class="allinputs father-occupation">
</div>
</div>
</li>
<div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for="">Brothers Details:</label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">
<!-- <span class="colons">:</span> -->
<div class="childdet">
Elder <select name="elder_brother" id="" class="smallselect">
	@if(old('elder_brother'))
	
	<option value="{{ old('elder_brother') }}">{{ old('elder_brother') }}</option>
	
	@endif
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="above">above</option>
</select> &nbsp Younger <select name="younger_brother" id="" class="smallselect">
	@if(old('younger_brother'))
	
	<option value="{{ old('younger_brother') }}">{{ old('younger_brother') }}</option>
	
	@endif
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="above">above</option>
</select>

</div>
</div>
</li>
<div class="btpad"></div>
<li class="row" class="listtopmarg">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for=""> Married:</label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">
<!-- <span class="colons">:</span> -->
<select name="brother_married" id="" class="allselects smallselect">
	@if(old('brother_married'))
	
	<option value="{{ old('brother_married') }}">{{ old('brother_married') }}</option>
	
	@endif
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="above">above</option>
</select>
</div>
</li>
<div class="btpad"></div>
<li class="row" class="listtopmarg">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for=""> Un Married:</label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">
<!-- <span class="colons">:</span> -->
<select name="brother_unmarried" id="" class="allselects smallselect">
	@if(old('brother_unmarried'))
	
	<option value="{{ old('brother_married') }}">{{ old('brother_unmarried') }}</option>
	
	@endif
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="above">above</option>
</select>
</div>
</li>
<div class="btpad"></div>
<li class="row" class="listtopmarg">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for="">Sisters Details:</label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">
<!-- <span class="colons">:</span> -->
<div class="childdet">
Elder <select name="elder_sister" id="" class="smallselect">
	@if(old('elder_sister'))
	
	<option value="{{ old('elder_sister') }}">{{ old('elder_sister') }}</option>
	
	@endif
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="above">above</option>
</select> &nbsp Younger <select name="younger_sister" id="" class="smallselect">
	@if(old('younger_sister'))
	
	<option value="{{ old('younger_sister') }}">{{ old('younger_sister') }}</option>
	
	@endif
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="above">above</option>
</select>
</div>
</div>
</li>
<div class="btpad"></div>
<li class="row" class="listtopmarg">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for=""> Married:</label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">
<!-- <span class="colons">:</span> -->
<select name="sister_married" id="" class="allselects smallselect">
	@if(old('sister_married'))
	
	<option value="{{ old('sister_married') }}">{{ old('sister_married') }}</option>
	
	@endif
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="above">above</option>
</select>
</div>
</li>
<div class="btpad"></div>
<li class="row" class="listtopmarg">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for=""> Un Married:</label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">
<!-- <span class="colons">:</span> -->
<select name="sister_unmarried" id="" class="allselects smallselect">
	@if(old('sister_unmarried'))
	
	<option value="{{ old('sister_unmarried') }}">{{ old('sister_unmarried') }}</option>
	
	@endif
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="above">above</option>
</select>
</div>
</li>
<div class="btpad"></div>
<li class="row" class="listtopmarg">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for=""> Family Details: <span class="imporatant"></span></label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">
	<span  class='error' style="color:red; font-size: 10px;">{{ $errors->first('family_detail') }}</span>
<!-- <span class="colons">:</span> -->
<textarea name="family_detail" data-toggle="tooltip" data-placement="top" title="Enter family details" id="" class="famdet">{{ old('family_detail') }}</textarea>


</div>

</li>
<div class="btpad"></div>
<!-- **************************************************** -->

<li class="row" class="listtopmarg">
<div class="col-0">
<img src="{{ $user_assets }}/icons/religion.png">
</div>
<div class="col-xs-10 main">
<p class="partpref"><b>Partner Preference</b></p>
</div>
</li>

<hr class="lineinhead">

<li class="row" class="listtopmarg">
<div class="well" style="width:95%;background-color:#F2F2F2;box-shadow:none;border:1px solid #E6E6E6">
<div class="col-12">
<label for="" style="padding-top:5px;font-weight:bold;">Basic Preferences</label>
</div>
</div>

</li>
<div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for=""> Age Preference: <span class="imporatant">*</span></label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">
<!-- <span class="colons">:</span> -->
<select name="loking_age_from" class="midlinput">
	@if(old('loking_age_from'))
	
	<option value="{{ old('sister_unmarried') }}">{{ old('loking_age_from') }}</option>
	@else
	<option value="">--Select--</option>
	@endif
@for($i =  date('y');  $i <= date('y')+82 ; $i++)
<option value="{{ $i }}" >{{ $i }}</option>
@endfor 
</select> to
<select name="loking_age_to" class="midlinput">
	@if(old('loking_age_to'))
	
	<option value="{{ old('sister_unmarried') }}">{{ old('loking_age_to') }}</option>
	@else
	<option value="">--Select--</option>
	@endif
@for($i = date('y')+82; $i >= date('y'); $i--)
<option value="{{ $i }}" >{{ $i }}</option>
@endfor 
</select> {{-- <input type="text"> --}}
<span  class='error' style="color:red; font-size: 10px;">{{ $errors->first('loking_age_from') }}</span>

<span  class='error' style="color:red; font-size: 10px;">{{ $errors->first('loking_age_to') }}</span>
</div>
</li>
<div class="btpad"></div>
<li class="row" class="listtopmarg">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for=""> Marital Status: <span class="imporatant">*</span></label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">
<!-- <span class="colons">:</span> -->
<div class="radiyn">
<input type="hidden" name="martial" value="martial_status">
<div class="checkbox-container">
	<input type="checkbox" @if(old('loking_martial_status')=='Unmaried') checked="" @endif name="loking_martial_status[]" value="Unmaried"> Unmaried &nbsp
</div>
<div class="checkbox-container">
	<input @if(old('loking_martial_status')=='Widow/Widower') checked="" @endif type="checkbox" name="loking_martial_status[]" value="Widow/Widower"> Widow/Widower &nbsp
</div>
<div class="checkbox-container">
	<input type="checkbox" @if(old('loking_martial_status')=='Divorcee') checked="" @endif name="loking_martial_status[]"
	value="Divorcee"> Divorcee &nbsp
</div>
<div class="checkbox-container">
	<input @if(old('loking_martial_status')=='Seprated') checked="" @endif type="checkbox" name="loking_martial_status[]" value="Seprated"> Seprated
</div>
</div>
</div>
</li>
<div class="btpad"></div>
<li class="row" class="listtopmarg">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for="">Eating Habits:</label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">
<!-- <span class="colons">:</span> -->
<div class="radiyn">
<input type="hidden" name="eating_type" value="eating type">
<input type="checkbox" @if(old('loking_eating_habits')=='Dose not matter') checked="" @endif name="loking_eating_habits[]" value="Dose not"> Does not matter &nbsp
<div class="checkbox-container">
	<input @if(old('loking_eating_habits')=='Veg') checked="" @endif type="checkbox" name="loking_eating_habits[]" value="Veg"> Veg &nbsp
</div>
<div class="checkbox-container">
	<input @if(old('loking_eating_habits')=='Occasionally Non-veg') checked="" @endif type="checkbox" name="loking_eating_habits[]" value="Occasionally Non-veg"> Occasionally Non-veg &nbsp
</div>
<div class="checkbox-container">
	<input type="checkbox" name="loking_eating_habits[]" value="Eggetarian"> Eggetarian
</div>
</div>
</div>
</li>
<div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for=""> Mother Tongue: <span class="imporatant">*</span></label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">
<!-- <span class="colons">:</span> -->
<select name="loking_language" id="" class="allselects">
@if(old('loking_language'))
	
	<option value="{{ old('loking_language') }}">{{ old('loking_language') }}</option>
	@else
	<option value="">--Select--</option>
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
<span  class='error' style="color:red; font-size: 10px;">{{ $errors->first('loking_language') }}</span>
</div>
</li>
<div class="btpad"></div>
<li class="row" class="listtopmarg">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for=""> Other language: <span class="imporatant"></span></label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">
{{-- chang --}}
<div class="input-group">
<input type="text" readonly="" value="Partner other language" name="loking_other_lang" class="allselects">
<div class="input-group-append">
<a href="javascript:;" id="loking_other_language">
<span class="fa fa-angle-down arrows" style="color: #8E8E8F; color: #8E8E8F;" id="loking_do_other"></span>
<span class="fa fa-angle-up" id="loking_up_other" style="display:none;padding-top:6px;margin-left:-20px;z-index: 1;
position: absolute;color: #8E8E8F;"></span>

</a>
</div>
</div>
<div id="loking_other_languages" style="display:none;">
<div class="row" style="padding-top:5px;padding-bottom:10px;">
<div class="col-6">
<a href="javascript:;" onclick="loking_lan_check()">Select All</a>
</div>

<div class="col-6">
<a href="javascript:;" onclick="loking_lan_uncheck()">Clear All</a>
</div>
</div>

<div class="row">
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Urdu"> Urdu <br> <input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Punjabi"> Punjabi <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Pashto"> Pashto <br>
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Sindhi"> Sindhi <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Saraiki"> Saraiki <br> <input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Balochi"> Balochi <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Hindko"> Hindko <br><input type="checkbox" name="loking_other_language[]" class="loking_lan" value="English"> English <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Malayalam"> Malayalam <br>
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Aka"> Aka <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Angika"> Angika <br>
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Arabic"> Arabic <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Arunachali"> Arunachali <br>
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Assamese"> Assamese <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Awadhi"> Awadhi <br>
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Badaga"> Badaga <br>
</div>


<div class="col-5">
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Bengali"> Bengali <br>
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Bhojpuri"> Bhojpuri <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Bihari"> Bihari <br>
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Brij"> Brij <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Chatisgarhi"> Chatisgarhi <br>
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Coorgi"> Coorgi <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Dogri"> Dogri <br>

<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="French"> French <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Garhwali"> Garhwali <br>
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Garo"> Garo <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Gujarati"> Gujarati <br>
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Haryanvi"> Haryanvi <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Himachali/Pahari"> Himachali/Pahari <br>
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Hindi"> Hindi <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Kannada"> Kannada <br>
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Kashmiri"> Kashmiri <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Khandesi"> Khandesi <br>
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Khasi"> Khasi <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Konkani"> Konkani <br>
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Koshali"> Koshali <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Kumaoni"> Kumaoni <br>
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Kutchi"> Kutchi <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Ladacki"> Ladacki <br>
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Lepcha"> Lepcha <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Magahi"> Magahi <br>
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Maithili"> Maithili <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Malay"> Malay <br>
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Manipuri"> Manipuri <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Marathi"> Marathi <br>
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Marwari"> Marwari <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Miji"> Miji <br>
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Miza"> Miza <br>
</div>





<div class="col-5">
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Monpa"> Monpa <br>
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Nepali"> Nepali <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Nicobarese"> Nicobarese <br>
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Oriya"> Oriya <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Persian"> Persian <br>

<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Rajasthani"> Rajasthani <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Russian"> Russian <br>
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Sanskrit"> Sanskrit <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Santhali"> Santhali <br>

<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Sinhala"> Sinhala <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Sourashtra"> Sourashtra <br>
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Spanish"> Spanish <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Tamil"> Tamil <br>
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Telugu">Telugu <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Tripuri"> Tripuri <br>
<input type="checkbox" name="loking_other_language[]" class="loking_lan" value="Tulu"> Tulu <br>
</div>

</div>
</div>
</div>
</li>
<div class="btpad"></div>
{{-- <li class="row" class="listtopmarg">
<div class="well" style="width:95%;background-color:#F2F2F2;box-shadow:none;border:1px solid #E6E6E6">
<div class="col-12">
<label for="" style="padding-top:5px;font-weight:bold;">Apearance</label>
</div>
</div>

</li> --}}

<li class="row" class="listtopmarg">
<div class="col-0">
<img src="{{ $user_assets }}/icons/education.png">
</div>
<div class="col-xs-10 main">
<p class="sechead">Appearance </p>
</div>
</li>
<hr class="lineinhead">
<div class="btpad"></div>


<li class="row" class="listtopmarg">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for=""> Height Preference: </label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">

<!-- <span class="colons">:</span> -->
<select name="loking_height_from" class="midlinput">
@if(old('loking_height_from'))
	
	<option value="{{ old('loking_height_from') }}">{{ old('loking_height_from') }}</option>
	@else
	<option value="">--Select--</option>
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
</select> {{-- <input type="text" class="midlinput"> --}} to
<select name="loking_height_to" class="midlinput">
@if(old('loking_height_to'))
	
	<option value="{{ old('loking_height_to') }}">{{ old('loking_height_to') }}</option>
	@else
	<option value="">--Select--</option>
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
</select> {{-- <input type="text" class="midlinput"> --}}
</div>
</li>
<div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for=""> Weight Preference: </label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">

<!-- <span class="colons">:</span> -->
<select id="" name="loking_weight_form" class="midlinput">
@if(old('loking_weight_form'))
	
	<option value="{{ old('loking_weight_form') }}">{{ old('loking_weight_form') }}</option>
	@else
	<option value="">--Select--</option>
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
</select> {{-- <input type="text" class="midlinput"> --}} to
<select id="" name="loking_weight_to" class="midlinput">
@if(old('loking_weight_to'))
	
	<option value="{{ old('loking_weight_to') }}">{{ old('loking_weight_to') }}</option>
	@else
	<option value="">--Select--</option>
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
</select> {{-- <input type="text" class="midlinput"> --}}
</div>
</li>
<div class="btpad"></div>


@if($gender=='Female')
<li class="row" class="listtopmarg">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for="">Beard</label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">
<!-- <span class="colons">:</span> -->
<select name="loking_bread" id="" class="allselects">
@if(old('loking_bread'))
	
	<option value="{{ old('loking_bread') }}">{{ old('loking_bread') }}</option>
	@else
	<option value="">--Select--</option>
	@endif
<option value="Clean Shave">Clean Shave</option>
<option value="Beard">Beard</option>
<option value="Prefered not to say">prefered not to say</option>
</select>
</div>
</li>
<div class="btpad"></div>
@endif


<li class="row" class="listtopmarg">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for=""> Observes Hijab: </label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">

<div class="input-group">
 <input type="text" readonly="" value="Observes Hijab" name="observes_hijab" class="allselects">
<div class="input-group-append">
<a href="javascript:;" id="obshij">
<span class="fa fa-angle-down arrows" style="color: #8E8E8F;" id="downobshij"></span>
<span class="fa fa-angle-up" id="upobshij" style="display:none;padding-top:6px;margin-left:-20px;z-index: 1;
position: absolute;color: #8E8E8F;"></span>
</a>
</div>
</div>

<div id="obshijpro" style="display:none;">
<div class="row" style="padding-top:5px;padding-bottom:10px;">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<a href="javascript:;" onclick="hijab_check()">Select All</a>
</div>
<div class="col-6">
<a href="javascript:;" onclick="hijab_uncheck()">Clear All</a>
</div>
</div>


<div class="row">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<input type="checkbox" name="hijab_time[]" class="hijab_select" value="Always"> Always<br>
<input type="checkbox" name="hijab_time[]" class="hijab_select" value="Always with Niqab"> Always with Niqab<br>

</div>
<div class="col-6">
<input type="checkbox" name="hijab_time[]" class="hijab_select" value="Sometimes"> Sometimes<br>
<input type="checkbox" name="hijab_time[]" class="hijab_select" value="Never"> Never<br> {{ csrf_field() }}
</div>


</div>
</div>
</div>

</li>
<div class="btpad"></div>
<li class="row" class="listtopmarg">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for=""> Body Type: </label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">




<div class="input-group">
&nbsp &nbsp<input readonly="" type="text" value="Body Type" name="loking_body_type" class="allselects move-left">
<div class="input-group-append">
<a href="javascript:;" id="bodut">
<span class="fa fa-angle-down arrows" style="color: #8E8E8F;" id="downbdyty"></span>
<span class="fa fa-angle-up" id="upbdytyp" style="display:none;padding-top:6px;margin-left:-20px;z-index: 1;
position: absolute;color: #8E8E8F;"></span>
</a>
</div>
</div>

<div id="bodutpro" style="display:none;">
<div class="row" style="padding-top:5px;padding-bottom:10px;">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<a href="javascript:;" onclick="body_check()">Select All</a>
</div>
<div class="col-6">
<a href="javascript:;" onclick="body_uncheck()">Clear All</a>
</div>
</div>


<div class="row">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<input type="checkbox" name="loking_body[]" class="body_select" value="Slim Skinny"> Slim/Skinny<br>
<input type="checkbox" name="loking_body[]" class="body_select" value="Average"> Average<br>
<input type="checkbox" name="loking_body[]" class="body_select" value="Athletic"> Athletic<br>
</div>
<div class="col-6">
<input type="checkbox" name="loking_body[]" class="body_select" value="Muscular"> Muscular<br>
<input type="checkbox" name="loking_body[]" class="body_select" value="A few extra pounds"> A few extra pounds<br>
<input type="checkbox" name="loking_body[]" class="body_select" value="Heavyset"> Heavyset<br>

</div>


</div>
</div>
</div>

</li>
<div class="btpad"></div>
<li class="row" class="listtopmarg">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for=""> Complexion Preference: </label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">

<div class="input-group">
 &nbsp &nbsp<input readonly="" type="text" value="Complexion" name="complexion" class="allselects move-left">
<div class="input-group-append">
<a href="javascript:;" id="skin">
<span class="fa fa-angle-down arrows" style="color: #8E8E8F;" id="down_skin"></span>
<span class="fa fa-angle-up" id="up_skin" style="display:none;padding-top:6px;margin-left:-20px;z-index: 1;
position: absolute;color: #8E8E8F;"></span>
</a>
</div>
</div>

<div id="skin_color" style="display:none;">
<div class="row" style="padding-top:5px;padding-bottom:10px;">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<a href="javascript:;" onclick="skin_check()">Select All</a>
</div>
<div class="col-6">
<a href="javascript:;" onclick="skin_uncheck()">Clear All</a>
</div>
</div>


<div class="row">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<input type="checkbox" name="loking_skin_color[]" class="skin_select" value="Very Fair"> Very Fair<br>
<input type="checkbox" name="loking_skin_color[]" class="skin_select" value="Fair"> Fair<br>
</div>
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<input type="checkbox" name="loking_skin_color[]" class="skin_select" value="Wheatish">Wheatish<br>
<input type="checkbox" name="loking_skin_color[]" class="skin_select" value="Dark">Dark<br>
</div>


</div>
</div>
</div>

</li>
<div class="btpad"></div>
{{-- <li class="row" class="listtopmarg">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for="">Complexion Preference</label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">
<!-- <span class="colons">:</span> -->
<select name="loking_skin_color" id="" class="allselects">
<option value="Very Fair">Very Fair</option>
<option value="Fair">Fair</option>
<option value="Wheatish">Wheatish</option>
<option value="Wheatish Brown">Wheatish Brown</option>
<option value="Dark">Dark</option>
</select>
</div>
</li>
<div class="btpad"></div> --}}

<li class="row" class="listtopmarg">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for=""> Physical Status:</label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">
<!-- <span class="colons">:</span> -->
<select name="loking_physcial_status" onchange="other_status(this)" id="" class="allselects">
	@if(old('loking_physcial_status'))
	
	<option value="{{ old('loking_physcial_status') }}">{{ old('loking_physcial_status') }}</option>
	@else
	<option value="">--Select--</option>
	@endif
<option value="Normal Person">Normal Person</option>
<option value="Deaf/Dumb">Deaf/Dumb</option>
<option value="Blind">Blind</option>
<option value="Physically Challenged">Physically Challenged</option>
<option value="Mentally Challenged">Mentally Challenged</option>
<option value="With other Disability">With other Disability</option>
</select>
<input type="text" name="other_loking_physcial_status" placeholder="Specify other physical status" class="allselects" id="user_status" style="display: none">
</div>
</li>
<div class="btpad"></div>

<script type="text/javascript">
function other_status(sel)
{
var val=sel.value;
if(val=='With other Disability')
{

$('#user_status').show('slow');
}
else
{
$('#user_status').hide('slow'); 
}
}
</script>


{{-- <li class="row" class="listtopmarg">
<div class="well" style="width:95%;background-color:#F2F2F2;box-shadow:none;border:1px solid #E6E6E6">
<div class="col-12">
<label for="" style="padding-top:5px;font-weight:bold;">Professional Preferences</label>
</div>
</div>

</li> --}}


<li class="row" class="listtopmarg">
<div class="col-0">
<img src="{{ $user_assets }}/icons/education.png">
</div>
<div class="col-xs-10 main">
<p class="sechead">Professional Preferences</p>
</div>
</li>
<hr class="lineinhead">
<div class="btpad"></div>
<li class="row" class="listtopmarg">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for=""> Education: </label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">
<!-- <span class="colons">:</span> -->
<select name="loking_education" id="" class="allselects">
@if(old('loking_education'))
	
	<option value="{{ old('loking_education') }}">{{ old('loking_education') }}</option>
	@else
	<option value="">--Select--</option>
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
</div>
</li>
<div class="btpad"></div>

<li class="row" class="listtopmarg" id="loking_job">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for=""> Occupation:</label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">
<!-- <span class="colons">:</span> -->
<select name="loking_job" onchange="job_test(this)" class="allselects">
	@if(old('loking_job'))
	
	<option value="{{ old('loking_job') }}">{{ old('loking_job') }}</option>
	@else
	<option value="">--Select--</option>
	@endif
<option value="Softwarw Engineer">Software Engineer</option>
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
<option value="Civil Engineer">Civil Engineer </option>
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
<input type="text" name="loking_job_type" placeholder="please specify other Occupation" class="allselects" id="other_job" style="display: none">
</div>
</li>
<div class="btpad"></div>
{{--
<li class="row" class="listtopmarg" id="other_job" style="display: none">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for=""> Occupation</label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">
<!-- <span class="colons">:</span> -->
<input type="text" name="loking_job_type" placeholder="please specify other Occupation" class="allselects">

</div>
</li>
<div class="btpad"></div> --}}

<li class="row" class="listtopmarg">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for="">Employed in:</label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">
<!-- <span class="colons">:</span> -->
<input type="text" value="{{ old('employed_in') }}" name="employed_in" placeholder="employed in" class="allselects">

</div>
</li>
<div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for=""> Annual Income: </label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">
<!-- <span class="colons">:</span> -->
<select name="loking_a_income" id="" class="allselects midlinput income-select">
@if(old('loking_a_income'))
	
	<option value="{{ old('loking_a_income') }}">{{ old('loking_a_income') }}</option>
	@else
	<option value="">--Select--</option>
	@endif
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

<select name="loking_courncy" id="" class="midlinput">
@if(old('loking_courncy'))
	
	<option value="{{ old('loking_courncy') }}">{{ old('loking_courncy') }}</option>
	@else
	<option value="">--Select--</option>
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
<optgroup label=""></optgroup><option>-----------------------</option><optgroup label=""></optgroup>
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
</div>
</li>
<div class="btpad"></div>

{{-- 
<li class="row" class="listtopmarg">
<div class="well" style="width:95%;background-color:#F2F2F2;box-shadow:none;border:1px solid #E6E6E6">
<div class="col-12">
<label for="" style="padding-top:5px;font-weight:bold;">1st Location Preferences</label>
</div>
</div>

</li> --}}

<li class="row" class="listtopmarg">
<div class="col-0">
<img src="{{ $user_assets }}/icons/1st-location.png">
</div>
<div class="col-xs-10 main">
<p class="sechead">Location Preferences</p>
</div>
</li>
<hr class="lineinhead">
<div class="btpad"></div>
<li class="row" class="listtopmarg">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for=""> Country Living in:</label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">
<!-- <span class="colons">:</span> -->
<select id="country" onchange="country_change(this)" name="living_country_id" class="allselects">
<option selected="" value="">Select country 
</option>
@foreach ($country as $row)
<option value="{{ $row->country_id }}">
{{ $row->country_name }}
</option>
@endforeach
</select>
</div>
</li>
<div class="btpad"></div>

<li class="row living_scroll" id="sts" class="listtopmarg" style="display: none;">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for=""> State</label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">
<!-- <span class="colons">:</span> {{-- <select name="" id="" class="allselects"> --}} -->

{{--  <select selected="selected" id="living_state1" onchange="state_change2(this)"  name="living_state_id" class="allselects" > --}}
{{--  <option>Select</option> --}}
<span id="living_state"></span>
{{-- <input id="living_state" type="checkbox" value="Algeria" class="africa_select" name="living_state_id[]"><br> --}}
{{-- </select> --}}

</div>
</li>
<div class="btpad"></div>

<li class="row living_scroll" id="cties" class="listtopmarg" style="display: none;">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for=""> District/City</label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">
<!-- <span class="colons">:</span> -->
{{--  <select name="living_city_id" id="living_city" selected="selected" class="allselects">
<option>Select</option>
</select> --}}
<span id="living_city"></span>
</div>



</li>
<div class="btpad"></div>
<li class="row" class="listtopmarg">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for="">Relocate?<span class="imporatant">*</span></label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">
<!-- <span class="colons">:</span> -->
<select name="relocate" id="relocate" class="allselects">
@if(old('relocate'))
	
	<option value="{{ old('relocate') }}">{{ old('relocate') }}</option>
	@else
	<option value="">--Select--</option>
	@endif
<option value="Willing to relocate to another country">Willing to relocate to another country</option>\
<option value="Willing to relocate within my country">Willing to relocate within my country</option>
<option value="Not sure about relocating">Not sure about relocating</option>
<option value="Not Willing to relocate">Not Willing to relocate</option>
</select>
<span  class='error' style="color:red; font-size: 10px;">{{ $errors->first('relocate') }}</span>
</div>
</li>
<div class="btpad"></div>

<li class="row" class="listtopmarg" id="relocate_type" style="display: none">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for=""> Reason </label>
</div>  
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">
<!-- <span class="colons">:</span> -->
<input type="text" value="{{ old('relocate') }}" name="reason_relocate" placeholder="Enter Reason No Relocate" class="allselects">
</div>
</li>
<div class="btpad"></div>  {{--
<li class="row" class="listtopmarg">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for=""> Citizenship</label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">
<!-- <span class="colons">:</span> -->
<select name="" id="" class="allselects">
<option value="">Pakistan</option>
<option value="">India</option>
</select>
</div>
</li>
<div class="btpad"></div> --}}

{{-- 
<li class="row" class="listtopmarg">
<div class="well" style="width:95%;background-color:#F2F2F2;box-shadow:none;border:1px solid #E6E6E6">
<div class="col-12">
<label for="" style="padding-top:5px;font-weight:bold;">2nd Location Preference (optional)</label>
</div>
</div> --}}

</li>
<li class="row" class="listtopmarg">
<div class="col-0">
<img src="{{ $user_assets }}/icons/1st-location.png">
</div>
<div class="col-xs-10 main">
<p class="sechead">2nd Location Preferences</p>
</div>
</li>
<hr class="lineinhead">
<div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for=""> Africa:</label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">



<div class="input-group">
 &nbsp &nbsp<input readonly="" type="text" value="Africa" name="affrica" class="allselects move-left">
<div class="input-group-append">
<a href="javascript:;" id="affrica">
<span class="fa fa-angle-down arrows" style="color: #8E8E8F;" id="downafr"></span>
<span class="fa fa-angle-up" id="upafr" style="display:none;padding-top:6px;margin-left:-20px;z-index: 1;
position: absolute;color: #8E8E8F;"></span>

</a>
</div>
</div>

<div id="allaffrica" style="display:none;">
<div class="row" style="padding-top:5px;padding-bottom:10px;">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<a href="javascript:;" onclick="africa_check()">Select All </a>
</div>
<div class="col-6">
<a href="javascript:;" onclick="africka_uncheck()">Clear All</a>
</div>
</div>


<div class="row">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<input type="checkbox" value="Algeria" class="africa_select" name="africa_country[]"> Algeria <br>
<input type="checkbox" value="Angola" class="africa_select" name="africa_country[]"> Angola <br>
<input type="checkbox" value="Benin" class="africa_select" name="africa_country[]"> Benin <br>
<input type="checkbox" value="Botswana" class="africa_select" name="africa_country[]"> Botswana <br>
<input type="checkbox" value="Burkina Faso" class="africa_select" name="africa_country[]"> Burkina Faso <br>
<input type="checkbox" value="Burundi" class="africa_select" name="africa_country[]"> Burundi <br>
<input type="checkbox" value="Cameroon" class="africa_select" name="africa_country[]"> Cameroon <br>
<input type="checkbox" value="Cape Verde" class="africa_select" name="africa_country[]"> Cape Verde <br>
<input type="checkbox" value="Central African Rep" class="africa_select" name="africa_country[]"> Central African Rep <br>
<input type="checkbox" value="Chad" class="africa_select" name="africa_country[]"> Chad <br>
<input type="checkbox" value="Comoros" class="africa_select" name="africa_country[]"> Comoros <br>
<input type="checkbox" value="Congo, DR" class="africa_select" name="africa_country[]"> Congo, DR <br>
<input type="checkbox" value="Congo, Rep" class="africa_select" name="africa_country[]"> Congo, Rep. <br>
<input type="checkbox" value="Cote d'Ivoire" class="africa_select" name="africa_country[]"> Cote d'Ivoire <br>
<input type="checkbox" value="Djibouti" class="africa_select" name="africa_country[]"> Djibouti <br>
<input type="checkbox" value="South Africa" class="africa_select" name="africa_country[]"> South Africa <br>
<input type="checkbox" value="Sudan" class="africa_select" name="africa_country[]"> Sudan <br>
<input type="checkbox" value="Swaziland" class="africa_select" name="africa_country[]"> Swaziland <br>
<input type="checkbox" value="Zambia" class="africa_select" name="africa_country[]"> Zambia <br>
<input type="checkbox" value="Egypt" class="africa_select" name="africa_country[]"> Egypt <br>

</div>
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<input type="checkbox" class="africa_select" name="africa_country[]" value="Equatorial Guinea"> Equatorial Guinea <br>
<input type="checkbox" class="africa_select" name="africa_country[]" value="Eritrea"> Eritrea <br>
<input type="checkbox" class="africa_select" name="africa_country[]" value="Ethiopia"> Ethiopia <br>
<input type="checkbox" class="africa_select" name="africa_country[]" value="Gabon"> Gabon <br>
<input type="checkbox" class="africa_select" name="africa_country[]" value="Gambia"> Gambia <br>
<input type="checkbox" class="africa_select" name="africa_country[]" value="Ghana"> Ghana <br>
<input type="checkbox" class="africa_select" name="africa_country[]" value="Guinea"> Guinea <br>
<input type="checkbox" class="africa_select" name="africa_country[]" value="Guinea-Bissau"> Guinea-Bissau <br>
<input type="checkbox" class="africa_select" name="africa_country[]" value="Kenya"> Kenya <br>
<input type="checkbox" class="africa_select" name="africa_country[]" value="Lesotho"> Lesotho <br>
<input type="checkbox" class="africa_select" name="africa_country[]" value="Liberia"> Liberia <br>
<input type="checkbox" class="africa_select" name="africa_country[]" value="Libya"> Libya <br>
<input type="checkbox" class="africa_select" name="africa_country[]" value="Madagascar"> Madagascar <br>
<input type="checkbox" class="africa_select" name="africa_country[]" value="Malawi"> Malawi <br>
<input type="checkbox" class="africa_select" name="africa_country[]" value="Sierra Leone"> Sierra Leone <br>
<input type="checkbox" class="africa_select" name="africa_country[]" value="Somalia"> Somalia <br>
<input type="checkbox" class="africa_select" name="africa_country[]" value="Tunisia"> Tunisia <br>
<input type="checkbox" class="africa_select" name="africa_country[]" value="Uganda"> Uganda <br>
<input type="checkbox" class="africa_select" name="africa_country[]" value="Western Sahara"> Western Sahara <br>
<input type="checkbox" class="africa_select" name="africa_country[]" value="Mali"> Mali <br>
</div>
<div class="col-3">
<input type="checkbox" class="africa_select" name="africa_country[]" value="Mauritania"> Mauritania <br>
<input type="checkbox" class="africa_select" name="africa_country[]" value="Mauritius"> Mauritius <br>
<input type="checkbox" class="africa_select" name="africa_country[]" value="Mayotte"> Mayotte <br>
<input type="checkbox" class="africa_select" name="africa_country[]" value="Morocco"> Morocco <br>
<input type="checkbox" class="africa_select" name="africa_country[]" value="Mozambique"> Mozambique <br>
<input type="checkbox" class="africa_select" name="africa_country[]" value="Namibia"> Namibia <br>
<input type="checkbox" class="africa_select" name="africa_country[]" value="Niger"> Niger <br>
<input type="checkbox" class="africa_select" name="africa_country[]" value="Nigeria"> Nigeria <br>
<input type="checkbox" class="africa_select" name="africa_country[]" value="Reunion"> Reunion <br>
<input type="checkbox" class="africa_select" name="africa_country[]" value="Rwanda"> Rwanda <br>
<input type="checkbox" class="africa_select" name="africa_country[]" value="Saint Helena"> Saint Helena <br>
<input type="checkbox" class="africa_select" name="africa_country[]" value="Sao Tome and Principe"> Sao Tome and Principe <br>
<input type="checkbox" class="africa_select" name="africa_country[]" value="Senegal"> Senegal <br>
<input type="checkbox" class="africa_select" name="africa_country[]" value="Seychelles"> Seychelles <br>
<input type="checkbox" class="africa_select" name="africa_country[]" value="Sierra Leone"> Sierra Leone <br>
<input type="checkbox" class="africa_select" name="africa_country[]" value="Somalia"> Somalia <br>
<input type="checkbox" class="africa_select" name="africa_country[]" value="Tanzania"> Tanzania <br>
<input type="checkbox" class="africa_select" name="africa_country[]" value="Togo"> Togo <br>
<input type="checkbox" class="africa_select" name="africa_country[]" value="Zimbabwe"> Zimbabwe <br>
</div>

</div>
</div>
</div>

</li>
<div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for=""> Antarctica:</label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">

<div class="input-group">
 &nbsp &nbsp<input readonly="" type="text" value="Antarctica" name="antarctica" class="allselects move-left">
<div class="input-group-append">
<a href="javascript:;" id="antar">
<span class="fa fa-angle-down arrows" style="color: #8E8E8F;" id="downantar"></span>
<span class="fa fa-angle-up" id="upantar" style="display:none;padding-top:6px;margin-left:-20px;z-index: 1;
position: absolute;color: #8E8E8F;"></span>

</a>
</div>
</div>
<div id="Antarcticacity" style="display:none;">
<div class="row" style="padding-top:5px;padding-bottom:10px;">
<div class="col-6">
<a href="javascript:;" onclick="antarctica_check()">Select All</a>
</div>
<div class="col-6">
<a href="javascript:;" onclick="antarctica_uncheck()">Clear All</a>
</div>
</div>

<div class="row">
<div class="col-5">
<input type="checkbox" name="antarctica_country[]" class="antarctica_select" value="Bouvet Island"> Bouvet Island<br>
<input type="checkbox" name="antarctica_country[]" class="antarctica_select" value="French Southern Territ"> French Southern Territ. <br>

</div>
<div class="col-5">
<input type="checkbox" name="antarctica_country[]" class="antarctica_select" value="Heard Island"> Heard Island <br>
<input type="checkbox" name="antarctica_country[]" class="antarctica_select" value="South Georgia"> South Georgia <br>

</div>

</div>
</div>
</div>
</li>
<div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for=""> Asia:</label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">

<div class="input-group">
 &nbsp &nbsp<input readonly="" type="text" value="Asia" name="asia" class="allselects move-left">
<div class="input-group-append">
<a href="javascript:;" id="aisa">
<span class="fa fa-angle-down arrows" style="color: #8E8E8F;" id="downasia"></span>
<span class="fa fa-angle-up" id="upasia" style="display:none;padding-top:6px;margin-left:-20px;z-index: 1;
position: absolute;color: #8E8E8F;"></span>
</a>
</div>
</div>

<div id="aisacity" style="display:none;">
<div class="row" style="padding-top:5px;padding-bottom:10px;">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<a href="javascript:;" onclick="asia_check()">Select All</a>
</div>
<div class="col-6">
<a href="javascript:;" onclick="asia_uncheck()">Clear All</a>
</div>
</div>


<div class="row">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<input type="checkbox" name="asia_country[]" class="asia_select" value="Afghanistan"> Afghanistan <br>
<input type="checkbox" name="asia_country[]" class="asia_select" value="Armenia"> Armenia <br>
<input type="checkbox" name="asia_country[]" class="asia_select" value="Azerbaijan"> Azerbaijan <br>
<input type="checkbox" name="asia_country[]" class="asia_select" value="Bahrain"> Bahrain <br>
<input type="checkbox" name="asia_country[]" class="asia_select" value="Bangladesh"> Bangladesh <br>
<input type="checkbox" name="asia_country[]" class="asia_select" value="Bhutan"> Bhutan <br>
<input type="checkbox" name="asia_country[]" class="asia_select" value="British Ind"> British Ind. <br>
<input type="checkbox" name="asia_country[]" class="asia_select" value="Brunei Darussalam"> Brunei Darussalam <br>
<input type="checkbox" name="asia_country[]" class="asia_select" value="Cambodia"> Cambodia <br>
<input type="checkbox" name="asia_country[]" class="asia_select" value="China"> China <br>
<input type="checkbox" name="asia_country[]" class="asia_select" value="Christmas Island"> Christmas Island <br>
<input type="checkbox" name="asia_country[]" class="asia_select" value="Cocos"> Cocos <br>
<input type="checkbox" name="asia_country[]" class="asia_select" value="Cyprus"> Cyprus <br>
<input type="checkbox" name="asia_country[]" class="asia_select" value="Georgia"> Georgia <br>
<input type="checkbox" name="asia_country[]" class="asia_select" value="Hong Kong"> Hong Kong <br>
<input type="checkbox" name="asia_country[]" class="asia_select" value="India"> India <br>
<input type="checkbox" name="asia_country[]" class="asia_select" value="Indonesia"> Indonesia <br>
<input type="checkbox" name="asia_country[]" class="asia_select" value="Iran"> Iran <br>
<input type="checkbox" name="asia_country[]" class="asia_select" value="Iraq"> Iraq <br>
<input type="checkbox" name="asia_country[]" class="asia_select" value="Israel"> Israel <br>

</div>
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<input type="checkbox" name="asia_country[]" class="asia_select" value="Japan"> Japan <br>
<input type="checkbox" name="asia_country[]" class="asia_select" value="Kazakhstan"> Kazakhstan <br>
<input type="checkbox" name="asia_country[]" class="asia_select" value="Korea, DPR"> Korea, DPR <br>
<input type="checkbox" name="asia_country[]" class="asia_select" value="Korea, Rep. of"> Korea, Rep. of <br>
<input type="checkbox" name="asia_country[]" class="asia_select" value="Kuwait"> Kuwait <br>
<input type="checkbox" name="asia_country[]" class="asia_select" value="Kyrgyz Republic"> Kyrgyz Republic <br>
<input type="checkbox" name="asia_country[]" class="asia_select" value="Laos"> Laos <br>
<input type="checkbox" name="asia_country[]" class="asia_select" value="Lebanon"> Lebanon <br>
<input type="checkbox" name="asia_country[]" class="asia_select" value="Macao"> Macao <br>
<input type="checkbox" name="asia_country[]" class="asia_select" value="Malaysia"> Malaysia <br>
<input type="checkbox" name="asia_country[]" class="asia_select" value="Maldives"> Maldives <br>

<input type="checkbox" name="asia_country[]" class="asia_select" value="Myanmar"> Myanmar <br>
<input type="checkbox" name="asia_country[]" class="asia_select" value="Nepal"> Nepal <br>
<input type="checkbox" name="asia_country[]" class="asia_select" value="Oman"> Oman <br>
<input type="checkbox" name="asia_country[]" class="asia_select" value="Pakistan"> Pakistan <br>
<input type="checkbox" name="asia_country[]" class="asia_select" value="Palestine"> Palestine <br>
<input type="checkbox" name="asia_country[]" class="asia_select" value="Philippines"> Philippines <br>
<input type="checkbox" name="asia_country[]" class="asia_select" value="Qatar"> Qatar <br>
<input type="checkbox" name="asia_country[]" class="asia_select" value="Saudi Arabia"> Saudi Arabia <br>
</div>
<div class="col-3">
<input type="checkbox" name="asia_country[]" class="asia_select" value="Singapore"> Singapore <br>
<input type="checkbox" name="asia_country[]" class="asia_select" value="Sri Lanka"> Sri Lanka <br>
<input type="checkbox" name="asia_country[]" class="asia_select" value="Syria"> Syria <br>
<input type="checkbox" name="asia_country[]" class="asia_select" value="Taiwan"> Taiwan <br>
<input type="checkbox" name="asia_country[]" class="asia_select" value="Tajikistan"> Tajikistan <br>
<input type="checkbox" name="asia_country[]" class="asia_select" value="Thailand"> Thailand <br>
<input type="checkbox" name="asia_country[]" class="asia_select" value="Timor-Leste"> Timor-Leste <br>
<input type="checkbox" name="asia_country[]" class="asia_select" value="Turkey"> Turkey <br>
<input type="checkbox" name="asia_country[]" class="asia_select" value="Turkmenistan"> Turkmenistan <br>
<input type="checkbox" name="asia_country[]" class="asia_select" value="United Arab Emirates"> United Arab Emirates <br>
<input type="checkbox" name="asia_country[]" class="asia_select" value="Uzbekistan"> Uzbekistan <br>
<input type="checkbox" name="asia_country[]" class="asia_select" value="Vietnam"> Vietnam<br>
<input type="checkbox" name="asia_country[]" class="asia_select" value="Yemen"> Yemen <br>

</div>

</div>
</div>
</div>

</li>
<div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for=""> Europe:</label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">

<div class="input-group">
 &nbsp &nbsp<input readonly="" type="text" value="Europe" name="europe" class="allselects move-left">
<div class="input-group-append">
<a href="javascript:;" id="europ">
<span class="fa fa-angle-down arrows" style="color: #8E8E8F;" id="downeurop"></span>
<span class="fa fa-angle-up" id="upeurop" style="display:none;padding-top:6px;margin-left:-20px;z-index: 1;
position: absolute;color: #8E8E8F;"></span>
</a>
</div>
</div>

<div id="europcity" style="display:none;">
<div class="row" style="padding-top:5px;padding-bottom:10px;">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<a href="javascript:;" onclick="europ_check()">Select All</a>
</div>
<div class="col-6">
<a href="javascript:;" onclick="europ_uncheck()">Clear All</a>
</div>
</div>


<div class="row">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<input type="checkbox" name="europe_country[]" class="europ_select" value="Aland Islands"> Aland Islands <br>
<input type="checkbox" name="europe_country[]" class="europ_select" value="Albania"> Albania <br>
<input type="checkbox" name="europe_country[]" class="europ_select" value="Andorra"> Andorra <br>
<input type="checkbox" name="europe_country[]" class="europ_select" value="Austria"> Austria <br>
<input type="checkbox" name="europe_country[]" class="europ_select" value="Belarus"> Belarus <br>
<input type="checkbox" name="europe_country[]" class="europ_select" value="Belgium"> Belgium <br>
<input type="checkbox" name="europe_country[]" class="europ_select" value="Bosnia and Herzegovina"> Bosnia and Herzegovina <br>
<input type="checkbox" name="europe_country[]" class="europ_select" value="Bulgaria"> Bulgaria <br>
<input type="checkbox" name="europe_country[]" class="europ_select" value="Croatia"> Croatia <br>
<input type="checkbox" name="europe_country[]" class="europ_select" value="Czech Republic"> Czech Republic <br>
<input type="checkbox" name="europe_country[]" class="europ_select" value="Denmark"> Denmark <br>
<input type="checkbox" name="europe_country[]" class="europ_select" value="Estonia"> Estonia <br>
<input type="checkbox" name="europe_country[]" class="europ_select" value="Faroe Islands"> Faroe Islands <br>
<input type="checkbox" name="europe_country[]" class="europ_select" value="Finland"> Finland <br>
<input type="checkbox" name="europe_country[]" class="europ_select" value="France"> France <br>
<input type="checkbox" name="europe_country[]" class="europ_select" value="Germany"> Germany <br>
<input type="checkbox" name="europe_country[]" class="europ_select" value="Gibraltar"> Gibraltar <br>
<input type="checkbox" name="europe_country[]" class="europ_select" value="Greece"> Greece <br>
<input type="checkbox" name="europe_country[]" class="europ_select" value="Guernsey"> Guernsey <br>
<input type="checkbox" name="europe_country[]" class="europ_select" value="Hungary"> Hungary <br>

</div>
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<input type="checkbox" name="europe_country[]" class="europ_select" value="Iceland"> Iceland <br>
<input type="checkbox" name="europe_country[]" class="europ_select" value="Ireland"> Ireland <br>
<input type="checkbox" name="europe_country[]" class="europ_select" value="Isle of Man"> Isle of Man <br>
<input type="checkbox" name="europe_country[]" class="europ_select" value="Italy"> Italy <br>
<input type="checkbox" name="europe_country[]" class="europ_select" value="Jersey"> Jersey <br>
<input type="checkbox" name="europe_country[]" class="europ_select" value="Kosovo"> Kosovo <br>
<input type="checkbox" name="europe_country[]" class="europ_select" value="Latvia"> Latvia <br>
<input type="checkbox" name="europe_country[]" class="europ_select" value="Liechtenstein"> Liechtenstein <br>
<input type="checkbox" name="europe_country[]" class="europ_select" value="Lithuania"> Lithuania <br>
<input type="checkbox" name="europe_country[]" class="europ_select" value="Luxembourg"> Luxembourg <br>
<input type="checkbox" name="europe_country[]" class="europ_select" value="Macedonia"> Macedonia <br>
<input type="checkbox" name="europe_country[]" class="europ_select" value="Malta"> Malta <br>
<input type="checkbox" name="europe_country[]" class="europ_select" value="Monaco"> Monaco <br>
<input type="checkbox" name="europe_country[]" class="europ_select" value="Montenegro"> Montenegro <br>
<input type="checkbox" name="europe_country[]" class="europ_select" value="Netherlands"> Netherlands <br>
<input type="checkbox" name="europe_country[]" class="europ_select" value="Norway"> Norway <br>
<input type="checkbox" name="europe_country[]" class="europ_select" value="Poland"> Poland <br>
<input type="checkbox" name="europe_country[]" class="europ_select" value="Portugal"> Portugal <br>
<input type="checkbox" name="europe_country[]" class="europ_select" value="Romania"> Romania <br>
<input type="checkbox" name="europe_country[]" class="europ_select" value="Russian Federation">Russian Federation<br>
</div>
<div class="col-3">
<input type="checkbox" name="europe_country[]" class="europ_select" value="San Marino"> San Marino <br>
<input type="checkbox" name="europe_country[]" class="europ_select" value="Serbia"> Serbia <br>
<input type="checkbox" name="europe_country[]" class="europ_select" value="Slovakia"> Slovakia <br>
<input type="checkbox" name="europe_country[]" class="europ_select" value="Slovenia"> Slovenia <br>
<input type="checkbox" name="europe_country[]" class="europ_select" value="Spain"> Spain <br>
<input type="checkbox" name="europe_country[]" class="europ_select" value="Svalbard and Jan Mayen"> Svalbard and Jan Mayen Is <br>
<input type="checkbox" name="europe_country[]" class="europ_select" value="Sweden"> Sweden <br>

<input type="checkbox" name="europe_country[]" class="europ_select" value="Ukraine"> Ukraine <br>
<input type="checkbox" name="europe_country[]" class="europ_select" value="United Kingdom"> United Kingdom<br>
<input type="checkbox" name="europe_country[]" class="europ_select" value="Vatican City"> Vatican City <br>

</div>

</div>
</div>
</div>

</li>
<div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for=""> North America:</label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">

<div class="input-group">
 &nbsp &nbsp<input readonly="" type="text" value="North America" name="north_america" class="allselects move-left">
<div class="input-group-append">
<a href="javascript:;" id="namrica">
<span class="fa fa-angle-down arrows" style="color: #8E8E8F;" id="downnotamr"></span>
<span class="fa fa-angle-up" id="upnotamr" style="display:none;padding-top:6px;margin-left:-20px;z-index: 1;
position: absolute;color: #8E8E8F;"></span>
</a>
</div>
</div>

<div id="namricacity" style="display:none;">
<div class="row" style="padding-top:5px;padding-bottom:10px;">
<div class="col-6">
<a href="javascript:;" onclick="north_america_check()">Select All</a>
</div>
<div class="col-6">
<a href="javascript:;" onclick="north_america_uncheck()">Clear All</a>
</div>
</div>


<div class="row">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<input type="checkbox" name="north_america_country[]" class="north_select" value="Anguilla"> Anguilla <br>
<input type="checkbox" name="north_america_country[]" class="north_select" value="Antigua and Barbuda"> Antigua and Barbuda <br>
<input type="checkbox" name="north_america_country[]" class="north_select" value="Aruba"> Aruba <br>
<input type="checkbox" name="north_america_country[]" class="north_select" value="Bahamas"> Bahamas <br>
<input type="checkbox" name="north_america_country[]" class="north_select" value="Barbados"> Barbados <br>
<input type="checkbox" name="north_america_country[]" class="north_select" value="Belize"> Belize <br>
<input type="checkbox" name="north_america_country[]" class="north_select" value="Bermuda"> Bermuda <br>
<input type="checkbox" name="north_america_country[]" class="north_select" value="British Virgin Islands"> British Virgin Islands <br>
<input type="checkbox" name="north_america_country[]" class="north_select" value="Canada"> Canada <br>
<input type="checkbox" name="north_america_country[]" class="north_select" value="Cayman Islands"> Cayman Islands <br>
<input type="checkbox" name="north_america_country[]" class="north_select" value="Costa Rica"> Costa Rica <br>
<input type="checkbox" name="north_america_country[]" class="north_select" value="Cuba"> Cuba <br>
<input type="checkbox" name="north_america_country[]" class="north_select" value="Dominica"> Dominica <br>
<input type="checkbox" name="north_america_country[]" class="north_select" value="El Salvador"> El Salvador <br>
<input type="checkbox" name="north_america_country[]" class="north_select" value="Greenland"> Greenland <br>
<input type="checkbox" name="north_america_country[]" class="north_select" value="Grenada"> Grenada <br>
<input type="checkbox" name="north_america_country[]" class="north_select" value="Guadeloupe"> Guadeloupe <br>
<input type="checkbox" name="north_america_country[]" class="north_select" value="Guatemala"> Guatemala <br>
<input type="checkbox" name="north_america_country[]" class="north_select" value="Haiti"> Haiti <br>
<input type="checkbox" name="north_america_country[]" class="north_select" value="Honduras"> Honduras <br>

</div>
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<input type="checkbox" name="north_america_country[]" class="north_select" value="Jamaica"> Jamaica <br>
<input type="checkbox" name="north_america_country[]" class="north_select" value="Martinique"> Martinique <br>
<input type="checkbox" name="north_america_country[]" class="north_select" value="Mexico"> Mexico <br>
<input type="checkbox" name="north_america_country[]" class="north_select" value="Montserrat"> Montserrat <br>
<input type="checkbox" name="north_america_country[]" class="north_select" value="Netherlands"> Netherlands Antilles <br>
<input type="checkbox" name="north_america_country[]" class="north_select" value="Nicaragua"> Nicaragua <br>
<input type="checkbox" name="north_america_country[]" class="north_select" value="Panama"> Panama <br>
<input type="checkbox" name="north_america_country[]" class="north_select" value="Puerto Rico"> Puerto Rico <br>
<input type="checkbox" name="north_america_country[]" class="north_select" value="Saint"> Saint Barthelemy <br>
<input type="checkbox" name="north_america_country[]" class="north_select" value="Saint Kitts and Nevis"> Saint Kitts and Nevis <br>
<input type="checkbox" name="north_america_country[]" class="north_select" value="Saint Lucia"> Saint Lucia <br>
<input type="checkbox" name="north_america_country[]" class="north_select" value="Saint Martin"> Saint Martin <br>
<input type="checkbox" name="north_america_country[]" class="north_select" value="Saint Pierre and Miquelon"> Saint Pierre and Miquelon <br>
<input type="checkbox" name="north_america_country[]" class="north_select" value="St Vincent and Grenadines"> St Vincent and Grenadines <br>
<input type="checkbox" name="north_america_country[]" class="north_select" value="Trinidad and Tobago"> Trinidad and Tobago <br>

</div>
<div class="col-3">
<input type="checkbox" name="north_america_country[]" class="north_select" value="Turks and Caicos Is"> Turks and Caicos Is <br>
<input type="checkbox" name="north_america_country[]" class="north_select" value="US Virgin Islands"> US Virgin Islands <br>
<input type="checkbox" name="north_america_country[]" class="north_select" value="Portugal"> Portugal <br>
<input type="checkbox" name="north_america_country[]" class="north_select" value="Romania"> Romania <br>
<input type="checkbox" name="north_america_country[]" class="north_select" value="USA"> USA<br>

</div>

</div>
</div>
</div>

</li>
<div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for=""> Australasia:</label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">

<div class="input-group">
 &nbsp &nbsp<input readonly="" type="text" value="Australasia" name="australasia" class="allselects move-left">
<div class="input-group-append">
<a href="javascript:;" id="austrailia">
<span class="fa fa-angle-down arrows" style="color: #8E8E8F;" id="downaurt"></span>
<span class="fa fa-angle-up" id="upaust" style="display:none;padding-top:6px;margin-left:-20px;z-index: 1;
position: absolute;color: #8E8E8F;"></span>
</a>
</div>
</div>

<div id="austrailiacity" style="display:none;">
<div class="row" style="padding-top:5px;padding-bottom:10px;">
<div class="col-6">
<a href="javascript:;" onclick="australasia_check()">Select All</a>
</div>
<div class="col-6">
<a href="javascript:;" onclick="australasia_uncheck()">Clear All</a>
</div>
</div>


<div class="row">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<input type="checkbox" name="australasia_country[]" class="austra_select" value="American Samoa"> American Samoa <br>
<input type="checkbox" name="australasia_country[]" class="austra_select" value="Australia"> Australia <br>
<input type="checkbox" name="australasia_country[]" class="austra_select" value="Cook Islands"> Cook Islands <br>
<input type="checkbox" name="australasia_country[]" class="austra_select" value="Fiji"> Fiji <br>
<input type="checkbox" name="australasia_country[]" class="austra_select" value="French Polynesia"> French Polynesia <br>
<input type="checkbox" name="australasia_country[]" class="austra_select" value="Guam"> Guam <br>
<input type="checkbox" name="australasia_country[]" class="austra_select" value="Kiribati"> Kiribati <br>
<input type="checkbox" name="australasia_country[]" class="austra_select" value="Marshall Islands"> Marshall Islands <br>
<input type="checkbox" name="australasia_country[]" class="austra_select" value="Micronesia"> Micronesia <br>
<input type="checkbox" name="australasia_country[]" class="austra_select" value="Nauru"> Nauru <br>
<input type="checkbox" name="australasia_country[]" class="austra_select" value="New Caledonia"> New Caledonia <br>
<input type="checkbox" name="australasia_country[]" class="austra_select" value="New Zealand"> New Zealand <br>
<input type="checkbox" name="australasia_country[]" class="austra_select" value="Niue"> Niue <br>
<input type="checkbox" name="australasia_country[]" class="austra_select" value="Norfolk Island"> Norfolk Island <br>

</div>
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<input type="checkbox" name="australasia_country[]" class="austra_select" value="Northern Mariana"> Northern Mariana Is <br>
<input type="checkbox" name="australasia_country[]" class="austra_select" value="Palau"> Palau <br>
<input type="checkbox" name="australasia_country[]" class="austra_select" value="Papua New Guinea"> Papua New Guinea <br>
<input type="checkbox" name="australasia_country[]" class="austra_select" value="Pitcairn Islands"> Pitcairn Islands <br>
<input type="checkbox" name="australasia_country[]" class="austra_select" value="Samoa"> Samoa <br>
<input type="checkbox" name="australasia_country[]" class="austra_select" value="Solomon Islands"> Solomon Islands <br>
<input type="checkbox" name="australasia_country[]" class="austra_select" value="Tokelau"> Tokelau <br>
<input type="checkbox" name="australasia_country[]" class="austra_select" value="Tonga"> Tonga <br>
<input type="checkbox" name="australasia_country[]" class="austra_select" value="Tuvalu"> Tuvalu <br>
<input type="checkbox" name="australasia_country[]" class="austra_select" value="US Minor Outlying I">US Minor Outlying I<br>
<input type="checkbox" name="australasia_country[]" class="austra_select" value="Vanuatu"> Vanuatu <br>
<input type="checkbox" name="australasia_country[]" class="austra_select" value="Wallis and Futuna"> Wallis and Futuna<br>

</div>
<div class="col-3">
<input type="checkbox" name="australasia_country[]" class="austra_select" value="Turks and Caicos Is"> Turks and Caicos Is <br>
<input type="checkbox" name="australasia_country[]" class="austra_select" value="US Virgin Islands"> US Virgin Islands <br>
<input type="checkbox" name="australasia_country[]" class="austra_select" value="Portugal"> Portugal <br>
<input type="checkbox" name="australasia_country[]" class="austra_select" value="Romania"> Romania <br>
<input type="checkbox" name="australasia_country[]" class="austra_select" value="USA"> USA<br>

</div>

</div>
</div>
</div>

</li>
<div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for=""> South America:</label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">

<div class="input-group">
 &nbsp &nbsp<input readonly="" type="text" value="South America" name="south_america" class="allselects move-left">
<div class="input-group-append">
<a href="javascript:;" id="southafric">
<span class="fa fa-angle-down arrows" style="color: #8E8E8F;" id="downsouamr"></span>
<span class="fa fa-angle-up" id="upsouthamar" style="display:none;padding-top:6px;margin-left:-20px;z-index: 1;
position: absolute;color: #8E8E8F;"></span>
</a>
</div>
</div>

<div id="southafriccity" style="display:none;">
<div class="row" style="padding-top:5px;padding-bottom:10px;">
<div class="col-6">
<a href="javascript:;" onclick="south_america()">Select All</a>
</div>
<div class="col-6">
<a href="javascript:;" onclick="south_unamerica()">Clear All</a>
</div>
</div>


<div class="row">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<input type="checkbox" name="south_america_country[]" class="south_select" value="Argentina"> Argentina <br>
<input type="checkbox" name="south_america_country[]" class="south_select" value="Bolivia"> Bolivia <br>
<input type="checkbox" name="south_america_country[]" class="south_select" value="Brazil"> Brazil <br>
<input type="checkbox" name="south_america_country[]" class="south_select" value="Chile"> Chile <br>
<input type="checkbox" name="south_america_country[]" class="south_select" value="Colombia"> Colombia <br>
<input type="checkbox" name="south_america_country[]" class="south_select" value="Ecuador"> Ecuador <br>

</div>
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<input type="checkbox" name="south_america_country[]" class="south_select" value="Falkland Islands">Falkland Islands <br>
<input type="checkbox" name="south_america_country[]" class="south_select" value="French Guiana"> French Guiana <br>
<input type="checkbox" name="south_america_country[]" class="south_select" value="Guyana"> Guyana <br>
<input type="checkbox" name="south_america_country[]" class="south_select" value="Paraguay"> Paraguay <br>
<input type="checkbox" name="south_america_country[]" class="south_select" value="Peru"> Peru <br>
<input type="checkbox" name="south_america_country[]" class="south_select" value="Suriname"> Suriname <br>

</div>
<div class="col-3">
<input type="checkbox" name="south_america_country[]" class="south_select" value="Uruguay"> Uruguay <br>
<input type="checkbox" name="south_america_country[]" class="south_select" value="Venezuela"> Venezuela<br>

</div>

</div>
</div>
</div>

</li>
<div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for=""> Residency Status:</label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">

<div class="input-group">

 &nbsp &nbsp<input readonly="" type="text" value="Residency Status" name="loking_residency_status" class="allselects move-left">
<div class="input-group-append">
<a href="javascript:;" id="residance">
<span class="fa fa-angle-down arrows" style="color: #8E8E8F;" id="downressta"></span>
<span class="fa fa-angle-up" id="upressta" style="display:none;padding-top:6px;margin-left:-20px;z-index: 1;
position: absolute;color: #8E8E8F;"></span>
</a>
</div>
</div>

<div id="residancecity" style="display:none;">
<div class="row" style="padding-top:5px;padding-bottom:10px;">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<a href="javascript:;" onclick="residency_check()">Select All</a>
</div>
<div class="col-6">
<a href="javascript:;" onclick="resdency_unchek()">Clear All</a>
</div>
</div>


<div class="row">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<input type="checkbox" name="residency_name[]" class="resdency_select" value="Citizen"> Citizen <br>
<input type="checkbox" name="residency_name[]" class="resdency_select" value="Permanent Resident"> Permanent Resident <br>
<input type="checkbox" name="residency_name[]" class="resdency_select" value="Student Visa"> Student Visa <br>

</div>
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<input type="checkbox" name="residency_name[]" class="resdency_select" value="Temporary Visa"> Temporary Visa <br>
<input type="checkbox" name="residency_name[]" class="resdency_select" value="Work Permit"> Work Permit <br>
<input type="checkbox" name="residency_name[]" class="resdency_select" value="Other"> Other <br>


</div>


</div>
</div>
</div>

<div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for=""> Ethnic Origin: </label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">

<div class="input-group">
 &nbsp &nbsp<input readonly="" type="text" value="Ethnic Origin" name="loking_ethnic_origin" class="allselects move-left">
<div class="input-group-append">
<a href="javascript:;" id="ethnicorg">
<span class="fa fa-angle-down arrows" style="color: #8E8E8F;" id="downethnorg"></span>
<span class="fa fa-angle-up" id="upethnorg" style="display:none;padding-top:6px;margin-left:-20px;z-index: 1;
position: absolute;color: #8E8E8F;"></span>
</a>
</div>
</div>

<div id="ethnicorgpro" style="display:none;">
<div class="row" style="padding-top:5px;padding-bottom:10px;">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<a href="javascript:;" onclick="ethic_check()">Select All</a>
</div>
<div class="col-6">
<a href="javascript:;" onclick="ethic_uncheck()">Clear All</a>
</div>
</div>


<div class="row">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<input type="checkbox" name="origin_name[]" class="ethnic_select" value="Algerian"> Algerian <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select"  value="Arab"> Arab <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select" value="Carribean"> Carribean <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select" value="Algerian"> Algerian <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select" value="Turkish"> Turkish <br> Asian <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select" value="Asian - Afghan"> Asian - Afghan <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select" value="Asian - Bangladeshi"> Asian - Bangladeshi <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select" value="Asian - Chinese"> Asian - Chinese <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select" value="Asian - Filipino"> Asian - Filipino <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select" value="Asian - Indian"> Asian - Indian <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select" value="Asian - Indonesian"> Asian - Indonesian <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select" value="Asian - Kurdish"> Asian - Kurdish <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select" value="Asian - Kyrgyz"> Asian - Kyrgyz <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select"> Asian - Malay <br>

</div>
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<input type="checkbox" name="origin_name[]" class="ethnic_select" value="Asian - Maldives"> Asian - Maldives <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select" value="Asian - Pakistani"> Asian - Pakistani <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select" value="Asian - Sri Lankan"> Asian - Sri Lankan <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select" value="Asian - Other Background"> Asian - Other Background <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select" value="Indian Carribean <br>
White"> Indian Carribean <br> White <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select" value="White - American"> White - American <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select" value="White - Australian"> White - Australian <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select" value="White - Canadian"> White - Canadian <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select" value="White - Hispanic"> White - Hispanic <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select" value="White - Other Background"> White - Other Background <br> Black <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select" value="Black - African"> Black - African <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select" value="Black - American"> Black - American <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select" value="Black - British"> Black - British <br>


</div>
<div class="col-3">
<input type="checkbox" name="origin_name[]" class="ethnic_select" value="Black - Caribbean"> Black - Caribbean <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select" value="Black - Ethiopian"> Black - Ethiopian <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select" value="Black - Somali"> Black - Somali <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select" value="Black - Other Background"> Black - Other Background <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select" value="Mauritian"> Mauritian <br> Other Ethnic Group <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select" value="Albanian"> Albanian <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select" value="Bosnian"> Bosnian <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select" value="Other Ethnicity"> Other Ethnicity <br>


</div>


</div>
</div>
</div>

</li>
<div class="btpad"></div>

</li>
<div class="btpad"></div>



{{-- <li class="row" class="listtopmarg">
<div class="well" style="width:95%;background-color:#F2F2F2;box-shadow:none;border:1px solid #E6E6E6">
<div class="col-12">
<label for="" style="padding-top:5px;font-weight:bold;">My Preferences</label>
</div>
</div>

</li> --}}
<li class="row" class="listtopmarg">
<div class="col-0">
<img src="{{ $user_assets }}/icons/basic-info.png">
</div>
<div class="col-xs-10 main">
<p class="sechead">My Preferences</p>
</div>
</li>

<hr class="lineinhead">
<div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for=""> Religious History: </label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">

<div class="input-group">
 &nbsp &nbsp<input readonly="" type="text" value="Religious History" name="religious_history" class="allselects move-left">
<div class="input-group-append">
<a href="javascript:;" id="releghist">
<span class="fa fa-angle-down arrows" style="color: #8E8E8F;"id="downrehis"></span>
<span class="fa fa-angle-up" id="upreghis" style="display:none;padding-top:6px;margin-left:-20px;z-index: 1;
position: absolute;color: #8E8E8F;"></span>
</a>
</div>
</div>

<div id="releghistpro" style="display:none;">
<div class="row" style="padding-top:5px;padding-bottom:10px;">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<a href="javascript:;" onclick="history_check()">Select All</a>
</div>
<div class="col-6">
<a href="javascript:;" onclick="history_uncheck()">Clear All</a>
</div>
</div>


<div class="row">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<input type="checkbox" name="rel_history[]" class="history_select" value="Muslim Since Birth"> Muslim Since Birth<br>
</div>
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<input type="checkbox" name="rel_history[]" class="history_select" value="Revert Muslim"> Revert Muslim<br>
</div>


</div>
</div>
</div>

</li>
<div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for=""> Living with her in-laws: </label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">

<div class="input-group">
 &nbsp &nbsp<input readonly="" type="text" value="Living with" name="living_with" class="allselects move-left">
<div class="input-group-append">
<a href="javascript:;" id="livelaws">
<span class="fa fa-angle-down arrows" style="color: #8E8E8F;" id="downlivlaws"></span>
<span class="fa fa-angle-up" id="uplivlaws" style="display:none;padding-top:6px;margin-left:-20px;z-index: 1;
position: absolute;color: #8E8E8F;"></span>
</a>
</div>
</div>

<div id="livelawspro" style="display:none;">
<div class="row" style="padding-top:5px;padding-bottom:10px;">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<a href="javascript:;" onclick="living_check()">Select All</a>
</div>
<div class="col-6">
<a href="javascript:;" onclick="living_uncheck()">Clear All</a>
</div>
</div>


<div class="row">
<div class="col-6">
<input type="checkbox" name="living_law[]" class="living_select" value="Definitely Consider"> Definitely Consider<br>
<input type="checkbox" name="living_law[]" class="living_select" value="May Consider"> May Consider<br>
<input type="checkbox" name="living_law[]" class="living_select" value="Would not Consider"> Would not Consider<br>
</div>


</div>
</div>
</div>

</li>
<div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for=""> What Sect are you looking for? </label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">

<div class="input-group">
 &nbsp &nbsp<input readonly="" type="text" value="Sects" name="loking_sects" class="allselects move-left">
<div class="input-group-append">
<a href="javascript:;" id="sectlook">
<span class="fa fa-angle-down arrows" style="color: #8E8E8F;" id="downsect"></span>
<span class="fa fa-angle-up" id="upsect" style="display:none;padding-top:6px;margin-left:-20px;z-index: 1;
position: absolute;color: #8E8E8F;"></span>
</a>
</div>
</div>

<div id="sectlookpro" style="display:none;">
<div class="row" style="padding-top:5px;padding-bottom:10px;">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<a href="javascript:;" onclick="sect_check()">Select All</a>
</div>
<div class="col-6">
<a href="javascript:;" onclick="sect_uncheck()">Clear All</a>
</div>
</div>

<div class="row">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<input type="checkbox" name="sects_type[]" class="sect_select" value="Just Muslim"> Just Muslim<br>
<input type="checkbox" name="sects_type[]" class="sect_select" value="Sunni Muslim"> Sunni Muslim<br>
<input type="checkbox" name="sects_type[]" class="sect_select" value="Shia Muslim"> Shia Muslim<br>
<input type="checkbox" name="sects_type[]" class="sect_select" value="Salafi"> Salafi<br>
<input type="checkbox" name="sects_type[]" class="sect_select" value="Jam'at Islami"> Jam'at Islami<br>
<input type="checkbox" name="sects_type[]" class="sect_select" value="Thableegh Jamaath"> Thableegh Jamaath<br>

<input type="checkbox" name="sects_type[]" class="sect_select" value="Shafi'i"> Shafi'i<br>
</div>
<div class="col-md-4">
<input type="checkbox" name="sects_type[]" class="sect_select" value="Hanafi"> Hanafi<br>
<input type="checkbox" name="sects_type[]" class="sect_select" value="Hanabali"> Hanabali<br>
<input type="checkbox" name="sects_type[]" class="sect_select" value="Maliki"> Maliki<br>
<input type="checkbox" name="sects_type[]" class="sect_select" value="Sayyid"> Sayyid<br>
<input type="checkbox" name="sects_type[]" class="sect_select" value="Urdu Muslim"> Urdu Muslim<br>
<input type="checkbox" name="sects_type[]" class="sect_select" value="Bohra'i"> Bohra'i<br>
<input type="checkbox" name="sects_type[]" class="sect_select" value="Pathan"> Pathan<br>
<input type="checkbox" name="sects_type[]" class="sect_select" value="Sufism"> Sufism<br>

</div>


</div>
</div>
</div>

</li>
<div class="btpad"></div>
<li class="row" class="listtopmarg">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for=""> Pray: </label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">

<div class="input-group">
 &nbsp &nbsp<input readonly="" type="text" value="Pray" name="loking_pray" class="allselects move-left">
<div class="input-group-append">
<a href="javascript:;" id="pray">
<span class="fa fa-angle-down arrows" style="color: #8E8E8F;" id="downpray"></span>
<span class="fa fa-angle-up" id="uppray" style="display:none;padding-top:6px;margin-left:-20px;z-index: 1;
position: absolute;color: #8E8E8F;"></span>
</a>
</div>
</div>

<div id="praypro" style="display:none;">
<div class="row" style="padding-top:5px;padding-bottom:10px;">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<a href="javascript:;" onclick="pray_check()">Select All</a>
</div>
<div class="col-6">
<a href="javascript:;" onclick="pray_uncheck()">Clear All</a>
</div>
</div>


<div class="row">
<div class="col-6">
<input type="checkbox" name="pray_type[]" class="pray_select" value="Always pray"> Always pray<br>
<input type="checkbox" name="pray_type[]" class="pray_select" value="Rarely miss a prayer and make Qadah Salah"> Rarely miss a prayer and make Qadah Salah<br>
<input type="checkbox" name="pray_type[]" class="pray_select" value="Sometimes miss Fajr and make Qadah Salah"> Sometimes miss Fajr and make Qadah Salah<br>
<input type="checkbox" name="pray_type[]" class="pray_select" value="Sometimes pray"> Sometimes pray<br>
<input type="checkbox" name="pray_type[]" class="pray_select" value="Only pray before exams"> Only pray before exams<br>
</div>
<div class="col-6">
<input type="checkbox" name="pray_type[]" class="pray_select" value="Eid Salah only"> Eid Salah only<br>
<input type="checkbox" name="pray_type[]" class="pray_select" value="Intend to start praying"> Intend to start praying<br>
<input type="checkbox" name="pray_type[]" class="pray_select" value="Don't pray"> Don't pray<br>
</div>


</div>
</div>
</div>

</li>
<div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for=""> Has Children: </label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">

<div class="input-group">
 &nbsp &nbsp<input readonly="" type="text" value="Has Children" name="has_child" class="allselects move-left">
<div class="input-group-append">
<a href="javascript:;" id="hasch">
<span class="fa fa-angle-down arrows" style="color: #8E8E8F;" id="downhaschild"></span>
<span class="fa fa-angle-up" id="uphaschild" style="display:none;padding-top:6px;margin-left:-20px;z-index: 1;
position: absolute;color: #8E8E8F;"></span>
</a>
</div>
</div>

<div id="haschpro" style="display:none;">
<div class="row" style="padding-top:5px;padding-bottom:10px;">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<a href="javascript:;" onclick="has_check()">Select All</a>
</div>
<div class="col-6">
<a href="javascript:;" onclick="has_uncheck()">Clear All</a>
</div>
</div>


<div class="row">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<input type="checkbox" name="child_count[]" class="has_select" value="None"> None<br>
<input type="checkbox" name="child_count[]" class="has_select" value="one"> one<br>

</div>
<div class="col-6">
<input type="checkbox" name="child_count[]" class="has_select" value="two"> two<br>
<input type="checkbox" name="child_count[]" class="has_select" value="three or more"> three or more<br>

</div>


</div>
</div>
</div>

</li>
<div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for=""> Like to have children: </label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">

<div class="input-group">
 &nbsp &nbsp<input readonly="" type="text" value="Like to Have" name="like_child" class="allselects move-left">
<div class="input-group-append">
<a href="javascript:;" id="hvechil">
<span class="fa fa-angle-down arrows" style="color: #8E8E8F;" id="downhavchil"></span>
<span class="fa fa-angle-up" id="uphavchil" style="display:none;padding-top:6px;margin-left:-20px;z-index: 1;
position: absolute;color: #8E8E8F;"></span>
</a>
</div>
</div>

<div id="hvechilpro" style="display:none;">
<div class="row" style="padding-top:5px;padding-bottom:10px;">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<a href="javascript:;" onclick="like_check()">Select All</a>
</div>
<div class="col-6">
<a href="javascript:;" onclick="like_uncheck()">Clear All</a>
</div>
</div>


<div class="row">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<input type="checkbox" name="child_like[]" class="like_select" like_select value="Yes"> Yes<br>

</div>
<div class="col-6">
<input type="checkbox" name="child_like[]" class="like_select" like_select value="No"> No<br>

</div>


</div>
</div>
</div>

</li>
<div class="btpad"></div>





{{--
<li class="row" class="listtopmarg">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for=""> Minimum Qualification</label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">

<select name="" id="" class="allselects">
<option value="">Master</option>
<option value="">Diploma</option>
</select>
</div>
</li>
<div class="btpad"></div> --}}

{{-- <li class="row" class="listtopmarg">
<div class="well" style="width:95%;background-color:#F2F2F2;box-shadow:none;border:1px solid #E6E6E6">
<div class="col-12">
<label for="" style="padding-top:5px;font-weight:bold;">I am looking for</label>
</div>
</div>

</li> --}}

<li class="row" class="listtopmarg">
<div class="col-0">
<img src="{{ $user_assets }}/icons/basic-info.png">
</div>
<div class="col-xs-10 main">
<p class="sechead">I am looking for</p>
</div>
</li>

<hr class="lineinhead">

<div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for=""> Expectations you may have about your expected partner.  (Mention here location, education, job, character etc..)</label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">
<!-- <span class="colons">:</span> -->
<textarea class='last-textarea' data-toggle="tooltip" data-placement="top" title="Kindly provide the details about your preferences for the partner and what you are looking for in your partner for instance type of personality, family and educational background, hobbies, etc." placeholder="Kindly provide the details about your preferences for the partner and what you are looking for in your partner for instance type of personality, family and educational background, hobbies, etc." name="loking_description" id="" style="height:75px;width:91%;"></textarea>
</div>
</li>
<div class="btpad"></div>




<li class="row" class="listtopmarg">
<div class="well" style="width:95%;background-color:#F2F2F2;box-shadow:none;border:1px solid #E6E6E6">
<div class="col-12">
<label for="" style="padding-top:5px;font-weight:bold;">Upload profile image</label>

</div>
</div>

</li>
<div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<label for="">Image</label>
</div>
<div class="col-xl-8 col-lg-8 col-sm-8 col-sm-8 col-xs-12">

<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Upload</button>


</div>
</li>
<div class="btpad"></div>





<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</ul>

<div id="first_step">

{{-- <a href="{{ url('prev-user-step-2')}}" class="btn prevsecbtn">Previous</a> --}}
<button type="submit" class="btn submitbtn" type="submit">Submit</button>
</div>



{{-- <div id="third_step">

<a href="" class="btn prevsecbtn" id="third_pre">Previous</a>
<button type="submit" class="btn submitbtn" type="submit">Submit</button>
</div> --}}

</div>
</div>
<br>
</div>
</form>

<script type="text/javascript">

function like_uncheck()
{
$('.like_select').prop('checked', false);
}
function like_check()
{
$('.like_select').prop('checked', true);

}

function has_uncheck()
{
$('.has_select').prop('checked', false);
}
function has_check()
{
$('.has_select').prop('checked', true);

}

function pray_uncheck()
{
$('.pray_select').prop('checked', false);
}
function pray_check()
{
$('.pray_select').prop('checked', true);

}
function sect_uncheck()
{
$('.sect_select').prop('checked', false);
}
function sect_check()
{
$('.sect_select').prop('checked', true);

}

function living_uncheck()
{
$('.living_select').prop('checked', false);
}
function living_check()
{
$('.living_select').prop('checked', true);

}
function history_uncheck()
{
$('.history_select').prop('checked', false);
}
function history_check()
{
$('.history_select').prop('checked', true);

}
function ethic_uncheck()
{
$('.ethnic_select').prop('checked', false);
}
function ethic_check()
{
$('.ethnic_select').prop('checked', true);

}


function ethic_uncheck()
{
$('.ethnic_select').prop('checked', false);
}
function ethic_check()
{
$('.ethnic_select').prop('checked', true);

}


function resdency_unchek()
{
$('.resdency_select').prop('checked', false);
}
function residency_check()
{
$('.resdency_select').prop('checked', true);

}

function south_unamerica()
{
$('.south_select').prop('checked', false);
}
function south_america()
{
$('.south_select').prop('checked', true);

}

function australasia_uncheck()
{
$('.austra_select').prop('checked', false);
}
function australasia_check()
{
$('.austra_select').prop('checked', true);

}

function north_america_uncheck()
{
$('.north_select').prop('checked', false);
}
function north_america_check()
{
$('.north_select').prop('checked', true);

}

function loking_lan_uncheck()
{
$('.loking_lan').prop('checked', false);
}
function loking_lan_check()
{
$('.loking_lan').prop('checked', true);

}


function hijab_uncheck()
{
$('.hijab_select').prop('checked', false);
}
function hijab_check()
{
$('.hijab_select').prop('checked', true);

}


function hijab_uncheck()
{
$('.hijab_select').prop('checked', false);
}
function hijab_check()
{
$('.hijab_select').prop('checked', true);

}

function body_uncheck()
{
$('.body_select').prop('checked', false);
}
function body_check()
{
$('.body_select').prop('checked', true);

}

function skin_uncheck()
{
$('.skin_select').prop('checked', false);
}
function skin_check()
{
$('.skin_select').prop('checked', true);

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





$('#relocate').change(function(){
var value = $( this ).val();
if(value=='Not Willing to relocate')
{

$('#relocate_type').show(500);
}
else
{
$('#relocate_type').hide(500);

}

});
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

$.post('{{ url('/get-living-state') }}' , {_token: '{{ csrf_token() }}' , country_id: country_id} , function(data)
{
// alert(data);
document.getElementById("wait").style.display = "none"
// response = $.parseJSON(data);
// alert(data);
$('#living_city').html('');
$('#living_state').html(data);
$('#sts').show('slow');

// alert(response.code_flage);
});
}

function state_change(sel)
{
var state_id=sel.value;
if(sel.checked){
document.getElementById("wait").style.display = "block";
$.post('{{ url('/get-living-city') }}' , {_token: '{{ csrf_token() }}' , state_id: state_id} , function(data)
{
// alert(data);
document.getElementById("wait").style.display = "none";
if ( $('#living_city').children().length > 0 ) {
$('#living_city').append(data);
$('#cties').show('slow');

}else{
$('#living_city').html(data);
$('#cties').show('slow');
}

});
}else{
$('.elms'+state_id).parent('.row').remove();
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