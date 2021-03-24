<!DOCTYPE html>
<html lang="en">
	<head>
		
		<title>Movie Review | Review</title>
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<link rel="stylesheet" href="style.css">
		

	</head>


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
							<li class="menu-item current-menu-item"><a href="review.php">Movies</a></li>
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
							<span>Movie Review</span>
						</div>
						<form action="movie.php" method="post">
						<div class="filters">
							<select  name="mor" >
								<option value="choose" disabled selected> Choose Your Category</option>
								<option value="Action">Action</option>
								<option value="Drama">Drama</option>
								<option value="Fantasy">Fantasy</option>
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
								<option value="Sport">Sport</option>
								<option value="Historical Fiction">Historical Fiction</option>
								<option value="Epic">Epic</option>
								<option value="Novel">Novel</option>
								<option value="Fiction">Fiction</option>
								</select>		
						
							<input type=text name="yea" placeholder="Choose Year">
							<input type="submit" value="Go">
						</div>
						</form>
						<div class="movie-list">
							<div class="movie">
								<figure class="movie-poster"><img src="images/bpk.jpg" alt="#"></figure>
								<div class="movie-title"><a href="https://www.youtube.com/watch?v=xjDjIWPwcPU">Black Panther</a></div>
								<p>After his father's death, T'Challa returns home to Wakanda to inherit his throne. However, a powerful enemy related to his family threatens to attack his nation.</p>
							</div>
							<div class="movie">
								<figure class="movie-poster"><img src="images/ant.jpg" alt="#"></figure>
								<div class="movie-title"><a href="https://www.youtube.com/watch?v=pWdKf3MneyI">Ant-man</a></div>
								<p>Criminal Scott gains the ability to shrink in scale with the help of a futuristic suit. Now he must rise to the occasion of his superhero status and protect his secret from unsavoury elements.</p>
							</div>
							<div class="movie">
								<figure class="movie-poster"><img src="images/hob2.jpg" alt="#"></figure>
								<div class="movie-title"><a href="https://www.youtube.com/watch?v=SDnYMbYB-nU">Hobbit</a></div>
								<p>The Hobbit is a film series consisting of three high fantasy adventure films directed by Peter Jackson. They are based on the 1937 novel The Hobbit by J. R. R.</p>
							</div>
							<div class="movie">
								<figure class="movie-poster"><img src="images/fast.jpg" alt="#"></figure>
								<div class="movie-title"><a href="https://www.youtube.com/watch?v=Skpu5HaVkOc">Fast and Furious 7</a></div>
								<p>Dominic and his family are caught in a quagmire when Shaw's brother seeks bloody revenge. They must not only deal with their enemy but also save a crucial program from falling into the wrong hands.</p>
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