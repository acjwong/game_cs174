<?php
	include "class_players.php";
	
	function insert()
	{

		try{
			$connection = new PDO("mysql:host=localhost;dbname=bruteforce", "bruteforce", "password");
	    	$connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			$firstName = filter_input(INPUT_GET, "firstname"); 
			$lastName = filter_input(INPUT_GET, "lastname"); 
			$gamertag = filter_input(INPUT_GET, "newgametag");
			$email = filter_input(INPUT_GET, "email");
			$newPassword = filter_input(INPUT_GET, "newpassword");


			$query = "INSERT INTO Players(firstName, lastName, gamerTag, email, password) 
					  VALUES (:first, :last, :tag, :email, :password)";

			$ps = $connection->prepare($query);
			$ps->bindParam(':first', $firstName);
			$ps->bindParam(':last', $lastName);
			$ps->bindParam(':tag', $gamertag);
		    $ps->bindParam(':email', $email);
		    $ps->bindParam(':password', $newPassword);
		    $ps->execute();
		    $ps->setFetchMode(PDO::FETCH_CLASS, "Players");
		}
		catch(Exception $e)
		{
			echo 'ERROR****: '.$e->getMessage();
		}
	}

	
	
	insert();
	header('Location: home.php');
	exit;

?>