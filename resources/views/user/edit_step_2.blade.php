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
<img id="three" class="wizrdpic" src="{{ $user_assets }}/img/registration-step 2.png" alt="">
{{-- <img id="two" class="wizrdpic" src="{{ $user_assets }}/img/registration-step 2.png" alt=""> --}}
</div>
<br><br>

<div class="container-fluid"> 
<div class="row">
<ul id="basicinfo">

<li class="row listtopmarg">
<div class="col-0">
<img src="{{ $user_assets }}/icons/message.png" class="welmsgimg">
</div>
<div class="col-10">



<p>Dear <strong> Kaboolhai User </strong> sincerely want to help you in your search for best match so we would like you to share more about your preferences!</p>
</div>
</li>

<li class="row" class="listtopmarg">
<div class="col-0">
<img src="{{ $user_assets }}/icons/basic-info.png">
</div>
<div class="col-10">
<p class="sechead">Basic Information</p >
</div>
</li>
<hr class="lineinhead">
<form method="post" action="{{ url('register-user-step-2') }}">
<li class="row" class="listtopmarg">
<div class="col-4">
<label>Which 3 words best describe you<span style="color: red" >*</span> </label>
</div>
<input type="hidden" name="email" value="{{ $user_data->email }}">
<input type="hidden" name="edit_id" value="{{ $user_data->id}}">

{{ csrf_field() }}

<div class="col-8">
<span class="colons">:</span>

<span class="on-focus">
<input type="text" name="word_1" placeholder="1" class="midlinput" value="{{ $user_data->word_1 }}">

</span>
<span class="colons"></span>
<span class="on-focus">
<input placeholder="2" type="text" name="word_2" class="midlinput" value="{{ $user_data->word_2 }}">


</span>
<span class="colons"></span>
<span class="on-focus">
<input placeholder="3" type="text" name="word_3" class="midlinput" value="{{ $user_data->word_3 }}">

</span>
</div>
</li>
<div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-4">
<label for=""> Profile Created for</label>
</div>
<div class="col-8">
<span class="colons">:</span>
<select selected="selected" id="profile_created" name="profile_created" id="" onchange="profile_test(this)" class="allselects">
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
</li><div class="btpad"></div>

<li class="row" class="listtopmarg" id="gardian_name" style="display: none">
<div class="col-4">
<label for=""> Gardian Name</label>
</div>
<div class="col-8">
<span class="colons">:</span>
<input type="text" name="gardian_name" placeholder="enter Gardian Name" class="allselects">

</div>
</li><div class="btpad"></div>

<li class="row" class="listtopmarg" id="gardian_number" style="display: none">
<div class="col-4">
<label for=""> Gardian Number</label>
</div>
<div class="col-8">
<span class="colons">:</span>
<input type="text" name="gardian_number" placeholder="enter Gardian Number" class="allselects">
</div>
</li><div class="btpad"></div>



<li class="row" class="listtopmarg">
<div class="col-4">
<label for="">Complexion (Skin Color)<span class="imporatant">*</span></label>
</div>
<div class="col-8">
<span class="colons">:</span>
<select  id="skin_color" name="skin_color" class="allselects">
<option value="">Select</option>
<option value="Very Fair">Very Fair</option>
<option value="Fair">Fair</option>
<option value="Wheatish">Wheatish</option>
<option value="Wheatish Brown">Wheatish Brown</option>
<option value="Dark">Dark</option>
</select>
</div>
</li><div class="btpad"></div>


<li class="row" class="listtopmarg">
<div class="col-4">
<label for="">Physical Status</label>
</div>
<div class="col-8">
<span class="colons">:</span>
<select  id="physical_status" name="physical_status" onchange="showdisabilty(this)" class="allselects">
<option selected="selected" value="Normal Person">Normal Person</option>
<option value="Deaf/Dumb">Deaf/Dumb</option>
<option value="Blind">Blind</option>
<option value="Physically Challenged">Physically Challenged</option>
<option value="Mentally Challenged">Mentally Challenged</option>
<option value="With other Disability">With other Disability</option>
</select>
</div>
</li><div class="btpad"></div>




</select> 

<li class="row" class="listtopmarg">
<div class="col-4">
<label for="">Height & Weight<span class="imporatant">*</span></label>
</div>
<div class="col-8">
<span class="colons">:</span>
<select  id="user_height" name="height" class="allselects">
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
<select  id="weight" name="weight" class="midlinput">
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

</li><div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-4">
<label for="">Mother Tongue<span class="imporatant">*</span></label>
</div>
<div class="col-8">
<span class="colons">:</span>
<select name="language" selected="selected"  id="language" class="allselects">

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
<label for=""> Other Language <span class="imporatant">*</span></label>
</div>
<div class="col-8">
{{-- chang --}}
<div class="input-group">
:<input type="text" value="Other language" name="other_language" class="allselects" style="margin-left: 13px;">
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

<input type="checkbox" name="add_other_language[]" @if(preg_match("/Urdu/", "$other_language")) checked="" @endif  class="other_lan" value="Urdu"> Urdu <br> <input type="checkbox" name="add_other_language[]" @if (preg_match("/Punjabi/", "$other_language")) checked="" @endif class="other_lan" value="Punjabi"> Punjabi <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Pashto/", "$other_language")) checked="" @endif class="other_lan" value="Pashto"> Pashto <br>
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Sindhi/", "$other_language")) checked="" @endif class="other_lan" value="Sindhi"> Sindhi <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Saraiki/", "$other_language")) checked="" @endif class="other_lan" value="Saraiki"> Saraiki <br> <input type="checkbox" name="add_other_language[]" @if (preg_match("/Balochi/", "$other_language")) checked="" @endif class="other_lan" value="Balochi"> Balochi <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Hindko/", "$other_language")) checked="" @endif class="other_lan" value="Hindko"> Hindko <br><input type="checkbox" name="add_other_language[]" @if (preg_match("/English/", "$other_language")) checked="" @endif class="other_lan" value="English"> English <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Malayalam/", "$other_language")) checked="" @endif class="other_lan" value="Malayalam"> Malayalam <br>
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Aka/", "$other_language")) checked="" @endif class="other_lan" value="Aka"> Aka <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Angika/", "$other_language")) checked="" @endif class="other_lan" value="Angika"> Angika <br>
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Arabic/", "$other_language")) checked="" @endif class="other_lan" value="Arabic"> Arabic <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Arunachali/", "$other_language")) checked="" @endif class="other_lan" value="Arunachali"> Arunachali <br>
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Assamese/", "$other_language")) checked="" @endif class="other_lan" value="Assamese"> Assamese <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Awadhi/", "$other_language")) checked="" @endif class="other_lan" value="Awadhi"> Awadhi <br>
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Badaga/", "$other_language")) checked="" @endif class="other_lan" value="Badaga"> Badaga <br>
</div>


<div class="col-5">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Bengali/", "$other_language")) checked="" @endif class="other_lan" value="Bengali"> Bengali <br>
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Bhojpuri/", "$other_language")) checked="" @endif class="other_lan" value="Bhojpuri"> Bhojpuri <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Bihari/", "$other_language")) checked="" @endif class="other_lan" value="Bihari"> Bihari <br>
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Brij/", "$other_language")) checked="" @endif class="other_lan" value="Brij"> Brij <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Chatisgarhi/", "$other_language")) checked="" @endif class="other_lan" value="Chatisgarhi"> Chatisgarhi <br>
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Coorgi/", "$other_language")) checked="" @endif class="other_lan" value="Coorgi"> Coorgi <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Dogri/", "$other_language")) checked="" @endif class="other_lan" value="Dogri"> Dogri <br>

<input type="checkbox" name="add_other_language[]" @if (preg_match("/French/", "$other_language")) checked="" @endif class="other_lan" value="French"> French <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Garhwali/", "$other_language")) checked="" @endif class="other_lan" value="Garhwali"> Garhwali <br>
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Garo/", "$other_language")) checked="" @endif class="other_lan" value="Garo"> Garo <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Gujarati/", "$other_language")) checked="" @endif class="other_lan" value="Gujarati"> Gujarati <br>
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Haryanvi/", "$other_language")) checked="" @endif class="other_lan" value="Haryanvi"> Haryanvi <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Himachali Pahari/", "$other_language")) checked="" @endif class="other_lan" value="Himachali Pahari"> Himachali/Pahari <br>
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Hindi/", "$other_language")) checked="" @endif class="other_lan" value="Hindi"> Hindi <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Kannada/", "$other_language")) checked="" @endif class="other_lan" value="Kannada"> Kannada <br>
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Kashmiri/", "$other_language")) checked="" @endif class="other_lan" value="Kashmiri"> Kashmiri <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Khandesi/", "$other_language")) checked="" @endif class="other_lan" value="Khandesi"> Khandesi <br>
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Khasi/", "$other_language")) checked="" @endif class="other_lan" value="Khasi"> Khasi <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Konkani/", "$other_language")) checked="" @endif class="other_lan" value="Konkani"> Konkani <br>
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Koshali/", "$other_language")) checked="" @endif class="other_lan" value="Koshali"> Koshali <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Kumaoni/", "$other_language")) checked="" @endif class="other_lan" value="Kumaoni"> Kumaoni <br>
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Kutchi/", "$other_language")) checked="" @endif class="other_lan" value="Kutchi"> Kutchi <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Ladacki/", "$other_language")) checked="" @endif class="other_lan" value="Ladacki"> Ladacki <br>
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Lepcha/", "$other_language")) checked="" @endif class="other_lan" value="Lepcha"> Lepcha <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Magahi/", "$other_language")) checked="" @endif class="other_lan" value="Magahi"> Magahi <br>
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Maithili/", "$other_language")) checked="" @endif class="other_lan" value="Maithili"> Maithili <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Malay/", "$other_language")) checked="" @endif class="other_lan" value="Malay"> Malay <br>
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Manipuri/", "$other_language")) checked="" @endif class="other_lan" value="Manipuri"> Manipuri <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Marathi/", "$other_language")) checked="" @endif class="other_lan" value="Marathi"> Marathi <br>
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Marwari/", "$other_language")) checked="" @endif class="other_lan" value="Marwari"> Marwari <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Miji/", "$other_language")) checked="" @endif class="other_lan" value="Miji"> Miji <br>
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Miza/", "$other_language")) checked="" @endif class="other_lan" value="Miza"> Miza <br>
</div>





<div class="col-5">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Monpa/", "$other_language")) checked="" @endif class="other_lan" value="Monpa"> Monpa <br>
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Nepali/", "$other_language")) checked="" @endif class="other_lan" value="Nepali"> Nepali <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Nicobarese/", "$other_language")) checked="" @endif class="other_lan" value="Nicobarese"> Nicobarese <br>
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Oriya/", "$other_language")) checked="" @endif class="other_lan" value="Oriya"> Oriya <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Persian/", "$other_language")) checked="" @endif class="other_lan" value="Persian"> Persian <br>

<input type="checkbox" name="add_other_language[]" @if (preg_match("/Rajasthani/", "$other_language")) checked="" @endif class="other_lan" value="Rajasthani"> Rajasthani <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Russian/", "$other_language")) checked="" @endif class="other_lan" value="Russian"> Russian <br>
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Sanskrit/", "$other_language")) checked="" @endif class="other_lan" value="Sanskrit"> Sanskrit <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Santhali/", "$other_language")) checked="" @endif class="other_lan" value="Santhali"> Santhali <br>

<input type="checkbox" name="add_other_language[]" @if (preg_match("/Sinhala/", "$other_language")) checked="" @endif class="other_lan" value="Sinhala"> Sinhala <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Sourashtra/", "$other_language")) checked="" @endif class="other_lan" value="Sourashtra"> Sourashtra <br>
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Spanish/", "$other_language")) checked="" @endif class="other_lan" value="Spanish"> Spanish <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Tamil/", "$other_language")) checked="" @endif class="other_lan" value="Tamil"> Tamil <br>
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Telugu/", "$other_language")) checked="" @endif class="other_lan" value="Telugu">Telugu <br>
</div>
<div class="col-5">
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Tripuri/", "$other_language")) checked="" @endif class="other_lan" value="Tripuri"> Tripuri <br>
<input type="checkbox" name="add_other_language[]" @if (preg_match("/Tulu/", "$other_language")) checked="" @endif class="other_lan" value="Tulu"> Tulu <br>
</div>

</div>
</div>
</li>
<div class="btpad"></div>
<li class="row" class="listtopmarg">
<div class="col-4">
<label for="">Cast/Clan</label>
</div>
<div class="col-8">
<span class="colons">:</span>
<select name="cast" id="cast" class="allselects">
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
</select>&nbsp<input type="text" value="{{ $user_data->clan }}" name="clan" class="midlinput">
</div>
</li><div class="btpad"></div>


<li class="row" class="listtopmarg">
<div class="col-4">
<label for="">Marital Status <span class="imporatant">*</span></label>
</div>
<div class="col-8">
<span class="colons">:</span>
<div class="radoinput">
<input type="radio" name="martial_status" @if($user_data->martial_status=='Married') checked="" @endif value="Married"> Married &nbsp 
<input type="radio" name="martial_status" @if($user_data->martial_status=='Unmmaried') checked="" @endif value="Unmmaried"> Unmmaried &nbsp <input type="radio" @if($user_data->martial_status=='Widow/Widower') checked="" @endif name="martial_status" value="Widow/Widower"> Widow/Widower &nbsp <input type="radio" name="martial_status" @if($user_data->martial_status=='Divorcee') checked="" @endif value="Divorcee"> Divorcee &nbsp <input type="radio" @if($user_data->martial_status=='Seprated') checked="" @endif name="martial_status" value="Seprated"> Seprated
</div>

</li><div class="btpad"></div>


<li class="row" class="listtopmarg">
<div class="col-4">
<label for=""> Hobbies/Interest</label>
</div>
<div class="col-8">

<div class="input-group">
:<input type="text" value="Hobbies" name="hobbies" class="allselects" style="margin-left: 13px;">
<div class="input-group-append">
<a href="javascript:;" id="hobi">
<span class="fa fa-arrow-down arrows" id="do"></span>
<span class="fa fa-arrow-up" id="ups" style="display:none;padding-top:10px;margin-left:-20px;z-index: 1;
position: absolute;"></span>

</a>
</div>
</div>
<div id="hobbies" style="display:none;">
<div class="row"  style="padding-top:5px;padding-bottom:10px;">
<div class="col-6">
<a href="javascript:;" onclick="check_hobi()" >Select All</a>
</div>
<div class="col-6">
<a href="javascript:;" onclick="uncheck_hobi()"  >Clear All</a>
</div>
</div>

<div class="row">
<div class="col-5">
<input class="check_hobies" type="checkbox"  @if (preg_match("/Book Reading/", "$hobbies")) checked="" @endif name="hobbies_type[]" value="Book Reading"> Book Reading<br>
<input class="check_hobies" type="checkbox" name="hobbies_type[]" @if (preg_match("/Playing Cricket/", "$hobbies")) checked="" @endif value="Playing Cricket"> Playing Cricket<br>

</div>
<div class="col-5">
<input class="check_hobies" type="checkbox" name="hobbies_type[]" @if (preg_match("/Football/", "$hobbies")) checked="" @endif value="Football">    Football <br>
<input class="check_hobies" type="checkbox" name="hobbies_type[]" @if (preg_match("/Reading News/", "$hobbies")) checked="" @endif value="Reading News"> Reading News <br>
<input  type="checkbox" onchange="other_hobi(this)"  value="Other">    Other<br>

</div>

</div>
</div>
</div>
</li><div class="btpad"></div>

<li class="row" class="listtopmarg" id="other_hobies" style="display: none">
<div class="col-4">
<label for="">Other Hobbies/Interest</label>
</div>
<div class="col-8">
<span class="colons">:</span>
<input type="text" name="hobbies_type[]" placeholder="please specify other Hobbies" class="allselects">
</div>
</li><div class="btpad"></div>
{{-- </li><div class="btpad"></div> --}}

<li class="row" class="listtopmarg">
<div class="col-4">
<label for="">Beard</label>
</div>
<div class="col-8">
<span class="colons">:</span>
<select name="bread" id="bread" class="allselects">
<option value="">Please Select..</option>
<option value="Yes">Yes</option>
<option value="No">No</option>
<option value="Prefered not to say">prefered not to say</option>
</select>
</div>
</li><div class="btpad"></div>


<!--***********************************************  -->

<li class="row" class="listtopmarg">
<div class="col-0">
<img src="{{ $user_assets }}/icons/religion.png">
</div>
<div class="col-10">
<p class="sechead">Religious Interest</p >
</div>
</li>
<hr class="lineinhead">

<li class="row" class="listtopmarg">
<div class="col-5">
<label for=""> Are you or your parents reverted to Islam?<span class="imporatant">*</span></label>
</div>
<div class="col-7">
<span class="colons">:</span>
<div class="radiyn">
<input type="radio" @if($user_data->religious_type=='Yes') checked="" @endif name="religious_type" value="Yes"> Yes &nbsp <input type="radio" name="religious_type" value="No" @if($user_data->religious_type=='No') checked="" @endif> No
</div>
</div>
</li><div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-4">
<label for=""> Allegiance to Islamic Orgn<span class="imporatant">*</span></label>
</div>
<div class="col-8">
<span class="colons">:</span>
<select selected="selected" name="sect_are" id="sect_are" class="allselects">
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
</select>
</div>
</li><div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-4">
<label for=""> Religiousness <span class="imporatant">*</span></label>
</div>
<div class="col-8">
<span class="colons">:</span>
<select name="religiousness" id="religiousness" class="allselects">
<option value="">Please Select..</option>
<option value="Very religious">Very religious</option>
<option value="Religious">Religious</option>
<option value="Not religious">Not religious</option>
<option value="Prefer not to say">Prefer not to say</option>
</select>
</div>
</li><div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-4">
<label for=""> Perform Namaaz?<span class="imporatant">*</span></label>
</div>
<div class="col-8">
<span class="colons">:</span>
<select selected="selected" name="pray" id="pray" class="allselects">
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
</li><div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-4">
<label for=""> Read Qur'an <span class="imporatant">*</span></label>
</div>
<div class="col-8">
<span class="colons">:</span>
<select name="read_quran" id="read_quran" class="allselects">
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
</li><div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-4">
<label for=""> Attend religious services <span class="imporatant">*</span></label>
</div>
<div class="col-8">
<span class="colons">:</span>
<select name="attend_religious_service" id="attend_religious_service" class="allselects">
<option value="" >Please Select</option>
<option value="Daily" >Daily</option>
<option value="Only on Jummah / Fridays">Only on Jummah / Fridays</option>
<option value="Sometimes">Sometimes</option>
<option value="Only During Ramadan">Only During Ramadan</option>
<option value="Never">Never</option>
</select>
</div>
</li><div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-4">
<label for="">Polygamy <span class="imporatant">*</span></label>
</div>
<div class="col-8">
<span class="colons">:</span>
<select name="polygamy" id="polygamy" class="allselects">

<option value="">Please select..</option>
<option value="Second marriage">Second marriage</option>
<option value="Third marriage">Third marriage</option>
<option value="Fourth marriage">Fourth marriage</option>
</select>
</div>
</li><div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-4">
<label for="">What is your Ethnic Origin? <span class="imporatant">*</span></label>
</div>
<div class="col-8">
<span class="colons">:</span>
<select name="ethnic_type" id="ethnic_type" class="allselects">
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
</li><div class="btpad"></div>

<!-- ******************************************************** -->

<li class="row" class="listtopmarg">
<div class="col-0">
<img src="{{ $user_assets }}/icons/education.png">
</div>
<div class="col-10">
<p class="sechead">Education and Occupation</p >
</div>
</li>

<hr class="lineinhead">

<li class="row" class="listtopmarg">
<div class="col-4">
<label for="">Education<span class="imporatant">*</span></label>
</div>
<div class="col-8">
<span class="colons">:</span>
<select name="qualification" id="qualification" class="allselects">
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

<li class="row" class="listtopmarg">
<div class="col-4">
<label for="">Education Details</label>
</div>
<div class="col-8">
<span class="colons">:</span>
<input type="text" value="{{ $user_data->edu_detail }}" name="edu_detail" class="allinputs">
</div>
</li><div class="btpad"></div>

<li class="row" class="listtopmarg" id="users_job">
<div class="col-4">
<label for=""> Occupation</label>
</div>
<div class="col-8">
<span class="colons">:</span>
<select name="job" id="job"  onchange="user_job(this)" class="allselects">
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
</li><div class="btpad"></div>
<li class="row" class="listtopmarg" id="user_other_job" style="display: none">
<div class="col-4">
<label for=""> Occupation</label>
</div>
<div class="col-8">
<span class="colons">:</span>
<input type="text" name="user_other_job" placeholder="please specify other Occupation" class="allselects">

</div>
</li><div class="btpad"></div>
<li class="row" class="listtopmarg">
<div class="col-4">
<label for="">Occupation Detail</label>
</div>
<div class="col-8">
<span class="colons">:</span>
<input type="text" name="occupation_detail" value="{{ $user_data->occupation_detail }}" placeholder="Please enter occupation detail" class="allselects">

</div>
</li><div class="btpad"></div>
<li class="row" class="listtopmarg">
<div class="col-4">
<label for=""> Annual Income</label>
</div>
<div class="col-8">
<span class="colons">:</span>
<select name="a_income" id="a_income" class="allselects">
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
</li><div class="btpad"></div>
<!-- *********************************************** -->

<li class="row" class="listtopmarg">
<div class="col-0">
<img src="{{ $user_assets }}/icons/contact-details.png">
</div>
<div class="col-10">
<p class="sechead">Contact Details</p >
</div>
</li>

<hr class="lineinhead">

<li class="row" class="listtopmarg">
<div class="col-4">
<label for=""> Full Address <span class="imporatant">*</span></label>
</div>
<div class="col-8">
<span class="colons">:</span>
<textarea name="full_address" id="" cols="30" rows="10" class="addTarea">{{ $user_data->full_address }}</textarea>
</div>
</li><div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-4">
<label for=""> Present Country</label>
</div>
<div class="col-8">
<span class="colons">:</span>
<select name="present_country_id" class="allselects" >
<option selected="" value="">Select country 
</option>
@foreach ($country as $row)
<option @if($row->country_id==$user_data->present_country_id) selected="" @endif value="{{ $row->country_id }}">
{{ $row->country_name }}
</option>
@endforeach
</select>
</select>
<input type="text" name="present_city" value="{{ $user_data->present_city }}" class="midlinput" placeholder="City">
</div>
</li><div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-4">
<label for="">Native Country <span class="imporatant">*</span></label>
</div>
<div class="col-8">
<span class="colons">:</span>
<select id="country" onchange="country_change(this)" name="native_country_id" class="allselects" >
<option selected="" value="">Select country 
</option>

@foreach ($country as $row)
<option @if($row->country_id==$user_data->native_country_id) selected="" @endif value="{{ $row->country_id }}">
{{ $row->country_name }}
</option>
@endforeach
</select>
</div>
</li><div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-4">
<label for="">Native State <span class="imporatant">*</span></label>
</div>
<div class="col-8">
<span class="colons">:</span>
<select selected="selected" id="state" onchange="state_change(this)"  name="native_state_id" class="allselects" >
@if(!empty($native_state))
@foreach ($native_state as $row)
<option @if($row->state_id==$user_data->state_id) selected="" @endif value="{{ $row->state_id }}">
{{ $row->state_name }}
</option>
@endforeach
@endif
</select>
</div>
</li><div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-4">
<label for=""> Native City (eg: Lahore) <span class="imporatant">*</span></label>
</div>
<div class="col-8">
<span class="colons">:</span>
<select  name="native_city_id" id="city" selected="selected" class="allselects" >
@if(!empty($native_cities))
@foreach ($native_cities as $row)
<option @if($row->city_id==$user_data->city_id) selected="" @endif value="{{ $row->city_id }}">
{{ $row->city_name }}
</option>
@endforeach
@endif
</select>
</div>
</li><div class="btpad"></div>

{{--  <li class="row" class="listtopmarg">
<div class="col-4">
<label for="">Mobile Number <span class="imporatant">*</span></label>
</div>
<div class="col-8">
<span class="colons">:</span>
<select name="" id="" class="allselects">
<option value="">Pakistan</option>
<option value="">India</option>
</select><input type="text" class="midlinput" placeholder="Mobile No.">
</div>
</li><div class="btpad"></div>
--}}
<li class="row" class="listtopmarg">
<div class="col-4">
<label for="">Convenient time to call</label>
</div>
<div class="col-8">
<span class="colons">:</span>



<select name="convenient_time" class="allselects">
<option @if($user_data->convenient_time=='7 AM') selected="" @endif value="7 AM">7 AM</option>
<option @if($user_data->convenient_time=='12 AM') selected="" @endif value="12 AM">12 AM</option>
<option @if($user_data->convenient_time=='Anytime') selected="" @endif value="Anytime">Anytime</option>
</select>

</div>
</li><div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-4">
<label for="">Contact person & Relationship</label>
</div>
<div class="col-8">
<span class="colons">:</span>
<input type="text" value="{{ $user_data->contact_person }}" name="contact_person" class="allinputs">
</div>
</li><div class="btpad"></div>


<!-- *********************************************** -->

<li class="row" class="listtopmarg">
<div class="col-0">
<img src="{{ $user_assets }}/icons/general-attributes.png">
</div>
<div class="col-10">
<p class="sechead">General Attributes</p >
</div>
</li>

<hr class="lineinhead">

<li class="row" class="listtopmarg">
<div class="col-4">
<label for="">Blood Group</label>
</div>
<div class="col-8">
<span class="colons">:</span>

<select name="blood_group" id="blood_group" class="allselects">
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
</li><div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-4">
<label for="">Body type</label>
</div>
<div class="col-8">
<span class="colons">:</span>
<div class="radiyn">
<input type="radio" @if($user_data->body_type=='Slim') checked="" @endif name="body_type" value="Slim"> Slim &nbsp <input type="radio" @if($user_data->body_type=='Average') checked="" @endif name="body_type" value="Average"> Average &nbsp <input type="radio" name="body_type" @if($user_data->body_type=='Athletic') checked="" @endif value="Athletic"> Athletic &nbsp <input type="radio" name="body_type" @if($user_data->body_type=='Heavy') checked="" @endif value="Heavy"> Heavy
</div>
</div>
</li><div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-4">
<label for="">Diet</label>
</div>
<div class="col-8">
<span class="colons">:</span>

<select name="diet" class="allselects">
<option @if($user_data->diet=='Vagetarian') selected="" @endif value="Vagetarian">Vagetarian</option>
<option @if($user_data->diet=='Non-Vagetarian') selected="" @endif value="Non-Vagetarian">Non-Vagetarian</option>

</select>
</div>
<li class="row" class="listtopmarg">
<div class="col-4">
<label for="">Are you do Smoking?</label>
</div>
<div class="col-8">
<span class="colons">:</span>
<div class="radiyn">
<input type="radio" name="smoking" @if($user_data->smoking=='Yes') checked="" @endif value="Yes"> Yes <input type="radio" name="smoking" @if($user_data->smoking=='No') checked="" @endif value="No"> No
</div>
</div>
</li><div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-4">
<label for="">Are you the patient of thelisimia?<span class="imporatant">*</span></label>
</div>
<div class="col-8">
<span class="colons">:</span>
<div class="radiyn">
<input type="radio" @if($user_data->thelisimia=='Yes') checked="" @endif name="thelisimia" value="Yes"> Yes <input type="radio" @if($user_data->thelisimia=='No') checked="" @endif name="thelisimia" value="No"> No
</div>
</div>
</li><div class="btpad"></div>

<li class="row" class="listtopmarg">
<div class="col-4">
<label for="">Are you suffering any diseace?<span class="imporatant">*</span></label>
</div>
<div class="col-8">
<span class="colons">:</span>
<input type="radio" name="diseace" @if($user_data->diseace=='Yes') checked="" @endif value="Yes"> Yes <input type="radio" @if($user_data->diseace=='No') checked="" @endif name="thelisimia" value="No"> No
</div>
</li><div class="btpad"></div>
{{-- </li><div class="btpad"></div> --}}



<li class="row" class="listtopmarg">
<div class="col-4">
<label for="">how did you find about us?</label>
</div>
<div class="col-8">
<span class="colons">:</span>
<select name="how_did" id="how_did" class="allselects">
<option value="Google">Google</option>
<option value="Facebook">Facebook</option>
<option value="Twiter">Twiter</option>
<option value="Kaboolhai Marketing">Kaboolhai Marketing</option>
<option value="Friends">Friends</option>
<option value="Whatsapp">Whatsapp</option>
</select>

{{--  --}}
</div>
</li><div class="btpad"></div>
<li class="row" class="listtopmarg">
<div class="col-4">

</div>
<div class="col-8">
<span class="colons">:</span>
<div class="agreestat">
<input type="checkbox" @if($user_data->agreed=='on') checked="" @endif name="agreed">&nbsp I have read and agreed to the <a href="#">T&C</a> and <a href="#">Privacy Policy</a>
</div>
</div>
</li><div class="btpad"></div>



<li class="row" class="listtopmarg">
<div class="col-9">

</div>
<div class="col-2">
<button class="btn btn-success">Save</button>
</div>
</li>

</form>
</ul>
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
</li>
</div>
</li>
</d<ul>
</div>
</div>
</div>
</div>
</div>.
</div>
</div>
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
{{--
<div class="container-fluid"> --}} {{--
<div class="row"> --}}
<div class="col-md-2" style="margin-top: 30px" ;>
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
<td class="flinks"><a href="" style="color: white">Keyword Search</a></td>
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
$("#profile_created").val('{{$user_data->profile_created}}');
$("#skin_color").val('{{$user_data->skin_color}}');
$("#physical_status").val('{{$user_data->physical_status}}');
$("#user_height").val('{{$user_data->height}}');
$("#weight").val('{{$user_data->weight}}');
$("#qualification").val('{{$user_data->qualification}}');
$("#language").val('{{$user_data->language}}');
$("#cast").val('{{$user_data->cast}}');
$("#bread").val('{{$user_data->bread}}');
$("#sect_are").val('{{$user_data->sect_are}}');
$("#religiousness").val('{{$user_data->religiousness}}');
$("#pray").val('{{$user_data->pray}}');
$("#attend_religious_service").val('{{$user_data->attend_religious_service}}');
$("#ethnic_type").val('{{$user_data->ethnic_type}}');
$("#polygamy").val('{{$user_data->polygamy}}');
$("#read_quran").val('{{$user_data->read_quran}}');
$("#job").val('{{$user_data->job}}');
$("#a_income").val('{{$user_data->a_income}}');
$("#blood_group").val('{{$user_data->blood_group}}');
$("#disabilty").val('{{$user_data->disabilty}}');
$("#how_did").val('{{$user_data->how_did}}');

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
</script>
</body>
</html>
