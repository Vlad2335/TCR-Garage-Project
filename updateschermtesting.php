<?php
// THIS IS THE TESTING FILE
try {
  $db = new PDO("mysql:host=localhost;dbname=ertan_db", "root", "");
  if(isset($_POST['verzenden'])) {
    $id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_STRING);
    $voornaam = filter_input(INPUT_POST, "voornaam", FILTER_SANITIZE_STRING);
    $achternaam = filter_input(INPUT_POST, "achternaam", FILTER_SANITIZE_STRING);
    $adres = filter_input(INPUT_POST, "adres", FILTER_SANITIZE_STRING);
    $telefoon = filter_input(INPUT_POST, "telefoon", FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);
    $autoid = filter_input(INPUT_POST, "autoid", FILTER_SANITIZE_STRING);

//    $query = $db->prepare("UPDATE `klanten` SET ID = :id, voornaam = :voornaam, achternaam = :achternaam, adres = :adres, telefoon = :telefoon, WHERE ID = :id");
      $query = $db->prepare("UPDATE `klanten` SET `ID=:id`, `voornaam=:voornaam`, `achternaam=:achternaam`, `adres=:adres`, `telefoon=:telefoon`, `email=:email`, `autoid=:autoid`, WHERE ID=:id"); // Alleen foutmelding van line 25
//    $query = $db->prepare("UPDATE `klanten` SET `ID`= :id,`voornaam`= :voornaam,`achternaam`= :achternaam,`adres`= :adres,`telefoon`= :telefoon,`email`= :email,`autoid`= :autoid WHERE ID = :id");
//    $query->bindParam("id", $id);
//    $query->bindParam("voornaam", $voornaam);
//    $query->bindParam("achternaam", $achternaam);
//    $query->bindParam("adres", $adres);
//    $query->bindParam("telefoon", $telefoon);
//    $query->bindParam("email", $email);
//    $query->bindParam("autoid", $autoid);
//    $query->bindParam("id", $_GET['ID']);
//    $query->bindParam("id", $id);
    $query->bindParam("voornaam", "jan");
    $query->bindParam("achternaam", 'Joop');
    $query->bindParam("adres", 'adresje');
    $query->bindParam("telefoon", '0654101010');
    $query->bindParam("email", 'emailpje');
    $query->bindParam("autoid", '13');
    $query->bindParam("id", '14');
    if($query->execute()) {
      echo "Gegevens zijn verwerkt.";
    } else {
      echo "Er is een fout opgetreden.";
    }
      echo "<br>";
    } else {
      $query = $db->prepare("SELECT * FROM klanten WHERE ID = :id");
      $query->bindParam("id", $_GET['id']);
      $query->execute();
      $result = $query->fetchAll(PDO::FETCH_ASSOC);

      foreach($result as &$data) {
        $voornaam = $data["voornaam"];
        $achternaam = $data["achternaam"];
        $adres = $data["adres"];
        $telefoon = $data["telefoon"];
        $email = $data["email"];
        $autoid = $data["autoid"];
      }
    }
  }   catch(PDOException $e) {
      die("Error!: " . $e->getMessage());
  }

?>

<form method="post" action="">
  <h1 style="size:30px;color:red;font-family:Calibri;">NOTICE!! - This is an experimentatation page. Only use the original file, this is for testing.</h1>
  <label>Voornaam</label>
  <input type="text" name="voornaam" value="<?php echo $voornaam; ?>"><br>

  <label>Achternaam</label>
  <input type="text" name="achternaam" value="<?php echo $achternaam; ?>"><br>

  <label>Adres</label>
  <input type="text" name="adres" value="<?php echo $adres; ?>"><br>

  <label>Tel. Nummer</label>
  <input type="text" name="telefoon" value="<?php echo $telefoon; ?>"><br>

  <input type="submit" name="verzenden" value="Opslaan">
</form>
