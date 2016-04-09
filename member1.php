<?php session_start(); ?>
<?php
include ("mysql_connect.inc.php");
echo '<a style="position:absolute;margin-left:900px;margin-top:-90px;text-decoration:none" href="logout.php">登出</a>  <br><br>';
if ($_SESSION['username'] != null) {
	echo '<a href="register.php"></a>';
	//add
	echo '<a href="update.php"></a>';
	//revise
	echo '<a href="delete.php"></a>  <br><br>';
	//delete

	
	$username = $_SESSION['username'];
	$sql = "SELECT * FROM member_table where username = '$username' ";
	$result = mysql_query($sql);
	while ($row = mysql_fetch_row($result)) {

		echo "<div style='position:absolute;margin-left: 200px;margin-top:-120px;font-size:18px;font-style: italic;font-weight:bold;;'> height:$row[16] </div>";
		echo "<div style='position:absolute;margin-left: 200px;margin-top:-40px;font-style:italic;font-weight:900;'>體重:$row[17] </div>";
		echo "<div style='position:absolute;margin-left: 200px;margin-top:-80px;font-size:18px;font-style: italic;font-weight:900;'> 年齡:$row[18] </div>";
		echo "<div style='position:absolute;margin-left: 200px;margin-top:0px;font-size:18px;font-style: italic;font-weight:900;'> 最高學歷:$row[19] </div>";
		echo "<div style='position:absolute;margin-left: 200px;margin-top:40px;font-size:18px;font-style: italic;font-weight:900;'> 職稱:$row[20] </div>";
		echo "<div style='position:absolute;margin-left: 200px;margin-top:80px;font-size:18px;font-style: italic;font-weight:900;'> 薪水:$row[21] </div>";
		echo "<div style='position:absolute;margin-left: 200px;margin-top:120px;font-size:18px;font-style: italic;font-weight:900;'> 興趣:$row[22] </div>";
		
	}
} else {
	echo 'You are not premitted to browse this web page!';
	echo "<script>alert('請先登入會員，謝謝。!');window.location='login.html';</script>"; 
}
?>