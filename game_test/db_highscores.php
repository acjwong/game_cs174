
<?php
function run() {
  try {
    //TODO: Move database credentials to a seperate file and include that file here
    //include (".:db_credentials.php");

    //Connect to the database
    $gamertag = filter_input(INPUT_GET, "gamertag");
    $connection = new PDO("mysql:host=localhost;dbname=bruteforce", "bruteforce", "password");
    $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    $query = "SELECT gamerTag AS 'Gamer Tag', Score FROM Players JOIN Scores";
    
    print "<table border='2'>\n";
    $result = $connection->query($query);
    $row = $result->fetch(PDO::FETCH_ASSOC);

    print "<tr>\n";
    foreach($row as $field => $value){
        print "<th>$field</th>\n";
    }
    print "</tr>\n";
    if($first != "" && $last != "")
      executeUserHighScoresQuery($first, $last, $connection);
    else
      executeHighScoresQuery($connection);

    
  } catch (Exception $e) {
      echo 'ERROR: '.$e->getMessage();
  }
}

function executeUserHighScoresQuery($first, $last, $connection) {
  $query = "SELECT gamerTag AS 'Gamer Tag', Scores.Score
              FROM Players join Player_Scores_Linking join Scores
              WHERE Players.idPlayers = Player_Scores_Linking.idPlayers
              AND Players.gamerTag = ':gamertag' 
              AND Scores.idScores = Player_Scores_Linking.idScores
              ORDER BY Score DESC
              LIMIT 10;";

    $ps = $connection->prepare($query);
    $ps->execute(array(':first' => $first, ':last' => $last));

    print $query;
    //$data = $connection->query($query);
    //$data->setFetchMode(PDO::FETCH_ASSOC);
    $data = $ps->fetchAll(PDO::FETCH_ASSOC);
    foreach ($data as $row) {
        print "<tr>\n";
        foreach ($row as $name => $value) {
            print "<td>$value</td>\n";
        }
        print "</tr>\n";
    }
    print "</table>\n";
}

function executeHighScoresQuery($connection) {
  $query = "SELECT gamerTag AS 'Gamer Tag', Scores.Score
              FROM Players join Player_Scores_Linking join Scores
              WHERE Players.idPlayers = Player_Scores_Linking.idPlayers
              AND Scores.idScores = Player_Scores_Linking.idScores
              ORDER BY Score DESC
              LIMIT 10;";

    $ps = $connection->prepare($query);
    $ps->execute();
    //print $query;
    //$data = $connection->query($query);
    //$data->setFetchMode(PDO::FETCH_ASSOC);
    $data = $ps->fetchAll(PDO::FETCH_ASSOC);
    foreach ($data as $row) {
        print "<tr>\n";
        foreach ($row as $name => $value) {
            print "<td>$value</td>\n";
        }
        print "</tr>\n";
    }
    print "</table>\n";
}

run();
?>
