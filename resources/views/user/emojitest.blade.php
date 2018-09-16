<!doctype html>
<html>
<head>
  <title>jQuery Emoji Picker Demo</title>
  <link rel="stylesheet" type="text/css" href="{{ $user_assets }}/css/jquery.emojipicker.css">

  <script type="text/javascript" src="{{ $user_assets }}/js/jquery.emojipicker.js"></script>

  <!-- Emoji Data -->
  <link rel="stylesheet" type="text/css" href="{{ $user_assets }}/css/jquery.emojipicker.tw.css">
  <script type="text/javascript" src="{{ $user_assets }}/js/jquery.emojis.js"></script>

  <script type="text/javascript">
    $(document).ready(function(e) {

      $('#input-default').emojiPicker();

      // $('#input-custom-size').emojiPicker({
      //   width: '300px',
      //   height: '200px'
      // });

      // $('#input-left-position').emojiPicker({
      //   position: 'left'
      // });

      // $('#create').click(function(e) {
      //   e.preventDefault();
      //   $('#text-custom-trigger').emojiPicker({
      //     width: '300px',
      //     height: '200px',
      //     button: false
      //   });
      // });

      // $('#toggle').click(function(e) {
      //   e.preventDefault();
      //   $('#text-custom-trigger').emojiPicker('toggle');
      // });

      // $('#destroy').click(function(e) {
      //   e.preventDefault();
      //   $('#text-custom-trigger').emojiPicker('destroy');
      // })

      // // keyup event is fired
      // $(".emojiable-question, .emojiable-option").on("keyup", function () {
      //   //console.log("emoji added, input val() is: " + $(this).val());
      // });

    });
  </script>

  <style type="text/css">
    body {background:#888;}
    form {margin:200px 0 0 0; text-align:center;}
    input {width:400px; height:30px;}
    input,textarea,button {padding:5px 10px; font-family:"Helvetica Neue", "Helvetica", "Arial", sans-serif; font-size:24px; font-weight:300; outline:none; border:none;}
    #emojiPickerWrap {margin:10px 0 0 0;}
    .field { padding: 20px 0; }
    textarea { width: 400px; height: 200px; }
  </style>

</head>
<body>
  <!-- &#x1F335; -->
  <form>

    {{-- <button id="create">create</button>

    <button id="toggle">toggle</button>

    <button id="destroy">destroy</button> --}}

   {{--  <div class="field">
      <textarea id="text-custom-trigger" class="emojiable-question" placeholder="Your Question"></textarea>
    </div> --}}

    <div class="field">
      <input type="text" id="input-default" class="emojiable-option" placeholder="Default">
    </div>

    {{-- <div class="field">
      <input type="text" id="input-custom-size" class="emojiable-option" placeholder="Custom Size">
    </div>

    <div class="field">
      <input type="text" id="input-left-position" class="emojiable-option" placeholder="Position Left">
    </div> --}}

  </form>

</body>
</html>
