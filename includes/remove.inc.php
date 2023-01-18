<?php
	include_once "../header.php";
?>
<?php include 'database.inc.php';?>
<?php if(isset($_POST['submit'])){
		//Dostać się do zmiennych w POST
		$question_nr =$_POST['question_nr'];
		
		//question query
		$query = "DELETE FROM questions WHERE question_nr = $question_nr";
		//Run query
		$remove_row = $mysqli->query($query) or die($mysqli->error._LINE_);
		//Potwierdzenie usunięcia pytania
		if($remove_row){
			//Choice query
			$query = "DELETE FROM choices WHERE question_nr = $question_nr";
			//Run query
			$insert_row = $mysqli->query($query) or die($mysqli->error._LINE_);
		}
		$msg = 'Question has been removed';
		
	}
	
//Ile pytań w teście? Nie wiem, to pobiorę z bazy

$query ="SELECT * FROM questions";
$results = $mysqli->query($query) or die($mysqli->error._LINE_);
$total = $results->num_rows;
$next=$total;
?>

	<main>
		<div class="conteiner">
			<h2>Remove A Question</h1>
			<?php 
			if(isset($msg)){
				echo'<p>'.$msg.'</p>';
			}
			?>
			<form method="post" action="remove.inc.php">
				<p>
					<label>Question Number:</label>
					<input type="number" value="<?php echo $next;?>" name="question_nr"/>
				</p>
					<p>
					<input type="submit" name="submit" value="submit"/>
				</p>
		</div>
	</main>
</body>
</html>