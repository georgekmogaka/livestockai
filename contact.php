<?php
session_start();
require 'db_connection.php';
require 'login.php';
// IF USER LOGGED IN
if(isset($_SESSION['user_email'])){
    header('Location: home.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livestock AI</title>
    <link rel="stylesheet" href="style.css" media="all" type="text/css">
	 <link rel="shortcut icon" href="images/fav.png" type="image/x-icon" />
	 <link rel="icon" href="images/fav.png" sizes="16x16" type="image/png">
	<style>
	body {
        color: #566787;
		background: #f5f5f5;
		font-family: 'Varela Round', sans-serif;
		font-size: 13px;
	}
	/* Add a black background color to the top navigation */
.topnav {
  background-color: #2e3192;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
footer {
  text-align: center;
  padding: 3px;
  background-color: #2e3192;
  color: white;
}
</style>
	
</head>

<body>
 <div class="topnav">
  <a class="active" href="index.php">Home</a>
   <a href="how.php">How it Works</a>
  <a href="crud/index.php">My Livestock</a>
  <a href="contact.php">Contact</a>
  <a href="about.php">About</a>
</div> 

  <h2>Livestock Manager</h2>
  <p align="center"><img src= "images/logo.png" class="img-responsive" width= "20%"></p>
  <div class="row">
    <h1 align="center">CONTACT US</h1>
<div class="row" align="center">

	<li><h1 >Phone: + 020 282 657</h1></li>
	<li><h1 >Email: info@livestockai.io </h1></li>
	<li><h1 >Address: Port Harcourt, </h1></li>
	<li><h1 >Open Hours: 9am-6pm , Weekdays</h1></li>
	<li><h1 >Follow us: https://www.twitter.com/livetsockai</h1></li>
	<li><h1 >View us on <a href="">Google Map</a></h1></li>


</div>
<footer>
  <p>Developed by: George Mogaka<br>
  <a href="mailto:hege@example.com">mogzyy@gmail.com</a></p>
</footer>
</body>
</html>