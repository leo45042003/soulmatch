<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");
 if($_SESSION[username]=="") 
{ 
echo "<script>alert('請先登入會員，謝謝。!');window.location='SDLogin.html';</script>"; 
exit; 
} 
echo '<a  href="SDLogout.php" ></a>  '; //登入按鈕已隱藏 (沒有輸入文字)

//此判斷為判定觀看此頁有沒有權限
//說不定是路人或不相關的使用者
//因此要給予排除