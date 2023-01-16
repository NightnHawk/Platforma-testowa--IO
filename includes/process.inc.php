<?include 'database.inc.php';

session_start();?>
<?
//Sprawdzanie punktacji (set_error_handler)
	if(!isset(@_SESSION['score'])){
		$_SESSION['score'] = 0;
	}
	
	if($_POST){
		echo 'Działa';
	}
	echo "huh?";
