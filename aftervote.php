
<html>
  <head>

    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="aftervoteStyle.css" />
    <title></title>
  </head>
  <body>
  <div id="frame1">
	<div id="wrapper1">
		<div id="title">
  
			<img style="width:300px;height:200px;display:block; margin:auto;" src="img_vote1.jpg" /> 
 
		</div>
			<div id="content">

  <?php 
  
  include("voteshow.php") 
    
  
  ?>
  
  

  
  
  
  </div>

  <div id="sendmessage">
  
	<form action="aftervoteconnect.php" method="post">
				
				
				  <img style="position:absolute;margin-top:330px;margin-left:300px;"  src="word.png">
				<textarea  id="response" name="response" cols="50" rows="10"placeholder="回應">
				
				
				</textarea>
				
				
				
				<input id="btn_submit" type="submit"  name="submit" value="Send" />
				
	</form>
  
  
  </div>
  </div>
    </div>
  
  </body>
</html>
