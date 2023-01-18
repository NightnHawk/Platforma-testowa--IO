<?php
	//include_once "../header.php";
	session_start();
?>
<?php include 'database.inc.php';?>
<?php if(isset($_POST['submit'])){
		//Dostać się do zmiennych w POST
		$test_name =$_POST['test_name'];
		
		//test query
		$query = "DELETE FROM tests WHERE test_name = '$test_name'";
		//Run query
		$remove_row = $mysqli->query($query) or die($mysqli->error._LINE_);
		//Potwierdzenie usunięcia testu
		if($remove_row){
			//Choice query
			$query = "DELETE FROM questions WHERE test_name = '$test_name'";
			//Run query
			$insert_row = $mysqli->query($query) or die($mysqli->error._LINE_);
			//Choice query
			$query = "DELETE FROM choices WHERE test_name = '$test_name'";
			//Run query
			$insert_row = $mysqli->query($query) or die($mysqli->error._LINE_);
		}
		$msg = 'Test has been removed';
		
	}
	
//Ile testów? Nie wiem, to pobiorę z bazy

$query ="SELECT * FROM tests";
$results = $mysqli->query($query) or die($mysqli->error._LINE_);

?>

	<main>
		<div class="conteiner">
			<h2>Remove Test</h1>
			<?php 
			if(isset($msg)){
				echo'<p>'.$msg.'</p>';
			}
			?>
			<form method="post" action="remove_test.inc.php">
				<p>
					<label>Test name:</label>
					<input type="text" name="test_name"/>
				</p>
					<p>
					<input type="submit" name="submit" value="submit"/>
				</p>
		</div>
					<?php
						if(isset($_SESSION["userid"])){
							if($_SESSION["usertype"]===0){
								echo '<li><a href="../hubstudent.php">Home Page</a></li>';
							} elseif($_SESSION["usertype"]===1){
								echo '<li><a href="../hubteacher.php">Home Page</a></li>';
							}
						} else{
							echo '<li><a href="../index.php">Home Page</a></li>';
						}
					?>
	</main>
</body>
</html>