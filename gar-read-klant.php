<?php 
//klantgegevens uit het formulier halen 
$klantid = NULL; 
$klantnaam            = $_POST["klantnaamvak"];
$klantadres           = $_POST["klantadresvak"];
$klantpostcode        = $_POST["klantpostcodevak"];
$klantplaast          = $_POST["klantplaatsvak"];

 require_once "gar-connect.php";

$sql = $conn->prepare("
                  insert into klant values
				  (
				      :klantid, : klantnaam, : klantadres,
					  : klantpostcode, :klantplaatsvak
			
			      )
				  ")
				  
				  
// $sql->bindParam(":klantid",    $klantid);
// $sql->bindParam(":klantnaam",    $klantnaam);
// $sql->bindParam(":klantadres",    $klantadres);
// $sql->bindParam(":klantpostcode",    $klantpostcode);
// $sql->bindParam(":klantplaats",    $klantplaats);


//sql-> execute();


?>













































