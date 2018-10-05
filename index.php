<?php
$subdir='/phpoopclass';
spl_autoload_register(function($className) {
	//$className = str_replace('\\', DIRECTORY_SEPARATOR, $className);
	//include_once $_SERVER['DOCUMENT_ROOT'] .$subdir. '/class/' . $className . '.php'; //linux
	include_once 'class/' . $className . '.php';
});
//phpinfo();
//$db= new DB('localhost','root','1234','phpoopclass');
//print $db;
//die();
include_once $_SERVER['DOCUMENT_ROOT'] .$subdir . '/phpfiles/test.php';
//print $_SERVER['DOCUMENT_ROOT'];
?>