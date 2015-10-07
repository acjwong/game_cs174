<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title id="title" pageName="High Scores">Game | High Score</title>
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<link rel="stylesheet" type="text/css" href="css/nav-bar.css">
		<script type="text/javascript" charset="utf-8" src="js/jquery.min.js"></script>
		<script> 
		    $(function(){ $("#includedContent").load("navBar.html"); });
	    </script> 
	</head>
	<body>
		<div id="includedContent"></div>
		<form action="highscores.php" method="GET" id = "search">
		<fieldset>
			<legend>Search by Gamer Tag</legend>
				<input type="text" name="gamertag" id="gamertag" placeholder="Gamer Tag"/>
			<input name="Button" type="submit" value="Submit" />
		</fieldset>
		</form>
		<div id = "highscore_table">
			<?php include 'db_highscores.php';?>
		</div>
	</body>
</html>