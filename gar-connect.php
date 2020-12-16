

<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "garage";


$conn = new PDO ("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(mysqli_connect_errno()){
	die("Failed to connect with mySQL:".mysqli_connect_error());
}

?>