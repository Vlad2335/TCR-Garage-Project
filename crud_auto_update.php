<?php

try {
  $db = new PDO("mysql:host=localhost;dbname=ertan_db", "root", "");
  $query = $db->prepare("SELECT * FROM crud_auto");
  $query->execute();
  $result = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result as &$data) {
        echo "<a href='crud_auto_update_paneel.php?id=".$data['AutoID']."'>";
          echo $data["AutoID"] . " " . $data["Kenteken"] . " " . $data["Merk"] . " " . $data["Model"];
      echo "</a>";
      echo "</br>";
      }
  } catch(PDOException $e) {
    die("Error!: " . $e->getMessage());
}

?>
