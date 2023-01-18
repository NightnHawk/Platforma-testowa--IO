<?php session_start();?>
<?php
include 'database.inc.php';
if(isset($_POST['submit'])){
	$_SESSION['test_name']=$_POST['test_name'];
}
/*
Ile pytań w teście? Nie wiem, to pobiorę z bazy
*/
$query ="SELECT * FROM questions WHERE test_name='$_SESSION[test_name]'";
$results = $mysqli->query($query) or die($mysqli->error._LINE_);
$total = $results->num_rows;
//ściągnie czasu
$query ="SELECT * FROM tests WHERE test_name='$_SESSION[test_name]'";
$results = $mysqli->query($query) or die($mysqli->error._LINE_);
$row = $results->fetch_assoc();
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
				<li><strong>Test Name: </strong><?php echo $_SESSION['test_name'];?></li>
				<li><strong>Time: </strong><?php echo $row['test_time'];?> Minutes</li>
			</ul>
			<form action='question.inc.php?n=1' method = 'post'>
					<select name='test_name'><option value ='<?php echo $_SESSION['test_name'];?>'></option></select>;
						<button type='submit' name='submit'> Start test </button>
					</form>
		</div>
	
	</main>
	
	<footer>
		<div class="container">
			Copyright &copy; 2023, Student Debil
		</div>
</body

</html>