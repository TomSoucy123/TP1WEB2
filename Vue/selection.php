<?php
/* include ('\wamp64\www\TP1WEB2\Modèle\voitures.php'); */
include ("\wamp64\www\TP1WEB2\Controleur\index.php");
echo  $_GET['marque'] . " de " .$_GET['modele'];
$marque =  $_GET['marque'];
$modele = $_GET['modele'];
$tableauVoitures = selectionTableau($marque);
print_r($tableauVoitures);


?>