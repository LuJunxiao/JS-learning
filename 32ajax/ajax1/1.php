<?php
	
	header("content-type:text/html;charset='utf-8'");

	/*$n = $_GET["name"];
	$a = $_GET["age"];
	$l = $_GET["length"];*/

	$n = $_POST["name"];
	$a = $_POST["age"];
	$l = $_POST["length"];

	echo "user:$n ; age :  $a ; length : $l";

?>