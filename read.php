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

  $query = $db->prepare("SELECT * FROM klanten");
  $query->execute();
  $result = $query->fetchAll(PDO::FETCH_ASSOC);
  echo "<table>";
      echo '<tr class="boven">';
        echo "<td>ID Nummer</td>";
        echo "<td>Voornaam</td>";
        echo "<td>Achternaam</td>";
        echo "<td>Postcode</td>";
        echo "<td>Tel. Nummer</td>";
        echo "<td>E-mail</td>";
        echo "<td>Auto ID</td>";
      echo "</tr>";
    foreach($result as &$data) {
      echo "<tr>";
        echo "<td>" . $data["ID"] . "</td>";
        echo "<td>" . $data["voornaam"] . "</td>";
        echo "<td>" . $data["achternaam"] . "</td>";
        echo "<td>" . $data["adres"] . "</td>";
        echo "<td>" . $data["telefoon"] . "</td>";
        echo "<td>" . $data["email"] . "</td>";
        echo "<td>" . $data["autoid"] . "</td>";
      echo "</tr>";
    }
  echo "</table>";
} catch(PDOException $e) {
  die("Error! " . $e->getMessage());
  }


?>
