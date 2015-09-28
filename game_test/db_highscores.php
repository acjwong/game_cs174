
<?php
  try {
    //TODO: Move database credentials to a seperate file and include that file here
    //include (".:db_credentials.php");

    //Connect to the database
    $connection = new PDO("mysql:host=localhost;dbname=bruteforce", "bruteforce", "password");
    $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    $query = "SELECT firstName as First, lastName as Last, Score FROM Players JOIN Scores";
    
    print "<table border='2'>\n";
    $result = $connection->query($query);
    $row = $result->fetch(PDO::FETCH_ASSOC);

    print "<tr>\n";
    foreach($row as $field => $value){
        print "<th>$field</th>\n";
    }
    print "</tr>\n";

    $query = "SELECT firstName, lastName, Scores.Score
              FROM Players join Player_Scores_Linking join Scores
              WHERE Players.idPlayers = Player_Scores_Linking.idPlayers
              AND Scores.idScores = Player_Scores_Linking.idScores
              ORDER BY Score DESC
              LIMIT 10;";

    // print $query;
    $data = $connection->query($query);
    $data->setFetchMode(PDO::FETCH_ASSOC);
    foreach ($data as $row) {
        print "<tr>\n";
        foreach ($row as $name => $value) {
            print "<td>$value</td>\n";
        }
        print "</tr>\n";
    }
    print "</table>\n";
    
  } catch (Exception $e) {
      echo 'ERROR: '.$ex->getMessage();
  }
?>
