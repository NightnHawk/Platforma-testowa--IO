<?php include 'database.inc.php';?>
<?php session_start();?>
<?php
if(isset($_POST['submit'])){
	$_SESSION['test_name']=$_POST['test_name'];
}

	//geting question from database
	$query = "SELECT * FROM questions WHERE test_name='$_SESSION[test_name]'";

	$result = $mysqli->query($query) or die($mysqli->error._LINE_);
	if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		echo "question_nr: " . $row["question_nr"]. " - text: " . $row["text"]."<br>";
		$question_nr=$row["question_nr"];
		$query = "SELECT * FROM choices WHERE question_nr=$question_nr";
		$choices_result = $mysqli->query($query) or die($mysqli->error._LINE_);

		if ($choices_result->num_rows > 0) {	
			while($choices_row = $choices_result->fetch_assoc()){
			echo "- " . $choices_row["text"]. " - wartość punktowa: ". $choices_row["is_correct"]. "<br>";
			}

		}
	}
	} else {
		echo "0 results";
	}
	
	//$question_nr = $result->fetch_assoc();
	
	//geting choices
	//$query = "SELECT * FROM choices WHERE question_nr = $question_nr";
	//$choices = $mysqli->query($query) or die($mysqli->error._LINE_);
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<main>

	</main>
</body>
</html>