@extends('user/user_master_layout1') 
@section('data') 

<br><br><br><br><br><br>
  
  <div class="container-fluid"> 
    <div class="row">
      
    <div class="col-md-3 hidden-sm hidden-xs">
        @if(!empty($all_chats))
        All users<br/>
        @foreach($all_chats as $user)
        <a href="{{ url('chat') }}/{{$user->to_user}}">{{$user->to_user}}</a>
        @endforeach
        @else
        No chat found
        @endif
      </div>


      <div class="col-md-9">
        <div class="well"  id="chat-scroll" style="box-shadow: none; max-height:350px !important; overflow: scroll;">

         
          @if(!empty($current_chat))
          @foreach($current_chat as $key)
         
          @if($key->to_user==Session::get('user_id'))
          <div class="row">
           <div class="col-md-6 "  > 
          <p class='well' style="color:black;">
            {{$key->message}}</p>
          </div>
          <div class="col-md-6 "  > 
           </div>
         </div>
          @else
          <div class="row">
           <div class="col-md-6 "> 
           </div>
          <div class="col-md-6 well" > 
            <p style="color:black;">{{$key->message}}</p>
          </div>
        </div>
          @endif
          @endforeach
          @endif
         <div class="row" id="new_message"> 
          </div>
        </div>
    </div>
         <div class="row" >
          <div class="col-md-6"> 
          </div>
          <div class="col-md-6"> 
          <form class="form-inline" id='form' >
            {{csrf_field()}}
          <div class="form-group">
           <input type="text" class="form-control" name="send_messgae" id="send_messgae" placeholder="type message">
           <label style="color:red; display:none;" id='error_msg'>Type a Message</label>
           <input type="hidden" name="to_user" value="@if(!empty($to_user)){{$to_user}}@endif">
          </div>
          <button type="submit" class="btn" >send</button>
        </form>
        </div>
      </div>
      
  </div>
</div>
</div>
<br><br>
<!-- Wraper end -->
@endsection

@push('css')
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
  
  

<link rel="stylesheet" href="{{ $user_assets }}/css/custom.css" />
<link rel="stylesheet" href="{{ asset('public') }}/css/chosen.css" />

@endpush

@push('js')
<script type="text/javascript" src="{{ $user_assets }}/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="{{ $user_assets }}/js/custom.js"></script>
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
<script type="text/javascript">
  $(document).ready(function(){
  $('#chat-scroll').animate({
  scrollTop: $('#chat-scroll').get(0).scrollHeight},10);
});
$(function () {
    $('#form').on('submit',function (e) {

    var message=document.getElementById("send_messgae").value;
    if(message)
    {
         $.ajax({
                type: 'post',
                url: "{{ url('send_message') }}",
                data: $('#form').serialize(),
                success: function (response) {
                $("#new_message").append("<div class='col-md-6'></div><div class='col-md-6 well'><p style='color:black;'>"+message+"</p></div>");
                $('#chat-scroll').animate({
               scrollTop: $('#chat-scroll').get(0).scrollHeight},10);
                }
              });
       }
       else
       {
        
         document.getElementById('error_msg').style.display = "block";
       }
       document.getElementById("send_messgae").value = "";
        e.preventDefault();
        });
});
@if(!empty($to_user))
setInterval(function() {
      $.ajax({
      url:'{{ url('check_unseen') }}',
            type: 'POST',
            data: {
              "_token": "{{ csrf_token() }}",
              "to_user" : {{$to_user}}
            },
          success:function(response) {
            if(response!=0)
            {
               response.forEach(function (item) {
               $("#new_message").append("<div class='col-md-6 well'><p style='color:black;'>"+item.message+"</p></div><div class='col-md-6'></div>");
               $('#chat-scroll').animate({
                 scrollTop: $('#chat-scroll').get(0).scrollHeight},10);
              });
            }
          }

        });
  },1000);
@endif
</script>
@endpush