<!DOCTYPE html>

<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<?php
error_reporting(0);
include("SDcheck.php");

?>

	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="SDStyle.css">

	<script type="text/JavaScript">
		function OpenVideoWindows(theURL, winName, win_width, win_height) {
			var PosX = (screen.width - win_width) / 2;
			var PosY = (screen.height - win_height) / 2;
			features = "width=" + win_width + ",height=" + win_height + ",top=" + PosY + ",left=" + PosX;
			var newwin = window.open(theURL, winName, features);
		}
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.start').click(function() {
				setTimeout("window.location.href='SmileDetecter/index.html'",45000);
			});
		});
		
	

	</script>

</head>

<body>

	<div id="wrapper">
		<div id="title">
			<p>
				Choose Moive
			</p>
			<input type="button" onclick="location.href='SD2.jar'" value="下載程式" id="btn_download" >
		</div>
		<div id="movies">

			<div id="block1">
				

								<input type="button" onclick=OpenVideoWindows('lemon.php','test',2000,2000) class="start"  id="block1_video"; >
				
			</div>



				
			<div id="block2">  
				<input type="button" onclick=OpenVideoWindows('chinese.php','test',2000,2000) class="start"  id="block2_video"; >
				
			</div>
			<div id="block3">
<input type="button" onclick=OpenVideoWindows('halloween.php','test',2000,2000) class="start"  id="block3_video"; >
				
			</div>
			<div id="block4"></div>
<input type="button" onclick=OpenVideoWindows('interm.php','test',2000,2000) class="start"  id="block4_video"; >
				
			<div id="block5"></div>
<input type="button" onclick=OpenVideoWindows('machi.php','test',2000,2000) class="start"  id="block5_video"; >
				
			<div id="block6"></div>
<input type="button" onclick=OpenVideoWindows('people.php','test',2000,2000) class="start"  id="block6_video"; >
				
		</div>

	</div>
</body>
</html>
