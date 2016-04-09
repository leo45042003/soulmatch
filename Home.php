<?php session_start(); ?>
<html>
	<head>
		<meta charset="utf-8">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="HomeStyle.css">
		<script>
			$(function(){			
			<?php 
				error_reporting(0);
				if($_SESSION['username'] != null){
					echo '$("#btn_register").css("display","none");';
					echo '$("#btn_login").css("display","none");';
				}				
			?>
			});
			
			function Event(n, e) {
				if (e == "true") {
					document.getElementById(n.id).style.overflow = "visible";
				} else {
					document.getElementById(n.id).style.overflow = "hidden";
				}
			}
		</script>
	</head>

	<body>
	<div id="frame"> 
		<div id="wrapper">

			<div id="title">
				<img id="name" style="width:290px;height:100px;margin-left:5px;" src="banner_logo.png">

				<ul id="apDiv1"  onmouseover="Event(this,'true');" onmouseout="Event(this,'');">
					<li>
						<a id="apDiv1_1" href="Home.php">關於我</a>
					</li>
					<li>
						<a class="bar" href="Self.php">關於自己&nbsp &nbsp</a>
					</li>
					<li>
						<a class="bar" href="test.php">測試結果&nbsp &nbsp</a>
					</li>
					<li>
						<a class="bar" href="match.php">開始配對&nbsp &nbsp </a>
					</li>
					<li>
						<a class="bar" href="help.php">愛情急診室  </a>
					</li>
					
				</ul>
				<ul id="apDiv2" onmouseover="Event(this,'true');" onmouseout="Event(this,'');">
					<li>
					<a id="apDiv2_1" href="slide/main.php">腦波/腦部測試系統</a>
						
					</li>
					
					<li>
						<a class="bar" href="slide/brain.php">腦波測試系統</a>
					</li>
					<li>
						<a class="bar" href="slide/main.php#secondPage">臉部測試系統</a>
					</li>
					
				</ul>
				<ul id="apDiv3" onmouseover="Event(this,'true');" onmouseout="Event(this,'');">
					
					<li>
					<a id="apDiv3_1" href="activity/activity.php">活動專區</a>	
					</li>

				</ul>
				<ul id="apDiv4" onmouseover="Event(this,'true');" onmouseout="Event(this,'');">
					<li>
					<a id="apDiv4_1" href="Disvote.php">投票議題討論區</a>						
					</li>
					<li>				
					<a class="bar" href="vote.php">投票議題區</a>				
					</li>		
					<li>				
					<a class="bar" href="articledisscuss.php">議題討論區</a>					
					</li>
				</ul>
				<ul id="apDiv5">
					<li>
					<a id="apDiv5_1" href="main.html">Home</a>
					</li>					
				</ul>
			</div>

			<div id="content">
				<p id="content_word">
					Create  your  future  with  us
				</p>
			</div>

  <input type="button" onclick="location.href='register.html'" value="註冊"  id="btn_register" >
			<input type="button" onclick="location.href='login.html'" value="登入" id="btn_login" >
			
			<div id="bot">

				<input type="button" onclick="location.href='Self.php'"  id="btn_profile"; >
				<input type="button" onclick="location.href='Help.php'"  id="btn_emergency" >
				<input type="button" onclick="location.href='test.php'"  id="btn_EEC" >
				<input type="button" onclick="location.href='match.php'"  id="btn_mr_right" >

				<p  style="font-weight: bolder" id="Pprofile" >
					個人資料
				</p>
				<p  style="font-weight: bolder" id="Pemergency" >
					愛情急診室
				</p>
				<p  style="font-weight: bolder" id="PEEC" >
					腦波/臉部辨識結果
				</p>
				<p  style="font-weight: bolder" id="Pmr_right" >
					我的Mr./Mrs.Right
				</p>
			</div>

			<?php 
				error_reporting(0);
				if($_SESSION['username'] != null){
					echo '<a style="position:absolute;margin-left:930px;margin-top:-887px;text-decoration:none" href="logout.php"  id="apDiv6_1">登出</a>  <br><br>';
				}				
			?>
		</div>

	</body>
</html>
