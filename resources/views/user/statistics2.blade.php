@extends('user/user_master_layout1') 
@section('data') 

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
                <p style="color:black; margin-top: 10px;">No. Of Conversation</p>
   				</li>
   				
   				<li class="stat-li">
   					<div class="stats-circle circle1">
   						<div class="stat-counter">
   							<p>12</p>
   						</div>
   					</div>
   				</li>
   				
   				<li class="stat-li">
   					<div class="stats-circle circle2">
   						<div class="stat-counter">
   							<p>12</p>
   						</div>
   					</div>
   				</li>
   				
   				<li class="stat-li">
   					<div class="stats-circle circle3">
   						<div class="stat-counter">
   							<p>12</p>
   						</div>
   					</div>
   				</li>
   				
   				<li class="stat-li">
   					<div class="stats-circle circle4">
   						<div class="stat-counter">
   							<p>12</p>
   						</div>
   					</div>
   				</li>
   				
   				<li class="stat-li">
   					<div class="stats-circle circle5">
   						<div class="stat-counter">
   							<p>12</p>
   						</div>
   					</div>
   				</li>
   				
   				<li class="stat-li">
   					<div class="stats-circle circle6">
   						<div class="stat-counter">
   							<p>12</p>
   						</div>
   					</div>
   				</li>
   				
   				<li class="stat-li">
   					<div class="stats-circle circle7">
   						<div class="stat-counter">
   							<p>12</p>
   						</div>
   					</div>
   				</li>
   				
   				<li class="stat-li">
   					<div class="stats-circle circle8">
   						<div class="stat-counter">
   							<p>12</p>
   						</div>
   					</div>
   				</li>
   				
   				<li class="stat-li">
   					<div class="stats-circle circle9">
   						<div class="stat-counter">
   							<p>12</p>
   						</div>
   					</div>
   				</li>
   				
   				<li class="stat-li">
   					<div class="stats-circle circle10">
   						<div class="stat-counter">
   							<p>12</p>
   						</div>
   					</div>
   				</li>
   				
   				<li class="stat-li">
   					<div class="stats-circle circle11">
   						<div class="stat-counter">
   							<p>12</p>
   						</div>
   					</div>
   				</li>

   				
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
                          <img src="{{ $user_assets }}/userpic.jpg" class="user_image">
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
                          <img src="{{ $user_assets }}/userpic.jpg" class="user_image">
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
                    	<p class="right-counter-new pull-left"><em class="pointer" id="fav_new">New</em> 12%</p>
                    	<p class="right-counter-old pull-left"><em class="pointer" id="fav_old">Old</em> 26%</p>
                    </div>
                    <div class="clearfix"></div>
                  </div>
               </div>
               <div class="content_body cbone" id="cb2">
                 <div class="scrollablediv">
                 
                 <a href="" target="__blank">
                    <div class="inner_main_div">
                      <div class="inner_img_div">
                        <img src="{{ $user_assets }}/userpic.jpg" class="user_image">
                      </div>
                      <div class="inner_msg_div">
                        <p class="msg_txt">You View the Profile of <strong>Shahruk</strong>.</p>
                      </div>
                      <div class="inner_div_time">
                        <p class="time_div">02:31:42</p>
                        <!-- <p class="date_div">2008-02-14</p> -->
                      </div>
                    </div>
                  </a>
                 </div>
               </div>

               <div class="content_body cbone" id="cb2_2">
                 <div class="scrollablediv">
                 
                 <a href="" target="__blank">
                    <div class="inner_main_div">
                      <div class="inner_img_div">
                        <img src="{{ $user_assets }}/userpic.jpg" class="user_image">
                      </div>
                      <div class="inner_msg_div">
                        <p class="msg_txt">old View the Profile of <strong>Shahruk</strong>.</p>
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
                    <p class="headings stats-head">Profile View <!-- <a href="" class="stats-head-link">View Activity Log</a> --> </p>
                    <div class="pull-right right-counter-part">
                    	<p class="right-counter-new pull-left"><em class="pointer" id="prof_new">New</em> 12%</p>
                    	<p class="right-counter-old pull-left"><em class="pointer" id="prof_old">Old</em> 26%</p>
                    </div>
                    <div class="clearfix"></div>
                  </div>
               </div>
               <div class="content_body cbone" id="cb3">
                   <div class="scrollablediv">
                    
                    <a href="" target="__blank">
                      <div class="inner_main_div">
                        <div class="inner_img_div">
                          <img src="{{ $user_assets }}/userpic.jpg" class="user_image">
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

                <div class="content_body cbone" id="cb3_3">
                   <div class="scrollablediv">
                    
                    <a href="" target="__blank">
                      <div class="inner_main_div">
                        <div class="inner_img_div">
                          <img src="{{ $user_assets }}/userpic.jpg" class="user_image">
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
                    <p class="headings stats-head">Sent Messages <!-- <a href="" class="stats-head-link">View Activity Log</a> --> </p>
                    <div class="pull-right right-counter-part">
                    	<p class="right-counter-new pull-left"><em class="pointer" id="s_m_new">New</em> 12%</p>
                    	<p class="right-counter-old pull-left"><em class="pointer" id="s_m_old">Old</em> 26%</p>
                    </div>
                    <div class="clearfix"></div>
                  </div>
               </div>
               <div class="content_body cbone" id="cb4">
                   <div class="scrollablediv">

                     <a href="" target="__blank">
                      <div class="inner_main_div">
                        <div class="inner_img_div">
                          <img src="{{ $user_assets }}/userpic.jpg" class="user_image">
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

               <div class="content_body cbone" id="cb4_4">
                   <div class="scrollablediv">

                     <a href="" target="__blank">
                      <div class="inner_main_div">
                        <div class="inner_img_div">
                          <img src="{{ $user_assets }}/userpic.jpg" class="user_image">
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
                    <p class="headings stats-head">Sent Request <!-- <a href="" class="stats-head-link">View Activity Log</a> --> </p>
                    <div class="pull-right right-counter-part">
                    	<p class="right-counter-new pull-left"><em class="pointer" id="s_r_new">New</em> 12%</p>
                    	<p class="right-counter-old pull-left"><em class="pointer" id="s_r_old">Old</em> 26%</p>
                    </div>
                    <div class="clearfix"></div>
                  </div>
               </div>
               <div class="content_body cbone" id="cb5">
                   <div class="scrollablediv">
                    
                     <a href="" target="__blank">
                      <div class="inner_main_div">
                        <div class="inner_img_div">
                          <img src="{{ $user_assets }}/userpic.jpg" class="user_image">
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

                <div class="content_body cbone" id="cb5_5">
                   <div class="scrollablediv">

                     <a href="" target="__blank">
                      <div class="inner_main_div">
                        <div class="inner_img_div">
                          <img src="{{ $user_assets }}/userpic.jpg" class="user_image">
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
                    <p class="headings stats-head">Photo Permission Sent <!-- <a href="" class="stats-head-link">View Activity Log</a> --> </p>
                    <div class="pull-right right-counter-part">
                    	<p class="right-counter-new pull-left"><em class="pointer" id="p_p_s_new">New</em> 12%</p>
                    	<p class="right-counter-old pull-left"><em class="pointer" id="p_p_s_old">Old</em> 26%</p>
                    </div>
                    <div class="clearfix"></div>
                  </div>
               </div>
               <div class="content_body cbone" id="cb6">
                   <div class="scrollablediv">
                    
                    <a href="" target="__blank">
                      <div class="inner_main_div">
                        <div class="inner_img_div">
                          <img src="{{ $user_assets }}/userpic.jpg" class="user_image">
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

                <div class="content_body cbone" id="cb6_6">
                   <div class="scrollablediv">

                     <a href="" target="__blank">
                      <div class="inner_main_div">
                        <div class="inner_img_div">
                          <img src="{{ $user_assets }}/userpic.jpg" class="user_image">
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
                    <p class="headings stats-head">Photo Permission Received <!-- <a href="" class="stats-head-link">View Activity Log</a> --> </p>
                    <div class="pull-right right-counter-part">
                    	<p class="right-counter-new pull-left"><em class="pointer" id="p_p_r_new">New</em> 12%</p>
                    	<p class="right-counter-old pull-left"><em class="pointer" id="p_p_r_old">Old</em> 26%</p>
                    </div>
                    <div class="clearfix"></div>
                  </div>
               </div>
               <div class="content_body cbone" id="cb7">
                   <div class="scrollablediv">
    
                     <a href="" target="__blank">
                      <div class="inner_main_div">
                        <div class="inner_img_div">
                          <img src="{{ $user_assets }}/userpic.jpg" class="user_image">
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

                <div class="content_body cbone" id="cb7_7">
                   <div class="scrollablediv">

                     <a href="" target="__blank">
                      <div class="inner_main_div">
                        <div class="inner_img_div">
                          <img src="{{ $user_assets }}/userpic.jpg" class="user_image">
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
                    <p class="headings stats-head">Hidden Profile <!-- <a href="" class="stats-head-link">View Activity Log</a> --> </p>
                    <div class="pull-right right-counter-part">
                    	<p class="right-counter-new pull-left"><em class="pointer" id="h_p_new">New</em> 12%</p>
                    	<p class="right-counter-old pull-left"><em class="pointer" id="h_p_old">Old</em> 26%</p>
                    </div>
                    <div class="clearfix"></div>
                  </div>
               </div>
               <div class="content_body cbone" id="cb8">
                   <div class="scrollablediv">
    
                     <a href="" target="__blank">
                      <div class="inner_main_div">
                        <div class="inner_img_div">
                          <img src="{{ $user_assets }}/userpic.jpg" class="user_image">
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

                <div class="content_body cbone" id="cb8_8">
                   <div class="scrollablediv">

                     <a href="" target="__blank">
                      <div class="inner_main_div">
                        <div class="inner_img_div">
                          <img src="{{ $user_assets }}/userpic.jpg" class="user_image">
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
                    <p class="headings stats-head">Block Profile <!-- <a href="" class="stats-head-link">View Activity Log</a> --> </p>
                    <div class="pull-right right-counter-part">
                    	<p class="right-counter-new pull-left"><em class="pointer" id="b_p_new">New</em> 12%</p>
                    	<p class="right-counter-old pull-left"><em class="pointer" id="b_p_old">Old</em> 26%</p>
                    </div>
                    <div class="clearfix"></div>
                  </div>
               </div>
               <div class="content_body cbone" id="cb9">
                   <div class="scrollablediv">
    
                     <a href="" target="__blank">
                      <div class="inner_main_div">
                        <div class="inner_img_div">
                          <img src="{{ $user_assets }}/userpic.jpg" class="user_image">
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

                <div class="content_body cbone" id="cb9_9">
                   <div class="scrollablediv">

                     <a href="" target="__blank">
                      <div class="inner_main_div">
                        <div class="inner_img_div">
                          <img src="{{ $user_assets }}/userpic.jpg" class="user_image">
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
                    <p class="headings stats-head">Invite to View my Profile <!-- <a href="" class="stats-head-link">View Activity Log</a> --> </p>
                    <div class="pull-right right-counter-part">
                    	<p class="right-counter-new pull-left"><em class="pointer" id="i_t_v_p_new">New</em> 12%</p>
                    	<p class="right-counter-old pull-left"><em class="pointer" id="i_t_v_p_old">Old</em> 26%</p>
                    </div>
                    <div class="clearfix"></div>
                  </div>
               </div>
               <div class="content_body cbone" id="cb10">
                   <div class="scrollablediv">
    
                     <a href="" target="__blank">
                      <div class="inner_main_div">
                        <div class="inner_img_div">
                          <img src="{{ $user_assets }}/userpic.jpg" class="user_image">
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

                <div class="content_body cbone" id="cb10_10">
                   <div class="scrollablediv">

                     <a href="" target="__blank">
                      <div class="inner_main_div">
                        <div class="inner_img_div">
                          <img src="{{ $user_assets }}/userpic.jpg" class="user_image">
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
                          <img src="{{ $user_assets }}/userpic.jpg" class="user_image">
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
                          <img src="{{ $user_assets }}/userpic.jpg" class="user_image">
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
                    	<p class="right-counter-new pull-left"><em class="pointer" id="d_new">New</em> 12%</p>
                    	<p class="right-counter-old pull-left"><em class="pointer" id="d_old">Old</em> 26%</p>
                    </div>
                    <div class="clearfix"></div>
                  </div>
               </div>
               <div class="content_body cbone" id="cb12">
                   <div class="scrollablediv">
    
                     <a href="" target="__blank">
                      <div class="inner_main_div">
                        <div class="inner_img_div">
                          <img src="{{ $user_assets }}/userpic.jpg" class="user_image">
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

                <div class="content_body cbone" id="cb12_12">
                   <div class="scrollablediv">

                     <a href="" target="__blank">
                      <div class="inner_main_div">
                        <div class="inner_img_div">
                          <img src="{{ $user_assets }}/userpic.jpg" class="user_image">
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
  
  <script type="text/javascript" src="{{ $user_assets }}/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="{{ $user_assets }}/js/custom.js"></script>
<link rel="stylesheet" href="{{ $user_assets }}/css/custom.css" />
<link rel="stylesheet" href="{{ asset('public') }}/css/chosen.css" />
 <link rel="stylesheet" href="{{ $user_assets }}/css/style3.css" />

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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

@endpush