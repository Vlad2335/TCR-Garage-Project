<<style type="text/css">
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
 
  $query = $db->prepare("SELECT * FROM crud_auto");
  $query->execute();
  $result = $query->fetchAll(PDO::FETCH_ASSOC);
  echo "<table>";
      echo '<tr class="boven">';
        echo "<td>AutoID</td>";
        echo "<td>KlantID</td>";
        echo "<td>Kenteken</td>";
        echo "<td>Merk</td>";
        echo "<td>Model</td>";
        echo "<td>Bouwjaar</td>";
        echo "<td>AutoID</td>";
      echo "</tr>";
    foreach($result as &$data) {
      echo "<tr>";
        echo "<td>" . $data["autoID"] . "</td>";
        echo "<td>" . $data["klantID"] . "</td>";
        echo "<td>" . $data["kenteken"] . "</td>";
        echo "<td>" . $data["merk"] . "</td>";
        echo "<td>" . $data["model"] . "</td>";
        echo "<td>" . $data["bouwjaar"] . "</td>";
        echo "<td>" . $data["autoid"] . "</td>";
      echo "</tr>";
    }
  echo "</table>";
} catch(PDOException $e) {
  die("Error! " . $e->getMessage());
  }
 
?>
