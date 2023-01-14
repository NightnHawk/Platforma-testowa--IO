<?php
	include_once "header.php";
?>


<section class="index-login">
	<div class="wrapper">
		<div class="index-login-login">
			<h4>LOGIN</h4>
			<p>Masz już konto?</p>
			<p>Zaloguj się tutaj!</p>
			<form action="includes/login.inc.php" method="post">
				<div class="index-login-textbox">
					<input type="text" name="uid" placeholder="Nazwa użytkownika">
				</div>
				<div class="index-login-textbox">
					<input type="password" name="password" placeholder="Hasło">
				</div>
				<div class="index-login-textbox">
					<select name="index-login-account-type" class="index-login-account-type">
						<option>Typ konta</option>
						<option>Uczeń</option>
						<option>Nauczyciel</option>
					</select>
				</div>
				<button type="submit" name="submit">LOGIN</button>
				<br>
				<div class="forgot-password">
					<a href="#">Zapomniałeś hasła?</a>
				</div>
				
			</form>
		</div>
		<div class="index-login-singup">
			<h4>SIGN UP</h4>
			<p>Nie masz jeszcze konta?<p>
			<p>Dołącz do nas!</p>
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