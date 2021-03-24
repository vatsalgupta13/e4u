<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" href="style.css">
        
    
    </head>


    <body>
        <?php session_start(); ?>
        

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
                            <li class="menu-item current-menu-item"><a href="login_page.html">Login</a></li>
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
                            <span>Login</span>
                        </div>
                        
<?php
include 'db.php';
    $userid=$_POST['username'];
    $pass=$_POST['password'];

$db=mysqli_select_db($con,"project");
$res=mysqli_query($con,"select * from user where id='$userid' AND password='$pass';");
if(mysqli_num_rows($res)>0)
   { echo $userid.", you have successfully logged in.";
$_SESSION['abc']="vat";
   header("refresh:2;url=index.php");}
else
{  echo"Username or password is incorrect!";
    header("refresh:2;url=login_page.html");
}

mysqli_close($con);
?>


                        <div class="content">
                            


 
        
                            
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