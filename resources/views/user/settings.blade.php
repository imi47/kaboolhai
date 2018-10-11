@extends('user/user_master_layout1') 
@section('data')

<link rel="stylesheet" href="{{ $user_assets }}/css/responsive.css">

<style type="text/css">

html, body {
  overflow-x:hidden;
}

footer .footer-middle {
  margin-left:10px;
  margin-right:10px;
}



#accordion.nav.navbar-nav {
  margin-top:20px;
}

.panel.with-nav-tabs.panel-default {
  width:98%;
}

@media (max-width:420px) {
  .logo {
    width:40px;
  }
}

  .text-color{
    color: white;
  }
  .panel.with-nav-tabs .panel-heading{
    padding: 5px 5px 0 5px;
}
.panel.with-nav-tabs .nav-tabs{
 border-bottom: none;
}
.panel.with-nav-tabs .nav-justified{
 margin-bottom: -1px;
}
/********************************************************************/
/** PANEL DEFAULT **/
.with-nav-tabs.panel-default .nav-tabs > li > a,
.with-nav-tabs.panel-default .nav-tabs > li > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li > a:focus {
    color: #777;
}
.with-nav-tabs.panel-default .nav-tabs > .open > a,
.with-nav-tabs.panel-default .nav-tabs > .open > a:hover,
.with-nav-tabs.panel-default .nav-tabs > .open > a:focus,
.with-nav-tabs.panel-default .nav-tabs > li > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li > a:focus {
    color: #777;
 background-color: #ddd;
 border-color: transparent;
}
.with-nav-tabs.panel-default .nav-tabs > li.active > a,
.with-nav-tabs.panel-default .nav-tabs > li.active > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li.active > a:focus {
 color: #555;
 background-color: #fff;
 border-color: #ddd;
 border-bottom-color: transparent;
}
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu {
    background-color: #f5f5f5;
    border-color: #ddd;
}
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > li > a {
    color: #777;   
}
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
    background-color: #ddd;
}
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > .active > a,
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
    color: #fff;
    background-color: #555;
}

.humburger {
  margin-right:10px;
}

#friends-dropdown, #messages-dropdown, #notifications-dropdown {
    margin-top:13px !important;
    margin-bottom:-13px !important;
  }

.icon-dropdown {
  margin-top:-15px !important;
}

.go_more {
  margin-top:-22px !important;
}

  #friends-dropdown a, #messages-dropdown a, #notifications-dropdown a{
    padding:10px;
  }

  #username-dropdown-toggle {
    margin-top:18px !important;
  }
  .humburger {
      margin-top:14px !important;
}

.nav li.dropdown {
  width:auto !important;
}

@media (max-width:991px) {
        #username-dropdown-toggle {
          margin-top:9px !important;
        }
        .humburger {
            margin-top:14px !important;
      }

      .searchcontainer button {
        margin-top:-56px !important;
        padding-top:15px;
    }

    .sticky-nav .navbar-nav > li > .dropdown-menu, .shrink-nav .dropdown.simple-dropdown .dropdown-menu {
      width:500px !important;
    }

    .sticky-nav .navbar-nav > li > .dropdown-menu, .shrink-nav .dropdown.simple-dropdown .dropdown-menu {
        top:42px !important;
      }

      #username-dropdown-toggle ul.dropdown-menu {
        top:47px !important;

      }
   }

   @media (min-width:991px) {
   .searchcontainer button {
      margin-top:-56px !important;
      padding-top:15px;
    }
}



   @media (max-width:768px) {
     #friends-dropdown, #messages-dropdown, #notifications-dropdown {
            margin-top:5px !important;
            margin-bottom:-5px !important;
        }

      #username-dropdown-toggle {
        margin-top:-0px !important;
      }
      .humburger {
          margin-top:8px !important;
    }

    .bg-orange.no-padding.wow .row {
      margin-left:10px;
      margin-right:10px;
    }
  }

  @media (min-width: 768px) {
  .navbar-nav>li>a {
      padding-top: 0;
      padding-bottom: 0;
  }
}

 @media (max-width: 685px) {
  .sticky-nav .navbar-nav > li > .dropdown-menu, .shrink-nav .dropdown.simple-dropdown .dropdown-menu {
    top: 55px !important;
  }

  #username-dropdown-toggle .dropdown-menu {
    top: 47px !important;
  }
}

.fa-google-plus-square, .fa-linkedin-square {
    font-size:2.44em;
  }
</style>
 <div class="col-md-12">
         {{--  <h4 class="text-color" style="text-align: center;">Settings</h4> --}}
        @if(Session::has('error'))
                    <p class="alert alert-danger">{{ Session::get('error') }}</p>
                @endif
                @if(Session::has('success'))
                    <p class="alert alert-success">{{ Session::get('success') }}</p>
                @endif
          @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>
<div style="padding-top:90px;"></div>
<div class="row">
  <div class="col-md-3 hidden-sm hidden-xs">
        <div class="well" style="box-shadow: none;">
          @include('user/side_bar')
        </div>
      </div>

  <div class="col-md-9">

          <div class="row account"> 

            <div class="panel with-nav-tabs panel-default">
                <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#genral" data-toggle="tab">Genral</a></li>
                            <li><a href="#photo" data-toggle="tab">Photo</a></li>
                            <li><a href="#password" data-toggle="tab">Change Password</a></li>
                             <li><a href="#favourite" data-toggle="tab">Favourite List</a></li>
                              <li><a href="#block" data-toggle="tab">Block list</a></li>
                              <li><a href="#permission" data-toggle="tab">Ask Photo Permission</a></li>

                              <li><a href="#friendlist" data-toggle="tab">Friend List</a></li>
                              
                            
                        </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="genral">
                          <div class="container">
                            <form method="post" action="{{ url('general-setting') }}">
                            <div class="row">
                            {{ csrf_field() }}
                              <div class="col-md-1"></div>
                              <div class="col-md-4">
                                <div class="form-group">
                                <label>First Name</label>
                                <input type="text" name="firstname" class="form-control" value="{{ $users->firstname }}">
                              </div>
                              </div>

                              <div class="col-md-4">
                                <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" name="lastname" class="form-control" value="{{ $users->lastname }}">
                              </div>
                              </div>
                              <div class="col-md-3"></div>

                          </div>
                          <div class="row">
                            
                              <div class="col-md-1"></div>
                              <div class="col-md-4">
                                <div class="form-group">
                                <label>User Name</label>
                                <input type="text" readonly="" name="user_name" class="form-control" value="{{ $users->user_name }}">
                              </div>
                              </div>

                              <div class="col-md-4">
                                <div class="form-group">
                                <label>Gender</label>
                                <select class="form-control" name="gender" id="gender">
                                  <option value="Male">Male</option>
                                  <option value="Female">Female</option>
                                </select>
                              </div>
                              </div>
                              <div class="col-md-3"></div>

                          </div>
                         <div class="row">
                            
                              <div class="col-md-8"></div>
                              <div class="col-md-2">
                            <button type="submit" class="btn btn-success">Save</button>
                          </div>
                        </div>
                          </form>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="photo">
                          @if(!empty($photo->image))
                        
                          <img src="{{ $user_assets }}/my_photo/{{$photo->image }}" class="img-circle" alt="" width="60">

                     @elseif(!empty($users->image))
                     <img src="{{ $user_assets }}/my_photo/{{$users->image }}" class="img-circle" alt="" width="60">
                     @else
                <img src="{{ $user_assets }}/sunrise.jpg" class="img-circle" alt="" width="60" height="60">
                @endif
               
                
                <form method="post" action="{{ url('photo-change') }}" enctype="multipart/form-data">
                   <div class="row">
                       <div class="col-md-4">
              <input type="file" name="image_name" class="form-control" style="display: block;">
              </div>
              {{ csrf_field() }}
          
                
                            
                             
                              <div class="col-md-2">
                            <button type="submit" class="btn btn-success">Save</button>
                          </div>
                        </div>
              </form>
                
                        </div>
                        <div class="tab-pane fade" id="password"><div class="container">
                            <form method="post" action="{{ url('change-password') }}">
                            <div class="row">
                            {{ csrf_field() }}
                              <div class="col-md-1"></div>
                              <div class="col-md-4">
                                <div class="form-group">
                                <label>Old Password</label>
                                <input type="password" name="old_password" class="form-control">
                              </div>
                              </div>

                              <div class="col-md-4">
                                <div class="form-group">
                                <label>New Password</label>
                                <input type="password" name="password" class="form-control">
                              </div>
                              </div>
                              <div class="col-md-3"></div>

                          </div>
                          <div class="row">
                            
                              <div class="col-md-1"></div>
                              <div class="col-md-4">
                                <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control">
                              </div>
                              </div>
                              
                              <div class="col-md-4">
                              <div class="form-group">
                               <button type="submit" class="btn btn-success pull-right" style="margin-top: 20px;">Save</button>
                              </div>
                              </div>
                              <div class="col-md-3"></div>

                          </div>
                        
                        
                          </form></div>
                        </div>
                        <div class="tab-pane fade" id="favourite">
                          
                         
          @if(count($favourite))
            @foreach($favourite as $row)         
          <div class="row">

      <div class="col-sm-12">

        <div class="panel">

          <div class="panel-body">
            
            <div class="row">

                 <a href="{{ url('public-profile',$row->id) }}">
              <div class="col-sm-2">

                 @if(!empty($row->photo->image))
                  <img src="{{ $user_assets }}/my_photo/{{$row->photo->image }}"  alt="" class="img-thumbnail" width="150" height="150" >
              
                  @elseif(!empty($row->image_name))
                     
                     <img src="{{ $user_assets }}/profile_image/{{$row->image_name }}"  alt="" class="img-thumbnail" width="150" height="150" >
                     @else
                     <img src="{{ $user_assets }}/sunrise.jpg"  alt="" class="img-thumbnail" width="150" height="150" >
                     @endif
              
              </div>

              <div class="col-sm-4">
               
                 @php $age=date('Y')-$row->year @endphp
              
                <h3>{{ $row->user_name }}</h3>
                <p>{{$row->country_name.' '.$row->city_name}}</p>
                <p>{{$row->height.' / '.$row->job.' / '.$row->age.' Year old '.' / '.$row->language }}</p>
                
              </div>
               </a>
              <div class="col-sm-2"></div>

              <div class="col-sm-4">
               
                    
                
                 

                  <a title="Remove from favourite list" href="{{ url('delete-favourite-user',$row->id) }}" class="glyphicon glyphicon-heart pull-right" style="text-decoration: none; color: red; font-size: 20px;"></a>
               
              </div>
              
            </div>

          </div>
          
        </div>

      </div>
    
  </div>


    
               
                            
                          
              @endforeach
              {{ $favourite->links() }}
              @else

                    <p class="alert alert-danger">Not Available Favourite user list</p>
               
                         
              @endif
            </div>
                        <div class="tab-pane fade" id="block">
                          @if(count($block_user))
            @foreach($block_user as $row)         
          <div class="row">

      <div class="col-sm-12">

        <div class="panel">

          <div class="panel-body">
            
            <div class="row">

                 <a href="{{ url('public-profile',$row->id) }}">
              <div class="col-sm-2">

                 @if(!empty($row->photo->image))
                  <img src="{{ $user_assets }}/my_photo/{{$row->photo->image }}"  alt="" class="img-thumbnail" width="150" height="150" >
              
                  @elseif(!empty($row->image_name))
                     
                     <img src="{{ $user_assets }}/profile_image/{{$row->image_name }}"  alt="" class="img-thumbnail" width="150" height="150" >
                     @else
                     <img src="{{ $user_assets }}/sunrise.jpg"  alt="" class="img-thumbnail" width="150" height="150" >
                    
                @endif
              </div>

              <div class="col-sm-4">
               
                 @php $age=date('Y')-$row->year @endphp
              
                <h3>{{ $row->user_name }}</h3>
                <p>{{$row->country_name.' '.$row->city_name}}</p>
                <p>{{$row->height.' / '.$row->job.' / '.$row->age.' Year old '.' / '.$row->language }}</p>
                
              </div>
               </a>
              <div class="col-sm-2"></div>

              <div class="col-sm-4">
               
                    
                
                 

                  <a title="Remove from block list" href="{{ url('active-user',$row->id) }}" class="glyphicon glyphicon-ban-circle pull-right" style="text-decoration: none; color: red; font-size: 20px;"></a>
               
              </div>
             
            </div>

          </div>
          
        </div>

      </div>
    
  </div>


    
                
                            
                          
              @endforeach
               {{ $block_user->links() }}
               @else

                    <p class="alert alert-danger">Not Available Block user list</p>
               
                         
             
                         
              @endif 
            </div>

                        <div class="tab-pane fade" id="permission">
                         @if(count($photo_permission))
            @foreach($photo_permission as $row)         
          <div class="row">

      <div class="col-sm-12">

        <div class="panel">

          <div class="panel-body">
            
            <div class="row">

                 <a href="{{ url('public-profile',$row->id) }}">
              <div class="col-sm-2">

                 @if(!empty($row->photo->image))
                  <img src="{{ $user_assets }}/my_photo/{{$row->photo->image }}"  alt="" class="img-thumbnail" width="150" height="150" >
              
                  @elseif(!empty($row->image_name))
                     
                     <img src="{{ $user_assets }}/profile_image/{{$row->image_name }}"  alt="" class="img-thumbnail" width="150" height="150" >
                     @else
                     <img src="{{ $user_assets }}/sunrise.jpg"  alt="" class="img-thumbnail" width="150" height="150" >
                    
                @endif
              </div>

              <div class="col-sm-4">
               
                 @php $age=date('Y')-$row->year @endphp
              
                <h3>{{ $row->user_name }}</h3>
                <p>{{$row->country_name.' '.$row->state_name.' '.$row->city_name}}</p>
                <p>{{$row->height.' / '.$row->job.' / '.$row->age.' Year old '.' / '.$row->language }}</p>
                
              </div>
               </a>
              <div class="col-sm-2"></div>

              <div class="col-sm-4">
               
                    
               
                
                
                <a title="Accept photo permission request" href="{{ url('accept-photo-request',$row->id) }}" class=" 
              glyphicon glyphicon-ok-circle pull-right" style="text-decoration: none; color: green; font-size: 20px; margin-left: 10px;"></a>
              
                  <a title="Reject photo permission request" href="{{ url('reject-photo-request',$row->id) }}" class="glyphicon glyphicon-remove-circle pull-right" style="text-decoration: none; color: red; font-size: 20px;"></a>

                   
               
              </div>
             
            </div>

          </div>
          
        </div>

      </div>
    
  </div>


    
                
                            
                          
              @endforeach
               {{ $photo_permission->links() }}
               @else

                    <p class="alert alert-danger">Not Available Photo Permission user list</p>
               
              @endif </div>


              <div class="tab-pane fade" id="friendlist">
                          
                         
          @if(count($friend))
            @foreach($friend as $row)         
          <div class="row">

      <div class="col-sm-12">

        <div class="panel">

          <div class="panel-body">
            
            <div class="row">

                 <a href="{{ url('public-profile',$row->id) }}">
              <div class="col-sm-2">

                 @if(!empty($row->photo->image))
                  <img src="{{ $user_assets }}/my_photo/{{$row->photo->image }}"  alt="" class="img-thumbnail" width="150" height="150" >
              
                  @elseif(!empty($row->image_name))
                     
                     <img src="{{ $user_assets }}/profile_image/{{$row->image_name }}"  alt="" class="img-thumbnail" width="150" height="150" >
                     @else
                     <img src="{{ $user_assets }}/sunrise.jpg"  alt="" class="img-thumbnail" width="150" height="150" >
                     @endif
              
              </div>

              <div class="col-sm-4">
               
                 @php $age=date('Y')-$row->year @endphp
              
                <h3>{{ $row->user_name }}</h3>
                <p>{{$row->country_name.' '.$row->city_name}}</p>
                <p>{{$row->height.' / '.$row->job.' / '.$row->age.' Year old '.' / '.$row->language }}</p>
                
              </div>
               </a>
              <div class="col-sm-2"></div>

              <div class="col-sm-4">
               
                    
                
                 

              
            </div>
                  <a title="Remove from friend list" href="{{ url('delete-request',$row->id) }}" class="glyphicon glyphicon-remove-circle pull-right" style="text-decoration: none; color: red; font-size: 20px;"></a>
               
              </div>
              
            </div>

          </div>
          
        </div>

      </div>
    
  {{-- </div> --}}
        
                          
              @endforeach
              {{ $favourite->links() }}
              @else

                    <p class="alert alert-danger">Not Available Friend user list</p>
               
                         
              @endif
            </div>
                    </div>
                </div>
            </div>
        </div>
            
    </div>



@endsection

@push('css')
<link rel="shortcut icon" href="{{ $user_assets }}/images/favicon.png">
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

<link rel="stylesheet" href="{{ $user_assets }}/css/owl.carousels.css" />
<link rel="stylesheet" href="{{ $user_assets }}/css/owl.carousel.css" />

<!-- hamburger menu  -->
<link rel="stylesheet" href="{{ $user_assets }}/css/menu-hamburger.css" />
<!-- common -->
<link rel="stylesheet" href="{{ $user_assets }}/css/style.css" />
  

{{-- <script type="text/javascript" src="{{ $user_assets }}/js/custom.js"></script> --}}
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
 
@endpush 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
</body>
</html>