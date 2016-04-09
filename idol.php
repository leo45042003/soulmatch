<?php session_start(); ?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="idolStyle.css">
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

			</div>
			<div id="pic">

			</div>

			<div id="bot">
				<a style="text-decoration: none" href="Self.php"  class="bottool_bar" id="profile"> 個人資料 </a>
				<a style="text-decoration: none" href="idol.php"  class="bottool_bar" id="idol"> 理想標準 </a>
				<a style="text-decoration: none" href="participated.php"  class="bottool_bar" id="activity"> 我曾參加 </a>
				<a style="text-decoration: none" href="discussed.php"  class="bottool_bar" id="discuzz"> 我曾討論 </a>

				<p id="aboutme">馬上填寫您的理想伴侶!</p>
				
				<?php
				header("Content-Type:text/html; charset=utf-8");
				include ("idolmember.php");				
				?>
				 <input type="button" onclick="location.href='idolfill.php'" value="GO"  id="btn_GO" >
			</div>

			<div id="footer">

			</div>
		</div>
	</div>	
	</body>
</html>
