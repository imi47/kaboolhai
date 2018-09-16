<!doctype html>
<html lang="en">
  <head>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pwstrength-bootstrap/2.2.1/pwstrength-bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
  </head>
  <script type="text/javascript">
  	jQuery(document).ready(function () {
    "use strict";
    var options = {};
    options.ui = {
        bootstrap4: true,
        container: "#pwd-container",
        viewports: {
            progress: ".pwstrength_viewport_progress"
        },
        showVerdictsInsideProgressBar: true
    };
    options.common = {
        debug: true,
        onLoad: function () {
            $('#messages').text('Start typing password');
        }
    };
    $(':password').pwstrength(options);
});
  </script>
  <body>
	<div class="container">
		<div class="row mt-5">
			<div class="col-lg-10 offset-lg-2">
				<form role="form" class="mb-3">
		            <div class="row" id="pwd-container">
		            	<div class="col-sm-12">
		            		<h1>Bootstrap 4 Password Strength Meter</h1><br>
		                </div>
		                <div class="col-sm-8">
		                    <div class="form-group">
		                        <label for="password">Password</label>
		                        <input type="password" class="form-control" id="password" placeholder="Password">
		                    </div>
		                </div>
		                <div class="col-sm-8 col-sm-offset-2 pt-3">
		                    <div class="pwstrength_viewport_progress"></div>
		                </div>
		            </div>
		            <div class="row">
		                <div id="messages" class="col-sm-12"></div>
		            </div>
		        </form>
			</div>
		</div>
	</div>
  </body>
</html>