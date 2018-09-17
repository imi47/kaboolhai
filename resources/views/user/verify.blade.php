@extends('user/master_layout2') 
@section('data') 

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Verification</title>

 	 @if(Session::has('error'))
                    <p class="alert alert-danger">{{ Session::get('error') }}</p>
                @endif

 
 

<div style="padding-top:80px;"></div>
 
<div class="container" style="padding:15px 15px;  background-color: #f1f1ed; width: 65%;">
		<div class="row">
			
			<div class="col-md-3"></div>
			<div class="col-md-6 text-center">
				You have successfully registerd with Kaboolhai.
				
			</div>
			</div>
		<hr class="lane" style="width: 50%;">
		<div class="row">	
		<div class="col-md-3"></div>
     	<div class="col-md-6 text-center">
				<p>VERIFY YOUR EMAIl</p>

				Hi @if(!empty($user_date)) {{ $user_date->firstname.' '.$user_date->lastname}} @else  dear user @endif You will receive a 4-digit code via Email
			</div>
		</div>
		<div class="row">
			<div class="col-md-3"></div>
				<div class="col-md-6">
					<form method="post" action="{{ url('verify') }}">
						{{ csrf_field() }}
				   <input type="text" name="verification_code" class="form-control">
				  
				 		<br>
					  <button type="submit" class="btn btn-success pull-right">Verify</button>
					   </form>
			</div>
			</div>
			
	
		<hr class="lane" style="width: 50%;">

		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6 text-center">
				<div>OTHER WAYS TO VERIFY</div>
			<!-- <div class="misscall text-center"><span>img</span><a class="rc" href="">Verify with missed call</a></div>  -->
				<div class="text-center">IF ANY PROBLEM'S ? PLEASE CONTACT : +7856454986132</div>
			</div>
		</div>

	</div>
</div>
<div style="padding-top:80px;"></div>


@endsection


@push('css')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
{{-- <link rel="stylesheet" href="{{ $user_assets }}/css/style.css"> --}}
<link rel="stylesheet" href="{{ $user_assets }}/css/style2.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="{{ $user_assets }}/css/register.css" />
 @endpush
