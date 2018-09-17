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
        <div class="well" style="background-color: #f5f5f5">
          <br>
          <div class="menuwizard">
            <img id="one" class="wizrdpic" src="{{ $user_assets }}/img/registration-step 1.png" alt="" >
            <img id="two" class="wizrdpic" src="{{ $user_assets }}/img/registration-step 2.png" alt="" style="display:none;">
            <img id="three" class="wizrdpic" src="{{ $user_assets }}/img/registration-step 3.png" alt="" style="display: none;">
          </div>
          <form method="post" action="{{ url('register-user') }}">
            <style> 
.subhead
{
    margin-top: -6px;
}
.werse
{
    text-align: center;
    padding: 9px;
    font-family: Arial;
    font-weight: bold;
    font-size: 18px;
    background-color: darkorange;
    color: white;
    border-radius: 7px;
}
.hadees
{
    text-align: justify;
    font-family: Arial;
    font-size: 16px;
    font-weight: bolder;
    background-color: #662e90;
    color: white;
    padding: 17px;
    border-radius: 7px;
}
.username
{
  font-style: italic;
}
.oathfs
{
  padding-left:15px;
  font-family: Arial;
}
.finalinfo
{
  padding-top:30px;
}
.ppp
{
  margin-bottom: 0px;
}
</style>


  <!-- The Modal -->
  
                 @if(Session::has('error'))
                    <p class="alert alert-danger">{{ Session::get('error') }}</p>
                @endif
                @if(Session::has('success'))
                    <p class="alert alert-success">{{ Session::get('success') }}</p>
                @endif
            
          <div class="form_area">
            <ul id="regform">
              <li class="row listtopmarg">
                <div class="col-3">
                  <label for="">First Name <span class="imporatant">*</span></label>
                </div>
                <div class="col-9">
                  <span class="colons">:</span>
                  <input type="text" name="firstname" id="firstname" class="allinputs" placeholder ="Enter Name">
                </div>
              </li><div class="btpad"></div>
               <li class="row listtopmarg">
                <div class="col-3">
                  <label for="">Last Name <span class="imporatant">*</span></label>
                </div>
                <div class="col-9">
                  <span class="colons">:</span>
                  <input type="text" name="lastname" id="lastname"  class="allinputs" placeholder ="Enter Name">
                </div>
              </li><div class="btpad"></div>
              <li class="row listtopmarg" >
                <div class="col-3">
                  <label for="">Username <span class="imporatant">*</span></label>
                </div>
                <div class="col-9">
                  <span class="colons">:</span>
                  <input type="text" name="user_name" id="user_name" class="allinputs" placeholder ="Enter User Name">
                </div>
              </li><div class="btpad"></div>

              <li class="row listtopmarg" >
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

              <li class="row listtopmarg" >
                <div class="col-3">
                  <label for="">Gender <span class="imporatant">*</span></label>
                </div>
                <div class="col-9">
                  <span class="colons">:</span>
                  <select name="gender" id="gender" class="allselects">
                    <option value="">Select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
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
                              <option value="{{ $row->country_id }}">
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
                            <option>Select</option>
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
                    <option>Select</option>
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
                  <input type="text" readonly="" name="code" id="code" value="+92" placeholder="Code" class="smallselect">
                  <input type="text" placeholder="phone code" name="phone_code" id="phone_code"  class="smallselect" style="width:100px;">
                  <input type="text" placeholder="Enter Number" name="phone" id="phone" class="allinputs">
                </div>
              </li><div class="btpad"></div>
               </li><div class="btpad"></div>
              <li class="row" class="listtopmarg">
                <div class="col-4">
                  <label for=""> DOB <span class="imporatant">*</span></label>
                </div>
                <div class="col-8" style="margin-left:-65px; ">
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
<option value="1">Jan</option>
<option value="2">Feb</option>
<option value="3">Mar</option>
<option value="4">Apr</option>
<option value="5">May</option>
<option value="6">Jun</option>
<option value="7">Jul</option>
<option value="8">Aug</option>
<option value="9">Sep</option>
<option value="10">Oct</option>
<option value="11">Nov</option>
<option value="12">Dec</option> 
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

            </ul>
<!-- *************************************************************************************** -->
            <ul id="basicinfo" style="display:none;">
              <li class="row listtopmarg">
                <div class="col-0">
                  <img src="{{ $user_assets }}/icons/message.png" class="welmsgimg">
                </div>
                <div class="col-10">
                    


                  <p>Dear <strong> User </strong> We sincerely want to help you in your search for best match so we would like you to share more about your preferences!</p>
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
        
             
              
              <li class="row" class="listtopmarg">
                <div class="col-4">
                  <label for=""> Profile Created for</label>
                </div>
                <div class="col-8">
                  <span class="colons">:</span>
                  <select selected="selected" name="profile_created" id="" onchange="profile_test(this)" class="allselects">
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
                  <select  id="" name="skin_color" class="allselects">
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
                  <label for=""> Postal/Zip Code</label>
                </div>
                <div class="col-8">
                  <span class="colons">:</span>
                  <input type="text" name="postal_code" placeholder="Please enter postal/zip code" class="allselects">
                 
                </div>
              </li><div class="btpad"></div>
              <li class="row" class="listtopmarg">
                <div class="col-4">
                  <label for="">Physical Status</label>
                </div>
                <div class="col-8">
                  <span class="colons">:</span>
                  <select  id="" name="physical_status" onchange="showdisabilty(this)" class="allselects">
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
                  <select  id="" name="height" class="allselects">
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
                  <select  id="" name="weight" class="allselects">
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
                  <select name="language" selected="selected"  id="" class="allselects">
                    
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
                   <select name="cast" id="" class="allselects">
                    <option value="">Please Select..</option>
                      <option value="Jutt">Jutt</option>
                      <option value="Butt">Butt</option>
                       <option value="Gujjar">Gujjar</option>
                      <option value="Prefer not to say">Prefer not to say</option>
                  </select>&nbsp<input type="text" name="clan" class="midlinput">
                </div>
              </li><div class="btpad"></div>
              

              <li class="row" class="listtopmarg">
                <div class="col-4">
                  <label for="">Marital Status <span class="imporatant">*</span></label>
                </div>
                <div class="col-8">
                  <span class="colons">:</span>
                  <div class="radoinput">
                  <input type="radio" name="martial_status" value="Unmmaried"> Unmmaried &nbsp <input type="radio" name="martial_status" value="Widow Widower"> Widow/Widower &nbsp <input type="radio" name="martial_status" value="Divorcee"> Divorcee &nbsp <input type="radio" name="martial_status" value="Seprated"> Seprated
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
                      <input type="checkbox" name="hobbies_type[]" value="Book Reading">Book Reading<br>
                      <input type="checkbox" name="hobbies_type[]" value="Playing Cricket">Playing Cricket<br>
                            
                    </div>
                    <div class="col-5">
                      <input type="checkbox" name="hobbies_type[]" value="Football">Football <br>
                      <input type="checkbox" name="hobbies_type[]" value="Reading News">Reading News <br>
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
              </li><div class="btpad"></div>
             
                <li class="row" class="listtopmarg">
                <div class="col-4">
                  <label for="">Bread</label>
                </div>
                <div class="col-8">
                  <span class="colons">:</span>
                   <select name="bread" id="" class="allselects">
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
                    <input type="radio" name="religious_type" value="Yes"> Yes &nbsp <input type="radio" name="religious_type" value="No"> No
                  </div>
                </div>
              </li><div class="btpad"></div>

              <li class="row" class="listtopmarg">
                <div class="col-4">
                  <label for=""> Allegiance to Islamic Orgn<span class="imporatant">*</span></label>
                </div>
                <div class="col-8">
                  <span class="colons">:</span>
                  <select selected="selected" name="sect_are" id="" class="allselects">
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
                  <select name="religiousness" id="" class="allselects">
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
                  <select selected="selected" name="pray" id="" class="allselects">
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
                  <select name="read_quran" id="" class="allselects">
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
                  <select name="attend_religious_service" id="" class="allselects">
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
                  <select name="polygamy" id="" class="allselects">
                    <<option value="" >Please Select</option>
                                        <option value="Accept polygamy" >Accept polygamy</option>
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
                  <select name="ethnic_type" id="" class="allselects">
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
                  <select name="qualification" id="" class="allselects">
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
                  <input type="text" name="edu_detail" class="allinputs">
                </div>
              </li><div class="btpad"></div>

             <li class="row" class="listtopmarg" id="users_job">
                <div class="col-4">
                  <label for=""> Occupation</label>
                </div>
                <div class="col-8">
                  <span class="colons">:</span>
                  <select name="job"  onchange="user_job(this)" class="allselects">
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
                  <input type="text" name="occupation_detail" placeholder="Please enter occupation detail" class="allselects">
                
                </div>
              </li><div class="btpad"></div>
              <li class="row" class="listtopmarg">
                <div class="col-4">
                  <label for=""> Annual Income</label>
                </div>
                <div class="col-8">
                  <span class="colons">:</span>
                  <select name="a_income" id="" class="allselects">
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
                  <textarea name="full_address" id="" cols="30" rows="10" class="addTarea"></textarea>
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
                              <option value="{{ $row->country_id }}">
                                {{ $row->country_name }}
                              </option>
                             @endforeach
                          </select>
                  </select>
                  <input type="text" name="present_city" class="midlinput" placeholder="City">
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
                              <option value="{{ $row->country_id }}">
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
                            <option>Select</option>
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
                  <option>Select</option>
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
                                  <option value="7 AM">7 AM</option>
                                  <option value="12 AM">12 AM</option>
                                  <option value="Anytime">Anytime</option>
                                </select>
                  
                </div>
              </li><div class="btpad"></div>

              <li class="row" class="listtopmarg">
                <div class="col-4">
                  <label for="">Contact person & Relationship</label>
                </div>
                <div class="col-8">
                  <span class="colons">:</span>
                  <input type="text" name="contact_person" class="allinputs">
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
                  
                    <select name="blood_group" class="allselects">
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
                  <input type="radio" name="body_type" value="Slim"> Slim &nbsp <input type="radio" name="body_type" value="Average"> Average &nbsp <input type="radio" name="body_type" value="Athletic"> Athletic &nbsp <input type="radio" name="body_type" value="Heavy"> Heavy
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
                                  <option value="Vagetarian">Vagetarian</option>
                                  <option value="Non-Vagetarian">Non-Vagetarian</option>
                               
                  </select>
                </div>
                 <li class="row" class="listtopmarg">
                <div class="col-4">
                  <label for="">Are you do Smoking?</label>
                </div>
                <div class="col-8">
                  <span class="colons">:</span>
                  <div class="radiyn">
                  <select name="smoking" class="allselects">
                                  <option value="Chain smoker">Chain smoker</option>
                                  <option value="Occasionally">Occasionally</option>
                                  <option value="Intend to quit">Intend to quit</option>
                                  <option value="sometimes">sometimes</option>
                                   <option value="never">never</option>
                                 </select>
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
                  <input type="radio" name="thelisimia" value="Yes"> Yes <input type="radio" name="thelisimia" value="No"> No
                  </div>
                </div>
              </li><div class="btpad"></div>

                <li class="row" class="listtopmarg">
                <div class="col-4">
                  <label for="">Are you suffering any diseace?<span class="imporatant">*</span></label>
                </div>
                <div class="col-8">
                  <span class="colons">:</span>
                 <input type="radio" name="diseace" id="diseace" onchange="suffering(this)" value="Yes"> Yes <input type="radio" name="diseace" onchange="suffering(this)" value="No"> No
                </div>
              </li><div class="btpad"></div>

               <li class="row" class="listtopmarg" id="diseace_type" style="display: none;">
                <div class="col-4">
                  <label for="">please specify other diseace<span class="imporatant">*</span></label>
                </div>
                <div class="col-8">
                  <span class="colons">:</span>
                 <input type="text" name="diseace_type" placeholder="please specify other diseace">
                </div>
              </li><div class="btpad"></div>
              {{-- </li><div class="btpad"></div> --}}

              <li class="row" class="listtopmarg">
                <div class="col-4">
                  <label for="">Disability</label>
                </div>
                <div class="col-8">
                  <span class="colons">:</span>
                  <select name="disabilty" id="" class="allselects">
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
                  <select name="how_did" id="" class="allselects">
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
                    <input type="checkbox" name="agreed">&nbsp I have read and agreed to the <a href="">T&C</a> and <a href="">Privacy Policy</a>
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
                  <textarea name="description" id="" class="prfdesctxt"></textarea>
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
                     
                                  <option value="Nuclear Family">Nuclear Family</option>
                                   <option value="joint Family">joint Family</option>
                              
                  </select>
                </div>
              </li><div class="btpad"></div>

              <li class="row" class="listtopmarg">
                <div class="col-4">
                  <label for=""> Finacial Status</label>
                </div>
                <div class="col-8">
                  <span class="colons">:</span>
                  <select name="finacial_status" id="" class="allselects">
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
                  <select name="assets" id="" onchange="assets_change(this)" class="allselects">
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
                    <input type="radio" name="father_detail" value="Alive"> Alive &nbsp <input type="radio" name="father_detail" value="Died"> Died &nbsp Occupation <input type="text" name="father_occupation" class="allinputs">
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
                    <input type="radio" name="mother_detail" value="Alive"> Alive &nbsp <input type="radio" name="mother_detail" value="Died"> Died &nbsp Occupation <input type="text" name="mother_occupation" class="allinputs">
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
                    Elder <select name="elder_brother" id="" class="smallselect">
                      <option value="0">0</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="above">above</option>
                    </select>
                     &nbsp Younger <select name="younger_brother" id="" class="smallselect">
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
                  <select name="brother_married" id="" class="allselects">
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
                  <select name="brother_unmarried" id="" class="allselects">
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
                    Elder <select name="elder_sister" id="" class="smallselect">
                      <option value="0">0</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="above">above</option>
                    </select> &nbsp Younger <select name="younger_sister" id="" class="smallselect">
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
                  <select name="sister_married" id="" class="allselects">
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
                  <select name="sister_unmarried" id="" class="allselects">
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
                  <textarea name="family_detail" id="" class="famdet"></textarea>
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
                   <select name="loking_age_from" class="midlinput">
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
                  <select name="loking_age_to" class="midlinput">
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
                  <input type="checkbox" name="loking_martial_status[]" value="Unmmaried"> Unmmaried &nbsp <input type="checkbox" name="loking_martial_status[]" value="Widow/Widower"> Widow/Widower &nbsp <input type="checkbox" name="loking_martial_status[]" value="Divorcee"> Divorcee &nbsp <input type="checkbox" name="loking_martial_status[]" value="Seprated"> Seprated
                  </div>
                </div>
              </li><div class="btpad"></div>

              <li class="row" class="listtopmarg">
                <div class="col-4">
                  <label for=""> Height Preference</label>
                </div>
                <div class="col-8">
                  
                  <span class="colons">:</span>
                   <select name="loking_height_from"  class="midlinput">
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
                  <select name="loking_height_to" class="midlinput">
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
                  <select name="loking_skin_color" id="" class="allselects">
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
                  <select name="loking_physcial_status" id="" class="allselects">
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
                    <input type="hidden" name="eating_type" value="eating type">
                  <input type="checkbox" name="loking_eating_habits[]" value="Dose not"> Dose not matter &nbsp <input type="checkbox" name="loking_eating_habits[]" value="Veg"> Veg &nbsp <input type="checkbox" name="loking_eating_habits[]" value="Occasionally Non-veg"> Occasionally Non-veg &nbsp <input type="checkbox" name="loking_eating_habits[]" value="Eggetarian"> Eggetarian
                  </div>
                </div>
              </li><div class="btpad"></div>

              <li class="row" class="listtopmarg">
                <div class="col-4">
                  <label for=""> Mother Tongue</label>
                </div>
                <div class="col-8">
                  <span class="colons">:</span>
                  <select name="loking_language" id="" class="allselects">
                    <option value="">Please Select...</option> 
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
                  <select name="loking_education" id="" class="allselects">
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
                  <select name="loking_job"  onchange="job_test(this)" class="allselects">
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
                  <input type="text" name="loking_job_type" placeholder="please specify other Occupation" class="allselects">
                
                </div>
              </li><div class="btpad"></div>

               <li class="row" class="listtopmarg">
                <div class="col-4">
                  <label for="">Employed in</label>
                </div>
                <div class="col-8">
                  <span class="colons">:</span>
                  <input type="text" name="employed_in" placeholder="employed in" class="allselects">
                
                </div>
              </li><div class="btpad"></div>

              <li class="row" class="listtopmarg">
                <div class="col-4">
                  <label for=""> Annual Income</label>
                </div>
                <div class="col-8">
                  <span class="colons">:</span>
                  <select name="loking_a_income" id="" class="allselects">
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
                  <select id="country" onchange="country_change2(this)" name="living_country_id" class="allselects" >
                            <option selected="" value="">Select country 
                            </option>
                            @foreach ($country as $row)
                              <option value="{{ $row->country_id }}">
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
                  {{-- <select name="" id="" class="allselects"> --}}
                   <select selected="selected" id="living_state" onchange="state_change2(this)"  name="living_state_id" class="allselects" >
                            <option>Select</option>
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
                    <option>Select</option>
                  </select>
                </div>
              </li><div class="btpad"></div>

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
                      <input type="checkbox" value="Algeria" name="africa_country[]"> Algeria <br>
                      <input type="checkbox" value="Angola" name="africa_country[]"> Angola <br>
                      <input type="checkbox" value="Benin" name="africa_country[]"> Benin <br>
                      <input type="checkbox" value="Botswana" name="africa_country[]"> Botswana <br>
                      <input type="checkbox" value="Burkina Faso" name="africa_country[]"> Burkina Faso <br>
                      <input type="checkbox" value="Burundi" name="africa_country[]"> Burundi <br>
                      <input type="checkbox" value="Cameroon" name="africa_country[]"> Cameroon <br>
                      <input type="checkbox" value="Cape Verde" name="africa_country[]"> Cape Verde <br>
                      <input type="checkbox" value="Central African Rep" name="africa_country[]"> Central African Rep <br>
                      <input type="checkbox" value="Chad" name="africa_country[]"> Chad <br>
                      <input type="checkbox" value="Comoros" name="africa_country[]"> Comoros <br>
                      <input type="checkbox" value="Congo, DR" name="africa_country[]"> Congo, DR <br>
                      <input type="checkbox" value="Congo, Rep" name="africa_country[]"> Congo, Rep. <br>
                      <input type="checkbox" value="Cote d'Ivoire" name="africa_country[]"> Cote d'Ivoire <br>
                      <input type="checkbox" value="Djibouti" name="africa_country[]"> Djibouti <br>
                      <input type="checkbox" value="South Africa" name="africa_country[]"> South Africa <br>
                      <input type="checkbox" value="Sudan" name="africa_country[]"> Sudan <br>
                      <input type="checkbox" value="Swaziland" name="africa_country[]"> Swaziland <br>
                      <input type="checkbox" value="Zambia" name="africa_country[]"> Zambia <br>
                      <input type="checkbox" value="Egypt" name="africa_country[]"> Egypt <br>
                      
                    </div>
                    <div class="col-4">
                     <input type="checkbox" name="africa_country[]" value="Equatorial Guinea"> Equatorial Guinea <br>
                      <input type="checkbox" name="africa_country[]" value="Eritrea"> Eritrea <br>
                      <input type="checkbox" name="africa_country[]" value="Ethiopia"> Ethiopia <br>
                      <input type="checkbox" name="africa_country[]" value="Gabon"> Gabon <br>
                      <input type="checkbox" name="africa_country[]" value="Gambia"> Gambia <br>
                      <input type="checkbox" name="africa_country[]" value="Ghana"> Ghana <br>
                      <input type="checkbox" name="africa_country[]" value="Guinea"> Guinea <br>
                      <input type="checkbox" name="africa_country[]" value="Guinea-Bissau"> Guinea-Bissau <br>
                      <input type="checkbox" name="africa_country[]" value="Kenya"> Kenya <br>
                      <input type="checkbox" name="africa_country[]" value="Lesotho"> Lesotho <br>
                      <input type="checkbox" name="africa_country[]" value="Liberia"> Liberia <br>
                      <input type="checkbox" name="africa_country[]" value="Libya"> Libya <br>
                      <input type="checkbox" name="africa_country[]" value="Madagascar"> Madagascar <br>
                      <input type="checkbox" name="africa_country[]" value="Malawi"> Malawi <br>
                      <input type="checkbox" name="africa_country[]" value="Sierra Leone"> Sierra Leone <br>
                      <input type="checkbox" name="africa_country[]" value="Somalia"> Somalia <br>
                      <input type="checkbox" name="africa_country[]" value="Tunisia"> Tunisia <br>
                      <input type="checkbox" name="africa_country[]" value="Uganda"> Uganda <br>
                      <input type="checkbox" name="africa_country[]" value="Western Sahara"> Western Sahara <br>
                      <input type="checkbox" name="africa_country[]" value="Mali"> Mali <br>
                    </div>
                    <div class="col-3">
                      <input type="checkbox" name="africa_country[]" value="Mauritania"> Mauritania <br>
                      <input type="checkbox" name="africa_country[]" value="Mauritius"> Mauritius <br>
                      <input type="checkbox" name="africa_country[]" value="Mayotte"> Mayotte <br>
                      <input type="checkbox" name="africa_country[]" value="Morocco"> Morocco <br>
                      <input type="checkbox" name="africa_country[]" value="Mozambique"> Mozambique <br>
                      <input type="checkbox" name="africa_country[]" value="Namibia"> Namibia <br>
                      <input type="checkbox" name="africa_country[]" value="Niger"> Niger <br>
                      <input type="checkbox" name="africa_country[]" value="Nigeria"> Nigeria <br>
                      <input type="checkbox" name="africa_country[]" value="Reunion"> Reunion <br>
                      <input type="checkbox" name="africa_country[]" value="Rwanda"> Rwanda <br>
                      <input type="checkbox" name="africa_country[]" value="Saint Helena"> Saint Helena <br>
                      <input type="checkbox" name="africa_country[]" value="Sao Tome and Principe"> Sao Tome and Principe <br>
                      <input type="checkbox" name="africa_country[]" value="Senegal"> Senegal <br>
                      <input type="checkbox" name="africa_country[]" value="Seychelles"> Seychelles <br>
                      <input type="checkbox" name="africa_country[]" value="Sierra Leone"> Sierra Leone <br>
                      <input type="checkbox" name="africa_country[]" value="Somalia"> Somalia <br>
                      <input type="checkbox" name="africa_country[]" value="Tanzania"> Tanzania <br>
                      <input type="checkbox" name="africa_country[]" value="Togo"> Togo <br>
                      <input type="checkbox" name="africa_country[]" value="Zimbabwe"> Zimbabwe <br>
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
                      <input type="checkbox" name="antarctica_country[]" value="Bouvet Island"> Bouvet Island<br>
                      <input type="checkbox" name="antarctica_country[]" value="French Southern Territ"> French Southern Territ. <br>
                            
                    </div>
                    <div class="col-5">
                      <input type="checkbox" name="antarctica_country[]" value="Heard Island"> Heard Island <br>
                      <input type="checkbox" name="antarctica_country[]" value="South Georgia"> South Georgia <br>
                              
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
                      <input type="checkbox" name="asia_country[]" value="Afghanistan"> Afghanistan <br>
                      <input type="checkbox" name="asia_country[]" value="Armenia"> Armenia <br>
                      <input type="checkbox" name="asia_country[]" value="Azerbaijan"> Azerbaijan <br>
                      <input type="checkbox" name="asia_country[]" value="Bahrain"> Bahrain <br>
                      <input type="checkbox" name="asia_country[]" value="Bangladesh"> Bangladesh <br>
                      <input type="checkbox" name="asia_country[]" value="Bhutan"> Bhutan <br>
                      <input type="checkbox" name="asia_country[]" value="British Ind"> British Ind.  <br>
                      <input type="checkbox" name="asia_country[]" value="Brunei Darussalam"> Brunei Darussalam <br>
                      <input type="checkbox" name="asia_country[]" value="Cambodia"> Cambodia <br>
                      <input type="checkbox" name="asia_country[]" value="China"> China <br>
                      <input type="checkbox" name="asia_country[]" value="Christmas Island"> Christmas Island <br>
                      <input type="checkbox" name="asia_country[]" value="Cocos"> Cocos <br>
                      <input type="checkbox" name="asia_country[]" value="Cyprus"> Cyprus <br>
                      <input type="checkbox" name="asia_country[]" value="Georgia"> Georgia <br>
                      <input type="checkbox" name="asia_country[]" value="Hong Kong"> Hong Kong <br>
                      <input type="checkbox" name="asia_country[]" value="India"> India <br>
                      <input type="checkbox" name="asia_country[]" value="Indonesia"> Indonesia <br>
                      <input type="checkbox" name="asia_country[]" value="Iran"> Iran <br>
                      <input type="checkbox" name="asia_country[]" value="Iraq"> Iraq <br>
                      <input type="checkbox" name="asia_country[]" value="Israel"> Israel <br>
                      
                    </div>
                    <div class="col-4">
                      <input type="checkbox" name="asia_country[]" value="Japan"> Japan <br>
                      <input type="checkbox" name="asia_country[]" value="Kazakhstan"> Kazakhstan <br>
                      <input type="checkbox" name="asia_country[]" value="Korea, DPR"> Korea, DPR <br>
                      <input type="checkbox" name="asia_country[]" value="Korea, Rep. of"> Korea, Rep. of <br>
                      <input type="checkbox" name="asia_country[]" value="Kuwait"> Kuwait <br>
                      <input type="checkbox" name="asia_country[]" value="Kyrgyz Republic"> Kyrgyz Republic <br>
                      <input type="checkbox" name="asia_country[]" value="Laos"> Laos <br>
                      <input type="checkbox" name="asia_country[]" value="Lebanon"> Lebanon <br>
                      <input type="checkbox" name="asia_country[]" value="Macao"> Macao <br>
                      <input type="checkbox" name="asia_country[]" value="Malaysia"> Malaysia <br>
                      <input type="checkbox" name="asia_country[]" value="Maldives"> Maldives <br>
                      
                      <input type="checkbox" name="asia_country[]" value="Myanmar"> Myanmar <br>
                      <input type="checkbox" name="asia_country[]" value="Nepal"> Nepal <br>
                      <input type="checkbox" name="asia_country[]" value="Oman"> Oman <br>
                      <input type="checkbox" name="asia_country[]" value="Pakistan"> Pakistan <br>
                      <input type="checkbox" name="asia_country[]" value="Palestine"> Palestine <br>
                      <input type="checkbox" name="asia_country[]" value="Philippines"> Philippines <br>
                      <input type="checkbox" name="asia_country[]" value="Qatar"> Qatar <br>
                      <input type="checkbox" name="asia_country[]" value="Saudi Arabia"> Saudi Arabia <br>
                    </div>
                    <div class="col-3">
                      <input type="checkbox" name="asia_country[]" value="Singapore"> Singapore <br>
                      <input type="checkbox" name="asia_country[]" value="Sri Lanka"> Sri Lanka <br>
                      <input type="checkbox" name="asia_country[]" value="Syria"> Syria <br>
                      <input type="checkbox" name="asia_country[]" value="Taiwan"> Taiwan <br>
                      <input type="checkbox" name="asia_country[]" value="Tajikistan"> Tajikistan <br>
                      <input type="checkbox" name="asia_country[]" value="Thailand"> Thailand <br>
                      <input type="checkbox" name="asia_country[]" value="Timor-Leste"> Timor-Leste <br>
                      <input type="checkbox" name="asia_country[]" value="Turkey"> Turkey <br>
                      <input type="checkbox" name="asia_country[]" value="Turkmenistan"> Turkmenistan <br>
                      <input type="checkbox" name="asia_country[]" value="United Arab Emirates"> United Arab Emirates <br>
                      <input type="checkbox" name="asia_country[]" value="Uzbekistan"> Uzbekistan <br>
                      <input type="checkbox" name="asia_country[]" value="Vietnam"> Vietnam<br>
                      <input type="checkbox" name="asia_country[]" value="Yemen"> Yemen <br>
                      
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
                      <a href="">Select all in Asia</a>
                    </div>
                    <div class="col-6">
                      <a href="">clear all</a>
                    </div>
                  </div>
                  
                    
                  <div class="row">
                    <div class="col-4">
                      <input type="checkbox" name="europe_country[]" value="Aland Islands"> Aland Islands <br>
                      <input type="checkbox" name="europe_country[]" value="Albania"> Albania <br>
                      <input type="checkbox" name="europe_country[]" value="Andorra"> Andorra <br>
                      <input type="checkbox" name="europe_country[]" value="Austria"> Austria <br>
                      <input type="checkbox" name="europe_country[]" value="Belarus"> Belarus <br>
                      <input type="checkbox" name="europe_country[]" value="Belgium"> Belgium <br>
                      <input type="checkbox" name="europe_country[]" value="Bosnia and Herzegovina"> Bosnia and Herzegovina <br>
                      <input type="checkbox" name="europe_country[]" value="Bulgaria"> Bulgaria <br>
                      <input type="checkbox" name="europe_country[]" value="Croatia"> Croatia <br>
                      <input type="checkbox" name="europe_country[]" value="Czech Republic"> Czech Republic <br>
                      <input type="checkbox" name="europe_country[]" value="Denmark"> Denmark <br>
                      <input type="checkbox" name="europe_country[]" value="Estonia"> Estonia <br>
                      <input type="checkbox" name="europe_country[]" value="Faroe Islands"> Faroe Islands <br>
                      <input type="checkbox" name="europe_country[]" value="Finland"> Finland <br>
                      <input type="checkbox" name="europe_country[]" value="France"> France <br>
                      <input type="checkbox" name="europe_country[]" value="Germany"> Germany <br>
                      <input type="checkbox" name="europe_country[]" value="Gibraltar"> Gibraltar <br>
                      <input type="checkbox" name="europe_country[]" value="Greece"> Greece <br>
                      <input type="checkbox" name="europe_country[]" value="Guernsey"> Guernsey <br>
                      <input type="checkbox" name="europe_country[]" value="Hungary"> Hungary <br>
                      
                    </div>
                    <div class="col-4">
                      <input type="checkbox" name="europe_country[]" value="Iceland"> Iceland <br>
                      <input type="checkbox" name="europe_country[]" value="Ireland"> Ireland <br>
                      <input type="checkbox" name="europe_country[]" value="Isle of Man"> Isle of Man <br>
                      <input type="checkbox" name="europe_country[]" value="Italy"> Italy <br>
                      <input type="checkbox" name="europe_country[]" value="Jersey"> Jersey <br>
                      <input type="checkbox" name="europe_country[]" value="Kosovo"> Kosovo <br>
                      <input type="checkbox" name="europe_country[]" value="Latvia"> Latvia <br>
                      <input type="checkbox" name="europe_country[]" value="Liechtenstein"> Liechtenstein <br>
                      <input type="checkbox" name="europe_country[]" value="Lithuania"> Lithuania <br>
                      <input type="checkbox" name="europe_country[]" value="Luxembourg"> Luxembourg <br>
                      <input type="checkbox" name="europe_country[]" value="Macedonia"> Macedonia <br>
                      <input type="checkbox" name="europe_country[]" value="Malta"> Malta <br>
                      <input type="checkbox" name="europe_country[]" value="Monaco"> Monaco <br>
                      <input type="checkbox" name="europe_country[]" value="Montenegro"> Montenegro <br>
                      <input type="checkbox" name="europe_country[]" value="Netherlands"> Netherlands <br>
                      <input type="checkbox" name="europe_country[]" value="Norway"> Norway <br>
                      <input type="checkbox" name="europe_country[]" value="Poland"> Poland <br>
                      <input type="checkbox" name="europe_country[]" value="Portugal"> Portugal <br>
                      <input type="checkbox" name="europe_country[]" value="Romania"> Romania <br>
                      <input type="checkbox" name="europe_country[]" value="Russian Federation">Russian Federation<br>
                    </div>
                    <div class="col-3">
                      <input type="checkbox" name="europe_country[]" value="San Marino"> San Marino <br>
                      <input type="checkbox" name="europe_country[]" value="Serbia"> Serbia <br>
                      <input type="checkbox" name="europe_country[]" value="Slovakia"> Slovakia <br>
                      <input type="checkbox" name="europe_country[]" value="Slovenia"> Slovenia <br>
                      <input type="checkbox" name="europe_country[]" value="Spain"> Spain <br>
                      <input type="checkbox" name="europe_country[]" value="Svalbard and Jan Mayen"> Svalbard and Jan Mayen Is <br>
                      <input type="checkbox" name="europe_country[]" value="Sweden"> Sweden <br>
                     
                      <input type="checkbox" name="europe_country[]" value="Ukraine"> Ukraine <br>
                      <input type="checkbox" name="europe_country[]" value="United Kingdom"> United Kingdom<br>
                      <input type="checkbox" name="europe_country[]" value="Vatican City"> Vatican City <br>
                                            
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
                      <input type="checkbox" name="north_america_country[]" value="Anguilla"> Anguilla <br>
                      <input type="checkbox" name="north_america_country[]" value="Antigua and Barbuda"> Antigua and Barbuda <br>
                      <input type="checkbox" name="north_america_country[]" value="Aruba"> Aruba <br>
                      <input type="checkbox" name="north_america_country[]" value="Bahamas"> Bahamas <br>
                      <input type="checkbox" name="north_america_country[]" value="Barbados"> Barbados <br>
                      <input type="checkbox" name="north_america_country[]" value="Belize"> Belize <br>
                      <input type="checkbox" name="north_america_country[]" value="Bermuda"> Bermuda <br>
                      <input type="checkbox" name="north_america_country[]" value="British Virgin Islands"> British Virgin Islands <br>
                      <input type="checkbox" name="north_america_country[]" value="Canada"> Canada <br>
                      <input type="checkbox" name="north_america_country[]" value="Cayman Islands"> Cayman Islands <br>
                      <input type="checkbox" name="north_america_country[]" value="Costa Rica"> Costa Rica <br>
                      <input type="checkbox" name="north_america_country[]" value="Cuba"> Cuba <br>
                      <input type="checkbox" name="north_america_country[]" value="Dominica"> Dominica <br>
                      <input type="checkbox" name="north_america_country[]" value="El Salvador"> El Salvador <br>
                      <input type="checkbox" name="north_america_country[]" value="Greenland"> Greenland <br>
                      <input type="checkbox" name="north_america_country[]" value="Grenada"> Grenada <br>
                      <input type="checkbox" name="north_america_country[]" value="Guadeloupe"> Guadeloupe <br>
                      <input type="checkbox" name="north_america_country[]" value="Guatemala"> Guatemala <br>
                      <input type="checkbox" name="north_america_country[]" value="Haiti"> Haiti <br>
                      <input type="checkbox" name="north_america_country[]" value="Honduras"> Honduras <br>
                      
                    </div>
                    <div class="col-4">
                      <input type="checkbox" name="north_america_country[]" value="Jamaica"> Jamaica <br>
                      <input type="checkbox" name="north_america_country[]" value="Martinique"> Martinique <br>
                      <input type="checkbox" name="north_america_country[]" value="Mexico"> Mexico <br>
                      <input type="checkbox" name="north_america_country[]" value="Montserrat"> Montserrat <br>
                      <input type="checkbox" name="north_america_country[]" value="Netherlands"> Netherlands Antilles <br>
                      <input type="checkbox" name="north_america_country[]" value="Nicaragua"> Nicaragua <br>
                      <input type="checkbox" name="north_america_country[]" value="Panama"> Panama <br>
                      <input type="checkbox" name="north_america_country[]" value="Puerto Rico"> Puerto Rico <br>
                      <input type="checkbox" name="north_america_country[]" value="Saint"> Saint Barthelemy <br>
                      <input type="checkbox" name="north_america_country[]" value="Saint Kitts and Nevis"> Saint Kitts and Nevis <br>
                      <input type="checkbox" name="north_america_country[]" value="Saint Lucia"> Saint Lucia <br>
                      <input type="checkbox" name="north_america_country[]" value="Saint Martin"> Saint Martin <br>
                      <input type="checkbox" name="north_america_country[]" value="Saint Pierre and Miquelon"> Saint Pierre and Miquelon <br>
                      <input type="checkbox" name="north_america_country[]" value="St Vincent and Grenadines"> St Vincent and Grenadines <br>
                      <input type="checkbox" name="north_america_country[]" value="Trinidad and Tobago"> Trinidad and Tobago <br>
                      
                    </div>
                    <div class="col-3">
                      <input type="checkbox" name="north_america_country[]" value="Turks and Caicos Is"> Turks and Caicos Is <br>
                      <input type="checkbox" name="north_america_country[]" value="US Virgin Islands"> US Virgin Islands <br>
                      <input type="checkbox" name="north_america_country[]" value="Portugal"> Portugal <br>
                      <input type="checkbox" name="north_america_country[]" value="Romania"> Romania <br>
                      <input type="checkbox" name="north_america_country[]" value="USA"> USA<br>
                                            
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
                      <input type="checkbox" name="australasia_country[]" value="American Samoa"> American Samoa <br>
                      <input type="checkbox" name="australasia_country[]" value="Australia"> Australia <br>
                      <input type="checkbox" name="australasia_country[]" value="Cook Islands"> Cook Islands <br>
                      <input type="checkbox" name="australasia_country[]" value="Fiji"> Fiji <br>
                      <input type="checkbox" name="australasia_country[]" value="French Polynesia"> French Polynesia <br>
                      <input type="checkbox" name="australasia_country[]" value="Guam"> Guam <br>
                      <input type="checkbox" name="australasia_country[]" value="Kiribati"> Kiribati <br>
                      <input type="checkbox" name="australasia_country[]" value="Marshall Islands"> Marshall Islands <br>
                      <input type="checkbox" name="australasia_country[]" value="Micronesia"> Micronesia <br>
                      <input type="checkbox" name="australasia_country[]" value="Nauru"> Nauru <br>
                      <input type="checkbox" name="australasia_country[]" value="New Caledonia"> New Caledonia <br>
                      <input type="checkbox" name="australasia_country[]" value="New Zealand"> New Zealand <br>
                      <input type="checkbox" name="australasia_country[]" value="Niue"> Niue <br>
                      <input type="checkbox" name="australasia_country[]" value="Norfolk Island"> Norfolk Island <br>
                                            
                    </div>
                    <div class="col-4">
                      <input type="checkbox" name="australasia_country[]" value="Northern Mariana"> Northern Mariana Is <br>
                      <input type="checkbox" name="australasia_country[]" value="Palau"> Palau <br>
                      <input type="checkbox" name="australasia_country[]" value="Papua New Guinea"> Papua New Guinea <br>
                      <input type="checkbox" name="australasia_country[]" value="Pitcairn Islands"> Pitcairn Islands <br>
                      <input type="checkbox" name="australasia_country[]" value="Samoa"> Samoa <br>
                      <input type="checkbox" name="australasia_country[]" value="Solomon Islands"> Solomon Islands <br>
                      <input type="checkbox" name="australasia_country[]" value="Tokelau"> Tokelau <br>
                      <input type="checkbox" name="australasia_country[]" value="Tonga"> Tonga <br>
                      <input type="checkbox" name="australasia_country[]" value="Tuvalu"> Tuvalu <br>
                      <input type="checkbox" name="australasia_country[]" value="US Minor Outlying I">US Minor Outlying I<br>
                      <input type="checkbox" name="australasia_country[]" value="Vanuatu"> Vanuatu <br>
                      <input type="checkbox" name="australasia_country[]" value="Wallis and Futuna"> Wallis and Futuna<br>
                                            
                    </div>
                    <div class="col-3">
                      <input type="checkbox" name="australasia_country[]" value="Turks and Caicos Is"> Turks and Caicos Is <br>
                      <input type="checkbox" name="australasia_country[]" value="US Virgin Islands"> US Virgin Islands <br>
                      <input type="checkbox" name="australasia_country[]" value="Portugal"> Portugal <br>
                      <input type="checkbox" name="australasia_country[]" value="Romania"> Romania <br>
                      <input type="checkbox" name="australasia_country[]" value="USA"> USA<br>
                                            
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
                      <a href="">Select all in North Australasia</a>
                    </div>
                    <div class="col-6">
                      <a href="">clear all</a>
                    </div>
                  </div>
                  
                    
                  <div class="row">
                    <div class="col-4">
                     <input type="checkbox" name="south_america_country[]" value="Argentina"> Argentina <br>
                      <input type="checkbox" name="south_america_country[]" value="Bolivia"> Bolivia <br>
                      <input type="checkbox" name="south_america_country[]" value="Brazil"> Brazil <br>
                      <input type="checkbox" name="south_america_country[]" value="Chile"> Chile <br>
                      <input type="checkbox" name="south_america_country[]" value="Colombia"> Colombia <br>
                      <input type="checkbox" name="south_america_country[]" value="Ecuador"> Ecuador <br>
                                                                  
                    </div>
                    <div class="col-4">
                      <input type="checkbox" name="south_america_country[]" value="Falkland Islands">Falkland Islands <br>
                      <input type="checkbox" name="south_america_country[]" value="French Guiana"> French Guiana <br>
                      <input type="checkbox" name="south_america_country[]" value="Guyana"> Guyana <br>
                      <input type="checkbox" name="south_america_country[]" value="Paraguay"> Paraguay <br>
                      <input type="checkbox" name="south_america_country[]" value="Peru"> Peru <br>
                      <input type="checkbox" name="south_america_country[]" value="Suriname"> Suriname <br>
                                                                  
                    </div>
                    <div class="col-3">
                      <input type="checkbox" name="south_america_country[]" value="Uruguay"> Uruguay <br>
                      <input type="checkbox" name="south_america_country[]" value="Venezuela"> Venezuela<br>
                                                                  
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
                      <input type="checkbox" name="residency_name[]" value="Citizen"> Citizen <br>
                      <input type="checkbox" name="residency_name[]" value="Permanent Resident"> Permanent Resident <br>
                      <input type="checkbox" name="residency_name[]" value="Student Visa"> Student Visa <br>
                                                                                        
                    </div>
                    <div class="col-4">
                      <input type="checkbox" name="residency_name[]" value="Temporary Visa"> Temporary Visa <br>
                      <input type="checkbox" name="residency_name[]" value="Work Permit"> Work Permit <br>
                      <input type="checkbox" name="residency_name[]" value="Other"> Other <br>
                      
                                                                  
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
                      <input type="checkbox" name="origin_name[]" value="Algerian"> Algerian <br>
                      <input type="checkbox" name="origin_name[]" value="Arab"> Arab <br>
                      <input type="checkbox" name="origin_name[]" value="Carribean"> Carribean <br>
                      <input type="checkbox" name="origin_name[]" value="Algerian"> Algerian <br>
                      <input type="checkbox" name="origin_name[]" value="Turkish"> Turkish <br>
                       Asian <br>
                      <input type="checkbox" name="origin_name[]" value="Asian - Afghan"> Asian - Afghan <br>
                      <input type="checkbox" name="origin_name[]" value="Asian - Bangladeshi"> Asian - Bangladeshi <br>
                      <input type="checkbox" name="origin_name[]" value="Asian - Chinese"> Asian - Chinese <br>
                      <input type="checkbox" name="origin_name[]" value="Asian - Filipino"> Asian - Filipino <br>
                      <input type="checkbox" name="origin_name[]" value="Asian - Indian"> Asian - Indian <br>
                      <input type="checkbox" name="origin_name[]" value="Asian - Indonesian"> Asian - Indonesian <br>
                      <input type="checkbox" name="origin_name[]" value="Asian - Kurdish"> Asian - Kurdish <br>
                      <input type="checkbox" name="origin_name[]" value="Asian - Kyrgyz"> Asian - Kyrgyz <br>
                      <input type="checkbox" name="origin_name[]"> Asian - Malay <br>
                                                                                        
                    </div>
                    <div class="col-4">
                      <input type="checkbox" name="origin_name[]" value="Asian - Maldives"> Asian - Maldives <br>
                      <input type="checkbox" name="origin_name[]" value="Asian - Pakistani"> Asian - Pakistani <br>
                      <input type="checkbox" name="origin_name[]" value="Asian - Sri Lankan"> Asian - Sri Lankan <br>
                      <input type="checkbox" name="origin_name[]" value="Asian - Other Background"> Asian - Other Background <br>
                      <input type="checkbox" name="origin_name[]" value="Indian Carribean <br>
                      White"> Indian Carribean <br>
                      White <br>
                      <input type="checkbox" name="origin_name[]" value="White - American"> White - American <br>
                      <input type="checkbox" name="origin_name[]" value="White - Australian"> White - Australian <br>
                      <input type="checkbox" name="origin_name[]" value="White - Canadian"> White - Canadian <br>
                      <input type="checkbox" name="origin_name[]" value="White - Hispanic"> White - Hispanic <br>
                      <input type="checkbox" name="origin_name[]" value="White - Other Background"> White - Other Background <br>
                      Black <br>
                      <input type="checkbox" name="origin_name[]" value="Black - African"> Black - African <br>
                      <input type="checkbox" name="origin_name[]" value="Black - American"> Black - American <br>
                      <input type="checkbox" name="origin_name[]" value="Black - British"> Black - British <br>
                      
                                                                  
                    </div>
                    <div class="col-3">
                      <input type="checkbox" name="origin_name[]" value="Black - Caribbean"> Black - Caribbean <br>
                      <input type="checkbox" name="origin_name[]" value="Black - Ethiopian"> Black - Ethiopian <br>
                      <input type="checkbox" name="origin_name[]" value="Black - Somali"> Black - Somali <br>
                      <input type="checkbox" name="origin_name[]" value="Black - Other Background"> Black - Other Background <br>
                      <input type="checkbox" name="origin_name[]" value="Mauritian"> Mauritian <br>
                      Other Ethnic Group <br>
                      <input type="checkbox" name="origin_name[]" value="Albanian"> Albanian <br>
                      <input type="checkbox" name="origin_name[]" value="Bosnian"> Bosnian <br>
                      <input type="checkbox" name="origin_name[]" value="Other Ethnicity"> Other Ethnicity <br>
                                          
                                                                  
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
                      <input type="checkbox" name="rel_history[]" value="Muslim Since Birth"> Muslim Since Birth<br>
                      <input type="checkbox" name="rel_history[]" value="Revert Muslim"> Revert Muslim<br>         
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
                      <input type="checkbox" name="living_law[]" value="Definitely Consider"> Definitely Consider<br>
                      <input type="checkbox" name="living_law[]" value="May Consider"> May Consider<br>
                      <input type="checkbox" name="living_law[]" value="Would not Consider"> Would not Consider<br>
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
                       <input type="checkbox" name="sects_type[]" value="just Muslim"> just Muslim<br>
                      <input type="checkbox" name="sects_type[]" value="Sunni Muslim"> Sunni Muslim<br>
                      <input type="checkbox" name="sects_type[]" value="Shia Muslim"> Shia Muslim<br>
                      <input type="checkbox" name="sects_type[]" value="Salafi"> Salafi<br>
                       <input type="checkbox" name="sects_type[]" value="Jam'at Islami"> Jam'at Islami<br>
                      <input type="checkbox" name="sects_type[]" value="Thableegh Jamaath"> Thableegh Jamaath<br>
                    </div>
                    <div class="col-md-3">
                      <input type="checkbox" name="sects_type[]" value="Shafi'i"> Shafi'i<br>
                      <input type="checkbox" name="sects_type[]" value="Hanafi"> Hanafi<br>
                      <input type="checkbox" name="sects_type[]" value="Hanabali"> Hanabali<br>
                      <input type="checkbox" name="sects_type[]" value="Maliki"> Maliki<br>
                       <input type="checkbox" name="sects_type[]" value="Sayyid"> Sayyid<br>
                      <input type="checkbox" name="sects_type[]" value="Urdu Muslim"> Urdu Muslim<br>
                      <input type="checkbox" name="sects_type[]" value="Bohra'i"> Bohra'i<br>
                       <input type="checkbox" name="sects_type[]" value="Pathan"> Pathan<br>
                       <input type="checkbox" name="sects_type[]" value="Sufism"> Sufism<br>
                      
                    </div>
                                    
                    
                  </div>
                  </div>
                </div>
                
              </li><div class="btpad"></div>

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
                      <input type="checkbox" name="pray_type[]" value="Always pray"> Always pray<br>
                      <input type="checkbox" name="pray_type[]" value="Rarely miss a prayer and make Qadah Salah"> Rarely miss a prayer and make Qadah Salah<br>
                      <input type="checkbox" name="pray_type[]" value="Sometimes miss Fajr and make Qadah Salah"> Sometimes miss Fajr and make Qadah Salah<br>
                      <input type="checkbox" name="pray_type[]" value="Sometimes pray"> Sometimes pray<br>
                      <input type="checkbox" name="pray_type[]" value="Only pray before exams"> Only pray before exams<br>
                    </div>
                    <div class="col-6">
                      <input type="checkbox" name="pray_type[]" value="Eid Salah only"> Eid Salah only<br>
                      <input type="checkbox" name="pray_type[]" value="Intend to start praying"> Intend to start praying<br>
                      <input type="checkbox" name="pray_type[]" value="Don't pray"> Don't pray<br>
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
                      <input type="checkbox" name="child_count[]" value="None"> None<br>
                      <input type="checkbox" name="child_count[]" value="one"> one<br>
                      
                    </div>
                    <div class="col-6">
                      <input type="checkbox" name="child_count[]" value="two"> two<br>
                      <input type="checkbox" name="child_count[]" value="three or more"> three or more<br>
                      
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
                      <input type="checkbox" name="child_like[]" value="Yes"> Yes<br>
                      
                    </div>
                    <div class="col-6">
                      <input type="checkbox" name="child_like[]" value="No"> No<br>
                      
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
                      <input type="checkbox" name="loking_body[]" value="Slim Skinny"> Slim/Skinny<br>
                      <input type="checkbox" name="loking_body[]" value="Average"> Average<br>
                      <input type="checkbox" name="loking_body[]" value="Athletic"> Athletic<br>
                    </div>
                    <div class="col-6">
                      <input type="checkbox" name="loking_body[]" value="Muscular"> Muscular<br>
                      <input type="checkbox" name="loking_body[]" value="A few extra pounds"> A few extra pounds<br>
                      <input type="checkbox" name="loking_body[]" value="Heavyset"> Heavyset<br>
                      
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
                  
                    <input type="hidden" value="1" name="test_user_id">
                  <div class="row">
                    <div class="col-4">
                      <input type="checkbox" name="hijab_time[]" value="Always"> Always<br>
                      <input type="checkbox" name="hijab_time[]" value="Always with Niqab"> Always with Niqab<br>
                      
                    </div>
                    <div class="col-6">
                      <input type="checkbox" name="hijab_time[]" value="Sometimes"> Sometimes<br>
                      <input type="checkbox" name="hijab_time[]" value="Never"> Never<br>
                      
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
                  <textarea name="loking_description" id=""  style="height:75px;width:91%;"></textarea>
                </div>
              </li><div class="btpad"></div>


  
 
 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>    

            </ul>

          <div id="first_step">
            {{--  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Open modal
  </button> --}}
            <a href="#" class="btn firstnextbtn" id="first">Next</a>
          </div>

          <div id="secnd_step">
          
          <a href="#" class="btn prevtofirstbtn" id="previous">previous</a>
          <a href="#" class="btn nexttothirdbtn" id="second">Next</a>
          </div>

          <div id="third_step">
          
          <a href="#" class="btn prevsecbtn" id="third_pre">Previous</a>
          <button type="submit" class="btn submitbtn" type="submit">Submit</button> 
          </div>

          </div>
        </div>
        <br>
      </div>
</form>

<script type="text/javascript">
$("#first").click(function(){
          var day = $('#day').val();
           var month = $('#month').val();
            var year = $('#year').val();
             var user_name = $('#user_name').val();
              var firstname = $('#firstname').val();
              var lastname = $('#lastname').val();
              var country = $('#country').val();
              var state = $('#state').val();
              var city = $('#city').val();
              var gender = $('#gender').val();

               var code = $('#code').val();
               var phone_code = $('#phone_code').val();
               var phone = $('#phone').val();
          
          var password = $('#password').val();
          var con_password = $('#con_password').val();
          if(password==con_password)
          {

            var email = $('#email').val();
            

            $.post('{{ url('/get-email') }}' , {_token: '{{ csrf_token() }}' ,email:email} , function(data){
                                              
                                             
                                              if(data=='true')
                                              {

                                           
                                               
           $("#two").removeAttr("style").hide();
          $("#secnd_step").removeAttr("style").hide();
          $("#basicinfo").removeAttr("style").hide();
          $("#one").removeAttr("style").show();
          $("#regform").removeAttr("style").show();
          $("#first_step").show('slow');

          $(".testemail").show('slow');
                                              }
                                              else 
                                              {
                                                 $.post('{{ url('/user-register-step-1') }}' , {_token: '{{ csrf_token() }}' ,state:state,city:city,country:country,gender:gender,day:day,month:month,year:year,user_name:user_name,firstname:firstname,code:code,phone_code:phone_code,lastname:lastname,phone:phone,password:password,email:email} , function(data){
         
          // $('#oth_country').html(country);
          $('#oth_user_name').html(user_name);
          $("#one").removeAttr("style").hide();
          $("#regform").removeAttr("style").hide();
          $("#first_step").hide();

        $("#two").removeAttr("style").show();
        $("#secnd_step").removeAttr("style").show();
         $("#basicinfo").removeAttr("style").show();
         $('#myModal').modal('show');
                                       });
                                              }
                                          });


          
           }
           else
           {


           $("#two").removeAttr("style").hide();
          $("#secnd_step").removeAttr("style").hide();
          $("#basicinfo").removeAttr("style").hide();

          $("#one").removeAttr("style").show();
          $("#regform").removeAttr("style").show();
          $("#first_step").show('slow');

          $(".dont_match").show('slow');
           }

      
});

  // }
</script>


     
  <script type="text/javascript">
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