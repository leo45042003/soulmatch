<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include ("mysql_connect.inc.php");

$id = $_POST['id'];
$pw = $_POST['pw'];
$pw2 = $_POST['pw2'];
$realname = $_POST['realname'];
$nickname = $_POST['nickname'];
$sexuality = $_POST['sexuality'];
$date = $_POST['date'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$education = $_POST['education'];
$career = $_POST['career'];
$salary = $_POST['salary'];
$hobby = $_POST['hobby'];

$other = $_POST['other'];

//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if ($id != null && $pw != null && $pw2 != null && $pw == $pw2) {
	//新增資料進資料庫語法
	$sql = "insert into member_table (username,password,realname,nickname,sexuality,date,phone,mail,height,weight,education,career,salary,hobby,other) values ('$id', '$pw', '$realname','$nickname','$sexuality','$date','$phone','$mail','$height','$weight','$education','$career','$salary','$hobby','$other')";
	if (mysql_query($sql)) {
		echo 'Register success!';
		echo '<meta http-equiv=REFRESH CONTENT=2;url=login.html>';
	} else {
		echo 'Register fail!';
		echo '<meta http-equiv=REFRESH CONTENT=2;url=Home.php>';
	}
} else {
	echo '您無權限觀看此頁面!';
	echo '<meta http-equiv=REFRESH CONTENT=2;url=Home.php>';
}
?>