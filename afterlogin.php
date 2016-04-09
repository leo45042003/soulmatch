<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");
echo '<a href="logout.php">Logout</a>  <br><br>';

//此判斷為判定觀看此頁有沒有權限
//說不定是路人或不相關的使用者
//因此要給予排除
if($_SESSION['username'] != null)
{
        echo '<a href="register.php">Add</a>    ';
        echo '<a href="update.php">Revise</a>    ';
        echo '<a href="delete.php">Delete</a>  <br><br>';

}
else
{
        echo 'You are not premitted to browse this web page!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>