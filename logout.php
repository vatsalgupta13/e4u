<!DOCTYPE html>
<html lang="en">
	<head>
		
		<title>Login Page</title>
		<link rel="stylesheet" href="style.css">
		
	
	</head>


	<body>
		
<?php session_start();
if($_SESSION['abc']=="vat")
{session_destroy();
header("refresh:2;url=index.html");
}
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

					<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item "><a href="index.html">Home</a></li>
							<li class="menu-item"><a href="about.html">About</a></li>
							<li class="menu-item"><a href="review.html">Movies</a></li>
							<li class="menu-item"><a href="tvreview.html">T.V Shows</a></li>
							<li class="menu-item"><a href="contact.html">Contact Us</a></li>
							<li class="menu-item current-menu-item"><a href="logout.php">Logout</a></li>
						</ul> 

					<div class="mobile-navigation"></div>
				</div>
			</header>
			<main class="main-content">
				<div class="container">
					<div class="page">
						<div class="breadcrumbs">
							<a href="index.html">Home</a>
							<span>Login</span>
						</div>

						<div class="content">
							<h2>You have succesfully logged off! </h2><hr/>
 
							
									</div>
								</div>
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