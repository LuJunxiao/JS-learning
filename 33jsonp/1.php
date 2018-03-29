<?php

	header("content-type:text/html;charset=UTF-8");

	$a = $_GET["user"];
	$b = $_GET["pwd"];

	echo "您输入的用户名是:". $a .", 您输入的密码是:". $b .";";
?>