﻿<?php session_start(); ?>
<head>
<title>Smile Detector</title>
	<meta http-equiv="Content-Type" charset=utf-8" />
	
	<link rel="stylesheet" type="text/css" href="javascript.fullPage.css" />
	<link rel="stylesheet" href="PopupWindow/custombox.min.css">
	<link rel="stylesheet" href="PopupWindow/demo.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="PopupWindow/custombox.min.js"></script>
		<script src="PopupWindow/legacy.min.js"></script>
	
	<script type="text/javascript"> 
	
	$( "#btn_SD" ).hover(
  function() {
    $( this ).append( $( "<span> Smile Detector System</span>" ) );
  }, function() {
    $( this ).find( "span:last" ).remove();
  }
);

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
				//setTimeout("window.location.href='../SmileDetecter/index.php'",50000);
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
		
		

		/* firstPage
		 * --------------------------------------- */
		.top_bar{
			width:980px;
			height:50px;
			margin:auto;
				}		

		#apDiv1, #apDiv2, #apDiv3, #apDiv4, #apDiv5 {
			line-height: 43px;
			height: 15px;
			cursor: pointer;
			position: relative;
			z-index:2;
			overflow: hidden;
			float: right;
			list-style-type: none;
			margin-top:-60px;
			padding-top: 50px;
			padding-right: 10px;
			padding-bottom: 5px;
			padding-left: 10px;
			font-size: 18px;
			color: #F2668F;
			font: normal normal normal 14px/1.4em helvetica-w01-roman,helvetica-w02-roman,helvetica-lt-w10-roman,sans-serif;
													}
#apDiv1_1
{	width:50px;
	padding-top: 10px;
	height: 15px;
	cursor: pointer;
	overflow: hidden;
	margin-left: -50px;

	list-style-type: none;
	font-size: 18px;
	color: #F2668F;
	border-top: 1px solid rgba(242, 102, 143, 1);
	
}
#apDiv1_1:hover{    
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


	
		#section0{
			background-image:url("SDbk.jpg");
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}
		
		
		#section0 h1{
			color: #444;
		}
		#section0 p{
			color: #333;
			opacity: 0.4;
		}
		#btn_brain{
		padding:0;
		margin-top: 10%;
		display:inline-block;
		background-image:url(brain.png);
		height:326px;
		width:360px;
		background-color: transparent;
		outline:none;
		border:none;
		cursor: pointer;
		}
		#btn_brain:hover{
			opacity:0.7;
			transition: opacity 0.4s ease 0s, opacity 0.4s ease 0s;
		}
		
		#btn_SD{
		display:inline-block;
		padding: 0%;
		background-image:url(SD.png);
		height:326px;
		width:412px;
		background-color: transparent;
		outline:none;
		border:none;
		cursor: pointer;
			
		}
		#btn_SD:hover{
			
			opacity:0.7;
			transition: opacity 0.4s ease 0s, opacity 0.4s ease 0s;
		}

		/* secondPage
		 * --------------------------------------- */
		#section1{
			background-image:url("SDbk.jpg");
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
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
		

		/* 3rdPage
		 * --------------------------------------- */
				div#section2 {

				background-image: url("SDbk.jpg");
				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;
	
	
							}


				#boxes{
				
				position:absolute;
				left:0; right:0; margin:auto; 
				width: 980px;
				height: 400px;
				
				
					
				
					}	
				#block1_video{
				float:left;	
				cursor: pointer;
				background-image: url(baby.png);
				background-repeat: no-repeat;
				width: 280px;
				height: 218px;
				border: none;
					
				}
				#block1_video:hover {
				background-image: url(baby1.png);
				width: 280px;
				height: 218px;
				border: none;
				cursor: pointer;
				}
				
				#block2_video{
				background-image: url(green.png);
				margin-right:35%;
				width: 280px;
				height: 218px;
				border: none;
				cursor: pointer;	
					
				}
				
				#block2_video:hover {
				background-image: url(green1.png);
				width: 280px;
				height: 218px;
				border: none;
				cursor: pointer;
				}
				
				#block3_video{
				background-image: url(halloween.png);
				margin-left:58%;
				margin-top:-22%;
				border: none;
				width: 280px;
				height: 218px;
					
					
				}
				
				#block3_video:hover {
				background-image: url(halloween1.png);
				width: 280px;
				height: 218px;
				border: none;
				cursor: pointer;
				}
				
				#block4_video{
					margin-top:3%;
				float:left;	
				cursor: pointer;
				border: none;
				background-image: url(interm.png);
				background-repeat: no-repeat;
				width: 280px;
				height: 218px;
					
					
				}
				#block4_video:hover {
				background-image: url(interm1.png);
				width: 280px;
				height: 218px;
				border: none;
				cursor: pointer;
				}
				
				#block5_video{
				margin-top:3%;
				margin-right:35%;
				cursor: pointer;
				border: none;
				background-image: url(ted.png);
				background-repeat: no-repeat;
				width: 280px;
				height: 218px;
					
					
				}
				#block5_video:hover {
				background-image: url(ted1.png);
				width: 280px;
				height: 218px;
				border: none;
				cursor: pointer;
				}
				
				#block6_video{
				background-image: url(tgop.png);
				margin-left:58%;
				border: none;
				margin-top:-22%;
				width: 280px;
				height: 218px;
					
					
				}
				
				#block6_video:hover {
				background-image: url(tgop1.png);
				width: 280px;
				height: 218px;
				border: none;
				cursor: pointer;
				}
				
				
				
				
				
 

		/* 4thpage
		 * --------------------------------------- */
		#section3{
		background-image:url("SDbk.jpg");
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}
		#section3 h1{
			color: #F2F2F2;
		}
		#section3 p{
			opacity: 0.6;
		}
	</style>
</head>
<body>


<div id="fullpage">
	<div class="section " id="section0">
		<div class="content">
			<div class="top_bar">
				<img id="name" style="width:290px;height:100px;margin-left:-20px;margin-top:-56px;" src="banner_logo.png">

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
				<!--左腦 id:brain-->

		    <input type="button"  onclick="location.href='brain.php'"   id="btn_brain" >
			<p style="position:absolute;margin-left:110px;inline-block;font-family: open sans condensed,sans-serif;font-size: 35px;text-shadow:rgba(10, 189, 240, 0.298039) 3px 3px 0px, rgba(254, 1, 1, 0.298039) -3px -3px 0px;">Brain Match System</p>
			
		
			<!--右腦 id:SD-->
			<input type="button"  onclick="location.href='#secondPage'"   id="btn_SD" >
			<p style="position:absolute;inline-block;margin-left:520px;font-family: open sans condensed,sans-serif;font-size: 35px;text-shadow:rgba(10, 189, 240, 0.298039) 3px 3px 0px, rgba(254, 1, 1, 0.298039) -3px -3px 0px;">Smile Detector System</p>
			
			</div>
		
		
		
		
	

	
		</div>
	</div>
	
	<div class="section" id="section1">
		
		<div class="slide" id="slide1">
			<div style="margin-top:150px;" class="top_bar">
				<img id="name" style="width:290px;height:100px;margin-left:0px;margin-top:-60px;" src="banner_logo.png">

				<ul id="apDiv1"  onmouseover="Event(this,'true');" onmouseout="Event(this,'');">
					<li>
						<a style="margin-left:10px;" id="apDiv1_1" href="../Home.php">關於我</a>
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
		 
			<div class="SD">
				
				<div id="box">
				  <img style="float:left;" src="face.png">
					<p id="title_word">微笑偵測系統</p>
					<br><br><br><br><br><br>
						<div id="content_word">		
						<p>利用受測者對於刺激源產生的微笑反映數據與其他使用者進行契合度的配對。
使用者在登入後進入選取畫面選擇不同的影片，並下載微笑分析程式，隨後觀賞影片，同時於過程中分析使用者觀看影片時的臉部微笑表情。在影片結束後進行數據上傳，經過Soul Match的微笑指數演算法計算後，將產生的”微笑數據分析結果圖”與”其他使用者配對指數”重導向於結果頁面</p>
						</div>
						
				<div style="width:200px;display: inline-block">		
					<input style="margin-left:70%;
								  margin-top:10%;
								  background-image:url(pic1.png);
								  width:77px;height:72px;
								  background-color: transparent;
								  border:none;
								  outline:none;
								  display:inline-block;
								  cursor: pointer;" type="button"  onclick="location.href='../login.html'"    >
					<img style="width:24px;
								height:72px;
								margin-left:120%;
								margin-top:-35%;
								display:inline-block;" src="arrow.png">
									
				</div>
			
				
				<div style="width:200px;display: inline-block">		
					<input style="margin-left:40%;
								  margin-top:10%;
								  background-image:url(pic2.png);
								  width:62px;height:72px;
								  background-color: transparent;
								  border:none;
								  outline:none;
								  cursor: pointer;" type="button"  onclick="location.href='#3rdPage'"    >
						<img style="width:24px;
								height:72px;
								margin-left:10%;
								margin-top:-35%;
								display:inline-block;" src="arrow.png">
				</div>
				
				<div style="width:200px;display: inline-block">		
					<input style="background-image:url(pic3.png);
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
					<input style="background-image:url(pic4.png);
								  width:80px;height:60px;
								  background-color: transparent;
								  margin-left:-30%;
								  border:none;
								  outline:none;
								  " type="button" disabled="disabled"  onclick="location.href='register.html'"   >
				</div>
						
				<div style="width:200px;display: inline-block">	
					<input style="background-image:url(gotest.png);
					position:relative;
								  width:40px;
								  height:50px;
								  margin-top:-32%;
								  margin-left:340%;
								  background-color: transparent;
								  border:none;
								  outline:none;
								  cursor: pointer;" type="button"  onclick="location.href='#3rdPage'"   >-->
				</div>
				
				<div>
				<p style="margin-left:16.8%;display:inline-block;" class="normal_word">登入</p>
				<p style="margin-left:10%;display:inline-block;" class="normal_word">選擇<br>影片</p>
				<p style="margin-left:9%;display:inline-block;"  class="normal_word">觀賞<br>影片</p>
				<p style="margin-left:9%;display:inline-block;" class="normal_word">分析<br>契合度</p>
				<p style="margin-left:5%;display:inline-block;" class="normal_word">開始<br>測試</p>
			
				
				
				</div>
				
				</div>
			</div>
		</div>
	
	</div>
	
	
	
	<div class="section" id="section2">
		<div class="section " id="section0">
		<div class="content">
			<div class="top_bar">
				<img id="name" style="width:290px;height:100px;margin-left:-20px;margin-top:-56px;" src="banner_logo.png">

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
		
		
		
		
	

	
		</div>
		<div class="content">
		
			<div>  <img src="choose.png">      </div>		
				<input type="button" onclick="location.href='../SD2.jar'" value="下載程式"  >
				<input type="button" onclick="location.href='../SmileDetecter/index.php'" value="觀看結果"  >
				<div id="boxes"> 
					<div>
					<input type="button" class="start"   id="block1_video"; >
				
						</div>
		
					<div>
					<input type="button" class="start"   id="block2_video"; >
					<input type="button" class="start"   id="block3_video"; >
			
						</div>
					
					
					
					<div>
					<input type="button" class="start"   id="block4_video"; >
			
						</div>
					<div>
					<input type="button" class="start"   id="block5_video"; >
			
						</div>
					<div>
					<input type="button" class="start"   id="block6_video"; >
			
						</div>
					
					
					
		
		
				</div>
		
		
		</div>
	</div>
	
	
	
</div>

<!--   POP OUT 視窗 1  -->
<div id="modal" class="modal-demo">

    <button type="button" class="close" onclick="Custombox.close();">
        <span>x</span>
    </button>
    <h4 class="title">Smile Detector - 嬰兒吃檸檬   請看向鏡頭   準備微笑!!!</h4>
    <div class="text">
			<?php
				include ("lemon.php");
				?>
    </div>
</div>

<!--   POP OUT 視窗 2  -->
<div id="modal2" class="modal-demo">
    <button type="button" class="close" onclick="Custombox.close();">
        <span>x</span>
    </button>
    <h4 class="title">Smile Detector - 萬秀大勝利 綠茶破台語   請看向鏡頭   準備微笑!!!</h4>
    <div class="text">
        	<?php
				include ("chinese.php");
				?>
	</div>
</div>

<!--   POP OUT 視窗 3  -->

<div id="modal3" class="modal-demo">
    <button type="button" class="close" onclick="Custombox.close();">
        <span>x</span>
    </button>
    <h4 class="title">Smile Detector - 假裝吃光小孩的糖果   請看向鏡頭   準備微笑!!!</h4>
    <div class="text">
      	<?php
				include ("halloween.php");
				?>  
	</div>
</div>

<!--   POP OUT 視窗 4  -->

<div id="modal4" class="modal-demo">
    <button type="button" class="close" onclick="Custombox.close();">
        <span>x</span>
    </button>
    <h4 class="title">Smile Detector - 高年級實習生   請看向鏡頭   準備微笑!!!</h4>
    <div class="text">
        		<?php
				include ("intern.php");
				?>      
	</div>
</div>

<!--   POP OUT 視窗 5  -->

<div id="modal5" class="modal-demo">
    <button type="button" class="close" onclick="Custombox.close();">
        <span>x</span>
    </button>
    <h4 class="title">Smile Detector - 熊麻吉 菜市場名篇   請看向鏡頭   準備微笑!!!</h4>
    <div class="text">
        	<?php
				include ("machi.php");
				?>      
	</div>
</div>

<!--   POP OUT 視窗 6  -->

<div id="modal6" class="modal-demo">
    <button type="button" class="close" onclick="Custombox.close();">
        <span>x</span>
    </button>
    <h4 class="title">Smile Detector - TGOP這群人 起床語錄   請看向鏡頭   準備微笑!!!</h4>
   <div class="text">
       	<?php
				include ("people.php");
				?>     
	</div>
</div>

<script type="text/javascript" src="javascript.fullPage.js"></script>
<script type="text/javascript">
	fullpage.initialize('#fullpage', {
		anchors: ['firstPage', 'secondPage', '3rdPage'],
		menu: '#menu',
		css3:true
	});

</script>

</body>
</html>
