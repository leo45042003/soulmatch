<?php session_start(); ?>
<meta http-equiv="Content-Type"  charset=utf-8" />


<?php
$username = $_SESSION['username']; 
$response = $_POST['response'];
//posttime ����
if ( $response == "" )
{
echo "�z���O�n�d����?���ΫȮ�!�ɺޯd���a!";
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
echo '���~:�z�ҳs����Ʈw���b�j����,�еy��A�s!';
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
