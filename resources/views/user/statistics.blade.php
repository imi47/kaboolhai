@extends('user/user_master_layout1') 
@section('data') 

<style>

  .stat-li {
      width:48%;
    }
  
  .listofmenu li {
    margin:0 !important;
  }

  .no-of-conv {
    margin-left:25px !important;
    font-size: 1.8rem;
    font-weight: 600;
  }

  .listofmenu li div div.inner-content.text-center {
    width:18vw;
  }

  @media (max-width:991px) {
    .stat-li {
      width:19%;
    }

    .listofmenu li div div.inner-content.text-center {
      width:86vw;
    }

    .no-of-conv {
      margin-left:35px !important;
  }

  .searchcontainer button {
      margin-top:-56px !important;
      padding-top:12px;
    }

    .sticky-nav .navbar-nav > li > .dropdown-menu {
      top:60px !important;
    }

  }

  @media (min-width:991px) {
   .searchcontainer button {
      margin-top:-56px !important;
      padding-top:12px;
    }

    .no-of-conv {
      font-size:1.5rem;
    }
}

  @media (max-width:768px) {
    .stat-li {
      width:24%;
    }

    .no-of-conv {
    margin-left:35px !important;
  }

    .listofmenu li div div.inner-content.text-center {
      width:84vw;
    }

    .sticky-nav .navbar-nav > li > .dropdown-menu {
      top:52px !important;
    }
  }

  @media (max-width:630px) {
    .listofmenu li div div.inner-content.text-center {
      width:83vw;
    }
  }

  @media (max-width:600px) {
    .listofmenu li div div.inner-content.text-center {
      width:80vw;
    }

    .no-of-conv {
      margin-left:25px !important;
    }
  }

  @media (max-width:500px) {
    .stat-li {
      width:32%;
    }

    .head_box.one.stats-main p{
      font-size:3vw !important;
    }

    .head_box.one.stats-main {
      height:50px;
    }

    .listofmenu li div div.inner-content.text-center {
      width:75vw;
    }

  }

  @media (max-width:400px) {
    .stat-li {
      width:37vw;
    }

    .head_box.one.stats-main p, .head_box.one.stats-main p em{
      font-size:2.7vw !important;
    }

    .listofmenu li div div.inner-content.text-center {
      width:70vw;
    }
  }

  @media (max-width: 685px) {
  .sticky-nav .navbar-nav > li > .dropdown-menu, .shrink-nav .dropdown.simple-dropdown .dropdown-menu {
    top: 60px !important;
  }

  @media (max-width:320px) {
    .searchcontainer button {
      margin-top:-44px !important;
      padding-top:12px;
    }

  #username-dropdown-toggle .dropdown-menu {
    top: 52px !important;

  }

  .fa-google-plus-square, .fa-linkedin-square {
    font-size:3.3em;
  }
}
</style>

<div class="container-fluid">
   <div class="row mrtp">
   	<div class="col-md-3">
   		<div class="well">
   			<ul class="listofmenu">
   				
   				<!--<li><a href="">Profile View</a><span><img class="badge_img" src="{{ $user_assets }}/profileview.png" alt=""></span></li>-->
   				
   				<li style="margin: 10px 0px 20px 45px;">
   					 <div class="col-xs-6 col-sm-3">
                    <div class="inner-content text-center">

                        <div class="c100 p12 center">
                            <span>12%</span>
                            <div class="slice"><div class="bar"></div><div class="fill"></div></div>
                        </div>
                    </div>
                </div><!-- /.col -->
                <div class="clearfix"></div>
                <p class='no-of-conv' style="color:black; margin-top: 10px;">No. Of Conversation</p>
   				</li>
   				<a href="{{ url('favourite-list') }}">
   				<li class="stat-li">
   					<div class="stats-circle circle1">
   						<div class="stat-counter">
   							<p>{{ count($favourit) }}</p>
   						</div>
   					</div>
   				</li>
   				</a>
          <a href="{{ url('iprofileview-list') }}">
   				<li class="stat-li">
   					<div class="stats-circle circle2">
   						<div class="stat-counter">
   							<p>{{ count($iprofileview) }}</p>
   						</div>
   					</div>
   				</li>
   	    </a>
        <a href="{{ url('sent-items') }}">			
   				<li class="stat-li">
   					<div class="stats-circle circle3">
   						<div class="stat-counter">
   							<p>{{ count($sent_items) }}</p>
   						</div>
   					</div>
   				</li>
        </a>
   				<a href="{{ url('view-send-request') }}">
   				<li class="stat-li">
   					<div class="stats-circle circle4">
   						<div class="stat-counter">
   							<p>{{ count($request) }}</p>
   						</div>
   					</div>
   				</li>
   				</a>
          <a href="{{ url('photo-permission-list') }}">
   				<li class="stat-li">
   					<div class="stats-circle circle5">
   						<div class="stat-counter">
   							<p>{{ count($photo_permission) }}</p>
   						</div>
   					</div>
   				</li>
   				</a>
   				<li class="stat-li">
   					<div class="stats-circle circle6">
   						<div class="stat-counter">
   							<p>{{ count($photo_permission_reci) }}</p>
   						</div>
   					</div>
   				</li>
   				<a href="#">
   				<li class="stat-li">
   					<div class="stats-circle circle7">
   						<div class="stat-counter">
   							<p>{{ count($hide_profile) }}</p>
   						</div>
   					</div>
   				</li>
   				</a>
          <a href="{{ url('blocked-list') }}">
   				<li class="stat-li">
   					<div class="stats-circle circle8">
   						<div class="stat-counter">
   							<p>{{ count($blockuser) }}</p>
   						</div>
   					</div>
   				</li>
   				</a>
          <a href="{{ url('invite-view-profile-list') }}">
   				<li class="stat-li">
   					<div class="stats-circle circle9">
   						<div class="stat-counter">
   							<p>{{ count($invite) }}</p>
   						</div>
   					</div>
   				</li>
   				</a>
   				<li class="stat-li">
   					<div class="stats-circle circle10">
   						<div class="stat-counter">
   							<p>12</p>
   						</div>
   					</div>
   				</li>
   				<a href="{{ url('friend-delete-list') }}">
   				<li class="stat-li">
   					<div class="stats-circle circle11">
   						<div class="stat-counter">
   							<p>{{ count($delete) }}</p>
   						</div>
   					</div>
   				</li>
          </a>
   				
   			</ul>
   		</div>
   	</div>
    
	   <script type="text/javascript">
	   	$(document).ready(function(){
			$('.progressWrapper progress').each(function(){
			  var prgsVal = $(this).data('value');
			  var maxN = $(this).attr('max');
			  var pop = prgsVal/maxN * 100

			  $(this).prev().css('left', pop + '%').text(prgsVal);
			  $(this).val(prgsVal);
			});
		});
	   </script>
    
    
    
   	<div class="col-md-9">
   		<div class="well">
            <div class="box_body">
               <div>
                  <div class="head_box one stats-main">
                    <p class="headings stats-head">No. of Covervasation <!-- <a href="" class="stats-head-link">View Activity Log</a> --> </p>
                    <div class="pull-right right-counter-part">
                    	<p class="right-counter-new pull-left"><em class="pointer" id="con_new">New</em> 12%</p>
                    	<p class="right-counter-old pull-left"><em class="pointer" id="con_old">Old</em> 26%</p>
                    </div>
                    <div class="clearfix"></div>
                  </div>
               </div>
               <div class="content_body cbone" id="cb1">
                  <div class="scrollablediv">
                    
                     <a href="" target="__blank">
                      <div class="inner_main_div">
                        <div class="inner_img_div">
                           <img src="{{ $user_assets }}/sunrise.jpg" class="user_image">
                        </div>
                        <div class="inner_msg_div">
                          <p class="msg_txt">You add <strong>Shahruk</strong> in your favorite.</p>
                        </div>
                        <div class="inner_div_time">
                          <p class="time_div">02:31:42</p>
                          <!-- <p class="date_div">2008-02-14</p> -->
                        </div>
                      </div>
                    </a>

                  </div>
               </div>

                <div class="content_body cbone" id="cb1_1">
                  <div class="scrollablediv">
                    
                     <a href="" target="__blank">
                      <div class="inner_main_div">
                        <div class="inner_img_div">
                           <img src="{{ $user_assets }}/sunrise.jpg" class="user_image">
                        </div>
                        <div class="inner_msg_div">
                          <p class="msg_txt">old add <strong>Shahruk</strong> in your favorite.</p>
                        </div>
                        <div class="inner_div_time">
                          <p class="time_div">02:31:42</p>
                          <!-- <p class="date_div">2008-02-14</p> -->
                        </div>
                      </div>
                    </a>

                  </div>
               </div>

            </div>
            
            <br>
            <div class="box_body">
               <div>
                  <div class="head_box one stats-main">
                    <p class="headings stats-head">Add to Favorite <!-- <a href="" class="stats-head-link">View Activity Log</a> --> </p>
                    <div class="pull-right right-counter-part">
                    	<p class="right-counter-new pull-left"><em class="pointer" id="fav_new">New</em> {{ count($new_favourite) }}</p>
                    	<p class="right-counter-old pull-left"><em class="pointer" id="fav_old">Old</em> {{ count($favourit) }}</p>
                    </div>
                    <div class="clearfix"></div>
                  </div>
               </div>
               <div class="content_body cbone" id="cb2">
                 <div class="scrollablediv">
                 @if(!empty($new_favourite))
                 @foreach($new_favourite as $row)
                 <a href="{{ url('public-profile',$row->favourite_user_id) }}" target="__blank">
                    <div class="inner_main_div">
                      <div class="inner_img_div">
                        @if(!empty($row->photo->image))
                          <img src="{{ $user_assets }}/my_photo/{{ $row->photo->image }}" class="user_image">
                          @else
                         
                           <img src="{{ $user_assets }}/sunrise.jpg" class="user_image">
                          @endif
                      </div>
                      <div class="inner_msg_div">
                        <p class="msg_txt">You add to favourite list <strong>{{ $row->user->user_name }}</strong>.</p>
                      </div>
                      <div class="inner_div_time">
                        <p class="time_div">{{ $row->created_at }}</p>
                        <!-- <p class="date_div">2008-02-14</p> -->
                      </div>
                    </div>
                  </a>
                  @endforeach
                  @endif
                 </div>
               </div>

               <div class="content_body cbone" id="cb2_2">
                 <div class="scrollablediv">
                 @if(!empty($favourit))
                 @foreach($favourit as $row)
                 <a href="{{ url('public-profile',$row->favourite_user_id) }}" target="__blank">
                    <div class="inner_main_div">
                      <div class="inner_img_div">
                       @if(!empty($row->photo->image))
                          <img src="{{ $user_assets }}/my_photo/{{ $row->photo->image }}" class="user_image">
                          @else
                           <img src="{{ $user_assets }}/sunrise.jpg" class="user_image">
                          @endif
                      </div>
                      <div class="inner_msg_div">
                        <p class="msg_txt">You add to favourite list <strong>{{ $row->user->user_name }}</strong>.</p>
                      </div>
                      <div class="inner_div_time">
                        <p class="time_div">{{ $row->created_at }}</p>
                        <!-- <p class="date_div">2008-02-14</p> -->
                      </div>
                    </div>
                  </a>
                  @endforeach
                  @endif
                 </div>
               </div>

            </div>

            <br>
            <div class="box_body">
               <div>
                  <div class="head_box one stats-main">
                    <p class="headings stats-head">Profile View <!-- <a href="" class="stats-head-link">View Activity Log</a> --> </p>
                    <div class="pull-right right-counter-part">
                    	<p class="right-counter-new pull-left"><em class="pointer" id="prof_new">New</em> {{ count($new_i_vew) }}</p>
                    	<p class="right-counter-old pull-left"><em class="pointer" id="prof_old">Old</em> {{ count($iprofileview) }}</p>
                    </div>
                    <div class="clearfix"></div>
                  </div>
               </div>
               <div class="content_body cbone" id="cb3">
                   <div class="scrollablediv">
                     @if(!empty($new_i_vew))
                 @foreach($new_i_vew as $row)
                    <a href="{{ url('public-profile',$row->myprofile_user_id) }}" target="__blank">
                      <div class="inner_main_div">
                        <div class="inner_img_div">
                          @if(!empty($row->photo->image))

                          <img src="{{ $user_assets }}/my_photo/{{ $row->photo->image }}" class="user_image">
                          @else
                           <img src="{{ $user_assets }}/sunrise.jpg" class="user_image">
                          @endif
                        </div>
                        <div class="inner_msg_div">
                          <p class="msg_txt">You View profile <strong> {{ $row->user->user_name }}</strong>.</p>
                        </div>
                        <div class="inner_div_time">
                          <p class="time_div">{{ $row->created_at }}</p>
                          <!-- <p class="date_div">2008-02-14</p> -->
                        </div>
                      </div>
                    </a>
                     @endforeach
                  @endif
                  </div>
               </div>

                <div class="content_body cbone" id="cb3_3">
                   <div class="scrollablediv">

                    @if(!empty($iprofileview))
                 @foreach($iprofileview as $row)
                    <a href="{{ url('public-profile',$row->myprofile_user_id) }}" target="__blank">
                      <div class="inner_main_div">
                        <div class="inner_img_div">
                          @if(!empty($row->photo->image))

                          <img src="{{ $user_assets }}/my_photo/{{ $row->photo->image }}" class="user_image">
                          @else
                           <img src="{{ $user_assets }}/sunrise.jpg" class="user_image">
                          @endif
                        </div>
                        <div class="inner_msg_div">
                          <p class="msg_txt">You view profile<strong> {{ $row->users->user_name }}</strong>.</p>
                        </div>
                        <div class="inner_div_time">
                          <p class="time_div">{{ $row->created_at }}</p>
                          <!-- <p class="date_div">2008-02-14</p> -->
                        </div>
                      </div>
                    </a>
                    @endforeach
                  @endif
                  </div>
               </div>

            </div>

            <br>
            <div class="box_body">
               <div>
                  <div class="head_box one stats-main">
                    <p class="headings stats-head">Sent Messages <!-- <a href="" class="stats-head-link">View Activity Log</a> --> </p>
                    <div class="pull-right right-counter-part">
                    	<p class="right-counter-new pull-left"><em class="pointer" id="s_m_new">New</em> {{ count($new_sent_items) }} </p>
                    	<p class="right-counter-old pull-left"><em class="pointer" id="s_m_old">Old</em> {{ count($sent_items) }}</p>
                    </div>
                    <div class="clearfix"></div>
                  </div>
               </div>
               <div class="content_body cbone" id="cb4">
                   <div class="scrollablediv">
                     @if(!empty($new_sent_items))
                 @foreach($new_sent_items as $row)
                      <a href="javascript:;" target="__blank" class="left-first-section" rel="{{ $row->to_users->id }}">
                      <div class="inner_main_div">
                        <div class="inner_img_div">
                           @if(!empty($row->to_photo->image))

                          <img src="{{ $user_assets }}/my_photo/{{ $row->to_photo->image }}" class="user_image">
                          @else
                           <img src="{{ $user_assets }}/sunrise.jpg" class="user_image">
                           @endif
                        </div>
                        <div class="inner_msg_div">
                          <p class="msg_txt"> <strong>{{ $row->to_users->user_name }}</strong> {{ $row->message }}.</p>
                        </div>
                        <div class="inner_div_time">
                          <p class="time_div">{{ $row->created_at }}</p>
                          <!-- <p class="date_div">2008-02-14</p> -->
                        </div>
                      </div>
                    </a>
                    @endforeach
                  @endif
                  </div>
               </div>

               <div class="content_body cbone" id="cb4_4">
                   <div class="scrollablediv">
                    @if(!empty($sent_items))
                 @foreach($sent_items as $row)
                     <a href="javascript:;" target="__blank" class="left-first-section" rel="{{ $row->to_users->id }}">
                      <div class="inner_main_div">
                        <div class="inner_img_div">
                           @if(!empty($row->to_photo->image))

                          <img src="{{ $user_assets }}/my_photo/{{ $row->to_photo->image }}" class="user_image">
                          @else
                           <img src="{{ $user_assets }}/sunrise.jpg" class="user_image">
                           @endif
                        </div>
                        <div class="inner_msg_div">
                          <p class="msg_txt"> <strong>{{ $row->to_users->user_name }}</strong> {{ $row->message }}.</p>
                        </div>
                        <div class="inner_div_time">
                          <p class="time_div">{{ $row->created_at }}</p>
                          <!-- <p class="date_div">2008-02-14</p> -->
                        </div>
                      </div>
                    </a>
                    @endforeach
                  @endif
                  </div>
               </div>

            </div>

            <br>
            <div class="box_body">
               <div>
                  <div class="head_box one stats-main">
                    <p class="headings stats-head">Sent Request <!-- <a href="" class="stats-head-link">View Activity Log</a> --> </p>
                    <div class="pull-right right-counter-part">
                    	<p class="right-counter-new pull-left"><em class="pointer" id="s_r_new">New</em> {{ count($new_request) }}</p>
                    	<p class="right-counter-old pull-left"><em class="pointer" id="s_r_old">Old</em> {{ count($request) }}</p>
                    </div>
                    <div class="clearfix"></div>
                  </div>
               </div>
               <div class="content_body cbone" id="cb5">
                   <div class="scrollablediv">
                    @if(!empty($new_request))
                 @foreach($new_request as $row)
                     <a href="{{ url('public-profile',$row->requested_user_id) }}" target="__blank">
                      <div class="inner_main_div">
                        <div class="inner_img_div">
                          @if(!empty($row->photo->image))

                          <img src="{{ $user_assets }}/my_photo/{{ $row->photo->image }}" class="user_image">
                          @else
                           <img src="{{ $user_assets }}/sunrise.jpg" class="user_image">
                          @endif
                        </div>
                        <div class="inner_msg_div">
                          <p class="msg_txt">You sent friend request <strong>{{ $row->user->user_name }}</strong>.</p>
                        </div>
                        <div class="inner_div_time">
                          <p class="time_div">{{ $row->created_at }}</p>
                          <!-- <p class="date_div">2008-02-14</p> -->
                        </div>
                      </div>
                    </a>
                     @endforeach
                  @endif
                  </div>
               </div>

                <div class="content_body cbone" id="cb5_5">
                   <div class="scrollablediv">
                    @if(!empty($request))
                 @foreach($request as $row)
                     <a href="{{ url('public-profile',$row->requested_user_id) }}" target="__blank">
                      <div class="inner_main_div">
                        <div class="inner_img_div">
                           @if(!empty($row->photo->image))
                          <img src="{{ $user_assets }}/my_photo/{{ $row->photo->image }}" class="user_image">
                          @else
                           <img src="{{ $user_assets }}/sunrise.jpg" class="user_image">
                          @endif
                        </div>
                        <div class="inner_msg_div">
                          <p class="msg_txt">You sent friend request <strong> {{ $row->user->user_name }}</strong>.</p>
                        </div>
                        <div class="inner_div_time">
                          <p class="time_div">{{ $row->created_at }}</p>
                          <!-- <p class="date_div">2008-02-14</p> -->
                        </div>
                      </div>
                    </a>
                    @endforeach
                  @endif
                  </div>
               </div>

            </div>

            <br>
            <div class="box_body">
               <div id="hb1">
                  <div class="head_box one stats-main">
                    <p class="headings stats-head">Photo Permission Sent <!-- <a href="" class="stats-head-link">View Activity Log</a> --> </p>
                    <div class="pull-right right-counter-part">
                    	<p class="right-counter-new pull-left"><em class="pointer" id="p_p_s_new">New</em> {{ count($new_photo) }}</p>
                    	<p class="right-counter-old pull-left"><em class="pointer" id="p_p_s_old">Old</em> {{ count($photo_permission) }}</p>
                    </div>
                    <div class="clearfix"></div>
                  </div>
               </div>
               <div class="content_body cbone" id="cb6">
                   <div class="scrollablediv">
                    
                    @if(!empty($new_photo))
                 @foreach($new_photo as $row)
                     <a href="{{ url('public-profile',$row->permission_user_id) }}" target="__blank">
                      <div class="inner_main_div">
                        <div class="inner_img_div">
                           @if(!empty($row->photos->image))
                          <img src="{{ $user_assets }}/my_photo/{{ $row->photos->image }}" class="user_image">
                          @else
                           <img src="{{ $user_assets }}/sunrise.jpg" class="user_image">
                          @endif
                        </div>
                        <div class="inner_msg_div">
                          <p class="msg_txt">You send photo permission request<strong> {{ $row->users->user_name }}</strong>.</p>
                        </div>
                        <div class="inner_div_time">
                          <p class="time_div">{{ $row->created_at }}</p>
                          <!-- <p class="date_div">2008-02-14</p> -->
                        </div>
                      </div>
                    </a>
                    @endforeach
                  @endif
                  </div>
               </div>

                <div class="content_body cbone" id="cb6_6">
                   <div class="scrollablediv">
                    @if(!empty($photo_permission))
                 @foreach($photo_permission as $row)
                     <a href="{{ url('public-profile',$row->permission_user_id) }}" target="__blank">
                      <div class="inner_main_div">
                        <div class="inner_img_div">
                           @if(!empty($row->photos->image))
                          <img src="{{ $user_assets }}/my_photo/{{ $row->photos->image }}" class="user_image">
                          @else
                           <img src="{{ $user_assets }}/sunrise.jpg" class="user_image">
                          @endif
                        </div>
                        <div class="inner_msg_div">
                         <p class="msg_txt">You send photo permission request<strong> {{ $row->users->user_name }}</strong>.</p>
                        </div>
                        <div class="inner_div_time">
                          <p class="time_div">{{ $row->created_at }}</p>
                          <!-- <p class="date_div">2008-02-14</p> -->
                        </div>
                      </div>
                    </a>
                     @endforeach
                  @endif
                  </div>
               </div>

            </div>

            <br>
            <div class="box_body">
               <div id="hb1">
                  <div class="head_box one stats-main">
                    <p class="headings stats-head">Photo Permission Received <!-- <a href="" class="stats-head-link">View Activity Log</a> --> </p>
                    <div class="pull-right right-counter-part">
                    	<p class="right-counter-new pull-left"><em class="pointer" id="p_p_r_new">New</em> {{ count($new_photo_reci) }}</p>
                    	<p class="right-counter-old pull-left"><em class="pointer" id="p_p_r_old">Old</em> {{ count($photo_permission_reci) }}</p>
                    </div>
                    <div class="clearfix"></div>
                  </div>
               </div>
               <div class="content_body cbone" id="cb7">
                   <div class="scrollablediv">
                     @if(!empty($new_photo_reci))
                 @foreach($new_photo_reci as $row)
                     <a href="{{ url('public-profile',$row->permission_user_id) }}" target="__blank">
                    
                      <div class="inner_main_div">
                        <div class="inner_img_div">
                         @if(!empty($row->photo->image))
                          <img src="{{ $user_assets }}/my_photo/{{ $row->photo->image }}" class="user_image">
                          @else
                           <img src="{{ $user_assets }}/sunrise.jpg" class="user_image">
                          @endif
                        </div>
                        <div class="inner_msg_div">
                         <p class="msg_txt">You received photo permission request<strong> {{ $row->user->user_name }}</strong>.</p>
                        </div>
                        <div class="inner_div_time">
                          <p class="time_div">{{ $row->created_at }}</p>
                          <!-- <p class="date_div">2008-02-14</p> -->
                        </div>
                      </div>
                    </a>
                     @endforeach
                  @endif
                  </div>
               </div>

                <div class="content_body cbone" id="cb7_7">
                   <div class="scrollablediv">

                    @if(!empty($photo_permission_reci))
                 @foreach($photo_permission_reci as $row)
                     <a href="{{ url('public-profile',$row->permission_user_id) }}" target="__blank">
                    
                      <div class="inner_main_div">
                        <div class="inner_img_div">
                          @if(!empty($row->photo->image))
                          <img src="{{ $user_assets }}/my_photo/{{ $row->photo->image }}" class="user_image">
                          @else
                           <img src="{{ $user_assets }}/sunrise.jpg" class="user_image">
                          @endif
                        </div>
                        <div class="inner_msg_div">
                         <p class="msg_txt">You received photo permission request<strong> {{ $row->user->user_name }}</strong>.</p>
                        </div>
                        <div class="inner_div_time">
                          <p class="time_div">{{ $row->created_at }}</p>
                          <!-- <p class="date_div">2008-02-14</p> -->
                        </div>
                      </div>
                    </a>
                     @endforeach
                  @endif

                  </div>
               </div>


            </div>

            <br>
            <div class="box_body">
               <div id="hb1">
                  <div class="head_box one stats-main">
                    <p class="headings stats-head">Hidden Profile <!-- <a href="" class="stats-head-link">View Activity Log</a> --> </p>
                    <div class="pull-right right-counter-part">
                    	<p class="right-counter-new pull-left"><em class="pointer" id="h_p_new">New</em> {{ count($new_hide_profile) }}</p>
                    	<p class="right-counter-old pull-left"><em class="pointer" id="h_p_old">Old</em> {{ count($hide_profile) }}</p>
                    </div>
                    <div class="clearfix"></div>
                  </div>
               </div>
               <div class="content_body cbone" id="cb8">
                   <div class="scrollablediv">
    
                     @if(!empty($new_hide_profile))
                 @foreach($new_hide_profile as $row)
                     <a href="{{ url('public-profile',$row->hide_user_id) }}" target="__blank">
                    
                      <div class="inner_main_div">
                        <div class="inner_img_div">
                          @if(!empty($row->photo->image))
                          <img src="{{ $user_assets }}/my_photo/{{ $row->photo->image }}" class="user_image">
                          @else
                           <img src="{{ $user_assets }}/sunrise.jpg" class="user_image">
                          @endif
                        </div>
                        <div class="inner_msg_div">
                         <p class="msg_txt">You hide<strong> {{ $row->user->user_name }} profile</strong>.</p>
                        </div>
                        <div class="inner_div_time">
                          <p class="time_div">{{ $row->created_at }}</p>
                          <!-- <p class="date_div">2008-02-14</p> -->
                        </div>
                      </div>
                    </a>
                     @endforeach
                  @endif
                  </div>
               </div>

                <div class="content_body cbone" id="cb8_8">
                   <div class="scrollablediv">

                     @if(!empty($hide_profile))
                 @foreach($hide_profile as $row)
                     <a href="{{ url('public-profile',$row->hide_user_id) }}" target="__blank">
                    
                      <div class="inner_main_div">
                        <div class="inner_img_div">
                          @if(!empty($row->photo->image))
                          <img src="{{ $user_assets }}/my_photo/{{ $row->photo->image }}" class="user_image">
                          @else
                           <img src="{{ $user_assets }}/sunrise.jpg" class="user_image">
                          @endif
                        </div>
                        <div class="inner_msg_div">
                         <p class="msg_txt">You hide<strong> {{ $row->user->user_name }} profile</strong>.</p>
                        </div>
                        <div class="inner_div_time">
                          <p class="time_div">{{ $row->created_at }}</p>
                          <!-- <p class="date_div">2008-02-14</p> -->
                        </div>
                      </div>
                    </a>
                     @endforeach
                  @endif

                  </div>
               </div>

            </div>

            <br>
            <div class="box_body">
               <div id="hb1">
                  <div class="head_box one stats-main">
                    <p class="headings stats-head">Block Profile <!-- <a href="" class="stats-head-link">View Activity Log</a> --> </p>
                    <div class="pull-right right-counter-part">
                    	<p class="right-counter-new pull-left"><em class="pointer" id="b_p_new">New</em> {{ count($new_blockuser) }}</p>
                    	<p class="right-counter-old pull-left"><em class="pointer" id="b_p_old">Old</em> {{ count($blockuser) }}</p>
                    </div>
                    <div class="clearfix"></div>
                  </div>
               </div>
               <div class="content_body cbone" id="cb9">
                   <div class="scrollablediv">
    
                    @if(!empty($new_blockuser))
                 @foreach($new_blockuser as $row)
                     <a href="{{ url('public-profile',$row->block_user_id) }}" target="__blank">
                     
                      <div class="inner_main_div">
                        <div class="inner_img_div">
                          @if(!empty($row->photo->image))

                          <img src="{{ $user_assets }}/my_photo/{{ $row->photo->image }}" class="user_image">
                          @else
                           <img src="{{ $user_assets }}/sunrise.jpg" class="user_image">
                          @endif
                        </div>
                        <div class="inner_msg_div">
                         <p class="msg_txt">You block <strong> {{ $row->user->user_name }}</strong>.</p>
                        </div>
                        <div class="inner_div_time">
                          <p class="time_div">{{ $row->created_at }}</p>
                          <!-- <p class="date_div">2008-02-14</p> -->
                        </div>
                      </div>
                    </a>
                     @endforeach
                  @endif

                  </div>
               </div>

                <div class="content_body cbone" id="cb9_9">
                   <div class="scrollablediv">

                    @if(!empty($blockuser))
                 @foreach($blockuser as $row)
                     <a href="{{ url('public-profile',$row->block_user_id) }}" target="__blank">
                    
                      <div class="inner_main_div">
                        <div class="inner_img_div">
                          @if(!empty($row->photo->image))

                          <img src="{{ $user_assets }}/my_photo/{{ $row->photo->image }}" class="user_image">
                          @else
                           <img src="{{ $user_assets }}/sunrise.jpg" class="user_image">
                          @endif
                        </div>
                        <div class="inner_msg_div">
                         <p class="msg_txt">You block <strong> {{ $row->user->user_name }}</strong>.</p>
                        </div>
                        <div class="inner_div_time">
                          <p class="time_div">{{ $row->created_at }}</p>
                          <!-- <p class="date_div">2008-02-14</p> -->
                        </div>
                      </div>
                    </a>
                     @endforeach
                  @endif

                  </div>
               </div>


            </div>
            
            <br>
            <div class="box_body">
               <div id="hb1">
                  <div class="head_box one stats-main">
                    <p class="headings stats-head">Invite to View my Profile <!-- <a href="" class="stats-head-link">View Activity Log</a> --> </p>
                    <div class="pull-right right-counter-part">
                    	<p class="right-counter-new pull-left"><em class="pointer" id="i_t_v_p_new">New</em> {{ count($new_invite) }}</p>
                    	<p class="right-counter-old pull-left"><em class="pointer" id="i_t_v_p_old">Old</em> {{ count($invite) }}</p>
                    </div>
                    <div class="clearfix"></div>
                  </div>
               </div>
               <div class="content_body cbone" id="cb10">
                   <div class="scrollablediv">
    
                     @if(!empty($new_invite))
                 @foreach($new_invite as $row)
                     <a href="{{ url('public-profile',$row->inviteprofile_user_id) }}" target="__blank">
                     
                      <div class="inner_main_div">
                        <div class="inner_img_div">
                          @if(!empty($row->photo->image))

                          <img src="{{ $user_assets }}/my_photo/{{ $row->photo->image }}" class="user_image">
                          @else
                           <img src="{{ $user_assets }}/sunrise.jpg" class="user_image">
                          @endif
                        </div>
                        <div class="inner_msg_div">
                         <p class="msg_txt">You sent request for invite view my profile<strong> {{ $row->user->user_name }}</strong>.</p>
                        </div>
                        <div class="inner_div_time">
                          <p class="time_div">{{ $row->created_at }}</p>
                          <!-- <p class="date_div">2008-02-14</p> -->
                        </div>
                      </div>
                    </a>
                     @endforeach
                  @endif

                  </div>
               </div>

                <div class="content_body cbone" id="cb10_10">
                   <div class="scrollablediv">

                    @if(!empty($invite))
                 @foreach($invite as $row)
                     <a href="{{ url('public-profile',$row->inviteprofile_user_id) }}" target="__blank">
                    
                      <div class="inner_main_div">
                        <div class="inner_img_div">
                          @if(!empty($row->photo->image))

                          <img src="{{ $user_assets }}/my_photo/{{ $row->photo->image }}" class="user_image">
                          @else
                           <img src="{{ $user_assets }}/sunrise.jpg" class="user_image">
                          @endif
                        </div>
                        <div class="inner_msg_div">
                         <p class="msg_txt">You sent request for invite view my profile <strong> {{ $row->user->user_name }}</strong>.</p>
                        </div>
                        <div class="inner_div_time">
                          <p class="time_div">{{ $row->created_at }}</p>
                          <!-- <p class="date_div">2008-02-14</p> -->
                        </div>
                      </div>
                    </a>
                     @endforeach
                  @endif

                  </div>
               </div>

            </div>
            
            <br>
            <div class="box_body">
               <div id="hb1">
                  <div class="head_box one stats-main">
                    <p class="headings stats-head">History With Members <!-- <a href="" class="stats-head-link">View Activity Log</a> --> </p>
                    <div class="pull-right right-counter-part">
                    	<p class="right-counter-new pull-left"><em class="pointer" id="h_m_new">New</em> 12%</p>
                    	<p class="right-counter-old pull-left"><em class="pointer" id="h_m_old">Old</em> 26%</p>
                    </div>
                    <div class="clearfix"></div>
                  </div>
               </div>
               <div class="content_body cbone" id="cb11">
                   <div class="scrollablediv">
    
                     <a href="" target="__blank">
                      <div class="inner_main_div">
                        <div class="inner_img_div">
                           <img src="{{ $user_assets }}/sunrise.jpg" class="user_image">
                        </div>
                        <div class="inner_msg_div">
                          <p class="msg_txt">You add <strong>Shahruk</strong> in your favorite.</p>
                        </div>
                        <div class="inner_div_time">
                          <p class="time_div">02:31:42</p>
                          <!-- <p class="date_div">2008-02-14</p> -->
                        </div>
                      </div>
                    </a>

                  </div>
               </div>

                <div class="content_body cbone" id="cb11_11">
                   <div class="scrollablediv">

                     <a href="" target="__blank">
                      <div class="inner_main_div">
                        <div class="inner_img_div">
                           <img src="{{ $user_assets }}/sunrise.jpg" class="user_image">
                        </div>
                        <div class="inner_msg_div">
                          <p class="msg_txt">old add <strong>Shahruk</strong> in your favorite.</p>
                        </div>
                        <div class="inner_div_time">
                          <p class="time_div">02:31:42</p>
                          <!-- <p class="date_div">2008-02-14</p> -->
                        </div>
                      </div>
                    </a>

                  </div>
               </div>

            </div>
            
            <br>
            <div class="box_body">
               <div id="hb1">
                  <div class="head_box one stats-main">
                    <p class="headings stats-head">Decline <!-- <a href="" class="stats-head-link">View Activity Log</a> --> </p>
                    <div class="pull-right right-counter-part">
                    	<p class="right-counter-new pull-left"><em class="pointer" id="d_new">New</em> {{ count($new_delete) }}</p>
                    	<p class="right-counter-old pull-left"><em class="pointer" id="d_old">Old</em> {{ count($delete) }}</p>
                    </div>
                    <div class="clearfix"></div>
                  </div>
               </div>
               <div class="content_body cbone" id="cb12">
                   <div class="scrollablediv">
    
                     @if(!empty($new_delete))
                 @foreach($new_delete as $row)
                     <a href="{{ url('public-profile',$row->delete_user_id) }}" target="__blank">
                    
                      <div class="inner_main_div">
                        <div class="inner_img_div">
                          @if(!empty($row->photo->image))

                          <img src="{{ $user_assets }}/my_photo/{{ $row->photo->image }}" class="user_image">
                          @else
                           <img src="{{ $user_assets }}/sunrise.jpg" class="user_image">
                          @endif
                        </div>
                        <div class="inner_msg_div">
                         <p class="msg_txt">Reject your request <strong> {{ $row->user->user_name }}</strong>.</p>
                        </div>
                        <div class="inner_div_time">
                          <p class="time_div">{{ $row->created_at }}</p>
                          <!-- <p class="date_div">2008-02-14</p> -->
                        </div>
                      </div>
                    </a>
                     @endforeach
                  @endif

                  </div>
               </div>

                <div class="content_body cbone" id="cb12_12">
                   <div class="scrollablediv">

                     @if(!empty($delete))
                 @foreach($delete as $row)
                     <a href="{{ url('public-profile',$row->delete_user_id) }}" target="__blank">
                    
                      <div class="inner_main_div">
                        <div class="inner_img_div">
                          @if(!empty($row->photo->image))

                          <img src="{{ $user_assets }}/my_photo/{{ $row->photo->image }}" class="user_image">
                          @else
                           <img src="{{ $user_assets }}/sunrise.jpg" class="user_image">
                          @endif
                        </div>
                        <div class="inner_msg_div">
                         <p class="msg_txt">Reject your request <strong> {{ $row->user->user_name }}</strong>.</p>
                        </div>
                        <div class="inner_div_time">
                          <p class="time_div">{{ $row->created_at }}</p>
                          <!-- <p class="date_div">2008-02-14</p> -->
                        </div>
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
    

<script>
  
  
  $(document).ready(function(){
       $("#con_new").click(function(){
         $("#cb1").slideToggle("slow");
         $("#cb1_1").hide();
      });
       
   });

   $(document).ready(function(){
       $("#con_old").click(function(){
         $("#cb1_1").slideToggle('slow');
         $("#cb1").hide();
      });
       
   });

// ****************************************************

      $(document).ready(function(){
       $("#fav_new").click(function(){
         $("#cb2").slideToggle('slow');
         $("#cb2_2").hide();
      });
       
   });

      $(document).ready(function(){
       $("#fav_old").click(function(){
         $("#cb2_2").slideToggle('slow');
          $("#cb2").hide();
      });
       
   });

// ***************************************************


       $(document).ready(function(){
       $("#prof_new").click(function(){
         $("#cb3").slideToggle('slow');
          $("#cb3_3").hide();
      });
       
   });
              $(document).ready(function(){
       $("#prof_old").click(function(){
         $("#cb3_3").slideToggle('slow');
         $("#cb3").hide();
      });
       
   });

 //*****************************************************

        $(document).ready(function(){
       $("#s_m_new").click(function(){
         $("#cb4").slideToggle('slow');
         $("#cb4_4").hide();
      });
       
   });
         $(document).ready(function(){
       $("#s_m_old").click(function(){
         $("#cb4_4").slideToggle('slow');
        $("#cb4").hide();
      });
       
   });

//******************************************************* 

         $(document).ready(function(){
       $("#s_r_new").click(function(){
         $("#cb5").slideToggle('slow');
         $("#cb5_5").hide();
      });
       
   });
         $(document).ready(function(){
       $("#s_r_old").click(function(){
         $("#cb5_5").slideToggle('slow');
         $("#cb5").hide();
      });
       
   });

// ***********************************************************


          $(document).ready(function(){
       $("#p_p_s_new").click(function(){
         $("#cb6").slideToggle('slow');
      $("#cb6_6").hide();
      });
       
   });
           $(document).ready(function(){
       $("#p_p_s_old").click(function(){
         $("#cb6_6").slideToggle('slow');
        $("#cb6").hide();
      });
       
   });

  //*********************************************************** 

           $(document).ready(function(){
       $("#p_p_r_new").click(function(){
         $("#cb7").slideToggle('slow');
        $("#cb7_7").hide();
      });
       
   });

          $(document).ready(function(){
       $("#p_p_r_old").click(function(){
         $("#cb7_7").slideToggle('slow');
        $("#cb7").hide();
      });
       
   });

// ***************************************************************
            $(document).ready(function(){
       $("#h_p_new").click(function(){
         $("#cb8").slideToggle('slow');
      $("#cb8_8").hide();
      });
       
   });

             $(document).ready(function(){
       $("#h_p_old").click(function(){
         $("#cb8_8").slideToggle('slow');
      $("#cb8").hide();
      });
       
   });

  // *************************************************************

             $(document).ready(function(){
       $("#b_p_new").click(function(){
         $("#cb9").slideToggle('slow');
        $("#cb9_9").hide();
      });
       
   });
             $(document).ready(function(){
       $("#b_p_old").click(function(){
         $("#cb9_9").slideToggle('slow');
      $("#cb9").hide();
      });
       
   });

// ****************************************************************

             $(document).ready(function(){
       $("#i_t_v_p_new").click(function(){
         $("#cb10").slideToggle('slow');
        $("#cb10_10").hide();
      });
       
   });
          $(document).ready(function(){
       $("#i_t_v_p_old").click(function(){
         $("#cb10_10").slideToggle('slow');
      $("#cb10").hide();
      });
       
   });

// ****************************************************************
           $(document).ready(function(){
       $("#h_m_new").click(function(){
         $("#cb11").slideToggle('slow');
        $("#cb11_11").hide();
      });
       
   });
          $(document).ready(function(){
       $("#h_m_old").click(function(){
         $("#cb11_11").slideToggle('slow');
        $("#cb11").hide();
      });
       
   });

//********************************************************************* 

         $(document).ready(function(){
       $("#d_new").click(function(){
         $("#cb12").slideToggle('slow');
        $("#cb12_12").hide();
      });
       
   });
          $(document).ready(function(){
       $("#d_old").click(function(){
         $("#cb12_12").slideToggle('slow');
         $("#cb12").hide();
      });
       
   });

// ********************************************************************


</script>


@endsection

@push('css')
<link rel="shortcut icon" href="{{ $user_assets }}/images/favicon.png">
    <link rel="stylesheet" href="{{ $user_assets }}/css/animate.css" />
<!-- bootstrap -->
<link rel="stylesheet" href="{{ $user_assets }}/css/chat.css" />
<!-- et line icon -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
  
  {{-- <script type="text/javascript" src="{{ $user_assets }}/js/jquery-2.1.1.min.js"></script> --}}
<script type="text/javascript" src="{{ $user_assets }}/js/custom.js"></script>
<link rel="stylesheet" href="{{ $user_assets }}/css/custom.css" />
<link rel="stylesheet" href="{{ asset('public') }}/css/chosen.css" />
 <link rel="stylesheet" href="{{ $user_assets }}/css/style3.css" />
 <link rel="stylesheet" href="{{ $user_assets }}/css/progress-circle.css" />

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
{{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> --}}

@endpush