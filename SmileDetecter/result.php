<?php session_start(); ?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Smile Detecter 笑容辨識系統</title>
	<link rel="stylesheet" type="text/css" href="overview.css" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="highcharts.js"></script>
	<script src="http://code.highcharts.com/highcharts-more.js"></script>

	<script type="text/javascript">
		$(function(){
			<?php  
			$username = $_SESSION['username']; 
			echo "var user='$username';";
			?>	
			getdata("sdMain.php?action=init",user);
			getdata("sdMain.php?action=simi",user);			
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
					$('#graph').highcharts({
						chart: {
							type: 'bubble',
							plotBorderWidth: 0,
							zoomType: 'x',
						},
						title: {
							text: '您的笑容地圖'
						},						
						series: [{
							name: 'Smile Dots',
							data: encData,
							animation: {
								duration: 2000
							}
						}],
						tooltip: {
							useHTML: true,
							headerFormat: '<table>',
							pointFormat: '<tr><th>Smile Dots</th></tr>' +
								'<tr><th>微笑指數:</th><td>{point.z}</td></tr>' +
								'<tr><th>時間:</th><td>{point.x}</td></tr>',
							footerFormat: '</table>',
							followPointer: false
						},
						plotOptions: {
							bubble:{
								maxSize: "100px",
								minSize: "50px",
								cropThreshold: 500
							}
						},
						xAxis: {
							min: 0,
							max: 45
						},
						yAxis: {
							title:  {
								text: ""
							}
						},
						
					});
				}
				//search similar user
				else if(data.success==2){					
					var nameData = new Array(data.name.length);
					var result = "";		
					var phobj = "";
					var length = data.name.length;
					for(i=0;i<length;i++){	
						phobj = "photo"+i;
						scobj = "score"+i;
						timer = i*1000+1000;
						result = '<a href="http://www.w3school.com"><img id="' + i + '" src="photos/proportion/' + data.data[i] + '.png" height="200" width="200" ></a>';
						document.getElementById(phobj).innerHTML = result;	
						document.getElementById("score"+i).innerHTML = "速配指數 : ";
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
				
				}
				else{ //for test sets success=3
					alert(data.data);
				}
			});
		}
	</script>


</head>
<body>
	<div class="section " id="section0">
		<div class="intro">
			<div id="graph"></div>
			<div id="simiUserList">
				<div id="block0" class="blocks">
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
				</div>s
				<div id="block6" class="blocks">
					<div id="score6"></div>	
					<div id="photo6"></div>		
				</div>
				<div id="block7" class="blocks">
					<div id="score7"></div>	
					<div id="photo7"></div>		
				</div>
			</div>
			
		</div>
	</div>




</body>
</html>