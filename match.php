<?php session_start(); ?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="matchStyle.css">
		<link rel="stylesheet" href="PopupWindow/custombox.min.css">
		<link rel="stylesheet" href="PopupWindow/demo.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="PopupWindow/custombox.min.js"></script>
		<script src="PopupWindow/legacy.min.js"></script>
		<script type="text/javascript">
			
			$(function() {
				$('#btn_login').on('click', function( e ) {
					Custombox.open({
						target: '#modal',
						effect: 'fadein'
					});
					e.preventDefault();
				});
				domer();
				$("#0").hover(function(){$(this).attr("src",'SmileDetecter/photos/24.png')},function(){$(this).attr("src","SmileDetecter/photos/proportion/0.png")});
				$("#1").hover(function(){$(this).attr("src",'SmileDetecter/photos/16.png')},function(){$(this).attr("src","SmileDetecter/photos/proportion/1.png")});
				$("#2").hover(function(){$(this).attr("src",'SmileDetecter/photos/17.png')},function(){$(this).attr("src","SmileDetecter/photos/proportion/2.png")});
				$("#3").hover(function(){$(this).attr("src",'SmileDetecter/photos/18.png')},function(){$(this).attr("src","SmileDetecter/photos/proportion/3.png")});
				$("#4").hover(function(){$(this).attr("src",'SmileDetecter/photos/19.png')},function(){$(this).attr("src","SmileDetecter/photos/proportion/4.png")});
				$("#5").hover(function(){$(this).attr("src",'SmileDetecter/photos/20.png')},function(){$(this).attr("src","SmileDetecter/photos/proportion/5.png")});					
				$("#6").hover(function(){$(this).attr("src",'SmileDetecter/photos/21.png')},function(){$(this).attr("src","SmileDetecter/photos/proportion/6.png")});
				$("#7").hover(function(){$(this).attr("src",'SmileDetecter/photos/23.png')},function(){$(this).attr("src","SmileDetecter/photos/proportion/7.png")});
			}); 
		function getdata(url,sid,criteria){
			$.getJSON(url,{id:sid, cri:criteria},function(data){
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
				}
				//search similar user
				else if(data.success==2){					
					var nameData = new Array(data.name.length);
					var result = "";		
					var phobj = "";
					var length = data.name.length;
					if(length > 5){
						length = 5;
					}
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
				}
				else{ //for test sets success=3
					//alert(data.flag);
				}
			});
		}
			function Event(n, e) {
				if (e == "true") {
					document.getElementById(n.id).style.overflow = "visible";
				} else {
					document.getElementById(n.id).style.overflow = "hidden";
				}
			}
			function getOption(){
				var ary = new Array();
				for(i=0;i<=6;i++){
					ary[i]=new Array();
					ary[i][0]=i;
				}
				ary[0][1] = 1-document.getElementById("interest").value;
				ary[1][1] = 1-document.getElementById('bmi').value;
				ary[2][1] = 1-document.getElementById("vote").value;
				ary[3][1] = 1-document.getElementById("eeg").value;
				ary[4][1] = 1-document.getElementById("age").value;
				ary[5][1] = 1-document.getElementById("salary").value;
				ary[6][1] = 1-document.getElementById("education").value;
				getdata("matching/matchMain.php?action=init","abcd830428",ary);	
			}
			function domer(){
				for(i=0;i<=7;i++){	
					phobj = "photo"+i;
					scobj = "score"+i;		
					timer = i*230;
					result = '<a><img id="' + i + '" src="SmileDetecter/photos/proportion/' + i + '.png" height="200" width="200" ></a>';
					document.getElementById(phobj).innerHTML = result;
					$("#"+phobj).css("opacity","0.0");
					$("#"+phobj).delay(timer).animate({opacity: '1.0'},1000);
				}
				
			}
		</script>

	</head>

	<body>
	<div id="frame">
		<div id="wrapper">

			<div id="top_bar">
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

			<div id="content">
				<p id="content_word">+Soul Search</p>

				<p id="cotent_word2"> 輸入篩選條件的在意程度,自己找出Mr.Right</p>			
			</div>

			<div id="bot">
				<div id="box1" class="boxes">
					<img src="box1.png" height="128" width="181">
					<h3 id="box1_word" > 興趣契合度</h3>
					<select id="interest" class="selection">
　						<option value="0">0%</option>
　						<option value="0.25">25%</option>
						<option value="0.5">50%</option>
　						<option value="0.75">75%</option>
　						<option value="1">100%</option>
					</select>
				</div>
				<div id="box2" class="boxes">
					<img src="box2.png" height="128" width="181">
					<h3 id="box2_word" > 身高/體重</h3>
					<select id="bmi" class="selection">
　						<option value="0">0%</option>
　						<option value="0.25">25%</option>
						<option value="0.5">50%</option>
　						<option value="0.75">75%</option>
　						<option value="1">100%</option>
					</select>
				</div>
				<div id="box3" class="boxes">
					<img src="box3.png" height="128" width="181">
					<h3 id="box3_word" > 投票議題討論 </h3>
					<select id="vote" class="selection">
　						<option value="0">0%</option>
　						<option value="0.25">25%</option>
						<option value="0.5">50%</option>
　						<option value="0.75">75%</option>
　						<option value="1">100%</option>
					</select>
					</div>
				<div id="box4" class="boxes"> 
					<img src="box4.png" height="128" width="181">
						<h3 id="box3_word" > 腦波檢測結果 </h3>
						<select id="eeg" class="selection">
　							<option value="0">0%</option>
　							<option value="0.25">25%</option>
							<option value="0.5">50%</option>
　							<option value="0.75">75%</option>
　							<option value="1">100%</option>
						</select>					
					</div>
				<div id="box5" class="boxes"> 
					<img src="box5.png" height="128" width="181">
						<h3 id="box3_word" > 年齡	 </h3>
						<select id="age" class="selection">
　							<option value="0">0%</option>
　							<option value="0.25">25%</option>
							<option value="0.5">50%</option>
　							<option value="0.75">75%</option>
　							<option value="1">100%</option>
						</select>
					</div>
				<div id="box6" class="boxes">
					<img src="box6.png" height="128" width="181">
						<h3 id="box3_word" > 薪資 </h3>
						<select id="salary" class="selection">
　							<option value="0">0%</option>
　							<option value="0.25">25%</option>
							<option value="0.5">50%</option>
　							<option value="0.75">75%</option>
　							<option value="1">100%</option>
						</select>
					 </div>
				<div id="box7" class="boxes"> 
					<img src="box7.png" height="128" width="181">
						<h3 id="box3_word" > 學歷 </h3>
						<select id="education" class="selection">
　							<option value="0">0%</option>
　							<option value="0.25">25%</option>
							<option value="0.5">50%</option>
　							<option value="0.75">75%</option>
　							<option value="1">100%</option>
						</select>
					</div>
				<div id="side_des">
					<div id="side_tittle"><a>量身打造的配對指數</a></div>	
					<div id="side_content"><a>這裏將本網站所分析的條件集合，只要調整你內心的在意程度(0%-100%)，就能準確地找到最佳配對人選！</a></div>
				</div>
				<div id="btn">
					<input type="button"  value="" onclick="getOption()" id="btn_login" >
				</div>				
			</div>

			<div id="footer">

			</div>
			<!-- Modal -->
<div id="modal" class="modal-demo">
    <button type="button" class="close" onclick="Custombox.close();">
        <span>x</span>
    </button>
    <h4 class="title">Match List</h4>
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
				</div>
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
			<!-- Modal -->
		</div>
</div>
	</body>
</html>
