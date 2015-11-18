<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title id="title" pageName="Users">Game | Home</title>
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<link rel="stylesheet" type="text/css" href="css/nav-bar.css">
		<script type="text/javascript" charset="utf-8" src="js/jquery.min.js"></script>
		<script> 
		    $(function(){ $("#includedContent").load("navBar.html"); });
	    </script> 
	</head>
	<body>
		<?php
			if (!isset($_COOKIE['gamertag']))
			{
				header('Location: index.html');
			}
		?>
		<div id="includedContent"></div>
	</body>
</html>
