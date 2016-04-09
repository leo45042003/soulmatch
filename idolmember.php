
<?php
header("Content-Type:text/html; charset=UTF-8");
include ("mysql_connect.inc.php");

if ($_SESSION['username'] != null) {
	echo '<a style="position:absolute;margin-left:935px;margin-top:-619px;text-decoration:none" href="logout.php" id="apDiv6_1">登出</a>  <br><br>';
	echo '<br><br>';
	$username = $_SESSION['username'];
	$sql = "SELECT * FROM member_table where username = '$username' ";
	$result = mysql_query($sql);
	while ($row = mysql_fetch_row($result)) {

		echo "<div style='position:absolute;margin-left: 200px;margin-top:-100px;font-size:18px;font-style: italic;;font-weight:bold;'> 身高:$row[16] </div>";
		echo "<div style='position:absolute;margin-left: 200px;margin-top:-60px;font-size:18px;font-style: italic;;font-weight:bold;'>體重:$row[17] </div>";
		echo "<div style='position:absolute;margin-left: 200px;margin-top:-20px;font-size:18px;font-style: italic;;font-weight:bold;'> 年齡:$row[18] </div>";
		echo "<div style='position:absolute;margin-left: 200px;margin-top:20px;font-size:18px;font-style: italic;;font-weight:bold;'> 教育程度:$row[19] </div>";
		echo "<div style='position:absolute;margin-left: 200px;margin-top:60px;font-size:18px;font-style: italic;;font-weight:bold;'> 職位:$row[20] </div>";
		echo "<div style='position:absolute;margin-left: 200px;margin-top:100px;font-size:18px;font-style: italic;;font-weight:bold;'> 薪水:$row[21] </div>";
		echo "<div style='position:absolute;margin-left: 200px;margin-top:140px;font-size:18px;font-style: italic;;font-weight:bold;'> 興趣:$row[22] </div>";
		
	}
} else {
	echo 'You are not premitted to browse this web page!';
	echo "<script>alert('請先登入會員，謝謝。!');window.location='login.html';</script>"; 
}
?>