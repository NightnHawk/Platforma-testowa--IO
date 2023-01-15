<?php
$db_host = 'localhost';
$db_name = 'platforma-io';
$db_user = 'root';
$db_pass = '';

$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

if($mysqli->connect_error){
		printf("Connect faild: %s\n", $mysqli->connect_errer);
		exit();
}

?>