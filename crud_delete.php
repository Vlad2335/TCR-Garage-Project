<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<style type="text/css">
  a {
    color: black;
    font-size: 30px;
    text-decoration: none;
    font-family: Calibri;
    margin-bottom: 5px;
  }

  body {
    color: black;
    font-size: 15px;
    font-family: Calibri;
  }

  a:hover {
    background-color: #e55039;
  }

  .menu {
    border: 4px solid black;
    border-radius: 6px;
    background-color: #f7f1e3;
    margin-left: 5px;
    width: 40%;
  }

  .text {
    margin-left: 10px;
  }
</style>
<?php
 try {
  $db = new PDO("mysql:host=localhost;dbname=ertan_db", "root", "");
  if(isset($_GET['id'])) {
  $query = $db->prepare("DELETE FROM klanten WHERE ID = :id");
  $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

  $query->bindParam("id", $id);
  if($query->execute()) {
    echo "Gegevens zijn verwijderd!";
  } else {
    echo "Er is iets mis gegeaan met het verwijderen van gegevens!";
  }
  echo "<br>";
}
} catch(PDOException $e) {
  die("Error!: " . $e->getMessage());
}
      echo "<section class='menu'>";
      echo "<h1 class='text'>Klik op een van de gegevens om ze te verwijderen:</h1>";
  $query = $db->prepare("SELECT * FROM klanten");
  $query->execute();
  $result = $query->fetchAll(PDO::FETCH_ASSOC);
  echo "<div class='text'>";
  foreach($result as &$data) {
    echo "<a href='crud_delete.php?id=".$data['ID']."'>";
      echo "ID - " . $data["ID"] . " " . $data["voornaam"] . " " . $data["achternaam"] . "  <i class='material-icons'>&#xe872;</i>";
    echo "</a>";
    echo "<br>";
  }
    echo "</div>";
    echo "</section>";
?>
</body>
</html>
