<?php
include ("\wamp64\www\TP1WEB2\Controleur\index.php");
$tableauVoitures = array();

$marque =  $_GET['marque'];
$modele = $_GET['modele'];





?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Concessionnaire Sam et Tom</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">

    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
    
</head>

 <!--------------- Barre de navigation ------------------>
 <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <img src="..\Vue\Dealer-Car.jpg" width="200" height="120" class="d-inline-block align-top" alt="car-brand">
      </a>
    </nav> 
    <h1>Sélection d'un véhicule parmis notre gamme</h1><br>

<body>
<form name="form" method="POST">
<?php
$imageDuModele = afficherImageDuModele($marque, $modele);
print_r($imageDuModele); 
echo "<a href='auto.jpg'> <img src='miniAuto.jpg'> </a>"; 
echo "<br><br>";
$description = recupererDescriptionDuModele($modele,$marque);
echo $description;
echo "<br><br>";
$prix = recupererPrixDuModele($modele,$marque);
echo "<a href='page_financement.php?prix=$prix'> $prix </a>";

?>
</form>
</body>
