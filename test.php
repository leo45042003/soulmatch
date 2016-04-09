<?php session_start(); ?>
<?php
error_reporting(0);
if ($_SESSION['username'] == null){
	echo "<script>alert('請先登入會員，謝謝。!');window.location='login.html';</script>"; 	
}
?>
<html>
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=big5">
    <link rel="stylesheet" type="text/css" href="testStyle.css" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="SmileDetecter/highcharts.js"></script>
	<script src="http://code.highcharts.com/highcharts-more.js"></script>
    <script type="text/javascript">
		function Event(n, e) {
			if (e == "true") {
				document.getElementById(n.id).style.overflow = "visible";
			} else {
				document.getElementById(n.id).style.overflow = "hidden";
			}
		}
<?php
		error_reporting(0);
		if($_SESSION['username'] != null){
			$id = $_SESSION['username'];
		}
?>
		$(function(){		
			var uid = '<?php echo $id; ?>';
			getdataS("SmileDetecter/sdMain.php?action=init",uid);	
			getdataE("eeg/eegMain.php?action=init",uid);
		});
		
		function getdataS(url,sid){
			$.getJSON(url,{id:sid},function(data){
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
							height: 350,
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
				else{ //for test sets success =! 1
<?php 
error_reporting(0);			
					echo '$("#btn_sagain").css("display","none");';			
?>
				}
			});
		}
		function getdataE(url,sid){
			$.getJSON(url,{id:sid},function(data){
				//load initial user's data 
				if(data.success==1){
					//data packaging 
					var encData = new Array(data.time.length);
					for(i=0;i<data.time.length;i++){
						encData[i] = new Array(3);
						encData[i][0] = data.time[i];
						encData[i][1] = data.data[i] ;
					}
					//data insertion
					$('#egraph').highcharts({
						chart: {
							type: 'spline',
							zoomType: 'x',
							animation: {
								duration: 10000
							}
						},
						title: {
							text: ' '
						},
						tooltip: {
							shared: true,
							useHTML: true,
							headerFormat: '<small>Time:{point.key}</small><table>',
							pointFormat: '<tr><td>{series.name}: </td>' +
								'<td style="text-align: right"><b>{point.y}</b></td></tr>',
							footerFormat: '</table>',
							valueDecimals: 0
						},
						series: [{
							name: 'EEG',
							data: encData     
						}]
					});
				}
				else{ //for test sets success=3
<?php 
error_reporting(0);			
					echo '$("#btn_eagain").css("display","none");';			
?>
				}
			});
		}
	</script>
  </head>
  <body>
  <div id="frame">
    <div id="wrapper">
	<div>
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
		</div>
		<div id="bot">
			<img id="bot_word" src="test_word.png">
		</div>
		<div id="img"></div>
	  

	  
		<div id="content">
			<div id="smile">				
				<div class="title">
					<p style="font-weight:bold;display:inline-block;">  微笑配對測試結果... </p> 
				</div>
				<div id="sgraph" class="graph"></div>
				<div class="rebtn">
					<input type="button" onclick="location.href='slide/main.php#secondPage'" value="再測一次!" id="btn_sagain" class="btn_again">
				</div>
			</div>
			<div id="eeg">
				<div class="title">
					<p style="font-weight:bold;display:inline-block;">  腦波配對測試結果... </p>
				</div>
				<div id="egraph" class="graph"></div> 
				<div class="rebtn">
					<input type="button" onclick="location.href='slide/brain.php'" value="再測一次!" id="btn_eagain" class="btn_again">
				</div>
			</div>
		</div>
    </div>
  </body>
</html>
