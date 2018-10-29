@extends('user/user_master_layout1') 
@section('data')

<style>

  tr.dosrch th a {
    font-size:14px;
  }

  .navbar-form button .glyphicon {
    top: 1px;
  }

  .navbar-form button {
    right: -4px;
    padding: 6px 11px !important;
}

   @media (max-width:991px) {
    #friends-dropdown, #messages-dropdown, #notifications-dropdown {
            margin-top:21px !important;
            margin-bottom:-21px !important;
        }

        #username-dropdown-toggle {
          margin-top:2px !important;
        }
        .humburger {
            margin-top:14px !important;
      }

      .searchcontainer button {
      margin-top:-56px !important;
      padding-top:15px;
    }

    #username-dropdown-toggle ul.dropdown-menu {
        top:58px !important;
      }

       .nav-white.sticky-nav .navbar-nav > .open > a {
        padding-right:14px;
      }

      #username-dropdown-toggle a {
        display:inline !important;
        padding-bottom:10px !important;
      }

      #username-dropdown-toggle ul.dropdown-menu {
        text-align:left !important;
      }

      #username-dropdown-toggle {
          margin-top:8px !important;
        }
        .humburger {
            margin-top:14px !important;
      }

      #username-dropdown-toggle ul.dropdown-menu {
        top: 37px !important;
        left: -88px !important;
      }

      .navbar-nav {
        margin-top:2px;
      }
      
      .nav-white.sticky-nav .navbar-nav > .open > a {
        margin-top: -15px;
        padding-top: 14px;
      }

      .nav-white.sticky-nav .navbar-nav > .open > a {
        margin-top:-12px;
      }

      #username-dropdown-toggle .dropdown-toggle {
        padding-top: 9px !important;
        display: inline !important;
      }
   }

   @media (min-width:991px) {
   .searchcontainer button {
      margin-top:-56px !important;
      padding-top:15px;
    }
}

   @media (max-width:768px) {
     #friends-dropdown, #messages-dropdown, #notifications-dropdown {
            margin-top:12px !important;
            margin-bottom:-12px !important;
        }

      #username-dropdown-toggle {
        margin-top:-0px !important;
      }
      .humburger {
          margin-top:8px !important;
    }
  }

  @media (max-width: 685px) {
  .sticky-nav .navbar-nav > li > .dropdown-menu, .shrink-nav .dropdown.simple-dropdown .dropdown-menu {
    top: 56px !important;
  }

  #username-dropdown-toggle .dropdown-menu {
    top: 47px !important;

  }

  tr.dosrch th a {
    font-size:12px;
  }
}

@media (max-width:320px) {
  .searchcontainer button {
    margin-top:-44px !important;
  }
}

.text-left.q {
  margin-bottom:7px;
}
</style>

  <div style="padding-top:90px;"></div>
<div class="container-fluid">
 <div class="col-md-3 hidden-sm hidden-xs">
        <div class="well" style="box-shadow: none;">
          @include('user/side_bar')
        </div>
      </div>
  <div class="col-md-9">
  
      <div class="panel panel-default">
    <div class="panel-heading text-center"><h3>My Questions</h3>
    </div>
     </div>
    <div class="row">
      <div class="col-md-6">
        <h4 class="text-left q">Qestions Available</h4> 
        <select name="question_type" onchange="question_category(this)" class="form-control pull-right">
          <option value="">All Categories</option>
          <option value="1">Lifestyle</option>
          <option value="2">Marriage</option>
          <option value="3">Finance</option>
          <option value="4">Behavioural</option>
          <option value="5">Religion</option>
          <option value="6">Personality</option>
        </select>

        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default avb_ques">
              <div class="panel-body">
                <!-- start --> 
                <div id="old-question">           
               @foreach($question as $row)
                <div class="row lin">
                  <div class="col-sm-9">

                    <p class="q_ges">{{$row->question}}</p>  
                  </div>
                  <div class="col-sm-3">
                    <a href="{{ url('add-question',$row->question_id) }}" class="ad">add</a>  
                  </div>
                </div>
                  @endforeach
                  </div>
                <!-- end -->
                <!-- start -->
                
                  
                   {{-- What is the role of religion in your life now religion in your life now? --}}<span id="category"></span>
                      
                
                 
               
                <!-- end -->
                <!-- start -->
                {{-- <div class="row lin">
                  <div class="col-sm-9">
                    <p class="q_ges">What is the role of religion in your life now religion in your life now?</p>  
                  </div>
                  <div class="col-sm-3">
                    <a href="" class="ad">add</a>  
                  </div>
                </div>
                <!-- end -->
                <!-- start -->
                <div class="row lin">
                  <div class="col-sm-9">
                    <p class="q_ges">What is the role of religion in your life now religion in your life now?</p>  
                  </div>
                  <div class="col-sm-3">
                    <a href="" class="ad">add</a>  
                  </div>
                </div>
                <!-- end -->
                <!-- start -->
                <div class="row lin">
                  <div class="col-sm-9">
                    <p class="q_ges">What is the role of religion in your life now religion in your life now?</p>  
                  </div>
                  <div class="col-sm-3">
                    <a href="" class="ad">add</a>  
                  </div>
                </div>
                <!-- end -->
                <!-- start -->
                <div class="row lin">
                  <div class="col-sm-9">
                    <p class="q_ges">What is the role of religion in your life now religion in your life now?</p>  
                  </div>
                  <div class="col-sm-3">
                    <a href="" class="ad">add</a>  
                  </div>
                </div>
                <!-- end -->
                <!-- start -->
                <div class="row lin">
                  <div class="col-sm-9">
                    <p class="q_ges">What is the role of religion in your life now religion in your life now?</p>  
                  </div>
                  <div class="col-sm-3">
                    <a href="" class="ad">add</a>  
                  </div>
                </div>
                <!-- end -->
                <!-- start -->
                <div class="row lin">
                  <div class="col-sm-9">
                    <p class="q_ges">What is the role of religion in your life now religion in your life now?</p>  
                  </div>
                  <div class="col-sm-3">
                    <a href="" class="ad">add</a>  
                  </div>
                </div>
                <!-- end -->
                <!-- start -->
                <div class="row lin">
                  <div class="col-sm-9">
                    <p class="q_ges">What is the role of religion in your life now religion in your life now?</p>  
                  </div>
                  <div class="col-sm-3">
                    <a href="" class="ad">add</a>  
                  </div>
                </div>
                <!-- end -->
                <!-- start -->
                <div class="row lin">
                  <div class="col-sm-9">
                    <p class="q_ges">What is the role of religion in your life now religion in your life now?</p>  
                  </div>
                  <div class="col-sm-3">
                    <a href="" class="ad">add</a>  
                  </div>
                </div> --}}
                <!-- end -->
              </div>
            </div>            
          </div>
        </div>    
      </div>

      <div class="col-md-6">
        <h4 class="text-left q">What questions do you want answering?</h4>

        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default avb_ques_1">
               <div class="panel-body">
                  <!-- start -->
                  @if(!empty($add_quest))
                  @foreach($add_quest as $value)
                <div class="row lin">
                  <div class="col-sm-9">
                    <p class="q_ges">{{$value->addquestion->question}}</p>  
                  </div>
                  <div class="col-sm-3">
                    <a href="{{ url('remove-question',$value->add_question_id) }}" class="ad">Remove</a>  
                  </div>
                </div>
                @endforeach
                @endif
                <!-- end -->
               </div>
            </div>
          </div>  
        </div>

      </div>
    
    </div>

  </div>
</div>
    
</div>

<br><br>


<!-- Wraper end -->
@endsection

@push('css')
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
<script src="{{ $user_assets }}/js/dropzone.js"></script>
 <link rel="stylesheet" href="{{ $user_assets }}/css/dropzone.css">

 
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



<script type="text/javascript">
  function question_category(sel)
  {
    var category=sel.value;
    $.post('{{ url('/question-category') }}' , {_token: '{{ csrf_token() }}' , category: category} , function(data)
{


$('#category').html(data);
$('#new-question').show();
$('#old-question').hide();
});
    
  }
</script>
@endpush      
   
    
</body>
</html>