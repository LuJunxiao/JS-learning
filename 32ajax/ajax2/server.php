<?php
//设置页面内容是html编码格式是utf-8
header("Content-Type: text/plain;charset=utf-8"); 
//定义一个多维数组，包含员工的信息，每条员工信息为一个数组
$staff = array
	(
		array("name" => "风屿", "number" => "101", "sex" => "男", "job" => "Js讲师"),
		array("name" => "阿飞", "number" => "102", "sex" => "男", "job" => "前端院长"),
		array("name" => "千寻", "number" => "103", "sex" => "男", "job" => "Js讲师")
	);
if ($_SERVER["REQUEST_METHOD"] == "GET") {
	search();
} elseif ($_SERVER["REQUEST_METHOD"] == "POST"){
	create();
}
//通过编号搜索员工
function search(){
	if (!isset($_GET["number"]) || empty($_GET["number"])) {
		echo "参数错误";
		return;
	}
	global $staff;
	//获取number参数
	$number = $_GET["number"];
	$result = "没有找到员工。";

	foreach ($staff as $value) {
		if ($value["number"] == $number) {
			$result = "找到员工：员工编号：" . $value["number"] . "，员工姓名：" . $value["name"] . 
			                  "，员工性别：" . $value["sex"] . "，员工职位：" . $value["job"];
			break;
		}
	}
    echo $result;
}

//创建员工
function create(){
	//判断信息是否填写完全
	if (!isset($_POST["name"]) || empty($_POST["name"])
		|| !isset($_POST["number"]) || empty($_POST["number"])
		|| !isset($_POST["sex"]) || empty($_POST["sex"])
		|| !isset($_POST["job"]) || empty($_POST["job"])) {
		echo "参数错误，员工信息填写不全";
		return;
	}
	echo "员工：" . $_POST["name"] . " 信息保存成功！";
}
