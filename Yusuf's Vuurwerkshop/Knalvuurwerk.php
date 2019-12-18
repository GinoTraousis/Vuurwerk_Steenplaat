<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="CSS Hoofdpagina Yusuf Ozmen's Vuurwerkshop.css">
<link rel="icon" href="https://t.jwwb.nl/7lDzxoft8Bm_YOEczSgWTXJ7xzM=/688x0/filters:quality(95)/b.jwwb.nl%2Funsplash%2F51Jgx-F0oLM.jpg" type="image/x-icon" />
<link rel="shortcut icon" href="https://t.jwwb.nl/7lDzxoft8Bm_YOEczSgWTXJ7xzM=/688x0/filters:quality(95)/b.jwwb.nl%2Funsplash%2F51Jgx-F0oLM.jpg" type="image/x-icon" />
<title>Yusuf's Vuurwerkshop</title>
</head>
<body>
<ul>
  <li><a class="home" href="Yusuf Ozmen's Vuurwerkshop.php">Home</a></li>
  <li class="dropdown">
   <a class="dropbtn">Assortiment</a>
   <div class="dropdown-content">
    <a href="Siervuurwerk.php">Siervuurwerk</a>
    <a href="Knalvuurwerk.php">Knalvuurwerk</a>
    <a href="Yusuf Ozmen's Vuurwerkshop.php">Complete Assortiment</a>
    </form>
   
   </div>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
  <img src="ShoppingCart.png" style="float:right" alt="Winkelwagen" height="52" width="66">
   <input style="float:right" id="zoekbalk" type="text" name="zoekbalk" value="" placeholder="Zoeken..." class="input-text" maxlength="200" role="combobox" aria-haspopup="false" aria-autocomplete="both" autocomplete="off">
          </form>
</ul>
<div class="Producten">
<?php include'PDOvanVuurwerkshopKnalvuurwerk.php';?>
</div>
</body>
</html>