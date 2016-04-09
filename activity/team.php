<?php session_start(); ?>
<html>
<head>
    <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="teamStyle.css">

    <title></title>



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
				<img id="name" style="width:290px;height:100px;margin-left:60px;margin-top:15px;" src="banner_logo.png">

				<ul id="apDiv1"  onmouseover="Event(this,'true');" onmouseout="Event(this,'');">
					<li>
						<a id="apDiv1_1" href="../Home.php">關於我</a>
					</li>
					<li>
						<a class="bar" href="../Self.php">關於自己&nbsp &nbsp</a>
					</li>
					<li>
						<a class="bar" href="../test.php">測試結果&nbsp &nbsp</a>
					</li>
					<li>
						<a class="bar" href="../match.php">開始配對&nbsp &nbsp </a>
					</li>
					<li>
						<a class="bar" href="../help.php">愛情急診室  </a>
					</li>
					
				</ul>
				<ul id="apDiv2" onmouseover="Event(this,'true');" onmouseout="Event(this,'');">
					<li>
					<a id="apDiv2_1" href="../slide/main.php">腦波/腦部測試系統</a>
						
					</li>
					
					<li>
						<a class="bar" href="../slide/brain.php">腦波測試系統</a>
					</li>
					<li>
						<a class="bar" href="../slide/main.php#secondPage">臉部測試系統</a>
					</li>
					
				</ul>
				<ul id="apDiv3" onmouseover="Event(this,'true');" onmouseout="Event(this,'');">
					
					<li>
					<a id="apDiv3_1" href="activity.php">活動專區</a>	
					</li>

				</ul>
				<ul id="apDiv4" onmouseover="Event(this,'true');" onmouseout="Event(this,'');">
					<li>
					<a id="apDiv4_1" href="../Disvote.php">投票議題討論區</a>						
					</li>
					<li>				
					<a class="bar" href="../vote.php">投票議題區</a>				
					</li>		
					<li>				
					<a class="bar" href="../articledisscuss.php">議題討論區</a>					
					</li>
				</ul>
				<ul id="apDiv5">
					<li>
					<a id="apDiv5_1" href="../main.html">Home</a>
					</li>					
				</ul>
			<?php 
				error_reporting(0);
				if($_SESSION['username'] != null){
					echo '<a style="position:absolute;margin-left:700px;margin-top:58px;text-decoration:none" href="logout.php"  id="apDiv6_1">登出</a>  <br><br>';
				}				
			?>
			</div>
		
		</ul>
	
		<div style=" margin-left:0px; display:inline">
		<a href="activity.php"><div class="boxes" style="display:inline;position:absolute; margin-top:100px;"><p class="boxes_word">聯誼活動</p></div></a>
		<br>
		<a href="team.php"><div class="boxes" style="display:inline;position:absolute; margin-top:150px;"><p class="boxes_word">團體聯誼</p></div></a>
		<br>
		<a href="lesson.php"><div class="boxes" style="display:inline;position:absolute; margin-top:200px;"><p class="boxes_word">跨界課程</p></div></a>
		<br>
		<a href="produce.php"><div class="boxes" style="display:inline;position:absolute; margin-top:250px;"><p class="boxes_word">客製約會</p></div></a>
	
		</div>
		<div id="content">
		
		<img style="margin-left:500px;" src="title.png">
	
		
		<img id="pic1" style="width:620;height:424;margin-left:200px;" src="women.jpg">
		<img id="pic1" style="width:204;height:152;margin-left:825px;margin-top:-424px;" src="righttop.jpg">
		<img id="pic1" style="width:204;height:268;margin-left:825px;margin-top:-270px;" src="rightdown.jpg">
		<img id="pic1" style="width:412;height:308;margin-left:200px;margin-top:5px;" src="leftdown.jpg">
		<img id="pic1" style="width:412;height:308;margin-left:620px;margin-top:-305px;" src="rightdowndown.JPG">
	
	
			<img style="margin-left:500px;" src="bot_title.png">
		<div id="past">
		<img style="padding-left:20px; padding-top:20px;" src="innerpic.jpg">
		
		
		</div>
		
		
		</div>
		
		 
	</div>
</div>
</body>
</html>
