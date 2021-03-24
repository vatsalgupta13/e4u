<!DOCTYPE html>
<html lang="en">
	<head>
			
		<title>Movie Review | About</title>

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
							
							<li class="menu-item"><a href="index.php">Home</a></li>
							<li class="menu-item current-menu-item"><a href="about.php">About</a></li>
							<li class="menu-item"><a href="review.php">Movies</a></li>
							<li class="menu-item"><a href="tvreview.php">T.V Shows</a></li>
							<li class="menu-item"><a href="contact.php">Contact Us</a></li>
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
							<span>About us</span>
						</div>

						<div class="row">
							<div class="col-md-4">
								<figure><img src="images/ee.png" alt="figure image"></figure>
							</div>
							<div class="col-md-8">
								<p class="leading">About E4U</p>
								<p>Everyone has a right to entertainment, so we at E4U aim to take you one step closer to realising this right.This website aims to give you information,honest ratings about movies and television shows.If you want to know which movie to watch next or which show to binge watch, then this is the right place for you. 
    	<br><br>
							</div>
						</div>

						<div class="row">
							<div class="col-md-9">
								
								
							</div>
							<div class="col-md-3">
								
								<ul class="arrow">
									
								</ul>
							</div>
						</div> <!-- .row -->
						
						<h2 class="section-title">Our Team</h2>
						<div class="row">

							<div class="col-md-3">
								<div class="team">
									<figure class="team-image"><img src="images/ananya.jpeg" alt=""></figure>
									<h2 class="team-name">Ananya Sharma</h2>
									<small class="team-title">Co-founder</small>
								</div>
							</div>
							<div class="col-md-3">
								<div class="team">
									<figure class="team-image"><img src="images/vatsal.jpeg" alt=""></figure>
									<h2 class="team-name">Vatsal Gupta</h2>
									<small class="team-title">Co-founder</small>
								</div>
							</div>
							<div class="col-md-3">
								<div class="team">
									<figure class="team-image"><img src="images/shruti.jpeg" alt=""></figure>
									<h2 class="team-name">Shruti Gupta</h2>
									<small class="team-title">Co-founder</small>
								</div>
							</div>
							<div class="col-md-3">
								<div class="team">
									<figure class="team-image"><img src="images/arjav.jpeg" alt=""></figure>
									<h2 class="team-name">Arjav Jain</h2>
									<small class="team-title">Co-founder</small>
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