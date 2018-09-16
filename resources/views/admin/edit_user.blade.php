@extends('admin/master_layout')
 @section('data')
<section id="main-content" class=" ">
    <section class="wrapper main-wrapper row" style=''>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">
  <link rel="stylesheet" href="{{ $user_assets }}/css/style2.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

{{-- <link rel="stylesheet" href="{{ $user_assets }}/css/menu-hamburger.css" /> --}}


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="{{ $user_assets }}/js/custom2.js"></script>

</head>
<body>



 
    <div class="container">
     <div id="wait" style="display: none;"></div>
    <br>
    <div class="row">
      
      <div class="col-sm-12">
        <div class="well">
          <br>
            @if(Session::has('error'))
                    <p class="alert alert-danger">{{ Session::get('error') }}</p>
                @endif
                @if(Session::has('success'))
                    <p class="alert alert-success">{{ Session::get('success') }}</p>
                @endif
          <div class="menuwizard">
            <img id="one" class="wizrdpic" src="{{ $user_assets }}/img/registration-step 1.png" alt="" >
            <img id="two" class="wizrdpic" src="{{ $user_assets }}/img/registration-step 2.png" alt="" style="display:none;">
            <img id="three" class="wizrdpic" src="{{ $user_assets }}/img/registration-step 3.png" alt="" style="display: none;">
          </div>
          <form method="post" action="{{ url('admin/update-user') }}">
             
          <div class="form_area">
            <ul id="regform">
              <li class="row listtopmarg">
                <div class="col-3">
                  <label for="">First Name <span class="imporatant">*</span></label>
                </div>
                <div class="col-9">
                  <span class="colons">:</span>
                  <input type="text" name="firstname" value="{{ $edit_user->firstname }}"  class="allinputs" placeholder ="Enter Name">
                </div>
              </li><div class="btpad"></div>
               <li class="row listtopmarg">
                <div class="col-3">
                  <label for="">Last Name <span class="imporatant">*</span></label>
                </div>
                <input type="hidden" name="test_user_id" value="1">
                <div class="col-9">
                  <span class="colons">:</span>
                  <input type="text" name="lastname" value="{{ $edit_user->lastname }}"   class="allinputs" placeholder ="Enter Name">
                </div>
              </li><div class="btpad"></div>
              <li class="row listtopmarg" >
                <div class="col-3">
                  <label for="">Username <span class="imporatant">*</span></label>
                </div>
                <div class="col-9">
                  <span class="colons">:</span>
                  <input type="text" name="user_name"  value="{{ $edit_user->user_name }}" class="allinputs" placeholder ="Enter User Name">
                </div>
              </li><div class="btpad"></div>

             {{--  <li class="row listtopmarg" >
                <div class="col-3">
                  <label for="">Email <span class="imporatant">*</span></label>
                </div>
                <div class="col-9">
                  <div class="testemail" style="display: none; color: red">This Email already exist!</div>
                  <span class="colons">:</span>
                  <input type="email" name="email" id="email" class="allinputs" placeholder ="Enter Email">
                  
                </div>
              </li><div class="btpad"></div>

              <li class="row listtopmarg" >
                <div class="col-3">
                  <label for="">Password <span class="imporatant">*</span></label>
                </div>
                <div class="col-9">
                  <div class="dont_match" style="display: none; color: red">Password donot match please try again</div>
                  <span class="colons">:</span>
                  <input type="password" name="password" id="password" class="allinputs" placeholder ="Enter Password">
                </div>
              </li><div class="btpad"></div>

              <li class="row listtopmarg" >
                <div class="col-3">
                  <label for="">Confirm Password <span class="imporatant">*</span></label>
                </div>
                <div class="col-9">
                  <div class="dont_match" style="display: none; color: red">Password donot match please try again</div>
                  <span class="colons">:</span>
                  <input type="password" name="con_password" id="con_password" class="allinputs" placeholder="Confirm Password">
                </div>
              </li><div class="btpad"></div>
 --}}
              <li class="row listtopmarg" >
                <div class="col-3">
                  <label for="">Gender <span class="imporatant">*</span></label>
                </div>
                <div class="col-9">
                  <span class="colons">:</span>
                  <select name="gender" id="" class="allselects">
                    <option value="">Select</option>
                    <option @if($edit_user->gender=='Male') selected @endif  value="Male">Male</option>
                    <option @if($edit_user->gender=='Female') selected @endif value="Female">Female</option>
                  </select>
                  
                </div>
              </li><div class="btpad"></div>

              <li class="row listtopmarg">
                <div class="col-3">
                  <label for="">Country <span class="imporatant">*</span></label>
                </div>
                <div class="col-9">
                  <span class="colons">:</span>
                  {{-- <select name="" id="" > --}}
                    <select id="country" onchange="country_change(this)" name="country_id" class="allselects" >
                            <option selected="" value="">Select country 
                            </option>
                            @foreach ($country as $row)
                              <option @if($row->country_id==$edit_user->country_id) selected="" @endif value="{{ $row->country_id }}">
                                {{ $row->country_name }}
                              </option>
                             @endforeach
                          </select>
                </div>
              </li><div class="btpad"></div>

              <li class="row listtopmarg" >
                <div class="col-3">
                  <label for="">Province <span class="imporatant">*</span></label>

                </div>
                <div class="col-9">
                  <span class="colons">:</span>
                  {{-- <select name="" id="" > --}}
                    <select selected="selected" id="state" onchange="state_change(this)"  name="state_id" class="allselects" >

                             @foreach ($state as $row)
                              <option @if($row->state_id==$edit_user->state_id) selected="" @endif value="{{ $row->state_id }}">
                                {{ $row->state_name }}
                              </option>
                             @endforeach
                          </select>
                </div>
              </li><div class="btpad"></div>

              <li class="row listtopmarg">
                <div class="col-3">
                  <label for="">City <span class="imporatant">*</span></label>
                </div>
                <div class="col-9">
                  <span class="colons">:</span>
                  
                     <select  name="city_id" id="city" selected="selected" class="allselects" >
                   @foreach ($cities as $row)
                              <option @if($row->city_id==$edit_user->city_id) selected="" @endif value="{{ $row->city_id }}">
                                {{ $row->city_name }}
                              </option>
                             @endforeach
                  </select>
                </div>
              </li><div class="btpad"></div>

              <li class="row listtopmarg">
                <div class="col-3">
                  <label for="">Phone <span class="imporatant">*</span></label>
                </div>
                <div class="col-9">
                  <span class="colons">:</span>
                  <img style="margin-top: 4px; margin-bottom: 6px;" src="{{ $user_assets }}/flags/pk.png" width="20" id="falgimg">
                  {{-- <input type="text" placeholder="Flag" class="litinput"> --}}
                  <input type="text" readonly="" value="{{ $edit_user->code }}" name="code" id="code" value="+92" placeholder="Code" class="smallselect">
                  <input type="text" placeholder="phone code" value="{{ $edit_user->phone_code }}" name="phone_code"  class="smallselect" style="width:100px;">
                  <input type="text" placeholder="Enter Number" name="phone" value="{{ $edit_user->phone }}" class="allinputs">
                </div>
              </li><div class="btpad"></div>
              

            </ul>
<!-- *************************************************************************************** -->
            <ul id="basicinfo" style="display:none;">
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
        
              </li><div class="btpad"></div>
              <li class="row" class="listtopmarg">
                <div class="col-4">
                  <label for=""> DOB <span class="imporatant">*</span></label>
                </div>
                <div class="col-8">
                  <span class="colons">:</span>
                  <select  id="day" name="day" class="midlselect">
                    <option value="">Day..</option>
<option value="1" >1</option>
<option value="2" >2</option>
<option value="3" >3</option>
<option value="4" >4</option>
<option value="5" >5</option>
<option value="6" >6</option>
<option value="7" >7</option>
<option value="8" >8</option>
<option value="9" >9</option>
<option value="10" >10</option>
<option value="11" >11</option>
<option value="12" >12</option>
<option value="13" >13</option>
<option value="14" >14</option>
<option value="15" >15</option>
<option value="16" >16</option>
<option value="17" >17</option>
<option value="18" >18</option>
<option value="19" >19</option>
<option value="20" >20</option>
<option value="21" >21</option>
<option value="22" >22</option>
<option value="23" >23</option>
<option value="24" >24</option>
<option value="25" >25</option>
<option value="26" >26</option>
<option value="27" >27</option>
<option value="28" >28</option>
<option value="29" >29</option>
<option value="30" >30</option>
<option value="31" >31</option> 
                  </select>
                  <select id="month" name="month" class="midlselect">
                    <option value="">Month..</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option> 
                  </select>
                  <select id="year" name="year" class="midlselect">
                    <option value="">Year..</option>

                                  <option value="2018" >2018</option>
<option value="2017" >2017</option>
<option value="2016" >2016</option>
<option value="2015" >2015</option>
<option value="2014" >2014</option>
<option value="2013" >2013</option>
<option value="2012" >2012</option>
<option value="2011" >2011</option>
<option value="2010" >2010</option>
<option value="2009" >2009</option>
<option value="2007" >2007</option>
<option value="2006" >2006</option>
<option value="2005" >2005</option>
<option value="2004" >2004</option>
<option value="2003" >2003</option>
<option value="2002" >2002</option>
<option value="2001" >2001</option>
<option value="2000" >2000</option>
<option value="1999" >1999</option>
<option value="1998" >1998</option>
<option value="1997" >1997</option>
<option value="1996" >1996</option>
<option value="1995" >1995</option>
<option value="1994" >1994</option>
<option value="1993" >1993</option>
<option value="1992" >1992</option>
<option value="1991" >1991</option>
<option value="1990" >1990</option>
<option value="1989" >1989</option>
<option value="1988" >1988</option>
<option value="1987" >1987</option>
<option value="1986" >1986</option>
<option value="1985" >1985</option>
<option value="1984" >1984</option>
<option value="1983" >1983</option>
<option value="1982" >1982</option>
<option value="1981" >1981</option>
<option value="1980" >1980</option>
<option value="1979" >1979</option>
<option value="1978" >1978</option>
<option value="1977" >1977</option>
<option value="1976" >1976</option>
<option value="1975" >1975</option>
<option value="1974" >1974</option>
<option value="1973" >1973</option>
<option value="1972" >1972</option>
<option value="1971" >1971</option>
<option value="1970" >1970</option>
<option value="1969" >1969</option>
<option value="1968" >1968</option>
<option value="1967" >1967</option>
<option value="1966" >1966</option>
<option value="1965" >1965</option>
<option value="1964" >1964</option>
<option value="1963" >1963</option>
<option value="1962" >1962</option>
<option value="1961" >1961</option>
<option value="1960" >1960</option>
<option value="1959" >1959</option>
<option value="1958" >1958</option>  
                  </select>
                </div>
              </li><div class="btpad"></div>
              
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
                  <select  id="weight" name="weight" class="allselects">
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
                  <label for="">Cast/Clan</label>
                </div>
                <div class="col-8">
                  <span class="colons">:</span>
                   <select name="cast" id="cast" class="allselects">
                    <option value="">Please Select..</option>
                      <option value="Jutt">Jutt</option>
                      <option value="Butt">Butt</option>
                       <option value="Gujjar">Gujjar</option>
                      <option value="Prefer not to say">Prefer not to say</option>
                  </select>&nbsp<input type="text" value="{{ $edit_user->clan }}" name="clan" class="midlinput">
                </div>
              </li><div class="btpad"></div>
              

              <li class="row" class="listtopmarg">
                <div class="col-4">
                  <label for="">Marital Status <span class="imporatant">*</span></label>
                </div>
                <div class="col-8">
                  <span class="colons">:</span>
                  <div class="radoinput">
                  <input type="radio" name="martial_status" @if($edit_user->martial_status=='Unmmaried') checked="" @endif value="Unmmaried"> Unmmaried &nbsp <input type="radio" @if($edit_user->martial_status=='Widow/Widower') checked="" @endif name="martial_status" value="Widow/Widower"> Widow/Widower &nbsp <input type="radio" name="martial_status" @if($edit_user->martial_status=='Divorcee') checked="" @endif value="Divorcee"> Divorcee &nbsp <input type="radio" @if($edit_user->martial_status=='Seprated') checked="" @endif name="martial_status" value="Seprated"> Seprated
                  </div>

                </li><div class="btpad"></div>


                   <li class="row" class="listtopmarg">
                <div class="col-4">
                  <label for=""> Hobbies/Interest</label>
                </div>
                <div class="col-8">
                  
                  <div class="input-group">
                   :<input type="text" value="hobbies" name="hobbies" class="allselects" style="margin-left: 13px;">
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
                      <a href="">Select all in Antarctica</a>
                    </div>
                    <div class="col-6">
                      <a href="">clear all</a>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-5">
                      <input type="checkbox"  @if (preg_match("/Book Reading/", "$hobbies")) checked="" @endif name="hobbies_type[]" value="Book Reading">Book Reading<br>
                      <input type="checkbox" name="hobbies_type[]" @if (preg_match("/Playing Cricket/", "$hobbies")) checked="" @endif value="Playing Cricket">Playing Cricket<br>
                            
                    </div>
                    <div class="col-5">
                      <input type="checkbox" name="hobbies_type[]" @if (preg_match("/Football/", "$hobbies")) checked="" @endif value="Football">Football <br>
                      <input type="checkbox" name="hobbies_type[]" @if (preg_match("/Reading News/", "$hobbies")) checked="" @endif value="Reading News">Reading News <br>
                       <input type="checkbox" onchange="other_hobi(this)"  value="Other">Other<br>
                              
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
                  <label for="">Bread</label>
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
                    <input type="radio" @if($edit_user->religious_type=='Yes') checked="" @endif name="religious_type" value="Yes"> Yes &nbsp <input type="radio" name="religious_type" value="No" @if($edit_user->religious_type=='No') checked="" @endif> No
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
                   <option  value="">Please select..</option>
<option value="A Muslim">Just a Muslim</option>
<option value="Sunni">Sunni</option>
<option value="Shia">Shia</option>
<option value="Salafi">Salafi</option>
<option value="Jamat Islami">Jam'at Islami</option>
<option value="Thableegh Jamaath">Thableegh Jamaath</option>
<option value="Shafi">Shafi'i</option>
<option value="Hanafi">Hanafi</option>
<option value="Hanabali">Hanabali</option>
<option value="Maliki">Maliki</option>
<option value="Sayyid">Sayyid</option>
<option value="Urdu Muslim">Urdu Muslim</option>
<option value="Bohra">Bohra</option>
<option value="Pathan">Pathan</option>
<option value="Sufism">Sufism</option>
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
                    
                                        <option value="Accept polygamy">Accept polygamy</option>
                                        <option value="Maybe accept polygamy">Maybe accept polygamy</option>
                                        <option value="Don't accept polygamy">Don't accept polygamy</option>
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
           <option value='' selected='selected'>rather not say</option>
<option value='ALG'>Algerian</option>
<option value='A_AR'>Arab</option>
<option value='A_CA'>Carribean</option>
<option value='A_TU'>Turkish</option>
<optgroup label='Asian'>
<option value='A_AF'>Asian - Afghan</option>
<option value='A_BD'>Asian - Bangladeshi</option>
<option value='A_CH'>Asian - Chinese</option>
<option value='A_FI'>Asian - Filipino</option>
<option value='A_IN'>Asian - Indian</option>
<option value='A_ID'>Asian - Indonesian</option>
<option value='A_KU'>Asian - Kurdish</option>
<option value='A_KY'>Asian - Kyrgyz</option>
<option value='A_MY'>Asian - Malay</option>
<option value='A_MV'>Asian - Maldives</option>
<option value='A_PK'>Asian - Pakistani</option>
<option value='A_SL'>Asian - Sri Lankan</option>
<option value='A_OB'>Asian - Other Background</option>
<option value='IC'>Indian Carribean</option>
</optgroup>
<optgroup label='White'>
<option value='W_AM'>White - American</option>
<option value='W_AU'>White - Australian</option>
<option value='W_BR'>White - British</option>
<option value='W_CA'>White - Canadian</option>
<option value='W_HS'>White - Hispanic</option>
<option value='W_OT'>White - Other Background</option>
</optgroup>
<optgroup label='Black'>
<option value='B_AF'>Black - African</option>
<option value='B_AM'>Black - American</option>
<option value='B_BR'>Black - British</option>
<option value='B_CA'>Black - Caribbean</option>
<option value='B_ET'>Black - Ethiopian</option>
<option value='B_SO'>Black - Somali</option>
<option value='B_OT'>Black - Other Background</option>
<option value='MAU'>Mauritian</option>
</optgroup>
<optgroup label='Other Ethnic Group'>
<option value='ALB'>Albanian</option>
<option value='BOS'>Bosnian</option>
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
                  <input type="text" value="{{ $edit_user->edu_detail }}" name="edu_detail" class="allinputs">
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
                    <option value="Cival Engineer">Cival Engineer </option>
                    <option value="Electrical Engineer">Electrical Engineer</option>
                    <option value="MBBS">MBBS</option>
                    <option value="BBA">BBA</option>
                    <option value="CA">CA</option>

                    <option value="CSS Officer">CSS Officer </option>
                    <option value="Other">Other</option>
                    
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
                  <input type="text" name="occupation_detail" value="{{ $edit_user->occupation_detail }}" placeholder="Please enter occupation detail" class="allselects">
                
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
                  <textarea name="full_address" id="" cols="30" rows="10" class="addTarea">{{ $edit_user->full_address }}</textarea>
                </div>
              </li><div class="btpad"></div>

              <li class="row" class="listtopmarg">
                <div class="col-4">
                  <label for=""> Present Location</label>
                </div>
                <div class="col-8">
                  <span class="colons">:</span>
                  <select name="present_country_id" class="allselects" >
                            <option selected="" value="">Select country 
                            </option>
                            @foreach ($country as $row)
                              <option @if($row->country_id==$edit_user->present_country_id) selected="" @endif value="{{ $row->country_id }}">
                                {{ $row->country_name }}
                              </option>
                             @endforeach
                          </select>
                  </select>
                  <input type="text" name="present_city" value="{{ $edit_user->present_city }}" class="midlinput" placeholder="City">
                </div>
              </li><div class="btpad"></div>

              <li class="row" class="listtopmarg">
                <div class="col-4">
                  <label for="">Native Country <span class="imporatant">*</span></label>
                </div>
                <div class="col-8">
                  <span class="colons">:</span>
                   <select id="country" onchange="country_change1(this)" name="native_country_id" class="allselects" >
                            <option selected="" value="">Select country 
                            </option>
                            @foreach ($country as $row)
                              <option @if($row->country_id==$edit_user->native_country_id) selected="" @endif value="{{ $row->country_id }}">
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
                  <select selected="selected" id="native_state" onchange="state_change1(this)"  name="native_state_id" class="allselects" >
                             @foreach ($native_state as $row)
                              <option @if($row->state_id==$edit_user->state_id) selected="" @endif value="{{ $row->state_id }}">
                                {{ $row->state_name }}
                              </option>
                             @endforeach
                          </select>
                </div>
              </li><div class="btpad"></div>

              <li class="row" class="listtopmarg">
                <div class="col-4">
                  <label for=""> Native City (eg: Lahore) <span class="imporatant">*</span></label>
                </div>
                <div class="col-8">
                  <span class="colons">:</span>
                 <select  name="native_city_id" id="native_city" selected="selected" class="allselects" >
                  @foreach ($native_cities as $row)
                              <option @if($row->city_id==$edit_user->city_id) selected="" @endif value="{{ $row->city_id }}">
                                {{ $row->city_name }}
                              </option>
                             @endforeach
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
                                  <option @if($edit_user->convenient_time=='7 AM') selected="" @endif value="7 AM">7 AM</option>
                                  <option @if($edit_user->convenient_time=='12 AM') selected="" @endif value="12 AM">12 AM</option>
                                  <option @if($edit_user->convenient_time=='Anytime') selected="" @endif value="Anytime">Anytime</option>
                                </select>
                  
                </div>
              </li><div class="btpad"></div>

              <li class="row" class="listtopmarg">
                <div class="col-4">
                  <label for="">Contact person & Relationship</label>
                </div>
                <div class="col-8">
                  <span class="colons">:</span>
                  <input type="text" value="{{ $edit_user->contact_person }}" name="contact_person" class="allinputs">
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
                  <input type="radio" @if($edit_user->body_type=='Slim') checked="" @endif name="body_type" value="Slim"> Slim &nbsp <input type="radio" @if($edit_user->body_type=='Average') checked="" @endif name="body_type" value="Average"> Average &nbsp <input type="radio" name="body_type" @if($edit_user->body_type=='Athletic') checked="" @endif value="Athletic"> Athletic &nbsp <input type="radio" name="body_type" @if($edit_user->body_type=='Heavy') checked="" @endif value="Heavy"> Heavy
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
                                  <option @if($edit_user->diet=='Vagetarian') selected="" @endif value="Vagetarian">Vagetarian</option>
                                  <option @if($edit_user->diet=='Non-Vagetarian') selected="" @endif value="Non-Vagetarian">Non-Vagetarian</option>
                               
                  </select>
                </div>
                 <li class="row" class="listtopmarg">
                <div class="col-4">
                  <label for="">Are you do Smoking?</label>
                </div>
                <div class="col-8">
                  <span class="colons">:</span>
                  <div class="radiyn">
                  <input type="radio" name="smoking" @if($edit_user->smoking=='Yes') checked="" @endif value="Yes"> Yes <input type="radio" name="smoking" @if($edit_user->smoking=='No') checked="" @endif value="No"> No
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
                  <input type="radio" @if($edit_user->thelisimia=='Yes') checked="" @endif name="thelisimia" value="Yes"> Yes <input type="radio" @if($edit_user->thelisimia=='No') checked="" @endif name="thelisimia" value="No"> No
                  </div>
                </div>
              </li><div class="btpad"></div>

               <li class="row" class="listtopmarg">
                <div class="col-4">
                  <label for="">Are you suffering any diseace?<span class="imporatant">*</span></label>
                </div>
                <div class="col-8">
                  <span class="colons">:</span>
                 <input type="radio" name="diseace" @if($edit_user->diseace=='Yes') checked="" @endif value="Yes"> Yes <input type="radio" @if($edit_user->diseace=='No') checked="" @endif name="thelisimia" value="No"> No
                </div>
              </li><div class="btpad"></div>
              {{-- </li><div class="btpad"></div> --}}

              <li class="row" class="listtopmarg">
                <div class="col-4">
                  <label for="">Disability</label>
                </div>
                <div class="col-8">
                  <span class="colons">:</span>
                  <select name="disabilty" id="disabilty" class="allselects">
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
                    <input type="checkbox" @if($edit_user->agreed=='on') checked="" @endif name="agreed">&nbsp I have read and agreed to the <a href="">T&C</a> and <a href="">Privacy Policy</a>
                  </div>
                </div>
              </li><div class="btpad"></div>


            </ul>
<!-- ***************************************************************************************** -->
            


            <ul id="advanceinfo"  style="display:none;">
              
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

              <li class="row" class="listtopmarg">
                <div class="col-9">
                  <textarea name="description" id="" class="prfdesctxt">{{ $edit_user->description }}</textarea>
                </div>
                <div class="col-3">
                  <img src="{{ $user_assets }}/icons/arrow.png" alt=""><br><span><a href="">Help me Write this</a></span>
                </div>
              </li>

              <!-- **************************************************** -->
              
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
                  <label for="">Complexion Preference</label>
                </div>
                <div class="col-8">
                  <span class="colons">:</span>
                  <select name="loking_skin_color" id="loking_skin_color" class="allselects">
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
                  <select name="loking_job" id="loking_jobs"  onchange="job_test(this)" class="allselects">
                    <option value="Softwarw Engineer">Softwarw Engineer</option>
                    <option value="Cival Engineer">Cival Engineer </option>
                    <option value="Electrical Engineer">Electrical Engineer</option>
                    <option value="MBBS">MBBS</option>
                    <option value="BBA">BBA</option>
                    <option value="CA">CA</option>

                    <option value="CSS Officer">CSS Officer </option>
                    <option value="Other">Other</option>
                    
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

              {{-- <li class="row" class="listtopmarg">
                <div class="col-4">
                  <label for=""> Country Living in</label>
                </div>
                <div class="col-8">
                  <span class="colons">:</span>
                  <select id="country" onchange="country_change2(this)" name="living_country_id" class="allselects" >
                            <option selected="" value="">Select country 
                            </option>
                            @foreach ($country as $row)
                              <option @if($row->country_id==$edit_user->living_country_id) selected="" @endif value="{{ $row->country_id }}">
                                {{ $row->country_name }}
                              </option>
                             @endforeach
                          </select>
                </div>
              </li><div class="btpad"></div>

              <li class="row" class="listtopmarg">
                <div class="col-4">
                  <label for=""> State</label>
                </div>
                <div class="col-8">
                  <span class="colons">:</span>
              
                   <select selected="selected" id="living_state" onchange="state_change2(this)"  name="living_state_id" class="allselects" >
                            @foreach ($living_state as $row)
                              <option @if($row->state_id==$edit_user->state_id) selected="" @endif value="{{ $row->state_id }}">
                                {{ $row->state_name }}
                              </option>
                             @endforeach
                          </select>
                  </select>
                </div>
              </li><div class="btpad"></div>

              <li class="row" class="listtopmarg">
                <div class="col-4">
                  <label for=""> District/City</label>
                </div>
                <div class="col-8">
                  <span class="colons">:</span>
                  <select  name="living_city_id" id="living_city" selected="selected" class="allselects" >
                    @foreach ($living_cities as $row)
                              <option @if($row->city_id==$edit_user->city_id) selected="" @endif value="{{ $row->city_id }}">
                                {{ $row->city_name }}
                              </option>
                             @endforeach
                  </select>
                </div>
              </li><div class="btpad"></div> --}}

             {{--  <li class="row" class="listtopmarg">
                <div class="col-4">
                  <label for=""> Citizenship</label>
                </div>
                <div class="col-8">
                  <span class="colons">:</span>
                  <select name="" id="" class="allselects">
                    <option value="">Pakistan</option>
                    <option value="">India</option>
                  </select>
                </div>
              </li><div class="btpad"></div> --}}


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
                    <input type="text" value="Africa" name="affrica" class="allselects">
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
                      <a href="">Select all in Africa</a>
                    </div>
                    <div class="col-6">
                      <a href="">clear all</a>
                    </div>
                  </div>
                  
                    
                  <div class="row">
                    <div class="col-4">
                      <input type="checkbox" @if (preg_match("/Algeria/", "$africa")) checked="" @endif value="Algeria" name="africa_country[]"> Algeria <br>

                      <input type="checkbox" @if (preg_match("/Angola/", "$africa")) checked="" @endif value="Angola" name="africa_country[]"> Angola <br>

                      <input type="checkbox" @if (preg_match("/Benin/", "$africa")) checked="" @endif value="Benin" name="africa_country[]"> Benin <br>

                      <input type="checkbox" @if (preg_match("/Botswana/", "$africa")) checked="" @endif value="Botswana" name="africa_country[]"> Botswana <br>

                      <input type="checkbox" @if (preg_match("/Burkina Faso/", "$africa")) checked="" @endif value="Burkina Faso" name="africa_country[]"> Burkina Faso <br>

                      <input type="checkbox" @if (preg_match("/Burundi/", "$africa")) checked="" @endif value="Burundi" name="africa_country[]"> Burundi <br>

                      <input type="checkbox" @if (preg_match("/Cameroon/", "$africa")) checked="" @endif value="Cameroon" name="africa_country[]"> Cameroon <br>

                      <input type="checkbox" @if (preg_match("/Cape Verde/", "$africa")) checked="" @endif value="Cape Verde" name="africa_country[]"> Cape Verde <br>

                      <input type="checkbox" @if (preg_match("/Central African Rep/", "$africa")) checked="" @endif value="Central African Rep" name="africa_country[]"> Central African Rep <br>

                      <input type="checkbox" @if (preg_match("/Chad/", "$africa")) checked="" @endif value="Chad" name="africa_country[]"> Chad <br>
                      <input type="checkbox" @if (preg_match("/Comoros/", "$africa")) checked="" @endif value="Comoros" name="africa_country[]"> Comoros <br>
                      <input type="checkbox" @if (preg_match("/Congo, DR/", "$africa")) checked="" @endif value="Congo, DR" name="africa_country[]"> Congo, DR <br>
                      <input type="checkbox" @if (preg_match("/Congo, Rep/", "$africa")) checked="" @endif value="Congo, Rep" name="africa_country[]"> Congo, Rep. <br>
                      <input type="checkbox" @if (preg_match("/Cote d'Ivoire/", "$africa")) checked="" @endif value="Cote d'Ivoire" name="africa_country[]"> Cote d'Ivoire <br>
                      <input type="checkbox" @if (preg_match("/Djibouti/", "$africa")) checked="" @endif value="Djibouti" name="africa_country[]"> Djibouti <br>
                      <input type="checkbox" @if (preg_match("/South Africa/", "$africa")) checked="" @endif value="South Africa" name="africa_country[]"> South Africa <br>
                      <input type="checkbox" @if (preg_match("/Sudan/", "$africa")) checked="" @endif value="Sudan" name="africa_country[]"> Sudan <br>
                      <input type="checkbox" @if (preg_match("/Swaziland/", "$africa")) checked="" @endif value="Swaziland" name="africa_country[]"> Swaziland <br>
                      <input type="checkbox" @if (preg_match("/Zambia/", "$africa")) checked="" @endif value="Zambia" name="africa_country[]"> Zambia <br>
                      <input type="checkbox" @if (preg_match("/Egypt/", "$africa")) checked="" @endif value="Egypt" name="africa_country[]"> Egypt <br>
                      
                    </div>
                    <div class="col-4">
                     <input type="checkbox" name="africa_country[]" value="Equatorial Guinea"> Equatorial Guinea <br>
                      <input type="checkbox" name="africa_country[]" @if (preg_match("/Eritrea/", "$africa")) checked="" @endif value="Eritrea"> Eritrea <br>
                      <input type="checkbox" name="africa_country[]" @if (preg_match("/Ethiopia/", "$africa")) checked="" @endif value="Ethiopia"> Ethiopia <br>
                      <input type="checkbox" name="africa_country[]" @if (preg_match("/Gabon/", "$africa")) checked="" @endif value="Gabon"> Gabon <br>
                      <input type="checkbox" name="africa_country[]" @if (preg_match("/Gambia/", "$africa")) checked="" @endif value="Gambia"> Gambia <br>
                      <input type="checkbox" name="africa_country[]" @if (preg_match("/Ghana/", "$africa")) checked="" @endif value="Ghana"> Ghana <br>
                      <input type="checkbox" name="africa_country[]" @if (preg_match("/Guinea/", "$africa")) checked="" @endif value="Guinea"> Guinea <br>
                      <input type="checkbox" name="africa_country[]" @if (preg_match("/Guinea-Bissau/", "$africa")) checked="" @endif value="Guinea-Bissau"> Guinea-Bissau <br>
                      <input type="checkbox" name="africa_country[]" @if (preg_match("/Kenya/", "$africa")) checked="" @endif value="Kenya"> Kenya <br>
                      <input type="checkbox" name="africa_country[]" @if (preg_match("/Lesotho/", "$africa")) checked="" @endif value="Lesotho"> Lesotho <br>
                      <input type="checkbox" name="africa_country[]" @if (preg_match("/Liberia/", "$africa")) checked="" @endif value="Liberia"> Liberia <br>
                      <input type="checkbox" name="africa_country[]" @if (preg_match("/Libya/", "$africa")) checked="" @endif value="Libya"> Libya <br>
                      <input type="checkbox" name="africa_country[]" @if (preg_match("/Madagascar/", "$africa")) checked="" @endif value="Madagascar"> Madagascar <br>
                      <input type="checkbox" name="africa_country[]" @if (preg_match("/Malawi/", "$africa")) checked="" @endif value="Malawi"> Malawi <br>
                      <input type="checkbox" name="africa_country[]" @if (preg_match("/Sierra Leone/", "$africa")) checked="" @endif value="Sierra Leone"> Sierra Leone <br>
                      <input type="checkbox" name="africa_country[]" @if (preg_match("/Somalia/", "$africa")) checked="" @endif value="Somalia"> Somalia <br>
                      <input type="checkbox" name="africa_country[]" @if (preg_match("/Tunisia/", "$africa")) checked="" @endif value="Tunisia"> Tunisia <br>
                      <input type="checkbox" name="africa_country[]" @if (preg_match("/Uganda/", "$africa")) checked="" @endif value="Uganda"> Uganda <br>
                      <input type="checkbox" name="africa_country[]" @if (preg_match("/Western Sahara/", "$africa")) checked="" @endif value="Western Sahara"> Western Sahara <br>
                      <input type="checkbox" name="africa_country[]"  @if (preg_match("/Mali/", "$africa")) checked="" @endif value="Mali"> Mali <br>
                    </div>
                    <div class="col-3">
                      <input type="checkbox" name="africa_country[]"  @if (preg_match("/Mauritania/", "$africa")) checked="" @endif value="Mauritania"> Mauritania <br>

                      <input type="checkbox" name="africa_country[]"  @if (preg_match("/Mauritius/", "$africa")) checked="" @endif value="Mauritius"> Mauritius <br>

                      <input type="checkbox" name="africa_country[]"  @if (preg_match("/Mayotte/", "$africa")) checked="" @endif value="Mayotte"> Mayotte <br>

                      <input type="checkbox" name="africa_country[]"  @if (preg_match("/Morocco/", "$africa")) checked="" @endif value="Morocco"> Morocco <br>

                      <input type="checkbox" name="africa_country[]" @if (preg_match("/Mozambique/", "$africa")) checked="" @endif  value="Mozambique"> Mozambique <br>

                      <input type="checkbox" name="africa_country[]" @if (preg_match("/Namibia/", "$africa")) checked="" @endif value="Namibia"> Namibia <br>
                      <input type="checkbox" name="africa_country[]" @if (preg_match("/Niger/", "$africa")) checked="" @endif value="Niger"> Niger <br>
                      <input type="checkbox" name="africa_country[]" @if (preg_match("/Nigeria/", "$africa")) checked="" @endif value="Nigeria"> Nigeria <br>
                      <input type="checkbox" name="africa_country[]" @if (preg_match("/Reunion/", "$africa")) checked="" @endif value="Reunion"> Reunion <br>
                      <input type="checkbox" name="africa_country[]" @if (preg_match("/Rwanda/", "$africa")) checked="" @endif value="Rwanda"> Rwanda <br>
                      <input type="checkbox" name="africa_country[]" @if (preg_match("/Saint Helena/", "$africa")) checked="" @endif value="Saint Helena"> Saint Helena <br>
                      <input type="checkbox" name="africa_country[]" @if (preg_match("/Sao Tome and Principe/", "$africa")) checked="" @endif value="Sao Tome and Principe"> Sao Tome and Principe <br>
                      <input type="checkbox" name="africa_country[]" @if (preg_match("/Senegal/", "$africa")) checked="" @endif value="Senegal"> Senegal <br>
                      <input type="checkbox" name="africa_country[]" @if (preg_match("/Seychelles/", "$africa")) checked="" @endif value="Seychelles"> Seychelles <br>
                      <input type="checkbox" name="africa_country[]" @if (preg_match("/Sierra Leone/", "$africa")) checked="" @endif value="Sierra Leone"> Sierra Leone <br>
                      <input type="checkbox" name="africa_country[]" @if (preg_match("/Somalia/", "$africa")) checked="" @endif value="Somalia"> Somalia <br>
                      <input type="checkbox" name="africa_country[]" @if (preg_match("/Tanzania/", "$africa")) checked="" @endif value="Tanzania"> Tanzania <br>
                      <input type="checkbox" name="africa_country[]" @if (preg_match("/Togo/", "$africa")) checked="" @endif value="Togo"> Togo <br>
                      <input type="checkbox" name="africa_country[]" @if (preg_match("/Zimbabwe/", "$africa")) checked="" @endif value="Zimbabwe"> Zimbabwe <br>
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
                    <input type="text" value="Antarctica" name="antarctica" class="allselects">
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
                      <a href="">Select all in Antarctica</a>
                    </div>
                    <div class="col-6">
                      <a href="">clear all</a>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-5">
                      <input type="checkbox" name="antarctica_country[]" @if (preg_match("/Bouvet Island/", "$antarctica")) checked="" @endif value="Bouvet Island"> Bouvet Island<br>
                      <input type="checkbox" name="antarctica_country[]" @if (preg_match("/French Southern Territ/", "$antarctica")) checked="" @endif value="French Southern Territ"> French Southern Territ. <br>
                            
                    </div>
                    <div class="col-5">
                      <input type="checkbox" name="antarctica_country[]" @if (preg_match("/Heard Island/", "$antarctica")) checked="" @endif value="Heard Island"> Heard Island <br>
                      <input type="checkbox" name="antarctica_country[]" @if (preg_match("/South Georgia/", "$antarctica")) checked="" @endif value="South Georgia"> South Georgia <br>
                              
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
                    <input type="text" value="Asia" name="asia" class="allselects">
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
                      <a href="">Select all in Asia</a>
                    </div>
                    <div class="col-6">
                      <a href="">clear all</a>
                    </div>
                  </div>
                  
                    
                  <div class="row">
                    <div class="col-4">
                      <input type="checkbox" name="asia_country[]" @if (preg_match("/Afghanistan/", "$asia")) checked="" @endif value="Afghanistan"> Afghanistan <br>
                      <input type="checkbox" name="asia_country[]" @if (preg_match("/Armenia/", "$asia")) checked="" @endif value="Armenia"> Armenia <br>
                      <input type="checkbox" name="asia_country[]" @if (preg_match("/Azerbaijan/", "$asia")) checked="" @endif value="Azerbaijan"> Azerbaijan <br>
                      <input type="checkbox" name="asia_country[]" @if (preg_match("/Bahrain/", "$asia")) checked="" @endif value="Bahrain"> Bahrain <br>
                      <input type="checkbox" name="asia_country[]" @if (preg_match("/Bangladesh/", "$asia")) checked="" @endif value="Bangladesh"> Bangladesh <br>
                      <input type="checkbox" name="asia_country[]" @if (preg_match("/Bhutan/", "$asia")) checked="" @endif value="Bhutan"> Bhutan <br>
                      <input type="checkbox" name="asia_country[]" @if (preg_match("/British Ind/", "$asia")) checked="" @endif value="British Ind"> British Ind.  <br>
                      <input type="checkbox" name="asia_country[]" @if (preg_match("/Brunei Darussalam/", "$asia")) checked="" @endif value="Brunei Darussalam"> Brunei Darussalam <br>
                      <input type="checkbox" name="asia_country[]" @if (preg_match("/Cambodia/", "$asia")) checked="" @endif value="Cambodia"> Cambodia <br>
                      <input type="checkbox" name="asia_country[]" @if (preg_match("/China/", "$asia")) checked="" @endif value="China"> China <br>
                      <input type="checkbox" name="asia_country[]" @if (preg_match("/Christmas Island/", "$asia")) checked="" @endif value="Christmas Island"> Christmas Island <br>
                      <input type="checkbox" name="asia_country[]"  @if (preg_match("/Cocos/", "$asia")) checked="" @endif value="Cocos"> Cocos <br>
                      <input type="checkbox" name="asia_country[]"  @if (preg_match("/Cyprus/", "$asia")) checked="" @endif value="Cyprus"> Cyprus <br>
                      <input type="checkbox" name="asia_country[]"  @if (preg_match("/Georgia/", "$asia")) checked="" @endif value="Georgia"> Georgia <br>
                      <input type="checkbox" name="asia_country[]"  @if (preg_match("/Hong Kong/", "$asia")) checked="" @endif value="Hong Kong"> Hong Kong <br>
                      <input type="checkbox" name="asia_country[]"  @if (preg_match("/India/", "$asia")) checked="" @endif value="India"> India <br>
                      <input type="checkbox" name="asia_country[]"  @if (preg_match("/Indonesia/", "$asia")) checked="" @endif value="Indonesia"> Indonesia <br>
                      <input type="checkbox" name="asia_country[]"  @if (preg_match("/Iran/", "$asia")) checked="" @endif value="Iran"> Iran <br>
                      <input type="checkbox" name="asia_country[]"  @if (preg_match("/Iraq/", "$asia")) checked="" @endif value="Iraq"> Iraq <br>
                      <input type="checkbox" name="asia_country[]"  @if (preg_match("/Israel/", "$asia")) checked="" @endif value="Israel"> Israel <br>
                      
                    </div>
                    <div class="col-4">
                      <input type="checkbox" name="asia_country[]"  @if (preg_match("/Japan/", "$asia")) checked="" @endif value="Japan"> Japan <br>
                      <input type="checkbox" name="asia_country[]"  @if (preg_match("/Kazakhstan/", "$asia")) checked="" @endif value="Kazakhstan"> Kazakhstan <br>
                      <input type="checkbox" name="asia_country[]"  @if (preg_match("/Korea, DPR/", "$asia")) checked="" @endif value="Korea, DPR"> Korea, DPR <br>
                      <input type="checkbox" name="asia_country[]"  @if (preg_match("/Korea, Rep. of/", "$asia")) checked="" @endif value="Korea, Rep. of"> Korea, Rep. of <br>
                      <input type="checkbox" name="asia_country[]"  @if (preg_match("/Kuwait/", "$asia")) checked="" @endif value="Kuwait"> Kuwait <br>
                      <input type="checkbox" name="asia_country[]"  @if (preg_match("/Kyrgyz Republic/", "$asia")) checked="" @endif value="Kyrgyz Republic"> Kyrgyz Republic <br>
                      <input type="checkbox" name="asia_country[]"  @if (preg_match("/Laos/", "$asia")) checked="" @endif value="Laos"> Laos <br>
                      <input type="checkbox" name="asia_country[]"  @if (preg_match("/Lebanon/", "$asia")) checked="" @endif value="Lebanon"> Lebanon <br>
                      <input type="checkbox" name="asia_country[]"  @if (preg_match("/Macao/", "$asia")) checked="" @endif value="Macao"> Macao <br>
                      <input type="checkbox" name="asia_country[]"  @if (preg_match("/Malaysia/", "$asia")) checked="" @endif value="Malaysia"> Malaysia <br>
                      <input type="checkbox" name="asia_country[]"  @if (preg_match("/Maldives/", "$asia")) checked="" @endif value="Maldives"> Maldives <br>
                      
                      <input type="checkbox" name="asia_country[]"  @if (preg_match("/Myanmar/", "$asia")) checked="" @endif value="Myanmar"> Myanmar <br>
                      <input type="checkbox" name="asia_country[]"  @if (preg_match("/Nepal/", "$asia")) checked="" @endif value="Nepal"> Nepal <br>
                      <input type="checkbox" name="asia_country[]"  @if (preg_match("/Oman/", "$asia")) checked="" @endif value="Oman"> Oman <br>
                      <input type="checkbox" name="asia_country[]"  @if (preg_match("/Pakistan/", "$asia")) checked="" @endif value="Pakistan"> Pakistan <br>
                      <input type="checkbox" name="asia_country[]"  @if (preg_match("/Palestine/", "$asia")) checked="" @endif value="Palestine"> Palestine <br>
                      <input type="checkbox" name="asia_country[]"  @if (preg_match("/Philippines/", "$asia")) checked="" @endif value="Philippines"> Philippines <br>
                      <input type="checkbox" name="asia_country[]"  @if (preg_match("/Qatar/", "$antarctica")) checked="" @endif value="Qatar"> Qatar <br>
                      <input type="checkbox" name="asia_country[]"  @if (preg_match("/Saudi Arabia/", "$asia")) checked="" @endif value="Saudi Arabia"> Saudi Arabia <br>
                    </div>
                    <div class="col-3">
                      <input type="checkbox" name="asia_country[]"  @if (preg_match("/Singapore/", "$asia")) checked="" @endif value="Singapore"> Singapore <br>
                      <input type="checkbox" name="asia_country[]"  @if (preg_match("/Sri Lanka/", "$asia")) checked="" @endif value="Sri Lanka"> Sri Lanka <br>
                      <input type="checkbox" name="asia_country[]"  @if (preg_match("/Syria/", "$asia")) checked="" @endif value="Syria"> Syria <br>
                      <input type="checkbox" name="asia_country[]"  @if (preg_match("/Taiwan/", "$asia")) checked="" @endif value="Taiwan"> Taiwan <br>
                      <input type="checkbox" name="asia_country[]"  @if (preg_match("/Tajikistan/", "$asia")) checked="" @endif value="Tajikistan"> Tajikistan <br>
                      <input type="checkbox" name="asia_country[]"  @if (preg_match("/Thailand/", "$asia")) checked="" @endif value="Thailand"> Thailand <br>
                      <input type="checkbox" name="asia_country[]"  @if (preg_match("/Timor-Leste/", "$asia")) checked="" @endif value="Timor-Leste"> Timor-Leste <br>
                      <input type="checkbox" name="asia_country[]"  @if (preg_match("/Turkey/", "$asia")) checked="" @endif value="Turkey"> Turkey <br>
                      <input type="checkbox" name="asia_country[]"  @if (preg_match("/Turkmenistan/", "$asia")) checked="" @endif value="Turkmenistan"> Turkmenistan <br>
                      <input type="checkbox" name="asia_country[]"  @if (preg_match("/United Arab/", "$asia")) checked="" @endif value="United Arab Emirates"> United Arab Emirates <br>
                      <input type="checkbox" name="asia_country[]"  @if (preg_match("/Uzbekistan/", "$asia")) checked="" @endif value="Uzbekistan"> Uzbekistan <br>
                      <input type="checkbox" name="asia_country[]"  @if (preg_match("/Vietnam/", "$asia")) checked="" @endif value="Vietnam"> Vietnam<br>
                      <input type="checkbox" name="asia_country[]"  @if (preg_match("/Yemen/", "$asia")) checked="" @endif value="Yemen"> Yemen <br>
                      
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
                    <input type="text" value="Europe" name="europe" class="allselects">
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
                      <a href="">Select all in Europe</a>
                    </div>
                    <div class="col-6">
                      <a href="">clear all</a>
                    </div>
                  </div>
                  
                    
                  <div class="row">
                    <div class="col-4">
                      <input type="checkbox" name="europe_country[]" value="Aland Islands"> Aland Islands <br>
                      <input type="checkbox" name="europe_country[]" @if(preg_match("/Albania/", "$europe")) checked="" @endif value="Albania"> Albania <br>
                      <input type="checkbox" name="europe_country[]" @if(preg_match("/Andorra/", "$europe")) checked="" @endif value="Andorra"> Andorra <br>
                      <input type="checkbox" name="europe_country[]" @if(preg_match("/Austria/", "$europe")) checked="" @endif value="Austria"> Austria <br>
                      <input type="checkbox" name="europe_country[]" @if (preg_match("/Belarus/", "$europe")) checked="" @endif value="Belarus"> Belarus <br>
                      <input type="checkbox" name="europe_country[]" @if(preg_match("/Belgium/", "$europe")) checked="" @endif value="Belgium"> Belgium <br>
                      <input type="checkbox" name="europe_country[]" @if(preg_match("/Bosnia and Herzegovina/", "$europe")) checked="" @endif value="Bosnia and Herzegovina"> Bosnia and Herzegovina <br>
                      <input type="checkbox" name="europe_country[]" @if (preg_match("/Bulgaria/", "$europe")) checked="" @endif value="Bulgaria"> Bulgaria <br>
                      <input type="checkbox" name="europe_country[]" @if(preg_match("/Croatia/", "$europe")) checked="" @endif value="Croatia"> Croatia <br>
                      <input type="checkbox" name="europe_country[]" @if(preg_match("/Czech Republic/", "$europe")) checked="" @endif value="Czech Republic"> Czech Republic <br>
                      <input type="checkbox" name="europe_country[]" @if(preg_match("/Denmark/", "$europe")) checked="" @endif value="Denmark"> Denmark <br>
                      <input type="checkbox" name="europe_country[]" @if(preg_match("/Estonia/", "$europe")) checked="" @endif value="Estonia"> Estonia <br>
                      <input type="checkbox" name="europe_country[]" @if(preg_match("/Faroe Islands/", "$europe")) checked="" @endif value="Faroe Islands"> Faroe Islands <br>
                      <input type="checkbox" name="europe_country[]" @if(preg_match("/Finland/", "$europe")) checked="" @endif value="Finland"> Finland <br>
                      <input type="checkbox" name="europe_country[]" @if(preg_match("/Yemen/", "$europe")) checked="" @endif value="France"> France <br>
                      <input type="checkbox" name="europe_country[]" @if(preg_match("/Germany/", "$europe")) checked="" @endif value="Germany"> Germany <br>
                      <input type="checkbox" name="europe_country[]" @if(preg_match("/Gibraltar/", "$europe")) checked="" @endif value="Gibraltar"> Gibraltar <br>
                      <input type="checkbox" name="europe_country[]" @if(preg_match("/Greece/", "$europe")) checked="" @endif value="Greece"> Greece <br>
                      <input type="checkbox" name="europe_country[]" @if(preg_match("/Guernsey/", "$europe")) checked="" @endif value="Guernsey"> Guernsey <br>
                      <input type="checkbox" name="europe_country[]" @if(preg_match("/Hungary/", "$europe")) checked="" @endif value="Hungary"> Hungary <br>
                      
                    </div>
                    <div class="col-4">
                      <input type="checkbox" name="europe_country[]" @if(preg_match("/Iceland/", "$europe")) checked="" @endif value="Iceland"> Iceland <br>
                      <input type="checkbox" name="europe_country[]" @if(preg_match("/Ireland/", "$europe")) checked="" @endif value="Ireland"> Ireland <br>
                      <input type="checkbox" name="europe_country[]" @if(preg_match("/Isle of Man/", "$europe")) checked="" @endif value="Isle of Man"> Isle of Man <br>
                      <input type="checkbox" name="europe_country[]" @if(preg_match("/Italy/", "$europe")) checked="" @endif value="Italy"> Italy <br>
                      <input type="checkbox" name="europe_country[]" @if(preg_match("/Jersey/", "$europe")) checked="" @endif value="Jersey"> Jersey <br>
                      <input type="checkbox" name="europe_country[]" @if(preg_match("/Kosovo/", "$europe")) checked="" @endif value="Kosovo"> Kosovo <br>
                      <input type="checkbox" name="europe_country[]" value="Latvia"> Latvia <br>
                      <input type="checkbox" name="europe_country[]" @if(preg_match("/Liechtenstein/", "$europe")) checked="" @endif value="Liechtenstein"> Liechtenstein <br>
                      <input type="checkbox" name="europe_country[]" @if(preg_match("/Lithuania/", "$europe")) checked="" @endif value="Lithuania"> Lithuania <br>
                      <input type="checkbox" name="europe_country[]" @if(preg_match("/Luxembourg/", "$europe")) checked="" @endif value="Luxembourg"> Luxembourg <br>
                      <input type="checkbox" name="europe_country[]" @if(preg_match("/Macedonia/", "$europe")) checked="" @endif value="Macedonia"> Macedonia <br>
                      <input type="checkbox" name="europe_country[]" @if(preg_match("/Malta/", "$europe")) checked="" @endif value="Malta"> Malta <br>
                      <input type="checkbox" name="europe_country[]" @if(preg_match("/Monaco/", "$europe")) checked="" @endif value="Monaco"> Monaco <br>
                      <input type="checkbox" name="europe_country[]" @if(preg_match("/Montenegro/", "$europe")) checked="" @endif value="Montenegro"> Montenegro <br>
                      <input type="checkbox" name="europe_country[]" @if(preg_match("/Netherlands/", "$europe")) checked="" @endif value="Netherlands"> Netherlands <br>
                      <input type="checkbox" name="europe_country[]" @if(preg_match("/Norway/", "$europe")) checked="" @endif  value="Norway"> Norway <br>
                      <input type="checkbox" name="europe_country[]" @if(preg_match("/Poland/", "$europe")) checked="" @endif  value="Poland"> Poland <br>
                      <input type="checkbox" name="europe_country[]" @if(preg_match("/Portugal/", "$europe")) checked="" @endif  value="Portugal"> Portugal <br>
                      <input type="checkbox" name="europe_country[]" @if(preg_match("/Romania/", "$europe")) checked="" @endif  value="Romania"> Romania <br>
                      <input type="checkbox" name="europe_country[]" @if(preg_match("/Russian Federation/", "$europe")) checked="" @endif  value="Russian Federation">Russian Federation<br>
                    </div>
                    <div class="col-3">
                      <input type="checkbox" name="europe_country[]" @if(preg_match("/San Marino/", "$europe")) checked="" @endif value="San Marino"> San Marino <br>
                      <input type="checkbox" name="europe_country[]" @if(preg_match("/Serbia/", "$europe")) checked="" @endif value="Serbia"> Serbia <br>
                      <input type="checkbox" name="europe_country[]" @if(preg_match("/Slovakia/", "$europe")) checked="" @endif value="Slovakia"> Slovakia <br>
                      <input type="checkbox" name="europe_country[]" @if(preg_match("/Slovenia/", "$europe")) checked="" @endif value="Slovenia"> Slovenia <br>
                      <input type="checkbox" name="europe_country[]" @if(preg_match("/Spain/", "$europe")) checked="" @endif value="Spain"> Spain <br>
                      <input type="checkbox" name="europe_country[]" @if(preg_match("/Svalbard and Jan Mayen/", "$europe")) checked="" @endif value="Svalbard and Jan Mayen"> Svalbard and Jan Mayen Is <br>
                      <input type="checkbox" name="europe_country[]" @if(preg_match("/Sweden/", "$europe")) checked="" @endif value="Sweden"> Sweden <br>
                     
                      <input type="checkbox" name="europe_country[]" @if(preg_match("/Ukraine/", "$europe")) checked="" @endif value="Ukraine"> Ukraine <br>
                      <input type="checkbox" name="europe_country[]" @if (preg_match("/United Kingdom/", "$europe")) checked="" @endif value="United Kingdom"> United Kingdom<br>
                      <input type="checkbox" name="europe_country[]" @if(preg_match("/Vatican City/", "$europe")) checked="" @endif value="Vatican City"> Vatican City <br>
                                            
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
                    <input type="text" value="North America" name="north_america" class="allselects">
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
                      <a href="">Select all in North America</a>
                    </div>
                    <div class="col-6">
                      <a href="">clear all</a>
                    </div>
                  </div>
                  
                    
                  <div class="row">
                    <div class="col-4">
                      <input type="checkbox" name="north_america_country[]" @if(preg_match("/Anguilla/", "$north_america")) checked="" @endif value="Anguilla"> Anguilla <br>
                      <input type="checkbox" name="north_america_country[]" @if(preg_match("/Antigua and Barbuda/", "$north_america")) checked="" @endif value="Antigua and Barbuda"> Antigua and Barbuda <br>
                      <input type="checkbox" name="north_america_country[]" @if(preg_match("/Aruba/", "$north_america")) checked="" @endif value="Aruba"> Aruba <br>
                      <input type="checkbox" name="north_america_country[]" @if(preg_match("/Bahamas/", "$north_america")) checked="" @endif value="Bahamas"> Bahamas <br>
                      <input type="checkbox" name="north_america_country[]" @if(preg_match("/Barbados/", "$north_america")) checked="" @endif value="Barbados"> Barbados <br>
                      <input type="checkbox" name="north_america_country[]" @if(preg_match("/Belize/", "$north_america")) checked="" @endif value="Belize"> Belize <br>
                      <input type="checkbox" name="north_america_country[]" @if(preg_match("/Bermuda/", "$north_america")) checked="" @endif value="Bermuda"> Bermuda <br>
                      <input type="checkbox" name="north_america_country[]" @if(preg_match("/British Virgin Islands/", "$north_america")) checked="" @endif value="British Virgin Islands"> British Virgin Islands <br>
                      <input type="checkbox" name="north_america_country[]" @if(preg_match("/Canada/", "$north_america")) checked="" @endif value="Canada"> Canada <br>
                      <input type="checkbox" name="north_america_country[]" @if(preg_match("/Cayman Islands/", "$north_america")) checked="" @endif value="Cayman Islands"> Cayman Islands <br>
                      <input type="checkbox" name="north_america_country[]" @if(preg_match("/Costa Rica/", "$north_america")) checked="" @endif value="Costa Rica"> Costa Rica <br>
                      <input type="checkbox" name="north_america_country[]"  @if(preg_match("/Cuba/", "$north_america")) checked="" @endif value="Cuba"> Cuba <br>
                      <input type="checkbox" name="north_america_country[]"  @if(preg_match("/Dominica/", "$north_america")) checked="" @endif value="Dominica"> Dominica <br>
                      <input type="checkbox" name="north_america_country[]"  @if(preg_match("/El Salvador/", "$north_america")) checked="" @endif value="El Salvador"> El Salvador <br>
                      <input type="checkbox" name="north_america_country[]"  @if(preg_match("/Greenland/", "$north_america")) checked="" @endif value="Greenland"> Greenland <br>
                      <input type="checkbox" name="north_america_country[]"  @if(preg_match("/Grenada/", "$north_america")) checked="" @endif value="Grenada"> Grenada <br>
                      <input type="checkbox" name="north_america_country[]"  @if(preg_match("/Guadeloupe/", "$north_america")) checked="" @endif value="Guadeloupe"> Guadeloupe <br>
                      <input type="checkbox" name="north_america_country[]"  @if(preg_match("/Guatemala/", "$north_america")) checked="" @endif value="Guatemala"> Guatemala <br>
                      <input type="checkbox" name="north_america_country[]"  @if(preg_match("/Haiti/", "$north_america")) checked="" @endif value="Haiti"> Haiti <br>
                      <input type="checkbox" name="north_america_country[]"  @if(preg_match("/Honduras/", "$north_america")) checked="" @endif value="Honduras"> Honduras <br>
                      
                    </div>
                    <div class="col-4">
                      <input type="checkbox" name="north_america_country[]"   @if(preg_match("/Jamaica/", "$north_america")) checked="" @endif value="Jamaica"> Jamaica <br>
                      <input type="checkbox" name="north_america_country[]"   @if(preg_match("/Martinique/", "$north_america")) checked="" @endif value="Martinique"> Martinique <br>
                      <input type="checkbox" name="north_america_country[]"   @if(preg_match("/Mexico/", "$north_america")) checked="" @endif value="Mexico"> Mexico <br>
                      <input type="checkbox" name="north_america_country[]"   @if(preg_match("/Montserrat/", "$north_america")) checked="" @endif value="Montserrat"> Montserrat <br>
                      <input type="checkbox" name="north_america_country[]"   @if(preg_match("/Netherlands/", "$north_america")) checked="" @endif value="Netherlands"> Netherlands Antilles <br>
                      <input type="checkbox" name="north_america_country[]"   @if(preg_match("/Nicaragua/", "$north_america")) checked="" @endif value="Nicaragua"> Nicaragua <br>
                      <input type="checkbox" name="north_america_country[]"   @if(preg_match("/Panama/", "$north_america")) checked="" @endif value="Panama"> Panama <br>
                      <input type="checkbox" name="north_america_country[]"   @if(preg_match("/Puerto Rico/", "$north_america")) checked="" @endif value="Puerto Rico"> Puerto Rico <br>
                      <input type="checkbox" name="north_america_country[]"  @if(preg_match("/Saint/", "$north_america")) checked="" @endif  value="Saint"> Saint Barthelemy <br>
                      <input type="checkbox" name="north_america_country[]"   @if(preg_match("/Saint Kitts and Nevis/", "$north_america")) checked="" @endif value="Saint Kitts and Nevis"> Saint Kitts and Nevis <br>
                      <input type="checkbox" name="north_america_country[]"   @if(preg_match("/Saint Lucia/", "$north_america")) checked="" @endif value="Saint Lucia"> Saint Lucia <br>
                      <input type="checkbox" name="north_america_country[]"   @if(preg_match("/Saint Martin/", "$north_america")) checked="" @endif value="Saint Martin"> Saint Martin <br>
                      <input type="checkbox" name="north_america_country[]"   @if(preg_match("/Saint Pierre and Miquelon/", "$north_america")) checked="" @endif value="Saint Pierre and Miquelon"> Saint Pierre and Miquelon <br>
                      <input type="checkbox" name="north_america_country[]"   @if(preg_match("/St Vincent and Grenadines/", "$north_america")) checked="" @endif value="St Vincent and Grenadines"> St Vincent and Grenadines <br>
                      <input type="checkbox" name="north_america_country[]"  @if(preg_match("/Trinidad and Tobago/", "$north_america")) checked="" @endif  value="Trinidad and Tobago"> Trinidad and Tobago <br>
                      
                    </div>
                    <div class="col-3">
                      <input type="checkbox" name="north_america_country[]" @if(preg_match("/Turks and Caicos Is/", "$north_america")) checked="" @endif value="Turks and Caicos Is"> Turks and Caicos Is <br>
                      <input type="checkbox" name="north_america_country[]" @if(preg_match("/US Virgin Islands/", "$north_america")) checked="" @endif value="US Virgin Islands"> US Virgin Islands <br>
                      <input type="checkbox" name="north_america_country[]" @if(preg_match("/Portugal/", "$north_america")) checked="" @endif value="Portugal"> Portugal <br>
                      <input type="checkbox" name="north_america_country[]" @if(preg_match("/Romania/", "$north_america")) checked="" @endif value="Romania"> Romania <br>
                      <input type="checkbox" name="north_america_country[]" @if(preg_match("/USA/", "$north_america")) checked="" @endif value="USA"> USA<br>
                                            
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
                    <input type="text" value="Australasia" name="australasia" class="allselects">
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
                      <a href="">Select all in North Australasia</a>
                    </div>
                    <div class="col-6">
                      <a href="">clear all</a>
                    </div>
                  </div>
                  
                    
                  <div class="row">
                    <div class="col-4">
                      <input type="checkbox" name="australasia_country[]" @if(preg_match("/American Samoa/", "$australasia")) checked="" @endif value="American Samoa"> American Samoa <br>
                      <input type="checkbox" name="australasia_country[]" @if(preg_match("/Australia/", "$australasia")) checked="" @endif value="Australia"> Australia <br>
                      <input type="checkbox" name="australasia_country[]" @if(preg_match("/Cook Islands/", "$australasia")) checked="" @endif value="Cook Islands"> Cook Islands <br>
                      <input type="checkbox" name="australasia_country[]" @if(preg_match("/Fiji/", "$australasia")) checked="" @endif value="Fiji"> Fiji <br>
                      <input type="checkbox" name="australasia_country[]" @if(preg_match("/French Polynesia/", "$australasia")) checked="" @endif value="French Polynesia"> French Polynesia <br>
                      <input type="checkbox" name="australasia_country[]" @if(preg_match("/Guam/", "$australasia")) checked="" @endif value="Guam"> Guam <br>
                      <input type="checkbox" name="australasia_country[]" @if(preg_match("/Kiribati/", "$australasia")) checked="" @endif value="Kiribati"> Kiribati <br>
                      <input type="checkbox" name="australasia_country[]" @if(preg_match("/Marshall Islands/", "$australasia")) checked="" @endif value="Marshall Islands"> Marshall Islands <br>
                      <input type="checkbox" name="australasia_country[]" @if(preg_match("/Micronesia/", "$australasia")) checked="" @endif value="Micronesia"> Micronesia <br>
                      <input type="checkbox" name="australasia_country[]" @if(preg_match("/Nauru/", "$australasia")) checked="" @endif value="Nauru"> Nauru <br>
                      <input type="checkbox" name="australasia_country[]" @if(preg_match("/New Caledonia/", "$australasia")) checked="" @endif value="New Caledonia"> New Caledonia <br>
                      <input type="checkbox" name="australasia_country[]" @if(preg_match("/New Zealand/", "$australasia")) checked="" @endif value="New Zealand"> New Zealand <br>
                      <input type="checkbox" name="australasia_country[]" @if(preg_match("/Niue/", "$australasia")) checked="" @endif value="Niue"> Niue <br>
                      <input type="checkbox" name="australasia_country[]" @if(preg_match("/Norfolk Island/", "$australasia")) checked="" @endif value="Norfolk Island"> Norfolk Island <br>
                                            
                    </div>
                    <div class="col-4">
                      <input type="checkbox" name="australasia_country[]" @if(preg_match("/Northern Mariana/", "$australasia")) checked="" @endif value="Northern Mariana"> Northern Mariana Is <br>
                      <input type="checkbox" name="australasia_country[]" @if(preg_match("/Palau/", "$australasia")) checked="" @endif value="Palau"> Palau <br>
                      <input type="checkbox" name="australasia_country[]" @if(preg_match("/Papua New Guinea/", "$australasia")) checked="" @endif value="Papua New Guinea"> Papua New Guinea <br>
                      <input type="checkbox" name="australasia_country[]" @if(preg_match("/Pitcairn Islands/", "$australasia")) checked="" @endif value="Pitcairn Islands"> Pitcairn Islands <br>
                      <input type="checkbox" name="australasia_country[]" @if(preg_match("/Samoa/", "$australasia")) checked="" @endif value="Samoa"> Samoa <br>
                      <input type="checkbox" name="australasia_country[]" @if(preg_match("/Solomon Islands/", "$australasia")) checked="" @endif value="Solomon Islands"> Solomon Islands <br>
                      <input type="checkbox" name="australasia_country[]" @if(preg_match("/Tokelau/", "$australasia")) checked="" @endif value="Tokelau"> Tokelau <br>
                      <input type="checkbox" name="australasia_country[]" @if(preg_match("/Tonga/", "$australasia")) checked="" @endif value="Tonga"> Tonga <br>
                      <input type="checkbox" name="australasia_country[]" @if(preg_match("/Tuvalu/", "$australasia")) checked="" @endif value="Tuvalu"> Tuvalu <br>
                      <input type="checkbox" name="australasia_country[]" @if(preg_match("/US Minor Outlying I/", "$australasia")) checked="" @endif value="US Minor Outlying I">US Minor Outlying I<br>
                      <input type="checkbox" name="australasia_country[]" @if(preg_match("/Vanuatu/", "$australasia")) checked="" @endif value="Vanuatu"> Vanuatu <br>
                      <input type="checkbox" name="australasia_country[]" @if(preg_match("/Wallis and Futuna/", "$australasia")) checked="" @endif value="Wallis and Futuna"> Wallis and Futuna<br>
                                            
                    </div>
                    <div class="col-3">
                      <input type="checkbox" name="australasia_country[]" @if(preg_match("/Turks and Caicos Is/", "$australasia")) checked="" @endif value="Turks and Caicos Is"> Turks and Caicos Is <br>
                      <input type="checkbox" name="australasia_country[]" @if(preg_match("/US Virgin Islands/", "$australasia")) checked="" @endif value="US Virgin Islands"> US Virgin Islands <br>
                      <input type="checkbox" name="australasia_country[]" @if(preg_match("/Portugal/", "$australasia")) checked="" @endif value="Portugal"> Portugal <br>
                      <input type="checkbox" name="australasia_country[]" @if(preg_match("/Romania/", "$australasia")) checked="" @endif value="Romania"> Romania <br>
                      <input type="checkbox" name="australasia_country[]" @if(preg_match("/USA/", "$australasia")) checked="" @endif value="USA"> USA<br>
                                            
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
                    <input type="text" value="South America" name="south_america" class="allselects">
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
                      <a href="">Select all in South America</a>
                    </div>
                    <div class="col-6">
                      <a href="">clear all</a>
                    </div>
                  </div>
                  
                    
                  <div class="row">
                    <div class="col-4">
                     <input type="checkbox" name="south_america_country[]" @if(preg_match("/Argentina/", "$south_america")) checked="" @endif value="Argentina"> Argentina <br>
                      <input type="checkbox" name="south_america_country[]" @if(preg_match("/Bolivia/", "$south_america")) checked="" @endif value="Bolivia"> Bolivia <br>
                      <input type="checkbox" name="south_america_country[]" @if(preg_match("/Brazil/", "$south_america")) checked="" @endif value="Brazil"> Brazil <br>
                      <input type="checkbox" name="south_america_country[]" @if(preg_match("/Chile/", "$south_america")) checked="" @endif value="Chile"> Chile <br>
                      <input type="checkbox" name="south_america_country[]" @if(preg_match("/Colombia/", "$south_america")) checked="" @endif value="Colombia"> Colombia <br>
                      <input type="checkbox" name="south_america_country[]" @if(preg_match("/Ecuador/", "$south_america")) checked="" @endif value="Ecuador"> Ecuador <br>
                                                                  
                    </div>
                    <div class="col-4">
                      <input type="checkbox" name="south_america_country[]" @if(preg_match("/Falkland Islands/", "$south_america")) checked="" @endif value="Falkland Islands">Falkland Islands <br>
                      <input type="checkbox" name="south_america_country[]" @if(preg_match("/French Guiana/", "$south_america")) checked="" @endif value="French Guiana"> French Guiana <br>
                      <input type="checkbox" name="south_america_country[]" @if(preg_match("/Guyana/", "$south_america")) checked="" @endif value="Guyana"> Guyana <br>
                      <input type="checkbox" name="south_america_country[]" @if(preg_match("/Paraguay/", "$south_america")) checked="" @endif value="Paraguay"> Paraguay <br>
                      <input type="checkbox" name="south_america_country[]" @if(preg_match("/Peru/", "$south_america")) checked="" @endif value="Peru"> Peru <br>
                      <input type="checkbox" name="south_america_country[]" @if(preg_match("/Suriname/", "$south_america")) checked="" @endif value="Suriname"> Suriname <br>
                                                                  
                    </div>
                    <div class="col-3">
                      <input type="checkbox" name="south_america_country[]" @if(preg_match("/Uruguay/", "$south_america")) checked="" @endif  value="Uruguay"> Uruguay <br>
                      <input type="checkbox" name="south_america_country[]" @if(preg_match("/Venezuela/", "$south_america")) checked="" @endif  value="Venezuela"> Venezuela<br>
                                                                  
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

                    <input type="text" value="Residency Status" name="loking_residency_status" class="allselects">
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
                      <a href="">Select All</a>
                    </div>
                    <div class="col-6">
                      <a href="">clear all</a>
                    </div>
                  </div>
                  
                    
                  <div class="row">
                    <div class="col-4">
                      <input type="checkbox" name="residency_name[]" @if(preg_match("/Citizen/", "$residency_status")) checked="" @endif value="Citizen"> Citizen <br>
                      <input type="checkbox" name="residency_name[]" @if(preg_match("/Permanent Resident/", "$residency_status")) checked="" @endif value="Permanent Resident"> Permanent Resident <br>
                      <input type="checkbox" name="residency_name[]" @if(preg_match("/Student Visa/", "$residency_status")) checked="" @endif value="Student Visa"> Student Visa <br>
                                                                                        
                    </div>
                    <div class="col-4">
                      <input type="checkbox" name="residency_name[]" @if(preg_match("/Temporary Visa/", "$residency_status")) checked="" @endif value="Temporary Visa"> Temporary Visa <br>
                      <input type="checkbox" name="residency_name[]" @if(preg_match("/Work Permit/", "$residency_status")) checked="" @endif value="Work Permit"> Work Permit <br>
                      <input type="checkbox" name="residency_name[]" @if(preg_match("/Other/", "$residency_status")) checked="" @endif value="Other"> Other <br>
                      
                                                                  
                    </div>
                    
                    
                  </div>
                  </div>
                </div>
                
              

              <li class="row" class="listtopmarg">
                <div class="col-4">
                  <label for=""> Ethnic Origin </label>
                </div>
                <div class="col-8">
                  
                  <div class="input-group">
                    <input type="text" value="Ethnic Origin" name="loking_ethnic_origin" class="allselects">
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
                      <a href="">Select All</a>
                    </div>
                    <div class="col-6">
                      <a href="">clear all</a>
                    </div>
                  </div>
                  
                    
                  <div class="row">
                    <div class="col-4">
                      <input type="checkbox" name="origin_name[]" @if(preg_match("/Algerian/", "$ethnic_origin")) checked="" @endif value="Algerian"> Algerian <br>
                      <input type="checkbox" name="origin_name[]" @if(preg_match("/Arab/", "$ethnic_origin")) checked="" @endif value="Arab"> Arab <br>
                      <input type="checkbox" name="origin_name[]" @if(preg_match("/Carribean/", "$ethnic_origin")) checked="" @endif value="Carribean"> Carribean <br>
                      <input type="checkbox" name="origin_name[]" @if(preg_match("/Algerian/", "$ethnic_origin")) checked="" @endif value="Algerian"> Algerian <br>
                      <input type="checkbox" name="origin_name[]" @if(preg_match("/Turkish/", "$ethnic_origin")) checked="" @endif value="Turkish"> Turkish <br>
                       Asian <br>
                      <input type="checkbox" name="origin_name[]" @if(preg_match("/Asian - Afghan/", "$ethnic_origin")) checked="" @endif value="Asian - Afghan"> Asian - Afghan <br>
                      <input type="checkbox" name="origin_name[]" @if(preg_match("/Asian - Bangladeshi/", "$ethnic_origin")) checked="" @endif value="Asian - Bangladeshi"> Asian - Bangladeshi <br>
                      <input type="checkbox" name="origin_name[]" @if(preg_match("/Asian - Chinese/", "$ethnic_origin")) checked="" @endif value="Asian - Chinese"> Asian - Chinese <br>
                      <input type="checkbox" name="origin_name[]" @if(preg_match("/Asian - Filipino/", "$ethnic_origin")) checked="" @endif value="Asian - Filipino"> Asian - Filipino <br>
                      <input type="checkbox" name="origin_name[]" @if(preg_match("/Asian - Indian/", "$ethnic_origin")) checked="" @endif value="Asian - Indian"> Asian - Indian <br>
                      <input type="checkbox" name="origin_name[]" @if(preg_match("/Asian - Indonesian/", "$ethnic_origin")) checked="" @endif value="Asian - Indonesian"> Asian - Indonesian <br>
                      <input type="checkbox" name="origin_name[]" @if(preg_match("/Asian - Kurdish/", "$ethnic_origin")) checked="" @endif value="Asian - Kurdish"> Asian - Kurdish <br>
                      <input type="checkbox" name="origin_name[]" @if(preg_match("/Asian - Kyrgyz/", "$ethnic_origin")) checked="" @endif value="Asian - Kyrgyz"> Asian - Kyrgyz <br>
                      <input type="checkbox" name="origin_name[]"> Asian - Malay <br>
                                                                                        
                    </div>
                    <div class="col-4">
                      <input type="checkbox" name="origin_name[]" @if(preg_match("/Asian - Maldives/", "$ethnic_origin")) checked="" @endif value="Asian - Maldives"> Asian - Maldives <br>
                      <input type="checkbox" name="origin_name[]" @if(preg_match("/Asian - Pakistani/", "$ethnic_origin")) checked="" @endif value="Asian - Pakistani"> Asian - Pakistani <br>
                      <input type="checkbox" name="origin_name[]" @if(preg_match("/Asian - Sri Lankan/", "$ethnic_origin")) checked="" @endif value="Asian - Sri Lankan"> Asian - Sri Lankan <br>
                      <input type="checkbox" name="origin_name[]" @if(preg_match("/Asian - Other Background/", "$ethnic_origin")) checked="" @endif value="Asian - Other Background"> Asian - Other Background <br>
                      <input type="checkbox" name="origin_name[]" @if(preg_match("/Indian Carribean/", "$ethnic_origin")) checked="" @endif value="Indian Carribean <br>
                      White"> Indian Carribean <br>
                      White <br>
                      <input type="checkbox" name="origin_name[]" @if(preg_match("/White - American/", "$ethnic_origin")) checked="" @endif value="White - American"> White - American <br>
                      <input type="checkbox" name="origin_name[]" @if(preg_match("/White - Australian/", "$ethnic_origin")) checked="" @endif value="White - Australian"> White - Australian <br>
                      <input type="checkbox" name="origin_name[]" @if(preg_match("/White - Canadian/", "$ethnic_origin")) checked="" @endif value="White - Canadian"> White - Canadian <br>
                      <input type="checkbox" name="origin_name[]" @if(preg_match("/White - Hispanic/", "$ethnic_origin")) checked="" @endif value="White - Hispanic"> White - Hispanic <br>
                      <input type="checkbox" name="origin_name[]" @if(preg_match("/White - Other Background/", "$ethnic_origin")) checked="" @endif value="White - Other Background"> White - Other Background <br>
                      Black <br>
                      <input type="checkbox" name="origin_name[]" @if(preg_match("/Black - African/", "$ethnic_origin")) checked="" @endif value="Black - African"> Black - African <br>
                      <input type="checkbox" name="origin_name[]" @if(preg_match("/Black - American/", "$ethnic_origin")) checked="" @endif value="Black - American"> Black - American <br>
                      <input type="checkbox" name="origin_name[]" @if(preg_match("/Black - British/", "$ethnic_origin")) checked="" @endif value="Black - British"> Black - British <br>
                      
                                                                  
                    </div>
                    <div class="col-3">
                      <input type="checkbox" name="origin_name[]" @if(preg_match("/Black - Caribbean/", "$ethnic_origin")) checked="" @endif value="Black - Caribbean"> Black - Caribbean <br>
                      <input type="checkbox" name="origin_name[]" @if(preg_match("/Black - Ethiopian/", "$ethnic_origin")) checked="" @endif value="Black - Ethiopian"> Black - Ethiopian <br>
                      <input type="checkbox" name="origin_name[]" @if(preg_match("/Black - Somali/", "$ethnic_origin")) checked="" @endif value="Black - Somali"> Black - Somali <br>
                      <input type="checkbox" name="origin_name[]" @if(preg_match("/Black - Other Background/", "$ethnic_origin")) checked="" @endif value="Black - Other Background"> Black - Other Background <br>
                      <input type="checkbox" name="origin_name[]" @if(preg_match("/Mauritian/", "$ethnic_origin")) checked="" @endif value="Mauritian"> Mauritian <br>
                      Other Ethnic Group <br>
                      <input type="checkbox" name="origin_name[]" @if(preg_match("/Albanian/", "$ethnic_origin")) checked="" @endif value="Albanian"> Albanian <br>
                      <input type="checkbox" name="origin_name[]" @if(preg_match("/Bosnian/", "$ethnic_origin")) checked="" @endif value="Bosnian"> Bosnian <br>
                      <input type="checkbox" name="origin_name[]" @if(preg_match("/Other Ethnicity/", "$ethnic_origin")) checked="" @endif value="Other Ethnicity"> Other Ethnicity <br>
                                          
                                                                  
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
                    <input type="text" value="Religious History" name="religious_history" class="allselects">
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
                      <a href="">Select All</a>
                    </div>
                    <div class="col-6">
                      <a href="">clear all</a>
                    </div>
                  </div>
                  
                    
                  <div class="row">
                    <div class="col-4">
                      <input type="checkbox" name="rel_history[]" @if(preg_match("/Muslim Since Birth/", "$religious_history")) checked="" @endif value="Muslim Since Birth"> Muslim Since Birth<br>
                      <input type="checkbox" name="rel_history[]" @if(preg_match("/Revert Muslim/", "$religious_history")) checked="" @endif value="Revert Muslim"> Revert Muslim<br>         
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
                    <input type="text" value="Living with" name="living_with" class="allselects">
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
                      <a href="">Select All</a>
                    </div>
                    <div class="col-6">
                      <a href="">clear all</a>
                    </div>
                  </div>
                  
                    
                  <div class="row">
                    <div class="col-6">
                      <input type="checkbox" name="living_law[]" @if(preg_match("/Definitely Consider/", "$living_with")) checked="" @endif value="Definitely Consider"> Definitely Consider<br>
                      <input type="checkbox" name="living_law[]" @if(preg_match("/May Consider/", "$living_with")) checked="" @endif value="May Consider"> May Consider<br>
                      <input type="checkbox" name="living_law[]" @if(preg_match("/Would not Consider/", "$living_with")) checked="" @endif value="Would not Consider"> Would not Consider<br>
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
                    <input type="text" value="Sects" name="loking_sects" class="allselects">
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
                      <a href="">Select All</a>
                    </div>
                    <div class="col-6">
                      <a href="">clear all</a>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-4">
                       <input type="checkbox" name="sects_type[]" @if(preg_match("/just Muslim/", "$sects")) checked="" @endif value="just Muslim"> just Muslim<br>
                      <input type="checkbox" name="sects_type[]" @if(preg_match("/Sunni Muslim/", "$sects")) checked="" @endif value="Sunni Muslim"> Sunni Muslim<br>
                      <input type="checkbox" name="sects_type[]" @if(preg_match("/Shia Muslim/", "$sects")) checked="" @endif value="Shia Muslim"> Shia Muslim<br>
                      <input type="checkbox" name="sects_type[]" @if(preg_match("/Salafi/", "$sects")) checked="" @endif value="Salafi"> Salafi<br>
                       <input type="checkbox" name="sects_type[]" @if(preg_match("/Jam'at Islami/", "$sects")) checked="" @endif value="Jam'at Islami"> Jam'at Islami<br>
                      <input type="checkbox" name="sects_type[]" @if(preg_match("/Thableegh Jamaath/", "$sects")) checked="" @endif value="Thableegh Jamaath"> Thableegh Jamaath<br>
                      <input type="checkbox" name="sects_type[]" @if(preg_match("/Shafi'i/", "$sects")) checked="" @endif value="Shafi'i"> Shafi'i<br>
                    </div>
                    <div class="col-3">
                      <input type="checkbox" name="sects_type[]" @if(preg_match("/Hanafi/", "$sects")) checked="" @endif value="Hanafi"> Hanafi<br>
                      <input type="checkbox" name="sects_type[]" @if(preg_match("/Hanabali/", "$sects")) checked="" @endif value="Hanabali"> Hanabali<br>
                      <input type="checkbox" name="sects_type[]" @if(preg_match("/Maliki/", "$sects")) checked="" @endif value="Maliki"> Maliki<br>
                       <input type="checkbox" name="sects_type[]" @if(preg_match("/Sayyid/", "$sects")) checked="" @endif value="Sayyid"> Sayyid<br>
                      <input type="checkbox" name="sects_type[]" @if(preg_match("/Urdu Muslim/", "$sects")) checked="" @endif value="Urdu Muslim"> Urdu Muslim<br>
                      <input type="checkbox" name="sects_type[]" @if(preg_match("/Bohra'i/", "$sects")) checked="" @endif value="Bohra'i"> Bohra'i<br>
                       <input type="checkbox" name="sects_type[]" @if(preg_match("/Pathan/", "$sects")) checked="" @endif value="Pathan"> Pathan<br>
                       <input type="checkbox" name="sects_type[]" @if(preg_match("/Sufism/", "$sects")) checked="" @endif value="Sufism"> Sufism<br>
                      
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
                    <input type="text" value="Pray" name="loking_pray" class="allselects">
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
                      <a href="">Select All</a>
                    </div>
                    <div class="col-6">
                      <a href="">clear all</a>
                    </div>
                  </div>
                  
                    
                  <div class="row">
                    <div class="col-6">
                      <input type="checkbox" name="pray_type[]" @if(preg_match("/Always pray/", "$pray")) checked="" @endif value="Always pray"> Always pray<br>
                      <input type="checkbox" name="pray_type[]" @if(preg_match("/Rarely miss a prayer and make Qadah Salah/", "$pray")) checked="" @endif value="Rarely miss a prayer and make Qadah Salah"> Rarely miss a prayer and make Qadah Salah<br>
                      <input type="checkbox" name="pray_type[]" @if(preg_match("/Sometimes miss Fajr and make Qadah Salah/", "$pray")) checked="" @endif value="Sometimes miss Fajr and make Qadah Salah"> Sometimes miss Fajr and make Qadah Salah<br>
                      <input type="checkbox" name="pray_type[]" @if(preg_match("/Sometimes pray/", "$pray")) checked="" @endif value="Sometimes pray"> Sometimes pray<br>
                      <input type="checkbox" name="pray_type[]" @if(preg_match("/Only pray before exams/", "$pray")) checked="" @endif value="Only pray before exams"> Only pray before exams<br>
                    </div>
                    <div class="col-6">
                      <input type="checkbox" name="pray_type[]" @if(preg_match("/Eid Salah only/", "$pray")) checked="" @endif value="Eid Salah only"> Eid Salah only<br>
                      <input type="checkbox" name="pray_type[]" @if(preg_match("/Intend to start praying/", "$pray")) checked="" @endif value="Intend to start praying"> Intend to start praying<br>
                      <input type="checkbox" name="pray_type[]" @if(preg_match("/Don't pray/", "$pray")) checked="" @endif value="Don't pray"> Don't pray<br>
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
                    <input type="text" value="Has Children" name="has_child" class="allselects">
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
                      <a href="">Select All</a>
                    </div>
                    <div class="col-6">
                      <a href="">clear all</a>
                    </div>
                  </div>
                  
                    
                  <div class="row">
                    <div class="col-4">
                      <input type="checkbox" name="child_count[]"  @if(preg_match("/None/", "$has_children")) checked="" @endif value="None"> None<br>
                      <input type="checkbox" name="child_count[]"  @if(preg_match("/one/", "$has_children")) checked="" @endif value="one"> one<br>
                      
                    </div>
                    <div class="col-6">
                      <input type="checkbox" name="child_count[]"  @if(preg_match("/two/", "$has_children")) checked="" @endif value="two"> two<br>
                      <input type="checkbox" name="child_count[]"  @if(preg_match("/three or more/", "$has_children")) checked="" @endif value="three or more"> three or more<br>
                      
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
                    <input type="text" value="Like to Have" name="like_child" class="allselects">
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
                      <a href="">Select All</a>
                    </div>
                    <div class="col-6">
                      <a href="">clear all</a>
                    </div>
                  </div>
                  
                    
                  <div class="row">
                    <div class="col-4">
                      <input type="checkbox" name="child_like[]" @if(preg_match("/Yes/", "$like_child")) checked="" @endif value="Yes"> Yes<br>
                      
                    </div>
                    <div class="col-6">
                      <input type="checkbox" name="child_like[]" @if(preg_match("/No/", "$like_child")) checked="" @endif value="No"> No<br>
                      
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
                    <input type="text" value="Body Type" name="loking_body_type" class="allselects">
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
                      <a href="">Select All</a>
                    </div>
                    <div class="col-6">
                      <a href="">clear all</a>
                    </div>
                  </div>
                  
                    
                  <div class="row">
                    <div class="col-4">
                      <input type="checkbox" name="loking_body[]" @if(preg_match("/Slim Skinny/", "$loking_body_type")) checked="" @endif value="Slim/Skinny"> Slim/Skinny<br>
                      <input type="checkbox" name="loking_body[]" @if(preg_match("/Average/", "$loking_body_type")) checked="" @endif value="Average"> Average<br>
                      <input type="checkbox" name="loking_body[]" @if(preg_match("/Athletic/", "$loking_body_type")) checked="" @endif value="Athletic"> Athletic<br>
                    </div>
                    <div class="col-6">
                      <input type="checkbox" name="loking_body[]" @if(preg_match("/Muscular/", "$loking_body_type")) checked="" @endif value="Muscular"> Muscular<br>
                      <input type="checkbox" name="loking_body[]" @if(preg_match("/A few extra pounds/", "$loking_body_type")) checked="" @endif value="A few extra pounds"> A few extra pounds<br>
                      <input type="checkbox" name="loking_body[]" @if(preg_match("/Heavyset/", "$loking_body_type")) checked="" @endif value="Heavyset"> Heavyset<br>
                      
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
                    <input type="text" value="Observes Hija" name="observes_hijab" class="allselects">
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
                      <a href="">Select All</a>
                    </div>
                    <div class="col-6">
                      <a href="">clear all</a>
                    </div>
                  </div>
                  
                    
                  <div class="row">
                    <div class="col-4">
                      <input type="checkbox" name="hijab_time[]" @if(preg_match("/Always/", "$observes_hijab")) checked="" @endif value="Always"> Always<br>
                      <input type="checkbox" name="hijab_time[]" @if(preg_match("/Always with Niqab/", "$observes_hijab")) checked="" @endif value="Always with Niqab"> Always with Niqab<br>
                      
                    </div>
                    <div class="col-6">
                      <input type="checkbox" name="hijab_time[]" @if(preg_match("/Sometimes/", "$observes_hijab")) checked="" @endif value="Sometimes"> Sometimes<br>
                      <input type="checkbox" name="hijab_time[]" @if(preg_match("/Never/", "$observes_hijab")) checked="" @endif value="Never"> Never<br>
                      <input type="hidden" name="user_id" value="{{ $edit_user->id }}">
                      {{ csrf_field() }}
                    </div>
                                    
                    
                  </div>
                  </div>
                </div>
                
              </li><div class="btpad"></div>

              {{-- <li class="row" class="listtopmarg">
                <div class="col-4">
                  <label for=""> Minimum Qualification</label>
                </div>
                <div class="col-8">
                  
                  <select name="" id="" class="allselects">
                    <option value="">Master</option>
                    <option value="">Diploma</option>
                  </select>
                </div>
              </li><div class="btpad"></div> --}}

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


  
 
 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>    

            </ul>

          <div id="first_step">
            {{--  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Open modal
  </button> --}}
            <a href="#" class="btn firstnextbtn" onclick ="test_email()" id="first">Next</a>
          </div>

          <div id="secnd_step">
          
        {{--   <a href="#" class="btn prevtofirstbtn" id="previous">previous</a> --}}
          <a href="#" class="btn nexttothirdbtn" id="second">Next</a>
          </div>

          <div id="third_step">
          {{-- 
          <a href="#" class="btn prevsecbtn" id="third_pre">Previous</a> --}}
          <button type="submit" class="btn submitbtn" type="submit">Submit</button> 
          </div>

          </div>
        </div>
        <br>
      </div>
</form>

<script type="text/javascript">
$("#first").click(function(){
 
          
        
          $("#one").removeAttr("style").hide();
          $("#regform").removeAttr("style").hide();
          $("#first_step").hide();

        $("#two").removeAttr("style").show();
        $("#secnd_step").removeAttr("style").show();
         $("#basicinfo").removeAttr("style").show();
        
      
});

  // }
</script>


      
  <script type="text/javascript">

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
    function profile_test(sel)
    {
     var profile_test= sel.value;
     if(profile_test=='Self')
     {
      $('#gardian_name').show(500);
      $('#gardian_number').show(500);
     }
     else
     {
         $('#gardian_number').show(500);
      $('#gardian_name').hide(500);
     }
    }

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
    $("#day").val('{{$edit_user->day}}');
    $("#month").val('{{$edit_user->month}}');
    $("#year").val('{{$edit_user->year}}');
    $("#profile_created").val('{{$edit_user->profile_created}}');
     $("#skin_color").val('{{$edit_user->skin_color}}');
     $("#physical_status").val('{{$edit_user->physical_status}}');
     $("#user_height").val('{{$edit_user->height}}');
     $("#weight").val('{{$edit_user->weight}}');
     $("#qualification").val('{{$edit_user->qualification}}');
     $("#language").val('{{$edit_user->language}}');
     $("#cast").val('{{$edit_user->cast}}');
     $("#bread").val('{{$edit_user->bread}}');
     $("#sect_are").val('{{$edit_user->sect_are}}');
     $("#religiousness").val('{{$edit_user->religiousness}}');
     $("#pray").val('{{$edit_user->pray}}');
      $("#attend_religious_service").val('{{$edit_user->attend_religious_service}}');
      $("#ethnic_type").val('{{$edit_user->ethnic_type}}');
       $("#polygamy").val('{{$edit_user->polygamy}}');
      $("#read_quran").val('{{$edit_user->read_quran}}');
      $("#job").val('{{$edit_user->job}}');
      $("#a_income").val('{{$edit_user->a_income}}');
      $("#blood_group").val('{{$edit_user->blood_group}}');
      $("#disabilty").val('{{$edit_user->disabilty}}');
      $("#how_did").val('{{$edit_user->how_did}}');
      $("#finacial_status").val('{{$edit_user->finacial_status}}');
       $("#assets").val('{{$edit_user->assets}}');
       $("#younger_brother").val('{{$edit_user->younger_brother}}');
        $("#elder_brother").val('{{$edit_user->elder_brother}}');
        $("#brother_unmarried").val('{{$edit_user->brother_unmarried}}');
        $("#brother_married").val('{{$edit_user->brother_married}}');
         $("#sister_unmarried").val('{{$edit_user->sister_unmarried}}');
        $("#sister_married").val('{{$edit_user->sister_married}}');
        $("#younger_sister").val('{{$edit_user->younger_sister}}');
        $("#elder_sister").val('{{$edit_user->elder_sister}}');
        $("#loking_age_from").val('{{$edit_user->loking_age_from}}');
        $("#loking_age_to").val('{{$edit_user->loking_age_to}}');
         $("#loking_height_from").val('{{$edit_user->loking_height_from}}');
         $("#loking_height_to").val('{{$edit_user->loking_height_to}}');
         $("#loking_skin_color").val('{{$edit_user->loking_skin_color}}');
         $("#loking_physcial_status").val('{{$edit_user->loking_physcial_status}}');
         $("#loking_language").val('{{$edit_user->loking_language}}');
         $("#loking_education").val('{{$edit_user->loking_education}}');
         $("#loking_jobs").val('{{$edit_user->loking_job}}');
          $("#loking_a_income").val('{{$edit_user->loking_a_income}}');
         
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

<!-- END CONTENT -->
@endsection
 @push('css')
<!-- CORE CSS FRAMEWORK - START -->
<script src="{{ $admin_assets }}/js/jquery-1.11.2.min.js" type="text/javascript"></script>
<link href="{{$admin_assets}}/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen" />
<link href="{{$admin_assets}}/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="{{$admin_assets}}/plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="{{$admin_assets}}/css/animate.min.css" rel="stylesheet" type="text/css" />
<link href="{{$admin_assets}}/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
<!-- CORE CSS FRAMEWORK - END -->

<!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - START -->

<!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - END -->

<!-- CORE CSS TEMPLATE - START -->
<link href="{{$admin_assets}}/css/style.css" rel="stylesheet" type="text/css" />
<link href="{{$admin_assets}}/css/responsive.css" rel="stylesheet" type="text/css" />





                                              
<!-- CORE CSS TEMPLATE - END -->
@endpush 
@push('js')
<!-- ckediter start -->
<script src="{{ $admin_assets }}/ckeditor/ckeditor.js" ></script>
 <script src="{{ $admin_assets }}/ckeditor/adapters/jquery.js"></script>

    <script type="text/javascript">
                    $(document).ready(function(){
                        CKEDITOR.replace('description11');
                    });
                </script>

     
    <!-- ckediter end -->
<!-- CORE JS FRAMEWORK - START -->

<script src="{{ $admin_assets }}/js/jquery.easing.min.js" type="text/javascript"></script>
<script src="{{ $admin_assets }}/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="{{ $admin_assets }}/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="{{ $admin_assets }}/plugins/perfect-scrollbar/perfect-scrollbar.min.js" type="text/javascript"></script>
<script src="{{ $admin_assets }}/plugins/viewport/viewportchecker.js" type="text/javascript"></script>
<script>
    window.jQuery || document.write('<script src="{{ $admin_assets }}/js/jquery-1.11.2.min.js"><\/script>');
</script>
<!-- CORE JS FRAMEWORK - END -->

<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->

<script src="{{ $admin_assets }}/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="{{ $admin_assets }}/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js" type="text/javascript"></script>
<script src="{{ $admin_assets }}/js/form-validation.js" type="text/javascript"></script>
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->

<!-- CORE TEMPLATE JS - START -->
<script src="{{ $admin_assets }}/js/scripts.js" type="text/javascript"></script>
<!-- END CORE TEMPLATE JS - END -->
@endpush