<?php

try {



$servernaam = "localhost";
$gebruikersnaam = "root";
$password = "";
$dbnaam = "vuurwerkshop"; 

$connection = new PDO("mysql:host=$servernaam;dbname=$dbnaam", $gebruikersnaam, $password);
 //echo "ok";
}
catch(PDOException $e)
{
  echo "Connection failed; ". $e->getMessage();
}

?>