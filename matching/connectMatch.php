<?php
$host="127.0.0.1:3306";
$db_user="user";
$db_pass="xZzsT7yH9nqBrNAy";
$db_name="lovehouse";
$db_nameT="member";
$timezone="Asia/Taipei";
$link=mysqli_connect($host,$db_user,$db_pass,$db_name);
$linkT=mysqli_connect($host,$db_user,$db_pass,$db_nameT);
mysqli_query($link,"SET names UTF8");
mysqli_query($linkT,"SET names UTF8");
header("Content-Type: text/html; charset=utf-8");
date_default_timezone_set($timezone);
?>
