<!doctype html>
<html>

<head>
  <title>@if(empty($title)) Kaboolhai @else {{ $title }} @endif</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta charset="utf-8">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
  <!-- favicon -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
    crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{ $user_assets }}/css/jquery.emojipicker.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
  <script type="text/javascript" src="{{ $user_assets }}/js/jquery.emojipicker.js"></script>

  <!-- Emoji Data -->
  <link rel="stylesheet" type="text/css" href="{{ $user_assets }}/css/jquery.emojipicker.tw.css">
  <script type="text/javascript" src="{{ $user_assets }}/js/jquery.emojis.js"></script>

  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="{{ $user_assets }}/css/muzamil.css" />

  <link rel="shortcut icon" href="{{ $user_assets }}/kabool-hai-favicon.png">
  @stack('css')
  <style type="text/css">
    body {
      /* position:relative; */
    }
    .label {
      display: none;
    }

    @media (max-width:420px) {
      .logo {
        width:47px;
      }
    }
    
    #menu-div .navbar-collapse.collapse {
      float:right;
    }
    .icon-dropdown {
    width:500px;
    height:400px;
    overflow-y:scroll;
  }
    /* .icon-dropdown {
      position:absolute !important;
    } */
    .fa.fa-smile-o {
      font-size: 20px;
    }
    #menu-div .navbar-collapse {
      border:none;
    }
    #sidebar-2 {
      background-color:#000;
      color:#fff;
      opacity:0.9;
      height:100vh;
      width:260px;
      position:fixed;
      right:-260px;
      transition:500ms;
      z-index:9999;
      overflow:scroll;
    }
    #sidebar-2 span:not(.divider) {
      font-size:xx-large;
      font-weight:600;
      position:absolute;
      right:15px;
      top:70px;
      cursor:pointer;
    }
     #sidebar-2 ul {
       margin-top:100px;
     }
    #sidebar-2 ul li:not(.divider) {
      text-align:center;
      padding:10px;
      font-size:large;
    }
    #sidebar-2 ul li.divider {
      background-color:#222;
      height:1px;
    }

    #signin-li {
      margin-top:80px;
    }

     #sidebar-2 ul li a {
       text-decoration:none;
       color:#fff;
     }
    @media (max-width:768px) {
      #stay-tuned-container p {
        margin:10px;
      }
    }
  </style>
  <script type="text/javascript">
    $(document).ready(function (e) {
      $('#send_messgae').emojiPicker();
      //   $('#send_messgae').emojiPicker({
      //   width: '300px',
      //   height: '200px'
      // });
    });
    
    // if (window.matchMedia("(max-width: 520px)").matches)
    //         document.querySelector('.logo-light img').src='public/user_assets/db_images/KH-logo2.png';
    // else document.querySelector('.logo-light img').src='public/user_assets/images/kaboolhai.png';
    mq = window.matchMedia( "(max-width: 420px)" );
         
         mq.addListener(mediaQueryResponse) // attach listener function to listen in on state changes so a page refresh will not be required
       
         // search option will stay in the same line in tablet mode 
         function mediaQueryResponse(mq) {
       
           if(mq.matches) {
             document.querySelector('.logo-light img').src='{{ $user_assets }}/db_images/KH-logo2.png';
             document.querySelector('.logo').style.width = '40px ';
           }
           else {
             document.querySelector('.logo-light img').src='{{ $user_assets }}/images/kaboolhai.png';
             document.querySelector('.logo').style.width = 'auto';
           } 
         }
         mediaQueryResponse(mq);
   
         function changeLogo() {
           if(mq.matches) {
             document.querySelector('.logo-light img').src='{{ $user_assets }}/db_images/KH-logo2.png';
             document.querySelector('.logo').style.width = '40px ';
           }
           else {
             document.querySelector('.logo-light img').src='{{ $user_assets }}/images/kaboolhai.png';
             document.querySelector('.logo').style.width = 'auto';
           } 
          }
  </script>
</head>

<body onload="changeLogo()">

  <div class="main-section">
    <div class="row border-chat">
      <div class="col-md-12 col-sm-12 col-xs-12 first-section">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-6 left-first-section">
            <p id="user_name">@if(count(user_data())) {{ user_data()->user_name }} @endif</p>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-6 right-first-section">
            <a href="#"><i class="fa fa-minus" aria-hidden="true"></i></a>
            {{-- <a href="#"><i class="fa fa-clone" aria-hidden="true"></i></a> --}}
            <a href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="row border-chat">
      <div class="col-md-12 col-sm-12 col-xs-12 second-section">
        <div class="chat-section" id="chat-scroll">
          <ul>

            <span class="sender"></span>
            <span class="new_message"></span>

          </ul>
        </div>
      </div>
    </div>
    <div class="row border-chat third-section">
      <form id='form' enctype="multipart/form-data">
        <div class="text-bar">
          <div class="col-md-10 col-sm-10 col-xs-10">

            {{csrf_field()}}

            <span style="color: red" id="error"></span>
            {{-- <input type="text" id="send_messgae" name="send_messgae" placeholder="Write messege"> --}}

            <input type="text" id="send_messgae" name="send_messgae" class="emojiable-option" placeholder="Write Message">

            <input type="hidden" id="to_userss" name="to_user">

          </div>
          <a href="#">
            <div class="col-md-1">
              <label id="#bb"> <i class="fa fa-paperclip"></i>
                <input type="file" name="file" id="file" size="60">
              </label>


            </div>
            <div class="col-md-1">
              <button class="arrow_button"><i class="fa fa-arrow-right arrow_image" aria-hidden="true"></i></button>
            </div>
        </div>
      </form>
    </div>
  </div>
  </div>
  </div>
  <script type="text/javascript">
    $(document).ready(function () {
      $(".left-first-section").click(function () {
        $('.main-section').toggleClass("open-more");
      });
    });
    $(document).ready(function () {
      $(".fa-minus").click(function () {
        $('.main-section').toggleClass("open-more");
      });
    });
    $(document).ready(function () {
      $(".fa-times").click(function () {
        $('.main-section').toggleClass("open-more");
      });
    });
    function changeLogo() {
      if (window.matchMedia("(max-width: 520px)").matches)
          document.querySelector('.logo-light img').src='{{ $user_assets }}/db_images/KH-logo2.png';
    else document.querySelector('.logo-light img').src='{{ $user_assets }}/images/kaboolhai.png';
    }
  </script>

  <style type="text/css">
    .go_more {
      background-color: #ffffff;
      height: 350px;
      overflow-y: scroll;
    }

    .top-searches-by div{
			border-bottom:1px solid #fff;
			padding:10px;
		}

    .top-searches-by div > a {
    color: #fff !important;
    }


    @media (max-width:520px) {
			.tpsrch {
				display:none;
			}
			.top-searches-by {
				display:block;
			}
		}

		@media (min-width:521px) {
			.tpsrch {
				display:block;
			}
			.top-searches-by {
				display:none;
			}
		}
    
    label {
      /*padding: 10px;*/
      /*background: red; */
      display: table;
      /*color: #fff;*/
    }
    label .fa {
      color: white;
      font-size: 30px;
      margin-left: -50px;
    }
    input[type="file"] {
      display: none;
    }
    /*.emojy_image{
      font-size: 30px;
    margin-left: -120px;
    color: white;
    padding: 0px !important;
}*/
    .arrow_image {
      padding: 10px;
    }
    .arrow_button {
      margin-left: -31px;
    }
    #navsidebare {
      overflow: scroll;
      height: 100vh;
    }
    @media (max-width:1250px) {
      .navbar .accordion-menu #accordion>li,
      #signin {
        display: none;
      }
      .navbar .accordion-menu .dropdown {
        /* display:; */
      }
      #accordion {
        float: right;
      }
    }
    @media (max-width: 991px) {
      #menu-div {
        background-color: inherit;
        float: right;
        /* width: auto; */
        /* position: relative; */
        /* min-height: 0 !important; */
        /* position:relative; */
        /* width:100%; */
      }
      .dropdown-menu {
        left: unset !important;
      }
    }
    .shrink-nav .accordion-menu {
    top: 0px;
}
    .navbar-header {
      position: absolute;
      top: 3px;
      right: 5px;
    }
    .navbar-toggle {
      background-color: #5a378c !important;
      border-radius: 5px;
    }
    }
    #logindivv {
      /* position: relative; */
    }
    /* #logindivv {
  position:absolute;
  width:100vw;
  height:100vh;
  top:0;
  left:0;
  right:0;
  bottom:0;
} */
#logindivv {
    position:fixed;
    top:0;
    /* left:0; */
    right:0;
    margin-right:0;
  }
    #login-div-x {
      position: absolute;
      font-size: large;
      font-weight: bold;
      top: 0;
      right: 0;
      cursor: pointer;
    }

    @media (max-width:400px) {
			#logindivv {
				width:100vw;
			}
		}
    
    .remove-top-margin {
    margin-top:-70px;
    }
    .remove-top-margin:last-child {
    margin-top:-5px;
  }
  .sticky-nav .navbar-nav > li > .dropdown-menu, .shrink-nav .dropdown.simple-dropdown .dropdown-menu {
    width:500px !important;
  }
  @media (max-width: 685px) {
    .sticky-nav .navbar-nav > li > .dropdown-menu, .shrink-nav .dropdown.simple-dropdown .dropdown-menu {
    position: fixed !important;
    left: 0 !important;
}
#username-dropdown-toggle .dropdown-menu {
    /* position: absolute !important; */
    left: -89px !important;
    }
}
@media (max-width:515px) {
  .sticky-nav .navbar-nav > li > .dropdown-menu, .shrink-nav .dropdown.simple-dropdown .dropdown-menu {
    width:100vw !important;
  }
}
  #username-dropdown-toggle ul.dropdown-menu{
       width:100px !important;
     }
  </style>
  <!--  -->
  <!-- navigation panel -->
  <div class="wrapper">
    <nav class="navbar navbar-default navbar-fixed-top  sticky-nav nav-white nav-border-bottom" role="navigation" style="background-color: #5a378c">
      <div class="container-fluid">
        <div class="row">
          <!-- logo -->
          <div class="col-lg-2 col-sm-2 col-xs-2" id="logo-div"> <a class="logo-light" href="{{ url('/') }}"><img alt="" src="{{ $user_assets }}/images/kaboolhai.png"
                class="logo" /></a> <a class="logo-dark" href="{{ url('/') }}"><img alt="" src="{{ $user_assets }}/images/kaboolhai.png"
                class="logo" /></a></div>
          <!-- end logo -->
          <!-- search and cart  -->
          <!-- end search and cart  -->
          <!-- toggle navigation -->
          <div class="navbar-header col-lg-9 col-md-9 col-sm-6 col-xs-2">
            <!-- removeed data-target=".navbar-collapse" from button -->
            <button type="button" class="navbar-toggle" data-toggle="collapse"> <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>
          <!-- toggle navigation end -->
          <!-- main menu -->
          <div class="col-lg-10 no-padding-right accordion-menu" id='menu-div'>
            <div class="navbar-collapse collapse">
              <ul id="accordion" class="nav navbar-nav {{-- panel-group --}}">
                <!-- <li> <a href="register.html">Register</a> </li> -->

                @if(empty(Session::get('user_id')))
                <li class="{{ Request::is('about-us') ? 'active1' : '' }}"> <a href="{{url('about-us')}}">About Us</a>
                </li>
                <li class="{{ Request::is('contact-us') ? 'active1' : '' }}"> <a href="{{url('contact-us')}}">Contact</a>
                </li>
                <li class="{{ Request::is('faqs') ? 'active1' : '' }}"> <a href="{{url('faqs')}}">FAQ's</a> </li>
                <li class="{{ Request::is('advance-search') ? 'active1' : '' }}"> <a href="{{url('advance-search')}}">Find
                    Match</a> </li>
                <li class="{{ Request::is('blog') ? 'active1' : '' }}"> <a href="http://kaboolhai.com/blog/" target="_blank">Blogs</a>
                </li>
                {{--
                <li style="padding-right:0px;text-transform:capitalize;"> <a href="{{ url('dashboard') }}"> {{
                    Session::get('user_name') }} </a> </li>
                <li style="padding-right:0px;text-transform:capitalize;"> <a href="{{ url('logout') }}"> Logout </a>
                </li>
                @else --}}
                <li class="{{ Request::is('register') ? 'active1' : '' }}"> <a href="{{url('register')}}">Create
                    Account</a> </li>
                <li id="signin" style="padding-right:0px;text-transform:capitalize;"> <a href="#"> Sign In </a> </li>
                @else
                {{-- <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">Dropdown <span class="caret"></span></a> --}}
                  {{-- <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li> --}}
                {{-- <li class="{{ Request::is('/') ? 'active1' : '' }}"><a href="{{ url('public-profile',user_data()->id) }}"
                    class="menudesign">My Profile</a></li> --}}

                <li><a href="
          {{ url('inbox') }}" class="menudesign">Inbox</a></li>
                <li><a href="{{ url('sent-items') }}" class="menudesign">Sent Items</a></li>
                <li><a href="{{ url('blocked-list') }}" class="menudesign">Block List</a></li>


                <li class="dropdown">
                  <a class="dropdown-toggle menudesign" data-toggle="dropdown" href="#">Go More <span class="caret"></span></a>
                  <ul class="dropdown-menu go_more " style="background-color: #ffffff;">
                    {{-- <li><a href="{{ url('edit-profile',user_data()->id) }}" style="background-color: #ffffff; color: black !important;">Edit
                        Profile</a></li> --}}
                    <li><a href="{{ url('manage-profile') }}" style="background-color: #ffffff; color: black !important;">Edit
                        Profile</a></li>


                    <li><a href="{{ url('my-photo') }}" style="background-color: #ffffff; color: black !important;">My
                        Photos</a></li>
                    <li><a style="background-color: #ffffff; color: black !important;" href="{{ url('favourite-list') }}">My
                        Favourite</a></li>
                    <li><a style="background-color: #ffffff; color: black !important;" href="{{ url('find-exact-match') }}">Find
                        Exact Match</a></li>
                    <li><a style="background-color: #ffffff; color: black !important;" href="{{ url('profile-writing-tips') }}">Profile
                        Writing Tips</a></li>
                    <li><a style="background-color: #ffffff; color: black !important;" href="{{ url('friend-list') }}">Friend
                        List</a></li>
                    <li><a style="background-color: #ffffff; color: black !important;" href="{{ url('public-profile',user_data()->id) }}">Public
                        Profile</a></li>
                    <li class="divider"></li>
                    <li><a style="background-color: #ffffff; color: black !important;" href="{{ url('hide-profile-list') }}">Hidden
                        Profiles</a></li>
                    <li class="divider"></li>
                    <li><a style="background-color: #ffffff; color: black !important;" href="{{ url('email-prefrences') }}">Email
                        Prefrences</a></li>
                    <li><a style="background-color: #ffffff; color: black !important;" href="{{ url('invite-friend') }}">Invite
                        Friends</a></li>
                    <li><a style="background-color: #ffffff; color: black !important;" href="{{ url('photo-permission-list') }}">Photo
                        Permisions</a></li>
                    <li class="divider"></li>
                    <li><a style="background-color: #ffffff; color: black !important;" href="{{ url('who-looking-for-me') }}">Who
                        Looking For Me</a></li>
                    <li><a style="background-color: #ffffff; color: black !important;" href="{{ 'who-am-i-looking' }}">Who
                        Am I Looking</a></li>
                    <li><a style="background-color: #ffffff; color: black !important;" href="{{ url('question') }}">My
                        Question</a></li>
                    <li class="divider"></li>
                    <li><a style="background-color: #ffffff; color: black !important;" href="{{ url('notification') }}">Notifications</a></li>
                    <li><a style="background-color: #ffffff; color: black !important;" href="{{ url('statistics') }}">Statistics</a></li>
                    <li><a style="background-color: #ffffff; color: black !important;" href="{{ url('settings') }}">Setting</a></li>
                    <li><a style="background-color: #ffffff; color: black !important;" href="{{ url('close-account') }}">Close
                        My Account</a></li>
                    <li><a style="background-color: #ffffff; color: black !important;" href="{{ url('show-search') }}">Save
                        Search</a></li>

                    <li><a style="background-color: #ffffff; color: black !important;" href="{{ url('my-notes') }}">My
                        Notes</a></li>
                    <li><a style="background-color: #ffffff; color: black !important;" href="{{ url('tell-friend') }}">Tell
                        Friend</a></li>
                    <li><a style="background-color: #ffffff; color: black !important;" href="{{ url('sitemap') }}">Sitemap</a></li>

                    <li><a style="background-color: #ffffff; color: black !important;" href="{{ url('help-center') }}">Help
                        Center</a></li>

                    <li><a style="background-color: #ffffff; color: black !important;" href="{{ url('assisted-service') }}">Assisted
                        Service</a></li>
                    <li class="divider"></li>
                  </ul>
                </li>
              </ul>

              <ul class="nav navbar-nav">
                <li class="dropdown" id='friends-dropdown'>
                  <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;" onclick="return friend_count()"
                    title="Friend Request">

                    <span class="fas fa-user-friends icon_color"></span><span id="friend_counts">@if(!empty(count_friend()))
                      {{ count_friend() }} @endif</span>
                    <span id="request_counts"></span>
                  </a>
                  <ul class="dropdown-menu lenght icon-dropdown">
                    <li class="notify_section">
                    </li>
                    @if(count(get_friend()))
                    @foreach(get_friend() as $row)
                    <div class="friend" id="friends">
                      <li>
                        @if(!empty($row->photo->image))
                        <a style="background-color: #ffffff; color: black !important;" href="{{ url('public-profile',$row->user_id) }}"><img
                            src="{{ $user_assets }}/my_photo/{{ $row->photo->image }}" class="img-circle" alt="" width="45">
                          @else
                          <img src="{{ $user_assets }}/dashbord/userpic.jpg" class="img-circle" alt="" width="45">
                          @endif
                          {{ $row->user->user_name }} send friend request</a><a style="background-color: #ffffff; color: black !important;"
                          href="{{ url('delete-request',$row->user_id) }}" class="btn pull-right">Delete</a><a style="background-color: #ffffff; color: black !important;"
                          href="{{ url('confirm-friend',$row->user_id) }}" class="btn pull-right">Confirm</a>
                      </li>
                    </div>
                    <hr style="width: 100%;">
                    @endforeach
                    @else

                    <span style="margin-left: 20px;">no new request</span>
                    @endif
                    <hr style="width: 100%;">

                    <span style="margin-left: 20px; font-size: 20px;"> Recent join user</span>
                    <hr style="width: 100%;">
                    @if(count(recent_join()))
                    @foreach(recent_join() as $row)
                    <div>
                      <li style="margin-left: 4.3333%">
                        @if(!empty($row->image))
                        <a style="background-color: #ffffff; color: black !important;" href="{{ url('public-profile',$row->id) }}"><img
                            src="{{ $user_assets }}/my_photo/{{ $row->image }}" class="img-circle" alt="" width="45">
                        </a>
                        @elseif($row->profile_image)
                        <a style="background-color: #ffffff; color: black !important;" href="{{ url('public-profile',$row->id) }}"><img
                            src="{{ $user_assets }}/profile_image/{{ $row->image_name }}" class="img-circle" alt=""
                            width="45">
                        </a>
                        @else
                        <a style="background-color: #ffffff; color: black !important;" href="{{ url('public-profile',$row->id) }}">
                          <img src="{{ $user_assets }}/dashbord/userpic.jpg" class="img-circle" alt="" width="45">
                        </a>
                        @endif
                        <a style="background-color: #ffffff; color: black !important;" href="{{ url('public-profile',$row->id) }}">

                          <strong>{{ $row->user_name }}</strong>
                          {{ $row->height .' '.$row->martial_status.' '.$row->language}} <span style="color: blue;">veiw
                            Profile</span>
                        </a>
                        <br><br>
                        @endforeach
                        @endif
                        <hr style="width: 100%;">
                        <a href="{{ url('recent-join') }}">
                          <div class="text-center">
                            <span style="font-size: 30px; color: black;">View All</span>
                          </div>
                        </a>
                      </li>
                  </ul>
                </li>
                <li class="dropdown" id='messages-dropdown'>
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#" title="Message" onclick="return get_message()">
                    <span class="fa fa-envelope icon_color"></span><span id="message_count" style="color: red">@if(!empty(count_message()))
                      {{ count_message() }} @endif</span></a>
                  <ul class="dropdown-menu lenght icon-dropdown">

                    @if(!empty(tochat()))
                    @foreach(tochat() as $row)
                    <li class="notify_section">
                      <a href="#" style="background-color: #ffffff !important">

                        {{-- <img src="{{ $user_assets }}/dashbord/userpic.jpg" class="img-circle" alt="" width="45"
                          height="45"> --}}
                      </a>
                    </li>
                    <li class="divider"></li>
                    @if($row->to_user==Session::get('user_id'))
                    <li>
                      <a class="left-first-section" style="background-color: #ffffff; color: black !important;" rel="{{ $row->from_users->id }}"
                        href="#">
                        <span style="margin-left: 55px;">{{ $row->from_users->user_name}}</span>
                        @if(!empty($row->photo->image))
                        <span style="margin-left: -23%;">
                          <img src="{{ $user_assets }}/my_photo/{{ $row->photo->image }}" class="img-circle" alt=""
                            width="10%">
                        </span>
                        @else
                        <span style="margin-left: -30%;">
                          <img src="{{ $user_assets }}/dashbord/userpic.jpg" class="img-circle" alt="" width="10%">
                        </span>
                        @endif
                        {{-- <span>{{ $row->message }}</span> --}}
                      </a>

                    </li>
                    {{-- @elseif($row->from_users->id==Session::get('user_id'))
                    <li><a class="left-first-section" style="background-color: #ffffff; color: black !important;" href="#"
                        onclick="current_chat()">{{ $row->to_users->user_name}}<span id="id_value" style="display: none;">{{
                          $row->to_users->id }}</span></a></li> --}}
                    @endif
                    @endforeach
                    @endif







                    {{-- @if(!empty(tochat()))
                    @foreach(tochat() as $row)
                    <li class="notify_section">
                      <a href="#" style="background-color: #ffffff !important">
                        <img src="{{ $user_assets }}/dashbord/userpic.jpg" class="img-circle" alt="" width="45" height="45">
                      </a>
                    </li>
                    <li class="divider"></li>
                    @if($row->to_user==Session::get('user_id'))
                    <li><a class="left-first-section" style="background-color: #ffffff; color: black !important;" href="#"
                        onclick="current_chat()">{{ $row->to_users->user_name}}<span id="id_value" style="display: none;">{{
                          $row->to_users->id }}</span></a></li>
                    {{-- @elseif($row->from_users->id==Session::get('user_id'))
                    <li><a class="left-first-section" style="background-color: #ffffff; color: black !important;" href="#"
                        onclick="current_chat()">{{ $row->to_users->user_name}}<span id="id_value" style="display: none;">{{
                          $row->to_users->id }}</span></a></li> --}}
                    {{-- @endif
                    @endforeach
                    @endif
                    --}}


                  </ul>
                <li class="dropdown" id='notifications-dropdown'>
                  <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;" onclick="return read_notification()"
                    title="Notification">
                    <span class="noti_counts">@if(!empty(count_friend())) {{ count_notification() }} @endif</span>
                    <span class="fa fa-bell icon_color"></span></a>
                  <ul class="dropdown-menu lenght icon-dropdown">
                    @if(count(get_notification()))
                    @foreach(get_notification() as $row)
                    <div id="get_noti" class="get_notifi">
                      <li class="notify_section">
                        <a href="{{ url('public-profile',$row->sender_id) }}">
                          @if(!empty($row->photo->image))
                          <img src="{{ $user_assets }}/my_photo/{{ $row->photo->image }}" class="img-circle" alt=""
                            width="10%" style="margin-left: 20px; ">
                          @else
                          <img src="{{ $user_assets }}/dashbord/userpic.jpg" class="img-circle" alt="" width="45"
                            height="45">
                          @endif
                          <span style=" margin-left: 15px; font-family: Arial;text-transform: capitalize; ; color: black !important;">{{
                            $row->user->user_name.' '.$row->notification_type }}</span>
                        </a>
                      </li>
                      <hr>
                    </div>
                    @endforeach



                    @endif
                    <a href="{{ url('notification') }}">
                      <li style="color: black;" class="text-center">

                        Show all
                      </li>
                    </a>
                  </ul>
                </li>
                <li class="dropdown username-dropdown-toggle" id='username-dropdown-toggle'>
                  <a class="dropdown-toggle menudesign" data-toggle="dropdown" href="#">
                    {{ user_data()->user_name }} <span class="caret"></span></a>
                  <ul class="dropdown-menu" style="    background-color: #ffffff;">
                    <li><a style="background-color: #ffffff; color: black !important;" href="{{ url('dashboard') }}">Dashboard</a></li>
                    <li><a style="background-color: #ffffff; color:black !important;" href="{{ url('logout') }}">Logout</a></li>
                  </ul>
                  @endif

                </li>



                <a href="javascript:;" id="btntoshowmenu"><i class="fa fa-bars humburger pull-right"></i></a>
                <form class="navbar-form navbar-right" method="get" action="{{ url('user-search') }}">
                  <div class="form-group">
                    <input type="text" name="user_name" class="form-control" placeholder="Search by name">
                  </div>
                  <button style="color: #333;
    background-color: #fff;
    border-color: #ccc;
    margin-bottom: 11px;
    padding: 7px;"
                    type="submit" class="btn btn-default"><i class=" glyphicon glyphicon-search"></i> Search</button>
                </form>
            </div>
            </ul>
          </div>
          {{-- @if(Session::has('error'))
          <p class="alert alert-danger">{{ Session::get('error') }}</p>
          @endif
          @if(Session::has('success'))
          <p class="alert alert-success">{{ Session::get('success') }}</p>
          @endif --}}
          <!-- end main menu -->
        </div>
      </div>
      <div class="navsidebar wow slideInRight" id="navsidebare" style="display:none;">
        <div class="row">

          <a href="javascript:;" id="cross" style="margin-left:230px;">
            <!-- <i class="fa fa-arrow-right fa-3x" style="color:white;margin-top:10px;"></i> -->
            <img width="20" height="20" style="margin-top:15px;" src="{{ $user_assets }}/cross.png" alt="" />
          </a>
          <ul style="margin-left:25px;list-style-type:none;width:100px;line-height:50px;margin-top:15px;">

         <li class="wow fadeInDown remove-top-margin" data-wow-delay="0.1s">
        @if(Session::get('user_id'))) 
            <a href="{{ url('dashboard') }}" class="M">
              <span>
                <!-- <img width="40" height="40" src="{{ $user_assets }}/login.svg" alt="" /> -->
                <i class="fa fa-dashboard fa-2x"></i>
              </span>
              <span style="padding-left:15px;">Dashboard</span>
            </a>
          </li>
          @endif

            @if(empty(Session::get('user_id')))
            <li class="wow fadeInDown login-li" data-wow-delay="0.1s"><a href="#" class="M" id='signin-li'><span><img width="40"
                    height="40" src="{{ $user_assets }}/login.svg" alt="" /></span><span style="padding-left:15px;">Sign
                  in</span></a></li>
            <li class="wow fadeInDown" data-wow-delay="0.2s"><a href="{{ url('register') }}" class="M"><span><img width="40"
                    height="40" src="{{ $user_assets }}/create_account.png" alt="" /></span><span style="padding-left:15px;">Create
                  Account</span></a></li>
            @endif
            <li class="wow fadeInDown" data-wow-delay="0.3"><a href="{{url('about-us')}}" class="M"><span><img width="40"
                    height="40" src="{{ $user_assets }}/about_us.png" alt="" /></span> <span style="padding-left:10px;">About
                  Us</span></a></li>
            <li class="wow fadeInDown" data-wow-delay="0.4s"><a href="{{ url('advance-search') }}" class="M"><span><img
                    width="40" height="40" src="{{ $user_assets }}/find_match.png" alt="" /></span><span style="padding-left:15px;">Find
                  Match</span></a></li>
            {{-- <li class="wow fadeInDown" data-wow-delay="0.5s"><a href="{{ url('our-police') }}" class="M"><span><img
                    width="40" height="40" src="{{ $user_assets }}/our_policy.png" alt="" /></span><span style="padding-left:15px;">Our
                  Policy</span></a></li> --}}
            <li class="wow fadeInDown" data-wow-delay="0.6s"><a href="{{ url('policy-privacy') }}" class="M"><span><img
                    width="40" height="40" src="{{ $user_assets }}/privacy.png" alt="" /></span> <span style="padding-left:10px;">Privacy</span></a></li>
            <li class="wow fadeInDown" data-wow-delay="0.7s"><a href="http://kaboolhai.com/blog/" target="_blank" class="M"><span><img
                    width="40" height="40" src="{{ $user_assets }}/blog.svg" alt="" /></span><span style="padding-left:15px;">Blogs</span></a></li>
            <li class="wow fadeInDown" data-wow-delay="0.9s"><a href="{{ url('faqs') }}" class="M"><span><img width="40"
                    height="40" src="{{ $user_assets }}/faqs.png" alt="" /></span> <span style="padding-left:10px;">FAQs</span></a></li>
            <li class="wow fadeInDown" data-wow-delay="0.8s"><a href="our-partnar" class="M"><span><img width="40" height="40" src="{{ $user_assets }}/our_partners.png"
                    alt="" /></span><span style="padding-left:15px;">Our Partners</span></a></li>
            <li class="wow fadeInDown" data-wow-delay="0.99s"><a href="{{ url('contact-us') }}" class="M"><span><img
                    width="40" height="40" src="{{ $user_assets }}/contact_us.png" alt="" /></span><span style="padding-left:15px;">Contact</span></a></li>
            <li class="wow fadeInDown" data-wow-delay="0.99s"><a href="{{ url('help-center') }}" class="M"><span><i
                    class="fa fa-question" style="color:red; font-size: 45px;"></i></span><span style="padding-left:15px;">Help
                  Center</span></a></li>
            
            @if(Session::get('user_id'))
            <li class="wow fadeInDown" data-wow-delay="0.9s"><a href="#" class="M" id='side-go-more-li'><span><i class="fas fa-bars fa-2x" style='color:orange'></i></span> <span style="padding-left:10px;">Go more</span></a></li>
          <li class="wow fadeInDown remove-top-margin" data-wow-delay="1s">
            <a href="{{ url('logout') }}" class="M">
              <span>
              <i class="fa fa-sign-out fa-2x" aria-hidden="true"></i>
              </span>
              <span style="padding-left:15px;">Log out</span>
            </a>
          </li>

            @endif

          </ul>
        </div>
      </div>
    </nav>


    <div id="sidebar-2">
      <span>&times</span>
      @if(Session::get('user_id'))
      <ul>
      <li><a href="{{ url('edit-profile',user_data()->id) }}">Edit Profile</a></li> 
      <li><a href="{{ url('my-photo') }}">My Photos</a></li>
      <li><a href="{{ url('favourite-list') }}">My
                        Favourite</a></li>
        <li><a href="{{ url('find-exact-match') }}">Find
            Exact Match</a></li>
        <li><a href="{{ url('profile-writing-tips') }}">Profile
            Writing Tips</a></li>
        <li><a href="{{ url('friend-list') }}">Friend
            List</a></li>
        <li><a href="{{ url('public-profile',user_data()->id) }}">Public
            Profile</a></li>
        <li class="divider"></li>
        <li><a href="{{ url('hide-profile-list') }}">Hidden
            Profiles</a></li>
        <li class="divider"></li>
        <li><a href="{{ url('email-prefrences') }}">Email
            Prefrences</a></li>
        <li><a href="{{ url('invite-friend') }}">Invite
            Friends</a></li>
        <li><a href="{{ url('photo-permission-list') }}">Photo
            Permisions</a></li>
        <li class="divider"></li>
        <li><a href="{{ url('who-looking-for-me') }}">Who
            Looking For Me</a></li>
        <li><a href="{{ 'who-am-i-looking' }}">Who
            Am I Looking</a></li>
        <li><a href="{{ url('question') }}">My
            Question</a></li>
        <li class="divider"></li>
        <li><a href="{{ url('notification') }}">Notifications</a></li>
        <li><a href="{{ url('statistics') }}">Statistics</a></li>
        <li><a href="{{ url('settings') }}">Setting</a></li>
        <li><a href="{{ url('close-account') }}">Close
            My Account</a></li>
        <li><a href="{{ url('show-search') }}">Save
            Search</a></li>

        <li><a href="{{ url('my-notes') }}">My
            Notes</a></li>
        <li><a href="{{ url('tell-friend') }}">Tell
            Friend</a></li>
        <li><a href="{{ url('sitemap') }}">Sitemap</a></li>

        <li><a href="{{ url('help-center') }}">Help
            Center</a></li>

        <li><a href="{{ url('assisted-service') }}">Assisted
            Service</a></li>
            <li class="divider"></li>
            <li><a href="{{ url('inbox') }}" class="menudesign">Inbox</a></li>
            <li><a href="{{ url('sent-items') }}" class="menudesign">Sent Items</a></li>
            <li><a href="{{ url('blocked-list') }}" class="menudesign">Block List</a></li>
      </ul>  
      @endif
    </div>

    <script>
      $('#side-go-more-li').click(function(){
        $('#navsidebare').hide('fast');
        $("#sidebar-2").css('right', '0');
      });
      $('#sidebar-2 span').click(function(){
        $('#sidebar-2').css('right', '-260px');
        $('#btntoshowmenu').show();
      });
      // document.getElementById("x").onclick = function () {
      //   document.querySelector('#friends-dropdown .icon-dropdown').style.display = 'none';     
      // }
      // document.getElementById("friends-toggle").onclick = function () {
      //   // alert('onclick');
      //   // setTimeout(function() {
      //     if(document.querySelector('#friends-dropdown .icon-dropdown').style.display = 'none') {
      //       document.querySelector('#friends-dropdown .icon-dropdown').style.display = 'block';
      //       $('#navsidebare').hide('slow');
      //     }
      //     else document.querySelector('#friends-dropdown .icon-dropdown').style.display = 'none';     
            
      //   // })
      // };
    </script>

  </div>

  @if(Session::get('user_id'))
  <style>
    @media (max-width:991px) {
      .navbar-form {
        display:none;
      }
      /* .sticky-nav .navbar-nav > li > .dropdown-menu, .shrink-nav .dropdown.simple-dropdown .dropdown-menu {
        position:absolute;
      } */
      .dropdown-menu {
        /* position: fixed !important;
        top: 100% !important;
        left: -90px !important;
        z-index: 1000 !important; */
        /* display: none !important; */
        /* float: left !important; */
        min-width: 160px !important;
        padding: 5px !important;
        margin: 2px 0 0 !important;
        font-size: 14px !important;
        text-align: center !important;
        list-style: none !important;
        background-color: #fff !important;
        -webkit-background-clip: padding-box !important;
        background-clip: padding-box !important;
        border: 1px solid #ccc !important;
        border: 1px solid rgba(0,0,0,.15) !important;
        border-radius: 4px !important;
        -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175) !important;
        box-shadow: 0 6px 12px rgba(0,0,0,.175) !important;
  }
  .sticky-nav .navbar-nav > li > .dropdown-menu {
    /* width:500px !important; */
    /* position:absolute !important;
    right:200px !important; */
  }
  .icon-dropdown {
    position:absolute !important;
    right:0 !important;
    /* max-width:500px !important; */
  }
      .nav li.dropdown,  .nav li.dropdown a{
       width:auto !important;
      }
      #menu-div .collapse {
        /* display:inline-block !important; */
        float:right;
      }
      .username-dropdown-menu .dropdown-menu {
        position:absolute !important;
      }
      #username-dropdown-toggle .dropdown-menu {
    position: absolute !important;
    right: 0 !important;
    }
    @media (max-width:768px) {
      .navbar-header {
        display:none;
      }
      #menu-div {
        float:right !important;
      }
     #menu-div .collapse {
        display:inline-block !important;
        /* float:right !important; */
      }
      /* #menu-div {
        display:inline-block !important;
      } */
      .dropdown-menu {
        /* position:absolute; */
      }
    }
    @media (max-width:380px) {
      /* #menu-div .nav li.dropdown:not(.username-dropdown-toggle) { */
        #menu-div .nav li.dropdown.username-dropdown-toggle {
        display:none !important;
      }
        .icon-dropdown {
        /* position:absolute !important; */
        max-width: 400px !important;
      }
    }
  </style>
  @endif
  <script>
    // old code
        //  $("#btntoshowmenu").click(function(){
         $(".navbar-header").click(function(){
             $("#navsidebare").show();
            //  $("#signin").hide();
             $("#logindivv").hide();
            //  $("#btntoshowmenu").hide();
            $(".navbar-header").hide();
         });
         $("#btntoshowmenu").click(function() {
          $("#navsidebare").show();
          $(this).hide();
           
         });
         $('.login-li').click(function(){
          $("#logindivv").show();
         })
         
         $("#cross").click(function() {
            
            $("#navsidebare").hide("slow");
            // $("#signin").show();
             $("#btntoshowmenu").show();
            // $(".navbar-header").show();
         });
           @if(empty(Session::get('user_id')))
            $(".navbar-header").click(function(){
              $("#cross").click(function() {
              
              $("#navsidebare").hide("slow");
              // $("#signin").show();
              // $("#btntoshowmenu").show();
              $(".navbar-header").show();
            });
          });
          @endif
         mq = window.matchMedia( "(max-width: 1230px)" );
         
        mq.addListener(mediaQueryResponse) // attach listener function to listen in on state changes so a page refresh will not be required
        // search option will stay in the same line in tablet mode 
        function mediaQueryResponse(mq) {
          if(mq.matches) {
              $( "#logo-div" ).removeClass('col-lg-2' );
              $( "#logo-div" ).addClass('col-sm-2' );
              $( "#menu-div" ).removeClass('col-lg-10');
              $( "#menu-div" ).addClass('col-sm-10' );
              // alert('hi');
          }
        }
        mediaQueryResponse(mq);
        // hide login div when clicked anywhere else
        $(document).mouseup(function(e) 
        {
            var login_div = $("#logindivv");
            var navSideBar = $('#navsidebare');
            // if the target of the click isn't the login_div nor a descendant of the login_div
            if (!login_div.is(e.target) && login_div.has(e.target).length === 0) 
            {
                login_div.hide();
            }
        });
         
      </script>
  <div class="logindiv wow fadeIn" id="logindivv">
    <div class="row" style="padding:15px;">
      <div class="col-sm-12">
        <form method="post" action="{{ url('dologin') }}" id="forgot-password">
          <div style="padding-left:15px;">
            <span id='login-div-x'>X</span>
            <label for="" style="font-size:20px;padding-bottom:5px;">Email </label>
            <input type="text" name="email" placeholder="Email/User name/Mobile" style="height:35px;padding:5px;" class="form-control">
            <label for="" style="font-size:20px;padding-bottom:5px;">Password</label>
            <input type="password" name="password" placeholder="Enter Password" style="height:35px;padding:5px;">
            {{-- <div style="display:inline;">
              <input type="checkbox"> Remember Me
            </div> --}}
            <br>
            {{ csrf_field() }}
            <button type="submit" style="width:100%;margin-top:10px;background-color:#25b206;border:1px solid #25b206;height:35px;color:#ffffff;">Sign
              In</button>
            <div style="text-align:center;color:blue;margin-top:10px;">
              <a href="{{ url('forgot') }}">Forgot Password?</a>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
  </div>
  <script>
    $("#signin").click(function(){
            $("#logindivv").toggle();
         });
         $("#login-div-x").click(function(){
          $('#logindivv').hide();
        });
      </script>
      @yield('data')
      <footer>
         <section class="bg-orange no-padding wow ">
            <div class="container">
               <div class="row padding-two sm-text-center">
                  <div class="col-md-9 no-padding">
                     <h4 class="white-text font-weight-600" style="font-family:sans-serif;">Stay tuned for the launch of Best & Secure Matrimonial App!</h4>
                     <p class="white-text" style="font-family:sans-serif;text-align:justify;">It has been our utmost desire to introduce an outstanding and easy to use matrimonial application for IOS and Android users. We have been working hard in this stance and are planning to come up with a user-friendly and secure Matrimonial App so that our users stay updated while on the go!</p>
                     <p class="white-text" style="font-family:sans-serif;text-align:justify;">The app will be soon available for both Android and Apple iPhone users in the respective play stores. Stay tuned for the launch of our ‘Kabool Hai Matrimonial app’ as the early birds will be given early access and will get free subscription.</p>
                  </div>
                  <div class="col-md-3 padding-one no-padding-bottom">
                     <a class="" href="#"><img src="{{ $user_assets }}/images/google-play.png" width="193" height="58"></a><br><br>
                     <a class="" href="#"><img src="{{ $user_assets }}/images/apple-store.png" width="193" height="58"></a>
                  </div>
               </div>
            </div>
         </section>
         <div class="container-fluid footer-middle">
            <div class="row">
               <div class="col-md-2">
                  <table>
                     <tr>
                        <th class="fhead">Kaboolhai</th>
                     </tr>
                     </tr>
                     <tr>
                        <td class="flinks"><a href="{{url('about-us')}}">About</a></td>
                     </tr>
                     <tr>
                        <td class="flinks"><a href="http://kaboolhai.com/blog/" target="_blank">Blog</a></td>
                     </tr>
                     <tr>
                        <td class="flinks"><a href="#">Download app</a></td>
                     </tr>
                     <tr>
                        <td class="flinks"><a href="{{ url('term-condation') }}">Terms and Conditions</a></td>
                     </tr>
                     <tr>
                        <td class="flinks"><a href="#">Testimonials</a></td>
                     </tr>
                     <tr>
                        <td class="flinks"><a href="{{ url('policy-privacy') }}">Privacy Policy</a></td>
                     </tr>
                     <tr>
                        <td class="flinks"><a href="{{ url('payment') }}">Payment</a></td>
                     </tr>
                  </table>
               </div>
               <div class="col-md-2">
                  <table>
                     <tr>
                        <th class="fhead">Help & Support</th>
                     </tr>
                     <tr>
                        <td class="flinks"><a href="{{ url('help-center') }}">24x7 Live help</a></td>
                     </tr>
                     <tr>
                        <td class="flinks"><a href="{{ url('contact-us') }}">Contact Us</a></td>
                     </tr>
                     <tr>
                        <td class="flinks"><a href="{{ url('feedback') }}">Feedback</a></td>
                     </tr>
                     <tr>
                        <td class="flinks"><a href="{{ url('faqs') }}">FAQ'S</a></td>
                     </tr>
                     <tr>
                        <td class="flinks"><a href="{{ url('payment') }}">Upgrade Account</a></td>
                     </tr>
                     <tr>
                        <td class="flinks"><a href="{{ url('assisted-service') }}">Assisted Service</a></td>
                     </tr>
                     {{-- <tr>
                        <td class="flinks"><a href="#">Payment</a></td>
                     </tr> --}}
                  </table>
               </div>
               <div class="col-md-2">
                  <table>
                     <tr>
                        <th class="fhead">Search Profile</th>
                     </tr>
                     <tr>
                        <td class="flinks">
                           <a href="javascript:;" data-toggle="modal" data-target="#basic_search">Basic Search</a>
                     </tr>
                     <tr>
                        <td class="flinks">
                           <a href="javascript:;" data-toggle="modal" data-target="#advance_search">Advance Search</a>
                        </td>
                     </tr>
                     <tr>
                        <td class="flinks">
                           <a href="javascript:;" data-toggle="modal" data-target="#keyword_search">Keyword Search</a>
                        </td>
                     </tr>
                     <tr>
                        <td class="flinks">
                           <a href="javascript:;" data-toggle="modal" data-target="#job_search">occupational Search</a>
                        </td>
                     </tr>
                     <tr>
                        <td class="flinks">
                           <a href="javascript:;" data-toggle="modal" data-target="#edu_search">Educational</a>
                        </td>
                     </tr>
                     <tr>
                        <td class="flinks">
                           <a href="javascript:;" data-toggle="modal" data-target="#id_search">ID Search</a>
                        </td>
                     </tr>
                  </table>
               </div>
               <div class="col-md-3">
                  <table>
                     <tr>
                        <th class="fhead">Contact Us</th>
                     </tr>
                     <tr>
                        <td class="flinks"><a href="#">contact@kaboolhai.com</a></td>
                     </tr>
                     <!-- <tr>
                        <td class="flinks"><a href=""> (PK): +92 423 570 0007</a></td>
                        </tr>
                        <tr>
                        <td class="flinks"><a href="">Phase 6 DHA Lahore Pakistan
                        </a></td>
                        </tr> -->
                     <tr>
                        <td><br></td>
                     </tr>
                     <tr>
                        <td class="flinks"><a href="https://www.facebook.com/Saykaboolhai/" target="__blank"><i class="fa fa-facebook-square fa-3x"></i></a><a href="#"><i class="fa fa-youtube-square fa-3x"></i></a> <a href="https://twitter.com/kaboolhaitweet" target="__blank"><i class="fa fa-twitter-square fa-3x"></i></a><i class="fa fa-google-plus-square fa-3x"></i><i class="fa fa-linkedin-square fa-3x" style="color:white;"></i></a></td>
                     </tr>
                  </table>
               </div>
               <div class="col-md-3">
                  <p class="fhead">Subscribe to Our Newsletters</p>
                  <p class="subt">Never miss our special offers</p>
                  <div class="searchcontainer">
                     <form action="{{ url('subscribe') }}" method="post">
                        {{ csrf_field() }}
                        <input type="text" required="" class="form-control" style="height:44px;width:225px;border-radius-left: 5%;" placeholder="Enter Your Email" name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                     </form>
                  </div>
                  <div class="paymg">
                     <img alt="" src="{{ $user_assets }}/payment-methods.png" />
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12" style="padding-top:50px;">
                  <table>
                     <tr>
                        <p style="color:#ffffff">Top Searches by:</p>
                     </tr>
                      <tr class="tpsrch">
                       <th><a href="{{ url('pakistani') }}">Pakistani Muslim Matrimony</a></th>
                        <th><a href="{{ url('UAE') }}">UAE Muslim Matrimony</a></th>
                        <th><a href="{{ url('United-Kingdom') }}">United Kingdom Muslim Matrimony</a></th>
                        <th><a href="{{ url('USA') }}">USA Muslim Matrimony Muslim Matrimony</a></th>
                        <th><a href="{{ url('canada') }}" style="border:none;">CANADA Muslim Matrimony</a></th>
                    </tr>
                  </table>
               </div>
            </div>

            <div class="top-searches-by">
              <div><a href="{{ url( 'pakistani') }}">Pakistani Muslim Matrimony</a></div>
              <div><a href="{{ url( 'UAE') }}">UAE Muslim Matrimony</a></div>
              <div><a href="{{ url( 'United-Kingdom') }}">United Kingdom Muslim Matrimony</a></div>
              <div><a href="{{ url( 'USA') }}">USA Muslim Matrimony Muslim Matrimony</a></div>
              <div><a href="{{ url( 'canada') }}">CANADA Muslim Matrimony</a></div>
					 </div>
            <!-- scroll to top -->
            <a href="javascript:;" class="scrollToTop"></a>
         </div>
         <!-- scroll to top End... -->
      </footer>
      <div style="width:100%;background-color:#222;">
         <div class="container">
            <div class="row" style="padding-top:15px;padding-bottom: 15px;">
               <div class="col-md-6">
                  <table>
                     <tr class="dosrch">
                        <th><a href="{{ url('term-condation') }}">Terms</a></th>
                        <th><a href="{{ url('policy-privacy') }}">Privacy Policy</a></th>
                        <th><a href="{{ url('sitemap') }}" style="border:none;">Site Map</a></th>
                     </tr>
                  </table>
               </div>
               <div class="col-md-6">
                  <p class="pull-right" style="color:#ffffff;">&copy;2018 Kaboolhai.All rights reserved.Powered By <a style="color:white;" href="http://www.ranglerz.com/" target="__blanck">Ranglerz</a>.</p>
               </div>
            </div>
         </div>
      </div>
      {{-- Basic Search --}}
      <div class="modal fade" data-backdrop="static" data-keyboard="false" id="basic_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document" style="margin-top: 100px;">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title tb-modal-title">
                     <center>Basic Search </center>
                  </h5>
               </div>
               <div class="modal-body">
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
                     <div class="form-group">
                        <label>Age</label>
                     </div>
                     <div class="row">
                        <div class="col-md-5">
                           <select name="age_from" class="form-control" style="width: 200PX">
                              <option value="">Select</option>
                              @for($i =  date('y');  $i <= date('y')+82 ; $i++)
                              <option value="{{ $i }}" >{{ $i }}</option>
                              @endfor 
                           </select>
                        </div>
                        <div class="col-xs-1 text-center">
                           To
                        </div>
                        <div class="col-md-5">
                           <select name="age_to" class="form-control" style="width: 200px;">
                              <option value="">Select</option>
                              @for($i = date('y')+82; $i >= date('y'); $i--)
                              <option value="{{ $i }}" >{{ $i }}</option>
                              @endfor 
                           </select>
                        </div>
                     </div>
                     <br>
                     <div class="form-group">
                        <label>Height</label>
                     </div>
                     <div class="row">
                        <div class="col-md-5">
                           <select name="height_from" class="form-control">
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
                        </div>
                        <div class="col-xs-1 text-center">
                           To
                        </div>
                        <div class="col-md-5">
                           <select name="height_to" class="form-control">
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
                        </div>
                     </div>
                     <br>
                     <div class="pull-right">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="padding: 5px; background-color: red;">Close</button>
                        <button type="submit" class="btn btn-success" style="padding:5px; background-color: green; ">Search</button>
                     </div>
                     <div class="clearfix"></div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      {{-- advance search --}}
      <div class="modal fade" data-backdrop="static" data-keyboard="false" id="advance_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document" style="margin-top: 100px;">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title tb-modal-title">
                     <center>Search by Advance info</center>
                  </h5>
               </div>
               <div class="modal-body">
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
                     <div class="form-group">
                        <label>Age</label>
                     </div>
                     <div class="row">
                        <div class="col-md-5">
                           <select name="age_from" class="form-control" style="width: 200px;">
                              <option value="">Select</option>
                              @for($i =  date('y');  $i <= date('y')+82 ; $i++)
                              <option value="{{ $i }}" >{{ $i }}</option>
                              @endfor 
                           </select>
                        </div>
                        <div class="col-xs-1 text-center">
                           To
                        </div>
                        <div class="col-md-5">
                           <select name="age_to" class="form-control" style="width: 200px;">
                              <option value="">Select</option>
                              @for($i = date('y')+82; $i >= date('y'); $i--)
                              <option value="{{ $i }}" >{{ $i }}</option>
                              @endfor 
                           </select>
                        </div>
                     </div>
                     <br>
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
                     <div class="form-group">
                        <label>Height</label>
                     </div>
                     <div class="row">
                        <div class="col-md-5">
                           <select name="height_from" class="form-control">
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
                        </div>
                        <div class="col-xs-1 text-center">
                           To
                        </div>
                        <div class="col-md-5">
                           <select name="height_to" class="form-control">
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
                        </div>
                     </div>
                     <br>
                     <div class="form-group">
                        <label>caste</label>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <input type="text"  name="cast" class="form-control" placeholder="Caste" style="width: 400px;">
                        </div>
                     </div>
                   
                     <div class="form-group">
                        <label>Mother Language</label>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <select name="language" class="form-control" style="width: 400px;">
                              <option value="">..Select..</option>
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
                              <option value="Malayalam">Malayalam</option>
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
                     
                     <div class="form-group">
                        <label>Religion</label>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <select name="religiousness" class="form-control" style="width: 400px;">
                              <option value="">..Select..</option>
                              <option value="">Please select..</option>
                              <option value="Very religious">Very religious</option>
                              <option value="Religious">Religious</option>
                              <option value="Not religious">Not religious</option>
                              <option value="Prefer not to say">Prefer not to say</option>
                           </select>
                        </div>
                     </div>
                     
                     <div class="form-group">
                        <label>Financial Status</label>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <select name="financial_status" class="form-control" style="width: 400px;">
                              <option value="">Please select..</option>
                              <option value="Rich">Rich</option>
                              <option value="Upper Middle Class">Upper Middle Class</option>
                              <option value="Middle Class">Middle Class</option>
                              <option value="Lower Upper Middle Class">Lower Upper Middle Class</option>
                              <option value="Do not want to tell at this time">Do not want to tell at this time</option>
                           </select>
                        </div>
                     </div>
                     <br>
                     <div class="pull-right">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="padding:5px; background-color: red;">Close</button>
                        <button type="submit" class="btn btn-success" style="padding:5px; background-color: green; ">Search</button>
                     </div>
                     <div class="clearfix"></div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      {{-- Keyword search --}}
      <div class="modal fade" data-backdrop="static" data-keyboard="false" id="keyword_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document" style="margin-top: 100px;">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title tb-modal-title">
                     <center>Search by Keyword</center>
                  </h5>
               </div>
               <div class="modal-body">
                  <form method="get" action="{{ url('user-search') }}" class="form-inline">
                     {{ csrf_field() }}
                     <div class="form-group">
                        <label>User Name</label>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <input type="text"  name="user_name" class="form-control" placeholder="user name" style="width: 525px;">
                        </div>
                     </div>
                     <br>
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
                     <div class="form-group">
                        <label>Age</label>
                     </div>
                     <div class="row">
                        <div class="col-md-5">
                           <select name="age_from" class="form-control" style="width: 200px">
                              <option value="">Select</option>
                              @for($i =  date('y');  $i <= date('y')+82 ; $i++)
                              <option value="{{ $i }}" >{{ $i }}</option>
                              @endfor 
                           </select>
                        </div>
                        <div class="col-xs-1 text-center">
                           To
                        </div>
                        <div class="col-md-5">
                           <select name="age_to" class="form-control" style="width: 200px;">
                              <option value="">Select</option>
                              @for($i = date('y')+82; $i >= date('y'); $i--)
                              <option value="{{ $i }}" >{{ $i }}</option>
                              @endfor 
                           </select>
                        </div>
                     </div>
                     <br>
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
                     <div class="form-group">
                        <label>Height</label>
                     </div>
                     <div class="row">
                        <div class="col-md-5">
                           <select name="height_from" class="form-control">
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
                        </div>
                        <div class="col-xs-1 text-center">
                           To
                        </div>
                        <div class="col-md-5">
                           <select name="height_to" class="form-control">
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
                        </div>
                     </div>
                     <br>
                     <div class="pull-right">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="padding: 5px; background-color: red">Close</button>
                        <button type="submit" class="btn btn-success" style="padding: 5px; background-color: green;">Search</button>
                     </div>
                     <div class="clearfix"></div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      {{-- Job search --}}
      <div class="modal fade" data-backdrop="static" data-keyboard="false" id="job_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title tb-modal-title" id="exampleModalLabel">Search by Occupation</h5>
               </div>
               <div class="modal-body">
                  <form method="get" action="{{ url('user-search') }}">
                     {{ csrf_field() }}
                     <div class="form-group">
                        <label class="col-form-label">Search Occupation</label>
                        <select name="job"  class="job form-control">
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
                           {{-- 
                           <option value="MBBS">MBBS</option>
                           --}}
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
                     <div class="pull-right">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Search</button>
                     </div>
                     <div class="clearfix"></div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      {{-- education search modal --}}
      <div class="modal fade" data-backdrop="static" data-keyboard="false" id="edu_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document" style="margin-top: 100px;">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title tb-modal-title" id="exampleModalLabel">Search by education</h5>
               </div>
               <div class="modal-body">
                  <form method="get" action="{{ url('user-search') }}">
                     {{ csrf_field() }}
                     <div class="form-group">
                        <label class="col-form-label">Search education</label>
                        <select name="qualification" id="" class="qualification form-control">
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
                     <div class="pull-right">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="padding: 5px; background-color: red;">Close</button>
                        <button type="submit" class="btn btn-success" style="padding:5px; background-color: green; ">Search</button>
                     </div>
                     <div class="clearfix"></div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      {{-- id search modal --}}
      <div class="modal fade" data-backdrop="static" data-keyboard="false" id="id_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document" style="margin-top: 100px;">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title tb-modal-title" id="exampleModalLabel">Search by user name</h5>
               </div>
               <div class="modal-body">
                  <form method="get" action="{{ url('user-search') }}">
                     {{ csrf_field() }}
                     <div class="form-group">
                        <label class="col-form-label">User name search</label>
                        <input type="text" placeholder="search by name or user name" class="form-control" name="user_name">
                     </div>
                     <div class="pull-right">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="padding: 5px; background-color: red;">Close</button>
                        <button type="submit" class="btn btn-success" style="padding: 5px; background-color: green;">Search</button>
                     </div>
                     <div class="clearfix"></div>
                  </form>
               </div>
            </div>
         </div>
      </div>
         @if(count(user_data()))
      <script type="text/javascript">
       
  var idleTime = 0;
    var idleInterval = setInterval(timerIncrement, 60000); // 1 minute
    //Zero the idle timer on mouse movement.
    $(this).mousemove(function (e) {
        idleTime = 0;
    });
    $(this).keypress(function (e) {
        idleTime = 0;
    });
function timerIncrement() {
    idleTime = idleTime + 1;
    if (idleTime > 30) { // 20 minutes
   $.ajax({
    url:'{{url('/check-login-status')}}',
            type: 'POST',
            data: {
              "_token": "{{ csrf_token() }}",
              "user_id" : {{user_data()->id}}
            },
          success:function(response) {
            
          }
        });
    }
}
</script>
      <script type="text/javascript">
         var to_user;
         $("a.left-first-section").click(function(){
            to_user=$(this).attr('rel');
         
         $('#to_userss').val(to_user);
            $.post('{{ url('/chat') }}' , {_token: '{{ csrf_token() }}' , to_user: to_user} , function(data)
         {
         response = $.parseJSON(data);
         $('.sender').html(response.sender);
         $('#user_name').html(response.user_name);
         
         // alert(response.code_flage);
         });
   
});
      setInterval(function() {
           
      $.ajax({
    url:'{{url('/get-notification')}}',
            type: 'POST',
            data: {
              "_token": "{{ csrf_token() }}",
              "user_id" : {{user_data()->id}}
            },
          success:function(response) {
            $('.get_notifi').html("");
           
              $('#get_noti').html(response);
            
              $('#noti_counts').show();
          }
        });
  },1000);
         setInterval(function() {
         
         
         // to_user = $('#to_userss').text();
         // alert(to_user);
         $.ajax({
         url:'{{ url('check_unseen') }}',
         type: 'POST',
         data: {
         "_token": "{{ csrf_token() }}",
         "to_user" : to_user
         },
         success:function(response) {
         if(response!=0)
         {
         
          response.forEach(function (item) {
            if(item.to_user=={{user_data()->id}})
            {
             
               $('#message_count').show();
               $('#message_count').html('1')
            }
            if(item.attached)
            {
              var filename = item.attached;
var valid_extensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;   
if(valid_extensions.test(filename))
{ 
   $('.new_message').append('<li><div class="left-chat"><p><a href="{{ url('public/user_assets/attached') }}/'+item.attached+'" target="_blank"><img src="{{ url('public/user_assets/attached') }}/'+item.attached+'"></a></p></div></li>');
           $('#chat-scroll').animate({
            scrollTop: $('#chat-scroll').get(0).scrollHeight},10);
            
}
else
{
   $('.new_message').append('<li><div class="left-chat"><p><a href="{{ url('public/user_assets/attached') }}/'+item.attached+'" target="_blank">'+item.attached+'</a></p></div></li>');
   $('#chat-scroll').animate({
            scrollTop: $('#chat-scroll').get(0).scrollHeight},10);
            
}
}
           //  $('.new_message').append('<li><div class="left-chat"><p><a href="{{ url('public/user_assets/attached') }}/'+item.attached+'" target="_blank"><img src="{{ url('public/user_assets/attached') }}/'+item.attached+'"></a></p></div></li>');
           // $('#chat-scroll').animate({
           //  scrollTop: $('#chat-scroll').get(0).scrollHeight},10);
           //  }
            else if(item.message)
            {
              $(".new_message").append('<li><div class="left-chat"><p>'+item.message+'</p></div></li>');
            $('#chat-scroll').animate({
            scrollTop: $('#chat-scroll').get(0).scrollHeight},10);
            }
         
            
         
          // $("#new_message").append("<div class='col-md-6 well'><p style='color:black;'>"+item.message+"</p></div><div class='col-md-6'></div>");
          // $('#chat-scroll').animate({
          //   scrollTop: $('#chat-scroll').get(0).scrollHeight},10);
         });
         }
         }
         
         });
         },1000);
         
         
$("#file").change(function () {
       var fileExtension = ['xlsx','xls','csv','jpg','jpeg','png','gif','bmp','doc','docx','pdf','txt'];
       if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
          document.getElementById("file").value = "";
          document.getElementById('error').style.display = "block";
           $("#error").html("Only allowed file type are "+fileExtension.join(', '));
       }
       else
       {
         document.getElementById('error').style.display = "none";
       }
   });
         
         
$('#form').on('submit',function (e) {
e.preventDefault();
var message=document.getElementById("send_messgae").value;
var file=document.getElementById("file").value;
if(message)
{
var word_to_match = message;
var string_of_words = 'a string containing the word ender, this will match';
//use \b to match on word boundaries
var filter = new RegExp('\\b' + word_to_match + '\\b', 'gi');
if(string_of_words.match(filter))
 {
   $('#error').html('Block ' + word_to_match);
   $('#send_messgae').val('');
   return false;
 } 
}
    
         
         $.ajax({
           type: 'post',
           url: "{{ url('send_message') }}",
            // data: new FormData(this),
           // data: $('#form').serialize(),
            data: new FormData(this),
                 contentType: false,       
                 cache: false,            
                 processData:false,
           success: function (response)
            {
               $('#file').val('');
               $('#error').html('');
               if(message && file)
               {
              
           $('.new_message').append('<li><div class="right-chat"><p>'+message+'</p></div></li>');
           $('#chat-scroll').animate({
            scrollTop: $('#chat-scroll').get(0).scrollHeight},10);
            $('.new_message').append('<li><div class="right-chat"><p><a href="{{ url('public/user_assets/attached') }}/'+response.attached+'" target="_blank"><img src="{{ url('public/user_assets/attached') }}/'+response.attached+'"></a></p></div></li>');
           $('#chat-scroll').animate({
            scrollTop: $('#chat-scroll').get(0).scrollHeight},10);
          }
            else if(file)
            {
              var filename = response.attached;
var valid_extensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;   
if(valid_extensions.test(filename))
{ 
   $('.new_message').append('<li><div class="right-chat"><p><a href="{{ url('public/user_assets/attached') }}/'+response.attached+'" target="_blank"><img src="{{ url('public/user_assets/attached') }}/'+response.attached+'"></a></p></div></li>');
           $('#chat-scroll').animate({
            scrollTop: $('#chat-scroll').get(0).scrollHeight},10);
            
}
else
{
   $('.new_message').append('<li><div class="right-chat"><p><a href="{{ url('public/user_assets/attached') }}/'+response.attached+'" target="_blank">'+response.attached+'</a></p></div></li>');
   $('#chat-scroll').animate({
            scrollTop: $('#chat-scroll').get(0).scrollHeight},10);
            
}
}
               
            else if(message)
            {
               $('.new_message').append('<li><div class="right-chat"><p>'+message+'</p></div></li>');
           $('#chat-scroll').animate({
            scrollTop: $('#chat-scroll').get(0).scrollHeight},10);
           
            }
            else
            {
             
               $('#error').html('Write message');
            }
           }
         });
         
        
         document.getElementById("send_messgae").value = "";
        
       
         });
         function friend_count()
  {
    $.ajax({
    url:'{{url('/friend-count')}}',
            type: 'POST',
            data: {
              "_token": "{{ csrf_token() }}",
              "user_id" : {{user_data()->id}}
            },
          success:function(response) {
            
           
             $('#friend_counts').hide();
          }
        });
  }
  function read_notification()
  {
    $.ajax({
    url:'{{url('/read-notification')}}',
            type: 'POST',
            data: {
              "_token": "{{ csrf_token() }}",
              "user_id" : {{user_data()->id}}
            },
          success:function(response) {
            
           
             $('.noti_counts').hide();
             
          }
        });
  }
function get_message()
{
  $.ajax({
    url:'{{url('/read-message')}}',
            type: 'POST',
            data: {
              "_token": "{{ csrf_token() }}",
              "user_id" : {{user_data()->id}}
            },
          success:function(response) {
            
           
             $('#message_count').hide();
             
          }
        });
}
      </script>
     @endif
     
      @stack('js')
     
<script type="text/javascript" src="{{ $user_assets }}/js/jquery.emojiarea.js"></script>
<script type="text/javascript" src="{{ $user_assets }}/js/emoji-picker.js"></script>
   </body>
</html>