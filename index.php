<?php
	include_once "includes\autoloader.inc.php";
?>
<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
					<li><a href="#">User Guide</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>
		</div>
		<div class="header-main-acount">
			<nav class="header-main-acount-nav">
				<ul>
					<li><a href="includes/login.inc.php">Sign In</a></li>
					<li><a href="#">Register</a></li>
				</ul>
			</nav>
		</div>
	</header>
</body>
</html>