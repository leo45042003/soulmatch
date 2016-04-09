<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");

$idol_height = $_POST['idol_height'];
$idol_weight = $_POST['idol_weight'];
$idol_age = $_POST['idol_age'];
$idol_education = $_POST['idol_education'];
$idol_career = $_POST['idol_career'];
$idol_salary = $_POST['idol_salary'];
$idol_hobby = $_POST['idol_hobby'];


if($_SESSION['username'] != null)
{
	$username = $_SESSION['username'];

 

    
        $sql = "update member_table set idol_height='$idol_height',idol_weight='$idol_weight',idol_age='$idol_age',idol_education='$idol_education',idol_career='$idol_career',idol_salary='$idol_salary',idol_hobby='$idol_hobby' where username = '$username'  ";

        if(mysql_query($sql))
        {
                echo 'success!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=idol.php>';
        }
        else
        {
                echo '填寫失敗，請重新填寫!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=idolfill.php>';
        }
}
else
{
        echo 'wtf!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=Home.php>';
}
?>