<?php session_start(); ?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="articledisscussStyle.css">
		<script>
		
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
		<div id="wrapper">
		
<div id="top_bar">
				<img id="name" style="width:290px;height:100px;margin-left:550;margin-top:10px;" src="banner_logo.png">
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
					echo '<a style="position:absolute;margin-left:710px;margin-top:58px;text-decoration:none" href="logout.php"  id="apDiv6_1">登出</a>  <br><br>';
				}				
			?>
			</div>		
			<div id="sidebar">
				<div id="home" >
					<a href="#"><img class="buttons" src="ArticleDisscussion/home.png" ></a>			
				</div>
				<div id="life" >
					<a href="#"><img class="buttons" src="ArticleDisscussion/life.png" ></a>			
				</div>
				<div id="movie" >
					<a href="#"><img class="buttons" src="ArticleDisscussion/movie.png" ></a>		
				</div>
				<div id="celebrity" >
					<a href="#"><img class="buttons" src="ArticleDisscussion/celebrity.png" ></a>	
				</div>
				<div id="exercise" >
					<a href="#"><img class="buttons" src="ArticleDisscussion/exercise.png" ></a>								
				</div>
				<div id="pet" >
					<a href="#"><img class="buttons" src="ArticleDisscussion/pet.png" ></a>								
				</div>
				<div id="dish" >
					<a href="#"><img class="buttons" src="ArticleDisscussion/dish.png" ></a>								
				</div>
			
			</div>
			<div id="content">
				<div id="maintittle">
					<h1 id="loudly">心裡話大聲說</h1>
					<h2 id="author">這裡匯集了各地的專欄作家說出你們的心聲!</h2>
					<h3 id="welcome">快點進有興趣的文章, 就可以跟作家們互動唷!</h3>			
				</div>
				<div id="articles">
					<div id="article1" class="article">
						<div id="top1" class="top" >
							<div id="topphoto1" class="topphoto">
								<img class="photos" src="ArticleDisscussion/work.png" >				
							</div>
							<div id="toptittle1" class="toptittle">
								<a id="tittle1" class="tittles"><br>&nbsp&nbsp&nbsp&nbsp&nbsp不要再跟我說<br>&nbsp&nbsp&nbsp&nbsp&nbsp工作比愛情可靠</a>
							</div>				
						</div>
						<div id="bot1" class="summary">
							<a></br>當碰到工作跟愛情，你怎麼選擇？</br></br>
								當她在事業衝刺的巔峰，回過頭來等待多年的愛情與堅信的事業卻都成空，對女人來說，工作真的比愛情更可靠嗎？</br></br>
								或者，我們該相信更多愛的可能？
							</a>
						</div>
						<div class="readmore" onclick="location.href='ArticleDisscussion/article1.php';" >
							<a class="rword">Readmore...</a>
						</div>
					</div>
					<div id="article2" class="article">
						<div id="top2" class="top">
							<div id="topphoto2" class="topphoto">
								<img class="photos" src="ArticleDisscussion/beauty.png" >					
							</div>
							<div id="toptittle2" class="toptittle">
								<a id="tittle2" class="tittles"><br>&nbsp&nbsp&nbsp&nbsp&nbsp愛美,<br>&nbsp&nbsp&nbsp&nbsp&nbsp是女人的天性嗎?</a>				
							</div>					
						</div>
						<div id="bot2" class="summary">
							<a></br>女人愛美是天性...嗎？</br></br>
								近期有研究人員做了一項調查，發現女性每周平均花費在擔心容貌的時間約為12小時，一年下來，竟高達627小時。</br></br>
								但你想過嗎....
							</a>
							<div class="readmore" onclick="location.href='#';">
								<a class="rword">Readmore...</a>
							</div>	
						</div>			
					</div>
					<div id="article3" class="article">
						<div id="top3" class="top" >
							<div id="topphoto3" class="topphoto">
								<img class="photos" src="ArticleDisscussion/run.png" >					
							</div>
							<div id="toptittle3" class="toptittle">
								<a id="tittle3" class="tittles"><br>&nbsp&nbsp&nbsp&nbsp&nbsp跑步,<br>&nbsp&nbsp&nbsp&nbsp&nbsp因為我活著</a>				
							</div>	
				
						</div>
						<div id="bot3" class="summary">
							<a></br>Selina的運動筆記：一種「我活著」的感覺。</br></br>
								舊金山，聯合廣場，當地時間2015年10月18日清晨6點30分，從她第二次站到半程馬拉松比賽起跑線前起，我們要再談Selina的堅強和勇敢，已不止那場意外傷痛可以作為舉證。</br></br>
								那個被烈火吻過再重新站起來的女孩，也是一個百分百的跑者...
							</a>
							<div class="readmore" onclick="location.href='#';">
								<a class="rword">Readmore...</a>
							</div>
						</div>		
					</div>
					<div id="article4" class="article">
						<div id="top4" class="top" >
							<div id="topphoto4" class="topphoto">
								<img class="photos" src="ArticleDisscussion/travel.png" >	
							</div>
							<div id="toptittle4" class="toptittle">
								<a id="tittle4" class="tittles"><br>&nbsp&nbsp&nbsp&nbsp&nbsp愛上旅行的理由</a>				
							</div>	
				
						</div>
						<div id="bot4" class="summary" >
							<a></br>如果這世界還有100種生活，</br>1000種神秘的緣分，10000種問候……</br>旅行就是我親近一切的方式。</br></br>
								對我來說，每一趟旅行的發生都會有各種不同的原因，有時是為了要休息，有時是為了要逃離，大部份時候</br></br>
								是一種很自然發生的事情....
							</a>
							<div class="readmore" onclick="location.href='#';">
								<a class="rword">Readmore...</a>
							</div>
						</div>			
					</div>			
				</div>			
			</div>
		</div>
	</body>
</html>