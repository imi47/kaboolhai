@extends('user/user_master_layout1') 
@section('data') 

<div class="container-fluid">
  <div id="wait" style="display: none;"></div>
  <div class="row">
    <div class="col-sm-9" style="padding-top:100px;">
      <div class="well" style="height: auto;background-color:#ffffff;">
         <div class="stepsForm">
            <form method="post" id="regiser">
              <!-- steps -->
               <div class="sf-steps">
                    <div class="sf-steps-content">
                      <div>
                          <span>1</span> Registration
                        </div>
                        <div>
                          <span>2</span> Basic Information
                        </div>
                        <div>
                          <span>3</span> Advance Details
                        </div>
                    </div>
                </div> 
              <!-- end steps -->
              <div class="sf-steps-form sf-radius">
                <!-- Register -->
                <ul class="sf-content">
                  <li>
                     <div class="sf_columns column_2">
                       <label for="" style="padding-top:15px;">Name of Bride/Groom *</label>
                     </div>
                     <div class="sf_columns column_2">
                          <input type="text" name="user_name" placeholder="Enter Name" id="lname" required="required" class="form-control" style="height:35px;" data-required="true">
                     </div>
                  </li>

                  <li>
                     <div class="sf_columns column_2">
                       <label for="" style="padding-top:15px;">Email * </label>
                     </div>
                     <div class="sf_columns column_2">
                          <input type="email" class="form-control" style="height:35px;" name="email" id="email"  value="{{ $email }}" required="required" placeholder="Enter Email" data-required="true">
                     </div>
                  </li>

                  <li>
                     <div class="sf_columns column_2">
                       <label for="" style="padding-top:15px;">Password * </label>
                     </div>
                     <div class="sf_columns column_2">
                          <input type="password" name="password" id="password" value="" required="required" class="form-control" style="height:35px;" placeholder="password" data-required="true" data-confirm="true">
                     </div>
                  </li>

                  <li>
                     <div class="sf_columns column_2">
                       <label for="" style="padding-top:15px;">Confirm Password</label>
                     </div>
                     <div class="sf_columns column_2">
                          <input type="password" class="form-control" style="height:35px;" name="con_password" id="con_password"  value="" required="required" placeholder="Confirm password" data-required="true" data-confirm="true">
                     </div>
                  </li>

                  <li>
                     <div class="sf_columns column_2">
                       <label for="" style="padding-top:15px;">Gender *</label>
                     </div>
                     <div class="sf_columns column_2">
                          <select name="genger" required="" class="form-control" data-required="true">
                            <option>Select</option>
                           <option value="{{ $gender }}">{{ $gender }}
                            </option>
                           <option value="male">
                             Male
                           </option>
                           <option value="female">
                             Female
                           </option>
                         </select>
                     </div>
                  </li>

                  <li>
                     <div class="sf_columns column_2">
                       <label for="" style="padding-top:15px;">Country *</label>
                     </div>
                     <div class="sf_columns column_2">
                          <select id="country" onchange="country_change(this)" name="country_id" class="form-control" required="" data-required="true">
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

                  <li>
                     <div class="sf_columns column_2">
                       <label for="" style="padding-top:15px;">Province *</label>
                     </div>
                     <div class="sf_columns column_2">
                          <select selected="selected" id="state" onchange="state_change(this)"  name="state_id" class="form-control" required="" data-required="true">
                            <option>Select</option>
                          </select>
                     </div>
                  </li>

                  <li>
                     <div class="sf_columns column_2">
                       <label for="" style="padding-top:15px;">City *</label>
                     </div>
                     <div class="sf_columns column_2">
                          <select  name="city_id" id="city" selected="selected" class="form-control" required="" data-required="true">
                            <option>Select</option>
                          </select>
                     </div>
                  </li>
                         <li>
                            <div class="sf_columns column_2" style="padding-top:15px;">
                               <label class="control-label">Phone *<span class="field-error" style="color: red;"></span></label>
                             </div>
            <div class="row">
              <div class="col-md-2" style="margin-left:15px; margin-top: 5px; padding-top:9px; border-style: ridge;" >
                <img style="margin-top: 4px; margin-bottom: 6px;" src="{{ $user_assets }}/flags/pk.png" width="20" id="falgimg">
              </div>
              <div class="col-md-2" style="margin-left:-55px; padding-top:6px; ">
                <input style="padding: 12px;" type="text" readonly="" name="code" id="code" value="+92" class="form-control" >    
              </div>
              <div class="col-md-4" style="margin-left:-30px; padding-top:6px; ">
                <input style="padding: 12px;" maxlength="200" type="text" name="phone" id="phone" required="required" class="form-control" placeholder="3347272969" data-required="true">
              </div>
            </div>
                         </li>
                         <!-- <li>
                            <div class="sf_columns column_6">
                                <div class="sf-check">
                                    <label><input type="checkbox" value="test" name="test"><span></span> Lorem Ipsum is simply dummy text of the printing and typesetting industry</label>
                                </div>
                            </div>
                         </li> -->
                    </ul>
                    <!-- end register -->

                    <!-- start basic detail -->
                       <ul class="sf-content" style="display: block !important;"> 
                        <li style="padding-top:35px;margin-bottom:0rem;">
                            <div class="sf_columns column_6">
                                <h3 style="font-size:14px;font-weight:550;color:"><span>img</span> Hai Haider Ali...  Tell us more about the Groom, so we can help find the best matches!</h3>
                             </div> 
                        </li>
                         <li style="margin-bottom:0rem;">
                            <div class="sf_columns column_6">

                              <h3 style="font-weight:400;font-size:20px;"><span> <img src="{{ $user_assets }}/kabool_hai_icons/about-me.png"></span> About Me</h3><hr>
                            </div> 
                         </li>
                         
                         <li>
                           <div class="sf_columns column_2">
                             <label for="" style="padding-top:15px;">Complexion (Skin Color) *</label>
                           </div>
                           <div class="sf_columns column_2">
                                <select name="skin_color" class="form-control" data-required="true">
                                  <option value="">Select</option>
                                    <option value="Very Fair">Very Fair</option>
                                      <option value="Fair">Fair</option>
                                        <option value="Wheatish">Wheatish</option>
                                          <option value="Wheatish Brown">Wheatish Brown</option>
                                            <option value="Dark">Dark</option>
                                </select>
                           </div>
                         </li>

                         <li>
                           <div class="sf_columns column_2">
                             <label for="" style="padding-top:15px;">Height & Weight *</label>
                           </div>
                           <div class="sf_columns column_2">
                                <select name="height" class="form-control" data-required="true">
                                 <option value="">Height..</option>
                      <option value="Below 4ft 6in - 137cm">Below 4ft 6in - 137cm</option>
                      <option value="4ft 6in - 137cm">4ft 6in - 137cm</option>
                      <option value="4ft 7in - 139cm">4ft 7in - 139cm</option>
                      <option value="4ft 8in - 142cm ">4ft 8in - 142cm   </option>
                      <option value="4ft 9in - 144cm ">4ft 9in - 144cm  </option>
                      <option value="4ft 10in - 147cm">4ft 10in - 147cm  </option>
                      <option value="4ft 11in - 149cm">4ft 11in - 149cm  </option>
                      <option value="5ft - 152cm     ">5ft - 152cm      </option>
                      <option value="5ft 1in - 154cm ">5ft 1in - 154cm </option>
                      <option value="5ft 2in - 157cm ">5ft 2in - 157cm </option>
                      <option value="5ft 3in - 160cm ">5ft 3in - 160cm </option>
                      <option value="5ft 4in - 162cm ">5ft 4in - 162cm </option>
                      <option value="5ft 5in - 165cm ">5ft 5in - 165cm </option>
                      <option value="5ft 6in - 167cm ">5ft 6in - 167cm </option>
                      <option value="5ft 7in - 170cm ">5ft 7in - 170cm </option>
                      <option value="5ft 8in - 172cm ">5ft 8in - 172cm </option>
                      <option value="5ft 9in - 175cm ">5ft 9in - 175cm </option>
                      <option value="5ft 10in - 177cm">5ft 10in - 177cm </option>
                      <option value="5ft 11in - 180cm">5ft 11in - 180cm </option>
                      <option value="6ft - 182cm     ">6ft - 182cm      </option>
                      <option value="6ft 1in - 185cm ">6ft 1in - 185cm </option>
                      <option value="6ft 2in - 187cm ">6ft 2in - 187cm </option>
                      <option value="6ft 3in - 190cm ">6ft 3in - 190cm </option>
                      <option value="6ft 4in - 193cm ">6ft 4in - 193cm </option>
                      <option value="6ft 5in - 195cm ">6ft 5in - 195cm </option>
                      <option value="6ft 6in - 198cm ">6ft 6in - 198cm </option>
                      <option value="6ft 7in - 200cm ">6ft 7in - 200cm </option>
                      <option value="6ft 8in - 203cm ">6ft 8in - 203cm </option>
                      <option value="6ft 9in - 205cm">6ft 9in - 205cm </option>
                      <option value="6ft 10in - 208cm">6ft 10in - 208cm </option>
                      <option value="6ft 11in - 210cm">6ft 11in - 210cm </option>
                      <option value="7ft - 213cm     ">7ft - 213cm      </option>
                      <option value="Above 7ft - 213c">Above 7ft - 213cm </option>
                                </select>
                            </div>
                            <div class="sf_columns column_2">                 
                              <select name="weight" class="form-control" data-required="true">
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
                         </li>

                         <li>
                            <div class="sf_columns column_2">
                              <label for="" style="padding-top:15px;">Physical Status *</label>
                            </div>
                            <div class="sf_columns column_2">
                                <select name="physical_status" id="physical_status" onchange="showdisabilty(this)" data-required="true">
                                  <option selected="selected" value="Normal Person">Normal Person</option>
                      <option value="Deaf/Dumb">Deaf/Dumb</option>
                      <option value="Blind">Blind</option>
                      <option value="Physically Challenged">Physically Challenged</option>
                      <option value="Mentally Challenged">Mentally Challenged</option>
                      <option value="With other Disability">With other Disability</option>
                                </select>
                            </div>  
                         </li>

                          <li id="disabilty" style="display: none">
                            <div class="sf_columns column_2">
                              <label for="" style="padding-top:15px;" >Disablty</label>
                            </div>
                            <div class="sf_columns column_4">
                                 <textarea name="description" style="height: 60px;" id="user-message" class="form-control" cols="20" rows="10" placeholder="Enter your Message"></textarea>
                            </div>
                         </li>
                         {{-- <li>
                            <div class="sf_columns column_2">
                              <label for="" style="padding-top:15px;" >Hair Color</label>
                            </div>
                            <div class="sf_columns column_2">
                                <select name="hair_color">
                                  <option value="Black">Black</option>
                                  <option value="White">White</option>
                                </select>
                            </div>
                         </li> --}}

                         <li>
                            <div class="sf_columns column_2">
                              <label for="" style="padding-top:15px;" >Body Type *</label>
                            </div>                          
                            <div class="sf_columns column_3">
                                <select name="body_type" class="form-control" data-required="true">
                                  <option value="Slim">Slim</option>
                               <option value="average">average</option>
                               <option value="A few extra pounds">A few extra pounds</option>
                               <option value="Athletic">Athletic</option>
                               <option value="Muscular">Muscular</option>
                               <option value="Heavyset">Heavyset</option>
                          </select>
                            </div>
                         </li>
                        
                        <li>
                          <div class="sf_columns column_2">
                              <label for="" style="padding-top:15px;" >Do you keep Beard</label>
                            </div>
                          <div class="sf_columns column_3">
                                <select class="form-control" selected="beard" name="beard">
                                 <option value="Yes">Yes</option>
                                 <option value="No">No</option>         
                               </select>
                            </div>
                        </li>

                         <li>
                          <div class="sf_columns column_2">
                            <label for="" style="padding-top:15px;" >Availability status</label>
                          </div>
                            <div class="sf_columns column_3">
                                

                                 <select selected="selected" name="availability">
       
                                     <option value="  
                            I am courrently Available for communication">
                                        
                            I am courrently Available for communication
                                      </option>
                                    <option value="  
                            I am courrently not Available for communication">
                                        
                            I am courrently not Available for communication
                                      </option>

                                       <option value="  
                              
                            I am courrently meeting another member">
                                        
                              
                            I am courrently meeting another member
                                      </option>
                                  </select>
                               
                            </div>

                            
                         </li>

                         <li>
                              <div class="sf_columns column_2">
                              <label for="" style="padding-top:15px;" >Mother Tongue *</label>
                              </div>
                              <div class="sf_columns column_3">
                                
                                <select selected="selected" class="form-control" name="language" data-required="true">
                                <option value="">Please Select...</option> 
<option value="Malayalam       ">Malayalam                </option>    
<option value="Aka             ">Aka                </option>
<option value="Angika          ">Angika               </option>
<option value="Arabic          ">Arabic               </option> 
<option value="Arunachali      ">Arunachali               </option>
<option value="Assamese        ">Assamese               </option> 
<option value="Awadhi          ">Awadhi               </option> 
<option value="Badaga          ">Badaga               </option> 
<option value="Bengali         ">Bengali                </option>
<option value="Bhojpuri        ">Bhojpuri               </option> 
<option value="Bihari          ">Bihari               </option> 
<option value="Brij            ">Brij               </option> 
<option value="Chatisgarhi     ">Chatisgarhi                </option>
<option value="Coorgi          ">Coorgi               </option> 
<option value="Dogri           ">Dogri                </option> 
<option value="English         ">English                </option> 
<option value="French          ">French               </option> 
<option value="Garhwali        ">Garhwali               </option> 
<option value="Garo            ">Garo               </option> 
<option value="Gujarati        ">Gujarati               </option>
<option value="Haryanvi        ">Haryanvi               </option>
<option value="Himachali/Pahari">Himachali/Pahari               </option> 
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
                              </li>
                          
                        <li>
                          <div class="sf_columns column_2">
                            <label for="" style="padding-top:15px;">DOB *</label>
                          </div>
                        
                            <div class="sf_columns column_1">
                                
                                <select name="day" data-required="true">
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
                            </div>
                            <div class="sf_columns column_2">
                                <select name="month" class="form-control" data-required="true">
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
                            </div>
                            <div class="sf_columns column_1">
                                <select name="year" class="form-control" data-required="true">
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
                         </li>

                         

                          <li>
                            <div class="sf_columns column_2">
                              <label for="" style="padding-top:15px;" >Like to have Children?</label>
                            </div>
                            <div class="sf_columns column_2">
                                <select class="form-control" selected="selected" name="like_chiled">
                                    <option value="Yes">Yes</option>
                                   <option value="No">No</option>        
                                </select>
                            </div>
                          </li>

                         {{--  <li>
                            <div class="sf_columns column_2">
                              <label for="" style="padding-top:15px;" >Your current Profession?</label>
                            </div>
                             <div class="sf_columns column_2">
                                <select class="form-control" selected="selected" name="profession">
                                    @foreach ($profession as $row)
                                       <option value="{{ $row->profession_id }}">
                                          {{ $row->profession_type }}
                                        </option>
                                    @endforeach
                                 </select>    
                            </div>
                          </li> --}}
                          
                          <li>
                              <div class="sf_columns column_2">
                                <label for="" style="padding-top:15px;" >Residency Status *</label>
                              </div>
                              <div class="sf_columns column_2">
                                
                                <select class="form-control" name="residency_status" selected="selected" data-required="true">
     
                                   <option value="Citizen">Citizen</option>
                                   <option value="Parmanent resident">Parmanent resident</option>
                                   <option value="Student Visa">Student Visa</option>
                                   <option value="Work Permit">Work Permit</option>
                                    <option value="Temporary Visa">Temporary Visa</option>
                                   <option value="Others">Others</option>
                                  
                                </select>

                              </div>
                          </li>

                          <li>
                              <div class="sf_columns column_2">
                                <label for="" style="padding-top:15px;">What is your Ethnic Origin? *</label>
                              </div>
                              <div class="sf_columns column_2">
                                <select class="form-control" selected="selected" name="ethnic_type" data-required="true">
                                  @foreach ($ethnic_origin as $row)
                                   <option value="{{ $row->ethnic_id }}">
                                      {{ $row->ethnic_type }}
                                    </option>
                                   @endforeach
                               </select>
                              </div>
                          </li>
                          
                          <li>
                              <div class="sf_columns column_2">
                                <label for="" style="padding-top:15px;" >Marital Status? *</label>
                              </div>
                              <div class="sf_columns column_2">
                                <select class="form-control" id="marige_type" onchange="checkmamartial(this)" selected="selected" name="marige_type" data-required="true">
                                   <option value="Unmarried">Unmarried</option>
                                   <option value="Widow">Widow/Widower</option>
                                   <option value="Divorcee">Divorcee</option>
                                   <option value="Separated">Separated</option>
                                                                    
                               </select>
                              </div>
                          </li>

                           <li style="display: none;" id="no_chiled">
                            <div class="sf_columns column_2">
                              <label for="" style="padding-top:15px;">No. of Children </label>
                            </div>
                            <div class="sf_columns column_2">
                                <select class="form-control" onchange="checkchiled(this)" selected="selected" id="child_count" name="child_count">
                                   <option value="None">None</option>
                                   <option value="1">1</option>
                                   <option value="2">2</option>
                                   <option value="3">3</option>
                                   <option value="4 and above">4 and above</option> 
                              </select>
                            </div>
                          </li>


                          <li style="display: none;" id="children_living">
                            <div class="sf_columns column_2">
                              <label for="" style="padding-top:15px;">Children living status</label>
                            </div>
                            <div class="sf_columns column_2">
                                <select class="form-control" selected="selected" name="children_living">
                                   <option value="living with me">living with me</option>
                                   <option value="Not living with me">Not living with me</option>
                                   <option value="Sometimes living with me">Sometime living with me</option>
                                    
                              </select>
                            </div>
                          </li>

                          <li style="display: none;" id="younger_child">
                            <div class="sf_columns column_2">
                              <label for="" style="padding-top:15px;">Younger child age</label>
                            </div>
                            <div class="sf_columns column_2">
                                <select class="form-control" selected="selected" name="yanger_chiled">
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
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="Older than 18">Older than 18</option>
                              </select>
                            </div>
                          </li>
                          <li style="display: none;" id="older_chiled">
                            <div class="sf_columns column_2">
                              <label for="" style="padding-top:15px;">Older Child Age</label>
                            </div>
                            <div class="sf_columns column_2">
                                <select class="form-control" selected="selected" name="older_chiled">
                                   <option value="0">0</option>
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
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="Older than 18">Older than 18</option>
                                    
                              </select>
                            </div>
                          </li>

                          <li>
                              <div class="sf_columns column_2">
                                <label for="" style="padding-top:15px;" >Profile Created For *</label>
                              </div>
                              <div class="sf_columns column_2">
                                <select class="form-control" selected="selected" name="profile_created" data-required="true">
                                    <option value="Self">Self</option>
                                    <option value="Son">Son</option>
                                    <option value="Daughter">Daughter</option>
                                    <option value="Friends">Friends</option>
                                    <option value="Brother">Brother</option>
                                    <option value="Sister">Sister</option>
                                    <option value="Relatives">Relatives</option>
                                </select> 
                              </div>
                          </li>

                         

                         {{--  <li>
                              <div class="sf_columns column_2">
                                <label for="" style="padding-top:15px;" >Age</label>
                              </div>
                              <div class="sf_columns column_2">
                                <select class="form-control" selected="selected" name="age"> 
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
                              </div>
                          </li> --}}

                          <li style="overflow: visible !important;">
                              <div class="sf_columns column_2">
                                <label for="" style="padding-top:15px;" >Assets *</label>
                              </div>
                              <div class="sf_columns column_2">
                                  <select required="" data-placeholder="Choose assets Type" class="chosen-select form-control" name="assets[]" multiple tabindex="4" data-required="true">
                                    <option value="Home">Home</option>
                                      <option value="Plot">Plot</option>
                                      <option value="Vehicle">Vehicle</option>
                                      <option value="Nothing">Nothing</option>
                                </select> 
                              </div>
                          </li>

                          <li style="padding-top:35px;margin-bottom:0rem;">
                            <div class="sf_columns column_6">
                                <h3 style="font-weight:400;font-size:20px;"><span> <img src="{{ $user_assets }}/kabool_hai_icons/religion.png"></span> Religious Interest</h3><hr>
                             </div> 
                          </li>

                          <li>
                              <div class="sf_columns column_2">
                                <label for="" style="padding-top:15px;" >Are you reverted to Islam?</label>
                              </div>
                              <div class="sf_columns column_2">
                                <select class="form-control" name="religious_type" selected="selected">
                                   <option value="Yes">Yes</option>
                                   <option value="No">No</option>
                                 </select>
                              </div>
                          </li>

                          <li>
                              <div class="sf_columns column_2">
                                <label for="" style="padding-top:15px;" >Allegiance to Islamic Organ *</label>
                              </div>
                              <div class="sf_columns column_2">
                                <select class="form-control" selected="selected" name="sect_are" data-required="true">
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
                          </li>

                          <li>
                              <div class="sf_columns column_2">
                                <label for="" style="padding-top:15px;" >Religiousness *</label>
                              </div>
                              <div class="sf_columns column_2">
                                <select name="Religiousness" class="form-control" data-required="true">
                                  <option value="">Please Select..</option>
                      <option value="Very religious">Very religious</option>
                      <option value="Religious">Religious</option>
                       <option value="Not religious">Not religious</option>
                      <option value="Prefer not to say">Prefer not to say</option>
                                </select>
                              </div>
                          </li>

                          <li>
                              <div class="sf_columns column_2">
                                <label for="" style="padding-top:15px;" >Perform Namaz *</label>
                              </div>
                              <div class="sf_columns column_2">
                                <select class="form-control" selected="selected" name="pray" data-required="true">
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
                          </li>

                          <li>
                              <div class="sf_columns column_2">
                                <label for="" style="padding-top:15px;" >Read Quran *</label>
                              </div>
                              <div class="sf_columns column_2">
                                <select name="read_quran" class="form-control" data-required="true">
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
                          </li>

                          <li>
                              <div class="sf_columns column_2">
                                <label for="" style="padding-top:15px;" >Attend religious Service</label>
                              </div>
                              <div class="sf_columns column_2">
                                <select name="attend_religious_service">
                                  <option value="" >Please Select</option>
                                         <option value="Daily" >Daily</option>
                                        <option value="Only on Jummah / Fridays">Only on Jummah / Fridays</option>
                                        <option value="Sometimes">Sometimes</option>
                                        <option value="Only During Ramadan">Only During Ramadan</option>
                                        <option value="Never">Never</option>
                                </select>
                              </div>
                          </li>

                          <li>
                              <div class="sf_columns column_2">
                                <label for="" style="padding-top:15px;" >Polygamy *</label>
                              </div>
                              <div class="sf_columns column_2">
                                <select name="polygamy" class="form-control" data-required="true">
                                 <option value="" >Please Select</option>
                                        <option value="Accept polygamy" >Accept polygamy</option>
                                        <option value="Maybe accept polygamy">Maybe accept polygamy</option>
                                        <option value="Don't accept polygamy">Don't accept polygamy</option>
                                </select>
                              </div>
                          </li>

                        <li style="padding-top:35px;margin-bottom:0rem;">
                            <div class="sf_columns column_6">
                                <h3 style="font-weight:400;font-size:20px;"><span> <img src="{{ $user_assets }}/kabool_hai_icons/education.png"></span> Education And Occupation</h3><hr>
                             </div> 
                          </li>

                         <li>
                            <div class="sf_columns column_2">
                              <label for="" style="padding-top:15px;" >Education *</label>
                            </div>
                            <div class="sf_columns column_2">
                              <select name="qualification" class="form-control" data-required="true">
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
                        </li>
                        
                        <li>
                            <div class="sf_columns column_2">
                              <label for="" style="padding-top:15px;" >Institute *</label>
                            </div>
                            <div class="sf_columns column_2">
                              <input type="text" style="height: 4%" class="form-control" name="institute" data-required="true">
                             
                            </div>
                        </li>

                        <li>
                            <div class="sf_columns column_2">
                              <label for="" style="padding-top:15px;" >Year *</label>
                            </div>
                            <div class="sf_columns column_2">
                              <input type="text" style="height: 4%" class="form-control" name="year" data-required="true">
                              
                            </div>
                        </li>

                        <li>
                            <div class="sf_columns column_2">
                              <label for="" style="padding-top:15px;" >Occupation *</label>
                            </div>
                            <div class="sf_columns column_2">
                              <select name="job" class="form-control" data-required="true">
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
                        </li>

                        <li>
                            <div class="sf_columns column_2">
                              <label for="" style="padding-top:15px;" >Job Detail *</label>
                            </div>
                            <div class="sf_columns column_4">
                              <input type="text" style="height: 4%" name="job_address" class="form-control" data-required="true">
                            </div>
                        </li>

                        <li>
                            <div class="sf_columns column_2">
                              <label for="" style="padding-top:15px;" >Job contact *</label>
                            </div>
                            <div class="sf_columns column_2">
                              <input type="text" style="height: 4%" name="job_contact" class="form-control" placeholder="enter job contact" data-required="true">
                            </div>
                        </li>

                        <li>
                            <div class="sf_columns column_2">
                              <label for="" style="padding-top:15px;" >Annual Income *</label>
                            </div>
                            <div class="sf_columns column_2">
                              
                              <select name="a_income" onchange="country_income(this)" class="form-control" data-required="true">
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
                            <div class="sf_columns column_2" id="country_currency" style="display: none">
                              <select name="convenient_time" class="form-control" data-required="true">
                                  <option value="Pakistan-PKR">Pakistan-PKR</option>
                                  <option value="India-INR">India-INR</option>
                                  <option value="Ameria-USD">Ameria-USD</option>
                                </select>
                            </div>
                        </li>

                       {{--  <li>
                            <div class="sf_columns column_2">
                              <label for="" style="padding-top:15px;" >Monthly income</label>
                            </div>
                            <div class="sf_columns column_2">
                              <input type="text" style="height: 4%" name="m_income" class="form-control" placeholder="Enter Monthly Income">
                            </div>
                        </li>
 --}}
<!-- ************************************************************************************************** -->
                         <li style="padding-top:35px;margin-bottom:0rem;">
                            <div class="sf_columns column_6">
                                <h3 style="font-weight:400;font-size:20px;"><span> <img src="{{ $user_assets }}/kabool_hai_icons/contact-details.png"></span>  Contact Details</h3><hr>
                             </div> 
                          </li>

                          <li>
                              <div class="sf_columns column_2">
                                <label for="" style="padding-top:15px;" >Full Address</label>
                              </div>
                              <div class="sf_columns column_4">
                                 <textarea name="contact_address" id="user-message" class="form-control" cols="20" rows="10" placeholder="Enter your Message"></textarea>
                                
                              </div>
                          </li>

                          <li>
                              <div class="sf_columns column_2">
                                <label for="" style="padding-top:15px;" >Present Country</label>
                              </div>
                              <div class="sf_columns column_2">
                                <select id="present_country" name="present_country" class="form-control" required="">
                                <option selected=""value="">Select country 
                                </option>
                                @foreach ($country as $row)
                                  <option value="{{ $row->country_id }}">
                                    {{ $row->country_name }}
                                  </option>
                                 @endforeach
                              </select>
                              </div>
                              <div class="sf_columns column_2">
                          <input type="text" name="present_city" placeholder="present city" value="" required="required" class="form-control" style="height:35px;">
                     </div>
                          </li>

                          <li>
                              <div class="sf_columns column_2">
                                <label for="" style="padding-top:15px;" >Native Country</label>
                              </div>
                              <div class="sf_columns column_2">
                                <select id="country" name="country" class="form-control" required="">
                                <option selected=""value="">Select country 
                                </option>
                                @foreach ($country as $row)
                                  <option value="{{ $row->country_id }}">
                                    {{ $row->country_name }}
                                  </option>
                                 @endforeach
                              </select>
                              </div>
                          </li>

                          <li>
                              <div class="sf_columns column_2">
                                <label for="" style="padding-top:15px;" >Native State</label>
                              </div>
                              <div class="sf_columns column_2">
                                <select selected="selected" id="state" onchange="state_change(this)"  name="state" class="form-control" required="">
                                </select>
                              </div>
                          </li>

                          <li>
                              <div class="sf_columns column_2">
                                <label for="" style="padding-top:15px;" >Native City</label>
                              </div>
                              <div class="sf_columns column_2">
                                <select  name="city" id="city" selected="selected" class="form-control" required="">
                                </select>
                              </div>
                          </li>

                         <li>
                            <div class="sf_columns column_2">
                              <label for="" style="padding-top:15px;" >Convenient time to Call *</label>
                            </div>
                            <div class="sf_columns column_2">
                              <select name="convenient_time" class="form-control" data-required="true">
                                  <option value="7 AM">7 AM</option>
                                  <option value="12 AM">12 AM</option>
                                  <option value="Anytime">Anytime</option>
                                </select>
                            </div>
                        </li>

                        <li>
                            <div class="sf_columns column_2">
                              <label for="" style="padding-top:15px;" >Contact Person & Relationship</label>
                            </div>

                            <div class="sf_columns column_2">
                          <input type="text" name="contact_person" placeholder="contact Person" value="" required="required" class="form-control" style="height:35px;">
                     </div>
                            {{-- <div class="sf_columns column_2">
                              <input type="" name="">
                              <select name="contact_person">
                                   <option value="Self">Self</option>
                                    <option value="parent">parent</option>
                                     <option value="brother/sister">brother/sister</option>
                                     <option value="Family/Relative">Family/Relative</option>
                                    <option value="Cousin">Cousin</option>
                                     <option value="Gardian">Gardian</option>
                                      <option value="Friend">Friend</option>
                                </select>
                            </div> --}}
                        </li>

  <!-- ************************************************************************************************** -->
                         <li style="padding-top:35px;margin-bottom:0rem;">
                            <div class="sf_columns column_6">
                                <h3 style="font-weight:400;font-size:20px;"><span> <img src="{{ $user_assets }}/kabool_hai_icons/family.png"></span> Family Details</h3><hr>
                             </div> 
                          </li>

                          <li>
                              <div class="sf_columns column_2">
                                <label for="" style="padding-top:15px;" >Family Type</label>
                              </div>
                              <div class="sf_columns column_2">
                                <select name="family_type">
                                  <option value="Nuclear Family">Nuclear Family</option>
                                   <option value="joint Family">joint Family</option>
                                </select>
                              </div>
                          </li>

                          <li>
                              <div class="sf_columns column_2">
                                <label for="" style="padding-top:15px;" >Finacial Status</label>
                              </div>
                              <div class="sf_columns column_2">
                                <select name="finacial_status">
                                    <option value="Rich">Rich</option>
                                      <option value="Upper Middle Class">Upper Middle Class</option>
                                  <option value="Middle Class">Middle Class</option>\
                                    <option value="Lower Upper Middle Class">Lower Upper Middle Class</option>
                                      <option value="Do not want to tell at this time">Do not want to tell at this time</option>
                                </select>
                              </div>
                          </li>

                          <li>
                              <div class="sf_columns column_2">
                                <label for="" style="padding-top:15px;" >Father's Detail</label>
                              </div>
                              <div class="sf_columns column_2">
                                <select name="father_detail">
                                  <option value="Alive">Alive</option>
                                  <option value="Died">Died</option>
                                </select>
                              </div>
                          </li>

                          <li>
                              <div class="sf_columns column_2">
                                <label for="" style="padding-top:15px;" >Father Occupation</label>
                              </div>
                               <div class="sf_columns column_2">
                          <input type="text" name="father_job" placeholder="Father Occupation" value="" required="required" class="form-control" style="height:35px;">
                     </div>
                              {{-- <div class="sf_columns column_2">
                                  <select name="father_job">
                                  <option value="Supervisor">Supervisor</option>
                                </select>
                              </div> --}}
                          </li>

                          <li>
                              <div class="sf_columns column_2">
                                <label for="" style="padding-top:15px;" >Mother's Detail</label>
                              </div>
                              <div class="sf_columns column_2">
                                <select name="mother_detail">
                                  <option value="Alive">Alive</option>
                                  <option value="Died">Died</option>
                                </select>
                              </div>
                          </li>

                          <li>
                              <div class="sf_columns column_2">
                                <label for="" style="padding-top:15px;" >Mother Occupation</label>
                              </div>
                               <div class="sf_columns column_2">
                          <input type="text" name="mother_job" placeholder="Mother Occupation" value="" required="required" class="form-control" style="height:35px;">
                     </div>
                              {{-- <div class="sf_columns column_2">
                                <select name="mother_job">
                                  <option value="Supervisor">Supervisor</option>
                                </select>
                              </div> --}}
                          </li>

                          <li>
                              <div class="sf_columns column_2">
                                <label for="" style="padding-top:15px;" >Family Cast</label>
                              </div>
                              <div class="sf_columns column_2">
                                 <input type="text" name="family_cast" placeholder="Family Cast" value="" required="required" class="form-control" style="height:35px;">
                                {{-- <select name="family_cast">
                                  <option value="Jutt">Jutt</option>
                                  <option value="Butt">Butt</option>
                                </select> --}}
                              </div>
                          </li>

<!--*******************************************************************************************************-->
                        <li style="padding-top:35px;margin-bottom:0rem;">
                            <div class="sf_columns column_6">
                                <h3 style="font-weight:400;font-size:20px;"><span> <img src="{{ $user_assets }}/kabool_hai_icons/brothers.png"></span> Brothers Detail</h3><hr>
                             </div> 
                          </li>

                          <li>
                              <div class="sf_columns column_2">
                                <label for="" style="padding-top:15px;" >Brothers Status</label>
                              </div>
                              <div class="sf_columns column_2">
                                <select name="brother_status" class="form-control">
                                  <option value="">- No of Brothers Married -</option>
                      <option value="No married brother">No married brother</option>
                      <option value="One married brother">One married brother</option>
                      <option value="Two married brothers">Two married brothers</option>
                      <option value="Three married brothers">Three married brothers</option>
                      <option value="Four married brothers">Four married brothers</option>
                      <option value="Above four married brothers">Above four married brothers</option>
                                </select>
                              </div>
                          </li>

                          <li>
                              <div class="sf_columns column_2">
                                <label for="" style="padding-top:15px;" >Elder</label>
                              </div>
                              <div class="sf_columns column_2">
                                <select name="brother_elder" class="form-control" style="width:191px">
                                  <option value="0">0</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="4 +">4 +</option>
                                </select>
                              </div>
                          </li>

                          <li>
                              <div class="sf_columns column_2">
                                <label for="" style="padding-top:15px;" >Younger</label>
                              </div>
                              <div class="sf_columns column_2">
                                <select name="brother_younger" class="form-control">
                                <option value="0">0</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="4 +">4 +</option>
                              </select>
                              </div>
                          </li>
  
<!-- ************************************************************************************************  -->
                           <li style="padding-top:35px;margin-bottom:0rem;">
                            <div class="sf_columns column_6">
                                <h3 style="font-weight:400;font-size:20px;"><span> <img src="{{ $user_assets }}/kabool_hai_icons/sisters.png"></span> Sister's Detail</h3><hr>
                             </div> 
                          </li>

                          <li>
                              <div class="sf_columns column_2">
                                <label for="" style="padding-top:15px;" >Sister's Status</label>
                              </div>
                              <div class="sf_columns column_2">
                                <select name="sister_status" class="form-control">
                                 <option value="">- No of Sisters Married -</option>
                      <option value="No married sister">No married sister</option>
                      <option value="One married sister">One married sister</option>
                      <option value="Two married sisters">Two married sisters</option>
                      <option value="Three married sisters">Three married sisters</option>
                      <option value="Four married sisters">Four married sistes</option>
                      <option value="Above four married sisters">Above four married sisters</option>
                                </select>
                              </div>
                          </li>

                          <li>
                              <div class="sf_columns column_2">
                                <label for="" style="padding-top:15px;" >Elder</label>
                              </div>
                              <div class="sf_columns column_2">
                                <select name="sister_elder" class="form-control" style="width:191px">
                                <option value="0">0</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="4 +">4 +</option>
                                </select>
                              </div>
                          </li>

                          <li>
                              <div class="sf_columns column_2">
                                <label for="" style="padding-top:15px;" >Younger</label>
                              </div>
                              <div class="sf_columns column_2">
                                <select name="sister_younger" class="form-control">
                               <option value="0">0</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="4 +">4 +</option>
                              </select>
                              </div>
                          </li>

<!--*********************************************************************************************  -->
                         
                         <li style="margin-bottom:0rem;">
                            <div class="sf_columns column_6">
                              <h3 style="font-weight:400;font-size:20px;"><span> <img src="{{ $user_assets }}/kabool_hai_icons/family-info.png"></span> Family Information</h3>
                              <hr>
                            </div> 
                         </li>

                         <li>
                            <div class="sf_columns column_6">
                                <label for="">Write about your personality,family background,education,profession and hobbies</label>
                            </div>
                             <div class="sf_columns column_6">
                                 <textarea name="description" id="user-message" class="form-control" cols="20" rows="10" placeholder="Enter your Message"></textarea>
                             </div>
                         </li>
<!-- ********************************************************************************************* -->
                         <li style="padding-top:35px;margin-bottom:0rem;">
                            <div class="sf_columns column_6">
                                <h3 style="font-weight:400;font-size:20px;"><span> <img src="{{ $user_assets }}/kabool_hai_icons/medical-details.png"></span> Medical Details</h3><hr>
                             </div> 
                          </li>

                          <li>
                              <div class="sf_columns column_2">
                                <label for="" style="padding-top:15px;" >Blood Group</label>
                              </div>
                              <div class="sf_columns column_2">
                                <select name="blood_group">
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
                          </li>
                           <li>
                              <div class="sf_columns column_2">
                                <label for="" style="padding-top:15px;" >Diet</label>
                              </div>
                              <div class="sf_columns column_2">
                                <select name="disease">
                                  <option value="None">Vagetarian</option>
                                  <option value="Cancer">Non-Vagetarian</option>
                                </select>
                              </div>
                          </li>
                          {{-- <li>
                              <div class="sf_columns column_2">
                                <label for="" style="padding-top:15px;" >Suffering Any Disease</label>
                              </div>
                              <div class="sf_columns column_2">
                                <select name="disease">
                                  <option value="None">None</option>
                                  <option value="Cancer">Cancer</option>
                                </select>
                              </div>
                          </li> --}}

                    </ul>
                    <!-- end basic detail -->
<!-- ********************************************************************************************** -->
                    <!-- Advance detail -->
                    <ul class="sf-content" style="display: block !important;">

                        <li style="padding-top:35px;margin-bottom:0rem;">
                            <div class="sf_columns column_6">
                                <h3 style="font-weight:400;font-size:20px;"><span><img src="{{ $user_assets }}/kabool_hai_icons/basic-info.png"></span> Basic Preferences FOR PARTNER</h3><hr>
                             </div> 
                        </li>

                        

                        <li>
                            <div class="sf_columns column_2">
                              <label for="" style="padding-top:15px;" >Age Preferences</label>
                            </div>
                            <div class="sf_columns column_2">
                            <select name="loking_age_from">
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
                            </div>

                            <div class="sf_columns column_2">
                                <select name="loking_age_to">
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
                            </div>
                        </li>

                        <li>
                            <div class="sf_columns column_2">
                              <label for="" style="padding-top:15px;" >Height Preferences</label>
                            </div>
                            <div class="sf_columns column_2">
                              <select name="loking_height_from">
                                 <option value="">Height..</option>
                      <option value="Below 4ft 6in - 137cm">Below 4ft 6in - 137cm</option>
                      <option value="4ft 6in - 137cm">4ft 6in - 137cm</option>
                      <option value="4ft 7in - 139cm">4ft 7in - 139cm</option>
                      <option value="4ft 8in - 142cm ">4ft 8in - 142cm   </option>
                      <option value="4ft 9in - 144cm ">4ft 9in - 144cm  </option>
                      <option value="4ft 10in - 147cm">4ft 10in - 147cm  </option>
                      <option value="4ft 11in - 149cm">4ft 11in - 149cm  </option>
                      <option value="5ft - 152cm     ">5ft - 152cm      </option>
                      <option value="5ft 1in - 154cm ">5ft 1in - 154cm </option>
                      <option value="5ft 2in - 157cm ">5ft 2in - 157cm </option>
                      <option value="5ft 3in - 160cm ">5ft 3in - 160cm </option>
                      <option value="5ft 4in - 162cm ">5ft 4in - 162cm </option>
                      <option value="5ft 5in - 165cm ">5ft 5in - 165cm </option>
                      <option value="5ft 6in - 167cm ">5ft 6in - 167cm </option>
                      <option value="5ft 7in - 170cm ">5ft 7in - 170cm </option>
                      <option value="5ft 8in - 172cm ">5ft 8in - 172cm </option>
                      <option value="5ft 9in - 175cm ">5ft 9in - 175cm </option>
                      <option value="5ft 10in - 177cm">5ft 10in - 177cm </option>
                      <option value="5ft 11in - 180cm">5ft 11in - 180cm </option>
                      <option value="6ft - 182cm     ">6ft - 182cm      </option>
                      <option value="6ft 1in - 185cm ">6ft 1in - 185cm </option>
                      <option value="6ft 2in - 187cm ">6ft 2in - 187cm </option>
                      <option value="6ft 3in - 190cm ">6ft 3in - 190cm </option>
                      <option value="6ft 4in - 193cm ">6ft 4in - 193cm </option>
                      <option value="6ft 5in - 195cm ">6ft 5in - 195cm </option>
                      <option value="6ft 6in - 198cm ">6ft 6in - 198cm </option>
                      <option value="6ft 7in - 200cm ">6ft 7in - 200cm </option>
                      <option value="6ft 8in - 203cm ">6ft 8in - 203cm </option>
                      <option value="6ft 9in - 205cm">6ft 9in - 205cm </option>
                      <option value="6ft 10in - 208cm">6ft 10in - 208cm </option>
                      <option value="6ft 11in - 210cm">6ft 11in - 210cm </option>
                      <option value="7ft - 213cm     ">7ft - 213cm      </option>
                      <option value="Above 7ft - 213c">Above 7ft - 213cm </option>
                                </select>
                            </div>
                            <div class="sf_columns column_2">
                                <select name="loking_height_to">
                                 <option value="">Height..</option>
                      <option value="Below 4ft 6in - 137cm">Below 4ft 6in - 137cm</option>
                      <option value="4ft 6in - 137cm">4ft 6in - 137cm</option>
                      <option value="4ft 7in - 139cm">4ft 7in - 139cm</option>
                      <option value="4ft 8in - 142cm ">4ft 8in - 142cm   </option>
                      <option value="4ft 9in - 144cm ">4ft 9in - 144cm  </option>
                      <option value="4ft 10in - 147cm">4ft 10in - 147cm  </option>
                      <option value="4ft 11in - 149cm">4ft 11in - 149cm  </option>
                      <option value="5ft - 152cm     ">5ft - 152cm      </option>
                      <option value="5ft 1in - 154cm ">5ft 1in - 154cm </option>
                      <option value="5ft 2in - 157cm ">5ft 2in - 157cm </option>
                      <option value="5ft 3in - 160cm ">5ft 3in - 160cm </option>
                      <option value="5ft 4in - 162cm ">5ft 4in - 162cm </option>
                      <option value="5ft 5in - 165cm ">5ft 5in - 165cm </option>
                      <option value="5ft 6in - 167cm ">5ft 6in - 167cm </option>
                      <option value="5ft 7in - 170cm ">5ft 7in - 170cm </option>
                      <option value="5ft 8in - 172cm ">5ft 8in - 172cm </option>
                      <option value="5ft 9in - 175cm ">5ft 9in - 175cm </option>
                      <option value="5ft 10in - 177cm">5ft 10in - 177cm </option>
                      <option value="5ft 11in - 180cm">5ft 11in - 180cm </option>
                      <option value="6ft - 182cm     ">6ft - 182cm      </option>
                      <option value="6ft 1in - 185cm ">6ft 1in - 185cm </option>
                      <option value="6ft 2in - 187cm ">6ft 2in - 187cm </option>
                      <option value="6ft 3in - 190cm ">6ft 3in - 190cm </option>
                      <option value="6ft 4in - 193cm ">6ft 4in - 193cm </option>
                      <option value="6ft 5in - 195cm ">6ft 5in - 195cm </option>
                      <option value="6ft 6in - 198cm ">6ft 6in - 198cm </option>
                      <option value="6ft 7in - 200cm ">6ft 7in - 200cm </option>
                      <option value="6ft 8in - 203cm ">6ft 8in - 203cm </option>
                      <option value="6ft 9in - 205cm">6ft 9in - 205cm </option>
                      <option value="6ft 10in - 208cm">6ft 10in - 208cm </option>
                      <option value="6ft 11in - 210cm">6ft 11in - 210cm </option>
                      <option value="7ft - 213cm     ">7ft - 213cm      </option>
                      <option value="Above 7ft - 213c">Above 7ft - 213cm </option>
                                </select>
                            </div>
                        </li>
                        <li style="overflow: visible !important;">
                            <div class="sf_columns column_2">
                              <label for="" style="padding-top:15px;" ><span>Complexion (Skin Color) </label>
                            </div>
                            <div class="sf_columns column_2">

                              <select  required="" data-placeholder="Choose Complexion (Skin Color) " class="chosen-select form-control" name="loking_skin_color[]" multiple tabindex="4">
                                
                                    <option value="Very Fair">Very Fair</option>
                                      <option value="Fair">Fair</option>
                                        <option value="Wheatish">Wheatish</option>
                                          <option value="Wheatish Brown">Wheatish Brown</option>
                                            <option value="Dark">Dark</option>
                              </select>
                            </div>
                        </li>
                         <li style="overflow: visible !important; margin-top: 70px;">
                            <div class="sf_columns column_2">
                              <label for="" style="padding-top:15px;" ><span>Physical Status</label>
                            </div>
                            <div class="sf_columns column_2">

                              <select  required="" data-placeholder="Physical Status" class="chosen-select form-control" name="loking_physical_status[]" multiple tabindex="4">
                                  <option value="Normal Person">Normal Person</option>
                      <option value="Deaf/Dumb">Deaf/Dumb</option>
                      <option value="Blind">Blind</option>
                      <option value="Physically Challenged">Physically Challenged</option>
                      <option value="Mentally Challenged">Mentally Challenged</option>
                      <option value="With other Disability">With other Disability</option>
                                </select>
                              </select>
                            </div>
                        </li>

                      

                         {{--  <li id="disabilty" style="display: none">
                            <div class="sf_columns column_2">
                              <label for="" style="padding-top:15px;" >Disablty</label>
                            </div>
                            <div class="sf_columns column_2">
                                <textarea name="disabilty"></textarea>
                            </div>
                         </li> --}}

                          <li>
                              <div class="sf_columns column_2">
                                <label for="" style="padding-top:15px;" >Eating Habits</label>
                              </div>
                              <div class="sf_columns column_2">
                                <select name="disease">
                                  <option value="None">Vegitarian</option>
                                  <option value="None">Do Not Matter</option>
                                </select>
                              </div>
                          </li>
                         <li style="overflow: visible !important;">
                            <div class="sf_columns column_2">
                              <label for="" style="padding-top:15px;" ><span>Residency Status</label>
                            </div>
                            <div class="sf_columns column_2">

                              <select  required="" data-placeholder="Choose Residency Status" class="chosen-select form-control" name="loking_residency[]" multiple tabindex="4">
                                  <option value="Citizen">Citizen</option>
                                 <option value="Parmanent resident">Parmanent resident</option>
                                 <option value="Student Visa">Student Visa</option>
                                 <option value="Work Permit">Work Permit</option>

                                  <option value="Temporary Visa">Temporary Visa</option>
                                 <option value="Others">Others</option>
                              </select>
                            </div>
                        </li>

                        <li>
                            <div class="sf_columns column_2">
                              <label for="" style="padding-top:15px;" >Ethnic Origin?</label>
                            </div>
                            <div class="sf_columns column_2">
                              <select placeholder="Choose Ethnic Origin?" selected="selected" class="form-control" name="ethnic_id">

                                  @if(!empty($ethnic_origin))
                                @foreach ($ethnic_origin as $row):
                                 

                                  <option value="{{$row->ethnic_id}}">{{$row->ethnic_type}}</option>
                                @endforeach
                                @endif
                              </select>
                            </div>
                        </li>

                        <li>
                            <div class="sf_columns column_2">
                              <label for="" style="padding-top:15px;" >Country</label>
                            </div>
                            <div class="sf_columns column_2">
                              <select id="country" onchange="country_change1(this)" name="loking_country" class="form-control" required="">
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

                        <li>
                            <div class="sf_columns column_2">
                              <label for="" style="padding-top:15px;" >Province *</label>
                            </div>
                            <div class="sf_columns column_2">
                            <select selected="selected" id="state1" onchange="state_change1(this)"  name="loking_state" class="form-control" required="">
                           </select>
                            </div>
                        </li>

                        <li>
                            <div class="sf_columns column_2">
                              <label for="" style="padding-top:15px;" >City *</label>
                            </div>
                            <div class="sf_columns column_2">
                              <select  name="loking_city" id="city1" selected="selected" class="form-control" required="">
                                </select>
                            </div>
                        </li>


                        <li style="overflow: visible !important;">
                            <div class="sf_columns column_2">
                              <label for="" style="padding-top:15px;" >Marital Status?</label>
                            </div>
                            <div class="sf_columns column_2">
                              <select st required="" data-placeholder="Choose Marital Status" class="chosen-select form-control" name="loking_marige_status[]" multiple tabindex="4">
        <!-- <select  data-placeholder="Choose Marital Status" class="form-control" name="marige_id"> -->
                                <option value="Does not matter">Does not matter</option>
                                 <option value="Unmarried">Unmarried</option>
                                 <option value="Widow/Widower">Widow/Widower</option>
                                 <option value="Divorcee">Divorcee</option>
                                 
                              </select>
                            </div>
                        </li>

                         <li>
                            <div class="sf_columns column_2">
                              <label for="" style="padding-top:15px;" >Has Children?</label>
                            </div>
                            <div class="sf_columns column_2">
                              <select  name="loking_has_child"  selected="selected" class="form-control" required="">
                               <option value="None">None</option>
                                       <option value="One">One</option>
                                       <option value="Two">Two</option>
                                       <option value="Three">Three</option>
                                       <option value="More">More</option>
                              </select>
                            </div>
                        </li>
                         <li>
                            <div class="sf_columns column_2">
                              <label for="" style="padding-top:15px;" >Like to have Children?</label>
                            </div>
                            <div class="sf_columns column_2">
                            <select class="form-control" name="loking_like_chiled">
                               <option value="Yes">Yes</option>
                               <option value="No">No</option>
                               
                             </select>
                            </div>
                        </li>

                        <li>
                            <div class="sf_columns column_2">
                              <label for="" style="padding-top:15px;" >Do you keep a Beard?</label>
                            </div>
                            <div class="sf_columns column_2">
                              <select class="form-control" name="loking_bread">
                                 <option value="Yes">Yes</option>
                                 <option value="No">No</option>
                                 
                               </select>
                            </div>
                        </li> 

                        <li style="overflow: visible !important;">
                            <div class="sf_columns column_2">
                              <label for="" style="padding-top:15px;" >language</label>
                            </div>
                            <div class="sf_columns column_2">
                              <select required="" data-placeholder="Choose language" class="chosen-select form-control" name="loking_language[]" multiple tabindex="4">
                                   @foreach ($language as $row)
                              <option value="{{ $row->language_id }}">
                                 {{ $row->language_type }}
                                   </option>
                                   @endforeach
                                 </select>
                            </div>
                        </li>


                         <li style="margin-top: 50px; overflow: visible !important;">
                            <div class="sf_columns column_2">
                              <label for="" style="padding-top:15px;" >Body Typ *</label>
                            </div>
                            <div class="sf_columns column_2">
                             <select st required="" data-placeholder="Choose Body Type" class="chosen-select form-control" name="loking_body_type[]" multiple tabindex="4" data-required="true">
            
      <option value="Slim">Slim</option>
           <option value="average">average</option>
           <option value="A few extra pounds">A few extra pounds</option>
           <option value="Athletic">Athletic</option>
           <option value="Muscular">Muscular</option>
           <option value="Heavyset">Heavyset</option>
      </select>
                            </div>
                        </li>

                         
<!-- ************************************************************************************************ -->
                          <li style="padding-top:35px;margin-bottom:0rem;">
                            <div class="sf_columns column_6">
                                <h3 style="font-weight:400;font-size:20px;"><span> <img src="{{ $user_assets }}/kabool_hai_icons/religion.png"></span> RELIGIOUS  Preferences</h3><hr>
                             </div> 
                        </li>

                         <li style="overflow: visible !important;">
                            <div class="sf_columns column_2">
                              <label for="" style="padding-top:15px;" >Read Quran *</label>
                            </div>
                            <div class="sf_columns column_2">
                              <select st required="" data-placeholder="Choose pray " class="chosen-select form-control" name="loking_read_quran[]" multiple tabindex="4" data-required="true">
                                
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
                        </li>

                        <li style="overflow: visible !important; margin-top: 50px;">
                            <div class="sf_columns column_2">
                              <label for="" style="padding-top:15px;" >Perform Namaz *</label>
                            </div>
                            <div class="sf_columns column_2">
                              <select st required="" data-placeholder="Choose pray " class="chosen-select form-control" name="loking_pray[]" multiple tabindex="4" data-required="true">
                                
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
                        </li>




                        <li style="margin-top: 50px;">
                            <div class="sf_columns column_2">
                              <label for="" style="padding-top:15px;" >Religious History?</label>
                            </div>
                            <div class="sf_columns column_2">
                              <select  name="loking_religious"  selected="selected" class="form-control" required="">
                                  <option value="Birth Muslim">Birth Muslim</option>
                                <option value="Rivert Muslim">Rivert Muslim</option>
                                
                              </select>
                            </div>
                        </li>

                        <li>
                            <div class="sf_columns column_2">
                              <label for="" style="padding-top:15px;" >Attend religious Service</label>
                            </div>
                            <div class="sf_columns column_2">
                              <select name="loking_attend">
                                  <option value="" >Please Select</option>
                                         <option value="Daily" >Daily</option>
                                        <option value="Only on Jummah / Fridays">Only on Jummah / Fridays</option>
                                        <option value="Sometimes">Sometimes</option>
                                        <option value="Only During Ramadan">Only During Ramadan</option>
                                        <option value="Never">Never</option>
                                </select>
                            </div>
                        </li>

                        <li>
                            <div class="sf_columns column_2">
                              <label for="" style="padding-top:15px;" >What Sect are you looking for?</label>
                            </div>
                            <div class="sf_columns column_2">
                              <select  name="sect_for"  selected="selected" class="form-control" required="">
                                <option value="Suni Muslim">Suni Muslim</option>
                                <option value="Shia Muslim">Shia Muslim</option>
                                <option value="Just Muslim">Just Muslim</option>
                              </select>
                            </div>
                        </li>

<!-- ************************************************************************************************  -->
                         <li style="padding-top:35px;margin-bottom:0rem;">
                            <div class="sf_columns column_6">
                                <h3 style="font-weight:400;font-size:20px;"><span> <img src="{{ $user_assets }}/kabool_hai_icons/education.png"></span> Education</h3><hr>
                             </div> 
                        </li>

                        <li>
                            <div class="sf_columns column_2">
                              <label for="" style="padding-top:15px;" >Education *</label>
                            </div>
                            <div class="sf_columns column_2">
                              <select name="loking_qualification" class="form-control" data-required="true">
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
                        </li>

                        <li>
                            <div class="sf_columns column_2">
                              <label for="" style="padding-top:15px;" >Institute *</label>
                            </div>
                            <div class="sf_columns column_2">
                              
                                  <input type="text" style="height: 4%" class="form-control" name="loking_institute" data-required="true">
                            </div>
                        </li>

                        <li>
                            <div class="sf_columns column_2">
                              <label for="" style="padding-top:15px;" >Year *</label>
                            </div>
                            <div class="sf_columns column_2">
                             
                                  <input type="text" style="height: 4%" class="form-control" name="loking_year" data-required="true">
                                </select>
                            </div>
                        </li> 
                        <li>
                            <div class="sf_columns column_2">
                              <label for="" style="padding-top:15px;" >Occupation *</label>
                            </div>
                            <div class="sf_columns column_2">
                              <select name="loking_job" class="form-control" data-required="true">
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
                        </li>
                         <li>
                            <div class="sf_columns column_6">
                                <label for="">Expectations (Enter the location,education,job,character etc.. of your expected partner)</label>

                                 <div class="sf_columns column_6">
                                 <textarea name="loking_description" id="user-message" class="form-control" cols="20" rows="10" placeholder="Enter your Message"></textarea>
                             </div>
                               
                            </div>
                            
                         </li>
                         {{ csrf_field() }}
                         <!-- <li>
                            <div class="sf_columns column_6">
                                <div class="sf-check">
                                    <label><input checked type="checkbox" value="true" name="accept"><span></span> Lorem Ipsum is simply dummy text of the printing and typesetting industry</label>
                                </div>
                            </div>
                         </li> -->
                    </ul>
                    <!-- end advance detail -->
              </div>
                   <div class="sf-steps-navigation sf-align-right">
                      <span id="sf-msg" class="sf-msg-error"></span>
                      <button id="sf-prev" type="button" class="sf-button">Previous</button>

                        <button id="sf-next" type="button" onclick="email()" class="sf-button">Next</button>
                    </div>
            </form>
         </div> 
      </div>
    </div>

    <div class="col-sm-3" style="padding-top:100px;">
      <div class="well" style="background-color:#ffffff;height:auto;">
        <div style="font-size:22px;padding-top:12px;padding-bottom:2px;">
          Recently Joined
        </div>
        <hr style="width:100%;">
        
        <div class="row">
           <div class="col-sm-5">
            <img src="{{ $user_assets }}/kabool_hai_icons/17904151_874361012711214_896699759998226174_n.jpg" style="height: 70px; width: 100px;">
           </div>
           <div class="col-sm-7">
             <div style="font-size:20px;">Name</div>
             <div>23 yrs</div>
             <div>From Lahore</div>
             <div>Inter</div> 
           </div>
        </div><br>

         <div class="row">
           <div class="col-sm-5">
            <img src="{{ $user_assets }}/kabool_hai_icons/17904151_874361012711214_896699759998226174_n.jpg" style="height: 70px; width: 100px;">
           </div>
           <div class="col-sm-7">
             <div style="font-size:20px;">Name</div>
             <div>23 yrs</div>
             <div>From Lahore</div>
             <div>Inter</div> 
           </div>
        </div><br>


        <div class="row">
           <div class="col-sm-5">
            <img src="{{ $user_assets }}/kabool_hai_icons/17904151_874361012711214_896699759998226174_n.jpg" style="height: 70px; width: 100px;">
           </div>
           <div class="col-sm-7">
             <div style="font-size:20px;">Name</div>
             <div>23 yrs</div>
             <div>From Lahore</div>
             <div>Inter</div> 
           </div>
        </div><br>

        

      </div>
    </div>
  </div>      
</div>
<script>
  $(document).ready(function(e) {     
    $(".stepsForm").stepsForm({
      width     :'100%',
      active      :0,
      errormsg    :'Check Required Fields.',
    });
    });
</script>



@endsection
<script type="text/javascript">
  function email()
  {
    // var password = $('#password').val();
    // var con_password = $('#con_password').val();
    // if(password != con_password)
    // {
    //   // $('#password').empty();
    //   $(this).addClass("sf-error");
    //   $(".password-error").html('Password donot match please try again');
     
    // }
    // else
    // {

    // alert(con_password);
    // }
  }
  function country_income(sel)
  {
    
    var country_income=sel.value;


    if(country_income !='No Income' & country_income !='Prefer not to say' & country_income !='')
    {
      
      $('#country_currency').show();
    }
    else
    {
     $('#country_currency').hide(); 
    }

  }
function checkchiled(select)
{
  var child_count=select.value;
  if(child_count !='None')
  {
    if(child_count !='1')
    {

    $('#children_living').show();
    $('#older_chiled').show();
     $('#younger_child').show();

    
   }
    else

    {

      $('#children_living').show();
      $('#older_chiled').show();
      $('#younger_child').hide();
     
    }
    
  }
  else
  {
   $('#children_living').hide();
   $('#older_chiled').hide(); 
   $('#younger_child').hide();
  }
}

function checkmamartial(select)
{
  var  checkmamartial=select.value;
      if(checkmamartial !='Unmarried')
      {
        $('#no_chiled').show();
      }
      else
      {
       $('#no_chiled').hide(); 
      }
  }
  function showdisabilty(sel)

{
 
  var physical_status= sel.value;
  if(physical_status !='Normal Person')
  {
    $('#disabilty').show();
  }
  else
  {
   $('#disabilty').hide(); 
  }
}
   // function checkemail()
   // {

   //  var email = $('#email').val();
   //  alert(email);
   //          $.post('{{ url('/get-email') }}' , {_token: '{{ csrf_token() }}' , email: email} , function(data)
   //              {
   //                  if(data=="true")
   //                  {
   //                    $(".form-group").addClass("has-error");
   //          // $(".field-error").html('');
   //           $(".email-error").html('This Email already exist!');
   //                  } 
   //                  else
   //                  {
   //                    alert();
   //                  }
   // }

 //  $('#regiser').submit(function(e)
 // {
 
                           //  e.preventDefault();
                           //  formData=$(this).serialize();
                           //  var code=formData;

                           // $.post('{{ url('/verify-code') }}' , code , function(data)
                           // {
                           //  if(data == 'false')

                           //  {
                           //    alert('code did,nt match');
                           //    $('.add-brand-modal').modal('show');
                           //  }
                           //  else
                           //  {
                           //    // alert('jkdjf');
                           //    window.location.href = '{{ url('profile') }}';
                           //  }
                           //                    // document.getElementById("wait").style.display = "none"
                           //                     // alert(data);
                                              
                           //                });

                            
                           //  });
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
               
                            document.getElementById("wait").style.display = "block";
                            $.post('{{ url('/get_city') }}' , {_token: '{{ csrf_token() }}' , state_id: state_id} , function(data)
                            {
                              // alert(data);
                              document.getElementById("wait").style.display = "none";
                          $('#city').html(data);
        });
                 
      }



      function country_change1(sel)
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
                            $('#state1').html(response.states);
                            $('#code').attr('value' , response.code);
                            $('#falgimg').attr('src' , "{{ $user_assets.'/flags/' }}"+response.flag);
                          // alert(response.code_flage);
        });
      }
      function state_change1(sel)
      {
        var state_id=sel.value;
               // alert(state_id);
                            document.getElementById("wait").style.display = "block";
                            $.post('{{ url('/get_city') }}' , {_token: '{{ csrf_token() }}' , state_id: state_id} , function(data)
                            {
                              // alert(data);
                              document.getElementById("wait").style.display = "none";
                          $('#city1').html(data);
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
  
  <script type="text/javascript" src="{{ $user_assets }}js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="{{ $user_assets }}/js/jquery1-2.1.1.min.js"></script>

<script type="text/javascript" src="{{ $user_assets }}/js/custom.js"></script>
<link rel="stylesheet" href="{{ $user_assets }}/css/custom.css" />
<link rel="stylesheet" href="{{ $user_assets }}/css/stepsForm.css" />
<link rel="stylesheet" href="{{ $user_assets }}/css/demo.css" />
<link rel="stylesheet" href="{{ asset('public') }}/css/chosen.css" />
  

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
<script type="text/javascript" src="{{ asset('public') }}/js/chosen.jq.js"></script>
<script type="text/javascript">
    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chosen-select-width'     : {width:"95%"}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
  </script>
@endpush