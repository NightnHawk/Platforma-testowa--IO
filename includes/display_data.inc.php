<?php include 'database.inc.php';?>
<?php session_start();?>
<?php

	//geting question from database
	$query = "SELECT * FROM questions";

	$result = $mysqli->query($query) or die($mysqli->error._LINE_);
	if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		echo "question_nr: " . $row["question_nr"]. " - text: " . $row["text"]."<br>";
		$query = "SELECT * FROM choices WHERE question_nr=$row[question_nr]";
		$choices_result = $mysqli->query($query) or die($mysqli->error._LINE_);
		if ($choices_result->num_rows > 0) {
			//$choice_row = $result->fetch_assoc();
			echo "text: " . $row["question_nr"]. "<br>";
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