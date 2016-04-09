<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//�Nsession�M��
unset($_SESSION['username']);
echo '你已成功登出';
echo '<meta http-equiv=REFRESH CONTENT=1;url=main.php>';
?>

