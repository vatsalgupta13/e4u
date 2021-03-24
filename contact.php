<!DOCTYPE html>
<html lang="en">
	<head>

		<title>Movie Review | Contact</title>
		<link rel="stylesheet" href="style.css">

	</head>


	<body>
		

		<?php session_start(); 
		?>
		

		<div id="site-content">
			<header class="site-header">
				<div class="container">
					<a href="index.html" id="branding">
						<img height=30 width=30 src="images/video-camera.png" alt="" class="logo">
						<div class="logo-copy">
							<h1 class="site-title">E4U</h1>
							<small class="site-description">The Way to your Entertainment</small>
						</div>
					</a> 
                    <?php 
							if ($_SESSION['abc']!="vat")
								header("url=index.php");
							?>
							
					       <div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							
							<li class="menu-item "><a href="index.php">Home</a></li>
							<li class="menu-item"><a href="about.php">About</a></li>
							<li class="menu-item"><a href="review.php">Movies</a></li>
							<li class="menu-item"><a href="tvreview.php">T.V Shows</a></li>
							<li class="menu-item current-menu-item"><a href="contact.html">Contact Us</a></li>
							<li class="menu-item"><a href="logout.php">Logout</a></li>
						</ul>
		

					<div class="mobile-navigation"></div>
				</div>
			</header>
			<main class="main-content">
				<div class="container">
					<div class="page">
						<div class="breadcrumbs">
							<a href="index.html">Home</a>
							<span>Contact</span>
						</div>

						<div class="content">
							<div class="row">
								<div class="col-md-4">
									<h2>Contact</h2>
									<ul class="contact-detail">
										<li>
											<img src="images/icon-contact-map.png" alt="#">
											<address>Jaypee Institute Of Information Technology,A 10, Sector-62, Noida, U.P - 201309 </address>
										</li>
										<li>
											<img src="images/icon-contact-phone.png" alt="">
											<a href="tel:8447944871">+91 8447944871</a>
										</li>
										<li>
											<img src="images/icon-contact-message.png" alt="">
											<a href="mailto:e4uvaas@gmail.com">e4uvaas@gmail.com</a>
										</li>
									</ul>
									<div class="contact-form">
										<form action="mailto:e4uvaas@gmail.com" method="get">
										<input type="text" class="name" placeholder="name...">
										<input type="text" class="email" placeholder="email...">
										<textarea class="message" placeholder="message..."></textarea>
										<input type="submit" mailtovalue="Send Message ">
									</form>

									</div>
								</div>
								<div class="col-md-7 col-md-offset-1">
									<div class="map"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>
			<footer class="site-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-2">
							
							</div>
						</div>

							
						
					</div>
		
		
	</body>

</html>