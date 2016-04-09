<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");

$pw = $_POST['pw'];
$pw2 = $_POST['pw2'];
$nickname = $_POST['nickname'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$career = $_POST['career'];
$salary = $_POST['salary'];
$other = $_POST['other'];

if($_SESSION['username'] != null && $pw != null && $pw2 != null && $pw == $pw2)
{
 	$username = $_SESSION['username'];

    
        $sql = "update member_table set password='$pw',nickname='$nickname', phone='$phone', mail='$mail', height='$height',weight='$weight',career='$career',salary='$salary',other='$other' where username = '$username' ";
        if(mysql_query($sql))
        {
                echo 'success!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=Self.php>';
        }
        else
        {
                echo 'wrong!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=Self.php>';
        }
}
else
{
        echo 'wtf!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=Home.php>';
}
?>