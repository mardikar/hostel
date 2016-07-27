<?php
include ("session.php");
?>
<!DOCTYPE html>
<html lang="en">

	<head>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="css/material.css">
		<link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">

		<script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
		<script type="text/javascript" src="https://code.jquery.com/jquery-1.2.6.pack.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

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

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>VJTI Hostel
			</title>

		<!-- Bootstrap Core CSS -->
		<link href="about/css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="about/css/modern-business.css" rel="stylesheet">

		<!-- Custom Fonts -->
		<link href="about/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>

	<body>

		<!-- Navigation -->
			<header class="header-fixed">

	<div class="header-limiter">

		<h1>VJTI Hostel</h1>

		<nav>
			<a href="about.php" class="selected">About</a>
			<a href="home.php" >Home</a>
			<button id="show-dialog" type="button" class="mdl-button" style="color: white;">
							Compose Story
						</button>
						<a id="userdetails" class="mdl-navigation__link" href=""><?php echo($_SESSION['login_user']); ?></a>
			<a href="logout.php">Logout</a>

			
		</nav>

	</div>

</header>

		<!-- Page Content -->
		<div class="container">

			<!-- Page Heading/Breadcrumbs -->
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">About </h1>
					<ol class="breadcrumb">
						<li>
							<a href="index.php">Home</a>
						</li>
						<li class="active">
							About
						</li>
					</ol>
				</div>
			</div>
			<!-- /.row -->

			<!-- Intro Content -->
			<div class="row">
				<div class="col-md-6">
					<img class="img-responsive" src="images/hostel.jpg" alt="">
				</div>
				<div class="col-md-6">
					<h2>Share Your Memories!</h2>
					<p>
						Veermata Jijabai Technological Institute (VJTI) is an engineering college located in Mumbai, Maharashtra, India, and one of the oldest engineering colleges in Asia. Founded in 1887 and formerly known as the Victoria Jubilee Technical Institute, it adopted its present name in 1998.[1] VJTI is an academically and administratively autonomous institute, however it is a part of the University of Mumbai and its degrees and diplomas are issued by the university. The institute is financially supported by the Government of Maharashtra.
					</p>
					<p>
						After being awarded academic and administrative autonomy in 2004, VJTI became operational under the administration of a Board of Governors.[2] VJTI is also the Central Technical Institute of Maharashtra State. The institute trains students in engineering and technology at the certificate,[3] diploma, degree, post-graduate and doctoral levels.
					</p>
					
				</div>
			</div>
			<!-- /.row -->

			<!-- Team Members -->
			<div class="row">
				<div class="col-lg-12">
					<h2 class="page-header">Our Team</h2>
				</div>
				<div class="col-md-4 text-center">
					<div class="thumbnail">
						<img class="img-responsive" src="images/sm.jpg" alt="">
						<div class="caption">
							<h3>Saurabh Mardikar
							<br>
							<small>Senior Developer</small></h3>
							<p>
								Man himself, Saurabh Mardikar !
							</p>
							<ul class="list-inline">
								<li>
									<a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
								</li>
								
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4 text-center">
					<div class="thumbnail">
						<img class="img-responsive" src="images/aj.jpg" alt="">
						<div class="caption">
							<h3>Akash Janjal
							<br>
							<small>Senior Developer</small></h3>
							<p>
								Born in Lihakhedi, but now he has his, his own website, what can we say about him?!?!
							</p>
							<ul class="list-inline">
								<li>
									<a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
								</li>
								
							</ul>
						</div>
					</div>
				</div>
							</div>
			<!-- /.row -->

			<!-- Our Customers -->
			<div class="row">
				<div class="col-lg-12">
					<h2 class="page-header">Gallery</h2>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6">
					<img class="img-responsive customer-img" src="images/img1.jpg" height="300" width="500" alt="">
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6">
					<img class="img-responsive customer-img" src="images/img2.jpg" height="300" width="500" alt="">
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6">
					<img class="img-responsive customer-img" src="images/img3.jpg" height="300" width="500" alt="">
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6">
					<img class="img-responsive customer-img" src="images/img4.jpg" height="300" width="500" alt="">
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6">
					<img class="img-responsive customer-img" src="images/img5.jpg" alt="">
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6">
					<img class="img-responsive customer-img" src="http://placehold.it/500x300" alt="">
				</div>
			</div>
			<!-- /.row -->

			<hr>

			<!-- Footer -->
			<footer>
				<div class="row">
					<div class="col-lg-12">
						<p>
							Copyright &copy; D202 VJTI Hostel 2016
						</p>
					</div>
				</div>
			</footer>

		</div>
		<!-- /.container -->

		<!-- jQuery -->
		<script src="about/js/jquery.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="about/js/bootstrap.min.js"></script>

	</body>

</html>
