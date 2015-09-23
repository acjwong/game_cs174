select firstName, lastName , Scores.Score
from Players join Player_Scores_Linking join Scores
where Players.idPlayers = Player_Scores_Linking.idPlayers
and Scores.idScores = Player_Scores_Linking.idScores
order by Score DESC
limit 10;
