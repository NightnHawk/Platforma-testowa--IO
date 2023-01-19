<?php include 'database.inc.php';?>
<?php
session_start();
$test_name=$_SESSION['test_name'];
$query = "SELECT * FROM tests WHERE test_name='$test_name'";
$result =$mysqli->query($query) or die($mysqli->error._LINE_);
while($row=$result->fetch_assoc())
	{
		$duration = $row['test_time'];
}
$_SESSION['duration']=$duration;
$_SESSION['start_time']=date("Y-m-d H:i:s");

$end_time=date("Y-m-d H:i:s", strtotime('+'.$_SESSION['duration'].'minutes',strtotime($_SESSION['start_time'])));

$_SESSION["end_time"]=$end_time;
<script type="text/javasript">
window.location="timer.inc.php";
</script>
?>