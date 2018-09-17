<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<title>Register</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">
<link rel="stylesheet" href="{{ $user_assets }}/css/style2.css">
<link rel="stylesheet" href="{{ $user_assets }}/css/step.css"> {{--
<link rel="stylesheet" href="{{ $user_assets }}/css/advance-profile.css"> --}}
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ $user_assets }}/css/register.css" />
{{--
<link rel="stylesheet" href="{{ $user_assets }}/css/menu-hamburger.css" /> --}}


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="{{ $user_assets }}/js/custom2.js"></script>

</head>


<body>

<div class="wrapper">
<nav class="navbar navbar-default navbar-fixed-top  sticky-nav nav-white nav-border-bottom" role="navigation" style="height: 60px;background-color: #5a378c">
<div class="container-fluid">
<div class="row">
<!-- logo -->
<div class="col-md-2 pull-left"> <a class="logo-light" href="{{ url('/') }}"><img alt="" src="{{ $user_assets }}/images/kaboolhai.png" class="logo" style="margin-left: 80px;" /></a></div>

</div>
</div>
</nav>

<div class="container">
<div id="wait" style="display: none;"></div>
<br>
<div class="row">

<div class="col-sm-9">
<div class="well" style="background-color: #f5f5f5">
<br>
<div class="menuwizard">
{{-- <img id="one" class="wizrdpic" src="{{ $user_assets }}/img/registration-step 1.png" alt=""> --}}
<img id="three" class="wizrdpic" src="{{ $user_assets }}/img/registration-step 3.png" alt="">
{{-- <img id="two" class="wizrdpic" src="{{ $user_assets }}/img/registration-step 2.png" alt=""> --}}
</div>

<form method="post" action="{{ url('register-user') }}">


<input type="hidden" name="email" value="{{ $email }}">

<div class="modal wow fadeInDown" id="myModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="false">
<div class="modal-dialog modal-lg" style="overflow-y: scroll; height: 700px; box-shadow: 0 4px 8px 0 rgba(0,0,0, 0.5), 0 6px 20px 0 rgba(0,0, 0, 0.5;);">
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
<div class="modal-body" style="background-color:#e6e6e6; ">
<div class="container">

<div class="row">
@if($gender=='Male') @foreach($mimage as $row)
<div class="col-md-3">
<label for="card_{{$row->image_id}}" class="method card">
<div class="card-logos">
<img style="width: 100%" src="{{ $user_assets }}/profile_image/{{ $row->image_name }}">

</div>

<div class="radio-input">
<input id="card_{{$row->image_id}}" value="{{$row->image_id}}" type="radio" name="profile_image">
Select Image
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
Select Image
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



<!-- The Modal -->

<ul id="advanceinfo">
<br><br>
<li class="row" class="listtopmarg">
<div class="col-0">
<img src="{{ $user_assets }}/icons/basic-info.png">
</div>
<div class="col-10">
<p class="sechead">Profile Description</p >
</div>
</li>

<hr class="lineinhead">

<li class="row" class="listtopmarg">
<div class="col-12">
Explain more about your personality, family and educational background, profession and hobbies
</div>
</li>
<input type="hidden" name="email" value="{{ $edit_user->email }}">
<li class="row" class="listtopmarg">
<div class="col-9">
<textarea name="description" id="" class="prfdesctxt">{{ $edit_user->description }}</textarea>
</div>
<div class="col-3">
<img src="{{ $user_assets }}/icons/arrow.png" alt=""><br><span><a href="#">Help me Write this</a></span>
</div>
</li>

<!-- **************************************************** -->
<br>
<li class="row" class="listtopmarg">
<div class="col-0">
<img src="{{ $user_assets }}/icons/religion.png">
</div>
<div class="col-10">
<p class="sechead">Family Details</p >
</div>
</li>

<hr class="lineinhead">

<li class="row" class="listtopmarg">
<div class="col-4">
<label for=""> Family Type</label>
</div>
<div class="col-8">
<span class="colons">:</span>
<select name="family_type" id="" class="allselects">

<option @if($edit_user->family_type=='Nuclear Family') selected="" @endif value="Nuclear Family">Nuclear Family</option>
 <option @if($edit_user->family_type=='joint Family') selected="" @endif value="joint Family">joint Family</option>

</select>
</div>
</li><div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-4">
<label for=""> Finacial Status</label>
</div>
<div class="col-8">
<span class="colons">:</span>
<select name="finacial_status" id="finacial_status" class="allselects">
<option value="Rich">Rich</option>
    <option value="Upper Middle Class">Upper Middle Class</option>
<option value="Middle Class">Middle Class</option>\
  <option value="Lower Upper Middle Class">Lower Upper Middle Class</option>
    <option value="Do not want to tell at this time">Do not want to tell at this time</option>
</select>
</div>
</li><div class="btpad"></div>

<li class="row" class="listtopmarg" id="test_assets">
<div class="col-4">
<label for="">Assets</label>
</div>
<div class="col-8">
<span class="colons">:</span>
<select name="assets" id="assets" onchange="assets_change(this)" class="allselects">
<option value="Home">Home</option>
    <option value="Plot">Plot</option>
    <option value="Vehicle">Vehicle</option>
    <option value="Nothing">Nothing</option>
    <option value="other">Other</option>
</select>
</div>
</li><div class="btpad"></div>

<li class="row" class="listtopmarg" id="other_assets" style="display: none">
<div class="col-4">
<label for="">Other Assets</label>
</div>
<div class="col-8">
<span class="colons">:</span>
<input type="text" name="other_assets" placeholder="please specify other Asset" class="allselects">

</div>
</li><div class="btpad"></div>

 <input type="hidden" name="edit_id" value="{{ $edit_user->id}}">
<li class="row" class="listtopmarg">
<div class="col-4">
<label for="">Father's Details</label>
</div>
<div class="col-8">
<span class="colons">:</span>
<div class="parntdet">
<input type="radio" @if($edit_user->father_detail=='Alive') checked="" @endif name="father_detail" value="Alive"> Alive &nbsp <input type="radio" name="father_detail" value="Died" @if($edit_user->father_detail=='Died') checked="" @endif> Died &nbsp Occupation <input type="text" name="father_occupation" value="{{ $edit_user->father_occupation }}" class="allinputs">
</div>
</div>
</li><div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-4">
<label for="">Mother's Details</label>
</div>
<div class="col-8">
<span class="colons">:</span>
<div class="parntdet">
<input type="radio" name="mother_detail" @if($edit_user->mother_detail=='Alive') checked="" @endif value="Alive"> Alive &nbsp <input type="radio" name="mother_detail" value="Died" @if($edit_user->mother_detail=='Died') checked="" @endif> Died &nbsp Occupation <input type="text" name="mother_occupation" value="{{ $edit_user->mother_occupation }}" class="allinputs">
</div>
</div>
</li><div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-4">
<label for="">Brothers Details</label>
</div>
<div class="col-8">
<span class="colons">:</span>
<div class="childdet">
Elder <select name="elder_brother" id="elder_brother" class="smallselect">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="above">above</option>
</select>
&nbsp Younger <select name="younger_brother" id="younger_brother" class="smallselect">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="above">above</option>
</select>

</div>
</div>
</li><div class="btpad"></div>
<li class="row" class="listtopmarg">
<div class="col-4">
<label for=""> Married</label>
</div>
<div class="col-8">
<span class="colons">:</span>
<select name="brother_married" id="brother_married" class="allselects">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="above">above</option>
</select>
</div>
</li><div class="btpad"></div>
<li class="row" class="listtopmarg">
<div class="col-4">
<label for=""> Un Married</label>
</div>
<div class="col-8">
<span class="colons">:</span>
<select name="brother_unmarried" id="brother_unmarried" class="allselects">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="above">above</option>
</select>
</div>
</li><div class="btpad"></div>
<li class="row" class="listtopmarg">
<div class="col-4">
<label for="">Sisters Details</label>
</div>
<div class="col-8">
<span class="colons">:</span>
<div class="childdet">
Elder <select name="elder_sister" id="elder_sister" class="smallselect">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="above">above</option>
</select> &nbsp Younger <select name="younger_sister" id="younger_sister" class="smallselect">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="above">above</option>
</select>
</div>
</div>
</li><div class="btpad"></div>
<li class="row" class="listtopmarg">
<div class="col-4">
<label for=""> Married</label>
</div>
<div class="col-8">
<span class="colons">:</span>
<select name="sister_married" id="sister_married" class="allselects">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="above">above</option>
</select>
</div>
</li><div class="btpad"></div>
<li class="row" class="listtopmarg">
<div class="col-4">
<label for=""> Un Married</label>
</div>
<div class="col-8">
<span class="colons">:</span>
<select name="sister_unmarried" id="sister_unmarried" class="allselects">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="above">above</option>
</select>
</div>
</li><div class="btpad"></div>
<li class="row" class="listtopmarg">
<div class="col-4">
<label for=""> Family Details</label>
</div>
<div class="col-8">
<span class="colons">:</span>
<textarea name="family_detail" id="" class="famdet">{{ $edit_user->family_detail }}</textarea>
</div>
</li><div class="btpad"></div>

<!-- **************************************************** -->

<li class="row" class="listtopmarg">
<div class="col-0">
<img src="{{ $user_assets }}/icons/religion.png">
</div>
<div class="col-10">
<p class="partpref">Partner Preference</p >
</div>
</li>

<hr class="lineinhead">

<li class="row" class="listtopmarg">
<div class="well" style="width:95%;background-color:#F2F2F2;box-shadow:none;border:1px solid #E6E6E6">
<div class="col-12">
<label for="" style="padding-top:5px;font-weight:bold;">Basic Preferences</label>
</div>
</div>

</li><div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-4">
<label for=""> Age Preference <span class="imporatant">*</span></label>
</div>
<div class="col-8">
<span class="colons">:</span>
<select name="loking_age_from" id="loking_age_from" class="midlinput">
<option  value="18">18</option>
 <option  value="19">19</option>
 <option  value="20">20</option>
 <option  value="21">21</option>
 <option  value="22">22</option>
 <option  value="23">23</option>
 <option  value="24">24</option>
 <option  value="25">25</option>
 <option  value="26">26</option>
 <option  value="27">27</option>
 <option  value="28">28</option>
 <option  value="29">29</option>
 <option  value="30">30</option>
 <option  value="31">31</option>
 <option  value="32">32</option>
 <option  value="33">33</option>
 <option  value="34">34</option>
 <option  value="35">35</option>
 <option  value="36">36</option>
 <option  value="37">37</option>
 <option  value="38">38</option>
 <option  value="39">39</option>
 <option  value="40">40</option>
 <option  value="41">41</option>
 <option  value="42">42</option>
 <option  value="43">43</option>
 <option  value="44">44</option>
 <option  value="45">45</option>
 <option  value="46">46</option>
 <option  value="47">47</option>
 <option  value="48">48</option>
 <option  value="49">49</option>
 <option  value="50">50</option>
 <option  value="51">51</option>
 <option  value="52">52</option>
 <option  value="53">53</option>
 <option  value="54">54</option>
 <option  value="55">55</option>
 <option  value="56">56</option>
 <option  value="57">57</option>
 <option  value="58">58</option>
 <option  value="59">59</option>
 <option  value="60">60</option>
 <option  value="61">61</option>
 <option  value="62">62</option>
 <option  value="63">63</option>
 <option  value="64">64</option>
 <option  value="65">65</option>
 <option  value="66">66</option>
 <option  value="67">67</option>
 <option  value="68">68</option>
 <option  value="69">69</option>
 <option  value="70">70</option>
</select>
to
<select name="loking_age_to" id="loking_age_to" class="midlinput">
<option  value="18">18</option>
 <option  value="19">19</option>
 <option  value="20">20</option>
 <option  value="21">21</option>
 <option  value="22">22</option>
 <option  value="23">23</option>
 <option  value="24">24</option>
 <option  value="25">25</option>
 <option  value="26">26</option>
 <option  value="27">27</option>
 <option  value="28">28</option>
 <option  value="29">29</option>
 <option  value="30">30</option>
 <option  value="31">31</option>
 <option  value="32">32</option>
 <option  value="33">33</option>
 <option  value="34">34</option>
 <option  value="35">35</option>
 <option  value="36">36</option>
 <option  value="37">37</option>
 <option  value="38">38</option>
 <option  value="39">39</option>
 <option  value="40">40</option>
 <option  value="41">41</option>
 <option  value="42">42</option>
 <option  value="43">43</option>
 <option  value="44">44</option>
 <option  value="45">45</option>
 <option  value="46">46</option>
 <option  value="47">47</option>
 <option  value="48">48</option>
 <option  value="49">49</option>
 <option  value="50">50</option>
 <option  value="51">51</option>
 <option  value="52">52</option>
 <option  value="53">53</option>
 <option  value="54">54</option>
 <option  value="55">55</option>
 <option  value="56">56</option>
 <option  value="57">57</option>
 <option  value="58">58</option>
 <option  value="59">59</option>
 <option  value="60">60</option>
 <option  value="61">61</option>
 <option  value="62">62</option>
 <option  value="63">63</option>
 <option  value="64">64</option>
 <option  value="65">65</option>
 <option  value="66">66</option>
 <option  value="67">67</option>
 <option  value="68">68</option>
 <option  value="69">69</option>
 <option  value="70">70</option>
</select>
{{-- <input type="text" > --}}

</div>
</li><div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-4">
<label for=""> Marital Status</label>
</div>
<div class="col-8">
<span class="colons">:</span>
<div class="radiyn">
<input type="hidden" name="martial" value="martial_status">
<input type="checkbox" name="loking_martial_status[]" @if (preg_match("/Unmmaried/", "$loking_marital")) checked="" @endif value="Unmmaried"> Unmmaried &nbsp <input type="checkbox" name="loking_martial_status[]" @if (preg_match("/Widow Widower/", "$loking_marital")) checked="" @endif value="Widow/Widower"> Widow/Widower &nbsp <input type="checkbox" name="loking_martial_status[]" @if (preg_match("/Divorcee/", "$loking_marital")) checked="" @endif value="Divorcee"> Divorcee &nbsp <input type="checkbox" name="loking_martial_status[]" @if (preg_match("/Seprated/", "$loking_marital")) checked="" @endif value="Seprated"> Seprated
</div>
</div>
</li><div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-4">
<label for=""> Height Preference</label>
</div>
<div class="col-8">

<span class="colons">:</span>
<select name="loking_height_from" id="loking_height_from"  class="midlinput">

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
{{-- <input type="text" class="midlinput"> --}}
to
<select name="loking_height_to" id="loking_height_to" class="midlinput">

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
{{-- <input type="text" class="midlinput"> --}}
</div>
</li><div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-4">
<label for=""> Complexion Preference </label>
</div>
<div class="col-8">

<div class="input-group">
: &nbsp &nbsp<input type="text" value="complexion" name="complexion" class="allselects">
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
<div class="col-4">
<a href="javascript:;" onclick="skin_check()">Select All</a>
</div>
<div class="col-6">
<a href="javascript:;" onclick="skin_uncheck()">Clear All</a>
</div>
</div>


<div class="row">
<div class="col-4">
<input type="checkbox" name="loking_skin_color[]" class="skin_select" value="Very Fair"> Very Fair<br>
<input type="checkbox" name="loking_skin_color[]" class="skin_select" value="Fair"> Fair<br>
</div>
<div class="col-4">
<input type="checkbox" name="loking_skin_color[]" class="skin_select" value="Wheatish">Wheatish<br>
<input type="checkbox" name="loking_skin_color[]" class="skin_select" value="Dark">Dark<br>
</div>


</div>
</div>
</div>

</li>
<div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-4">
<label for=""> Physical Status</label>
</div>
<div class="col-8">
<span class="colons">:</span>
<select name="loking_physcial_status" id="loking_physcial_status" class="allselects">
<option value="Normal Person">Normal Person</option>
<option value="Deaf/Dumb">Deaf/Dumb</option>
<option value="Blind">Blind</option>
<option value="Physically Challenged">Physically Challenged</option>
<option value="Mentally Challenged">Mentally Challenged</option>
<option value="With other Disability">With other Disability</option>
</select>
</div>
</li><div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-4">
<label for="">  Eating Habits</label>
</div>
<div class="col-8">
<span class="colons">:</span>
<div class="radiyn">
<input type="hidden" name="eating_type"  value="eating type">
<input type="checkbox" name="loking_eating_habits[]" @if (preg_match("/Dose not/", "$loking_eating")) checked="" @endif value="Dose not"> Dose not matter &nbsp <input type="checkbox" name="loking_eating_habits[]" @if (preg_match("/Veg/", "$loking_eating")) checked="" @endif value="Veg"> Veg &nbsp <input type="checkbox" name="loking_eating_habits[]" @if (preg_match("/Occasionally Non-veg/", "$loking_eating")) checked="" @endif value="Occasionally Non-veg"> Occasionally Non-veg &nbsp <input type="checkbox" name="loking_eating_habits[]" @if (preg_match("/Eggetarian/", "$loking_eating")) checked="" @endif value="Eggetarian"> Eggetarian
</div>
</div>
</li><div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-4">
<label for=""> Mother Tongue</label>
</div>
<div class="col-8">
<span class="colons">:</span>
<select name="loking_language" id="loking_language" class="allselects">
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
</li><div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-4">
<label for=""> Other language <span class="imporatant">*</span></label>
</div>
<div class="col-8">
{{-- chang --}}
<div class="input-group">
:<input type="text" value="Partner other language" name="loking_other_lang" class="allselects" style="margin-left: 13px;">
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

<input type="checkbox" name="loking_other_language[]" @if(preg_match("/Urdu/", "$loking_other_language")) checked="" @endif  class="loking_lan" value="Urdu"> Urdu <br> <input type="checkbox" name="loking_other_language[]" @if (preg_match("/Punjabi/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Punjabi"> Punjabi <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Pashto/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Pashto"> Pashto <br>
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Sindhi/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Sindhi"> Sindhi <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Saraiki/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Saraiki"> Saraiki <br> <input type="checkbox" name="loking_other_language[]" @if (preg_match("/Balochi/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Balochi"> Balochi <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Hindko/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Hindko"> Hindko <br><input type="checkbox" name="loking_other_language[]" @if (preg_match("/English/", "$loking_other_language")) checked="" @endif class="loking_lan" value="English"> English <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Malayalam/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Malayalam"> Malayalam <br>
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Aka/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Aka"> Aka <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Angika/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Angika"> Angika <br>
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Arabic/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Arabic"> Arabic <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Arunachali/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Arunachali"> Arunachali <br>
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Assamese/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Assamese"> Assamese <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Awadhi/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Awadhi"> Awadhi <br>
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Badaga/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Badaga"> Badaga <br>
</div>


<div class="col-5">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Bengali/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Bengali"> Bengali <br>
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Bhojpuri/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Bhojpuri"> Bhojpuri <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Bihari/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Bihari"> Bihari <br>
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Brij/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Brij"> Brij <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Chatisgarhi/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Chatisgarhi"> Chatisgarhi <br>
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Coorgi/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Coorgi"> Coorgi <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Dogri/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Dogri"> Dogri <br>

<input type="checkbox" name="loking_other_language[]" @if (preg_match("/French/", "$loking_other_language")) checked="" @endif class="loking_lan" value="French"> French <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Garhwali/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Garhwali"> Garhwali <br>
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Garo/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Garo"> Garo <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Gujarati/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Gujarati"> Gujarati <br>
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Haryanvi/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Haryanvi"> Haryanvi <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Himachali Pahari/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Himachali Pahari"> Himachali/Pahari <br>
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Hindi/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Hindi"> Hindi <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Kannada/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Kannada"> Kannada <br>
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Kashmiri/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Kashmiri"> Kashmiri <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Khandesi/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Khandesi"> Khandesi <br>
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Khasi/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Khasi"> Khasi <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Konkani/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Konkani"> Konkani <br>
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Koshali/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Koshali"> Koshali <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Kumaoni/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Kumaoni"> Kumaoni <br>
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Kutchi/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Kutchi"> Kutchi <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Ladacki/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Ladacki"> Ladacki <br>
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Lepcha/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Lepcha"> Lepcha <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Magahi/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Magahi"> Magahi <br>
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Maithili/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Maithili"> Maithili <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Malay/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Malay"> Malay <br>
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Manipuri/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Manipuri"> Manipuri <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Marathi/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Marathi"> Marathi <br>
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Marwari/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Marwari"> Marwari <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Miji/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Miji"> Miji <br>
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Miza/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Miza"> Miza <br>
</div>





<div class="col-5">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Monpa/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Monpa"> Monpa <br>
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Nepali/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Nepali"> Nepali <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Nicobarese/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Nicobarese"> Nicobarese <br>
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Oriya/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Oriya"> Oriya <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Persian/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Persian"> Persian <br>

<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Rajasthani/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Rajasthani"> Rajasthani <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Russian/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Russian"> Russian <br>
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Sanskrit/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Sanskrit"> Sanskrit <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Santhali/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Santhali"> Santhali <br>

<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Sinhala/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Sinhala"> Sinhala <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Sourashtra/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Sourashtra"> Sourashtra <br>
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Spanish/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Spanish"> Spanish <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Tamil/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Tamil"> Tamil <br>
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Telugu/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Telugu">Telugu <br>
</div>
<div class="col-5">
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Tripuri/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Tripuri"> Tripuri <br>
<input type="checkbox" name="loking_other_language[]" @if (preg_match("/Tulu/", "$loking_other_language")) checked="" @endif class="loking_lan" value="Tulu"> Tulu <br>
</div>

</div>
</div>
</li>
                                <div class="btpad"></div>
<li class="row" class="listtopmarg">
<div class="well" style="width:95%;background-color:#F2F2F2;box-shadow:none;border:1px solid #E6E6E6">
<div class="col-12">
<label for="" style="padding-top:5px;font-weight:bold;">Professional Preferences</label>
</div>
</div>

</li><div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-4">
<label for=""> Education</label>
</div>
<div class="col-8">
<span class="colons">:</span>
<select name="loking_education" id="loking_education" class="allselects">
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
</li><div class="btpad"></div>

<li class="row" class="listtopmarg" id="loking_job">
<div class="col-4">
<label for=""> Occupation</label>
</div>
<div class="col-8">
<span class="colons">:</span>
	<select name="loking_job" id="loking_jobs"  onchange="user_job(this)" class="allselects">
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

</select>
</div>
</li><div class="btpad"></div>
<li class="row" class="listtopmarg" id="other_job" style="display: none">
<div class="col-4">
<label for=""> Occupation</label>
</div>
<div class="col-8">
<span class="colons">:</span>
<input type="text" name="loking_job_type"  placeholder="please specify other Occupation" class="allselects">

</div>
</li><div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-4">
<label for="">Employed in</label>
</div>
<div class="col-8">
<span class="colons">:</span>
<input type="text" name="employed_in" value="{{ $edit_user->employed_in }}" placeholder="employed in" class="allselects">

</div>
</li><div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-4">
<label for=""> Annual Income</label>
</div>
<div class="col-8">
<span class="colons">:</span>
<select name="loking_a_income" id="loking_a_income" class="allselects">
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
</li><div class="btpad"></div>


<li class="row" class="listtopmarg">
<div class="well" style="width:95%;background-color:#F2F2F2;box-shadow:none;border:1px solid #E6E6E6">
<div class="col-12">
<label for="" style="padding-top:5px;font-weight:bold;">1st Location Preferences</label>
</div>
</div>

</li><div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-4">
<label for=""> Country Living in</label>
</div>
<div class="col-8">
<span class="colons">:</span>
<select id="country" onchange="country_change(this)" name="living_country_id" class="allselects">
<option selected="" value="">Select country 
</option>
@foreach ($country as $row)
<option @if($row->country_id==$edit_user->living_country_id) selected="" @endif value="{{ $row->country_id }}">
{{ $row->country_name }}
</option>
@endforeach
</select>
</div>
</li>
<div class="btpad"></div>

<li class="row"  class="listtopmarg">
<div class="col-4">
<label for=""> State</label>
</div>
</li>
<li class="row" id="sts" class="listtopmarg">
@foreach ($living_state as $value)
<div class="col-6">
<div class="form-group label_style">
 <input type="checkbox" @foreach($edit_living_state as $row) @if($row->loking_value==$value->state_id) checked="" @endif @endforeach  onchange="state_change(this)" name="living_state_id[]" value="{{ $value->state_id }}"> {{ $value->state_name }}
</div>
</div>
@endforeach



</li>
<span id="living_state"></span>
<div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-4">
<label for=""> District/City</label>
</div>
</li>
<li class="row" id="cties" class="listtopmarg">
@foreach ($living_cities as $row)
	
<div class="col-6">
	<div class="form-group label_style">
 <input type="checkbox" checked="" name="living_city_id[]" value="{{ $row->city_id }}"> {{ $row->city_name }}
</div>
</div>
@endforeach
<span id="living_city"></span>



</li>


<li class="row" class="listtopmarg">
<div class="well" style="width:95%;background-color:#F2F2F2;box-shadow:none;border:1px solid #E6E6E6">
<div class="col-12">
<label for="" style="padding-top:5px;font-weight:bold;">2nd Location Preference (optional)</label>
</div>
</div>

</li><div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-4">
<label for=""> Africa</label>
</div>
<div class="col-8">

<div class="input-group">
: &nbsp &nbsp<input type="text" value="Africa" name="affrica" class="allselects">
<div class="input-group-append">
<a href="javascript:;" id="affrica">
<span class="fa fa-arrow-down arrows" id="downafr"></span>
          <span class="fa fa-arrow-up" id="upafr" style="display:none;padding-top:10px;margin-left:-20px;z-index: 1;
          position: absolute;"></span>

      </a>
</div>
</div>

<div id="allaffrica" style="display:none;">
<div class="row"  style="padding-top:5px;padding-bottom:10px;">
<div class="col-4">
<a href="javascript:;" onclick="africa_check()">Select All </a>
</div>
<div class="col-6">
<a href="javascript:;" onclick="africka_uncheck()">Clear All</a>
</div>
</div>


<div class="row">
<div class="col-4">
<input type="checkbox" @if (preg_match("/Algeria/", "$africa")) checked="" @endif value="Algeria" name="africa_country[]" class="africa_select"> Algeria <br>

<input type="checkbox" @if (preg_match("/Angola/", "$africa")) checked="" @endif value="Angola" name="africa_country[]" class="africa_select"> Angola <br>

<input type="checkbox" @if (preg_match("/Benin/", "$africa")) checked="" @endif value="Benin" name="africa_country[]" class="africa_select"> Benin <br>

<input type="checkbox" @if (preg_match("/Botswana/", "$africa")) checked="" @endif value="Botswana" name="africa_country[]" class="africa_select"> Botswana <br>

<input type="checkbox" @if (preg_match("/Burkina Faso/", "$africa")) checked="" @endif value="Burkina Faso" name="africa_country[]" class="africa_select"> Burkina Faso <br>

<input type="checkbox" @if (preg_match("/Burundi/", "$africa")) checked="" @endif value="Burundi" name="africa_country[]" class="africa_select"> Burundi <br>

<input type="checkbox" @if (preg_match("/Cameroon/", "$africa")) checked="" @endif value="Cameroon" name="africa_country[]" class="africa_select"> Cameroon <br>

<input type="checkbox" @if (preg_match("/Cape Verde/", "$africa")) checked="" @endif value="Cape Verde" name="africa_country[]" class="africa_select"> Cape Verde <br>

<input type="checkbox" @if (preg_match("/Central African Rep/", "$africa")) checked="" @endif value="Central African Rep" name="africa_country[]" class="africa_select"> Central African Rep <br>

<input type="checkbox" @if (preg_match("/Chad/", "$africa")) checked="" @endif value="Chad" name="africa_country[]" class="africa_select"> Chad <br>
<input type="checkbox" @if (preg_match("/Comoros/", "$africa")) checked="" @endif value="Comoros" name="africa_country[]" class="africa_select"> Comoros <br>
<input type="checkbox" @if (preg_match("/Congo, DR/", "$africa")) checked="" @endif value="Congo, DR" name="africa_country[]" class="africa_select"> Congo, DR <br>
<input type="checkbox" @if (preg_match("/Congo, Rep/", "$africa")) checked="" @endif value="Congo, Rep" name="africa_country[]" class="africa_select"> Congo, Rep. <br>
<input type="checkbox" @if (preg_match("/Cote d'Ivoire/", "$africa")) checked="" @endif value="Cote d'Ivoire" name="africa_country[]" class="africa_select"> Cote d'Ivoire <br>
<input type="checkbox" @if (preg_match("/Djibouti/", "$africa")) checked="" @endif value="Djibouti" name="africa_country[]" class="africa_select"> Djibouti <br>
<input type="checkbox" @if (preg_match("/South Africa/", "$africa")) checked="" @endif value="South Africa" name="africa_country[]" class="africa_select"> South Africa <br>
<input type="checkbox" @if (preg_match("/Sudan/", "$africa")) checked="" @endif value="Sudan" name="africa_country[]" class="africa_select"> Sudan <br>
<input type="checkbox" @if (preg_match("/Swaziland/", "$africa")) checked="" @endif value="Swaziland" name="africa_country[]" class="africa_select"> Swaziland <br>
<input type="checkbox" @if (preg_match("/Zambia/", "$africa")) checked="" @endif value="Zambia" name="africa_country[]" class="africa_select"> Zambia <br>
<input type="checkbox" @if (preg_match("/Egypt/", "$africa")) checked="" @endif value="Egypt" name="africa_country[]" class="africa_select"> Egypt <br>

</div>
<div class="col-4">
<input type="checkbox" name="africa_country[]" class="africa_select" value="Equatorial Guinea"> Equatorial Guinea <br>
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Eritrea/", "$africa")) checked="" @endif value="Eritrea"> Eritrea <br>
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Ethiopia/", "$africa")) checked="" @endif value="Ethiopia"> Ethiopia <br>
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Gabon/", "$africa")) checked="" @endif value="Gabon"> Gabon <br>
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Gambia/", "$africa")) checked="" @endif value="Gambia"> Gambia <br>
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Ghana/", "$africa")) checked="" @endif value="Ghana"> Ghana <br>
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Guinea/", "$africa")) checked="" @endif value="Guinea"> Guinea <br>
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Guinea-Bissau/", "$africa")) checked="" @endif value="Guinea-Bissau"> Guinea-Bissau <br>
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Kenya/", "$africa")) checked="" @endif value="Kenya"> Kenya <br>
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Lesotho/", "$africa")) checked="" @endif value="Lesotho"> Lesotho <br>
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Liberia/", "$africa")) checked="" @endif value="Liberia"> Liberia <br>
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Libya/", "$africa")) checked="" @endif value="Libya"> Libya <br>
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Madagascar/", "$africa")) checked="" @endif value="Madagascar"> Madagascar <br>
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Malawi/", "$africa")) checked="" @endif value="Malawi"> Malawi <br>
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Sierra Leone/", "$africa")) checked="" @endif value="Sierra Leone"> Sierra Leone <br>
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Somalia/", "$africa")) checked="" @endif value="Somalia"> Somalia <br>
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Tunisia/", "$africa")) checked="" @endif value="Tunisia"> Tunisia <br>
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Uganda/", "$africa")) checked="" @endif value="Uganda"> Uganda <br>
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Western Sahara/", "$africa")) checked="" @endif value="Western Sahara"> Western Sahara <br>
<input type="checkbox" name="africa_country[]" class="africa_select"  @if (preg_match("/Mali/", "$africa")) checked="" @endif value="Mali"> Mali <br>
</div>
<div class="col-3">
<input type="checkbox" name="africa_country[]" class="africa_select"  @if (preg_match("/Mauritania/", "$africa")) checked="" @endif value="Mauritania"> Mauritania <br>

<input type="checkbox" name="africa_country[]" class="africa_select"  @if (preg_match("/Mauritius/", "$africa")) checked="" @endif value="Mauritius"> Mauritius <br>

<input type="checkbox" name="africa_country[]" class="africa_select"  @if (preg_match("/Mayotte/", "$africa")) checked="" @endif value="Mayotte"> Mayotte <br>

<input type="checkbox" name="africa_country[]" class="africa_select"  @if (preg_match("/Morocco/", "$africa")) checked="" @endif value="Morocco"> Morocco <br>

<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Mozambique/", "$africa")) checked="" @endif  value="Mozambique"> Mozambique <br>

<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Namibia/", "$africa")) checked="" @endif value="Namibia"> Namibia <br>
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Niger/", "$africa")) checked="" @endif value="Niger"> Niger <br>
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Nigeria/", "$africa")) checked="" @endif value="Nigeria"> Nigeria <br>
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Reunion/", "$africa")) checked="" @endif value="Reunion"> Reunion <br>
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Rwanda/", "$africa")) checked="" @endif value="Rwanda"> Rwanda <br>
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Saint Helena/", "$africa")) checked="" @endif value="Saint Helena"> Saint Helena <br>
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Sao Tome and Principe/", "$africa")) checked="" @endif value="Sao Tome and Principe"> Sao Tome and Principe <br>
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Senegal/", "$africa")) checked="" @endif value="Senegal"> Senegal <br>
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Seychelles/", "$africa")) checked="" @endif value="Seychelles"> Seychelles <br>
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Sierra Leone/", "$africa")) checked="" @endif value="Sierra Leone"> Sierra Leone <br>
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Somalia/", "$africa")) checked="" @endif value="Somalia"> Somalia <br>
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Tanzania/", "$africa")) checked="" @endif value="Tanzania"> Tanzania <br>
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Togo/", "$africa")) checked="" @endif value="Togo"> Togo <br>
<input type="checkbox" name="africa_country[]" class="africa_select" @if (preg_match("/Zimbabwe/", "$africa")) checked="" @endif value="Zimbabwe"> Zimbabwe <br>
</div>

</div>
</div>
</div>

</li><div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-4">
<label for=""> Antarctica</label>
</div>
<div class="col-8">

<div class="input-group">
: &nbsp &nbsp<input type="text" value="Antarctica" name="antarctica" class="allselects">
<div class="input-group-append">
<a href="javascript:;" id="antar">
<span class="fa fa-arrow-down arrows" id="downantar"></span>
          <span class="fa fa-arrow-up" id="upantar" style="display:none;padding-top:10px;margin-left:-20px;z-index: 1;
          position: absolute;"></span>

      </a>
</div>
</div>
<div id="Antarcticacity" style="display:none;">
<div class="row"  style="padding-top:5px;padding-bottom:10px;">
<div class="col-6">
<a href="javascript:;" onclick="antarctica_check()">Select All</a>
</div>
<div class="col-6">
<a href="javascript:;" onclick="antarctica_uncheck()">Clear All</a>
</div>
</div>

<div class="row">
<div class="col-5">
<input type="checkbox" name="antarctica_country[]" class="antarctica_select" @if (preg_match("/Bouvet Island/", "$antarctica")) checked="" @endif value="Bouvet Island"> Bouvet Island<br>
<input type="checkbox" name="antarctica_country[]" class="antarctica_select" @if (preg_match("/French Southern Territ/", "$antarctica")) checked="" @endif value="French Southern Territ"> French Southern Territ. <br>

</div>
<div class="col-5">
<input type="checkbox" name="antarctica_country[]" class="antarctica_select" @if (preg_match("/Heard Island/", "$antarctica")) checked="" @endif value="Heard Island"> Heard Island <br>
<input type="checkbox" name="antarctica_country[]" class="antarctica_select" @if (preg_match("/South Georgia/", "$antarctica")) checked="" @endif value="South Georgia"> South Georgia <br>

</div>

</div>
</div>
</div>
</li><div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-4">
<label for=""> Asia</label>
</div>
<div class="col-8">

<div class="input-group">
: &nbsp &nbsp<input type="text" value="Asia" name="asia" class="allselects">
<div class="input-group-append">
<a href="javascript:;" id="aisa">
<span class="fa fa-arrow-down arrows" id="downasia"></span>
<span class="fa fa-arrow-up" id="upasia" style="display:none;padding-top:10px;margin-left:-20px;z-index: 1;
          position: absolute;"></span>
</a>
</div>
</div>

<div id="aisacity" style="display:none;">
<div class="row"  style="padding-top:5px;padding-bottom:10px;">
<div class="col-4">
<a href="javascript:;" onclick="asia_check()">Select All</a>
</div>
<div class="col-6">
<a href="javascript:;" onclick="asia_uncheck()">Clear All</a>
</div>
</div>


<div class="row">
<div class="col-4">
<input type="checkbox" name="asia_country[]" class="asia_select" @if (preg_match("/Afghanistan/", "$asia")) checked="" @endif value="Afghanistan"> Afghanistan <br>
<input type="checkbox" name="asia_country[]" class="asia_select" @if (preg_match("/Armenia/", "$asia")) checked="" @endif value="Armenia"> Armenia <br>
<input type="checkbox" name="asia_country[]" class="asia_select" @if (preg_match("/Azerbaijan/", "$asia")) checked="" @endif value="Azerbaijan"> Azerbaijan <br>
<input type="checkbox" name="asia_country[]" class="asia_select" @if (preg_match("/Bahrain/", "$asia")) checked="" @endif value="Bahrain"> Bahrain <br>
<input type="checkbox" name="asia_country[]" class="asia_select" @if (preg_match("/Bangladesh/", "$asia")) checked="" @endif value="Bangladesh"> Bangladesh <br>
<input type="checkbox" name="asia_country[]" class="asia_select" @if (preg_match("/Bhutan/", "$asia")) checked="" @endif value="Bhutan"> Bhutan <br>
<input type="checkbox" name="asia_country[]" class="asia_select" @if (preg_match("/British Ind/", "$asia")) checked="" @endif value="British Ind"> British Ind.  <br>
<input type="checkbox" name="asia_country[]" class="asia_select" @if (preg_match("/Brunei Darussalam/", "$asia")) checked="" @endif value="Brunei Darussalam"> Brunei Darussalam <br>
<input type="checkbox" name="asia_country[]" class="asia_select" @if (preg_match("/Cambodia/", "$asia")) checked="" @endif value="Cambodia"> Cambodia <br>
<input type="checkbox" name="asia_country[]" class="asia_select" @if (preg_match("/China/", "$asia")) checked="" @endif value="China"> China <br>
<input type="checkbox" name="asia_country[]" class="asia_select" @if (preg_match("/Christmas Island/", "$asia")) checked="" @endif value="Christmas Island"> Christmas Island <br>
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Cocos/", "$asia")) checked="" @endif value="Cocos"> Cocos <br>
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Cyprus/", "$asia")) checked="" @endif value="Cyprus"> Cyprus <br>
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Georgia/", "$asia")) checked="" @endif value="Georgia"> Georgia <br>
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Hong Kong/", "$asia")) checked="" @endif value="Hong Kong"> Hong Kong <br>
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/India/", "$asia")) checked="" @endif value="India"> India <br>
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Indonesia/", "$asia")) checked="" @endif value="Indonesia"> Indonesia <br>
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Iran/", "$asia")) checked="" @endif value="Iran"> Iran <br>
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Iraq/", "$asia")) checked="" @endif value="Iraq"> Iraq <br>
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Israel/", "$asia")) checked="" @endif value="Israel"> Israel <br>

</div>
<div class="col-4">
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Japan/", "$asia")) checked="" @endif value="Japan"> Japan <br>
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Kazakhstan/", "$asia")) checked="" @endif value="Kazakhstan"> Kazakhstan <br>
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Korea, DPR/", "$asia")) checked="" @endif value="Korea, DPR"> Korea, DPR <br>
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Korea, Rep. of/", "$asia")) checked="" @endif value="Korea, Rep. of"> Korea, Rep. of <br>
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Kuwait/", "$asia")) checked="" @endif value="Kuwait"> Kuwait <br>
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Kyrgyz Republic/", "$asia")) checked="" @endif value="Kyrgyz Republic"> Kyrgyz Republic <br>
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Laos/", "$asia")) checked="" @endif value="Laos"> Laos <br>
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Lebanon/", "$asia")) checked="" @endif value="Lebanon"> Lebanon <br>
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Macao/", "$asia")) checked="" @endif value="Macao"> Macao <br>
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Malaysia/", "$asia")) checked="" @endif value="Malaysia"> Malaysia <br>
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Maldives/", "$asia")) checked="" @endif value="Maldives"> Maldives <br>

<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Myanmar/", "$asia")) checked="" @endif value="Myanmar"> Myanmar <br>
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Nepal/", "$asia")) checked="" @endif value="Nepal"> Nepal <br>
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Oman/", "$asia")) checked="" @endif value="Oman"> Oman <br>
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Pakistan/", "$asia")) checked="" @endif value="Pakistan"> Pakistan <br>
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Palestine/", "$asia")) checked="" @endif value="Palestine"> Palestine <br>
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Philippines/", "$asia")) checked="" @endif value="Philippines"> Philippines <br>
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Qatar/", "$antarctica")) checked="" @endif value="Qatar"> Qatar <br>
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Saudi Arabia/", "$asia")) checked="" @endif value="Saudi Arabia"> Saudi Arabia <br>
</div>
<div class="col-3">
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Singapore/", "$asia")) checked="" @endif value="Singapore"> Singapore <br>
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Sri Lanka/", "$asia")) checked="" @endif value="Sri Lanka"> Sri Lanka <br>
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Syria/", "$asia")) checked="" @endif value="Syria"> Syria <br>
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Taiwan/", "$asia")) checked="" @endif value="Taiwan"> Taiwan <br>
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Tajikistan/", "$asia")) checked="" @endif value="Tajikistan"> Tajikistan <br>
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Thailand/", "$asia")) checked="" @endif value="Thailand"> Thailand <br>
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Timor-Leste/", "$asia")) checked="" @endif value="Timor-Leste"> Timor-Leste <br>
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Turkey/", "$asia")) checked="" @endif value="Turkey"> Turkey <br>
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Turkmenistan/", "$asia")) checked="" @endif value="Turkmenistan"> Turkmenistan <br>
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/United Arab/", "$asia")) checked="" @endif value="United Arab Emirates"> United Arab Emirates <br>
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Uzbekistan/", "$asia")) checked="" @endif value="Uzbekistan"> Uzbekistan <br>
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Vietnam/", "$asia")) checked="" @endif value="Vietnam"> Vietnam<br>
<input type="checkbox" name="asia_country[]" class="asia_select"  @if (preg_match("/Yemen/", "$asia")) checked="" @endif value="Yemen"> Yemen <br>

</div>

</div>
</div>
</div>

</li><div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-4">
<label for=""> Europe</label>
</div>
<div class="col-8">

<div class="input-group">
: &nbsp &nbsp<input type="text" value="Europe" name="europe" class="allselects">
<div class="input-group-append">
<a href="javascript:;" id="europ">
<span class="fa fa-arrow-down arrows" id="downeurop"></span>
<span class="fa fa-arrow-up" id="upeurop" style="display:none;padding-top:10px;margin-left:-20px;z-index: 1;
          position: absolute;"></span>
      </a>
</div>
</div>

<div id="europcity" style="display:none;">
<div class="row"  style="padding-top:5px;padding-bottom:10px;">
<div class="col-4">
<a href="javascript:;" onclick="europ_check()">Select All</a>
</div>
<div class="col-6">
<a href="javascript:;" onclick="europ_uncheck()">Clear All</a>
</div>
</div>


<div class="row">
<div class="col-4">
<input type="checkbox" name="europe_country[]" class="europ_select" value="Aland Islands"> Aland Islands <br>
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Albania/", "$europe")) checked="" @endif value="Albania"> Albania <br>
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Andorra/", "$europe")) checked="" @endif value="Andorra"> Andorra <br>
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Austria/", "$europe")) checked="" @endif value="Austria"> Austria <br>
<input type="checkbox" name="europe_country[]" class="europ_select" @if (preg_match("/Belarus/", "$europe")) checked="" @endif value="Belarus"> Belarus <br>
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Belgium/", "$europe")) checked="" @endif value="Belgium"> Belgium <br>
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Bosnia and Herzegovina/", "$europe")) checked="" @endif value="Bosnia and Herzegovina"> Bosnia and Herzegovina <br>
<input type="checkbox" name="europe_country[]" class="europ_select" @if (preg_match("/Bulgaria/", "$europe")) checked="" @endif value="Bulgaria"> Bulgaria <br>
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Croatia/", "$europe")) checked="" @endif value="Croatia"> Croatia <br>
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Czech Republic/", "$europe")) checked="" @endif value="Czech Republic"> Czech Republic <br>
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Denmark/", "$europe")) checked="" @endif value="Denmark"> Denmark <br>
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Estonia/", "$europe")) checked="" @endif value="Estonia"> Estonia <br>
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Faroe Islands/", "$europe")) checked="" @endif value="Faroe Islands"> Faroe Islands <br>
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Finland/", "$europe")) checked="" @endif value="Finland"> Finland <br>
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Yemen/", "$europe")) checked="" @endif value="France"> France <br>
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Germany/", "$europe")) checked="" @endif value="Germany"> Germany <br>
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Gibraltar/", "$europe")) checked="" @endif value="Gibraltar"> Gibraltar <br>
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Greece/", "$europe")) checked="" @endif value="Greece"> Greece <br>
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Guernsey/", "$europe")) checked="" @endif value="Guernsey"> Guernsey <br>
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Hungary/", "$europe")) checked="" @endif value="Hungary"> Hungary <br>

</div>
<div class="col-4">
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Iceland/", "$europe")) checked="" @endif value="Iceland"> Iceland <br>
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Ireland/", "$europe")) checked="" @endif value="Ireland"> Ireland <br>
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Isle of Man/", "$europe")) checked="" @endif value="Isle of Man"> Isle of Man <br>
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Italy/", "$europe")) checked="" @endif value="Italy"> Italy <br>
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Jersey/", "$europe")) checked="" @endif value="Jersey"> Jersey <br>
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Kosovo/", "$europe")) checked="" @endif value="Kosovo"> Kosovo <br>
<input type="checkbox" name="europe_country[]" class="europ_select" value="Latvia"> Latvia <br>
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Liechtenstein/", "$europe")) checked="" @endif value="Liechtenstein"> Liechtenstein <br>
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Lithuania/", "$europe")) checked="" @endif value="Lithuania"> Lithuania <br>
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Luxembourg/", "$europe")) checked="" @endif value="Luxembourg"> Luxembourg <br>
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Macedonia/", "$europe")) checked="" @endif value="Macedonia"> Macedonia <br>
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Malta/", "$europe")) checked="" @endif value="Malta"> Malta <br>
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Monaco/", "$europe")) checked="" @endif value="Monaco"> Monaco <br>
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Montenegro/", "$europe")) checked="" @endif value="Montenegro"> Montenegro <br>
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Netherlands/", "$europe")) checked="" @endif value="Netherlands"> Netherlands <br>
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Norway/", "$europe")) checked="" @endif  value="Norway"> Norway <br>
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Poland/", "$europe")) checked="" @endif  value="Poland"> Poland <br>
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Portugal/", "$europe")) checked="" @endif  value="Portugal"> Portugal <br>
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Romania/", "$europe")) checked="" @endif  value="Romania"> Romania <br>
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Russian Federation/", "$europe")) checked="" @endif  value="Russian Federation">Russian Federation<br>
</div>
<div class="col-3">
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/San Marino/", "$europe")) checked="" @endif value="San Marino"> San Marino <br>
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Serbia/", "$europe")) checked="" @endif value="Serbia"> Serbia <br>
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Slovakia/", "$europe")) checked="" @endif value="Slovakia"> Slovakia <br>
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Slovenia/", "$europe")) checked="" @endif value="Slovenia"> Slovenia <br>
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Spain/", "$europe")) checked="" @endif value="Spain"> Spain <br>
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Svalbard and Jan Mayen/", "$europe")) checked="" @endif value="Svalbard and Jan Mayen"> Svalbard and Jan Mayen Is <br>
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Sweden/", "$europe")) checked="" @endif value="Sweden"> Sweden <br>

<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Ukraine/", "$europe")) checked="" @endif value="Ukraine"> Ukraine <br>
<input type="checkbox" name="europe_country[]" class="europ_select" @if (preg_match("/United Kingdom/", "$europe")) checked="" @endif value="United Kingdom"> United Kingdom<br>
<input type="checkbox" name="europe_country[]" class="europ_select" @if(preg_match("/Vatican City/", "$europe")) checked="" @endif value="Vatican City"> Vatican City <br>
          
</div>

</div>
</div>
</div>

</li><div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-4">
<label for=""> North America</label>
</div>
<div class="col-8">

<div class="input-group">
: &nbsp &nbsp<input type="text" value="North America" name="north_america" class="allselects">
<div class="input-group-append">
<a href="javascript:;" id="namrica">
<span class="fa fa-arrow-down arrows" id="downnotamr"></span>
<span class="fa fa-arrow-up" id="upnotamr" style="display:none;padding-top:10px;margin-left:-20px;z-index: 1;
          position: absolute;"></span>
      </a>
</div>
</div>

<div id="namricacity" style="display:none;">
<div class="row"  style="padding-top:5px;padding-bottom:10px;">
<div class="col-6">
<a href="javascript:;" onclick="north_america_check()">Select All</a>
</div>
<div class="col-6">
<a href="javascript:;" onclick="north_america_uncheck()">Clear All</a>
</div>
</div>


<div class="row">
<div class="col-4">
<input type="checkbox" name="north_america_country[]" class="north_select" @if(preg_match("/Anguilla/", "$north_america")) checked="" @endif value="Anguilla"> Anguilla <br>
<input type="checkbox" name="north_america_country[]" class="north_select" @if(preg_match("/Antigua and Barbuda/", "$north_america")) checked="" @endif value="Antigua and Barbuda"> Antigua and Barbuda <br>
<input type="checkbox" name="north_america_country[]" class="north_select" @if(preg_match("/Aruba/", "$north_america")) checked="" @endif value="Aruba"> Aruba <br>
<input type="checkbox" name="north_america_country[]" class="north_select" @if(preg_match("/Bahamas/", "$north_america")) checked="" @endif value="Bahamas"> Bahamas <br>
<input type="checkbox" name="north_america_country[]" class="north_select" @if(preg_match("/Barbados/", "$north_america")) checked="" @endif value="Barbados"> Barbados <br>
<input type="checkbox" name="north_america_country[]" class="north_select" @if(preg_match("/Belize/", "$north_america")) checked="" @endif value="Belize"> Belize <br>
<input type="checkbox" name="north_america_country[]" class="north_select" @if(preg_match("/Bermuda/", "$north_america")) checked="" @endif value="Bermuda"> Bermuda <br>
<input type="checkbox" name="north_america_country[]" class="north_select" @if(preg_match("/British Virgin Islands/", "$north_america")) checked="" @endif value="British Virgin Islands"> British Virgin Islands <br>
<input type="checkbox" name="north_america_country[]" class="north_select" @if(preg_match("/Canada/", "$north_america")) checked="" @endif value="Canada"> Canada <br>
<input type="checkbox" name="north_america_country[]" class="north_select" @if(preg_match("/Cayman Islands/", "$north_america")) checked="" @endif value="Cayman Islands"> Cayman Islands <br>
<input type="checkbox" name="north_america_country[]" class="north_select" @if(preg_match("/Costa Rica/", "$north_america")) checked="" @endif value="Costa Rica"> Costa Rica <br>
<input type="checkbox" name="north_america_country[]" class="north_select"  @if(preg_match("/Cuba/", "$north_america")) checked="" @endif value="Cuba"> Cuba <br>
<input type="checkbox" name="north_america_country[]" class="north_select"  @if(preg_match("/Dominica/", "$north_america")) checked="" @endif value="Dominica"> Dominica <br>
<input type="checkbox" name="north_america_country[]" class="north_select"  @if(preg_match("/El Salvador/", "$north_america")) checked="" @endif value="El Salvador"> El Salvador <br>
<input type="checkbox" name="north_america_country[]" class="north_select"  @if(preg_match("/Greenland/", "$north_america")) checked="" @endif value="Greenland"> Greenland <br>
<input type="checkbox" name="north_america_country[]" class="north_select"  @if(preg_match("/Grenada/", "$north_america")) checked="" @endif value="Grenada"> Grenada <br>
<input type="checkbox" name="north_america_country[]" class="north_select"  @if(preg_match("/Guadeloupe/", "$north_america")) checked="" @endif value="Guadeloupe"> Guadeloupe <br>
<input type="checkbox" name="north_america_country[]" class="north_select"  @if(preg_match("/Guatemala/", "$north_america")) checked="" @endif value="Guatemala"> Guatemala <br>
<input type="checkbox" name="north_america_country[]" class="north_select"  @if(preg_match("/Haiti/", "$north_america")) checked="" @endif value="Haiti"> Haiti <br>
<input type="checkbox" name="north_america_country[]" class="north_select"  @if(preg_match("/Honduras/", "$north_america")) checked="" @endif value="Honduras"> Honduras <br>

</div>
<div class="col-4">
<input type="checkbox" name="north_america_country[]" class="north_select"   @if(preg_match("/Jamaica/", "$north_america")) checked="" @endif value="Jamaica"> Jamaica <br>
<input type="checkbox" name="north_america_country[]" class="north_select"   @if(preg_match("/Martinique/", "$north_america")) checked="" @endif value="Martinique"> Martinique <br>
<input type="checkbox" name="north_america_country[]" class="north_select"   @if(preg_match("/Mexico/", "$north_america")) checked="" @endif value="Mexico"> Mexico <br>
<input type="checkbox" name="north_america_country[]" class="north_select"   @if(preg_match("/Montserrat/", "$north_america")) checked="" @endif value="Montserrat"> Montserrat <br>
<input type="checkbox" name="north_america_country[]" class="north_select"   @if(preg_match("/Netherlands/", "$north_america")) checked="" @endif value="Netherlands"> Netherlands Antilles <br>
<input type="checkbox" name="north_america_country[]" class="north_select"   @if(preg_match("/Nicaragua/", "$north_america")) checked="" @endif value="Nicaragua"> Nicaragua <br>
<input type="checkbox" name="north_america_country[]" class="north_select"   @if(preg_match("/Panama/", "$north_america")) checked="" @endif value="Panama"> Panama <br>
<input type="checkbox" name="north_america_country[]" class="north_select"   @if(preg_match("/Puerto Rico/", "$north_america")) checked="" @endif value="Puerto Rico"> Puerto Rico <br>
<input type="checkbox" name="north_america_country[]" class="north_select"  @if(preg_match("/Saint/", "$north_america")) checked="" @endif  value="Saint"> Saint Barthelemy <br>
<input type="checkbox" name="north_america_country[]" class="north_select"   @if(preg_match("/Saint Kitts and Nevis/", "$north_america")) checked="" @endif value="Saint Kitts and Nevis"> Saint Kitts and Nevis <br>
<input type="checkbox" name="north_america_country[]" class="north_select"   @if(preg_match("/Saint Lucia/", "$north_america")) checked="" @endif value="Saint Lucia"> Saint Lucia <br>
<input type="checkbox" name="north_america_country[]" class="north_select"   @if(preg_match("/Saint Martin/", "$north_america")) checked="" @endif value="Saint Martin"> Saint Martin <br>
<input type="checkbox" name="north_america_country[]" class="north_select"   @if(preg_match("/Saint Pierre and Miquelon/", "$north_america")) checked="" @endif value="Saint Pierre and Miquelon"> Saint Pierre and Miquelon <br>
<input type="checkbox" name="north_america_country[]" class="north_select"   @if(preg_match("/St Vincent and Grenadines/", "$north_america")) checked="" @endif value="St Vincent and Grenadines"> St Vincent and Grenadines <br>
<input type="checkbox" name="north_america_country[]" class="north_select"  @if(preg_match("/Trinidad and Tobago/", "$north_america")) checked="" @endif  value="Trinidad and Tobago"> Trinidad and Tobago <br>

</div>
<div class="col-3">
<input type="checkbox" name="north_america_country[]" class="north_select" @if(preg_match("/Turks and Caicos Is/", "$north_america")) checked="" @endif value="Turks and Caicos Is"> Turks and Caicos Is <br>
<input type="checkbox" name="north_america_country[]" class="north_select" @if(preg_match("/US Virgin Islands/", "$north_america")) checked="" @endif value="US Virgin Islands"> US Virgin Islands <br>
<input type="checkbox" name="north_america_country[]" class="north_select" @if(preg_match("/Portugal/", "$north_america")) checked="" @endif value="Portugal"> Portugal <br>
<input type="checkbox" name="north_america_country[]" class="north_select" @if(preg_match("/Romania/", "$north_america")) checked="" @endif value="Romania"> Romania <br>
<input type="checkbox" name="north_america_country[]" class="north_select" @if(preg_match("/USA/", "$north_america")) checked="" @endif value="USA"> USA<br>
          
</div>

</div>
</div>
</div>

</li><div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-4">
<label for=""> Australasia</label>
</div>
<div class="col-8">

<div class="input-group">
: &nbsp &nbsp<input type="text" value="Australasia" name="australasia" class="allselects">
<div class="input-group-append">
<a href="javascript:;" id="austrailia">
<span class="fa fa-arrow-down arrows" id="downaurt"></span>
<span class="fa fa-arrow-up" id="upaust" style="display:none;padding-top:10px;margin-left:-20px;z-index: 1;
          position: absolute;"></span>
      </a>
</div>
</div>

<div id="austrailiacity" style="display:none;">
<div class="row"  style="padding-top:5px;padding-bottom:10px;">
<div class="col-6">
<a href="javascript:;" onclick="australasia_check()">Select All</a>
</div>
<div class="col-6">
<a href="javascript:;" onclick="australasia_uncheck()">Clear All</a>
</div>
</div>


<div class="row">
<div class="col-4">
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/American Samoa/", "$australasia")) checked="" @endif value="American Samoa"> American Samoa <br>
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/Australia/", "$australasia")) checked="" @endif value="Australia"> Australia <br>
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/Cook Islands/", "$australasia")) checked="" @endif value="Cook Islands"> Cook Islands <br>
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/Fiji/", "$australasia")) checked="" @endif value="Fiji"> Fiji <br>
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/French Polynesia/", "$australasia")) checked="" @endif value="French Polynesia"> French Polynesia <br>
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/Guam/", "$australasia")) checked="" @endif value="Guam"> Guam <br>
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/Kiribati/", "$australasia")) checked="" @endif value="Kiribati"> Kiribati <br>
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/Marshall Islands/", "$australasia")) checked="" @endif value="Marshall Islands"> Marshall Islands <br>
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/Micronesia/", "$australasia")) checked="" @endif value="Micronesia"> Micronesia <br>
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/Nauru/", "$australasia")) checked="" @endif value="Nauru"> Nauru <br>
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/New Caledonia/", "$australasia")) checked="" @endif value="New Caledonia"> New Caledonia <br>
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/New Zealand/", "$australasia")) checked="" @endif value="New Zealand"> New Zealand <br>
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/Niue/", "$australasia")) checked="" @endif value="Niue"> Niue <br>
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/Norfolk Island/", "$australasia")) checked="" @endif value="Norfolk Island"> Norfolk Island <br>
          
</div>
<div class="col-4">
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/Northern Mariana/", "$australasia")) checked="" @endif value="Northern Mariana"> Northern Mariana Is <br>
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/Palau/", "$australasia")) checked="" @endif value="Palau"> Palau <br>
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/Papua New Guinea/", "$australasia")) checked="" @endif value="Papua New Guinea"> Papua New Guinea <br>
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/Pitcairn Islands/", "$australasia")) checked="" @endif value="Pitcairn Islands"> Pitcairn Islands <br>
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/Samoa/", "$australasia")) checked="" @endif value="Samoa"> Samoa <br>
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/Solomon Islands/", "$australasia")) checked="" @endif value="Solomon Islands"> Solomon Islands <br>
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/Tokelau/", "$australasia")) checked="" @endif value="Tokelau"> Tokelau <br>
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/Tonga/", "$australasia")) checked="" @endif value="Tonga"> Tonga <br>
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/Tuvalu/", "$australasia")) checked="" @endif value="Tuvalu"> Tuvalu <br>
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/US Minor Outlying I/", "$australasia")) checked="" @endif value="US Minor Outlying I">US Minor Outlying I<br>
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/Vanuatu/", "$australasia")) checked="" @endif value="Vanuatu"> Vanuatu <br>
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/Wallis and Futuna/", "$australasia")) checked="" @endif value="Wallis and Futuna"> Wallis and Futuna<br>
          
</div>
<div class="col-3">
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/Turks and Caicos Is/", "$australasia")) checked="" @endif value="Turks and Caicos Is"> Turks and Caicos Is <br>
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/US Virgin Islands/", "$australasia")) checked="" @endif value="US Virgin Islands"> US Virgin Islands <br>
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/Portugal/", "$australasia")) checked="" @endif value="Portugal"> Portugal <br>
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/Romania/", "$australasia")) checked="" @endif value="Romania"> Romania <br>
<input type="checkbox" name="australasia_country[]" class="austra_select" @if(preg_match("/USA/", "$australasia")) checked="" @endif value="USA"> USA<br>
          
</div>

</div>
</div>
</div>

</li><div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-4">
<label for=""> South America</label>
</div>
<div class="col-8">

<div class="input-group">
: &nbsp &nbsp<input type="text" value="South America" name="south_america" class="allselects">
<div class="input-group-append">
<a href="javascript:;" id="southafric">
<span class="fa fa-arrow-down arrows" id="downsouamr"></span>
<span class="fa fa-arrow-up" id="upsouthamar" style="display:none;padding-top:10px;margin-left:-20px;z-index: 1;
          position: absolute;"></span>
      </a>
</div>
</div>

<div id="southafriccity" style="display:none;">
<div class="row"  style="padding-top:5px;padding-bottom:10px;">
<div class="col-6">
<a href="javascript:;" onclick="south_america()">Select All</a>
</div>
<div class="col-6">
<a href="javascript:;" onclick="south_unamerica()">Clear All</a>
</div>
</div>


<div class="row">
<div class="col-4">
<input type="checkbox" name="south_america_country[]" class="south_select" @if(preg_match("/Argentina/", "$south_america")) checked="" @endif value="Argentina"> Argentina <br>
<input type="checkbox" name="south_america_country[]" class="south_select" @if(preg_match("/Bolivia/", "$south_america")) checked="" @endif value="Bolivia"> Bolivia <br>
<input type="checkbox" name="south_america_country[]" class="south_select" @if(preg_match("/Brazil/", "$south_america")) checked="" @endif value="Brazil"> Brazil <br>
<input type="checkbox" name="south_america_country[]" class="south_select" @if(preg_match("/Chile/", "$south_america")) checked="" @endif value="Chile"> Chile <br>
<input type="checkbox" name="south_america_country[]" class="south_select" @if(preg_match("/Colombia/", "$south_america")) checked="" @endif value="Colombia"> Colombia <br>
<input type="checkbox" name="south_america_country[]" class="south_select" @if(preg_match("/Ecuador/", "$south_america")) checked="" @endif value="Ecuador"> Ecuador <br>
                                
</div>
<div class="col-4">
<input type="checkbox" name="south_america_country[]" class="south_select" @if(preg_match("/Falkland Islands/", "$south_america")) checked="" @endif value="Falkland Islands">Falkland Islands <br>
<input type="checkbox" name="south_america_country[]" class="south_select" @if(preg_match("/French Guiana/", "$south_america")) checked="" @endif value="French Guiana"> French Guiana <br>
<input type="checkbox" name="south_america_country[]" class="south_select" @if(preg_match("/Guyana/", "$south_america")) checked="" @endif value="Guyana"> Guyana <br>
<input type="checkbox" name="south_america_country[]" class="south_select" @if(preg_match("/Paraguay/", "$south_america")) checked="" @endif value="Paraguay"> Paraguay <br>
<input type="checkbox" name="south_america_country[]" class="south_select" @if(preg_match("/Peru/", "$south_america")) checked="" @endif value="Peru"> Peru <br>
<input type="checkbox" name="south_america_country[]" class="south_select" @if(preg_match("/Suriname/", "$south_america")) checked="" @endif value="Suriname"> Suriname <br>
                                
</div>
<div class="col-3">
<input type="checkbox" name="south_america_country[]" class="south_select" @if(preg_match("/Uruguay/", "$south_america")) checked="" @endif  value="Uruguay"> Uruguay <br>
<input type="checkbox" name="south_america_country[]" class="south_select" @if(preg_match("/Venezuela/", "$south_america")) checked="" @endif  value="Venezuela"> Venezuela<br>
                                
</div>

</div>
</div>
</div>

</li><div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-4">
<label for=""> Residency Status</label>
</div>
<div class="col-8">

<div class="input-group">

: &nbsp &nbsp<input type="text" value="Residency Status" name="loking_residency_status" class="allselects">
<div class="input-group-append">
<a href="javascript:;" id="residance">
<span class="fa fa-arrow-down arrows" id="downressta"></span>
<span class="fa fa-arrow-up" id="upressta" style="display:none;padding-top:10px;margin-left:-20px;z-index: 1;
          position: absolute;"></span>
      </a>
</div>
</div>

<div id="residancecity" style="display:none;">
<div class="row"  style="padding-top:5px;padding-bottom:10px;">
<div class="col-4">
<a href="javascript:;" onclick="residency_check()">Select All</a>
</div>
<div class="col-6">
<a href="javascript:;" onclick="resdency_unchek()">Clear All</a>
</div>
</div>


<div class="row">
<div class="col-4">
<input type="checkbox" name="residency_name[]" class="resdency_select" @if(preg_match("/Citizen/", "$residency_status")) checked="" @endif value="Citizen"> Citizen <br>
<input type="checkbox" name="residency_name[]" class="resdency_select" @if(preg_match("/Permanent Resident/", "$residency_status")) checked="" @endif value="Permanent Resident"> Permanent Resident <br>
<input type="checkbox" name="residency_name[]" class="resdency_select" @if(preg_match("/Student Visa/", "$residency_status")) checked="" @endif value="Student Visa"> Student Visa <br>
                                                      
</div>
<div class="col-4">
<input type="checkbox" name="residency_name[]" class="resdency_select" @if(preg_match("/Temporary Visa/", "$residency_status")) checked="" @endif value="Temporary Visa"> Temporary Visa <br>
<input type="checkbox" name="residency_name[]" class="resdency_select" @if(preg_match("/Work Permit/", "$residency_status")) checked="" @endif value="Work Permit"> Work Permit <br>
<input type="checkbox" name="residency_name[]" class="resdency_select" @if(preg_match("/Other/", "$residency_status")) checked="" @endif value="Other"> Other <br>

                                
</div>


</div>
</div>
</div>


</li><div class="btpad"></div>
<li class="row" class="listtopmarg">
<div class="col-4">
<label for=""> Ethnic Origin </label>
</div>
<div class="col-8">

<div class="input-group">
: &nbsp &nbsp<input type="text" value="Ethnic Origin" name="loking_ethnic_origin" class="allselects">
<div class="input-group-append">
<a href="javascript:;" id="ethnicorg">
<span class="fa fa-arrow-down arrows" id="downethnorg"></span>
<span class="fa fa-arrow-up" id="upethnorg" style="display:none;padding-top:10px;margin-left:-20px;z-index: 1;
          position: absolute;"></span>
      </a>
</div>
</div>

<div id="ethnicorgpro" style="display:none;">
<div class="row"  style="padding-top:5px;padding-bottom:10px;">
<div class="col-4">
<a href="javascript:;" onclick="ethic_check()">Select All</a>
</div>
<div class="col-6">
<a href="javascript:;" onclick="ethic_uncheck()">Clear All</a>
</div>
</div>


<div class="row">
<div class="col-4">
<input type="checkbox" name="origin_name[]" class="ethnic_select"  @if(preg_match("/Algerian/", "$ethnic_origin")) checked="" @endif value="Algerian"> Algerian <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select"  @if(preg_match("/Arab/", "$ethnic_origin")) checked="" @endif value="Arab"> Arab <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select"  @if(preg_match("/Carribean/", "$ethnic_origin")) checked="" @endif value="Carribean"> Carribean <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select"  @if(preg_match("/Algerian/", "$ethnic_origin")) checked="" @endif value="Algerian"> Algerian <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select"  @if(preg_match("/Turkish/", "$ethnic_origin")) checked="" @endif value="Turkish"> Turkish <br>
Asian <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select"  @if(preg_match("/Asian - Afghan/", "$ethnic_origin")) checked="" @endif value="Asian - Afghan"> Asian - Afghan <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select"  @if(preg_match("/Asian - Bangladeshi/", "$ethnic_origin")) checked="" @endif value="Asian - Bangladeshi"> Asian - Bangladeshi <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select"  @if(preg_match("/Asian - Chinese/", "$ethnic_origin")) checked="" @endif value="Asian - Chinese"> Asian - Chinese <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select"  @if(preg_match("/Asian - Filipino/", "$ethnic_origin")) checked="" @endif value="Asian - Filipino"> Asian - Filipino <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select"  @if(preg_match("/Asian - Indian/", "$ethnic_origin")) checked="" @endif value="Asian - Indian"> Asian - Indian <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select"  @if(preg_match("/Asian - Indonesian/", "$ethnic_origin")) checked="" @endif value="Asian - Indonesian"> Asian - Indonesian <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select"  @if(preg_match("/Asian - Kurdish/", "$ethnic_origin")) checked="" @endif value="Asian - Kurdish"> Asian - Kurdish <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select"  @if(preg_match("/Asian - Kyrgyz/", "$ethnic_origin")) checked="" @endif value="Asian - Kyrgyz"> Asian - Kyrgyz <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select" > Asian - Malay <br>
                                                      
</div>
<div class="col-4">
<input type="checkbox" name="origin_name[]" class="ethnic_select"  @if(preg_match("/Asian - Maldives/", "$ethnic_origin")) checked="" @endif value="Asian - Maldives"> Asian - Maldives <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select"  @if(preg_match("/Asian - Pakistani/", "$ethnic_origin")) checked="" @endif value="Asian - Pakistani"> Asian - Pakistani <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select"  @if(preg_match("/Asian - Sri Lankan/", "$ethnic_origin")) checked="" @endif value="Asian - Sri Lankan"> Asian - Sri Lankan <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select"  @if(preg_match("/Asian - Other Background/", "$ethnic_origin")) checked="" @endif value="Asian - Other Background"> Asian - Other Background <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select"  @if(preg_match("/Indian Carribean/", "$ethnic_origin")) checked="" @endif value="Indian Carribean <br>
White"> Indian Carribean <br>
White <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select"  @if(preg_match("/White - American/", "$ethnic_origin")) checked="" @endif value="White - American"> White - American <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select"  @if(preg_match("/White - Australian/", "$ethnic_origin")) checked="" @endif value="White - Australian"> White - Australian <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select"  @if(preg_match("/White - Canadian/", "$ethnic_origin")) checked="" @endif value="White - Canadian"> White - Canadian <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select"  @if(preg_match("/White - Hispanic/", "$ethnic_origin")) checked="" @endif value="White - Hispanic"> White - Hispanic <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select"  @if(preg_match("/White - Other Background/", "$ethnic_origin")) checked="" @endif value="White - Other Background"> White - Other Background <br>
Black <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select"  @if(preg_match("/Black - African/", "$ethnic_origin")) checked="" @endif value="Black - African"> Black - African <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select"  @if(preg_match("/Black - American/", "$ethnic_origin")) checked="" @endif value="Black - American"> Black - American <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select"  @if(preg_match("/Black - British/", "$ethnic_origin")) checked="" @endif value="Black - British"> Black - British <br>

                                
</div>
<div class="col-3">
<input type="checkbox" name="origin_name[]" class="ethnic_select"  @if(preg_match("/Black - Caribbean/", "$ethnic_origin")) checked="" @endif value="Black - Caribbean"> Black - Caribbean <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select"  @if(preg_match("/Black - Ethiopian/", "$ethnic_origin")) checked="" @endif value="Black - Ethiopian"> Black - Ethiopian <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select"  @if(preg_match("/Black - Somali/", "$ethnic_origin")) checked="" @endif value="Black - Somali"> Black - Somali <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select"  @if(preg_match("/Black - Other Background/", "$ethnic_origin")) checked="" @endif value="Black - Other Background"> Black - Other Background <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select"  @if(preg_match("/Mauritian/", "$ethnic_origin")) checked="" @endif value="Mauritian"> Mauritian <br>
Other Ethnic Group <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select"  @if(preg_match("/Albanian/", "$ethnic_origin")) checked="" @endif value="Albanian"> Albanian <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select"  @if(preg_match("/Bosnian/", "$ethnic_origin")) checked="" @endif value="Bosnian"> Bosnian <br>
<input type="checkbox" name="origin_name[]" class="ethnic_select"  @if(preg_match("/Other Ethnicity/", "$ethnic_origin")) checked="" @endif value="Other Ethnicity"> Other Ethnicity <br>
        
                                
</div>


</div>
</div>
</div>

</li><div class="btpad"></div>

</li><div class="btpad"></div>



<li class="row" class="listtopmarg">
<div class="well" style="width:95%;background-color:#F2F2F2;box-shadow:none;border:1px solid #E6E6E6">
<div class="col-12">
<label for="" style="padding-top:5px;font-weight:bold;">My Preferences</label>
</div>
</div>

</li><div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-4">
<label for=""> Religious History </label>
</div>
<div class="col-8">

<div class="input-group">
: &nbsp &nbsp<input type="text" value="Religious History" name="religious_history" class="allselects">
<div class="input-group-append">
<a href="javascript:;" id="releghist">
<span class="fa fa-arrow-down arrows" id="downrehis"></span>
<span class="fa fa-arrow-up" id="upreghis" style="display:none;padding-top:10px;margin-left:-20px;z-index: 1;
          position: absolute;"></span>
      </a>
</div>
</div>

<div id="releghistpro" style="display:none;">
<div class="row"  style="padding-top:5px;padding-bottom:10px;">
<div class="col-4">
<a href="javascript:;" onclick="history_check()">Select All</a>
</div>
<div class="col-6">
<a href="javascript:;" onclick="history_uncheck()">Clear All</a>
</div>
</div>


<div class="row">
<div class="col-4">
<input type="checkbox" name="rel_history[]" class="history_select" @if(preg_match("/Muslim Since Birth/", "$religious_history")) checked="" @endif value="Muslim Since Birth"> Muslim Since Birth<br>
<input type="checkbox" name="rel_history[]" class="history_select" @if(preg_match("/Revert Muslim/", "$religious_history")) checked="" @endif value="Revert Muslim"> Revert Muslim<br>         
</div>
  

</div>
</div>
</div>

</li><div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-4">
<label for=""> Living with her in-laws </label>
</div>
<div class="col-8">

<div class="input-group">
: &nbsp &nbsp<input type="text" value="Living with" name="living_with" class="allselects">
<div class="input-group-append">
<a href="javascript:;" id="livelaws">
<span class="fa fa-arrow-down arrows" id="downlivlaws"></span>
<span class="fa fa-arrow-up" id="uplivlaws" style="display:none;padding-top:10px;margin-left:-20px;z-index: 1;
          position: absolute;"></span>
      </a>
</div>
</div>

<div id="livelawspro" style="display:none;">
<div class="row"  style="padding-top:5px;padding-bottom:10px;">
<div class="col-4">
<a href="javascript:;" onclick="living_check()">Select All</a>
</div>
<div class="col-6">
<a href="javascript:;" onclick="living_uncheck()">Clear All</a>
</div>
</div>


<div class="row">
<div class="col-6">
<input type="checkbox" name="living_law[]" class="living_select"  @if(preg_match("/Definitely Consider/", "$living_with")) checked="" @endif value="Definitely Consider"> Definitely Consider<br>
<input type="checkbox" name="living_law[]" class="living_select"  @if(preg_match("/May Consider/", "$living_with")) checked="" @endif value="May Consider"> May Consider<br>
<input type="checkbox" name="living_law[]" class="living_select"  @if(preg_match("/Would not Consider/", "$living_with")) checked="" @endif value="Would not Consider"> Would not Consider<br>
</div>
  

</div>
</div>
</div>

</li><div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-4">
<label for=""> What Sect are you looking for? </label>
</div>
<div class="col-8">

<div class="input-group">
: &nbsp &nbsp<input type="text" value="Sects" name="loking_sects" class="allselects">
<div class="input-group-append">
<a href="javascript:;" id="sectlook">
<span class="fa fa-arrow-down arrows" id="downsect"></span>
<span class="fa fa-arrow-up" id="upsect" style="display:none;padding-top:10px;margin-left:-20px;z-index: 1;
          position: absolute;"></span>
      </a>
</div>
</div>

<div id="sectlookpro" style="display:none;">
<div class="row"  style="padding-top:5px;padding-bottom:10px;">
<div class="col-4">
<a href="javascript:;" onclick="sect_check()">Select All</a>
</div>
<div class="col-6">
<a href="javascript:;" onclick="sect_uncheck()">Clear All</a>
</div>
</div>

<div class="row">
<div class="col-4">
<input type="checkbox" name="sects_type[]" class="sect_select"  @if(preg_match("/just Muslim/", "$sects")) checked="" @endif value="just Muslim"> just Muslim<br>
<input type="checkbox" name="sects_type[]" class="sect_select"  @if(preg_match("/Sunni Muslim/", "$sects")) checked="" @endif value="Sunni Muslim"> Sunni Muslim<br>
<input type="checkbox" name="sects_type[]" class="sect_select"  @if(preg_match("/Shia Muslim/", "$sects")) checked="" @endif value="Shia Muslim"> Shia Muslim<br>
<input type="checkbox" name="sects_type[]" class="sect_select"  @if(preg_match("/Salafi/", "$sects")) checked="" @endif value="Salafi"> Salafi<br>
<input type="checkbox" name="sects_type[]" class="sect_select"  @if(preg_match("/Jam'at Islami/", "$sects")) checked="" @endif value="Jam'at Islami"> Jam'at Islami<br>
<input type="checkbox" name="sects_type[]" class="sect_select"  @if(preg_match("/Thableegh Jamaath/", "$sects")) checked="" @endif value="Thableegh Jamaath"> Thableegh Jamaath<br>
<input type="checkbox" name="sects_type[]" class="sect_select"  @if(preg_match("/Shafi'i/", "$sects")) checked="" @endif value="Shafi'i"> Shafi'i<br>
</div>
<div class="col-3">
<input type="checkbox" name="sects_type[]" class="sect_select"  @if(preg_match("/Hanafi/", "$sects")) checked="" @endif value="Hanafi"> Hanafi<br>
<input type="checkbox" name="sects_type[]" class="sect_select"  @if(preg_match("/Hanabali/", "$sects")) checked="" @endif value="Hanabali"> Hanabali<br>
<input type="checkbox" name="sects_type[]" class="sect_select"  @if(preg_match("/Maliki/", "$sects")) checked="" @endif value="Maliki"> Maliki<br>
<input type="checkbox" name="sects_type[]" class="sect_select"  @if(preg_match("/Sayyid/", "$sects")) checked="" @endif value="Sayyid"> Sayyid<br>
<input type="checkbox" name="sects_type[]" class="sect_select"  @if(preg_match("/Urdu Muslim/", "$sects")) checked="" @endif value="Urdu Muslim"> Urdu Muslim<br>
<input type="checkbox" name="sects_type[]" class="sect_select"  @if(preg_match("/Bohra'i/", "$sects")) checked="" @endif value="Bohra'i"> Bohra'i<br>
<input type="checkbox" name="sects_type[]" class="sect_select"  @if(preg_match("/Pathan/", "$sects")) checked="" @endif value="Pathan"> Pathan<br>
<input type="checkbox" name="sects_type[]" class="sect_select"  @if(preg_match("/Sufism/", "$sects")) checked="" @endif value="Sufism"> Sufism<br>

</div>
  

</div>
</div>
</div>

</li><div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-4">
<label for=""> Pray </label>
</div>
<div class="col-8">

<div class="input-group">
: &nbsp &nbsp<input type="text" value="Pray" name="loking_pray" class="allselects">
<div class="input-group-append">
<a href="javascript:;" id="pray">
<span class="fa fa-arrow-down arrows" id="downpray"></span>
<span class="fa fa-arrow-up" id="uppray" style="display:none;padding-top:10px;margin-left:-20px;z-index: 1;
          position: absolute;"></span>
      </a>
</div>
</div>

<div id="praypro" style="display:none;">
<div class="row"  style="padding-top:5px;padding-bottom:10px;">
<div class="col-4">
<a href="javascript:;" onclick="pray_check()">Select All</a>
</div>
<div class="col-6">
<a href="javascript:;" onclick="pray_uncheck()">Clear All</a>
</div>
</div>


<div class="row">
<div class="col-6">
<input type="checkbox" name="pray_type[]" class="pray_select"  @if(preg_match("/Always pray/", "$pray")) checked="" @endif value="Always pray"> Always pray<br>
<input type="checkbox" name="pray_type[]" class="pray_select"  @if(preg_match("/Rarely miss a prayer and make Qadah Salah/", "$pray")) checked="" @endif value="Rarely miss a prayer and make Qadah Salah"> Rarely miss a prayer and make Qadah Salah<br>
<input type="checkbox" name="pray_type[]" class="pray_select"  @if(preg_match("/Sometimes miss Fajr and make Qadah Salah/", "$pray")) checked="" @endif value="Sometimes miss Fajr and make Qadah Salah"> Sometimes miss Fajr and make Qadah Salah<br>
<input type="checkbox" name="pray_type[]" class="pray_select"  @if(preg_match("/Sometimes pray/", "$pray")) checked="" @endif value="Sometimes pray"> Sometimes pray<br>
<input type="checkbox" name="pray_type[]" class="pray_select"  @if(preg_match("/Only pray before exams/", "$pray")) checked="" @endif value="Only pray before exams"> Only pray before exams<br>
</div>
<div class="col-6">
<input type="checkbox" name="pray_type[]" class="pray_select"  @if(preg_match("/Eid Salah only/", "$pray")) checked="" @endif value="Eid Salah only"> Eid Salah only<br>
<input type="checkbox" name="pray_type[]" class="pray_select"  @if(preg_match("/Intend to start praying/", "$pray")) checked="" @endif value="Intend to start praying"> Intend to start praying<br>
<input type="checkbox" name="pray_type[]" class="pray_select"  @if(preg_match("/Don't pray/", "$pray")) checked="" @endif value="Don't pray"> Don't pray<br>
</div>
  

</div>
</div>
</div>

</li><div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-4">
<label for=""> Has Children </label>
</div>
<div class="col-8">

<div class="input-group">
: &nbsp &nbsp<input type="text" value="Has Children" name="has_child" class="allselects">
<div class="input-group-append">
<a href="javascript:;" id="hasch">
<span class="fa fa-arrow-down arrows" id="downhaschild"></span>
<span class="fa fa-arrow-up" id="uphaschild" style="display:none;padding-top:10px;margin-left:-20px;z-index: 1;
          position: absolute;"></span>
      </a>
</div>
</div>

<div id="haschpro" style="display:none;">
<div class="row"  style="padding-top:5px;padding-bottom:10px;">
<div class="col-4">
<a href="javascript:;" onclick="has_check()">Select All</a>
</div>
<div class="col-6">
<a href="javascript:;" onclick="has_uncheck()">Clear All</a>
</div>
</div>


<div class="row">
<div class="col-4">
<input type="checkbox" name="child_count[]" class="has_select"  @if(preg_match("/None/", "$has_children")) checked="" @endif value="None"> None<br>
<input type="checkbox" name="child_count[]" class="has_select"  @if(preg_match("/one/", "$has_children")) checked="" @endif value="one"> one<br>

</div>
<div class="col-6">
<input type="checkbox" name="child_count[]" class="has_select"  @if(preg_match("/two/", "$has_children")) checked="" @endif value="two"> two<br>
<input type="checkbox" name="child_count[]" class="has_select"  @if(preg_match("/three or more/", "$has_children")) checked="" @endif value="three or more"> three or more<br>

</div>
  

</div>
</div>
</div>

</li><div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-4">
<label for=""> Like to have children </label>
</div>
<div class="col-8">

<div class="input-group">
: &nbsp &nbsp<input type="text" value="Like to Have" name="like_child" class="allselects">
<div class="input-group-append">
<a href="javascript:;" id="hvechil">
<span class="fa fa-arrow-down arrows" id="downhavchil"></span>
<span class="fa fa-arrow-up" id="uphavchil" style="display:none;padding-top:10px;margin-left:-20px;z-index: 1;
          position: absolute;"></span>
      </a>
</div>
</div>

<div id="hvechilpro" style="display:none;">
<div class="row"  style="padding-top:5px;padding-bottom:10px;">
<div class="col-4">
<a href="javascript:;" onclick="like_check()">Select All</a>
</div>
<div class="col-6">
<a href="javascript:;" onclick="like_uncheck()">Clear All</a>
</div>
</div>


<div class="row">
<div class="col-4">
<input type="checkbox" class="like_select" name="child_like[]" @if(preg_match("/Yes/", "$like_child")) checked="" @endif value="Yes"> Yes<br>

</div>
<div class="col-6">
<input type="checkbox" class="like_select" name="child_like[]" @if(preg_match("/No/", "$like_child")) checked="" @endif value="No"> No<br>

</div>
  

</div>
</div>
</div>

</li><div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-4">
<label for=""> Body Type </label>
</div>
<div class="col-8">

<div class="input-group">
: &nbsp &nbsp<input type="text" value="Body Type" name="loking_body_type" class="allselects">
<div class="input-group-append">
<a href="javascript:;" id="bodut">
<span class="fa fa-arrow-down arrows" id="downbdyty"></span>
<span class="fa fa-arrow-up" id="upbdytyp" style="display:none;padding-top:10px;margin-left:-20px;z-index: 1;
          position: absolute;"></span>
      </a>
</div>
</div>

<div id="bodutpro" style="display:none;">
<div class="row"  style="padding-top:5px;padding-bottom:10px;">
<div class="col-4">
<a href="javascript:;" onclick="body_check()">Select All</a>
</div>
<div class="col-6">
<a href="javascript:;" onclick="body_uncheck()">Clear All</a>
</div>
</div>


<div class="row">
<div class="col-4">
<input type="checkbox" name="loking_body[]" class="body_select" @if(preg_match("/Slim Skinny/", "$loking_body_type")) checked="" @endif value="Slim/Skinny"> Slim/Skinny<br>
<input type="checkbox" name="loking_body[]" class="body_select" @if(preg_match("/Average/", "$loking_body_type")) checked="" @endif value="Average"> Average<br>
<input type="checkbox" name="loking_body[]" class="body_select" @if(preg_match("/Athletic/", "$loking_body_type")) checked="" @endif value="Athletic"> Athletic<br>
</div>
<div class="col-6">
<input type="checkbox" name="loking_body[]" class="body_select" @if(preg_match("/Muscular/", "$loking_body_type")) checked="" @endif value="Muscular"> Muscular<br>
<input type="checkbox" name="loking_body[]" class="body_select" @if(preg_match("/A few extra pounds/", "$loking_body_type")) checked="" @endif value="A few extra pounds"> A few extra pounds<br>
<input type="checkbox" name="loking_body[]" class="body_select" @if(preg_match("/Heavyset/", "$loking_body_type")) checked="" @endif value="Heavyset"> Heavyset<br>

</div>
  

</div>
</div>
</div>

</li><div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-4">
<label for=""> Observes Hijab </label>
</div>
<div class="col-8">

<div class="input-group">
: &nbsp &nbsp<input type="text" value="Observes Hija" name="observes_hijab" class="allselects">
<div class="input-group-append">
<a href="javascript:;" id="obshij">
<span class="fa fa-arrow-down arrows" id="downobshij"></span>
<span class="fa fa-arrow-up" id="upobshij" style="display:none;padding-top:10px;margin-left:-20px;z-index: 1;
          position: absolute;"></span>
      </a>
</div>
</div>

<div id="obshijpro" style="display:none;">
<div class="row"  style="padding-top:5px;padding-bottom:10px;">
<div class="col-4">
<a href="javascript:;" onclick="hijab_check()">Select All</a>
</div>
<div class="col-6">
<a href="javascript:;" onclick="hijab_uncheck()">Clear All</a>
</div>
</div>


<div class="row">
<div class="col-4">
<input type="checkbox" name="hijab_time[]" class="hijab_select" value="hijab_select" @if(preg_match("/Always/", "$observes_hijab")) checked="" @endif value="Always"> Always<br>
<input type="checkbox" name="hijab_time[]" class="hijab_select" value="hijab_select" @if(preg_match("/Always with Niqab/", "$observes_hijab")) checked="" @endif value="Always with Niqab"> Always with Niqab<br>

</div>
<div class="col-6">
<input type="checkbox" name="hijab_time[]" class="hijab_select" value="hijab_select" @if(preg_match("/Sometimes/", "$observes_hijab")) checked="" @endif value="Sometimes"> Sometimes<br>
<input type="checkbox" name="hijab_time[]" class="hijab_select" value="hijab_select" @if(preg_match("/Never/", "$observes_hijab")) checked="" @endif value="Never"> Never<br>
<input type="hidden" name="user_id" value="{{ $edit_user->id }}">
{{ csrf_field() }}
</div>
  

</div>
</div>
</div>

</li><div class="btpad"></div>


<li class="row" class="listtopmarg">
<div class="well" style="width:95%;background-color:#F2F2F2;box-shadow:none;border:1px solid #E6E6E6">
<div class="col-12">
<label for="" style="padding-top:5px;font-weight:bold;">I am looking for</label>
</div>
</div>

</li><div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-4">
<label for=""> Expectations you may have about your expected partner.  (Mention here location, education, job, character etc..)</label>
</div>
<div class="col-8">
<span class="colons">:</span>
<textarea name="loking_description" id=""  style="height:75px;width:91%;">{{ $edit_user->loking_description }}</textarea>
</div>
</li><div class="btpad"></div>
{{-- <li class="row" class="listtopmarg">
<div class="well" style="width:95%;background-color:#F2F2F2;box-shadow:none;border:1px solid #E6E6E6">
<div class="col-12">
<label for="" style="padding-top:5px;font-weight:bold;">Upload profile image</label>
</div>
</div>

</li>
<div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-4">
<label for="">Image</label>
</div>
<div class="col-8">

<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Upload</button>


</div>
</li> --}}
<div class="btpad"></div>
<li class="row" class="listtopmarg">
<div class="col-10">
</div>
<div class="col-2">
<button type="" class="btn btn-success">Save</button>
</div>
</li>
<div class="btpad"></div>
</ul>
</form>
</div>
</div>

<div class="col-sm-3">
<div class="well">
<div class="row">
<div class="col-12">
<h4 style="font-weight:400;padding-top:15px;padding-left:15px;">Recently joined </h4>
</div>
</div>
<hr class="lineinheadjoined">
<div class="row">
<div class="col-4"  style="margin-left:15px;">
<img src="{{ $user_assets }}/img/1.jpg" alt="recent user" width="78" height="78"> 
</div>
<div class="col-6">
<h5 style="margin-bottom:0px;font-weight:600;" >Ayza</h5>
<div class="lead">20 yrs</div>
<div class="lead">From Kalam</div>
<div class="lead">Bachelors</div>
</div>
</div><br>

<div class="row">
<div class="col-4"  style="margin-left:15px;">
<img src="{{ $user_assets }}/img/2.jpg" alt="recent user" width="78" height="78"> 
</div>
<div class="col-6">
<h5 style="margin-bottom:0px;font-weight:600">Ali</h5>
<div class="lead">23 yrs</div>
<div class="lead">From Pishawar</div>
<div class="lead">Bachelors</div>
</div>
</div><br>

<div class="row">
<div class="col-4"  style="margin-left:15px;">
<img src="{{ $user_assets }}/img/3.jpg" alt="recent user" width="78" height="78"> 
</div>
<div class="col-6">
<h5 style="margin-bottom:0px;">Nageena</h5>
<div class="lead">25 yrs</div>
<div class="lead">From Islamabad</div>
<div class="lead">Bachelors</div>
</div>
</div><br>

</div>
</div>
</div>
</div>
</div>
</div>
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
// $('.t_state').html('');
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
$('#sts').hide('slow');
$('#cties').hide('slow');


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
</style>
<footer>
<section class="bg-orange no-padding wow" style="background-color:#ed6c05; height: 150px;">
<div class="container">
<div class="row padding-two sm-text-center">
<div class="col-md-7 no-padding">
<h5 class="white-text font-weight-600" style="color: white;font-family:sans-serif; margin-top: 20px;">Get connected with Kabool Hai through Google play/ Apple store</h5>
<p class="white-text" style="font-family:sans-serif; color: white;">Finding us online isn’t a hefty job at all. You can download our app through play store on your mobiles and get notified instantly whenever someone tries to connect with you through your profile.</p>
</div>
<div class="col-md-5 padding-one no-padding-bottom" style="margin-top: 20px;">
<a class="" href="#"><img src="{{ $user_assets }}/images/google-play.png" width="193" height="58"></a>
<a class="" href="#"><img src="{{ $user_assets }}/images/apple-store.png" width="193" height="58"></a>
</div>
</div>
</div>
</section>
<section class="bg-orange no-padding wow" style="background-color: #5a378c">
<div class="container">
<div class="row padding-two sm-text-center">
{{-- <div class="container-fluid" > --}}
{{-- <div class="row"> --}}
<div class="col-md-2" style="margin-top: 30px";>
<table>
<tr>
<th class="fhead" style="color: white">Kaboolhai</th>
</tr>
</tr>
<tr>
<td class="flinks"><a href="{{url('about-us')}}" style="color: white">About</a></td>
</tr>
<tr>
<td class="flinks"><a href="" style="color: white">Blog</a></td>
</tr>
<tr>
<td class="flinks"><a href="" style="color: white">Download app</a></td>
</tr>
<tr>
<td class="flinks"><a href="{{ url('term-condation') }}" style="color: white">Terms and Conditions</a></td>
</tr>
<tr>
<td class="flinks"><a href="" style="color: white">Testimonials</a></td>
</tr>
<tr>
<td class="flinks"><a href="{{ url('policy-privacy') }}" style="color: white">Privacy Policy</a></td>
</tr>
<tr>
<td class="flinks"><a href="" style="color: white">Payment</a></td>
</tr>                                                      
</table>
</div>

<div class="col-md-2" style="margin-top: 30px;">
<table>
<tr>
<th class="fhead" style="color: white">Help & Support</th>
</tr>
<tr>
<td class="flinks"><a href="" style="color: white">24x7 Live help</a></td>
</tr>
<tr>
<td class="flinks"><a href="{{ url('contact-us') }}" style="color: white">Contact Us</a></td>
</tr>
<tr>
<td class="flinks"><a href="" style="color: white">Feedback</a></td>
</tr>
<tr>
<td class="flinks"><a href="{{ url('faqs') }}" style="color: white">FAQ'S</a></td>
</tr>
<tr>
<td class="flinks"><a href="" style="color: white">Upgrade Account</a></td>
</tr>
<tr>
<td class="flinks"><a href="" style="color: white">Assisted Service</a></td>
</tr>
<tr>
<td class="flinks"><a href="{{ url('services') }}" style="color: white">Our Services</a></td>
</tr>                                       
</table>
</div>

<div class="col-md-2" style="margin-top: 30px;">
<table>
<tr>
<th class="fhead" style="color: white">Search Profile</th>
</tr>
<tr>
<td class="flinks"><a href="" style="color: white">Basic Search</a></td>
</tr>
<tr>
<td class="flinks"><a href="" style="color: white">Advance Search</a></td>
</tr>
<tr>
<td class="flinks"><a href=""  style="color: white">Keyword Search</a></td>
</tr>
<tr>
<td class="flinks"><a href="" style="color: white">occupational Search</a></td>
</tr>
<tr>
<td class="flinks"><a href="" style="color: white">Educational Search</a></td>
</tr>
<tr>
<td class="flinks"><a href="" style="color: white">ID Search</a></td>
</tr>                                        
</table>
</div>

<div class="col-md-3" style="margin-top: 30px;">
<table>
<tr>
<th class="fhead" style="color: white">Contact Us</th>
</tr>
<tr>
<td class="flinks"><a href="" style="color: white">contact@ranglerz.com</a></td>
</tr>
<!-- <tr>
<td class="flinks"><a href=""> (PK): +92 423 570 0007</a></td>
</tr>
<tr>
<td class="flinks"><a href="">Phase 6 DHA Lahore Pakistan
</a></td>
</tr> -->
<tr>
<td><br></td>
</tr>
<tr>
<td class="flinks"><a href="" style="color: white"><i class="fa fa-facebook-square fa-3x"></i> <i class="fa fa-youtube-square fa-3x"></i> <i class="fa fa-twitter-square fa-3x"></i> <i class="fa fa-google-plus-square fa-3x"></i> <i class="fa fa-linkedin-square fa-3x" style="color:white;"></i></a></td>
</tr>
                         
</table>
</div>

<div class="col-md-3" style="margin-top: 30px;">
<p class="fhead" style="color: white">Subscribe to Our Newsletters</p>
<p class="subt" style="color: white">Never miss our special offers</p>
<div class="searchcontainer">
<form action="">
<label>
<input type="search" class="searchfieldz" placeholder="Search anything " value="" name="s" title="Search for:" autocomplete="off">
</label>
<button type="submit" class="searchButton">
<i class="fa fa-search"></i>
</button>
</form>
</div>
<br>
<div class="paymg">
<img style="width: 100%;" alt="" src="{{ $user_assets }}/payment-methods.png" />
</div>
</div>
</div>


<div class="row" style="margin-top: 100px;">
<div class="col-md-12">
<table style="margin-bottom: 50px;">
<tr>
<p style="color:#ffffff">Top Searches by:</p>
</tr>
<tr class="tpsrch">
<th><a href="" style="color: white">Pakistani Muslim Matrimony |</a></th>
<th><a href="" style="color: white">Indian Muslim Matrimony |</a></th>
<th><a href="" style="color: white">Bangalore Muslim Matrimony |</a></th>
<th><a href="" style="color: white">Sunni Muslim Matrimony |</a></th>
<th><a href="" style="border:none; color: white">Salafi Muslim Matrimony</a></th>
</tr>
</table>
</div>
</div>

<!-- scroll to top -->
<a href="javascript:;" class="scrollToTop"></a>
</div>
<!-- scroll to top End... -->


</footer>
</section>
<div style="width:100%;background-color:#222;">
<div class="container">
<div class="row" style="padding-top:15px;padding-bottom: 15px;">
<div class="col-md-6">
<table>
<tr class="dosrch">
<th><a href="" style="color: white">Terms  |</a></th>
<th><a href="" style="color: white">Privacy Policy  |</a></th>
<th><a href="" style="border:none; color: white">Site Map </a></th>
</tr>
</table>
</div>

<div class="col-md-6">
<p class="pull-right" style="color:#ffffff;">&copy;2018 Kaboolhai.All rights reserved.Powered By <a style="color:white;" href="http://www.ranglerz.com/" target="__blanck">Ranglerz</a>.</p>
</div>
</div>
</div>
</div>

<script type="text/javascript">
	
$("#elder_brother").val('{{$edit_user->elder_brother}}');
$("#younger_brother").val('{{$edit_user->younger_brother}}');
$("#brother_married").val('{{$edit_user->brother_married}}');
$("#brother_unmarried").val('{{$edit_user->brother_unmarried}}');
$("#elder_sister").val('{{$edit_user->elder_sister}}');
$("#younger_sister").val('{{$edit_user->younger_sister}}');
$("#sister_married").val('{{$edit_user->sister_married}}');
$("#sister_unmarried").val('{{$edit_user->sister_unmarried}}');

$("#loking_height_from").val('{{$edit_user->loking_height_from}}');

$("#loking_height_to").val('{{$edit_user->loking_height_to}}');


$("#loking_age_from").val('{{$edit_user->loking_age_from}}');

$("#loking_age_to").val('{{$edit_user->loking_age_to}}');


$('#loking_education').val('{{ $edit_user->loking_education }}');
$('#loking_jobs').val('{{ $edit_user->loking_job }}');
$('#loking_a_income').val('{{ $edit_user->loking_a_income }}');
$('#loking_language').val('{{ $edit_user->loking_language}}');


</script>
</body>
</html>