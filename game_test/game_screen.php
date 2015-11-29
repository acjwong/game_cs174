<?php
	if (!isset($_COOKIE['gamertag']))
	{
		header('Location: index.html');
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title id="title" pageName="Play">Game | Play</title>
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<link rel="stylesheet" type="text/css" href="css/nav-bar.css">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script type="text/javascript" charset="utf-8" src="js/jquery.min.js"></script>
		<script> 
		    $(function(){ $("#includedContent").load("navBar.html"); });
	    </script>
	</head>
	<body>
	<div id="includedContent"></div>

    <canvas id="canvas" width="800" height="400" style="border:1px solid #000000;">
    	Canvas unsupported on current browser.
    </canvas>

	<div id="footer" class="container-fluid" style="margin-top: 25%;">
	        <div>
	            <div class="row">
	                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"><a href="#">FAQ</a></div>
	                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"><a href="#">About</a></div>
	                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"><a href="#">Terms &amp; Privacy</a></div>
	                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"><a href="#">Contact</a></div>
	            </div>
	            <br>
	            <div class="row">
	                Lone Survivor &copy; 2015 All Rights Reserved
	            </div>
	        </div>
   	</div>
	
	<script type="text/javascript" src="js/Object.js"></script>
	<script type="text/javascript" src="js/DrawableObject.js"></script>
	<script type="text/javascript" src="js/ScrollingBackground.js"></script>
    <script type="text/javascript" src="js/AnimationManager.js"></script>
    <script type="text/javascript" src="js/Player.js"></script>
    <script type="text/javascript" src="js/Level.js"></script>
    <script type="text/javascript" src="js/Main.js"></script>
    <script type="text/javascript" src="js/ObjectManager.js"></script>
	<script type="text/javascript" src="js/Rectangle.js"></script>
	<script type="text/javascript" src="js/Pickup.js"></script>
	<script type="text/javascript" src="js/Enemy.js"></script>
	</body>
</html>