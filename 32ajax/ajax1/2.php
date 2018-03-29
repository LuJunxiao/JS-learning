<?php
	header("content-type:text/html;charset='utf-8'");
	$u = $_POST["user"];
	$p = $_POST["pwd"];
	$t = $_POST["tel"];
	$e = $_POST["email"];

	echo "您输入的user：$u ; 输入的密码是 ： $p ; 电话：$t; email：$e";
?>