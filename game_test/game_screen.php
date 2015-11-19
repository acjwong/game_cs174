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
		<link rel="stylesheet" type="text/css" href="jquery-ui-1.11.4.custom/jquery-ui.css">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script type="text/javascript" charset="utf-8" src="js/jquery.min.js"></script>
		<script> 
		    $(function(){ $("#includedContent").load("navBar.html"); });
	    </script>
	    <style>
	    	.demoHeaders {
				margin-top: 2em;
			}
	    </style>
	</head>
	<body>
	<div id="includedContent"></div>

    <canvas id="canvas" width="900" height="300" style="border:1px solid #000000;">
    	Canvas unsupported on current browser.
    </canvas>

	<!-- Tabs -->
	<h2 class="demoHeaders">Game Manual</h2>
	<div class="bottom" id="tabs">
		<ul>
			<li><a href="#tabs-1">Controls</a></li>
			<li><a href="#tabs-2">How to play</a></li>
		</ul>
		<div id="tabs-1">
			<p style="text-align: center;">
				Hit Spacebar to start/stop animation.
			</p>
			<p style="text-align: center;">
				Use arrows keys or w, s, a, d to move character
			</p>
		</div>
		<div id="tabs-2">
			Shoot stuff, kill enemies, get points, win!
		</div>
	</div>

	<div id="footer" class="container-fluid">
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
    <script type="text/javascript" src="js/Player.js"></script>
    <script type="text/javascript" src="js/ObjectManager.js"></script>
    <script type="text/javascript" src="js/Main.js"></script>
    <script src="jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
	<script src="jquery-ui-1.11.4.custom/jquery-ui.js"></script>
    <script>
    	$( "#slider" ).slider({
			range: true,
			values: [ 17, 67 ]
		});

		$( "#tabs" ).tabs();

		$( "#progressbar" ).progressbar({
			value: 50
		});
    </script>
	</body>
</html>