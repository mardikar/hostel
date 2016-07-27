<?php
include ("session.php");
require_once ("config.php");
$db_handle = new ConfigController();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Registration form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
              	        <link rel="stylesheet" type="text/css" href="css/selectbox.css" />

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />

    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
  <!-- Compiled and minified CSS -->

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/material.css">
		<link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">

		<script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
		<script type="text/javascript" src="https://code.jquery.com/jquery-1.2.6.pack.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<style>
		.preferences div, .group label {
			float: left;
			clear: none;
			padding-right: 16px;
		}

	</style>
</head>
<body>


	<header class="header-fixed">

	<div class="header-limiter">

		<h1>Welcome,</h1>

		<nav>
			<a href="about.php" >About</a>
			<a href="admission.php" class="selected">Admission</a>
			<a href="home.php" >Home</a>
			<button id="show-dialog" type="button" class="mdl-button" style="color: white;">
							Compose Story
						</button>
						<a id="userdetails" class="mdl-navigation__link" href=""><?php echo($_SESSION['login_user']); ?></a>
			<a href="logout.php">Logout</a>

			
		</nav>

	</div>
<script >
	$(document).ready(function() {

		$("input[type='radio']").click(function() {
			if (document.getElementById("seater2").checked) {
				document.getElementById("id2").disabled = true;
				document.getElementById("pwd2").disabled = true;
				document.getElementById("pref1").innerHTML = '<?php include('select2.php')?>';
				document.getElementById("pref2").innerHTML = '<?php include('select2.php')?>';
				document.getElementById("pref3").innerHTML = '<?php include('select2.php')?>';
				document.getElementById("pref4").innerHTML = '<?php include('select2.php')?>';
				document.getElementById("pref5").innerHTML = '<?php include('select2.php')?>';


			} else {
				document.getElementById("id2").disabled = false;
				document.getElementById("pwd2").disabled = false;
				document.getElementById("pref1").innerHTML = '<?php include('select.php')?>';
				document.getElementById("pref2").innerHTML = '<?php include('select.php')?>';
				document.getElementById("pref3").innerHTML = '<?php include('select.php')?>';
				document.getElementById("pref4").innerHTML = '<?php include('select.php')?>';
				document.getElementById("pref5").innerHTML = '<?php include('select.php')?>';
				
			}
		});

	});
</script>
</header>


<div class="page-header">
    <h1 style="margin-left: 25%">Make your group</h1>
</div>


<!-- Registration form - START -->
<div class="container" >
    <div class="row">
        <form role="form" action="adm.php" method="post">
            <div class="col-lg-6">
                <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>
                <div class="group">
   	                <label>Select:</label>

      				<input type="radio"  id="seater2" name="seater" value="true">2 seater
      				<input type="radio" id="seater3"  name="seater"  value="false">3 seater
    			</div>

                <div class="partner1">
                <h3 style="margin-top: 64px;">Partner 1</h3> 
                <div class="form-group">
                    <label for="InputName">College ID</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="id1" id="id1" placeholder="Enter ID" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Enter Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="pwd1" name="pwd1" placeholder="Enter Password" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
              </div>
               <div class="partner1">
                <h3>Partner 2</h3> 
                <div class="form-group">
                    <label for="InputName">College ID</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="id2" id="id2" placeholder="Enter ID" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Enter Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="pwd2" name="pwd2" placeholder="Enter Password" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
              </div>
				<div class="preferences" >
			<div>
				<h6>Preference 1</h6>

				<select class="option" name="pref1" id="pref1" required>
					<script>
						if (document.getElementById("seater2").checked) {
						} else {
							
						}
					</script>
					
				</select>
			</div>
			<!-- End Preference -->
			<div>
				<h6>Preference 2</h6>

				<select class="option" name="pref2" id="pref2" required>
					
				</select>
			</div>
			<!-- End Preference -->
			<div>
				<h6>Preference 3</h6>
				<select class="option" id="pref3" name="pref3" required>
					
				</select>
			</div>
			<!-- End Preference -->
			<div>
				<h6>Preference 4</h6>
				<select class="option" id="pref4" name="pref4" required>
					
				</select>
			</div>
			<!-- End Preference -->
			<div>
				<h6>Preference 5</h6>
				<select class="option" id="pref5" name="pref5" required>
					
				</select>
			</div>
			<!-- End Preference -->


		</div>

                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right" style="margin-top: 160px;">
            
            </div>
            
        </form>
        
    </div>
</div>
<!-- Registration form - END -->


</body>
<script>
	$(document).ready(function() {

		var showHeaderAt = 150;

		var win = $(window),
		    body = $('body');

		// Show the fixed header only on larger screen devices

		if (win.width() > 600) {

			// When we scroll more than 150px down, we set the
			// "fixed" class on the body element.

			win.on('scroll', function(e) {

				if (win.scrollTop() > showHeaderAt) {
					body.addClass('fixed');
				} else {
					body.removeClass('fixed');
				}
			});

		}

	});

</script>

</html>