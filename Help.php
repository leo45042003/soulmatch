<?php session_start(); ?>
<html">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="HelpStyle.css">
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
			<?php 
				error_reporting(0);
				if($_SESSION['username'] != null){
					echo '<a style="position:absolute;margin-left:930px;margin-top:58px;text-decoration:none" href="logout.php"  id="apDiv6_1">登出</a>  <br><br>';
				}				
			?>
			</div>
					<div id="mid">

						<img  id="mid_word" src="mid_word.png">
								

					</div>
			<div id="bot">
			
                <p id="bot_word"><img  id="heart" src='heart.PNG'>每週都會精選匿名人士的愛情Q&A喔！</p>
				
				<p id="bot_word2">有沒有替你問出內心深埋已久的兩性問題呢?</p>

				<?php include("show.php") ?>

				<p id="bot_word3">歡迎寫下你/妳的疑難雜症,讓愛情大師為你/妳解惑:</p>	
				
				<form action="mboardcoonect.php" method="post">
				<input type="text" id="box1" name="name" size="21.5"  maxlength="10"placeholder="Name">
					<br>
				<input type="text" id="box2" name="email" size="21" maxlength="20"placeholder="Email">
				<br>
				<input type="text" id="box3" name="title" size="21" maxlength="20"placeholder="Title">
				<br>
				
				<textarea id="box4" name="content" cols="30" rows="6" placeholder="我想要說...."></textarea>
				
				
				
					<input id="btn_submit" type="submit"  name="submit" value="Send" />
				</form>

				
				
				

			</div> 
		</div>
	</div>	
	</body>
</html>
