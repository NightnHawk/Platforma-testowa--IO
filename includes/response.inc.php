<?php
session_start();

$from_time1=date('Y-m-d H:i:s');
$to_time1=$_SESSION["end_time"];

$timefirst=strtotime($from_time1);
$timesecond=strtotime($to_time1);

$diffrenceinsecondes=$timesecond-$timefirst;
echo gmdate("i:s",$diffrenceinsecondes);
//echo $diffrenceinsecondes;

if($diffrenceinsecondes==0){
	$_SESSION["end_time"]=0;
	header("Location: final.inc.php?");
}


?>