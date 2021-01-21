<!doctype html>
<html lang="nl">
<head>
<title> gar-update-klant3.php</title>
</head>
<body>
<h1> garage update klant 3 </h1>
<P> klant gegevens wijzigen in de tabel klant database garage.</p>
<?php
$klantid   = $_POST["klantidvak"];
$klantvoornaam = $_POST["klantvoornaamvak"];
$klantachternaam = $_POST["klantachternaamvak"];
$klantadres = $_POST["klantadresvak"];
$klantemail = $_POST["klantemailvak"];
$klanttelefoonnr = $_POST["klanttelefoonnrvak"];
$klantautoid = $_POST["klantautoidvak"];

require_once "gar-connect.php";

$query  = $conn->prepare
("
  update klant set klantnaam      =  :klantnaam,
                   klantadres     = :klantadres,
				   klantpostcode  = :klantpostcode,
					klantplaats   = :klantplaats,
					klantemail  = :klantemail,
					klanttelefoonnr   = :klanttelefoonnr,
					klantautoid  = :klantautoid,
					where klantid  = : klantid 
					");
					
$query->execute
([
"klantid" => $klantid,
"klantvoornaam" => $klantvoornaam,
"klantachternaam" => $klantachternaam,
"klantadres" => $klantadres,
"klantemail"  => $klantemail,
"klanttelefoonnr"  => $klanttelefoonnr,
"klantautoid"  => $klantautoid,
]);

echo "De klant is gewijzigd. <br />";
echo "<a href='gar-menu.php'> terug naar menu </a>";


<button onclick="document.getElementById('id01').style.display='block'">Open Modal</button>
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container">
      <h1>Delete Account</h1>
      <p>Are you sure you want to delete your account?</p>

      <div class="clearfix">
        <button type="button" class="cancelbtn">Cancel</button>
        <button type="button" class="deletebtn">Delete</button>
      </div>
    </div>
  </form>
</div>
        
?>
</body>
</html>

















































