<?php
	if (!isset($_COOKIE['gamertag']))
	{
		header('Location: index.html');
		die();
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title id="title" pageName="Users">Game | Home</title>
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<link rel="stylesheet" type="text/css" href="css/nav-bar.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<script type="text/javascript" charset="utf-8" src="js/jquery.min.js"></script>
		<script> 
		    $(function(){ $("#includedContent").load("navBar.html"); });
	    </script> 
	</head>
	<body>
		<div id="includedContent"></div>
		<div class="container" style="position: relative; margin-top: 180px;">
		<!-- Trainer -->
		<div class="row">
			<div class="col-md-3" style="text-align: center;">
				<a class="thumbnail" href=""><img src="icons/face.png" alt=""></a>
			</div>
			<div class="col-md-3">
				<dl>
					<dt>Name</dt>
					<dd>Billy Jay Bob</dd>
				</dl>
				<dl>
				<dl>
					<dt>Gamer Tag</dt>
					<dd>asd</dd>
				</dl>
			</div>
			<div class="col-md-3">
				<dl>
					<dt>Highest Score</dt>
					<dd>9000</dd>
				</dl>
				<dl>
					<dt>Email</dt>
					<dd><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> bbob@example.com</dd>
				</dl>
			</div>
		</div>
		<div class="row">
			<dl class="col-md-6">
				<dt style="text-align: center;"><h4>About</h4></dt>
				<dl>I pwn Noobs</dl>
			</dl>
			<dl class="col-md-6">
				<dt style="text-align: center;"><h4>Hobbies</h4></dt>
				<dl>I like pwning noobs.</dl>
			</dl>
		</div>
		<div class="row">
		</div>
	</body>
</html>
