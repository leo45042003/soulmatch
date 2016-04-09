
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
  
    <img style="width:300px;height:200px;display:block; margin:auto;" src="img_vote1.PNG" /> 
 
  </div>
  <div id="content">

  <?php 
  
  include("voteshow2.php") 
    
  
  ?>
  
  

  
  
  
  </div>
  
  <div id="sendmessage">
  
	<form action="aftervoteconnect.php" method="post">
				
				
				
				<textarea id="response" name="response" cols="50" rows="10"placeholder="¦^À³">
				
				
				</textarea>
				
				
				
				<input id="btn_submit" type="submit"  name="submit" value="Send" />
				
	</form>
  
  
  </div>
  </div>
   </div>
  
  </body>
</html>
