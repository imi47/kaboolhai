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
                            <div class="sf_columns column_3">
                                <label for="">Name of Bride/Groom</label>
                                <input type="text" name="user_name" id="lname" value="{{ $fname.' '.$lname}}" required="required" class="form-control" style="height:35px;">
                            </div>
                            <div class="sf_columns column_3">
                                {{-- <label for="">Email</label> --}}
                                <label class="control-label">Email *<span class="field-error email-error" style="color: red"></span>
                             </label>
                                <input type="email" onfocusout="checkemail()" class="form-control" style="height:35px;" name="email" id="email"  value="{{ $email }}" required="required" placeholder="Email@example.com">
                            </div>
                         </li>
                         <li>
                            <div class="sf_columns column_3">
                                <label for="">Password</label>
                                <input type="password" name="password" id="password" value="" required="required" class="form-control" style="height:35px;" placeholder="password">
                            </div>
                            <div class="sf_columns column_3">
                                <label for="">Confirm Password</label>
                                <input type="password" class="form-control" style="height:35px;" name="con_password" id="con_password"  value="" required="required" placeholder="Confirm password">
                            </div>
                         </li>

                         <li>
                            <div class="sf_columns column_3">
                                <label for="">Gender</label>

                               <select name="genger">
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
                            <div class="sf_columns column_3">
                                <label for="">Country</label>
                               <select id="country" onchange="country_change(this)" name="country_id" class="form-control" required="">
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
                            <div class="sf_columns column_3">
                                <label for="">Province *</label>
                                <select selected="selected" id="state" onchange="state_change(this)"  name="state_id" class="form-control" required="">

            </select>
                            </div>
                            <div class="sf_columns column_3">
                                <label for="">City *</label>
                                 <select  name="city_id" id="city" selected="selected" class="form-control" required="">
            
            </select>
                            </div>
                         </li>

                         <li>
                            <div class="sf_columns column_6">
                               <label class="control-label">Phone *<span class="field-error" style="color: red"></span></label>
            <div class="row">
              <div class="col-md-2" style="margin-left:15px; margin-top: 5px; padding-top:9px; border-style: ridge;" >
                <img style="margin-top: 4px; margin-bottom: 6px;" src="{{ $user_assets }}/flags/pk.png" width="20" id="falgimg">
              </div>
              <div class="col-md-2" style="margin-left:-55px; padding-top:6px; ">
                <input style="padding: 12px;" type="text" readonly="" name="code" id="code" value="+92" class="form-control">    
              </div>
              <div class="col-md-8" style="margin-left:-30px; padding-top:6px; ">
                <input style="padding: 12px;" maxlength="200" type="text" name="phone" id="phone" required="required" class="form-control" placeholder="3347272969">
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
                         <li style="margin-bottom:0rem;">
                            <div class="sf_columns column_3">
                              <h3 style="font-weight:400;font-size:20px;">About Me</h3>
                            </div> 
                         </li>
                         <li>
                            <div class="sf_columns column_2">
                                <label for="">Complexion (Skin Color)</label>
                                <select name="skin_color" class="form-control">
                                  <option value="Fair">Fair</option>
                                </select>
                            </div>
                            <div class="sf_columns column_2">
                                <label for="">Height</label>
                                <select name="height" class="form-control">
                                  <option value="4f -182cm">4f -182cm</option>
                                  <option value="5f -182cm">5f -182cm</option>
                                  <option value="6f -182cm">6f -182cm</option>
                                </select>
                            </div>
                            <div class="sf_columns column_2">
                            <label for="">Weight</label>                    
                              <select name="weight" class="form-control">
                                <option value="70 Kg">70 Kg</option>
                              </select>
                            </div>
                         </li>

                         <li>
                            <div class="sf_columns column_3">
                                <label for="">Physical Status</label>
                                <select name="physical_status">
                                  <option value="normal">Normal Person</option>
                                  <option value="strong">Strong</option>
                                </select>
                            </div>
                            <div class="sf_columns column_3">
                                <label for="">Hair Color</label>
                                <select name="hair_color">
                                  <option value="Black">Black</option>
                                  <option value="White">White</option>
                                </select>
                            </div>
                         </li>

                         <li>
                            <div class="sf_columns column_3">
                                <label for="">Body Type</label>
                                <select name="body_type">
                                  <option value="Slim">Slim</option>
                               <option value="average">average</option>
                               <option value="A few extra pounds">A few extra pounds</option>
                               <option value="Athletic">Athletic</option>
                               <option value="Muscular">Muscular</option>
                               <option value="Heavyset">Heavyset</option>
                          </select>
                            </div>
                            <div class="sf_columns column_3">
                                <label for="">Do you keep Beard</label>
                                <select class="form-control" selected="beard" name="beard">
         <option value="Yes">Yes</option>
         <option value="No">No</option>         
       </select>
                            </div>
                         </li>
                         <li>
                            <div class="sf_columns column_3">
                                <label for="">Availability status</label>

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
                            <div class="sf_columns column_3">
                                <label for="">Mother Tongue</label>
                                <select selected="selected" name="language">
                                @foreach ($language as $row)
                              <option value="{{ $row->language_id }}">
                                 {{ $row->language_type }}
                                   </option>
                                   @endforeach
                                 </select>
                            </div>
                         </li>
                         <li>
                            <div class="sf_columns column_2">
                                <label for="">DOB</label>
                                <select name="">
                                  <option value="">8</option>
                                </select>
                            </div>
                            <div class="sf_columns column_2">
                                <select name="" style="margin-top:24px;">
                                  <option value="">Oct</option>
                                </select>
                            </div>
                            <div class="sf_columns column_2">
                                <select name="" style="margin-top:24px;">
                                  <option value="">1990</option>
                                </select>
                            </div>
                         </li>
                          <li>
                            <div class="sf_columns column_2">
                                <label for="">Do you have Children?</label>
                                <select class="form-control" selected="selected" name="child_count">
               <option value="None">None</option>
               <option value="One">One</option>
               <option value="Two">Two</option>
               <option value="Three">Three</option>
               <option value="More">More</option>
               
      </select>
                            </div>

                            <div class="sf_columns column_2">
                                <label for="">Like to have Children?</label>
                                <select class="form-control" selected="selected" name="like_chiled">
                <option value="Yes">Yes</option>
       <option value="No">No</option> 
               
      </select>
                            </div>

                             <div class="sf_columns column_2">
                                <label for="">Your current Profession?</label>
                                <select class="form-control" selected="selected" name="profession">
          @foreach ($profession as $row)
             <option value="{{ $row->profession_id }}">
                {{ $row->profession_type }}
              </option>
          @endforeach
       </select>    
                            </div>
                          </li>

                          <li>
                            <div class="sf_columns column_3">
                                <label for="">Residency Status</label>
                                <select class="form-control" name="residency_status" selected="selected">
     
       <option value="Citizen">Citizen</option>
       <option value="Parmanent resident">Parmanent resident</option>
       <option value="Student Visa">Student Visa</option>
       <option value="Work Permit">Work Permit</option>

        <option value="Temporary Visa">Temporary Visa</option>
       <option value="Others">Others</option>
      
    </select>
                            </div>
                            <div class="sf_columns column_3">
                                <label for="">What is your Ethnic Origin?</label>
                                <select class="form-control" selected="selected" name="ethnic_type">
          @foreach ($ethnic_origin as $row)
           <option value="{{ $row->ethnic_id }}">
              {{ $row->ethnic_type }}
            </option>
           @endforeach
       </select>
                            </div>
                            
                         </li>
                         <li>
                          <div class="sf_columns column_3">
                           <label for="">Marital Status?</label>
     <select class="form-control" selected="selected" name="marige_type">
        
         <option value="Annulled">Annulled</option>
         <option value="Divorced">Divorced</option>
         <option value="Neverd married">Neverd married</option>
         <option value="Widowed">Widowed</option>
         <option value="Others">Others</option>
         
       </select>
     </div>
                        


                       
                            <div class="sf_columns column_3">
                              <label for="">Profile Created By</label>
                                 <select class="form-control" selected="selected" name="profile_created">
     
         <option value="Self">Self</option>
          <option value="parent">parent</option>
           <option value="brother/sister">brother/sister</option>
           <option value="Family/Relative">Family/Relative</option>
          <option value="Cousin">Cousin</option>
           <option value="Gardian">Gardian</option>
            <option value="Friend">Friend</option>
       
      </select> 
                            </div>
                            </li>
                            <li>
                              

                            <div class="sf_columns column_3">
                                <label for="">Disability</label>
                                
                   <input type="text" style="height:4%;" name="disability" placeholder="Disability"> 
                            </div>

                             <div class="sf_columns column_3">
                              <label for="">Age</label>
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
                          </li>
                          <li style="overflow: visible !important;">
                            <div class="sf_columns column_6">
                             <label>Assets</label>
                             <select required="" data-placeholder="Choose assets Type" class="chosen-select form-control" name="assets[]" multiple tabindex="4">
                                  <option value="Home">Home</option>
                                    <option value="Plot">Plot</option>
                                    <option value="Vehicle">Vehicle</option>
                                    <option value="Nothing">Nothing</option>
                              </select>
                            </div>
                          </li>
                          <li>
                         <li style="margin-bottom:0rem;">
                            <div class="sf_columns column_3">
                              <h3 style="font-weight:400;font-size:20px;">Religious Interest</h3>
                            </div> 
                         </li>

                         <li>
                            <div class="sf_columns column_3">
                                <label for="">Are you or your parents reverted to Islam?</label>
                                 <select class="form-control" name="religious_type" selected="selected">
         <option value="Birth Muslim">Birth Muslim</option>
         <option value="Revirt Muslim">Revirt Muslim</option>
       </select>
                            </div>
                            <div class="sf_columns column_3">
                                <label for="">Allegiance to Islamic Organ</label>
                               <select class="form-control" selected="selected" name="sect_are">
         <option value="Sunni Muslim">Sunni Muslim</option>
         <option value="shia Muslim">shia Muslim</option>
         <option value="just a Muslim">just a Muslim</option>
       </select>
                            </div>
                         </li>

                          <li>
                            {{-- <div class="sf_columns column_3">
                                <label for="">Religiousness</label>
                                <select name="">
                                  <option value="">Religious</option>
                                </select>
                            </div> --}}
                            <div class="sf_columns column_3">
                                <label for="">Perform Namaz</label>
                                <select class="form-control" selected="selected" name="pray">
     
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
                            <div class="sf_columns column_3">
                                <label for="">Read Quran</label>
                                <select name="read_quran">
                                  <option value="Daily">Daily</option>
                                   <option value="after week">after week</option>
                                    <option value="after month">after month</option>
                                     <option value="after year">after year</option>
                                     <option value="never">never</option>
                                </select>
                            </div>
                          </li>
                          <li>
                            <div class="sf_columns column_3">
                                <label for="">Attend religious Service</label>
                                <select name="attend_religious_service">
                                  <option value="Only on Jumma/Friday">Only on Jumma/Friday</option>
                                </select>
                            </div>
                       
                            <div class="sf_columns column_3">
                                <label for="">Polygamy</label>
                                <select name="polygamy">
                                  <option value="Yes">Yes</option>
                                  <option value="No">No</option>
                                </select>
                            </div>
                            <!-- <div class="sf_columns column_3">
                                <label for="">Attend religious Service</label>
                                <select name="">
                                  <option value="">Only on Jumma/Friday</option>
                                </select>
                            </div> -->
                         </li>

                         <li style="margin-bottom:0rem;">
                            <div class="sf_columns column_3">
                              <h3 style="font-weight:400;font-size:20px;">Education And Occupation</h3>
                            </div> 
                         </li>
                         
                         <li>
                            <div class="sf_columns column_2">
                                <label for="">Education</label>
                                <select name="qualification">
                                  <option value="inter">inter</option>
                                  <option value="bsc">Bsc</option>
                                  <option value="ms(engg)">MS (Engg)</option>
                                </select>
                            </div>
                            <div class="sf_columns column_2">
                                <label for="">Institute</label>
                                <select name="institute">
                                  <option value="Pu">PU</option>
                                  <option value="uet">UET</option>
                                  <option value="education">education</option>
                                  <option value="fast">Fast</option>
                                  <option value="other">Other</option>
                                </select>
                              </div>
                                <div class="sf_columns column_2">
                                <label for="">Year</label>
                                <select name="year">
                                  <option value="2018">2018</option>
                                  <option value="2017">2017</option>
                                  <option value="2016">2016</option>
                                  <option value="other">Other</option>
                                </select>
                            </div>
                         </li> 
                          
                         <li>
                            <div class="sf_columns column_3">
                                <label for="">Occupation</label>
                                <select name="job">
                                  <option value="Yes">Yes</option>
                                  <option value="No">No</option>
                                </select>
                            </div>
                            <div class="sf_columns column_3">
                                <label for="job_address">Job Address</label>
                                <input type="text" style="height: 4%" name="job_address" class="form-control">
                            </div>
                         </li>

                         <li>
                            <div class="sf_columns column_2">
                                <label for="">Job contact</label>
                                <input type="text" style="height: 4%" name="job_contact" class="form-control" placeholder="enter job contact">
                            </div>
                            <div class="sf_columns column_2">
                                <label for="">Annual Income</label>
                                <input type="text" style="height: 4%" name="a_income" class="form-control" placeholder="enter Annual Income">
                                 
                            </div>
                            
                            <div class="sf_columns column_2"> 
                            <label for="">Monthly income</label>                   
                               <input type="text" style="height: 4%" name="m_income" class="form-control" placeholder="Enter Monthly Income">
                            </div>
                         </li>

                         <li style="margin-bottom:0rem;">
                            <div class="sf_columns column_3">
                              <h3 style="font-weight:400;font-size:20px;">Contact Details</h3>
                            </div> 
                         </li>

                         <li>
                            <div class="sf_columns column_6">
                                <label for="">Full Address</label>
                                <textarea name="contact_address" style="height:50px;"></textarea>
                            </div>
                         </li>

                         <li>
                            <div class="sf_columns column_3">
                                <label for="">Present Country</label>
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
                           
                           {{--  <div class="sf_columns column_3">
                                <label for="">Native Country</label>
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
                          </li> --}}
                            {{-- <div class="sf_columns column_3">
                                <label for="">Native State</label>
                                 <select selected="selected" id="state" onchange="state_change(this)"  name="state" class="form-control" required="">

            </select>
                            </div>
                         </li>

                         <li>
                            
                            <div class="sf_columns column_3">
                                <label for="">Native City</label>
                                 <select  name="city" id="city" selected="selected" class="form-control" required="">
            
            </select>
                            </div>
                         </li> --}}

                        {{--  <li>
                            <div class="sf_columns column_1.5">
                                <label for="">Mobile Number</label>
                                <select name="" class="form-control" style="width:191px">
                                  <option value="">Pakistan (92)</option>
                                </select>
                            </div>
                            <div class="sf_columns column_1.5" style="padding-top:24px;width:191px;">
                               <input type="text" value="3310438768" class="form-control">                 
                            </div> --}}
                            <div class="sf_columns column_3">
                                <label for="">Convenient time to Call</label>
                                <select name="convenient_time">
                                  <option value="7 AM">7 AM</option>
                                  <option value="12 AM">12 AM</option>
                                  <option value="Anytime">Anytime</option>
                                </select>
                            </div>
                         </li>

                         <li>
                            <div class="sf_columns column_6">
                                <label for="">Contact Person & Relationship</label>
                                <select name="contact_person">
                                   <option value="Self">Self</option>
          <option value="parent">parent</option>
           <option value="brother/sister">brother/sister</option>
           <option value="Family/Relative">Family/Relative</option>
          <option value="Cousin">Cousin</option>
           <option value="Gardian">Gardian</option>
            <option value="Friend">Friend</option>
                                </select>
                            </div>
                            <!-- <div class="sf_columns column_3">
                                <label for="">Native City</label>
                                <select name="">
                                  <option value="">Punjab</option>
                                </select>
                            </div> -->
                         </li>

                        <li style="margin-bottom:0rem;">
                            <div class="sf_columns column_3">
                              <h3 style="font-weight:400;font-size:20px;">Family Details</h3>
                            </div> 
                         </li>

                         <li>
                            <div class="sf_columns column_3">
                                <label for="">Family Type</label>
                                <select name="family_type">
                                  <option value="Nuclear Family">Nuclear Family</option>
                                </select>
                            </div>
                            <div class="sf_columns column_3">
                                <label for="finacial_status">Finacial Status</label>
                                <select name="finacial_status">
                                  <option value="Upper Middle Class">Upper Middle Class</option>
                                </select>
                            </div>
                         </li>

                         <li>
                            <div class="sf_columns column_3">
                                <label for="">Father's Detail</label>
                                <select name="father_detail">
                                  <option value="Alive">Alive</option>
                                  <option value="Died">Died</option>
                                </select>
                            </div>
                            <div class="sf_columns column_3">
                                <label for="">Father Occupation</label>
                                <select name="father_job">
                                  <option value="Supervisor">Supervisor</option>
                                </select>
                            </div>
                         </li>

                         <li>
                            <div class="sf_columns column_3">
                                <label for="">Mother's Detail</label>
                                <select name="mother_detail">
                                  <option value="Alive">Alive</option>
                                  <option value="Died">Died</option>
                                </select>
                            </div>
                            <div class="sf_columns column_3">
                                <label for="">Mother Occupation</label>
                                <select name="mother_job">
                                  <option value="Supervisor">Supervisor</option>
                                </select>
                            </div>
                         </li>

                         <li>
                            <div class="sf_columns column_3">
                                <label for="">Family Cast</label>
                                <select name="family_cast">
                                  <option value="Jutt">Jutt</option>
                                  <option value="Butt">Butt</option>
                                </select>
                            </div>
                            <!-- <div class="sf_columns column_3">
                                <label for="">Mother Occupation</label>
                                <select name="">
                                  <option value="">Supervisor</option>
                                </select>
                            </div> -->
                         </li>

                         <li style="margin-bottom:0rem;">
                            <div class="sf_columns column_3">
                              <h3 style="font-weight:400;font-size:20px;">Brothers Details</h3>
                            </div> 
                         </li>

                         <li>
                            <div class="sf_columns column_2">
                                <label for="">Brothers Status</label>
                                <select name="brother_status" class="form-control">
                                  <option value="No Married Brother">No Married Brother</option>
                                </select>
                            </div>
                            <div class="sf_columns column_2">
                                <label for="">Elder</label>
                                <select name="brother_elder" class="form-control" style="width:191px">
                                  <option value="0">0</option>
                                </select>
                            </div>
                            <div class="sf_columns column_2" style="width:191px;">
                            <label for="">Younger</label>                    
                              <select name="brother_younger" class="form-control">
                                <option value="0">0</option>
                              </select>
                            </div>
                         </li>

                         <li style="margin-bottom:0rem;">
                            <div class="sf_columns column_3">
                              <h3 style="font-weight:400;font-size:20px;">Sister's Details</h3>
                            </div> 
                         </li>

                         <li>
                            <div class="sf_columns column_2">
                                <label for="">Sister's Status</label>
                                <select name="sister_status" class="form-control">
                                  <option value="Two MArried Sisters">Two MArried Sisters</option>
                                </select>
                            </div>
                            <div class="sf_columns column_2">
                                <label for="">Elder</label>
                                <select name="sister_elder" class="form-control" style="width:191px">
                                  <option value="0">0</option>
                                </select>
                            </div>
                            <div class="sf_columns column_2" style="width:191px;">
                            <label for="">Younger</label>                    
                              <select name="sister_younger" class="form-control">
                                <option value="0">0</option>
                              </select>
                            </div>
                         </li>

                         
                         <li style="margin-bottom:0rem;">
                            <div class="sf_columns column_6">
                              <h3 style="font-weight:400;font-size:20px;">Family Information</h3>
                            </div> 
                         </li>

                         <li>
                            <div class="sf_columns column_6">
                                <label for="">Write about your personality,family background,education,profession and hobbies</label>
                                <textarea name="description" style="height:100px;"></textarea>
                            </div>
                         </li>

                         <li style="margin-bottom:0rem;">
                            <div class="sf_columns column_3">
                              <h3 style="font-weight:400;font-size:20px;">Medical Details</h3>
                            </div> 
                         </li>

                         <li>
                            <div class="sf_columns column_3">
                                <label for="">Blood Group</label>
                                <select name="bloog_group">
                                  <option value="AB+">AB+</option>
                                  <option value="B+">B+</option>
                                </select>
                            </div>
                            <div class="sf_columns column_3">
                                <label for="">Suffering Any Disease</label>
                                <select name="disease">
                                  <option value="None">None</option>
                                  <option value="Cancer">Cancer</option>
                                </select>
                            </div>
                         </li>

                    </ul>
                    <!-- end basic detail -->

                    <!-- Advance detail -->
                    <ul class="sf-content" style="display: block !important;"> 
                         <li style="margin-bottom:0rem;">
                            <div class="sf_columns column_3">
                              <h3 style="font-weight:400;font-size:20px;">Partner Preferences</h3>
                            </div> 
                         </li>

                         <li style="margin-bottom:0rem;">
                            <div class="sf_columns column_6">
                              <div class="well well-sm" style="height:40px;box-shadow:none;">
                                <h3 style="font-weight:lighter;font-size:20px;">Basic Preferences</h3>
                              </div>
                            </div> 
                         </li>
                          <li style="overflow: visible !important;">
                            <div class="sf_columns column_3">
                             <label>language</label>
                             <select required="" data-placeholder="Choose language" class="chosen-select form-control" name="loking_language[]" multiple tabindex="4">
                                   @foreach ($language as $row)
                              <option value="{{ $row->language_id }}">
                                 {{ $row->language_type }}
                                   </option>
                                   @endforeach
                                 </select>
                              </select>
                            </div>

                            <div class="sf_columns column_3">
                             <label>Body Type</label>
                             <select st required="" data-placeholder="Choose Body Type" class="chosen-select form-control" name="loking_body_type[]" multiple tabindex="4">
            
      <option value="Slim">Slim</option>
           <option value="average">average</option>
           <option value="A few extra pounds">A few extra pounds</option>
           <option value="Athletic">Athletic</option>
           <option value="Muscular">Muscular</option>
           <option value="Heavyset">Heavyset</option>
      </select>
                            </div>
                          </li>
                         <li style="margin-top: 100px;">
                            <div class="sf_columns column_2">
                                <label for="">Age Preferences</label>
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
                                <h3 class="text-center" style="margin-top: 28px;font-size: 18px;text-transform: capitalize;">To</h3>
                            </div>
                            <div class="sf_columns column_2">
                                <select name="loking_age_to" style="margin-top:24px;">
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
                                <label for="">Height Preferences</label>
                                <select name="loking_height_from">
                                  <option value="20">20</option>
                                </select>
                            </div>
                            <div class="sf_columns column_2">
                                <h3 class="text-center" style="margin-top: 28px;font-size: 18px;text-transform: capitalize;">To</h3>
                            </div>
                            <div class="sf_columns column_2">
                                <select name="loking_height_to" style="margin-top:24px;">
                                  <option value="23">23</option>
                                </select>
                            </div>
                         </li>

                          <li style="overflow: visible !important;">
                            <div class="sf_columns column_3">
                                <label for="">Residency Status</label>
                               <select st required="" data-placeholder="Choose Residency Status" class="chosen-select form-control" name="loking_residency[]" multiple tabindex="4">
   <!-- <select data-placeholder="Choose Residency Status" class="form-control" name="residency_id"> -->
       
       
      
       
        <option value="Citizen">Citizen</option>
       <option value="Parmanent resident">Parmanent resident</option>
       <option value="Student Visa">Student Visa</option>
       <option value="Work Permit">Work Permit</option>

        <option value="Temporary Visa">Temporary Visa</option>
       <option value="Others">Others</option>
    </select>
 
                            </div>
                            <div class="sf_columns column_3">
                                <label for="">Ethnic Origin?</label>
                                <select placeholder="Choose Ethnic Origin?" selected="selected" class="form-control" name="ethnic_id">

        @if(!empty($ethnic_origin))
      @foreach ($ethnic_origin as $row):
       

        <option value="{{$row->ethnic_id}}">{{$row->ethnic_type}}</option>
      @endforeach
      @endif
      </select>
                            </div>
                         </li>

                         <li style="margin-top: 100px;">
                           <div class="sf_columns column_2">
                                <label for="">Country</label>
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
                        

                       
                            <div class="sf_columns column_2">
                                <label for="">Province *</label>
                                <select selected="selected" id="state1" onchange="state_change1(this)"  name="loking_state" class="form-control" required="">

            </select>
                            </div>
                            <div class="sf_columns column_2">
                                <label for="">City *</label>
                                 <select  name="loking_city" id="city1" selected="selected" class="form-control" required="">
            
            </select>
                            </div>
                        
                         </li>

                         <li>
                            <div class="sf_columns column_3">
                               <label for="">Has Children?</label>
                                <select  name="loking_has_child"  selected="selected" class="form-control" required="">
       <option value="None">None</option>
               <option value="One">One</option>
               <option value="Two">Two</option>
               <option value="Three">Three</option>
               <option value="More">More</option>
      </select>
 
                            </div>
                            <div class="sf_columns column_3">
                               <label>Like to have Children?</label>
    
     
       <select class="form-control" name="loking_like_chiled">
         <option value="Yes">Yes</option>
         <option value="No">No</option>
         
       </select>
                         </li>
                          <li style="overflow: visible !important;">
                            <div class="sf_columns column_3">
                               <label>Marital Status?</label>
     
      <select st required="" data-placeholder="Choose Marital Status" class="chosen-select form-control" name="loking_marige_status[]" multiple tabindex="4">
        <!-- <select  data-placeholder="Choose Marital Status" class="form-control" name="marige_id"> -->
        <option value="Annulled">Annulled</option>
         <option value="Divorced">Divorced</option>
         <option value="Neverd married">Neverd married</option>
         <option value="Widowed">Widowed</option>
         <option value="Others">Others</option>
      </select>
 
                            </div>

      <div class="sf_columns column_3">
       <label>Do you keep a Beard?</label>
   
     
       <select class="form-control" name="loking_bread">
         <option value="Yes">Yes</option>
         <option value="No">No</option>
         
       </select>
     </div>
                          </li>

                         <li style="margin-top:10rem;">
                            <div class="sf_columns column_6">
                              <div class="well well-sm" style="height:40px;box-shadow:none;">
                                <h3 style="font-weight:lighter;font-size:20px;">RELIGIOUS  Preferences</h3>
                              </div>
                            </div> 
                         </li>

                        <li style="overflow: visible !important;">
                            <div class="sf_columns column_3">
                                <label for="">Read Quran</label>
                                <select st required="" data-placeholder="Choose pray " class="chosen-select form-control" name="loking_read_quran[]" multiple tabindex="4">
        <!-- <select data-placeholder="Choose pray" class="form-control" name="pray_id"> -->
            
        <option value="Always Pray">Always Read</option>
           <option value="sometime pray">sometime Read</option>
            <option value="Intend to start praying">Intend to start Reading</option>
           {{-- <option value="Sometimes miss Fajr and make Qadah Salah">Sometimes miss Fajr and make Qadah Salah</option> --}}
           <option value="Only pray before exams">Only Read before exams</option>
           <option value="Don't pray">Don't Read</option>
            {{-- <option value="Eid Salah only">Eid Salah only</option> --}}
            <option value="Rarely miss a prayer and make Qadah Sala">Rarely miss a Read</option>
      </select>
                            </div>
                            <div class="sf_columns column_3">
                                <label for="">Perform Namaz</label>
                                <select st required="" data-placeholder="Choose pray " class="chosen-select form-control" name="loking_pray[]" multiple tabindex="4">
        <!-- <select data-placeholder="Choose pray" class="form-control" name="pray_id"> -->
            
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

                         <li style="margin-top: 100px;">
                            <div class="sf_columns column_3">
                                <label for="">Religious History?</label>
                                <select  name="loking_religious"  selected="selected" class="form-control" required="">
        <option value="Birth Muslim">Birth Muslim</option>
        <option value="Rivert Muslim">Rivert Muslim</option>
        
      </select>
                            </div>
                            <div class="sf_columns column_3">
                                <label for="">Attend religious Service</label>
                                <select name="loking_attend">
                                  <option value="Only on Jumma/Friday">Only on Jumma/Friday</option>
                                </select>
                            </div>
                         </li>

                          <li>
                            <div class="sf_columns column_3">
                                <label for="">What Sect are you looking for?</label>
                                <select  name="sect_for"  selected="selected" class="form-control" required="">
        <option value="Suni Muslim">Suni Muslim</option>
        <option value="Shia Muslim">Shia Muslim</option>
        <option value="Just Muslim">Just Muslim</option>
      </select>
    
                            </div>
                            <!-- <div class="sf_columns column_3">
                                <label for="">Attend religious Service</label>
                                <select name="">
                                  <option value="">Only on Jumma/Friday</option>
                                </select>
                            </div> -->
                         </li>

                         <li style="margin-bottom:0rem;">
                            <div class="sf_columns column_6">
                              <div class="well well-sm" style="height:40px;box-shadow:none;">
                                <h3 style="font-weight:bold;font-size:20px;">Education</h3>
                              </div>
                            </div> 
                         </li>
                         
                         <li>
                            <div class="sf_columns column_2">
                                <label for="">Education</label>
                                <select name="loking_qualification">
                                  <option value="inter">inter</option>
                                  <option value="bsc">Bsc</option>
                                  <option value="ms(engg)">MS (Engg)</option>
                                </select>
                            </div>
                            <div class="sf_columns column_2">
                                <label for="">Institute</label>
                                <select name="loking_institute">
                                  <option value="Pu">PU</option>
                                  <option value="uet">UET</option>
                                  <option value="education">education</option>
                                  <option value="fast">Fast</option>
                                  <option value="other">Other</option>
                                </select>
                              </div>
                                <div class="sf_columns column_2">
                                <label for="">Year</label>
                                <select name="loking_year">
                                  <option value="2018">2018</option>
                                  <option value="2017">2017</option>
                                  <option value="2016">2016</option>
                                  <option value="other">Other</option>
                                </select>
                            </div>
                         </li> 
                          
                         {{-- <li>
                            <div class="sf_columns column_3">
                                <label for="">Occupation</label>
                                <select name="">
                                  <option value="">Computer Programmer</option>
                                </select>
                            </div>
                            <div class="sf_columns column_3">
                                <label for="">Job Details</label>
                                <select name="">
                                  <option value="">Software Engineer</option>
                                </select>
                            </div>
                         </li>

                         <li>
                            <div class="sf_columns column_3">
                                <label for="">Employed In</label>
                                <select name="" class="form-control">
                                  <option value="">Full time</option>
                                </select>
                            </div>
                            <div class="sf_columns column_1.5">
                                <label for="">Annual Income</label>
                                <select name="" class="form-control" style="width:191px">
                                  <option value="">5Lakh -6Lakh</option>
                                </select>
                            </div>
                            <div class="sf_columns column_1.5" style="padding-top:24px;width:191px;">                    
                              <select name="" class="form-control">
                                <option value="">Pakistan-PKR</option>
                              </select>
                            </div>
                         </li> --}}

                         <li>
                            <div class="sf_columns column_6">
                                <label for="">Expectations (Enter the location,education,job,character etc.. of your expected partner)</label>
                                <textarea name="loking_description" style="height:100px;"></textarea>
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

                        <button id="sf-next" type="button" class="sf-button">Next</button>
                    </div>
            </form>
         </div> 
      </div>
    </div>

    <div class="col-sm-3" style="padding-top:100px;">
      <div class="well" style="background-color:#ffffff;">
        Coming Soon
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
               // alert(state_id);
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