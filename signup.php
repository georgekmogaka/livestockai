<?php
session_start();
require 'db_connection.php';
require 'insert_user.php';
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
    <title>Sign Up - Footmarkz.com</title>
    <link rel="stylesheet" href="style.css" media="all" type="text/css">
	<link rel="icon" href="images/fav.png" sizes="16x16" type="image/png">
		<style>
	body {
        color: #566787;
		background: #f5f5f5;
		font-family: 'Varela Round', sans-serif;
		font-size: 13px;
	}
	
	</style>
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
  <a class="active" href="#home">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
</div> 
<h2 text-align="center";>Welcome to</h2>
  <h2>Livestock Manager</h2>
  <p align="center"><img src= "images/logo.png" class="img-responsive" width= "20%"></p>

<form action="" method="post">
    <h2>Create an account</h2>

    <div class="container">
        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter username" id="username" name="username" required>

        <label for="email"><b>Email</b></label>
        <input type="email" placeholder="Enter email" id="email" name="user_email" required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter password" id="password" name="user_password" required>

        <button type="submit">Sign Up</button>
    </div>
    <?php
    if(isset($success_message)){
        echo '<div class="success_message">'.$success_message.'</div>';
    }
    if(isset($error_message)){
        echo '<div class="error_message">'.$error_message.'</div>';
    }
    ?>
    <div class="container" style="background-color:#f1f1f1">
        <a href="index.php"><button type="button" class="Regbtn">Login</button></a>
    </div>
</form>
<footer>
  <p>Developed by: George Mogaka<br>
  <a href="mailto:hege@example.com">mogzyy@gmail.com</a></p>
</footer>
</body>
</html>