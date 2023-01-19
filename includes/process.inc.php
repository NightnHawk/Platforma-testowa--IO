<?php include 'database.inc.php';?>
<?php session_start();?>

<?php
/*Sprawdzanie punktacji (set_error_handler)*/
	if(!isset($_SESSION['score'])){
		$_SESSION['score'] = 0;
	}
	//Ilość pytań
	$query = "SELECT * FROM `questions` WHERE test_name='$_SESSION[test_name]'";
	$result =$mysqli->query($query) or die($mysqli->error._LINE_);
	$total = $result->num_rows;
	
	
	
	if($_POST){
		$number = $_POST['number'];
		$selected_choice = $_POST['choice'];
		$next = $number+1;
		
		/*Sprawdzanie poprawność pytania*/
		$query = "SELECT * FROM `choices` WHERE question_nr=$number AND is_correct=1 AND test_name='$_SESSION[test_name]'";
		$result =$mysqli->query($query) or die($mysqli->error._LINE_);
		
		//Get row
		$row = $result->fetch_assoc();
		//Set correct choice
		$correct_choice = $row['text'];
		
		//porównanie
		if($correct_choice == $selected_choice){
			$_SESSION['score']++;
		}

		
		if($number == $total){
			header("Location: final.inc.php?");
			exit();
		}else{
			header("Location: question.inc.php?n=".$next);
		}
		
		
	}
	$test_name=$_SESSION['test_name'];
$query = "SELECT * FROM tests WHERE test_name='$test_name'";
$result =$mysqli->query($query) or die($mysqli->error._LINE_);
while($row=$result->fetch_assoc())
	{
		$duration = $row['test_time'];
}
$_SESSION['duration']=$duration;
$_SESSION['start_time']=date("Y-m-d H:i:s");

$end_time=date("Y-m-d H:i:s", strtotime('+'.$_SESSION['duration'].'minutes',strtotime($_SESSION['start_time'])));

$_SESSION["end_time"]=$end_time;?>
<script type="text/javasript">
window.location="timer_handler.inc.php";
</script>
	

