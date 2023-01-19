
<?php include 'database.inc.php';?>
<?php session_start();?>
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
<?php


	if($_SESSION['usertype']==0){
	$query = "SELECT * FROM tests_results WHERE users_id='$_SESSION[userid]'";
	}else{
		$query = "SELECT * FROM tests_results";
	}
	

	$result = $mysqli->query($query) or die($mysqli->error._LINE_);
	if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		$query = "SELECT * FROM questions WHERE test_name='$row[test_name]'";
		$quest_result = $mysqli->query($query) or die($mysqli->error._LINE_);
		$quest_row = $quest_result->num_rows;
		echo "test : " . $row["test_name"]. " - score: " . $row["score"]."/".$quest_row. "<br>student:". $row["users_uid"]. " user id: ". $row["users_id"]."<br><br>";
	}
	} else {
		echo "0 results";
	}
	
?>
	<main>

	</main>

</body>
</html>