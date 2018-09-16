{{-- <a href="{{ url('reset-password') }}/{{ $enc_email }}">Reset Link</a> --}}



<div style='width: 100%; background-color: #88bdbf; margin: 0; padding: 50px 0;'>
	<div style='width: 50%; background-color: #f3f3f3; margin: 0 auto; padding: 50px 50px 15px; box-shadow: 8px 8px 5px #7eafb1;'>
		<table style="background-color: #5a378c" cellpadding='0' cellspacing='0'>
			<tr>
				<td style="width: 41%; height: 61px; background-color: #5a378c">
					<img alt="" src="{{ asset('public/user_assets/images') }}/logo-white2.png" class="logo" style="" />
				</td>
			</tr>
		</table>
		<div style='width: 100%; background-color: #FFF; margin: 10px 0 30px; border-radius: 5px; box-shadow: 0 4px 2px -2px #dedede;'>
			<table cellpadding='0' cellspacing='0'>
				<tr>
					<td>
						<img src='http://docbookpk.com/test/public/img/email-banner.jpg' alt='' style='width: 100%; height: 150px; border-top-right-radius: 5px; border-top-left-radius: 5px;' />
					</td>
				</tr>
				<tr>
					<td>
						<h1 style="text-align: center; margin: 20px 0; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif'; font-weight: normal;">Reset Password</h1>
					</td>
				</tr>
				<tr>
					<td>
						<p style="text-align: center; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif'; font-weight: normal; margin-left: 10px;">Please click the below reset link to reset your password.</p>
						{{-- <strong><h6> for manage profile</h6></strong> --}}
					</td>
				</tr>
				<tr>
					<td>
						<div style='width: 180px; height: 50px; border-radius: 5px; margin: 30px auto 50px; background-color: #224e7d; '>
							<p style="text-align: center; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif'; font-weight: normal; line-height: 50px; color: #FFF; letter-spacing: 2px;"><a style="color: #ffffff" href="{{ url('reset-password') }}/{{ $enc_email }}">Reset Link</a></p>
						</div>
					</td>
				</tr>
			</table>
		</div>
		<div style='width: 100%; text-align: center;'>
			<h2 style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, 'sans-serif';">Stay in touch</h2>
			<a href='https://www.facebook.com/' target='_blank' style='text-decoration: none;'>
				<img src='http://docbookpk.com/test/public/img/fb-share.png' alt='' style='width: 40px; margin-right: 8px;' />
			</a>
			<a href='https://twitter.com/' target='_blank' style='text-decoration: none;'>
				<img src='http://docbookpk.com/test/public/img/twitter-share.png' alt='' style='width: 40px; margin-right: 8px;' />
			</a>
			<a href='https://plus.google.com/' target='_blank' style='text-decoration: none;'>
				<img src='http://docbookpk.com/test/public/img/google-share.png' alt='' style='width: 40px; margin-right: 8px;' />
			</a>
			<a href='https://www.linkedin.com/' target='_blank' style='text-decoration: none;'>
				<img src='http://docbookpk.com/test/public/img/linkedin-share.png' alt='' style='width: 40px; margin-right: 8px;' />
			</a>
			<p style="text-align: center; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif'; font-weight: normal; font-size: 13px; margin: 30px 0 5px; padding: 0; color: #878787;">Email sent by Kaboolhai</p>
			<p style="text-align: center; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif'; font-weight: normal; font-size: 13px; margin: 0; padding: 0; color: #878787;">Copyrights &copy; {{ date('Y') }}   <a href="{{url('/')}}" target='_blank'>Kaboolhai</a>, All rights reserved.</p>
		</div>
	</div>
</div>