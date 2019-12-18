<?php 
$cat = "";
if (isset($_GET['cat'])){
  $cat = $_GET['cat'];
}
//echo "test" . $cat;


$servernaam = "localhost";
$gebruikersnaam = "root";
$password = "";
$dbnaam = "vuurwerkshop"; 

$connection = new PDO("mysql:host=$servernaam;dbname=$dbnaam", $gebruikersnaam, $password);

$databaseknal = "SELECT * FROM `producten` WHERE Categorie = 'Knalvuurwerk'";
$knalvuurwerk = $connection->query($databaseknal);

function ToonProducten($cat){
  //echo "testtttttt:" . $cat;
include'connect.php';
if (strlen($cat)> 0) {
  $sql =  "SELECT * FROM `producten` WHERE Categorie = '" . $cat . "'";
} else {
  $sql =  "SELECT * FROM `producten`";
}
//echo $sql;
  $knalvuurwerk = $connection->query($sql);
  //echo $knalvuurwerk;
  while($row = $knalvuurwerk->fetch()){
    echo "<div class='vuurwerk knal'>";
    echo "<img src=" .$row ['URL_Afbeelding'] ." alt='knalproduct' style='width:100%;'>";
    echo "<div class='beschrijving'";
    echo "<h3>" .$row['Naam'] ."  </h3><br><br>"; 
    echo  strval($row['Prijs']) . "<br><br>";
    echo "<button>Bestel Nu!</button>";
    echo "</div>";
    echo "</div>";
  }
}

$databasesier = "SELECT * FROM `producten` WHERE Categorie = 'Siervuurwerk'";
$siervuurwerk = $connection->query($databasesier);

function ShowProductenSier($databasesier, $siervuurwerk){
  while($row = $siervuurwerk->fetch()){
    echo "<div class='vuurwerk sier'>";
    echo "<img src=" .$row['URL_Afbeelding'] ." alt='sierproduct' style='width:100%;'>";
    echo "<div class='Beschrijving'";
    echo "<h3>" .$row['Naam'] ."</h3><br><br>";
    echo  strval($row['Prijs']) . "<br><br>";
    echo "<button>Bestel Nu!</button>";
    echo "</div>";
    echo "</div>";
  }
}

//Knalvuurwerkproducten($databaseknal, $knalvuurwerk);
//ShowProductenSier($databasesier, $siervuurwerk);
?>