<meta http-equiv="Content-Type" charset=utf-8" />

<?php
$link=mysqli_connect("localhost","user","xZzsT7yH9nqBrNAy","vote_affairs");
$username = $_SESSION['username'];
$sql = "SELECT * FROM votes ";

$result = mysqli_query($link,"SELECT * FROM votes where username='$username' &&  id='1' && likes='1'"); 
while($record = mysqli_fetch_array($result))
{
$likes = $record["likes"] ;
$id = $record["id"] ;
echo"<div style='width:202px;height:257px;margin-left:200px;background-color:white;'>
<img style='width:202px;height:151px' src='img_vote1.PNG'>
<p>贊成</p> 
</div>";

}


$result = mysqli_query($link,"SELECT * FROM votes where username='$username' &&  id='1' && unlikes='1'"); 
while($record = mysqli_fetch_array($result))
{
$likes = $record["likes"] ;
$id = $record["id"] ;
echo"<div style='width:202px;height:257px;margin-left:200px;background-color:white;'>
<img style='width:202px;height:151px' src='img_vote1.PNG'>
<p>反對</p> 
</div>";

}




$result = mysqli_query($link,"SELECT * FROM votes where username='$username' &&  id='2' && likes='1'"); 
while($record = mysqli_fetch_array($result))
{
$likes = $record["likes"] ;
$id = $record["id"] ;
echo"<div style='width:202px;height:257px;margin-top:-256px;margin-left:420px;background-color:white;'>
<img style='width:202px;height:151px' src='img_vote2.jpg'>
<p>贊成</p> 
</div>";

}

$result = mysqli_query($link,"SELECT * FROM votes where username='$username' &&  id='2' && unlikes='1'"); 
while($record = mysqli_fetch_array($result))
{
$likes = $record["likes"] ;
$id = $record["id"] ;
echo"<div style='width:202px;height:257px;margin-top:-256px;margin-left:420px;background-color:white;'>
<img style='width:202px;height:151px' src='img_vote2.PNG'>
<p>反對</p> 
</div>";

}


$result = mysqli_query($link,"SELECT * FROM votes where username='$username' &&  id='3' && likes='1'"); 
while($record = mysqli_fetch_array($result))
{
$likes = $record["likes"] ;
$id = $record["id"] ;
echo"<div style='width:202px;height:257px;margin-top:-256px;margin-left:6350px;background-color:white;'>
<img style='width:202px;height:151px' src='img_vote3.jpg'>
<p>贊成</p> 
</div>";

}

$result = mysqli_query($link,"SELECT * FROM votes where username='$username' &&  id='3' && unlikes='1'"); 
while($record = mysqli_fetch_array($result))
{
$likes = $record["likes"] ;
$id = $record["id"] ;
echo"<div style='width:202px;height:257px;margin-top:-256px;margin-left:635px;background-color:white;'>
<img style='width:202px;height:151px' src='img_vote3.jpg'>
<p>反對</p> 
</div>";

}
?>
