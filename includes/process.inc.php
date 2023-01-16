<?php include 'database.inc.php';?>
<?php session_start();?>

<?php
/*Sprawdzanie punktacji (set_error_handler)*/
	if(!isset($_SESSION['score'])){
		$_SESSION['score'] = 0;
	}
	//Ilość pytań
	$query = "SELECT * FROM `questions`";
	$result =$mysqli->query($query) or die($mysqli->error._LINE_);
	$total = $result->num_rows;
	
	
	
	if($_POST){
		$number = $_POST['number'];
		$selected_choice = $_POST['choice'];
		$next = $number+1;
		
		/*Sprawdzanie poprawność pytania*/
		$query = "SELECT * FROM `choices` WHERE question_nr=$number AND is_correct=1";
		$result =$mysqli->query($query) or die($mysqli->error._LINE_);
		
		//Get row
		$row = $result->fetch_assoc();
		//Set correct choice
		$correct_choice = $row['id'];
		
		//porównanie
		if($correct_choice == $selected_choice){
			$_SESSION['score']+1;
		}

		
		if($number == $total){
			header("Location: final.inc.php");
			exit();
		}else{
			header("Location: question.inc.php?n=".$next);
		}
		
		
	}
	

?>
