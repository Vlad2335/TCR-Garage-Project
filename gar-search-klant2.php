<!doctype html> 
<html>
<head> 
<title>gar-search-klant2.php</title>
<head>
<body>
<h1> garage zoek op klantid 2 </h1>
<p> op klantid gegevens zoeken uit de tabel klanten van de database garage 
</p>
<?php

$klantid = $_POST["klantidvak"];

require_once "gar-connect.php";

$klanten = $conn->prepare("
select  
ID,
voornaam,
achternaam,
adres,
email,
telefoon,
autoid
from klanten 
where id = :id
");


$klanten->execute(["id" => $klantid]);
echo "<table>";
foreach($klanten as $klant)
{
echo "<tr>";
echo "<td>" . $klant["ID"] . "</td>";
echo "<td>" . $klant["voornaam"] . "</td>";
echo "<td>" . $klant["achternaam"] . "</td>";
echo "<td>" . $klant["adres"] . "</td>";
echo "<td>" . $klant["email"] . "</td>";
echo "<td>" . $klant["telefoon"] . "</td>";
echo "<td>" . $klant["autoid"] . "</td>";
echo "</tr>";
}
echo  "</table>";
echo "<a href='gar-search-klant1.php'> terug menu</a>";
?>
</body>
</html> 














