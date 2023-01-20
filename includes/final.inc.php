<?php
include 'database.inc.php';
session_start();?>
<?php 
		//score query
		$query = "INSERT INTO `tests_results`(test_name, users_id, users_uid, score) VALUES('$_SESSION[test_name]','$_SESSION[userid]', '$_SESSION[useruid]','$_SESSION[score]')";
		//Run query
		$insert_row = $mysqli->query($query) or die($mysqli->error._LINE_);
		//Potwierdzenie dodania wyników
		if($insert_row){
				$msg = 'Zapisano podejście';
			}
			
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<header>
		<div>
			<h1>Question</h1>
		</div>
	</header>
	<main>
		<h2>The End</h2>
			<p>You Died</p>
			<p>Final Score: <?php echo $_SESSION['score']; ?></p>
			<a href="test_start.inc.php" class="start">Take Again<?php $_SESSION['score']=0;?></a>
			<br>
			<?php
			if($_SESSION["usertype"]===1){
			echo "<a href=../hubteacher.php>Come back to the main page</a>"; 
			}else{
				echo "<a href=../hubstudent.php>Come back to the main page</a>"; 
			}
			?>
			
	</main>
</body>
</html>