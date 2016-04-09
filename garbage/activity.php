<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>

  <meta charset="big-5">
    <link rel="stylesheet" type="text/css" href="activityStyle.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script type="text/javascript">
	
	$(function(){
	<?php 
		$username = $_SESSION['username']; 
		echo "var user='$username';";
	?>	 
	getdata("action1.php?action1=dom",1,user);
	
	$(".redhand").click(function(){
	getdata("action1.php?action1=red",1,user);
	});
	
	
});

	
	function getdata(url,sid,uid){
	$.getJSON(url,{id:sid,username:uid},function(data){
		if(data.success==1){
			var w = 288;
			//set red bar
			$("#red_num").html(data.red);
			$("#red").css("width",data.red_percent*100+"%");
			var red_bar_w = w*data.red_percent-10;
			$("#red_bar").css("width",red_bar_w);
			//set blue bar
			$("#blue_num").html(data.blue);
			$("#blue").css("width",data.blue_percent*100+"%");
			var blue_bar_w = w*data.blue_percent;
			$("#blue_bar").css("width",blue_bar_w);
		}else{
			alert(data.msg);
		}
	});
};
	
	
	
	
	
	
	
	
	</script>
	
	
	
  </head>
  <body>
  <div id="wrapper">
  
	<div id="top">
		<input type="button" onclick="location.href='activity.php'" value="活動類型" style="color:white;"  id="btn_type" >
		<input type="button" onclick="location.href='activity.php'" value="跨界課程" style="color:white;"  id="btn_type" >
		<input type="button" onclick="location.href='register.html'" value="客製約會" style="color:white;"  id="btn_type" >
		<hr  style="position:absolute;margin-top:105px;" width="53%" id="HR1" size="3" color="black" align="center" />
    
  
  
	</div>
  
  <div id="content"> 
  
  <img style="margin-left:250px;margin-top:40px;" src="recent.jpg">
  
  </div> 

  
  
  <div id="mid">
	 <div id="left">
	 
	 	<p id="activity1_title">
		本季精選
		</p>	
		<img id="leftbox1" style="width:304px;height:209px;" src="down.JPG"> 
	 </div>
	 
	<div id="right">
	</div> 

	
	<div class="vote1">
		<div class="img_vote">
		  
		</div>
		<div class="red" id="red">
		
			<div id="attend" class="redhand"> </div>
			<div class="redbar" id="red_bar">
				<span> </span>
				<p id="red_num"> </p>
			</div>
		</div>
		<div class="blue" id="blue">
			
			
			<div class="bluebar" id="blue_bar">
				<span> </span>
				<p id="blue_num"> </p>
				
				
			</div>
		</div>
   </div>
	
	
	

 
  </div>
  
  <div id="activity2">
  
  <div id="left2">
  
  
 
  
  </div>
  
  <div id="right2">
  <img id="rightbox1" style="width:304px;height:209px;" src="rightbox.JPG"> 
  
  </div>
  
  
  </div>
  
  
  </body>
</html>