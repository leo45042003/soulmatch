<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<?php
error_reporting(0);
//$link = mysql_connect("localhost", "root", "jj660026")
$link=mysqli_connect("localhost","user","xZzsT7yH9nqBrNAy","message");
//or die("Could not connect");
//mysql_select_db("message") or die("Could not select database play");
$sql = "SELECT * FROM message_table";
$result = mysqli_query($link,"SELECT * FROM message_table");
while($record = mysqli_fetch_array($result))
{
$id = $record[ "id"] ;
$name = $record[ "name"] ;
$email = $record[ "email"] ;
$posttime = $record[ "posttime"] ;
$title = $record[ "title" ];
$content = $record[ "content"] ;
$ans = $record[ "ans"] ;

echo "<div style='margin-left:80px;margin-top:10px;font-size:22px;font-weight:bold;'><img src='qq.PNG'>$title</div>" ;
echo "<div style='margin-left:80px;margin-top:20px;font-size:16px;font-weight:bold;'>Q:$content</div>" ;
echo "<div style='margin-left:80px;margin-top:15px;font-size:16px;font-weight:bold;'>A:$ans</div>" ;
echo"<hr style='margin-top:20px;width:800px;'>";

}

?>
