@extends('user/user_master_layout1') 
@section('data') 
    <div class="col-md-6">
 
    <div class="middle">
     
       @if(Session::has('error'))
                    <p class="alert alert-danger">{{ Session::get('error') }}</p>
                @endif
                @if(Session::has('success'))
                    <p class="alert alert-success">{{ Session::get('success') }}</p>
                @endif
     <hr style="margin-top: 2px;">
      <div class="row">
        
        @if($user_search)
        @foreach($user_search as $row1)
        <div class="col-md-4">
        <a href="{{url('user-detail',$row1->id)}}"><img src="{{ $user_assets }}/images/banner1.jpg" class="img-responsive"  alt="Cinque Terre"></a>
        
        </div>

        <div class="col-md-4">
         <div class="row">
           <div class="col-md-12">
             <span>Name:<a href="{{url('user-detail',$row1->id)}}">{{ $row1->firstname }} </a></span>
           </div>
         </div>
        

        <hr style="margin-top: 2px;">
          <div class="row" style="margin-top: -15px;">
           <div class="col-md-12">
           
             <span>Age:{{ $row1->age }} Year</span>
             
            
           </div>
         </div>
         
        
        <hr style="margin-top: 2px;">
        <div class="row" style="margin-top: -15px;">
           <div class="col-md-12">
            
             <span>Location:{{ $row1->city_name }}</span>
              
           </div>
         </div>
          <hr style="margin-top: 2px;">
        <div class="row" style="margin-top: -15px;">
           <div class="col-md-12">
            
             <span><a id="{{ $row1->id }}" class="short"> Favorite</a></span>
              
           </div>
         </div>
           <div class="row" style="margin-top: -15px; display: none">
           <div class="col-md-12">
            
             <span><a id="{{ $row1->id }}" class="short"> un Favorite</a></span>
              
           </div>
         </div>
        <hr style="margin-top: 2px;">
          
          
        </div>
        <div class="col-md-4">
          <div class="row" class="block_user">
            <div class="col-md-12"> 
          <a id="{{ $row1->fk_user_id }}" class="block"><img src="{{ $user_assets }}/kabool_hai_icons/blocked-list.png"> Block</a>
          </div>
          </div>
          <!-- <hr style="margin-top: 2px;"> -->
          <div class="row" class="active_user" style="display: none">
            <div class="col-md-12"> 
          <a id="{{ $row1->fk_user_id }}" class="block"><img src="{{ $user_assets }}/kabool_hai_icons/blocked-list.png"> Active</a>
          </div>
          </div>
          <hr style="margin-top: 2px;">
          <div class="row" style="margin-top: -15px;">
            <div class="col-md-12"> 

           <a href="#"  data-toggle="modal" data-target=".{{ $row1->fk_user_id }}"><img src="{{ $user_assets }}/kabool_hai_icons/message.png"> Send Message</a>
          </div>
          </div>
          <hr style="margin-top: 2px;">
          <div class="row" style="margin-top: -15px;">
            <div class="col-md-12"> 
          <a href="{{ url('my-photo') }}"><img src="{{ $user_assets }}/kabool_hai_icons/picture.png"> Share Photo</a>
          </div>
          </div>
          <hr style="margin-top: 2px;">
          <div class="row" style="margin-top: -15px;">
            <div class="col-md-12"> 
         <a href="#"><img src="{{ $user_assets }}/kabool_hai_icons/invite.png"> Invite Friends</a>
          </div>
          </div>
          <hr style="margin-top: 2px;">
          <div class="row" style="margin-top: -15px;">
            <div class="col-md-12"> 
           <a href="#"><img src="{{ $user_assets }}/kabool_hai_icons/invite.png"> Your notes</a>
          <hr style="margin-top: 2px;">
          </div>
          </div>
        </div>
      

          <div  class="modal fade bs-example-modal-sm  {{ $row1->fk_user_id }} " id="m_{{$row1->fk_user_id}}" tabindex="-1" role="dialog" aria-hidden="false" style="margin-top: 100px;">

<div class="modal-dialog modal-sm">
  <div class="modal-content">
    <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                                </button>
      <h4 class="modal-title" id="myModalLabel2">Send message</h4>
    </div>
    <div class="modal-body">
      <form  class="user_message">
      {{ csrf_field() }}
       
          <div class="form-group">
            <label class="control-label col-md-12 col-sm-12 col-xs-12" for="brand-name">Enter Your message<span class="required">*</span>
                      </label>
            <div class="col-md-12">
             <textarea name="send_message" id="send_message"></textarea>
              <input type="hidden" name="receiver_id" value="{{ $row1->fk_user_id }}">
        <input type="hidden" name="sender_id" value="{{ Session::get('user_id') }}">
               <button  class="btn btn-primary step pull-right" type="submit">Submit</button>
            </div>
          </div>
          <div>&nbsp;</div>
         

            
               
               
             
          

      </form>


    </div>
  </div>
</div>
 </div> 
   
        @endforeach
        
       @endif
      </div>
 
          </div>
          </div>


  
 <!-- </div> -->

<!-- Wraper end -->
<script type="text/javascript">
 

   $('.user_message').submit(function(e)
 {
                            e.preventDefault();
                            formData=$(this).serialize();
 
                            var data=formData;
                   

                           $.post('{{ url('/send-message') }}' , data , function(data)
                           {
                            if(data == 'false')

                            {
                              alert('invalid input!');
                            }
                            else
                            {
                              
                               alert('Your message has been submited successfully');
                               // var hide=data;
                               $('#m_'+data).modal('hide');
                              // window.location.href = '{{ url('profile') }}';
                            }
                                              
                                              
                                          });

                            
                            });

   $('body').on("click",".short",function()
   {
  // alert();
       var id = $(this).attr("id");
        // alert(id);
        $.post('{{ url('/short-list') }}' , {_token: '{{ csrf_token() }}' , id: id} , function(data){
                                             
                                             
                                              if(data=='success')
                                              {
                                              alert('success');
                                              }
                                              else
                                              {
                                                alert('This user already shortlisted');
                                              }

});
        });

         $('body').on("click",".block",function()
   {
  
       var id = $(this).attr("id");
      
        $.post('{{ url('/block-user') }}' , {_token: '{{ csrf_token() }}' , id: id} , function(data){
                                             
                                             
                                              if(data=='success')
                                              {
                                              alert('success');
                                              }
                                              else
                                              {
                                                alert('This user already blocked');
                                              }

});
});
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