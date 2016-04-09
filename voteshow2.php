<meta http-equiv="Content-Type"  charset=utf-8" />


<?php
//$link = mysql_connect("localhost", "root", "jj660026")
$link=mysqli_connect("localhost","user","xZzsT7yH9nqBrNAy","vote_affairs");
//or die("Could not connect");
//mysql_select_db("vote_affairs") or die("Could not select database play");
$sql = "SELECT * FROM votes";
$result = mysqli_query($link,"SELECT * FROM votes where id='2' && likes='1'&& response !=''"); //抓有回應的值 //顯示所有點YES的留言
while($record = mysqli_fetch_array($result))
{

$username = $record["username"] ;
$response = $record["response"] ;

//echo "  <div style='margin-left:0px;
//					margin-top:10px;
//					font-size:22px;
//					font-weight:bold;
//	               '>
					
//			<p style='display:inline-block;'>
//		 ID:</p>$username
//		  </div>" ;








echo "	<div style='margin-left:160px;
					margin-top:20px;
					width:300px;
					height:147px;
					font-weight:bold;
					border-radius: 0;
					background-color: rgba(255, 255, 255, 1);
					border: 4px solid rgba(139, 0, 0, 1);'>
			<p style='display:inline-block;
							  font-size:15px;
							  white-space:pre-wrap;
							  line-height: 1em;
							  overflow: hidden;
							  '>$response
					</p>
				

		</div>" ;
















//echo"<hr style='margin-top:20px;width:300px;display:inline-block'>";

}


$result = mysqli_query($link,"SELECT * FROM votes where id='2' && unlikes='1'&& response !=''"); //抓有回應的值 //顯示所有點NO的留言
while($record = mysqli_fetch_array($result))
{

$username = $record["username"] ;
$response = $record["response"] ;

//echo "<div style='margin-left:800px;margin-top:-165px;font-size:22px;font-weight:bold;'><p style='display:inline-block;'>ID:</p>$username</div>" ;
echo "<div style='	margin-left:500px;
					margin-top: 40px;
					display:inline-block;
					width:300px;
					height:147px;
					font-size:16px;
					font-weight:bold;
					border-radius: 0;
					background-color: rgba(255, 255, 255, 1);
					border: 4px solid rgba(28, 138, 67, 1);'>
					
					
					<p style='display:inline-block;
					
							  white-space:pre-wrap;
							  overflow: hidden;
							  '>$response
					</p>




</div>" ;






//echo"<hr style='float:right;margin-top:20px;width:300px;display:inline-block'>";

}

?>
