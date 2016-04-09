<meta http-equiv="Content-Type" charset=utf-8" />


<?php
error_reporting(0);
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$posttime = $_POST['posttime'];
$title = $_POST['title'];
$content = $_POST['content'];
if ( $name == "" )
{
echo "大名的部份請勿留白,請填入您的名字";
echo '<meta http-equiv=REFRESH CONTENT=2;url=Help.php>';
exit;
}
if ( $email == "" )
{
echo "請留下您的MAIL,好讓我能與您聯絡";
echo '<meta http-equiv=REFRESH CONTENT=2;url=Help.php>';
exit;
}
if ( $content == "" )
{
echo "您不是要留言嗎?不用客氣!盡管留言吧!";
echo '<meta http-equiv=REFRESH CONTENT=2;url=Help.php>';
exit;
}
date_default_timezone_set("Asia/Shanghai");
$posttime =date("Y-m-d h:i:s");  //date ('Y-m-d H:i:s');date("h:i:sa");
if (!get_magic_quotes_gpc())
{
$id = addslashes($id);
$name = addslashes($name);
$email = addslashes($email);
$posttime = addslashes($posttime);
$title=addslashes($title);
$content = addslashes($content);
}
@ $db = new mysqli('localhost', 'user', 'xZzsT7yH9nqBrNAy', 'message');

if (mysqli_connect_errno())
{
echo '錯誤:您所連的資料庫正在大號中,請稍後再連!';
header("refresh:1 url=message.php");
exit;
}
else
{
$query = "insert into message_table (id,name,email,posttime,title,content) values
('$id', '$name', '$email','$posttime', '$title','$content')";
$result = $db->query($query);
if ($result)
echo " 您的留言已經送出,謝謝您的留言!</br> ";
//header("refresh:1 url=afterhelp.php");
echo '<meta http-equiv=REFRESH CONTENT=2;url=Help.php>';
//exit;
}
?>
