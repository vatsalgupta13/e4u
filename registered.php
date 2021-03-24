<!DOCTYPE html>
<html lang="en">
    <head>
        <script src="validation.js"></script>
        <title>Registration Page</title>
        <link rel="stylesheet" href="style.css">
        
    
    </head>


    <body onload="document.registration.userid.focus();">
        

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
                            <li class="menu-item"><a href="login_page.html">Login</a></li>
                            <li class="menu-item current-menu-item"><a href="registration.html">Sign Up</a></li>
                        </ul> 

                    <div class="mobile-navigation"></div>
                </div>
            </header>
            <main class="main-content">
                <div class="container">
                    <div class="page">
                        <div class="breadcrumbs">
                            <a href="index.html">Home</a>
                            <span>Registration</span>
                        </div>
                        
<?php
include 'db.php';
    $userid=$_POST['userid'];
    $pass=$_POST['passid'];
    $country=$_POST['country'];
    $email=$_POST['email'];
    $gender=$_POST['sex'];

$db=mysqli_select_db($con,"project");
$res=mysqli_query($con,"insert into user values ('$userid','$pass','$country','$email','$gender');");
if($res)
    echo "Your form has been succesfully submitted.";
else
    {echo"Username cannot be same. Kindly fill the form again.";
header("refresh:2;url=registration.php");
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