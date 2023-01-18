<?php
	include_once "header.php";
?>
<?php include 'includes/database.inc.php';?>
<?php if(isset($_POST['submit'])){
		//Dostać się do zmiennych w POST
		$test_name =$_POST['test_name'];
		$test_time=$_POST['test_time'];
		
		//question query
		$query = "INSERT INTO `tests`(test_name, test_time) VALUES('$test_name','$test_time')";
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
			<div class="test-header">
			<h2>Add A Test</h1>
			<?php 
			if(isset($msg)){
				echo'<p>'.$msg.'</p>';
				echo "<a href=includes/add.inc.php>Add questions to your test</a>"; 
			}
			?>
			</div>
			<form method="post" action="add_test.php">
				<div class="test-textbox">
					<label>Add a test:</label>
					<input type="text" name="test_name" placeholder="Name"/>
				</div>
				<div class="test-textbox">
					<label>Exam time:</label>
					<input type="text" name="test_time" placeholder="In minutes"/>
				</div>
				<div class="test-button">
					<button type="submit" name="submit">Submit</button>
				</div>
		</div>
	</main>
</body>
</html>