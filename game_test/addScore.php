<?php

include "class_players.php";

try{
			$connection = new PDO("mysql:host=localhost;dbname=bruteforce", "bruteforce", "password");
	    	$connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			$gamertag = filter_input(INPUT_POST, "gamertag");
			$score = filter_input(INPUT_POST, "score");

			$getID_query = "SELECT idPlayers FROM Players WHERE gamerTag = :Gamer_Tag";
			$ps = $connection->prepare($getID_query);
			$ps->bindParam(':Gamer_Tag', $gamertag);
			$ps->execute();
		    $ps->setFetchMode(PDO::FETCH_CLASS, "Players");

			$insert_score_query = "INSERT INTO Scores(idPlayer, score) 
					  			   VALUES (:id, :score)";

			$ps = $connection->prepare($insert_score_query);
			$ps->bindParam(':id', $ps->fetch()->getId());
			$ps->bindParam(':score', $score);
		    $ps->execute();

		    echo 'true';
		}
		catch(Exception $e)
		{
			echo 'ERROR****: '.$e->getMessage();
		}

?>

