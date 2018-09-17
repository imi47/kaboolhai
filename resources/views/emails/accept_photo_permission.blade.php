
<div style="width: 100%; 
	background-color: #88bdbf; 
	margin: 0; 
	padding: 50px 0;
	text-align: center;
	font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif';">
	<div style="background-color:#ccc;
	/*margin: 0 auto;*/
	padding: 20px;
	margin: 100px;" >
		
	
			<table style="margin: 0 auto;
	background: #fff;
	padding: 50px;
	border-radius: 10px;
	text-align: center;
	position: relative;" >
				<tr >
					<td>
						 

						 <img alt="" src="{{ asset('public/user_assets') }}/KH-logo-blog-logo.png" class="logo" style="" />
					</td>
				</tr>
				<tr>
					<td>
						<h1>Accept Photo Permission Email</h1>
					</td>
				</tr>
				<tr class="text-content">
					<td>
						<p >Hey {{ $user_date->firstname.' '.$user_date->lastname}} , Accept your photo permision request,{{ $sender_user->firstname.' '.$sender_user->lastname}}<br/>Please click below link for view profile.
						</p>
						
					</td>
				</tr>
				<tr>
					<td>
					
						<a  style="text-decoration: none;background-color:#009688;color: #fff;padding: 10px;position: absolute;top: 76%;right: 163px;border-radius: 10%" href="{{ url('public-profile',$user_date->id) }}">Public Profile</a>
						
					
					</td>
				</tr>
			</table>
		
		<div >
			<h2>Stay in touch</h2>
			<a href='https://www.facebook.com/' target='_blank' >
				<img src='http://docbookpk.com/test/public/img/fb-share.png' alt='' />
			</a>
			<a href='https://twitter.com/' target='_blank'>
				<img src='http://docbookpk.com/test/public/img/twitter-share.png' alt='' />
			</a>
			<a href='https://plus.google.com/' target='_blank'>
				<img src='http://docbookpk.com/test/public/img/google-share.png' alt='' />
			</a>
			<a href='https://www.linkedin.com/' target='_blank' >
				<img src='http://docbookpk.com/test/public/img/linkedin-share.png' alt=''  />
			</a>
			<p >Email sent by Kaboolhai</p>
			<p >Copyrights &copy; {{ date('Y') }}   <a href="{{url('/')}}" target='_blank'>Kaboolhai</a>, All rights reserved.</p>
		</div>
		</div>
	</div>
