@extends('user/master_layout') 
@section('data')


  <div class="col-md-9">
    

    <div class="row">
    <h2 class="dashboard-h2 text-center mq">My Questions</h2>
    
      <div class="col-md-6">
        <h4 class="text-left q">Qestions Available</h4> 
        <select name="" class="form-control pull-right">
          <option value="">All Categories</option>
          <option value="">Lifestyle</option>
          <option value="">Marriage</option>
          <option value="">Finance</option>
          <option value="">Behavioural</option>
          <option value="">Religion</option>
          <option value="">Personality</option>
        </select>

        <div class="row">
          <div class="col-md-12">
            <div class="avb_ques">
              <!-- qustion block start here -->
              @foreach($question as $row)
              <div class="ques_block">
                <div class="ques_area">
                  <p class="q_ges">{{$row->question}}</p>
                </div>
                <div class="btn_area">
                  <a href="{{ url('add-question',$row->question_id) }}" class="pull-right">add</a>
                </div>
              </div>
              <div class="lne"></div>
              @endforeach
            <!-- end question block -->

            <!-- qustion block start here -->
             {{--  <div class="ques_block">
                <div class="ques_area">
                  <p class="q_ges">What is the role of religion in your life now religion in your life now?</p>
                </div>
                <div class="btn_area">
                  <a href="" class="pull-right">add</a>
                </div>
              </div>
              <div class="lne"></div>
            <!-- end question block -->

            <!-- qustion block start here -->
              <div class="ques_block">
                <div class="ques_area">
                  <p class="q_ges">What is the role of religion in your life now religion in your life now?</p>
                </div>
                <div class="btn_area">
                  <a href="" class="pull-right">add</a>
                </div>
              </div>
              <div class="lne"></div>
            <!-- end question block -->

            <!-- qustion block start here -->
              <div class="ques_block">
                <div class="ques_area">
                  <p class="q_ges">What is the role of religion in your life now religion in your life now?</p>
                </div>
                <div class="btn_area">
                  <a href="" class="pull-right">add</a>
                </div>
              </div>
              <div class="lne"></div>
            <!-- end question block -->

            <!-- qustion block start here -->
              <div class="ques_block">
                <div class="ques_area">
                  <p class="q_ges">What is the role of religion in your life now religion in your life now?</p>
                </div>
                <div class="btn_area">
                  <a href="" class="pull-right">add</a>
                </div>
              </div>
              <div class="lne"></div>
            <!-- end question block -->

            <!-- qustion block start here -->
              <div class="ques_block">
                <div class="ques_area">
                  <p class="q_ges">What is the role of religion in your life now religion in your life now?</p>
                </div>
                <div class="btn_area">
                  <a href="" class="pull-right">add</a>
                </div>
              </div>
              <div class="lne"></div>
            <!-- end question block -->

            <!-- qustion block start here -->
              <div class="ques_block">
                <div class="ques_area">
                  <p class="q_ges">What is the role of religion in your life now religion in your life now?</p>
                </div>
                <div class="btn_area">
                  <a href="" class="pull-right">add</a>
                </div>
              </div>
              <div class="lne"></div>
            <!-- end question block -->

            <!-- qustion block start here -->
              <div class="ques_block">
                <div class="ques_area">
                  <p class="q_ges">What is the role of religion in your life now religion in your life now?</p>
                </div>
                <div class="btn_area">
                  <a href="" class="pull-right">add</a>
                </div>
              </div>
              <div class="lne"></div>
            <!-- end question block -->

            <!-- qustion block start here -->
              <div class="ques_block">
                <div class="ques_area">
                  <p class="q_ges">What is the role of religion in your life now religion in your life now?</p>
                </div>
                <div class="btn_area">
                  <a href="" class="pull-right">add</a>
                </div>
              </div>
              <div class="lne"></div> --}}
            <!-- end question block -->
            </div>            
          </div>
        </div>    
      </div>

      <div class="col-md-6">
        <h4 class="text-left q">What questions do you want answering?</h4>

        <div class="row">
          <div class="col-md-12">
            <div class="avb_ques">
               <!-- qustion block start here -->
              <div class="ques_block">
                <div class="ques_area">
                  <p class="q_ges">What is the role of religion in your life now religion in your life now?</p>
                </div>
                <div class="btn_area">
                  <a href="" class="pull-right">remove</a>
                </div>
              </div>
              <div class="lne"></div>
            <!-- end question block -->
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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="{{ $user_assets }}/jquery.min2.js">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" href="{{ $user_assets }}/hover-min2.css">
  <link rel="stylesheet" href="{{ $user_assets }}/css/style3.css"/>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="{{ $user_assets }}/css/owl.carousel2.css" />  @endpush 

@push('js')
<script type="text/javascript">
   
</script>
@endpush      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
</body>
</html>