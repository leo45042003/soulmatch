<?php session_start(); ?>
<?php 
	error_reporting(0);
	if($_SESSION['username'] == null){
		echo "<script>alert('請先登入會員，謝謝。!');window.location='login.html';</script>"; 
	}
?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="voteStyle.css">
<link rel="stylesheet" href="PopupWindow_vote/custombox.min.css">
<link rel="stylesheet" href="PopupWindow_vote/demo.css">	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="PopupWindow_vote/custombox.min.js"></script>
<script src="PopupWindow_vote/legacy.min.js"></script>
<script type="text/javascript">
			$(function() {
				$('.redhand').on('click', function( e ) {
					Custombox.open({
						target: '#modal',
						effect: 'fadein'
					});
					e.preventDefault();
				});
				$('.bluehand').on('click', function( e ) {
					Custombox.open({
						target: '#modal',
						effect: 'fadein'
					});
					e.preventDefault();
				});
				$('.redhand2').on('click', function( e ) {
					Custombox.open({
						target: '#modal2',
						effect: 'fadein'
					});
					e.preventDefault();
				});
				$('.bluehand2').on('click', function( e ) {
					Custombox.open({
						target: '#modal2',
						effect: 'fadein'
					});
					e.preventDefault();
				});
				$('.bluehand3').on('click', function( e ) {
					Custombox.open({
						target: '#modal3',
						effect: 'fadein'
					});
					e.preventDefault();
				});
				
			});
			
			function Event(n, e) {
				if (e == "true") {
					document.getElementById(n.id).style.overflow = "visible";
				} else {
					document.getElementById(n.id).style.overflow = "hidden";
				}
			}
$(function(){
	<?php 
		$username = $_SESSION['username']; 
		echo "var user='$username';";
	?>	 
	getdata("action.php?action=dom",1,user);
	getdata2("action.php?action=dom",2,user);	
	getdata3("action.php?action=dom",3,user);
	$(".redhand").click(function(){
	getdata("action.php?action=red",1,user);
	});
	
	$(".bluehand").click(function(){
		getdata("action.php?action=blue",1,user); 
	});
	//=============================================
	$(".redhand2").click(function(){
		getdata2("action.php?action=red",2,user);	
	});
	$(".bluehand2").click(function(){
		getdata2("action.php?action=blue",2,user); 
	});
	//=============================================
	$(".redhand3").click(function(){
		getdata3("action.php?action=red",3,user);
	});
	$(".bluehand3").click(function(){
		getdata3("action.php?action=blue",3,user); 
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

function getdata2(url,sid,uid){
	$.getJSON(url,{id:sid,username:uid},function(data){
		if(data.success==1){
			var w = 288;
			//set red bar
			$("#red2_num").html(data.red);
			$("#red2").css("width",data.red_percent*100+"%");
			var red_bar_w = w*data.red_percent-10;
			$("#red2_bar").css("width",red_bar_w);
			//set blue bar
			$("#blue2_num").html(data.blue);
			$("#blue2").css("width",data.blue_percent*100+"%");
			var blue_bar_w = w*data.blue_percent;
			$("#blue2_bar").css("width",blue_bar_w);
		}else{
			alert(data.msg);
		}
	});
};


function getdata3(url,sid,uid){
	$.getJSON(url,{id:sid,username:uid},function(data){
		if(data.success==1){
			var w = 288;
			//set red bar
			$("#red3_num").html(data.red);
			$("#red3").css("width",data.red_percent*100+"%");
			var red_bar_w = w*data.red_percent-10;
			$("#red3_bar").css("width",red_bar_w);
			//set blue bar
			$("#blue3_num").html(data.blue);
			$("#blue3").css("width",data.blue_percent*100+"%");
			var blue_bar_w = w*data.blue_percent;
			$("#blue3_bar").css("width",blue_bar_w);
		}else{
			alert(data.msg);
		}
	});
};

</script>



</head>

<body>
<div id="frame"> 

<div id="wrapper">

<div id="title">
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
			<?php 
				error_reporting(0);
				if($_SESSION['username'] != null){
					echo '<a style="position:absolute;margin-left:640px;margin-top:58px;text-decoration:none" href="logout.php"  id="apDiv6_1">登出</a>  <br><br>';
				}				
			?>
			</div>


<br><br>
<div id="main">

<img style="margin-left:50px;margin-top:50px;position:relative" src="bigtitle.jpg">
   <div class="vote1">
		<div class="img_vote">
<img style="width:275px;height:180px;border: 10px solid rgba(255, 255, 255, 1);" id="img_vote1" src="img_vote1.jpg"/>
		</div>
		<div class="red" id="red">
		
			<div class="redhand"> </div>
			<div class="redbar" id="red_bar">
				<span> </span>
				<p id="red_num"> </p>
			</div>
		</div>
		<div class="blue" id="blue">
			
			<div class="bluehand"> </div>
			<div class="bluebar" id="blue_bar"style="margin-left:0px;" >
				<span> </span>
				<p id="blue_num"> </p>
				<img style="margin-left:-160;margin-top:0; width:300px;height:95px;" src="title1.png">
				
			</div>
		</div>
   </div>

     <div class="vote2">
		<div class="img_vote">
			<img style="width:275px;height:180px;border: 10px solid rgba(255, 255, 255, 1);" id="img_vote2" src="img_vote2.jpg"/>
		</div>
		<div class="red2" id="red2">
		
			<div class="redhand2"> </div>
			<div class="redbar2" id="red2_bar">
				<span> </span>
				<p id="red2_num"> </p>
			</div>
		</div>
		<div class="blue2" id="blue2">
			
			<div class="bluehand2"> </div>
			<div class="bluebar2" id="blue2_bar" style="margin-left:300px;">
				<span> </span>
				<p id="blue2_num"> </p>
				<img style="margin-left:-200px;margin-top:1px; width:300px;height:80px;" src="title2.png">
			
			</div>
		</div>
   </div>
   
   
    
      
   <div class="vote3">
		<div class="img_vote">
			<img style="width:265px;height:180px;border: 10px solid rgba(255, 255, 255, 1);" id="img_vote3" src="img_vote3.jpg"/>
		</div>
		<div class="red3" id="red3">
		
			<div class="redhand3"> </div>
			<div class="redbar3" id="red3_bar">
				<span> </span>
				<p id="red3_num"> </p>
			</div>
		</div>
		<div class="blue3" id="blue3">
			
			<div class="bluehand3"> </div>
			<div class="bluebar3" id="blue3_bar" style="margin-left:40px;">
				<span> </span>
				<p id="blue3_num"> </p>
				<img style="margin-left:-180px;margin-top:-15px; width:300px;height:100px;" src="title3.png">
				
			</div>
		</div>
   </div>
   
   
   <div id="modal" class="modal-demo">
    <button type="button" class="close" onclick="Custombox.close();">
        <span>x</span>
    </button>
    <h4 class="title" style="text-align:center;">投票結果-婚後應該跟長輩同住嗎?</h4>
    <div class="text">
		<?php
			include ("aftervote.php");
		?>   
	</div>
	</div>
	<!--2 -->
	<div id="modal2" class="modal-demo">
    <button type="button" class="close" onclick="Custombox.close();">
        <span>x</span>
    </button>
    <h4 class="title" style="text-align:center;">投票結果-前男/女友還可以是朋友嗎?</h4>
    <div class="text">
		<?php
			include ("aftervote2.php");
		?>   
	</div>
	</div>
	<!--3 -->
	<div id="modal3" class="modal-demo">
    <button type="button" class="close" onclick="Custombox.close();">
        <span>x</span>
    </button>
    <h4 class="title" style="text-align:center;">投票結果-你接受閃婚嗎?</h4>
    <div class="text">
		<?php
			include ("aftervote3.php");
		?>   
	</div>
	</div>
   
</div>
</div>

</div>
</body>
</html>
