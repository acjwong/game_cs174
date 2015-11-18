<?php
include "class_players.php";

function login()
{
	try{
		$connection = new PDO("mysql:host=localhost;dbname=bruteforce", "bruteforce", "password");
	    $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$username = filter_input(INPUT_POST, "gamertag");
		$password = filter_input(INPUT_POST, "password");

		$query = "SELECT Players.password 
				  FROM Players 
				  WHERE Players.gamertag = :username";

	    $ps = $connection->prepare($query);
	    $ps->bindParam(':username', $username);
		$ps->execute();
   		$ps->setFetchMode(PDO::FETCH_CLASS, "Players");
   		$players = $ps -> fetch();

   		if ($password === ($players-> getPassword()))
   		{
   			echo 'true';
   		}

	} catch (Exception $e) {
      echo 'ERROR: '.$e->getMessage();
	}
}

login();
