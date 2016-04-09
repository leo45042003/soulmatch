<?php
include_once ("vote_connect.php");

$action = $_GET['action'];
$username = $_GET['username'];
$id = $_GET['id'];

//$ip = get_client_ip();
$ip = "140.1559.594.38";

if ($action == 'red') {
	vote(1, $id, $ip, $username, $link);
} elseif ($action == 'blue') {
	vote(0, $id, $ip, $username, $link);
} else {
	echo jsons($id,$link);
}

function vote($type, $id, $ip, $username, $link) {
	  $ip_sql = mysqli_query($link, "select ip from votes_ip where vid='$id' and ip='$ip'");
	  $count = mysqli_num_rows($ip_sql);
	  if ($count == 0 ) {
		    if ($type == 1) {//红方
				  $sql = "update votes set likes=likes+1 where No='$id'";		
				  $sql2= "INSERT INTO `votes`(`id`, `likes`, `unlikes`, `username`) VALUES ($id,1,0,'$username')";
							 //posttime 時間欄位 未插入
		    } 
		    else {//藍方
			      $sql = "update votes set unlikes=unlikes+1 where No='$id'";
				  $sql2= "INSERT INTO `votes`(`id`, `likes`, `unlikes`, `username`) VALUES ($id,0,1,'$username')";
		    }
		    mysqli_query($link, $sql);
			mysqli_query($link, $sql2);


		    $sql_in = "insert into votes_ip (vid,ip) values ('$id','$ip')";
		    mysqli_query($link, $sql_in);
		    $count_after = mysqli_num_rows(mysqli_query($link, "select ip from votes_ip where vid='$id' and ip='$ip'"));
						
		    if ($count_after > 0) {//if insertion is done
			    echo jsons($id, $link);
		    }    
		    else {
			      $arr['success'] = 0;
			      $arr['msg'] = '投票失敗，請重新投票';
			      echo json_encode($arr);
		    }
	  } 
	  else {
		    $arr['success'] = 0;
		    $arr['msg'] = '您已經投票過囉!';
		    echo json_encode($arr);
	    }
}
  
function jsons($id,$link) {
	$query = mysqli_query($link, "select * from votes where id=" . $id);
	$row = mysqli_fetch_array($query);
	$red = $row['likes'];
	$blue = $row['unlikes'];
	$arr['success'] = 1;
	$arr['red'] = $red;
	$arr['blue'] = $blue;
	$red_percent = round($red / ($red + $blue), 3);
	$arr['red_percent'] = $red_percent;
	$arr['blue_percent'] = 1 - $red_percent;
	return json_encode($arr);
}

function get_client_ip() {
	if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown"))
		$ip = getenv("HTTP_CLIENT_IP");
	else if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown"))
		$ip = getenv("HTTP_X_FORWARDED_FOR");
	else if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown"))
		$ip = getenv("REMOTE_ADDR");
	else if (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown"))
		$ip = $_SERVER['REMOTE_ADDR'];
	else
		$ip = "unknown";
	return ($ip);
}
?>