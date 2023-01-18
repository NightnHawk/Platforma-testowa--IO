<?php
	include_once "header.php";
?>
<?php include 'includes/database.inc.php';?>
<?php if(isset($_POST['submit'])){
		//Dostać się do zmiennych w POST
		$test_name =$_POST['test_name'];
		$test_time=$_POST['test_time'];
		
		//question query
		$query = "INSERT INTO `exams`(test_name, test_time) VALUES('$test_name','$test_time')";
		//Run query
		$insert_row = $mysqli->query($query) or die($mysqli->error._LINE_);
		//Potwierdzenie dodania testu
		if($insert_row){
				$msg = 'Exam has been added';
			}
			
		}

		
	
?>

	<main>
		<div class="test_conteiner">
			<h2>Add A Test</h1>
			<?php 
			if(isset($msg)){
				echo'<p>'.$msg.'</p>';
			}
			?>
			<form method="post" action="add.inc.php">
				<p>
					<label>Add a test:</label>
					<input type="number" name="test_name"/>
				</p>
				<p>
					<label>Exam time:</label>
					<input type="text" name="test_time"/>
				</p>
					<p>
					<input type="submit" name="submit" value="submit"/>
				</p>
		</div>
	</main>
</body>
</html>