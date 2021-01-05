<?php

try {
  $db = new PDO("mysql:host=localhost;dbname=ertan_db", "root", "");
  if(isset($_POST['verzenden'])) {
    $autoid = filter_input(INPUT_POST, "AutoID", FILTER_SANITIZE_NUMBER_INT);
    $klantid = filter_input(INPUT_POST, "KlantID", FILTER_SANITIZE_STRING);
    $kenteken = filter_input(INPUT_POST, "Kenteken", FILTER_SANITIZE_STRING);
    $merk = filter_input(INPUT_POST, "Merk", FILTER_SANITIZE_STRING);
    $model = filter_input(INPUT_POST, "Model", FILTER_SANITIZE_STRING);
    $bouwjaar = filter_input(INPUT_POST, "Bouwjaar", FILTER_SANITIZE_STRING);
    $brandstof = filter_input(INPUT_POST, "Brandstof", FILTER_SANITIZE_NUMBER_INT);

//    $query = $db->prepare("INSERT INTO `klanten`(`ID`, `voornaam`, `achternaam`, `adres`, `telefoon`, `email`, `autoid`) VALUES (':id', ':voornaam', ':achternaam', ':adres', ':telefoon', ':email' ,':autoid')");
    $query = $db->prepare("INSERT INTO crud_auto(`AutoID`, `KlantID`, `Kenteken`, `Merk`, `Model`, `Bouwjaar`, `Brandstof`) VALUES (:autoid, :klantid, :kenteken, :merk, :model, :bouwjaar, :brandstof)");
    $query->bindParam("autoid", $autoid);
    $query->bindParam("klantid", $klantid);
    $query->bindParam("kenteken", $kenteken);
    $query->bindParam("merk", $merk);
    $query->bindParam("model", $model);
    $query->bindParam("bouwjaar", $bouwjaar);
    $query->bindParam("brandstof", $brandstof);
    if($query->execute()) {
      echo "Gegevens zijn verstuurd";
    } else {
      echo "Er is een fout opgetreden. Controleer of de ID nummer al bestaat.";
    }

    echo "<br>";
  }
} catch(PDOException $e) {
  die("Error!: " . $e->getMessage());
}

?>

<style type="text/css">

input, label {
  font-size: 25px;
  font-family: Calibri;
  margin-left: 20px;
  margin-top: 20px;
  margin-bottom: 20px;
/*  display: block; */
}

  h1 {
    font-size: 35px;
    font-family: Calibri;
    margin-left: 20px;
  }

  h2 {
    font-size: 20px;
    font-family: Calibri;
    margin-left: 20px;
    color: grey;
  }

input:focus {
  background-color: #ff6b6b;
}

input[type=text]:hover {
  background-color: #ff6b6b;
}

input[type=text] {
  border-collapse: collapse;
}

form {
  border: solid 3px black;
  border-radius: 8px;
  background-color: #ced6e0;
  margin-left: 5px;
  width: 40%;
}

  input {
    border: solid black 3px;
    border-radius: 7px;
  }

  input[type=submit] {
    border: solid black 3px;
    border-radius: 7px;
    background-color: #c7ecee;

  }

  input[type=submit]:hover {
    background-color: #95afc0;
  }


</style>
<br>
<form method="post" action="">
  <h1>Auto Registratie</h1>
  <h2>Voer zo veel mogelijk gegevens in. Let er op dat de nieuwe Auto ID nummer niet overeen mag komen met andere ID nummers dat al geregistreerd zijn.</h2>
  <label>Auto ID:</label>
  <input type="text" name="AutoID"><br>

  <label>Klant ID:</label>
  <input type="text" name="KlantID"><br>

  <label>Kenteken</label>
  <input type="text" name="Kenteken"><br>

  <label>Merk:</label>
  <input type="text" name="Merk"><br>

  <label>Model:</label>
  <input type="text" name="Model"><br>

  <label>Bouwjaar:</label>
  <input type="text" name="Bouwjaar"><br>

  <label>Brandstof:</label>
  <input type="text" name="Brandstof"><br>

  <input type="submit" name="verzenden" value="Aanmaken">
</form>
