<!doctype html>
<html>
<head>
  <title>{{ $title }}</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta charset="utf-8">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
  <link rel="stylesheet" href="{{ $user_assets }}/css/chat.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
    crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{ $user_assets }}/css/jquery.emojipicker.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.2.min.js"></script>

  <!-- Emoji Data -->
  <link rel="stylesheet" type="text/css" href="{{ $user_assets }}/css/jquery.emojipicker.tw.css">
  <script type="text/javascript" src="{{ $user_assets }}/js/jquery.emojipicker.js"></script>
  <script type="text/javascript" src="{{ $user_assets }}/js/jquery.emojis.js"></script>

  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="{{ $user_assets }}/kabool-hai-favicon.png">
  @stack('css')
  <script type="text/javascript">
    $(document).ready(function (e) {
      $('#send_messgae').emojiPicker();

      //   $('#send_messgae').emojiPicker({
      //   // width: '300px',
      //   height: '200px'
      // });
    });
  </script>
</head>
<style type="text/css">

body::-webkit-scrollbar, body *::-webkit-scrollbar
{
	width: 0.7rem;
  height: 0.7rem;
  background-color: #f5f5f5;
}

body::-webkit-scrollbar-thumb, body *::-webkit-scrollbar-thumb
{
	border-radius: 20px;
	background-color: #999;
}

.searchcontainer button {
  padding: 13px 14px;
  margin-top: -43px;
  margin-right: unset;
  color: #666;
}

.paymg img
{
  width:unset !important;
}

/* .view-all {
  position: fixed;
  bottom: 221px;
  width: 493px;
  background: #eee;
} */

#message_count, .noti_counts, #friend_counts {
  color: white !important;
  background-color: #FF4646;
  border-radius: 99px;
  right: 5px;
  font-size: 11px;
  top: 5px;
  position: absolute;
  padding: 0px 8px 0px 6px;
  line-height:20px;
}

.dropdown-menu>li>a {
  padding: 5px 20px;
}

#friends-dropdown li:nth-last-child(2), #notifications-dropdown li:nth-last-child(2) {
  margin-bottom:25px;
}

#friends-dropdown li:last-child, #notifications-dropdown li:last-child {
  position:fixed;
  width: 493px;
  padding: 0;
  border: 1px solid #aaa;
  top: 418px;
  background-color:#eee;
}

#friends-dropdown li:last-child a, #notifications-dropdown li:last-child a {
  padding: 4px 15px 4px 25px;
  display: inline-block;
}

.dropdown-menu>li>a:focus, .dropdown-menu>li>a:hover {
  background-color:#e6e6e6;
}

.noti_counts {
  top: -4px !important;
  left: 14px !important;
  padding: 0px 14px 1px 7px;
}

.main-section {
  width:300px !important;
}

.arrow_button {
  position: absolute;
  right: 9px;
  top: 12px;
}

#bb {
  bottom: 27px;
  display: none;
}

#bb {
  position:fixed;
}

.open-more #bb {
  display: block;
}

.search-dropdown-toggle {
    display:none;
    font-size: 2.1rem;
    color:#f1e7ff;
    position: absolute;
    top: 14px;
    right: 75px;
  }

    .orange {
      color:#ed6c05;
    }

.clearfix:after {
   content: " "; /* Older browser do not support empty content */
   visibility: hidden;
   display: block;
   height: 0;
   clear: both;
  }

  .navbar-nav {
    margin:0;
  }

  .innermenu {
    margin-top: 0px;
}

.navbar-default {
  height:0;
}

.close {
  margin-top: -3px;
  height: 35px;
  margin-right: -13px;
  width: 35px;
  opacity: 0.7;
  padding: 11px;
}

    .close path {
      stroke-width:"10";
    }

    .close:hover {
      opacity:1;
    }

  .ham {
			cursor: pointer;
			-webkit-tap-highlight-color: transparent;
			transition: transform 400ms;
			-moz-user-select: none;
			-webkit-user-select: none;
			-ms-user-select: none;
			user-select: none;
      width: 55px;
      position: fixed;
      right: 10px;
      top: -2px;
      z-index: 1031;
      display:none;
		 }
		 .hamRotate.active {
			transform: rotate(45deg);
		 }
		 .hamRotate180.active {
			transform: rotate(180deg);
		 }
		 .line {
			fill:none;
			transition: stroke-dasharray 400ms, stroke-dashoffset 400ms;
			stroke:#fff;
			stroke-width:5.5;
			stroke-linecap:round;
		 }
		
		 .ham8 .top {
			stroke-dasharray: 40 160;
		 }
		 .ham8 .middle {
			stroke-dasharray: 40 142;
			transform-origin: 50%;
			transition: transform 400ms;
		 }
		 .ham8 .bottom {
			stroke-dasharray: 40 85;
			transform-origin: 50%;
			transition: transform 400ms, stroke-dashoffset 400ms;
		 }
		 .ham8.active .top {
			stroke-dashoffset: -64px;
		 }
		 .ham8.active .middle {
			transform: rotate(90deg);
		 }
		 .ham8.active .bottom {
			stroke-dashoffset: -64px;
		 }

  .dropdown-menu.lenght.icon-dropdown hr{
    margin:8px auto;
  }

  .dropdown-menu.lenght.icon-dropdown li:hover, .dropdown-menu.lenght.icon-dropdown li:hover strong {
    background-color:#f5f5f5;
  }

	footer .searchcontainer button {
		border-radius:0 3px 3px 0;
  }
  
  #sidebar-2 ul li:not(.divider) {
    font-size: 16px;
  }

  #sidebar-2 ul li:not(.divider):hover {
      background-color: #ED6C05;
  }

.dropdown-item.dropdown-item {
  margin-top: 0 !important;
}

.dropdown-item, .dropdown-item.dropdown-item * {
  line-height: normal !important;
}

.dropdown-item {
  padding: 5px !important;
  border-bottom: 1px solid #ddd;
  letter-spacing: normal;
  font-size: 16px;
}
.dropdown-item:first-of-type {
  border-top: none;
}
.dropdown-item:last-of-type {
  border-bottom: none;
  margin-bottom: 30px;
}
.dropdown-item > div span:first-child,
.dropdown-item button {
  font-size: .813em;
}
.dropdown-item img {
  width: 50px;
  height: 50px;
  border-radius: 50%;
}
.notification-dropdown-item {
  display: flex;
  align-items: center;
}
.notification-dropdown-item img {
  margin-right: .5em;
}
.notification-dropdown-item > div {
  display: flex;
  flex-direction: column;
}

.notification-dropdown-item > div span:last-child {
  font-size: .75em;
  color: #888;
  font-weight: 600;
}
.notification-dropdown-item > div span:last-child i {
  margin-right: 3px;
}
.notification-dropdown-item > div i {
  font-size: 15px;
  color: #ed6c05;
  margin-left: 0;
}

.friends-dropdown-item {
  display: grid;
  grid-template-columns: 50px 1fr auto auto;
  grid-column-gap: .625em;
  align-items: center;
}

.friends-dropdown-item .info {
  display: flex;
  flex-direction: column;
}

.friends-dropdown-item a {
  font-weight: bold;
  color: #3273dc !important;
  font-size: .85em;
}

.friends-dropdown-item .info span {
  grid-column: 1/-1;
  font-size: .813em;
}

.friends-dropdown-item.friends-dropdown-item a:hover {
  background-color: unset;
  color: #3273dc !important;
  text-decoration: underline !important;
}

.friends-dropdown-item > .buttons {
  justify-self: end;
}

.friends-dropdown-item >  button {
  color: white;
  font-weight: bold;
  border:none;
  border-radius: 3px;
  padding: .3em .8em;
}

.friends-dropdown-item > button:last-child {
  background-color: #ed6c05;
}

.friends-dropdown-item > button:first-of-type {
  background-color: #5a378c;
}

.dropdown-menu.lenght.icon-dropdown.msgMenu li span.username {
  padding:0px !important;
  margin:0;
}

.dropdown-menu.lenght.icon-dropdown.msgMenu li:last-child a {
  padding:0px !important;
}

.dropdown-menu.lenght.icon-dropdown.msgMenu li span {
  grid-column: 1/-1;
  font-size: .813em;
}

  @media (min-width:1200px) {
    .jumbotron {
      margin-left: 24px;
      width: 96.1%;
    }
  }

  .navbar-form {
    position:relative;
  }

  .navbar-form .form-group input {
    height:30px;
    border-radius: 5px;
  }

  .navbar-form button {
    position:absolute;
    border:none;
    padding: 5px 13px;
    right: 16px;
    top: 1px;
    background-color: #ececec;
    border-radius:3px;
  }

  #accordion, #username-dropdown-toggle a {
      font-weight:600;
  }

  #username-dropdown-toggle ul li {
    display: flex;
    align-items: center;
    padding: 10px 0;
}

#username-dropdown-toggle ul li:hover, #username-dropdown-toggle ul li:hover a {
    background-color: #f5f5f5 !important;
}

#username-dropdown-toggle ul li img {
    margin-left: 7px;
}

#username-dropdown-toggle ul li a {
    padding-left: 5px;
    margin-top: 0;
    padding: 0 0 0 5px !important;
}

  #username-dropdown-toggle li a {
      font-weight:normal;
    }

  .fa-user-friends, .fa-envelope, .glyphicon-bell {
      font-size:20px;
    }

  a, a:hover, a:active, a:visited, a:focus {
    text-decoration:none;
  }

  .footer_sec.orange {
      margin:auto 30px !important;
    }

  .view-profile {
    margin-right: 15px;
  }

  .logo-light {
    /* display:none */
  }

  .nav>li>a {
    padding-left:13px;
    padding-right:13px;
  }

  .navbar-default .navbar-nav>li>a.menudesign {
    font-size:14px;
  }

  .logo-light img {
    width: 160px;
    margin-top: 2px;
  }

  .navbar-form.navbar-right button i.glyphicon-search {
    padding: 2px;
  }

  .view-profile {
    float:right ;
    display:table;
    
  }

  #navsidebare {
    height:100% !important;
    position:fixed !important;
    margin-top:50px;
    opacity: 1 !important;
  }

  #navsidebare ul {
    margin-bottom:50px;
  }

  #navsidebare a {
    text-decoration:none;
    display: flex;
  }

  .tpsrch {
    line-height:1.5em;
  }

  .copyright p {
    text-transform:uppercase;
  }

  .top-searches-by div{
      border-bottom:1px solid #ddd;
      padding:10px;
    }

    .top-searches-by div > a {
    color: #fff !important;
    }

  .icon-dropdown {
    width:500px;
    height:400px;
    overflow-y:scroll;
  }

.navbar-toggle-2 {
  display:none;
}
 
 #navsidebare {
  position:fixed;
  overflow: scroll;
  height: 100vh;
  }

  #navsidebare a {
    color:#fff;
  }

   #navsidebare {
      overflow: scroll;
      height: 100vh;
    }

    li a.M {
      display: block;
      width: 100%;
      margin-top: 10px;
      /* background-color: red; */
      color: #ffffff;
      font-size: 16px;
  }

  .navsidebar
  {
      width:260px;
      height:650px;
      /*background-color:rgba(244,126,44,1);*/
      background-color: rgba(0,0,0,0.5);
      position:absolute;
      top:0;
      right:0;
      z-index:1031;
  }
  
  #sidebar-2 {
      background-color:#000;
      color:#fff;
      height:100%;
      width:260px;
      position:fixed;
      right:-2000px;
      transition:500ms;
      z-index:1031;
      overflow:scroll;
      margin-top: 50px;
    }

    #sidebar-2 ul {
      margin-bottom:45px;
    }

    #sidebar-2 ul li.divider {
      background-color:#222;
      height:1px;
    }

     #sidebar-2 ul li a {
       text-decoration:none;
       color:#fff;
       display: block;
       padding: 5px 25px;
     }

  #friend_counts {
    position: absolute;
    top: 5px;
  }

  .noti_counts {
    position: absolute;
    top: 5px;
    left: 25px;
  }

  .stay-tuned {
    margin:10px;
  }

  .navbar-toggle-2 {
    padding:10px;
    border: 1px solid #fff;
    border-radius: 5px;
    float:right;
   margin:7px 10px auto 0;
  }

  .navbar-toggle-2 div {
    padding:1px 10px;
    margin-bottom:4px;
    background-color:#fff;
  }

  .navbar-toggle-2 div:last-child {
    margin-bottom:0;
  }

   @media (max-width:520px) {
      .tpsrch {
        display:none;
      }
      .top-searches-by {
        display:block;
      }

      .navbar-form button {
        position: absolute;
        border: none;
        padding: 5px 6px;
      }

      .navbar-form .form-group input {
        width: 35vw !important;
        font-size: 12px;
        padding-left: 7px;
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

    @media (min-width:1361px) {
      #navsidebare, #sidebar-2 {
        display:none !important;
      }
    }

    @media (max-width:1360px) {
      .ham {
        display:block;
      }
    }

  @media (min-width: 1350px) {
    #myNavbar {
        position: unset !important;
    }
}

@media (max-width:1360px) and (min-width:769px) {
  #myNavbar .navbar-form {
    right: 70px !important;
  }
}

@media (min-width:1361px) {
  .navbar-form {
    display:block !important;
    
  }
}

   @media (max-width:1360px) {
    .navbar-collapse.collapse {
      margin-right:92px;
    }

    .navbar-form button {
      border-top-right-radius: 5px;
      border-bottom-right-radius: 5px;
    }

      #myNavbar .navbar-form {
        display:none;

        position: absolute;
        border-radius: 3px;
        margin:0;
        padding:0px;
        border:none;
        
        top: 8px;
        right: 106px !important;
      }

      .navbar-form input {
        margin:0;
        border: 3px solid #936BCB !important;
        padding:14px;
        width: 232px !important;
      }

      .navbar-form button {
        top: 3px;
        border-radius: 0;
        right: 3px;
      }

      .search-dropdown-toggle {
        display:inline-block
      }

      #myNavbar {
        float:right;
      }

      .navbar-toggle-2 {
        display:block;
        position:absolute;
        right:5px;
        top:5px;
      }
      
      /* username name margin right */
      .nav.navbar-nav.navbar-right li:nth-child(5) {
        margin-right:25px;
      }
    }
 
  @media (max-width:768px) {

    #friends-dropdown li:last-child {
      top: 416px;
    }

    #notifications-dropdown li:last-child {
      top: 415px;
    }

    #myNavbar .navbar-form {
      right: 30px !important;
      top: 3px !important;
    }

    .dropdown-item {
        font-size: 15px;
      }

    #message_count, #friend_counts {
      top:0;
    }

    .logo-light {
      margin-left: 10px;

    }
}


    .msgMenu li{border-bottom: 1px solid #e6e6e6; margin-top: -2px !important}

.msgMenu li:hover{background: #e6e6e6 !important; } 

    @media (max-width:1210px) {
      #myNavbar .nav:nth-child(1):nth-child(-n+6) {
        display:none;
      }

      .last-footer, .tpsrch-table, .dosrch {
      font-size:12px;
    }
  }

  @media (min-width:500px) {
    .search-dropdown-toggle:hover{
      color:#ed6c05;
    }
  }


    @media (max-width:768px) {
      /* #myNavbar .nav, #myNavbar, .nav {
        display:block !important;
      } */

    footer + div .pull-right {
      float:left !important;
      margin-top:15px !important;
        margin-left:8px !important;
    }

      .navbar-header .navbar-toggle {
        display:none;
      }

      .navbar-nav .open .dropdown-menu {
        background-color:#fff;
      }

      #username-dropdown-toggle ul.dropdown-menu{
       width:100px !important;
       position: absolute !important;
       left: -66px !important;
      right: 0 !important;
     }

     .copyright p{
			float:none !important;
			margin-top:15px;
			margin-left:8px;
    }
    
    .footer_sec {
      /* padding:0 10px !important;
      text-align:center; */
    }

    .search-dropdown-toggle {
      top: 9px;
      right: -14px;
    } 
      
  }

  @media (max-width:600px) {
		#navsidebare {
			width:100%;
		}
 		#navsidebare #cross{
			position:absolute;
			right:5px;
			top:5px;
    }
    
    #sidebar-2 {
      width:100% !important;
    }

    .view-profile {
      float: none !important;
      display: block ;
      margin-left: 48px ;
    }

    #myNavbar .navbar-form {
      right: 20px !important;
    }
	}

  @media (max-width: 767px) {
  .navbar-nav .open .dropdown-menu {
        width: 500px;
    }
  }

  @media (max-width:500px) {
    #navsidebare, #sidebar-2 {
      margin-top:0;
    }

    #sidebar-2 ul {
      margin-top:40px;
    }

    .logo-light img {
      width: 35vw;
      margin-top: 6px;
    }

    .search-dropdown-toggle {
      right: -30px !important;
    }

    .navbar-nav {
    margin-right: -15px !important;
    }

    .ham {
      margin-right:-10px;
    }

    .jumbotron.jumbotron-fluid {
      display:none;
    }

    .well {
      margin-top:90px;
      margin-left:0 !important;
    }

    /* #bb img {
      right: 17vw;
    } */

    #myNavbar .navbar-form { 
      right:0 !important;
    }

    .arrow_button {
      position: absolute;
      right: 5px;
    }

    .navbar-nav .open .dropdown-menu {
      width:100%;
    }

    .friends-dropdown-item {
      grid-template-columns: 50px 1fr 1fr;
    }

    .friends-dropdown-item img {
      grid-row: 1/3;
    }

    .friends-dropdown-item button {
      margin-top: 5px;
      padding: .5em .2em;
    }

    .friends-dropdown-item button:first-of-type {
      grid-row: 2;
      grid-column: 2;
    }

    .friends-dropdown-item button:last-of-type {
      grid-row: 2;
      grid-column:3;
    }

    #notifications-dropdown li:last-child {
      top: 415px;
    }

    #friends-dropdown li:last-child {
      top: 416px;
    }
  }

    @media (max-width:500px) {
      #myNavbar .nav.navbar-nav.navbar-right li.dropdown:nth-child(5){
        display:none !important;
      }

      .navbar-nav {
        margin:0;
      }

      .text-bar input[type='text'] {
        width: 97% !important;
      }

      .emojiPicker {
        width: 99% !important;

        height:290px !important;
        top: -5px !important;
      }

      .emojiPicker .sections {
        height: 206px !important;
      }

    }

    @media (max-width:375px) {
      .search-dropdown-toggle {
        right: -35px !important;
      }

      #myNavbar .navbar-form {
        right: -10px !important;
      }
      
      .fa-user-friends, .fa-envelope, .glyphicon-bell {
        font-size: 18px;
      }

      #friends-dropdown li:last-child {
        top: 414px;
      }

      #notifications-dropdown li:last-child {
        top: 413px;
      }
    }

</style>

<body style="background-color: #2B354B; overflow-x:hidden;" onload='mediaQueryResponse1()'>
  <!--  -->
  <!-- navigation panel -->
  <div class="main-section">
    <div class="border-chat">
        <div class='header'>
            <div class="img-wrapper">
              <img src="{{ $user_assets }}/img/avatar.png" alt="">
              <span></span>
            </div>
            <div class="name-and-status">
              <a href="#">username</a>
              <span>Active now</span>
            </div>
            <img src="{{ $user_assets }}/icons/close.svg" alt="" class='close'>
          </div>
    </div>
<script>

  $('.close').click(function() {
    $('.main-section').css('bottom', '-465px');
  });
</script>
    <div class="row border-chat">
      <div class="col-md-12 col-sm-12 col-xs-12 second-section">
        <div class="chat-section" id="chat-scroll">
          <ul>
            {{--
            <li>
              <div class="left-chat"> --}}
                {{-- <img src="image/1499345471_boy.png"> --}}
                {{-- <span class="receiver"> --}}
                  {{-- </span> --}}
                {{-- <span>2 min</span> --}}
                {{--
              </div>
            </li>
            --}}
            {{--
            <li>
              <div class="right-chat"> --}}
                {{-- <img src="image/1499345471_boy.png"> --}}
                <span class="sender"></span>
                <span class="new_message"></span>
                {{-- <span>2 min</span> --}}
                {{--
              </div>
            </li>
            --}}
            {{--
            <li> --}}
          </ul>
        </div>
      </div>
    </div>
    <div class="row border-chat third-section">
      <form id='form' enctype="multipart/form-data">
        <div class="text-bar">
          <div class="col-xl-11 col-lg-11 col-md-11 col-sm-11 col-xs-11">

            {{csrf_field()}}

            <span style="color: red" id="error"></span>
            <input type="text" id="send_messgae" name="send_messgae" class="emojiable-option" placeholder="Write Message">

            <input type="hidden" required="" id="to_userss" name="to_user" placeholder="Write messege">
          </div>

          <div class="col-xs-1">
          <label id="bb"> <i class="fas fa-paperclip attach"></i>
              <input type="file" name="file" id="file" size="60">
            </label>
            {{-- <textarea id="example1"></textarea> --}}

          </div>
          <div class="col-xs-1">
            <button class="arrow_button"><svg style="enable-background:new 0 0 24 24;" version="1.1" viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="info"/><g id="icons"><path d="M21.5,11.1l-17.9-9C2.7,1.7,1.7,2.5,2.1,3.4l2.5,6.7L16,12L4.6,13.9l-2.5,6.7c-0.3,0.9,0.6,1.7,1.5,1.2l17.9-9   C22.2,12.5,22.2,11.5,21.5,11.1z" id="send"/></g></svg>
  </button>
          </div>
        </div>
      </form>
    </div>
  </div>
  </div>
  </div>
  <script type="text/javascript">
    $(document).ready(function () {
      $(".main-section .header .close").click(function () {
        $('.main-section').toggleClass("open-more");
        $('#bb .attach').toggle();
      });
    });

    var sideGoMoreOpen = false;
  </script>

  <style type="text/css">
    .go_more {
      background-color: #ffffff;
      height: 350px;
      overflow-y: scroll;
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
      margin-left: -25px;
    }

    input[type="file"] {
      display: none;
    }

    /* .emojy_image {
      font-size: 30px;
      margin-left: -120px;
      color: white;
      padding: 0px !important;
    }

    .arrow_image {
      padding: 10px;
    }

    .arrow_button {
      margin-left: -28px;

    } */

    #navsidebare ul {
    width:88% !important;
    margin-left: 32px !important;
    margin-top:45px !important;
}

    #navsidebare img  {
      margin-right: 7px;
      margin-top:8px !important;
    }

  li a.M:hover {
   background-color: #ED6C05 !important;
  }

  li a.M {
    border-radius:10px;
  }

@media (max-width: 768px) {

  .dropdown-menu {
    position: fixed !important;
    top: inherit !important;
    /* left: -90px !important; */
    z-index: 1000 !important;
    /* float: left !important; */
    min-width: 160px !important;
    padding: 5px !important;
    margin: 2px 0 0 !important;
    font-size: 14px !important;
    /* text-align: center !important; */
    list-style: none !important;
    background-color: #fff !important;
    -webkit-background-clip: padding-box !important;
    background-clip: padding-box !important;
    border: 1px solid #ccc !important;
    border: 1px solid rgba(0,0,0,.15) !important;
    border-radius: 4px !important;
    -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175) !important;
    box-shadow: 0 6px 12px rgba(0,0,0,.175) !important;
    max-width: 500px !important;
  }

  #username-dropdown-toggle ul.dropdown-menu {
      left: -73px !important;
    }
}

@media (max-width:505px) {
      .icon-dropdown, {
        width:100vw !important;
      }

      #friends-dropdown li:last-child, #notifications-dropdown li:last-child {
        width:97.5vw !important;
      }
    }

    @media (max-width:370px) {
    

    .fa-user-friends, .fa-envelope, .glyphicon-bell {
      margin-left: -2px;
      margin-right: -2px;
    }

    /* .glyphicon-bell {
      margin-right:-2px;
    } */
    
    .navbar-nav {
      margin-right: -25px !important;
    }
  }

  @media (max-width:319px) {
    .search-dropdown-toggle, .navbar-form {
      display:none !important;
    }

    .navbar-nav {
      margin-right: -40px !important;
    }
  }

@media (min-width:501px) {
    li a.M {
        width:90% !important;
    }

    #navsidebare ul {
    width:90% !important;
    margin-top:10px !important;
    }
}

@media (max-width:400px) {
  .navbar-form button {
    padding: 5px 4px !important;
  }

  .navbar-form input[type='text'] {
    padding-left:3px !important;
  }
}


  </style>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid innermenu">
      <div class="navbar-header logo_height">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- <a href="{{ url('/') }}"><img src="{{ $user_assets }}/db_images/KH-logo2.png" alt="" width='40px'></a> -->
        <a class="logo-light" href="{{ url('/') }}"><img alt="" src="{{ $user_assets }}/images/kaboolhai.png" class="logo" /></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
        <li><a href="{{ url('/') }}" class="menudesign">Home</a></li>
          <li class="{{ Request::is('/') ? 'active1' : '' }}"><a href="{{ url('public-profile',user_data()->id) }}"
              class="menudesign">My Profile</a></li>

              <li><a href="{{ url('assisted-service') }}" class="menudesign">Assisted Service</a></li>

          <!-- <li><a href="{{ url('inbox') }}" class="menudesign">Inbox</a></li> -->
          <!-- <li><a href="{{ url('sent-items') }}" class="menudesign">Sent Items</a></li> -->
          <li><a href="{{ url('blocked-list') }}" class="menudesign">Block List</a></li>

          {{-- <li><a href="{{ url('edit-profile',user_data()->id) }}" class="menudesign">Edit Profile</a></li> --}}
          <li><a href="{{ url('manage-profile') }}" class="menudesign">Manage Profile</a></li>

          <li><a href="{{ url('my-photo') }}" class="menudesign">My Photos</a></li>

          <li class="dropdown">
            <a class="dropdown-toggle menudesign" data-toggle="dropdown" href="#">Go More <span class="caret"></span></a>
            <ul class="dropdown-menu go_more">
              <li><a href="{{ url('favourite-list') }}">My Favourite</a></li>
              <li><a href="{{ url('find-exact-match') }}">Find Exact Match</a></li>
              <li><a href="{{ url('profile-writing-tips') }}">Profile Writing Tips</a></li>

              <li><a href="{{ url('friend-list') }}">Friend List</a></li>

              <li><a href="{{ url('public-profile',user_data()->id) }}">My Profile</a></li>
              <li class="divider"></li>
              <li><a style="background-color: #ffffff; color: black !important;" href="{{ url('hide-profile-list') }}">Hidden
                  Profiles</a></li>
              <li><a href="{{ url('email-prefrences') }}">Email Prefrences</a></li>


              <li><a href="{{ url('invite-friend') }}">Invite Friends</a></li>
              <li><a href="{{ url('photo-permission-list') }}">Photo Permisions</a></li>
              <li class="divider"></li>


              <li><a href="{{ url('who-looking-for-me') }}">Who Looking For Me</a></li>
              <li><a href="{{ 'who-am-i-looking' }}">Who Am I Looking</a></li>
              <li><a href="{{ url('question') }}">My Question</a></li>
              <li class="divider"></li>
              <li><a href="{{ url('notification') }}">Notifications</a></li>
              <!-- <li><a href="{{ url('statistics') }}">Statistics</a></li> -->
              <li><a href="{{ url('settings') }}">Setting</a></li>
              <li><a href="{{ url('close-account') }}">Close My Account</a></li>
              <li><a style="background-color: #ffffff; color: black !important;" href="{{ url('show-search') }}">Save
                  Search</a></li>
              <li><a href="{{ url('my-notes') }}">My Notes</a></li>
              <li><a href="{{ url('tell-friend') }}">Tell Friend</a></li>
              <li><a href="{{ url('sitemap') }}">Sitemap</a></li>
              <li><a href="{{ url('help-center') }}">Help Center</a></li>
              <li><a href="{{ url('assisted-service') }}">Assisted Service</a></li>

              <li class="divider"></li>


            </ul>
          </li>
        </ul>

        

        <form class="navbar-form navbar-right" method="get" action="{{ url('user-search') }}">
          <div class="form-group">
            <input type="text" name="user_name" class="form-control" placeholder="Search by name">
          </div>
          <button type="submit" class="btn btn-default"><i class=" glyphicon glyphicon-search"></i></button>
        </form>

          <i class='glyphicon glyphicon-search search-dropdown-toggle' onclick='toggleSearch()'></i>

        <script>
          var dropdownsVisible = true;

          


          

          function toggleSearch() {
            $('.navbar-form').toggle();
            $('.search-dropdown-toggle').toggleClass('orange');
            // $('.navbar-form').css{'position','absolute'}

            if(dropdownsVisible) {
                $('.navbar-nav.navbar-right, .navbar-nav>li:last-child').css('visibility', 'hidden');
                dropdownsVisible = false;
              }
              else {
                $('.navbar-nav.navbar-right, .navbar-nav>li:last-child').css('visibility', 'visible');
                dropdownsVisible = true;
              }
          }

          mq = window.matchMedia( "(min-width: 1360px)" );
         
         mq.addListener(mediaQueryResponse) // attach listener function to listen in on state changes so a page refresh will not be required
 
         // search option will stay in the same line in tablet mode 
         function mediaQueryResponse(mq) {
 
           if(mq.matches == true && dropdownsVisible == false) {
               $( ".navbar-nav.navbar-right, .navbar-nav>li:last-child" ).css('visibility', 'visible');
               // alert('hi');
           } if (mq.matches == false && dropdownsVisible == false) {
            $( ".navbar-nav.navbar-right, .navbar-nav>li:last-child" ).css('visibility', 'hidden');
           }
         }
         mediaQueryResponse(mq);
        </script>

        <ul class="nav navbar-nav navbar-right">


          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;" onclick="return friend_count()">
              <span class="fas fa-user-friends icon_color"></span><span id="friend_counts">@if(!empty(count_friend()))
                {{ count_friend() }} @endif</span>
              <span id="request_counts"></span>
            </a>
            <ul class="dropdown-menu lenght icon-dropdown" id='friends-dropdown'>
              <li class="notify_section">

              </li>
              @if(count(get_friend()))
              @foreach(get_friend() as $row)
              <div class="friend" id="friends">
                <li>
                  @if(!empty($row->photo->image))
                  <img src="{{ $user_assets }}/my_photo/{{ $row->photo->image }}" style="width: 45px; height: 45px; border-radius:100px; " alt="">
                  @else
                  <img src="{{ $user_assets }}/dashbord/userpic.jpg" style="width: 45px; height: 45px; border-radius:100px; " alt="">

                  @endif
                  <a href="{{ url('public-profile',$row->user_id) }}">{{ $row->user->user_name }} send friend request</a><a
                    href="{{ url('delete-request',$row->user_id) }}" class="btn pull-right">Delete</a><a href="{{ url('confirm-friend',$row->user_id) }}"
                    class="btn pull-right">Confirm</a>

                </li>
              </div>
              @endforeach
              @else

              <span style="margin-left: 20px;">No New Request</span>
              @endif
              <hr style="width: 100%;">

              <span style="margin-left: 20px; font-size: 20px;"> Recent Join User</span>
              <hr style="width: 100%;">
              @if(count(recent_join()))
              @foreach(recent_join() as $row)
              <!-- <div> -->
                <li class="friends-dropdown-item dropdown-item">
                  <img src="https://source.unsplash.com/user/erondu/1600x900" alt="">
                  <div class="info">
                    <a href="#">username</a>
                    <span>15ft 11in - 180cm Married Urdu</span>
                  </div>
                    <button>Accept</button>
                    <button>Remove</button>
                </li>
                  @endforeach
                  @endif
                <li class="text-center view-all">
                {{-- <hr style="width: 100%;"> --}}
                <a href="{{ url('recent-join') }}">
                  
                    <span style="font-size: 15px; color: #333;">View All</span>
                  
                </a>
              </li>

            </ul>
          </li>

          <li class="dropdown">
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" title="Message" onclick="return get_message()">
              <span class="fa fa-envelope icon_color"></span><span id="message_count" style="color: red">@if(!empty(count_message()))
                {{ count_message() }} @endif</span></a>
            <ul class="dropdown-menu lenght icon-dropdown">

              @if(!empty(tochat()))
              @foreach(tochat() as $row)
             
             
              @if($row->to_user==Session::get('user_id'))
              <li>
                <a class="left-first-section" style="background-color: #ffffff; color: black !important;" rel="{{ $row->from_users->id }}"
                  href="#">
                  @if(!empty($row->photo->image))
                  <img src="{{ $user_assets }}/my_photo/{{ $row->photo->image }}" style="width: 45px; height: 45px; border-radius:100px; ">
                 
                 
                  @else
                  <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=Image +Not+Found" style="width: 45px; height: 45px; border-radius:100px; ">
                  @endif
                  <span>{{ $row->from_users->user_name}}</span>
                  <hr>
                  <span>{{ $row->message }}</span></a></li>
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

          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;" onclick="return read_notification()">
               <span class="glyphicon glyphicon-bell icon_color">
             <span class="noti_counts" style="margin: -8px;" >
             @if(empty(count_notification())) <style>.noti_counts{background-color:#5a378c;}</style> @endif
             @if(!empty(count_notification())) {{ count_notification() }}
             <style>.noti_counts{background-color:#FF4646;}</style> @endif</span></span>
             </a>
            <ul class="dropdown-menu lenght icon-dropdown" id='notifications-dropdown'>
              @if(!empty(get_notification()))
              <div id="get_noti" class="get_notifi">
                  @foreach(get_notification() as $row)
                <!-- <li class="notify_section">
                  <a href="{{ url('public-profile',$row->sender_id) }}">
                    @if(!empty($row->photo->image))
                    <img src="{{ $user_assets }}/my_photo/{{ $row->photo->image }}" style="width: 45px; height: 45px; border-radius:100px; " alt="">
                    @else
                    <img src="{{ $user_assets }}/dashbord/userpic.jpg" style="width: 45px; height: 45px; border-radius:100px; " alt="">

                    @endif

                    <span >{{
                            $row->user->user_name.' '.$row->notification_type }}</span>

                  </a>
                </li> -->

                <li class="notification-dropdown-item dropdown-item">
                  <img src="https://source.unsplash.com/user/erondu/1600x900" alt="">
                  <div>
                    <span><strong>username</strong> viewed your profile</span>
                    <span><i class="fas fa-user-circle"></i>10h</span>
                  </div>
                </li>

                @endforeach
                <a href="{{ url('notification') }}">
                  <li style="color:#333; font-size:15px;" class="text-center">
  
                    Show all
                </a>
              </div>

              @endif




            </ul>
          </li>

          <li class="dropdown" id='username-dropdown-toggle'>
            <a class="dropdown-toggle menudesign" data-toggle="dropdown" href="#">
              @if(count(user_data())) {{ user_data()->user_name }} @endif<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><img width="20" height="20" src="http://localhost/KBH/public/user_assets/dashboard.svg" alt=""><a href="{{ url('dashboard') }}">Dashboard</a></li>

              <li><img width="20" height="20" src="http://localhost/KBH/public/user_assets/logout.svg" alt="log out"><a href="{{ url('logout') }}">Logout</a></li>
            </ul>
          </li>

          <!-- <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
        </ul>
      </div>
    </div>  
  </nav>


   <div class="navsidebar wow slideInRight" id="navsidebare" style="display:none;">
        <div class="row">
          <ul style="margin-left:25px;list-style-type:none;width:100px;line-height:50px;margin-top:15px;">

         <li class="wow fadeInDown" data-wow-delay="0.1s">
        @if(Session::get('user_id'))
            <a href="{{ url('dashboard') }}" class="M">
              <span>
                <!-- <img width="40" height="40" src="{{ $user_assets }}/login.svg" alt="" /> -->
                <img width="40" height="40" src="{{ $user_assets }}/dashboard.svg" alt="">
              </span>
              <span style="padding-left:15px;">Dashboard</span>
            </a>
          </li>

          <li class="wow fadeInDown" data-wow-delay="0.2s">
            <a href="{{ url('logout') }}" class="M">
              <span>
              <img width="40" height="40" src="{{ $user_assets }}/logout.svg" alt="log out">
              </span>
              <span style="padding-left:15px;">Log out</span>
            </a>
          </li>
          @endif

            @if(empty(Session::get('user_id')))
            <li class="wow fadeInDown login-li" data-wow-delay="0.3s"><a href="#" class="M"><span><img width="40"
                    height="40" src="{{ $user_assets }}/login.svg" alt="" /></span><span style="padding-left:15px;">Sign
                  in</span></a></li>
            <li class="wow fadeInDown" data-wow-delay="0.4s"><a href="{{ url('register') }}" class="M"><span><img width="40"
                    height="40" src="{{ $user_assets }}/create_account.png" alt="" /></span><span style="padding-left:15px;">Create
                  Account</span></a></li>
            @endif
            <li class="wow fadeInDown" data-wow-delay="0.5s"><a href="{{url('about-us')}}" class="M"><span><img width="40"
                    height="40" src="{{ $user_assets }}/about_us.png" alt="" /></span> <span style="padding-left:10px;">About
                  Us</span></a></li>
            <li class="wow fadeInDown" data-wow-delay="0.6s"><a href="{{ url('advance-search') }}" class="M"><span><img
                    width="40" height="40" src="{{ $user_assets }}/find_match.png" alt="" /></span><span style="padding-left:15px;">Find
                  Match</span></a></li>
            {{-- <li class="wow fadeInDown" data-wow-delay="0.7s"><a href="{{ url('our-police') }}" class="M"><span><img
                    width="40" height="40" src="{{ $user_assets }}/our_policy.png" alt="" /></span><span style="padding-left:15px;">Our
                  Policy</span></a></li> --}}
            <li class="wow fadeInDown" data-wow-delay="0.8s"><a href="{{ url('policy-privacy') }}" class="M"><span><img
                    width="40" height="40" src="{{ $user_assets }}/privacy.png" alt="" /></span> <span style="padding-left:10px;">Privacy</span></a></li>
            <li class="wow fadeInDown" data-wow-delay="0.9s"><a href="http://kaboolhai.com/blog/" target="_blank" class="M"><span><img
                    width="40" height="40" src="{{ $user_assets }}/blog.svg" alt="" /></span><span style="padding-left:15px;">Blogs</span></a></li>
            <li class="wow fadeInDown" data-wow-delay="1s"><a href="{{ url('faqs') }}" class="M"><span><img width="40"
                    height="40" src="{{ $user_assets }}/faqs.png" alt="" /></span> <span style="padding-left:10px;">FAQs</span></a></li>
            <li class="wow fadeInDown" data-wow-delay="1.1s"><a href="our-partnar" class="M"><span><img width="40" height="40" src="{{ $user_assets }}/our_partners.png"
                    alt="" /></span><span style="padding-left:15px;">Our Partners</span></a></li>
            <li class="wow fadeInDown" data-wow-delay="1.2s"><a href="{{ url('contact-us') }}" class="M"><span><img
                    width="40" height="40" src="{{ $user_assets }}/contact_us.png" alt="" /></span><span style="padding-left:15px;">Contact</span></a></li>
            <li class="wow fadeInDown" data-wow-delay="1.3s"><a href="{{ url('help-center') }}" class="M"><span><img width="39" src="{{ $user_assets }}/images/support.png" alt="" style='margin-left:2px;'/></span><span style="padding-left:15px;">Help
                  Center</span></a></li>
            
            @if(Session::get('user_id'))
            <li class="wow fadeInDown" data-wow-delay="1.4s"><a href="#" class="M" id='side-go-more-li'><span><img width="40" height="40" src="{{ $user_assets }}/more.svg" alt="go more"></span> <span style="padding-left:10px;">Go more</span></a></li>

            @endif

          </ul>
        </div>
      </div>
    </nav>

    <div id="sidebar-2"> 
      <ul>
      <li><a href="{{ url('manage-profile') }}">Manage Profile</a></li> 
      <li><a href="{{ url('my-photo') }}">My Photos</a></li>
      <li><a href="{{ url('favourite-list') }}">My
                        Favourite</a></li>
        <li><a href="{{ url('find-exact-match') }}">Find
            Exact Match</a></li>
        <li><a href="{{ url('profile-writing-tips') }}">Profile
            Writing Tips</a></li>
        <li><a href="{{ url('friend-list') }}">Friend
            List</a></li>
        <li><a href="{{ url('public-profile',user_data()->id) }}">My
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
        <!-- <li><a href="{{ url('statistics') }}">Statistics</a></li> -->
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
            <!-- <li><a href="{{ url('inbox') }}" class="menudesign">Inbox</a></li> -->
            <!-- <li><a href="{{ url('sent-items') }}" class="menudesign">Sent Items</a></li> -->
            <li><a href="{{ url('blocked-list') }}" class="menudesign">Block List</a></li>
      </ul>  
    </div>

    <svg class="ham hamRotate ham8" viewBox="0 0 100 100" width="80" onclick="this.classList.toggle('active')">
      <path
          class="line top"
          d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20" />
      <path
          class="line middle"
          d="m 30,50 h 40" />
      <path
          class="line bottom"
          d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20" />
    </svg>

    <script>
      $('.ham').click(function(){
        if(!sideGoMoreOpen)
          $('#navsidebare').toggle('slow');

        else {
          // document.querySelector('#sidebar-2').style.right = '-260px';
          $('#sidebar-2').css('right', '-2000px');
          sideGoMoreOpen = false;
        }
      });

          mq = window.matchMedia( "(max-width: 1349px)" );
         
         mq.addListener(mediaQueryResponse) // attach listener function to listen in on state changes so a page refresh will not be required
 
         // search option will stay in the same line in tablet mode 
         function mediaQueryResponse(mq) {
 
           if(mq.matches) {
               $( ".navbar-toggle-2" ).show();
               // alert('hi');
           } else $( ".navbar-toggle-2" ).hide();
         }
         mediaQueryResponse(mq);

         $('#side-go-more-li').click(function(){
          $('#navsidebare').hide('fast');
          $("#sidebar-2").css('right', '0');
          sideGoMoreOpen = true;
      });


      var mq1 = window.matchMedia( "(max-width: 500px)" );
        if (mq1.matches) {
            // window width is at less than 570px
        }
        else {
            // window width is greater than 570px
        }

    </script>
  
  <div class="jumbotron jumbotron-fluid" style="background-image: url({{ $user_assets }}/banner1.jpg);background-size: cover; padding:89px; background-repeat: no-repeat;">

  </div>

  <div class="row">
    <div class="col-md-3">
      <div class="well" style="background-color: #40395b;border-color:#ea670f;">
        <div class="row">
          <a href="{{ url('public-profile',user_data()->id) }}">
            <div class="text-center">
              @if(!empty(get_photo()))
              <img src="{{ $user_assets }}/my_photo/{{ get_photo() }}" width="175" height="175" class="user_img" style="margin-left: ">
              @elseif(user_data()->image_name)
              <img src="{{ $user_assets }}/profile_image/{{ user_data()->image_name }}" width="175" height="175" class="user_img">

              @else

              <img src="{{ $user_assets }}/sunrise.jpg" width="175" height="175" class="user_img">

              @endif
              <p class="user_name_db" style="margin-top:5px;"> {{ user_data()->firstname.'
                '.user_data()->lastname }}</p>
            </div>
          </a>
          <div class="col-sm-3"></div>
        </div>
        <hr>

        <div class="row">
          <ul class="side_nav">
            <li class="side_menu" style="padding:6px;"><a href="{{ url('dashboard') }}" class="r hvr-grow">Home</a></li>
            <li class="side_menu" style="padding:6px;"><a href="{{ url('about-us') }}" class="r hvr-grow">About Us</a></li>
            <li class="side_menu" style="padding:6px;"><a href="{{ url('find-exact-match') }}" class="r hvr-grow">Find
                Match</a></li>
            {{-- <li class="side_menu" style="padding:6px;"><a href="{{ url('our-police') }}" class="r hvr-grow">Our
                Policy</a></li> --}}
            <li class="side_menu" style="padding:6px;"><a href="{{ url('policy-privacy') }}" class="r hvr-grow">Privacy
                & Policy</a></li>
            <li class="side_menu" style="padding:6px;"><a href="{{ url('faqs') }}" class="r hvr-grow">FAQ's</a></li>
            <li class="side_menu" style="padding:6px;"><a href="http://kaboolhai.com/blog/" target="_blank" class="r hvr-grow">Blogs</a></li>

            <li class="side_menu" style="padding:6px;"><a href="{{ url('our-partnar') }}" class="r hvr-grow">Our
                Partners</a></li>
            <li class="side_menu" style="padding:6px;"><a href="{{ url('contact-us') }}" class="r hvr-grow">Contact</a></li>
            <li class="side_menu" style="padding:6px;"><a href="{{ url('tell-friend') }}" class="r hvr-grow">Tell
                friend</a></li>
            <li class="side_menu" style="padding:6px;"><a href="{{ url('assisted-service') }}" class="r hvr-grow">Assisted
                Service</a></li>
          </ul>
        </div>

      </div>
    </div>
   
     @yield('data')

     <footer>
        
      
      <section class="no-padding footer_sec" style="background-color:#5a378c;">

      <section class="footer_sec orange" style="margin-bottom:-19px;">
          <div class="container">
              <div class="row padding-two sm-text-center" style="padding-top:20px;padding-bottom: 43px;">
                  <div class="col-md-9" >
                      <h4 class="white-text font-weight-600" style="font-family:sans-serif;color:white">Stay tuned for the launch of Best & Secure Matrimonial App!</h4>
                      <p class="white-text" style="font-family:sans-serif;text-align:justify;color:white">It has been our utmost desire to introduce an outstanding and easy to use matrimonial application for IOS and Android users. We have been working hard in this stance and are planning to come up with a user-friendly and secure Matrimonial App so that our users stay updated while on the go!</p>
                      <p class="white-text" style="font-family:sans-serif;text-align:justify;color:white">The app will be soon available for both Android and Apple iPhone users in the respective play stores. Stay tuned for the launch of our ‘Kabool Hai Matrimonial app’ as the early birds will be given early access and will get free subscription.</p>
                  </div>
                  <div class="col-md-3 padding-one" style="padding-top:10px; text-align:center">
                      <a class="" href="#"><img src="{{ $user_assets }}/images/google-play.png" width="193" height="58"></a><br><br>
                      <a class="" href="#"><img src="{{ $user_assets }}/images/apple-store.png" width="193" height="58"></a>
                  </div>
              </div>
          </div>
      </section>

        <div class="container mgtd">
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
                        <td class="flinks"><a href="#">Payment</a></td>
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
                    <tr>
                        <td class="flinks"><a href="{{ 'payment' }}">Payment</a></td>
                    </tr>                                       
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
                      <a href="javascript:;" data-toggle="modal" data-target="#advance_search">Advance Search</a></td>
                    
                    </tr>
                    <tr>
                     

                      <td class="flinks">
                      <a href="javascript:;" data-toggle="modal" data-target="#keyword_search">Keyword Search</a></td>

                       
                    </tr>
                    <tr>

                      <td class="flinks">
                      <a href="javascript:;" data-toggle="modal" data-target="#job_search">Occupational Search</a></td>
                      
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
                        <td class="flinks"><a href="#"><i class="fa fa-facebook-square fa-3x"></i> <i class="fa fa-youtube-square fa-3x"></i> <i class="fa fa-twitter-square fa-3x"></i> <i class="fa fa-google-plus-square fa-3x"></i> <i class="fa fa-linkedin-square fa-3x" style="color:white;"></i></a></td>
                    </tr>
                                                           
                </table>
            </div>

            <div class="col-md-3">
               <p class="fhead">Subscribe to Our Newsletters</p>
               <p class="subt">Never miss our special offers</p>
               <div class="searchcontainer">
                   <form action="{{ url('subscribe') }}" method="post">
                    {{ csrf_field() }}
                       <input type="text" class="form-control" style="height:44px;width:225px;border-radius-left: 5%;" placeholder="Enter Your Email" name="search">
                       <button type="submit" class='fa fa-search'></button>
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

                <div class="top-searches-by">
                <div><a href="{{ url( 'pakistani') }}">Pakistani Muslim Matrimony</a></div>
                <div><a href="{{ url( 'UAE') }}">UAE Muslim Matrimony</a></div>
                <div><a href="{{ url( 'United-Kingdom') }}">United Kingdom Muslim Matrimony</a></div>
                <div><a href="{{ url( 'USA') }}">USA Muslim Matrimony Muslim Matrimony</a></div>
                <div><a href="{{ url( 'canada') }}">CANADA Muslim Matrimony</a></div>
					    </div>
            </div>
        </div>

        </div>
      </section>
         

    

     </footer>
    
 
<div style="width:100%;background-color:#222;">
        <div class="container">
            <div class="row" style="padding-top:15px;padding-bottom: 15px;">
            <div class="col-sm-6">
                <table>
                    <tr class="dosrch">
                        <th><a href="{{ url('term-condation') }}">Terms</a></th>
                        <th><a href="{{ url('policy-privacy') }}">Privacy Policy</a></th>
                        <th><a href="{{ url('sitemap') }}" style="border:none;">Site Map</a></th>
                    </tr>
                </table>
            </div>

            <div class="col-sm-6">
                <p class="pull-right" style="color:#ffffff;">&copy;2018 Kaboolhai.All rights reserved.Powered By <a style="color:white;" href="http://www.ranglerz.com/" target="__blanck">Ranglerz</a>.</p>
            </div>
        </div>
        </div>
    </div>

{{-- Basic Search --}}



<div class="modal fade" data-backdrop="static" data-keyboard="false" id="basic_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title tb-modal-title"><center>Basic Search </center>
        </h5>
      </div>

<div class="modal-body">
<form method="get" action="{{ url('user-search') }}">
  {{ csrf_field() }}
  
<div class="form-group">
<label>Looking for</label>
          
        </div>
        <div class="row">
        <div class="col-md-6">
           <input type="radio" value="Female" name="loking_for"> Bride
         </div>
             <div class="col-md-6">
          
             <input type="radio" value="Male" name="loking_for"> Groom
             
          </div>   
          </div>
         
      
  
<br>
     <div class="form-group">
      
          <label>Age</label>
        </div>
        <div class="row">
        <div class="col-md-5">
           <select name="age_from" class="form-control">
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
            <select name="age_to" class="form-control">
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
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Search</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>


{{-- advance search --}}


<div class="modal fade" data-backdrop="static" data-keyboard="false" id="advance_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title tb-modal-title"><center>Search by Advance info</center>
        </h5>
      </div>

<div class="modal-body">
<form method="get" action="{{ url('user-search') }}">
  {{ csrf_field() }}
  
<div class="form-group">
<label>Looking for</label>
          
        </div>
        <div class="row">
        <div class="col-md-6">
           <input type="radio" value="Female" name="loking_for"> Bride
         </div>
             <div class="col-md-6">
          
             <input type="radio" value="Male" name="loking_for"> Groom
             
          </div>   
          </div>
         
      
  
<br>
     <div class="form-group">
      
          <label>Age</label>
        </div>
        <div class="row">
        <div class="col-md-5">
           <select name="age_from" class="form-control">
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
            <select name="age_to" class="form-control">
              <option value="">Select</option>
                                    @for($i = date('y')+82; $i >= date('y'); $i--)
  <option value="{{ $i }}" >{{ $i }}</option>
@endfor 
            </select>
         
          </div>
     </div>
        <br>
      <div class="form-group">
          <label>Martial Status</label>
        </div>
        <div class="row">
        <div class="col-md-6">
           <input type="radio" value="Unmaried" name="martial_status"> Unmaried
         </div>
         <div class="col-md-6">
            <input type="radio" value="Widow Widower" name="martial_status"> Widow/Widower
          </div>
          <div class="col-md-6">
             <input type="radio" value="Divorcee" name="martial_status"> Divorcee
           </div>
           <div class="col-md-6">
             <input type="radio" value="Seprated" name="martial_status"> Seprated
           </div>
           <div class="col-md-6">
              <input type="radio" value="Annulled" name="martial_status"> Annulled
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
           <input type="text"  name="cast" class="form-control" placeholder="Caste">
         
          </div>
         </div>
      
<br>
      <div class="form-group">
          <label>Mother Language</label>
        </div>
         <div class="row">
        <div class="col-md-12">
            <select name="language" class="form-control">
            
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
<br>



<br>
      <div class="form-group">
          <label>Religion</label>
        </div>
         <div class="row">
        <div class="col-md-12">
            <select name="religiousness" class="form-control">
            
                     <option value="">..Select..</option>
                       <option value="">Please select..</option>
                      <option value="Very religious">Very religious</option>
                      <option value="Religious">Religious</option>
                       <option value="Not religious">Not religious</option>
                      <option value="Prefer not to say">Prefer not to say</option>
            </select>
</div>
</div>
<br>


<br>
      <div class="form-group">
          <label>Financial Status</label>
        </div>
         <div class="row">
        <div class="col-md-12">
            <select name="financial_status" class="form-control">
            
                    
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
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Search</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>

    {{-- Keyword search --}}


<div class="modal fade" data-backdrop="static" data-keyboard="false" id="keyword_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title tb-modal-title"><center>Search by Keyword</center>
        </h5>
      </div>

<div class="modal-body">
<form method="get" action="{{ url('user-search') }}">
  {{ csrf_field() }}
  <div class="form-group">
<label>User Name</label>
          
        </div>
        <div class="row">
        <div class="col-md-12">
           <input type="text"  name="user_name" class="form-control" placeholder="user name">
         
          </div>
         </div>
      
  
<br>
<div class="form-group">
<label>Looking for</label>
          
        </div>
        <div class="row">
        <div class="col-md-6">
           <input type="radio" value="Female" name="loking_for"> Bride
         </div>
             <div class="col-md-6">
          
             <input type="radio" value="Male" name="loking_for"> Groom
             
          </div>   
          </div>
         
      
  
<br>
     <div class="form-group">
      
          <label>Age</label>
        </div>
        <div class="row">
        <div class="col-md-5">
           <select name="age_from" class="form-control">
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
            <select name="age_to" class="form-control">
              <option value="">Select</option>
                                    @for($i = date('y')+82; $i >= date('y'); $i--)
  <option value="{{ $i }}" >{{ $i }}</option>
@endfor 
            </select>
         
          </div>
     </div>
        <br>
      <div class="form-group">
          <label>Martial Status</label>
        </div>
        <div class="row">
        <div class="col-md-6">
           <input type="radio" value="Unmaried" name="martial_status"> Unmaried
         </div>
         <div class="col-md-6">
            <input type="radio" value="Widow Widower" name="martial_status"> Widow/Widower
          </div>
          <div class="col-md-6">
             <input type="radio" value="Divorcee" name="martial_status"> Divorcee
           </div>
           <div class="col-md-6">
             <input type="radio" value="Seprated" name="martial_status"> Seprated
           </div>
           <div class="col-md-6">
              <input type="radio" value="Annulled" name="martial_status"> Annulled
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
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Search</button>
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
<div class="modal-dialog" role="document">
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
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Search</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>



    {{-- id search modal --}}

    <div class="modal fade" data-backdrop="static" data-keyboard="false" id="id_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
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
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Search</button>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>



    <!-- <script src="{{ $user_assets }}/js/bootstrap.min.js"></script> -->
    @stack('js')
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
          // alert(data);
         response = $.parseJSON(data);
        
         $('.sender').html(response.sender);
         $('#user_name').html(response.user_name);
         
         // alert(response.code_flage);
         });
   
});
         // function current_chat()
         // {
         
         
           
         // }
         
         
         
         
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
         // alert(response);
          response.forEach(function (item) {
            if(item.attached)
            {
              if(item.to_user=={{user_data()->id}})
            {
             
               $('#message_count').show();
               $('#message_count').html('1')
            }
            $('.new_message').append('<li><div class="left-chat"><p><a href="{{ url('public/user_assets/attached') }}/'+item.attached+'" target="_blank"><img src="{{ url('public/user_assets/attached') }}/'+item.attached+'"></a></p></div></li>');
           $('#chat-scroll').animate({
            scrollTop: $('#chat-scroll').get(0).scrollHeight},10);
            }
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

               $('.new_message').append('<li><div class="right-chat"><p><a href="{{ url('public/user_assets/attached') }}/'+response.attached+'" target="_blank"><img src="{{ url('public/user_assets/attached') }}/'+response.attached+'"></a></p></div></li>');
           $('#chat-scroll').animate({
            scrollTop: $('#chat-scroll').get(0).scrollHeight},10);
            }
            else if(message)
            {
               $('.new_message').append('<li><div class="right-chat"><p>'+message+'</p></div></li>');
           $('#chat-scroll').animate({
            scrollTop: $('#chat-scroll').get(0).scrollHeight},10);
           
            }
            // else
            // {
             
            //    $('#error').html('Write message');
            // }
           }
         });
         
        
         document.getElementById("send_messgae").value = "";
        
       
         });

         
      </script>
    <script type="text/javascript">
  setInterval(function() {
           

      $.ajax({
    url:'{{url('/get-friend')}}',
            type: 'POST',
            data: {
              "_token": "{{ csrf_token() }}",
              "user_id" : {{user_data()->id}}
            },
          success:function(response) {
            $('.friend').html("");
           
              $('#friends').html(response);
            
              $('#friend_counts').show();
          }

        });
  },1000);


  // setInterval(function() {
           

  //     $.ajax({
  //   url:'{{url('/get-notification')}}',
  //           type: 'POST',
  //           data: {
  //             "_token": "{{ csrf_token() }}",
  //             "user_id" : {{user_data()->id}}
  //           },
  //         success:function(response) {
  //           $('.get_notifi').html("");
           
  //             $('#get_noti').html(response);
            
              
  //         }

  //       });
  // },1000);
  setInterval(function() {
           

           $.ajax({
         url:'{{url('/unsean-notification')}}',
                 type: 'POST',
                 data: {
                   "_token": "{{ csrf_token() }}",
                   "user_id" : {{user_data()->id}}
                 },
               success:function(response) {
               
                if(response!=0)
                {
                  $('.noti_counts').html(response);
                }

                 
                   
               }
     
             });
       },1000);


  

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
            
           if(response=='true')
           

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

  <script type="text/javascript" src="{{ $user_assets }}/js/jquery.emojipicker.js"></script>
  <script type="text/javascript" src="{{ $user_assets }}/js/jquery.emojis.js"></script>
     <script type="text/javascript" src="{{ $user_assets }}/js/jquery.emojiarea.js"></script>

<script type="text/javascript" src="{{ $user_assets }}/js/emoji-picker.js"></script>
</body>

</html>
