<?php

try {
  $db = new PDO("mysql:host=localhost;dbname=ertan_db", "root", "");
  $db->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);// VERBETERD

  if(isset($_POST['verzenden'])) {
		$id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_STRING);// VERBETERD
		$voornaam = filter_input(INPUT_POST, "voornaam", FILTER_SANITIZE_STRING);
		$achternaam = filter_input(INPUT_POST, "achternaam", FILTER_SANITIZE_STRING);
		$adres = filter_input(INPUT_POST, "adres", FILTER_SANITIZE_STRING);
		$telefoon = filter_input(INPUT_POST, "telefoon", FILTER_SANITIZE_STRING);
		$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);
		$autoid = filter_input(INPUT_POST, "autoid", FILTER_SANITIZE_STRING);

		echo "de id is " . $id." </br>";
		echo "de autoid is " . $autoid." </br>";
		echo "de voornaam is  ".$voornaam." </br>";
		echo "de telefoon is " . $telefoon." </br>";
    echo "De Email is " . $email." </br>";
		echo "de achternaam is  ".$achternaam." </br>";
	//    $query = $db->prepare("UPDATE `klanten` SET ID = :id, voornaam = :voornaam, achternaam = :achternaam, adres = :adres, telefoon = :telefoon, WHERE ID = :id");
		  $query = $db->prepare("UPDATE klanten SET voornaam=:voornaam, achternaam=:achternaam, adres=:adres, telefoon=:telefoon, email=:email, autoid=:autoid WHERE ID=:id");
	//    $query = $db->prepare("UPDATE `klanten` SET `ID`= :id,`voornaam`= :voornaam,`achternaam`= :achternaam,`adres`= :adres,`telefoon`= :telefoon,`email`= :email,`autoid`= :autoid WHERE ID = :id");
		$query->bindParam("id", $id);// VERBETERD
		$query->bindParam("voornaam", $voornaam);
		$query->bindParam("achternaam", $achternaam);
		$query->bindParam("adres", $adres);
		$query->bindParam("telefoon", $telefoon);
		$query->bindParam("email", $email);
		$query->bindParam("autoid", $autoid);


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
} catch(PDOException $e) {
	die("Error!: " . $e->getMessage());
}

?>

<form method="post" action="">

  <input type = "hidden" name = "id" value = "<?php echo $_GET['id']; ?>" ><br>

  <label>Voornaam</label>
  <input type="text" name="voornaam" value="<?php echo $voornaam; ?>"><br>

  <label>Achternaam</label>
  <input type="text" name="achternaam" value="<?php echo $achternaam; ?>"><br>

  <label>Adres</label>
  <input type="text" name="adres" value="<?php echo $adres; ?>"><br>

  <label>Tel. Nummer</label>
  <input type="text" name="telefoon" value="<?php echo $telefoon; ?>"><br>

    <label>Email</label>
  <input type="text" name="email" value="<?php echo $email; ?>"><br>

  <label>AutoID</label>
  <input type="text" name="autoid" value="<?php echo $autoid; ?>"><br>

  <input type="submit" name="verzenden" value="Opslaan">
</form>
