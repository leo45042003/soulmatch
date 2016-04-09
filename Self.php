<?php session_start(); ?>
<?php
error_reporting(0);
if ($_SESSION['username'] == null){
	echo "<script>alert('請先登入會員，謝謝。!');window.location='login.html';</script>"; 	
}
?>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="SelfStyle.css">
		<script>
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
					<li>
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
					+關於自己
					
				</p>
				
				<p style="margin-left:100px;margin-top:-90px;font-weight: bold;font-si"> 會員資料 </p>

			</div>
			<div id="pic">

			</div>

			<div id="bot">
				<a style="text-decoration: none" href="Self.php"  class="bottool_bar" id="profile"> 個人資料 </a>
				
				<a style="text-decoration: none" href="idol.php"  class="bottool_bar" id="idol"> 理想標準 </a>
				 
				<a style="text-decoration: none" href="participated.php"  class="bottool_bar" id="activity"> 我曾參加 </a>
			
				<a style="text-decoration: none" href="discussed.php"  class="bottool_bar" id="discuzz"> 我曾討論 </a>

				<img style="position:absolute;margin-top:0px;margin-left:260px;" id="aboutme" src="aboutme.png">
				
				<?php
				include ("member.php");
				?>
				<input type="button" onclick="location.href='update.php'" value="" id="btn_Edit" >
			</div>
		</div>
	</div>
	</body>
</html>
