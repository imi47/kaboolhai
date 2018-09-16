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
</style>
 <div style="padding-top:90px;"></div>
  
  <div class="container-fluid"> 
    <div class="row">
      
    <div class="col-md-3 hidden-sm hidden-xs">
        <div class="well" style="box-shadow: none;">
          @include('user/side_bar')
        </div>
      </div>


      <div class="col-md-9">
    <div class="message-wraper">
    <div class="row" style="max-width: 1000px;">
      
      <h2 class="dashboard-h2 text-center" style="margin-bottom: 45px;">Question List</h2>
  {{--  @if(!empty($questionlist))
      @foreach($questionlist as $row) --}}
          <style>
.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

.active, .accordion:hover {
    background-color: #ccc;
}

.accordion:after {
    content: '\002B';
    color: #777;
    font-weight: bold;
    float: right;
    margin-left: 5px;
}

.active:after {
    content: "\2212";
}

.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}
</style>
</head>
<body>

@if(!empty($questionlist))
@foreach($questionlist as $row)
<button class="accordion">{{ $row->addquestion->question }}</button>
<div class="panel" style="overflow-y: scroll;">
 @foreach($row->addanswer as $value)
 @if($value->ans_user_id==Session::get('user_id'))
<a href="{{ url('public-profile',$value->ans_user_id) }}">
 <p style="padding:5px; ">@if(!empty($value->photo->image))

                      
                       <img class="currentuserimg" src="{{ $user_assets }}/my_photo/{{ $value->photo->image }}" style="width: 5% !important; height: 50px; border-radius: 200px;">
                       @elseif($value->avt_photo->image_name)
                       <img class="currentuserimg" src="{{ $user_assets }}/profile_image/{{ $value->avt_photo->image_name }}">

                       @else

              {{-- <img src="{{ $user_assets }}/dp-img-2.png"> --}}
     <img src="{{ $user_assets }}/sunrise.jpg" style="width: 5% !important; height: 50px; border-radius: 200px;">
             @endif {{ $value->user->user_name }}</p>
 <p>{{ $value->answer }}</p>
 <p class="pull-right">{{ $value->created_at }}</p>
 <br>
 </a>
 <hr>
 @endif
 @endforeach
  <p class="sendansewr"></p>
  <form class='add_answer'>
   <div class="row">
    <div class="col-md-6">
     {{ csrf_field() }}

   <input type="text" class="form-control answer" name="answer">
   <input type="hidden" name="question_id" value="{{ $row->fk_question_id }}" class="form-control">
   <input type="hidden" name="user_id" value="{{ $row->user_id }}" class="form-control">
   <br>
   <button type="submit" class="btn btn-success pull-right">Save</button>

    {{-- <input type="text" name="question_id" placeholder="enter Answer" class="form-control question_id"> --}}
   </div>
   </div>
  </form>
  <div style="padding-top: 20px;"></div>
</div>
@endforeach
@endif


<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}




$('.add_answer').submit(function(e)
{

var answer=$(this).find('.answer').val()

e.preventDefault();
formData=$(this).serialize();
var code=formData;

$('.sendansewr').append('<p>'+answer+'</p>');
           $('#chat-scroll').animate({
            scrollTop: $('#chat-scroll').get(0).scrollHeight},10);
           $('.answer').val('');
$.post('{{ url('send-answer') }}' , code , function(data)
{
 
  
                
});


});
</script>
           </div>
         </div>
       
    </div>
    
  </div>
  
</div>
</div>

</div>


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
@endpush