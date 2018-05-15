<?php
	header("Content-type:text/html;charset=utf-8");
	$xh = "";
	$password = "";
	include("../qzjw.class.php");
	$qz = new QZAPI("http://jwxt.gduf.edu.cn/app.do");
	$auth = $qz->authUser($xh,$password);
	$token = $auth['token'];
	if($token == -1) exit("用户名或密码错误");
	$curtime = $qz->getCurrentTime($token, date("Y-m-d"));
	$timetable = $qz->getKbcxAzc($token, $xh, $curtime['xnxqh'], $curtime['zc']);
	print_r($timetable);
?>