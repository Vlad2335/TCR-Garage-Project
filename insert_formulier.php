<?php

try {
  $db = new PDO("mysql:host=localhost;dbname=ertan_db", "root", "");
  if(isset($_POST['verzenden'])) {
    $id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);
    $voornaam = filter_input(INPUT_POST, "voornaam", FILTER_SANITIZE_STRING);
    $achternaam = filter_input(INPUT_POST, "achternaam", FILTER_SANITIZE_STRING);
    $adres = filter_input(INPUT_POST, "adres", FILTER_SANITIZE_STRING);
    $telefoon = filter_input(INPUT_POST, "telefoon", FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);
    $autoid = filter_input(INPUT_POST, "autoid", FILTER_SANITIZE_NUMBER_INT);

//    $query = $db->prepare("INSERT INTO `klanten`(`ID`, `voornaam`, `achternaam`, `adres`, `telefoon`, `email`, `autoid`) VALUES (':id', ':voornaam', ':achternaam', ':adres', ':telefoon', ':email' ,':autoid')");
    $query = $db->prepare("INSERT INTO klanten(`ID`, `voornaam`, `achternaam`, `adres`, `telefoon`, `email`, `autoid`) VALUES (:id, :voornaam, :achternaam, :adres, :telefoon, :email, :autoid)");
    $query->bindParam("id", $id);
    $query->bindParam("voornaam", $voornaam);
    $query->bindParam("achternaam", $achternaam);
    $query->bindParam("adres", $adres);
    $query->bindParam("telefoon", $telefoon);
    $query->bindParam("email", $email);
    $query->bindParam("autoid", $autoid);
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
  background-color: #f7f1e3;
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
<!-- Notitie voor mezelf: Ik wil hier een H1 element. Maak de ontwerp wat mooier/proffesioneler. !-->
<form method="post" action="">
  <h1>Registratie formulier</h1>
  <h2>Voer zo veel mogelijk gegevens in. Let er op dat de nieuwe ID nummer niet overeen mag komen met andere ID nummers dat al geregistreerd zijn.</h2>
  <label>ID nummer:</label>
  <input type="text" name="id"><br>

  <label>Voornaam:</label>
  <input type="text" name="voornaam"><br>

  <label>Achternaam:</label>
  <input type="text" name="achternaam"><br>

  <label>Postcode:</label>
  <input type="text" name="adres"><br>

  <label>Tel. nummer:</label>
  <input type="text" name="telefoon"><br>

  <label>E-mail adres:</label>
  <input type="text" name="email"><br>

  <label>Auto ID (Zelfde als de ID):</label>
  <input type="text" name="autoid"><br>

  <input type="submit" name="verzenden" value="Aanmaken">
</form>
