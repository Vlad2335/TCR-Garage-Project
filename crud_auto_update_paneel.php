<?php

try {
    $db = new PDO("mysql:host=localhost;dbname=ertan_db", "root", "");
    $db->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if(isset($_POST['verzenden'])) {
		    $autoid = filter_input(INPUT_POST, "autoid", FILTER_SANITIZE_STRING);
		    $klantid = filter_input(INPUT_POST, "klantid", FILTER_SANITIZE_STRING);
		    $kenteken = filter_input(INPUT_POST, "kenteken", FILTER_SANITIZE_STRING);
    		$merk = filter_input(INPUT_POST, "merk", FILTER_SANITIZE_STRING);
    		$model = filter_input(INPUT_POST, "model", FILTER_SANITIZE_STRING);
    		$bouwjaar = filter_input(INPUT_POST, "bouwjaar", FILTER_SANITIZE_STRING);
    		$brandstof = filter_input(INPUT_POST, "brandstof", FILTER_SANITIZE_STRING);

    		echo "de autoid is " . $autoid." </br>";
    		echo "de klantid is " . $klantid." </br>";
    		echo "de kenteken is  " . $kenteken." </br>";
    		echo "de merk is " . $merk." </br>";
        echo "De model is " . $model." </br>";
    		echo "de bouwjaar is  " . $bouwjaar." </br>";
	//    $query = $db->prepare("UPDATE `klanten` SET ID = :id, voornaam = :voornaam, achternaam = :achternaam, adres = :adres, telefoon = :telefoon, WHERE ID = :id");
		    $query = $db->prepare("UPDATE crud_auto SET autoid=:autoid, klantid=:klantid, kenteken=:kenteken, merk=:merk, model=:model, bouwjaar=:bouwjaar, brandstof=:brandstof WHERE AutoID=:autoid");
	//    $query = $db->prepare("UPDATE `klanten` SET `ID`= :id,`voornaam`= :voornaam,`achternaam`= :achternaam,`adres`= :adres,`telefoon`= :telefoon,`email`= :email,`autoid`= :autoid WHERE ID = :id");
    		$query->bindParam("autoid", $autoid);
    		$query->bindParam("klantid", $klantid);
    		$query->bindParam("kenteken", $kenteken);
    		$query->bindParam("merk", $merk);
    		$query->bindParam("model", $model);
    		$query->bindParam("bouwjaar", $bouwjaar);
    		$query->bindParam("brandstof", $brandstof);

		    if($query->execute()) {
			       echo "Gegevens zijn verwerkt.";
	      } else {
			       echo "Er is een fout opgetreden.";
		    }
	      echo "<br>";
    } else {
      echo $_GET['id'];
		  $query = $db->prepare("SELECT * FROM crud_auto WHERE AutoID = :id");
		  $query->bindParam("id", $_GET['autoid']);
		  $query->execute();
		  $result = $query->fetchAll(PDO::FETCH_ASSOC);

			foreach($result as &$data) {
				$autoid = $data["AutoID"];
				$kenteken = $data["Kenteken"];
				$merk = $data["Merk"];
				$model = $data["Model"];
				$bouwjaar = $data["Bouwjaar"];
				$brandstof = $data["Brandstof"];
			}
		}
} catch(PDOException $e) {
	die("Error!: " . $e->getMessage());
}

?>

<form method="post" action="">

  <input type = "hidden" name = "AutoID" value = "<?php echo $_GET['autoid']; ?>" ><br>

  <label>KlantID</label>
  <input type="text" name="KlantID" value="<?php echo $klantid; ?>"><br>

  <label>Merk</label>
  <input type="text" name="Merk" value="<?php echo $merk; ?>"><br>

  <label>Model</label>
  <input type="text" name="Model" value="<?php echo $model; ?>"><br>

  <label>Bouwjaar</label>
  <input type="text" name="Bouwjaar" value="<?php echo $bouwjaar; ?>"><br>

    <label>Brandstof</label>
  <input type="text" name="Brandstof" value="<?php echo $brandstof; ?>"><br>

  <input type="submit" name="verzenden" value="Opslaan">
</form>
