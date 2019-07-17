@extends('user/user_master_layout1') 
@section('data') 
<div style="padding-top:86px;"></div>

  {{-- <link rel="stylesheet" href="{{ $user_assets }}/jquery.min2.js"> --}}
  {{-- <link rel="stylesheet" href="{{ $user_assets }}/css/owl.carousel2.css" /> --}}
   <link rel="stylesheet" href="{{ $user_assets }}/css/advance-profile.css" />
	<link rel="stylesheet" href="{{ $user_assets }}/css/user-card.css" />

   <style type="text/css">
   .col-md-9 .well {
     margin-bottom: 0;
   }

   .nav.navbar-nav .dropdown a.dropdown-toggle {
    line-height: 21px !important;
   }

   .user-list-mobile {
     display: none;
   }

   .three-icons {
    position: absolute;
    bottom: -55px;
    display: flex;
    width: 100%;
    justify-content: space-evenly;
   }

   footer {
     margin-top: 20px;
   }

    .list-active {
        border:none !important;
    }

    .col-md-3.content {
      position: sticky;
      top: -640px;
    } 

    .col-md-3.content h2{
      margin-top:40px;
      font-weight:600;
    }
    
     #myCarousel {
      border:1px solid #777;
      border-radius: 5px;
      margin-top: 10px;
      height: 540px;
  }
  
  #myCarousel .carousel-inner {
    background: lavender;
  }

	.card-container {
		height:0;
		width: 89%;
	}

	.card {
		width:100%;
		border:none;
  }

  .navbar-form button .glyphicon {
    top: 1px;
  }

  .navbar-form button {
    right: -4px;
    padding: 6px 11px !important;
}

  .pagination {
    margin: 10px 0 0 0;
}

.well {
  padding-top:32px;
}

  .main-section .arrow_button {
    margin-left:-21px;
  }

  .pagination a, .pagination span {
    margin: 0 10px;
    border-radius: 99px !important;
    font-weight:600;
    color:#5a378c !important;
}

.pagination li:not(.active) span {
  color:#ed6c05;
}

  .pagination .active span{
    background-color:#ed6c05;
    border-color: #ed6c05;
    color:#fff !important;
  }

  .pagination .active:hover span {
    background-color:#ed6c05;
    border-color: #ed6c05;
  }

  .emojiPicker {
    left: 19px !important;
  }

  .emojiPickerIcon.black {
    height: 37px !important;
    width: 37px !important;
    top: 7px !important;
  }

   .add-margin {
     margin:10px;
   }

   tr.dosrch th a {
    font-size:14px;
  }

   .bg-orange.no-padding.wow.animated {
     margin-top:53px;
   }

   .li-image img{

     border-radius: 50%; width: 80px; height: 80px;
   }
   .maindiv
   {
    border:1px ridge;
   }
   .age
   {
        background-color: #f47e2a;
    /* margin-top: -20px; */
    position: absolute;
    /* z-index: 999; */
    bottom: 1px;
    left: 12px;
    height: 24px;
    width: 74px;
    border-radius: 7px;
   }
   * {
    margin: 0;
    padding: 0;
  }
  .pl-head {
    margin-top: 20px;
    font-size: 20px;
    color: black;
  }
  .pl-header {
    width: 100%;
    height: 61px;
    background-color: #5a378c;
  }
  .pl-section {
    width: 100%;
  }
  .pl-container {
    width: 80%;
    margin: 50px auto;
  }
  .pull-left {
    float: left;
  }
  .pull-right {
    float: right;
  }
  .pl-section-left {
    width: 70%;
    border-radius: 10px;
    box-shadow: 0 0 10px #ccc;
  }
  .pl-section-right {
    width: 25%;
    height: 1000px;
    border-radius: 10px;
    box-shadow: 0 0 10px #ccc;
  }
  .clearfix {
    clear: both;
  }
  .pl-footer1 {
    width: 100%;
    height: 158px;
    background-color: #ed6c05;
  }
  .pl-footer2 {
    width: 100%;
    height: 433px;
    background-color: #5a378c;
  }
  .pl-footer3 {
    width: 100%;
    height: 66px;
    background-color: #222222;
  }
  .pl-top-selection:hover
  {
    -webkit-transform: scale(1.1);
       -moz-transform: scale(1.1);
        -ms-transform: scale(1.1);
         -o-transform: scale(1.1);
            transform: scale(1.1);
            -webkit-transition: all .2s ease-in-out;
               -moz-transition: all .2s ease-in-out;
                -ms-transition: all .2s ease-in-out;
                 -o-transition: all .2s ease-in-out;
                    transition: all .2s ease-in-out;
  }
  
  .pl-top-selection {
    width: 100%;
    display: block;
    /*border: 1px solid #000;*/
    margin: -1px 0 25px 3%;
    padding: 10px 0;
    text-decoration: none;
    border-radius: 5px;
  }
  .category-active {
    border: 1px solid #727272;
    margin-bottom: 25px;
  }
  .list-active{
     border: 3px solid #ccff00;
    /*margin-bottom: 18px;*/
    /*width: 100%;*/
  }
/*  .pl-top-selection:focus
   {
    border: 1px solid #000;
  }*/
  .pl-top-selection img {
    width: 50%;
    margin-bottom: 5px;
  }
  .pl-text-center {
    text-align: center;
  }
  .pl-hr {
    width: 92%;
    margin: 0 auto 20px;
  }

  .pl-profile {
       width: 100%;
    height: 360px;
    /*background-color: red;*/
    /* border-radius: 10px; */
    box-shadow: 0 0 10px #ccc;
    margin-left: 3%;
    margin-bottom: 20px;
    position: relative;
  }

  .pl-profile:hover {
    border: 4px solid #ccff00;
  }

  .pl-profile:hover {
    border: 4px solid #ccff00;
  }

  .pl-profile:hover .pl-content-top {
      /* width: 30px; */
      height: 91px;
  }

  .pl-profile img {
    width: 100%;
    height:100%;
    opacity: 0.75;
    /*border-radius: 10px;*/
  }
  .pl-profile-content {
        width: 100%;
    height: 307px;
    /* background-color: rgba(0,0,0,0.7); */
    position: absolute;
    top: 0;
    display: inline-block;
    /* border-radius: 10px; */
  }

  .pl-profile > img  {
    visibility: hidden;
  }

  .pl-content-top {
    /*width: 30px;*/
    height: 100px;
    float: right;
    margin-right: 5px;
  }
 .pl-content-top-img {
        width: 15px !important;
    height: 15px !important;
    /*margin-top: 10px;*/
    margin-left: 5px;
  }
  .pl-content-bottom {
    width: 100%;
    height: 184px;
    margin: 77px auto 0;
    padding-top: 10px;
    /*background-color: rgba(0,0,0,0.7);*/
    background-image:url('./public/user_assets/public_profile/back.png');
    /*background-image:url(../dashbord/banner_background.jpg);*/
      /*background-image:url('../back.jpg');*/
    /*border-bottom-right-radius: 10px;
    border-bottom-left-radius: 10px;*/
  }
  .pl-list {
    list-style-type: none;
    margin-bottom:0px;
    margin-left: 7.5%;
    line-height: 21px;
    margin-top:-20px;
  }
  .pl-list li {
    color: #fff;
    font-size: 12px;
    font-family: 'Arial';
    width: 50% !important;
    float: left;
    margin-bottom: 5px;
  }
  .pl-content-fotter {
    width: 30%;
    height: 50px;
    float: left;
    margin-left: 2%;
  }
  .pl-content-fotter img {
    width: 30px;
    height: 30px;
    border-radius: 100%;
    border: 1px solid #fff;
    padding: 2px;
  }
  .pl-content-fotter a {
    color: #fff;
    font-size: 11px;
    font-family: 'Arial';
  }
  .pl-right-head {
    margin-left: 20px;
    margin-top: 10px;
  }
  .form-box {
    width: 38%;
    margin: 20px 0 0 7%;
    float: left;
  }
  .form-box label {
    display: block;
    margin-bottom: 5px;
  }
  .form-field {
    width: 93%;
    height: 25px;
    padding: 0 5px;
  }
  .form-btn {
    background-color: #5a378c;
    width: 80px;
    height: 25px;
    border: none;
    color: #fff;
    cursor: pointer;
  }
  .qss
  {
      height:38px;
      border-radius:5px;
      font-size: 12px;
  }
  
  .log0 {
    display: inline-block;
    height: 10px;
    width: 10px;
    border-radius: 50%;
    margin-top: 8px;
    margin-left: 8px;
  }
  
  .log1 {
    background-color: mediumseagreen;
  }

  .log {
    background-color: darkgray;
  }
  
  .bn {
    width: 100%;
    border-radius: 10px;
    border: 1px;
    height: 29px;
    background-color: #f47e2a;
    color: #ffffff;
    font-size: 14px;
}
p.t
{
   color: black;
   margin-bottom: 0px;
}
.serach_relative
{
  
  width:100%;
  border-radius:5px !important;
  border-color: #c4c4c4;
}
.s_r_btn
{
  width: 100%;
  background-color:#ed6c05;
  color: #ffffff;
  height: 35px;
  border-color:#ed6c05;
  border-radius:5px;
}
.s_r_btn:hover
{
  background-color:#25b206;
  border-color: #25b206;


}
.perdiv:hover
  {
    -webkit-transform: scale(1.1);
       -moz-transform: scale(1.1);
        -ms-transform: scale(1.1);
         -o-transform: scale(1.1);
            transform: scale(1.1);
            -webkit-transition: all .2s ease-in-out;
               -moz-transition: all .2s ease-in-out;
                -ms-transition: all .2s ease-in-out;
                 -o-transition: all .2s ease-in-out;
                    transition: all .2s ease-in-out;
  }

  .perdiv{
    width: 32.777%;
    margin-bottom: 20px;
  }

  .save-search-btn-container {
    width: 11vw;
  }

  .save-search-btn-container .save-search-btn {
    padding: 8px 3px;
    width: 100%;
    font-size: 12px;
    letter-spacing: normal;
  }

    /* .user-list-mobile > div > .icons img {
    width: 20px;
    height: 25px !important;
    } */

   @media (max-width:1300px) {
    .navbar-form button {
      right: -17px;
    }
  }

  @media (min-width:991px) {
    .pl-top-selection img {
      width:21.5% !important;
    }

    .searchcontainer button {
      margin-top:-56px !important;
      padding-top:15px;
    }
  }

  @media (max-width:991px) {
    .navbar-nav .dropdown .dropdown-toggle {
      padding-top: 11px !important;
      padding-bottom: 11px !important;
    }

    .searchcontainer button {
      margin-top:-56px !important;
      padding-top:15px;
    }

    .pl-top-selection img {
      width:15% !important;
    }

    .save-search-btn-container {
      width: 50%;
      float: right;
    }

    .save-search-btn-container .save-search-btn {
      padding: 8px 3px;
      width: 97%;
      font-size: 12px;
      letter-spacing: normal;
    }
  }

  @media (max-width:768px) {
      .col-xs-6 {
        width:50% ;
      }

      .pl-profile {
        margin-left:0;
      }

      .pl-list {
        margin-left:2%;
        line-height: 15px;
      }

      /* .save-search-btn {
        margin-top:10px;
        margin-left:16px;
      } */

      .col-md-3.content form:last-of-type {
        width:95%;
        margin:12px auto auto auto;
      }

      .col-md-3.content form:last-of-type .row {
        margin:0;
      }

      .save-search-btn-container {
        padding: 0;
        width: 100%;
      }

      .save-search-btn-container .save-search-btn {
        margin-left: 0;
        margin-right: 0;
        width: 100%;
      }

      .col-md-9 {
        margin-bottom: 1rem;
      }

      .col-md-9 .well {
        padding: 10px;
      }

      .col-md-9 .well .row {
        display: none;
      }

      .user-list-mobile {
        display: block;
      }
    }

    @media (max-width:640px) {
      .pagination > li > span {
        line-height: 1.7 !important;
      }
    }

    @media (max-width:520px) {
      .navbar-form button {
       padding: 6px 3px!important;
      }
    }
 
    @media (max-width:500px) {
      tr.dosrch th a {
        font-size:12px;
    }

    .col-md-3.content form:last-of-type {
        width:90%;
      }
  }

  @media (max-width:375px) {
      .smallest {
        width:100%;
      }
  }
    
    @media (max-width:420px) {
        .pl-top-selection img {
        width:40% !important;
        }
      }

@media (max-width:320px) {
  .searchcontainer button {
    margin-top:-44px !important;
  }
}

   </style>

   <div id="wait" style="display: none;"></div>
<div class="container-fluid" style="margin-top: 50px;">
  
  <div class="row">
    <div class="scroll">
      <div class="wrapper cf">
   
     
    <div class="col-md-9">
    <div class="well" style="border-radius:10px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);height:auto;">

      {{-- <div class="row">
        <div class="col-sm-12">
          <p class="pl-text-center pl-head">User Listing</p>
        </div>
      </div> --}}
      @php
      //   $search = \Request::segment(1);
      // print_r($search);die();
      @endphp
      {{-- <div class="row" @if($search == 'user-search') hidden="" {{-- @endif --}}
        {{-- <form method="get" action="{{ url('user-search') }}">
        <div class="col-sm-3 add-margin">
          <select name="country_id" id="" class="serach_relative">
            <option value="">Country</option>
             @foreach ($country as $row)
                              <option value="{{ $row->country_id }}">
                                {{ $row->country_name }}
                              </option>
                             @endforeach
          </select>
        </div>
        <div class="col-sm-3 add-margin">
          <select name="language" id="" class="serach_relative">
            <option value="">Language</option>
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
        </div>
        <div class="col-sm-3 add-margin">
          <select name="qualification" id="" class="serach_relative">
             <option value="">Qualification</option>
             Select ---</option>
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
        <div class="col-sm-3 add-margin">
          <select name="job" id="" class="serach_relative">
             <option value="">Occupation</option>
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
                    {{-- <option value="Doctor">Doctor</option>
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
        <div class="col-sm-3 add-margin">
          <select name="age_from" id="" class="serach_relative">
             <option value="">Age from</option>
             @for($i =  date('y');  $i <= date('y')+82 ; $i++)
  <option value="{{ $i }}" >{{ $i }}</option>
@endfor 
          </select>
        </div>
        
        <div class="col-sm-3 add-margin">
          <select name="age_to" id="" class="serach_relative">
             <option value="">Age to</option>
              @for($i = date('y')+82; $i >= date('y'); $i--)
  <option value="{{ $i }}" >{{ $i }}</option>
@endfor 
          </select>
        </div>
        <div class="col-sm-3 add-margin">
          <select name="loking_for" id="" class="serach_relative">
 <option value="">Gender</option>
                   <option value="Male">Male</option>
                      <option value="Female">Female</option>
                      
          </select>
        </div> --}}
         
        {{-- <div class="col-sm-3 add-margin">
          <select name="" id="" class="serach_relative">
             <option value="">Height to</option>
          </select>
        </div> --}}
       {{--  <div class="col-sm-3 add-margin">
          <input type="hidden" name="search" value="{{ $search }}">
          <button type="submit" class="s_r_btn">Search</button>
        </div>
        </form>
      </div> --}}
     {{--  <form method="post" action="{{ url('save-search') }}">
        <div class="row">
          {{ csrf_field() }}
        <input type="hidden" name="link" value="{{ $save_search }}">
        <div class="col-md-6">
        <input type="text" required="" name="search_comment" class="form-control">
        </div>
        <div class="col-md-6">
        <button class="btn btn-success">Save Search</button>
      </div>
      </div>
      </form> --}}
       @if(Session::has('error'))
                    <p class="alert alert-danger">{{ Session::get('error') }}</p>
                @endif
                @if(Session::has('success'))
                    <p class="alert alert-success">{{ Session::get('success') }}</p>
                @endif
      {{-- @if(count($user_data))
      <form method="post" action="{{ url('save-search') }}">
        <div class="row">
          {{ csrf_field() }}
        <input type="hidden" name="link" value="{{ $save_search }}">
        <div class="col-md-6">
        <input type="text" required="" name="search_comment" class="form-control">
        </div>
        <div class="col-md-6">
        <button class="btn btn-success">Save Search</button>
      </div>
      </div>
      </form>
      @endif --}}
     {{--  <div class="row">
        <div class="col-sm-2">
            <a href="{{ url('single') }}" class="pl-top-selection pull-left pl-text-center">
              <div>
                <img src="{{ $user_assets }}/single.png">
                <p class="t">Single</p>
              </div>
            </a>
        </div>
        <div class="col-sm-2">
          <a href="{{ url('widow') }}" class="pl-top-selection pull-left pl-text-center">
            <div>
             <img src="{{ $user_assets }}/widowed.png">
              <p class="t">Widow</p>
            </div>
          </a>
        </div>
        <div class="col-sm-2">
          <a href="{{ url('divorcee') }}" class="pl-top-selection pull-left pl-text-center">
            <div>
             <img src="{{ $user_assets }}/divorced.png">
              <p class="t">Divorcee</p>
            </div>
          </a>
        </div>
        <div class="col-sm-2">
          <a href="{{ url('annulled') }}" class="pl-top-selection pull-left pl-text-center">
            <div>
              <img src="{{ $user_assets }}/annul.png">
              <p class="t">Annulled</p>
            </div>
          </a>
        </div>
        <div class="col-sm-2">
          <a href="{{ url('polygamy') }}" class="pl-top-selection pull-left pl-text-center">
            <div>
               <img src="{{ $user_assets }}/polygamy.png">
              <p class="t">Polygamy</p>
            </div>
          </a>
        </div>
        <div class="col-sm-2">
          <a href="{{ url('separated') }}" class="pl-top-selection pull-left pl-text-center">
            <div>
              <img src="{{ $user_assets }}/separated.png">
              <p class="t">Seprated</p>
            </div>
          </a>
        </div>
        <div class="clearfix"></div>
        <hr class="pl-hr" />
      </div> --}}
     
       <div class="row">

        @if(count($user_data))
        @foreach($user_data as $row)
         <a href="{{ url('public-profile',$row->id) }}" target="_blank" class="userserch">
    
          <!-- first box -->
         <div class="col-sm-4 col-xs-6 smallest perdiv">
           <div class="clearfix"></div>
           <div class="pl-profile">
           {{--  @if(!empty($row->image))
            <img src="{{ $user_assets }}/my_photo/{{ $row->image }}" > --}}
            
             @if(!empty($row->image_name))

              <img src="{{ $user_assets }}/profile_image/{{ $row->image_name }}">
              @else

              <img src="" alt="picture">
              @endif
              <div class="pl-profile-content">
                <div class="pl-content-top">
                  @if($row->login_status==1)
                  {{-- <img src="{{ $user_assets }}/public_profile/online.gif" class="pl-content-top-img" width="30px"  title="Online" /> --}}
                  
                   <i class="log0 log1"></i>
                   @else
                  <i class="log0 log"></i> 
                  @endif
                </div>
               {{--  <div class="pl-status">
                  <span style="color: red;">offline</span>
                </div> --}}
                <div class="clearfix"></div>
                <div class="pl-content-bottom">
                  <ul class="pl-list">
                    
                      <li title="User Name"> <span style="background-color:red;padding: 2px 6px; color: white;">{{strtoupper(str_limit($row->user_name,8))}}</span></li>
                    
                    <li title="Last Login">{{ \Carbon\Carbon::parse($row->last_login)->diffForHumans() }}</li>
                      
                      @php $age=date('Y')-$row->year @endphp
                   
                   
                    @if(!empty($row->height))
                    @php
                    $one = str_replace("ft","'",$row->height);
                    $two = str_replace('in','"', $one);
                    $foot = explode(" ", $two);
                   
                    @endphp

                    <li title="Age And Height">{{$age}} yrs, {{$foot[0].' '.$foot[1]}}</li>
                    @else
                    <li title="Age">{{$age}} yrs
                    @endif
                  </li>
                    
                    <li title="Islamic Origin">{{ $row->sect_are }}</li>
                    <li title="Language">{{$row->language}}</li>
                   
                    {{-- <li>{{ $row->sect_are }}</li> --}}
                    <li title="Occupation">{{str_limit($row->job,12)}}</li>
                    <li title="City">{{$row->city_name}}</li>
                    <li title="Country">{{$row->country_name}}</li>
                    @if($row->martial_status=='Married')
                    
                     <li title="Martial Status">{{ $row->marige_type }}</li> 
                    
                    @else

                    <li title="Martial Status">{{$row->martial_status}}</li>
                    @endif
                    <li title="Cast">{{$row->cast}}</li>
                    <div class="clearfix"></div>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                      <div class="three-icons">
                        <div class="pl-content-fotter pl-text-center">
                      @if($row->email_status==1)
                      <center> <img src="{{ $user_assets }}/public_profile/email_verified.png" title="Email verified"></center>
                      @else
                      <center> <img src="{{ $user_assets }}/public_profile/email_unverified_gray.PNG" title="Email unverified"></center>
                      @endif
                      <!-- <a>Contact</a> -->
                      </div>
                      <div class="pl-content-fotter pl-text-center">
                      @if($row->email_status==1)
                      
                      <center><img src="{{ $user_assets }}/public_profile/mobile_verified.png" title="Mobile verified"></center>
                      
                      @else
                      
                      <center><img src="{{ $user_assets }}/public_profile/mobile_unverified.png" title="Mobile Unverified"></center>
                      @endif
                      <!-- <a>Message</a> -->
                      </div>
                      <div class="pl-content-fotter pl-text-center">
                      @if($row->ssn_status==1)
                      
                      <center><img src="{{ $user_assets }}/public_profile/ssn_verified.png" title="SSn verified"></center>
                      
                      @else
                      
                      <center><img src="{{ $user_assets }}/public_profile/ssn_unverified.png" title="SSn Unverified"></center>
                      @endif
                      <!-- <a>Connect</a> -->
                      </div>
                    </div>
              </div>
           </div>
         </div>
       
              </a>
       
         @endforeach
         @else

          <p class="alert alert-danger">No users found in this category</p>
          <style>
            .col-md-9 .well {
              background:none !important;
              border:none !important;
              box-shadow:none !important;
            }
          </style>
         @endif
         
       </div>
       
       <div class="user-list-mobile">
         <div>
           <a href="#">
             <img src="https://source.unsplash.com/user/erondu/1600x900" alt="">
             <div>
               <span>username</span>
               <span class="ago">2 months ago</span>
               <span>33 yrs, 5' 8"</span>
               <span>54 KG</span>
               <span>Sindhi</span>
               <span>Software Engineer</span>
               <span>Lahore</span>
               <span>Pakistan</span>
               <span>Second Marriage</span>
               <span>Chishti</span>
            </div>
           </a>
          <div class="icons">
              <span>
                <i class="fas fa-user"></i>
                <span>Invite</span>
              </span>
              <span>
                <i class="fas fa-comment-alt"></i>
                <span>Message</span>
              </span>
              <span>
                <img src="{{ $user_assets }}/icons/mobile_v.svg" alt="">
                <span>Verified</span>
              </span>
          </div>
          <!-- replace log1 with log for offline icon -->
          <span class="log1"></span>
         </div>
         <div>
           <a href="#">
             <img src="https://source.unsplash.com/user/erondu/1600x900" alt="">
             <div>
               <span>username</span>
               <span class="ago">2 months ago</span>
               <span>33 yrs, 5' 8"</span>
               <span>54 KG</span>
               <span>Sindhi</span>
               <span>Software Engineer</span>
               <span>Lahore</span>
               <span>Pakistan</span>
               <span>Second Marriage</span>
               <span>Chishti</span>
            </div>
           </a>
          <div class="icons">
              <span>
                <i class="fas fa-user"></i>
                <span>Invite</span>
              </span>
              <span>
                <i class="fas fa-comment-alt"></i>
                <span>Message</span>
              </span>
              <span>
                <img src="http://localhost/KBH/public/user_assets/icons/email_v.svg" alt="">
                <span>Verified</span>
              </span>
          </div>
          <!-- replace log1 with log for offline icon -->
          <span class="log1"></span>
         </div>
         <div>
           <a href="#">
             <img src="https://source.unsplash.com/user/erondu/1600x900" alt="">
             <div>
               <span>username</span>
               <span class="ago">2 months ago</span>
               <span>33 yrs, 5' 8"</span>
               <span>54 KG</span>
               <span>Sindhi</span>
               <span>Software Engineer</span>
               <span>Lahore</span>
               <span>Pakistan</span>
               <span>Second Marriage</span>
               <span>Chishti</span>
            </div>
           </a>
          <div class="icons">
              <span>
                <i class="fas fa-user"></i>
                <span>Invite</span>
              </span>
              <span>
                <i class="fas fa-comment-alt"></i>
                <span>Message</span>
              </span>
              <span>
                <img src="http://localhost/KBH/public/user_assets/icons/id_v.svg" alt="">
                <span>Verified</span>
              </span>
          </div>
          <!-- replace log1 with log for offline icon -->
          <span class="log1"></span>
         </div>
         <div>
          <a href="#">
            <img src="https://source.unsplash.com/user/erondu/1600x900" alt="">
            <div>
              <span>username</span>
              <span class="ago">2 months ago</span>
              <span>33 yrs, 5' 8"</span>
              <span>54 KG</span>
              <span>Sindhi</span>
              <span>Software Engineer</span>
              <span>Lahore</span>
              <span>Pakistan</span>
              <span>Second Marriage</span>
              <span>Chishti</span>
           </div>
          </a>
         <div class="icons">
             <span>
               <i class="fas fa-user"></i>
               <span>Invite</span>
             </span>
             <span>
               <i class="fas fa-comment-alt"></i>
               <span>Message</span>
             </span>
             <span>
               <img src="http://localhost/KBH/public/user_assets/icons/unverified.svg" alt="">
               <span>Unverified</span>
             </span>
         </div>
         <!-- replace log1 with log for offline icon -->
         <span class="log1"></span>
        </div>
       </div>
          {{ $user_data->links() }}
      </div>
    </div>
       
       

<!-- div 3 column start -->
 <div class="col-md-3 content">

    <div class="well w">
      <div class="row">
        <div class="col-xs-6">
            <a href="{{ url('single') }}" class="pl-top-selection pull-left pl-text-center @if($search == 'single') category-active @endif" target="_blank" style="    margin-bottom: 23px;">
              <div>
                <img src="{{ $user_assets }}/single.png">
                <p class="t">Single</p>
              </div>
            </a>
        </div>
        <div class="col-xs-6">
          <a href="{{ url('widow') }}" class="pl-top-selection pull-left pl-text-center @if($search == 'widow') category-active @endif" target="_blank">
            <div>
             <img src="{{ $user_assets }}/widowed.png">
              <p class="t">Widow</p>
            </div>
          </a>
        </div>
        <div class="col-xs-6">
          <a href="{{ url('divorcee') }}" class="pl-top-selection pull-left pl-text-center @if($search == 'divorcee') category-active @endif" target="_blank" style="margin-bottom: 23px;">
            <div>
             <img src="{{ $user_assets }}/divorced.png">
              <p class="t">Divorcee</p>
            </div>
          </a>
        </div>
        <div class="col-xs-6">
          <a href="{{ url('annulled') }}" class="pl-top-selection pull-left pl-text-center @if($search == 'annulled') category-active @endif" target="_blank">
            <div>
              <img src="{{ $user_assets }}/annul.png">
              <p class="t">Annulled</p>
            </div>
          </a>
        </div>
        <div class="col-xs-6">
          <a href="{{ url('polygamy') }}" class="pl-top-selection pull-left pl-text-center @if($search == 'polygamy') category-active @endif"  target="_blank">
            <div>
               <img src="{{ $user_assets }}/polygamy.png">
              <p class="t">Polygamy</p>
            </div>
          </a>
        </div>
        <div class="col-xs-6">
          <a href="{{ url('separated') }}" class="pl-top-selection pull-left pl-text-center @if($search == 'separated') category-active @endif" target="_blank">
            <div>
              <img src="{{ $user_assets }}/separated.png">
              <p class="t">Seprated</p>
            </div>
          </a>
        </div>
      </div>
    </div>
     <div class="well w">
      <div class="row">
        <form method="get" action="{{ url('user-search') }}">
        <div class="col-sm-6">
          <select name="country_id" id="" class="serach_relative">
            <option value="">Country</option>
             @foreach ($country as $row)
                              <option value="{{ $row->country_id }}">
                                {{ $row->country_name }}
                              </option>
                             @endforeach
          </select>
        </div>
        <div class="col-sm-6">
          <select name="language" id="" class="serach_relative">
            <option value="">Language</option>
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
        </div>
        <div class="col-sm-6">
          <select name="qualification" id="" class="serach_relative">
             <option value="">Qualification</option>
             Select ---</option>
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
        <div class="col-sm-6">
          <select name="job" id="" class="serach_relative">
             <option value="">Occupation</option>
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
        <div class="col-sm-6">
          <select name="age_from" id="" class="serach_relative">
             <option value="">Age from</option>
             @for($i =  date('y');  $i <= date('y')+82 ; $i++)
  <option value="{{ $i }}" >{{ $i }}</option>
@endfor 
          </select>
        </div>
        
        <div class="col-sm-6">
          <select name="age_to" id="" class="serach_relative">
             <option value="">Age to</option>
              @for($i = date('y')+82; $i >= date('y'); $i--)
  <option value="{{ $i }}" >{{ $i }}</option>
@endfor 
          </select>
        </div>
        <div class="col-sm-6">
          <select name="loking_for" id="" class="serach_relative">
 <option value="">Gender</option>
                   <option value="Male">Male</option>
                      <option value="Female">Female</option>
                      
          </select>
        </div>
        <div class="col-sm-6">
             <select name="martial_status" id="" class="serach_relative">
             <option value="">Martial Status</option>
             <option value="Unmaried">Unmaried</option>
                    <option value="Widow Widower">Widow/Widower</option>
                    <option value="Media">Media</option>
                    <option value="Divorcee">Divorcee</option>
                    <option value="Seprated">Seprated</option>
                    <option value="Annulled">Annulled</option>
                    
          </select>
            </div>
        
        {{-- <div class="col-sm-3 add-margin">
          <select name="" id="" class="serach_relative">
             <option value="">Height to</option>
          </select>
        </div> --}}
        <div class="col-sm-6">
          <input type="hidden" name="search" value="{{ $search }}">
          <button type="submit" class="s_r_btn">Search</button>
        </div>
        </form>

         <form method="post" action="{{ url('save-search') }}">
        <div class="row">
          {{ csrf_field() }}
        <input type="hidden" name="link" value="{{ $save_search }}">
        {{-- <div class="col-md-6">
        <input type="text" required="" name="search_comment" class="form-control">
        </div> --}}
        <div class="col-md-6 col-xs-12 save-search-btn-container">
        <button class="btn btn-success save-search-btn">Save Search</button>
      </div>
     
      </form>
      </div>
        
        <div class="clearfix"></div>
        <hr class="pl-hr" />
      </div>
   </div>
   
    <h2 class='text-center'>Recently Joined</h2>
   <!-- <div class="well w">
      
   </div> -->

   <div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			
	
			<!-- Wrapper for slides -->

			<div class="carousel-inner">
          @if(count($recent))
          @foreach($recent as $key => $row)
				<div class="item @if($key==0) active @endif">
						<div class="card-container">
						<div class="row cf">
        <div id="card1" class="card four col">

           @if($row->image_name)
           <a href="{{ url('public-profile'.$row->id) }}" title="View Profile">
                     <div class="image-wrapper"> <img  src="{{ $user_assets }}/profile_image/{{ $row->image_name }}"></div>
                      </a>
                    

                       @else
                       
              {{-- <img src="" alt="picture"> --}}
              <a href="{{ url('public-profile',$row->id) }}" title="View Profile">
         <div class="image-wrapper"> <img src="{{ $user_assets }}/sunrise.jpg"></div>
                     </a>
                     
                    @endif

          {{-- <div class="image-wrapper"><img src="{{ $user_assets }}/default_slider.jpg" alt=""></div> --}}
          

          <h3 class="name">{{ $row->user_name }}</h3>
          <div class="info cf">
            <div class="key-value-container">
              <div class="key">Age</div>
              <div class="value">@php $age=date('Y')-$row->year @endphp
              {{ $age }}</div>
            </div>
            <div class="key-value-container">
              <div class="key">Gender</div>
              <div class="value">{{ $row->gender }}</div>
            </div>
            <div class="key-value-container">
              <div class="key">Marital status</div>
              <div class="value">{{ $row->martial_status }}</div>
            </div>
            <div class="key-value-container">
              <div class="key">Occupation</div>
              <div class="value">{{ $row->job }}</div>
            </div>
          </div>
          <div class="options">
            <ul>
              <li><object class='icon' data="{{ $user_assets }}/images/address.svg" type="image/svg+xml"></object>{{ $row->city_name }},
                {{ $row->country_name }}</li>
              <li><object class='icon' @if($row->gender=='Male') data="{{ $user_assets }}/images/user.svg" @else  data="{{ $user_assets }}/images/user-f.svg" @endif type="image/svg+xml"></object><a title="View Profile" href="{{ url('public-profile',$row->id) }}">View
                  profile</a></li>
            </ul>
								</div>
							</div>
						</div>
					</div>
				</div>
       
        @endforeach
        @endif
	
				</div>
	
			<!-- Left and right controls -->
			 <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
		</div>
 </div>
 <script type="text/javascript">
   $('.pl-top-selection').on('click' , function(){
    $('.pl-top-selection').removeClass('category-active')
    $(this).addClass('category-active');
   });


   $('.userserch').on('click' , function(){
    $('.pl-profile').removeClass('list-active')
    $(this).find('.pl-profile').addClass('list-active');
    // $('.userserch').removeClass('list-active')
    // $(this).addClass('list-active');
   });


   
 </script>
   <!-- div 3 column end -->

  </div>
</div>
</div>
</div>



@endsection
<script type="text/javascript">
  function country_change(sel)
{
  // alert();
        var country_id= sel.value;

               // alert(country_id);
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
        var state_id=sel.value;
               
                            document.getElementById("wait").style.display = "block";
                            $.post('{{ url('/get_city') }}' , {_token: '{{ csrf_token() }}' , state_id: state_id} , function(data)
                            {
                             
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

@push('css')
 <script type="text/javascript" src="{{ $user_assets }}/js/owl.carousel3.js"></script>
    <script>
  $(document).ready(function($) {
    $("#owl-example").owlCarousel();
  });</script>
<link rel="shortcut icon" href="{{ $user_assets }}/images/favicon.png">
    <link rel="stylesheet" href="{{ $user_assets }}/css/animate.css" />
<!-- bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ $user_assets }}/css/chat.css" />
<!-- et line icon -->
<link rel="stylesheet" href="{{ $user_assets }}/css/et-line-icons.css" />
<!-- font-awesome icon -->
{{-- <link rel="stylesheet" href="{{ $user_assets }}/css/font-awesome.min.css" /> --}}
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
  
 
<script type="text/javascript" src="{{ $user_assets }}/js/custom.js"></script>
<link rel="stylesheet" href="{{ $user_assets }}/css/custom.css" />


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
<!-- setting -->

@endpush

