<?php session_start(); ?>
<meta http-equiv="Content-Type"  charset=utf-8" />


<?php
$username = $_SESSION['username']; 
$response = $_POST['response'];
//posttime 未用
if ( $response == "" )
{
echo "您不是要留言嗎?不用客氣!盡管留言吧!";
echo '<meta http-equiv=REFRESH CONTENT=2;url=aftervote.php>';
exit;
}

date_default_timezone_set("Asia/Shanghai");
$posttime =date("Y-m-d h:i:s");  //date ('Y-m-d H:i:s');date("h:i:sa");
if (!get_magic_quotes_gpc())
{
//$posttime = addslashes($posttime);
$response=addslashes($response);
$username=addslashes($username);

}
@ $db = new mysqli('localhost', 'user', 'xZzsT7yH9nqBrNAy', 'vote_affairs');

if (mysqli_connect_errno())
{
echo '錯誤:您所連的資料庫正在大號中,請稍後再連!';
header("refresh:1 url=message.php");
exit;
}
else
{
//$query = "insert into votes (response) values ('$response')";
//update votes set response=1 where username='asd8'
$query ="update votes set response='$response' where username='$username' " ;
$result = $db->query($query);
if ($result)
echo " success!</br> ";
//header("refresh:1 url=aftervote.php");
echo '<meta http-equiv=REFRESH CONTENT=0;url=vote.php>';
//exit;
}
?>
