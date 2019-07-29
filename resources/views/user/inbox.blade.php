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

#form {
  margin-bottom: 0;
}

#bb {
  bottom: 4px;
  right: 16%;
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

      .navbar-nav {
        margin-top:-1px;
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
  width: 25%;
  border-right:1px solid #c4c4c4;
  overflow: auto;
}
.inbox_msg {
  clear: both;
  overflow: hidden;
  display:flex;
  height: 92%;
}

.top_spac{ margin: 20px 0 0;}


.srch_bar {
  display: inline-block;
  text-align: right;
  width: 60%; padding:
}
.headind_srch {
    padding: 0 2rem;
    overflow: hidden;
    height: 52px;
    display: flex;
    align-items: center;
}

.recent_heading h4 {
  color: #05728f;
  font-size: 21px;
  margin: auto;
  color: #ed6c05;
  font-weight: bold;
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
.chat_ib h5 + span{ font-size:12px; color:#989898;}
.chat_ib p{ font-size:14px; color:#989898; margin:auto}
.chat_img {
  width: 50px;
}
.chat_ib {
  padding: 0 0 0 10px;
  overflow: hidden;
}

.chat_people{ overflow:hidden; display: grid; grid-auto-flow: column; justify-content: start;}
.chat_list {
  border-bottom: 1px solid #eee;
  margin: 0;
  padding: 18px 16px 10px;
  position: relative;
}

.chat_list.current {
  background-color: #f2f2f2;
}

.chat_list .unread-badge {
  background-color: #ed6c05;
  height: 12px;
  width: 12px;
  border-radius: 50%;
  position: absolute;
  right: 10px;
  top: 50%;
  transform: translateY(-50%);
  display: none;
}

.chat_list.unread .unread-badge {
    display: block;
}

.active_chat{ background:#ebebeb;}
.incoming_msg{
     margin: 1rem 1rem 1rem 1.5rem;
}
.incoming_msg_img {
  display: inline-block;
  width: 2.5em;
}
.received_msg {
  display: inline-block;
  padding-left: 5px;
  vertical-align: top;
  max-width: 50%;
 }

 .received_msg .time_date {
   text-align: left;
 }

 .received_withd_msg p {
  background: #7553A4 none repeat scroll 0 0;
  border-radius: 20px;
  border-bottom-left-radius: 3px;
  color: white;
  font-size: 1.55rem;
  margin: 0;
  padding: .5rem 1rem;
  width: 100%;
  word-break: break-word;
}
.time_date {
  color: #747474;
  display: block;
  font-size: 1.1rem;
  margin-top: .2rem;
}
/* .received_withd_msg { width: 57%;} */
.mesgs {
  /* padding: 0 0 0 25px; */
  width: 75%;
}

.mesgs .user-header {
  display: grid;
  align-items: center;
  justify-content: start;
  grid-column-gap: 1rem;
  padding: .5rem 1rem;
  box-shadow: 1px 1px 3px rgba(0,0,0,.2);
}

.mesgs .user-header .img-wrapper {
  position: relative;
  grid-column: 1;
  grid-row: 1/3;
}

.mesgs .user-header img {
  width: 40px;
  height: 40px;
  border-radius: 50%;
}

.mesgs .user-header .img-wrapper span {
  width: 13px;
  height: 13px;
  background-color: mediumseagreen;
  position: absolute;
  border-radius: 50%;
  bottom: 0px;
  right: -1px;
  border: 2px solid white;
}

.mesgs .user-header .username {
  grid-column: 2;
  font-weight: bold;
  font-size: 1.55rem;
}

.mesgs .user-header .username + span {
  grid-column: 2;
  color: #888;
  font-size: 1.3rem;
  margin-top: -5px;
}

 .sent_msg p {
  background: #ed6c05 none repeat scroll 0 0;
  border-radius: 20px;
  border-bottom-right-radius: 3px;
  font-size: 1.55rem;
  margin: 0; color:#fff;
  padding: .5rem 1rem;
  width:100%;
  word-break: break-word;
}
.outgoing_msg{ overflow:hidden; margin: 1rem; margin-right:1.5rem;}
.sent_msg {
  float: right;
  max-width: 50%;
}

.sent_msg .time_date {
  text-align: right;
}

/* .input_msg_write {
  position:fixed;
  bottom:0;
  width:70%;
} */

.input_msg_write {
  display: flex;
  align-items: center;
  background-color: white;
}

.input_msg_write input:not(.search) {
  border: medium none;
  color: #4c4c4c;
  font-size: 15px;
  width: 100%;
  margin:0;
  padding: 8px;
  background-color: #eee;
  margin: 5px;
  border-radius: 20px;
  height: 32px;
  padding: 15px;
}

.input_msg_write label {
  margin: 0;
}

.input_msg_write .fa-paperclip {
  font-size: 21px;
  color: #777;
}

.type_msg {
  border-top: 1px solid #c4c4c4;
  position: fixed;
  bottom: 0;
  width: 75%;
}

.msg_send_btn {
  background: #05728f none repeat scroll 0 0;
  border:none;
  cursor: pointer;
  background-color: transparent;
  width: 33px;
  margin-right: 2rem;
  margin-left: .5rem;
}

.msg_send_btn svg {
  width: 23px !important;
  fill: #7553A4;
}

/* .messaging { padding: 0 0 50px 0;} */
.msg_history {
  height: calc(100% - 94px);
  overflow-y: auto;
}

.name-and-date {
  display:flex;
  flex-direction: column;
}

.name-and-date h5 {
  margin-top: 5px;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
  font-weight: normal;
  color: #222;
}

@media (max-width:900px) {
  .name-and-date {
    flex-wrap:wrap;
  }
}

@media (max-width:768px) {
  
  :root {
    font-size: 9px;
  }

  .chat_list.unread .unread-badge {
    display: none;
  }

  .chat_list.unread {
    background-color: rgba(237,108,5,.3);
  }

  .incoming_msg,
  .outgoing_msg {
    margin: .6rem;
  }

  .chat_ib {
    display:none;
  }

  .headind_srch {
    justify-content: center;
    padding: 5px;
    height: 51px;
  }

  .headind_srch h4 {
    font-size: 18px;
  }

  .chat_img {
    width: 40px;

  }

  .inbox_people {
    width: 65px;
  }

  .chat_list {
    padding: 7px;
    display: flex;
    justify-content: center
  }

  .mesgs {
    width: 85%;
  }

  .type_msg {
    right: 0;
    width: 100%;
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
              <span class="unread-badge"></span>
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
                  <p>{{$row->description}}</p>
                </div>
              </div>
            </div>
            </a>
              @endforeach
              @endif
            
            <a href="http://localhost/KBH/friend-chat/215">
              <div class="chat_list current">
                <span class="unread-badge"></span>
                <div class="chat_people">
                  <div class="chat_img">
  
                                    <img src="http://localhost/KBH/public/user_assets/profile_image/female_avatar_7.jpg" style="border-radius: 100px;">
  
                
                                    </div>
                  <div class="chat_ib">
                    <div class="name-and-date">
                      <h5>username static</h5>
                      <span class="chat_date">2018-05-08 13:23:33</span>
                    </div>                  
                    <p></p>
                  </div>
                </div>
              </div>
              </a>

              <a href="http://localhost/KBH/friend-chat/215">
                <div class="chat_list unread">
                  <span class="unread-badge"></span>
                  <div class="chat_people">
                    <div class="chat_img">
    
                                      <img src="http://localhost/KBH/public/user_assets/profile_image/female_avatar_7.jpg" style="border-radius: 100px;">
    
                  
                                      </div>
                    <div class="chat_ib">
                      <div class="name-and-date">
                        <h5>username static</h5>
                        <span class="chat_date">2018-05-08 13:23:33</span>
                      </div>                  
                      <p></p>
                    </div>
                  </div>
                </div>
                </a>
            
          </div>
        </div>
        <div class="mesgs">
          <div class="user-header">
            <div class="img-wrapper">
              <img src="{{ $user_assets }}/img/avatar.png" alt="">
              <span></span>
            </div>
            <span class="username">user name</span>
            <span>Active 5h ago</span>
          </div>
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
       
           
            <form class="form" enctype="multipart/form-data">
          <div class="type_msg">
            {{csrf_field()}}
            <div class="input_msg_write">
              <input type="text" id="send_message" name="send_message" class="write_msg" placeholder="Type a message"/>
              <input type="hidden" id="to_userss" value="{{ $friend_id }}" name="to_user">
               <label id=""> <i class="fas fa-paperclip"></i>
                <input type="file" name="file" id="file" size="60">
              </label>
              <button class="msg_send_btn" type="submit" ><svg style="enable-background:new 0 0 24 24;" version="1.1" viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="info"/><g id="icons"><path d="M21.5,11.1l-17.9-9C2.7,1.7,1.7,2.5,2.1,3.4l2.5,6.7L16,12L4.6,13.9l-2.5,6.7c-0.3,0.9,0.6,1.7,1.5,1.2l17.9-9   C22.2,12.5,22.2,11.5,21.5,11.1z" id="send"/></g></svg></button>
            </div>
          </div>
          </form>
        </div>
      </div>

      <script>
        $(document).ready(function() {
          $("#send_message").emojioneArea();
        });
      </script>
      
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
         


    $('.form').on('submit',function (e) {


        e.preventDefault();
        // var message=document.getElementById("send_messgae").value;
        var message=$('#send_message').val();
        
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
                $('#send_message').val('');
   
                 return false;
             } 
        }
        
        $.ajax({
             type: 'post',
              url: "{{ url('send_message') }}",
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
         
        
         document.getElementById("send_message").value = "";
        
       
         });

         document.querySelector('.msg_send_btn').onclick = function() {
          $('.msg_history').stop().animate({
            scrollTop: $('.msg_history')[0].scrollHeight
          }, 500);

          $('.emojionearea-editor').text('');
         }

         $('.emojionearea-editor').keypress(
          function(event){
            if (event.keyCode == '13') {
              $(this).text('');
            }
        });

        $(document).keypress(
          function(event){
            if (event.keyCode == '13') {
              $('.emojionearea-editor').text('');
            }
        });

  </script>
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

<!-- emojiOneArea -->
<link rel="stylesheet" href="{{ $user_assets }}/css/emojionearea.css">
 
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

<!-- emojiOneArea -->
<script type="text/javascript" src="{{ $user_assets }}/js/emojionearea.min.js"></script>

@endpush      
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
</body>
</html>