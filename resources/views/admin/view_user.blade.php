
@extends('admin/master_layout')
 @section('data')
    <!-- END HEAD -->

    <!-- BEGIN BODY -->

   
       
     
    



<!--  SIDEBAR - END -->
    <!-- START CONTENT -->
<section id="main-content" class=" ">
    <section class="wrapper main-wrapper row" style=''>

    <div class='col-xs-12'>
        <div class="page-title">

            <div class="pull-left">
                <!-- PAGE HEADING TAG - START --><h1 class="title">User Profile</h1><!-- PAGE HEADING TAG - END -->                            </div>

                            <div class="pull-right hidden-xs">
                    <ol class="breadcrumb">
                        <li>
                            <a href="#"><i class="fa fa-home"></i>Home</a>
                        </li>
                        <li>
                            <a href="#">View All User</a>
                        </li>
                        
                    </ol>
                </div>
                                
        </div>
    </div>
    <div class="clearfix"></div>
    <!-- MAIN CONTENT AREA STARTS -->
    

<div class="col-lg-12">
    <section class="box nobox ">
                <div class="content-body">
                    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="uprofile-image" style="margin-top: 20px;">
                <img src="{{ $user_assets }}/img/2.jpg"" class="img-responsive">
            </div>
            <div class="uprofile-name">
        </div>
                    <!-- Available statuses: online, idle, busy, away and offline -->
                    <span class="uprofile-status online"></span>
                </h3>
               {{--  <p class="uprofile-title">Administration</p> --}}
            </div>
                                    <div class="uprofile-info">
                <ul class="list-unstyled" style="margin-left: -5px;">
                   <h4> {{ $view_user->firstname }}</h4>
                    <li><i class='fa fa-home'></i> {{ $view_user->city_name }},{{ $view_user->state_name }},{{ $view_user->country_name }}</li>
                    <li><i class='fa fa-user'></i>{{ $view_user->phone }}</li>
                    <li><i class='fa fa-envelope-o'></i>{{ $view_user->email }}</li>
                    <li><i class=''></i>Gender: {{ $view_user->gender }}</li>
                    
                </ul>
            </div>
                                  
        </div>
        <div class="col-md-12 col-sm-8 col-xs-12">

            <div class="uprofile-content">

<div class="">

                            <h4>Basic Information:</h4>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                            <h5><b>User Name</b></h5>
                            <p>{{ $view_user->user_name }} </p>
                            </div>
                            
                           
                                <div class="col-md-3">
                            <h5><b>Bread</b></h5>
                            <p>{{ $view_user->bread }} </p>
                            </div>
                            <div class="col-md-3">
                            <h5><b>Physical Status</b></h5>
                            <p>{{ $view_user->physical_status }} </p>
                            </div>
                            
                           
                                <div class="col-md-3">
                            <h5><b>Language</b></h5>
                            <p>{{ $view_user->language }} </p>
                            </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                            <h5><b>Date of Birth</b></h5>
                            <p>{{ $view_user->day.'-'.$view_user->month.'-'.$view_user->year}} </p>
                            </div>
                            
                           
                                <div class="col-md-3">
                            <h5><b>Complexion (Skin Color)</b></h5>
                            <p>{{ $view_user->skin_color }} </p>
                            </div>
                            <div class="col-md-3">
                            <h5><b>Profile Created by</b></h5>
                            <p>{{ $view_user->profile_created }} </p>
                            </div>
                            
                           
                                <div class="col-md-3">
                            <h5><b>Marital Status</b></h5>
                            <p>{{ $view_user->martial_status }} </p>
                            </div>
                            </div>


                             {{-- <div class="row">
                                <div class="col-md-3">
                            <h5><b>Height</b></h5>
                            <p>{{ $view_user->dob }} </p>
                            </div> --}}
                            
                           
                                <div class="col-md-3">
                            <h5><b>Weight</b></h5>
                            <p>{{ $view_user->height }} </p>
                            </div>
                            {{-- <div class="col-md-3">
                            <h5><b>Hobbies/Interest</b></h5>
                            <p>{{ $view_user->hobbies }} </p>
                            </div> --}}
                            
                           
                                <div class="col-md-3">
                            <h5><b>Cast/Clan</b></h5>
                            <p>{{ $view_user->cast.' '.$view_user->clan }} </p>
                            </div>
                            <div class="col-md-3">
                            <h5><b>Gardian Name/Number</b></h5>
                            <p>{{ $view_user->gardian_name.' '.$view_user->gardian_number }} </p>
                            </div>
                            </div>

                              <hr>
                              <h4>Hobbies/Interest</h4>
                            <hr>
                             <div class="row">
                            @foreach($hobbies as $row)

                                <div class="col-md-3">
                            {{-- <h5><b>Africa</b></h5> --}}
                            <p>{{ $row->loking_value }} </p>
                            </div>
                            @endforeach
                        </div>
                            <div class="clearfix"></div>
                            <hr>
                            <h4>Religious Interest:</h4>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                            <h5><b>Are you or your parents reverted to Islam?</b></h5>
                            <p>{{ $view_user->religious_type }} </p>
                            </div>
                            
                           
                                <div class="col-md-3">
                            <h5><b>Allegiance to Islamic Orgn</b></h5>
                            <p>{{ $view_user->sect_are }} </p>
                            </div>
                            <div class="col-md-3">
                            <h5><b>Religiousness</b></h5>
                            <p>{{ $view_user->religiousness }} </p>
                            </div>
                            
                           
                                <div class="col-md-3">
                            <h5><b>Perform Namaaz</b></h5>
                            <p>{{ $view_user->pray }} </p>
                            </div>
                            </div>



                            <div class="row">
                                <div class="col-md-3">
                            <h5><b>Read Qur'an</b></h5>
                            <p>{{ $view_user->read_quran }} </p>
                            </div>
                            
                           
                                <div class="col-md-3">
                            <h5><b>Attend religious services</b></h5>
                            <p>{{ $view_user->attend_religious_service }} </p>
                            </div>
                            <div class="col-md-3">
                            <h5><b>Polygamy</b></h5>
                            <p>{{ $view_user->polygamy }} </p>
                            </div>
                            
                           
                                <div class="col-md-3">
                            <h5><b>What is your Ethnic Origin</b></h5>
                            <p>{{ $view_user->ethnic_type }} </p>
                            </div>
                            </div>
                            <div class="clearfix"></div>
                            <hr>
                            <h4>Education and Occupation:</h4>
                            <hr>
                            
                            <div class="row">
                                <div class="col-md-3">
                            <h5><b>Education</b></h5>
                            <p>{{ $view_user->qualification }} </p>
                            </div>
                            
                           
                            <div class="col-md-3">
                            <h5><b>Education Details</b></h5>
                            <p>{{ $view_user->edu_detail }} </p>
                            </div>
                            <div class="col-md-3">
                            <h5><b>Occupation</b></h5>
                            <p>{{ $view_user->job }} </p>
                            </div>
                            <div class="col-md-3">
                            <h5><b>Occupation Details</b></h5>
                            <p>{{ $view_user->occupation_detail }} </p>
                            </div>
                                
                        </div>
                             <div class="row">
                            <div class="col-md-6">
                            <h5><b>Annual income</b></h5>
                            <p>{{ $view_user->a_income }} </p>
                            </div>
                            
                           
                                <div class="col-md-6">
                            <h5><b>Employed in</b></h5>
                            <p>{{ $view_user->employed_in }} </p>
                            </div>
                            </div>

                            <div class="clearfix"></div>
                            <hr>
                            <h4>Contact Details</h4>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                            <h5><b>Full Address</b></h5>
                            <p>{{ $view_user->full_address }} </p>
                            </div>
                            
                           
                            <div class="col-md-3">
                            <h5><b>Present Country</b></h5>
                            @if(isset($present))
                            <p>{{ $present->country_name }} </p>
                            @endif
                            </div>
                            <div class="col-md-3">
                            <h5><b>Present City</b></h5>
                            @if(isset($view_user->present_city))
                            <p>{{ $view_user->present_city }} </p>
                            @endif
                            </div>
                            
                                <div class="col-md-3">
                            <h5><b>Native Country</b></h5>
                            @if(isset($native))
                            <p>{{ $native->country_name }} </p>
                            @endif
                            </div>
                        </div>

                        <div class="row">
                                <div class="col-md-3">
                            <h5><b>Native State</b></h5>
                            @if(isset($native_state))
                            <p>{{ $native_state->state_name }} </p>
                            @endif
                            </div>
                           
                            <div class="col-md-3">
                            <h5><b>Native City</b></h5>
                            @if(isset($native_city))
                            <p>{{ $native_city->city_name }} </p>
                            @endif
                            </div>
                            <div class="col-md-3">
                            <h5><b>Convenient time to call</b></h5>
                            <p>{{ $view_user->convenient_time }} </p>
                            </div>
                                <div class="col-md-3">
                            <h5><b>Contact person & Relationship</b></h5>
                            <p>{{ $view_user->contact_person }} </p>
                            </div>
                        </div>










                        <hr>
                            <h4>General Attributes</h4>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                            <h5><b>Blood Group</b></h5>
                            <p>{{ $view_user->blood_group }} </p>
                            </div>
                            
                           
                            <div class="col-md-3">
                            <h5><b>Body type</b></h5>
                            <p>{{ $view_user->body_type }} </p>
                            </div>
                            <div class="col-md-3">
                            <h5><b>Diet</b></h5>
                            <p>{{ $view_user->diet }} </p>
                            </div>
                                <div class="col-md-3">
                            <h5><b>Are you do Smoking?</b></h5>
                            <p>{{ $view_user->smoking }} </p>
                            </div>
                        </div>

                        <div class="row">
                                <div class="col-md-3">
                            <h5><b>Are you the patient of thelisimia</b></h5>
                            <p>{{ $view_user->thelisimia }} </p>
                            </div>
                            
                           
                            <div class="col-md-3">
                            <h5><b>Are you suffering any diseace</b></h5>
                            <p>{{ $view_user->diseace }} </p>
                            </div>
                            <div class="col-md-3">
                            <h5><b>Disability</b></h5>
                            <p>{{ $view_user->disabilty }} </p>
                            </div>
                                <div class="col-md-3">
                            <h5><b>how did you find about us</b></h5>
                            <p>{{ $view_user->how_did }} </p>
                            </div>
                        </div>

                        <hr>
                            <h4>Family Details</h4>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                            <h5><b>Family Type</b></h5>
                            <p>{{ $view_user->family_type }} </p>
                            </div>
                        
                                <div class="col-md-3">
                            <h5><b>Finacial Status</b></h5>
                            <p>{{ $view_user->finacial_status }} </p>
                            </div>
                            
                           
                            <div class="col-md-3">
                            <h5><b>Assets</b></h5>
                            <p>{{ $view_user->assets }} </p>
                            </div>
                            <div class="col-md-3">
                            <h5><b>Disability</b></h5>
                            <p>{{ $view_user->disabilty }} </p>
                            </div>
                        </div>
                         <div class="row">
                                <div class="col-md-3">
                            <h5><b>Father's Details</b></h5>
                            <p>{{ $view_user->father_detail }} </p>
                            </div>

                            <div class="col-md-3">
                            <h5><b>Father's Occupation </b></h5>
                            <p>{{ $view_user->father_occupation }} </p>
                            </div>
                            
                           
                            <div class="col-md-3">
                            <h5><b>Mother's Details</b></h5>
                            <p>{{ $view_user->mother_detail }} </p>
                            </div>
                            <div class="col-md-3">
                            <h5><b>Mother's Occupation</b></h5>
                            <p>{{ $view_user->mother_occupation }} </p>
                            </div>
                        </div>
                         <hr>
                            <h4>Brothers Details</h4>
                            <hr>

                         <div class="row">
                                <div class="col-md-3">
                            <h5><b>Elder Brothers</b></h5>
                            <p>{{ $view_user->elder_brother }} </p>
                            </div>

                            <div class="col-md-3">
                            <h5><b>Younger Brothers </b></h5>
                            <p>{{ $view_user->younger_brother }} </p>
                            </div>
                            
                           
                            <div class="col-md-3">
                            <h5><b>Married Brothers</b></h5>
                            <p>{{ $view_user->brother_married }} </p>
                            </div>
                            <div class="col-md-3">
                            <h5><b>Unmarried Brother</b></h5>
                            <p>{{ $view_user->brother_unmarried }} </p>
                            </div>
                        </div>


                         <hr>
                            <h4>Sisters Details</h4>
                            <hr>

                         <div class="row">
                                <div class="col-md-3">
                            <h5><b>Elder sister</b></h5>
                            <p>{{ $view_user->elder_sister }} </p>
                            </div>

                            <div class="col-md-3">
                            <h5><b>Younger sister </b></h5>
                            <p>{{ $view_user->younger_sister }} </p>
                            </div>
                            
                           
                            <div class="col-md-3">
                            <h5><b>Married sister</b></h5>
                            <p>{{ $view_user->sister_married }} </p>
                            </div>
                            <div class="col-md-3">
                            <h5><b>Unmarried sister</b></h5>
                            <p>{{ $view_user->sister_unmarried }} </p>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-md-12">
                            <h5><b>Family Description</b></h5>
                            <p>{{ $view_user->family_detail }} </p>
                            </div>
                        </div>

                        <hr>
                            <h2>Partner Preference</h2>
                            <hr>



                            
                            <h4>Age And Height Preference</h4>
                            <hr>

                         <div class="row">
                                <div class="col-md-3">
                            <h5><b>Age From</b></h5>
                            <p>{{ $view_user->loking_age_from }} </p>
                            </div>

                            <div class="col-md-3">
                            <h5><b>Age To</b></h5>
                            <p>{{ $view_user->loking_age_to }} </p>
                            </div>
                            
                            
                            <div class="col-md-3">
                            <h5><b>Height From</b></h5>
                            <p>{{ $view_user->loking_height_from }} </p>
                            </div>

                            <div class="col-md-3">
                            <h5><b>height To</b></h5>
                            <p>{{ $view_user->loking_height_to }} </p>
                            </div>
                        </div>

                          <hr>
                            <h4>Marital Status</h4>
                            <hr>
                            <div class="row">
                        {{-- <h5><b>Marital Status</b></h5> --}}
                           @foreach($loking_marital as $row)
                            <div class="col-md-3">
                            <p>{{ $row->loking_value }} </p>
                            </div>
                            @endforeach
                        </div>
                             <hr>
                            <h4>Eating Habits</h4>
                            <hr>
                            <div class="row">
                        {{-- <h5><b>Marital Status</b></h5> --}}
                           @foreach($loking_eating as $row)
                            <div class="col-md-3">
                            <p>{{ $row->loking_value }} </p>
                            </div>
                            @endforeach

                        </div>


                             <hr>
                            <h4>Partner Preference</h4>
                            <hr>

                         <div class="row">
                                <div class="col-md-3">
                            <h5><b>Physical Status</b></h5>
                            <p>{{ $view_user->loking_physcial_status }} </p>
                            </div>

                            <div class="col-md-3">
                            <h5><b>Complexion Preference</b></h5>
                            <p>{{ $view_user->loking_skin_color }} </p>
                            </div>
                            
                            
                            <div class="col-md-3">
                            <h5><b>Mother Tongue</b></h5>
                            <p>{{ $view_user->loking_language }} </p>
                            </div>

                            {{-- <div class="col-md-3">
                            <h5><b>height To</b></h5>
                            <p>{{ $view_user->loking_height_to }} </p>
                            </div> --}}
                        </div>



                        <hr>
                            <h4>Professional Preferences</h4>
                            <hr>

                         <div class="row">
                                <div class="col-md-3">
                            <h5><b>Education</b></h5>
                            <p>{{ $view_user->loking_education }} </p>
                            </div>

                            <div class="col-md-3">
                            <h5><b>Occupation</b></h5>
                            <p>{{ $view_user->loking_job }} </p>
                            </div>
                            
                            
                            <div class="col-md-3">
                            <h5><b>Employed in</b></h5>
                            <p>{{ $view_user->employed_in }} </p>
                            </div>

                            <div class="col-md-3">
                            <h5><b>Annual Income</b></h5>
                            <p>{{ $view_user->loking_a_income }} </p>
                            </div>
                        </div>




                        <hr>
                            <h4>1st Location Preferences</h4>
                            <hr>

                         <div class="row">
                                <div class="col-md-3">
                            <h5><b>Living Country</b></h5>
                            <p>@if(!empty($living)){{ $living->country_name }} @endif</p>
                            </div>

                            <div class="col-md-3">
                            <h5><b>Living state</b></h5>
                            <p>@if(!empty($living_state)){{ $living_state->state_name }} @endif</p>
                            </div>
                            
                            
                            <div class="col-md-3">
                            <h5><b>Living City</b></h5>
                            <p>@if(!empty($living_city)){{ $living_city->city_name }} @endif</p>
                            </div>

                           {{--  <div class="col-md-3">
                            <h5><b>Annual Income</b></h5>
                            <p>{{ $living_city->city_name }} </p>
                            </div> --}}
                        </div>


                        <hr>
                            <h2>
                              2nd Location Preference (optional)</h2>
                            <hr>
                            <h4>
                              Africa</h4>
                            <hr>

                         <div class="row">
                            @foreach($africa as $row)

                                <div class="col-md-3">
                            {{-- <h5><b>Africa</b></h5> --}}
                            <p>{{ $row->loking_value }} </p>
                            </div>
                            @endforeach
                        </div>
                        <h4>
                             <hr>
                              Antarctica</h4>
                            <hr>
                             <div class="row">
                            @foreach($antarctica as $row)

                                <div class="col-md-3">
                            {{-- <h5><b>Africa</b></h5> --}}
                            <p>{{ $row->loking_value }} </p>
                            </div>
                            @endforeach
                        </div>
                            
                            
                            <hr>
                              <h4>Asia</h4>
                            <hr>
                             <div class="row">
                            @foreach($asia as $row)

                                <div class="col-md-3">
                            {{-- <h5><b>Africa</b></h5> --}}
                            <p>{{ $row->loking_value }} </p>
                            </div>
                            @endforeach
                        </div>

                         <hr>
                              <h4>Europe</h4>
                            <hr>
                             <div class="row">
                            @foreach($europe as $row)

                                <div class="col-md-3">
                            {{-- <h5><b>Africa</b></h5> --}}
                            <p>{{ $row->loking_value }} </p>
                            </div>
                            @endforeach
                        </div>

                        



                        <hr>
                              <h4>North America</h4>
                            <hr>
                             <div class="row">
                            @foreach($north_america as $row)

                                <div class="col-md-3">
                            {{-- <h5><b>Africa</b></h5> --}}
                            <p>{{ $row->loking_value }} </p>
                            </div>
                            @endforeach
                        </div>

                        <hr>
                              <h4>Australasia</h4>
                            <hr>
                             <div class="row">
                            @foreach($australasia as $row)

                                <div class="col-md-3">
                            {{-- <h5><b>Africa</b></h5> --}}
                            <p>{{ $row->loking_value }} </p>
                            </div>
                            @endforeach
                        </div>


                          <hr>
                              <h4>South America</h4>
                            <hr>
                             <div class="row">
                            @foreach($south_america as $row)

                                <div class="col-md-3">
                            {{-- <h5><b>Africa</b></h5> --}}
                            <p>{{ $row->loking_value }} </p>
                            </div>
                            @endforeach
                        </div>

                        <hr>
                              <h4>Residency Status</h4>
                            <hr>
                             <div class="row">
                            @foreach($residency_status as $row)

                                <div class="col-md-3">
                            {{-- <h5><b>Africa</b></h5> --}}
                            <p>{{ $row->loking_value }} </p>
                            </div>
                            @endforeach
                        </div>


                         <hr>
                              <h4>Ethnic Origin</h4>
                            <hr>
                             <div class="row">
                            @foreach($ethnic_origin as $row)

                                <div class="col-md-3">
                            {{-- <h5><b>Africa</b></h5> --}}
                            <p>{{ $row->loking_value }} </p>
                            </div>
                            @endforeach
                        </div>

                        <hr>
                              <h4>Religious History</h4>
                            <hr>
                             <div class="row">
                            @foreach($religious_history as $row)

                                <div class="col-md-3">
                            {{-- <h5><b>Africa</b></h5> --}}
                            <p>{{ $row->loking_value }} </p>
                            </div>
                            @endforeach
                        </div>



                         <hr>
                              <h4>Living with her in-laws</h4>
                            <hr>
                             <div class="row">
                            @foreach($living_with as $row)

                                <div class="col-md-3">
                            {{-- <h5><b>Africa</b></h5> --}}
                            <p>{{ $row->loking_value }} </p>
                            </div>
                            @endforeach
                        </div>

                        <hr>
                              <h4>What Sect are you looking for</h4>
                            <hr>
                             <div class="row">
                            @foreach($sects as $row)

                                <div class="col-md-3">
                            {{-- <h5><b>Africa</b></h5> --}}
                            <p>{{ $row->loking_value }} </p>
                            </div>
                            @endforeach
                        </div>


                         <hr>
                              <h4>Pray</h4>
                            <hr>
                             <div class="row">
                            @foreach($pray as $row)

                                <div class="col-md-3">
                            {{-- <h5><b>Africa</b></h5> --}}
                            <p>{{ $row->loking_value }} </p>
                            </div>
                            @endforeach
                        </div>

                        <hr>
                              <h4>Has Children</h4>
                            <hr>
                             <div class="row">
                            @foreach($has_children as $row)

                                <div class="col-md-3">
                            {{-- <h5><b>Africa</b></h5> --}}
                            <p>{{ $row->loking_value }} </p>
                            </div>
                            @endforeach
                        </div>



                         <hr>
                              <h4>Like to have children</h4>
                            <hr>
                             <div class="row">
                            @foreach($like_child as $row)

                                <div class="col-md-3">
                            {{-- <h5><b>Africa</b></h5> --}}
                            <p>{{ $row->loking_value }} </p>
                            </div>
                            @endforeach
                        </div>

                        <hr>
                              <h4>Body Type</h4>
                            <hr>
                             <div class="row">
                            @foreach($loking_body_type as $row)

                                <div class="col-md-3">
                            {{-- <h5><b>Africa</b></h5> --}}
                            <p>{{ $row->loking_value }} </p>
                            </div>
                            @endforeach
                        </div>

                        <hr>
                              <h4>Observes Hija</h4>
                            <hr>
                             <div class="row">
                            @foreach($observes_hijab as $row)

                                <div class="col-md-3">
                            {{-- <h5><b>Africa</b></h5> --}}
                            <p>{{ $row->loking_value }} </p>
                            </div>
                            @endforeach
                        </div>


                         <hr>
                            <h4>I am looking for Information</h4>
                            <hr>

                         <div class="row">
                                <div class="col-md-12">
                            {{-- <h5><b>Education</b></h5> --}}
                            <p>{{ $view_user->loking_description }} </p>
                            </div>
                        </div>

                        </div>
                            <div class="clearfix"></div>
                            <hr>
                            <div class="clearfix"></div>

                        </div>                

            </div>









        </div>
    </div>
    </div>
        </section></div>






</div>    </div>
    <!-- END CONTAINER -->
<!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->
@endsection
@push('css')
<link rel="shortcut icon" href="{{ $admin_assets }}/images/favicon.png" type="image/x-icon" />    <!-- Favicon -->
        <link rel="apple-touch-icon-precomposed" href="{{ $admin_assets }}/images/apple-touch-icon-57-precomposed.png">   <!-- For iPhone -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ $admin_assets }}/images/apple-touch-icon-114-precomposed.png">    <!-- For iPhone 4 Retina display -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ $admin_assets }}/images/apple-touch-icon-72-precomposed.png">    <!-- For iPad -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ $admin_assets }}/images/apple-touch-icon-144-precomposed.png">    <!-- For iPad Retina display -->




        <!-- CORE CSS FRAMEWORK - START -->
        <link href="{{ $admin_assets }}/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="{{ $admin_assets }}/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ $admin_assets }}/plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <!-- <link href="{{ $admin_assets }}/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/> -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="{{ $admin_assets }}/css/animate.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ $admin_assets }}/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS FRAMEWORK - END -->

        <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        
        
<link href="{{ $admin_assets }}/plugins/datatables/css/jquery.dataTables.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="{{ $admin_assets }}/plugins/datatables/extensions/TableTools/css/dataTables.tableTools.min.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="{{ $admin_assets }}/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="{{ $admin_assets }}/plugins/datatables/extensions/Responsive/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet" type="text/css" media="screen"/>

        <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE CSS TEMPLATE - START -->
        <link href="{{ $admin_assets }}/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="{{ $admin_assets }}/css/responsive.css" rel="stylesheet" type="text/css"/>
@endpush
@push('js')
<script src="{{ $admin_assets }}/js/jquery-1.11.2.min.js" type="text/javascript"></script> 
<script src="{{ $admin_assets }}/js/jquery.easing.min.js" type="text/javascript"></script> 
<script src="{{ $admin_assets }}/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
<script src="{{ $admin_assets }}/plugins/pace/pace.min.js" type="text/javascript"></script>  
<script src="{{ $admin_assets }}/plugins/perfect-scrollbar/perfect-scrollbar.min.js" type="text/javascript"></script> 
<script src="{{ $admin_assets }}/plugins/viewport/viewportchecker.js" type="text/javascript"></script>  
<script>window.jQuery||document.write('<script src="{{ $admin_assets }}/js/jquery-1.11.2.min.js"><\/script>');</script>
<!-- CORE JS FRAMEWORK - END --> 


<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 

<script src="{{ $admin_assets }}/plugins/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="{{ $admin_assets }}/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js" type="text/javascript"></script>
<script src="{{ $admin_assets }}/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js" type="text/javascript"></script>
<script src="{{ $admin_assets }}/plugins/datatables/extensions/Responsive/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


<!-- CORE TEMPLATE JS - START --> 
<script src="{{ $admin_assets }}/js/scripts.js" type="text/javascript"></script> 
<!-- END CORE TEMPLATE JS - END --> 
@endpush











</body>

<!-- Mirrored from jaybabani.com/complete-admin/v4.2/preview/fixedmenu/hos-staff-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Oct 2017 06:46:16 GMT -->
</html>



