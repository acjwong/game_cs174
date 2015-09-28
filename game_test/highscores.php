<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Game | High Score</title>
		<link rel="stylesheet" type="text/css" href="css/index.css">
	</head>
	<body>
		<div id="highScoreHeader" class="header">
			<h1>High Score</h1>
			<div id="nav" class="about buttons">
				<a href="index.html"><div class="btn">Home</div></a>
				<a href="game_screen.html"><div class="btn" onclick="showLevelScreen();">Play</div></a>
				<a href="highscores.php"><div class="btn">High Scores</div></a>
				<a href="about.html"><div class="btn">About</div></a>
			</div>
		</div>
		<form action="highscores.php"
		method="GET">
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