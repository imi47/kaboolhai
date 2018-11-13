@extends('user/user_master_layout1') 
@section('data')
<style type="text/css">
  .container-1 {
    border: 2px solid #dedede;
    background-color: #f1f1f1;
    border-radius: 5px;
    padding: 20px;
    margin: 10px 0;
}

footer, .container {
  display:none;
}

tr.dosrch th a {
    font-size:14px;
}

.navbar-form button .glyphicon {
    top: 1px;
  }

  .navbar-form button {
    right: -4px;
    padding: 6px 11px !important;
}

footer section {
    margin-top:50px;
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
#friends-dropdown, #messages-dropdown, #notifications-dropdown {
        margin-top:21px !important;
        margin-bottom:-21px !important;
    }

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
      top:35px !important;
    }

    #username-dropdown-toggle ul.dropdown-menu {
      top:53px !important;
    }
        .humburger {
            margin-top:14px !important;
      }

      #username-dropdown-toggle ul.dropdown-menu {
        top: 48px !important;
        left: -88px !important;
      }

      .navbar-nav {
        margin-top:-1px;
      }
      
      .nav-white.sticky-nav .navbar-nav > .open > a {
        margin-top: -15px;
        padding-top: 14px;
      }

      .nav-white.sticky-nav .navbar-nav > .open > a {
        margin-top:-12px;
      }

      #username-dropdown-toggle .dropdown-toggle {
        padding-top: 13px !important;
        display: inline !important;
        padding-bottom: 12px !important;
      }
}

@media (min-width:991px) {
   .searchcontainer button {
      margin-top:-56px !important;
      padding-top:15px;
    }

    .dropdown-toggle .fas, .dropdown-toggle .fa-envelope, .dropdown-toggle .fa-bell {
        font-weight: 900;
        margin-top: 3px;
    }
}


 @media (max-width: 685px) {
  .sticky-nav .navbar-nav > li > .dropdown-menu, .shrink-nav .dropdown.simple-dropdown .dropdown-menu {
    top: 55px !important;
  }

  #username-dropdown-toggle .dropdown-menu {
    top: 47px !important;

  }

  tr.dosrch th a {
    font-size:12px;
}
}

@media (max-width:320px) {
    .searchcontainer button {
        margin-top:-44px !important;
    }
}

.container{max-width:1170px; margin:auto;}
img{ max-width:100%;}

.messaging *{
  letter-spacing:0;
}

.inbox_people {
  background: #f8f8f8 none repeat scroll 0 0;
  overflow: hidden;
  width: 25%;
  border-right:1px solid #c4c4c4;
}
.inbox_msg {
  clear: both;
  overflow: hidden;
  display:flex;
  height: 92%;
}
@media (max-height:656px) {
  .inbox_msg {
    height: 86%;
  }
}

.top_spac{ margin: 20px 0 0;}


.recent_heading {float: left; width:40%;}
.srch_bar {
  display: inline-block;
  text-align: right;
  width: 60%; padding:
}
.headind_srch{ padding:10px 29px 10px 20px; overflow:hidden; border-bottom:1px solid #c4c4c4;}

.recent_heading h4 {
  color: #05728f;
  font-size: 21px;
  margin: auto;
}
.srch_bar input{ border:1px solid #cdcdcd; border-width:0 0 1px 0; width:80%; padding:2px 0 4px 6px; background:none;}
.srch_bar .input-group-addon button {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border: medium none;
  padding: 0;
  color: #707070;
  font-size: 18px;
}
.srch_bar .input-group-addon { margin: 0 0 0 -27px;}

.chat_ib h5{ font-size:15px; color:#464646; margin:0 0 8px 0;}
.chat_ib h5 + span{ font-size:11px; float:right; color:#989898;}
.chat_ib p{ font-size:14px; color:#989898; margin:auto}
.chat_img {
  float: left;
  width: 50px;
}
.chat_ib {
  float: left;
  padding: 0 0 0 15px;
  margin-left: 53px;
  margin-top: -50px;
  width: 82%;
}

.chat_people{ overflow:hidden; clear:both;}
.chat_list {
  border-bottom: 1px solid #c4c4c4;
  margin: 0;
  padding: 18px 16px 10px;
}
.inbox_chat { overflow-y: scroll;}

.active_chat{ background:#ebebeb;}
.incoming_msg{
     margin: 26px 0 26px;
}
.incoming_msg_img {
  display: inline-block;
  width: 6%;
}
.received_msg {
  display: inline-block;
  padding: 0 0 0 10px;
  vertical-align: top;
  width: 38%;
 }
 .received_withd_msg p {
  background: #ebebeb none repeat scroll 0 0;
  border-radius: 99px;
  color: #646464;
  font-size: 14px;
  margin: 0;
  padding: 5px 10px 5px 12px;
  width: 100%;
}
.time_date {
  color: #747474;
  display: block;
  font-size: 12px;
  margin: 8px 0 0;
}
/* .received_withd_msg { width: 57%;} */
.mesgs {
  padding: 0 0 0 25px;
  width: 75%;
}

 .sent_msg p {
  background: #05728f none repeat scroll 0 0;
  border-radius: 99px;
  font-size: 14px;
  margin: 0; color:#fff;
  padding: 5px 10px 5px 12px;
  width:100%;
}
.outgoing_msg{ overflow:hidden; margin:26px 0 26px; margin-right:2.5%;}
.sent_msg {
  float: right;
  width: 46.5%;
}

/* .input_msg_write {
  position:fixed;
  bottom:0;
  width:70%;
} */

.input_msg_write input {
  border: medium none;
  color: #4c4c4c;
  font-size: 15px;
  width: 100%;
  margin:0;
  padding: 12px 0px;
}

.type_msg {
  border-top: 1px solid #c4c4c4;
  position: fixed;
  bottom: 0;
  width: 70.1%;
}

.msg_send_btn {
  background: #05728f none repeat scroll 0 0;
  border:none;
  cursor: pointer;
  background-color: transparent;
  position: absolute;
  right: 0;
  top: 11px;
  width: 33px;
}

.msg_send_btn svg {
  width: 23px !important;
  fill: #7553A4;
}

/* .messaging { padding: 0 0 50px 0;} */
.msg_history {
  height: 516px;
  overflow-y: auto;
}

.name-and-date {
  display:flex;
}

.name-and-date h5 {
  width:70%;
  margin-top: 5px;
}

.name-and-date span {
  width:131px;
}

@media (max-width:900px) {
  .name-and-date {
    flex-wrap:wrap;
  }
}

@media (max-width:768px) {
  .chat_ib {
    display:none;
  }

  .inbox_people {
    width:109px;
  }

  .chat_list {
    padding: 7px 0 7px 26px;
  }

  .mesgs {
    width: 85%;
  }
}
</style>
<div style="padding-top:53px; "></div>
{{-- <div class="container"> --}}

<div class="messaging">
      <div class="inbox_msg">
        <div class="inbox_people">
          <div class="headind_srch">
            <div class="recent_heading">
              <h4>Recent</h4>
            </div>
           
          </div>
          <div class="inbox_chat">
           
             @if(!empty($friend))
              @foreach($friend as $row)
              <a href="{{ url('friend-chat',$row->user_id) }}">
            <div class="chat_list">
              <div class="chat_people">
                <div class="chat_img">

                 @if(!empty($row->image_name))
                 <img src="{{ $user_assets }}/profile_image/{{ $row->image_name }}"  style="border-radius: 100px;">

              {{-- <img src="{{ $user_assets }}/profile_image/{{ $row->image_name }}"> --}}
                @else
                 <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil">
                @endif
                  </div>
                <div class="chat_ib">
                  <div class="name-and-date">
                    <h5>{{ $row->user_name }}</h5>
                    <span class="chat_date">{{ $row->created_at }}</span>
                  </div>                  
                  <p>Sample text Sample text Sample text Sample text Sample text Sample text </p>
                </div>
              </div>
            </div>
            </a>
              @endforeach
              @endif
            
            
            
          </div>
        </div>
        <div class="mesgs">
          <div class="msg_history" id="chat-scroll">
               @if(isset($inbox))
              @foreach($inbox as $row)
              @if(Session::get('user_id')==$row->to_user)
            <div class="incoming_msg">
              <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
              
              <div class="received_msg">
                <div class="received_withd_msg">
                  <p>{{ $row->message }}</p>
                  <span class="time_date">{{ $row->created_at }}</span>
                </div>
              </div>
            </div>
             
            @else
            @if($row->message)
            <div class="outgoing_msg">
              <div class="sent_msg">
                <p>{{ $row->message }}</p>
                <span class="time_date"> {{ $row->created_at }}</span> 
              </div>
            </div>
           
            @elseif($row->attached)
            <div class="outgoing_msg">
              <div class="sent_msg">
                <p><a href="{{ url('public/user_assets/attached',$row->attached) }}" target="_blank"><img style="width: 60px; height: 60px;" src="{{ $user_assets }}/attached/{{$row->attached}}"></a></p>
                <span class="time_date"> {{ $row->created_at }}</span> 
              </div>
            </div>
             @endif
            @endif
              @endforeach
              @endif
           

            <div class="new_message"></div>
       
           
            <form id='form' enctype="multipart/form-data">
          <div class="type_msg">
            {{csrf_field()}}
            <div class="input_msg_write">
              <input type="text" id="send_messgae" name="send_messgae" class="write_msg" placeholder="Type a message"/>
              <input type="hidden" id="to_userss" value="{{ $friend_id }}" name="to_user">
               <label id="" style="float: right; margin-right: 50px; margin-top: -40px;"> <img alt="" src="{{ $user_assets }}/images/clip.png" />
                <input type="file" name="file" id="file" size="60">
              </label>
              <button class="msg_send_btn" type="submit" ><svg style="enable-background:new 0 0 24 24;" version="1.1" viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="info"/><g id="icons"><path d="M21.5,11.1l-17.9-9C2.7,1.7,1.7,2.5,2.1,3.4l2.5,6.7L16,12L4.6,13.9l-2.5,6.7c-0.3,0.9,0.6,1.7,1.5,1.2l17.9-9   C22.2,12.5,22.2,11.5,21.5,11.1z" id="send"/></g></svg></button>
            </div>
          </div>
          </form>
        </div>
      </div>
      
      
    
      
    </div>
  {{-- </div> --}}
  <script type="text/javascript">
    setInterval(function() {
         
         var time = new Date().toLocaleTimeString();
         var  to_user = $('#to_userss').val();
         // alert();
         $.ajax({
         url:'{{ url('check_unseen') }}',
         type: 'POST',
         data: {
         "_token": "{{ csrf_token() }}",
         "to_user" : to_user
         },
         success:function(response) {
         // alert(response);
         if(response!=0)
         {
          response.forEach(function (item) {
           
               
           
            if(item.attached)
            {
              var filename = response.attached;
             var valid_extensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i; 


             if(valid_extensions.test(filename))
{ 
   $('.new_message').append('<div class="received_msg"><div class="received_withd_msg"><a href="{{ url('public/user_assets/attached') }}/'+item.attached+'" target="_blank"><img src="{{ url('public/user_assets/attached') }}/'+item.attached+'">'+time+'|Today</span></div></div>');
           $('#chat-scroll').animate({
            scrollTop: $('#chat-scroll').get(0).scrollHeight},10);
            
} 

  else
      {
   $('.new_message').append('<div class="received_msg"><div class="received_withd_msg"><a href="{{ url('public/user_assets/attached') }}/'+item.attached+'" target="_blank">'+item.attached+time+'|Today</span></div></div>');
   $('#chat-scroll').animate({
            scrollTop: $('#chat-scroll').get(0).scrollHeight},10);
            
}

          
         
}
            else 
            {
              $('.new_message').append('<div class="received_msg"><div class="received_withd_msg"><p>'+item.message+'</p><span class="time_date">'+time+'|Today</span></div></div>');
           $('#chat-scroll').animate({
            scrollTop: $('#chat-scroll').get(0).scrollHeight},10);
            }
         
            
         
         
         
           
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
// var d = new Date();
var time = new Date().toLocaleTimeString();
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
           success: function (data)
            {
              response = $.parseJSON(data);
               if(message && file)
               {
             $('.new_message').append('<div class="outgoing_msg"><div class="sent_msg"><p>'+response.message+'</p><span class="time_date">'+time+'|Today</span></div></div>');
           $('#chat-scroll').animate({
            scrollTop: $('#chat-scroll').get(0).scrollHeight},10);

           $('.new_message').append('<div class="outgoing_msg"><div class="sent_msg"><a href="{{ url('public/user_assets/attached') }}/'+response.attached+'" target="_blank"><img src="{{ url('public/user_assets/attached') }}/'+response.attached+'">'+time+'|Today</span></div></div>');
           $('#chat-scroll').animate({
            scrollTop: $('#chat-scroll').get(0).scrollHeight},10);
         }
          else if(file)
            {
              var filename = response.attached;
             var valid_extensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i; 


             if(valid_extensions.test(filename))
{ 
   $('.new_message').append('<div class="outgoing_msg"><div class="sent_msg"><a href="{{ url('public/user_assets/attached') }}/'+response.attached+'" target="_blank"><img src="{{ url('public/user_assets/attached') }}/'+response.attached+'">'+time+'|Today</span></div></div>');
           $('#chat-scroll').animate({
            scrollTop: $('#chat-scroll').get(0).scrollHeight},10);
            
} 

  else
      {
   $('.new_message').append('<div class="outgoing_msg"><div class="sent_msg"><a href="{{ url('public/user_assets/attached') }}/'+response.attached+'" target="_blank">'+response.attached+time+'|Today</span></div></div>');
   $('#chat-scroll').animate({
            scrollTop: $('#chat-scroll').get(0).scrollHeight},10);
            
}

          
         }
             else if(message)
            {
               $('.new_message').append('<div class="outgoing_msg"><div class="sent_msg"><p>'+response.message+'</p><span class="time_date">'+time+'|Today</span></div></div>');
           $('#chat-scroll').animate({
            scrollTop: $('#chat-scroll').get(0).scrollHeight},10);
           
            }
            
           
           }
         });
         
        
         document.getElementById("send_messgae").value = "";
        
       
         });
  </script>
@endsection

</script>
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