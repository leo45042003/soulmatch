<?php
$host="127.0.0.1";
$db_user="root";
$db_pass="jj660026";
$db_name="member";
$timezone="Asia/Taipei";
$link=mysqli_connect($host,$db_user,$db_pass,$db_name);
mysqli_query($link,"SET names UTF8");

header("Content-Type: text/html; charset=utf-8");
date_default_timezone_set($timezone);
?>
