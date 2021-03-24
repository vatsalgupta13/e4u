<!DOCTYPE html>
<html lang="en">
	<head>
		
		<title>TV Series Review | Review</title>
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

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
							<li class="menu-item"><a href="about.php">About</a></li>
							<li class="menu-item"><a href="review.php">Movies</a></li>
							<li class="menu-item current-menu-item"><a href="tvreview.php">T.V Shows</a></li>
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
							<span>TV Series Review</span>
						</div>
						<form action="tv.php" method="post">
						<div class="filters">
							<select  name="mov" >
								<option value="choose" disabled selected> Choose Your Category</option>
								<option value="Action">Action</option>
								<option value="Drama">Drama</option>
								<option value="Fantasy">Fantasy</option>
								<option value="Sitcom">Sitcom</option>
								<option value="Adventure">Adventure</option>
								<option value="Thriller">Thriller</option>
								<option value="Crime">Crime</option>
								<option value="Mystery">Mystery</option>
								<option value="Romance">Romance</option>
								<option value="Horror">Horror</option>
								<option value="Sci-Fi">Sci-Fi</option>
								<option value="Animation">Animation</option>
								<option value="Comedy">Comedy</option>
								<option value="Family">Family</option>
								<option value="Game Show">Game Show</option>
								<option value="Talk Show">Talk Show</option>
								<option value="Sport">Sport</option>
								<option value="Reality Show">Reality Show</option>
								<option value="Historical Fiction">Historical Fiction</option>
								<option value="Epic">Epic</option>
								<option value="Novel">Novel</option>
								<option value="Fiction">Fiction</option>
								</select>		
						
							<input type=text name="year" placeholder="Choose Year">
							<input type="submit" value="Go">
						</div>
						</form>
						<div class="movie-list">
							<div class="movie">
								<figure class="movie-poster"><img src="images/stra.webp" alt="#"></figure>
								<div class="movie-title"><a href="https://www.youtube.com/watch?v=XWxyRG_tckY">Stranger Things</a></div>
								<p>It's the fall of 1984, about a year after Will Byers was found, and he has been plagued by seeing visions of the Upside Down featuring a more dangerous monster. That leads the boy to see a suspiciously friendly new doctor, with the possibility that Will's visions are the result of suffering from PTSD.</p>
							</div>
							<div class="movie">
								<figure class="movie-poster"><img src="images/sher.jpg" alt="#"></figure>
								<div class="movie-title"><a href="https://www.youtube.com/watch?v=qlcWFoNqZHc">Sherlock</a></div>
								<p>Dr. Watson, a former army doctor, finds himself sharing a flat with Sherlock Holmes, an eccentric individual with a knack for solving crimes. Together, they take on the most unusual cases.</p>
							</div>
							<div class="movie">
								<figure class="movie-poster"><img src="images/leg.jpg" alt="#"></figure>
								<div class="movie-title"><a href="https://www.youtube.com/watch?v=4SZ3rMMYBLY">Legion</a></div>
								<p>David Haller is a troubled young man who was diagnosed with schizophrenia as a child. Shuffled from one psychiatric institution to the next, in his early 30s, David met and fell in love with a beautiful and troubled fellow patient named Syd.</p>
							</div>
							<div class="movie">
								<figure class="movie-poster"><img src="images/big.jpg" alt="#"></figure>
								<div class="movie-title"><a href="single.html">The Big Bang Theory</a></div>
								<p>The lives of four socially awkward friends, Leonard, Sheldon, Howard and Raj, take a wild turn when they meet beautiful and free-spirited Penny.</p>
							</div>
							
						</div> <!-- .movie-list -->

						
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