@extends('user/user_master_layout1') 
@section('data')
<style type="text/css">
  .message-wraper {
    overflow-x:hidden;
  }

  .hdlist {
    line-height:400%;
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

  footer section .container {
    margin-top:30px;
  }

  .navbar-form button .glyphicon {
    top: 1px;
  }

  .navbar-form button {
    right: -4px;
    padding: 6px 11px !important;
}

  tr.dosrch th a {
    font-size:14px;
  }

  .message-wraper .row {
    margin:0;
  }

  .container-1 {
    border: 2px solid #dedede;
    background-color: #f1f1f1;
    border-radius: 5px;
    padding: 20px;
    margin: 10px 0;
}



.container-1::after {
    content: "";
    clear: both;
    display: table;
}

.container-1 img {
    float: left;
    max-width: 60px;
    width: 100%;
    margin-right: 20px;
    border-radius: 50%;
}

.container-1 img.right {
    float: right;
    margin-left: 20px;
    margin-right:0;
}

.time-right {
    float: right;
    color: #aaa;
}

.time-left {
    float: left;
    color: #999;
}
.message-wraper{
  max-height: 60vh;
  overflow-y: scroll !important;
}

@media (max-width:991px) {
    .searchcontainer button {
      margin-top:-56px !important;
      padding-top:15px;
    }

    .navbar-nav .dropdown .dropdown-toggle {
      padding-top: 15px !important;
      padding-bottom: 15px !important;
  }
}

@media (min-width:991px) {
   .searchcontainer button {
      margin-top:-56px !important;
      padding-top:15px;
    }
}

@media (max-width:1300px) {
    .navbar-form button {
      right: -17px;
    }
  }

  @media (max-width:320px) {
    .searchcontainer button {
      margin-top:-44px !important;
      padding-top:15px;
    }
  }

  tr.dosrch th a {
    font-size:12px;
  }
}
</style>

<div class="container-fluid">
  <div style="padding-top:90px;"></div>
 <div class="col-md-3 hidden-sm hidden-xs">
        <div class="well" style="box-shadow: none;">
          @include('user/side_bar')
        </div>
      </div>
  <div class="col-md-9">
  
      <div class="panel panel-default">
    <div class="panel-heading text-center"><h3>Tell friend about Kaboolhai</h3>
    </div>
     </div>
      
       <div class="row">
         <div class="col-md-4">
           
       <label>Your friend's name</label>
         </div>
         <div class="col-md-6">
           
          <label>Their email address</label>
         </div>
         <div class="col-md-4">
           <form method="post" action="{{ url('tell-about-kaboolhai') }}">
      <input type="text" required="" name="firend_name[]" class="form-control">
         </div>
         <div class="col-md-6">
           
      <input type="email" required="" name="firend_email[]" class="form-control">
         </div>
        <div style="padding:40px; "></div>
         <div class="col-md-4">
           
      <input type="text" required="" name="firend_name[]" class="form-control">
         </div>
         <div class="col-md-6">
           
      <input type="email" required="" name="firend_email[]" class="form-control">
         </div>
         <div style="padding:30px; "></div>
         <div class="col-md-4">
           
      <input type="text" required="" name="firend_name[]" class="form-control">
         </div>
         <div class="col-md-6">
           {{ csrf_field() }}
      <input type="email" required="" name="firend_email[]" class="form-control">
         </div>
         <br><br><br>
         <div class="col-md-9"></div>
         <div class="col-md-2">
           <button type="submit" class="btn btn-success">Send</button>
           </form>
         </div>

       </div>

  <br>

    <div class="message-wraper">
    <div class="row" style="max-width: 1000px;">
        <div class="panel panel-default">
    <div class="panel-heading text-center"><h3>Tell friend Friends I've told about Kaboolhai</h3>
    </div>
     </div>
     
   @if(!empty($friend))
      @foreach($friend as $row)
           
             <div class="container-1">
                
             
                 
                 <p>{{ $row->name.' ('.$row->email.')'}}</p>
              
                 {{-- <p>{{ $row->email }}</p> --}}
  <span class="time-right">{{ $row->created_at }}</span>

</div>
 </a>

             @endforeach
             @endif


           </div>
     
       
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
 
@endpush      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
</body>
</html>