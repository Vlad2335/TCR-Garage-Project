<style type="text/css">
  table {
    border-collapse: collapse;
    border: 1px solid black;
  }
  td {
    border: 3px solid black;
    font-size: 25px;
    width: 140px;
    text-align: center;
    font-family: calibri;
  }

  .boven {
    background-color: #0984e3;
  }

</style>

<?php

try {
  $db = new PDO("mysql:host=localhost;dbname=ertan_db", "root", "");

  $query = $db->prepare("SELECT * FROM gebruikers");
  $query->execute();
  $result = $query->fetchAll(PDO::FETCH_ASSOC);
  echo "<table>";
      echo '<tr class="boven">';
        echo "<td>UserID</td>";
        echo "<td>Voornaam</td>";
        echo "<td>Achternaam</td>";
        echo "<td>Tel. Nummer</td>";
        echo "<td>Postcode</td>";
        echo "<td>Adres</td>";
        echo "<td>KlantID</td>";
      echo "</tr>";
    foreach($result as &$data) {
      echo "<tr>";
        echo "<td>" . $data["UserID"] . "</td>";
        echo "<td>" . $data["gebruikersvoornaam"] . "</td>";
        echo "<td>" . $data["gebruikersachternaam"] . "</td>";
        echo "<td>" . $data["telefoon"] . "</td>";
        echo "<td>" . $data["gebruikerspostcode"] . "</td>";
        echo "<td>" . $data["gebruikersadres"] . "</td>";
        echo "<td>" . $data["KlantID"] . "</td>";
      echo "</tr>";
    }
  echo "</table>";
} catch(PDOException $e) {
  die("Error! " . $e->getMessage());
  }

?>
