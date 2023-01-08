<?php
    session_start();
	include_once "includes\autoloader.inc.php";
    include_once "header.php";
?>
<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/main.css">
	<title>Platforma testowa</title>
</head>
<body>
	<header class="header-main">
		<div class="header-main-logo">
			<img src="images\placeholder_logo.png" alt="logo">
			<nav class="header-main-nav">
				<ul>
					<li><a href="index.php">Home Page</a></li>
					<li><a href="#">Documentation</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>
		</div>
		<div class="header-main-acount">
			<nav class="header-main-acount-nav">
				<ul>
					<li><a href="#">Sign Up</a></li>
					<li><a href="includes/login.inc.php">Login</a></li>
				</ul>
			</nav>
		</div>
	</header>