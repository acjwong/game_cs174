
<?php
class Players {
  //private $id;
  private $first;
  private $last;
  private $Gamer_Tag;
  private $Score;
  //private $email;

  public function getId() {return $this->id;}
  public function getFirst() {return $this->first;}
  public function getLast() {return $this->last;}
  public function getGamerTag() {return $this->Gamer_Tag;}
  public function getScore() {return $this->Score;}
  public function getEmail() {return $this->email;}
}
function run() {
  try {
    //TODO: Move database credentials to a seperate file and include that file here
    //include (".:db_credentials.php");

    //Connect to the database
    $gamertag = filter_input(INPUT_GET, "gamertag");
    $connection = new PDO("mysql:host=localhost;dbname=bruteforce", "bruteforce", "password");
    $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    $query = "SELECT firstName AS first, lastName AS last, gamerTag AS 'Gamer_Tag', Score FROM Players JOIN Scores";
    
    print "<table border='2'>\n";
    $result = $connection->query($query);
    $row = $result->fetch(PDO::FETCH_ASSOC);

    print "<tr>\n";
    foreach($row as $field => $value){
        print "<th>$field</th>\n";
    }
    print "</tr>\n";
    if($gamertag != "")
      executeUserHighScoresQuery($gamertag, $connection);
    else
      executeHighScoresQuery($connection);

    
  } catch (Exception $e) {
      echo 'ERROR: '.$e->getMessage();
  }
}

function executeUserHighScoresQuery($gamertag, $connection) {
  $query = "SELECT firstName AS first, lastName AS last, gamerTag AS 'Gamer_Tag', Scores.Score
              FROM Players join Player_Scores_Linking join Scores
              WHERE Players.idPlayers = Player_Scores_Linking.idPlayers
              AND Players.gamerTag = :gamertag
              AND Scores.idScores = Player_Scores_Linking.idScores
              ORDER BY Score DESC
              LIMIT 10;";

    $ps = $connection->prepare($query);
    $ps->bindParam(':gamertag', $gamertag);
    $ps->execute();
    $ps->setFetchMode(PDO::FETCH_CLASS, "Players");
    
    //$data = $connection->query($query);
    //$data->setFetchMode(PDO::FETCH_ASSOC);
    //$data = $ps->fetchAll(PDO::FETCH_ASSOC);
   // var_dump($ps->fetch());
    while ($players = $ps->fetch()) { 
      print "        <tr>\n";
      print "            <td>" . $players->getFirst()     . "</td>\n";
      print "            <td>" . $players->getLast()     . "</td>\n";
      print "            <td>" . $players->getGamerTag()     . "</td>\n";
      print "            <td>" . $players->getScore()     . "</td>\n";
    }
    print "        </tr>\n";

    print "    </table>\n";   
    /*foreach ($data as $row) {
        print "<tr>\n";
        foreach ($row as $name => $value) {
            print "<td>$value</td>\n";
        }
        print "</tr>\n";
    }
    print "</table>\n";*/
}

function executeHighScoresQuery($connection) {
  $query = "SELECT firstName AS first, lastName AS last, gamerTag AS 'Gamer_Tag', Scores.Score
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
