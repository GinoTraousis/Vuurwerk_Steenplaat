
<!DOCTYPE html>
<html>
<head>
<!--Gemaakt door Gino Traousis-->
<title>Ginos Vuurwerkshop</title>

<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="SteenplaatStylee.css">
<link rel="icon" href="https://t.jwwb.nl/7lDzxoft8Bm_YOEczSgWTXJ7xzM=/688x0/filters:quality(95)/b.jwwb.nl%2Funsplash%2F51Jgx-F0oLM.jpg" type="image/x-icon" />
<link rel="shortcut icon" href="https://t.jwwb.nl/7lDzxoft8Bm_YOEczSgWTXJ7xzM=/688x0/filters:quality(95)/b.jwwb.nl%2Funsplash%2F51Jgx-F0oLM.jpg" type="image/x-icon" />

</head>


<body>
<ul>
  <li><a class="home" href="Steenplaat.php">Home</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Categorieën</a>
    <div class="dropdown-content">

    <?php
     include'ProjectConnect.php';

    $cat = "";
    if (isset($_GET['cat'])){
      $cat = $_GET['cat'];
    }
   // echo "test" . $cat;
   ?>

    <a href="Steenplaat.php">All</a>
      <a href="Steenplaat.php?cat=Knalvuurwerk">Knalvuurwerk</a>
      <a href="Steenplaat.php?cat=Siervuurwerk">Siervuurwerk</a>

  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">Over</a></li>
 

   <input style="float:right" id="zoekbalk" type="text" name="zoekbalk" value="" placeholder="Zoeken..." class="input-text" maxlength="200" role="combobox" aria-haspopup="false" aria-autocomplete="both" autocomplete="off">

   
    </form>
 </ul>


<br>

<div class="Producten">


<?php


ToonProducten($cat);

//Knalvuurwerkproducten($databaseknal, $knalvuurwerk);
//ShowProductenSier($databasesier, $siervuurwerk);
?>

</div>




</body>



</html>