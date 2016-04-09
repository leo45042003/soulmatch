<!DOCTYPE html>


<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>fullPage.js One Page Scroll Sites</title>

	<link rel="stylesheet" type="text/css" href="../jquery.fullPage.css" />
	<link rel="stylesheet" type="text/css" href="examples.css" />


	
	<!--[if IE]>
		<script type="text/javascript">
			 var console = { log: function() {} };
		</script>
	<![endif]-->

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>

	<script type="text/javascript" src="../jquery.fullPage.js"></script>
	<script type="text/javascript" src="examples.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
				sectionsColor: ['#1bbc9b', '#4BBFC3', '#7BAABE', 'whitesmoke', '#ccddff'],
				anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage', 'lastPage'],
				menu: '#menu',
				scrollingSpeed: 1000
			});

		});
	</script>

</head>
<body>


<!--
這是左上角的bar
<ul id="menu">
	<li data-menuanchor="firstPage"><a href="#firstPage">First slide</a></li>
	<li data-menuanchor="secondPage"><a href="#secondPage">Second slide</a></li>
	<li data-menuanchor="3rdPage"><a href="#3rdPage">Third slide</a></li>
	<li data-menuanchor="4thpage"><a href="#4thpage">Fourth slide</a></li>
</ul> -->


<div id="fullpage">
	<div class="section " id="section0">
		<h1>fullPage.js</h1>
		
	</div>
	
	<div class="section" id="section1">
	    <div class="slide">
			<div class="intro">
				<h1>Create Sliders</h1>
				<p>Not only vertical scrolling but also horizontal scrolling. With fullPage.js you will be able to add horizontal sliders in the most simple way ever.</p>
				<img src="imgs/slider.png" alt="slider" />
			</div>

		</div>
		
	    <div class="slide">
			<div class="intro">
				<img src="imgs/1.png" alt="simple" />
				<h1>Simple</h1>
				<p>Easy to use. Configurable and customizable.</p>
			</div>
		</div>
	    <div class="slide">
			<div class="intro">
				<img src="imgs/2.png" alt="Cool" />
				<h1>Cool</h1>
				<p>It just looks cool. Impress everybody with a simple and modern web design!</p>
			</div>
		</div>
	    <div class="slide">
			<div class="intro">
				<img src="imgs/3.png" alt="Compatible" />
				<h1>Compatible</h1>
				<p>Working in modern and old browsers too! IE 8 users don't have the fault of using that horrible browser! Lets give them a chance to see your site in a proper way!</p>
			</div>
		</div>
	</div>
	<div class="section" id="section2">
		<div class="intro">
			<h1>Example</h1>
			<p>HTML markup example to define 4 sections.</p>
			<img src="imgs/example2.png" alt="example" />
		</div>
	</div>
	<div class="section" id="section3">
		<div class="intro">
			<h1>Working On Tablets</h1>
			<p>
				Designed to fit to different screen sizes as well as tablet and mobile devices.
				<br /><br /><br /><br /><br /><br />
			</p>
		</div>
		<img src="imgs/tablets.png" alt="tablets" />
	</div>
</div>

</body>
</html>
