<?php include 'database.inc.php';?>
<?php session_start();?>
<?php


	//seting question number
	$number = (int) $_GET['n'];
	//geting question from database
	$query = "SELECT * FROM questions WHERE question_nr = $number AND test_name = '$_SESSION[test_name]'";

	$result = $mysqli->query($query) or die($mysqli->error._LINE_);
	
	$question = $result->fetch_assoc();
	
	//geting choices
	$query = "SELECT * FROM choices WHERE question_nr = $number AND test_name = '$_SESSION[test_name]'";
	$choices = $mysqli->query($query) or die($mysqli->error._LINE_);
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<main>
		<div class="conteiner">
			<div class="current">Question <?php echo $question['question_nr']?>:</div>
			<p class="question">
				<?php echo $question['text']?>
			</p>
			<form method="post" action="process.inc.php">
				<ul class="choices">
				<?php while($row = $choices->fetch_assoc()):?>
					<li><input name="choice" type="radio" value="<?php echo $row['text'];?>"/><?php echo $row['text'];?></li>
				<?php endwhile; ?>

				</ul>
				<input type="submit" value="Submit"/>
				<input type="hidden" name="number" value="<?php echo $number; ?>"/>

			</form>
		</div>
	</main>
</body>
</html>