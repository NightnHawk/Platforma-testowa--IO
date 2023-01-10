<?php
    session_start();
	include_once "includes\autoloader.inc.php";
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
					<?php
						if(isset($_SESSION["userid"])){
					?>
					<li><a href="#"><?php echo $_SESSION["useruid"]; ?></a></li>
					<li><a href="includes/logout.inc.php">Logout</a></li>
					<?php
						}
						else{
					?>
					<li><a href="#">Sign Up</a></li>
					<li><a href="includes/login.inc.php">Login</a></li>
					<?php
						}
					?>
				</ul>
			</nav>
		</div>
	</header>


<section class="index-login">
	<div class="wrapper">
		<div class="index-login-login">
			<h4>LOGIN</h4>
			<p>Masz już konto? Zaloguj się tutaj!</p>
			<form action="includes/login.inc.php" method="post">
			<div class="index-login-textbox">
				<input type="text" name="uid" placeholder="Nazwa użytkownika">
			</div>
			<div class="index-login-textbox">
				<input type="password" name="password" placeholder="Hasło">
			</div>
			<div class="index-login-textbox">
				<select name="index-login-account-type">
					<option>Typ konta</option>
					<option>Uczeń</option>
					<option>Nauczyciel</option>
				</select>
			</div>
			<button type="submit" name="submit">LOGIN</button>
			</form>
		</div>
		<div class="index-login-singup">
			<h4>SIGN UP</h4>
			<p>Nie masz jeszcze konta? Dołącz do nas!</p>
			<form action="includes/signup.inc.php" method="post">
				<div class="index-login-textbox">
					<input type="text" name="uid" placeholder="Nazwa użytkownika">
				</div>	
				<div class="index-login-textbox">
					<input type="password" name="password" placeholder="Hasło">
				</div>
				<div class="index-login-textbox">
					<input type="password" name="password-repeat" placeholder="Powtórz hasło">
				</div>
				<div class="index-login-textbox">
					<input type="text" name="email" placeholder="Adres e-mail">
				</div>
				<button type="submit" name="submit">SIGN UP</button>
			</form>
		</div>
	</div>

</section>
</body>
</html>