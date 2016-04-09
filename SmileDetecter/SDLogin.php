<?php session_start(); ?>
<html>
	<head>
<!-- 設定網頁編碼為UTF-8 -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


	<link rel="stylesheet" type="text/css" href="loginStyle.css">
</head>
<?php
if ($_SESSION['username'] != ""){
header("Location:play.php"); 
}
?>

<body>
	<div id="wrapper">
		<div id="main">
			
<form name="form" method="post" action="SDconnect.php">
<input type="text" name="id" id="ID" placeholder="帳號"/> <br>
<input type="password" name="pw" id="PW" placeholder="密碼"/> <br>
<input type="submit" name="button" value="Log in" id="logbtn"  />&nbsp;&nbsp;
<input type="button" onclick="location.href='register.html'" value="Sign up" id="registerbtn" >
</form>
</div>
</div>


</body>



</html>