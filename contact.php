<!DOCTYPE html>
<html lang="en">
	<!--Changed -->
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Lawyers | Contact</title>
		
		<!-- Loading third party fonts -->
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="fonts/novecento-font/novecento-font.css" rel="stylesheet" >

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>
	<?php
		$onPage = 'contact';
		include_once('header.php')
		?>
		<!--<div id="site-content">
			
			<header class="site-header">
				<div class="container">
					<a href="index.php" id="branding">
						<img src="images/logo.png" alt="Company Name" class="logo" width="100">
						<div class="branding-copy">
							<h1 class="site-title" style="font-size:60px;">Benedicto Law</h1>
							<small class="site-description">Justice In Words</small>
						</div>
					</a>

					<nav class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item"><a href="index.php">Home</a></li>
							
							<li class="menu-item"><a href="attorney.php">Attorney</a></li>
							<li class="menu-item"><a href="service.php">Service</a></li>
							<li class="menu-item current-menu-item"><a href="contact.php">Contact</a></li>
						</ul>
					</nav>
					<nav class="mobile-navigation"></nav>
				</div>
			</header> site-header --> -->

			<main class="main-content">
				
				<div class="fullwidth-block content">
					<div class="container">
						<h2 class="entry-title">Omnis iste natus error sit voluptatem doloremque laudantium totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi architecto</h2>

						<div class="row contact-info">
							<div class="col-md-6">
								<div class="map-container">
									<div class="map"></div>
									<div class="row">
										<div class="col-md-4">
											<address>
												<strong>Address</strong>
												<p>Company Name INC. <br>290-2912 Oits Ave <br>Bronx, NY 10465</p>
											</address>
										</div>
										<div class="col-md-8">
											<div class="contact">
												<strong>Contact</strong>
												<p>
													<a href="tel:532930098891">(532) 930 098 891</a>
													<a href="mailto:office@companyname.com">office@companyname.com</a> <br>
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-5 col-md-offset-1">
								<form action="#" class="contact-form">
									<input type="text" id="name" placeholder="Name...">
									<input type="text" id="email" placeholder="Email...">
									<input type="text" id="website" placeholder="Website...">
									<textarea name="" id="message" placeholder="Message..."></textarea>
									<div class="text-right">
										<input type="submit" value="Send message">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>

			</main> <!-- .main-content -->
<?php
				include_once('footer.php')
				?>
<!--
			<footer class="site-footer">
				<div class="container">
					<div class="subscribe-form">
						<form action="#">
							<label for="#">
								<span>Do you want to get news?</span>
								<span>Join our news letter</span>
							</label>
							<div class="control">
								<input type="text" placeholder="Enter your email to subscribe...">
								<button type="submit"><img src="images/icon-envelope.png" alt=""></button>
														</form>
							</div>
					</div>
					<div class="social-links">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
					</div>
					<div class="copy">
						<p>Copyright 2014 Company name. Designed by Themeezy. All rights reserved.</p>
					</div>
				</div>
			</footer> .site-footer -->
		</div> <!-- #site-content -->

		

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>
