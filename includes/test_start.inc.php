<?php
include 'database.inc.php';
/*
Ile pytań w teście? Nie wiem, to pobiorę z bazy
*/
$query ="SELECT * FROM questions";
$results = $mysqli->query($query) or die($mysqli->error._LINE_);
$total = $results->num_rows;
?>
<!DOCTYPE html>
<html>
<head> 
	<meta charaset="utf-8"/>
	<title>Student Test Page</title>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="../css/main.css">
</head>
<body>
	<header>
	<div class="container">
		<h1>Student Test Page<h1>
	</div>
	
	<header>
	
	<main>
	<header>
		<div class="container">
			<h2>Test Your Student Knowledge</h2>
			<p>This is a testing page</p>
			<ul>
				<li><strong>Number of Question: </strong><?php echo $total;?></li>
				<li><strong>Test Type: </strong>Nobody knows</li>
				<li><strong>Time: </strong><?php echo $total*.5;?> Minutes</li>
			</ul>
			<a href="question.inc.php?n=1" class="start-test">Start Test</a>
		</div>
	
	</main>
	
	<footer>
		<div class="container">
			Copyright &copy; 2023, Student Debil
		</div>
</body

</html>