<!DOCTYPE html>
<html lang="en">
	<head>
		
		<title>TV Series Review | Review</title>
		<link rel="stylesheet" href="style.css">
	

	</head>


	<body>
		

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
							<li class="menu-item current-menu-item"><a href="tvreview.html">T.V Shows</a></li>
							<li class="menu-item"><a href="contact.html">Contact Us</a></li>
							<li class="menu-item"><a href="login_page.html">Login</a></li>
							<li class="menu-item"><a href="registration.html">Sign Up</a></li>
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
						<form action="tv2.php" method="post">
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

<?php
include 'db.php';
	$gen=$_POST['mov'];
	$year=$_POST['year'];
$db=mysqli_select_db($con,"project");
 echo"<b>GENRE:</b> ".$gen."<br><br>";
if($year)
{
$res=mysqli_query($con,"select * from tv_series t,genre g where g.genre='$gen' && t.year='$year' && (g.g_id=t.g1 || g.g_id=t.g2 || g.g_id=t.g3)  ;");
if (mysqli_num_rows($res)<1)
		echo"Sorry, no result found in our database!";
	while($row = mysqli_fetch_assoc($res))
{ echo"<br>";
echo"<h2><u> ".$row['tv_name']."</h2></u>";
echo "<b> Year: </b> ".$row['year'];
echo "<b><br>Language: </b> ".$row['language'];
echo "<b> <br>No. Of Episodes: </b> ".$row['no_of_episodes'];
echo "<b><br> Creators:</b> ".$row['creator1'].", ".$row['creator2'];
$d=$row['tv_id'];
$r=mysqli_query($con,"select actor from tv_cast where tv_id='$d' ;");
echo "<b><br> Actors:</b> "; 
while($w = mysqli_fetch_assoc($r))
{
	echo $w['actor'].",";
}
	echo "<b><br> <br>Overview:</b><br> ".$row['overview'];
	echo"<br>";
}}
else
{
$res=mysqli_query($con,"select * from tv_series t,genre g where g.genre='$gen' && (g.g_id=t.g1 || g.g_id=t.g2 || g.g_id=t.g3)  ;");
if (mysqli_num_rows($res)<1)
		echo"Sorry, no result found in our database!";
	while($row = mysqli_fetch_assoc($res))
{ echo"<br>";
echo"<h2><u>".$row['tv_name']."</u></h2>";
echo "<b> Year: </b> ".$row['year'];
echo "<b><br>Language: </b> ".$row['language'];
echo "<b> <br>No. Of Episodes: </b> ".$row['no_of_episodes'];
echo "<b><br> Creators:</b> ".$row['creator1'].", ".$row['creator2'];
$d=$row['tv_id'];
$r=mysqli_query($con,"select actor from tv_cast where tv_id='$d' ;");
echo "<b><br> Actors:</b> ";
while($w = mysqli_fetch_assoc($r))
{
	echo $w['actor'].", ";
}
	echo "<b><br> <br>Overview:</b><br> ".$row['overview'];
	echo"<br><br>";
}

}
mysqli_close($con);
?>

			<footer class="site-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-2">
							
							</div>
						</div>

							
						
					</div>
	</body>

</html>