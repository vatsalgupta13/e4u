<!DOCTYPE html>
<html lang="en">
	<head>
		
		
		<title>Movie Review</title>

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
							
							<li class="menu-item current-menu-item"><a href="index.php">Home</a></li>
							<li class="menu-item"><a href="about.php">About</a></li>
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
						<div class="row">
							<div class="col-md-9">
								<div class="slider">
									<ul class="slides">
										<li><a href="https://www.youtube.com/watch?v=28j8h0RRov4"><img src="images/Sacred Games.jpg" alt="Slide 3"></a></li>
									</ul>
								</div>
							</div>
							<br><br>
							<div class="col-md-3">
								<div class="row">
									<div class="col-sm-6 col-md-12">
										<div class="latest-movie">
											<a href="https://www.youtube.com/watch?v=Ab2YIbP5xw8"><img src="images/Suits(2).jpg" alt="Movie 1"></a>
										</div>
									</div>

									<div class="col-sm-6 col-md-12">
										<div class="latest-movie">
											<a href="https://www.youtube.com/watch?v=C8-4jMTOUJI" ><img src="images/him.jpg" alt="Movie 2"></a>
										</div>
									</div>
								</div>
							</div>
						</div> <!-- .row -->
						<div class="row">
							<div class="col-sm-6 col-md-3">
								<div class="latest-movie">
									<a href="https://www.youtube.com/watch?v=tLfLU6-9lxY"><img src="images/body.jpg" alt="Movie 3"></a>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="latest-movie">
									<a href="https://www.youtube.com/watch?v=2iVYI99VGaw"><img src="images/andha.jpg" alt="Movie 4"></a>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="latest-movie">
									<a href="https://www.youtube.com/watch?v=v5gsVRxzzI4"><img src="images/got.jpg" alt="Movie 5"></a>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="latest-movie">
									<a href="https://www.youtube.com/watch?v=_qOl_7qfPOM"><img src="images/rob.jpg" alt="Movie 6"></a>
								</div>
							</div>
						</div> <!-- .row -->
						
						<div class="row">
							<div class="col-md-4">
								<h2 class="section-title">Recent TV Series</h2>
								
								<ul class="movie-schedule">
									<li>
										<div class="date">26/08</div>
										<h2 class="entry-title"><a href="https://www.youtube.com/watch?v=tLfLU6-9lxY">Bodyguard</a></h2>
									</li>
									<li>
										<div class="date">06/07</div>
										<h2 class="entry-title"><a href="https://www.youtube.com/watch?v=28j8h0RRov4">Sacred Games</a></h2>
									</li>
									<li>
										<div class="date">16/11</div>
										<h2 class="entry-title"><a href="https://www.youtube.com/watch?v=ZNeGF-PvRHY">Mirzapur</a></h2>
									</li>
									<li>
										<div class="date">1/01</div>
										<h2 class="entry-title"><a href="https://www.youtube.com/watch?v=OfU0a-b6Iqs">McMafia</a></h2>
									</li>
								</ul> <!-- .movie-schedule -->
							</div>
							<div class="col-md-4">
								<h2 class="section-title">Upcoming Movies</h2>
								<ul class="movie-schedule">
									<li>
										<div class="date">21/12</div>
										<h2 class="entry-title"><a href="https://www.youtube.com/watch?v=Ru4lEmhHTF4">Zero</a></h2>
									</li>
									<li>
										<div class="date">29/11</div>
										<h2 class="entry-title"><a href="https://www.youtube.com/watch?v=_qOl_7qfPOM">2.0</a></h2>
									</li>
									<li>
										<div class="date">14/12</div>
										<h2 class="entry-title"><a href="https://www.youtube.com/watch?v=WDkg3h8PCVU">Aquaman</a></h2>
									</li>
									<li>
										<div class="date">13/12</div>
										<h2 class="entry-title"><a href="https://www.youtube.com/watch?v=g4Hbz2jLxvQ">Spiderman: Into the Spider-Verse</a></h2>
									</li>
								</ul> <!-- .movie-schedule -->
							</div>
							<div class="col-md-4">
								<h2 class="section-title">Just Released</h2>
								
								<ul class="movie-schedule">
									<li>
										<div class="date">08/11</div>
										<h2 class="entry-title"><a href="https://www.youtube.com/watch?v=zI-Pux4uaqM">Thugs OF Hindostan</a></h2>
									</li>
									<li>
										<div class="date">30/07</div>
										<h2 class="entry-title"><a href="https://www.youtube.com/watch?v=sN75MPxgvX8">Tumbbad</a></h2>
									</li>
									<li>
										<div class="date">18/09</div>
										<h2 class="entry-title"><a href="https://www.youtube.com/watch?v=unAljCZMQYw">Badhaai Ho</a></h2>
									</li>
									<li>
										<div class="date">08/11</div>
										<h2 class="entry-title"><a href="https://www.youtube.com/watch?v=_UOh0UX3alI">The Grinch</a></h2>
									</li>
								</ul> <!-- .movie-schedule -->
							</div>
						</div>
					</div>
				</div> <!-- .container -->
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