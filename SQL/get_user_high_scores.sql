SELECT firstName, lastName , Scores.Score
FROM Players join Player_Scores_Linking join Scores
WHERE Players.idPlayers = Player_Scores_Linking.idPlayers
AND Players.firstName = "Brandon" AND Players.lastName = "Rossi" 
AND Scores.idScores = Player_Scores_Linking.idScores
ORDER BY Score DESC
LIMIT 10;


