<html>
	<head>
		<link rel="stylesheet" type="text/css" href="article1Style.css">
	</head>
	<body>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.5";
			fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
			
			function Event(n, e) {
				if (e == "true") {
					document.getElementById(n.id).style.overflow = "visible";
				} else {
					document.getElementById(n.id).style.overflow = "hidden";
				}
			}
		</script>
		<div id="wrapper">
		<div id="top_bar">
				<img id="name" style="width:290px;height:100px;margin-left:32%;margin-top:10px;" src="banner_logo.png">

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
			<div id="content">
				<div id="aframe">
					<div id="top">
						<div id="tittle">
							<a id="tword">不要再跟我說&nbsp&nbsp工作比愛情可靠</a>
						</div>
						<div id="info">
							<div id="time">
								<a class="infor">October 27, 2015</a>
							</div>
							<div id="author">
								<a class="infor">|&nbsp&nbspCandice</a>
							</div>
						</div>
					</div>
					<div id="photo"></div>
					<div id="words">	
						<div id="wcontent">	
							<a>當碰到工作跟愛情，你怎麼選擇？<br><br> </a>
							<a>當她在事業衝刺的巔峰，回過頭來等待多年的愛情與堅信的事業卻都成空，對女人來說，工作真的比愛情更可靠嗎？<br><br></a>
							<a>或者，我們該相信更多愛的可能？</a>
						</div>
					</div>
				
				</div>
				<div id="side">
					<div id="featurepost">
						<a class="sidetittles"> Featured&nbspPosts  </a><HR>
					</div>
					<div id="recentpost">
						<a class="sidetittles"> Recent&nbspPosts  </a><HR>
					</div>
					<div id="archive">
						<a class="sidetittles"> Archive  </a><HR>
						<a id="archivetime" href="#">October 2015 (1)</a>
					</div>
					<div id="searchbytags">
						<a class="sidetittles"> Search&nbspBy&nbspTags  </a><HR>
					</div>
					<div id="followus">
						<a class="sidetittles"> Follow&nbspUs  </a><HR>
					</div>
				</div>
				<div id="bot">
					<div class="fb-comments" data-href="http://127.0.0.1/web/ArticleDisscussion/article1.php" data-width="750" data-numposts="5"></div>
				</div>			
			</div>
		</div>
	</body>
</html>