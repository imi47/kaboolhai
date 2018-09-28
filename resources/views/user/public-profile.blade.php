@extends('user/user_master_layout1') 
@section('data') 

{{-- Start model --}}


{{-- end model --}}
<link rel="stylesheet" href="{{ $user_assets }}/css/lightbox.min.css">
  {{-- <script type="text/javascript" src="{{ $user_assets }}/js/jquery-2.1.1.min.js"></script> --}}
  
<div style="padding-top:20px;"></div>
  
  {{-- <link rel="stylesheet" href="{{ $user_assets }}/css/owl.carousel2.css" /> --}}

  <link rel="stylesheet" href="{{ $user_assets }}/css/public-profile.css" />
  <div style="padding-top: 90px;"></div>
<div class="container-fluid">

  <style type="text/css">
     .go_more{
      background-color: #ffffff;
     }
     #collapse1 {
     	    overflow-y: scroll;
    min-height: 250px;
    max-height: 450px;
     }

		 @media (max-width:1125px) {
			#btn a button {
					width:180px !important;
				}
		 }

		 @media (max-width:991px) {
			 .imgofuser {
				 float:none;
				 clear:both;
				 text-align:center;
				 width:auto;
			 }

			 .contacts_detail {
				 margin-bottom:40px;
			 }

			 .somelinks {
				 margin-left:-9px;
			 }

			 .photo3 {
				 margin: 8px auto 0 auto;
			 }
		 }

		  @media (max-width:768px) {
				.contacts_detail, .somelinks {
					float:none;
				 clear:both;
				 text-align:center;
				 width:auto;
				 /* margin:auto !important;
				 text-align:center !important; */
				}
			}
		 
		 @media (max-width:840px) {
				#btn a button {
					width:180px !important;
				}

				#btn a button .hidden-xs {
					display:block !important;
				}
		 }

		  @media (max-width:640px) {
				#btn a button {
					width:380px !important;
				}
				
				#btn {
				display:block !important;
				width:100% !important;
				text-align:center;
				margin-bottom:15px;
				}

				.container1 {
					padding-bottom:120px;
				}
		 }

     </style>
<script type="text/javascript">
	
    responsive : {
    // breakpoint from 0 up
    0 : {
        option1 : value,
        option2 : value,
        ...
    },
    // breakpoint from 480 up
    480 : {
        option1 : value,
        option2 : value,
        ...
    },
    // breakpoint from 768 up
    768 : {
        option1 : value,
        option2 : value,
        ...
    }
}
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:5,
            nav:true,
            loop:false
        }
    }
});


</script>

<div class="row">
	<div class="scroll">
       <div class="wrapper cf">
       	{{-- <img src="https://static.xx.fbcdn.net/images/emoji.php/v9/fd8/1/32/1f61a.png" /> --}}


		 <div class="col-md-9 content">
		 			@if(Session::has('error'))
                    <p class="alert alert-danger">{{ Session::get('error') }}</p>
                @endif
                @if(Session::has('success'))
                    <p class="alert alert-success">{{ Session::get('success') }}</p>
                @endif
		  <div class="well container1" style="background-color: #ffffff;border-radius:10px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
			    <div class="headcontain">
				  <div class="row">
           @if(count($block_user))
           <p class="alert alert-danger text-center">Sory you are block</p>
            @else

					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<div class="imgofuser">
               @if($user_data->id==Session::get('user_id'))
               @if(count($myphoto))
              @foreach($myphoto as $img)
                      @if($img->dp_status==1)
                       <img class="currentuserimg" src="{{ $user_assets }}/my_photo/{{ $img->image }}">
                       @endif
                       @endforeach
                     
			             @elseif(count($user_data->image_name))
                      
                       <img class="currentuserimg" src="{{ $user_assets }}/profile_image/{{ $user_data->image_name }}">

                       @else
                       
              {{-- <img src="{{ $user_assets }}/dp-img-2.png"> --}}
					<img src="{{ $user_assets }}/sunrise.jpg" class="currentuserimg">
             {{-- @endif --}}
            @endif
             @else
             @if(count($photo))
             @if($photo->status==1)
             @if(count($myphoto))
              @foreach($myphoto as $img)
                      @if($img->dp_status==1)
                       <img class="currentuserimg" src="{{ $user_assets }}/my_photo/{{ $img->image }}">
                       @endif
                       @endforeach
                     @endif
                     @elseif(count($user_data->image_name))
                      
                       <img class="currentuserimg" src="{{ $user_assets }}/profile_image/{{ $user_data->image_name }}">

                       @else
                       
              {{-- <img src="{{ $user_assets }}/dp-img-2.png"> --}}
          <img src="{{ $user_assets }}/sunrise.jpg" class="currentuserimg">
                     
                     
                    @endif
                   @elseif(count($user_data->image_name))
                      
                       <img class="currentuserimg" src="{{ $user_assets }}/profile_image/{{ $user_data->image_name }}">

                       @else
              {{-- <img src="{{ $user_assets }}/dp-img-2.png"> --}}
          <img src="{{ $user_assets }}/sunrise.jpg" class="currentuserimg">
                    @endif
           
             @endif
              
             @if($user_data->id==Session::get('user_id'))
             @if(count($myphoto)>1)
             <a href="javascript:;" data-toggle="modal" data-target="#myphotoModal">
							<div class="cnt_lod_ph photo3">
								<p class="tto" style="color: white !important;"> {{ count($myphoto) }} Photo</p>	
							</div>
							</a>
							@endif
             		@else
             		@if(!empty($photo))
             		@if($photo->status==1)
             		@if(count($myphoto)>1)
             		<a   href="javascript:;" data-toggle="modal" data-target="#myphotoModal">
							<div class="cnt_lod_ph">
								<p style="color: white !important;" class="tto"> {{ count($myphoto) }} Photo</p>	
							</div>
							</a>
							
							@endif
							@endif
							@else
							@if(count($myphoto)>1)
							<a style="color: white !important;"  href="javascript:;" data-toggle="modal" data-target="#photonotModal">
							<div class="cnt_lod_ph">
								<p style="color: white !important;" class="tto">{{ count($myphoto) }} Photo </p>	
							</div>
							</a>
							@endif

							@endif
							@endif

						</div>	
					</div>

					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="contacts_detail">
							<p class="t" style="font-size: 18px;"><strong>{{strtoupper($user_data->user_name)}}</strong></p>
							<p class="t" style="font-weight:bold;">{{ $user_data->word_1 }}, {{ $user_data->word_2 }}, {{ $user_data->word_3 }}</p>
							<p class="t" style="font-size: 13px;"><strong>Age</strong></p>
							{{-- <H2>Age</H3> --}}
							@php $age=date('Y')-$user_data->year @endphp
							<p class="t to">{{ $age }} Years</p>
							{{-- <h3>Address</h3> --}}
							<p class="t" style="font-size: 13px;"><strong>Address</strong></p>
							<p class="t to">@if(!empty($city)) {{ $city->city_name }} @endif, @if(!empty($country)) {{ $country->country_name }} @endif</p>
							<h3>{{-- Last Login --}}</h3>
							<p class="t" style="font-size: 13px;"><strong>Last Login</strong></p>
							<p class="t to">{{ $user_data->last_login }}</p><br><br>
							@if(!empty($friend))
							<div style="margin:-26px; " class="form-inline">
							 <a title="Accept Friend request" href="{{ url('confirm-friend',$friend->user_id) }}" class="btn btn-primary " style="padding:5px;">confirm<i class=" 
              fa fa-check" style="text-decoration: none; color: green; font-size: 20px; margin-left: 10px;"></i></a>
          

          
							 <a class="btn btn-primary " title="Reject Friend request" href="{{ url('delete-request',$friend->user_id) }}" style="padding:5px; background-color:#d35400; ">Reject <i class=" 
              fa fa-close" style="text-decoration: none; color: red; font-size: 20px; margin-left: 10px;"></i></a>
              </div>
                 
							
							
							@endif
							@if($confirm_friend)
							<div style="margin:-26px; " class="form-inline">
          
							 <a class="btn btn-primary " title="Reject Friend request" href="{{ url('delete-request',$confirm_friend->user_id) }}" style="padding:5px; background-color:#d35400; margin: 33px 0px 0px 23px;">Unfriend <i class=" 
              fa fa-close" style="text-decoration: none; color: red; font-size: 20px; margin-left: 10px;"></i></a>
              </div>
							@endif
						</div>		
					</div>
					@if($user_data->id<>Session::get('user_id'))
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="somelinks">
							<ul class="list_somebtn">
								<li class="agea"><a href="{{ url('more-alike',$user_data->id) }}"><span><img src="{{ $user_assets }}/more-alike.png" alt="" class="icon_size"></span> <span class="linkT">More alike</span></a></li>
                 @if(count($block_users))
                  <li class="agea"><a href="javascript:;" data-toggle="modal" data-target="#unblock" ><span><img src="{{ $user_assets }}/send message.png" alt="" class="icon_size"></span><span class="linkT"> Send Message </span></a></li>
								@elseif(count($confirm_friend))
								<li class="agea"><a rel="{{ $user_data->id }}" href="javascript:;" class="left-first-section"><span><img src="{{ $user_assets }}/send message.png" alt="" class="icon_size"></span><span class="linkT"> Send Message</span></a></li> 
								@else
								<li class="agea"><a href="javascript:;" data-toggle="modal" data-target="#nofriend" ><span><img src="{{ $user_assets }}/send message.png" alt="" class="icon_size"></span><span class="linkT"> Send Message </span></a></li>
								@endif
              
               
								@if(empty($favourit))
								<li class="agea"><a href="{{ url('favourite-user',$user_data->id) }}"><span><img src="{{ $user_assets }}/favorite.png" alt="" class="icon_size"></span><span class="linkT">  Add to my favourite </span></a></li>

								@else <li class="agea"><a href="{{ url('delete-favourite-user',$user_data->id) }}"><span><img src="{{ $user_assets }}/favorite.png" alt="" class="icon_size"></span><span class="linkT">Remove from my favorite </span></a></li> @endif
								@if(empty($photo))
								<li class="agea"><a href="{{ url('photo-permission',$user_data->id) }}"><span><img src="{{ $user_assets }}/photorequest.png" alt="" class="icon_size"></span><span class="linkT"> Ask to Photo Permission</span></a></li>
								@else
								<li class="agea"><a onclick="return false;" href="{{ url('photo-permission',$user_data->id) }}"><span><img src="{{ $user_assets }}/photorequest.png" alt="" class="icon_size"></span><span class="linkT"> Ask to Photo Permission</span></a>  (Permission request sent)</li>
								@endif
								@if(empty($invite))
								<li class="agea"><a href="{{ url('invite-view-profile',$user_data->id) }}"><span><img src="{{ $user_assets }}/invite.png" alt="" class="icon_size"></span><span class="linkT"> Invite to view my profile</span></a></li>
								@else
								<li class="agea"><a onclick="return false" href="{{ url('invite-view-profile',$user_data->id) }}"><span><img src="{{ $user_assets }}/invite.png" alt="" class="icon_size"></span><span class="linkT"> Invite to view my profile</span></a> (invitation request sent)</li>
								@endif
                <li class="agea"><a href="{{ url('addquestionlist',$user_data->id) }}"><span class="fa fa-question icon_size linkT" style="font-size: 25px;"></span> Question</a></li>
                @if(empty($hideprofile))
								<li class="agea"><a href="{{ url('hide-profile',$user_data->id) }}" onclick="return confirm('Are you sure you want to hide this user?');" ><span><img src="{{ $user_assets }}/dontshowagain.png" alt="" class="icon_size"></span> <span class="linkT">Don't show me again</span></a></li>
                @else
                <li class="agea"><a href="{{ url('show-profile',$user_data->id) }}" onclick="return confirm('Are you sure you want to show this user?');" ><span><img src="{{ $user_assets }}/dontshowagain.png" alt="" class="icon_size"></span> <span class="linkT">show me again</span></a></li>
                @endif

								<li class="agea"><a href="{{ url('activity-log',$user_data->id) }}"><span><img src="{{ $user_assets }}/historywithhim.png" alt="" class="icon_size"></span> <span class="linkT">Your history </span></a></li>
								@if(empty($blockuser))
								<li class="agea"><a href="{{ url('block-user',$user_data->id) }}" onclick="return confirm('Are you sure you want to block this user?');" ><span><img src="{{ $user_assets }}/block-user.png" alt="" class="icon_size"></span><span class="linkT"> Block {{ $user_data->user_name }}  </span></a></li>
								 @else
								  <li class="agea"><a href="{{ url('active-user',$user_data->id) }}" onclick="return confirm('Are you sure you want to unblock this user?');" ><span><img src="{{ $user_assets }}/block-user.png" alt="" class="icon_size"></span><span class="linkT"> Unblock User {{ $user_data->user_name }}  </span></a></li> @endif
								  @if(empty($request))
								<li class="agea"><a href="{{ url('add-friend',$user_data->id) }}"><span><img src="{{ $user_assets }}/sendrequest.png" alt="" class="icon_size"></span> <span class="linkT">Sent Request</span></a></li>
								@else
								<li class="agea"><a onclick="return false" href="{{ url('add-friend',$user_data->id) }}"><span><img src="{{ $user_assets }}/sendrequest.png" alt="" class="icon_size"></span> <span class="linkT">Sent Request</span></a> (Friend request sent)</li>
								@endif
							</ul>	
						</div>
					</div>
          @else
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="somelinks">
              <ul class="list_somebtn">
               
               
                <li class="agea"><a  href="{{ url('manage-profile') }}"><i class="fa fa-edit" style="font-size: 20px;"></i>Manage profile</span></a></li> 
              
                
              
                <li class="agea"><a href="{{ url('find-exact-match') }}"><i class="fa fa-eye" style="font-size: 20px;"></i> Find exact match </a></li>

                
               
                <li class="agea"><a href="{{ url('who-looking-for-me') }}"><i class="fa fa-eye" style="font-size: 20px;"></i> Who Looking for me</a></li>
                
                
                <li class="agea"><a href="{{ url('who-am-i-looking') }}"><i class="fa fa-eye" style="font-size: 20px;"></i> Who am i looking</a></li>
               
               
                
                <li class="agea"><a href="{{ url('favourite-list') }}"><i class="fa fa-heart" style="font-size: 20px;"></i> My Favourite</a></li>
               
                
               
                <li class="agea"><a href="{{ url('blocked-list') }}" ><i class="fa fa-ban" style="font-size: 20px;"></i> Blocked users</a></li>
                <li class="agea"><a href="{{ url('my-photo') }}" ><i class="fa fa-camera" style="font-size: 20px;"></i> My Photo</a></li>

                <li class="agea"><a href="{{ url('settings') }}" ><i class="fa fa-wrench" style="font-size: 20px;"></i> Setting</a></li>
                 
                  
                
               
              </ul> 
            </div>
          </div>
						@endif
				</div>	
			</div>

			<div class="btnnarea">
				<div class="row">
					<div class="col-lg-12 col-sm-12">
   					
					    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
					        <div class="btn-group" role="group" id='btn'>
					        	<a href="" onclick="return profile()">
					            <button id="pro" style="margin-top:0px;height:40px;width:250px;border-radius:10px !important; background-color:#4ccee8;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0);" type="button" id="stars" class="btn abc" href="#tab1" data-toggle="tab">
					                <div class="hidden-xs" style="color: white">Profile Info</div>
					            </button>
					            </a>
					            </a>
					        </div>
					       
					       
					        <div class="btn-group" role="group" id='btn'>
					        	<a href="" onclick="return family()">
					            <button id="fam" style="margin-top:0px;height:40px;width:250px;border-radius:10px !important;background-color:#5a378c;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0);" type="button" id="following" class="btn abc" href="#tab3" data-toggle="tab">
					                <div class="hidden-xs"><span style="color:#ffffff;">My Family Info</span></div>
					            </button>
					        </a>
					        </div>
					         <div class="btn-group" role="group" id='btn'>
					        	<a href="" onclick="return partner()">
					            <button id="par" style="margin-top:0px;height:40px;width:250px;border-radius:10px !important;background-color:#5a378c;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0);" type="button" id="favorites" class="btn abc" href="#tab2" data-toggle="tab">
					                <div class="hidden-xs"><span style="color:#ffffff;">Partner Prefrences</span></div>
					            </button>
					            </a>
					        </div>
					    </div>
					   </div>
				</div>
			</div>

  {{-- <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading"> --}}
        {{-- <h4 class="panel-title">
        	@if($user_data->id<>Session::get('user_id'))
        	@if($user_data->gender=='Female')
          <a data-toggle="collapse" href="#collapse1">Her answers to our questions</a>
          @else
          <a data-toggle="collapse" href="#collapse1">Him answers to our questions</a>
          @endif
          @else
          <a data-toggle="collapse" href="#collapse1">My answers to set questions</a>
          @endif
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        <table class="table table-responsive">
       <thead>
       	<tr>
       		<th>Question</th>
       		<th>Answer</th>
       	</tr>
       </thead>
       <tbody>
       	@if($user_data->id==Session::get('user_id'))
       		@foreach($question as $row)
       	<tr>
       		<td>{{ $row->question }}</td>
       		
       		@if(!empty($row->answer->user_answers) && $row->answer->user_id==Session::get('user_id'))
       		<td><a rel="{{ $row->question_id }}" href="javascript:;" class="update-answer">{{ $row->answer->user_answers }}<i class="glyphicon glyphicon-edit"></i></a>
       		</td>
       		@else
       		<td><a href="javascript:;" class="add-answer" rel="{{ $row->question_id }}"><i class="glyphicon glyphicon-edit"></i></a>
       		</td>
       		@endif
       	</tr>
       	 
       	@endforeach
       	@else
       		@if(count($answer))
       		@foreach($answer as $row)
       	<tr>
       		<td>{{ $row->question->question }}</td>
       		
       		<td>{{ $row->user_answers }}</td>
       	</tr>
       	@endforeach
       	@else
 			<tr>
       		<td>Don,t have any question</td>
       		
       		{{-- <td>{{ $row->user_answers }}</td> --}}
       {{-- 	</tr>      	
       	@endif
       		@endif
       </tbody>
       
      
        </table> --}}
       
      {{-- </div>
    </div>
  </div> --}}
</div> 



<div class="modal fadeInDown" id="question" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="false" >
												
    <div class="modal-dialog modal-md" style="margin-top: 100px;">
      <div class="modal-content">
      
        <div class="modal-header">
          <h3>Add Answer</h3>
        </div>
        <div class="modal-body">
         
                <form method="POST" action="{{ url('add-answer') }}">
            <div class="row">
               <div class="col-md-12">
                	{{ csrf_field() }}
                	<input type="text" id="answer" name="user_answers"  placeholder="Enter Answer">
                	<input type="hidden" name="question_id" id="question_id"  placeholder="Enter Answer">
                	
               
			</div>		
                        
            </div>

              
             
          </div>
       
        <div class="modal-footer">
          <div class="col-sm-12">
          	<button class="btn btn-success" type="submit" >Save</button>
            {{-- <h5><a href="#" class="btn-danger" data-dismiss="modal">Close</a></h5> --}}
          </div>
        </div>
          	 </form>
        
      </div>
    </div>
  </div>


  <div class="modal fadeInDown" id="answer_update" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="false" >
												
    <div class="modal-dialog modal-md" style="margin-top: 100px;">
      <div class="modal-content">
      
        <div class="modal-header">
          <h3>update Answer</h3>
        </div>
        <div class="modal-body">
         
                <form method="POST" action="{{ url('update-answer') }}">
            <div class="row">
               <div class="col-md-12">
                	{{ csrf_field() }}
                	<input type="text" id="answer" name="user_answers"  placeholder="Enter Answer">
                	<input type="hidden" name="question_id" id="update_question_id"  placeholder="Enter Answer">
                	
               
			</div>		
                        
            </div>

              
             
          </div>
       
        <div class="modal-footer">
          <div class="col-sm-12">
          	<button class="btn btn-success" type="submit" >Save</button>
            {{-- <h5><a href="#" class="btn-danger" data-dismiss="modal">Close</a></h5> --}}
          </div>
        </div>
          	 </form>
        
      </div>
    </div>
  </div>					
<div id="profile">
			
			<div class="row">
				<div class="col-md-12">
					<div class="look_head_area">
						@if($user_data->gender=='Female')
						<h5 class="text_head_look" style="font-size: 15px; padding-top: 17px;">About her</h5>
						@else
						<h5 class="text_head_look" style="font-size: 15px; padding-top: 17px;">About him</h5>
						@endif
					</div>
				</div>
			</div>

			
			
				
			<div class="row">
					<div class="col-md-12">
				<div class="well up" >
						<!-- <p class="abt">Asalamoalaikum, brother writing on her behalf.Asalamoalaikum, brother writing on her behalf.</p> -->
						<p class="abt">This information, collected by our servers can by no means be classified as Personal Information and shall be kept anonymous in all situations.This data shall not be linked with any other Personal Information you provide, unless you are logged in with a registered account as a member at the time of use. Thereupon, if you are using the website anonymously without a registered account or being logged on as a member, the data collected about your usage of the website shall not be linked to your Personal Information.</p>
						
					</div>
				</div>
			</div>	
			
			
			<div class="row">
				<div class="col-xs-12">
					<div class="contentbox box1" >
						<div class="box_header cl1">
							<div class="bkborder">
								<h3 class="box_header_heading patti"><img class="border" src="{{ $user_assets }}/icons/basic-info.png"> Basic Information</h3>
							</div>

						</div>

						<div class="box_body">
							<ul class="in_box_brdr">
								<li class="hover"><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/profilecreatedfor.png" alt="" width="20px" height="20px;"> Profile Created for</span> <a href="#" class="self">{{ $user_data->profile_created }}</a></li>
							</ul>

							<ul class="in_box_brdr">
								<li class="hover"><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/profilecreatedfor.png" alt="" width="20px" height="20px;"> Gardian Relation</span> <a href="#" class="self1">{{ $user_data->contact_person }}</a></li>
							</ul>
							{{-- <ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/guardian.png" alt="" width="20px" height="20px;"> Profile Created for </span> <span class="txt_fetched">{{ $user_data->profile_created }}</span></li>
							</ul> --}}
							{{-- @if($user_data->profile_created=='Self')
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/contactperson.png" alt="" width="20px" height="20px;"> Name </span> <span class="txt_fetched">{{ $user_data->firstname.' '.$user_data->lastname }}</span></li>
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/contactperson.png" alt="" width="20px" height="20px;"> Gardian Relation</span> <span class="txt_fetched">{{ $user_data->contact_person }}</span></li>
							</ul>
							@endif		 --}}
							@php
								$limit = 2;
							@endphp
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"> <img src="{{ $user_assets }}/public_profile_icon/mothertongue.png" alt="" width="20px" height="20px;"> Mother Tongue</span> 
									<span class="txt_fetched">{{ $user_data->language }}</span></li>
							</ul>
							{{-- @php
								$text = '';
								foreach($other_language as $row )
								{
									$text .= $row->loking_value . '<span style="color: red; font-size: 19px;"> | </span>';
								}
								$text = trim($text , '<span style="color: red; font-size: 19px;"> | </span>');
							@endphp --}}
							@if(count($other_language))
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/mothertongue.png" alt="" width="20px" height="20px;"> Other Language</span> 
									@php $data = '' @endphp
									<span class="txt_fetched">  
										@foreach($other_language as $k => $row )
											@if($k < $limit)

												{{ $row->loking_value }} <span style="color: red; font-size: 19px;"> | </span>
											@endif
										@endforeach
												
												
@foreach($other_language as $key => $row )
@php 
	$data .= '<div class="col-sm-4"><span class="fa fa-check check-color"></span>' . $row->loking_value . '
               
            
                <hr>
            </div>';
@endphp

@endforeach
											
	<div class="modal fadeInDown" id="myModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="false" >
												
    <div class="modal-dialog modal-md" style="margin-top: 100px;">
      <div class="modal-content">
      
        <div class="modal-header">
          <h3>Other Languages</h3>
        </div>
        <div class="modal-body">
         
            <div class="row">
               
                
					{!! $data !!}							
                        
            </div>

              
             
          </div>
       
        <div class="modal-footer">
          <div class="col-sm-12">
          	<button class="btn btn-danger" data-dismiss="modal">Close</button>
            {{-- <h5><a href="#" class="btn-danger" data-dismiss="modal">Close</a></h5> --}}
          </div>
        </div>
        
      </div>
    </div>
  </div>
  								
  									@if(count($other_language)>2)
										<a class="read-more" href="javascript:;" data-toggle="modal" data-target="#myModal">Read more</a>
										@endif
									</span></li>
							</ul>
							@endif			
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/caste.png" alt="" width="20px" height="20px;">Caste/Clan</span> <span class="txt_fetched">{{ $user_data->cast.' '.$user_data->clan }}</span></li>
							</ul>
							
							@if(count($hobbies))
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/hobbies.png" alt="" width="20px" height="20px;">Hobbies/Interest</span> 
									<span class="txt_fetched"> 
									@php $data=''; @endphp 
										@foreach($hobbies as $k => $row )
											@if($k < $limit)
												{{ $row->loking_value }} <span style="color: red; font-size: 19px;"> | </span>
											@endif
										@endforeach
		@foreach($hobbies as $row )								
	@php 
	$data .= '<div class="col-sm-4"><span class="fa fa-check check-color"></span>'.$row->loking_value.'<hr></div>';
    @endphp
@endforeach

											
										<div class="modal fadeInDown" id="myModal1" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="false" >
												
    <div class="modal-dialog modal-md" style="margin-top: 100px;">
      <div class="modal-content">
      
        <div class="modal-header">
          <h3>Hobbies</h3>
        </div>
        <div class="modal-body">
         
            <div class="row">
               
                
					{!! $data !!}							
                        
            </div>

              
             
          </div>
       
        <div class="modal-footer">
          <div class="col-sm-12">
           <button class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  


  							@if(count($hobbies)>2)
										<a href="javascript:;" data-toggle="modal" data-target="#myModal1" style="color:#4ccee8;">Read more</a>
										@endif
									</span></li>
							</ul>
							@endif
			
								

  <div class="col-8">



                                </div>
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/merital-status.png" alt="" width="20px" height="20px;"> Marital Status </span> <span class="txt_fetched">{{ $user_data->martial_status }}</span></li>
							</ul>
			
						</div>
					</div>
				</div>
			</div>

			<div class="row">	
				<div class="col-xs-12">
					<div class="contentbox box1" >
						<div class="box_header cl2" >
							<div class="bkborder">
								<h3 class="box_header_heading patti"> <img class="border" src="{{ $user_assets }}/icons/religion.png"> Religious Interest</h3>
							</div>
						</div>
						<div class="box_body">
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/allegiance-to-islam.png" alt="" width="20px" height="20px;"> Allegiance to Islamic Orgn</span> <span class="txt_fetched">{{ $user_data->sect_are }}</span></li>
							</ul>
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/religiousness.png" alt="" width="20px" height="20px;"> Religiousness  </span> <span class="txt_fetched">{{ $user_data->religiousness }}</span></li>
							</ul>
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/performnamaz.png" alt="" width="20px" height="20px;"> Perform Namaaz</span> <span class="txt_fetched">{{ $user_data->pray }}</span></li>
							</ul>
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/read-quran.png" alt="" width="20px" height="20px;"> Read Quran </span> <span class="txt_fetched">{{ $user_data->read_quran }}</span></li>
							</ul>
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/attend-religious.png" alt="" width="20px" height="20px;"> Attend religious services</span> <span class="txt_fetched">{{ $user_data->attend_religious_service }} </span></li>
							</ul>
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/ethnic-origin.png" alt="" width="20px" height="20px;"> Ethnic Origin </span> <span class="txt_fetched">{{ $user_data->ethnic_type }} </span></li>
							</ul>						
						</div>
					</div>		
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12">
					<div class="contentbox box1" >
						<div class="box_header cl3" >
							<div class="bkborder">
								<h3 class="box_header_heading APPEARANCE patti" > <img class="border" src="{{ $user_assets }}/icons/male-appearace.png"> Appearance</h3>
							</div>	
						</div>
						<div class="box_body">
							{{-- <ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/beard.png" alt="" width="20px" height="20px;"> Allegiance to Islamic Orgn</span> <span class="txt_fetched">sadas</span></li>
							</ul> --}}
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/malecomplexion.png" alt="" width="20px" height="20px;"> Complexion  </span> <span class="txt_fetched">{{ $user_data->skin_color }}</span></li>
							</ul>
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/disability.png" alt="" width="20px" height="20px;"> Disabilty</span> <span class="txt_fetched">{{ $user_data->disability }}</span></li>
							</ul>
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/physicalstatus.png" alt="" width="20px" height="20px;"> Physical Status </span> <span class="txt_fetched">{{ $user_data->physical_status }}</span></li>
							</ul>
              @if($user_data->gender=='Male')
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/beard.png" alt="" width="20px" height="20px;"> Beard</span> <span class="txt_fetched">{{ $user_data->bread }}</span></li>
							</ul>
              @endif
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/heightwidth.png" alt="" width="20px" height="20px;"> Height & Weight</span> <span class="txt_fetched">{{ $user_data->height }} <span style="color: red; font-size: 19px;">|</span> {{$user_data->weight }} </span></li>
							</ul>		
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">	
				<div class="col-xs-12">
					<div class="contentbox box1" >
						<div class="box_header cl4" >
							<div class="bkborder">
								<h3 class="box_header_heading patti" ><img class="border" src="{{ $user_assets }}/icons/education.png"> Education and Occupation</h3>
							</div>	
						</div>
						<div class="box_body">
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/education.png" alt="" width="20px" height="20px;"> Education</span> <span class="txt_fetched">{{ $user_data->qualification }}</span></li>
							</ul>
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/educationdetails.png" alt="" width="20px" height="20px;"> Education Details  </span> <span class="txt_fetched">{{ $user_data->edu_detail }}</span></li>
							</ul>
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/occupation.png" alt="" width="20px" height="20px;"> Occupation</span> <span class="txt_fetched">{{ $user_data->job }}</span></li>
							</ul>
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/occupationdetails.png" alt="" width="20px" height="20px;"> Occupation Detail </span> <span class="txt_fetched">{{ $user_data->occupation_detail }}</span></li>
							</ul>
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/annualincome.png" alt="" width="20px" height="20px;"> Annual Income</span> <span class="txt_fetched">{{ $user_data->a_income }}</span></li>
							</ul>
									
						</div>
					</div>		
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12">
					<div class="contentbox box1" >
						<div class="box_header cl5" >
							<div class="bkborder">
								<h3 class="box_header_heading patti" > <img class="border" src="{{ $user_assets }}/icons/contact-details.png"> Contact Details</h3>
							</div>	
						</div>
						<div class="box_body">
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/country.png" alt="" width="20px" height="20px;"> Present Country</span> <span class="txt_fetched">@if(!empty($presnt)) {{ $presnt->country_name }} @endif </span></li>
							</ul>
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/country.png" alt="" width="20px" height="20px;"> Native Country  </span> <span class="txt_fetched">@if(!empty($native_country)) {{ $native_country->country_name }} @endif</span></li>
							</ul>
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/nativestate.png" alt="" width="20px" height="20px;"> Native State</span> <span class="txt_fetched">@if(!empty($native_state)) {{ $native_state->state_name }} @endif </span></li>
							</ul>
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/city.png" alt="" width="20px" height="20px;"> Native City </span> <span class="txt_fetched">@if(!empty($native_city)) {{ $native_city->city_name }} @endif</span></li>
							</ul>
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/timetocall.png" alt="" width="20px" height="20px;"> Convenient time to call</span> <span class="txt_fetched">{{ $user_data->convenient_time }}</span></li>
							</ul>
							{{-- <ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/contactperson.png" alt="" width="20px" height="20px;"> Contact person & Relationship</span> <span class="txt_fetched">{{ $user_data->contact_person }}</span></li>
							</ul>		 --}}
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">	
				<div class="col-xs-12">
					<div class="contentbox box1" style="border-bottom:none;">
						<div class="box_header cl6" >
							<div class="bkborder">
								<h3 class="box_header_heading patti"> <img class="border" src="{{ $user_assets }}/icons/general-attributes.png"> General Attributes</h3>
							</div>	
						</div>
						<div class="box_body">
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/bloodgroup.png" alt="" width="20px" height="20px;"> Blood Group</span> <span class="txt_fetched">{{ $user_data->blood_group }} </span></li>
							</ul>
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"> <img src="{{ $user_assets }}/public_profile_icon/bodytype.png" alt="" width="20px" height="20px;"> Body type  </span> <span class="txt_fetched">{{ $user_data->body_type }}</span></li>
							</ul>
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/dietac.png" alt="" width="20px" height="20px;"> Diet</span> <span class="txt_fetched">{{ $user_data->diet }}</span></li>
							</ul>
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/smoking.png" alt="" width="20px" height="20px;"> Smoking </span> <span class="txt_fetched">{{ $user_data->smoking }}</span></li>
							</ul>
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/thelisemia.png" alt="" width="20px" height="20px;"> Patient of thelisimia</span> <span class="txt_fetched">{{ $user_data->thelisimia }}</span></li>
							</ul>
						</div>
					</div>		
				</div>
			</div>
			</div>
			<div class="row" id="family" style="display: none;">
				<div class="col-xs-12">
					<div class="contentbox box1" style="border-bottom: none;" >
						<div class="box_header cl7">
							<div class="bkborder">
								<h3 class="box_header_heading patti"><img class="border" src="{{ $user_assets }}/icons/family.png"> Family Details</h3>
							</div>	
						</div>
						<div class="box_body">
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/familytype.png" alt="" width="20px" height="20px;"> Family Type</span> <span class="txt_fetched">{{ $user_data->family_type }}</span></li>
							</ul>
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/financialstatus.png" alt="" width="20px" height="20px;"> Finacial Status  </span> <span class="txt_fetched">{{ $user_data->finacial_status }}</span></li>
							</ul>
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/assets.png" alt="" width="20px" height="20px;"> Assets</span> <span class="txt_fetched">{{ $user_data->assets }}</span></li>
							</ul>
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/fatherdetails.png" alt="" width="20px" height="20px;"> Father's Details </span> <span class="txt_fetched">{{ $user_data->father_detail }}</span></li>
							</ul>

							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/fatherdetails.png" alt="" width="20px" height="20px;"> Father's occupation </span> <span class="txt_fetched">{{ $user_data->father_occupation }}</span></li>
							</ul>
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/motherdetails.png" alt="" width="20px" height="20px;"> Mother's Details</span> <span class="txt_fetched">{{ $user_data->mother_detail }}</span></li>
							</ul>
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/motherdetails.png" alt="" width="20px" height="20px;"> Mother's occupation</span> <span class="txt_fetched">{{ $user_data->mother_occupation }}</span></li>
							</ul>
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/brotherdetails.png" alt="" width="20px" height="20px;"> Brothers Details</span> <span class="txt_fetched">{{ $user_data->elder_brother }}</span></li>
							</ul>
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/brotherdetails.png" alt="" width="20px" height="20px;"> Brothers married</span> <span class="txt_fetched">{{ $user_data->brother_married }}</span></li>
							</ul>
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/brotherdetails.png" alt="" width="20px" height="20px;"> Brothers unmarried</span> <span class="txt_fetched">{{ $user_data->brother_unmarried }}</span></li>
							</ul>
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/sisterdetails.png" alt="" width="20px" height="20px;"> Sisters Details</span> <span class="txt_fetched">{{ $user_data->elder_sister }}</span></li>
							</ul>

							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/sisterdetails.png" alt="" width="20px" height="20px;"> Sisters married</span> <span class="txt_fetched">{{ $user_data->sister_married }}</span></li>
							</ul>
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/sisterdetails.png" alt="" width="20px" height="20px;"> Sisters unmarried</span> <span class="txt_fetched">{{ $user_data->sister_unmarried }}</span></li>
							</ul>

							<h2>Family Information</h2>
							sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text 
							sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text 
							sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text 
							text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text 	
							sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text 
							text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text 	sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text 
							text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text 	
						</div>
					</div>
				</div>
			</div>
			<div style="display: none;" id="partner">
			<div class="row">
				<div class="col-md-12">
					<div style="background-color: #4ccee8">
						<h5 class="text_head_look" style="font-size: 15px; padding-top: 17px;">Looking for</h5>
					</div>
				</div>
			</div>

			
			
				
			<div class="row">
					<div class="col-md-12">
				<div class="well" >
						<p class="abt">Asalamoalaikum, brother writing on her behalf.Asalamoalaikum, brother writing on her behalf.</p>
						<p class="abt">Asalamoalaikum, brother writing on her behalf.Asalamoalaikum, brother writing on her behalf.Asalamoalaikum, brother writing on her behalf.Asalamoalaikum, brother writing on her behalf.Asalamoalaikum, brother writing on her behalf.Asalamoalaikum, brother writing on her behalf.Asalamoalaikum, brother writing on her behalf.Asalamoalaikum, brother writing on her behalf. {{ $user_data->description }}</p>
						
					</div>
				</div>
			</div>	
			
			{{-- <div class="row">
				<div class="col-md-12">
					<div class="look_head_area">
						<h3 class="text_head_look"> Partner Prefrences</h3>
					</div>
				</div>
			</div><br> --}}

			<div class="row">
				<div class="col-xs-12">
					<div class="contentbox box1" >
						<div class="box_header cl7">
							<div class="bkborder">
								<h3 class="box_header_heading patti"><img class="border" src="{{ $user_assets }}/icons/basic-info1.png"> Basic Preferences</h3>
							</div>	
						</div>
						<div class="box_body">
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/agepreferences.png" alt="" width="20px" height="20px;"> Age Preference</span> <span class="txt_fetched">{{ $user_data->loking_age_from}} <span style="color: red; font-size: 19px;"> | </span> {{ $user_data->loking_age_to }}</span></li>
							</ul>
							

							@if(count($loking_martial))
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/merital-status.png" alt="" width="20px" height="20px;">looking martial status</span> 
									<span class="txt_fetched"> 
									@php $data=''; @endphp 
										@foreach($loking_martial as $k => $row )
											@if($k < $limit)
												{{ $row->loking_value }} <span style="color: red; font-size: 19px;"> | </span>
											
												@endif
										@endforeach
		@foreach($loking_martial as $row)										
	@php 
	$data .= '<div class="col-sm-4"><span class="fa fa-check check-color"></span>' . $row->loking_value . '<hr></div>';
@endphp
@endforeach
											
										<div class="modal fadeInDown" id="looking" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="false" >
												
    <div class="modal-dialog modal-md" style="margin-top: 100px;">
      <div class="modal-content">
      
        <div class="modal-header">
          <h3>looking martial status</h3>
        </div>
        <div class="modal-body">
         
            <div class="row">
               
                
					{!! $data !!}							
                        
            </div>

              
             
          </div>
       
        <div class="modal-footer">
          <div class="col-sm-12">
            <button class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
  </div>							@if(count($loking_martial)>2)
										<a href="javascript:;" data-toggle="modal" data-target="#looking" style="color:#4ccee8;">Read more</a>
										@endif
									</span></li>
							</ul>
							@endif


							@if(count($loking_eating))
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/eatinghabits.png" alt="" width="20px" height="20px;">Eating Habits</span> 
									<span class="txt_fetched"> 
									@php $data=''; @endphp 
										@foreach($loking_eating as $k => $row )
											@if($k < $limit)
												{{ $row->loking_value }} <span style="color: red; font-size: 19px;"> | </span>
											
												@endif
										@endforeach
	@foreach($loking_eating as $row )										
	@php 
	$data .= '<div class="col-sm-4"><span class="fa fa-check check-color"></span>' . $row->loking_value . '<hr></div>';
@endphp
@endforeach
											
										<div class="modal fadeInDown" id="myModale" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="false" >
												
    <div class="modal-dialog modal-md" style="margin-top: 100px;">
      <div class="modal-content">
      
        <div class="modal-header">
          <h3>Eating</h3>
        </div>
        <div class="modal-body">
         
            <div class="row">
               
                
					{!! $data !!}							
                        
            </div>

              
             
          </div>
       
        <div class="modal-footer">
          <div class="col-sm-12">
            <button class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
  </div>							@if(count($loking_eating)>2)
										<a href="javascript:;" data-toggle="modal" data-target="#myModale" style="color:#4ccee8;">Read more</a>
										@endif
									</span></li>
							</ul>
							@endif




							
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/mothertongue.png" alt="" width="20px" height="20px;"> Mother Tongue</span> <span class="txt_fetched">{{ $user_data->loking_language }}</span></li>
							</ul>
						


							@if(count($loking_other_language))
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/mothertongue.png" alt="" width="20px" height="20px;">Looking for other languages</span> 
									<span class="txt_fetched"> 
									@php $data=''; @endphp 
										@foreach($loking_other_language as $k => $row )
											@if($k < $limit)
												{{ $row->loking_value }} <span style="color: red; font-size: 19px;"> | </span>
											
												@endif
										@endforeach
	@foreach($loking_other_language as $row )					
	@php 
	$data .= '<div class="col-sm-4"><span class="fa fa-check check-color"></span> ' . $row->loking_value . '<hr></div>';
@endphp
@endforeach
											
										<div class="modal fadeInDown" id="myModallo" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="false" >
												
    <div class="modal-dialog modal-md" style="margin-top: 100px;">
      <div class="modal-content">
      
        <div class="modal-header">
          <h3>Looking for other languages</h3>
        </div>
        <div class="modal-body">
         
            <div class="row">
               
                
					{!! $data !!}							
                        
            </div>

              
             
          </div>
       
        <div class="modal-footer">
          <div class="col-sm-12">
            <button class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
  </div>								
  									@if(count($loking_other_language)>2)
										<a href="javascript:;" data-toggle="modal" data-target="#myModallo" style="color:#0ed526;">Read more</a>
										@endif 
									</span></li>
							</ul>
							@endif
												
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12">
					<div class="contentbox box1" >
						<div class="box_header cl8">
							<div class="bkborder">
								<h3 class="box_header_heading patti"><img class="border" src="{{ $user_assets }}/icons/female-appearance.png"> Apearance</h3>
							</div>	
						</div>
						<div class="box_body">
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/heightpreferences.png" alt="" width="20px" height="20px;"> Height Preference</span> <span class="txt_fetched">{{ $user_data->loking_height_from}} <span style="color: red; font-size: 19px;"> | </span> {{ $user_data->loking_height_to }}</span></li>
							</ul>

							@if(count($hijab))
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/hijab.png" alt="" width="20px" height="20px;">Hijab</span> 
									<span class="txt_fetched"> 
									@php $data=''; @endphp 
										@foreach($hijab as $k => $row )
											@if($k < $limit)
												{{ $row->loking_value }} <span style="color: red; font-size: 19px;"> | </span>
											@endif
										@endforeach
												
		@foreach($hijab as $row )										
	@php 
	$data .= '<div class="col-sm-4"><span class="fa fa-check check-color"></span> ' . $row->loking_value . '<hr></div>';
@endphp
@endforeach
											
										<div class="modal fadeInDown" id="myModaloh" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="false" >
												
    <div class="modal-dialog modal-md" style="margin-top: 100px;">
      <div class="modal-content">
      
        <div class="modal-header">
          <h3>Hijab</h3>
        </div>
        <div class="modal-body">
         
            <div class="row">
               
                
					{!! $data !!}							
                        
            </div>

              
             
          </div>
       
        <div class="modal-footer">
          <div class="col-sm-12">
            <button class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  										@if(count($hijab)>2)
										<a href="javascript:;" data-toggle="modal" data-target="#myModaloh" style="color:#0ed526;">Read more</a>
										@endif
									</span></li>
							</ul>
							@endif
							
							
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/physicalstatus.png" alt="" width="20px" height="20px;"> Physical Status</span> <span class="txt_fetched">{{ $user_data->loking_physcial_status }}</span></li>
							</ul>		
						</div>
					</div>		
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12">
					<div class="contentbox box1" >
						<div class="box_header cl7">
							<div class="bkborder">
								<h3 class="box_header_heading patti"><img class="border" src="{{ $user_assets }}/icons/professional-preferences.png"> Professional Preferences</h3>
							</div>	
						</div>
						<div class="box_body">
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/education.png" alt="" width="20px" height="20px;"> Education</span> <span class="txt_fetched">{{ $user_data->loking_education }}</span></li>
							</ul>
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/occupation.png" alt="" width="20px" height="20px;"> Occupation </span> <span class="txt_fetched">{{ $user_data->loking_job }}</span></li>
							</ul>
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/employed-in.png" alt="" width="20px" height="20px;"> Employed in</span> <span class="txt_fetched">{{ $user_data->employed_in }}</span></li>
							</ul>
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/annualincome.png" alt="" width="20px" height="20px;"> Annual Income</span> <span class="txt_fetched">{{ $user_data->loking_a_income }}</span></li>
							</ul>		
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">	
				<div class="col-xs-12">
					<div class="contentbox box1" >
						<div class="box_header cl8">
							<div class="bkborder">
								<h3 class="box_header_heading patti"><img class="border" src="{{ $user_assets }}/icons/1st-location.png"> 1st Location Preferences</h3>
							</div>
						</div>
						<div class="box_body">
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/country.png" alt="" width="20px" height="20px;">Living Country</span> <span class="txt_fetched">@if(!empty($living_country)) {{ $living_country->country_name }} @endif</span></li>
							</ul>


							@if(count($living_state))
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/country.png" alt="" width="20px" height="20px;">Living state</span> 
									<span class="txt_fetched"> 
									@php $data=''; @endphp 
										@foreach($living_state as $k => $row )
											@if($k < $limit)
												{{ $row->state_name }} <span style="color: red; font-size: 19px;"> | </span>
											@endif
										@endforeach
												
		@foreach($living_state as $row )										
	@php 
	$data .= '<div class="col-sm-4"><span class="fa fa-check check-color"></span> ' . $row->state_name . '<hr></div>';
@endphp
@endforeach
											
										<div class="modal fadeInDown" id="myModalls" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="false" >
												
    <div class="modal-dialog modal-md" style="margin-top: 100px;">
      <div class="modal-content">
      
        <div class="modal-header">
          <h3>Living state</h3>
        </div>
        <div class="modal-body">
         
            <div class="row">
               
                
					{!! $data !!}							
                        
            </div>

              
             
          </div>
       
        <div class="modal-footer">
          <div class="col-sm-12">
           <button class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
  </div>							@if(count($living_state)>2)
										<a href="javascript:;" data-toggle="modal" data-target="#myModalls" style="color:#0ed526;">Read more</a>
										@endif
									</span></li>
							</ul>
							@endif
							
							
							@if(count($living_cities))
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/country.png" alt="" width="20px" height="20px;">Living cities</span> 
									<span class="txt_fetched"> 
									@php $data=''; @endphp 
										@foreach($living_cities as $k => $row )
											@if($k < $limit)
												{{ $row->city_name }} <span style="color: red; font-size: 19px;"> | </span>
											@endif
										@endforeach
												
		@foreach($living_cities as $row )										
	@php 
	$data .= '<div class="col-sm-4"><span class="fa fa-check check-color"></span> ' . $row->city_name . '<hr></div>';
@endphp
	@endforeach										
										<div class="modal fadeInDown" id="myModallc" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="false" >
												
    <div class="modal-dialog modal-md" style="margin-top: 100px;">
      <div class="modal-content">
      
        <div class="modal-header">
          <h3>Living cities</h3>
        </div>
        <div class="modal-body">
         
            <div class="row">
               
                
					{!! $data !!}							
                        
            </div>

              
             
          </div>
       
        <div class="modal-footer">
          <div class="col-sm-12">
            <button class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
  </div>						@if(count($living_cities)>2)
										<a href="javascript:;" data-toggle="modal" data-target="#myModallc" style="color:#0ed526;">Read more</a>
										@endif
									</span></li>
							</ul>
							@endif
										
							
									
						</div>
					</div>		
				</div>
			</div>

			
			<div class="row">
				<div class="col-xs-12">
					<div class="contentbox box1" style="border-bottom: none;">
						<div class="box_header cl7">
							<div class="bkborder">
								<h3 class="box_header_heading patti"><img class="border" src="{{ $user_assets }}/icons/my-preferences.png"> My Preferences</h3>
							</div>	
						</div>
						<div class="box_body">



							@if(count($religious_history))
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/religious-history.png" alt="" width="20px" height="20px;">Religious history</span> 
									<span class="txt_fetched"> 
									@php $data=''; @endphp 
										@foreach($religious_history as $k => $row )
											@if($k < $limit)
												{{ $row->loking_value }} <span style="color: red; font-size: 19px;"> | </span>
											@endif
										@endforeach
												
		@foreach($religious_history as $row )										
	@php 
	$data .= '<div class="col-sm-4"><span class="fa fa-check check-color"></span> ' . $row->loking_value . '<hr></div>';
@endphp
@endforeach
											
										<div class="modal fadeInDown" id="myModalrh" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="false" >
												
    <div class="modal-dialog modal-md" style="margin-top: 100px;">
      <div class="modal-content">
      
        <div class="modal-header">
          <h3>Religious history</h3>
        </div>
        <div class="modal-body">
         
            <div class="row">
               
                
					{!! $data !!}							
                        
            </div>

              
             
          </div>
       
        <div class="modal-footer">
          <div class="col-sm-12">
             <button class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
  </div>							
  									@if(count($religious_history)>2)
										<a href="javascript:;" data-toggle="modal" data-target="#myModalrh" style="color:#0ed526;">Read more</a>
										@endif
									</span></li>
							</ul>
							@endif


							


							@if(count($living_with))
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/livingwithinlaws.png" alt="" width="20px" height="20px;">     living with</span> 
									<span class="txt_fetched"> 
									@php $data=''; @endphp 
										@foreach($living_with as $k => $row )
											@if($k < $limit)
												{{ $row->loking_value }} <span style="color: red; font-size: 19px;"> | </span>
											@endif
										@endforeach
		@foreach($living_with as $row )										
	@php 
	$data .= '<div class="col-sm-4"><span class="fa fa-check check-color"></span> ' . $row->loking_value . '<hr></div>';
@endphp
@endforeach
											
										<div class="modal fadeInDown" id="myModallw" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="false" >
												
    <div class="modal-dialog modal-md" style="margin-top: 100px;">
      <div class="modal-content">
      
        <div class="modal-header">
          <h3>living with</h3>
        </div>
        <div class="modal-body">
         
            <div class="row">
               
                
					{!! $data !!}							
                        
            </div>

              
             
          </div>
       
        <div class="modal-footer">
          <div class="col-sm-12">
            <button class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  									@if(count($living_with)>2)
										<a href="javascript:;" data-toggle="modal" data-target="#myModallw" style="color:#0ed526;">Read more</a>
										@endif
									</span></li>
							</ul>
							@endif

							
							@if(count($sects))
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/sect.png" alt="" width="20px" height="20px;"> Sect are you looking</span> 
									<span class="txt_fetched"> 
									@php $data=''; @endphp 
										@foreach($sects as $k => $row )
											@if($k < $limit)
												{{ $row->loking_value }} <span style="color: red; font-size: 19px;"> | </span>
											
												@endif
										@endforeach
		@foreach($sects as  $row )										
	@php 
	$data .= '<div class="col-sm-4"><span class="fa fa-check check-color"></span> ' . $row->loking_value . '<hr></div>';
@endphp
		@endforeach									
										<div class="modal fadeInDown" id="myModalsr" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="false" >
												
    <div class="modal-dialog modal-md" style="margin-top: 100px;">
      <div class="modal-content">
      
        <div class="modal-header">
          <h3>Sect are you looking</h3>
        </div>
        <div class="modal-body">
         
            <div class="row">
               
                
					{!! $data !!}							
                        
            </div>

              
             
          </div>
       
        <div class="modal-footer">
          <div class="col-sm-12">
            <button class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  								@if(count($sects)>2)
										<a href="javascript:;" data-toggle="modal" data-target="#myModalsr" style="color:#0ed526;">Read more</a>
										@endif
									</span></li>
							</ul>
							@endif

							

							@if(count($pray))
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/pray.png" alt="" width="20px" height="20px;"> pray</span> 
									<span class="txt_fetched"> 
									@php $data=''; @endphp 
										@foreach($pray as $k => $row )
											@if($k < $limit)
												{{ $row->loking_value }} <span style="color: red; font-size: 19px;"> | </span>
											@endif
										@endforeach

	@foreach($pray as $row )											
												
	@php 
	$data .= '<div class="col-sm-6"><span class="fa fa-check check-color"></span> ' . $row->loking_value . '<hr></div>';
@endphp
@endforeach
											
										<div class="modal fadeInDown" id="myModalpr" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="false" >
												
    <div class="modal-dialog modal-lg" style="margin-top: 100px;">
      <div class="modal-content">
      
        <div class="modal-header">
          <h3>pray</h3>
        </div>
        <div class="modal-body">
         
            <div class="row">
               
                
					{!! $data !!}							
                        
            </div>

              
             
          </div>
       
        <div class="modal-footer">
          <div class="col-sm-12">
           <button class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  									@if(count($pray)>2)
										<a href="javascript:;" data-toggle="modal" data-target="#myModalpr" style="color:#0ed526;">Read more</a>
										@endif
									</span></li>
							</ul>
							@endif
								
							
							@if(count($has_children))
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/sect.png" alt="" width="20px" height="20px;"> Has children</span> 
									<span class="txt_fetched"> 
									@php $data=''; @endphp 
										@foreach($has_children as $k => $row )
											@if($k < $limit)
												{{ $row->loking_value }} <span style="color: red; font-size: 19px;"> | </span>
											@endif
										@endforeach
												
		@foreach($has_children as $row )										
	@php 
	$data .= '<div class="col-sm-4"><span class="fa fa-check check-color"></span> ' . $row->loking_value . '<hr></div>';
@endphp
											
										@endforeach
										<div class="modal fadeInDown" id="myModalhc" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="false" >
												
    <div class="modal-dialog modal-md" style="margin-top: 100px;">
      <div class="modal-content">
      
        <div class="modal-header">
          <h3>Has children</h3>
        </div>
        <div class="modal-body">
         
            <div class="row">
               
                
					{!! $data !!}							
                        
            </div>

              
             
          </div>
       
        <div class="modal-footer">
          <div class="col-sm-12">
            <button class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  									@if(count($has_children)>2)
										<a href="javascript:;" data-toggle="modal" data-target="#myModalhc" style="color:#0ed526;">Read more</a>
										@endif
									</span></li>
							</ul>
							@endif
								
							

							@if(count($loking_body_type))
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/bodytype.png" alt="" width="20px" height="20px;"> Looking for body type</span> 
									<span class="txt_fetched"> 
									@php $data=''; @endphp 
										@foreach($loking_body_type as $k => $row )
											@if($k < $limit)
												{{ $row->loking_value }} <span style="color: red; font-size: 19px;"> | </span>
											@endif
										@endforeach
												
	@foreach($loking_body_type as $k => $row )											
	@php 
	$data .= '<div class="col-sm-4"><span class="fa fa-check check-color"></span> ' . $row->loking_value . '<hr></div>';
@endphp
											
										@endforeach
										<div class="modal fadeInDown" id="myModalbt" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="false" >
												
    <div class="modal-dialog modal-md" style="margin-top: 100px;">
      <div class="modal-content">
      
        <div class="modal-header">
          <h3>Looking for body type</h3>
        </div>
        <div class="modal-body">
         
            <div class="row">
               
                
					{!! $data !!}							
                        
            </div>

              
             
          </div>
       
        <div class="modal-footer">
          <div class="col-sm-12">
           <button class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  									@if(count($loking_body_type)>2)
										<a href="javascript:;" data-toggle="modal" data-target="#myModalbt" style="color:#0ed526;">Read more</a>
										@endif
									</span></li>
							</ul>
							@endif

							

								
							@if(count($africa))
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/bodytype.png" alt="" width="20px" height="20px;"> Africa</span> 
									<span class="txt_fetched"> 
									@php $data=''; @endphp 
										@foreach($africa as $k => $row )
											@if($k < $limit)
												{{ $row->loking_value }} <span style="color: red; font-size: 19px;"> | </span>
											@endif
										@endforeach
		@foreach($africa as $row )										
												
	@php 
	$data .= '<div class="col-sm-4"><span class="fa fa-check check-color"></span> ' . $row->loking_value . '<hr></div>';
@endphp
										
										@endforeach
										<div class="modal fadeInDown" id="myModalaf" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="false" >
												
    <div class="modal-dialog modal-md" style="margin-top: 100px;">
      <div class="modal-content">
      
        <div class="modal-header">
          <h3>Africa</h3>
        </div>
        <div class="modal-body">
         
            <div class="row">
               
                
					{!! $data !!}							
                        
            </div>

              
             
          </div>
       
        <div class="modal-footer">
          <div class="col-sm-12">
            <button class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  									@if(count($africa)>2)
										<a href="javascript:;" data-toggle="modal" data-target="#myModalaf" style="color:#0ed526;">Read more</a>
										@endif
									</span></li>
							</ul>
							@endif
								
							
							
							@if(count($antarctica))
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/bodytype.png" alt="" width="20px" height="20px;"> Antarctica</span> 
									<span class="txt_fetched"> 
									@php $data=''; @endphp 
										@foreach($antarctica as $k => $row )
											@if($k < $limit)
												{{ $row->loking_value }} <span style="color: red; font-size: 19px;"> | </span>
											
												@endif
										@endforeach
		@foreach($antarctica as $row )										
	@php 
	$data .= '<div class="col-sm-4"><span class="fa fa-check check-color"></span> ' . $row->loking_value . '<hr></div>';
@endphp
											
										@endforeach
										<div class="modal fadeInDown" id="myModalan" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="false" >
												
    <div class="modal-dialog modal-md" style="margin-top: 100px;">
      <div class="modal-content">
      
        <div class="modal-header">
          <h3>Antarctica</h3>
        </div>
        <div class="modal-body">
         
            <div class="row">
               
                
					{!! $data !!}							
                        
            </div>

              
             
          </div>
       
        <div class="modal-footer">
          <div class="col-sm-12">
           <button class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  									@if(count($antarctica)>2)
										<a href="javascript:;" data-toggle="modal" data-target="#myModalan" style="color:#0ed526;">Read more</a>
										@endif
									</span></li>
							</ul>
							@endif
								
							

							
								@if(count($asia))
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/bodytype.png" alt="" width="20px" height="20px;"> Asia</span> 
									<span class="txt_fetched"> 
									@php $data=''; @endphp 
										@foreach($asia as $k => $row )
											@if($k < $limit)
												{{ $row->loking_value }} <span style="color: red; font-size: 19px;"> | </span>
											@endif
										@endforeach
												
	@foreach($asia as  $row )											
	@php 
	$data .= '<div class="col-sm-4"><span class="fa fa-check check-color"></span> ' . $row->loking_value . '<hr></div>';
@endphp
											
										@endforeach
										<div class="modal fadeInDown" id="myModalasia" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="false" >
												
    <div class="modal-dialog modal-md" style="margin-top: 100px;">
      <div class="modal-content">
      
        <div class="modal-header">
          <h3>Asia</h3>
        </div>
        <div class="modal-body">
         
            <div class="row">
               
                
					{!! $data !!}							
                        
            </div>

              
             
          </div>
       
        <div class="modal-footer">
          <div class="col-sm-12">
           <button class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  									@if(count($asia)>2)
										<a href="javascript:;" data-toggle="modal" data-target="#myModalasia" style="color:#0ed526;">Read more</a>
										@endif
									</span></li>
							</ul>
							@endif


							
							


								@if(count($europe))
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/bodytype.png" alt="" width="20px" height="20px;"> Europe</span> 
									<span class="txt_fetched"> 
									@php $data=''; @endphp 
										@foreach($europe as $k => $row )
											@if($k < $limit)
												{{ $row->loking_value }} <span style="color: red; font-size: 19px;"> | </span>
											@endif
										@endforeach
												
		@foreach($europe as $row )										
	@php 
	$data .= '<div class="col-sm-4"><span class="fa fa-check check-color"></span> ' . $row->loking_value . '<hr></div>';
@endphp
										@endforeach	
										<div class="modal fadeInDown" id="myModaleurope" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="false" >
												
    <div class="modal-dialog modal-md" style="margin-top: 100px;">
      <div class="modal-content">
      
        <div class="modal-header">
          <h3>Europe</h3>
        </div>
        <div class="modal-body">
         
            <div class="row">
               
                
					{!! $data !!}							
                        
            </div>

              
             
          </div>
       
        <div class="modal-footer">
          <div class="col-sm-12">
           <button class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  									@if(count($europe)>2)
										<a href="javascript:;" data-toggle="modal" data-target="#myModaleurope" style="color:#0ed526;">Read more</a>
										@endif
									</span></li>
							</ul>
							@endif


							
							
							



							@if(count($north_america))
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/pray.png" alt="" width="20px" height="20px;"> North america</span> 
									<span class="txt_fetched"> 
									@php $data=''; @endphp 
										@foreach($north_america as $k => $row )
											@if($k < $limit)
												{{ $row->loking_value }} <span style="color: red; font-size: 19px;"> | </span>
											
												@endif
										@endforeach
		@foreach($north_america as $row )										
	@php 
	$data .= '<div class="col-sm-4"><span class="fa fa-check check-color"></span> ' . $row->loking_value . '<hr></div>';
@endphp
										@endforeach	
										<div class="modal fadeInDown" id="myModalnorth" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="false" >
												
    <div class="modal-dialog modal-md" style="margin-top: 100px;">
      <div class="modal-content">
      
        <div class="modal-header">
          <h3>North america</h3>
        </div>
        <div class="modal-body">
         
            <div class="row">
               
                
					{!! $data !!}							
                        
            </div>

              
             
          </div>
       
        <div class="modal-footer">
          <div class="col-sm-12">
           <button class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  									@if(count($north_america)>2)
										<a href="javascript:;" data-toggle="modal" data-target="#myModalnorth" style="color:#0ed526;">Read more</a>
										@endif
									</span></li>
							</ul>
							@endif
								



							@if(count($australasia))
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/pray.png" alt="" width="20px" height="20px;"> Australasia</span> 
									<span class="txt_fetched"> 
									@php $data=''; @endphp 
										@foreach($australasia as $k => $row )
											@if($k < $limit)
												{{ $row->loking_value }} <span style="color: red; font-size: 19px;"> | </span>
											@endif
										@endforeach
												
		@foreach($australasia as  $row )										
	@php 
	$data .= '<div class="col-sm-4"><span class="fa fa-check check-color"></span> ' . $row->loking_value . '<hr></div>';
@endphp
@endforeach
											
										<div class="modal fadeInDown" id="myModalaustralasia" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="false" >
												
    <div class="modal-dialog modal-md" style="margin-top: 100px;">
      <div class="modal-content">
      
        <div class="modal-header">
          <h3>Australasia</h3>
        </div>
        <div class="modal-body">
         
            <div class="row">
               
                
					{!! $data !!}							
                        
            </div>

              
             
          </div>
       
        <div class="modal-footer">
          <div class="col-sm-12">
           <button class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  									@if(count($australasia)>2)
										<a href="javascript:;" data-toggle="modal" data-target="#myModalaustralasia" style="color:#0ed526;">Read more</a>
										@endif
									</span></li>
							</ul>
							@endif
								
							
							
							@if(count($south_america))
							<ul class="in_box_brdr">
								<li><span class="box_txt_lb"><img src="{{ $user_assets }}/public_profile_icon/pray.png" alt="" width="20px" height="20px;"> South america</span> 
									<span class="txt_fetched"> 
									@php $data=''; @endphp 
										@foreach($south_america as $k => $row )
											@if($k < $limit)
												{{ $row->loking_value }} <span style="color: red; font-size: 19px;"> | </span>
												@endif
										@endforeach
											
		@foreach($south_america as $row )										
												
	@php 
	$data .= '<div class="col-sm-4"><span class="fa fa-check check-color"></span> ' . $row->loking_value . '<hr></div>';
@endphp
											
										@endforeach
										<div class="modal fadeInDown" id="south_america" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="false" >
												
    <div class="modal-dialog modal-md" style="margin-top: 100px;">
      <div class="modal-content">
      
        <div class="modal-header">
          <h3>South america</h3>
        </div>
        <div class="modal-body">
         
            <div class="row">
               
                
					{!! $data !!}							
                        
            </div>

              
             
          </div>
       
        <div class="modal-footer">
          <div class="col-sm-12">
           <button class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
  </div>							@if(count($south_america)>2)
										<a href="javascript:;" data-toggle="modal" data-target="#south_america" style="color:#0ed526;">Read more</a>
										@endif
									</span></li>
							</ul>
							@endif
								
							
							


						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>

		<div class="col-md-3">

		<div class="well w" style="background-color:#ffffff;border-radius:10px;">
			<div class="row">
				<h2 class="qsh">Quick Search</h2>
				<form method="get" action="{{ url('user-search') }}">
				<div class="col-sm-12">
					<select name="" id="" class="form-control qs">
						<option value="">--Select country--</option>
						@foreach ($allcountry as $row)
                              <option value="{{ $row->country_id }}">
                                {{ $row->country_name }}
                              </option>
                             @endforeach
						
					</select>
				</div>
				<div class="col-sm-6">
					<select name="age_from" id="" class="form-control qs">
						<option value="">age from</option>
						@for($i =  date('y');  $i <= date('y')+82 ; $i++)
  <option value="{{ $i }}" >{{ $i }}</option>
@endfor 
					</select>
				</div>
				<div class="col-sm-6">
					<select name="age_to" id="" class="form-control qs">
						<option value="">age to</option>
						@for($i = date('y')+82; $i >= date('y'); $i--)
  <option value="{{ $i }}" >{{ $i }}</option>
@endfor 
					</select>
				</div>
				<div class="col-sm-12">
					<button class="bn">Search Now</button>
				</div>
			</div>
			</form>
		</div>

		<div class="well w" style="background-color:#ffffff;border-radius:10px;">
			<div class="row">
				<div class="col-sm-4">
          @if($user_data->mobile_status==1)
					<img src="{{ $user_assets }}/public_profile_icon/mobile verified.png" alt="" class="masterTooltip" title="Phone Number is Verified!">
          @else
          <img src="{{ $user_assets }}/public_profile_icon/mobile unverified gray.png" alt="" class="masterTooltip" title="Phone Number is un verified!">
          @endif	
				</div>
				<div class="col-sm-4">
           @if($user_data->email_status==1)
					<img src="{{ $user_assets }}/public_profile_icon/email verified.png" alt="" class="masterTooltip" title="Email  is verified!">
          @else
          <img src="{{ $user_assets }}/public_profile_icon/email unverified.png" alt="" class="masterTooltip" title="Email  is unverified!">
          @endif
				</div>
				<div class="col-sm-4">
          @if($user_data->ssn_status<>1)
					<img src="{{ $user_assets }}/public_profile_icon/ssn verified.png" alt=""  class="masterTooltip" title="CNIC  is verified!">
          @else
          <img src="{{ $user_assets }}/public_profile_icon/ssn_unverified.png" alt=""  class="masterTooltip" title="CNIC  is unverified!">
          @endif
				</div>
			</div>
		</div>

		<div style="padding:20px;">
			<div class="row ntb">
				<ul class="list_somebtn">
								<li class="ageaa"><a href="{{ url('notification') }}"><span><img width="25px" height="25px" src="{{ $user_assets }}/icons/notification.png"></span> <span class="linkT">New Notifications</span></a></li>
							</ul>
				
			</div>
			<div class="row ntb">
				{{-- <ul class="list_somebtn">
								<li class="agea"><a href=""><span> <span class="countN icon_size">12</span> <span class="linkT">My Inbox</span></a></li>
							</ul> --}}
							<ul class="list_somebtn">
								<li class="ageaa"><a href="{{ url('inbox') }}"><span><img width="28px" height="28px" src="{{ $user_assets }}/icons/message.png"><span class="linkT">My Inbox</span></a></li>
							</ul>
				
			</div>
			<div class="row ntb">

				{{-- <ul class="list_somebtn">
								<li class="ageaa"><a href=""><span> <span class="countN icon_size">20</span> <span class="linkT">My Favourites</span></a></li>
							</ul> --}}
							<ul class="list_somebtn">
								<li class="ageaa"><a href="{{ url('favourite-list') }}"><span><img style="height: 25px;" src="{{ $user_assets }}/icons/favorite.png"> <span class="linkT">My Favourites</span></a></li>
							</ul>

				
			</div>	
		</div>			

		<div class="well w sidebor" style="background-color:#4ccee8;border-radius:10px; ">
			<div style="padding-bottom:0px;">
			
				<h2 class="text-center">Similar Matches</h2>
		
				<div class="row">
					<section class="carousel-default">
    <div id="carousel-default1" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel-default1" data-slide-to="0" class=""></li>
        <li data-target="#carousel-default1" data-slide-to="1" class=""></li>
        <li data-target="#carousel-default1" data-slide-to="2" class="active"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- NOTE: Bootstrap v4 changes class name to carousel-item -->
        @if(!empty($simlar))
        @if(count($simlar))
        @foreach($simlar as $key=>$recnt_slid)
        <div @if($key==0)  class="item active" @else class="item" @endif>
        <a href="{{ url('public-profile',$recnt_slid->id) }}" title="{{ $recnt_slid->user_name }} view public profile">
        	@if($recnt_slid->image)

        	<img src="{{ $user_assets }}/my_photo/{{ $recnt_slid->image }}" class="img-thumbnail" style="width: 100%; height: 200px;">
        	
        	@elseif($recnt_slid->image_name)
        	<img src="{{ $user_assets }}/profile_image/{{ $recnt_slid->image_name }}" class="img-thumbnail" style="width: 100%; height: 200px;">
        	@else
        	
        	<img src="{{ $user_assets }}/default_slider.jpg" class="img-thumbnail" style="width: 100%; height: 200px;" >
        	@endif

         <div class="carousel-caption">
            <h2>{{ $recnt_slid->user_name }}</h2>
            <h3>{{ $recnt_slid->gender }}</h3>
          </div>
   
           {{ $recnt_slid->country_name.' '.$recnt_slid->city_name.' '.$recnt_slid->martial_status }} <span style="color: blue;"><b>View Profile</b></span>
           </a>

        </div>
        @endforeach

        @else
        <div class="item active">
         <img src="{{ $user_assets }}/default_slider.jpg" class="img-thumbnail" style="width: 100%; height: 200px;" >
          <div class="carousel-caption">
          	<h2 style="color: white">Similar User</h2>
            <h3 style="color: white">Not Here</h3>
           
            
          </div> 
          {{-- <br><br><br><br>  --}}
          {{-- <h2>Similar User</h2>
            <h3>Not Here</h3> --}}
        </div>
          @endif
		@endif      
      </div>
      <a class="left carousel-control" href="#carousel-default1" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-default1" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>
		
 		</div>

				<div class="modal fadeInDown" id="myphotoModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="false" >
												
    <div class="modal-dialog modal-lg" style="margin-top: 100px;">
      <div class="modal-content" style="top:50px;">
      
        <div class="modal-header">
          <h3>{{ $user_data->user_name }}</h3>
        </div>
        <div class="modal-body">
         
            <div class="row">
               
                	@foreach($myphoto as $row)
					<div class="col-md-3">


						<a class="example-image-link" href="{{ $user_assets }}/my_photo/{{ $row->image }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="{{ $user_assets }}/my_photo/{{ $row->image }}" alt=""/></a>


						{{-- <img class="currentuserimg" src="{{ $user_assets }}/my_photo/{{ $row->image }}"> --}}
					</div>						
						@endforeach
                        
            </div>

              
             
          </div>
       
        <div class="modal-footer">
          <div class="col-sm-12">
           <button class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
  </div>



{{-- <div class="modal fadeInDown" id="chat" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="false" >
	<div class="modal-dialog modal-md">
      <div class="modal-content">
      
        <div class="modal-header">
        	 <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="font-size: 30px; color: red;">
          <span aria-hidden="true">&times;</span>
        </button>
          <h3>{{ $user_data->user_name }}</h3>
        </div>
        <div class="modal-body">
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
      <div class="col-md-12">
        <div class="well"  id="chat-scroll" style="box-shadow: none;height:350px !important; overflow: scroll;">
         
          @if(!empty($current_chat))
          @foreach($current_chat as $key)
         
          @if($key->to_user==Session::get('user_id'))
          <div class="row">
           <div class="col-md-6"> 
          <p class='well' style="color:black;">
            {{$key->message}}</p>
          </div>
          <div class="col-md-6 "  > 
           </div>
         </div>
          @else
          <div class="row">
           <div class="col-md-6"> 
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
            <div class="row">
               
                    <form class="form-inline" id='form' >
            {{csrf_field()}}
          <div class="form-group">
           <input type="text" class="form-control" name="send_messgae" id="send_messgae" placeholder="type message">
           <label style="color:red; display:none;" id='error_msg'>Type a Message</label>
           <input type="hidden" name="to_user" value="@if(!empty($user_data->id)){{$user_data->id}}@endif">
          </div>
          <button type="submit" class="btn" style="padding: 5px;">send</button>
        </form>
               
                        
            </div>
              
             
          </div>
       
        <div class="modal-footer">
          <div class="col-sm-12">
           <button class="btn btn-danger" style="padding: 5px;" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
  
</div>
</div> --}}

  <div class="modal fadeInDown" id="unblock" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="false" >
												
    <div class="modal-dialog modal-md" style="margin-top: 100px;">
      <div class="modal-content">
      
        <div class="modal-header">
          <h3>{{ $user_data->user_name }}</h3>
        </div>
        <div class="modal-body">
         
            <div class="row">
               
                    <p class="alert alert-danger">Please unblock this friend for communication</p>
               
                        
            </div>

              
             
          </div>
       
        <div class="modal-footer">
          <div class="col-sm-12">
           <button class="btn btn-danger" style="padding: 5px;" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
  </div>


  <div class="modal fadeInDown" id="nofriend" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="false" >
                        
    <div class="modal-dialog modal-md" style="margin-top: 100px;">
      <div class="modal-content">
      
        <div class="modal-header">
          <h3>{{ $user_data->user_name }}</h3>
        </div>
        <div class="modal-body">
         
            <div class="row">
               
                    <p class="alert alert-danger">Please add friend for communication</p>
               
                        
            </div>

              
             
          </div>
       
        <div class="modal-footer">
          <div class="col-sm-12">
           <button class="btn btn-danger" style="padding: 5px;" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
  </div>


  <div class="modal fadeInDown" id="photonotModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="false" >
												
    <div class="modal-dialog modal-md" style="margin-top: 100px;">
      <div class="modal-content">
      
        <div class="modal-header">
          <h3>{{ $user_data->user_name }}</h3>
        </div>
        <div class="modal-body">
         
            <div class="row">
               
                    <p class="alert alert-danger">Not Allow view image please send photo permission request</p>
               
                        
            </div>

              
             
          </div>
       
        <div class="modal-footer">
          <div class="col-sm-12">
           <button class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
  </div>



  <div class="modal fadeInDown" id="loginmodal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="false" >
												
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
           <a href="{{ url('register') }}"  class="btn btn-success" >Sign Up</a>
           <button type="submit" class="btn btn-success" >Login</button>
           </form>
          </div>
        </div>
        
      </div>
    </div>
  </div>
			
		</div>

		</div>
<div class="well sidebar" id="" style="position: sticky;">
<div style="padding-bottom:0px;">

		<h2 class="text-center">Recently Joined</h2>

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
        <div @if($key==0) class="item active" @else class="item" @endif >
        <a href="{{ url('public-profile',$recnt_slid->id) }}" title="{{ $recnt_slid->user_name }} view public profile">
        	@if($recnt_slid->image)

        	<img src="{{ $user_assets }}/my_photo/{{ $recnt_slid->image }}" class="img-thumbnail" style="width: 100%; height: 200px;">
        	
        	@elseif($recnt_slid->image_name)
        	<img src="{{ $user_assets }}/profile_image/{{ $recnt_slid->image_name }}" class="img-thumbnail" style="width: 100%; height: 200px;">
        	@else
        	
        	<img src="{{ $user_assets }}/default_slider.jpg" class="img-thumbnail" style="width: 100%; height: 200px;" >
        	@endif

          <div class="carousel-caption">
            <h2>{{ $recnt_slid->user_name }}</h2>
            <h3>{{ $recnt_slid->gender }}</h3>
          </div>
        
        <br><br><br><br>
           {{ $recnt_slid->country_name.' '.$recnt_slid->city_name.' '.$recnt_slid->martial_status }} <span style="color: blue;"><b>View Profile</b></span>
           </a>
        </div>
        @endforeach
        @else
       
        <div class="item active">

        
        	<img src="{{ $user_assets }}/default_slider.jpg" class="img-thumbnail" style="width: 100%; height: 200px;" >

          {{-- <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/158072/hearthand.jpg" alt="Third slide" > --}}
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
@endif
</div>

</div>
</div>
</div>
</div>
</div>

 <script type="text/javascript">
 	function profile()
 	 {
 	 	$(".abc").css("background-color", "#5a378c");
 		$('#profile').show(90);
 		$('#family').hide(90);
 		$('#partner').hide(90);
 		$("#pro").css("background-color", "#4ccee8");
 		
 	}
 	function family()
 	 {
 	 	$(".abc").css("background-color", "#5a378c");
 		$('#profile').hide(90);
 		$('#family').show(90);
 		$('#partner').hide(90);
 		$("#fam").css("background-color", "#4ccee8");
 		
 		
 	}
 	function partner()
 	 {
 	 	$(".abc").css("background-color", "#5a378c");
 		$('#profile').hide(90);
 		$('#family').hide(90);
 		$('#partner').show(90);
 		$("#par").css("background-color", "#4ccee8");
 		
 	}
				// $('.read-btn').on('click' , function(){
				// 	elem = $(this).parent('.txt_fetched').find('.model-text').text();
				// 	$('#further-data').html(elem);
				// 	$('#myModal').modal('show');
				// });
			
 </script>


@endsection

@push('css')
 {{-- <script type="text/javascript" src="{{ $user_assets }}/js/owl.carousel3.js"></script> --}}
    <script>
  $(document).ready(function($) {
    $("#owl-example").owlCarousel();
  });</script>
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

<!-- setting -->
{{-- <script type="text/javascript" src="{{ $user_assets }}/js/main.js"></script> --}}
<!-- setting -->
<script type="text/javascript">
  $("a.add-answer").click(function(){
     question_id=$(this).attr('rel');
     // alert(question_id);
     // var answer =$('.add-answer').text();
    // $('#answer').val(answer);
    $('#question_id').val(question_id);
    $('#question').modal('show');
    $('.add-answer').html('');  
   });
   $("a.update-answer").click(function(){
     question_id=$(this).attr('rel');
     // alert(question_id);
     // var answer =$('.add-answer').text();
    // $('#answer').val(answer);
    $('#update_question_id').val(question_id);
    $('#answer_update').modal('show');
    // $('.add-answer').html(''); 
   });
</script>


	<script type="text/javascript">
	
	 
	@if(empty(Session::get('user_id')))
	
		
		$('#loginmodal').modal('show');
		
	</script>

	@else
	<script src="{{ $user_assets }}/js/lightbox-plus-jquery.min.js"></script>
	@endif    

        
@endpush