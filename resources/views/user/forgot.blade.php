@extends('user/master_layout2') 
@section('data') 

<link rel="stylesheet" href="{{ $user_assets }}/css/style.css" />

<style>
  .topm
  {
    margin-top: 170px;
    margin-bottom: 250px;
  }
  .h1head
  {
    font-size:36px;
    color: darkorange;
    text-align: center;
    padding-bottom:20px;
    font-family: "Source Sans Pro", sans-serif;
  }
  .e
  {
    border-radius:5px;
    border:1px solid #c4c4c4;
  }
  .btnsub
  {
    width:80px;
    height: 35px;
    background-color:#f47e2a;
    border-color: #f47e2a;
    color: white;
    border-radius:5px;  
  }
  .btnsub:hover
  {
    background-color:#25b206;
    border-color:#25b206;
  }
  .ins
  {
    padding:60px;
    box-shadow:none;
    background-color:#f1f1f1;
    border-radius:10px;
  }

</style>

<div class="container-fluid topm">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
       @if(Session::has('error'))
                    <p class="alert alert-danger">{{ Session::get('error') }}</p>
                @endif
                @if(Session::has('success'))
                    <p class="alert alert-success">{{ Session::get('success') }}</p>
                @endif
      <div class="well ins">
        <form method="post" action="{{ url('forgot-password') }}">
        <h2 class="h1head">Forgot Password</h2>
        <label for="">Enter Email:</label>
        {{ csrf_field() }}
        <input type="email" name="email" placeholder="enter email" class="form-control">
        <br>
        <button class="btnsub pull-right">Submit</button>
      </div>
      </form>
    </div>
    <div class="col-md-3"></div>
  </div>
</div>



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