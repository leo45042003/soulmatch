<?php session_start(); ?>
<?php
error_reporting(0);
if ($_SESSION['username'] == null){
	echo "<script>alert('請先登入會員，謝謝。!');window.location='../login.html';</script>"; 	
}
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Smile Detecter 笑容辨識系統</title>
	<link rel="stylesheet" type="text/css" href="overview.css" />
	
	<!--[if IE]>
		<script type="text/javascript">
			 var console = { log: function() {} };
		</script>
	<![endif]-->

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="highcharts.js"></script>
	<script src="http://code.highcharts.com/highcharts-more.js"></script>

	<script type="text/javascript">
<?php
		error_reporting(0);
		if($_SESSION['username'] != null){
			$id = $_SESSION['username'];
		}
?>
		$(function(){		
			var uid = '<?php echo $id; ?>';
			getdata("sdMain.php?action=init",uid);
			getdata("sdMain.php?action=simi",uid);			
		});
		
		function getdata(url,sid){
			$.getJSON(url,{id:sid},function(data){
				//load initial user's data 
				if(data.success==1){
					//data packaging 
					var encData = new Array(data.time.length);
					for(i=0;i<data.time.length;i++){
						encData[i] = new Array(3);
						encData[i][0] = data.time[i];
						encData[i][1] = 0;
						encData[i][2] = data.data[i] ;
					}
					//data insertion
					$('#sgraph').highcharts({
						chart: {
							type: 'bubble',
							height: 400,
							zoomType: 'x'
						},
						title: {
							text: ' '
						},
						
						xAxis: {
							min: 0,
							max: 45,
						},
						tooltip: {
							shared: true,
							useHTML: true,
							headerFormat: '<small>Time:{point.key}</small><table>',
							pointFormat: '<tr><td>{series.name}: </td>' +
								'<td style="text-align: right"><b>{point.z}</b></td></tr>',
							footerFormat: '</table>',
							valueDecimals: 2
						},
						series: [{
							name: 'Smile Dots',
							data: encData     
						}]
					});
				}
				//search similar user
				else if(data.success==2){					
					var nameData = new Array(data.name.length);
					var result = "";		
					var phobj = "";
					var length = data.name.length;
					if(length > 8){
						length = 8;
					}
					document.getElementById("rtitle").innerHTML = "速配指數";
					for(i=0;i<length;i++){	
						phobj = "photo"+i;
						scobj = "score"+i;
						timer = i*230;
						result = '<a><img id="' + i + '" src="photos/proportion/' + data.data[i] + '.png" height="200" width="200" ></a>';
						document.getElementById(phobj).innerHTML = result;	
						$("#"+phobj).css("opacity","0.0"); 
						$("#"+scobj).css("opacity","0.0"); 
						$("#"+phobj).delay(timer).animate({opacity: '1.0'},1000);
						$("#"+scobj).delay(timer).animate({opacity: '1.0'},1000);						
					}
					$("#0").hover(function(){$(this).attr("src",'photos/' + data.photo[0])},function(){$(this).attr("src","photos/proportion/" + data.data[0] + ".png")});
					$("#1").hover(function(){$(this).attr("src",'photos/' + data.photo[1])},function(){$(this).attr("src","photos/proportion/" + data.data[1] + ".png")});
					$("#2").hover(function(){$(this).attr("src",'photos/' + data.photo[2])},function(){$(this).attr("src","photos/proportion/" + data.data[2] + ".png")});
					$("#3").hover(function(){$(this).attr("src",'photos/' + data.photo[3])},function(){$(this).attr("src","photos/proportion/" + data.data[3] + ".png")});
					$("#4").hover(function(){$(this).attr("src",'photos/' + data.photo[4])},function(){$(this).attr("src","photos/proportion/" + data.data[4] + ".png")});
					$("#5").hover(function(){$(this).attr("src",'photos/' + data.photo[5])},function(){$(this).attr("src","photos/proportion/" + data.data[5] + ".png")});
					$("#6").hover(function(){$(this).attr("src",'photos/' + data.photo[6])},function(){$(this).attr("src","photos/proportion/" + data.data[6] + ".png")});
					$("#7").hover(function(){$(this).attr("src",'photos/' + data.photo[7])},function(){$(this).attr("src","photos/proportion/" + data.data[7] + ".png")});
					$("#8").hover(function(){$(this).attr("src",'photos/' + data.photo[8])},function(){$(this).attr("src","photos/proportion/" + data.data[8] + ".png")});
				}
				else{ //for test sets success=3
					//alert(data.data);
				}
			});
		}
	</script>


</head>
<body>
<div id="frame">
<div id="wrapper">
	<div id="top_bar">
		<img id="name" style="width:290px;height:100px;margin-left:550px;" src="../banner_logo.png">

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
				<a id="apDiv3_1" href="../activity/activity.php">活動專區</a>	
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
	</div>
	<div class="section " id="section0">
			<div id="sgraph"></div>
			<div id="simiUserList">
				<div id="matchindex" >
					<a id="rtitle"></a>
				</div>
				<div id="block0" class="blocks1">
					<div id="score0"></div>	
					<div id="photo0"></div>	
				</div>
				<div id="block1" class="blocks">
					<div id="score1"></div>	
					<div id="photo1"></div>							
				</div>
				<div id="block2" class="blocks">
					<div id="score2"></div>	
					<div id="photo2"></div>								
				</div>
				<div id="block3" class="blocks">
					<div id="score3"></div>	
					<div id="photo3"></div>	
				</div>
				<div id="block4" class="blocks">
					<div id="score4"></div>	
					<div id="photo4"></div>		
				</div>
				<div id="block5" class="blocks">
					<div id="score5"></div>	
					<div id="photo5"></div>		
				</div>
				<div id="block5" class="blocks">
					<div id="score6"></div>	
					<div id="photo6"></div>		
				</div>
				<div id="block5" class="blocks">
					<div id="score7"></div>	
					<div id="photo7"></div>		
				</div>
				<div id="block5" class="blocks">
					<div id="score8"></div>	
					<div id="photo8"></div>		
				</div>
				<div id="block5" class="blocks">
					<div id="score9"></div>	
					<div id="photo9"></div>		
				</div>
			</div>				
	</div>
	</div>
	</div>
</body>
</html>