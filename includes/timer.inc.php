<?php include 'includes/database.inc.php';?>
<?php
session_start();
$test_name=$_SESSION['test_name'];
$query = "SELECT * FROM tests WHERE test_name='$test_name'";
$result =$mysqli->query($query) or die($mysqli->error._LINE_);
$row=$result->fetch_assoc();

$timer=mktime(0,0,0,20,01,2023);
?>