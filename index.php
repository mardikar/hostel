<html>
	<head>
		<title>VJTI Hostel</title>
		<link rel="stylesheet" href="css/style.css" />
		<link href='https://fonts.googleapis.com/css?family=Alegreya+Sans:300,400|Source+Sans+Pro:400,300' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" href="css/normalize.css">

		<link rel="stylesheet" href="css/rdb.css">

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<script src="js/jquery.min.js"></script>
		<script src="js/login.js"></script>
		<script src="js/modernizr.custom.js"></script>
		<!---tabs-->
		<script type="text/javascript" src="js/JFCore.js"></script>
		<script type="text/javascript" src="js/validation.js"></script>

		<script type="text/javascript">
			(function() {
				JC.init({
					domainKey : ''
				});
			})();

			$(window).load(function() {
				$("input[id='blah']").click(function() {
					$("input[id='my_file']").click();
				});
			});
		</script>

	</head>
	<body>

		<div class="wrap">
			<div class="main">
				<div class="nav">
					<div class="top-nav">
						<ul class="menu2">
							<li>
								<a  class="nav-icon" href=""> </a>

							</li>
						</ul>
					</div>

					<div class="text">
						<h2>Welcome</h2>
					</div>

					<!-- start login_box -->
					<div class="login_box">
						<div id="loginContainer">

							<a href="#" id="loginButton" class=""><span> </span></a>

							<div id="loginBox" style="display: none;">
								<form id="loginForm" action = "login.php" method="post">

									<fieldset id="body">
										<fieldset>
											<input type="text"   name="lemail" id="lemail" placeholder="Username"  required>
											<input type="password"  name="lpassword" id="lpassword" placeholder="Password" required>
										</fieldset>

										<input type="submit" id="login" value="Sign in">
										<label for="checkbox"><i><a href="">Lost Password ?</a></i></label>
									</fieldset>
								</form>
							</div>
						</div>
						<div class="clear"></div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="clear"></div>
				<form class="form" action="signup.php"   method="post" onsubmit="return call();" enctype='multipart/form-data'>

					<div class="camera">
						<input type="file" id="my_file"  name="abc" class="abc" onchange="previewFile()" style="display:none;">
						<div class="image">
							<input id="blah" type="image" src="images/camera.png" width="100px">
							<p>
								Your Photo
							</p>

						</div>
					</div>
					<div class="clear"></div>

					<div class="row">
						<div class="grid_12 columns">
							<div class="tab style-1">
								<ul>
									<div class="control-group">
										<h2>Gender</h2>

										<label class="control control--radio">Male
											<input type="radio" name="radio" checked="checked" value="male"/>
											<div class="control__indicator"></div> </label>

										<label class="control control--radio">Female
											<input type="radio" name="radio" value="female"/>
											<div class="control__indicator"></div> </label>

									</div>

									<li class="active">

										<input type="text" class="textbox" name="cid" id="cid" placeholder="College ID"   required>
										<div class="dataerror">
											<p id="error0"></p>
										</div>

										<input type="text" class="textbox" name="fname" id="fname" placeholder="Full Name"   required>
										<div class="dataerror">
											<p id="error1"></p>
										</div>

										<input type="text" class="textbox" name="college" id="college"placeholder="College"  required>
										<div class="dataerror">
											<p id="error2"></p>
										</div>

										<input type="text" class="textbox" name="branch" id="branch" placeholder="Branch/Field"   required>
										<div class="dataerror">
											<p id="error3"></p>
										</div>

										<input type="text" class="textbox" id="email" name="email" placeholder="Email Address"  required>
										<div class="dataerror">
											<p id="error4"></p>
										</div>

										<input type="password" class="textbox" name="password" id="password" placeholder="password" onkeyup="CheckPasswordStrength(this.value)" required>
										<div class="dataerror">
											<p id="error5" ></p>
										</div>

										<input type="password" class="textbox" name="confirm" id="confirm" placeholder="confirm password"  required>
										<div class="dataerror">
											<p id="error6"></p>
										</div>

										<input name="submit" type="submit" value="Create Account" >
										<div class="dataerror">
											<p id="error7"></p>
										</div>

									</li>
								</ul>
							</div>
						</div>
					</div>

				</form>

			</div>
		</div>

		<div class="footer">
			<p>
				By registering,I accept the chauvnism of
				<br>
				<b>Mr.Saurabh M. And Mr.Akash J.</b>
			</p>
		</div>

		<div class="clear"></div>
	</body>
</html>