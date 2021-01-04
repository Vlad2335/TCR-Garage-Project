<?php

try {
  $db = new PDO("mysql:host=localhost;dbname=ertan_db", "root", "");
  $query = $db->prepare("SELECT * FROM klanten");
  $query->execute();
  $result = $query->fetchAll(PDO::FETCH_ASSOC);

/*  foreach ($result as &$data) {
      echo "<a href='update_scherm.php?id=".$data['ID']."'>";
        echo $data["voornaam"] . " " . $data["achternaam"] . " " . $data["adres"] . " " . $data["telefoon"];
    echo "</a>";
    echo "</br>";
    }
*/
    foreach ($result as &$data) { //Tijdelijke instelling
        echo "<a href='updateschermtesting.php?id=".$data['ID']."'>";
          echo $data["voornaam"] . " " . $data["achternaam"] . " " . $data["adres"] . " " . $data["telefoon"];
      echo "</a>";
      echo "</br>";
      }
  } catch(PDOException $e) {
    die("Error!: " . $e->getMessage());
}

?>
