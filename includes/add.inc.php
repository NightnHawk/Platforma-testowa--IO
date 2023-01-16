<?php
	include_once "../header.php";
?>
<?php include 'database.inc.php';?>
<?php if(isset($_POST['submit'])){
		//Dostać się do zmiennych w POST
		$question_nr =$_POST['question_nr'];
		$question_text =$_POST['question_text'];
		//Choices array
		$choices = array();
		$choices[1] = $_POST['choice1'];
		$choices[2] = $_POST['choice2'];
		$choices[3] = $_POST['choice3'];
		$choices[4] = $_POST['choice4'];
		$correct = $_POST['correct'];
		
		//question query
		$query = "INSERT INTO `questions`(question_nr, text) VALUES('$question_nr','$question_text')";
		//Run query
		$insert_row = $mysqli->query($query) or die($mysqli->error._LINE_);
		//Potwierdzenie dodania pytania
		if($insert_row){
			foreach($choices as $choice=>$value){
				if($value!=' '){
					if($correct == $choice){
						$is_correct=1;
					}else{
						$is_correct=0;
					}
					//Choice query
					$query = "INSERT INTO `choices`(question_nr, is_correct, text) VALUES('$question_nr','$is_correct','$value')";
					//Run query
					$insert_row = $mysqli->query($query) or die($mysqli->error._LINE_);
					//Potwierdzenie dodania odpowiedzi
					if($insert_row){
						continue;
					}else{
						die('Error: ('.$mysqli->errno . ') '. $mysqli->error);
					}
				}
			}
			
		}
		$msg = 'Question has been added';
		
	}
	
//Ile pytań w teście? Nie wiem, to pobiorę z bazy

$query ="SELECT * FROM questions";
$results = $mysqli->query($query) or die($mysqli->error._LINE_);
$total = $results->num_rows;
$next=$total+1;
?>

	<main>
		<div class="conteiner">
			<h2>Add A Question</h1>
			<?php 
			if(isset($msg)){
				echo'<p>'.$msg.'</p>';
			}
			?>
			<form method="post" action="add.inc.php">
				<p>
					<label>Question Number:</label>
					<input type="number" value="<?php echo $next;?>" name="question_nr"/>
				</p>
					<p>
					<label>Question Text:</label>
					<input type="text" name="question_text"/>
				</p>
					<p>
					<label>Choice #1:</label>
					<input type="text" name="choice1"/>
				</p>
					<p>
					<label>Choice #2:</label>
					<input type="text" name="choice2"/>
				</p>
					<p>
					<label>Choice #3:</label>
					<input type="text" name="choice3"/>
				</p>
					<p>
					<label>Choice #4:</label>
					<input type="text" name="choice4"/>
				</p>
					<p>
					<label>Correct choice nr:</label>
					<input type="number" name="correct"/>
				</p>
					<p>
					<input type="submit" name="submit" value="submit"/>
				</p>
		</div>
	</main>
</body>
</html>