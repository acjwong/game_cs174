<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>High Scores</title>
</head>
  <body>
    <p>
      <?php
        try {
          //Connect to the dayabase
          $connection = new PDO("mysql:host=localhost;dbname=homework_one",
              "bruteforce", "password");
          $connection->setAttribute(PDO::ATTR_ERRMODE,
                                    PDO::ERRMODE_EXCEPTION);
          $query = "SELECT firstName, lastName, age, sex FROM People";
          

          print "<table border='2'>\n";
          $result = $connection->query($query);
          $row = $result->fetch(PDO::FETCH_ASSOC);

          print "<tr>\n";
          foreach($row as $field => $value){
              print "<th>$field</th>\n";
          }
          print "</tr>\n";

          $query = "SELECT * FROM People ";

          print $query;
          $data = $connection->query($query);
          $data->setFetchMode(PDO::FETCH_ASSOC);
          foreach ($data as $row) {
              print "<tr>\n";
              foreach ($row as $name => $value) {
                  print "<td>$value</dt>\n";
              }
              print "</tr>\n";
          }
          print "</table>\n";
        } catch (Exception $e) {
            echo 'ERROR: '.$ex->getMessage();
        }
      ?>
    </p>
  </body>
</html>