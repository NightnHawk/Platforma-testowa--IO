<?php session_start();?>
<?php
include 'includes/database.inc.php';

/*
Ile testów? Nie wiem, to pobiorę z bazy
*/
$query ="SELECT * FROM tests ";
$results = $mysqli->query($query) or die($mysqli->error._LINE_);
		while($row = $results->fetch_assoc()) {
			echo "Test: " . $row["test_name"]. " -czas w minutach: " . $row["test_time"]."<br>";
						?><form action='includes/test_start.inc.php' method = 'post'>
					<select name='test_name'><option value ='<?php echo $row["test_name"];?>'></option></select>;
						<button type='submit' name='submit'> Start test </button>
					</form><?php
		}

?>
<!DOCTYPE html>
<html>
<head> 

</head>
<body>

	<main>

	</main>
	
</body

</html>