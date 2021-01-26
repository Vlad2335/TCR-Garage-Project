<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Controle bij verwijderen</title>
</head>
<body>
<h1>Controle bij verwijderen</h1>
<p>Controle bij verwijderen</p>
<?Php


$klantid = $_POST ["klantidvak"];
//klant gegevens uit de tabel halen
require_once "gar-connect-klant.php";
$klanten1 = $conn->prepare("
select klantid,
klanten.voornaam,
klanten.achternaam,
klanten.adres,
klanten.telefoon,
klanten.autoid
from klant, crud_auto
where klanten.ID = :ID

and crud_auto.KlantID = klanten.KlantID");

$klanten1->execute(["ID" => $klantid]);

$count1 = $klanten1->rowCount();
$klanten2 = $conn->prepare("
select klanten.klantid,
klanten.klantnaam,
klanten.klantadres,
klanten.klantpostcode,
klanten.klantplaats
from klanten
where klanten.klantid = :klantid
");

$klanten2->execute(["klantid" => $klantid]);

$count2 = $klanten2->rowCount();

if($count2 == 1)
{
echo "<table>";
foreach($klanten2 as $klant)
{
echo "Klantnummer:" . $klant["Klanten"] . "</br>";
echo "Naam:" . $klant["voornaam"] . "</br>";
echo "Adres:" . $klant["achternaam"] . "</br>";
echo "Postcode:" . $klant["adres"] . "</br>";
echo "Telefoon:" . $klant["telefoon"] . "</br>";
echo "</br>";
}
echo "</table><br>";
}
if($count2 == 0) {
echo "Deze klant bestaat niet in de database! </br></br>";
echo "<a href='gar-menu.php'>Terug naar het menu. </a>";
}
elseif($count1 == 0)
{
echo "<form action='gar-delete-klant3.php' method='post'>";
// klantid mag niet meer gewijzijgd worden
echo "<input type='hidden' name='klantidvak' value=$klantid>";
// Waarde 0 doorgeven als er niet gecheckt wordt
echo "<intput type='hidden' name='verwijdervak' value='0'>";
echo "<input type='checkbox' name='verwijdervak' value='1'>";
echo "Verwijder deze klant. </br></br>";
echo "<input type='submit'>";
echo "</form>";
}
else
{



echo "Deze klant wordt niet verwijderd!</br></br>";
echo "<a href='gar-menu.php'>Terug. </a>";
}
?>
</body>
</html>
