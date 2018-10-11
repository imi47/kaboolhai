@extends('user/user_master_layout1') 
@section('data') 

<style>
  @media (max-width:991px) {
    .sticky-nav .navbar-nav > li > .dropdown-menu, .shrink-nav .dropdown.simple-dropdown .dropdown-menu {
      top:55px !important;
    }
  }

  @media (max-width:768px) {
    .sticky-nav .navbar-nav > li > .dropdown-menu, .shrink-nav .dropdown.simple-dropdown .dropdown-menu {
      top:47px !important;
    }
  }

   @media (max-width: 685px) {
  .sticky-nav .navbar-nav > li > .dropdown-menu, .shrink-nav .dropdown.simple-dropdown .dropdown-menu {
    top: 55px !important;
  }

  #username-dropdown-toggle .dropdown-menu {
    top: 47px !important;

  }
}
</style>

<div style="padding-top: 90px;"></div>
  
  <div class="container-fluid"> 
    <div class="row">
      
    <div class="col-md-3 hidden-sm hidden-xs">
         <div class="well" style="box-shadow: none;">
          @include('user/side_bar')
        </div>
      </div>
      @if(Session::has('error'))
                    <p class="alert alert-danger">{{ Session::get('error') }}</p>
                @endif
                @if(Session::has('success'))
                    <p class="alert alert-success">{{ Session::get('success') }}</p>
                @endif

      <div class="col-md-9">
        <div class="well" style="box-shadow: none;">
          <div class="about_text">
            <h2 class="text-center">Add Notes</h2>
            <p class="ptext"><table class="table">

              <form method="post" action="{{ url('save-my-notes') }}">
                {{ csrf_field() }}
                <div class="row">
                  <div class="col-md-1">
                    <label>Title*</label>
                    </div>
                  <div class="col-md-8">
                    <input required="" type="text" name="notes_title" placeholder="title" class="form-control">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-1">
                    <label>Detail*</label>
                    </div>
                  <div class="col-md-8">
                   <textarea cols="8" placeholder="detail" rows="4" name="detail" class="form-control"></textarea>
                  </div>
                </div>
                 <div class="row">
                  <div class="col-md-8"></div>
                <div class="col-md-1">
                  <button class="btn btn-success">save</button>
                </div>
              </div>
              <br>
              </form>
              <h2 class="text-center">My Notes</h2>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Detail</th>
      <th scope="col">Date/Time</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	@if(count($show_notes))
  	@foreach($show_notes as $key=>$row)
    <tr>
      <th>{{ $key }}</th>
      <td>{{ $row->notes_title }}</td>
      <td>{{ $row->detail }}</td>
      <td>{{ $row->created_at }}</td>

      

      <td><a href="javascript:;" title="Edit" data-toggle="modal" data-target="#{{ $row->notes_id }}">Edit</a>|<a onclick="return confirm('Are you sure you want to delete this record?');" href="{{ url('delete-notes',$row->notes_id) }}" title="delete">Delete</a></td>
    </tr>
    <div class="modal fadeInDown" id="{{ $row->notes_id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="false" >
                        
    <div class="modal-dialog modal-md" style="margin-top: 100px;">
      <div class="modal-content">
      
        <div class="modal-header">
          <h3>Edit Notes</h3>
        </div>
        <div class="modal-body">
         
                <form method="POST" action="{{ url('edit-notes') }}">
            <div class="row">
               <div class="col-md-12">
                  {{ csrf_field() }}
                  <div class="row">
                  <div class="col-md-1">
                    <label>Title*</label>
                    </div>
                  <div class="col-md-8">
                    <input required="" value="{{ $row->notes_title }}" type="text" name="notes_title" placeholder="title" class="form-control">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-1">
                    <label>Detail*</label>
                    </div>
                  <div class="col-md-8">
                   <textarea cols="8" placeholder="detail" rows="4" name="detail" class="form-control">{{ $row->detail }}</textarea>
                  </div>
                </div>
                  <input type="hidden" value="{{ $row->notes_id }}" name="notes_id"   placeholder="Enter Answer">
                  
               
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
      @endforeach
      @else
      <tr>
          <p class="alert alert-danger">Empty result</p>
          </tr>
         @endif
    
  </tbody>
</table>
{{ $show_notes->links() }}
          </div> 
        </div>
      </div>

      
    </div>
  </div>

<br><br>
<!-- Wraper end -->
@endsection

@push('css')
<link rel="shortcut icon" href="{{ $user_assets }}/images/favicon.png">
    <link rel="stylesheet" href="{{ $user_assets }}/css/animate.css" />
<!-- bootstrap -->
<link rel="stylesheet" href="{{ $user_assets }}/css/chat.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
  
  {{-- <script type="text/javascript" src="{{ $user_assets }}/js/jquery-2.1.1.min.js"></script> --}}
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
<script type="">
  function edit_note()
  {

  }
</script>
@endpush