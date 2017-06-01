
<?php
  include_once("config.php");
?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title><?= $page ?></title>

   
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

  
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

   
    <link href="css/navbar-fixed-top.css" rel="stylesheet">

    <script src="js/ie-emulation-modes-warning.js"></script>
   
  </head>

  <body>
  <style>
.navbar {
	margin-bottom: 0px;
	border-radius: 0;
}
/* Remove the jumbotron's default bottom margin */ 
.jumbotron {
	margin-bottom: 0;
	padding-top: 150px;
}
</style>
<body role="document">
<div class="jumbotron">
  <div class="container text-center">
 <?php
  readfile("gs://$appid/header.html");
  ?>
  </div>
</div>
   <nav class="navbar navbar-default navbar-fixed-top">
  <hr>
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="#">TREE</a> </div>
    <div id="navbar" class="navbar-collapse collapse">
      <?php 
		   include_once("menu.php");
		 ?>
    </div>
  </div>
</nav>
<div class="container">
  <?php  include_once("body.php");  ?>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
<div class="container" style=" padding-bottom:30px;">
 <?php
   include("feedback.php");
  ?>
</div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

	<footer class="text-center page-footer" style="background: #D1D1D1;">
    <br>
	<div class="fb-comments" data-href="http://web592group15.appspot.com/" data-width="1000" data-numposts="6"></div>
	<br>
	<div class="fb-like" data-href="http://web592group15.appspot.com" data-width="960" data-layout="standard" data-action="like" 
	data-size="small" data-show-faces="false" data-share="true"></div>
	<br><br><br>
  <?php
  readfile("gs://$appid/footer.html");
  ?>
  <br><br>
   </footer>
  </body>
</html>
