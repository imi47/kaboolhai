@extends('user/master_layout2') 
@section('data') 
<style>
.test{
  color: black;
  text-align: center;
  margin-top:30px;
    font-family: Arial, Helvetica, sans-serif;
  font-size:15px;
}
.downtext
{
  text-align: justify;
  color: black;
  font-family:  "Lato",sans-serif;
  font-size:13px;
}
.aaa
{
  padding-left:15px;
}
.testd
{
  text-align:right;
}
   .about_text
  {
     line-height: 200%;
     font-family:  "Lato",sans-serif;
  font-size:13px;  
  }
  .bigheading
  {
    font-size: 46px;
    color: darkorange;
    text-align: center;
    padding-bottom:20px;
    font-family: "Source Sans Pro", sans-serif;
  }
  .ptext
  {
    font-size: 13px;
    color: #000000;
    text-align:justify;
    font-family:  "Lato",sans-serif;
  font-size:13px;
  }
  .smallhead
  {
    font-size: 25px;
    color: #000000;
  }
 .menulists
  {
     font-family:  "Lato",sans-serif;
  font-size:13px;
  }
  .hdlist
  {
    line-height: 400%;
  }
  .l
  {
    padding-left: 5px;
  }
  .l:hover
  {
    background-color: #ed6c05 ;
    border-radius:5px;
  }
  .l:hover a.menulists
  {
    color: white;
  }
  .lmis
  {
    width:40px;
  }

  #oath-container {
    margin-top:-66px;
  }
  
</style>
<div style="padding-top: 90px;"></div>
   @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  <div class="container-fluid"> 
    <div class="row">
     
      <div class="col-md-2"></div>

      <div class="col-md-8" style="background-color: #f6f6f4;" id='oath-container'>
        <div class="well" style="height: auto;">
           <img id="two" class="wizrdpic" src="{{ $user_assets }}/img/registration-step 2.png" alt="">
           <div style="height:87px; margin-top: 20px; width:100%;border:1px solid darkorange;">
            <form method="post" action="{{ url('add-oth') }}">
          {{ csrf_field() }}
           {{-- <h1 class="bigheading" style="margin: 10px;">OTH</h1> --}}
           <p class="test text-center" style="margin-top: 23px;"><b>"And do not mix the truth with falsehood or conceal the truth while you know [it]".<br>{Quran 2:42}.</b></p> 
           
            </div>
           <p class="test"></p>
           <p class="test">Abdullah reported Allah’s Messenger (peace be upon him) as saying: Truth leads one to Paradise and virtue leads one to Paradise and the person tells the truth until he is recorded as truthful, and lie leads to obscenity and obscenity leads to Hell, and the person tells a lie until he is recorded as a liar. {Sahih Muslim – Book 32 Hadith 6307}.</p>
           <p class="downtext">Before we proceed, we need you to agree to the undertaking given below. This oath is a testimony that you are a Muslim and agree to our website’s terms and conditions;</p>
                <p class="downtext aaa"><input @if(old('oth_1')) checked @endif type="checkbox" name="oth_1"> I <span class="username"><u><strong></strong></u></span> hereby testify that I only worship <strong>Allah</strong> and none other!</p>

                <p class="downtext aaa"><input @if(old('oth_2')) checked @endif type="checkbox" name="oth_2"> I testify that whatever information I have provided is true to my knowledge & I have truly explained who I am.</p>
                  <p class="downtext aaa"><input @if(old('oth_3')) checked @endif type="checkbox" name="oth_3"> I understand that this website is meant for the serious and sacred relationship of Nikah and I am only seeking the candidates with this intention. </p>
                  <p class="downtext"> I do not attempt to mislead or misguide anyone nor will I misuse this website for any other purpose than seeking a life partner for Nikah according to Islamic laws.</p>
                  <p class="downtext"> I understand that my activities on ‘Kabool Hai’ are closely monitored so any unethical behaviour may result in the removal of my account from this website. </p>
                  <p class="downtext ">This oath will remain between you and us. It will not be disclosed or exhibited to other members of <strong>‘Kabool Hai’</strong>. It is meant to ensure the safety and trustworthiness of your profile so that this website is not used for unethical and un-Islamic practices. Our sole purpose is to provide you with a reliable Islamic platform to build long-term life relationship based on the sacred bond of <strong>‘Nikah’</strong> and prevent the spread of illegitimate relationships.</p><br>
                  @if($country=='166')
                  <div class="row">
                  <div class="col-md-3"> 
                   <label for="">CNIC <span class="imporatant">*</span></label>
                   </div>
                   
                   <div class="col-md-6">
                     <input type="number" name="pasport_no" id="" required="" value="{{ old('pasport_no') }}"  class="form-control" >
                     </div>
                     </div>
                     <br>
                     <div class="row">
                  <div class="col-md-3"> 
                   <label for="">CNIC SCAN IMAGE <span class="imporatant">*</span></label>
                   </div>
                   
                   <div class="col-md-6">
                    <input type="file" name="image" class="form-control" accept=".jpg,.png,.jpeg,.gif" style="display: block;"/>
                     </div>
                     </div>
                     <div class="row">
                       <div class="col-md-9 col-md-offset-2">
                         <p class="text-muted" style="padding-left: 18px; font-size: 13px;padding-top: 2px; margin-left: 43px;" >Kindly fill your CNIC number if you are a visitor from Pakistan.</p>
                       </div>
                     </div>
                      @else
                     <div class="row">
                  <div class="col-md-3"> 
                   <label for="">Passport No. or SSN <span class="imporatant">*</span></label>
                   </div>
                   <div class="col-md-6">
                     <input type="number" required="" name="pasport_no" id="" value="{{ old('pasport_no') }}" class="form-control">
                     </div>
                     </div>
                     <br>
                     <div class="row">
                  <div class="col-md-3"> 
                   <label for="">Passport No. or SSN Scan Image<span class="imporatant">*</span></label>
                   </div>
                   <div class="col-md-6">
                     <input  type="file" name="image" class="form-control"  style="display: block;" accept=".jpg,.png,.jpeg,.gif"/>
                     </div>
                     </div>
                     <div class="row">
                       <div class="col-md-9 col-md-offset-2">
                         <p class="text-muted" style="padding-left: 18px; font-size: 13px;padding-top: 2px; margin-left: 43px;" >If you are from any other country, kindly fill in your Passport Number or Social Security Number (SSN).</p>

                       </div>
                     </div>
                     @endif
                     <div class="row">
                       <div class="col-md-12">
                <p class="downtext">We give you a guarantee that your CNIC, Passport Number or Social Security Number will not be shown to other members or visitors of the website. It is only visible to us.</p>
              </div>
                     </div>
                      {{-- <div class="row">
               <div class="col-sm-12 finalinfo">
                 <p class="downtext "><strong>Username </strong><span>:</span> <span id="oth_use"></span> </p>
                 <p class="downtext "><strong>Email   </strong><span>:</span> </p>
                 <p class="downtext "><strong>D.O.B   </strong><span>:</span> <span id="oth_day"></span>-<span id="oth_month"></span>-<span id="oth_year"></span></p>
                 <p class="downtext "><strong>Phone </strong><span>:</span><span id="oth_code"></span><span id="oth_phone_code"></span>-<span id="oth_phone"></span></p>
               </div>
             </div>  --}}

              <div class="row">
               {{-- <div class="col-sm-9"></div> --}}
              {{--  <div class="col-sm-12">
                 <p class="downtext"><strong>Dated </strong>: {{ date("d-m-y") }}</p>
               </div> --}}
              {{-- <div class="col-sm-1"></div> --}}
             </div>
              <div class="row">
               <div class="col-sm-12 text-center" >
                 <p class="test" style="font-size:13px;"><input @if(old('oth_agreed')) checked @endif type="checkbox" name="oth_agreed"> I have read and agreed to the  <a href="{{ url('term-condation') }}"> T&C </a>and <a href="{{ url('policy-privacy') }}">Privacy Policy</a></p>
               </div>
             </div>  
              <div class="modal-footer" style="border-top-color:#ED6C05;">
          <button type="submit" data-dismiss="modal"
           style="background-color:#a51523; border-radius: 10px; border-color: white; color: white; width:81px;height:46px;">I agree</button>
        </div> 
        </div>
      </div>
      </form>
      <div class="col-md-2"></div>
   </div> 
 </div>
 <div style="padding-bottom: 50px;"></div>
<!-- Wraper end -->
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