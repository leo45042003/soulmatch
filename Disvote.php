<!DOCTYPE html>
<html lang="en">
	<meta charset="utf-8">
	<head>
		<link rel="stylesheet" type="text/css" href="DisvoteStyle.css">
		<script src="http://code.jquery.com/jquery-1.5.min.js"></script>
		<script src="http://cdn.wideskyhosting.com/js/jquery.cycle.js"></script>
		<script type="text/javascript">
			$("document").ready(function() {
				$("#slideshow1").cycle();

			});

			$("document").ready(function() {
				$("#slideshow2").cycle();

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
			<div id="top_bar">
				<img id="name" style="width:290px;height:100px;margin-left:5px;margin-top:15px;" src="banner_logo.png">

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
			<div id="img"> <img src="Disvote_title.JPG"> </div>
			<div id="slideshow1">

				<img src="top.JPG">
				<img src="down.JPG">
				
			
		
	

			</div>

			<a id="button1" href="articledisscuss.php"><span id="word1"> Article </span></a>

			<div id="slideshow2">

				<img src="top.JPG">
				<img src="down.JPG">

			</div>
		
		

				<a id="button2" href="articledisscuss.php"><span id="word2"> Vote </span></a>

			

		</div>
	</div>
	</body>
</html>
