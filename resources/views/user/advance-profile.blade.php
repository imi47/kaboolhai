@extends('user/user_master_layout1')
@section('data')

<style>




  @media (max-width:716px) {
  .btn-group {
    display:block !important;
    min-width:100% !important;
    margin-right:30px !important;
  }

   .btn-group #pro, .btn-group #fam, .btn-group #par {
    min-width:100% !important;
    margin-bottom:20px;
  }
}

@media (max-width:768px) {
  .btnnarea  {
    margin-bottom:150px !important;
  }

  #city, #state1, #city1, select[name='job'] {
    width:100% !important;
  }

  #caste-input {
    width:100% !important;
  }

  /* .smaller-select {
    min-width:40px !important;
  } */

  select[name="religiousness"] {
    width:100% !important;
  }

  #search-btn, #save-search-btn {
    width:100%;
  }

  #search-btn {
    margin-bottom:15px;
  }
}

 .btn-group #pro, .btn-group #fam, .btn-group #par{
  width:85% !important;
}

@media (min-width:769px) {
  #state {
    width: 323px;
  }

  .city-select-container {
    width:auto;
  }
}
 
</style>

<div style="padding-top:90px;"></div>

{{--
<link rel="stylesheet" href="{{ $user_assets }}/jquery.min2.js"> --}}
{{--
<link rel="stylesheet" href="{{ $user_assets }}/css/owl.carousel2.css" /> --}}
<link rel="stylesheet" href="{{ $user_assets }}/css/advance-profile.css" />
<div class="container-fluid"">
     <div id=" wait" style="display: none;"></div>
<div class="row">
  <div class="scroll">
    <div class="wrapper cf">
      <div class="col-md-3 content">

        <div class="well w">
          <div class="row">
            <form method="get" action="{{ url('user-search') }}">
              <h2 class="qsh">Quick Search</h2>
              <div class="col-sm-12">
                <label>Country</label>
                <select id="country" name="country_id" class="form-control">
                  <option selected="" value="">Select country
                  </option>
                  @foreach ($country as $row)
                  <option value="{{ $row->country_id }}">
                    {{ $row->country_name }}
                  </option>
                  @endforeach
                </select>
              </div>
              <div class="col-sm-6">


                <label>Age from</label>
                <select name="age_from" id="" class="form-control qs">
                  <option value="">Select</option>

                  @for($i = date('y'); $i <= date('y')+82 ; $i++) <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
              </div>
              <div class="col-sm-6">
                <label>Age to</label>
                <select name="age_to" id="" class="form-control qs">
                  <option value="">Select</option>
                  @for($i = date('y')+82; $i >= date('y'); $i--)
                  <option value="{{ $i }}">{{ $i }}</option>
                  @endfor
                </select>
              </div>
              <div class="col-sm-12">
                <button class="bn">Search Now</button>
              </div>
          </div>
        </div>
        </form>
        <div class="well w" style="background-color:#ffffff;border-radius:10px;">
          @include('user/side_bar')
        </div>


        <div class="well w sidebar" id="" style="background-color:#f47e2a; border-radius:10px;">
          <div style="padding-bottom:0px;">
            <div class="row">
              <h4 class="qsh">Recently Joined</h4>
            </div>
            <div class="row">
              <section class="carousel-default">
                <div id="carousel-default" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-default" data-slide-to="0" class=""></li>
                    <li data-target="#carousel-default" data-slide-to="1" class=""></li>
                    <li data-target="#carousel-default" data-slide-to="2" class="active"></li>
                  </ol>
                  <div class="carousel-inner" role="listbox">
                    <!-- NOTE: Bootstrap v4 changes class name to carousel-item -->
                    @if(!empty($recent))
                    @if(count($recent))
                    @foreach($recent as $key =>$recnt_slid)
                    <div @if($key==0) class="item active" @else class="item" @endif>
                      <a href="{{ url('public-profile',$recnt_slid->id) }}" title="{{ $recnt_slid->user_name }} view public profile">
                        @if($recnt_slid->image)

                        <img src="{{ $user_assets }}/my_photo/{{ $recnt_slid->image }}" class="img-thumbnail" style="width: 100%; height: 200px;">

                        @elseif($recnt_slid->image_name)
                        <img src="{{ $user_assets }}/profile_image/{{ $recnt_slid->image_name }}" class="img-thumbnail"
                          style="width: 100%; height: 200px;">
                        @else

                        <img src="{{ $user_assets }}/default_slider.jpg" class="img-thumbnail" style="width: 100%; height: 200px;">
                        @endif

                        <div class="carousel-caption">
                          <h2>{{ $recnt_slid->user_name }}</h2>
                          <h3>{{ $recnt_slid->gender }}</h3>
                        </div>

                        <br><br><br><br>
                        {{ $recnt_slid->country_name.' '.$recnt_slid->city_name.' '.$recnt_slid->martial_status }}
                        <span style="color: blue;"><b>View Profile</b></span>
                      </a>
                    </div>
                    @endforeach
                    @else

                    <div class="item active">


                      <img src="{{ $user_assets }}/default_slider.jpg" class="img-thumbnail" style="width: 100%; height: 200px;">

                      {{-- <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/158072/hearthand.jpg" alt="Third slide">
                      --}}
                      <div class="carousel-caption">
                        <h2>Recent User</h2>
                        <h3>Not Available</h3>

                      </div>

                    </div>
                    @endif
                    @endif
                  </div>
                  <a class="left carousel-control" href="#carousel-default" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#carousel-default" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </section>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-9">
    <div class="well" style="background-color: #ffffff;border-radius:10px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">


      <div class="btnnarea">
        <div class="row">
          <div class="col-lg-12 col-sm-12">

            <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
              <div class="btn-group" role="group">
                <a href="" onclick="return profile()">
                  <button id="pro" style="margin-top:0px;height:40px;width:250px;border-radius:10px !important; background-color:#4ccee8;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0);"
                    type="button" id="stars" class="btn abc" href="#tab1" data-toggle="tab">
                    <div style="color: white">Basic Search</div>
                  </button>
                </a>
                </a>
              </div>


              <div class="btn-group" role="group">
                <a href="" onclick="return family()">
                  <button id="fam" style="margin-top:0px;height:40px;width:250px;border-radius:10px !important;background-color:#5a378c;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0);"
                    type="button" id="following" class="btn abc" href="#tab3" data-toggle="tab">
                    <div><span style="color:#ffffff;">Advanced Search</span></div>
                  </button>
                </a>
              </div>
              <div class="btn-group" role="group">
                <a href="" onclick="return partner()">
                  <button id="par" style="margin-top:0px;height:40px;width:250px;border-radius:10px !important;background-color:#5a378c;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0);"
                    type="button" id="favorites" class="btn abc" href="#tab2" data-toggle="tab">
                    <div><span style="color:#ffffff;">Keyword Search</span></div>
                  </button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="profile">
        <form method="get" action="{{ url('user-search') }}" class="form-inline">
          {{ csrf_field() }}
          <div class="row">
            <div class="col-md-3">
              <label>Looking for</label>

            </div>
            <div class="col-md-3">
              <div class="form-group">

                {{-- <label><input type="radio" name="optradio">Option 1</label> --}}
                <input type="radio" value="Female" name="loking_for"> Bride
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <input type="radio" value="Male" name="loking_for"> Groom

              </div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-sm-3">
              <label>Country</label>
            </div>
            <div class="col-sm-5">
              <div class="form-group">
                <select id="country" onchange="country_change(this)" name="country_id" class="form-control">
                  <option selected="" value="">Select country
                  </option>
                  @foreach ($country as $row)
                  <option value="{{ $row->country_id }}">
                    {{ $row->country_name }}
                  </option>
                  @endforeach
                </select>
              </div>

            </div>

          </div>
          <div class="row">
            <div class="col-sm-3">
              <label>State</label>
            </div>
            <div class="col-sm-5">
              <div class="form-group" id='select-container'>
                <select selected="selected" id="state" onchange="state_change(this)" name="state_id" class="form-control">
                  <option value="">Select</option>
                </select>

              </div>

            </div>
            <div class="col-sm-4"></div>
          </div>
          <div class="row">
            <div class="col-xs-3">
              <label>City</label>
            </div>
            <div class="col-xs-12 city-select-container" id='select-container'>
              <select name="city_id" id="city" selected="selected" class="form-control" style="width: 323px;">
                <option value="">Select</option>
              </select>

            </div>
          </div>

          <div class="row">
            <div class="col-xs-3">
              <label>Age</label>
            </div>
            <div class="col-xs-3 col-md-2 col-lg-2" id='select-container'>
              <select name="age_from" class="form-control smaller-select">
                <option value="" class='to-change'>Select</option>

                @for($i = date('y'); $i <= date('y')+82 ; $i++) <option value="{{ $i }}">{{ $i }}</option>
                  @endfor
              </select>

            </div>
            <div class="col-xs-1 text-center">
              To
            </div>
            <div class="col-xs-3 col-md-2 col-lg-2" id='select-container'>
              <select name="age_to" class="form-control smaller-select">
                <option value="" class='to-change'>Select</option>
                @for($i = date('y')+82; $i >= date('y'); $i--)
                <option value="{{ $i }}">{{ $i }}</option>
                @endfor
              </select>

            </div>
          </div>
          <div class="row">

            <div class="col-sm-3">
              <label>Martial Status</label>

            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <input type="radio" value="Unmaried" name="martial_status"> Unmaried
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <input type="radio" value="Widow Widower" name="martial_status"> Widow/Widower
              </div>
            </div>

            <div class="col-sm-3">
              <div class="form-group">
                <input type="radio" value="Divorcee" name="martial_status"> Divorcee
              </div>
            </div>

            <div class="col-sm-3"></div>

            <div class="col-sm-3">
              <div class="form-group">
                <input type="radio" value="Seprated" name="martial_status"> Seprated
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <input type="radio" value="Annulled" name="martial_status"> Annulled
              </div>
            </div>

          </div>

          <br>
          <div class="row">
            <div class="col-xs-3">
              <label>Height</label>
            </div>
            <div class="col-xs-3">
              <select name="height_from" class="form-control smaller-select">

                <option value="" class='to-change'>Select</option>
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
            <div class="col-xs-1 text-center">
              To
            </div>
            <div class="col-xs-3">
              <select name="height_to" class="form-control smaller-select">


                <option value="" class='to-change'>Select</option>
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
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
              <button class="btn btn-success" id='search-btn'>Search</button>

            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 ">
              <button class="btn btn-success" id='save-search-btn'>Save search</button>
            </div>
          </div>
        </form>
      </div>
      <div id="family" style="display: none;">

        <form method="get" action="{{ url('user-search') }}" class="form-inline">
          {{ csrf_field() }}
          <div class="row">
            <div class="col-md-3">
              <label>Looking for</label>

            </div>
            <div class="col-md-3">
              <div class="form-group">

                {{-- <label><input type="radio" name="optradio">Option 1</label> --}}
                <input type="radio" value="Female" name="loking_for"> Bride
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <input type="radio" value="Male" name="loking_for"> Groom

              </div>
            </div>
          </div>
          <br>


          <div class="row">
            <div class="col-xs-3">
              <label>Age</label>
            </div>
            <div class="col-xs-3 col-sm-2 col-md-2 col-lg-2">
              <select name="age_from" class="form-control smaller-select">
                <option class='to-change' value="">Select</option>

                @for($i = date('y'); $i <= date('y')+82 ; $i++) <option value="{{ $i }}">{{ $i }}</option>
                  @endfor
              </select>

            </div>
            <div class="col-xs-1 text-center">
              To
            </div>
            <div class="col-xs-3 col-sm-2 col-md-2 col-lg-2">
              <select name="age_to" class="form-control smaller-select">
                <option value="" class='to-change'>Select</option>
                @for($i = date('y')+82; $i >= date('y'); $i--)
                <option value="{{ $i }}">{{ $i }}</option>
                @endfor
              </select>

            </div>
          </div>
          <div class="row">

            <div class="col-md-3">
              <label>Martial Status</label>

            </div>
            <div class="col-md-3">
              <div class="form-group">
                <input type="radio" value="Unmaried" name="martial_status"> Unmaried
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <input type="radio" value="Widow Widower" name="martial_status"> Widow/Widower
              </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
                <input type="radio" value="Divorcee" name="martial_status"> Divorcee
              </div>
            </div>

            <div class="col-md-3"></div>

            <div class="col-md-3">
              <div class="form-group">
                <input type="radio" value="Seprated" name="martial_status"> Seprated
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <input type="radio" value="Annulled" name="martial_status"> Annulled
              </div>
            </div>

          </div>

          <br>


          <div class="row">
            <div class="col-xs-3">
              <label>Height</label>
            </div>
            <div class="col-xs-3">
              <select name="height_from" class="form-control smaller-select">
                <option class='to-change' value="">Select</option>

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
            <div class="col-xs-1 text-center">
              To
            </div>
            <div class="col-xs-3">
              <select name="height_to" class="form-control smaller-select">


                <option class='to-change' value="">Select</option>
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
          </div>



          <div class="row">
            <div class="col-xs-3">
              <label>Caste</label>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
              <input type="text" name="caste" placeholder="Caste" class="form-control" id='caste-input' style="width: 340px;">



            </div>
          </div>
          {{-- <div class="row">
            <div class="col-xs-3">
              <label>Have Children</label>
            </div>
            <div class="col-xs-3">
              <input type="checkbox" name=""> Doesn't matter
            </div>
            <div class="col-xs-3">
              <input type="checkbox" name=""> None
            </div>
            <div class="col-xs-3">
              <input type="checkbox" name=""> One
            </div>
            <div class="col-xs-3" style="margin: 15px 0px;">
              <input type="checkbox" name=""> Two
            </div>
            <div class="col-xs-3" style="margin: 15px 0px;">
              <input type="checkbox" name=""> Three
            </div>
            <div class="col-xs-3" style="margin: 15px 0px;">
              <input type="checkbox" name=""> Four and above
            </div>



          </div> --}}
          <div class="row">
            <div class="col-xs-3">
              <label>Mother Tongue</label>
            </div>
            <div class="col-xs-9">
              <select name="language" class="form-control">
                <option value="">Select</option>
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
          </div>
          {{-- <div class="row">
            <div class="col-xs-3">
              <label>Resident Status</label>
            </div>
            <div class="col-xs-3">
              <input type="radio" name=""> Any
            </div>
            <div class="col-xs-3">
              <input type="radio" name=""> Citizen
            </div>
            <div class="col-xs-3">
              <input type="radio" name=""> Permanent Resident
            </div>
            <div class="col-xs-3" style="margin: 15px 0px;">
              <input type="radio" name=""> Work Permit
            </div>
            <div class="col-xs-3" style="margin: 15px 0px;">
              <input type="radio" name=""> Student Visa
            </div>



          </div> --}}
          <div class="row">
            <div class="col-xs-3">
              <label>Religion</label>
            </div>
            <div class="col-xs-9">
              <select name="religiousness" class="form-control" style="width: 340px;">
                <option value="">Please select..</option>
                <option value="Very religious">Very religious</option>
                <option value="Religious">Religious</option>
                <option value="Not religious">Not religious</option>
                <option value="Prefer not to say">Prefer not to say</option>

              </select>

            </div>
          </div>

          <div class="row">
            <div class="col-md-3">
              <label>Financial Status</label>

            </div>
            <div class="col-md-3">
              <div class="form-group">

                {{-- <label><input type="radio" name="optradio">Option 1</label> --}}
                <input type="radio" value="Rich" name="financial_status"> Rich
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <input type="radio" value="Upper Middle Class" name="financial_status"> Upper Middle Class

              </div>
            </div>


            <div class="col-md-3">
              <div class="form-group">

                {{-- <label><input type="radio" name="optradio">Option 1</label> --}}
                <input type="radio" value="Middle Class" name="financial_status"> Middle Class
              </div>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-3">
              <div class="form-group">
                <input type="radio" value="Lower Upper Middle Class" name="financial_status"> Lower Upper Middle Class

              </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
                <input type="radio" value="Do not want to tell at this time" name="financial_status"> Do not want to
                tell at this time

              </div>
            </div>
          </div>
          <br>


          <h3 style="margin: 20px 0px;" class="box_header_heading patti"><img class="border" src="{{ $user_assets }}/icons/1st-location.png">Location
            Detail</h3>
          <div class="row">
            <div class="col-xs-3">
              <label>Country</label>
            </div>
            <div class="col-xs-9 col-sm-5 col-md-5 col-lg-5">
              <select id="country1" onchange="country_change1(this)" name="country_id" class="form-control">
                <option selected="" value="">Select country
                </option>
                @foreach ($country as $row)
                <option value="{{ $row->country_id }}">
                  {{ $row->country_name }}
                </option>
                @endforeach
              </select>

            </div>
          </div>

          <div class="row">
            <div class="col-xs-3">
              <label>State</label>
            </div>
            <div class="col-xs-9 col-sm-5 col-md-5 col-lg-5">
              <select selected="selected" id="state1" onchange="state_change1(this)" name="state_id" class="form-control"
                style="width: 323px;">
                <option value="">Select</option>
              </select>

            </div>
          </div>
          <div class="row">
            <div class="col-xs-3">
              <label>City</label>
            </div>
            <div class="col-xs-9 col-sm-5 col-md-5 col-lg-5">
              <select name="city_id" id="city1" selected="selected" class="form-control" style="width: 323px;">
                <option value="">Select</option>
              </select>

            </div>
          </div>
          <h3 style="margin: 20px 0px;" class="box_header_heading patti"><img class="border" src="{{ $user_assets }}/icons/education.png">
            Education and Occupation</h3>

          <div class="row">
            <div class="col-xs-3">
              <label>Education</label>
            </div>
            <div class="col-xs-9 col-sm-6 col-md-6 col-lg-6">
              <select name="qualification" class="form-control">
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
                  <option value='Company Secretary (CS)' S>Company Secretary (CS)</option>
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
          </div>
          <div class="row">
            <div class="col-xs-3">
              <label>Occupation</label>
            </div>
            <div class="col-xs-9 col-sm-6 col-md-6 col-lg-6">
              <select name="job" class="form-control" style="width: 315px;">
                <option value="">--Select--</option>
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
          </div>
          {{-- <div class="row">
            <div class="col-xs-3">
              <label>Employement Status</label>
            </div>
            <div class="col-xs-6">
              <select class="form-control">
                <option>Part time</option>
                <option>Full time</option>

              </select>

            </div>
          </div> --}}

          <h3 style="margin: 20px 0px;" class="box_header_heading patti"><img class="border" src="{{ $user_assets }}/icons/habits.png">
            Habits</h3>


          {{-- <div class="row">
            <div class="col-xs-3">
              <label>Habits</label>
            </div>
            <div class="col-xs-6">
              <select class="form-control">
                <option value="Dose not matter">Dose not matter</option>
                <option>Occasionally Non</option>
                <option value="Veg">Veg</option>
                <option>Non veg</option>

              </select>

            </div>
          </div> --}}

          <div class="row">
            <div class="col-md-3">
              <label>Smoking</label>

            </div>
            <div class="col-md-3">
              <div class="form-group">

                {{-- <label><input type="radio" name="optradio">Option 1</label> --}}
                <input type="radio" value="Chain smoker" name="smoking"> Chain smoker
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <input type="radio" value="Occasionally" name="smoking"> Occasionally Middle Class

              </div>
            </div>


            <div class="col-md-3">
              <div class="form-group">

                {{-- <label><input type="radio" name="optradio">Option 1</label> --}}
                <input type="radio" value="Intend to quit" name="smoking"> Intend to quit
              </div>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-3">
              <div class="form-group">
                <input type="radio" value="sometimes" name="smoking"> sometimes

              </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
                <input type="radio" value="Never"> Never

              </div>
            </div>
          </div>
          <br>




          <div class="row">
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
              <button class="btn btn-success" id='search-btn'>Search</button>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
              <button class="btn btn-success" id='save-search-btn'>Save search</button>
            </div>
          </div>
      </div>
      </form>

      <div style="display: none;" id="partner">
        <form method="get" action="{{ url('user-search') }}" class="form-inline">
          {{ csrf_field() }}

          <div class="row">
            <div class="col-xs-3">
              <label>Keyword
                (Eg: Haider)</label>
            </div>
            <div class="col-xs-9 col-sm-5 col-md-5 col-lg-5">
              <input type="text" name="user_name" placeholder="User Name" class="form-control" style="width: 323px;">



            </div>
          </div>

          <div class="row">
            <div class="col-xs-3">
              <label>Age</label>
            </div>
            <div class="col-xs-3 col-sm-2 col-md-2 col-lg-2">
              <select name="age_from" class="form-control smaller-select" style="width: 223px;">
                <option class='to-change'value=""></option>

                @for($i = date('y'); $i <= date('y')+82 ; $i++) <option value="{{ $i }}">{{ $i }}</option>
                  @endfor
              </select>

            </div>
            <div class="col-xs-1 text-center">
              To
            </div>
            <div class="col-xs-3 col-sm-2 col-md-2 col-lg-2">
              <select name="age_to" class="form-control smaller-select" style="width: 223px;">
                <option class='to-change' value="">Select</option>
                @for($i = date('y')+82; $i >= date('y'); $i--)
                <option value="{{ $i }}">{{ $i }}</option>
                @endfor
              </select>

            </div>
          </div>


          <div class="row">
            <div class="col-md-3">
              <label>Looking for</label>

            </div>
            <div class="col-md-3">
              <div class="form-group">

                {{-- <label><input type="radio" name="optradio">Option 1</label> --}}
                <input type="radio" value="Female" name="loking_for"> Bride
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <input type="radio" value="Male" name="loking_for"> Groom

              </div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-xs-3">
              <label>Country</label>
            </div>
            <div class="col-xs-9 col-sm-5 col-md-5 col-lg-5">
              <select id="country" onchange="country_change2(this)" name="country_id" class="form-control">
                <option selected="" value="">Select country
                </option>
                @foreach ($country as $row)
                <option value="{{ $row->country_id }}">
                  {{ $row->country_name }}
                </option>
                @endforeach
              </select>

            </div>
          </div>

          <div class="row">
            <div class="col-xs-3">
              <label>State</label>
            </div>
            <div class="col-xs-9 col-sm-5 col-md-5 col-lg-5">
              <select selected="selected" id="state2" onchange="state_change2(this)" name="state_id" class="form-control"
                style="width: 323px;">
                <option value="">Select</option>
              </select>

            </div>
          </div>
          <div class="row">
            <div class="col-xs-3">
              <label>City</label>
            </div>
            <div class="col-xs-9 col-sm-5 col-md-5 col-lg-5">
              <select name="city_id" id="city2" selected="selected" class="form-control" style="width: 323px;">
                <option value="">Select</option>
              </select>

            </div>
          </div>


          <div class="row">
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
              <button type="submit" class="btn btn-success" id='search-btn'>Search</button>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
              <a href="#" type="submit" class="btn btn-success" id='save-search-btn' data-toggle="modal" data-target="#loginmodal">Save
                search</a>
            </div>
          </div>

        </form>


      </div>

    </div>
  </div>

</div>
</div>
</div>



</div>
</div>
</div>
</div>

<div class="modal fadeInDown" id="loginmodal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
  aria-hidden="false">

  <div class="modal-dialog modal-md" style="margin-top: 100px;">
    <div class="modal-content">

      <div class="modal-header">
        <h3>Log in</h3>
      </div>
      <div class="modal-body">

        <div class="row">

          <form class="form-inline" method="post" action="{{ url('dologin') }}">
            {{ csrf_field() }}
            <div class="col-md-6">

              <input type="text" placeholder="Enter Your Email" name="email" class="form-control">
            </div>
            <div class="col-md-6">

              <input type="password" name="password" placeholder="password" class="form-control">
            </div>
        </div>

      </div>
      <div class="modal-footer">
        <div class="col-sm-12">
          <a href="{{ url('register') }}" class="btn btn-success">Sign Up</a>
          <button type="submit" class="btn btn-success">Login</button>
          </form>
        </div>
      </div>

    </div>
  </div>
</div>

<script type="text/javascript">
  // alert('hi');
  // document.querySelector('.smaller-select option').innerHTML = 'changed';

  mq = window.matchMedia("(max-width: 540px)");

  mq.addListener(mediaQueryResponse) // attach listener function to listen in on state changes so a page //refresh will not be required

  // search option will stay in the same line in tablet mode 
  function mediaQueryResponse(mq) {

    if (mq.matches) {
      // for(i=0; i<=4; i++)
      $('.smaller-select option.to-change').text('');
    } else {
      // for(i=0; i<=4; i++)
      $('.smaller-select option.to-change').text('Select');
    }
  }
  mediaQueryResponse(mq);


  function profile() {
    $(".abc").css("background-color", "#5a378c");
    $('#profile').show(90);
    $('#family').hide(90);
    $('#partner').hide(90);
    $("#pro").css("background-color", "#4ccee8");
  }

  function family() {
    $(".abc").css("background-color", "#5a378c");
    $('#profile').hide(90);
    $('#family').show(90);
    $('#partner').hide(90);
    $("#fam").css("background-color", "#4ccee8");




  }

  function partner() {
    $(".abc").css("background-color", "#5a378c");
    $('#profile').hide(90);
    $('#family').hide(90);
    $('#partner').show(90);
    $("#par").css("background-color", "#4ccee8");

  }


  function country_change(sel) {
    // alert();
    var country_id = sel.value;

    // alert(country_id);
    document.getElementById("wait").style.display = "block";

    $.post('{{ url(' / get_state ') }}', {
      _token: '{{ csrf_token() }}',
      country_id: country_id
    }, function (data) {

      document.getElementById("wait").style.display = "none"
      response = $.parseJSON(data);

      $('#state').html(response.states);

    });
  }

  function state_change(sel) {
    var state_id = sel.value;

    document.getElementById("wait").style.display = "block";
    $.post('{{ url(' / get_city ') }}', {
      _token: '{{ csrf_token() }}',
      state_id: state_id
    }, function (data) {

      document.getElementById("wait").style.display = "none";
      $('#city').html(data);
    });

  }


  function country_change1(sel) {
    // alert();
    var country_id = sel.value;


    document.getElementById("wait").style.display = "block";

    $.post('{{ url(' / get_state ') }}', {
      _token: '{{ csrf_token() }}',
      country_id: country_id
    }, function (data) {

      document.getElementById("wait").style.display = "none"
      response = $.parseJSON(data);

      $('#state1').html(response.states);

    });
  }

  function state_change1(sel) {
    var state_id = sel.value;

    document.getElementById("wait").style.display = "block";
    $.post('{{ url(' / get_city ') }}', {
      _token: '{{ csrf_token() }}',
      state_id: state_id
    }, function (data) {

      document.getElementById("wait").style.display = "none";
      $('#city1').html(data);
    });

  }

  function country_change2(sel) {
    // alert();
    var country_id = sel.value;

    // alert(country_id);
    document.getElementById("wait").style.display = "block";

    $.post('{{ url(' / get_state ') }}', {
      _token: '{{ csrf_token() }}',
      country_id: country_id
    }, function (data) {

      document.getElementById("wait").style.display = "none"
      response = $.parseJSON(data);

      $('#state2').html(response.states);

    });
  }

  function state_change2(sel) {
    var state_id = sel.value;

    document.getElementById("wait").style.display = "block";
    $.post('{{ url(' / get_city ') }}', {
      _token: '{{ csrf_token() }}',
      state_id: state_id
    }, function (data) {

      document.getElementById("wait").style.display = "none";
      $('#city2').html(data);
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
    background: url('{{ $user_assets }}/loading.gif') 50% 50% no-repeat rgba(249, 249, 249, 0.7);
    background-size: 150px 150px;
  }
</style>

@endsection

@push('css')
{{-- <script type="text/javascript" src="{{ $user_assets }}/js/owl.carousel3.js"></script> --}}
<script>
  $(document).ready(function ($) {
    $("#owl-example").owlCarousel();
  });
</script>
<link rel="shortcut icon" href="{{ $user_assets }}/images/favicon.png">
<link rel="stylesheet" href="{{ $user_assets }}/css/animate.css" />
<!-- bootstrap -->
{{--
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --}}
{{--
<link rel="stylesheet" href="{{ $user_assets }}/css/bootstrap.css" /> --}}
<!-- et line icon -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ $user_assets }}/css/et-line-icons.css" />
<!-- font-awesome icon -->
<link rel="stylesheet" href="{{ $user_assets }}/css/font-awesome.min.css" />
<!-- revolution slider -->
{{--
<link rel="stylesheet" href="{{ $user_assets }}/css/extralayers.css" /> --}}
<link rel="stylesheet" href="{{ $user_assets }}/css/chat.css" />
<!-- magnific popup -->
<link rel="stylesheet" href="{{ $user_assets }}/css/magnific-popup.css" />
<!-- owl carousel -->
<link rel="stylesheet" href="{{ $user_assets }}/css/owl.carousel.css" />
{{--
<link rel="stylesheet" href="{{ $user_assets }}/css/owl.transitions.css" /> --}}
{{--
<link rel="stylesheet" href="{{ $user_assets }}/css/full-slider.css" /> --}}
<!-- text animation -->
{{--
<link rel="stylesheet" href="{{ $user_assets }}/css/text-effect.css" /> --}}
<!-- hamburger menu  -->
<link rel="stylesheet" href="{{ $user_assets }}/css/menu-hamburger.css" />
<!-- common -->
<link rel="stylesheet" href="{{ $user_assets }}/css/style.css" />

<!-- responsive -->
<link rel="stylesheet" href="{{ $user_assets }}/css/responsive.css" />

{{-- <script type="text/javascript" src="{{ $user_assets }}/js/jquery-2.1.1.min.js"></script> --}}
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
<script type="text/javascript" src="{{ asset('public') }}/js/chosen.jq.js"></script>
@endpush