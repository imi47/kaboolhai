@extends('user/user_master_layout1') 
@section('data') 
<div style="padding-top:86px;"></div>

  <link rel="stylesheet" href="{{ $user_assets }}/jquery.min2.js">
  <link rel="stylesheet" href="{{ $user_assets }}/css/owl.carousel2.css" />
   <link rel="stylesheet" href="{{ $user_assets }}/css/advance-profile.css" />

   <style type="text/css">
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
  .pl-top-selection {
    width: 100%;
    display: block;
    border: 1px solid #000;
    margin: 25px 0 25px 3%;
    padding: 10px 0;
    text-decoration: none;
    border-radius: 5px;
  }
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
    height: 280px;
    background-color: red;
    /*border-radius: 10px;*/
    box-shadow: 0 0 10px #ccc;
    margin-left: 3%;
    margin-bottom: 20px;
    position: relative;
  }
  .pl-profile img {
    width: 100%;
    height: 280px;
    /*border-radius: 10px;*/
  }
  .pl-profile-content {
    width: 100%;
    height: 280px;
    /*background-color: rgba(0,0,0,0.7);*/
    position: absolute;
    top: 0;
    /*border-radius: 10px;*/
  }
  .pl-content-top {
    width: 38px;
    height: 100px;
    float: right;
  }
  .pl-content-top-img {
    width: 35px !important;
    height: 30px !important;
    margin-top: 10px;
  }
  .pl-content-bottom {
    width: 100%;
    height: 156px;
    margin: 24px auto 0;
        padding-top: 12px;
    /*background-color: rgba(0,0,0,0.7);*/
    background-image:url('./public/user_assets/back.png');
    /*background-image:url(../dashbord/banner_background.jpg);*/
      /*background-image:url('../back.jpg');*/
    /*border-bottom-right-radius: 10px;
    border-bottom-left-radius: 10px;*/
  }
  .pl-list {
    list-style-type: none;
    margin-bottom: 10px;
    margin-left: 7.5%;
        line-height: 21px;
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
  }
  .pagination {
    display: inline-block;
}
.pagination a {
    color: #5a378c;
    font-size:18px;
    font-weight: bold;
    padding-bottom:4px;
    /*float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
    border: 1px solid #ddd;*/
}

.pagination a.active {
    color: #ed6c05;
    
}
/*.pagination a:hover:not(.active) {background-color: #ddd;}*/

   .bn {
    width: 100%;
    border-radius: 10px;
    border: 1px;
    height: 29px;
    background-color: #f47e2a;
    color: #ffffff;
    font-size: 14px;
}
.t
{
   color: black;
}
   </style>
   <div id="wait" style="display: none;"></div>
<div class="container-fluid" style="margin-top: 50px;">
  
  <div class="row">
    <div class="scroll">
      <div class="wrapper cf">
   
     
    <div class="col-md-9">
    <div class="well" style="background-color: #ffffff;border-radius:10px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);height:auto;">

      <div class="row">
        <div class="col-sm-12">
          <p class="pl-text-center pl-head">User Listing</p>
        </div>
      </div>

      <div class="row">
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
      </div>
     
       <div class="row">
        @if(!empty($user_data))
        @foreach($user_data as $row)
          <!-- first box -->
         <div class="col-sm-4">
           <div class="pl-profile">
            @if(!empty($row->image_name))

              <img style="width: 100%" src="{{ $user_assets }}/profile_image/{{ $row->image_name }}">
              @else

              <img src="{{ $user_assets }}/dp-img-2.png">
              @endif
              <div class="pl-profile-content">
                <div class="pl-content-top">
                  <img src="{{ $user_assets }}/shield.png" class="pl-content-top-img" width="30px" />
                </div>
                <div class="clearfix"></div>
                <div class="pl-content-bottom">
                  <ul class="pl-list">
                    <li><a href="{{ url('public-profile',$row->id) }}">{{$row->user_name}}</a></li>
                    <li>{{ \Carbon\Carbon::parse($row->last_login)->diffForHumans() }}</li>
                    @php
                    $a=$row->day.'-'.$row->month.'-'.$row->year;
                    $ag=date('d-m-y');
                    $age=$ag-$a;
                    @endphp
                    @if(!empty($row->height))
                    @php
                    $one = str_replace("ft","'",$row->height);
                    $two = str_replace('in','"', $one);
                    $foot = explode(" ", $two);
                   
                    @endphp

                    <li>{{$age}} yrs, {{$foot[0].' '.$foot[1]}}</li>
                    @else
                    <li>{{$age}} yrs
                    @endif
                  </li>
                    <li>{{$row->job}}</li>
                    <li>{{$row->language}}, {{ str_limit($row->sect_are,6) }}</li>
                   
                    <li>{{ str_limit($row->city_name,6) }}, {{$row->country_name}}</li>
                    <div class="clearfix"></div>
                  </ul>
                  <div class="pl-content-fotter pl-text-center">
                    <center> <img src="{{ $user_assets }}/call.png"></center>
                    <a>Contact</a>
                  </div>
                  <div class="pl-content-fotter pl-text-center">
                    <center><img src="{{ $user_assets }}/message.png"></center>
                    <a>Message</a>
                  </div>
                  <div class="pl-content-fotter pl-text-center">
                    <center><img src="{{ $user_assets }}/connect.jpg"></center>
                    <a>Connect</a>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
           </div>
         </div>
         @endforeach
         @endif
         
       </div>

       <div class="row">
         <div class="col-sm-12">
           <div class="pagination">
             {{ $user_data->links() }}
           </div>
         </div>
       </div>



      </div>
    </div>
       
       

<!-- div 3 column start -->
 <div class="col-md-3 content">

    <div class="well w" style="background-color:#ffffff;border-radius:10px;">
      <div class="row">
        <h2 class="qsh">Advance Search</h2>
        <div class="col-sm-12">
          <form method="get" action="{{ url('user-search') }}">
          <select name="loking_for" id="" class="form-control qss">
            <option value="">Looking For</option>
            <option value="Female">Bride</option>
            <option value="Male">Groom</option>
          </select>
        </div>
        <div class="col-sm-6">
          <select name="age_from" id="" class="form-control qs">
            <option value="">Age from</option>

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

        <div class="col-sm-6">
         <select name="age_to" id="" class="form-control qs">
            <option value="">Age to</option>

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

        <div class="col-sm-12">
          <select name="martial_status" id="" class="form-control qss">
            <option value="">Marital Status</option>
            <option value="Unmaried">Unmaried</option>
            <option value="Widow Widower">Widow Widower</option>
            <option value="Divorcee">Divorcee</option>
            <option value="Seprated">Seprated</option>
            <option value="Annulled">Annulled</option>
          </select>
        </div>

        <div class="col-sm-12">
          <select name="height_from" id="" class="form-control qs">
            <option value="">Height from</option>
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
        </div>

        <div class="col-sm-12">
          <select name="height_to" id="" class="form-control qs">
            <option value="">Height to</option>
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
        </div>

       {{--  <div class="col-sm-12">
          <select name="" id="" class="form-control qss">
            <option value="">Complexion</option>
            <option value="">Any</option>
            <option value="">Very Fair</option>
            <option value="">Fair</option>
            <option value="">Wheatish</option>
            <option value="">Dark</option>
          </select>
        </div>
 --}}
       {{--  <div class="col-sm-12">
          <select name="" id="" class="form-control qs">
            <option value="">Weight To</option>
          </select>
        </div>

        <div class="col-sm-12">
          <select name="" id="" class="form-control qs">
            <option value="">Weight From</option>
          </select>
        </div> --}}

       {{--  <div class="col-sm-12">
          <select name="" id="" class="form-control qss">
            <option value="">Physical Status</option>
            <option value="">Dosen't matter</option>
            <option value="">Normal</option>
            <option value="">Deaf/Dumb</option>
            <option value="">Blind</option>
            <option value="">Physically Challanged</option>
            <option value="">Mentally Challanged</option>
            <option value="">With other Disability</option>
          </select>
        </div> --}}

        <div class="col-sm-12">
          <input name="caste" placeholder="Cast" class="form-control qss">
        </div>

       {{--  <div class="col-sm-12">
          <select name="" id="" class="form-control qss">
            <option value="">Have Children</option>
            <option value="">Dosen't matter</option>
            <option value="">None</option>
            <option value="">One</option>
            <option value="">Two</option>
            <option value="">Three</option>
            <option value="">Four and Above</option>
          </select>
        </div> --}}

        <div class="col-sm-12">
          <select name="" id="" class="form-control qss">
            <option value="language">Mother Tongue</option>
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

         {{-- <div class="col-sm-12">
          <select name="" id="" class="form-control qss">
            <option value="">Resident Status</option>
            <option value="">Any</option>
            <option value="">Citizen</option>
            <option value="">Permanent Resident</option>
            <option value="">Work Permit</option>
            <option value="">Student Visa</option>
          </select>
        </div> --}}

        <div class="col-sm-12">
          <select name="religiousness" id="" class="form-control qss">
            <option value="">Religion</option>
            <option value="Very religious">Very religious</option>
                      <option value="Religious">Religious</option>
                       <option value="Not religious">Not religious</option>
                      <option value="Prefer not to say">Prefer not to say</option>
          </select>
        </div>

        <div class="col-sm-12">
          <select name="financial_status" id="" class="form-control qss">
            <option value="">Financial Status</option>
            <option value="Rich">Rich</option>
            <option value="Upper Middle Class">Upper Middle Class</option>
            <option value="Middle Class">Middle Class</option>
            <option value="Lower Upper Middle Class">Lower Upper Middle Class</option>
            <option value="">Lower Middle Class</option>
            <option value="Do not want to tell at this time">Do not want to tell at this time</option>
          </select>
        </div>

        <div class="col-sm-12">
          <select name="country_id" onchange="country_change(this)" id="" class="form-control qss">
            <option value="">Country</option>
            <option selected="" value="">Select country 
                            </option>
                            @foreach ($country as $row)
                              <option value="{{ $row->country_id }}">
                                {{ $row->country_name }}
                              </option>
                             @endforeach
          </select>
        </div>

        <div class="col-sm-12">
          <select name="state_id" id="state" onchange="state_change(this)" class="form-control qss">
            <option value="">State</option>
           
          </select>
        </div>

        <div class="col-sm-12">
          <select name="city_id" id="city" class="form-control qss">
            <option value="">City</option>
           
          </select>
        </div>

        <div class="col-sm-12">
          <select name="qualification" id="" class="form-control qss">
            <option value="">Education</option>
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

</optgroup>
          </select>
        </div>

        <div class="col-sm-12">
          <select name="job" id="" class="form-control qss">
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

        <div class="col-sm-12">
          <select name="" id="" class="form-control qss">
            <option value="">Employement Status</option>
            <option value="">Any</option>
            <option value="">Rich</option>
            <option value="">Upper Middle Class</option>
            <option value="">Middle Class</option>
            <option value="">Lower Middle Class</option>
            <option value="">Poor</option>
          </select>
        </div>

      {{--   <div class="col-sm-12">
          <select name="" id="" class="form-control qss">
            <option value="">Eating Habits</option>
            <option value="">Vegetarian</option>
            <option value="">Occasionally Non</option>
            <option value="">Eggetarian</option>
            <option value="">Non Veg</option>
          </select>
        </div> --}}

        <div class="col-sm-12">
          <select name="smoking" id="" class="form-control qss">
            <option value="">Smoking</option>
            <option value="Chain smoker">Chain smoker</option>
            <option value="Occasionally">Occasionally</option>
            <option value="Intend to quit">Intend to quit</option>
            <option value="sometimes">sometimes</option>
            <option value="never">never</option>
          </select>
        </div>
        {{ csrf_field() }}
        <div class="col-sm-12">
          <button type="submit" class="bn">Search Now</button>
        </div>
        </form>
      </div>
    </div>
          <!-- <div class="well w" style="background-color:#ffffff;border-radius:10px;">
      <div class="row">
        <div class="col-sm-12">
         <a href="{{ url('register') }}" class="menulists"><span><img src="{{ $user_assets }}/create_account_b.png" alt="" class="lmis"></span> Create Account</a> 
        </div>
        <div class="col-sm-12">
          <a href="{{ url('about-us') }}" class="menulists"><span><img src="{{ $user_assets }}/about_us_b.png" alt="" class="lmis"></span> About Us</a>
        </div>
        <div class="col-sm-12">

           <a href="{{ url('advance-search') }}" class="menulists"><span><img src="{{ $user_assets }}/find_match_b.png" alt="" class="lmis"></span> Find Match</a>
      
        </div>

         <div class="col-sm-12">
           <a href="" class="menulists"><span><img src="{{ $user_assets }}/our_policy_b.png" alt="" class="lmis"></span> Our Policy</a>
        
        </div>
        <div class="col-sm-12">
           <a href="{{ url('policy-privacy') }}" class="menulists"><span><img src="{{ $user_assets }}/privacy_b.png" alt="" class="lmis"></span> Privacy</a>
         
        </div>
        <div class="col-sm-12">
         <a href="" class="menulists"><span><img src="{{ $user_assets }}/blogs_b.png" alt="" class="lmis"></span> Blogs</a>
        </div>


         <div class="col-sm-12">
           <a href="{{ url('faqs') }}" class="menulists"><span><img src="{{ $user_assets }}/faqs_b.png" alt="" class="lmis"></span> FAQ's</a>
        
        </div>
        <div class="col-sm-12">
          <a href="" class="menulists"><span><img src="{{ $user_assets }}/our_partners_b.png" alt="" class="lmis"></span> Our Partners</a>
         
        </div>
        <div class="col-sm-12">
         <a href="{{ url('contact-us') }}" class="menulists"><span><img src="{{ $user_assets }}/contact_us_b.png" alt="" class="lmis"></span> Contact</a>
        </div>
      </div>
    </div>

   

    <div class="well w sidebar" id="" style="background-color:#f47e2a; border-radius:10px;">
      <div style="padding-bottom:0px;">
        <div class="row">
        <h4 class="qsh">Recently Joined</h4>
        </div>
        <div class="row">
          <img src="{{ $user_assets }}/sunrise.jpg" class="img-thumbnail">  
        </div>  
        <div class="row">
          
            <h4 class="qsun">Haider Ali</h4>
            <p class="tqsunn">It is pleasure for me that i am the member of Kaboolhai .... <a href="" style="color:blue;font-weight:bold;">View Profile</a></p>
          
        </div>
      </div>
    </div> --> 
   </div>
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
  
  <script type="text/javascript" src="{{ $user_assets }}/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="{{ $user_assets }}/js/custom.js"></script>
<link rel="stylesheet" href="{{ $user_assets }}/css/custom.css" />
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
<!-- setting -->
<script type="text/javascript" src="{{ asset('public') }}/js/chosen.jq.js"></script>
@endpush

