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
		<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
 		<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
		<script type="text/javascript" charset="utf-8" src="js/jquery.min.js"></script>
		<script> 
		    $(function(){ $("#includedContent").load("navBar.html"); });
	    </script>
	    <style>
	    	.slick-arrow {
	    		background: black !important;
			   	border-radius: 50px;
	    	}
			.slider{
			width:600px;
			margin:20px auto;
			text-align:center;
			}
			h3{
			padding:40px 20px;
			background:white;
			border: 1px solid;
			}
			.slider div{
			margin-right:5px;
			}
			a {
				text-decoration: none;
				color: #0a3a51;
			}
			a:hover {
				text-decoration: none;
				color: #8a0707;
			}
		</style> 
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

		<div class="row bottom">
			<dt style="text-align: center;"><h4>Top Friends</h4></dt>
			<div class="slider">
			    <div><a href="#"><h3>Bob Ross</h3></a></div>
			    <div><a href="#"><h3>Ron Mak</h3></a></div>
			    <div><a href="#"><h3>Bobby Flay</h3></a></div>
			    <div><h3>Brandon</h3></div>
			    <div><h3>Brian</h3></div>
			    <div><h3>Alex</h3></div>
			    <div><h3>Mike</h3></div>
			    <div><h3>Jessica</h3></div>
			    <div><h3>Sally</h3></div>
		  	</div>
	  	</div>

		<div class="row">
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
   		</div>

   		<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  		<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  		<script type="text/javascript" src="slick/slick.min.js"></script>
  		<script type="text/javascript">
		    $(document).ready(function(){
		        $('.slider').slick({
		          dots: true,
		        infinite: true,
		        slidesToShow: 3,
		        slidesToScroll: 3
		    });
		    });
		  </script>
	</body>
</html>
