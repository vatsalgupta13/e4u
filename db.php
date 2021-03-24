<?php
$hostname="localhost";
$username="root";
$password="";
$con=mysqli_connect($hostname,$username,$password);
if(!$con){die("could not connect :".mysqli_connect_error());}
?>