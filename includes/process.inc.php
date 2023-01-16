<?php include 'database.inc.php';?>
<?php session_start();?>

<?php
/*Sprawdzanie punktacji (set_error_handler)*/
	if(!isset($_SESSION['score'])){
		$_SESSION['score'] = 0;
	}
	
	if($_POST){
		$number = $_POST['number'];
		$selected_choice = $_POST['choice'];
		
		echo $number.'<br>';
		echo $selected_choice;
	}

?>
