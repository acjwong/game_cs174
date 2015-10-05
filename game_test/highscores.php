<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title id="title" pageName="High Scores">Game | High Score</title>
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<script type="text/javascript" charset="utf-8" src="js/jquery.min.js"></script>
		<script> 
		    $(function(){ $("#includedContent").load("navBar.html"); });
	    </script> 
	</head>
	<body>
		<div id="includedContent"></div>
		<form action="highscores.php" method="GET">
		<fieldset>
			<legend>User input</legend>
			<p>
				<label>First name:</label>
				<input name="firstName" type="text" />
			</p>
			<p>
				<label>Last name:</label>
				<input name="lastName" type="text" />
			</p>
			<input name="Button" type="submit" value="Submit" />
		</fieldset>
		</form>
		<div>
			<?php include 'db_highscores.php';?>
		</div>
	</body>
</html>