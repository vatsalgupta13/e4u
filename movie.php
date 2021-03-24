<!DOCTYPE html>
<html lang="en">
	<head>
		
		<title>Movie Review | Review</title>
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

<?php
include 'db.php';
$gen=$_POST['mor'];

	$year=$_POST['yea'];
$db=mysqli_select_db($con,"project");
 echo"<b>GENRE:</b> ".$gen."<br><br>";
if($year)
{
$res=mysqli_query($con,"select * from movies m,genre g,production p,director d where g.genre='$gen' && m.movie_id=d.movie_id && m.release_date='$year' && m.prod_id=p.prod_id && (g.g_id=m.g1 || g.g_id=m.g2 || g.g_id=m.g3 || g.g_id=m.g4)  ;");
if (mysqli_num_rows($res)<1)
		echo"Sorry, no result found in our database!";
	while($row = mysqli_fetch_assoc($res))
{ echo"<br>";
echo"<h2><u> ".$row['movie_name']."</h2></u>";
echo "<b> Year of Release: </b> ".$row['release_date'];
echo "<b><br>Language: </b> ".$row['language'];
echo "<b> <br>Runtime: </b> ".$row['runtime']." minutes";
echo "<b> <br>Production Company: </b> ".$row['production_company'];
echo "<b><br> Director:</b> ".$row['director'];
$d=$row['movie_id'];
$r=mysqli_query($con,"select actor from cast where movie_id='$d' ;");
echo "<b><br> Cast:</b> "; 
while($w = mysqli_fetch_assoc($r))
{
	echo $w['actor'].",";
}
	echo "<b><br> <br>Overview:</b><br> ".$row['overview'];
	echo"<br>";
}
}
else
{
$res=mysqli_query($con,"select * from movies m,genre g,production p,director d where g.genre='$gen' && m.movie_id=d.movie_id && m.prod_id=p.prod_id && (g.g_id=m.g1 || g.g_id=m.g2 || g.g_id=m.g3 || g.g_id=m.g4)  ;");
if (mysqli_num_rows($res)<1)
		echo"Sorry, no result found in our database!";
	while($row = mysqli_fetch_assoc($res))
{ echo"<br>";
echo"<h2><u> ".$row['movie_name']."</h2></u>";
echo "<b> Year of Release: </b> ".$row['release_date'];
echo "<b><br>Language: </b> ".$row['language'];
echo "<b> <br>Runtime: </b> ".$row['runtime']." minutes";
echo "<b> <br>Production Company: </b> ".$row['production_company'];
echo "<b><br> Director:</b> ".$row['director'];
$d=$row['movie_id'];
$r=mysqli_query($con,"select actor from cast where movie_id='$d' ;");
echo "<b><br> Cast:</b> "; 
while($w = mysqli_fetch_assoc($r))
{
	echo $w['actor'].",";
}
	echo "<b><br> <br>Overview:</b><br> ".$row['overview'];
	echo"<br>";
}

}
mysqli_close($con);
?>

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