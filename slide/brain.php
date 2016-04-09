<?php session_start(); ?>
<head>
<title>Smile Detector</title>
	<meta http-equiv="Content-Type" ; charset=UTF-8" />
	
	<link rel="stylesheet" type="text/css" href="javascript.fullPage.css" />
	<link rel="stylesheet" href="PopupWindow/custombox.min.css">
	<link rel="stylesheet" href="PopupWindow/demo.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="PopupWindow/custombox.min.js"></script>
		<script src="PopupWindow/legacy.min.js"></script>
	
	<script type="text/javascript"> 

		$(function() {
			$('#block1_video').on('click', function( e ) {
					Custombox.open({
						target: '#modal',
						effect: 'fadein'
					});
					e.preventDefault();
				});
			});
		$(function() {
			$('#block2_video').on('click', function( e ) {
					Custombox.open({
						target: '#modal2',
						effect: 'fadein'
					});
					e.preventDefault();
				});
			});
		$(function() {
			$('#block3_video').on('click', function( e ) {
					Custombox.open({
						target: '#modal3',
						effect: 'fadein'
					});
					e.preventDefault();
				});
			});
		$(function() {
			$('#block4_video').on('click', function( e ) {
					Custombox.open({
						target: '#modal4',
						effect: 'fadein'
					});
					e.preventDefault();
				});
			});
		$(function() {
			$('#block5_video').on('click', function( e ) {
					Custombox.open({
						target: '#modal5',
						effect: 'fadein'
					});
					e.preventDefault();
				});
			});
		$(function() {
			$('#block6_video').on('click', function( e ) {
					Custombox.open({
						target: '#modal6',
						effect: 'fadein'
					});
					e.preventDefault();
				});
			});		
		
			
			
			
			
		$(document).ready(function() {
			$('.start').click(function() {
				setTimeout("window.location.href='Home.php'",45000);
			});
		});
		
		function Event(n, e) {
				if (e == "true") {
					document.getElementById(n.id).style.overflow = "visible";
				} else {
					document.getElementById(n.id).style.overflow = "hidden";
				}
			}
	

	
	
	
	
	</script>

	<style>
		/* Reset CSS
		 * --------------------------------------- */
		body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,
		form,fieldset,input,textarea,p,blockquote,th,td {
		    padding: 0;
		    margin: 0;
		}
		a{
			text-decoration:none;
		}
		table {
		    border-spacing: 0;
		}
		fieldset,img {
		    border: 0;
		}
		address,caption,cite,code,dfn,em,strong,th,var {
		    font-weight: normal;
		    font-style: normal;
		}
		strong{
			font-weight: bold;
		}
		ol,ul {
		    list-style: none;
		    margin:0;
		    padding:0;
		}
		caption,th {
		    text-align: left;

		}
		
		q:before,q:after {
		    content:'';
		}
		abbr,acronym { border: 0;
		}


		/* Custom CSS
		 * --------------------------------------- */
		body{
			font-family: arial,helvetica;
			color: #F2F2F2;
		}
		
	
		.content{
			position: relative;
			top: 20%;
			transform: translateY(-50%);
			text-align: center;
		}
		

	
		

		/* secondPage
		 * --------------------------------------- */
		#test{
			background:url("SDbk.jpg");no-repeat ;
			background-size: cover;
		}
		#section1 h1{
			color: #fff;
		}
		#section1 p{
			opacity: 0.8;
		}
				
		#box{
			    border: 2px solid transparent;
				position:absolute;
				top:0; bottom:0; left:0; right:0; margin:auto; 
				width: 874px;
				height: 427px;
				background-color: rgba(255, 255, 255, 0.46);
				border-radius: 0;
				box-shadow: 0 1px 4px rgba(0, 0, 0, 0.6)
		}

		
		
		
		#title_word{
			margin-top:30px;
			float:left;
			font-weight: bold;
			font: normal normal normal 40px/1.4em din-next-w01-light,din-next-w02-light,din-next-w10-light,sans-serif;
			color: #605E5E;
			
		}
		
		#content_word{
			font-size: 18px; 
			line-height: 1.2em;    
			font: normal normal normal 15px/1.4em din-next-w01-light,din-next-w02-light,din-next-w10-light,sans-serif;
			color: #605E5E;
			word-wrap: break-word;
		    width: 665px;
			height:107px;
			margin:0 auto;
			text-align:left;
		    
		}
		
		.normal_word{
			font-family: open sans condensed,sans-serif;
		    font-size: 26px;
			font-weight: bold;
			text-shadow: #ffffff 0px 0px 6px;
			color: #605E5E;
			word-wrap: break-word;
}
#top_bar{
			
			width:980px;
			height:50px;
			margin:auto;
				}
#apDiv1, #apDiv2, #apDiv3, #apDiv4, #apDiv5 {
			line-height: 43px;
			position:relative;
			height: 15px;
			cursor: pointer;
			overflow: hidden;
			float: right;
			list-style-type: none;
			margin-top:58px;
			padding-top: 110px;
			padding-right: 10px;
			padding-bottom: 5px;
			padding-left: 10px;
			font-size: 18px;
			color: #F2668F;
			font: normal normal normal 14px/1.4em helvetica-w01-roman,helvetica-w02-roman,helvetica-lt-w10-roman,sans-serif;
													}
#apDiv1_1

{	
position:relative;
width:50px;
	padding-top: 10px;
	height: 15px;
	cursor: pointer;
	overflow: hidden;
	margin-left: 0px;

	list-style-type: none;
	font-size: 18px;
	color: #F2668F;
	border-top: 1px solid rgba(242, 102, 143, 1);
	
}
#apDiv1_1:hover{    
position:relative;
	color: rgba(145, 111, 24, 1);
	border-top-width: 4px;
    border-top-color: rgba(145, 111, 24, 1);
	padding-top:5px;
	
}
#apDiv2_1{
	padding-top: 10px;
	height: 15px;
	cursor: pointer;
	overflow: hidden;
	margin-left: 0px;
	list-style-type: none;
	font-size: 18px;
	color: #F2668F;
	border-top: 1px solid rgba(242, 102, 143, 1);
	
}
#apDiv2_1:hover{
	color: rgba(145, 111, 24, 1);
	border-top-width: 4px;
    border-top-color: rgba(145, 111, 24, 1);
}
#apDiv3_1{
	padding-top: 10px;
	height: 15px;
	cursor: pointer;
	overflow: hidden;
	margin-left: 0px;
	list-style-type: none;
	font-size: 18px;
	color: #F2668F;
	border-top: 1px solid rgba(242, 102, 143, 1);
	
}
#apDiv3_1:hover{
	color: rgba(145, 111, 24, 1);
	border-top-width: 4px;
    border-top-color: rgba(145, 111, 24, 1);
	}
	
#apDiv4_1{
	padding-top: 10px;
	height: 15px;
	cursor: pointer;
	overflow: hidden;
	margin-left: 0px;
	list-style-type: none;
	font-size: 18px;
	color: #F2668F;
	border-top: 1px solid rgba(242, 102, 143, 1);
	
}
#apDiv4_1:hover{
	color: rgba(145, 111, 24, 1);
	border-top-width: 4px;
    border-top-color: rgba(145, 111, 24, 1);
	}
#apDiv5_1{
	
	height: 15px;
	cursor: pointer;
	overflow: hidden;
	margin-left: 10px;
	list-style-type: none;
	padding-top: 10px;
	padding-right: 10px;
	padding-bottom: 5px;
	padding-left: 10px;
	font-size: 18px;
	color: #F2668F;
	border-top: 1px solid rgba(242, 102, 143, 1);
}
#apDiv5_1:hover{

	color: rgba(145, 111, 24, 1);
	border-top-width: 4px;
    border-top-color: rgba(145, 111, 24, 1);
}
#apDiv1:hover {
    color: #FCB5B5;
    transition: color 0.4s ease 0s;
}

#apDiv2:hover {

	color: #FCB5B5;
    transition: color 0.4s ease 0s;
}
#apDiv3:hover {

	color: #FCB5B5;
    transition: color 0.4s ease 0s;
}
#apDiv4:hover {

	color: #FCB5B5;
    transition: color 0.4s ease 0s;
}
#apDiv5:hover {

	color: #FCB5B5;
    transition: color 0.4s ease 0s;
}


li a {
	font-size: 16px;
	color: #F2668F; 
	
	border-top: 1px solid rgba(242, 102, 143, 1);
	text-decoration: none;
	font-weight: normal;

}
li a:hover {
		color: rgba(145, 111, 24, 1);
	border-top-width: 4px;
    border-top-color: rgba(145, 111, 24, 1);
}

.bar{
	 font: normal normal normal 14px/1.4em helvetica-w01-roman,helvetica-w02-roman,helvetica-lt-w10-roman,sans-serif;
	background-color:white;
	color: #F2668F;
	border-top: 1px solid rgba(242, 102, 143, 1);
	line-height:60px;
	padding:20px 15px;
    border-radius:6px;
}
		

	
	</style>
</head>
<body id="test">


<div id="fullpage">

	
	<div class="section" id="section1">
	
	<div id="top_bar">
				<img id="name" style="width:290px;height:100px;margin-left:23px;margin-top:122px;" src="banner_logo.png">

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
					<a id="apDiv2_1" href="main.php">腦波/腦部測試系統</a>
						
					</li>
					
					<li>
						<a class="bar" href="brain.php">腦波測試系統</a>
					</li>
					<li>
						<a class="bar" href="main.php#secondPage">臉部測試系統</a>
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
	
		<div class="slide" id="slide1">
			<div class="SD">
				<div id="box">
				  <img style="float:left;" src="brain2.png">
					<p id="title_word">腦波配對系統</p>
					<br><br><br><br><br><br>
						<div id="content_word">		
						<p>使用者須事先預約受測時間，親自前往單位戴上腦波儀，並觀賞影片同時檢測腦波釋放出各種頻率，結束後依我們設計的腦波契合演算法去計算，顯示出「腦波分析結果曲線」與「其他使用者配對指數」於結果頁面讓使用者檢閱。　</p>
						</div>
						
				<div style="width:230px;display: inline-block">		
					<input style="margin-left:70%;
								  margin-top:1%;
								  background-image:url(pic6.png);
								  width:68px;height:74px;
								  background-color: transparent;
								  border:none;
								  outline:none;
								  display:inline-block;
								  " type="button" disabled="disabled"  onclick="location.href='register.html'"    >
					<img style="width:24px;
								height:72px;
								margin-left:110%;
								margin-top:-35%;
								display:inline-block;" src="arrow.png">
									
				</div>
			
				
				<div style="width:200px;display: inline-block">		
					<input style="margin-left:35%;
								  margin-top:10%;
								  background-image:url(pic7.png);
								  width:65px;height:72px;
								  background-color: transparent;
								  border:none;
								  outline:none;
								  " type="button" disabled="disabled"  onclick="location.href='#section3'"    >
						<img style="width:24px;
								height:72px;
								margin-left:10%;
								margin-top:-35%;
								display:inline-block;" src="arrow.png">
				</div>
				
				<div style="width:200px;display: inline-block">		
					<input style="background-image:url(pic8.png);
								  width:80px;height:70px;
								  background-color: transparent;
								  border:none;
								  outline:none;
								  " type="button" disabled="disabled"  onclick="location.href='register.html'"    >
						<img style="width:24px;
								height:72px;
								margin-left:10%;
								margin-top:-35%;
								display:inline-block;" src="arrow.png">
				</div>
				
				<div style="width:200px;display: inline-block">		
					<input style="background-image:url(pic9.png);
								  width:80px;height:80px;
								  background-color: transparent;
								  margin-left:-30%;
								  margin-top:8%;
								  border:none;
								  outline:none;
								  " type="button" disabled="disabled"   onclick="location.href='register.html'"   >
				</div>
						
				<div style="width:200px;display: inline-block">	
					<input style="background-image:url(pic10.png);
					position:relative;
								  width:40px;
								  height:30px;
								  margin-top:-32%;
								  margin-left:360%;
								  background-color: transparent;
								  border:none;
								  outline:none;
								  cursor: pointer; 
								  " type="button"    onclick="location.href='brainvideo.php#3rdPage'"   >-->
				</div>
				
				<div>				 
					<p style="margin-left:17.5%;display:inline-block;" class="normal_word">前往受<br>測單位</p>
					<p style="margin-left:8%;display:inline-block;" class="normal_word">配戴<br>腦波儀</p>
					<p style="margin-left:7.5%;display:inline-block;"  class="normal_word">觀賞<br>影片</p>
					<p style="margin-left:9%;display:inline-block;" class="normal_word">分析<br>契合度</p>
					<p style="margin-left:5%;display:inline-block;" class="normal_word">馬上<br>預約</p>				
				</div>
				
				</div>
			</div>
		</div>
	
	</div>
	
	
	
	


</body>
</html>
