<?php
include ("mysql_connect.inc.php");
	echo '<a style="position:absolute;margin-left:850px;margin-top:-522px;text-decoration:none" href="logout.php" id="apDiv6_1">登出</a>  <br><br>';
	echo '<br><br>';
	$username = $_SESSION['username'];
	$sql = "SELECT * FROM member_table where username = '$username' ";
	$result = mysql_query($sql);
	while ($row = mysql_fetch_row($result)) {

		echo "<div style='position:absolute;margin-left: 200px;margin-top:-80px;font-size:18px;font-style: italic;font-weight:bold;'> 真實姓名:$row[3] </div>";
		echo "<div style='position:absolute;margin-left: 200px;margin-top:-40px;font-size:18px;font-style: italic;font-weight:bold;'>暱稱:$row[4] </div>";
		echo "<div style='position:absolute;margin-left: 200px;margin-top:0px;font-size:18px;font-style: italic;font-weight:bold;'> 性別:$row[5] </div>";
		echo "<div style='position:absolute;margin-left: 200px;margin-top:40px;font-size:18px;font-style: italic;font-weight:bold;'> 生日:$row[6] </div>";
		echo "<div style='position:absolute;margin-left: 200px;margin-top:80px;font-size:18px;font-style: italic;font-weight:bold;'> 手機:$row[7] </div>";
		echo "<div style='position:absolute;margin-left: 200px;margin-top:120px;font-size:18px;font-style: italic;font-weight:bold;'> Mail:$row[8] </div>";
		echo "<div style='position:absolute;margin-left: 200px;margin-top:160px;font-size:18px;font-style: italic;font-weight:bold;'> 身高:$row[9] </div>";
		echo "<div style='position:absolute;margin-left: 200px;margin-top:200px;font-size:18px;font-style: italic;font-weight:bold;'> 體重:$row[10] </div>";
		echo "<div style='position:absolute;margin-left: 200px;margin-top:240px;font-size:18px;font-style: italic;font-weight:bold;'> 最高學歷:$row[11] </div>";
		echo "<div style='position:absolute;margin-left: 200px;margin-top:280px;font-size:18px;font-style: italic;font-weight:bold;'> 職稱:$row[12] </div>";
		echo "<div style='position:absolute;margin-left: 200px;margin-top:320px;font-size:18px;font-style: italic;font-weight:bold;'> 月薪:$row[13] </div>";
		echo "<div style='position:absolute;margin-left: 200px;margin-top:360px;font-size:18px;font-style: italic;font-weight:bold	;'> 興趣:$row[14]</div>"; 
		
	}
?>