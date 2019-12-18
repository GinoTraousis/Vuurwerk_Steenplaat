<?php 

// Gemaakt door Yusuf Ozmen 1G

$servernaam = "localhost";
$gebruikersnaam = "root";
$password = "";
$dbnaam = "vuurwerkshop";

$conn1 = new PDO("mysql:host=$servernaam;dbname=$dbnaam", $gebruikersnaam, $password);


// Hier onder zie je dat hij de producten van de database importeert
$sqlknal = "SELECT * FROM `producten` WHERE Categorie = 'Knalvuurwerk'";
$resultknal = $conn1->query($sqlknal);
// En hier heb ik een functie gebruikt zodat ik het in een keer kan oproepen wanneer ik het ga gebruiken
function ShowProductenKnal($sqlknal, $resultknal){
  while($row = $resultknal->fetch()){
    echo "<div class='vuurwerk knal'>";
    echo "<img src=" .$row['URL_Afbeelding'] ." alt='Knal Product' style='width:100%;'>";
    echo "<div class='beschrijving'>";
    echo "<h4><b>" .$row['Naam'] ."</b></h4>";
    echo "<p>Knalvuurwerk</p><b>" .$row['Prijs'] . "</b><br>";
    echo "<button>Bestellen</button>";
    echo "</div>";
    echo "</div>";
  }
}

// En hier importeert hij weer uit database maar dit keer voor siervuurwerk
$sqlsier = "SELECT * FROM `producten` WHERE Categorie = 'Siervuurwerk'";
$resultsier = $conn1->query($sqlsier);

function ShowProductenSier($sqlsier, $resultsier){
  while($row = $resultsier->fetch()){
    echo "<div class='vuurwerk sier'>";
    echo "<img src=" .$row['URL_Afbeelding'] ." alt='Sier Product' style='width:100%;'>";
    echo "<div class='beschrijving'>";
    echo "<h4><b>" .$row['Naam'] ."</b></h4>";
    echo "<p>Siervuurwerk</p><b>" .$row['Prijs'] . "</b><br>";
    echo "<button>Bestellen</button>";
    echo "</div>";
    echo "</div>";
  }
}

ShowProductenSier($sqlsier, $resultsier);

?>