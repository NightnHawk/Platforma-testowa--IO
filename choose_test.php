	<main>
<?php
include 'includes/database.inc.php';
include_once "header.php";

/*
Ile testów? Nie wiem, to pobiorę z bazy
*/
$query ="SELECT * FROM tests ";
$results = $mysqli->query($query) or die($mysqli->error._LINE_);
		while($row = $results->fetch_assoc()) {
			echo "<br>Test: " . $row["test_name"]. " -czas w minutach: " . $row["test_time"]."<br>";
						?><form action='includes/test_start.inc.php' method = 'post'>
					<select name='test_name'><option value ='<?php echo $row["test_name"];?>'></option></select>;
						<button type='submit' name='submit'> Start test </button>	
					<?php if( $_SESSION["usertype"]==1){
					?></form>
						<form action='includes/display_data.inc.php' method = 'post'>
						<select name='test_name'><option value ='<?php echo $row["test_name"];?>'></option></select>;
						<button type='submit' name='submit'> Display test </button>	
					</form><?php 
					}
					
			
		}
?>

	</main>
	
</body

</html>