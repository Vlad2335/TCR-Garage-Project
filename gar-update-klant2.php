<!doctype html>
<html> 
<head>
<title> gar-update-klant2.php</title>
</head>
<body>
<h1>garage update klant 2</h1>
<p> dit formulier wordt gebruikt om klant gegevens te wijzigen in de tabel van de database garage .</p>
<?php
$klanten = $_POST["verzenden"];

require_once "gar-connect.php";
$query = $conn->prepare("
select ID,
       voornaam,
	   acternaam,
	   postcode,
	   klantplaats,
	   email,
	   telefoon,
	   autoid
	   from klanten 
	   where ID = :IDS
	   ");
	   $klanten->execute(["id" => $id]);
	   
	   echo "<form action='gar-update-klant3.php' method='post'>";
	   foreach($klanten as $klant)
	   {
	   echo " ID:" . $klant["Id"];
	   echo " <input type='hidden' name='ID'";
	   echo "value=' ". $klant["ID"] . "'><br/>";
	     
		 echo "voornaam: <input type='text'";
		 echo "name ='voornaam'"; 
		 echo "value = '".$klant["voornaam"]."'";
		 echo "> <br/>";
		
		
		echo "achternaam: <input type='text'";
		 echo "name ='achternaam'"; 
		 echo "value = '".$klant["achternaam"]."'";
		 echo "> <br/>";
		
		
		 echo "postcode: <input type='text'";
		 echo "name ='postcode'"; 
		 echo "value = '".$klant["postcode"]."'";
		 echo "> <br/>";
		
		
		
		 echo "email: <input type='text'";
		 echo "name ='email'"; 
		 echo "value = '".$klant["email"]."'";
		 echo "> <br/>";
		 
		 echo "Tel. Nummer: <input type='text'";
		 echo "name ='Tel. Nummer'"; 
		 echo "value = '".$klant["telefoon"]."'";
		 echo "> <br/>";
		 
		 
		 echo "Auto ID: <input type='text'";
		 echo "name ='Auto ID'"; 
		 echo "value = '".$klant["autoid"]."'";
		 echo "> <br/>";
		 
		 
		}
	   
	   echo "<input type='submit' value='verzenden'>";
	   echo "</form>";
	   ?>
	   </body>
	   </html>
	  