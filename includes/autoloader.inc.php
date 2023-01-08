<?php
spl_autoload_register('autoloader');

function autoloader($className){
	$url=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	if(strpos($url,'includes') !== false){
	$path = "../classes/";
	} else {
	$path = 'classes/';
	}
	$ext = ".class.php";
	$fullpath = $path . $className . $ext;
	include_once $path.$className.$ext;
}
?>