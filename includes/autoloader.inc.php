<?php
spl_autoload_register('autoloader');

function autoloader($className){
	$path = "classes/";
	$ext = ".class.php";
	$fullpath = $path . $className . $ext;
	
	include_once $fullpath;
}
?>