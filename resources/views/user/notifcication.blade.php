@extends('user/user_master_layout1') 
@section('data')

<style>
  
  .hdlist {
    line-height:400%;
  }

  #menu-div {
    margin-left: 0;
  }

.menulists {
  font-size: 16px;
}

.hdlist li {
     border-radius:5px;
     padding-left:5px;
   }

  .hdlist li:hover {
    background-color:#ed6c05;
  }

tr.dosrch th a {
  font-size:14px;
}

.navbar-default {
  height:unset;
}

.navbar-form button .glyphicon {
    top: 1px;
  }

  .navbar-form button {
    right: -4px;
    padding: 6px 11px !important;
}

   @media (max-width:991px) {
    /* #friends-dropdown, #messages-dropdown, #notifications-dropdown {
            margin-top:21px !important;
            margin-bottom:-21px !important;
        } */

      .searchcontainer button {
        margin-top:-56px !important;
        padding-top:15px;
    }

      .navbar-nav .dropdown .dropdown-toggle {
        padding-top: 11px !important;
        padding-bottom: 11px !important;
      }
   }

   @media (min-width:991px) {
    .searchcontainer button {
        margin-top:-56px !important;
        padding-top:15px;
      }

      .nav.navbar-nav {
        margin-right:0;
      }

      #logo-div {
        margin-right: -61px;
    }
}

@media (max-width:1300px) {
    .navbar-form button {
      right: -17px;
    }
  }

  @media (max-width:520px) {
    .navbar-form button {
      padding: 6px 3px!important;
    }
  }

  @media (max-width:320px) {
    .searchcontainer button {
      margin-top:-44px !important;
    }
  }

  footer section .container {
    margin-top:20px;
  }
</style>
<div style="padding-top:90px;"></div>
<div class="container-fluid">
 <div class="col-md-3 hidden-sm hidden-xs">
        <div class="well" style="box-shadow: none;">
          @include('user/side_bar')
        </div>
      </div>
  <div class="col-md-9">
      <div class="panel panel-default">
    <div class="panel-heading text-center"><h3>Notifications</h3>
    </div>
     </div>
     
       
       
         <div class="col-md-12">
           <div class="notify_area">
              <!-- start notif -->
              @if(!empty($notification))
              @foreach($notification as $row)
              <a href="{{ url('public-profile',$row->sender_id) }}">
             <div class="notify_blok">
               <div class="pic_area">
                <div class="img_box">

                  @if(!empty($row->photo->image))
                  <img src="{{ $user_assets }}/my_photo/{{ $row->photo->image }}" class="img-circle" alt="" width="100%" >
                 
                      @elseif($row->profile_image)
                                      <img src="{{ $user_assets }}/profile_image/{{ $row->image_name }}" style="width: 45px; height: 45px; border-radius:100px; ">
                      @else
                      <img src="{{ $user_assets }}/sunrise.jpg" style="width: 45px; height: 45px; border-radius:100px; ">
                                       @endif
                </div>  
               </div>
               <div class="notify_ar">
                 <div class="box_msg">
                 <strong>  {{ $row->user->user_name}} </strong> {{$row->notification_type}}
                 </div>
                 <div class="box_time">
                  <span class='time'> {{ $row->created_at }} </span>
                 </div>
                 </a>
               </div>
             </div>
             @endforeach
             @endif

            <!-- end notif -->

            <!-- start notif -->
            
            <!-- end notif -->
           </div>
         </div>
       
    </div>
    
  </div>
  
</div>


</div>


@endsection

@push('css')
<link rel="stylesheet" href="{{ $user_assets }}/css/animate.css" />
<!-- bootstrap -->
<link rel="stylesheet" href="{{ $user_assets }}/css/chat.css" />
<!-- et line icon -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ $user_assets }}/css/et-line-icons.css" />
<!-- font-awesome icon -->
<link rel="stylesheet" href="{{ $user_assets }}/css/font-awesome.min.css" />
<!-- revolution slider -->
<link rel="stylesheet" href="{{ $user_assets }}/css/extralayers.css" />
<link rel="stylesheet" href="{{ $user_assets }}/css/settings.css" />
<!-- magnific popup -->
<link rel="stylesheet" href="{{ $user_assets }}/css/magnific-popup.css" />
<!-- owl carousel -->
<link rel="stylesheet" href="{{ $user_assets }}/css/owl.theme.default.min.css" />
<link rel="stylesheet" href="{{ $user_assets }}/css/owl.carousels.css" />
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
  

{{-- <script type="text/javascript" src="{{ $user_assets }}/js/custom.js"></script> --}}
<link rel="stylesheet" href="{{ $user_assets }}/css/custom.css" />
<script src="{{ $user_assets }}/js/dropzone.js"></script>
 <link rel="stylesheet" href="{{ $user_assets }}/css/dropzone.css">
  {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   
  {{-- <link rel="stylesheet" href="{{ $user_assets }}/hover-min2.css"> --}}
  <link rel="stylesheet" href="{{ $user_assets }}/css/style3.css"/>

  <link rel="stylesheet" href="{{ $user_assets }}/css/owl.carousel2.css" />
 
@endpush      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
</body>
</html>