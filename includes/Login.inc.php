<?php
declare(strict_types=1);
include 'autoloader.inc.php';
?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
<head>
	<meta charset="uft-8">
	<title>Strona testowa</title>
</head>
<body>
<a href='../index.php'>Strona główna</a>
<form method = "GET">
  <div class="login-box">
    <h1>Login</h1>
    <form>
      <div class="textbox">
        <i class="fas fa-user"></i>
        <input type="text" placeholder="Username" name="username" required>
      </div>

      <div class="textbox">
        <i class="fas fa-lock"></i>
        <input type="password" placeholder="Password" name="password" required>
      </div>
      <input type="submit" class="btn" value="Zaloguj się">
    </form>
  </div>
</form>
<?php
if(isset($_GET['submit'])){
	$currentUser = new User();
	$currentUser->setLogin($_GET['username']);
	$currentUser->setPassword($_GET['password']);
	echo $currentUser->getLogin();
}

?>
</body>
</html>