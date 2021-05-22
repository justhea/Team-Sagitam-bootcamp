<!DOCTYPE html>
<html lang="en">
	<!--Hello-->
	<head>
		<!--Changed -->
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Lawyers</title>
		
		<!-- Loading third party fonts -->
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="fonts/novecento-font/novecento-font.css" rel="stylesheet" >

		<!-- Loading main css file -->
        <link href="style.css" rel="stylesheet" >
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>
		<?php
		$onPage = 'header';
		include_once('header.php')
		?>

		<!--
		<div id="site-content">
			
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
							<li class="menu-item current-menu-item"><a href="index.php">Home</a></li>
							
							<li class="menu-item"><a href="attorney.php">Attorney</a></li>
							<li class="menu-item"><a href="service.php">Service</a></li>
							<li class="menu-item"><a href="contact.php">Contact</a></li>
						</ul>
					</nav>
					<nav class="mobile-navigation"></nav>
				</div>
			</header>  .site-header -->

			<main class="main-content">
				<div class="hero">
					<div class="container">
						<div class="rows">
							<div class="col-md-8">
							<video autoplay loop class="video-background">
								<source src="Lawyer.mp4" type="video/mp4">
							</video>
							</div>
							<div class="col-md-4">
								<div class="hero-content">
									<h1 class="hero-title" style="font-size:40px;"><font face="Trebuchet MS">Justice In Words</font></h1>
									<p>W BENEDICTO LAW, JUSTICE IS WHAT WE CREATE EVERYDAY. </p>
									<p>WITH DEEPER UNDERSTANDING, GET BETTER SOLUTIONS.</p>
									<p>SIGN UP TODAY, ITS FREE!</p>
									<a href="#" class="button">Learn more</a>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- .hero-slider -->
				
				<div id="ret" class="fullwidth-block" data-bg-color="#111113">
					<div class="container">
						<div class="rows">
							<div class="col-md-8">
								<h2 style="font-size:50px;">About The Benedicto Law</h2>
								
							</div>
							<div class="col-md-4">
								
							</div>
						</div> <!-- .row -->
					</div> <!-- .container -->
				</div> <!-- .fullwidth-block -->

				<div class="fullwidth-block">
					<div class="container">
						<div class="row feature-list-section">
							<div class="col-md-4">
								<div class="feature">
									<header>
									
										<div class="feature-title-copy">
											<h2 class="feature-title">Criminal Things</h2>
											<small class="feature-subtitle">Lorem ipsum dolor sit</small>
										</div>
									</header>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias doloremque, quis, eaque minus harum modi eius veritatis consequuntur expedita impedit ad, facilis. Asperiores assumenda aperiam atque, accusamus cupiditate vero sit!</p>
									<a href="#" class="more-link">Read More</a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="feature">
									<header>
										
										<div class="feature-title-copy">
											<h2 class="feature-title">Estate Planning</h2>
											<small class="feature-subtitle">Lorem ipsum dolor sit</small>
										</div>
									</header>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias doloremque, quis, eaque minus harum modi eius veritatis consequuntur expedita impedit ad, facilis. Asperiores assumenda aperiam atque, accusamus cupiditate vero sit!</p>
									<a href="#" class="more-link">Read More</a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="feature">
									<header>
										
										<div class="feature-title-copy">
											<h2 class="feature-title">Employment Law</h2>
											<small class="feature-subtitle">Lorem ipsum dolor sit</small>
										</div>
									</header>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias doloremque, quis, eaque minus harum modi eius veritatis consequuntur expedita impedit ad, facilis. Asperiores assumenda aperiam atque, accusamus cupiditate vero sit!</p>
									<a href="#" class="more-link">Read More</a>
								</div>
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
			</footer>  .site-footer -->

		</div> <!-- #site-content -->

		

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>
